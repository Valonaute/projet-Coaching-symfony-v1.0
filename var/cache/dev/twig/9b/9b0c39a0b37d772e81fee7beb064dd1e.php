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

/* public/formations.html.twig */
class __TwigTemplate_a23f4b764f46cb31cf99000c02f3dbbc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/formations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/formations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "public/formations.html.twig", 1);
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
        echo "Formations
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
        <a class=\"on\" href=\"panier.html\"> Panier <img src=\"img/panier.png\" alt=\"panier\" height=\"30px\"></a>
        <a class=\"off account\" href=\"account.html\"><img src=\"img/account.png\" alt=\"account logo\" ></a> 
    </div>
</section>
<section class=\"menu\">
    <a class=\"inactive\" href=\"livres.html\"> Livres </a>
    <a class=\"on\" href=\"formations.html\"> Formations </a>
    <a class=\"inactive\" href=\"seminaires.html\"> Séminaires </a>
    <a class=\"inactive\" href=\"seances.html\"> Séances </a>
</section>
<h3> Nos Meilleurs formations en ligne </h3>
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
            <h4 class=\"prix\"> 297 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
    <section class=\"produit\">
        <h4> Confiance en soi  </h4>
        <article class=\"element\">
            <p class=\"description\"> Améliorer votre vie avec cette formation sur la confiance en soi : prise de parole en public, vie privée, sociale et professionnelle, la confiance en soi est la clé vers une vie épanouie !   </p>
        </article>
        <p class=\"resume\"> Garantie 100% Satisfait ou remboursé </p>
        <div class=\"achat\">
            <h4 class=\"prix\"> 147 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
    <section class=\"produit\">
        <h4> Communication  </h4>
        <article class=\"element\">
            <p class=\"description\"> En couple, en famille et entre amis, la communication non violente vous permettra de vous faire entendre de la meilleure des façons. Cette formation pleine d'exercices est un best seller !   </p>
        </article>
        <p class=\"resume\"> Garantie 100% Satisfait ou remboursé </p>
        <div class=\"achat\">
            <h4 class=\"prix\"> 197 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
    <section class=\"produit\">
        <h4> Pack confiance en soi - CNV </h4>
        <article class=\"element\">
            <p class=\"description\"> Boostez vous relations avec le pack confiance en soi et communication non violente. Devenez un expert dans la compétence la plus importante du 21è siècle  </p>
        </article>
        <p class=\"resume\"> Garantie 100% Satisfait ou remboursé </p>
        <div class=\"achat\">
            <h4 class=\"prix\"> 297 € </h4>
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
        return "public/formations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Formations
{% endblock title %}

{% block main %}

<section class=\"tool-bar\">
    <h2> Boutique </h2>
    <div class=\"panier\">
        <a class=\"on\" href=\"panier.html\"> Panier <img src=\"img/panier.png\" alt=\"panier\" height=\"30px\"></a>
        <a class=\"off account\" href=\"account.html\"><img src=\"img/account.png\" alt=\"account logo\" ></a> 
    </div>
</section>
<section class=\"menu\">
    <a class=\"inactive\" href=\"livres.html\"> Livres </a>
    <a class=\"on\" href=\"formations.html\"> Formations </a>
    <a class=\"inactive\" href=\"seminaires.html\"> Séminaires </a>
    <a class=\"inactive\" href=\"seances.html\"> Séances </a>
</section>
<h3> Nos Meilleurs formations en ligne </h3>
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
            <h4 class=\"prix\"> 297 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
    <section class=\"produit\">
        <h4> Confiance en soi  </h4>
        <article class=\"element\">
            <p class=\"description\"> Améliorer votre vie avec cette formation sur la confiance en soi : prise de parole en public, vie privée, sociale et professionnelle, la confiance en soi est la clé vers une vie épanouie !   </p>
        </article>
        <p class=\"resume\"> Garantie 100% Satisfait ou remboursé </p>
        <div class=\"achat\">
            <h4 class=\"prix\"> 147 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
    <section class=\"produit\">
        <h4> Communication  </h4>
        <article class=\"element\">
            <p class=\"description\"> En couple, en famille et entre amis, la communication non violente vous permettra de vous faire entendre de la meilleure des façons. Cette formation pleine d'exercices est un best seller !   </p>
        </article>
        <p class=\"resume\"> Garantie 100% Satisfait ou remboursé </p>
        <div class=\"achat\">
            <h4 class=\"prix\"> 197 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
    <section class=\"produit\">
        <h4> Pack confiance en soi - CNV </h4>
        <article class=\"element\">
            <p class=\"description\"> Boostez vous relations avec le pack confiance en soi et communication non violente. Devenez un expert dans la compétence la plus importante du 21è siècle  </p>
        </article>
        <p class=\"resume\"> Garantie 100% Satisfait ou remboursé </p>
        <div class=\"achat\">
            <h4 class=\"prix\"> 297 € </h4>
            <a class=\"on\" href=\"addtocart.html\"> Ajouter au panier </a>
        </div>
    </section>
</section>


{% endblock main %}", "public/formations.html.twig", "C:\\wamp\\www\\Projet coaching\\v1.0_coaching_symfony\\templates\\public\\formations.html.twig");
    }
}
