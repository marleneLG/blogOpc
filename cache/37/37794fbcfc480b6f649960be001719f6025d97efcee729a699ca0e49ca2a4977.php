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
                ";
        // line 14
        echo "                <h1 class=\"post-subtitle\">Vous avez ";
        echo twig_escape_filter($this->env, ($context["number"] ?? null), "html", null, true);
        echo " commentaire(s) en attente</h1>
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["comments"]);
        foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
            // line 16
            echo "
                <p><b>Que souhaitez vous faire de ce commentaire ? : </b> <br> ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comments"], "message", [], "any", false, false, false, 17), "html", null, true);
            echo " </p>
                <button type=\"button\" class=\"btn btn-outline-success\"><a
                        href=\"index.php?action=validationComment&amp;commentId=";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comments"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\">Valider le
                        commentaire</a> </button>
                <button type=\"button\" class=\"btn btn-outline-danger\"><a
                        href=\"index.php?action=deleteComment&amp;commentId=";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comments"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\">Supprimer le
                        commentaire</a> </button>
                <input type=\"hidden\" name=\"commentId\" value=";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comments"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo ">
                <hr class=\"my-4\" />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
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
        return array (  104 => 27,  95 => 24,  90 => 22,  84 => 19,  79 => 17,  76 => 16,  72 => 15,  67 => 14,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
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
                {# <h2 class=\"post-title\">Commentaires en attente de validation</h2> #}
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
            </div>
            <hr class=\"my-4\" />
        </div>
    </div>
</div>
{% endblock content %}", "admin.twig", "C:\\Users\\marle\\Desktop\\OPC\\projet5blog\\blogOpc\\templates\\admin.twig");
    }
}
