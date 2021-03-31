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

/* accueil/menu.html.twig */
class __TwigTemplate_60115286c773959f2815e78b8490ea0ca441b2388b38d23eb5c58ec482aefe01 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/menu.html.twig"));

        // line 2
        echo "<p>Nombre de produits disponibles : ";
        echo twig_escape_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "</p>
<ul>
    ";
        // line 4
        $context["i"] = 0;
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["onglets"]) || array_key_exists("onglets", $context) ? $context["onglets"] : (function () { throw new RuntimeError('Variable "onglets" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["onglet"]) {
            // line 6
            echo "        <li>";
            // line 7
            echo "                ";
            echo twig_escape_filter($this->env, $context["onglet"], "html", null, true);
            echo "
            ";
            // line 9
            echo "        </li>
    ";
            // line 10
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 10, $this->source); })()) + 1);
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['onglet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        if ((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "        <li><a href=\"https://fr.wikipedia.org/wiki/Amour_et_Amn%C3%A9sie\">
                Mode Administrateur
            </a>
        </li>
    ";
        }
        // line 19
        echo "</ul>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "accueil/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  79 => 14,  77 => 13,  74 => 12,  68 => 11,  66 => 10,  63 => 9,  58 => 7,  56 => 6,  51 => 5,  49 => 4,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/accueil/menu.html.twig #}
<p>Nombre de produits disponibles : {{ produits }}</p>
<ul>
    {% set i = 0 %}
    {% for onglet in onglets %}
        <li>{#<a href=\"{{ path(routes[i]) }}\">#}
                {{ onglet }}
            {#</a>#}
        </li>
    {% set i = i+1 %}
    {% endfor %}

    {% if admin %}
        <li><a href=\"https://fr.wikipedia.org/wiki/Amour_et_Amn%C3%A9sie\">
                Mode Administrateur
            </a>
        </li>
    {% endif %}
</ul>", "accueil/menu.html.twig", "C:\\wamp64\\www\\projet\\templates\\accueil\\menu.html.twig");
    }
}
