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
class __TwigTemplate_d2c6cdae22e4def5ea98e11e530f48e5bfb1c5407312693d7f0119e3b3e75b37 extends Template
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
        echo "
<h2 class=\"mb-4\">Les derniers billets</h2>
<h2>Détails et commentaires</h2>

<div class=\"row\">
    <div class=\"col-md-6 col-lg-4 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h3 class=\"card-title\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</h3>
                <p class=\"card-text\">
                <h1>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "auteur", [], "any", false, false, false, 18), "html", null, true);
        echo "</h1>
                <h2>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "</h2>
                <p>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "message", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
                </p>

            </div>
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
        return array (  83 => 20,  79 => 19,  75 => 18,  70 => 16,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block title %}
Blog
{% endblock title %}

{% block content %}

<h2 class=\"mb-4\">Les derniers billets</h2>
<h2>Détails et commentaires</h2>

<div class=\"row\">
    <div class=\"col-md-6 col-lg-4 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h3 class=\"card-title\">{{ post.title }}</h3>
                <p class=\"card-text\">
                <h1>{{ post.auteur }}</h1>
                <h2>{{ post.title }}</h2>
                <p>{{ post.message }}</p>
                </p>

            </div>
        </div>
    </div>
</div>
{% endblock content %}", "post.twig", "C:\\Users\\marle\\Desktop\\OPC\\projet5blog\\blogOpc\\templates\\post.twig");
    }
}
