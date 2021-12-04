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

/* traiteurs/index.html.twig */
class __TwigTemplate_d8bbc8d70199d5f42b723faea11acca09d3a7991818c6e90604dca560e9716f3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "traiteurs/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "traiteurs/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "traiteurs/index.html.twig", 1);
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

        echo "Hello TraiteursController!";
        
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
<div class=\"card-wrap \"  style=\"margin-top:100px;\">
";
        // line 8
        $this->loadTemplate("traiteurs/_filtre.html.twig", "traiteurs/index.html.twig", 8)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })())]));
        // line 9
        echo "</div>
<div class=\"traiteurs\" style=\"margin-top:100px;\">
<h3>Traiteurs de mariage</h3>
<p>Venez découvrir notre sélection d’inspirations et d’idées concernant les plus 
 <br> beaux lieux de réception de mariage. Nous vous proposons toutes nos idées de salles de mariage originales afin de vous offrir un lieu atypique et romantique 
 <br> pour partager votre amour. Si vous ne savez pas quel lieu de réception choisir pour votre mariage, trouvez la perle rare parmi nos inspirations. Vous <br> pourrez y personnaliser votre cérémonie en ajoutant des animations, de la décoration fleuries, pour organiser un mariage qui vous ressemble ! </p>
</div> 
<div class=\"cards-list\">
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traiteurs"]) || array_key_exists("traiteurs", $context) ? $context["traiteurs"] : (function () { throw new RuntimeError('Variable "traiteurs" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "<div class=\"card 1\">
  <div class=\"card_image\"> 
  <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_details", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\"><img src=\"/imgtraiteurs/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 20), "html", null, true);
            echo "\" /></a> </div>
  <div class=\"card_title title-white\">
    <p style=\"color: palevioletred;\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
  </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</div>
</div>

   

<section>
\t<div class=\"circle circle-one\">
\t\t<img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgtraiteurs/655c7b0ed51d327b589077a7cd322768.jpg"), "html", null, true);
        echo "\" alt=\"\" title=\"\">
\t</div>
\t
\t<div class=\"circle circle-two\">
\t\t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgtraiteurs/70b35d25f3fbae8010b72cc71df78e65.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t</div>
\t
\t<div>
\t\t<h2>
\t\t\tLes TRUCS À SAVOIR POUR ÊTRE SÛR DE CHOISIR LE BON TRAITEUR
\t\t</h2>
\t\t
\t
      <h3>Comparez les devis de différents traiteurs</h3>
      <p >Premièrement, vous allez certainement démarcher plusieurs traiteurs dans le but de comparer les offres et les tarifs.
      <br> Un bon traiteur vous demandera un maximum de détails pour construire une offre personnalisée qui vous corresponde.
      <br> Souhaitez-vous un repas assis ou un buffet ? Quels plats souhaitez-vous ? Quels sont les horaires de la réception 
      <br>(pour pouvoir intégrer le bon chiffrage sur le temps de présence des serveurs) ? Comment est équipé l’office de la salle de réception ? 
      <br>Oui c’est un petit détail qui a toute son importance puisqu’il y a tout le matériel de cuisine à prévoir, et cela sera une charge en plus dans votre budget.
      <br> Il faut donc anticiper un maximum à l’avance. Et capital : il vous demandera votre budget ! Suite à votre long brief, il va vous vous envoyer une proposition 
      <br>qui colle à vos attentes. Si après cela il vous envoie une plaquette « standardisée », il n’a donc rien compris !
      
      </p>
      <h3>Testez le menu avant le mariage</h3>
      <p>
      Avant de vous engager avec un traiteur, il est important de pouvoir le tester. Tout bon traiteur proposera une dégustation 
      <br>qui sera payante et très certainement déduite de votre facture si vous faites appel à ce traiteur. Idéalement, si vous le pouvez,
      <br> choisissez les plats qui vous intéressent pour votre mariage car en plus de tester la bonne qualité des produits, il s’agit aussi de tester votre futur repas de mariage.
      <br> Peut-être que finalement, sur le papier vous aviez une autre idée de ce que vous alliez déguster et changerez de plat ou demanderez des modifications (moins épicé, plus épicé, plus sucré, etc…).
      </p>
      
       
</p>

\t</div>
</section>



<style>
  *:focus {
  outline: 0;
}
section {
\tposition: relative;
\tpadding: 50px 0;
\twidth: 100%;
}

.circle {
\toverflow: hidden;
\tposition: relative;
}

.circle.circle-one,
.circle.circle-two {
\tborder-radius: 50%;
\tmargin: 20px;
\tshape-outside: circle();
}

.circle.circle-one {
\tfloat: left;
\theight: 400px;
\twidth: 400px;
}

.circle.circle-two {
\tfloat: right;
\theight: 300px;
\twidth: 300px;
}

