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

/* home.twig */
class __TwigTemplate_9790a2e5777c8765775fe88e94fee46b96cba113a069d2178115cc595f9be572 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "home.twig", 1);
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
        echo "<section id=\"who\" class=\"container px-4 px-lg-5\">
    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        ";
        // line 10
        if (($context["errorMessages"] ?? null)) {
            // line 11
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorMessages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["errorMessage"]) {
                // line 12
                echo "        <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["errorMessage"], "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        ";
        }
        // line 15
        echo "        ";
        if (($context["validMessage"] ?? null)) {
            // line 16
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, ($context["validMessage"] ?? null), "html", null, true);
            echo "</div>
        ";
        }
        // line 18
        echo "        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <h1 id=\"title\"><img id=\"icon\" src=\"assets\\img\\femmes.png\"></img><br> Qui suis-je?</h1>
            <h2>Marlène Le Guern <img id=\"icon\" src=\"assets\\img\\1638086413186.jpg\" alt=\"picture\"></h2>
            <p>
                je m'appelle Marlène Le Guern et après plusieurs années en tant que soignante j'ai souhaité changer de
                situation professionnelle
                et me diriger vers un métier plus cérébral. Le hasard faisant parfois bien les choses je suis tombée
                sur le métier de développeur web et me suis lancée dans cette aventure avec un plaisir incroyable. J'ai
                commencé par
                une formation de développeur web et web mobile en présentielle dans un petit centre de formation pendant
                1 an. Cette formation
                m'a montré que je ne me trompais pas et j'ai décidé de continuer à me former en intégrant Openclassrooms
                en alternance et pouvoir
                bénéficier ainsi d'une expérience en entreprise extrémement enrichissante.
            </p>
        </div>
    </div>
    <hr class=\"my-4\" />
    <hr class=\"my-4\" />
</section>

<section id=\"competences\" class=\"container px-4 px-lg-5\">
    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <h1 id=\"title\"><img id=\"icon\" src=\"assets\\img\\competence.png\"></img><br>Compétences</h1>
            <h2>Backend</h2>
            <p>
                PHP,
                Laravel,
                Mysql,
                Breeze,
                Livewire
            </p>
            <h2>Frontend</h2>
            <p>
                HTML5/CSS3,
                javascript,
                Tailwind,
                Bootstrap
            </p>
            <h2>Autres</h2>
            <p>
                Git
            </p>
            <h2>Outils utilisés</h2>
            <p>
                VisualStudio,
                Figma,
                TablePlus,
                Workbench,
                Jmerise,
                Gitlab,
                Github
            </p>
            <br>
            <a id=\"cv\" href=\"assets\\img\\cv-template.pdf\">Accès à mon CV en format PDF</a>
        </div>
    </div>
    <hr class=\"my-4\" />
    <hr class=\"my-4\" />
</section>

<section class=\"container px-4 px-lg-5\">
    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <h1 id=\"title\"><img id=\"icon\" src=\"assets\\img\\blog.png\"></img><br>Blog</h1>
            <p>
                Ce blog va vous présenter différents articles auxquels vous pourrez participer par l'échange de
                commentaires.
            </p>
            <a id=\"linkBlog\" href=\"index.php?controller=PostController&action=posts\"> cliquer ici pour vous rendre sur
                le
                blog</a>
        </div>
    </div>
    <hr class=\"my-4\" />
    <hr class=\"my-4\" />
</section>

