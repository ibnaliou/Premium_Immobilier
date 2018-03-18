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
        $__internal_9d293a0582a64cf61a94a4003f58306c9625029ee3e40fc5b8915812b5fa6772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d293a0582a64cf61a94a4003f58306c9625029ee3e40fc5b8915812b5fa6772->enter($__internal_9d293a0582a64cf61a94a4003f58306c9625029ee3e40fc5b8915812b5fa6772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:reservationinfo.html.twig"));

        $__internal_06bb6d96171e7c9a0556364441ac11e5cb9447b3f42ce9380d86294178daa6b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bb6d96171e7c9a0556364441ac11e5cb9447b3f42ce9380d86294178daa6b3->enter($__internal_06bb6d96171e7c9a0556364441ac11e5cb9447b3f42ce9380d86294178daa6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:reservationinfo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d293a0582a64cf61a94a4003f58306c9625029ee3e40fc5b8915812b5fa6772->leave($__internal_9d293a0582a64cf61a94a4003f58306c9625029ee3e40fc5b8915812b5fa6772_prof);

        
        $__internal_06bb6d96171e7c9a0556364441ac11e5cb9447b3f42ce9380d86294178daa6b3->leave($__internal_06bb6d96171e7c9a0556364441ac11e5cb9447b3f42ce9380d86294178daa6b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df6bb8d0237b34566a2f0aed9655cd07c2b22be90c1120aaf90711803f0c0ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6bb8d0237b34566a2f0aed9655cd07c2b22be90c1120aaf90711803f0c0ad6->enter($__internal_df6bb8d0237b34566a2f0aed9655cd07c2b22be90c1120aaf90711803f0c0ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bbf4d16febc09d2306a3996230f56fe2a680fb8377a107f93140111b32972dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf4d16febc09d2306a3996230f56fe2a680fb8377a107f93140111b32972dc8->enter($__internal_bbf4d16febc09d2306a3996230f56fe2a680fb8377a107f93140111b32972dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_bbf4d16febc09d2306a3996230f56fe2a680fb8377a107f93140111b32972dc8->leave($__internal_bbf4d16febc09d2306a3996230f56fe2a680fb8377a107f93140111b32972dc8_prof);

        
        $__internal_df6bb8d0237b34566a2f0aed9655cd07c2b22be90c1120aaf90711803f0c0ad6->leave($__internal_df6bb8d0237b34566a2f0aed9655cd07c2b22be90c1120aaf90711803f0c0ad6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_237533e44c024bafa8cfffd2c3cbd760885ecb614ff48403b196458b7199d1cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237533e44c024bafa8cfffd2c3cbd760885ecb614ff48403b196458b7199d1cb->enter($__internal_237533e44c024bafa8cfffd2c3cbd760885ecb614ff48403b196458b7199d1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d2f771ab9a4fbe3986d849a2a220fb8efecac72c2db6717dffe8baf6eeb919ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f771ab9a4fbe3986d849a2a220fb8efecac72c2db6717dffe8baf6eeb919ef->enter($__internal_d2f771ab9a4fbe3986d849a2a220fb8efecac72c2db6717dffe8baf6eeb919ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PremiumBundle:Admin:Detail";
        
        $__internal_d2f771ab9a4fbe3986d849a2a220fb8efecac72c2db6717dffe8baf6eeb919ef->leave($__internal_d2f771ab9a4fbe3986d849a2a220fb8efecac72c2db6717dffe8baf6eeb919ef_prof);

        
        $__internal_237533e44c024bafa8cfffd2c3cbd760885ecb614ff48403b196458b7199d1cb->leave($__internal_237533e44c024bafa8cfffd2c3cbd760885ecb614ff48403b196458b7199d1cb_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a20e16d03cc80160343125f5add3202bb2e5be787205907cf6c4643a36be5d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a20e16d03cc80160343125f5add3202bb2e5be787205907cf6c4643a36be5d9->enter($__internal_5a20e16d03cc80160343125f5add3202bb2e5be787205907cf6c4643a36be5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f6210dc081f525916d0e8abdcc63c2f89fb79c8ac340cfada889d2fd7f5452ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6210dc081f525916d0e8abdcc63c2f89fb79c8ac340cfada889d2fd7f5452ca->enter($__internal_f6210dc081f525916d0e8abdcc63c2f89fb79c8ac340cfada889d2fd7f5452ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.min.css"), "html", null, true);
        echo "\">

    ";
        
        $__internal_f6210dc081f525916d0e8abdcc63c2f89fb79c8ac340cfada889d2fd7f5452ca->leave($__internal_f6210dc081f525916d0e8abdcc63c2f89fb79c8ac340cfada889d2fd7f5452ca_prof);

        
        $__internal_5a20e16d03cc80160343125f5add3202bb2e5be787205907cf6c4643a36be5d9->leave($__internal_5a20e16d03cc80160343125f5add3202bb2e5be787205907cf6c4643a36be5d9_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_5744dbb4a196659e3debf2d395b6de62f4987d3b6f9f371b45f844f3656cea5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5744dbb4a196659e3debf2d395b6de62f4987d3b6f9f371b45f844f3656cea5a->enter($__internal_5744dbb4a196659e3debf2d395b6de62f4987d3b6f9f371b45f844f3656cea5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc11b27c5e52cb8c0779c0fb7cbecd4d2d34119f6e818f3178ab665320ba6cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc11b27c5e52cb8c0779c0fb7cbecd4d2d34119f6e818f3178ab665320ba6cfc->enter($__internal_bc11b27c5e52cb8c0779c0fb7cbecd4d2d34119f6e818f3178ab665320ba6cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bc11b27c5e52cb8c0779c0fb7cbecd4d2d34119f6e818f3178ab665320ba6cfc->leave($__internal_bc11b27c5e52cb8c0779c0fb7cbecd4d2d34119f6e818f3178ab665320ba6cfc_prof);

        
        $__internal_5744dbb4a196659e3debf2d395b6de62f4987d3b6f9f371b45f844f3656cea5a->leave($__internal_5744dbb4a196659e3debf2d395b6de62f4987d3b6f9f371b45f844f3656cea5a_prof);

    }

    // line 14
    public function block_slide($context, array $blocks = array())
    {
        $__internal_dd4d9da42ad76ef5f1bb2bc4b4528811d12f5e4b3011e162e1ada0e4fdcb8bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4d9da42ad76ef5f1bb2bc4b4528811d12f5e4b3011e162e1ada0e4fdcb8bbd->enter($__internal_dd4d9da42ad76ef5f1bb2bc4b4528811d12f5e4b3011e162e1ada0e4fdcb8bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_70279fe242f5a60c0bcff7409f6831c96bb47c6194f9511e34dfda198846d26d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70279fe242f5a60c0bcff7409f6831c96bb47c6194f9511e34dfda198846d26d->enter($__internal_70279fe242f5a60c0bcff7409f6831c96bb47c6194f9511e34dfda198846d26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        
        $__internal_70279fe242f5a60c0bcff7409f6831c96bb47c6194f9511e34dfda198846d26d->leave($__internal_70279fe242f5a60c0bcff7409f6831c96bb47c6194f9511e34dfda198846d26d_prof);

        
        $__internal_dd4d9da42ad76ef5f1bb2bc4b4528811d12f5e4b3011e162e1ada0e4fdcb8bbd->leave($__internal_dd4d9da42ad76ef5f1bb2bc4b4528811d12f5e4b3011e162e1ada0e4fdcb8bbd_prof);

    }

    // line 16
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_9cfb4ed19dd98dd69a653d677960f70604391657a6e30c251da8405b45b1d426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cfb4ed19dd98dd69a653d677960f70604391657a6e30c251da8405b45b1d426->enter($__internal_9cfb4ed19dd98dd69a653d677960f70604391657a6e30c251da8405b45b1d426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_a38c3b6b990047ea49c2595690391dfd8d4d97ad42885f128fe18d87bec7203c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38c3b6b990047ea49c2595690391dfd8d4d97ad42885f128fe18d87bec7203c->enter($__internal_a38c3b6b990047ea49c2595690391dfd8d4d97ad42885f128fe18d87bec7203c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        
        $__internal_a38c3b6b990047ea49c2595690391dfd8d4d97ad42885f128fe18d87bec7203c->leave($__internal_a38c3b6b990047ea49c2595690391dfd8d4d97ad42885f128fe18d87bec7203c_prof);

        
        $__internal_9cfb4ed19dd98dd69a653d677960f70604391657a6e30c251da8405b45b1d426->leave($__internal_9cfb4ed19dd98dd69a653d677960f70604391657a6e30c251da8405b45b1d426_prof);

    }

    // line 18
    public function block_offre($context, array $blocks = array())
    {
        $__internal_cdc1c0f21afd793de5a18705d0b14466673b11b1e8fcb79e214604baa2d2d3d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc1c0f21afd793de5a18705d0b14466673b11b1e8fcb79e214604baa2d2d3d3->enter($__internal_cdc1c0f21afd793de5a18705d0b14466673b11b1e8fcb79e214604baa2d2d3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_cb37cfccde8fb9482321c5e6d7930aad13ee37388ca7f35d4f8ab6264376f576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb37cfccde8fb9482321c5e6d7930aad13ee37388ca7f35d4f8ab6264376f576->enter($__internal_cb37cfccde8fb9482321c5e6d7930aad13ee37388ca7f35d4f8ab6264376f576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

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
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "nomComplet", array())), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "adresse", array())), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "Localite", array()), "libelle", array())), "html", null, true);
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
        
        $__internal_cb37cfccde8fb9482321c5e6d7930aad13ee37388ca7f35d4f8ab6264376f576->leave($__internal_cb37cfccde8fb9482321c5e6d7930aad13ee37388ca7f35d4f8ab6264376f576_prof);

        
        $__internal_cdc1c0f21afd793de5a18705d0b14466673b11b1e8fcb79e214604baa2d2d3d3->leave($__internal_cdc1c0f21afd793de5a18705d0b14466673b11b1e8fcb79e214604baa2d2d3d3_prof);

    }

    // line 158
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_2d22f75bd1d42dde75ee694472860561e457b379e50291d164e3c9538cd873f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d22f75bd1d42dde75ee694472860561e457b379e50291d164e3c9538cd873f8->enter($__internal_2d22f75bd1d42dde75ee694472860561e457b379e50291d164e3c9538cd873f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_f9097f63dc65170343357a9d31030ae79d5732740cae769f202bc250875a3ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9097f63dc65170343357a9d31030ae79d5732740cae769f202bc250875a3ce0->enter($__internal_f9097f63dc65170343357a9d31030ae79d5732740cae769f202bc250875a3ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        
        $__internal_f9097f63dc65170343357a9d31030ae79d5732740cae769f202bc250875a3ce0->leave($__internal_f9097f63dc65170343357a9d31030ae79d5732740cae769f202bc250875a3ce0_prof);

        
        $__internal_2d22f75bd1d42dde75ee694472860561e457b379e50291d164e3c9538cd873f8->leave($__internal_2d22f75bd1d42dde75ee694472860561e457b379e50291d164e3c9538cd873f8_prof);

    }

    // line 159
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_e65e333a0d820e3bfb4c85d5e4acf0f04d6e8fdb2957a854f5d6bb7a942f572a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e65e333a0d820e3bfb4c85d5e4acf0f04d6e8fdb2957a854f5d6bb7a942f572a->enter($__internal_e65e333a0d820e3bfb4c85d5e4acf0f04d6e8fdb2957a854f5d6bb7a942f572a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_092e33522d89a643910e50f8bc736bdfcb9c1be2bf40682e7c309e6a51b1e797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092e33522d89a643910e50f8bc736bdfcb9c1be2bf40682e7c309e6a51b1e797->enter($__internal_092e33522d89a643910e50f8bc736bdfcb9c1be2bf40682e7c309e6a51b1e797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        
        $__internal_092e33522d89a643910e50f8bc736bdfcb9c1be2bf40682e7c309e6a51b1e797->leave($__internal_092e33522d89a643910e50f8bc736bdfcb9c1be2bf40682e7c309e6a51b1e797_prof);

        
        $__internal_e65e333a0d820e3bfb4c85d5e4acf0f04d6e8fdb2957a854f5d6bb7a942f572a->leave($__internal_e65e333a0d820e3bfb4c85d5e4acf0f04d6e8fdb2957a854f5d6bb7a942f572a_prof);

    }

    // line 160
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_ae6f08bfb9d8d5013ab50d7c11369be69ea30e120f048eb7484a9b6b1b48dc40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae6f08bfb9d8d5013ab50d7c11369be69ea30e120f048eb7484a9b6b1b48dc40->enter($__internal_ae6f08bfb9d8d5013ab50d7c11369be69ea30e120f048eb7484a9b6b1b48dc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_8f777ee7a5daade72e38d4617717fb10d764fa3bcedd600c292576c6d1314f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f777ee7a5daade72e38d4617717fb10d764fa3bcedd600c292576c6d1314f3f->enter($__internal_8f777ee7a5daade72e38d4617717fb10d764fa3bcedd600c292576c6d1314f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        
        $__internal_8f777ee7a5daade72e38d4617717fb10d764fa3bcedd600c292576c6d1314f3f->leave($__internal_8f777ee7a5daade72e38d4617717fb10d764fa3bcedd600c292576c6d1314f3f_prof);

        
        $__internal_ae6f08bfb9d8d5013ab50d7c11369be69ea30e120f048eb7484a9b6b1b48dc40->leave($__internal_ae6f08bfb9d8d5013ab50d7c11369be69ea30e120f048eb7484a9b6b1b48dc40_prof);

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
                                            NOM COMPLET :<p>{{reservation.Client.nomComplet|upper}}</p>
                                            Numero DE PIECE
                                            <p>{{reservation.Client.numPiece}}</p>
                                            Numero de TELEPHONE :
                                            <p>{{reservation.Client.tel}}</p>
                                            ADRESSE :
                                            <p>{{reservation.Client.adresse|upper}}</p>
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
                                                <p>{{reservation.Bien.Localite.libelle|upper}}</p>
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
