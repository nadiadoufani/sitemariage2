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

/* voyage_de_noce/_filtre.html.twig */
class __TwigTemplate_62be88dac5a25813a887f36a4a65e51f3467ed6758077c06bfbcf1d86b661225 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage_de_noce/_filtre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage_de_noce/_filtre.html.twig"));

        // line 1
        echo "


";
        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 5
        echo "<style>
.form{
    
    display:flex;
    width:100%;
    height:500px;
    align-items:left;
    justify-content:left;
    border-radius:0px 0px 15px 15px;
    padding:15px;
    
    background-image:url(\"https://images.pexels.com/photos/949223/pexels-photo-949223.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\");
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-position:center;
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
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_start', ["attr" => ["class" => "filtre js-filtre-form"]]);
        echo "

 ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "q", [], "any", false, false, false, 39), 'row');
        echo "

  
 
      ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "min", [], "any", false, false, false, 43), 'row');
        echo "<br>
   
      ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "max", [], "any", false, false, false, 45), 'row');
        echo "




  <button type=\"submit\" class=\"btn\">Rechercher</button>

";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "voyage_de_noce/_filtre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 52,  101 => 45,  96 => 43,  89 => 39,  84 => 37,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


{% form_theme form 'bootstrap_4_layout.html.twig' %}
<style>
.form{
    
    display:flex;
    width:100%;
    height:500px;
    align-items:left;
    justify-content:left;
    border-radius:0px 0px 15px 15px;
    padding:15px;
    
    background-image:url(\"https://images.pexels.com/photos/949223/pexels-photo-949223.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\");
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-position:center;
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

  
 
      {{ form_row(form.min) }}<br>
   
      {{ form_row(form.max) }}




  <button type=\"submit\" class=\"btn\">Rechercher</button>

{{ form_end(form) }}
</div>", "voyage_de_noce/_filtre.html.twig", "/opt/lampp/htdocs/sitemariage2/templates/voyage_de_noce/_filtre.html.twig");
    }
}
