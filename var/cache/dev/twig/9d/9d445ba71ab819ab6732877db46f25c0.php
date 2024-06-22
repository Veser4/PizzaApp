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

/* main_page.html.twig */
class __TwigTemplate_1da791cc20df2f2c1005bb455273a1bc extends Template
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
            'main_page' => [$this, 'block_main_page'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_page.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main_page.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "PizzaApp";
        
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
   <link rel=\"stylesheet\" href=\"/css/main_page.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 7
    public function block_main_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_page"));

        // line 8
        yield "    <div class=\"navigation-block\">
        <ul class=\"navigation-list\">
            <li class=\"navigation-list__item item_choosen\"><a href=\"#\" class=\"navigation-list__link\"><img src=\"/assets/main_icon.svg\" alt=\"Main\" class=\"navigation-block__icon icon_choosen\"></a></li>
            <li class=\"navigation-list__item\"><a href=\"#\" class=\"navigation-list__link\"><img src=\"/assets/profile_icon.svg\" alt=\"Profile\" class=\"navigation-block__icon\"></a></li>
            <li class=\"navigation-list__item\"><a href=\"#\" class=\"navigation-list__link\"><img src=\"/assets/payment_icon.svg\" alt=\"Payment\" class=\"navigation-block__icon\"></a></li>
            <li class=\"navigation-list__item\"><a href=\"#\" class=\"navigation-list__link\"><img src=\"/assets/settings_icon.svg\" alt=\"Settings\" class=\"navigation-block__icon\"></a></li>
            <li class=\"navigation-list__item\"><a href=\"#\" class=\"navigation-list__link\"><img src=\"/assets/contact_icon.svg\" alt=\"Contact\" class=\"navigation-block__icon\"></a></li>
        </ul>
    </div>
    <div class=\"main-content-block\">
        <div class=\"main-content-window\">
            <section class=\"main-content-window__item\">
                <div class=\"introduction\">
                    <div class=\"welocome-block\">
                        <p class=\"welocome-block__greating\">Hello ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "getName", [], "method", false, false, false, 22), "html", null, true);
        yield "</p>
                        <p class=\"welocome-block__text\">Welcome Back</p>
                    </div>
                </div>
                <div class=\"banner\">

                </div>
                <div class=\"menu-block\">
                    <h2 class=\"menu-block__title\">Our Menu</h2>
                </div>
                <div class=\"pizzas-block\">
                    <div class=\"pizzas-wrapper\">
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pizzas"]) || array_key_exists("pizzas", $context) ? $context["pizzas"] : (function () { throw new RuntimeError('Variable "pizzas" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pizza"]) {
            // line 35
            yield "                            <div class=\"pizza-card\">
                                <img src=\"\" alt=\"\" class=\"pizza-card__image\">
                                <p class=\"pizza-info__id hidden\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pizza"], "getId", [], "method", false, false, false, 37), "html", null, true);
            yield "</p>
                                <div class=\"pizza-info\">
                                    <p class=\"pizza-info__name\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pizza"], "getName", [], "method", false, false, false, 39), "html", null, true);
            yield "</p>
                                    <p class=\"pizza-info__prepare-time\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pizza"], "getPreparationTime", [], "method", false, false, false, 40), "html", null, true);
            yield "</p>
                                    <p class=\"pizza-info__weight hidden\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pizza"], "getWeight", [], "method", false, false, false, 41), "html", null, true);
            yield " г.</p>
                                    <div class=\"pizza-footer\">
                                        <p class=\"pizza-info__price\">\$";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pizza"], "getPrice", [], "method", false, false, false, 43), "html", null, true);
            yield "</p>
                                        <button class=\"pizza-info__add-button\">+</button>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "  
                    </div>
                </div>
            </section>
            <section class=\"main-content-window__item\">
                <div class=\"user-information\">
                    <div class=\"user-infroamtion-image-container\">
                        <img src=\"\" alt=\"\" class=\"user-information__image\">
                    </div>
                    <div class=\"user-information-data-container\">
                        <p class=\"user-information__nameSurname\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "getName", [], "method", false, false, false, 58), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "getSurname", [], "method", false, false, false, 58), "html", null, true);
        yield "</p>
                        <p class=\"user-information__email\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "getEmail", [], "method", false, false, false, 59), "html", null, true);
        yield "</p>
                        <p class=\"user-information__phone\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "getPhone", [], "method", false, false, false, 60), "html", null, true);
        yield "</p>
                        <p class=\"user-information__address\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "getAddress", [], "method", false, false, false, 61), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div class=\"inputs-block\">
                    <label for=\"password\" class=\"inputs-block__container\">
                        Пароль
                        <div class=\"inputs-block__space\">
                            <input type=\"text\" name=\"password\" id=\"password\" placeholder=\"Пароль\">
                            <button id=\"password-button\">Применить</button>
                        </div>
                    </label>
                    <label for=\"address\" class=\"inputs-block__container\">
                        Адрес
                        <div class=\"inputs-block__space\">
                            <input type=\"text\" name=\"address\" id=\"address\" placeholder=\"Адрес\">
                            <button id=\"address-button\">Применить</button>
                        </div>
                    </label>
                </div>
                <div class=\"orders-history\">
                    <h1 class=\"orders-history__title\">История заказов:</h1>
                    <ul class=\"orders-history__list\">
                        <li class=\"orders-history__item\">
                            <div class=\"porders-history__item-text\">Дата</div>
                            <div class=\"porders-history__item-text\">Адресс доставки</div>
                            <div class=\"porders-history__item-text\">Цена</div>
                        </li>
                    </ul>
                </div>
            </section>
            <section class=\"main-content-window__item\">
            </section>
            <section class=\"main-content-window__item\">
            </section>
            <section class=\"main-content-window__item\">
            </section>
        </div>
    </div>
    <div class=\"information-block\">
        <div class=\"user-info\">
            <img src=\"/assets/image_logo.png\" class=\"user-info__image\">
            ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "getName", [], "method", false, false, false, 102), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "getSurname", [], "method", false, false, false, 102), "html", null, true);
        yield "
            <a href='/logout'>LOGOUT</a>
        </div>
        <div class=\"credit-card-info\">

        </div>
        <div class=\"order-menu\">    
            <div class=\"order-menu__title\">Order Menu</div>
            <div class=\"order-menu-list\">
            </div>
            <div class=\"order-menu-footer\">
                <p class=\"order-menu__text\">Total Price</p>
                <p class=\"order-menu__total-price\">\$0.00</p>
            </div>
            <div class=\"order-menu__error height-zero\">
                Лист заказа пуст!
            </div>
            <button class=\"order-menu__button\">
                Сделать заказ
            </button>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 125
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 126
        yield "    ";
        yield from $this->yieldParentBlock("scripts", $context, $blocks);
        yield "
    <script src=\"/script/main_page_script.js\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "main_page.html.twig";
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
        return array (  275 => 126,  268 => 125,  235 => 102,  191 => 61,  187 => 60,  183 => 59,  177 => 58,  165 => 48,  153 => 43,  148 => 41,  144 => 40,  140 => 39,  135 => 37,  131 => 35,  127 => 34,  112 => 22,  96 => 8,  89 => 7,  77 => 4,  70 => 3,  56 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}PizzaApp{% endblock %}
{% block head %}
   {{ parent() }}
   <link rel=\"stylesheet\" href=\"/css/main_page.css\">
{% endblock %}
{% block main_page %}
    <div class=\"navigation-block\">
        <ul class=\"navigation-list\">
            <li class=\"navigation-list__item item_choosen\"><a href=\"#\" class=\"navigation-list__link\"><img src=\"/assets/main_icon.svg\" alt=\"Main\" class=\"navigation-block__icon icon_choosen\"></a></li>
            <li class=\"navigation-list__item\"><a href=\"#\" class=\"navigation-list__link\"><img src=\"/assets/profile_icon.svg\" alt=\"Profile\" class=\"navigation-block__icon\"></a></li>
            <li class=\"navigation-list__item\"><a href=\"#\" class=\"navigation-list__link\"><img src=\"/assets/payment_icon.svg\" alt=\"Payment\" class=\"navigation-block__icon\"></a></li>
            <li class=\"navigation-list__item\"><a href=\"#\" class=\"navigation-list__link\"><img src=\"/assets/settings_icon.svg\" alt=\"Settings\" class=\"navigation-block__icon\"></a></li>
            <li class=\"navigation-list__item\"><a href=\"#\" class=\"navigation-list__link\"><img src=\"/assets/contact_icon.svg\" alt=\"Contact\" class=\"navigation-block__icon\"></a></li>
        </ul>
    </div>
    <div class=\"main-content-block\">
        <div class=\"main-content-window\">
            <section class=\"main-content-window__item\">
                <div class=\"introduction\">
                    <div class=\"welocome-block\">
                        <p class=\"welocome-block__greating\">Hello {{user.getName()}}</p>
                        <p class=\"welocome-block__text\">Welcome Back</p>
                    </div>
                </div>
                <div class=\"banner\">

                </div>
                <div class=\"menu-block\">
                    <h2 class=\"menu-block__title\">Our Menu</h2>
                </div>
                <div class=\"pizzas-block\">
                    <div class=\"pizzas-wrapper\">
                        {% for pizza in pizzas %}
                            <div class=\"pizza-card\">
                                <img src=\"\" alt=\"\" class=\"pizza-card__image\">
                                <p class=\"pizza-info__id hidden\">{{pizza.getId()}}</p>
                                <div class=\"pizza-info\">
                                    <p class=\"pizza-info__name\">{{pizza.getName()}}</p>
                                    <p class=\"pizza-info__prepare-time\">{{pizza.getPreparationTime()}}</p>
                                    <p class=\"pizza-info__weight hidden\">{{pizza.getWeight()}} г.</p>
                                    <div class=\"pizza-footer\">
                                        <p class=\"pizza-info__price\">\${{pizza.getPrice()}}</p>
                                        <button class=\"pizza-info__add-button\">+</button>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}  
                    </div>
                </div>
            </section>
            <section class=\"main-content-window__item\">
                <div class=\"user-information\">
                    <div class=\"user-infroamtion-image-container\">
                        <img src=\"\" alt=\"\" class=\"user-information__image\">
                    </div>
                    <div class=\"user-information-data-container\">
                        <p class=\"user-information__nameSurname\">{{user.getName()}} {{user.getSurname()}}</p>
                        <p class=\"user-information__email\">{{user.getEmail()}}</p>
                        <p class=\"user-information__phone\">{{user.getPhone()}}</p>
                        <p class=\"user-information__address\">{{user.getAddress()}}</p>
                    </div>
                </div>
                <div class=\"inputs-block\">
                    <label for=\"password\" class=\"inputs-block__container\">
                        Пароль
                        <div class=\"inputs-block__space\">
                            <input type=\"text\" name=\"password\" id=\"password\" placeholder=\"Пароль\">
                            <button id=\"password-button\">Применить</button>
                        </div>
                    </label>
                    <label for=\"address\" class=\"inputs-block__container\">
                        Адрес
                        <div class=\"inputs-block__space\">
                            <input type=\"text\" name=\"address\" id=\"address\" placeholder=\"Адрес\">
                            <button id=\"address-button\">Применить</button>
                        </div>
                    </label>
                </div>
                <div class=\"orders-history\">
                    <h1 class=\"orders-history__title\">История заказов:</h1>
                    <ul class=\"orders-history__list\">
                        <li class=\"orders-history__item\">
                            <div class=\"porders-history__item-text\">Дата</div>
                            <div class=\"porders-history__item-text\">Адресс доставки</div>
                            <div class=\"porders-history__item-text\">Цена</div>
                        </li>
                    </ul>
                </div>
            </section>
            <section class=\"main-content-window__item\">
            </section>
            <section class=\"main-content-window__item\">
            </section>
            <section class=\"main-content-window__item\">
            </section>
        </div>
    </div>
    <div class=\"information-block\">
        <div class=\"user-info\">
            <img src=\"/assets/image_logo.png\" class=\"user-info__image\">
            {{user.getName()}} {{user.getSurname()}}
            <a href='/logout'>LOGOUT</a>
        </div>
        <div class=\"credit-card-info\">

        </div>
        <div class=\"order-menu\">    
            <div class=\"order-menu__title\">Order Menu</div>
            <div class=\"order-menu-list\">
            </div>
            <div class=\"order-menu-footer\">
                <p class=\"order-menu__text\">Total Price</p>
                <p class=\"order-menu__total-price\">\$0.00</p>
            </div>
            <div class=\"order-menu__error height-zero\">
                Лист заказа пуст!
            </div>
            <button class=\"order-menu__button\">
                Сделать заказ
            </button>
        </div>
    </div>
{% endblock %}
{% block scripts %}
    {{ parent() }}
    <script src=\"/script/main_page_script.js\"></script>

{% endblock %}
{# {% block user_info %}
    <h2> FirstName:  {{user.getFirstName}}</h2>
    <h2> Last Name: {{user.getLastName}}</h2>
    <h2> Middle Name: {{user.getMiddleName}}</h2>
    <h2> Birth Date: {{user.getBirthDate}}</h2>
    <h2> Gender: {{user.getGender}}</h2>
    <h2> Email: {{user.getEmail}}</h2>
    <h2> Phone: {{user.getPhone}}</h2>
    {% if user.getAvataPath() %}
        <h2> Image: <img src=\"/assets/{{user.getAvataPath}}\"></h2>
    {% endif %}
{% endblock %}
{% block delete_block %}
    <form action=\"/user/delete\" method='POST'>
        <div>
            Удалить пользователя:
            <input type=\"hidden\" name=\"user_id\" id=\"user_id\" value=\"{{user.getUserId}}\">
        </div>
        <button type=\"submit\">Delete</button>
    </form>
{% endblock %}
{% block form %}
    {% include 'form.html.twig' with {'action': 'update', 'id': user.getUserId} %}
{% endblock %} #}", "main_page.html.twig", "/home/vboxuser/Documents/PizzaApp/templates/main_page.html.twig");
    }
}