<section id=\"contact\" class=\"container px-4 px-lg-5\">
    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <h1 id=\"title\"><img id=\"icon\" src=\"assets\\img\\lettre.png\"></img><br>Contact</h1>
            <p>
                Vous voulez entrer en contact? Remplissez le formulaire ci-dessous pour envoyer un message et je vous
                répondrai dès que
                possible!
            </p>
            <div class=\"my-5\">
                <form id=\"contactForm\" method=\"post\" action=\"index.php?action=sendForm\">
                    <div class=\"form-floating\">
                        <input class=\"form-control\" name=\"name\" id=\"name\" type=\"text\" placeholder=\"Enter your name...\"
                            data-sb-validations=\"required\" />
                        <label for=\"name\">Name</label>
                        <div class=\"invalid-feedback\" data-sb-feedback=\"name:required\">A name is required.</div>
                    </div>
                    <div class=\"form-floating\">
                        <input class=\"form-control\" name=\"email\" id=\"email\" type=\"email\"
                            placeholder=\"Enter your email...\" data-sb-validations=\"required,email\" />
                        <label for=\"email\">Email address</label>
                        <div class=\"invalid-feedback\" data-sb-feedback=\"email:required\">An email is required.</div>
                        <div class=\"invalid-feedback\" data-sb-feedback=\"email:email\">Email is not valid.</div>
                    </div>
                    <div class=\"form-floating\">
                        <input class=\"form-control\" name=\"phone\" id=\"phone\" type=\"tel\"
                            placeholder=\"Enter your phone number...\" data-sb-validations=\"required\" />
                        <label for=\"phone\">Phone Number</label>
                        <div class=\"invalid-feedback\" data-sb-feedback=\"phone:required\">A phone number is required.
                        </div>
                    </div>
                    <div class=\"form-floating\">
                        <textarea class=\"form-control\" name=\"message\" id=\"message\"
                            placeholder=\"Enter your message here...\" style=\"height: 12rem\"
                            data-sb-validations=\"required\"></textarea>
                        <label for=\"message\">Message</label>
                        <div class=\"invalid-feedback\" data-sb-feedback=\"message:required\">A message is required.</div>
                    </div>
                    <button type=\"submit\">Envoyer</button>
                    <br />
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class=\"d-none\" id=\"submitSuccessMessage\">
                        <div class=\"text-center mb-3\">
                            <div class=\"fw-bolder\">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a
                                href=\"https://startbootstrap.com/solution/contact-forms\">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class=\"d-none\" id=\"submitErrorMessage\">
                        <div class=\"text-center text-danger mb-3\">Error sending message!</div>
                    </div>
                    <!-- Submit Button-->
                    ";
        // line 160
        echo "                </form>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 160,  92 => 18,  86 => 16,  83 => 15,  80 => 14,  71 => 12,  66 => 11,  64 => 10,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block title %}
Blog
{% endblock title %}

{% block content %}
<section id=\"who\" class=\"container px-4 px-lg-5\">
    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        {% if errorMessages %}
        {% for errorMessage in errorMessages %}
        <div class=\"alert alert-danger\">{{errorMessage}}</div>
        {% endfor %}
        {% endif %}
        {% if validMessage %}
        <div class=\"alert alert-danger\">{{validMessage}}</div>
        {% endif %}
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <h1 id=\"title\"><img id=\"icon\" src=\"assets\\img\\femmes.png\"></img><br> Qui suis-je?</h1>
            <h2>Marlène Le Guern <img id=\"icon\" src=\"assets\\img\\1638086413186.jpg\" alt=\"picture\"></h2>
            <p>
                je m'appelle Marlène Le Guern et après plusieurs années en tant que soignante j'ai souhaité changer de
                situation professionnelle
                et me diriger vers un métier plus cérébral. Le hasard faisant parfois bien les choses je suis tombée
                sur le métier de développeur web et me suis lancée dans cette aventure avec un plaisir incroyable. J'ai
                commencé par
                une formation de développeur web et web mobile en présentielle dans un petit centre de formation pendant
                1 an. Cette formation
                m'a montré que je ne me trompais pas et j'ai décidé de continuer à me former en intégrant Openclassrooms
                en alternance et pouvoir
                bénéficier ainsi d'une expérience en entreprise extrémement enrichissante.
            </p>
        </div>
    </div>
    <hr class=\"my-4\" />
    <hr class=\"my-4\" />
</section>

