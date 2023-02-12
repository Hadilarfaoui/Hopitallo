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

/* home/profil.html.twig */
class __TwigTemplate_580db5ebfcc200c17bac28a0b004a70e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/profil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/profil.html.twig", 1);
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

        echo " Hopitallo-profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "   
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fav.jpgs"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.csss"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawsom-all.min.csss"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.csss"), "html", null, true);
        echo "\" />

    <style>
        .appointment-list {
          display: flex;
          flex-direction: column;
          width: 80%;
          margin: 50px auto;
          background-color: #2642C2;
          border-radius: 10px;
          box-shadow: 0 10px 20px #FF1616, 0 6px 6px #FF1616;
        }
        .btn-comments {
  border: 1px solid #333;
  border-radius: 10px;
  padding: 10px 20px;
  background-color: #fff;
  font-size: 1.1em;
  color: #333;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  margin-left: 20px;
}
.btn-comments:hover {
  background-color: #333;
  color: #fff;
}
        .appointment {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 20px;
          border-bottom: 1px solid #2642C2;
          transition: all 0.3s ease-in-out;
        }
        .appointment:hover {
          transform: translateY(-10px);
          box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
        }
        .date {
          font-weight: bold;
          font-size: 1.2em;
          color: #fff;
          width: 20%;
          text-align: center;
        }
        .description {
          font-size: 1.1em;
          color: #fff;
          width: 70%;
          padding-left: 20px;
        }
        .icon {
          width: 10%;
          text-align: center;
        }
        .icon i {
          font-size: 1.5em;
          color: #fff;
          transition: all 0.3s ease-in-out;
        }
        .appointment:hover .icon i {
          color: #fff;
        }
        .comments {
          display: block;
          width: 60%;
          margin: 20px auto;
          background-color: #fff;
          border-radius: 10px;
          box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
          padding: 20px;
        }
      </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 90
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
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"nav-item nav-link \">Home</a>
                      <a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hopital");
        echo "\"  class=\"nav-item nav-link \">Hopitaux</a>
                      
                        <a href=\"hopital_urgence.html\" class=\"nav-item nav-link\">Urgence</a>
                   
                        <a href=\"event.html\" class=\"nav-item nav-link\">Evenement</a>
                        <a href=\"profil.html\" class=\"nav-item nav-link active\">Profil</a>
                    </div>
                </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 103
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 
   <div class=\"container-fluid overcover\">
        <div class=\"container profile-box\">
            <div class=\"top-cover\">
                <div class=\"covwe-inn\">
                    <div class=\"row no-margin\">
                        <div class=\"col-md-3 img-c\">
                            <img src=\"assets/images/profile.jpg\" alt=\"\">
                        </div>
                        <div class=\"col-md-9 tit-det\">
                            <h2>Angelina Smith / Web Designer</h2>
                    <br><br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
            <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
              <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Home</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">RDV</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#resume\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Urgence</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#gallery\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Portfolio</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#contact\" role=\"tab\" aria-controls=\"contact\" aria-selected=\"false\">Contact</a>
              </li>
            </ul>
            <div class=\"tab-content\" id=\"myTabContent\">
              <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                  <div class=\"row no-margin home-det\">
                      <div class=\"col-md-4 big-img\">
                         
                       
                          <h4 class=\"ltitle\">Referencess</h4>

                        <div class=\"refer-cov\">
                            
                            <p><b>Nom et prenom</b> Amine ben rejeb</p>
                            <span><b>Phone :</b>  +00 890 1232 8767</span>
                        </div>
                        <div class=\"refer-cov\">
                           
                            <p> <b>Adresse</b> Rades </p>
                            <span><b>Date de naissance :</b> 22 / 04 / 2002</span>
                        </div>
                        
                      </div>
                      <div class=\"col-md-8 home-dat\">
                         
                      
                          <div class=\"links\">
                          <div class=\"row \">
                              <div class=\"col-xl-6 col-md-12\">
                                  <ul class=\"btn-link\">
                                
                                      <li>
                                          <a href=\"\"><i class=\"fas fa-cloud-download-alt\"></i> Download Dossiers medical</a>
                                      </li>
                                  </ul>
                              </div>
                              
                            
                          </div>
                      </div>
                      <h2 class=\"rit-titl\"> Statistiques</h2>
                      <div class=\"jumbo-address\">
                         <div class=\"row no-margin\">
                                  <div class=\"col-lg-6 no-padding\">

                                  <table class=\"addrss-list\">
                                      <tbody><tr>
                                          <th>RDV</th>
                                          <td>10</td>
                                      </tr>
                                      <tr>
                                        <th>Urgence</th>
                                        <td>5</td>
                                    </tr>
                                      <tr>
                                          <th>Event</th>
                                          <td>2</td>
                                      </tr>
                                     
                                  </tbody></table>

                          </div>
                          <div class=\"col-lg-6 no-padding\">
                               <table class=\"addrss-list\">
                                      <tbody><tr>
                                          <th>Medecin préféré</th>
                                          <td>Dr.amine ben rejeb</td>
                                      </tr>
                                      <tr>
                                          <th>Hopital préféré </th>
                                          <td>Hopital Ezzahra</td>
                                      </tr>
                                    
                                  </tbody></table>
                          </div>
                         </div>

                      </div>
                      </div>
                  </div>
              </div>
              <div class=\"tab-pane fade exp-cover\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
                  <div class=\"data-box\">
                          <div class=\"sec-title\">
                                
                           <div class=\"row exp-row\">
                            <h2>Historique Rendez-vous </h2>
                        </div>
                        <div class=\"appointment-list\">
                            <div class=\"appointment\">
                              <div class=\"date\">01/01/2023</div>
                              <div class=\"description\">Rendez-vous chez le dentiste</div>
                              <div class=\"icon\"><i class=\"fas fa-tooth\"></i></div>
                           
                            </div>
                            <div class=\"comments\">
                                <h3>Commentaires des médecins</h3>
                                <p>Commentaire 1</p>
                                <p>Commentaire 2</p>
                                <!-- Ajoutez autant de commentaires que nécessaire -->
                              </div>
                            </div>
                            <div class=\"appointment-list\">
                            <div class=\"appointment\">
                              <div class=\"date\">15/01/2023</div>
                              <div class=\"description\">Rendez-vous chez le médecin</div>
                              <div class=\"icon\"><i class=\"fas fa-user-md\"></i></div>
                            
                            </div>
                            <div class=\"comments\">
                                <h3>Commentaires des médecins</h3>
                                <p>Commentaire 1</p>
                                <p>Commentaire 2</p>
                                <!-- Ajoutez autant de commentaires que nécessaire -->
                              </div>
                            <!-- Ajoutez autant de rendez-vous que nécessaire -->
                          </div>
                          <!-- Commentaires -->
                          
                            
                       </div>
                    </div>

                       <div class=\"sec-title\">
                                
                        <div class=\"row exp-row\">
                         <h2>Next Rendez-vous </h2>
                     </div>
                     <div class=\"appointment-list\">
                       <div class=\"appointment\">
                         <div class=\"date\">01/01/2023</div>
                         <div class=\"description\">Consultation chez le dentiste</div>
                         <div class=\"icon\"><i class=\"fas fa-tooth\"></i></div>
                       </div>
                       <div class=\"appointment\">
                         <div class=\"date\">15/01/2023</div>
                         <div class=\"description\">Rendez-vous chez le médecin</div>
                         <div class=\"icon\"><i class=\"fas fa-user-md\"></i></div>
                       </div>
                       <div class=\"appointment\">
                         <div class=\"date\">28/01/2023</div>
                         <div class=\"description\">Visite chez l'ophtalmologiste</div>
                         <div class=\"icon\"><i class=\"fas fa-eye\"></i></div>
                       </div>
                     </div>
                         
                    </div>
              </div>
              <div class=\"tab-pane fade exp-cover\" id=\"resume\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">
                  <div class=\"sec-title\">
                                        <h2>Urgence Details</h2>
                                  </div>
                              

                                  <div class=\"appointment-list\">
                                    <div class=\"appointment\">
                                      <div class=\"date\">01/01/2023</div>
                                      <div class=\"description\">Rendez-vous chez le dentiste</div>
                                      <div class=\"icon\"><i class=\"fas fa-tooth\"></i></div>
                                   
                                    </div>
                                    <div class=\"comments\">
                                        <h3>Commentaires des médecins</h3>
                                        <p>Commentaire 1</p>
                                        <p>Commentaire 2</p>
                                        <!-- Ajoutez autant de commentaires que nécessaire -->
                                      </div>
                                    </div>
                                    <div class=\"appointment-list\">
                                    <div class=\"appointment\">
                                      <div class=\"date\">15/01/2023</div>
                                      <div class=\"description\">Rendez-vous chez le médecin</div>
                                      <div class=\"icon\"><i class=\"fas fa-user-md\"></i></div>
                                    
                                    </div>
                                    <div class=\"comments\">
                                        <h3>Commentaires des médecins</h3>
                                        <p>Commentaire 1</p>
                                        <p>Commentaire 2</p>
                                        <!-- Ajoutez autant de commentaires que nécessaire -->
                                      </div>
                                    <!-- Ajoutez autant de rendez-vous que nécessaire -->
                                  </div>
                                     
              </div>
              <div class=\"tab-pane fade gallcoo\" id=\"gallery\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">
                  <div class=\"row no-margin gallery\">
                                          <div class=\"col-sm-4\">
                                              <img src=\"assets/images/gallery/gallery_01.jpg\" alt=\"\">
                                          </div>
                                          <div class=\"col-sm-4\">
                                              <img src=\"assets/images/gallery/gallery_02.jpg\" alt=\"\">
                                          </div>
                                          <div class=\"col-sm-4\">
                                              <img src=\"assets/images/gallery/gallery_03.jpg\" alt=\"\">
                                          </div>
                                          <div class=\"col-sm-4\">
                                              <img src=\"assets/images/gallery/gallery_04.jpg\" alt=\"\">
                                          </div>
                                          <div class=\"col-sm-4\">
                                              <img src=\"assets/images/gallery/gallery_05.jpg\" alt=\"\">
                                          </div>
                                          <div class=\"col-sm-4\">
                                              <img src=\"assets/images/gallery/gallery_06.jpg\" alt=\"\">
                                          </div>
                                           <div class=\"col-sm-4\">
                                              <img src=\"assets/images/gallery/gallery_10.jpg\" alt=\"\">
                                          </div>
                                           <div class=\"col-sm-4\">
                                              <img src=\"assets/images/gallery/gallery_08.jpg\" alt=\"\">
                                          </div>
                                           <div class=\"col-sm-4\">
                                              <img src=\"assets/images/gallery/gallery_09.jpg\" alt=\"\">
                                          </div>
                                          
                                      </div>
              </div>
              <div class=\"tab-pane fade contact-tab\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">
                  <div class=\"row no-margin\">
                                          <div class=\"col-md-6 no-padding\">
                                               <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3176144.0450019627!2d-107.79423426090409!3d38.97644533805396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x874014749b1856b7%3A0xc75483314990a7ff!2sColorado%2C+USA!5e0!3m2!1sen!2sin!4v1547222354537\"  frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                                          </div>
                                          <div class=\"col-md-6\">
                                              <div class=\"row cont-row no-margin\">
                                                  <div class=\"col-sm-6\">
                                                      <input placeholder=\"Enter Full Name\" type=\"text\" class=\"form-control form-control-sm\">
                                                  </div>
                                                   <div class=\"col-sm-6\">
                                                      <input placeholder=\"Enter Email Address\" type=\"text\" class=\"form-control form-control-sm\">
                                                  </div>
                                              </div>
                                              <div class=\"row cont-row no-margin\">
                                                  <div class=\"col-sm-6\">
                                                      <input placeholder=\"Enter Mobile Number\" type=\"text\" class=\"form-control form-control-sm\">
                                                  </div>
                                                   
                                              </div>
                                              <div class=\"row cont-row no-margin\">
                                                  <div class=\"col-sm-12\">
                                                     <textarea placeholder=\"Enter your Message\" class=\"form-control form-control-sm\" rows=\"10\"></textarea>
                                                  </div>
                                                  
                                              </div>
                                              <div class=\"row cont-row no-margin\">
                                                  <div class=\"col-sm-6\">
                                                      <button class=\"btn btn-sm btn-primary\">Send Message</button>
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

    // line 390
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 391
        echo "    <!-- JavaScript Libraries -->
    <script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>
    <!-- Template Javascript -->
    <script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  601 => 404,  596 => 402,  592 => 401,  588 => 400,  584 => 399,  580 => 398,  576 => 397,  572 => 396,  568 => 395,  564 => 394,  560 => 393,  556 => 392,  553 => 391,  543 => 390,  239 => 103,  220 => 94,  216 => 93,  202 => 90,  117 => 15,  113 => 14,  109 => 13,  105 => 12,  100 => 10,  94 => 7,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Hopitallo-profil{% endblock %} 

