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

/* admin.twig */
class __TwigTemplate_ecf665974a9556b0b89ad1d7e5062a6d9fd7e0559a3bba58013a84215b829c9a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "admin.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "Blog
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
<div class=\"container px-4 px-lg-5\">
    <div class=\"row gx-4 gx-lg-5\">
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <div class=\"post-preview\">
                <h1 class=\"post-subtitle\">Vous avez ";
        // line 13
        echo twig_escape_filter($this->env, ($context["number"] ?? null), "html", null, true);
        echo " commentaire(s) en attente</h1>
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["comments"]);
        foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
            // line 15
            echo "                <p><b>Que souhaitez vous faire de ce commentaire ? : </b> <br> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comments"], "message", [], "any", false, false, false, 15), "html", null, true);
            echo " </p>
                <button type=\"button\" class=\"btn btn-outline-success\"><a
                        href=\"index.php?action=validationComment&amp;commentId=";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comments"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\">Valider le
                        commentaire</a> </button>
                <button type=\"button\" class=\"btn btn-outline-danger\"><a
                        href=\"index.php?action=deleteComment&amp;commentId=";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comments"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\">Supprimer le
                        commentaire</a> </button>
                <input type=\"hidden\" name=\"commentId\" value=";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comments"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo ">
                <hr class=\"my-4\" />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
                <hr class=\"my-4\" />
                <hr class=\"my-4\" />

                <h1 class=\"post-subtitle\">Liste des utilisateurs</h1>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 31
            echo "                <p><b>Nom de l'utilisateur : </b> <br> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 31), "html", null, true);
            echo " </p>
                <p><b>Statut administrateur de cet utilisateur :</b> <br> ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "is_admin", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
                ";
            // line 33
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "validation", [], "any", false, false, false, 33), false))) {
                // line 34
                echo "                <button type=\"button\" class=\"btn btn-outline-success\"><a
                        href=\"index.php?action=validationUser&amp;userId=";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 35), "html", null, true);
                echo "\">Valider comme
                        utilisateur</a>
                </button>
                ";
            }
            // line 39
            echo "                ";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "is_admin", [], "any", false, false, false, 39), false)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "validation", [], "any", false, false, false, 39), true)))) {
                // line 40
                echo "                <button type=\"button\" class=\"btn btn-outline-success\"><a
                        href=\"index.php?action=validationUserAdmin&amp;userId=";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 41), "html", null, true);
                echo "\">Valider comme
                        administrateur</a>
                </button>
                ";
            }
            // line 45
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "is_admin", [], "any", false, false, false, 45), true))) {
                // line 46
                echo "                <button type=\"button\" class=\"btn btn-outline-success\"><a
                        href=\"index.php?action=validationUserSimple&amp;userId=";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 47), "html", null, true);
                echo "\">Valider comme simple
                        utilisateur</a>
                </button>
                ";
            }
            // line 51
            echo "                <input type=\"hidden\" name=\"commentId\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo ">
                <hr class=\"my-4\" />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>
            <hr class=\"my-4\" />
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 54,  159 => 51,  152 => 47,  149 => 46,  146 => 45,  139 => 41,  136 => 40,  133 => 39,  126 => 35,  123 => 34,  121 => 33,  117 => 32,  112 => 31,  108 => 30,  101 => 25,  92 => 22,  87 => 20,  81 => 17,  75 => 15,  71 => 14,  67 => 13,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block title %}
Blog
{% endblock title %}

{% block content %}

<div class=\"container px-4 px-lg-5\">
    <div class=\"row gx-4 gx-lg-5\">
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <div class=\"post-preview\">
                <h1 class=\"post-subtitle\">Vous avez {{number}} commentaire(s) en attente</h1>
                {% for comments in comments %}
                <p><b>Que souhaitez vous faire de ce commentaire ? : </b> <br> {{comments.message}} </p>
                <button type=\"button\" class=\"btn btn-outline-success\"><a
                        href=\"index.php?action=validationComment&amp;commentId={{ comments.id }}\">Valider le
                        commentaire</a> </button>
                <button type=\"button\" class=\"btn btn-outline-danger\"><a
                        href=\"index.php?action=deleteComment&amp;commentId={{ comments.id }}\">Supprimer le
                        commentaire</a> </button>
                <input type=\"hidden\" name=\"commentId\" value={{comments.id}}>
                <hr class=\"my-4\" />
                {% endfor %}

                <hr class=\"my-4\" />
                <hr class=\"my-4\" />

                <h1 class=\"post-subtitle\">Liste des utilisateurs</h1>
                {% for user in users %}
                <p><b>Nom de l'utilisateur : </b> <br> {{user.username}} </p>
                <p><b>Statut administrateur de cet utilisateur :</b> <br> {{user.is_admin}}</p>
                {% if user.validation == false %}
                <button type=\"button\" class=\"btn btn-outline-success\"><a
                        href=\"index.php?action=validationUser&amp;userId={{ user.id }}\">Valider comme
                        utilisateur</a>
                </button>
                {% endif %}
                {% if user.is_admin == false and user.validation == true %}
                <button type=\"button\" class=\"btn btn-outline-success\"><a
                        href=\"index.php?action=validationUserAdmin&amp;userId={{ user.id }}\">Valider comme
                        administrateur</a>
                </button>
                {% endif %}
                {% if user.is_admin == true %}
                <button type=\"button\" class=\"btn btn-outline-success\"><a
                        href=\"index.php?action=validationUserSimple&amp;userId={{ user.id }}\">Valider comme simple
                        utilisateur</a>
                </button>
                {% endif %}
                <input type=\"hidden\" name=\"commentId\" value={{user.id}}>
                <hr class=\"my-4\" />
                {% endfor %}
            </div>
            <hr class=\"my-4\" />
        </div>
    </div>
</div>
{% endblock content %}", "admin.twig", "C:\\Users\\marle\\Desktop\\OPC\\projet5blog\\blogOpc\\templates\\admin.twig");
    }
}
