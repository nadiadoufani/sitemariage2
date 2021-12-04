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

/* salle_de_mariage/_filtre.html.twig */
class __TwigTemplate_96922bf4734d0264cf53c4acf6b541b0ba18fe81155b959b7b1020e9461f713f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle_de_mariage/_filtre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salle_de_mariage/_filtre.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 2
        echo "
<style>
.form{
    margin-top: 30px;
    display:flex;
    width:100%;
    align-items:left;
    justify-content:left;
    border-radius:0px 0px 15px 15px;
    padding:15px;
    
    background-image:url(\"https://images.squarespace-cdn.com/content/v1/512e5a23e4b0e0699d13d75a/1461743778273-K2J5G5XAGUZCQIWQAJVC/image-0204.jpg?format=1000w\");
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: cover;
}
    .btn{
        width: 100px;
        background-color: lightcoral;
        margin-left:150px;
    
}
h4{
    color: lightcoral;
}


</style>


<div  class=\"form\"> 
 
 ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["class" => "filtre js-filtre-form"]]);
        echo "

 ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "q", [], "any", false, false, false, 36), 'row');
        echo "

  

 
  ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "categorie", [], "any", false, false, false, 41), 'row');
        echo "
   

   
      ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "min", [], "any", false, false, false, 45), 'row');
        echo "
    
    
      ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "max", [], "any", false, false, false, 48), 'row');
        echo "
    



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
        return "salle_de_mariage/_filtre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 55,  105 => 48,  99 => 45,  92 => 41,  84 => 36,  79 => 34,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form 'bootstrap_4_layout.html.twig' %}

<style>
.form{
    margin-top: 30px;
    display:flex;
    width:100%;
    align-items:left;
    justify-content:left;
    border-radius:0px 0px 15px 15px;
    padding:15px;
    
    background-image:url(\"https://images.squarespace-cdn.com/content/v1/512e5a23e4b0e0699d13d75a/1461743778273-K2J5G5XAGUZCQIWQAJVC/image-0204.jpg?format=1000w\");
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: cover;
}
    .btn{
        width: 100px;
        background-color: lightcoral;
        margin-left:150px;
    
}
h4{
    color: lightcoral;
}


</style>


<div  class=\"form\"> 
 
 {{ form_start(form, {attr: {class: 'filtre js-filtre-form'}}) }}

 {{ form_row(form.q) }}

  

 
  {{ form_row(form.categorie) }}
   

   
      {{ form_row(form.min) }}
    
    
      {{ form_row(form.max) }}
    



  <button type=\"submit\" class=\"btn\">Rechercher</button>

{{ form_end(form) }}
</div>", "salle_de_mariage/_filtre.html.twig", "/opt/lampp/htdocs/sitemariage2/templates/salle_de_mariage/_filtre.html.twig");
    }
}
