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

/* home/event.html.twig */
class __TwigTemplate_d9d6a161f87ccc21235d67c64726f2d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/event.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/event.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/event.html.twig", 1);
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

        echo " Hopitallo-Hopitaux";
        
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
                      
                        <a href=\"hopital_urgence.html\" class=\"nav-item nav-link \">Urgence</a>
                   
                        <a href=\"event.html\" class=\"nav-item nav-link active\">Evenement</a>
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
 <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Evenement</h5>
                <h1 class=\"display-4\">Our Latest Medical event Posts</h1>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"img/blog-1.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src=\"img/user.jpg\" width=\"25\" height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                                <div class=\"d-flex mt-auto border-top p-4\">
                                    <a class=\"btn btn-primary \" href=\"rendezvous.html\">Participer</a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"img/blog-2.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src=\"img/user.jpg\" width=\"25\" height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                                <div class=\"d-flex mt-auto border-top p-4\">
                                    <a class=\"btn btn-primary \" href=\"rendezvous.html\">Participer</a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"img/blog-3.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src=\"img/user.jpg\" width=\"25\" height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                                <div class=\"d-flex mt-auto border-top p-4\">
                                    <a class=\"btn btn-primary \" href=\"rendezvous.html\">Participer</a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
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
        return "home/event.html.twig";
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

{% block title %} Hopitallo-Hopitaux{% endblock %} 

 {% block nav %}  
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0\">
                        <a href=\"{{path('app_home')}}\" class=\"nav-item nav-link \">Home</a>
                        <a href=\"{{path('hopital')}}\"  class=\"nav-item nav-link \">Hopitaux</a>
                      
                        <a href=\"hopital_urgence.html\" class=\"nav-item nav-link \">Urgence</a>
                   
                        <a href=\"event.html\" class=\"nav-item nav-link active\">Evenement</a>
                        <a href=\"profil.html\" class=\"nav-item nav-link\">Profil</a>
                    </div>
                </div>
                {% endblock %}  


{% block body %} 
 <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"text-center mx-auto mb-5\" style=\"max-width: 500px;\">
                <h5 class=\"d-inline-block text-primary text-uppercase border-bottom border-5\">Evenement</h5>
                <h1 class=\"display-4\">Our Latest Medical event Posts</h1>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"img/blog-1.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src=\"img/user.jpg\" width=\"25\" height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                                <div class=\"d-flex mt-auto border-top p-4\">
                                    <a class=\"btn btn-primary \" href=\"rendezvous.html\">Participer</a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"img/blog-2.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src=\"img/user.jpg\" width=\"25\" height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                                <div class=\"d-flex mt-auto border-top p-4\">
                                    <a class=\"btn btn-primary \" href=\"rendezvous.html\">Participer</a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6\">
                    <div class=\"bg-light rounded overflow-hidden\">
                        <img class=\"img-fluid w-100\" src=\"img/blog-3.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <a class=\"h3 d-block mb-3\" href=\"\">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class=\"d-flex justify-content-between border-top p-4\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle me-2\" src=\"img/user.jpg\" width=\"25\" height=\"25\" alt=\"\">
                                <small>John Doe</small>
                            </div>
                            <div class=\"d-flex align-items-center\">
                                <small class=\"ms-3\"><i class=\"far fa-eye text-primary me-1\"></i>12345</small>
                                <small class=\"ms-3\"><i class=\"far fa-comment text-primary me-1\"></i>123</small>
                                <div class=\"d-flex mt-auto border-top p-4\">
                                    <a class=\"btn btn-primary \" href=\"rendezvous.html\">Participer</a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %} ", "home/event.html.twig", "C:\\Users\\AMINE\\Hopitallo\\templates\\home\\event.html.twig");
    }
}
