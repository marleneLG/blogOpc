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
class __TwigTemplate_45cbba330861f2116c9d892abb50aa1b511416ee5a329e958be4b06133ea0c55 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "comment.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("", "comment.twig", "C:\\Users\\marle\\Desktop\\OPC\\projet5blog\\blogOpc\\templates\\comment.twig");
    }
}
