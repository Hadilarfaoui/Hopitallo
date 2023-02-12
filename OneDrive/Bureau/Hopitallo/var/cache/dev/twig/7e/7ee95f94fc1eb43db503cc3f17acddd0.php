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

/* admin_event/_form.html.twig */
class __TwigTemplate_a700bcfbb892fbab73578ff78534eba1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_event/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_event/_form.html.twig"));

        // line 1
        echo "<div class=\"form-container\">

    ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

 <div class=\"form-group\">
    <table>
<tr>

<td> ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nom_e", [], "any", false, false, false, 9), 'label', ["label" => "Nom"]);
        echo " 
 </td>
<td>  ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "nom_e", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "inp", "placeholder" => "Nom"]]);
        echo " 
</td>  
<td> ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nom_e", [], "any", false, false, false, 13), 'errors');
        echo " 
</td>
</tr></div>

<div class=\"form-group\">
<tr>

<td>  ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "photo", [], "any", false, false, false, 20), 'label', ["label" => "Photo"]);
        echo " 
</td> 
<td>  ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "photo", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "inp"]]);
        echo "
</td> 

</tr></div>
<div class=\"form-group\">
<tr>

<td> ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "localisation", [], "any", false, false, false, 29), 'label', ["label" => "Location"]);
        echo " 
 </td>
<td>  ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "localisation", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "inp", "placeholder" => "location"]]);
        echo "
</td>  
<td> ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "localisation", [], "any", false, false, false, 33), 'errors');
        echo " 
</td>
</tr></div>

<div class=\"form-group\">
<tr>
<td> ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "type", [], "any", false, false, false, 39), 'label', ["label" => "Type"]);
        echo " 
 </td>
<td>  ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "type", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "inp", "placeholder" => "Type"]]);
        echo "
</td>  
<td> ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "type", [], "any", false, false, false, 43), 'errors');
        echo " 
</td>
</tr></div>
<div class=\"form-group\">
<tr>
<td> ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48), 'label', ["label" => "Description"]);
        echo " 
 </td>
<td>  ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "inp", "placeholder" => "description"]]);
        echo "
</td>  
<td> ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), 'errors');
        echo " 
</td>
</tr></div>
<div class=\"form-group\">
<tr>
<td> ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "date_event", [], "any", false, false, false, 57), 'label', ["label" => "Date Event"]);
        echo " 
 </td>
<td>  ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "date_event", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "inp"]]);
        echo "
</td>  
<td> ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "date_event", [], "any", false, false, false, 61), 'errors');
        echo " 
</td>
</tr></div>

<div class=\"form-group\">
<tr>
  <td>
    <button class=\"btn\">";
        // line 68
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 68, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
    
    ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
        echo "</td>
    
    

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin_event/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 70,  166 => 68,  156 => 61,  151 => 59,  146 => 57,  138 => 52,  133 => 50,  128 => 48,  120 => 43,  115 => 41,  110 => 39,  101 => 33,  96 => 31,  91 => 29,  81 => 22,  76 => 20,  66 => 13,  61 => 11,  56 => 9,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-container\">

    {{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}

 <div class=\"form-group\">
    <table>
<tr>

<td> {{ form_label(form.nom_e,\"Nom\")  }} 
 </td>
<td>  {{ form_widget(form.nom_e , {'attr': {'class': 'inp', 'placeholder': 'Nom'}}) }} 
</td>  
<td> {{ form_errors(form.nom_e) }} 
</td>
</tr></div>

<div class=\"form-group\">
<tr>

<td>  {{ form_label(form.photo,\"Photo\") }} 
</td> 
<td>  {{ form_widget(form.photo, {'attr': {'class': 'inp'}}) }}
</td> 

</tr></div>
<div class=\"form-group\">
<tr>

<td> {{ form_label(form.localisation,\"Location\")  }} 
 </td>
<td>  {{ form_widget(form.localisation , {'attr': {'class': 'inp', 'placeholder': 'location'}}) }}
</td>  
<td> {{ form_errors(form.localisation) }} 
</td>
</tr></div>

<div class=\"form-group\">
<tr>
<td> {{ form_label(form.type,\"Type\")  }} 
 </td>
<td>  {{ form_widget(form.type , {'attr': {'class': 'inp', 'placeholder': 'Type'}}) }}
</td>  
<td> {{ form_errors(form.type) }} 
</td>
</tr></div>
<div class=\"form-group\">
<tr>
<td> {{ form_label(form.description,\"Description\")  }} 
 </td>
<td>  {{ form_widget(form.description , {'attr': {'class': 'inp', 'placeholder': 'description'}}) }}
</td>  
<td> {{ form_errors(form.description) }} 
</td>
</tr></div>
<div class=\"form-group\">
<tr>
<td> {{ form_label(form.date_event,\"Date Event\")  }} 
 </td>
<td>  {{ form_widget(form.date_event , {'attr': {'class': 'inp'}}) }}
</td>  
<td> {{ form_errors(form.date_event) }} 
</td>
</tr></div>

<div class=\"form-group\">
<tr>
  <td>
    <button class=\"btn\">{{ button_label|default('Save')}}</button>
    
    {{form_end(form)}}</td>
    
    

", "admin_event/_form.html.twig", "C:\\Users\\mouha\\OneDrive\\Bureau\\Hopitallo\\templates\\admin_event\\_form.html.twig");
    }
}
