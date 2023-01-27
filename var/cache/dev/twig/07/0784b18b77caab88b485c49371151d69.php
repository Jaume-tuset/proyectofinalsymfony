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

/* base.html.twig */
class __TwigTemplate_e5780f61db56c8bfdfd48f01a2aa5524 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <!-- El títol ha de ser diferent en cada vista -->
    <title> ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- estils comuns a totes les vistes -->
    
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/estils.css"), "html", null, true);
        echo "\"/>

    ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imatges/favicon.ico"), "html", null, true);
        echo "\">

</head>
<body>
";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 54
        echo "    <main id=\"principal\">
        <section id=\"contingut\">
        ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "        </section>
    </main>
    ";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 70
        echo "    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Plantilla Base Examen ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "<div id=\"embolcall\">
    <header id=\"cap\">
        <!-- NomAlumnes s'obté d'un Recurs Compartit (servei) -->
        <h1>Examen Final DAW<br/>Symfony</h1>
    </header>
    <nav id=\"menu\">
        <ul>
            <!-- cal afegir els enllaços als apartats corresponents (rutes) -->
            <li><a href=\" ";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inici");
        echo "  \"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imatges/icones/inici.png"), "html", null, true);
        echo " \" alt=\"inici\" class=\"icona\" /> Inici</a></li>
            <li><a href=\" ";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nou_peix");
        echo " \"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imatges/icones/peix.png"), "html", null, true);
        echo "\" alt=\"nou peix\" class=\"icona\" /> Nou Peix</a></li>
            <li><a href=\" ";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recarrega");
        echo " \"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/imatges/icones/reload.png"), "html", null, true);
        echo "\" alt=\"recarrega\" class=\"icona\" /> Recàrrega</a></li>
            <div class=\"dropdown\">
                <li class=\"dropbtn\"><a href=\"#\"><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imatges/icones/afegirusuari.png"), "html", null, true);
        echo "\" alt=\"nou usuari\" class=\"icona\" />Nou Usuari</a></li>
                <div class=\"dropdown-content\">
                    <a href=\"#\">Admin</a>
                    <a href=\"#\">User</a>
                </div>
            </div>
            <div class=\"dropdown\">
                <li class=\"dropbtn\"><a href=\"#\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imatges/icones/eliminar.png"), "html", null, true);
        echo "\" alt=\"eliminar\" class=\"icona\" />Eliminar</a></li>
                <div class=\"dropdown-content\">
                    <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminar", ["nom" => "sardina"]);
        echo " \">Sardina</a>
                    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminar", ["nom" => "tauro"]);
        echo " \">Tauró Blanc</a>
                    <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminar", ["nom" => "peix"]);
        echo " \">Peix Espasa</a>
                    <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminar", ["nom" => "toyina"]);
        echo " \">Tonyina</a>
                </div>
            </div>
            <li><a href=\"#\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imatges/icones/logout.png"), "html", null, true);
        echo "\" alt=\"logout\" class=\"icona\" /> Logout</a></li>
        </ul>
    </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 56
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 57
        echo "           <!-- Ací va el contingut dels apartats de l'examen -->
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 62
        echo "        <footer id=\"peu\">
            <p>
                IES Lluís Simarro<br/>
                Curs 22/23<br/>
                DAW
            </p>
        </footer>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 62,  280 => 61,  269 => 57,  259 => 56,  245 => 50,  239 => 47,  235 => 46,  231 => 45,  227 => 44,  222 => 42,  212 => 35,  205 => 33,  199 => 32,  193 => 31,  183 => 23,  173 => 22,  160 => 15,  150 => 14,  137 => 10,  127 => 9,  108 => 6,  96 => 70,  94 => 61,  90 => 59,  88 => 56,  84 => 54,  82 => 22,  75 => 18,  72 => 17,  70 => 14,  64 => 12,  62 => 9,  56 => 6,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <!-- El títol ha de ser diferent en cada vista -->
    <title> {% block title %} Plantilla Base Examen {% endblock %}</title>
    <!-- estils comuns a totes les vistes -->
    
    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/estils.css') }}\"/>

    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %}
    
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('imatges/favicon.ico') }}\">

</head>
<body>
{% block header %}
<div id=\"embolcall\">
    <header id=\"cap\">
        <!-- NomAlumnes s'obté d'un Recurs Compartit (servei) -->
        <h1>Examen Final DAW<br/>Symfony</h1>
    </header>
    <nav id=\"menu\">
        <ul>
            <!-- cal afegir els enllaços als apartats corresponents (rutes) -->
            <li><a href=\" {{ path('inici') }}  \"><img src=\"{{ asset('imatges/icones/inici.png') }} \" alt=\"inici\" class=\"icona\" /> Inici</a></li>
            <li><a href=\" {{ path('nou_peix') }} \"><img src=\"{{ asset('imatges/icones/peix.png')}}\" alt=\"nou peix\" class=\"icona\" /> Nou Peix</a></li>
            <li><a href=\" {{ path('recarrega') }} \"><img src=\"{{ asset('/imatges/icones/reload.png')}}\" alt=\"recarrega\" class=\"icona\" /> Recàrrega</a></li>
            <div class=\"dropdown\">
                <li class=\"dropbtn\"><a href=\"#\"><img src=\"{{ asset('imatges/icones/afegirusuari.png') }}\" alt=\"nou usuari\" class=\"icona\" />Nou Usuari</a></li>
                <div class=\"dropdown-content\">
                    <a href=\"#\">Admin</a>
                    <a href=\"#\">User</a>
                </div>
            </div>
            <div class=\"dropdown\">
                <li class=\"dropbtn\"><a href=\"#\"><img src=\"{{ asset('imatges/icones/eliminar.png') }}\" alt=\"eliminar\" class=\"icona\" />Eliminar</a></li>
                <div class=\"dropdown-content\">
                    <a href=\"{{ path('eliminar',{'nom':'sardina'}) }} \">Sardina</a>
                    <a href=\"{{ path('eliminar',{'nom':'tauro'}) }} \">Tauró Blanc</a>
                    <a href=\"{{ path('eliminar',{'nom':'peix'}) }} \">Peix Espasa</a>
                    <a href=\"{{ path('eliminar',{'nom':'toyina'}) }} \">Tonyina</a>
                </div>
            </div>
            <li><a href=\"#\"><img src=\"{{ asset('imatges/icones/logout.png') }}\" alt=\"logout\" class=\"icona\" /> Logout</a></li>
        </ul>
    </nav>
{% endblock %}
    <main id=\"principal\">
        <section id=\"contingut\">
        {% block body %}
           <!-- Ací va el contingut dels apartats de l'examen -->
        {% endblock %}
        </section>
    </main>
    {% block footer %}
        <footer id=\"peu\">
            <p>
                IES Lluís Simarro<br/>
                Curs 22/23<br/>
                DAW
            </p>
        </footer>
    {% endblock %}
    </div>
</body>
</html>", "base.html.twig", "/opt/lampp/htdocs/htdocs_examen/symfony/examenfinaljaume/templates/base.html.twig");
    }
}