{% block stylesheet %}
   
    <link href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{asset('css/style.css')}}\" rel=\"stylesheet\">

    <link rel=\"shortcut icon\" href=\"{{asset('assets/images/fav.jpgs')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/bootstrap.min.csss')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/fontawsom-all.min.csss')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/style.csss')}}\" />

    <style>
        .appointment-list {
          display: flex;
          flex-direction: column;
          width: 80%;
          margin: 50px auto;
          background-color: #2642C2;
          border-radius: 10px;
          box-shadow: 0 10px 20px #FF1616, 0 6px 6px #FF1616;
        }
        .btn-comments {
  border: 1px solid #333;
  border-radius: 10px;
  padding: 10px 20px;
  background-color: #fff;
  font-size: 1.1em;
  color: #333;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  margin-left: 20px;
}
.btn-comments:hover {
  background-color: #333;
  color: #fff;
}
        .appointment {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 20px;
          border-bottom: 1px solid #2642C2;
          transition: all 0.3s ease-in-out;
        }
        .appointment:hover {
          transform: translateY(-10px);
          box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
        }
        .date {
          font-weight: bold;
          font-size: 1.2em;
          color: #fff;
          width: 20%;
          text-align: center;
        }
        .description {
          font-size: 1.1em;
          color: #fff;
          width: 70%;
          padding-left: 20px;
        }
        .icon {
          width: 10%;
          text-align: center;
        }
        .icon i {
          font-size: 1.5em;
          color: #fff;
          transition: all 0.3s ease-in-out;
        }
        .appointment:hover .icon i {
          color: #fff;
        }
        .comments {
          display: block;
          width: 60%;
          margin: 20px auto;
          background-color: #fff;
          border-radius: 10px;
          box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
          padding: 20px;
        }
      </style>
    {% endblock %}
  {% block nav %}  
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0\">
                        <a href=\"{{path('app_home')}}\" class=\"nav-item nav-link \">Home</a>
                      <a href=\"{{path('hopital')}}\"  class=\"nav-item nav-link \">Hopitaux</a>
                      
                        <a href=\"hopital_urgence.html\" class=\"nav-item nav-link\">Urgence</a>
                   
                        <a href=\"event.html\" class=\"nav-item nav-link\">Evenement</a>
                        <a href=\"profil.html\" class=\"nav-item nav-link active\">Profil</a>
                    </div>
                </div>
                {% endblock %}  
  {% block body %} 
   <div class=\"container-fluid overcover\">
        <div class=\"container profile-box\">
            <div class=\"top-cover\">
                <div class=\"covwe-inn\">
                    <div class=\"row no-margin\">
                        <div class=\"col-md-3 img-c\">
                            <img src=\"assets/images/profile.jpg\" alt=\"\">
                        </div>
                        <div class=\"col-md-9 tit-det\">
                            <h2>Angelina Smith / Web Designer</h2>
                    <br><br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
            <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
              <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Home</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">RDV</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#resume\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Urgence</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#gallery\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Portfolio</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#contact\" role=\"tab\" aria-controls=\"contact\" aria-selected=\"false\">Contact</a>
              </li>
            </ul>
            <div class=\"tab-content\" id=\"myTabContent\">
              <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                  <div class=\"row no-margin home-det\">
                      <div class=\"col-md-4 big-img\">
                         
                       
                          <h4 class=\"ltitle\">Referencess</h4>

                        <div class=\"refer-cov\">
                            
                            <p><b>Nom et prenom</b> Amine ben rejeb</p>
                            <span><b>Phone :</b>  +00 890 1232 8767</span>
                        </div>
                        <div class=\"refer-cov\">
                           
                            <p> <b>Adresse</b> Rades </p>
                            <span><b>Date de naissance :</b> 22 / 04 / 2002</span>
                        </div>
                        
                      </div>
                      <div class=\"col-md-8 home-dat\">
                         
                      
                          <div class=\"links\">
                          <div class=\"row \">
                              <div class=\"col-xl-6 col-md-12\">
                                  <ul class=\"btn-link\">
                                
                                      <li>
                                          <a href=\"\"><i class=\"fas fa-cloud-download-alt\"></i> Download Dossiers medical</a>
                                      </li>
                                  </ul>
                              </div>
                              
                            
                          </div>
                      </div>
                      <h2 class=\"rit-titl\"> Statistiques</h2>
                      <div class=\"jumbo-address\">
                         <div class=\"row no-margin\">
                                  <div class=\"col-lg-6 no-padding\">

                                  <table class=\"addrss-list\">
                                      <tbody><tr>
                                          <th>RDV</th>
                                          <td>10</td>
                                      </tr>
                                      <tr>
                                        <th>Urgence</th>
                                        <td>5</td>
                                    </tr>
                                      <tr>
                                          <th>Event</th>
                                          <td>2</td>
                                      </tr>
                                     
                                  </tbody></table>

                          </div>
                          <div class=\"col-lg-6 no-padding\">
                               <table class=\"addrss-list\">
                                      <tbody><tr>
                                          <th>Medecin préféré</th>
                                          <td>Dr.amine ben rejeb</td>
                                      </tr>
                                      <tr>
                                          <th>Hopital préféré </th>
                                          <td>Hopital Ezzahra</td>
                                      </tr>
                                    
                                  </tbody></table>
                          </div>
                         </div>

                      </div>
                      </div>
                  </div>
              </div>
              <div class=\"tab-pane fade exp-cover\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
                  <div class=\"data-box\">
                          <div class=\"sec-title\">
                                
                           <div class=\"row exp-row\">
                            <h2>Historique Rendez-vous </h2>
                        </div>
                        <div class=\"appointment-list\">
                            <div class=\"appointment\">
                              <div class=\"date\">01/01/2023</div>
                              <div class=\"description\">Rendez-vous chez le dentiste</div>
                              <div class=\"icon\"><i class=\"fas fa-tooth\"></i></div>
                           
                            </div>
                            <div class=\"comments\">
                                <h3>Commentaires des médecins</h3>
                                <p>Commentaire 1</p>
                                <p>Commentaire 2</p>
                                <!-- Ajoutez autant de commentaires que nécessaire -->
                              </div>
                            </div>
                            <div class=\"appointment-list\">
                            <div class=\"appointment\">
                              <div class=\"date\">15/01/2023</div>
                              <div class=\"description\">Rendez-vous chez le médecin</div>
                              <div class=\"icon\"><i class=\"fas fa-user-md\"></i></div>
                            
                            </div>
                            <div class=\"comments\">
                                <h3>Commentaires des médecins</h3>
                                <p>Commentaire 1</p>
                                <p>Commentaire 2</p>
                                <!-- Ajoutez autant de commentaires que nécessaire -->
                              </div>
                            <!-- Ajoutez autant de rendez-vous que nécessaire -->
                          </div>
                          <!-- Commentaires -->
                          
                            
                       </div>
                    </div>

                       <div class=\"sec-title\">
                                
                        <div class=\"row exp-row\">
                         <h2>Next Rendez-vous </h2>
                     </div>
                     <div class=\"appointment-list\">
                       <div class=\"appointment\">
                         <div class=\"date\">01/01/2023</div>
                         <div class=\"description\">Consultation chez le dentiste</div>
                         <div class=\"icon\"><i class=\"fas fa-tooth\"></i></div>
                       </div>
                       <div class=\"appointment\">
                         <div class=\"date\">15/01/2023</div>
                         <div class=\"description\">Rendez-vous chez le médecin</div>
                         <div class=\"icon\"><i class=\"fas fa-user-md\"></i></div>
                       </div>
                       <div class=\"appointment\">
                         <div class=\"date\">28/01/2023</div>
                         <div class=\"description\">Visite chez l'ophtalmologiste</div>
                         <div class=\"icon\"><i class=\"fas fa-eye\"></i></div>
                       </div>
                     </div>
                         
                    </div>
              </div>
              <div class=\"tab-pane fade exp-cover\" id=\"resume\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">
                  <div class=\"sec-title\">
                                        <h2>Urgence Details</h2>
                                  </div>
                              

                                  <div class=\"appointment-list\">
                                    <div class=\"appointment\">
                                      <div class=\"date\">01/01/2023</div>
                                      <div class=\"description\">Rendez-vous chez le dentiste</div>
                                      <div class=\"icon\"><i class=\"fas fa-tooth\"></i></div>
                                   
                                    </div>
                                    <div class=\"comments\">
                                        <h3>Commentaires des médecins</h3>
                                        <p>Commentaire 1</p>
                                        <p>Commentaire 2</p>
                                        <!-- Ajoutez autant de commentaires que nécessaire -->
                                      </div>
                                    </div>
                                    <div class=\"appointment-list\">
                                    <div class=\"appointment\">
                                      <div class=\"date\">15/01/2023</div>
                                      <div class=\"description\">Rendez-vous chez le médecin</div>
                                      <div class=\"icon\"><i class=\"fas fa-user-md\"></i></div>
                                    
                                    </div>
                                    <div class=\"comments\">
                                        <h3>Commentaires des médecins</h3>
                                        <p>Commentaire 1</p>
                                        <p>Commentaire 2</p>
                                        <!-- Ajoutez autant de commentaires que nécessaire -->
                                      </div>
                                    <!-- Ajoutez autant de rendez-vous que nécessaire -->
                                  </div>
                                     
              </div>
              <div class=\"tab-pane fade gallcoo\" id=\"gallery\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">
                  <div class=\"row no-margin gallery\">
                                          <div class=\"col-sm-4\">
                                              <img src=\"assets/images/gallery/gallery_01.jpg\" alt=\"\">
                                          </div>
                                          <div class=\"col-sm-4\">
                                              <img src=\"assets/images/gallery/gallery_02.jpg\" alt=\"\">
                                          </div>
                                          <div class=\"col-sm-4\">
                                              <img src=\"assets/images/gallery/gallery_03.jpg\" alt=\"\">
                                          </div>
                                          <div class=\"col-sm-4\">
                                              <img src=\"assets/images/gallery/gallery_04.jpg\" alt=\"\">
                                          </div>
                                          <div class=\"col-sm-4\">
                                              <img src=\"assets/images/gallery/gallery_05.jpg\" alt=\"\">
                                          </div>
                                          <div class=\"col-sm-4\">
                                              <img src=\"assets/images/gallery/gallery_06.jpg\" alt=\"\">
                                          </div>
                                           <div class=\"col-sm-4\">
                                              <img src=\"assets/images/gallery/gallery_10.jpg\" alt=\"\">
                                          </div>
                                           <div class=\"col-sm-4\">
                                              <img src=\"assets/images/gallery/gallery_08.jpg\" alt=\"\">
                                          </div>
                                           <div class=\"col-sm-4\">
                                              <img src=\"assets/images/gallery/gallery_09.jpg\" alt=\"\">
                                          </div>
                                          
                                      </div>
              </div>
              <div class=\"tab-pane fade contact-tab\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">
                  <div class=\"row no-margin\">
                                          <div class=\"col-md-6 no-padding\">
                                               <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3176144.0450019627!2d-107.79423426090409!3d38.97644533805396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x874014749b1856b7%3A0xc75483314990a7ff!2sColorado%2C+USA!5e0!3m2!1sen!2sin!4v1547222354537\"  frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                                          </div>
                                          <div class=\"col-md-6\">
                                              <div class=\"row cont-row no-margin\">
                                                  <div class=\"col-sm-6\">
                                                      <input placeholder=\"Enter Full Name\" type=\"text\" class=\"form-control form-control-sm\">
                                                  </div>
                                                   <div class=\"col-sm-6\">
                                                      <input placeholder=\"Enter Email Address\" type=\"text\" class=\"form-control form-control-sm\">
                                                  </div>
                                              </div>
                                              <div class=\"row cont-row no-margin\">
                                                  <div class=\"col-sm-6\">
                                                      <input placeholder=\"Enter Mobile Number\" type=\"text\" class=\"form-control form-control-sm\">
                                                  </div>
                                                   
                                              </div>
                                              <div class=\"row cont-row no-margin\">
                                                  <div class=\"col-sm-12\">
                                                     <textarea placeholder=\"Enter your Message\" class=\"form-control form-control-sm\" rows=\"10\"></textarea>
                                                  </div>
                                                  
                                              </div>
                                              <div class=\"row cont-row no-margin\">
                                                  <div class=\"col-sm-6\">
                                                      <button class=\"btn btn-sm btn-primary\">Send Message</button>
                                                  </div>
                                                   
                                              </div>
                                          </div>
                                      </div>
              </div>
            </div>
        </div>
    </div>
    {% endblock %} 

    {% block javascripts  %}
    <!-- JavaScript Libraries -->
    <script src=\"{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}\"></script>
    <script src=\"{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js')}}\"></script>
    <script src=\"{{asset('lib/easing/easing.min.js')}}\"></script>
    <script src=\"{{asset('lib/waypoints/waypoints.min.js')}}\"></script>
    <script src=\"{{asset('lib/owlcarousel/owl.carousel.min.js')}}\"></script>
    <script src=\"{{asset('lib/tempusdominus/js/moment.min.js')}}\"></script>
    <script src=\"{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}\"></script>
    <script src=\"{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}\"></script>
    <script src=\"{{asset('assets/js/popper.min.js')}}\"></script>
<script src=\"{{asset('assets/js/bootstrap.min.js')}}\"></script>
<script src=\"{{asset('assets/js/script.js')}}\"></script>
    <!-- Template Javascript -->
    <script src=\"{{asset('js/main.js')}}\"></script>
    {% endblock %}", "home/profil.html.twig", "C:\\Users\\AMINE\\Hopitallo\\templates\\home\\profil.html.twig");
    }
}
