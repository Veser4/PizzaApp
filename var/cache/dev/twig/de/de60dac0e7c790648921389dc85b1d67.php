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

/* registrate_page.html.twig */
class __TwigTemplate_9d5b5c4610af9ee1cb50d7a6fb4d6ae4 extends Template
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
            'registration' => [$this, 'block_registration'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registrate_page.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registrate_page.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Registration";
        
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
    public function block_registration($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "registration"));

        // line 8
        yield "     <div class=\"wrapper\">
        <img src=\"\" alt=\"PIZZA\" class=\"logotype\">
        <form method=\"post\" id=\"form\" enctype=\"multipart/form-data\">
            <h1 class=\"form__title\">
                REGISTRATE
            </h1>
            <div class=\"form-error hidden\">
                <img src=\"assets/white_error_icon.png\" alt=\"ER\" class=\"form-error__icon\">
                <p class=\"form-error__text\">Error field</p>
            </div>
            <label for=\"name\" class=\"input-space\">
                Name:
                <input type=\"text\" id=\"name\" name=\"name\" class=\"input-space__field\">
            </label>
            <label for=\"surname\" class=\"input-space\">
                Surname:
                <input type=\"text\" id=\"surname\" name=\"surname\" class=\"input-space__field\">
            </label>
            <label for=\"email\" class=\"input-space\">
                Email:
                <input type=\"text\" id=\"email\" name=\"email\" class=\"input-space__field\">
            </label>
            <label for=\"phone\" class=\"input-space\">
                Phone:
                <input type=\"text\" id=\"phone\" name=\"phone\" class=\"input-space__field\">
            </label>
            <label for=\"password\" class=\"input-space\">
                Password:
                <input type=\"password\" id=\"password\" name=\"password\" class=\"input-space__field\">
                <p class=\"input-space__subtitle\">8+ символов, заглавные и строчные буквы, цифры.</p>
            </label>
            <label for=\"avatarPath\" class=\"input-image\">
                AvatarPath:
                <input type=\"file\" name=\"avatar_path\" id=\"avatar_path\" accept=\"image/png, image/jpeg, image/gif\">
            </label>
            <div class=\"form-footer\">
                <a href=\"/login\" class=\"form-footer__link\">Login</a>
                <input type=\"submit\" id=\"button_submit\" value=\"Create Account\">
            </div>  
        </form>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 51
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 52
        yield "    ";
        yield from $this->yieldParentBlock("scripts", $context, $blocks);
        yield "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.12.0/js/md5.min.js\"></script>
    <script src=\"/script/registration_script.js\"></script>    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registrate_page.html.twig";
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
        return array (  152 => 52,  145 => 51,  96 => 8,  89 => 7,  77 => 4,  70 => 3,  56 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Registration{% endblock %}
{% block head %}
   {{ parent() }}
    <link rel=\"stylesheet\" href=\"/css/registretion_style.css\">
{% endblock %}
{% block registration %}
     <div class=\"wrapper\">
        <img src=\"\" alt=\"PIZZA\" class=\"logotype\">
        <form method=\"post\" id=\"form\" enctype=\"multipart/form-data\">
            <h1 class=\"form__title\">
                REGISTRATE
            </h1>
            <div class=\"form-error hidden\">
                <img src=\"assets/white_error_icon.png\" alt=\"ER\" class=\"form-error__icon\">
                <p class=\"form-error__text\">Error field</p>
            </div>
            <label for=\"name\" class=\"input-space\">
                Name:
                <input type=\"text\" id=\"name\" name=\"name\" class=\"input-space__field\">
            </label>
            <label for=\"surname\" class=\"input-space\">
                Surname:
                <input type=\"text\" id=\"surname\" name=\"surname\" class=\"input-space__field\">
            </label>
            <label for=\"email\" class=\"input-space\">
                Email:
                <input type=\"text\" id=\"email\" name=\"email\" class=\"input-space__field\">
            </label>
            <label for=\"phone\" class=\"input-space\">
                Phone:
                <input type=\"text\" id=\"phone\" name=\"phone\" class=\"input-space__field\">
            </label>
            <label for=\"password\" class=\"input-space\">
                Password:
                <input type=\"password\" id=\"password\" name=\"password\" class=\"input-space__field\">
                <p class=\"input-space__subtitle\">8+ символов, заглавные и строчные буквы, цифры.</p>
            </label>
            <label for=\"avatarPath\" class=\"input-image\">
                AvatarPath:
                <input type=\"file\" name=\"avatar_path\" id=\"avatar_path\" accept=\"image/png, image/jpeg, image/gif\">
            </label>
            <div class=\"form-footer\">
                <a href=\"/login\" class=\"form-footer__link\">Login</a>
                <input type=\"submit\" id=\"button_submit\" value=\"Create Account\">
            </div>  
        </form>
    </div>
{% endblock %}

{% block scripts %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.12.0/js/md5.min.js\"></script>
    <script src=\"/script/registration_script.js\"></script>    
{% endblock %}", "registrate_page.html.twig", "/home/vboxuser/Documents/PizzaApp/templates/registrate_page.html.twig");
    }
}
