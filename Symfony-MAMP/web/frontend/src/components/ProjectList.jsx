import React, { useState, useEffect } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";
 import Swal from "sweetalert2";

const ProjectList = () => {
  const [projects, setProjects] = useState([]);
  const navigate = useNavigate();

  useEffect(() => {
    axios
      .get("http://localhost:8007/api/projects")
      .then((response) => {
        if (Array.isArray(response.data)) {
          setProjects(response.data);
        } else {
          console.error("Expected an array, but got:", response.data);
        }
      })
      .catch((error) => console.error("Error:", error));
  }, []);

  const handleEdit = (projectId) => {
    navigate(`/edit-project/${projectId}`);
  };

 
  // Logic to handle delete
  const handleDelete = (projectId) => {
    Swal.fire({
      title: "Do you want to delete?",
      showDenyButton: true,
      confirmButtonText: "Delete",
      denyButtonText: `Don't Delete`,
    }).then((result) => {
      if (result.isConfirmed) {
        axios
          .delete(`http://localhost:8007/api/projects/${projectId}`)
          .then(() => {
            setProjects(projects.filter((project) => project.id !== projectId));
            Swal.fire("Deleted!", "Your project has been deleted.", "success");
          })
          .catch((error) => {
            console.log("Error:", error);
            Swal.fire(
              "Error",
              "An error occurred while deleting the project.",
              "error"
            );
          });
      } else if (result.isDenied) {
        Swal.fire("Cancelled", "Your project is safe :)", "info");
      }
    });
  };

  return (
    <div>
      <h1>Project List</h1>
      <table>
        <thead>
          <tr>
            <th>Project Name</th>
            <th>Description</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {projects.map((project) => (
            <tr key={project.id}>
              <td>{project.name}</td>
              <td>{project.description}</td>
              <td>
                <button onClick={() => handleEdit(project.id)}>Edit</button>
                <button onClick={() => handleDelete(project.id)}>Delete</button>
              </td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
};

export default ProjectList;
