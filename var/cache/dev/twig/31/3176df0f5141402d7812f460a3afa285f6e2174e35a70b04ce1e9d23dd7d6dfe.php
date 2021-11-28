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

/* voyage_de_noce/index.html.twig */
class __TwigTemplate_57b3ab01acbefa3309535faf075e5353f710a923d9c8a8bfb348df8245b661d4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage_de_noce/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage_de_noce/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "voyage_de_noce/index.html.twig", 1);
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

        echo "Hello VoyageDeNoceController!";
        
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
        echo "<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.voyage {
  margin: auto;
  padding: 2em;
  max-width: 68rem;
}

.flex {
  display: flex;
  gap: 2em;
  justify-content: center;
  flex-flow: row wrap;
}

.flex > * {
  flex-grow: 1;
  flex-basis: 0;
}

.card {
  display: flex;
  flex-direction: column;
  min-width: 15rem;
  max-width: calc(12.5rem + 13vw);
  background: #fff;
  border-radius: 0.75em;
  overflow: hidden;
  box-shadow: 0 0.25em 0.6em #0005, 0 0.65em 1em #0004;
  transition: transform 270ms ease;
  position: relative;
}

.card::before {
  content: \"\";
  position: absolute;
  display: flex;
  inset: 0;
  isolation: isolate;
  mix-blend-mode: color;
  background: linear-gradient(180deg, #0000 48%, 48%, red, 70%, blue);
  opacity: 0;
}

.card:hover::before {
  opacity: 1;
}
.card:hover {
  transform: scale(1.05);
}

img {
  display: block;
  max-width: 100%;
  aspect-ratio: 16 / 9;
  object-fit: cover;
  height: auto;
  margin-bottom: 1em;
}

.card-body {
  height: 200px;
  padding: 1em 0;
}

h3 {
  text-align: center;
  color:hotpink;
  font-size: 1.3rem;
  margin-bottom: 0.5rem;
}

.para {
  color: #0009;
  font-style: italic;
  font-weight: 700;
  text-align: center;
  margin: 1em auto;
  padding-inline: 0.5em;
  max-width: 35ch;
}

</style>
<div  style=\"margin-top:30px\">
<h3>Voyages de noces</h3>
<p style=\"text-align: center;\"> Ou partir en voyage de noces ? Vous avez des idées mais vous ne savez pas laquelle choisir ?
<br> Trouvez le pays ou la ville qui vous correspond le mieux à travers notre liste d’idées de 
<br>voyages de noces. Parmi les offres de voyages all inclusive que vous pouvez trouver,
<br> nous vous avons répertorié des destinations idéales pour passer un moment à deux.
Votre lune de miel doit être<br> inoubliable, pour cela choisissez celle qui vous fait le plus rêver parmi nos destinations..</p>
</div>
<div class=\"voyage\">
  <div class=\"flex\">
  ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyagedenoce"]) || array_key_exists("voyagedenoce", $context) ? $context["voyagedenoce"] : (function () { throw new RuntimeError('Variable "voyagedenoce" does not exist.', 104, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 105
            echo "    <div class=\"card\">
      <img src=\"/imgvoyages/";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 106), "html", null, true);
            echo "\" alt=\"\">
      <div class=\"card-body\">
        <h3>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 108), "html", null, true);
            echo "</h3>
        <p class=\"para\" >";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 109), "html", null, true);
            echo "
        </p>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "  </div>
</div>
<div class=\"d-flex justify-content-end\" > 
 <div style=\"margin-top: 30px;margin-left: 10px;\">
   <h3>lune de miel</h3>
<p >Les agences Fox Travel vous aide à organiser votre lune de miel en amoureux.
<br> Après le stress des préparatifs et l’excitation du jour J, vous n'aurez qu'une envie,
<br> vous détendre avec votre moitié, et pourquoi pas changer d'air ! Embarquez pour
<br> le pays de vos rêves, en Europe ou au bout du monde avec l'aide de les agences.
<br> Son équipe mettra son savoir-faire et son expérience à votre service.
</p>
<h3>Services Proposés</h3>
<p>
les agences vous proposent plusieurs destinations, en fonction de votre profil,
<br> de vos goûts et de votre budget. Ensemble vous trouverez celle qui correspond à vos attentes,
<br> que vous soyez baroudeurs ou amateurs de farniente.

<br>Vous êtes plutôt grande ville, plage, montagne ou randonnées en pleine nature ? Tout est possible !
<br> N'hésitez pas à contacter votre prestataire dès maintenant pour obtenir davantage d'informations sur ses prestations.
</p>

 
</div> 
<div ><img src=\"https://cdn0.mariages.net/vendor/6393/3_2/640/jpg/hilltop-villa5_3_196393-157139958550277.webp\" alt=\"\" style=\"margin-top: 50px;\" ><br>
</div>
</div>
<div  style=\"margin-top:30px\">
<h3>Destination de lune de miel</h3>
<p style=\"text-align: center;\">
 Le voyage de noces est le voyage en amoureux par excellence. Jeunes mariés,
 <br> prolongez le bonheur de votre union en choisissant la lune de miel qui 
 <br>vous convient en passant de la réalité au rêve : vous rêvez de 15 jours sur
 <br> une île paradisiaque avec plage de sable blanc ou de sillonner les Etats-Unis sur
 <br> la célèbre route 66 ? Découvrez les conseils de Mariée.fr et les destinations de rêve
 <br> de nos prestataires pour faire de votre lune de miel, une parenthèse d’émerveillement.</p>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "voyage_de_noce/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 114,  204 => 109,  200 => 108,  195 => 106,  192 => 105,  188 => 104,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello VoyageDeNoceController!{% endblock %}

