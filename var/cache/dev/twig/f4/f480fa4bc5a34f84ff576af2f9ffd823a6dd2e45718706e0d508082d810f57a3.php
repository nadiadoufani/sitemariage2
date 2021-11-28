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

/* musique_de_mariage/index.html.twig */
class __TwigTemplate_9ad9725c5d99771229f0e65338b9e94f0dd42350c94a0b5aeaa4efdc34d5bc70 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "musique_de_mariage/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "musique_de_mariage/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "musique_de_mariage/index.html.twig", 1);
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

        echo "Hello MusiqueDeMariageController!";
        
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
        echo "

<div>
    
    <h3>Animation mariage</h3>
    <p style=\"text-align: center;\">
    Vous cherchez une animation originale pour votre mariage ? Nous vous aidons ici à trouver les meilleures
    <br> propositions d’animations de mariage chic, de mariage champêtre. N’hésitez pas à voir les choses en grand
    <br> en choisissant une animation de mariage musicale sur le thème de votre choix. Parce que l’amour n’a pas d’âge,
    <br> optez aussi pour des jeux de mariage originaux pour amuser les petits comme les grands !


    </p>
    </div>
<div>
  <ul class=\"cards\">
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["musiquedemariage"]) || array_key_exists("musiquedemariage", $context) ? $context["musiquedemariage"] : (function () { throw new RuntimeError('Variable "musiquedemariage" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "     <li>
      <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_detail_musique", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"card\">
            <img src=\"/imgmusiques/";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 25), "html", null, true);
            echo "\" class=\"card_image\" alt=\"\" />
        <div class=\"card_overlay\">
          <div class=\"card-header\">
            <svg class=\"card-arc\" xmlns=\"http://www.w3.org/2000/svg\">
              <path/>
            </svg>
            <img src=\"/imgmusiques/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 31), "html", null, true);
            echo "\" class=\"card-thumb\" />
            <div class=\"card-header-text\">
              <h3 class=\"card-title\"> ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</h3>              
            </div>
          </div>
          <p class=\"card-description\"> 
            ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 37), "html", null, true);
            echo "
          </p>
        </div>
      </a>
    </li>   
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "  </ul>
  
</div>
<div style=\" margin: 100px;
 text-align: center;\">
 <a class=\"btn-blink1\" href=\"\">Contactez-Nous !!!</a>
</div> 
<div class=\"d-flex justify-content-end\" style=\"margin-top: 60px;\"> 
 <div>
   <h3>Comment choisir la musique de votre mariage ?</h3>
<p style=\"margin-left: 10px;\">Le moment de choisir la musique de votre mariage est arrivé. Il va falloir penser à un large
<br> répertoire de chansons issues de plusieurs styles musicaux pour votre cérémonie,
<br> votre vin d’honneur, les différentes apparitions du couple, l’ouverture du bal de mariage, 
<br>vos animations et la soirée endiablée prévue pour la clôture de la célébration.
<br>

Il ne suffit pas de sélectionner de bons morceaux susceptibles de plaire au plus grand nombre,
<br> l’enchaînement des musiques, la qualité du son, le matériel et les lumières sont autant 
<br> d’éléments essentiels à un mariage joyeux dont l’ambiance ne retombe jamais.
<br>

Afin de ne vous préoccuper de rien le jour de l’événement et et de tout préparer en amont,
<br> vous devrez faire appel à un ou plusieurs prestataires au savoir-faire avéré dont la
 <br> mission sera d’émouvoir puis de faire danser vos invités, toute génération comprise. </p>
  <img src=\"https://lh3.googleusercontent.com/proxy/Z0wGh96D97pQknwXu7OQjkgeWjlGJLqqIm7shW_DHShLmx-FIJL_HOpkQ2aNPMJ-aaYSoeJZ4p5Hke518k70R7vEbp9f8KSsQd39\" alt=\"\" style=\"height: 215px;width: 400px;margin-left: 5px;\">
<img src=\"https://www.zankyou.fr/images/mag-card-c/ed1/1fbd/878/623/-/fr/wp-content/uploads/2015/03/victoriagregory0686.jpg\" alt=\"\" style=\"height: 215px;width: 400px;margin-left: 5px;margin-top: 5px;\">
</div> 
<div style=\"margin-top: 40px;\">
<img src=\"https://i.ytimg.com/vi/ZfuQ1YZmofA/maxresdefault.jpg\" alt=\"\"><br>
<img src=\"https://us.123rf.com/450wm/asphoto777/asphoto7771701/asphoto777170101038/69514093-petryky-ukraine-14-mai-2016-f%C3%AAte-de-mariage-de-danse-avec-les-invit%C3%A9s-et-chef-de-file-toastmaster.jpg?ver=6\" alt=\"\" style=\"margin-top: 5px;width: 900px;\">

</div>  
  </div>
<style>
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap');
:root {
  --curve: 40;
}