<section id=\"competences\" class=\"container px-4 px-lg-5\">
    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <h1 id=\"title\"><img id=\"icon\" src=\"assets\\img\\competence.png\"></img><br>Compétences</h1>
            <h2>Backend</h2>
            <p>
                PHP,
                Laravel,
                Mysql,
                Breeze,
                Livewire
            </p>
            <h2>Frontend</h2>
            <p>
                HTML5/CSS3,
                javascript,
                Tailwind,
                Bootstrap
            </p>
            <h2>Autres</h2>
            <p>
                Git
            </p>
            <h2>Outils utilisés</h2>
            <p>
                VisualStudio,
                Figma,
                TablePlus,
                Workbench,
                Jmerise,
                Gitlab,
                Github
            </p>
            <br>
            <a id=\"cv\" href=\"assets\\img\\cv-template.pdf\">Accès à mon CV en format PDF</a>
        </div>
    </div>
    <hr class=\"my-4\" />
    <hr class=\"my-4\" />
</section>

<section class=\"container px-4 px-lg-5\">
    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <h1 id=\"title\"><img id=\"icon\" src=\"assets\\img\\blog.png\"></img><br>Blog</h1>
            <p>
                Ce blog va vous présenter différents articles auxquels vous pourrez participer par l'échange de
                commentaires.
            </p>
            <a id=\"linkBlog\" href=\"index.php?controller=PostController&action=posts\"> cliquer ici pour vous rendre sur
                le
                blog</a>
        </div>
    </div>
    <hr class=\"my-4\" />
    <hr class=\"my-4\" />
</section>

<section id=\"contact\" class=\"container px-4 px-lg-5\">
    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <h1 id=\"title\"><img id=\"icon\" src=\"assets\\img\\lettre.png\"></img><br>Contact</h1>
            <p>
                Vous voulez entrer en contact? Remplissez le formulaire ci-dessous pour envoyer un message et je vous
                répondrai dès que
                possible!
            </p>
            <div class=\"my-5\">
                <form id=\"contactForm\" method=\"post\" action=\"index.php?action=sendForm\">
                    <div class=\"form-floating\">
                        <input class=\"form-control\" name=\"name\" id=\"name\" type=\"text\" placeholder=\"Enter your name...\"
                            data-sb-validations=\"required\" />
                        <label for=\"name\">Name</label>
                        <div class=\"invalid-feedback\" data-sb-feedback=\"name:required\">A name is required.</div>
                    </div>
                    <div class=\"form-floating\">
                        <input class=\"form-control\" name=\"email\" id=\"email\" type=\"email\"
                            placeholder=\"Enter your email...\" data-sb-validations=\"required,email\" />
                        <label for=\"email\">Email address</label>
                        <div class=\"invalid-feedback\" data-sb-feedback=\"email:required\">An email is required.</div>
                        <div class=\"invalid-feedback\" data-sb-feedback=\"email:email\">Email is not valid.</div>
                    </div>
                    <div class=\"form-floating\">
                        <input class=\"form-control\" name=\"phone\" id=\"phone\" type=\"tel\"
                            placeholder=\"Enter your phone number...\" data-sb-validations=\"required\" />
                        <label for=\"phone\">Phone Number</label>
                        <div class=\"invalid-feedback\" data-sb-feedback=\"phone:required\">A phone number is required.
                        </div>
                    </div>
                    <div class=\"form-floating\">
                        <textarea class=\"form-control\" name=\"message\" id=\"message\"
                            placeholder=\"Enter your message here...\" style=\"height: 12rem\"
                            data-sb-validations=\"required\"></textarea>
                        <label for=\"message\">Message</label>
                        <div class=\"invalid-feedback\" data-sb-feedback=\"message:required\">A message is required.</div>
                    </div>
                    <button type=\"submit\">Envoyer</button>
                    <br />
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class=\"d-none\" id=\"submitSuccessMessage\">
                        <div class=\"text-center mb-3\">
                            <div class=\"fw-bolder\">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a
                                href=\"https://startbootstrap.com/solution/contact-forms\">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class=\"d-none\" id=\"submitErrorMessage\">
                        <div class=\"text-center text-danger mb-3\">Error sending message!</div>
                    </div>
                    <!-- Submit Button-->
                    {# <button class=\"btn btn-primary text-uppercase disabled\" id=\"submitButton\"
                        type=\"submit\">Send</button> #}
                </form>
            </div>
        </div>
    </div>
</section>
{% endblock content %}", "home.twig", "C:\\Users\\marle\\Desktop\\OPC\\projet5blog\\blogOpc\\templates\\home.twig");
    }
}
