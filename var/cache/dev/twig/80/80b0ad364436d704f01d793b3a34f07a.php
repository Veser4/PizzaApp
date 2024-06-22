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

/* form.html.twig */
class __TwigTemplate_d75586049baf80dd0f6031dc690f4b09 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form.html.twig"));

        // line 1
        yield "
<form enctype=\"multipart/form-data\" action=\"/user/";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "\" method=\"post\">
    <input type=\"hidden\" name=\"user_id\" id=\"user_id\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "\">
    <div>
        <label for=\"first_name\">First Name:</label>
        <input type=\"text\" name=\"first_name\" id=\"first_name\">
    </div>
    <div>
        <label for=\"last_name\">Last Name:</label>
        <input type=\"text\" name=\"last_name\" id=\"last_name\">
    </div>
    <div>
        <label for=\"middle_name\">Middle Name:</label>
        <input type=\"text\" name=\"middle_name\" id=\"middle_name\">
    </div>
    <div>
        <label for=\"birth_date\">Birth Date</label>
        <input type=\"date\" name=\"birth_date\" id=\"birth_date\">
    </div>
    <div>
        <label for=\"gender\">Gender:</label>
        <input type=\"text\" name=\"gender\" id=\"gender\">
    </div>
    <div>
        <label for=\"email\">Email:</label>
        <input type=\"text\" name=\"email\" id=\"email\">
    </div>
    <div>
        <label for=\"phone\">Phone:</label>
        <input type=\"text\" name=\"phone\" id=\"phone\">
    </div>
    <div>
        <label for=\"avatar_path\">Avatar Path:</label>
        <input type=\"file\" name=\"avatar_path\" id=\"avatar_path\" accept=\"image/png, image/jpeg, image/gif\">
    </div>
    <button type=\"submit\">Submit</button>
</form>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "form.html.twig";
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
        return array (  48 => 3,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<form enctype=\"multipart/form-data\" action=\"/user/{{action}}\" method=\"post\">
    <input type=\"hidden\" name=\"user_id\" id=\"user_id\" value=\"{{id}}\">
    <div>
        <label for=\"first_name\">First Name:</label>
        <input type=\"text\" name=\"first_name\" id=\"first_name\">
    </div>
    <div>
        <label for=\"last_name\">Last Name:</label>
        <input type=\"text\" name=\"last_name\" id=\"last_name\">
    </div>
    <div>
        <label for=\"middle_name\">Middle Name:</label>
        <input type=\"text\" name=\"middle_name\" id=\"middle_name\">
    </div>
    <div>
        <label for=\"birth_date\">Birth Date</label>
        <input type=\"date\" name=\"birth_date\" id=\"birth_date\">
    </div>
    <div>
        <label for=\"gender\">Gender:</label>
        <input type=\"text\" name=\"gender\" id=\"gender\">
    </div>
    <div>
        <label for=\"email\">Email:</label>
        <input type=\"text\" name=\"email\" id=\"email\">
    </div>
    <div>
        <label for=\"phone\">Phone:</label>
        <input type=\"text\" name=\"phone\" id=\"phone\">
    </div>
    <div>
        <label for=\"avatar_path\">Avatar Path:</label>
        <input type=\"file\" name=\"avatar_path\" id=\"avatar_path\" accept=\"image/png, image/jpeg, image/gif\">
    </div>
    <button type=\"submit\">Submit</button>
</form>", "form.html.twig", "/home/vboxuser/Documents/laba7/php_course_blog/templates/form.html.twig");
    }
}