.cards{
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(300px, 1fr));
  gap:2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style: none;
}

.card {
  
  display: block;
  height: 100%;
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
}

.card-image{
  width:100%;
  
}

.card_overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
  border-radius: calc(var(--curve) * 1px);
  background-color: var(--surface-color);
  transform: translateY(100%);
  transition: 0.2s ease-in-out;
}

.card:hover .card_overlay {
  transform: translateY(0);
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
}

.card-header{
  position: relative;
  display:flex;
  align-items: center;
  gap:2rem;
  border-radius: calc(var(--curve) * 1px) 0 0 0; 
  background-color:#cfc6c7;
  padding:2em;
  transform: translateY(-100%); 
  transition: 0.2s ease-in-out; 

}

.card-arc{
  width:5em;
  
  position:absolute;
  bottom:100%;
  right:0;
  z-index: 1;
}

.card-arc path{
  fill:var(--surface-color);
  d: path(\"M 40 80 c 22 0 40 -22 40 -40 v 40 Z\");
}

.card:hover .card-header{
  transform: translateY(0);  
}

.card-thumb{
  flex-shrink: 0;
  width:3.125em;
  height:3.125em;
  border-radius: 50%;
}

.card-title{
  font-size: 1.3rem;
  margin:0 0 0.3em;
  color: #52b17a;
}

.card-description {
  padding-bottom: 10rem;
  margin:0;
  color: #bb4b1b;
  display:-webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
  text-align: center;
  background-color: #cfc6c7;
  font-weight: bold;
  font-size: 18px;
}
        
      
 h3{
   color:hotpink;
   text-align: center;
 }   


.btn-blink1 {
 position: relative;
 display: inline-block;
 padding: 15px 25px;
 border-radius: 5px;
 font-family: sans-serif;
 font-size: 1.2em;
 line-height: 1;
 font-weight: 700;
 letter-spacing: 1px;
 text-transform: uppercase;
 text-decoration: none;
 color:palevioletred;
 animation: anim-btn1 1s ease-in-out infinite alternate;
}

@keyframes anim-btn1 {
 from {
  transform: scale(1);
  background-color:pink;
  text-shadow: 0 1px 3px rgba(0, 0, 0, .15);
  box-shadow: 0 0 0 transparent, 0 0 5px rgba(0, 0, 0, .25) inset;
 }
 to {
  transform: scale(1.1);
  background-color:plum;
  text-shadow: 0 2px 6px rgba(0, 0, 0, .35);
  box-shadow: 0 0 12px purple, 0 0 10px rgba(0, 0, 0, .5) inset;
 }
}

</style>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "musique_de_mariage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 43,  138 => 37,  131 => 33,  126 => 31,  117 => 25,  113 => 24,  110 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MusiqueDeMariageController!{% endblock %}

{% block body %}


<div>
    
    <h3>Animation mariage</h3>
    <p style=\"text-align: center;\">
    Vous cherchez une animation originale pour votre mariage ? Nous vous aidons ici à trouver les meilleures
    <br> propositions d’animations de mariage chic, de mariage champêtre. N’hésitez pas à voir les choses en grand
    <br> en choisissant une animation de mariage musicale sur le thème de votre choix. Parce que l’amour n’a pas d’âge,
    <br> optez aussi pour des jeux de mariage originaux pour amuser les petits comme les grands !


    </p>
    </div>
<div>
  <ul class=\"cards\">
  {% for item in musiquedemariage %}
     <li>
      <a href=\"{{path('home_detail_musique',{'id':item.id})}}\" class=\"card\">
            <img src=\"/imgmusiques/{{ item.image }}\" class=\"card_image\" alt=\"\" />
        <div class=\"card_overlay\">
          <div class=\"card-header\">
            <svg class=\"card-arc\" xmlns=\"http://www.w3.org/2000/svg\">
              <path/>
            </svg>
            <img src=\"/imgmusiques/{{ item.image }}\" class=\"card-thumb\" />
            <div class=\"card-header-text\">
              <h3 class=\"card-title\"> {{ item.nom}}</h3>              
            </div>
          </div>
          <p class=\"card-description\"> 
            {{ item.description }}
          </p>
        </div>
      </a>
    </li>   
     {% endfor %}
  </ul>
  
</div>
<div style=\" margin: 100px;
 text-align: center;\">
 <a class=\"btn-blink1\" href=\"\">Contactez-Nous !!!</a>
</div> 
<div class=\"d-flex justify-content-end\" style=\"margin-top: 60px;\"> 
 <div>
   <h3>Comment choisir la musique de votre mariage ?</h3>
<p style=\"margin-left: 10px;\">Le moment de choisir la musique de votre mariage est arrivé. Il va falloir penser à un large
<br> répertoire de chansons issues de plusieurs styles musicaux pour votre cérémonie,
<br> votre vin d’honneur, les différentes apparitions du couple, l’ouverture du bal de mariage, 
<br>vos animations et la soirée endiablée prévue pour la clôture de la célébration.
<br>

Il ne suffit pas de sélectionner de bons morceaux susceptibles de plaire au plus grand nombre,
<br> l’enchaînement des musiques, la qualité du son, le matériel et les lumières sont autant 
<br> d’éléments essentiels à un mariage joyeux dont l’ambiance ne retombe jamais.
<br>

Afin de ne vous préoccuper de rien le jour de l’événement et et de tout préparer en amont,
<br> vous devrez faire appel à un ou plusieurs prestataires au savoir-faire avéré dont la
 <br> mission sera d’émouvoir puis de faire danser vos invités, toute génération comprise. </p>
  <img src=\"https://lh3.googleusercontent.com/proxy/Z0wGh96D97pQknwXu7OQjkgeWjlGJLqqIm7shW_DHShLmx-FIJL_HOpkQ2aNPMJ-aaYSoeJZ4p5Hke518k70R7vEbp9f8KSsQd39\" alt=\"\" style=\"height: 215px;width: 400px;margin-left: 5px;\">
<img src=\"https://www.zankyou.fr/images/mag-card-c/ed1/1fbd/878/623/-/fr/wp-content/uploads/2015/03/victoriagregory0686.jpg\" alt=\"\" style=\"height: 215px;width: 400px;margin-left: 5px;margin-top: 5px;\">
</div> 
<div style=\"margin-top: 40px;\">
<img src=\"https://i.ytimg.com/vi/ZfuQ1YZmofA/maxresdefault.jpg\" alt=\"\"><br>
<img src=\"https://us.123rf.com/450wm/asphoto777/asphoto7771701/asphoto777170101038/69514093-petryky-ukraine-14-mai-2016-f%C3%AAte-de-mariage-de-danse-avec-les-invit%C3%A9s-et-chef-de-file-toastmaster.jpg?ver=6\" alt=\"\" style=\"margin-top: 5px;width: 900px;\">

</div>  
  </div>
<style>
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap');
:root {
  --curve: 40;
}



.cards{
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(300px, 1fr));
  gap:2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style: none;
}

