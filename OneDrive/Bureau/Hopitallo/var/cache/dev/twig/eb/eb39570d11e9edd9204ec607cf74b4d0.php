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

/* home/login.html.twig */
class __TwigTemplate_6b470a4514331b16690db495b8468741 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'nav' => [$this, 'block_nav'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/login.html.twig", 1);
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

        echo " Hopitallo-login";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        echo "  
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0\">
                        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"nav-item nav-link \">Home</a>
                        <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hopital");
        echo "\"  class=\"nav-item nav-link \">Hopitaux</a>
                      
                        <a href=\"hopital_urgence.html\" class=\"nav-item nav-link\">Urgence</a>
                   
                        <a href=\"event.html\" class=\"nav-item nav-link\">Evenement</a>
                        <a href=\"profil.html\" class=\"nav-item nav-link\">Profil</a>
                    </div>
                </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 
  <h2>Hopitallo #1: Sign in/up </h2>
\t  <a href=\"connecter.php\"> __________________</a>
      <div class=\"container\" id=\"container\">
         <div class=\"form-container sign-up-container\">
\t
        
     
            <form  method=\"post\">
               <h1>Create Account</h1>
              
\t\t
               <input type=\"text\" name=\"name\" placeholder=\"Last Name\" />
\t\t\t   <input type=\"text\" name=\"prenom\" placeholder=\"First Name\" />
               <input type=\"text\" name=\"Email\" placeholder=\"Email\" />
\t\t\t   <input type=\"text\" name=\"adresse\" placeholder=\"Adress\" />
               <input type=\"password\" name=\"mdp_cl\" placeholder=\"Password\" />
               <button type=\"submit\">Sign Up</button>
            </form>
         </div>
         <div class=\"form-container sign-in-container\">
\t\t
            <form action=\"\" method=\"post\">
               <h1>Sign in</h1>
               <div class=\"social-container\">
                 
                    <label class=\"text-danger\"></label>';  
               
               </div>
               
               <input type=\"text\" name=\"Email\" placeholder=\"Email\" />
               <input type=\"password\" name=\"mdpp\" placeholder=\"Password\" />
               <a href=\"#\">Forgot your password?</a>
               <button type=\"submit\" name=\"login\">Sign In</button>
            </form>
\t\t
         </div>
         <div class=\"overlay-container\">
            <div class=\"overlay\">
               <div class=\"overlay-panel overlay-left\">
                  <h1>Welcome Back!</h1>
                  <p>To keep connected with us please login with your personal info</p>
                  <button class=\"ghost\" id=\"signIn\">Sign In</button>
               </div>
               <div class=\"overlay-panel overlay-right\">
                  <h1>Hello, Friend!</h1>
                  <p>Enter your personal details and start journey with us</p>
                  <button class=\"ghost\" id=\"signUp\">Sign Up</button>
               </div>
            </div>
         </div>
      </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 20,  97 => 9,  93 => 8,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Hopitallo-login{% endblock %} 

 {% block nav %}  
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0\">
                        <a href=\"{{path('app_home')}}\" class=\"nav-item nav-link \">Home</a>
                        <a href=\"{{path('hopital')}}\"  class=\"nav-item nav-link \">Hopitaux</a>
                      
                        <a href=\"hopital_urgence.html\" class=\"nav-item nav-link\">Urgence</a>
                   
                        <a href=\"event.html\" class=\"nav-item nav-link\">Evenement</a>
                        <a href=\"profil.html\" class=\"nav-item nav-link\">Profil</a>
                    </div>
                </div>
                {% endblock %}  


{% block body %} 
  <h2>Hopitallo #1: Sign in/up </h2>
\t  <a href=\"connecter.php\"> __________________</a>
      <div class=\"container\" id=\"container\">
         <div class=\"form-container sign-up-container\">
\t
        
     
            <form  method=\"post\">
               <h1>Create Account</h1>
              
\t\t
               <input type=\"text\" name=\"name\" placeholder=\"Last Name\" />
\t\t\t   <input type=\"text\" name=\"prenom\" placeholder=\"First Name\" />
               <input type=\"text\" name=\"Email\" placeholder=\"Email\" />
\t\t\t   <input type=\"text\" name=\"adresse\" placeholder=\"Adress\" />
               <input type=\"password\" name=\"mdp_cl\" placeholder=\"Password\" />
               <button type=\"submit\">Sign Up</button>
            </form>
         </div>
         <div class=\"form-container sign-in-container\">
\t\t
            <form action=\"\" method=\"post\">
               <h1>Sign in</h1>
               <div class=\"social-container\">
                 
                    <label class=\"text-danger\"></label>';  
               
               </div>
               
               <input type=\"text\" name=\"Email\" placeholder=\"Email\" />
               <input type=\"password\" name=\"mdpp\" placeholder=\"Password\" />
               <a href=\"#\">Forgot your password?</a>
               <button type=\"submit\" name=\"login\">Sign In</button>
            </form>
\t\t
         </div>
         <div class=\"overlay-container\">
            <div class=\"overlay\">
               <div class=\"overlay-panel overlay-left\">
                  <h1>Welcome Back!</h1>
                  <p>To keep connected with us please login with your personal info</p>
                  <button class=\"ghost\" id=\"signIn\">Sign In</button>
               </div>
               <div class=\"overlay-panel overlay-right\">
                  <h1>Hello, Friend!</h1>
                  <p>Enter your personal details and start journey with us</p>
                  <button class=\"ghost\" id=\"signUp\">Sign Up</button>
               </div>
            </div>
         </div>
      </div>
    {% endblock  %} ", "home/login.html.twig", "C:\\Users\\AMINE\\Hopitallo\\templates\\home\\login.html.twig");
    }
}
