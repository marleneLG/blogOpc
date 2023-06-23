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

/* createComment.twig */
class __TwigTemplate_03a4fa77b00cd8e23a011fb56a72cc810477bb114e545aaced0cbf9d6ce6aa85 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "createComment.twig", 1);
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
            <form method=\"post\" action=\"index.php?action=createComment\">
                <div class=\"mb-3\">
                    <label for=\"message\" class=\"form-label\">Contenu du commentaire</label>
                    <textarea name=\"message\" class=\"form-control\" rows=\"15\" required></textarea>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
            </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "createComment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
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
            <form method=\"post\" action=\"index.php?action=createComment\">
                <div class=\"mb-3\">
                    <label for=\"message\" class=\"form-label\">Contenu du commentaire</label>
                    <textarea name=\"message\" class=\"form-control\" rows=\"15\" required></textarea>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
            </form>
        </div>
    </div>
</div>
{% endblock content %}", "createComment.twig", "C:\\Users\\marle\\Desktop\\OPC\\projet5blog\\blogOpc\\templates\\createComment.twig");
    }
}
