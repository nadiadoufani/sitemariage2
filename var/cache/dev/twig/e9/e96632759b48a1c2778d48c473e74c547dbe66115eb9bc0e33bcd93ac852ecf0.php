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

/* salle_de_mariage/index.html.twig */
class __TwigTemplate_a1ece386defcf5704e41b931a494ff83c7875c3e728618fec44060667ab7be40 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle_de_mariage/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle_de_mariage/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "salle_de_mariage/index.html.twig", 1);
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

        echo "Hello SalleDeMariageController!";
        
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
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
     <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
\">
 <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, \">
<div class=\"card-wrap \" style=\"margin-top:70px;\">
";
        // line 15
        $this->loadTemplate("salle_de_mariage/_filtre.html.twig", "salle_de_mariage/index.html.twig", 15)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })())]));
        // line 16
        echo "</div>


    <div>
    
        
        <div>
        <h3 id=\"couverte\">Les salles de réception</h3>
        <p>rechercher parmi les nombreuses salles de réceptions et de banquets en location la salle idéale pour votre mariage. 
        <br>  Consulter les prix pour le repas de mariage,le menu de mariage et commencer à organiser la réception, la cérémonie ou encore le cocktail. </p>
    </div>
   
<!-- UIkit CSS -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css\" />

<!-- UIkit JS -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js\"></script>
 
    </div>
   
<!-- UIkit CSS -->
<!-- UIkit SECTION -->
<section class=\"salle\">
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salledemariage"]) || array_key_exists("salledemariage", $context) ? $context["salledemariage"] : (function () { throw new RuntimeError('Variable "salledemariage" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            echo "
    <div class=\"uk-container\">
\t    <div class=\"uk-margin uk-grid-small uk-child-width-expand@s uk-text-center\" uk-grid>
\t\t    <div>
\t\t\t    <div class=\"uk-animation-toggle\" tabindex=\"0\">
\t\t\t        <div class=\"uk-margin uk-card uk-card-default uk-card-hover uk-animation-shake\">
                    
\t\t\t\t        <div class=\"uk-card-media-top\">


\t\t\t\t\t       <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_show", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" ><img src=\"/imgsalles/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 51), "html", null, true);
            echo "\" alt=\"\" style=\"width:300px;height:200px;border-radius: 100px;\">
\t\t\t\t\t\t</div></a>
\t\t\t\t\t    <div class=\"uk-card-body\">
\t\t\t\t\t        <div class=\"uk-card-badge uk-label\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 54), "html", null, true);
            echo "</div>
\t\t\t\t\t\t    <h3 class=\"uk-card-title\" style=\" color:hotpink;\" >";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "categorie", [], "any", false, false, false, 55), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t    <p>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 56), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t  
        </div>

    </div>
</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "</section>
<!--pagination-->
<div class=\"cap\">
  ";
        // line 70
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["salledemariage"]) || array_key_exists("salledemariage", $context) ? $context["salledemariage"] : (function () { throw new RuntimeError('Variable "salledemariage" does not exist.', 70, $this->source); })()));
        echo "
  </div>
<div style=\"text-align: center;\"><img src=\"https://cdn.pixabay.com/photo/2020/03/06/08/23/divider-4906386_960_720.png\" alt=\"\" style=\"height: 100px;width: 500px;text-align: center;\"></div>

<section style=\"margin-top:20px;\">
\t<div class=\"circle circle-one\">
\t\t<img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgsalles/db2a931ed7a6f5140671dbb85e513171.jpg"), "html", null, true);
        echo "\" alt=\"\" title=\"\">
