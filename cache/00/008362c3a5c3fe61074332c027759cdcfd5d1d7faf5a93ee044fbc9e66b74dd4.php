<?php

/* layout.twig */
class __TwigTemplate_0e78faf6adf9d7cada22cf43babfbd2a693d1cf4daa6f1426a1cc3ba649ae80d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\"  href=\"path('templates\\home.twig')\">Accueil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"about.html\">Qui suis-je</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"post.html\">Compétences</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"templates\\post.twig\">Blog</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"contact.twig\">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class=\"masthead\" style=\"background-image: url('assets/img/home-bg.jpg')\">
        <div class=\"container position-relative px-4 px-lg-5\">
            <div class=\"row gx-4 gx-lg-5 justify-content-center\">
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                    <div class=\"site-heading\">
                        <h1>Blog Openclassroom</h1>
                        <span class=\"subheading\">Ce Blog Est Créé Pour Vous Présenter Mon Travail</span>
                    </div>
                </div>
            </div>
        </div>
    </header>";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "    <!-- Footer-->
    <footer class=\"border-top\">
        <div class=\"container px-4 px-lg-5\">
            <div class=\"row gx-4 gx-lg-5 justify-content-center\">
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                    <ul class=\"list-inline text-center\">
                        <li class=\"list-inline-item\">
                            <a href=\"#!\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fab fa-twitter fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"#!\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fab fa-facebook-f fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"#!\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fab fa-github fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class=\"small text-center text-muted fst-italic\">Copyright &copy; Le Guern Marlène 2023</div>
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

    // line 56
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 56,  78 => 58,  76 => 56,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
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
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\"  href=\"path('templates\\home.twig')\">Accueil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"about.html\">Qui suis-je</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"post.html\">Compétences</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"templates\\post.twig\">Blog</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"contact.twig\">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class=\"masthead\" style=\"background-image: url('assets/img/home-bg.jpg')\">
        <div class=\"container position-relative px-4 px-lg-5\">
            <div class=\"row gx-4 gx-lg-5 justify-content-center\">
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                    <div class=\"site-heading\">
                        <h1>Blog Openclassroom</h1>
                        <span class=\"subheading\">Ce Blog Est Créé Pour Vous Présenter Mon Travail</span>
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
                            <a href=\"#!\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fab fa-twitter fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"#!\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fab fa-facebook-f fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"#!\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fab fa-github fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class=\"small text-center text-muted fst-italic\">Copyright &copy; Le Guern Marlène 2023</div>
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
