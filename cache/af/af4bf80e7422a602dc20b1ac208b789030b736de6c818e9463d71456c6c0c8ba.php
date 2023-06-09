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

/* comment.twig */
class __TwigTemplate_89441cc8bd669fc2a08b838b2d6772e1ae78f704fc0c56d25d1c45ffb27c2d38 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "comment.twig", 1);
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
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <!-- Post preview-->
            <div class=\"post-preview\">
                <h2 class=\"post-title\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</h2>
                <h3 class=\"post-subtitle\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "message", [], "any", false, false, false, 15), "html", null, true);
        echo "</h3>
                <p class=\"post-meta\">
                    Posté par
                    <b href=\"#!\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "users_id", [], "any", false, false, false, 18), "html", null, true);
        echo "</b>

                    <b>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "created_at", [], "any", false, false, false, 20), "html", null, true);
        echo "</b>
                </p>
            </div>
            <!-- Divider-->
            <hr class=\"my-4\" />
            <h1>";
        // line 25
        echo "Commentaires";
        echo "</h1>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currentComment"]) {
            // line 27
            echo "            <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comments"] ?? null), "message", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
            <div>
                <p class=\"post-meta\">
                <p>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentComment"], "message", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
                Rédigé par
                <b>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentComment"], "users_id", [], "any", false, false, false, 32), "html", null, true);
            echo "</b>
                Le
                <b>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentComment"], "created_at", [], "any", false, false, false, 34), "html", null, true);
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
        // line 40
        echo "            <!-- Divider-->
            <hr class=\"my-4\" />
        </div>
    </div>
    <button type=\"button\"><a href=\"index.php?action=addComment\">Ajouter un commentaire</a> </button>
</div>
";
    }

    public function getTemplateName()
    {
        return "comment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 40,  116 => 34,  111 => 32,  106 => 30,  99 => 27,  95 => 26,  91 => 25,  83 => 20,  78 => 18,  72 => 15,  68 => 14,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
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
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <!-- Post preview-->
            <div class=\"post-preview\">
                <h2 class=\"post-title\">{{ post.title }}</h2>
                <h3 class=\"post-subtitle\">{{ post.message }}</h3>
                <p class=\"post-meta\">
                    Posté par
                    <b href=\"#!\">{{ post.users_id }}</b>

                    <b>{{ post.created_at }}</b>
                </p>
            </div>
            <!-- Divider-->
            <hr class=\"my-4\" />
            <h1>{{'Commentaires'}}</h1>
            {% for currentComment in comments %}
            <p>{{comments.message}}</p>
            <div>
                <p class=\"post-meta\">
                <p>{{ currentComment.message }}</p>
                Rédigé par
                <b>{{ currentComment.users_id }}</b>
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
    <button type=\"button\"><a href=\"index.php?action=addComment\">Ajouter un commentaire</a> </button>
</div>
{% endblock content %}", "comment.twig", "C:\\Users\\marle\\Desktop\\OPC\\projet5blog\\blogOpc\\templates\\comment.twig");
    }
}
