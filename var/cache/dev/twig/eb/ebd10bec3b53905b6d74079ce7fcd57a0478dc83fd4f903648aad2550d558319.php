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
        $__internal_f67b40e83a8de0a5920e8357302242c4072e147c28077cea5d80f9f876360814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f67b40e83a8de0a5920e8357302242c4072e147c28077cea5d80f9f876360814->enter($__internal_f67b40e83a8de0a5920e8357302242c4072e147c28077cea5d80f9f876360814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:reservationinfo.html.twig"));

        $__internal_d25255535ecb4e38fdb2a9d828c207cacb9a3aea7b33972c0cebff3232464493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25255535ecb4e38fdb2a9d828c207cacb9a3aea7b33972c0cebff3232464493->enter($__internal_d25255535ecb4e38fdb2a9d828c207cacb9a3aea7b33972c0cebff3232464493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:reservationinfo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f67b40e83a8de0a5920e8357302242c4072e147c28077cea5d80f9f876360814->leave($__internal_f67b40e83a8de0a5920e8357302242c4072e147c28077cea5d80f9f876360814_prof);

        
        $__internal_d25255535ecb4e38fdb2a9d828c207cacb9a3aea7b33972c0cebff3232464493->leave($__internal_d25255535ecb4e38fdb2a9d828c207cacb9a3aea7b33972c0cebff3232464493_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a6c645ddc8976974a0441c34272d7fefc3bb1e4a4dcc01d6f614286d63dc8ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6c645ddc8976974a0441c34272d7fefc3bb1e4a4dcc01d6f614286d63dc8ed->enter($__internal_0a6c645ddc8976974a0441c34272d7fefc3bb1e4a4dcc01d6f614286d63dc8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_85d0ce9e478671f65caee3bf16efe6624bf9b12b23610ee5e79cc6b7aed1b047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d0ce9e478671f65caee3bf16efe6624bf9b12b23610ee5e79cc6b7aed1b047->enter($__internal_85d0ce9e478671f65caee3bf16efe6624bf9b12b23610ee5e79cc6b7aed1b047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_85d0ce9e478671f65caee3bf16efe6624bf9b12b23610ee5e79cc6b7aed1b047->leave($__internal_85d0ce9e478671f65caee3bf16efe6624bf9b12b23610ee5e79cc6b7aed1b047_prof);

        
        $__internal_0a6c645ddc8976974a0441c34272d7fefc3bb1e4a4dcc01d6f614286d63dc8ed->leave($__internal_0a6c645ddc8976974a0441c34272d7fefc3bb1e4a4dcc01d6f614286d63dc8ed_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e99615722d169230c3a743806ad54476e0fa4a83ea13bbd70cb46d417f0abfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e99615722d169230c3a743806ad54476e0fa4a83ea13bbd70cb46d417f0abfc->enter($__internal_4e99615722d169230c3a743806ad54476e0fa4a83ea13bbd70cb46d417f0abfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0bb8a1721ba5e3a5df09d63c4537fb21be849dd90ae25c37623a118ad26e322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0bb8a1721ba5e3a5df09d63c4537fb21be849dd90ae25c37623a118ad26e322->enter($__internal_e0bb8a1721ba5e3a5df09d63c4537fb21be849dd90ae25c37623a118ad26e322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PremiumBundle:Admin:Detail";
        
        $__internal_e0bb8a1721ba5e3a5df09d63c4537fb21be849dd90ae25c37623a118ad26e322->leave($__internal_e0bb8a1721ba5e3a5df09d63c4537fb21be849dd90ae25c37623a118ad26e322_prof);

        
        $__internal_4e99615722d169230c3a743806ad54476e0fa4a83ea13bbd70cb46d417f0abfc->leave($__internal_4e99615722d169230c3a743806ad54476e0fa4a83ea13bbd70cb46d417f0abfc_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_260876255c84413b955f655d5629fefa33d21713cc776d3777a7f553c50aa522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_260876255c84413b955f655d5629fefa33d21713cc776d3777a7f553c50aa522->enter($__internal_260876255c84413b955f655d5629fefa33d21713cc776d3777a7f553c50aa522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_deb0dd9cc3c5061ede99131a0fa2d6b2b5c4efe6375ed543b0805835ec8935ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb0dd9cc3c5061ede99131a0fa2d6b2b5c4efe6375ed543b0805835ec8935ba->enter($__internal_deb0dd9cc3c5061ede99131a0fa2d6b2b5c4efe6375ed543b0805835ec8935ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.min.css"), "html", null, true);
        echo "\">

    ";
        
        $__internal_deb0dd9cc3c5061ede99131a0fa2d6b2b5c4efe6375ed543b0805835ec8935ba->leave($__internal_deb0dd9cc3c5061ede99131a0fa2d6b2b5c4efe6375ed543b0805835ec8935ba_prof);

        
        $__internal_260876255c84413b955f655d5629fefa33d21713cc776d3777a7f553c50aa522->leave($__internal_260876255c84413b955f655d5629fefa33d21713cc776d3777a7f553c50aa522_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b028d346f63b4ff923da8409b38b08125b1f0115006cb737bb2a79608aa68001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b028d346f63b4ff923da8409b38b08125b1f0115006cb737bb2a79608aa68001->enter($__internal_b028d346f63b4ff923da8409b38b08125b1f0115006cb737bb2a79608aa68001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a405efaec6cb7345d157cb490d394a524e3bcce0d6fb6cdbc3fb8ba113aaaf27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a405efaec6cb7345d157cb490d394a524e3bcce0d6fb6cdbc3fb8ba113aaaf27->enter($__internal_a405efaec6cb7345d157cb490d394a524e3bcce0d6fb6cdbc3fb8ba113aaaf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a405efaec6cb7345d157cb490d394a524e3bcce0d6fb6cdbc3fb8ba113aaaf27->leave($__internal_a405efaec6cb7345d157cb490d394a524e3bcce0d6fb6cdbc3fb8ba113aaaf27_prof);

        
        $__internal_b028d346f63b4ff923da8409b38b08125b1f0115006cb737bb2a79608aa68001->leave($__internal_b028d346f63b4ff923da8409b38b08125b1f0115006cb737bb2a79608aa68001_prof);

    }

    // line 14
    public function block_slide($context, array $blocks = array())
    {
        $__internal_6dd013bf6ff5349ca90d4fc852d4b49f9216ccc07955c401642128c4927b94fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd013bf6ff5349ca90d4fc852d4b49f9216ccc07955c401642128c4927b94fa->enter($__internal_6dd013bf6ff5349ca90d4fc852d4b49f9216ccc07955c401642128c4927b94fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_97803bef94d714876a8d441819104437ec01e922568848739e8e9b2f7611ae53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97803bef94d714876a8d441819104437ec01e922568848739e8e9b2f7611ae53->enter($__internal_97803bef94d714876a8d441819104437ec01e922568848739e8e9b2f7611ae53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        
        $__internal_97803bef94d714876a8d441819104437ec01e922568848739e8e9b2f7611ae53->leave($__internal_97803bef94d714876a8d441819104437ec01e922568848739e8e9b2f7611ae53_prof);

        
        $__internal_6dd013bf6ff5349ca90d4fc852d4b49f9216ccc07955c401642128c4927b94fa->leave($__internal_6dd013bf6ff5349ca90d4fc852d4b49f9216ccc07955c401642128c4927b94fa_prof);

    }

    // line 16
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_a80d8eddf467562e2127195b809f2a00efa4443f2f327be56fc293ca2bdf7a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a80d8eddf467562e2127195b809f2a00efa4443f2f327be56fc293ca2bdf7a6b->enter($__internal_a80d8eddf467562e2127195b809f2a00efa4443f2f327be56fc293ca2bdf7a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_a211456b62019cfbdb6dbf98ed8cfd7e0d210c0b43c6279a8f3e06a6dec17439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a211456b62019cfbdb6dbf98ed8cfd7e0d210c0b43c6279a8f3e06a6dec17439->enter($__internal_a211456b62019cfbdb6dbf98ed8cfd7e0d210c0b43c6279a8f3e06a6dec17439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        
        $__internal_a211456b62019cfbdb6dbf98ed8cfd7e0d210c0b43c6279a8f3e06a6dec17439->leave($__internal_a211456b62019cfbdb6dbf98ed8cfd7e0d210c0b43c6279a8f3e06a6dec17439_prof);

        
        $__internal_a80d8eddf467562e2127195b809f2a00efa4443f2f327be56fc293ca2bdf7a6b->leave($__internal_a80d8eddf467562e2127195b809f2a00efa4443f2f327be56fc293ca2bdf7a6b_prof);

    }

    // line 18
    public function block_offre($context, array $blocks = array())
    {
        $__internal_3cea4aad11c329cf9b9cda193d4061931bd5ff4c7ef67d3f6870bd466e463354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cea4aad11c329cf9b9cda193d4061931bd5ff4c7ef67d3f6870bd466e463354->enter($__internal_3cea4aad11c329cf9b9cda193d4061931bd5ff4c7ef67d3f6870bd466e463354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_a7186caa52f98ae744f96676500c2f8e649cb4d1c7876e2c7d2d3eabe3692570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7186caa52f98ae744f96676500c2f8e649cb4d1c7876e2c7d2d3eabe3692570->enter($__internal_a7186caa52f98ae744f96676500c2f8e649cb4d1c7876e2c7d2d3eabe3692570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

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
        
        $__internal_a7186caa52f98ae744f96676500c2f8e649cb4d1c7876e2c7d2d3eabe3692570->leave($__internal_a7186caa52f98ae744f96676500c2f8e649cb4d1c7876e2c7d2d3eabe3692570_prof);

        
        $__internal_3cea4aad11c329cf9b9cda193d4061931bd5ff4c7ef67d3f6870bd466e463354->leave($__internal_3cea4aad11c329cf9b9cda193d4061931bd5ff4c7ef67d3f6870bd466e463354_prof);

    }

    // line 158
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_6e7d55bea55669b76562300b2a636199d612e735dcccb654091fbba88621a586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7d55bea55669b76562300b2a636199d612e735dcccb654091fbba88621a586->enter($__internal_6e7d55bea55669b76562300b2a636199d612e735dcccb654091fbba88621a586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_1574eb18db4fa4f4503886c5bc9d6690f672d444b4426cd2689fec1428d52789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1574eb18db4fa4f4503886c5bc9d6690f672d444b4426cd2689fec1428d52789->enter($__internal_1574eb18db4fa4f4503886c5bc9d6690f672d444b4426cd2689fec1428d52789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        
        $__internal_1574eb18db4fa4f4503886c5bc9d6690f672d444b4426cd2689fec1428d52789->leave($__internal_1574eb18db4fa4f4503886c5bc9d6690f672d444b4426cd2689fec1428d52789_prof);

        
        $__internal_6e7d55bea55669b76562300b2a636199d612e735dcccb654091fbba88621a586->leave($__internal_6e7d55bea55669b76562300b2a636199d612e735dcccb654091fbba88621a586_prof);

    }

    // line 159
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_150467c7471531eba5eee2fce998f4076065886e7ad398d4575e5a38a83d4dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150467c7471531eba5eee2fce998f4076065886e7ad398d4575e5a38a83d4dbc->enter($__internal_150467c7471531eba5eee2fce998f4076065886e7ad398d4575e5a38a83d4dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_45c7109670b6b1772e3be8ad6f1e13c3f86a678580daa81dcbdf123216295b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c7109670b6b1772e3be8ad6f1e13c3f86a678580daa81dcbdf123216295b80->enter($__internal_45c7109670b6b1772e3be8ad6f1e13c3f86a678580daa81dcbdf123216295b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        
        $__internal_45c7109670b6b1772e3be8ad6f1e13c3f86a678580daa81dcbdf123216295b80->leave($__internal_45c7109670b6b1772e3be8ad6f1e13c3f86a678580daa81dcbdf123216295b80_prof);

        
        $__internal_150467c7471531eba5eee2fce998f4076065886e7ad398d4575e5a38a83d4dbc->leave($__internal_150467c7471531eba5eee2fce998f4076065886e7ad398d4575e5a38a83d4dbc_prof);

    }

    // line 160
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_1901fd6bd6dd946b9c238774642c1f02dfb6edb44a892340b94c214fb65947f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1901fd6bd6dd946b9c238774642c1f02dfb6edb44a892340b94c214fb65947f2->enter($__internal_1901fd6bd6dd946b9c238774642c1f02dfb6edb44a892340b94c214fb65947f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_99d368779d5cca43e47a7bfa5e7c4054c492c5df1a3122d93116ff25a260a2c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d368779d5cca43e47a7bfa5e7c4054c492c5df1a3122d93116ff25a260a2c1->enter($__internal_99d368779d5cca43e47a7bfa5e7c4054c492c5df1a3122d93116ff25a260a2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        
        $__internal_99d368779d5cca43e47a7bfa5e7c4054c492c5df1a3122d93116ff25a260a2c1->leave($__internal_99d368779d5cca43e47a7bfa5e7c4054c492c5df1a3122d93116ff25a260a2c1_prof);

        
        $__internal_1901fd6bd6dd946b9c238774642c1f02dfb6edb44a892340b94c214fb65947f2->leave($__internal_1901fd6bd6dd946b9c238774642c1f02dfb6edb44a892340b94c214fb65947f2_prof);

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