.circle img {
\theight: 100%;
\tobject-fit: cover;
\tposition: absolute;
\tleft: 0;
\ttop: 0;
\twidth: 100%;
}

section h2 {
\tcolor: hotpink;
\tfont-size: 2rem;
\tmargin-bottom: 10px;
}

section p {
\tcolor: black;
}
.banner1,
.banner2,
.banner3,
.banner4 {
  
  width: 100%;
  position: absolute;
margin-top:70px;

}
.image {
  width: 100%;
  position: absolute;
  
  
  animation: zoom-out 6s linear infinite;
  border-radius:80px;
  height:500px
}

@keyframes zoom-out {
  100% {
    width: 100%;
  }
}







.banner1 {
  animation: slide1 12s linear infinite;
}

.banner2 {
  animation: slide2 12s linear infinite;
}

.banner3 {
  animation: slide3 12s linear infinite;
}

.banner4 {
  animation: slide4 12s linear infinite;
}

@keyframes slide1 {
  0% {
    visibility: visible;
  }
  25% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  75% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}

@keyframes slide2 {
  0% {
    visibility: hidden;
  }
  25% {
    visibility: hidden;
  }
  50% {
    visibility: visible;
  }
  75% {
    visibility: hidden;
  }
  100% {
    visibility: hidden;
  }
}

@keyframes slide3 {
  0% {
    visibility: hidden;
  }
  25% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  75% {
    visibility: visible;
  }
  100% {
    visibility: hidden;
  }
}

@keyframes slide4 {
  0% {
    visibility: hidden;
  }
  25% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  75% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}

@keyframes textup {
  10% {
    transform: translateY(0px);
  }
  100% {
    transform: translateY(0px);
  }
}

.text-box1 {
  animation-delay: 0s;
}

.text-box2 {
  animation-delay: 3s;
}

.text-box3 {
  animation-delay: 6s;
}

.text-box4 {
  animation-delay: 9s;
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
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}


p{
  margin-left:20px;
    text-align: center;  
}
h3,h1{
  font-family: BlinkMacSystemFont, 'Segoe UI', Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue';
  font-size: 2em;
  text-align: center;
  color:hotpink;
  
  text-shadow: 0px 0px 15px #fff;
  -webkit-text-shadow: 0px 0px 15px #fff;
  -moz-text-shadow: 0px 0px 15px #fff;
  -ms-text-shadow: 0px 0px 15px #fff;
  -o-text-shadow: 0px 0px 15px #fff;
}


