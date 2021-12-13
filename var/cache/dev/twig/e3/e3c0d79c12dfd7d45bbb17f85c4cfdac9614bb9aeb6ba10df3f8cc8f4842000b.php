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
class __TwigTemplate_8748e9a4e8389b59f0ab69c17db02b994c453ceba8b3de2c55840694a8d6b541 extends Template
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
  height: 300px;
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











</style>

<div class=\"card-wrap \"  style=\"margin-top:100px;\">
";
        // line 131
        $this->loadTemplate("voyage_de_noce/_filtre.html.twig", "voyage_de_noce/index.html.twig", 131)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })())]));
        // line 132
        echo "</div>
<div  style=\"margin-top:50px\">
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
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyagedenoce"]) || array_key_exists("voyagedenoce", $context) ? $context["voyagedenoce"] : (function () { throw new RuntimeError('Variable "voyagedenoce" does not exist.', 143, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 144
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_detail_voyage", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 144)]), "html", null, true);
            echo "\">
    <div class=\"card\">
      <img src=\"/imgvoyages/";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 146), "html", null, true);
            echo "\" alt=\"\">
      <div class=\"card-body\">
        <h3>";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 148), "html", null, true);
            echo "</h3>
        <p class=\"para\" >";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 149), "html", null, true);
            echo "
        </p>

      </div>
 
</div>
</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
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


 
<style>




