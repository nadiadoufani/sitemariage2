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
class __TwigTemplate_0290ea4006bb726423543bc5ceae61c0aff4c8d7afbcfd7336aa7bd290c9e006 extends Template
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
        echo "<div class=\"traiteurs\" style=\"margin-top:30px\">
<h3>Traiteurs de mariage</h3>
<p>Venez découvrir notre sélection d’inspirations et d’idées concernant les plus 
 <br> beaux lieux de réception de mariage. Nous vous proposons toutes nos idées de salles de mariage originales afin de vous offrir un lieu atypique et romantique 
 <br> pour partager votre amour. Si vous ne savez pas quel lieu de réception choisir pour votre mariage, trouvez la perle rare parmi nos inspirations. Vous <br> pourrez y personnaliser votre cérémonie en ajoutant des animations, de la décoration fleuries, pour organiser un mariage qui vous ressemble ! </p>
</div> 
<div>   
<ul class=\"cards\">
  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traiteurs"]) || array_key_exists("traiteurs", $context) ? $context["traiteurs"] : (function () { throw new RuntimeError('Variable "traiteurs" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "  <li>
    <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_details", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\" class=\"card\">
      <img src=\"/imgtraiteurs/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"card__image\" alt=\"\" />
      <div class=\"card__overlay\">
        <div class=\"card__header\">
                               
          <img class=\"card__thumb\" src=\"/imgtraiteurs/";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 21), "html", null, true);
            echo "\" alt=\"\" />
          <div class=\"card__header-text\">
            <h3 class=\"card__title\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 23), "html", null, true);
            echo "</h3>            
          </div>
        </div>
      </div>
    </a>      
  </li>
  
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</ul>
</div></div>
<div style=\"
 text-align: center;margin-bottom:80px;\">
 <a class=\"btn-blink1\" href=\"\">Contactez-Nous !!!</a>
</div>
<divstyle=\"margin-top:30px;\">
<h1  >
Les TRUCS À SAVOIR POUR ÊTRE SÛR DE CHOISIR LE BON TRAITEUR
</h1></div>
<div class=\"d-flex justify-content-end\" > 
 <div>
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
<h3>Vérifiez que le traiteur respectera vos particularités pour le mariage</h3>
<p>
Pour des questions pratiques, vous ne pourrez choisir qu’un menu unique pour tous vos convives. Mais nous ne sommes pas tous fabriqués dans un moule standard,
<br> nous avons chacun nos spécificités. Il se peut donc que vous-même ou certains de vos invités aient des allergies ou des restrictions alimentaires.
<br> Vérifiez au préalable avec le traiteur qu’il pourra proposer par exemple un ou deux menus végétariens, cinq menus Halal ou encore un dessert sans fruits à coque.
</p>
 
</div> 
<div ><img src=\"https://cdn0.mariages.net/review/9159/original/960/jpg/643801.webp\" alt=\"\"><br>
<img src=\"https://www.mariage.com/wp-content/uploads/2017/06/choisir-traiteur-de-mariage-690x459.jpg\" alt=\"\" style=\"margin-top: 5px;\"></div>
</div>
<style>
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

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
  gap: 2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style-type: none;
}

.card {
  position: relative;
  display: block;
  height: 70%;  
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
  width: 500px;
}

.card__image {      
  width: 100%;
  height: auto;
}

.card__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;      
  border-radius: calc(var(--curve) * 1px);    
  background-color: var(--surface-color);      
  transform: translateY(100%);
  transition: .2s ease-in-out;
}

.card:hover .card__overlay {
  transform: translateY(0);
}

.card__header {
  position: relative;
  display: flex;
  align-items: center;
  gap: 2em;
  padding: 2em;
  border-radius: calc(var(--curve) * 1px) 0 0 0;    
  background-color: var(--surface-color);
  transform: translateY(-100%);
  transition: .2s ease-in-out;
}


.card:hover .card__header {
  transform: translateY(0);
}

.card__thumb {
  flex-shrink: 0;
  width: 50px;
  height: 50px;      
  border-radius: 50%;      
}

.card__title {
  font-size: 1em;
  margin: 0 0 .3em;
  color: #6A515E;
}

.card__tagline {
  display: block;
  margin: 1em 0;
  font-family: \"MockFlowFont\";  
  font-size: .8em; 
  color: #D7BDCA;  
}

.card__status {
  font-size: .8em;
  color: #D7BDCA;
}

