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

/* photographe/index.html.twig */
class __TwigTemplate_ee20cb116e2762d320c43c6897fbcba877d5a0c3589f3330cde6264ca54fa14c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photographe/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "photographe/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "photographe/index.html.twig", 1);
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

        echo "Hello PhotographeController!";
        
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
        echo "<div class=\"traiteurs\" style=\"margin-top:30px\">
<h3>Photographe Mariage</h3>
<p> Vous engagez un certain nombre de prestataires dans le but d’assurer le bon déroulement de votre mariage et de le rendre unique.
<br> Le photographe, lui, participera autrement à vos festivités, puiqu’il sera chargé de capturer l’ambiance et l’émotion de votre événement pour que vous puissiez le revivre postérieurement. D’où l’importance de bien choisir l’auteur de vos photos de mariage,
<br> souvenirs éternels de votre belle journée.</p>
</div> 
<div class=\"cards-list\">
  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photographe"]) || array_key_exists("photographe", $context) ? $context["photographe"] : (function () { throw new RuntimeError('Variable "photographe" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " 
<div class=\"card 1\">
  <div class=\"card_image\"> 
  <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\"><img src=\"/imgphotographes/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 16), "html", null, true);
            echo "\" /></a> </div>
  <div class=\"card_title title-white\">
    <p style=\"color: palevioletred;\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
  </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</div>
<div style=\" margin: 100px;
 text-align: center;\">
 <a class=\"btn-blink1\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contactez-Nous !!!</a>
</div> 

  <div>
  <h2 style=\" color:hotpink;
text-align: center;margin-top: 20px;\">Services</h2></div>
<div class=\"d-flex justify-content-end\" style=\"margin-top: 40px;margin-left: 10px;margin-right: 10px;\">
<div style=\"background-color: black;\">
  <h3>Mariage</h3>
  <p>Je n'ai pas choisi le monde de la photographie par hasard... 
   l'univers du Mariage
<br> encore moins. Regarder les couples se lover du regard, 
    <br>sentir l'intense douceur qui forme leur intimité et la sensualité 
    <br> de leurs gestes,
     vivre leur complicité jusque dans leurs rires...</p>
</div>
<div style=\"background-color:black;margin-left: 10px;\">
  <h3>Shooting</h3>
  <p>V.O.A vous propose une large gamme de portraits d’exception. 
    <br>Shooting individuels, Shooting de famille ou de couple. 
    <br>V.O.A Reconnue pour son Shooting Prestige 
    <br> et offre également des prestations de Shooting Professionnels,
    <br> de Photos Publicitaires ou bien encore de Photos d’Architecture</p>
</div>
<div style=\"background-color: black;margin-left: 10px;\">
  <h3>Événements</h3>
  <p>V.O.A réalise les reportages de vos événements sur Rabat et 
    <br>partout au Maroc et vous livre vos photos dans les plus brefs délais !
    <br>leur intimité et la sensualité de leurs gestes,
    <br> vivre leur complicité jusque dans leurs rires...</p>
</div>
</div>

<div class=\"d-flex justify-content-end\" style=\"margin-top: 60px;\"> 
 <div>
   <h3>Trouver votre photographe de mariage idéal</h3>
<p>Vous engagez un certain nombre de prestataires dans le but d’assurer le bon déroulement de votre mariage 
  <br> et de le rendre unique. Le photographe, lui, participera autrement à vos festivités, puiqu’il sera chargé 
  <br> de capturer l’ambiance et l’émotion de votre événement pour que vous puissiez le revivre postérieurement.
  <br> D’où l’importance de bien choisir l’auteur de vos photos de mariage, souvenirs éternels de votre belle journée.

  Le premier point primordial pour choisir votre professionnel, c’est le feeling à partir du quel vous construirez une relation de confiance.
  <br> Veillez donc à le rencontrer à une ou plusieurs reprises avant le jour J et prenez le temps de découvrir ses méthodes de travail et sa personnalité.
  
  Disponibilité, bonne humeur, professionnalisme, discrétion, voici en somme les principales qualités que devra posséder votre professionnel
   <br> de la photo de mariage pour un maximum de complicité.
  
  Si vous avez un coup de coeur pour les clichés en ligne d’un photographe, consultez les avis d’autres mariés ayant bénéficié de ses services.
  <br> Organisez ensuite une première rencontre, laissez-vous guider par votre intuition en même temps que vous lui poserez toute une série de questions.</p>
  <img src=\"https://cdn0.mariages.net/vendor/0620/3_2/640/jpg/lionel-grenon-photos-de-couple-tendresse-mariage-dordogne-couple-mariage-cheaval-fleurs-mariee-dentelle-tatouage-bois-bleu-vintage-photographe-specialiste-mariage-211_3_10620-161174059722981.webp\" alt=\"\" style=\"height: 250px;width: 400px;\">
