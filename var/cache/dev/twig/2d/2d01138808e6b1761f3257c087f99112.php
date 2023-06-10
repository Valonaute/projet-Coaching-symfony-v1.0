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

/* public/store.html.twig */
class __TwigTemplate_1020e462a431629c089910769a84472d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/store.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/store.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "public/store.html.twig", 1);
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
        echo "Boutique
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
<section class=\"tool-bar\">
    <h2> Boutique </h2>
    <div class=\"panier\">
        <a class=\"on\" href=\"panier.html\"> Panier <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/panier.png"), "html", null, true);
        echo "\" alt=\"panier\" height=\"30px\"></a>
        <a class=\"off\" href=\"account.html\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/account.png"), "html", null, true);
        echo "\" alt=\"account logo\" height=\"50px\"></a> 
    </div>
</section>
<section class=\"menu\">
    <a class=\"inactive\" href=\"livres.html\"> Livres </a>
    <a class=\"inactive\" href=\"formations.html\"> Formations </a>
    <a class=\"inactive\" href=\"seminaires.html\"> Séminaires </a>
    <a class=\"inactive\" href=\"seances.html\"> Séances </a>
</section>
<h3> Nos Meilleurs produits du moment </h3>
<section class=\"container row\">
    <section class=\"produit\">
        <h4> Le secret </h4>
        <article class=\"element\">
            <img src=\"img/secret.jpg\" alt=\"le secret\" height=\"900px\">
            <p class=\"description\"> Attirez à vous ce que vous voulez !</p>
        </article>
        <p class=\"resume\"> Film sur la loi d'attraction</p>
        <div class=\"achat\">
            <h4 class=\"prix\"> 18 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
    <section class=\"produit\">
        <h4> Pouvoir Illimité </h4>
        <article class=\"element\">
            <img src=\"img/pouvoirillimite.jpg\" alt=\"pouvoir illimite\" height=\"900px\">
            <p class=\"description\"> Changer votre vie avec la PNL</p>
        </article>
        <p class=\"resume\"> Programmation-Neuro-Linguistique</p>
        <div class=\"achat\">
            <h4 class=\"prix\"> 9 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
    <section class=\"produit\">
        <h4> Clé de vie </h4>
        <article class=\"element\">
            <img src=\"img/cledevie.jpg\" alt=\"pouvoir illimite\" height=\"900px\">
            <p class=\"description\"> Les 3 oeuvres magiques de Wallace D. Wattles </p>
        </article>
        <p class=\"resume\"> Réussite personnelle </p>
        <div class=\"achat\">
            <h4 class=\"prix\"> 15 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
</section>
<h3> Nos formations en ligne </h3>
<section class=\"container row\">
    <section class=\"produit\">
        <h4> Pratiquer la loi d'attraction </h4>
        <article class=\"element\">
            <p class=\"description\"> Améliorer votre vie avec cette formation riche en ressources et en exercices pour pratiquer la loi d'attraction au quotidien.   </p>
        </article>
        <p class=\"resume\"> Garantie 100% Satisfait ou remboursé </p>
        <div class=\"achat\">
            <h4 class=\"prix\"> 147 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
    <section class=\"produit\">
        <h4> Pratiquer la PNL au quotidien </h4>
        <article class=\"element\">
            <p class=\"description\"> Améliorer votre quotidien avec cette formation riche en ressources et en exercices pour pratiquer la PNL dans diverses situations à la maison ou au travail </p>
        </article>
        <p class=\"resume\"> Garantie 100% Satisfait ou remboursé </p>
        <div class=\"achat\">
            <h4 class=\"prix\"> 197 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
    <section class=\"produit\">
        <h4> Pack PNL - Loi d'attraction </h4>
        <article class=\"element\">
            <p class=\"description\"> Prenez votre vie en main avec ce pack de nos deux formations pour booster sa vie avec des outils et des exercices pratiques  </p>
        </article>
        <p class=\"resume\"> Garantie 100% Satisfait ou remboursé </p>
        <div class=\"achat\">
            <h4 class=\"prix\"> 147 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
