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

/* salle_de_mariage/show.html.twig */
class __TwigTemplate_5b7798feb3912441149090c5e86bca543eac28fc0c80d266dfafacc4fc9094d6 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle_de_mariage/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle_de_mariage/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "salle_de_mariage/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<br>
<br>
  

<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link href=\"https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Monoton&family=Yeon+Sung&display=swap\" rel=\"stylesheet\">

  <div id=\"about\">
    <div data-aos=\"zoom-in\" id=\"img-div\">
    <img src=\"/imgtraiteurs/";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["traiteurs"]) || array_key_exists("traiteurs", $context) ? $context["traiteurs"] : (function () { throw new RuntimeError('Variable "traiteurs" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15), "html", null, true);
        echo "\" id=\"me-img\" alt=\"John Doe\">
    </div>
    <div id=\"desc-self\">
      <h2>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["traiteurs"]) || array_key_exists("traiteurs", $context) ? $context["traiteurs"] : (function () { throw new RuntimeError('Variable "traiteurs" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "</h2>
     
    </div>
    <br>
    <div id=\"card-parent\">
      
      <div data-aos=\"flip-left\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"1000\" class=\"card-r\" id=\"\">
       <h2 style=\"font-family: 'Yeon Sung', cursive;\">
         <span class=\"filled-text\">S</span>
         <span class=\"filled-text\">A</span>
         <span class=\"filled-text\">L</span>
         <span class=\"filled-text\">L</span>
         <span class=\"filled-text\">E</span>
         <span class=\"filled-text\">F</span>
         <span class=\"filled-text\">??</span>
         <span class=\"filled-text\">T</span>
         <span class=\"filled-text\">E</span>
         
         </h2>
        <h2>
         ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["traiteurs"]) || array_key_exists("traiteurs", $context) ? $context["traiteurs"] : (function () { throw new RuntimeError('Variable "traiteurs" does not exist.', 38, $this->source); })()), "emplacement", [], "any", false, false, false, 38), "html", null, true);
        echo "</h2>
        <p> ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["traiteurs"]) || array_key_exists("traiteurs", $context) ? $context["traiteurs"] : (function () { throw new RuntimeError('Variable "traiteurs" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), "html", null, true);
        echo "</p>
      </div>
      
      <div data-aos=\"flip-left\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"1000\" class=\"card-r\" id=\"\">
        <h2 style=\"font-family: 'Yeon Sung', cursive;\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["traiteurs"]) || array_key_exists("traiteurs", $context) ? $context["traiteurs"] : (function () { throw new RuntimeError('Variable "traiteurs" does not exist.', 43, $this->source); })()), "nom", [], "any", false, false, false, 43), "html", null, true);
        echo "</h2>
          <p> ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["traiteurs"]) || array_key_exists("traiteurs", $context) ? $context["traiteurs"] : (function () { throw new RuntimeError('Variable "traiteurs" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44), "html", null, true);
        echo "</p>
          <a href=\"#\"<button type=\"submit\" class=\"btn btn-success \" style=\"border-radius: 30%;\">reserver</button></a>
          <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("traiteurs");
        echo "\"<button type=\"submit\" class=\"btn btn-success \" style=\"border-radius: 30%;\">Back</button></a>
      </div>
     
    </div>
      
      
    </div>
  </div>
  



<h2 class=\"text-capitalize\" >Commentaires <span >";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["traiteurs"]) || array_key_exists("traiteurs", $context) ? $context["traiteurs"] : (function () { throw new RuntimeError('Variable "traiteurs" does not exist.', 58, $this->source); })()), "getCommentaire", [], "any", false, false, false, 58), "count", [], "any", false, false, false, 58), "html", null, true);
        echo "</span></h2>
                
                ";
        // line 60
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 61
            echo "                <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_add");
            echo "\" method=\"post\">
                <div>
                        <div class=\"form-group\">
                            <textarea type=\"text\" placeholder=\"Ajouter votre commentaire\" rows=\"5\" cols=\"20\" name=\"_comment\" id=\"comment\" required class=\"form-control\"></textarea>
                        </div>
                        <div class=\"form-group\">
                            <button class=\"btn btn-primary\" id=\"login\" name=\"login\">
                                Valider
                            </button>
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"post_id\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["traiteurs"]) || array_key_exists("traiteurs", $context) ? $context["traiteurs"] : (function () { throw new RuntimeError('Variable "traiteurs" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\">
                    </div>
                </form>
                <hr>
                ";
        } else {
            // line 77
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-link\">Connectez vous pour commenter</a>
                ";
        }
        // line 79
        echo "                <!-- show comments -->
                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["traiteurs"]) || array_key_exists("traiteurs", $context) ? $context["traiteurs"] : (function () { throw new RuntimeError('Variable "traiteurs" does not exist.', 80, $this->source); })()), "getCommentaire", [], "any", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 81
            echo "                <div class=\"media mt-3\">
                    <div class=\"media-body\">
                        <span class=\"comment-username\">";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "nomutilisateur", [], "any", false, false, false, 83), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "createdAt", [], "any", false, false, false, 83), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</span>
                        <p class=\"comment mt-2\">";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "text", [], "any", false, false, false, 84), "html", null, true);
            echo "</p>
                    </div>
                    <hr>
                </div>
                </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "            </div>
           
                
        </div>
