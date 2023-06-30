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

/* layout.twig */
class __TwigTemplate_cf0cac1b074fc86d6bb683eef10d96f2893d58d0ac456e24e0093272682770f1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>Blog Openclassroom</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/favicon.ico\" />
    <!-- Font Awesome icons (free version)-->
    <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
    <!-- Google fonts-->
    <link href=\"https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic\" rel=\"stylesheet\"
        type=\"text/css\" />
    <link
        href=\"https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\"
        rel=\"stylesheet\" type=\"text/css\" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href=\"css/styles.css\" rel=\"stylesheet\" />
</head>

<body>
    <!-- Navigation-->
    <nav class=\"navbar navbar-expand-lg navbar-light\" id=\"mainNav\">
        <div class=\"container px-4 px-lg-5\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\"
                aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                Menu
                <i class=\"fas fa-bars\"></i>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                <ul class=\"navbar-nav ms-auto py-4 py-lg-0\">
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"index.php\">Accueil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"index.php#who\">Qui suis-je</a>
                    </li>
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\"
                            href=\"index.php#competences\">Compétences</a>
                    </li>
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"index.php?action=post\">Blog</a>
                    </li>
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"index.php#contact\">Contact</a>
                    </li>
                    ";
        // line 45
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "logged_user", [], "any", true, true, false, 45)) {
            // line 46
            echo "                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\"
                            href=\"index.php?action=management\">Gestion</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\"
                            href=\"index.php?action=disconnect\">Déconnexion</a></li>
                    ";
        }
        // line 51
        echo "                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class=\"masthead\">
        <div class=\"container position-relative px-4 px-lg-5\">
            <div class=\"row gx-4 gx-lg-5 justify-content-center\">
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                    <div class=\"site-heading\">
                        <h1>Blog Openclassroom</h1>
                        <span class=\"subheading\">Ce Site Est Créé Pour Vous Présenter Mon Travail</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    ";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 70
        echo "    <!-- Footer-->
    <footer class=\"border-top\">
        <div class=\"container px-4 px-lg-5\">
            <div class=\"row gx-4 gx-lg-5 justify-content-center\">
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                    <ul class=\"list-inline text-center\">
                        <li class=\"list-inline-item\">
                            <a href=\"https://www.linkedin.com/in/marl%C3%A8ne-le-guern-a972a5202/\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fab fa-linkedin fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"https://www.facebook.com/marlene.leguern\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fab fa-facebook-f fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"https://github.com/marleneLG\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fab fa-github fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class=\"small text-center text-muted fst-italic\">Copyright &copy; Le Guern Marlène 2023</div>
                    <div class=\"small text-center text-muted fst-italic\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\"
                            href=\"index.php?action=connect\">Connexion/Admin</a></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"></script>
    <!-- Core theme JS-->
    <script src=\"js/scripts.js\"></script>
</body>

</html>";
    }

    // line 68
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 69,  162 => 68,  114 => 70,  112 => 68,  93 => 51,  86 => 46,  83 => 45,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>Blog Openclassroom</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/favicon.ico\" />
    <!-- Font Awesome icons (free version)-->
    <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
    <!-- Google fonts-->
    <link href=\"https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic\" rel=\"stylesheet\"
        type=\"text/css\" />
    <link
        href=\"https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\"
        rel=\"stylesheet\" type=\"text/css\" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href=\"css/styles.css\" rel=\"stylesheet\" />
</head>

<body>
    <!-- Navigation-->
    <nav class=\"navbar navbar-expand-lg navbar-light\" id=\"mainNav\">
        <div class=\"container px-4 px-lg-5\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\"
                aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                Menu
                <i class=\"fas fa-bars\"></i>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                <ul class=\"navbar-nav ms-auto py-4 py-lg-0\">
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"index.php\">Accueil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"index.php#who\">Qui suis-je</a>
                    </li>
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\"
                            href=\"index.php#competences\">Compétences</a>
                    </li>
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"index.php?action=post\">Blog</a>
                    </li>
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"index.php#contact\">Contact</a>
                    </li>
                    {# si admin #}
                    {% if session.logged_user is defined %}
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\"
                            href=\"index.php?action=management\">Gestion</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\"
                            href=\"index.php?action=disconnect\">Déconnexion</a></li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class=\"masthead\">
        <div class=\"container position-relative px-4 px-lg-5\">
            <div class=\"row gx-4 gx-lg-5 justify-content-center\">
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                    <div class=\"site-heading\">
                        <h1>Blog Openclassroom</h1>
                        <span class=\"subheading\">Ce Site Est Créé Pour Vous Présenter Mon Travail</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {% block content %}
    {% endblock %}
    <!-- Footer-->
    <footer class=\"border-top\">
        <div class=\"container px-4 px-lg-5\">
            <div class=\"row gx-4 gx-lg-5 justify-content-center\">
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                    <ul class=\"list-inline text-center\">
                        <li class=\"list-inline-item\">
                            <a href=\"https://www.linkedin.com/in/marl%C3%A8ne-le-guern-a972a5202/\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fab fa-linkedin fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"https://www.facebook.com/marlene.leguern\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fab fa-facebook-f fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"https://github.com/marleneLG\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fab fa-github fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class=\"small text-center text-muted fst-italic\">Copyright &copy; Le Guern Marlène 2023</div>
                    <div class=\"small text-center text-muted fst-italic\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\"
                            href=\"index.php?action=connect\">Connexion/Admin</a></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"></script>
    <!-- Core theme JS-->
    <script src=\"js/scripts.js\"></script>
</body>

</html>", "layout.twig", "C:\\Users\\marle\\Desktop\\OPC\\projet5blog\\blogOpc\\templates\\layout.twig");
    }
}
