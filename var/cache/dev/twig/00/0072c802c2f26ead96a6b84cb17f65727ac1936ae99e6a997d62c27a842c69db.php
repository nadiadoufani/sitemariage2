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

/* contact/index.html.twig */
class __TwigTemplate_09bb5b7aa5868a93da2cfb3dc17abb3d7b0b17f6f012c068a3973e6d02cd09a1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
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
        echo "



";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "<div class=\"alert\" role=\"alert\">
";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "<div class=\"container\">
  <div  class=\"form\">  ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 16, $this->source); })()), 'form');
        echo "</div>
</div>

<style>
@import url('https://fonts.googleapis.com/css?family=Roboto');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    font-family: 'Roboto', sans-serif;
}
body{
   background: url(\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.justifit.fr/wp-content/uploads/2018/04/regles-mariage-civil-union-couple-alliances.jpg"), "html", null, true);
        echo "\");
    height: 100vh;
    background-size: cover; 
}
.alert{
    background-color: cyan;
}
.container{
    position: absolute;
    width: 100%;
    top: 50%;
    transform: translateY(-50%);
    padding: 0 20px;
    
}
.form{
    background: rgba(0,0,0,0.8);
    margin: 0 auto;
    max-width: 600px;
    padding: 40px;
    border-radius: 9px;
    display: flex;
    box-shadow: 0 0 100px rgba(0,0,0,0.9);
    display: flex;
    flex-direction: column;
    margin-right: ;
}

button{
    border-radius: 4px;
    display: block;
    color: aqua;
    background: #666;
    padding: 10px;
    width: 50%;
    cursor: pointer;
    box-shadow: 4px 4px 4px 3px #823579;
    margin: 0 auto;
    text-align: center;
}
input,textarea{
  background: transparent;
    color: aqua;
    border: 0;
    font-family: 'Roboto', sans-serif;
    border-bottom: 2px solid aqua;
    padding: 10px;
    margin: 10px 20px;
    width: 100%;
    
}
::webkit-input-placeholder{
    color: aquamarine;
}

::moz-input-placeholder{
    color: aquamarine;
}
button:hover{
    color: orange;
    background-color: cyan;
}

</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 29,  117 => 16,  114 => 15,  105 => 12,  102 => 11,  98 => 10,  92 => 6,  82 => 5,  64 => 3,  54 => 5,  51 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block title %}{% endblock %}

{% block body %}




{% for message in app.flashes('message')%}
<div class=\"alert\" role=\"alert\">
{{message}}
</div>
{% endfor %}
<div class=\"container\">
  <div  class=\"form\">  {{form(contactForm)}}</div>
</div>

<style>
@import url('https://fonts.googleapis.com/css?family=Roboto');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    font-family: 'Roboto', sans-serif;
}
body{
   background: url(\"{{asset('https://www.justifit.fr/wp-content/uploads/2018/04/regles-mariage-civil-union-couple-alliances.jpg')}}\");
    height: 100vh;
    background-size: cover; 
}
.alert{
    background-color: cyan;
}
.container{
    position: absolute;
    width: 100%;
    top: 50%;
    transform: translateY(-50%);
    padding: 0 20px;
    
}
.form{
    background: rgba(0,0,0,0.8);
    margin: 0 auto;
    max-width: 600px;
    padding: 40px;
    border-radius: 9px;
    display: flex;
    box-shadow: 0 0 100px rgba(0,0,0,0.9);
    display: flex;
    flex-direction: column;
    margin-right: ;
}

button{
    border-radius: 4px;
    display: block;
    color: aqua;
    background: #666;
    padding: 10px;
    width: 50%;
    cursor: pointer;
    box-shadow: 4px 4px 4px 3px #823579;
    margin: 0 auto;
    text-align: center;
}
input,textarea{
  background: transparent;
    color: aqua;
    border: 0;
    font-family: 'Roboto', sans-serif;
    border-bottom: 2px solid aqua;
    padding: 10px;
    margin: 10px 20px;
    width: 100%;
    
}
::webkit-input-placeholder{
    color: aquamarine;
}

::moz-input-placeholder{
    color: aquamarine;
}
button:hover{
    color: orange;
    background-color: cyan;
}

</style>

{% endblock %}", "contact/index.html.twig", "/opt/lampp/htdocs/sitemariage2/templates/contact/index.html.twig");
    }
}
