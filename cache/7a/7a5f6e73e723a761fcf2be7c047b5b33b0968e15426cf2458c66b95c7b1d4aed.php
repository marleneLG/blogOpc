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

/* post.twig */
class __TwigTemplate_d452618eee4339dd958883139665316963be58806adfe132b2053576fe8f1f5d extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "post.twig", 1);
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
        echo "<!-- Main Content-->
<div class=\"container px-4 px-lg-5\">
    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "logged_user", [], "any", true, true, false, 11)) {
            // line 12
            echo "        <div class=\"d-flex flex-row\">
            <div>
                <button type=\"button\" class=\"btn btn-outline-danger btn-sm\"><a
                        href=\"index.php?action=deletePost&amp;postId=";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\">Supprimer le
                        post</a> </button>
            </div>
            <div>
                <button type=\"button\" class=\"btn btn-outline-warning btn-sm\"><a
                        href=\"index.php?action=displayUpdatePost&amp;postId=";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\">Modifier le
                        post</a>
                </button>
            </div>
        </div>
        ";
        }
        // line 26
        echo "        <hr class=\"my-4\" />
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <!-- Post preview-->
            <div class=\"post-preview\">
                <h1 class=\"post-title\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 30), "html", null, true);
        echo "</h1>
                <p class=\"post-subtitle\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "message", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
                <p class=\"post-meta\">
                    Posté par
                    <b href=\"#!\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "username", [], "any", false, false, false, 34), "html", null, true);
        echo "</b>
                    Le
                    <b>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "created_at", [], "any", false, false, false, 36), "html", null, true);
        echo "</b>
                </p>
            </div>
            <!-- Divider-->
            <hr class=\"my-4\" />
        </div>

        <div>
            <span class=\"comment\">";
        // line 44
        echo "Commentaires";
        echo "</span>
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currentComment"]) {
            // line 46
            echo "            <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comments"] ?? null), "message", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
            <div>
                <p class=\"post-meta\">
                <p>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentComment"], "message", [], "any", false, false, false, 49), "html", null, true);
            echo "</p>
                Le
                <b>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentComment"], "created_at", [], "any", false, false, false, 51), "html", null, true);
            echo "</b>
                </p>
            </div>
            <!-- Divider-->
            <hr class=\"my-4\" />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentComment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            <!-- Divider-->
            <hr class=\"my-4\" />
        </div>
    </div>
    <button type=\"button\" class=\"btn btn-secondary mb-2\"><a
            href=\"index.php?action=displayCommentForm&amp;id=";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 62), "html", null, true);
        echo "\">Ajouter un commentaire</a> </button>
</div>
";
    }

    public function getTemplateName()
    {
        return "post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 62,  153 => 57,  141 => 51,  136 => 49,  129 => 46,  125 => 45,  121 => 44,  110 => 36,  105 => 34,  99 => 31,  95 => 30,  89 => 26,  80 => 20,  72 => 15,  67 => 12,  65 => 11,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block title %}
Blog
{% endblock title %}

{% block content %}
<!-- Main Content-->
<div class=\"container px-4 px-lg-5\">
    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        {% if session.logged_user is defined %}
        <div class=\"d-flex flex-row\">
            <div>
                <button type=\"button\" class=\"btn btn-outline-danger btn-sm\"><a
                        href=\"index.php?action=deletePost&amp;postId={{ post.id }}\">Supprimer le
                        post</a> </button>
            </div>
            <div>
                <button type=\"button\" class=\"btn btn-outline-warning btn-sm\"><a
                        href=\"index.php?action=displayUpdatePost&amp;postId={{ post.id }}\">Modifier le
                        post</a>
                </button>
            </div>
        </div>
        {% endif %}
        <hr class=\"my-4\" />
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <!-- Post preview-->
            <div class=\"post-preview\">
                <h1 class=\"post-title\">{{ post.title }}</h1>
                <p class=\"post-subtitle\">{{ post.message }}</p>
                <p class=\"post-meta\">
                    Posté par
                    <b href=\"#!\">{{ post.username }}</b>
                    Le
                    <b>{{ post.created_at }}</b>
                </p>
            </div>
            <!-- Divider-->
            <hr class=\"my-4\" />
        </div>

        <div>
            <span class=\"comment\">{{'Commentaires'}}</span>
            {% for currentComment in comments %}
            <p>{{comments.message}}</p>
            <div>
                <p class=\"post-meta\">
                <p>{{ currentComment.message }}</p>
                Le
                <b>{{ currentComment.created_at }}</b>
                </p>
            </div>
            <!-- Divider-->
            <hr class=\"my-4\" />
            {% endfor %}
            <!-- Divider-->
            <hr class=\"my-4\" />
        </div>
    </div>
    <button type=\"button\" class=\"btn btn-secondary mb-2\"><a
            href=\"index.php?action=displayCommentForm&amp;id={{ post.id }}\">Ajouter un commentaire</a> </button>
</div>
{% endblock content %}", "post.twig", "C:\\Users\\marle\\Desktop\\OPC\\projet5blog\\blogOpc\\templates\\post.twig");
    }
}
