<?php

/* PremiumBundle:Admin:contrat.html.twig */
class __TwigTemplate_7db9b9dbfbd1a87273bca27647e810babe6becb66b632500dd9381cf068e3398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PremiumBundle::acceuil.html.twig", "PremiumBundle:Admin:contrat.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'slide' => array($this, 'block_slide'),
            'recherche' => array($this, 'block_recherche'),
            'apropos' => array($this, 'block_apropos'),
            'galerie' => array($this, 'block_galerie'),
            'partenaires' => array($this, 'block_partenaires'),
            'offre' => array($this, 'block_offre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PremiumBundle::acceuil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_353f9dd4ccf399d714488380a0c7a326fc027044b74504b44a9e879d891b25a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_353f9dd4ccf399d714488380a0c7a326fc027044b74504b44a9e879d891b25a2->enter($__internal_353f9dd4ccf399d714488380a0c7a326fc027044b74504b44a9e879d891b25a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:contrat.html.twig"));

        $__internal_2772281e8a73252c3f7285b58de138495e47c69afcbd446649126cd16a173d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2772281e8a73252c3f7285b58de138495e47c69afcbd446649126cd16a173d28->enter($__internal_2772281e8a73252c3f7285b58de138495e47c69afcbd446649126cd16a173d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:contrat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_353f9dd4ccf399d714488380a0c7a326fc027044b74504b44a9e879d891b25a2->leave($__internal_353f9dd4ccf399d714488380a0c7a326fc027044b74504b44a9e879d891b25a2_prof);

        
        $__internal_2772281e8a73252c3f7285b58de138495e47c69afcbd446649126cd16a173d28->leave($__internal_2772281e8a73252c3f7285b58de138495e47c69afcbd446649126cd16a173d28_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_14ca81040c8a124051ae53a5fdba7f192b903a9f58299b66c3e70cb56b074151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ca81040c8a124051ae53a5fdba7f192b903a9f58299b66c3e70cb56b074151->enter($__internal_14ca81040c8a124051ae53a5fdba7f192b903a9f58299b66c3e70cb56b074151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_38f5c6343a84ef16b8cbf7430f0191cb72b006fc4dc288421f0a1094bd70bee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f5c6343a84ef16b8cbf7430f0191cb72b006fc4dc288421f0a1094bd70bee3->enter($__internal_38f5c6343a84ef16b8cbf7430f0191cb72b006fc4dc288421f0a1094bd70bee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "

";
        
        $__internal_38f5c6343a84ef16b8cbf7430f0191cb72b006fc4dc288421f0a1094bd70bee3->leave($__internal_38f5c6343a84ef16b8cbf7430f0191cb72b006fc4dc288421f0a1094bd70bee3_prof);

        
        $__internal_14ca81040c8a124051ae53a5fdba7f192b903a9f58299b66c3e70cb56b074151->leave($__internal_14ca81040c8a124051ae53a5fdba7f192b903a9f58299b66c3e70cb56b074151_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_643fb7dd0787df2af2a38b7122fc7e86eb65f2fa2265c403dcb50b6c5e2d168a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643fb7dd0787df2af2a38b7122fc7e86eb65f2fa2265c403dcb50b6c5e2d168a->enter($__internal_643fb7dd0787df2af2a38b7122fc7e86eb65f2fa2265c403dcb50b6c5e2d168a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3be28e88a846d606653227fffbd41dee88e16e4e4f655068d1485bd407dbcce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be28e88a846d606653227fffbd41dee88e16e4e4f655068d1485bd407dbcce5->enter($__internal_3be28e88a846d606653227fffbd41dee88e16e4e4f655068d1485bd407dbcce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PremiumBundle:Admin:Adminimistrateur";
        
        $__internal_3be28e88a846d606653227fffbd41dee88e16e4e4f655068d1485bd407dbcce5->leave($__internal_3be28e88a846d606653227fffbd41dee88e16e4e4f655068d1485bd407dbcce5_prof);

        
        $__internal_643fb7dd0787df2af2a38b7122fc7e86eb65f2fa2265c403dcb50b6c5e2d168a->leave($__internal_643fb7dd0787df2af2a38b7122fc7e86eb65f2fa2265c403dcb50b6c5e2d168a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec5dd18c83e77932ce2da3a6547977f59469c3e4b9614ad6a15451ec0ad087c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5dd18c83e77932ce2da3a6547977f59469c3e4b9614ad6a15451ec0ad087c0->enter($__internal_ec5dd18c83e77932ce2da3a6547977f59469c3e4b9614ad6a15451ec0ad087c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9928e147d3bb61d01d35cc9b49c8dfb7c185e631018c7bd34c5cbfb5f9a228a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9928e147d3bb61d01d35cc9b49c8dfb7c185e631018c7bd34c5cbfb5f9a228a4->enter($__internal_9928e147d3bb61d01d35cc9b49c8dfb7c185e631018c7bd34c5cbfb5f9a228a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('slide', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('recherche', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('apropos', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('galerie', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('partenaires', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('offre', $context, $blocks);
        
        $__internal_9928e147d3bb61d01d35cc9b49c8dfb7c185e631018c7bd34c5cbfb5f9a228a4->leave($__internal_9928e147d3bb61d01d35cc9b49c8dfb7c185e631018c7bd34c5cbfb5f9a228a4_prof);

        
        $__internal_ec5dd18c83e77932ce2da3a6547977f59469c3e4b9614ad6a15451ec0ad087c0->leave($__internal_ec5dd18c83e77932ce2da3a6547977f59469c3e4b9614ad6a15451ec0ad087c0_prof);

    }

    // line 12
    public function block_slide($context, array $blocks = array())
    {
        $__internal_82006bb6ed419c0b0273e1ab73f24a4057914c1994bf851afc7567e8bf190f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82006bb6ed419c0b0273e1ab73f24a4057914c1994bf851afc7567e8bf190f78->enter($__internal_82006bb6ed419c0b0273e1ab73f24a4057914c1994bf851afc7567e8bf190f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_65c4216b7f00624e884040caea001eecc01ac7d4fbd1cd92c382d7a005f1d3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c4216b7f00624e884040caea001eecc01ac7d4fbd1cd92c382d7a005f1d3dc->enter($__internal_65c4216b7f00624e884040caea001eecc01ac7d4fbd1cd92c382d7a005f1d3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 13
        echo "
";
        
        $__internal_65c4216b7f00624e884040caea001eecc01ac7d4fbd1cd92c382d7a005f1d3dc->leave($__internal_65c4216b7f00624e884040caea001eecc01ac7d4fbd1cd92c382d7a005f1d3dc_prof);

        
        $__internal_82006bb6ed419c0b0273e1ab73f24a4057914c1994bf851afc7567e8bf190f78->leave($__internal_82006bb6ed419c0b0273e1ab73f24a4057914c1994bf851afc7567e8bf190f78_prof);

    }

    // line 16
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_571e0a1e573bfae8e0d9ee7a6367f1a92fbbbd12ed39a9f138f0fb45ea7a64c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571e0a1e573bfae8e0d9ee7a6367f1a92fbbbd12ed39a9f138f0fb45ea7a64c3->enter($__internal_571e0a1e573bfae8e0d9ee7a6367f1a92fbbbd12ed39a9f138f0fb45ea7a64c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_369ad1799eab08025652441df3e32f3167b2c3add7f7d77aec6dde0311bfb838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369ad1799eab08025652441df3e32f3167b2c3add7f7d77aec6dde0311bfb838->enter($__internal_369ad1799eab08025652441df3e32f3167b2c3add7f7d77aec6dde0311bfb838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        // line 17
        echo " 
";
        
        $__internal_369ad1799eab08025652441df3e32f3167b2c3add7f7d77aec6dde0311bfb838->leave($__internal_369ad1799eab08025652441df3e32f3167b2c3add7f7d77aec6dde0311bfb838_prof);

        
        $__internal_571e0a1e573bfae8e0d9ee7a6367f1a92fbbbd12ed39a9f138f0fb45ea7a64c3->leave($__internal_571e0a1e573bfae8e0d9ee7a6367f1a92fbbbd12ed39a9f138f0fb45ea7a64c3_prof);

    }

    // line 20
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_0b728ce412ef03e0731a209fcf661bb7cbc931bd8473f35272dd5bd1e41fc63a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b728ce412ef03e0731a209fcf661bb7cbc931bd8473f35272dd5bd1e41fc63a->enter($__internal_0b728ce412ef03e0731a209fcf661bb7cbc931bd8473f35272dd5bd1e41fc63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_b13891a124355f7179e7c33d84bf6d399a59d1ab4ec5a3a931adfe61eff99c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13891a124355f7179e7c33d84bf6d399a59d1ab4ec5a3a931adfe61eff99c53->enter($__internal_b13891a124355f7179e7c33d84bf6d399a59d1ab4ec5a3a931adfe61eff99c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        // line 21
        echo " 
";
        
        $__internal_b13891a124355f7179e7c33d84bf6d399a59d1ab4ec5a3a931adfe61eff99c53->leave($__internal_b13891a124355f7179e7c33d84bf6d399a59d1ab4ec5a3a931adfe61eff99c53_prof);

        
        $__internal_0b728ce412ef03e0731a209fcf661bb7cbc931bd8473f35272dd5bd1e41fc63a->leave($__internal_0b728ce412ef03e0731a209fcf661bb7cbc931bd8473f35272dd5bd1e41fc63a_prof);

    }

    // line 24
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_320ead3032a811bf8c19c5ba8c43742f208abd0cf6bf8edf3500ca4fdaa1e585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320ead3032a811bf8c19c5ba8c43742f208abd0cf6bf8edf3500ca4fdaa1e585->enter($__internal_320ead3032a811bf8c19c5ba8c43742f208abd0cf6bf8edf3500ca4fdaa1e585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_0ecabf83848525f2c3c0f429f031b719fc6f624729c52520732112d84215f276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ecabf83848525f2c3c0f429f031b719fc6f624729c52520732112d84215f276->enter($__internal_0ecabf83848525f2c3c0f429f031b719fc6f624729c52520732112d84215f276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        // line 25
        echo "
";
        
        $__internal_0ecabf83848525f2c3c0f429f031b719fc6f624729c52520732112d84215f276->leave($__internal_0ecabf83848525f2c3c0f429f031b719fc6f624729c52520732112d84215f276_prof);

        
        $__internal_320ead3032a811bf8c19c5ba8c43742f208abd0cf6bf8edf3500ca4fdaa1e585->leave($__internal_320ead3032a811bf8c19c5ba8c43742f208abd0cf6bf8edf3500ca4fdaa1e585_prof);

    }

    // line 28
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_e8862255f946acde6bb01d135fa30e9d8060901b6e606ae91ed16e99c350caff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8862255f946acde6bb01d135fa30e9d8060901b6e606ae91ed16e99c350caff->enter($__internal_e8862255f946acde6bb01d135fa30e9d8060901b6e606ae91ed16e99c350caff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_4f7af21ce8c660780f3a31ab8ed381d8817e5468810442e81a185670a56a2617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7af21ce8c660780f3a31ab8ed381d8817e5468810442e81a185670a56a2617->enter($__internal_4f7af21ce8c660780f3a31ab8ed381d8817e5468810442e81a185670a56a2617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        
        $__internal_4f7af21ce8c660780f3a31ab8ed381d8817e5468810442e81a185670a56a2617->leave($__internal_4f7af21ce8c660780f3a31ab8ed381d8817e5468810442e81a185670a56a2617_prof);

        
        $__internal_e8862255f946acde6bb01d135fa30e9d8060901b6e606ae91ed16e99c350caff->leave($__internal_e8862255f946acde6bb01d135fa30e9d8060901b6e606ae91ed16e99c350caff_prof);

    }

    // line 31
    public function block_offre($context, array $blocks = array())
    {
        $__internal_8212ef3c79985cd7e56087142f1d93e856c78bb2f398556781aad1183a06112b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8212ef3c79985cd7e56087142f1d93e856c78bb2f398556781aad1183a06112b->enter($__internal_8212ef3c79985cd7e56087142f1d93e856c78bb2f398556781aad1183a06112b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_5a989dfa0d9aafecebbbf86900ea5761cf0a9e8bb056b6f591c2a47d6de2e7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a989dfa0d9aafecebbbf86900ea5761cf0a9e8bb056b6f591c2a47d6de2e7c3->enter($__internal_5a989dfa0d9aafecebbbf86900ea5761cf0a9e8bb056b6f591c2a47d6de2e7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 32
        echo "<div>
<br><br><br><br><br><br>
</div>
<style>
h2,
h3, 
h4, 
h5{
 background-color: blue;
}
#delete{
 list-style-type: none;
}
</style>

 <div class=\"row\" id=\"contrat\">
 <div class=\"col-md-12\">
 <div class=\"panel panel-default dark-overlay\">
 <div class=\"panel-heading\">
 ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 52
            echo " <center><h1> VALIDATION DU CONTRAT DE ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "nomComplet", array()), "html", null, true);
            echo "<h1></center>
 </div>
 <div class=\"panel-body row\">
 <div class=\"col-md-12\">
 <div class=\"panel panel-primary panel-body row\">
 <div class=\"col-md-12\">
 <div class=\"panel panel-blue\">
 <div class=\"panel-heading dark-overlay\">
 <h2> DETAILS DU BIEN RESERVER <h2>
 </div>
 <div class=\"panel-body row\">
 <ul class=\"col-md-4 ul_detail\">
 <li>
 <span class=\"right\"> NOM DU BIEN </span> :
 </li>
 <li>
 <span class=\"right\"> LOCALITE </span> :
 </li>
 <li>
 <span class=\"right\"> TYPE DU BIEN </span> :
 </li>
 
 
 </ul>
 <ul class=\"col-md-8 ul_detail\" id=\"delete\">
 <li>
 <span class=\"front\"> ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "nomBien", array()), "html", null, true);
            echo " </span>
 </li>
 <li>
 <span class=\"front\"> ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "Localite", array()), "libelle", array()), "html", null, true);
            echo " </span>
 </li>
 
 <li>
 <span class=\"front\"> ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "TypeBien", array()), "libelle", array()), "html", null, true);
            echo " </span>
 </li>
 
 
 </ul>
 </div>
 </div>
 </div>
 <!--/.col-->
 <div class=\"col-md-12\">
 <div class=\"panel panel-blue\">
 <div class=\"panel-heading dark-overlay\">
<h3> DETAILS DU CLIENT<h3>
 </div>
 <div class=\"panel-body row\">
 <ul class=\"col-md-4 ul_detail\">
 <li>
 <span class=\"right\"> PRENOM & NOM </span> :
 </li>
 <li>
 <span class=\"right\"> CNI </span> :
 </li>
 <li>
 <span class=\"right\"> ADRESSE </span> :
 </li>
 <li>
 <span class=\"right\"> E-mail </span> :
 </li>
 <li>
 <span class=\"right\"> TELEPHONE </span> :
 </li>
 </ul>
 <ul class=\"col-md-8 ul_detail\" id=\"delete\">
 <li>
 <span class=\"front\"> ";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "nomComplet", array()), "html", null, true);
            echo "</span>
 </li>
 <li>
 <span class=\"front\"> ";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "numPiece", array()), "html", null, true);
            echo " </span>
 </li>
 <li>
 <span class=\"front\"";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "adresse", array()), "html", null, true);
            echo " </span>
 </li>
 <li>
 <span class=\"front\"> ";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "email", array()), "html", null, true);
            echo "</span>
 </li>
 <li>
 <span class=\"front\"> ";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "tel", array()), "html", null, true);
            echo " </span>
 </li>
 </ul>
 </div>
 </div>
 </div>
 <!--/.col-->
 <div class=\"col-md-12\">
 <div class=\"panel panel-blue\">
 <div class=\"panel-heading dark-overlay\">
 <h4>REGLEMENT</h4>
 </div>
 <div class=\"panel-body row\">
 <ul class=\"col-md-4 ul_detail\">
 <li>
 <span class=\"droite\"> MENSUALITE </span>
 </li>
 <li>
 <span class=\"droite\"> CAUTION </span> 
 </li>
 <li>
 <span class=\"droite\"> TOTAL</span>
 </li>
 <br>
 
 <form method=\"POST\" class=\"form-group\">
 <div class=\"checkbox\">
 <label style=\"font-weight: bold;\">
 <input type=\"checkbox\" id=\"contrat_renouvable\" value=\"contrat de 1 an renouvelable\"> Contrat de 1 an renouvelable
 </label>
 <br>
 </div>
 </form>
 
 </ul>
 <ul class=\"col-md-8 ul_detail\" id=\"delete\">
 <li>
 <span class=\"front\"> ";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "prixlocation", array()), "html", null, true);
            echo " CFA </span>
 </li>
 <li>
 <span class=\"front\"> ";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "prixlocation", array()), "html", null, true);
            echo " CFA</span>
 
 </li>
 <li>
 <span class=\"front\"> ";
            // line 175
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "prixlocation", array()) * 2), "html", null, true);
            echo " CFA</span>
 </li>
 </ul>
 </div>
 </div>
 </div>
 <!--/.col-->
 
 <div class=\"col-md-12\">
 <div class=\"panel panel-blue\">
 <div class=\"panel-heading dark-overlay\">
 <h5>TERMES DU CONTRAT</h5>
 </div>
 <div class=\"panel-body row\">
 <div class=\"col-md-12\">
 <form method=\"POST\" action\"";
            // line 190
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat_reservation");
            echo "\" class=\"form-group\">
 <div class=\"form-group\">
 <label>TERMES ET CONDITIONS DU CONTRAT</label>
 <center>
 ";
            // line 194
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["textcontrat"] ?? $this->getContext($context, "textcontrat")));
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 195
                echo " <textarea id=\"aImprimer\" class=\"form-control\" rows=\"4\" readonly>
 ";
                // line 196
                echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "text", array()), "html", null, true);
                echo "
 </textarea>
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo " </center>
 </div>
 <div class=\"radio\">
 <label style=\"font-weight: bold;\">
 <input type=\"radio\" name=\"able\" class=\"able\" value=\"accepter\" id=\"active\" > ACCEPTER
 </label>
 <label style=\"font-weight: bold;\">
 <input type=\"radio\" name=\"denied\" class=\"denied\" value=\"refuser\"> REFUSER
 </label>
 </div>

 <input type=\"hidden\" name=\"idclient\" value=\"";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "id", array()), "html", null, true);
            echo "\" />
 <input type=\"hidden\" name=\"idbien\" value=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "id", array()), "html", null, true);
            echo "\" />
 <input type=\"hidden\" name=\"caution\" value=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "prixlocation", array()), "html", null, true);
            echo "\" />
 <input type=\"hidden\" name=\"montant\" value=\"";
            // line 213
            echo twig_escape_filter($this->env, (2 * $this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "prixlocation", array())), "html", null, true);
            echo "\" />
 
 <input style=\"color: #1a2b3c;\" id=\"print\" type=\"submit\" value=\"VALIDER\" class=\"btn btn-primary\"> 
 </form>
 </div>
 </di>
 </div>
 </div>
 <!--/.col-->
 </div>
 </div>
 </div>
 </div>
 </div>
 <div class=\"col-sm-12\">
 &nbsp;
 </div>
 <!--/.col-->
 <script type=\"text/javascript\">
 \$(document).ready(function() { 
 \$('#active').click(function () {
 if(\$(\"#active\").is(':checked')){
 \$('#print').css('visibility','visible'); 
 }else{
 \$('#print').css('visibility','hidden'); 
 }
 });
 });
</script> 
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "
 

";
        
        $__internal_5a989dfa0d9aafecebbbf86900ea5761cf0a9e8bb056b6f591c2a47d6de2e7c3->leave($__internal_5a989dfa0d9aafecebbbf86900ea5761cf0a9e8bb056b6f591c2a47d6de2e7c3_prof);

        
        $__internal_8212ef3c79985cd7e56087142f1d93e856c78bb2f398556781aad1183a06112b->leave($__internal_8212ef3c79985cd7e56087142f1d93e856c78bb2f398556781aad1183a06112b_prof);

    }

    public function getTemplateName()
    {
        return "PremiumBundle:Admin:contrat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 243,  490 => 213,  486 => 212,  482 => 211,  478 => 210,  465 => 199,  456 => 196,  453 => 195,  449 => 194,  442 => 190,  424 => 175,  417 => 171,  411 => 168,  371 => 131,  365 => 128,  359 => 125,  353 => 122,  347 => 119,  310 => 85,  303 => 81,  297 => 78,  267 => 52,  263 => 51,  242 => 32,  233 => 31,  216 => 28,  205 => 25,  196 => 24,  185 => 21,  176 => 20,  165 => 17,  156 => 16,  145 => 13,  136 => 12,  126 => 31,  123 => 30,  121 => 28,  118 => 27,  116 => 24,  113 => 23,  111 => 20,  108 => 19,  106 => 16,  103 => 15,  101 => 12,  98 => 11,  89 => 10,  71 => 5,  59 => 6,  57 => 5,  48 => 4,  11 => 1,);
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
{% block title %}PremiumBundle:Admin:Adminimistrateur{% endblock %}


{% endblock %}

{% block body %}

{% block slide %}

{% endblock %}

{% block recherche %}
 
{% endblock %}

{% block apropos %}
 
{% endblock %}

{% block galerie %}

{% endblock %}

{% block partenaires %}
{% endblock %}

{% block offre %}
<div>
<br><br><br><br><br><br>
</div>
<style>
h2,
h3, 
h4, 
h5{
 background-color: blue;
}
#delete{
 list-style-type: none;
}
</style>

 <div class=\"row\" id=\"contrat\">
 <div class=\"col-md-12\">
 <div class=\"panel panel-default dark-overlay\">
 <div class=\"panel-heading\">
 {%for reservation in reservations %}
 <center><h1> VALIDATION DU CONTRAT DE {{reservation.Client.nomComplet}}<h1></center>
 </div>
 <div class=\"panel-body row\">
 <div class=\"col-md-12\">
 <div class=\"panel panel-primary panel-body row\">
 <div class=\"col-md-12\">
 <div class=\"panel panel-blue\">
 <div class=\"panel-heading dark-overlay\">
 <h2> DETAILS DU BIEN RESERVER <h2>
 </div>
 <div class=\"panel-body row\">
 <ul class=\"col-md-4 ul_detail\">
 <li>
 <span class=\"right\"> NOM DU BIEN </span> :
 </li>
 <li>
 <span class=\"right\"> LOCALITE </span> :
 </li>
 <li>
 <span class=\"right\"> TYPE DU BIEN </span> :
 </li>
 
 
 </ul>
 <ul class=\"col-md-8 ul_detail\" id=\"delete\">
 <li>
 <span class=\"front\"> {{reservation.Bien.nomBien}} </span>
 </li>
 <li>
 <span class=\"front\"> {{reservation.Bien.Localite.libelle}} </span>
 </li>
 
 <li>
 <span class=\"front\"> {{reservation.Bien.TypeBien.libelle}} </span>
 </li>
 
 
 </ul>
 </div>
 </div>
 </div>
 <!--/.col-->
 <div class=\"col-md-12\">
 <div class=\"panel panel-blue\">
 <div class=\"panel-heading dark-overlay\">
