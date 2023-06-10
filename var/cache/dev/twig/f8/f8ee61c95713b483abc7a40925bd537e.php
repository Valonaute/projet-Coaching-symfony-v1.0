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

/* user/home.html.twig */
class __TwigTemplate_b96c54c9116d034865bbf2722e4f4db6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'login' => [$this, 'block_login'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        // line 8
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 15
        echo "
<p> Vous êtes bien connecté en tant qu'utilisateur ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "userIdentifier", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
<h2> Coaching de vie - Programmation-Neuro-Linguistique</h2>
        <section id=\"description\">
            <h3> Valentin Gautier, Coach certifié</h3>
            <p> Conseiller de particulier et auteur de ce site </p>
        </section>
        <section>
            <h3> Découvrez la vidéo de Valentin Gautier avec plus de 580 vues sur Youtube </h3>
            <video src=\"img/valentin.mp4\" autoplay muted></video>
        </section>
        <section id=\"apropos\">
            <h2> A propos </h2>
            <p> Entrepreneur, coach et conseiller de particuliers et top performers, passionné des dernières avancées en neurosciences, Valentin Gautier bouscule depuis plus de dix mois le paysage du business coaching et du développement personnel.<p>Fondateur et dirigeant de Valonaute Inc, comptant une équipe de plus de 2 personnes, Valentin Gautier compte pour clients ses parents, sa soeur, sa copine, des amis et des volontaires du métro parisien.</p><p> Il accompagne ces personnalités à améliorer leur performance ou la croissance de leur business mais aussi des dizaines de particuliers sur le plan du développement personnel et de la confiance en soi. </p><p>Fasciné par comment de petits changements peuvent radicalement transformer notre vie ou nos résultats, son obsession réside dans le fait de partager des outils concrets de la manière la plus captivante et pédagogique possible.</p><p>Le tout validé, ou invalidé, par des recherches scientifiques que son équipe de chercheurs mène. </p>
        </section>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 16,  114 => 15,  104 => 14,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Accueil
{% endblock title %}

{% block login %}
<a href=\"{{ path ('app_logout')}}\">Déconnexion</a>
{% endblock login %}




{% block main %}

<p> Vous êtes bien connecté en tant qu'utilisateur {{ app.user.userIdentifier }}</p>
<h2> Coaching de vie - Programmation-Neuro-Linguistique</h2>
        <section id=\"description\">
            <h3> Valentin Gautier, Coach certifié</h3>
            <p> Conseiller de particulier et auteur de ce site </p>
        </section>
        <section>
            <h3> Découvrez la vidéo de Valentin Gautier avec plus de 580 vues sur Youtube </h3>
            <video src=\"img/valentin.mp4\" autoplay muted></video>
        </section>
        <section id=\"apropos\">
            <h2> A propos </h2>
            <p> Entrepreneur, coach et conseiller de particuliers et top performers, passionné des dernières avancées en neurosciences, Valentin Gautier bouscule depuis plus de dix mois le paysage du business coaching et du développement personnel.<p>Fondateur et dirigeant de Valonaute Inc, comptant une équipe de plus de 2 personnes, Valentin Gautier compte pour clients ses parents, sa soeur, sa copine, des amis et des volontaires du métro parisien.</p><p> Il accompagne ces personnalités à améliorer leur performance ou la croissance de leur business mais aussi des dizaines de particuliers sur le plan du développement personnel et de la confiance en soi. </p><p>Fasciné par comment de petits changements peuvent radicalement transformer notre vie ou nos résultats, son obsession réside dans le fait de partager des outils concrets de la manière la plus captivante et pédagogique possible.</p><p>Le tout validé, ou invalidé, par des recherches scientifiques que son équipe de chercheurs mène. </p>
        </section>


{% endblock main %}", "user/home.html.twig", "C:\\wamp\\www\\Projet coaching\\v1.0_coaching_symfony\\templates\\user\\home.html.twig");
    }
}
