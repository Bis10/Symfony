<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Task;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

class CRUDListController extends AbstractController
{
    #[Route('/crud', name: 'app_crud_list')]
    public function index(EntityManagerInterface $em)
    {
        $tasks = $em->getRepository(Task::class)->findBy([], ['id'=>'DESC']);
        return $this->render('crudlist/index.html.twig', ['tasks'=> $tasks]);
    }
    #[Route('/create', name: 'create_task', methods:['POST'])]
    public function create(Request $request, ManagerRegistry $doctrine):Response
    {
        $title = trim($request->get('title'));
        if(empty($title)){
            return $this->redirectToRoute('app_crud_list');
        // exit($request->get('title'));
        }
       $entityManager = $doctrine->getManager();
       $task = new Task();
       $task->setTitle($title);
       $entityManager->persist($task); //prepares for saving in database
       $entityManager->flush(); // saving is done by this line db (insert)

       return $this->redirectToRoute('app_crud_list');
    }
    #[Route('/update/{id}', name: 'update_task')]
    public function update($id, ManagerRegistry $doctrine)
    {
        $entityManager = $doctrine->getManager();
        $task = $entityManager->getRepository(Task::class)->find($id);
        $task->setStatus(!$task->getStatus());
        $entityManager->flush();
        return $this->redirectToRoute('app_crud_list');
    }
    #[Route('/delete/{id}', name: 'delete_task')]
    public function delete($id, ManagerRegistry $doctrine)
    {
        $entityManager = $doctrine->getManager();
        $task = $entityManager->getRepository(Task::class)->find($id);
        $entityManager->remove($task);
        $entityManager->flush();
        return $this->redirectToRoute('app_crud_list');
    }
}