:root {
  --bc: #efeeee;
  --white: #ffffff;
\t--black: #000000;
  --red: #da2c4d;
\t--teal: #20c997;
\t--cyan: #17a2b8;
\t--primary: #f9c6cf;
\t--font-family-sans-serif: -apple-system,BlinkMacSystemFont,\"Segoe UI\",Roboto,\"Helvetica Neue\",Arial,\"Noto Sans\",sans-serif,\"Apple Color Emoji\",\"Segoe UI Emoji\",\"Segoe UI Symbol\",\"Noto Color Emoji\";
}
* {
\tbox-sizing: border-box;
}
body{
 
 background-image:url(\"http://alijafarian.com/demos/responsive-jquery-accordions/images/texture_old_map.png\");
}

html{
\tmargin: 0;
  width: 100%;
  min-height: 100vh;
\toverflow-x: hidden;
\tfont-family: var(--font-family-sans-serif);
  scroll-behavior: smooth;
\t-webkit-font-smoothing: antialiased;
  background-color: var(--bc);
}
/* Classes */
.top {
  padding: 2em;
  margin: 0 auto;
  background-color: white;
  text-align: center;
}
.title {
  color: var(--black);
}
.title h1 {
  margin: 0;
  padding: 0;
  font-size: 35px;
  font-weight: 400;
  font-family: 'Oswald', sans-serif;
  letter-spacing: 8px;
  text-transform: uppercase;
}
.title h3 {
  font-size: 14px; 
  font-weight: 400; 
  font-family: 'Oswald', sans-serif;
  text-transform: uppercase; 
  letter-spacing: 8px;
  line-height: 0;
}
/* Parallax */
.parallax1 {
  position: relative;
  background-image: url(\"https://www.partirentunisie.com/assets/img/thematiques/voyage/nc.jpg\");
  min-height: 50vh; 
  position: relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax2 {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  background-image: url(\"https://www.nuevomundo.fr/ressources/images-circuits/circuit-19.jpg?version=3\");
  min-height: 50vh; 
  position: relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.overlay {
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .4);
  position: absolute;
}
.parallax2 h2 {
  font-size: 5em;
  font-weight: 300;
  text-transform: uppercase;
  color: var(--white);
  z-index: 1;
}
.parallax3 {
  position: relative;
  background-image: url(\"https://www.shantitravel.com/bos.shantitravel.com/Datas/Medias/Org/just-maried.4422x8B10CA.jpg\");
  min-height: 50vh; 
  position: relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
/* Paragraph */
.paragraph {
  margin: 3em 0;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.paragraph p {
  width: 60%;
  font-size: 1.05em;
  line-height: 1.45em;
  letter-spacing: .1em;
  color: rgb(64, 64, 64);
}
.first span {
  font-size: 4em;
  color: var(--red);
  float: left;
  font-weight: 400;
  line-height: 55px;
  padding: .05em .2em 0 0;
}
.second span {
  font-size: 4em;
  color: var(--teal);
  float: left;
  font-weight: 400;
  line-height: 55px;
  padding: .05em .2em 0 0;
}
.third span {
  font-size: 4em;
  color: var(--cyan);
  float: left;
  font-weight: 400;
  line-height: 55px;
  padding: .05em .2em 0 0;
}
/* Selection */
::selection {
  color: var(--white);
  background: rgba(161, 181, 201, .8);
}
/* SCROLLBAR */
::-webkit-scrollbar-track {
      background-color: #F5F5F5;
}
::-webkit-scrollbar {
      width: 12px;
      background-color: #F5F5F5;
}
::-webkit-scrollbar-thumb {
      background-color: rgba(161, 181, 201, .8);
}
</style>

<section class=\"top\">
  <div class=\"title\">
    <h3>Destination de lune </h3>
    <h1>de miel</h1>
  </div>
</section>
<section class=\"page\">
  <div class=\"parallax1\"></div>
  <div class=\"paragraph first\">
    <p><span>L</span>e voyage de noces est le voyage en amoureux par excellence. Jeunes mariés,
 <br> prolongez le bonheur de votre union en choisissant la lune de miel qui 
 <br>vous convient en passant de la réalité au rêve :
    </p><p> vous rêvez de 15 jours sur
 <br> une île paradisiaque avec plage de sable blanc ou de sillonner les Etats-Unis sur
 <br> la célèbre route 66 ? Découvrez les conseils de Mariée.fr et les destinations de rêve
 <br> de nos prestataires pour faire de votre lune de miel, une parenthèse d’émerveillement.</p>
  </div>
  <div class=\"parallax2\">
    <div class=\"overlay\"></div>
    <h2>Beautiful</h2>
  </div>
  <div class=\"paragraph second\">
    <p><span>V</span>ous cherchez une destination pour votre voyage de noces ? Découvrez en images 
    <br> nos 10 idées de voyages, qui vous séduiront autant les unes que les autres. Envie de farniente,
    <br> d’aventure, de culture ou de nature ? Suivez-nous, faites le tour du monde avec ces voyages 
    <br>somptueux et, pour les plus chanceuses, transformez le rêve en réalité…</p>
  </div>
  <div class=\"parallax3\"></div>
  <div class=\"paragraph third\">
    <p><span>F</span>aisant suite à leur belle journée de mariage, le voyage de noces est,
    <br> pour tout couple de jeunes mariés, un moment privilégié de détente et d’évasion à deux.
    <br> Mais parmi toutes ces destinations possibles, comment choisir son type de voyage de noces ?</p>
  </div>
</section>
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
        return array (  262 => 157,  248 => 149,  244 => 148,  239 => 146,  233 => 144,  229 => 143,  216 => 132,  214 => 131,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

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
  height: 300px;
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











</style>

<div class=\"card-wrap \"  style=\"margin-top:100px;\">
{% include 'voyage_de_noce/_filtre.html.twig' with{form:form} only %}
</div>
<div  style=\"margin-top:50px\">
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
  <a href=\"{{path('home_detail_voyage',{'id':item.id})}}\">
    <div class=\"card\">
      <img src=\"/imgvoyages/{{ item.image }}\" alt=\"\">
      <div class=\"card-body\">
        <h3>{{ item.nom}}</h3>
        <p class=\"para\" >{{ item.description}}
        </p>

      </div>
 
</div>
</a>
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


 
<style>




:root {
  --bc: #efeeee;
  --white: #ffffff;
\t--black: #000000;
  --red: #da2c4d;
\t--teal: #20c997;
\t--cyan: #17a2b8;
\t--primary: #f9c6cf;
\t--font-family-sans-serif: -apple-system,BlinkMacSystemFont,\"Segoe UI\",Roboto,\"Helvetica Neue\",Arial,\"Noto Sans\",sans-serif,\"Apple Color Emoji\",\"Segoe UI Emoji\",\"Segoe UI Symbol\",\"Noto Color Emoji\";
}
* {
\tbox-sizing: border-box;
}
body{
 
 background-image:url(\"http://alijafarian.com/demos/responsive-jquery-accordions/images/texture_old_map.png\");
}

html{
\tmargin: 0;
  width: 100%;
  min-height: 100vh;
\toverflow-x: hidden;
\tfont-family: var(--font-family-sans-serif);
  scroll-behavior: smooth;
\t-webkit-font-smoothing: antialiased;
  background-color: var(--bc);
}
/* Classes */
.top {
  padding: 2em;
  margin: 0 auto;
  background-color: white;
  text-align: center;
}
.title {
  color: var(--black);
}
.title h1 {
  margin: 0;
  padding: 0;
  font-size: 35px;
  font-weight: 400;
  font-family: 'Oswald', sans-serif;
  letter-spacing: 8px;
  text-transform: uppercase;
}
.title h3 {
  font-size: 14px; 
  font-weight: 400; 
  font-family: 'Oswald', sans-serif;
  text-transform: uppercase; 
  letter-spacing: 8px;
  line-height: 0;
}
/* Parallax */
.parallax1 {
  position: relative;
  background-image: url(\"https://www.partirentunisie.com/assets/img/thematiques/voyage/nc.jpg\");
  min-height: 50vh; 
  position: relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax2 {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  background-image: url(\"https://www.nuevomundo.fr/ressources/images-circuits/circuit-19.jpg?version=3\");
  min-height: 50vh; 
  position: relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.overlay {
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .4);
  position: absolute;
}
.parallax2 h2 {
  font-size: 5em;
  font-weight: 300;
  text-transform: uppercase;
  color: var(--white);
  z-index: 1;
}
.parallax3 {
  position: relative;
  background-image: url(\"https://www.shantitravel.com/bos.shantitravel.com/Datas/Medias/Org/just-maried.4422x8B10CA.jpg\");
  min-height: 50vh; 
  position: relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
/* Paragraph */
.paragraph {
  margin: 3em 0;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.paragraph p {
  width: 60%;
  font-size: 1.05em;
  line-height: 1.45em;
  letter-spacing: .1em;
  color: rgb(64, 64, 64);
}
.first span {
  font-size: 4em;
  color: var(--red);
  float: left;
  font-weight: 400;
  line-height: 55px;
  padding: .05em .2em 0 0;
}
.second span {
  font-size: 4em;
  color: var(--teal);
  float: left;
  font-weight: 400;
  line-height: 55px;
  padding: .05em .2em 0 0;
}
.third span {
  font-size: 4em;
  color: var(--cyan);
  float: left;
  font-weight: 400;
  line-height: 55px;
  padding: .05em .2em 0 0;
}
/* Selection */
::selection {
  color: var(--white);
  background: rgba(161, 181, 201, .8);
}
/* SCROLLBAR */
::-webkit-scrollbar-track {
      background-color: #F5F5F5;
}
::-webkit-scrollbar {
      width: 12px;
      background-color: #F5F5F5;
}
::-webkit-scrollbar-thumb {
      background-color: rgba(161, 181, 201, .8);
}
</style>

<section class=\"top\">
  <div class=\"title\">
    <h3>Destination de lune </h3>
    <h1>de miel</h1>
  </div>
</section>
<section class=\"page\">
  <div class=\"parallax1\"></div>
  <div class=\"paragraph first\">
    <p><span>L</span>e voyage de noces est le voyage en amoureux par excellence. Jeunes mariés,
 <br> prolongez le bonheur de votre union en choisissant la lune de miel qui 
 <br>vous convient en passant de la réalité au rêve :
    </p><p> vous rêvez de 15 jours sur
 <br> une île paradisiaque avec plage de sable blanc ou de sillonner les Etats-Unis sur
 <br> la célèbre route 66 ? Découvrez les conseils de Mariée.fr et les destinations de rêve
 <br> de nos prestataires pour faire de votre lune de miel, une parenthèse d’émerveillement.</p>
  </div>
  <div class=\"parallax2\">
    <div class=\"overlay\"></div>
    <h2>Beautiful</h2>
  </div>
  <div class=\"paragraph second\">
    <p><span>V</span>ous cherchez une destination pour votre voyage de noces ? Découvrez en images 
    <br> nos 10 idées de voyages, qui vous séduiront autant les unes que les autres. Envie de farniente,
    <br> d’aventure, de culture ou de nature ? Suivez-nous, faites le tour du monde avec ces voyages 
    <br>somptueux et, pour les plus chanceuses, transformez le rêve en réalité…</p>
  </div>
  <div class=\"parallax3\"></div>
  <div class=\"paragraph third\">
    <p><span>F</span>aisant suite à leur belle journée de mariage, le voyage de noces est,
    <br> pour tout couple de jeunes mariés, un moment privilégié de détente et d’évasion à deux.
    <br> Mais parmi toutes ces destinations possibles, comment choisir son type de voyage de noces ?</p>
  </div>
</section>
{% endblock %}




    ", "voyage_de_noce/index.html.twig", "/opt/lampp/htdocs/sitemariage2/templates/voyage_de_noce/index.html.twig");
    }
}
