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
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "logged_user", [], "any", true, true, false, 12)) {
            // line 13
            echo "            <button type=\"button\"><a href=\"index.php?action=addPost\">Ajouter un post</a> </button>
            ";
        }
        // line 15
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currentPost"]) {
            // line 16
            echo "            <!-- Post preview-->
            <div class=\"post-preview\">
                <a href=\"index.php?action=comment&amp;id=";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentPost"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
                    <h2 class=\"post-title\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentPost"], "title", [], "any", false, false, false, 19), "html", null, true);
            echo "</h2>
                    <p>";
            // line 20
            echo "Cliquez pour voir le post dans son intégralité";
            echo "</p>
                </a>
            </div>
            <!-- Divider-->
            <hr class=\"my-4\" />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentPost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            <!-- Divider-->
            <hr class=\"my-4\" />
        </div>
    </div>
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
        return array (  101 => 26,  89 => 20,  85 => 19,  81 => 18,  77 => 16,  72 => 15,  68 => 13,  66 => 12,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
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
            {% if session.logged_user is defined %}
            <button type=\"button\"><a href=\"index.php?action=addPost\">Ajouter un post</a> </button>
            {% endif %}
            {% for currentPost in posts %}
            <!-- Post preview-->
            <div class=\"post-preview\">
                <a href=\"index.php?action=comment&amp;id={{ currentPost.id }}\">
                    <h2 class=\"post-title\">{{ currentPost.title }}</h2>
                    <p>{{'Cliquez pour voir le post dans son intégralité'}}</p>
                </a>
            </div>
            <!-- Divider-->
            <hr class=\"my-4\" />
            {% endfor %}
            <!-- Divider-->
            <hr class=\"my-4\" />
        </div>
    </div>
</div>
{% endblock content %}", "post.twig", "C:\\Users\\marle\\Desktop\\OPC\\projet5blog\\blogOpc\\templates\\post.twig");
    }
}