<h3> DETAILS DU CLIENT<h3>
 </div>
 <div class=\"panel-body row\">
 <ul class=\"col-md-4 ul_detail\">
 <li>
 <span class=\"right\"> PRENOM & NOM </span> :
 </li>
 <li>
 <span class=\"right\"> CNI </span> :
 </li>
 <li>
 <span class=\"right\"> ADRESSE </span> :
 </li>
 <li>
 <span class=\"right\"> E-mail </span> :
 </li>
 <li>
 <span class=\"right\"> TELEPHONE </span> :
 </li>
 </ul>
 <ul class=\"col-md-8 ul_detail\" id=\"delete\">
 <li>
 <span class=\"front\"> {{reservation.Client.nomComplet}}</span>
 </li>
 <li>
 <span class=\"front\"> {{reservation.Client.numPiece}} </span>
 </li>
 <li>
 <span class=\"front\"{{reservation.Client.adresse}} </span>
 </li>
 <li>
 <span class=\"front\"> {{reservation.Client.email}}</span>
 </li>
 <li>
 <span class=\"front\"> {{reservation.Client.tel}} </span>
 </li>
 </ul>
 </div>
 </div>
 </div>
 <!--/.col-->
 <div class=\"col-md-12\">
 <div class=\"panel panel-blue\">
 <div class=\"panel-heading dark-overlay\">
 <h4>REGLEMENT</h4>
 </div>
 <div class=\"panel-body row\">
 <ul class=\"col-md-4 ul_detail\">
 <li>
 <span class=\"droite\"> MENSUALITE </span>
 </li>
 <li>
 <span class=\"droite\"> CAUTION </span> 
 </li>
 <li>
 <span class=\"droite\"> TOTAL</span>
 </li>
 <br>
 
 <form method=\"POST\" class=\"form-group\">
 <div class=\"checkbox\">
 <label style=\"font-weight: bold;\">
 <input type=\"checkbox\" id=\"contrat_renouvable\" value=\"contrat de 1 an renouvelable\"> Contrat de 1 an renouvelable
 </label>
 <br>
 </div>
 </form>
 
 </ul>
 <ul class=\"col-md-8 ul_detail\" id=\"delete\">
 <li>
 <span class=\"front\"> {{ reservation.Bien.prixlocation }} CFA </span>
 </li>
 <li>
 <span class=\"front\"> {{ reservation.Bien.prixlocation }} CFA</span>
 
 </li>
 <li>
 <span class=\"front\"> {{ reservation.Bien.prixlocation *2 }} CFA</span>
 </li>
 </ul>
 </div>
 </div>
 </div>
 <!--/.col-->
 
 <div class=\"col-md-12\">
 <div class=\"panel panel-blue\">
 <div class=\"panel-heading dark-overlay\">
 <h5>TERMES DU CONTRAT</h5>
 </div>
 <div class=\"panel-body row\">
 <div class=\"col-md-12\">
 <form method=\"POST\" action\"{{path ('contrat_reservation')}}\" class=\"form-group\">
 <div class=\"form-group\">
 <label>TERMES ET CONDITIONS DU CONTRAT</label>
 <center>
 {%for text in textcontrat %}
 <textarea id=\"aImprimer\" class=\"form-control\" rows=\"4\" readonly>
 {{text.text}}
 </textarea>
 {%endfor%}
 </center>
 </div>
 <div class=\"radio\">
 <label style=\"font-weight: bold;\">
 <input type=\"radio\" name=\"able\" class=\"able\" value=\"accepter\" id=\"active\" > ACCEPTER
 </label>
 <label style=\"font-weight: bold;\">
 <input type=\"radio\" name=\"denied\" class=\"denied\" value=\"refuser\"> REFUSER
 </label>
 </div>

 <input type=\"hidden\" name=\"idclient\" value=\"{{reservation.Client.id}}\" />
 <input type=\"hidden\" name=\"idbien\" value=\"{{reservation.Bien.id}}\" />
 <input type=\"hidden\" name=\"caution\" value=\"{{reservation.Bien.prixlocation}}\" />
 <input type=\"hidden\" name=\"montant\" value=\"{{2 * reservation.Bien.prixlocation}}\" />
 
 <input style=\"color: #1a2b3c;\" id=\"print\" type=\"submit\" value=\"VALIDER\" class=\"btn btn-primary\"> 
 </form>
 </div>
 </di>
 </div>
 </div>
 <!--/.col-->
 </div>
 </div>
 </div>
 </div>
 </div>
 <div class=\"col-sm-12\">
 &nbsp;
 </div>
 <!--/.col-->
 <script type=\"text/javascript\">
 \$(document).ready(function() { 
 \$('#active').click(function () {
 if(\$(\"#active\").is(':checked')){
 \$('#print').css('visibility','visible'); 
 }else{
 \$('#print').css('visibility','hidden'); 
 }
 });
 });
</script> 
 {% endfor %}

 

{% endblock %}
{% endblock %}", "PremiumBundle:Admin:contrat.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/Admin/contrat.html.twig");
    }
}
