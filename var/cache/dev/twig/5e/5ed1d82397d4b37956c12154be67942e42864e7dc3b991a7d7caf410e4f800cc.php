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

/* costume/index.html.twig */
class __TwigTemplate_099d033ce03814358096071452c1cd5144435a361b09dfdd0197f321ebeb20d1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "costume/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "costume/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "costume/index.html.twig", 1);
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
        echo "<body>
<div class=\"card-wrap \"  style=\"margin-top:100px;\">
";
        // line 8
        $this->loadTemplate("costume/_filtre.html.twig", "costume/index.html.twig", 8)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })())]));
        // line 9
        echo "</div>
<section style=\"margin-top:20px;\">
<h3 >Tenue du marié</h3>
<p style=\"text-align: center;\" >Le jour du mariage, la tenue du marié est synonyme d’élégance.
<br> Pour mettre en valeur votre personnalité tout en ayant une touche d’originalité, découvrez nos conseils,
<br> inspirations et tendances. Pour le plus beau jour de votre vie, retenez que le plus important est que vous soyez à la fois à l’aise tout en alliant simplicité, classe et modernité.
</p>
</section>
<div class=\"grid\">
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["costume"]) || array_key_exists("costume", $context) ? $context["costume"] : (function () { throw new RuntimeError('Variable "costume" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "<div class=\"cardcontainer\">
<img src=\"/imgcostume/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 20), "html", null, true);
            echo "\">
<h1>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "titre", [], "any", false, false, false, 21), "html", null, true);
            echo "</h1>
<br>
  <p>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
  <a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\"<button type=\"submit\" class=\"btn btn-success \" style=\"border-radius: 30%;\">Contactez!!!</button></a>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div>
    <div style=\"text-align: center;\"><img src=\"https://cdn.pixabay.com/photo/2020/03/06/08/23/divider-4906386_960_720.png\" alt=\"\" style=\"height: 100px;width: 500px;text-align: center;\"></div>

<section>
\t<div class=\"circle circle-one\">
\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/costume-marie-morphologie-cover-faubourg-saint-sulpice2019-696x387.jpg"), "html", null, true);
        echo "\" alt=\"\" title=\"\">
\t</div>
\t
\t<div class=\"circle circle-two\">
\t\t<img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgcomment/samson-sur-mesure-Mariage-Smoking-sur-mesure.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t</div>
\t
\t<div>
\t\t<h2>
\t\t\tComment choisir son costume de marié selon sa morphologie ?
\t\t</h2>
\t\t
\t\t<p>
\t\t\tSi le choix de la robe de mariée peut s’avérer être un véritable casse-tête… il n’en reste pas plus simple de trouver la future tenue du marié !
 Mais, pas de panique ! On vous donne quelques conseils pour que vous portiez LE costume qui vous mettra le plus en valeur !

Pour éviter les faux-pas, revoyons, tout d’abord, quelques règles à respecter lors des essayages de votre costume de mariage :</p>
<ul>
<li>La couture des épaules de la veste doit exactement coïncider avec le tombant de vos épaules</li>
<li>La veste doit tomber en-dessous des fesses</li>
<li>La veste ne doit pas former de faux-plis dans le dos</li></ul>
<p>Bien entendu, au moment des essayages, vous allez être confronté à une multitude de modèles, aux coupes diverses et variées.
Sachez donc qu’il est essentiel de porter un costume adapté à votre morphologie. Voici quelques conseils à suivre pour que votre costume de mariage épouse parfaitement votre corps et vous mette en valeur.</p>


\t</div>
</section>

</body>







<style>
body{
 background-image:url(\"http://alijafarian.com/demos/responsive-jquery-accordions/images/texture_old_map.png\");
}
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

h3{
   color:hotpink;
   text-align: center;
 }   


.grid{
  width: 100%;
  height: 100%;
  padding-top: 30px;
  padding-bottom: 120px;
  margin-left: auto;
  margin-right: auto;
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}

.cardcontainer{
max-width: 290px;
min-width: 200px;
margin-left: auto;
margin-right: auto;
display: flex;
flex-direction: column;
flex-wrap: wrap;
justify-content: center;
align-content: center;
background: white;
padding: 30px;
border-radius: 15px;
border: 1px solid rgba(64, 64, 64, 0.70);
box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
transition: all 0.4s ease-in-out;
}

@media screen and (max-width: 1160px) {
  .cardcontainer{
    margin: 20px;
  }
}

@media screen and (max-width: 550px) {
  .cardcontainer{
    margin: 20px;
    padding: 40px;
  }
}

.cardcontainer:hover{
border: 1px solid rgba(255, 255, 255, 1);
background: dodgerblue;
color: white;
transition: all 0.4s ease-in-out;
box-shadow: rgba(0, 0, 0, 0.35) 0px 74px 75px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
transform: translateY(-15px);
}

.cardcontainer img {
  width: 100%;
  border-radius: 15px;
  border: 1px solid rgba(0, 0, 0, 0.40);
  box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
  margin-bottom: 15px;
  border: 1px solid rgba(255, 255, 255, 1);
  filter: grayscale(100%);
  transition: all 0.4s ease-in-out;
}

.cardcontainer:hover img{
  filter: grayscale(0%);
  border: 1px solid rgba(255, 255, 255, 0);
  transition: all 0.4s ease-in-out;
}

.cardcontainer h1{
  line-height: 50%;
  font-size: 150%;
}

.bottomline{
  display: flex;
  flex-direction: row;
  justify-content: between;
  align-items: center;
  flex-wrap: nowrap;
}

.links{
  margin-left: auto;
  white-space: nowrap;
}

.links::before {
  content: \"SHARE\";
  position: relative;
  bottom: 30px;
  left: 130px;
  opacity: 0.4;
}

.cardcontainer svg{
  padding-left: 10px;
  transition: all 0.4s ease-in-out;
  fill: dodgerblue;
}

.cardcontainer:hover svg{
  color: white;
  transition: all 0.4s ease-in-out;
  fill: white;
}

.cardbutton{
  background: dodgerblue;
  color: white;
box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
  text-decoration: none;
  font-size: 14pt;
  font-weight: 500;
  padding: 8px 12px 8px 12px;
  display: inline-block;
  max-width: 100px;
  text-align: center;
  transition: all 0.4s ease-in-out;
}

.cardbutton:hover{
  transform: translateY(-4px) scale(1.05);
  transition: all 0.3s ease-in-out;
}

.cardcontainer:hover .cardbutton{
  background: white;
  color: dodgerblue;
  transition: all 0.4s ease-in-out;
}

.cardcontainer p{
  position: relative;
  bottom: 10px;
  line-height: 130%;
  font-size: 11pt;
}

.cardcontainer svg:hover{
  transform: translateY(5px);
  transition: all 0.3s ease-in-out;
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
        return "costume/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 36,  140 => 32,  133 => 27,  124 => 24,  120 => 23,  115 => 21,  111 => 20,  108 => 19,  104 => 18,  93 => 9,  91 => 8,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
<body>
<div class=\"card-wrap \"  style=\"margin-top:100px;\">
{% include 'costume/_filtre.html.twig' with{form:form} only %}
</div>
<section style=\"margin-top:20px;\">
<h3 >Tenue du marié</h3>
<p style=\"text-align: center;\" >Le jour du mariage, la tenue du marié est synonyme d’élégance.
<br> Pour mettre en valeur votre personnalité tout en ayant une touche d’originalité, découvrez nos conseils,
<br> inspirations et tendances. Pour le plus beau jour de votre vie, retenez que le plus important est que vous soyez à la fois à l’aise tout en alliant simplicité, classe et modernité.
</p>
</section>
<div class=\"grid\">
{% for item in costume %}
<div class=\"cardcontainer\">
<img src=\"/imgcostume/{{ item.image }}\">
<h1>{{ item.titre}}</h1>
<br>
  <p>{{ item.description}}</p>
  <a href=\"{{ path('contact')}}\"<button type=\"submit\" class=\"btn btn-success \" style=\"border-radius: 30%;\">Contactez!!!</button></a>
  </div>
  {% endfor %}
</div>
    <div style=\"text-align: center;\"><img src=\"https://cdn.pixabay.com/photo/2020/03/06/08/23/divider-4906386_960_720.png\" alt=\"\" style=\"height: 100px;width: 500px;text-align: center;\"></div>

<section>
\t<div class=\"circle circle-one\">
\t\t<img src=\"{{asset('imgcomment/costume-marie-morphologie-cover-faubourg-saint-sulpice2019-696x387.jpg')}}\" alt=\"\" title=\"\">
\t</div>
\t
\t<div class=\"circle circle-two\">
\t\t<img src=\"{{asset('imgcomment/samson-sur-mesure-Mariage-Smoking-sur-mesure.jpg')}}\" alt=\"\">
\t</div>
\t
\t<div>
\t\t<h2>
\t\t\tComment choisir son costume de marié selon sa morphologie ?
\t\t</h2>
\t\t
\t\t<p>
\t\t\tSi le choix de la robe de mariée peut s’avérer être un véritable casse-tête… il n’en reste pas plus simple de trouver la future tenue du marié !
 Mais, pas de panique ! On vous donne quelques conseils pour que vous portiez LE costume qui vous mettra le plus en valeur !

Pour éviter les faux-pas, revoyons, tout d’abord, quelques règles à respecter lors des essayages de votre costume de mariage :</p>
<ul>
<li>La couture des épaules de la veste doit exactement coïncider avec le tombant de vos épaules</li>
<li>La veste doit tomber en-dessous des fesses</li>
<li>La veste ne doit pas former de faux-plis dans le dos</li></ul>
<p>Bien entendu, au moment des essayages, vous allez être confronté à une multitude de modèles, aux coupes diverses et variées.
Sachez donc qu’il est essentiel de porter un costume adapté à votre morphologie. Voici quelques conseils à suivre pour que votre costume de mariage épouse parfaitement votre corps et vous mette en valeur.</p>


\t</div>
</section>

</body>







<style>
body{
 background-image:url(\"http://alijafarian.com/demos/responsive-jquery-accordions/images/texture_old_map.png\");
}
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

h3{
   color:hotpink;
   text-align: center;
 }   


.grid{
  width: 100%;
  height: 100%;
  padding-top: 30px;
  padding-bottom: 120px;
  margin-left: auto;
  margin-right: auto;
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}

.cardcontainer{
max-width: 290px;
min-width: 200px;
margin-left: auto;
margin-right: auto;
display: flex;
flex-direction: column;
flex-wrap: wrap;
justify-content: center;
align-content: center;
background: white;
padding: 30px;
border-radius: 15px;
border: 1px solid rgba(64, 64, 64, 0.70);
box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
transition: all 0.4s ease-in-out;
}

@media screen and (max-width: 1160px) {
  .cardcontainer{
    margin: 20px;
  }
}

@media screen and (max-width: 550px) {
  .cardcontainer{
    margin: 20px;
    padding: 40px;
  }
}

.cardcontainer:hover{
border: 1px solid rgba(255, 255, 255, 1);
background: dodgerblue;
color: white;
transition: all 0.4s ease-in-out;
box-shadow: rgba(0, 0, 0, 0.35) 0px 74px 75px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
transform: translateY(-15px);
}

.cardcontainer img {
  width: 100%;
  border-radius: 15px;
  border: 1px solid rgba(0, 0, 0, 0.40);
  box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
  margin-bottom: 15px;
  border: 1px solid rgba(255, 255, 255, 1);
  filter: grayscale(100%);
  transition: all 0.4s ease-in-out;
}

.cardcontainer:hover img{
  filter: grayscale(0%);
  border: 1px solid rgba(255, 255, 255, 0);
  transition: all 0.4s ease-in-out;
}

.cardcontainer h1{
  line-height: 50%;
  font-size: 150%;
}

.bottomline{
  display: flex;
  flex-direction: row;
  justify-content: between;
  align-items: center;
  flex-wrap: nowrap;
}

.links{
  margin-left: auto;
  white-space: nowrap;
}

.links::before {
  content: \"SHARE\";
  position: relative;
  bottom: 30px;
  left: 130px;
  opacity: 0.4;
}

.cardcontainer svg{
  padding-left: 10px;
  transition: all 0.4s ease-in-out;
  fill: dodgerblue;
}

.cardcontainer:hover svg{
  color: white;
  transition: all 0.4s ease-in-out;
  fill: white;
}

.cardbutton{
  background: dodgerblue;
  color: white;
box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
  text-decoration: none;
  font-size: 14pt;
  font-weight: 500;
  padding: 8px 12px 8px 12px;
  display: inline-block;
  max-width: 100px;
  text-align: center;
  transition: all 0.4s ease-in-out;
}

.cardbutton:hover{
  transform: translateY(-4px) scale(1.05);
  transition: all 0.3s ease-in-out;
}

.cardcontainer:hover .cardbutton{
  background: white;
  color: dodgerblue;
  transition: all 0.4s ease-in-out;
}

.cardcontainer p{
  position: relative;
  bottom: 10px;
  line-height: 130%;
  font-size: 11pt;
}

.cardcontainer svg:hover{
  transform: translateY(5px);
  transition: all 0.3s ease-in-out;
}
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
</style>
{% endblock %}
", "costume/index.html.twig", "/opt/lampp/htdocs/sitemariage2/templates/costume/index.html.twig");
    }
}
