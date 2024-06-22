<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* login_page.html.twig */
class __TwigTemplate_d615a4452162d4fecd8352b1ce8b4d77 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'login' => [$this, 'block_login'],
            'scripts' => [$this, 'block_scripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login_page.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login_page.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Login";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        yield "   ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"/css/registretion_style.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 7
    public function block_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        // line 8
        yield "     <div class=\"wrapper\">
        <img src=\"\" alt=\"PIZZA\" class=\"logotype\">
        <form method=\"post\" id=\"form\" enctype=\"multipart/form-data\">
            <h1 class=\"form__title\">
                LOGIN
            </h1>
            <div class=\"form-error hidden\">
                <img src=\"assets/white_error_icon.png\" alt=\"ER\" class=\"form-error__icon\">
                <p class=\"form-error__text\">Error field</p>
            </div>
            <label for=\"userLogin\" class=\"input-space\">
                Email/Phone:
                <input type=\"text\" id=\"userLogin\" name=\"userLogin\" class=\"input-space__field\">
            </label>
            <label for=\"password\" class=\"input-space\">
                Password:
                <input type=\"password\" id=\"password\" name=\"password\" class=\"input-space__field\">
            </label>
            <div class=\"form-footer\">
                <a href=\"/registrate\" class=\"form-footer__link\">Registrate</a>
                <input type=\"submit\" id=\"button_submit\" value=\"LOGIN\">
            </div>  
        </form>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 34
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 35
        yield "    ";
        yield from $this->yieldParentBlock("scripts", $context, $blocks);
        yield "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.12.0/js/md5.min.js\"></script>
    <script src=\"/script/login_script.js\"></script>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login_page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  135 => 35,  128 => 34,  96 => 8,  89 => 7,  77 => 4,  70 => 3,  56 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Login{% endblock %}
{% block head %}
   {{ parent() }}
    <link rel=\"stylesheet\" href=\"/css/registretion_style.css\">
{% endblock %}
{% block login %}
     <div class=\"wrapper\">
        <img src=\"\" alt=\"PIZZA\" class=\"logotype\">
        <form method=\"post\" id=\"form\" enctype=\"multipart/form-data\">
            <h1 class=\"form__title\">
                LOGIN
            </h1>
            <div class=\"form-error hidden\">
                <img src=\"assets/white_error_icon.png\" alt=\"ER\" class=\"form-error__icon\">
                <p class=\"form-error__text\">Error field</p>
            </div>
            <label for=\"userLogin\" class=\"input-space\">
                Email/Phone:
                <input type=\"text\" id=\"userLogin\" name=\"userLogin\" class=\"input-space__field\">
            </label>
            <label for=\"password\" class=\"input-space\">
                Password:
                <input type=\"password\" id=\"password\" name=\"password\" class=\"input-space__field\">
            </label>
            <div class=\"form-footer\">
                <a href=\"/registrate\" class=\"form-footer__link\">Registrate</a>
                <input type=\"submit\" id=\"button_submit\" value=\"LOGIN\">
            </div>  
        </form>
    </div>
{% endblock %}

{% block scripts %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.12.0/js/md5.min.js\"></script>
    <script src=\"/script/login_script.js\"></script>
    
{% endblock %}", "login_page.html.twig", "/home/vboxuser/Documents/PizzaApp/templates/login_page.html.twig");
    }
}