<img src=\"https://cdn0.mariages.net/vendor/0620/3_2/640/jpg/lionel-grenon-clindoeil-photo-details-vintage-bijoux-photo-mariage-rose-amoureux-bouquet-specialiste-photo-mariage-68_3_10620-161174041926525.webp\" alt=\"\" style=\"height: 250px;width: 450px;\">
</div> 
<div style=\"margin-top: 40px;\"><img src=\"https://cdn0.mariages.net/vendor/2633/3_2/640/jpg/pp-682_3_112633.webp\" alt=\"\"><br>
<img src=\"https://cdn0.mariages.net/vendor/2633/original/960/jpg/ee-680_3_112633.webp\" alt=\"\" style=\"margin-top: 5px;\"></div>
</div>
<style>
@import url('https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap');

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

.video12{

text-align: center;
width: 100vw;
height: 100vh;
}
.video12, .video12 video, .video12 .description {
width: 100vw;
height: 60vh;



}

.video12 video {
background: brown;
object-fit: cover;
}
.video12 .description {
display: flex;
align-items: center;
justify-content: center;
}
.video12 h1 {
font-family: \"Akaya Kanadaka\", sans-serif;
color: white;
text-transform: uppercase;
letter-spacing: 1vw;
line-height: 1.2;
font-size: 3vw;
text-align: center;
}
.video12 h1 span {
display: block;
font-size: 10vw;
letter-spacing: 0;
}
/*  */
.main {
background: white;
position: relative;
padding: 1rem;
margin-top: 100vh;
}
.main::before {
content: \"\";
width: 100vw;
height: 100vh;
position: absolute;
top: 0;
left: 0;
top: -100vh;
}

.main{
max-width: 750px;
font-family: \"Akaya Kanadaka\", sans-serif;
font-size:20px;
margin: 1rem auto;
}
h3{
   color:hotpink;
   text-align: center;
 } 
 p{
    text-align: center;  
}
.cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.card {
  margin: 30px auto;
  width: 300px;
  height: 300px;
  border-radius: 40px;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
}

.card .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px;
}

.card .card_image img {
  width: inherit;
  height: inherit;
  border-radius: 40px;
  object-fit: cover;
}

.card .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 30px;
  margin-top: -80px;
  height: 30px;
}

.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

.title-white {
  color: white;
}

.title-black {
  color: black;
}

@media all and (max-width: 500px) {
  .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}


*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "photographe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 25,  122 => 22,  112 => 18,  105 => 16,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PhotographeController!{% endblock %}

{% block body %}
<div class=\"traiteurs\" style=\"margin-top:30px\">
<h3>Photographe Mariage</h3>
<p> Vous engagez un certain nombre de prestataires dans le but d’assurer le bon déroulement de votre mariage et de le rendre unique.
<br> Le photographe, lui, participera autrement à vos festivités, puiqu’il sera chargé de capturer l’ambiance et l’émotion de votre événement pour que vous puissiez le revivre postérieurement. D’où l’importance de bien choisir l’auteur de vos photos de mariage,
<br> souvenirs éternels de votre belle journée.</p>
</div> 
<div class=\"cards-list\">
  {% for item in photographe %} 
<div class=\"card 1\">
  <div class=\"card_image\"> 
  <a href=\"{{path('home_detail',{'id':item.id})}}\"><img src=\"/imgphotographes/{{ item.image }}\" /></a> </div>
  <div class=\"card_title title-white\">
    <p style=\"color: palevioletred;\">{{ item.nom}}</p>
  </div>
</div>
{% endfor %}
</div>
<div style=\" margin: 100px;
 text-align: center;\">
 <a class=\"btn-blink1\" href=\"{{ path('contact')}}\">Contactez-Nous !!!</a>
</div> 

  <div>
  <h2 style=\" color:hotpink;
text-align: center;margin-top: 20px;\">Services</h2></div>
<div class=\"d-flex justify-content-end\" style=\"margin-top: 40px;margin-left: 10px;margin-right: 10px;\">
<div style=\"background-color: black;\">
  <h3>Mariage</h3>
  <p>Je n'ai pas choisi le monde de la photographie par hasard... 
   l'univers du Mariage
<br> encore moins. Regarder les couples se lover du regard, 
    <br>sentir l'intense douceur qui forme leur intimité et la sensualité 
    <br> de leurs gestes,
     vivre leur complicité jusque dans leurs rires...</p>
</div>
<div style=\"background-color:black;margin-left: 10px;\">
  <h3>Shooting</h3>
  <p>V.O.A vous propose une large gamme de portraits d’exception. 
    <br>Shooting individuels, Shooting de famille ou de couple. 
    <br>V.O.A Reconnue pour son Shooting Prestige 
    <br> et offre également des prestations de Shooting Professionnels,
    <br> de Photos Publicitaires ou bien encore de Photos d’Architecture</p>
