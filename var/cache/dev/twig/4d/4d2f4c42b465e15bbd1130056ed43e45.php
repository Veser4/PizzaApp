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

/* find_user_by_id.html.twig */
class __TwigTemplate_07d8a84408c19b1583356ee370fc9409 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find_user_by_id.html.twig"));

        yield "<form action=\"/user/find\" method='POST'>
    <div>
        <label for=\"user_id\">User ID:</label>
        <input type=\"number\" name=\"user_id\" id=\"user_id\">
    </div>
    <button type=\"submit\">Submit</button>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "find_user_by_id.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"/user/find\" method='POST'>
    <div>
        <label for=\"user_id\">User ID:</label>
        <input type=\"number\" name=\"user_id\" id=\"user_id\">
    </div>
    <button type=\"submit\">Submit</button>
</form>
", "find_user_by_id.html.twig", "/home/vboxuser/Documents/laba7/php_course_blog/templates/find_user_by_id.html.twig");
    }
}
