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

/* reservation/index.html.twig */
class __TwigTemplate_b9347cb65a50d0cf86bdd582f0f0802faefb6c0b10ab611f313cbd60f33c3d89 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ReservationController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<br>
<br>
<div class=\"container\" style=\"margin-top:50px;\">
<section class=\"form\">

<div class=\"row\">



        <div class=\"col\"> </div>
          <div class=\"col-6\" >

          ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
         
<div class=\"mb-3\">
          
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
<div class=\"mb-3\">
          
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
<div class=\"mb-3\">
          
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 31, $this->source); })()), "date", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"mb-3\">
          
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 35, $this->source); })()), "time", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"mb-3\">
            
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 39, $this->source); })()), "salle_de_mariage", [], "any", false, false, false, 39), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>



        



         <div class=\"mb-3\">
          
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 50, $this->source); })()), "budget", [], "any", false, false, false, 50), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 52, $this->source); })()), 'form_end');
        echo "

          </div>
          <div class=\"col\"></div>
        </div>

    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 52,  154 => 50,  140 => 39,  133 => 35,  126 => 31,  119 => 27,  112 => 23,  105 => 19,  91 => 7,  81 => 6,  62 => 4,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% form_theme reservationForm 'bootstrap_4_layout.html.twig' %}

{% block title %}Hello ReservationController!{% endblock %}

{% block body %}
<br>
<br>
<div class=\"container\" style=\"margin-top:50px;\">
<section class=\"form\">

<div class=\"row\">



        <div class=\"col\"> </div>
          <div class=\"col-6\" >

          {{form_start(reservationForm)}}
         
<div class=\"mb-3\">
          
            {{form_row(reservationForm.nom,{'attr':{'class':'form-control'}})}}
        </div>
<div class=\"mb-3\">
          
            {{form_row(reservationForm.email,{'attr':{'class':'form-control'}})}}
        </div>
<div class=\"mb-3\">
          
            {{form_row(reservationForm.date,{'attr':{'class':'form-control'}})}}
        </div>
        <div class=\"mb-3\">
          
            {{form_row(reservationForm.time,{'attr':{'class':'form-control'}})}}
        </div>
        <div class=\"mb-3\">
            
            {{form_row(reservationForm.salle_de_mariage,{'attr':{'class':'form-control'}})}}
        </div>



        



         <div class=\"mb-3\">
          
            {{form_row(reservationForm.budget,{'attr':{'class':'form-control'}})}}
        </div>
        {{form_end(reservationForm)}}

          </div>
          <div class=\"col\"></div>
        </div>

    </div>
</section>
{% endblock %}
", "reservation/index.html.twig", "/opt/lampp/htdocs/sitemariage2/templates/reservation/index.html.twig");
    }
}