.card {
  
  display: block;
  height: 100%;
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
}

.card-image{
  width:100%;
  
}

.card_overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
  border-radius: calc(var(--curve) * 1px);
  background-color: var(--surface-color);
  transform: translateY(100%);
  transition: 0.2s ease-in-out;
}

.card:hover .card_overlay {
  transform: translateY(0);
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
}

.card-header{
  position: relative;
  display:flex;
  align-items: center;
  gap:2rem;
  border-radius: calc(var(--curve) * 1px) 0 0 0; 
  background-color:#cfc6c7;
  padding:2em;
  transform: translateY(-100%); 
  transition: 0.2s ease-in-out; 

}

.card-arc{
  width:5em;
  
  position:absolute;
  bottom:100%;
  right:0;
  z-index: 1;
}

.card-arc path{
  fill:var(--surface-color);
  d: path(\"M 40 80 c 22 0 40 -22 40 -40 v 40 Z\");
}

.card:hover .card-header{
  transform: translateY(0);  
}

.card-thumb{
  flex-shrink: 0;
  width:3.125em;
  height:3.125em;
  border-radius: 50%;
}

.card-title{
  font-size: 1.3rem;
  margin:0 0 0.3em;
  color: #52b17a;
}

.card-description {
  padding-bottom: 10rem;
  margin:0;
  color: #bb4b1b;
  display:-webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
  text-align: center;
  background-color: #cfc6c7;
  font-weight: bold;
  font-size: 18px;
}
        
      
 h3{
   color:hotpink;
   text-align: center;
 }   


.btn-blink1 {
 position: relative;
 display: inline-block;
 padding: 15px 25px;
 border-radius: 5px;
 font-family: sans-serif;
 font-size: 1.2em;
 line-height: 1;
 font-weight: 700;
 letter-spacing: 1px;
 text-transform: uppercase;
 text-decoration: none;
 color:palevioletred;
 animation: anim-btn1 1s ease-in-out infinite alternate;
}

@keyframes anim-btn1 {
 from {
  transform: scale(1);
  background-color:pink;
  text-shadow: 0 1px 3px rgba(0, 0, 0, .15);
  box-shadow: 0 0 0 transparent, 0 0 5px rgba(0, 0, 0, .25) inset;
 }
 to {
  transform: scale(1.1);
  background-color:plum;
  text-shadow: 0 2px 6px rgba(0, 0, 0, .35);
  box-shadow: 0 0 12px purple, 0 0 10px rgba(0, 0, 0, .5) inset;
 }
}

</style>



{% endblock %}", "musique_de_mariage/index.html.twig", "/opt/lampp/htdocs/sitemariage/templates/musique_de_mariage/index.html.twig");
    }
}
