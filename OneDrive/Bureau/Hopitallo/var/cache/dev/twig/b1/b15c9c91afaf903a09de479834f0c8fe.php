<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin_participant/index.html.twig */
class __TwigTemplate_3cb068ca0c0613692ed1740f36aaed30 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_Admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_participant/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_participant/index.html.twig"));

        $this->parent = $this->loadTemplate("base_Admin.html.twig", "admin_participant/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Participant index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\"  >
                            <p class=\"m-0 font-weight-bold text-primary\" style=\"text-align:center\">Participant index</p>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
    <div>
     <a style=\" display: inline-block;
  padding: 10px 20px;
  background-color: #4e73df;
  color: white;
  margin-top:15px;
  text-decoration: none;
  border-radius: 5px;\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_participant_new");
        echo "\">Create new</a>
    </br>
    </br>
    </div>
    
    <table  class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
       <thead>
            <tr>
                <th>Id</th>
                <th>CreatedAt</th>
                <th>Id-participant</th>
                <th>Id-event</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 36
            echo "            <tr>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            ((twig_get_attribute($this->env, $this->source, $context["participant"], "createdAt", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "createdAt", [], "any", false, false, false, 38), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "user", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "event", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>
                     <a style=\" display: inline-block;
  padding: 10px 20px;
  background-color: #4e73df;
  color: white;
  margin-top:15px;
  text-decoration: none;
  border-radius: 5px;\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_participant_show", ["id" => twig_get_attribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">show</a>
                    ";
            // line 50
            echo " </td> 
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>

    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin_participant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 57,  164 => 53,  157 => 50,  153 => 48,  142 => 40,  138 => 39,  134 => 38,  130 => 37,  127 => 36,  122 => 35,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_Admin.html.twig' %}

{% block title %}Participant index{% endblock %}

{% block body %}
<div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\"  >
                            <p class=\"m-0 font-weight-bold text-primary\" style=\"text-align:center\">Participant index</p>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
    <div>
     <a style=\" display: inline-block;
  padding: 10px 20px;
  background-color: #4e73df;
  color: white;
  margin-top:15px;
  text-decoration: none;
  border-radius: 5px;\" href=\"{{ path('app_admin_participant_new') }}\">Create new</a>
    </br>
    </br>
    </div>
    
    <table  class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
       <thead>
            <tr>
                <th>Id</th>
                <th>CreatedAt</th>
                <th>Id-participant</th>
                <th>Id-event</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for participant in participants %}
            <tr>
                <td>{{ participant.id }}</td>
                <td>{{ participant.createdAt ? participant.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ participant.user }}</td>
                <td>{{ participant.event }}</td>
                <td>
                     <a style=\" display: inline-block;
  padding: 10px 20px;
  background-color: #4e73df;
  color: white;
  margin-top:15px;
  text-decoration: none;
  border-radius: 5px;\" href=\"{{ path('app_admin_participant_show', {'id': participant.id}) }}\">show</a>
                    {# <button class=\"rounded-circle border-0\"> <a href=\"{{ path('app_admin_participant_edit', {'id': participant.id}) }}\">edit</a></button>
               #} </td> 
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    
{% endblock %}
", "admin_participant/index.html.twig", "C:\\Users\\mouha\\OneDrive\\Bureau\\Hopitallo\\templates\\admin_participant\\index.html.twig");
    }
}