<style>
@import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);

@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
h2{
    color: #9b59b6;
}
.comment-username{
    font-size: 16px;
    font-style: italic;
    font-weight: 500;
}
.comment{
    font-size: 14px;
    line-height: 24px;
    font-weight: 400;
    letter-spacing: 1px;
    background-color: beige;
    padding: 20px;
    border-radius: 5px;
    
}

a {
  text-decoration: none;
  color: #5C7FB8
}

a:hover {
  text-decoration: underline;
}

.movie-card {
  font: 14px/22px \"Lato\", Arial, sans-serif;
  color: #A9A8A3;
  padding: 40px 0;
}



.hero {
  height: 342px;  
  margin:0;
  position: relative;
  overflow: hidden;
  z-index:1;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
    
}

.cover {
  width:30%; height:50%;
 
  position: absolute;
  top: 300px;
  left: 40px;
  z-index: 4;
}

.details {
  
  padding: 190px 0 0 280px;
}
  
  
  
  
  
  .likes {
    margin-left: 24px;
  }
  
  
  .likes:before {
    position: relative;
    top: 2px;
    padding-right: 7px;
  }



.description {
  
  bottom: 0px;
  height: 200px;
  font-size: 16px;
  line-height: 26px;
  color: #B1B0AC;
  
}

.column1 {
  padding-left: 50px;
  padding-top: 120px;
  width: 220px;
  float: left;
  text-align: center;
}

.tag {
  background: white;
  border-radius: 10px;
  padding: 3px 8px;
  font-size: 14px;
  margin-right: 4px;
  line-height: 35px;
  cursor: pointer;
}

.tag:hover {
  background: #ddd;
}

.column2 {
  padding-left: 41px;
  padding-top: 30px;
  margin-left: 20px;
  width: 480px;
  float: left;
}

main{
  max-width: 800px;
  margin: 0 auto;
  border: 0px solid red;
  display: block;
}
#about{
  padding: 10px;
  text-align: center;
  margin-top: 40px;
}

#me-img{
  width: 200px;
  border-radius: 50%;
  height: 200px;
  -webkit-box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.75);
  -moz-box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.75);
  box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.75);
  animation-name: img-beat;
  animation-duration: 2s;
  animation-iteration-count: infinite;
}
#img-div:hover{
  transform: scale(0.94);
}
#desc-self h2{
  color: #00adb5;
}
#desc-self{
  color: #fff;
}
.card-r{
  background: #393e46;
  padding: 10px;
  border-radius: 10px;
  -webkit-box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.75);
  -moz-box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.75);
  box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.75);
  display: block;
}
.card-r h2{
  color: #00adb5;
}
.card-r p{
  color: #fff;
}
#card-parent{
  display: flex;
  flex-wrap: nowrap;
  padding: 10px;
}
#card-parent>div{
  width: 50vw;
  margin-left: 10px;
}
.type-effect{
  white-space: nowrap;
  overflow: hidden;
  width: 30em;
  animation: type 4s steps(60, end); 
  text-align: center;
  margin: 0 auto;
  max-width: 400px;
}
@keyframes type{ 
  from { width: 0; } 
}

