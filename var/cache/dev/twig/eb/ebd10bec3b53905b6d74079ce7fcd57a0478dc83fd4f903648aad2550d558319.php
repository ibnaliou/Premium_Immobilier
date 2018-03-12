<?php

/* PremiumBundle:Admin:reservationinfo.html.twig */
class __TwigTemplate_6baeb24e1ccf4f1740069bf0508462aa0da6657048eacbdfe31fa515ac79bc0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PremiumBundle::acceuil.html.twig", "PremiumBundle:Admin:reservationinfo.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'slide' => array($this, 'block_slide'),
            'recherche' => array($this, 'block_recherche'),
            'offre' => array($this, 'block_offre'),
            'apropos' => array($this, 'block_apropos'),
            'partenaires' => array($this, 'block_partenaires'),
            'galerie' => array($this, 'block_galerie'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PremiumBundle::acceuil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c920dd54cfaca9a6913f1408a70fc0e1576b0a58f2387794ba29374271208859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c920dd54cfaca9a6913f1408a70fc0e1576b0a58f2387794ba29374271208859->enter($__internal_c920dd54cfaca9a6913f1408a70fc0e1576b0a58f2387794ba29374271208859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:reservationinfo.html.twig"));

        $__internal_a6819bd5993eb3e0d89b1ddd06daa789f022dbf99286839d8d4a3bbb4cc27cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6819bd5993eb3e0d89b1ddd06daa789f022dbf99286839d8d4a3bbb4cc27cc4->enter($__internal_a6819bd5993eb3e0d89b1ddd06daa789f022dbf99286839d8d4a3bbb4cc27cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:reservationinfo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c920dd54cfaca9a6913f1408a70fc0e1576b0a58f2387794ba29374271208859->leave($__internal_c920dd54cfaca9a6913f1408a70fc0e1576b0a58f2387794ba29374271208859_prof);

        
        $__internal_a6819bd5993eb3e0d89b1ddd06daa789f022dbf99286839d8d4a3bbb4cc27cc4->leave($__internal_a6819bd5993eb3e0d89b1ddd06daa789f022dbf99286839d8d4a3bbb4cc27cc4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5473023499ee46070a2878d12530d36b9aae9e1b84faf0ad6f6f598ad0600227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5473023499ee46070a2878d12530d36b9aae9e1b84faf0ad6f6f598ad0600227->enter($__internal_5473023499ee46070a2878d12530d36b9aae9e1b84faf0ad6f6f598ad0600227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f0a5ba40c381dbd9e18179dfe75bd755e0d02ca561c1180cab0946c91e3426eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a5ba40c381dbd9e18179dfe75bd755e0d02ca561c1180cab0946c91e3426eb->enter($__internal_f0a5ba40c381dbd9e18179dfe75bd755e0d02ca561c1180cab0946c91e3426eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_f0a5ba40c381dbd9e18179dfe75bd755e0d02ca561c1180cab0946c91e3426eb->leave($__internal_f0a5ba40c381dbd9e18179dfe75bd755e0d02ca561c1180cab0946c91e3426eb_prof);

        
        $__internal_5473023499ee46070a2878d12530d36b9aae9e1b84faf0ad6f6f598ad0600227->leave($__internal_5473023499ee46070a2878d12530d36b9aae9e1b84faf0ad6f6f598ad0600227_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_71775cc8feb89f176fa4792e7c31550e44d2160cc3f81f445617d11b537b325d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71775cc8feb89f176fa4792e7c31550e44d2160cc3f81f445617d11b537b325d->enter($__internal_71775cc8feb89f176fa4792e7c31550e44d2160cc3f81f445617d11b537b325d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a37351c5f73cf76417e76adadb8b07cf7ce6968e7133b4799b2a2326dd1d7610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a37351c5f73cf76417e76adadb8b07cf7ce6968e7133b4799b2a2326dd1d7610->enter($__internal_a37351c5f73cf76417e76adadb8b07cf7ce6968e7133b4799b2a2326dd1d7610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PremiumBundle:Admin:Detail";
        
        $__internal_a37351c5f73cf76417e76adadb8b07cf7ce6968e7133b4799b2a2326dd1d7610->leave($__internal_a37351c5f73cf76417e76adadb8b07cf7ce6968e7133b4799b2a2326dd1d7610_prof);

        
        $__internal_71775cc8feb89f176fa4792e7c31550e44d2160cc3f81f445617d11b537b325d->leave($__internal_71775cc8feb89f176fa4792e7c31550e44d2160cc3f81f445617d11b537b325d_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b3a9760bf7e029133d1f3204060ab82494e2ef29dd476d0317c40161ad2cc351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a9760bf7e029133d1f3204060ab82494e2ef29dd476d0317c40161ad2cc351->enter($__internal_b3a9760bf7e029133d1f3204060ab82494e2ef29dd476d0317c40161ad2cc351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c095f6ab81a787c2aecda26bdaf4ab5590f0c0958ec7ad1953adc2d0c422a927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c095f6ab81a787c2aecda26bdaf4ab5590f0c0958ec7ad1953adc2d0c422a927->enter($__internal_c095f6ab81a787c2aecda26bdaf4ab5590f0c0958ec7ad1953adc2d0c422a927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.min.css"), "html", null, true);
        echo "\">

    ";
        
        $__internal_c095f6ab81a787c2aecda26bdaf4ab5590f0c0958ec7ad1953adc2d0c422a927->leave($__internal_c095f6ab81a787c2aecda26bdaf4ab5590f0c0958ec7ad1953adc2d0c422a927_prof);

        
        $__internal_b3a9760bf7e029133d1f3204060ab82494e2ef29dd476d0317c40161ad2cc351->leave($__internal_b3a9760bf7e029133d1f3204060ab82494e2ef29dd476d0317c40161ad2cc351_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_57526af6c7d8669f75a14a648902d770e3f498888d3e6c09efa3ab0398bee7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57526af6c7d8669f75a14a648902d770e3f498888d3e6c09efa3ab0398bee7b4->enter($__internal_57526af6c7d8669f75a14a648902d770e3f498888d3e6c09efa3ab0398bee7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95bd6bfe40da96b1851d00e7c8d70bf2ecb0859006d3ad9b96c64109c6c25dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95bd6bfe40da96b1851d00e7c8d70bf2ecb0859006d3ad9b96c64109c6c25dfc->enter($__internal_95bd6bfe40da96b1851d00e7c8d70bf2ecb0859006d3ad9b96c64109c6c25dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('slide', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('recherche', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('offre', $context, $blocks);
        // line 157
        echo "
        ";
        // line 158
        $this->displayBlock('apropos', $context, $blocks);
        // line 159
        echo "        ";
        $this->displayBlock('partenaires', $context, $blocks);
        // line 160
        echo "        ";
        $this->displayBlock('galerie', $context, $blocks);
        // line 161
        echo "
    ";
        
        $__internal_95bd6bfe40da96b1851d00e7c8d70bf2ecb0859006d3ad9b96c64109c6c25dfc->leave($__internal_95bd6bfe40da96b1851d00e7c8d70bf2ecb0859006d3ad9b96c64109c6c25dfc_prof);

        
        $__internal_57526af6c7d8669f75a14a648902d770e3f498888d3e6c09efa3ab0398bee7b4->leave($__internal_57526af6c7d8669f75a14a648902d770e3f498888d3e6c09efa3ab0398bee7b4_prof);

    }

    // line 14
    public function block_slide($context, array $blocks = array())
    {
        $__internal_013fc82d2397c06cd046d015fa432a734f3003e6543c12ef13678997a0191a2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_013fc82d2397c06cd046d015fa432a734f3003e6543c12ef13678997a0191a2e->enter($__internal_013fc82d2397c06cd046d015fa432a734f3003e6543c12ef13678997a0191a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_67f2881383e21442520fe9b3ea8aac103f270cfbd9abc07ef443d960fba25384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f2881383e21442520fe9b3ea8aac103f270cfbd9abc07ef443d960fba25384->enter($__internal_67f2881383e21442520fe9b3ea8aac103f270cfbd9abc07ef443d960fba25384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        
        $__internal_67f2881383e21442520fe9b3ea8aac103f270cfbd9abc07ef443d960fba25384->leave($__internal_67f2881383e21442520fe9b3ea8aac103f270cfbd9abc07ef443d960fba25384_prof);

        
        $__internal_013fc82d2397c06cd046d015fa432a734f3003e6543c12ef13678997a0191a2e->leave($__internal_013fc82d2397c06cd046d015fa432a734f3003e6543c12ef13678997a0191a2e_prof);

    }

    // line 16
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_1bc1c1203ae3a17c1e6c77bd781db26b3eedf325c5dd6336cc8beb72d76bf3ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc1c1203ae3a17c1e6c77bd781db26b3eedf325c5dd6336cc8beb72d76bf3ae->enter($__internal_1bc1c1203ae3a17c1e6c77bd781db26b3eedf325c5dd6336cc8beb72d76bf3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_ebd063c2859833e83ab249a0115a8c7575e1769a972b6f935db552ceb3cf0a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd063c2859833e83ab249a0115a8c7575e1769a972b6f935db552ceb3cf0a70->enter($__internal_ebd063c2859833e83ab249a0115a8c7575e1769a972b6f935db552ceb3cf0a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        
        $__internal_ebd063c2859833e83ab249a0115a8c7575e1769a972b6f935db552ceb3cf0a70->leave($__internal_ebd063c2859833e83ab249a0115a8c7575e1769a972b6f935db552ceb3cf0a70_prof);

        
        $__internal_1bc1c1203ae3a17c1e6c77bd781db26b3eedf325c5dd6336cc8beb72d76bf3ae->leave($__internal_1bc1c1203ae3a17c1e6c77bd781db26b3eedf325c5dd6336cc8beb72d76bf3ae_prof);

    }

    // line 18
    public function block_offre($context, array $blocks = array())
    {
        $__internal_903af25b7bc4193a8220b8d17accb9d54fcc051b0444caa014ce6efbba1329eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903af25b7bc4193a8220b8d17accb9d54fcc051b0444caa014ce6efbba1329eb->enter($__internal_903af25b7bc4193a8220b8d17accb9d54fcc051b0444caa014ce6efbba1329eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_92a1807d9d88e8ff9f2cf86e80a5c22434ea33e21ce5ff6a49ff2daf58588c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a1807d9d88e8ff9f2cf86e80a5c22434ea33e21ce5ff6a49ff2daf58588c78->enter($__internal_92a1807d9d88e8ff9f2cf86e80a5c22434ea33e21ce5ff6a49ff2daf58588c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 19
        echo "
        <br><br><br><br><br><br>
        <form class=\"form-horizontal\">

            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservationsinfo"] ?? $this->getContext($context, "reservationsinfo")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 24
            echo "                <div class=\"row container\">
                    <div class=\"col-md-3\">
                        <fieldset>

                            <div class=\"panel panel-success\" style=\"width:100%\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panneau-titre\">
                                        <font style=\"vertical-align: hériter;\">
                                            <font style=\"vertical-align: hériter;\"></font>INFO CLIENT</font>
                                    </h3>
                                </div>
                                <div class=\"panel-body\">
                                    <font style=\"vertical-aligner: hériter;\">
                                        <font style=\"vertical-align: inherit;\">
                                            NOM COMPLET :<p>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "nomComplet", array()), "html", null, true);
            echo "</p>
                                            Numero DE PIECE
                                            <p>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "numPiece", array()), "html", null, true);
            echo "</p>
                                            Numero de TELEPHONE :
                                            <p>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "tel", array()), "html", null, true);
            echo "</p>
                                            ADRESSE :
                                            <p>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "adresse", array()), "html", null, true);
            echo "</p>
                                            ADRESSE MAIL:
                                            <p>
                                                ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "email", array()), "html", null, true);
            echo "</p>
                                            <p></p>
                                        </font>
                                    </font>
                                </div>
                            </div>

                        </fieldset>
                    </div>

                    <div class=\"col-md-6\">
                        <fieldset>

                            <div class=\"panel panel-warning\" style=\"width:100%\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panneau-titre\">
                                        <font style=\"vertical-align: hériter;\">
                                            <font style=\"vertical-align: hériter;\"></font>IMAGE BIEN</font>
                                    </h3>
                                </div>
                                <div class=\"panel-body\">
                                    <font style=\"vertical-aligner: hériter;\">
                                        <font style=\"vertical-align: inherit;\">
                                            <div class=\"mg-best-rooms maclasse\" style=\"display:flex\">
                                                <div class=\"container ok\">
                                                    <div class=\"mySlides\">
                                                        <div class=\"numbertext\">1 / 3</div>
                                                        <img src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:30%\">
                                                    </div>

                                                    <div class=\"mySlides\">
                                                        <div class=\"numbertext\">2 / 3</div>
                                                        <img src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 2, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:30%\">
                                                    </div>

                                                    <div class=\"mySlides\">
                                                        <div class=\"numbertext\">3 / 3</div>
                                                        <img src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 1, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:30%\">
                                                    </div>

                                                    <div class=\"row\" style=\"display:flex;margin-left:2px;height:500px;\">
                                                        <img class=\"demo cursor\" src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:10%;height:20%\" onclick=\"currentSlide(1)\" alt=\"The Woods\">
                                                        <img class=\"demo cursor\" src=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 1, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:10%; height:20%\" onclick=\"currentSlide(2)\" alt=\"Northern Lights\">
                                                        <img class=\"demo cursor\" src=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 2, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:10%; height:20%\" onclick=\"currentSlide(3)\" alt=\"Nature and sunrise\">
                                                    </div>
                                                </div>
                                            </font>
                                        </font>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class=\"col-md-3\">
                            <fieldset>

                                <div class=\"panel panel-success\" style=\"width:100%\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panneau-titre\">
                                            <font style=\"vertical-align: hériter;\">
                                                <font style=\"vertical-align: hériter;\"></font>INFO BIEN</font>
                                        </h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <font style=\"vertical-aligner: hériter;\">
                                            <font style=\"vertical-align: inherit;\">
                                                NOM:
                                                <p>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "nomBien", array()), "html", null, true);
            echo "</p>
                                                LOCALITE:
                                                <p>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "Localite", array()), "libelle", array()), "html", null, true);
            echo "</p>
                                                TYPE DE BIEN:
                                                <p>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "TypeBien", array()), "libelle", array()), "html", null, true);
            echo "</p>
                                                PRIX DE LOCATION:
                                                <p>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "prixlocation", array()), "html", null, true);
            echo "</p>
                                            </font>
                                        </font>
                                    </div>

                                    <div class=\"form-group\">
                                        <div class=\"col-lg-10\" \"col-lg-offset-2\">

                                            <button type=\"soumettre\" class=\"btn btn-primaire\">
                                                <font style=\"vertical-aligner: hériter;\">
                                                    <font style=\"vertical-aligner: hériter;\">
                                                        <a href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat_reservation", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">VALIDER</a>
                                                    </td>
                                                </font>
                                            </font >
                                        </button>

                                        <button type=\"soumettre\" class=\"btn btn-primaire\">
                                            <font style=\"vertical-aligner: hériter;\">
                                                <font style=\"vertical-aligner: hériter;\">
                                                    <a href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_reservation", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">RETOUR</a>
                                                </font>
                                            </font >
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </fieldset>

                </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "            </form>
        ";
        
        $__internal_92a1807d9d88e8ff9f2cf86e80a5c22434ea33e21ce5ff6a49ff2daf58588c78->leave($__internal_92a1807d9d88e8ff9f2cf86e80a5c22434ea33e21ce5ff6a49ff2daf58588c78_prof);

        
        $__internal_903af25b7bc4193a8220b8d17accb9d54fcc051b0444caa014ce6efbba1329eb->leave($__internal_903af25b7bc4193a8220b8d17accb9d54fcc051b0444caa014ce6efbba1329eb_prof);

    }

    // line 158
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_1abed0b787e7d8ff87381ec0da859853aa5b361c878320cced88141f215de9ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1abed0b787e7d8ff87381ec0da859853aa5b361c878320cced88141f215de9ea->enter($__internal_1abed0b787e7d8ff87381ec0da859853aa5b361c878320cced88141f215de9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_0134df03193eb27741ff92ed131c9b595000960401f0e9d6b97ee975f33e3413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0134df03193eb27741ff92ed131c9b595000960401f0e9d6b97ee975f33e3413->enter($__internal_0134df03193eb27741ff92ed131c9b595000960401f0e9d6b97ee975f33e3413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        
        $__internal_0134df03193eb27741ff92ed131c9b595000960401f0e9d6b97ee975f33e3413->leave($__internal_0134df03193eb27741ff92ed131c9b595000960401f0e9d6b97ee975f33e3413_prof);

        
        $__internal_1abed0b787e7d8ff87381ec0da859853aa5b361c878320cced88141f215de9ea->leave($__internal_1abed0b787e7d8ff87381ec0da859853aa5b361c878320cced88141f215de9ea_prof);

    }

    // line 159
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_ea3254481a916bec37f5243f3d9aeabd52b61f62e970eec4229f1fd1a6a567fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea3254481a916bec37f5243f3d9aeabd52b61f62e970eec4229f1fd1a6a567fa->enter($__internal_ea3254481a916bec37f5243f3d9aeabd52b61f62e970eec4229f1fd1a6a567fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_15006e4a031807978fc4c1550e1d0f6e338a27a421ed05f30e583606d8c91c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15006e4a031807978fc4c1550e1d0f6e338a27a421ed05f30e583606d8c91c5c->enter($__internal_15006e4a031807978fc4c1550e1d0f6e338a27a421ed05f30e583606d8c91c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        
        $__internal_15006e4a031807978fc4c1550e1d0f6e338a27a421ed05f30e583606d8c91c5c->leave($__internal_15006e4a031807978fc4c1550e1d0f6e338a27a421ed05f30e583606d8c91c5c_prof);

        
        $__internal_ea3254481a916bec37f5243f3d9aeabd52b61f62e970eec4229f1fd1a6a567fa->leave($__internal_ea3254481a916bec37f5243f3d9aeabd52b61f62e970eec4229f1fd1a6a567fa_prof);

    }

    // line 160
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_2e5475807e734c5e0d345da0f7678d378f73cbbfc2d1ad6794ef3508b908ee78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e5475807e734c5e0d345da0f7678d378f73cbbfc2d1ad6794ef3508b908ee78->enter($__internal_2e5475807e734c5e0d345da0f7678d378f73cbbfc2d1ad6794ef3508b908ee78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_c777c72205fa442e9b7be96349f478358991703cae75512067796dfd271dc318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c777c72205fa442e9b7be96349f478358991703cae75512067796dfd271dc318->enter($__internal_c777c72205fa442e9b7be96349f478358991703cae75512067796dfd271dc318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        
        $__internal_c777c72205fa442e9b7be96349f478358991703cae75512067796dfd271dc318->leave($__internal_c777c72205fa442e9b7be96349f478358991703cae75512067796dfd271dc318_prof);

        
        $__internal_2e5475807e734c5e0d345da0f7678d378f73cbbfc2d1ad6794ef3508b908ee78->leave($__internal_2e5475807e734c5e0d345da0f7678d378f73cbbfc2d1ad6794ef3508b908ee78_prof);

    }

    public function getTemplateName()
    {
        return "PremiumBundle:Admin:reservationinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 160,  436 => 159,  419 => 158,  408 => 155,  387 => 140,  375 => 131,  361 => 120,  356 => 118,  351 => 116,  346 => 114,  318 => 90,  313 => 89,  308 => 88,  300 => 84,  291 => 79,  282 => 74,  252 => 47,  246 => 44,  241 => 42,  236 => 40,  231 => 38,  215 => 24,  211 => 23,  205 => 19,  196 => 18,  179 => 16,  162 => 14,  151 => 161,  148 => 160,  145 => 159,  143 => 158,  140 => 157,  138 => 18,  135 => 17,  133 => 16,  130 => 15,  128 => 14,  125 => 13,  116 => 12,  102 => 6,  93 => 5,  75 => 4,  64 => 9,  61 => 5,  58 => 4,  49 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'PremiumBundle::acceuil.html.twig' %}

{% block head %}
    {% block title %}PremiumBundle:Admin:Detail{% endblock %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset ('css/custom.min.css')}}\">

    {% endblock %}

{% endblock %}

{% block body %}

    {% block slide %}{% endblock %}

    {% block recherche %}{% endblock %}

    {% block offre %}

        <br><br><br><br><br><br>
        <form class=\"form-horizontal\">

            {%for reservation in  reservationsinfo %}
                <div class=\"row container\">
                    <div class=\"col-md-3\">
                        <fieldset>

                            <div class=\"panel panel-success\" style=\"width:100%\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panneau-titre\">
                                        <font style=\"vertical-align: hériter;\">
                                            <font style=\"vertical-align: hériter;\"></font>INFO CLIENT</font>
                                    </h3>
                                </div>
                                <div class=\"panel-body\">
                                    <font style=\"vertical-aligner: hériter;\">
                                        <font style=\"vertical-align: inherit;\">
                                            NOM COMPLET :<p>{{reservation.Client.nomComplet}}</p>
                                            Numero DE PIECE
                                            <p>{{reservation.Client.numPiece}}</p>
                                            Numero de TELEPHONE :
                                            <p>{{reservation.Client.tel}}</p>
                                            ADRESSE :
                                            <p>{{reservation.Client.adresse}}</p>
                                            ADRESSE MAIL:
                                            <p>
                                                {{reservation.Client.email}}</p>
                                            <p></p>
                                        </font>
                                    </font>
                                </div>
                            </div>

                        </fieldset>
                    </div>

                    <div class=\"col-md-6\">
                        <fieldset>

                            <div class=\"panel panel-warning\" style=\"width:100%\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panneau-titre\">
                                        <font style=\"vertical-align: hériter;\">
                                            <font style=\"vertical-align: hériter;\"></font>IMAGE BIEN</font>
                                    </h3>
                                </div>
                                <div class=\"panel-body\">
                                    <font style=\"vertical-aligner: hériter;\">
                                        <font style=\"vertical-align: inherit;\">
                                            <div class=\"mg-best-rooms maclasse\" style=\"display:flex\">
                                                <div class=\"container ok\">
                                                    <div class=\"mySlides\">
                                                        <div class=\"numbertext\">1 / 3</div>
                                                        <img src=\"{{ asset('images/')}}{{reservation.bien.images[0].image}}\" style=\"width:30%\">
                                                    </div>

                                                    <div class=\"mySlides\">
                                                        <div class=\"numbertext\">2 / 3</div>
                                                        <img src=\"{{ asset('images/')}}{{reservation.bien.images[2].image}}\" style=\"width:30%\">
                                                    </div>

                                                    <div class=\"mySlides\">
                                                        <div class=\"numbertext\">3 / 3</div>
                                                        <img src=\"{{ asset('images/')}}{{reservation.bien.images[1].image}}\" style=\"width:30%\">
                                                    </div>

                                                    <div class=\"row\" style=\"display:flex;margin-left:2px;height:500px;\">
                                                        <img class=\"demo cursor\" src=\"{{ asset('images/')}}{{reservation.bien.images[0].image}}\" style=\"width:10%;height:20%\" onclick=\"currentSlide(1)\" alt=\"The Woods\">
                                                        <img class=\"demo cursor\" src=\"{{ asset('images/')}}{{reservation.bien.images[1].image}}\" style=\"width:10%; height:20%\" onclick=\"currentSlide(2)\" alt=\"Northern Lights\">
                                                        <img class=\"demo cursor\" src=\"{{ asset('images/')}}{{reservation.bien.images[2].image}}\" style=\"width:10%; height:20%\" onclick=\"currentSlide(3)\" alt=\"Nature and sunrise\">
                                                    </div>
                                                </div>
                                            </font>
                                        </font>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class=\"col-md-3\">
                            <fieldset>

                                <div class=\"panel panel-success\" style=\"width:100%\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panneau-titre\">
                                            <font style=\"vertical-align: hériter;\">
                                                <font style=\"vertical-align: hériter;\"></font>INFO BIEN</font>
                                        </h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <font style=\"vertical-aligner: hériter;\">
                                            <font style=\"vertical-align: inherit;\">
                                                NOM:
                                                <p>{{reservation.Bien.nomBien}}</p>
                                                LOCALITE:
                                                <p>{{reservation.Bien.Localite.libelle}}</p>
                                                TYPE DE BIEN:
                                                <p>{{reservation.Bien.TypeBien.libelle}}</p>
                                                PRIX DE LOCATION:
                                                <p>{{reservation.Bien.prixlocation}}</p>
                                            </font>
                                        </font>
                                    </div>

                                    <div class=\"form-group\">
                                        <div class=\"col-lg-10\" \"col-lg-offset-2\">

                                            <button type=\"soumettre\" class=\"btn btn-primaire\">
                                                <font style=\"vertical-aligner: hériter;\">
                                                    <font style=\"vertical-aligner: hériter;\">
                                                        <a href=\"{{path ('contrat_reservation',{'id':reservation.id})}}\" class=\"btn btn-primary\">VALIDER</a>
                                                    </td>
                                                </font>
                                            </font >
                                        </button>

                                        <button type=\"soumettre\" class=\"btn btn-primaire\">
                                            <font style=\"vertical-aligner: hériter;\">
                                                <font style=\"vertical-aligner: hériter;\">
                                                    <a href=\"{{path ('list_reservation',{'id':reservation.id})}}\" class=\"btn btn-success\">RETOUR</a>
                                                </font>
                                            </font >
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </fieldset>

                </div>

                {%endfor%}
            </form>
        {% endblock %}

        {% block apropos %}{% endblock %}
        {% block partenaires %}{% endblock %}
        {% block galerie %}{% endblock %}

    {% endblock %}", "PremiumBundle:Admin:reservationinfo.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/Admin/reservationinfo.html.twig");
    }
}
