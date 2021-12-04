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

/* home/show.html.twig */
class __TwigTemplate_2acee5c29faeff5a1dc43f81609ee3b052c1b6fb7af22a4f28fe4baf7d961e6c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/show.html.twig", 1);
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
      <img src=\"/imgsalles/";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salledemariage"]) || array_key_exists("salledemariage", $context) ? $context["salledemariage"] : (function () { throw new RuntimeError('Variable "salledemariage" does not exist.', 14, $this->source); })()), "image", [], "any", false, false, false, 14), "html", null, true);
        echo "\" id=\"me-img\" alt=\"John Doe\">
    </div>
    <div id=\"desc-self\">
      <h2>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salledemariage"]) || array_key_exists("salledemariage", $context) ? $context["salledemariage"] : (function () { throw new RuntimeError('Variable "salledemariage" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
        echo "</h2>
     
    </div>
    <br>
    <div id=\"card-parent\">
      
      <div data-aos=\"flip-left\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"1000\" class=\"card-r\" id=\"\">
       <h2 style=\"font-family: 'Yeon Sung', cursive;\">
         <span class=\"filled-text\">M</span>
         <span class=\"filled-text\">A</span>
         <span class=\"filled-text\">R</span>
         <span class=\"filled-text\">I</span>
         <span class=\"filled-text\">A</span>
         <span class=\"filled-text\">G</span>
         <span class=\"filled-text\">E</span>
         </h2>
        <h2>
         ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salledemariage"]) || array_key_exists("salledemariage", $context) ? $context["salledemariage"] : (function () { throw new RuntimeError('Variable "salledemariage" does not exist.', 34, $this->source); })()), "prix", [], "any", false, false, false, 34), "html", null, true);
        echo "</h2>
        <p> ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salledemariage"]) || array_key_exists("salledemariage", $context) ? $context["salledemariage"] : (function () { throw new RuntimeError('Variable "salledemariage" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), "html", null, true);
        echo "</p>
      </div>
      
      <div data-aos=\"flip-left\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"1000\" class=\"card-r\" id=\"\">
        <h2 style=\"font-family: 'Yeon Sung', cursive;\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salledemariage"]) || array_key_exists("salledemariage", $context) ? $context["salledemariage"] : (function () { throw new RuntimeError('Variable "salledemariage" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), "html", null, true);
        echo "</h2>
          <p> ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salledemariage"]) || array_key_exists("salledemariage", $context) ? $context["salledemariage"] : (function () { throw new RuntimeError('Variable "salledemariage" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>
          <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rendez_vous");
        echo "\"<button type=\"submit\" class=\"btn btn-success \" style=\"border-radius: 30%;\">reserver</button></a>
              <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salle_de_mariage");
        echo "\"<button type=\"submit\" class=\"btn btn-success \" style=\"border-radius: 30%;\">Back</button></a>
      </div>
      
    </div>
    
      
      
      
    </div>
  </div>





<h2 class=\"text-capitalize\" >Commentaires <span>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["salledemariage"]) || array_key_exists("salledemariage", $context) ? $context["salledemariage"] : (function () { throw new RuntimeError('Variable "salledemariage" does not exist.', 57, $this->source); })()), "getCommentaire", [], "any", false, false, false, 57), "count", [], "any", false, false, false, 57), "html", null, true);
        echo "</span></h2>
                
                ";
        // line 59
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 60
            echo "                <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_add");
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
            // line 70
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"post_id\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salledemariage"]) || array_key_exists("salledemariage", $context) ? $context["salledemariage"] : (function () { throw new RuntimeError('Variable "salledemariage" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71), "html", null, true);
            echo "\">
                    </div>
                </form>
                <hr>
                ";
        } else {
            // line 76
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-link\">Connectez vous pour commenter</a>
                ";
        }
        // line 78
        echo "                <!-- show comments -->
                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["salledemariage"]) || array_key_exists("salledemariage", $context) ? $context["salledemariage"] : (function () { throw new RuntimeError('Variable "salledemariage" does not exist.', 79, $this->source); })()), "getCommentaire", [], "any", false, false, false, 79));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 80
            echo "                <div class=\"media mt-3\">
                    <div class=\"media-body\">
                        <span class=\"comment-username\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentaire"], "user", [], "any", false, false, false, 82), "nom", [], "any", false, false, false, 82), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "createdAt", [], "any", false, false, false, 82), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</span>
                        <p class=\"comment mt-2\">";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "text", [], "any", false, false, false, 83), "html", null, true);
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
        // line 90
        echo "            </div>
           
                
        </div>
<style>
@import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);

@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

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
        return "home/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 90,  221 => 83,  215 => 82,  211 => 80,  207 => 79,  204 => 78,  198 => 76,  190 => 71,  186 => 70,  172 => 60,  170 => 59,  165 => 57,  147 => 42,  143 => 41,  139 => 40,  135 => 39,  128 => 35,  124 => 34,  104 => 17,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
      <img src=\"/imgsalles/{{ salledemariage.image}}\" id=\"me-img\" alt=\"John Doe\">
    </div>
    <div id=\"desc-self\">
      <h2>{{ salledemariage.nom}}</h2>
     
    </div>
    <br>
    <div id=\"card-parent\">
      
      <div data-aos=\"flip-left\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"1000\" class=\"card-r\" id=\"\">
       <h2 style=\"font-family: 'Yeon Sung', cursive;\">
         <span class=\"filled-text\">M</span>
         <span class=\"filled-text\">A</span>
         <span class=\"filled-text\">R</span>
         <span class=\"filled-text\">I</span>
         <span class=\"filled-text\">A</span>
         <span class=\"filled-text\">G</span>
         <span class=\"filled-text\">E</span>
         </h2>
        <h2>
         {{ salledemariage.prix}}</h2>
        <p> {{ salledemariage.description}}</p>
      </div>
      
      <div data-aos=\"flip-left\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"1000\" class=\"card-r\" id=\"\">
        <h2 style=\"font-family: 'Yeon Sung', cursive;\">{{ salledemariage.nom}}</h2>
          <p> {{ salledemariage.description}}</p>
          <a href=\"{{ path('rendez_vous')}}\"<button type=\"submit\" class=\"btn btn-success \" style=\"border-radius: 30%;\">reserver</button></a>
              <a href=\"{{ path('salle_de_mariage')}}\"<button type=\"submit\" class=\"btn btn-success \" style=\"border-radius: 30%;\">Back</button></a>
      </div>
      
    </div>
    
      
      
      
    </div>
  </div>





<h2 class=\"text-capitalize\" >Commentaires <span>{{salledemariage.getCommentaire.count}}</span></h2>
                
                {% if is_granted('ROLE_USER') %}
                <form action=\"{{path('comment_add')}}\" method=\"post\">
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
                        <input type=\"hidden\" name=\"post_id\" value=\"{{salledemariage.id}}\">
                    </div>
                </form>
                <hr>
                {% else %}
                    <a href=\"{{path('app_login')}}\" class=\"btn btn-link\">Connectez vous pour commenter</a>
                {% endif %}
                <!-- show comments -->
                {% for commentaire in salledemariage.getCommentaire %}
                <div class=\"media mt-3\">
                    <div class=\"media-body\">
                        <span class=\"comment-username\">{{commentaire.user.nom}} {{commentaire.createdAt|date(\"F jS \\\\a\\\\t g:ia\")}}</span>
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

{% endblock %}", "home/show.html.twig", "/opt/lampp/htdocs/sitemariage2/templates/home/show.html.twig");
    }
}