</section>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "public/store.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 13,  96 => 12,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Boutique
{% endblock title %}

{% block main %}

<section class=\"tool-bar\">
    <h2> Boutique </h2>
    <div class=\"panier\">
        <a class=\"on\" href=\"panier.html\"> Panier <img src=\"{{ asset ('assets/img/panier.png')}}\" alt=\"panier\" height=\"30px\"></a>
        <a class=\"off\" href=\"account.html\"><img src=\"{{ asset ('assets/img/account.png')}}\" alt=\"account logo\" height=\"50px\"></a> 
    </div>
</section>
<section class=\"menu\">
    <a class=\"inactive\" href=\"livres.html\"> Livres </a>
    <a class=\"inactive\" href=\"formations.html\"> Formations </a>
    <a class=\"inactive\" href=\"seminaires.html\"> Séminaires </a>
    <a class=\"inactive\" href=\"seances.html\"> Séances </a>
</section>
<h3> Nos Meilleurs produits du moment </h3>
<section class=\"container row\">
    <section class=\"produit\">
        <h4> Le secret </h4>
        <article class=\"element\">
            <img src=\"img/secret.jpg\" alt=\"le secret\" height=\"900px\">
            <p class=\"description\"> Attirez à vous ce que vous voulez !</p>
        </article>
        <p class=\"resume\"> Film sur la loi d'attraction</p>
        <div class=\"achat\">
            <h4 class=\"prix\"> 18 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
    <section class=\"produit\">
        <h4> Pouvoir Illimité </h4>
        <article class=\"element\">
            <img src=\"img/pouvoirillimite.jpg\" alt=\"pouvoir illimite\" height=\"900px\">
            <p class=\"description\"> Changer votre vie avec la PNL</p>
        </article>
        <p class=\"resume\"> Programmation-Neuro-Linguistique</p>
        <div class=\"achat\">
            <h4 class=\"prix\"> 9 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
    <section class=\"produit\">
        <h4> Clé de vie </h4>
        <article class=\"element\">
            <img src=\"img/cledevie.jpg\" alt=\"pouvoir illimite\" height=\"900px\">
            <p class=\"description\"> Les 3 oeuvres magiques de Wallace D. Wattles </p>
        </article>
        <p class=\"resume\"> Réussite personnelle </p>
        <div class=\"achat\">
            <h4 class=\"prix\"> 15 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
</section>
<h3> Nos formations en ligne </h3>
<section class=\"container row\">
    <section class=\"produit\">
        <h4> Pratiquer la loi d'attraction </h4>
        <article class=\"element\">
            <p class=\"description\"> Améliorer votre vie avec cette formation riche en ressources et en exercices pour pratiquer la loi d'attraction au quotidien.   </p>
        </article>
        <p class=\"resume\"> Garantie 100% Satisfait ou remboursé </p>
        <div class=\"achat\">
            <h4 class=\"prix\"> 147 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
    <section class=\"produit\">
        <h4> Pratiquer la PNL au quotidien </h4>
        <article class=\"element\">
            <p class=\"description\"> Améliorer votre quotidien avec cette formation riche en ressources et en exercices pour pratiquer la PNL dans diverses situations à la maison ou au travail </p>
        </article>
        <p class=\"resume\"> Garantie 100% Satisfait ou remboursé </p>
        <div class=\"achat\">
            <h4 class=\"prix\"> 197 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
    <section class=\"produit\">
        <h4> Pack PNL - Loi d'attraction </h4>
        <article class=\"element\">
            <p class=\"description\"> Prenez votre vie en main avec ce pack de nos deux formations pour booster sa vie avec des outils et des exercices pratiques  </p>
        </article>
        <p class=\"resume\"> Garantie 100% Satisfait ou remboursé </p>
        <div class=\"achat\">
            <h4 class=\"prix\"> 147 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
</section>


{% endblock main %}", "public/store.html.twig", "C:\\wamp\\www\\Projet coaching\\v1.0_coaching_symfony\\templates\\public\\store.html.twig");
    }
}
