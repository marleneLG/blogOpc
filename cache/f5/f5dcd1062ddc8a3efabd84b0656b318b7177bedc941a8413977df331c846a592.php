<?php

/* post.twig */
class __TwigTemplate_3cae908e99f4608fcda07f255bc6894b71d14335967460546bcdc735b8c474e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "post.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Blog";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<!-- Main Content-->
<div class=\"container px-4 px-lg-5\">
    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        <div class=\"col-md-10 col-lg-8 col-xl-7\">";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currentPost"]) {
            // line 13
            echo "            <!-- Post preview-->
            <div class=\"post-preview\">
                <a href=\"post.html\">
                    <h2 class=\"post-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["currentPost"], "title", array()), "html", null, true);
            echo "</h2>
                    <h3 class=\"post-subtitle\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["currentPost"], "message", array()), "html", null, true);
            echo "</h3>
                </a>
                <p class=\"post-meta\">
                    Posté par
                    <a href=\"#!\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["currentPost"], "users_id", array()), "html", null, true);
            echo "</a>
                    <b>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["currentPost"], "created_at", array()), "html", null, true);
            echo "</b>
                </p>
            </div>
            <!-- Divider-->
            <hr class=\"my-4\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentPost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            <!-- Divider-->
            <hr class=\"my-4\" />
        </div>
    </div>
</div>";
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
        return array (  79 => 28,  68 => 22,  64 => 21,  57 => 17,  53 => 16,  48 => 13,  44 => 12,  39 => 8,  36 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}

{% block title %}
Blog
{% endblock title %}

{% block content %}
<!-- Main Content-->
<div class=\"container px-4 px-lg-5\">
    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            {% for currentPost in posts %}
            <!-- Post preview-->
            <div class=\"post-preview\">
                <a href=\"post.html\">
                    <h2 class=\"post-title\">{{ currentPost.title }}</h2>
                    <h3 class=\"post-subtitle\">{{ currentPost.message }}</h3>
                </a>
                <p class=\"post-meta\">
                    Posté par
                    <a href=\"#!\">{{ currentPost.users_id }}</a>
                    <b>{{ currentPost.created_at }}</b>
                </p>
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
