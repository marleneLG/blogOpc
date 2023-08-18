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

/* createPost.twig */
class __TwigTemplate_7c2c077994a48c1f7273c5a93d9cdcb24e26ac184b7315f2cbd9d22ca30b3cea extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "createPost.twig", 1);
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
            <p>";
        // line 12
        echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
        echo "</p>
            <form method=\"post\" action=\"index.php?action=createPost\">
                <div class=\"mb-3\">
                    <label for=\"title\" class=\"form-label\">Titre</label>
                    <input placeholder=\"Champs obligatoire avec maximum 45 caractères\" type=\"text\" class=\"form-control\"
                        name=\"title\" minlength=\"1\" maxlength=\"45\" required />
                </div>
                <div class=\"mb-3\">
                    <label for=\"message\" class=\"form-label\">Contenu du billet</label>
                    <textarea placeholder=\"Champs obligatoire avec maximum 20000 caractères\" name=\"message\"
                        class=\"form-control\" rows=\"15\" minlength=\"1\" maxlength=\"20000\" required></textarea>
                </div>
                ";
        // line 25
        echo "                <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
            </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "createPost.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  66 => 12,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
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
            <p>{{error}}</p>
            <form method=\"post\" action=\"index.php?action=createPost\">
                <div class=\"mb-3\">
                    <label for=\"title\" class=\"form-label\">Titre</label>
                    <input placeholder=\"Champs obligatoire avec maximum 45 caractères\" type=\"text\" class=\"form-control\"
                        name=\"title\" minlength=\"1\" maxlength=\"45\" required />
                </div>
                <div class=\"mb-3\">
                    <label for=\"message\" class=\"form-label\">Contenu du billet</label>
                    <textarea placeholder=\"Champs obligatoire avec maximum 20000 caractères\" name=\"message\"
                        class=\"form-control\" rows=\"15\" minlength=\"1\" maxlength=\"20000\" required></textarea>
                </div>
                {# <input type=\"hidden\" name=\"postId\" value={{postId}}> #}
                <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
            </form>
        </div>
    </div>
</div>
{% endblock content %}", "createPost.twig", "C:\\Users\\marle\\Desktop\\OPC\\projet5blog\\blogOpc\\templates\\createPost.twig");
    }
}