</div>
<div style=\"background-color: black;margin-left: 10px;\">
  <h3>Événements</h3>
  <p>V.O.A réalise les reportages de vos événements sur Rabat et 
    <br>partout au Maroc et vous livre vos photos dans les plus brefs délais !
    <br>leur intimité et la sensualité de leurs gestes,
    <br> vivre leur complicité jusque dans leurs rires...</p>
</div>
</div>

<div class=\"d-flex justify-content-end\" style=\"margin-top: 60px;\"> 
 <div>
   <h3>Trouver votre photographe de mariage idéal</h3>
<p>Vous engagez un certain nombre de prestataires dans le but d’assurer le bon déroulement de votre mariage 
  <br> et de le rendre unique. Le photographe, lui, participera autrement à vos festivités, puiqu’il sera chargé 
  <br> de capturer l’ambiance et l’émotion de votre événement pour que vous puissiez le revivre postérieurement.
  <br> D’où l’importance de bien choisir l’auteur de vos photos de mariage, souvenirs éternels de votre belle journée.

  Le premier point primordial pour choisir votre professionnel, c’est le feeling à partir du quel vous construirez une relation de confiance.
  <br> Veillez donc à le rencontrer à une ou plusieurs reprises avant le jour J et prenez le temps de découvrir ses méthodes de travail et sa personnalité.
  
  Disponibilité, bonne humeur, professionnalisme, discrétion, voici en somme les principales qualités que devra posséder votre professionnel
   <br> de la photo de mariage pour un maximum de complicité.
  
  Si vous avez un coup de coeur pour les clichés en ligne d’un photographe, consultez les avis d’autres mariés ayant bénéficié de ses services.
  <br> Organisez ensuite une première rencontre, laissez-vous guider par votre intuition en même temps que vous lui poserez toute une série de questions.</p>
  <img src=\"https://cdn0.mariages.net/vendor/0620/3_2/640/jpg/lionel-grenon-photos-de-couple-tendresse-mariage-dordogne-couple-mariage-cheaval-fleurs-mariee-dentelle-tatouage-bois-bleu-vintage-photographe-specialiste-mariage-211_3_10620-161174059722981.webp\" alt=\"\" style=\"height: 250px;width: 400px;\">
<img src=\"https://cdn0.mariages.net/vendor/0620/3_2/640/jpg/lionel-grenon-clindoeil-photo-details-vintage-bijoux-photo-mariage-rose-amoureux-bouquet-specialiste-photo-mariage-68_3_10620-161174041926525.webp\" alt=\"\" style=\"height: 250px;width: 450px;\">
</div> 
<div style=\"margin-top: 40px;\"><img src=\"https://cdn0.mariages.net/vendor/2633/3_2/640/jpg/pp-682_3_112633.webp\" alt=\"\"><br>
<img src=\"https://cdn0.mariages.net/vendor/2633/original/960/jpg/ee-680_3_112633.webp\" alt=\"\" style=\"margin-top: 5px;\"></div>
</div>
<style>
@import url('https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap');

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

.video12{

text-align: center;
width: 100vw;
height: 100vh;
}
.video12, .video12 video, .video12 .description {
width: 100vw;
height: 60vh;



}

.video12 video {
background: brown;
object-fit: cover;
}
.video12 .description {
display: flex;
align-items: center;
justify-content: center;
}
.video12 h1 {
font-family: \"Akaya Kanadaka\", sans-serif;
color: white;
text-transform: uppercase;
letter-spacing: 1vw;
line-height: 1.2;
font-size: 3vw;
text-align: center;
}
.video12 h1 span {
display: block;
font-size: 10vw;
letter-spacing: 0;
}
/*  */
.main {
background: white;
position: relative;
padding: 1rem;
margin-top: 100vh;
}
.main::before {
content: \"\";
width: 100vw;
height: 100vh;
position: absolute;
top: 0;
left: 0;
top: -100vh;
}

.main{
max-width: 750px;
font-family: \"Akaya Kanadaka\", sans-serif;
font-size:20px;
margin: 1rem auto;
}
h3{
   color:hotpink;
   text-align: center;
 } 
 p{
    text-align: center;  
}
.cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.card {
  margin: 30px auto;
  width: 300px;
  height: 300px;
  border-radius: 40px;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
}

.card .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px;
}

.card .card_image img {
  width: inherit;
  height: inherit;
  border-radius: 40px;
  object-fit: cover;
}

.card .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 30px;
  margin-top: -80px;
  height: 30px;
}

.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

.title-white {
  color: white;
}

.title-black {
  color: black;
}

@media all and (max-width: 500px) {
  .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}


*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
</style>
{% endblock %}
", "photographe/index.html.twig", "/opt/lampp/htdocs/sitemariage/templates/photographe/index.html.twig");
    }
}