:root {
  --surface-color: #fff;
  --curve: 40;
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
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "traiteurs/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 37,  138 => 33,  129 => 26,  119 => 22,  112 => 20,  108 => 18,  104 => 17,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TraiteursController!{% endblock %}

{% block body %}

<div class=\"card-wrap \"  style=\"margin-top:100px;\">
{% include 'traiteurs/_filtre.html.twig' with{form:form} only %}
</div>
<div class=\"traiteurs\" style=\"margin-top:100px;\">
<h3>Traiteurs de mariage</h3>
<p>Venez découvrir notre sélection d’inspirations et d’idées concernant les plus 
 <br> beaux lieux de réception de mariage. Nous vous proposons toutes nos idées de salles de mariage originales afin de vous offrir un lieu atypique et romantique 
 <br> pour partager votre amour. Si vous ne savez pas quel lieu de réception choisir pour votre mariage, trouvez la perle rare parmi nos inspirations. Vous <br> pourrez y personnaliser votre cérémonie en ajoutant des animations, de la décoration fleuries, pour organiser un mariage qui vous ressemble ! </p>
</div> 
<div class=\"cards-list\">
  {% for item in traiteurs %}
<div class=\"card 1\">
  <div class=\"card_image\"> 
  <a href=\"{{path('home_details',{'id':item.id})}}\"><img src=\"/imgtraiteurs/{{ item.image }}\" /></a> </div>
  <div class=\"card_title title-white\">
    <p style=\"color: palevioletred;\">{{ item.nom}}</p>
  </div>
</div>
{% endfor %}
</div>
</div>

   

<section>
\t<div class=\"circle circle-one\">
\t\t<img src=\"{{asset('imgtraiteurs/655c7b0ed51d327b589077a7cd322768.jpg')}}\" alt=\"\" title=\"\">
\t</div>
\t
\t<div class=\"circle circle-two\">
\t\t<img src=\"{{asset('imgtraiteurs/70b35d25f3fbae8010b72cc71df78e65.jpg')}}\" alt=\"\">
\t</div>
\t
\t<div>
\t\t<h2>
\t\t\tLes TRUCS À SAVOIR POUR ÊTRE SÛR DE CHOISIR LE BON TRAITEUR
\t\t</h2>
\t\t
\t
      <h3>Comparez les devis de différents traiteurs</h3>
      <p >Premièrement, vous allez certainement démarcher plusieurs traiteurs dans le but de comparer les offres et les tarifs.
      <br> Un bon traiteur vous demandera un maximum de détails pour construire une offre personnalisée qui vous corresponde.
      <br> Souhaitez-vous un repas assis ou un buffet ? Quels plats souhaitez-vous ? Quels sont les horaires de la réception 
      <br>(pour pouvoir intégrer le bon chiffrage sur le temps de présence des serveurs) ? Comment est équipé l’office de la salle de réception ? 
      <br>Oui c’est un petit détail qui a toute son importance puisqu’il y a tout le matériel de cuisine à prévoir, et cela sera une charge en plus dans votre budget.
      <br> Il faut donc anticiper un maximum à l’avance. Et capital : il vous demandera votre budget ! Suite à votre long brief, il va vous vous envoyer une proposition 
      <br>qui colle à vos attentes. Si après cela il vous envoie une plaquette « standardisée », il n’a donc rien compris !
      
      </p>
      <h3>Testez le menu avant le mariage</h3>
      <p>
      Avant de vous engager avec un traiteur, il est important de pouvoir le tester. Tout bon traiteur proposera une dégustation 
      <br>qui sera payante et très certainement déduite de votre facture si vous faites appel à ce traiteur. Idéalement, si vous le pouvez,
      <br> choisissez les plats qui vous intéressent pour votre mariage car en plus de tester la bonne qualité des produits, il s’agit aussi de tester votre futur repas de mariage.
      <br> Peut-être que finalement, sur le papier vous aviez une autre idée de ce que vous alliez déguster et changerez de plat ou demanderez des modifications (moins épicé, plus épicé, plus sucré, etc…).
      </p>
      
       
</p>

\t</div>
</section>



<style>
  *:focus {
  outline: 0;
}
section {
\tposition: relative;
\tpadding: 50px 0;
\twidth: 100%;
}

.circle {
\toverflow: hidden;
\tposition: relative;
}

.circle.circle-one,
.circle.circle-two {
\tborder-radius: 50%;
\tmargin: 20px;
\tshape-outside: circle();
}

.circle.circle-one {
\tfloat: left;
\theight: 400px;
\twidth: 400px;
}

.circle.circle-two {
\tfloat: right;
\theight: 300px;
\twidth: 300px;
}

.circle img {
\theight: 100%;
\tobject-fit: cover;
\tposition: absolute;
\tleft: 0;
\ttop: 0;
\twidth: 100%;
}

section h2 {
\tcolor: hotpink;
\tfont-size: 2rem;
\tmargin-bottom: 10px;
}

section p {
\tcolor: black;
}
.banner1,
.banner2,
.banner3,
.banner4 {
  
  width: 100%;
  position: absolute;
margin-top:70px;

}
.image {
  width: 100%;
  position: absolute;
  
  
  animation: zoom-out 6s linear infinite;
  border-radius:80px;
  height:500px
}

@keyframes zoom-out {
  100% {
    width: 100%;
  }
}







.banner1 {
  animation: slide1 12s linear infinite;
}

.banner2 {
  animation: slide2 12s linear infinite;
}

.banner3 {
  animation: slide3 12s linear infinite;
}

.banner4 {
  animation: slide4 12s linear infinite;
}

@keyframes slide1 {
  0% {
    visibility: visible;
  }
  25% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  75% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}

@keyframes slide2 {
  0% {
    visibility: hidden;
  }
  25% {
    visibility: hidden;
  }
  50% {
    visibility: visible;
  }
  75% {
    visibility: hidden;
  }
  100% {
    visibility: hidden;
  }
}

@keyframes slide3 {
  0% {
    visibility: hidden;
  }
  25% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  75% {
    visibility: visible;
  }
  100% {
    visibility: hidden;
  }
}

@keyframes slide4 {
  0% {
    visibility: hidden;
  }
  25% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  75% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}

@keyframes textup {
  10% {
    transform: translateY(0px);
  }
  100% {
    transform: translateY(0px);
  }
}

.text-box1 {
  animation-delay: 0s;
}

.text-box2 {
  animation-delay: 3s;
}

.text-box3 {
  animation-delay: 6s;
}

.text-box4 {
  animation-delay: 9s;
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
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}


p{
  margin-left:20px;
    text-align: center;  
}
h3,h1{
  font-family: BlinkMacSystemFont, 'Segoe UI', Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue';
  font-size: 2em;
  text-align: center;
  color:hotpink;
  
  text-shadow: 0px 0px 15px #fff;
  -webkit-text-shadow: 0px 0px 15px #fff;
  -moz-text-shadow: 0px 0px 15px #fff;
  -ms-text-shadow: 0px 0px 15px #fff;
  -o-text-shadow: 0px 0px 15px #fff;
}


:root {
  --surface-color: #fff;
  --curve: 40;
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
</style>
{% endblock %}
", "traiteurs/index.html.twig", "/opt/lampp/htdocs/sitemariage2/templates/traiteurs/index.html.twig");
    }
}
