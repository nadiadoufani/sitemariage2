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

/* musique_de_mariage/_filtre.html.twig */
class __TwigTemplate_8098ed8be0158c10911c9221a2c89cbfb4a63957da3755e43d0d63af9c2d78bd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "musique_de_mariage/_filtre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "musique_de_mariage/_filtre.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 2
        echo "
<style>
.form{
    
    display:flex;
    width:100%;
    height:300px;
    align-items:left;
    justify-content:left;
    border-radius:0px 0px 15px 15px;
    padding:15px;
    
    background-image:url(\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgmusiques/mariage-les-plus-belles-chansons-d-amour-pour-ouvrir-le-bal.jpeg"), "html", null, true);
        echo "\");
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: cover;
}
    .btn{
        width: 100px;
        background-color: lightcoral;
        margin-left:400px;
    
}
h4{
    color: lightcoral;
}


</style>


<div  class=\"form\"> 
 
 ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["class" => "filtre js-filtre-form"]]);
        echo "

 ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "q", [], "any", false, false, false, 37), 'row');
        echo "

  
  
  <div class=\"row\">
    
    <div class=\"col-md-6\" >
      ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "min", [], "any", false, false, false, 44), 'row');
        echo "<br>
    </div>
    <div class=\"col-md-6\">
      ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "max", [], "any", false, false, false, 47), 'row');
        echo "
    </div>
  </div><br>



  <button type=\"submit\" class=\"btn\">Rechercher</button>

";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        echo "
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "musique_de_mariage/_filtre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 55,  104 => 47,  98 => 44,  88 => 37,  83 => 35,  59 => 14,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form 'bootstrap_4_layout.html.twig' %}

<style>
.form{
    
    display:flex;
    width:100%;
    height:300px;
    align-items:left;
    justify-content:left;
    border-radius:0px 0px 15px 15px;
    padding:15px;
    
    background-image:url(\"{{asset('imgmusiques/mariage-les-plus-belles-chansons-d-amour-pour-ouvrir-le-bal.jpeg')}}\");
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: cover;
}
    .btn{
        width: 100px;
        background-color: lightcoral;
        margin-left:400px;
    
}
h4{
    color: lightcoral;
}


</style>


<div  class=\"form\"> 
 
 {{ form_start(form, {attr: {class: 'filtre js-filtre-form'}}) }}

 {{ form_row(form.q) }}

  
  
  <div class=\"row\">
    
    <div class=\"col-md-6\" >
      {{ form_row(form.min) }}<br>
    </div>
    <div class=\"col-md-6\">
      {{ form_row(form.max) }}
    </div>
  </div><br>



  <button type=\"submit\" class=\"btn\">Rechercher</button>

{{ form_end(form) }}
</div>", "musique_de_mariage/_filtre.html.twig", "/opt/lampp/htdocs/sitemariage2/templates/musique_de_mariage/_filtre.html.twig");
    }
}