.filled-text{
  background: #00adb5;
  border-radius: 4px;
  color: #393e46;
  padding: 4px 6px 4px 6px;
}
/* width */
::-webkit-scrollbar {
  width: 4px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #393e46;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #00adb5;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #00adb5
}
@media only screen and (max-width: 600px) {
  #card-parent{
    flex-direction: column;
    display: block;
    margin-bottom: 5px;
  }
  #card-parent>div{
    width: 90%;
    margin-left: -10px;
    margin: 0 auto;
    display: block;
    margin-top: 10px;
  }

}
#parent-loader{
  height: 100vh !important;
  width: 100%;
  justify-content: center;
  align-items: center;
}
#loader { 
  margin: 0 auto;
  margin-top: 30vh;
  border: 5px solid #00adb5; 
  border-radius: 50%; 
  border-top: 5px solid #444444; 
  width: 30px; 
  height: 30px; 
  animation: spin 1s linear infinite; 
} 
@keyframes img-beat {
  25% {
    transform: scale(0.94);
  }
  50% {
    transform: scale(1);
  }
  75%{
    transform: scale(0.94);
  }
}












</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "salle_de_mariage/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 91,  219 => 84,  213 => 83,  209 => 81,  205 => 80,  202 => 79,  196 => 77,  188 => 72,  184 => 71,  170 => 61,  168 => 60,  163 => 58,  148 => 46,  143 => 44,  139 => 43,  132 => 39,  128 => 38,  105 => 18,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello!{% endblock %}

{% block body %}
<br>
<br>
  

<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link href=\"https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Monoton&family=Yeon+Sung&display=swap\" rel=\"stylesheet\">

  <div id=\"about\">
    <div data-aos=\"zoom-in\" id=\"img-div\">
    <img src=\"/imgtraiteurs/{{ traiteurs.image}}\" id=\"me-img\" alt=\"John Doe\">
    </div>
    <div id=\"desc-self\">
      <h2>{{ traiteurs.nom}}</h2>
     
    </div>
    <br>
    <div id=\"card-parent\">
      
      <div data-aos=\"flip-left\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"1000\" class=\"card-r\" id=\"\">
       <h2 style=\"font-family: 'Yeon Sung', cursive;\">
         <span class=\"filled-text\">S</span>
         <span class=\"filled-text\">A</span>
         <span class=\"filled-text\">L</span>
         <span class=\"filled-text\">L</span>
         <span class=\"filled-text\">E</span>
         <span class=\"filled-text\">F</span>
         <span class=\"filled-text\">??</span>
         <span class=\"filled-text\">T</span>
         <span class=\"filled-text\">E</span>
         
         </h2>
        <h2>
         {{ traiteurs.emplacement}}</h2>
        <p> {{ traiteurs.description}}</p>
      </div>
      
      <div data-aos=\"flip-left\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"1000\" class=\"card-r\" id=\"\">
        <h2 style=\"font-family: 'Yeon Sung', cursive;\">{{ traiteurs.nom}}</h2>
          <p> {{ traiteurs.description}}</p>
          <a href=\"#\"<button type=\"submit\" class=\"btn btn-success \" style=\"border-radius: 30%;\">reserver</button></a>
          <a href=\"{{ path('traiteurs')}}\"<button type=\"submit\" class=\"btn btn-success \" style=\"border-radius: 30%;\">Back</button></a>
      </div>
     
    </div>
      
      
    </div>
  </div>
  



<h2 class=\"text-capitalize\" >Commentaires <span >{{traiteurs.getCommentaire.count}}</span></h2>
                
                {% if is_granted('ROLE_USER') %}
                <form action=\"{{path('commentaire_add')}}\" method=\"post\">
                <div>
                        <div class=\"form-group\">
                            <textarea type=\"text\" placeholder=\"Ajouter votre commentaire\" rows=\"5\" cols=\"20\" name=\"_comment\" id=\"comment\" required class=\"form-control\"></textarea>
                        </div>
                        <div class=\"form-group\">
                            <button class=\"btn btn-primary\" id=\"login\" name=\"login\">
                                Valider
                            </button>
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{csrf_token('authenticate')}}\">
                        <input type=\"hidden\" name=\"post_id\" value=\"{{traiteurs.id}}\">
                    </div>
                </form>
                <hr>
                {% else %}
                    <a href=\"{{path('app_login')}}\" class=\"btn btn-link\">Connectez vous pour commenter</a>
                {% endif %}
                <!-- show comments -->
                {% for commentaire in traiteurs.getCommentaire %}
                <div class=\"media mt-3\">
                    <div class=\"media-body\">
                        <span class=\"comment-username\">{{commentaire.nomutilisateur}} {{commentaire.createdAt|date(\"F jS \\\\a\\\\t g:ia\")}}</span>
                        <p class=\"comment mt-2\">{{commentaire.text}}</p>
                    </div>
                    <hr>
                </div>
                </div>

                {% endfor %}
            </div>
           
                
        </div>
<style>
@import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);

