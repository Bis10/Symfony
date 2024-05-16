<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* booklist/index.html.twig */
class __TwigTemplate_ee311f12757bcc3edf91e57d0963e14c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booklist/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "booklist/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        yield "Book index
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "\t
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        yield "\t<h1>Book index</h1>
\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Title</th>
\t\t\t\t<th>Author</th>
\t\t\t\t<th>Year</th>
\t\t\t\t<th>Genre</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 26
            yield "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "publishingYear", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "genre", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button><a href=\"";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\">edit</a></button>
\t\t\t\t\t\t<!-- Start of the form for delete button -->
\t\t\t\t\t\t<form action=\"";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" method=\"post\" onsubmit=\"return confirm('Are you sure?');\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 36))), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t\t\t\t\t\t\t<button type=\"submit\">delete</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<!-- End of the form for delete button -->
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "\t\t</tbody>
\t</table>

\t<p><a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_new");
        yield "\">Create new</a></p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "booklist/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  165 => 47,  160 => 44,  146 => 36,  142 => 35,  137 => 33,  132 => 31,  128 => 30,  124 => 29,  120 => 28,  116 => 27,  113 => 26,  109 => 25,  94 => 12,  87 => 11,  78 => 8,  71 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Book index
{% endblock %}

{% block stylesheets %}
\t
{% endblock %}

{% block body %}
\t<h1>Book index</h1>
\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Title</th>
\t\t\t\t<th>Author</th>
\t\t\t\t<th>Year</th>
\t\t\t\t<th>Genre</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for book in books %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ book.title }}</td>
\t\t\t\t\t<td>{{ book.author }}</td>
\t\t\t\t\t<td>{{ book.publishingYear }}</td>
\t\t\t\t\t<td>{{ book.genre }}</td>
\t\t\t\t\t<td>{{ book.description }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button><a href=\"{{ path('book_edit', {'id': book.id}) }}\">edit</a></button>
\t\t\t\t\t\t<!-- Start of the form for delete button -->
\t\t\t\t\t\t<form action=\"{{ path('book_delete', {'id': book.id}) }}\" method=\"post\" onsubmit=\"return confirm('Are you sure?');\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ book.id) }}\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t\t\t\t\t\t\t<button type=\"submit\">delete</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<!-- End of the form for delete button -->
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<p><a href=\"{{ path('book_new') }}\">Create new</a></p>
{% endblock %}
", "booklist/index.html.twig", "/var/www/web/templates/booklist/index.html.twig");
    }
}
