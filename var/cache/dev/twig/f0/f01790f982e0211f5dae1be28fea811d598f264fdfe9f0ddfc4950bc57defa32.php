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

/* register/index.html.twig */
class __TwigTemplate_869ab34dd49822d4797f94aa16dcf836fefe01fdbd4cc8f872d61d093852b9b3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "register/index.html.twig", 1);
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
        echo "  <br>
    <br>
<div  class=\"back\">
    <section class=\"form1\">
        <div class=\"container\">

            ";
        // line 12
        if ((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 17
        echo "
            <div class=\"row\">
                <div class=\"col\"></div>
                <div class=\"col-6\">
                    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start');
        echo "

                    <div class=\"mb-3\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom"]);
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>

                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prenom"]);
        echo "
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        echo "
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date_de_naissance"]);
        echo "
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "password", [], "any", false, false, false, 36), 'row');
        echo "

                    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
                    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"><button type=\"submit\" style=\"float: inline-start;\">login</button></a>
                </div>
                <div class=\"col\">
                  
                </div>
            </div>
        </div>
    </section>


    <style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.back{
   background-image:url(\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.pixabay.com/photo/2021/04/25/15/41/flower-6206819__340.jpg"), "html", null, true);
        echo "\");
   background-size: 100% 60%;
   background-repeat: no-repeat;
   
}


form{
width: 500px;

box-shadow: 1px -4px  21px 20px #d4d4d4;
  border-radius: 8px;
  padding: 50px;
  background: linear-gradient(to top, black,rgb(129, 110, 75),rgb(235, 145, 187));
  
}

labelz{
  position: relative;
  display: block;
  margin-bottom: 25px;
}

input{
  width: 100%;
  height: 50px;
  border-radius: 16px;
  padding: 0 20px;
  border-radius: 16px;
  border: 0;
  background-color: #e8eaf6;
  transition: 0.9s;
  outline: none;
}

input:hover{
  background-color: white;
  color: black;
  
}
strong{
  margin: 5px;
  display: block;
}

.btn,button{
  display: inline-block;
  width: 180px;
  height: 50px;
  line-height: 50px;
 \tbackground: linear-gradient(to left, #e91e63, #ffeb3b);
  ouline: none;
  border: none;
 color: white;
  font-size: 16px;
  box-shadow: 0 20px 30px rgba(0,0,0,0.2) ;
  transition: 0.9s linear;
  cursor: pointer;
  border-radius: 50px;
  font-weight: 500;
  text-transform: uppercase;
}

.btn:hover,button:hover{
  box-shadow: 0 20px 30px;
  letter-spacing: 1px;
  outline: none;
}
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "register/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 57,  166 => 39,  162 => 38,  157 => 36,  152 => 34,  148 => 33,  144 => 32,  140 => 31,  135 => 29,  131 => 28,  125 => 25,  121 => 24,  115 => 21,  109 => 17,  103 => 14,  100 => 13,  98 => 12,  90 => 6,  80 => 5,  62 => 3,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% form_theme form 'bootstrap_4_layout.html.twig' %}
{% block title %}{% endblock %}

{% block body %}
  <br>
    <br>
<div  class=\"back\">
    <section class=\"form1\">
        <div class=\"container\">

            {% if notification %}
                <div class=\"alert alert-success\">
                    {{ notification }}
                </div>
            {% endif %}

            <div class=\"row\">
                <div class=\"col\"></div>
                <div class=\"col-6\">
                    {{ form_start(form) }}

                    <div class=\"mb-3\">
                    {{ form_label(form.nom, 'Nom', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_row(form.nom , {'attr' : {'class' : 'form-control'}}) }}
                    </div>

                    {{ form_label(form.prenom, 'Prenom', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_row(form.prenom  , {'attr' : {'class' : 'form-control'}}) }}

                    {{ form_label(form.email , 'Email', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_row(form.email , {'attr' : {'class' : 'form-control'}}) }}
                    {{ form_label(form.date_de_naissance , 'Date_de_naissance', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_row(form.date_de_naissance  , {'attr' : {'class' : 'form-control'}}) }}

                    {{ form_row(form.password) }}

                    {{ form_end(form) }}
                    <a href=\"{{path('app_login')}}\"><button type=\"submit\" style=\"float: inline-start;\">login</button></a>
                </div>
                <div class=\"col\">
                  
                </div>
            </div>
        </div>
    </section>


    <style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.back{
   background-image:url(\"{{asset('https://cdn.pixabay.com/photo/2021/04/25/15/41/flower-6206819__340.jpg')}}\");
   background-size: 100% 60%;
   background-repeat: no-repeat;
   
}


form{
width: 500px;

box-shadow: 1px -4px  21px 20px #d4d4d4;
  border-radius: 8px;
  padding: 50px;
  background: linear-gradient(to top, black,rgb(129, 110, 75),rgb(235, 145, 187));
  
}

labelz{
  position: relative;
  display: block;
  margin-bottom: 25px;
}

input{
  width: 100%;
  height: 50px;
  border-radius: 16px;
  padding: 0 20px;
  border-radius: 16px;
  border: 0;
  background-color: #e8eaf6;
  transition: 0.9s;
  outline: none;
}

input:hover{
  background-color: white;
  color: black;
  
}
strong{
  margin: 5px;
  display: block;
}

.btn,button{
  display: inline-block;
  width: 180px;
  height: 50px;
  line-height: 50px;
 \tbackground: linear-gradient(to left, #e91e63, #ffeb3b);
  ouline: none;
  border: none;
 color: white;
  font-size: 16px;
  box-shadow: 0 20px 30px rgba(0,0,0,0.2) ;
  transition: 0.9s linear;
  cursor: pointer;
  border-radius: 50px;
  font-weight: 500;
  text-transform: uppercase;
}

.btn:hover,button:hover{
  box-shadow: 0 20px 30px;
  letter-spacing: 1px;
  outline: none;
}
</style>
{% endblock %}
", "register/index.html.twig", "/opt/lampp/htdocs/sitemariage2/templates/register/index.html.twig");
    }
}