{% block body %}
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.voyage {
  margin: auto;
  padding: 2em;
  max-width: 68rem;
}

.flex {
  display: flex;
  gap: 2em;
  justify-content: center;
  flex-flow: row wrap;
}

.flex > * {
  flex-grow: 1;
  flex-basis: 0;
}

.card {
  display: flex;
  flex-direction: column;
  min-width: 15rem;
  max-width: calc(12.5rem + 13vw);
  background: #fff;
  border-radius: 0.75em;
  overflow: hidden;
  box-shadow: 0 0.25em 0.6em #0005, 0 0.65em 1em #0004;
  transition: transform 270ms ease;
  position: relative;
}

.card::before {
  content: \"\";
  position: absolute;
  display: flex;
  inset: 0;
  isolation: isolate;
  mix-blend-mode: color;
  background: linear-gradient(180deg, #0000 48%, 48%, red, 70%, blue);
  opacity: 0;
}

.card:hover::before {
  opacity: 1;
}
.card:hover {
  transform: scale(1.05);
}

img {
  display: block;
  max-width: 100%;
  aspect-ratio: 16 / 9;
  object-fit: cover;
  height: auto;
  margin-bottom: 1em;
}

.card-body {
  height: 200px;
  padding: 1em 0;
}

h3 {
  text-align: center;
  color:hotpink;
  font-size: 1.3rem;
  margin-bottom: 0.5rem;
}

.para {
  color: #0009;
  font-style: italic;
  font-weight: 700;
  text-align: center;
  margin: 1em auto;
  padding-inline: 0.5em;
  max-width: 35ch;
}

</style>
<div  style=\"margin-top:30px\">
<h3>Voyages de noces</h3>
<p style=\"text-align: center;\"> Ou partir en voyage de noces ? Vous avez des idées mais vous ne savez pas laquelle choisir ?
<br> Trouvez le pays ou la ville qui vous correspond le mieux à travers notre liste d’idées de 
<br>voyages de noces. Parmi les offres de voyages all inclusive que vous pouvez trouver,
<br> nous vous avons répertorié des destinations idéales pour passer un moment à deux.
Votre lune de miel doit être<br> inoubliable, pour cela choisissez celle qui vous fait le plus rêver parmi nos destinations..</p>
</div>
<div class=\"voyage\">
  <div class=\"flex\">
  {% for item in voyagedenoce %}
    <div class=\"card\">
      <img src=\"/imgvoyages/{{ item.image }}\" alt=\"\">
      <div class=\"card-body\">
        <h3>{{ item.nom}}</h3>
        <p class=\"para\" >{{ item.description}}
        </p>
      </div>
    </div>
    {% endfor %}
  </div>
</div>
<div class=\"d-flex justify-content-end\" > 
 <div style=\"margin-top: 30px;margin-left: 10px;\">
   <h3>lune de miel</h3>
<p >Les agences Fox Travel vous aide à organiser votre lune de miel en amoureux.
<br> Après le stress des préparatifs et l’excitation du jour J, vous n'aurez qu'une envie,
<br> vous détendre avec votre moitié, et pourquoi pas changer d'air ! Embarquez pour
<br> le pays de vos rêves, en Europe ou au bout du monde avec l'aide de les agences.
<br> Son équipe mettra son savoir-faire et son expérience à votre service.
</p>
<h3>Services Proposés</h3>
<p>
les agences vous proposent plusieurs destinations, en fonction de votre profil,
<br> de vos goûts et de votre budget. Ensemble vous trouverez celle qui correspond à vos attentes,
<br> que vous soyez baroudeurs ou amateurs de farniente.

<br>Vous êtes plutôt grande ville, plage, montagne ou randonnées en pleine nature ? Tout est possible !
<br> N'hésitez pas à contacter votre prestataire dès maintenant pour obtenir davantage d'informations sur ses prestations.
</p>

 
</div> 
<div ><img src=\"https://cdn0.mariages.net/vendor/6393/3_2/640/jpg/hilltop-villa5_3_196393-157139958550277.webp\" alt=\"\" style=\"margin-top: 50px;\" ><br>
</div>
</div>
<div  style=\"margin-top:30px\">
<h3>Destination de lune de miel</h3>
<p style=\"text-align: center;\">
 Le voyage de noces est le voyage en amoureux par excellence. Jeunes mariés,
 <br> prolongez le bonheur de votre union en choisissant la lune de miel qui 
 <br>vous convient en passant de la réalité au rêve : vous rêvez de 15 jours sur
 <br> une île paradisiaque avec plage de sable blanc ou de sillonner les Etats-Unis sur
 <br> la célèbre route 66 ? Découvrez les conseils de Mariée.fr et les destinations de rêve
 <br> de nos prestataires pour faire de votre lune de miel, une parenthèse d’émerveillement.</p>
</div>


{% endblock %}
", "voyage_de_noce/index.html.twig", "/opt/lampp/htdocs/sitemariage/templates/voyage_de_noce/index.html.twig");
    }
}