@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
h2{
    color: #9b59b6;
}
.comment-username{
    font-size: 16px;
    font-style: italic;
    font-weight: 500;
}
.comment{
    font-size: 14px;
    line-height: 24px;
    font-weight: 400;
    letter-spacing: 1px;
    background-color: beige;
    padding: 20px;
    border-radius: 5px;
    
}

a {
  text-decoration: none;
  color: #5C7FB8
}

a:hover {
  text-decoration: underline;
}

.movie-card {
  font: 14px/22px \"Lato\", Arial, sans-serif;
  color: #A9A8A3;
  padding: 40px 0;
}



.hero {
  height: 342px;  
  margin:0;
  position: relative;
  overflow: hidden;
  z-index:1;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
    
}

.cover {
  width:30%; height:50%;
 
  position: absolute;
  top: 300px;
  left: 40px;
  z-index: 4;
}

.details {
  
  padding: 190px 0 0 280px;
}
  
  
  
  
  
  .likes {
    margin-left: 24px;
  }
  
  
  .likes:before {
    position: relative;
    top: 2px;
    padding-right: 7px;
  }



.description {
  
  bottom: 0px;
  height: 200px;
  font-size: 16px;
  line-height: 26px;
  color: #B1B0AC;
  
}

.column1 {
  padding-left: 50px;
  padding-top: 120px;
  width: 220px;
  float: left;
  text-align: center;
}

.tag {
  background: white;
  border-radius: 10px;
  padding: 3px 8px;
  font-size: 14px;
  margin-right: 4px;
  line-height: 35px;
  cursor: pointer;
}

.tag:hover {
  background: #ddd;
}

.column2 {
  padding-left: 41px;
  padding-top: 30px;
  margin-left: 20px;
  width: 480px;
  float: left;
}

main{
  max-width: 800px;
  margin: 0 auto;
  border: 0px solid red;
  display: block;
}
#about{
  padding: 10px;
  text-align: center;
  margin-top: 40px;
}

#me-img{
  width: 200px;
  border-radius: 50%;
  height: 200px;
  -webkit-box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.75);
  -moz-box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.75);
  box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.75);
  animation-name: img-beat;
  animation-duration: 2s;
  animation-iteration-count: infinite;
}
#img-div:hover{
  transform: scale(0.94);
}
#desc-self h2{
  color: #00adb5;
}
#desc-self{
  color: #fff;
}
.card-r{
  background: #393e46;
  padding: 10px;
  border-radius: 10px;
  -webkit-box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.75);
  -moz-box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.75);
  box-shadow: 0px 0px 13px 0px rgba(0,0,0,0.75);
  display: block;
}
.card-r h2{
  color: #00adb5;
}
.card-r p{
  color: #fff;
}
#card-parent{
  display: flex;
  flex-wrap: nowrap;
  padding: 10px;
}
#card-parent>div{
  width: 50vw;
  margin-left: 10px;
}
.type-effect{
  white-space: nowrap;
  overflow: hidden;
  width: 30em;
  animation: type 4s steps(60, end); 
  text-align: center;
  margin: 0 auto;
  max-width: 400px;
}
@keyframes type{ 
  from { width: 0; } 
}

.filled-text{
  background: #00adb5;
  border-radius: 4px;
  color: #393e46;
  padding: 4px 6px 4px 6px;
}
/* width */
::-webkit-scrollbar {
  width: 4px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #393e46;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #00adb5;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #00adb5
}
@media only screen and (max-width: 600px) {
  #card-parent{
    flex-direction: column;
    display: block;
    margin-bottom: 5px;
  }
  #card-parent>div{
    width: 90%;
    margin-left: -10px;
    margin: 0 auto;
    display: block;
    margin-top: 10px;
  }

}
#parent-loader{
  height: 100vh !important;
  width: 100%;
  justify-content: center;
  align-items: center;
}
#loader { 
  margin: 0 auto;
  margin-top: 30vh;
  border: 5px solid #00adb5; 
  border-radius: 50%; 
  border-top: 5px solid #444444; 
  width: 30px; 
  height: 30px; 
  animation: spin 1s linear infinite; 
} 
@keyframes img-beat {
  25% {
    transform: scale(0.94);
  }
  50% {
    transform: scale(1);
  }
  75%{
    transform: scale(0.94);
  }
}












</style>

{% endblock %}", "salle_de_mariage/show.html.twig", "/opt/lampp/htdocs/sitemariage/templates/salle_de_mariage/show.html.twig");
    }
}