.card__description {
  padding: 0 2em 2em;
  margin: 0;
  color: #D7BDCA;
  font-family: \"MockFlowFont\";   
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
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
        return array (  135 => 31,  121 => 23,  116 => 21,  109 => 17,  105 => 16,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TraiteursController!{% endblock %}

{% block body %}
<div class=\"traiteurs\" style=\"margin-top:30px\">
<h3>Traiteurs de mariage</h3>
<p>Venez découvrir notre sélection d’inspirations et d’idées concernant les plus 
 <br> beaux lieux de réception de mariage. Nous vous proposons toutes nos idées de salles de mariage originales afin de vous offrir un lieu atypique et romantique 
 <br> pour partager votre amour. Si vous ne savez pas quel lieu de réception choisir pour votre mariage, trouvez la perle rare parmi nos inspirations. Vous <br> pourrez y personnaliser votre cérémonie en ajoutant des animations, de la décoration fleuries, pour organiser un mariage qui vous ressemble ! </p>
</div> 
<div>   
<ul class=\"cards\">
  {% for item in traiteurs %}
  <li>
    <a href=\"{{path('home_details',{'id':item.id})}}\" class=\"card\">
      <img src=\"/imgtraiteurs/{{ item.image }}\" class=\"card__image\" alt=\"\" />
      <div class=\"card__overlay\">
        <div class=\"card__header\">
                               
          <img class=\"card__thumb\" src=\"/imgtraiteurs/{{ item.image }}\" alt=\"\" />
          <div class=\"card__header-text\">
            <h3 class=\"card__title\">{{ item.nom}}</h3>            
          </div>
        </div>
      </div>
    </a>      
  </li>
  
  {% endfor %}
</ul>
</div></div>
<div style=\"
 text-align: center;margin-bottom:80px;\">
 <a class=\"btn-blink1\" href=\"\">Contactez-Nous !!!</a>
</div>
<divstyle=\"margin-top:30px;\">
<h1  >
Les TRUCS À SAVOIR POUR ÊTRE SÛR DE CHOISIR LE BON TRAITEUR
</h1></div>
<div class=\"d-flex justify-content-end\" > 
 <div>
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
<h3>Vérifiez que le traiteur respectera vos particularités pour le mariage</h3>
<p>
Pour des questions pratiques, vous ne pourrez choisir qu’un menu unique pour tous vos convives. Mais nous ne sommes pas tous fabriqués dans un moule standard,
<br> nous avons chacun nos spécificités. Il se peut donc que vous-même ou certains de vos invités aient des allergies ou des restrictions alimentaires.
<br> Vérifiez au préalable avec le traiteur qu’il pourra proposer par exemple un ou deux menus végétariens, cinq menus Halal ou encore un dessert sans fruits à coque.
</p>
 
</div> 
<div ><img src=\"https://cdn0.mariages.net/review/9159/original/960/jpg/643801.webp\" alt=\"\"><br>
<img src=\"https://www.mariage.com/wp-content/uploads/2017/06/choisir-traiteur-de-mariage-690x459.jpg\" alt=\"\" style=\"margin-top: 5px;\"></div>
</div>
<style>
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

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
  gap: 2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style-type: none;
}

.card {
  position: relative;
  display: block;
  height: 70%;  
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
  width: 500px;
}

.card__image {      
  width: 100%;
  height: auto;
}

.card__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;      
  border-radius: calc(var(--curve) * 1px);    
  background-color: var(--surface-color);      
  transform: translateY(100%);
  transition: .2s ease-in-out;
}

.card:hover .card__overlay {
  transform: translateY(0);
}

.card__header {
  position: relative;
  display: flex;
  align-items: center;
  gap: 2em;
  padding: 2em;
  border-radius: calc(var(--curve) * 1px) 0 0 0;    
  background-color: var(--surface-color);
  transform: translateY(-100%);
  transition: .2s ease-in-out;
}


.card:hover .card__header {
  transform: translateY(0);
}

.card__thumb {
  flex-shrink: 0;
  width: 50px;
  height: 50px;      
  border-radius: 50%;      
}

.card__title {
  font-size: 1em;
  margin: 0 0 .3em;
  color: #6A515E;
}

.card__tagline {
  display: block;
  margin: 1em 0;
  font-family: \"MockFlowFont\";  
  font-size: .8em; 
  color: #D7BDCA;  
}

.card__status {
  font-size: .8em;
  color: #D7BDCA;
}

.card__description {
  padding: 0 2em 2em;
  margin: 0;
  color: #D7BDCA;
  font-family: \"MockFlowFont\";   
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
}
    
</style>
{% endblock %}
", "traiteurs/index.html.twig", "/opt/lampp/htdocs/sitemariage/templates/traiteurs/index.html.twig");
    }
}
