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

/* produit/list.html.twig */
class __TwigTemplate_c1a6662f848728a6bf3ffac484e811c5b376f50840e811781d7993895afbaf97 extends Template
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
        // line 2
        return "/Layouts/layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/list.html.twig"));

        $this->parent = $this->loadTemplate("/Layouts/layout2.html.twig", "produit/list.html.twig", 2);
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

        echo " Liste des produits en magasin ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1> LISTE DES PRODUITS DE NOTRE MAGASIN</h1>
    <form method=\"post\" action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commander_produit");
        echo "\">
       <table>
        <tr>
            <th>Libellé</th>
            <th>Prix</th>
            <th>quantite</th>
            <th>Choix</th>
        </tr>
     ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            echo "        
        <tr>
            <td  id=\"libelle\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "libelle", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
            <td  id=\"prix\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
            <td id=\"quantite\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
            <td>
            
                <select name=\"qteCommandee[";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "]\" id=\"qteCommandee\">
                    ";
            // line 25
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 25), 0))) {
                // line 26
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 26)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 27
                    echo "                            <option value=";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "> ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "  </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "                    ";
            }
            echo "     
                </select>
               
            </td>
        </tr>
        
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "     <tr><td colspan=\"4\">
            <input type=\"submit\" value=\"Commander\" /></td></tr>
        </table>
        </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 36,  145 => 29,  134 => 27,  129 => 26,  127 => 25,  123 => 24,  117 => 21,  113 => 20,  109 => 19,  102 => 17,  91 => 9,  88 => 8,  78 => 7,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/produit/list.html.twig #}
{% extends '/Layouts/layout2.html.twig' %}

{% block title %} Liste des produits en magasin {% endblock %}


{% block body %}
    <h1> LISTE DES PRODUITS DE NOTRE MAGASIN</h1>
    <form method=\"post\" action=\"{{path('commander_produit')}}\">
       <table>
        <tr>
            <th>Libellé</th>
            <th>Prix</th>
            <th>quantite</th>
            <th>Choix</th>
        </tr>
     {% for produit in  produits %}        
        <tr>
            <td  id=\"libelle\">{{ produit.libelle }}</td>
            <td  id=\"prix\">{{ produit.prix }}</td>
            <td id=\"quantite\">{{ produit.quantite }}</td>
            <td>
            
                <select name=\"qteCommandee[{{produit.id}}]\" id=\"qteCommandee\">
                    {% if produit.quantite > 0 %}
                        {% for i in 0..produit.quantite %}
                            <option value={{ i }}> {{ i }}  </option>
                        {%  endfor %}
                    {% endif %}     
                </select>
               
            </td>
        </tr>
        
     {% endfor %}
     <tr><td colspan=\"4\">
            <input type=\"submit\" value=\"Commander\" /></td></tr>
        </table>
        </form>

{% endblock %}", "produit/list.html.twig", "C:\\wamp64\\www\\Projet-Web\\templates\\produit\\list.html.twig");
    }
}
