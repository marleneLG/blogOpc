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
        echo "<div class=\"container px-4 px-lg-5\">
    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "logged_user_email", [], "any", true, true, false, 10)) {
            // line 11
            echo "        <div class=\"d-flex flex-row\">
            <div>
                <button type=\"button\" class=\"btn btn-outline-danger btn-sm\"><a
                        href=\"index.php?action=deletePost&amp;postId=";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\">Supprimer le
                        post</a> </button>
            </div>
            <div>
                <button type=\"button\" class=\"btn btn-outline-warning btn-sm\"><a
                        href=\"index.php?action=displayUpdatePost&amp;postId=";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\">Modifier le
                        post</a>
                </button>
            </div>
        </div>
        ";
        }
        // line 25
        echo "        <hr class=\"my-4\" />
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <div class=\"post-preview\">
                <h1 class=\"post-title\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 28), "html", null, true);
        echo "</h1>
                <p class=\"post-subtitle\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "message", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
                <p class=\"post-meta\">
                    Posté par
                    <b href=\"#!\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "username", [], "any", false, false, false, 32), "html", null, true);
        echo "</b>
                    Le
                    <b>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "created_at", [], "any", false, false, false, 34), "html", null, true);
        echo "</b>
                </p>
            </div>
            <hr class=\"my-4\" />
        </div>

        <div>
            <span class=\"comment\">";
        // line 41
        echo "Commentaires";
        echo "</span>
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currentComment"]) {
            // line 43
            echo "            <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comments"] ?? null), "message", [], "any", false, false, false, 43), "html", null, true);
            echo "</p>
            <div>
                <p class=\"post-meta\">
                <p>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentComment"], "message", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
                Le
                <b>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentComment"], "created_at", [], "any", false, false, false, 48), "html", null, true);
            echo "</b>
                </p>
            </div>
            <hr class=\"my-4\" />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentComment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            <hr class=\"my-4\" />
        </div>
    </div>
    ";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "logged_user_email", [], "any", true, true, false, 56) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "is_validated", [], "any", false, false, false, 56), 1)))) {
            echo "  
            <button type=\"button\" class=\"btn btn-secondary mb-2\"><a
                    href=\"index.php?action=displayCommentForm&amp;id=";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 58), "html", null, true);
            echo "\">Ajouter un commentaire</a> </button>
    ";
        }
        // line 60
        echo "
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
        return array (  164 => 60,  159 => 58,  154 => 56,  149 => 53,  138 => 48,  133 => 46,  126 => 43,  122 => 42,  118 => 41,  108 => 34,  103 => 32,  97 => 29,  93 => 28,  88 => 25,  79 => 19,  71 => 14,  66 => 11,  64 => 10,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block title %}
Blog
{% endblock title %}

{% block content %}
<div class=\"container px-4 px-lg-5\">
    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        {% if session.logged_user_email is defined %}
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
            <hr class=\"my-4\" />
            {% endfor %}
            <hr class=\"my-4\" />
        </div>
    </div>
    {% if session.logged_user_email is defined and session.is_validated == 1 %}  
            <button type=\"button\" class=\"btn btn-secondary mb-2\"><a
                    href=\"index.php?action=displayCommentForm&amp;id={{ post.id }}\">Ajouter un commentaire</a> </button>
    {% endif %}

</div>
{% endblock content %}", "post.twig", "C:\\Users\\marle\\Desktop\\OPC\\projet5blog\\blogOpc\\templates\\post.twig");
    }
}