\t</div>
\t
\t<div class=\"circle circle-two\">
\t\t<img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgsalles/fa1f4e29f92680f0ef26b8117ffdcfe4.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t</div>
\t
\t    
            <div class=\"sale\" style=\"margin-top:30px;\">
            
            <h3>conseils</h3>
            <p>Votre cher et tendre vient de vous faire la plus belle des demandes en mariage… C’est un grand Oui ! Tic-tac tic-tac…  
            <br> Le compte à rebours des préparatifs est donc lancé !
            <br> Une fois la date de votre union fixée, la première chose à faire est de vous mettre à la quête du lieu de réception de vos rêves.
            <br> Pour vous guider, nous avons recensé pour vous nos salles de réception coups de coeur, par villes et par régions </p>
            </div>
            
                
       
            
</section>



    <div id=\"maCarte\"></div>

    <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"
  integrity=\"sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==\"
  crossorigin=\"\"></script>
   <script>
      var carte = L.map('maCarte').setView([36.8064835, 10.1815426], 13);

          // On charge les \"tuiles\"
          L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
              // Il est toujours bien de laisser le lien vers la source des données
              attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
              minZoom: 1,
              maxZoom: 20
          }).addTo(carte);
          ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salledemariage"]) || array_key_exists("salledemariage", $context) ? $context["salledemariage"] : (function () { throw new RuntimeError('Variable "salledemariage" does not exist.', 115, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 116
            echo "              // On crée le marqueur et on lui attribue une popup
              var marqueur = L.marker([";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "lat", [], "any", false, false, false, 117), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "lon", [], "any", false, false, false, 117), "html", null, true);
            echo "]).addTo(carte); //.addTo(carte);
           marqueur.bindPopup(\"<h3>";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 118), "html", null, true);
            echo "</h3>\");



          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "   </script>
            
  </div>
  </div>
  
</body>
<style>
  .cap{
justify-content: center;
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


   



 *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
 #maCarte{
     margin-top:10px;
        height: 400px;
        width:100%;
         

font: 14px/16px Arial, Helvetica, sans-serif;
background-image:url(\"http://alijafarian.com/demos/responsive-jquery-accordions/images/texture_old_map.png\");
box-shadow: 0 0 15px rgba(0,0,0,0.2);
border-radius: 5px;
min-width: 200px;
    }

     
@keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}

body { margin: 0; 
 background-image:url(\"http://alijafarian.com/demos/responsive-jquery-accordions/images/texture_old_map.png\");
}
div#slider { overflow: hidden; }
div#slider figure img { width: 20%; float: left; }
div#slider figure { 
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 30s slidy infinite; 
}
p{
    text-align: center;  
}
h3{
  font-family: BlinkMacSystemFont, 'Segoe UI', Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue';
  font-size: 2em;
  text-align: center;
  color:hotpink;
  
  
}




.container{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    padding: 3rem 2rem;
}

.container .card{
    height: 300px;
    width: 350px;
    margin: 1rem;
    position: relative;
    cursor: pointer;
    border-radius: 100px;
    overflow: hidden;
}

.container .card img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.container .card .card-info{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0 2rem;
    background-color: #FF8C00;
  
    clip-path: circle(0%);
    transition: 0.8s ease all;
}

.container .card:hover .card-info{
    clip-path: circle(100%);
}

.container .card .card-info h2{
    font-size: 2rem;
    word-spacing: 2px;
    letter-spacing: 1px;
}

.container .card .card-info p{
    margin: 1rem 0;
    line-height: 1.2;
    opacity: 0.9;
}

.container .card .card-info button{
    margin-top: 1rem;
    border: none;
    
    padding: 0.75rem 1.25rem;
    font-size: 0.9rem;
    border-radius: 2px;
    cursor: pointer;
    outline: none;
    transition: 0.3s ease all;
}



@media(max-width: 400px){
  .container{
    padding: 3rem 0;
  }
  .container .card{
    width: 100%;
    height: 200px;
    border-radius: 100px;
  }
  
  .container .card .card-info{
    padding: 0.8rem 1rem;
  }
  
  .container .card .card-info h2{
    font-size: 1.6rem;
  }

  .container .card .card-info p{
      margin: 0.75rem 0;
      line-height: 1.1;
      font-size: 0.8rem
  }

  .container .card .card-info button{
    margin-top: 0.75rem;
    padding: 0.5rem 1rem;
    font-size: 0.8rem;
  }
}




    </style>
    <script>gsap.from('.card', { duration: 3, opacity: 0, delay: 0.25, stagger: .6, ease: 'elastic' })

</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "salle_de_mariage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 123,  248 => 118,  242 => 117,  239 => 116,  235 => 115,  197 => 80,  190 => 76,  181 => 70,  176 => 67,  159 => 56,  155 => 55,  151 => 54,  143 => 51,  131 => 41,  127 => 40,  101 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello SalleDeMariageController!{% endblock %}

{% block body %}
<body>
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
     <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
\">
 <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, \">
<div class=\"card-wrap \" style=\"margin-top:70px;\">
{% include 'salle_de_mariage/_filtre.html.twig' with{form:form} only %}
</div>


    <div>
    
        
        <div>
        <h3 id=\"couverte\">Les salles de réception</h3>
        <p>rechercher parmi les nombreuses salles de réceptions et de banquets en location la salle idéale pour votre mariage. 
        <br>  Consulter les prix pour le repas de mariage,le menu de mariage et commencer à organiser la réception, la cérémonie ou encore le cocktail. </p>
    </div>
   
<!-- UIkit CSS -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css\" />

<!-- UIkit JS -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js\"></script>
 
    </div>
   
<!-- UIkit CSS -->
<!-- UIkit SECTION -->
<section class=\"salle\">
{% for item in salledemariage%}

    <div class=\"uk-container\">
\t    <div class=\"uk-margin uk-grid-small uk-child-width-expand@s uk-text-center\" uk-grid>
\t\t    <div>
\t\t\t    <div class=\"uk-animation-toggle\" tabindex=\"0\">
\t\t\t        <div class=\"uk-margin uk-card uk-card-default uk-card-hover uk-animation-shake\">
                    
\t\t\t\t        <div class=\"uk-card-media-top\">


\t\t\t\t\t       <a href=\"{{path('home_show',{'id':item.id})}}\" ><img src=\"/imgsalles/{{ item.image }}\" alt=\"\" style=\"width:300px;height:200px;border-radius: 100px;\">
\t\t\t\t\t\t</div></a>
\t\t\t\t\t    <div class=\"uk-card-body\">
\t\t\t\t\t        <div class=\"uk-card-badge uk-label\">{{ item.nom}}</div>
\t\t\t\t\t\t    <h3 class=\"uk-card-title\" style=\" color:hotpink;\" >{{ item.categorie}}</h3>
\t\t\t\t\t\t    <p>{{ item.description}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t  
        </div>

    </div>
</div>
  {% endfor %}
</section>
<!--pagination-->
<div class=\"cap\">
  {{ knp_pagination_render(salledemariage)}}
  </div>
<div style=\"text-align: center;\"><img src=\"https://cdn.pixabay.com/photo/2020/03/06/08/23/divider-4906386_960_720.png\" alt=\"\" style=\"height: 100px;width: 500px;text-align: center;\"></div>

<section style=\"margin-top:20px;\">
\t<div class=\"circle circle-one\">
\t\t<img src=\"{{asset('imgsalles/db2a931ed7a6f5140671dbb85e513171.jpg')}}\" alt=\"\" title=\"\">
\t</div>
\t
\t<div class=\"circle circle-two\">
\t\t<img src=\"{{asset('imgsalles/fa1f4e29f92680f0ef26b8117ffdcfe4.jpg')}}\" alt=\"\">
\t</div>
\t
\t    
            <div class=\"sale\" style=\"margin-top:30px;\">
            
            <h3>conseils</h3>
            <p>Votre cher et tendre vient de vous faire la plus belle des demandes en mariage… C’est un grand Oui ! Tic-tac tic-tac…  
            <br> Le compte à rebours des préparatifs est donc lancé !
            <br> Une fois la date de votre union fixée, la première chose à faire est de vous mettre à la quête du lieu de réception de vos rêves.
            <br> Pour vous guider, nous avons recensé pour vous nos salles de réception coups de coeur, par villes et par régions </p>
            </div>
            
                
       
            
</section>



    <div id=\"maCarte\"></div>

    <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"
  integrity=\"sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==\"
  crossorigin=\"\"></script>
   <script>
      var carte = L.map('maCarte').setView([36.8064835, 10.1815426], 13);

          // On charge les \"tuiles\"
          L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
              // Il est toujours bien de laisser le lien vers la source des données
              attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
              minZoom: 1,
              maxZoom: 20
          }).addTo(carte);
          {% for item in salledemariage %}
              // On crée le marqueur et on lui attribue une popup
              var marqueur = L.marker([{{ item.lat }}, {{ item.lon }}]).addTo(carte); //.addTo(carte);
           marqueur.bindPopup(\"<h3>{{ item.nom }}</h3>\");



          {% endfor %}
   </script>
            
  </div>
  </div>
  
</body>
<style>
  .cap{
justify-content: center;
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


   



 *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
 #maCarte{
     margin-top:10px;
        height: 400px;
        width:100%;
         

font: 14px/16px Arial, Helvetica, sans-serif;
background-image:url(\"http://alijafarian.com/demos/responsive-jquery-accordions/images/texture_old_map.png\");
box-shadow: 0 0 15px rgba(0,0,0,0.2);
border-radius: 5px;
min-width: 200px;
    }

     
@keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}

body { margin: 0; 
 background-image:url(\"http://alijafarian.com/demos/responsive-jquery-accordions/images/texture_old_map.png\");
}
div#slider { overflow: hidden; }
div#slider figure img { width: 20%; float: left; }
div#slider figure { 
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 30s slidy infinite; 
}
p{
    text-align: center;  
}
h3{
  font-family: BlinkMacSystemFont, 'Segoe UI', Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue';
  font-size: 2em;
  text-align: center;
  color:hotpink;
  
  
}




.container{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    padding: 3rem 2rem;
}

.container .card{
    height: 300px;
    width: 350px;
    margin: 1rem;
    position: relative;
    cursor: pointer;
    border-radius: 100px;
    overflow: hidden;
}

.container .card img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.container .card .card-info{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0 2rem;
    background-color: #FF8C00;
  
    clip-path: circle(0%);
    transition: 0.8s ease all;
}

.container .card:hover .card-info{
    clip-path: circle(100%);
}

.container .card .card-info h2{
    font-size: 2rem;
    word-spacing: 2px;
    letter-spacing: 1px;
}

.container .card .card-info p{
    margin: 1rem 0;
    line-height: 1.2;
    opacity: 0.9;
}

.container .card .card-info button{
    margin-top: 1rem;
    border: none;
    
    padding: 0.75rem 1.25rem;
    font-size: 0.9rem;
    border-radius: 2px;
    cursor: pointer;
    outline: none;
    transition: 0.3s ease all;
}



@media(max-width: 400px){
  .container{
    padding: 3rem 0;
  }
  .container .card{
    width: 100%;
    height: 200px;
    border-radius: 100px;
  }
  
  .container .card .card-info{
    padding: 0.8rem 1rem;
  }
  
  .container .card .card-info h2{
    font-size: 1.6rem;
  }

  .container .card .card-info p{
      margin: 0.75rem 0;
      line-height: 1.1;
      font-size: 0.8rem
  }

  .container .card .card-info button{
    margin-top: 0.75rem;
    padding: 0.5rem 1rem;
    font-size: 0.8rem;
  }
}




    </style>
    <script>gsap.from('.card', { duration: 3, opacity: 0, delay: 0.25, stagger: .6, ease: 'elastic' })

</script>

{% endblock %}
", "salle_de_mariage/index.html.twig", "/opt/lampp/htdocs/sitemariage2/templates/salle_de_mariage/index.html.twig");
    }
}
