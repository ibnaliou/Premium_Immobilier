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
        $__internal_0410ac67dd56306ee6aa55df78075ca35e0d2201db110f8a07fc6ca72ebc5bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0410ac67dd56306ee6aa55df78075ca35e0d2201db110f8a07fc6ca72ebc5bd2->enter($__internal_0410ac67dd56306ee6aa55df78075ca35e0d2201db110f8a07fc6ca72ebc5bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:contrat.html.twig"));

        $__internal_b31a4a17021a3d309947d5599790541ff42f8986522417a6dc67a44236f64066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31a4a17021a3d309947d5599790541ff42f8986522417a6dc67a44236f64066->enter($__internal_b31a4a17021a3d309947d5599790541ff42f8986522417a6dc67a44236f64066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:contrat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0410ac67dd56306ee6aa55df78075ca35e0d2201db110f8a07fc6ca72ebc5bd2->leave($__internal_0410ac67dd56306ee6aa55df78075ca35e0d2201db110f8a07fc6ca72ebc5bd2_prof);

        
        $__internal_b31a4a17021a3d309947d5599790541ff42f8986522417a6dc67a44236f64066->leave($__internal_b31a4a17021a3d309947d5599790541ff42f8986522417a6dc67a44236f64066_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_e003e36c1df97a1292bf3d6d64be0d875a3b9138b5febb4dde30ee0d32028e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e003e36c1df97a1292bf3d6d64be0d875a3b9138b5febb4dde30ee0d32028e1b->enter($__internal_e003e36c1df97a1292bf3d6d64be0d875a3b9138b5febb4dde30ee0d32028e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_43b0ba6639bb502ba673f151ae62e213255cc2bdabe1a3c987c1c8a96a246d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b0ba6639bb502ba673f151ae62e213255cc2bdabe1a3c987c1c8a96a246d95->enter($__internal_43b0ba6639bb502ba673f151ae62e213255cc2bdabe1a3c987c1c8a96a246d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "

";
        
        $__internal_43b0ba6639bb502ba673f151ae62e213255cc2bdabe1a3c987c1c8a96a246d95->leave($__internal_43b0ba6639bb502ba673f151ae62e213255cc2bdabe1a3c987c1c8a96a246d95_prof);

        
        $__internal_e003e36c1df97a1292bf3d6d64be0d875a3b9138b5febb4dde30ee0d32028e1b->leave($__internal_e003e36c1df97a1292bf3d6d64be0d875a3b9138b5febb4dde30ee0d32028e1b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c7847d4a8ad9e8167dc5c29afccbde807956482e77837707a5426428c9b4c32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7847d4a8ad9e8167dc5c29afccbde807956482e77837707a5426428c9b4c32->enter($__internal_4c7847d4a8ad9e8167dc5c29afccbde807956482e77837707a5426428c9b4c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_415dde04c47d33ee3d5e4bdcab9aa915bf1c322c27b902de38376fbcaad32947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415dde04c47d33ee3d5e4bdcab9aa915bf1c322c27b902de38376fbcaad32947->enter($__internal_415dde04c47d33ee3d5e4bdcab9aa915bf1c322c27b902de38376fbcaad32947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PremiumBundle:Admin:Adminimistrateur";
        
        $__internal_415dde04c47d33ee3d5e4bdcab9aa915bf1c322c27b902de38376fbcaad32947->leave($__internal_415dde04c47d33ee3d5e4bdcab9aa915bf1c322c27b902de38376fbcaad32947_prof);

        
        $__internal_4c7847d4a8ad9e8167dc5c29afccbde807956482e77837707a5426428c9b4c32->leave($__internal_4c7847d4a8ad9e8167dc5c29afccbde807956482e77837707a5426428c9b4c32_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf9e2dbc3f676ca54312ccbb6180ffc28cdbd20cbb7a0477cfca9fcb3e89f173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf9e2dbc3f676ca54312ccbb6180ffc28cdbd20cbb7a0477cfca9fcb3e89f173->enter($__internal_cf9e2dbc3f676ca54312ccbb6180ffc28cdbd20cbb7a0477cfca9fcb3e89f173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5362aa05c99486d18829f614b38d725b706be3c465423f5a04685a083377f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5362aa05c99486d18829f614b38d725b706be3c465423f5a04685a083377f12->enter($__internal_b5362aa05c99486d18829f614b38d725b706be3c465423f5a04685a083377f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b5362aa05c99486d18829f614b38d725b706be3c465423f5a04685a083377f12->leave($__internal_b5362aa05c99486d18829f614b38d725b706be3c465423f5a04685a083377f12_prof);

        
        $__internal_cf9e2dbc3f676ca54312ccbb6180ffc28cdbd20cbb7a0477cfca9fcb3e89f173->leave($__internal_cf9e2dbc3f676ca54312ccbb6180ffc28cdbd20cbb7a0477cfca9fcb3e89f173_prof);

    }

    // line 12
    public function block_slide($context, array $blocks = array())
    {
        $__internal_58744e49da10a672e985bfbe1328947c10f80947559e5b85880721104aef997b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58744e49da10a672e985bfbe1328947c10f80947559e5b85880721104aef997b->enter($__internal_58744e49da10a672e985bfbe1328947c10f80947559e5b85880721104aef997b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_a4d195ead7fba2e4b39c42199e545f15ce6dd788f2a64645a152d7217fdf67cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d195ead7fba2e4b39c42199e545f15ce6dd788f2a64645a152d7217fdf67cb->enter($__internal_a4d195ead7fba2e4b39c42199e545f15ce6dd788f2a64645a152d7217fdf67cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 13
        echo "
";
        
        $__internal_a4d195ead7fba2e4b39c42199e545f15ce6dd788f2a64645a152d7217fdf67cb->leave($__internal_a4d195ead7fba2e4b39c42199e545f15ce6dd788f2a64645a152d7217fdf67cb_prof);

        
        $__internal_58744e49da10a672e985bfbe1328947c10f80947559e5b85880721104aef997b->leave($__internal_58744e49da10a672e985bfbe1328947c10f80947559e5b85880721104aef997b_prof);

    }

    // line 16
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_412ecb61b2d9eadce5b0c56d03afcc805898879b532ce2880a841fe983dae441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_412ecb61b2d9eadce5b0c56d03afcc805898879b532ce2880a841fe983dae441->enter($__internal_412ecb61b2d9eadce5b0c56d03afcc805898879b532ce2880a841fe983dae441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_f493a58ed95fce70c636c1ba26eb0321a283c6d2d65ba7b01487604acb9fde85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f493a58ed95fce70c636c1ba26eb0321a283c6d2d65ba7b01487604acb9fde85->enter($__internal_f493a58ed95fce70c636c1ba26eb0321a283c6d2d65ba7b01487604acb9fde85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        // line 17
        echo " 
";
        
        $__internal_f493a58ed95fce70c636c1ba26eb0321a283c6d2d65ba7b01487604acb9fde85->leave($__internal_f493a58ed95fce70c636c1ba26eb0321a283c6d2d65ba7b01487604acb9fde85_prof);

        
        $__internal_412ecb61b2d9eadce5b0c56d03afcc805898879b532ce2880a841fe983dae441->leave($__internal_412ecb61b2d9eadce5b0c56d03afcc805898879b532ce2880a841fe983dae441_prof);

    }

    // line 20
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_16c6da25d25825897727bc79382abe9b364a0daae676990a9dc9adcd4862d4d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c6da25d25825897727bc79382abe9b364a0daae676990a9dc9adcd4862d4d1->enter($__internal_16c6da25d25825897727bc79382abe9b364a0daae676990a9dc9adcd4862d4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_21b96b138ae04fcb926723c62ad209f595a3f55294a69952e2791e833600ef47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b96b138ae04fcb926723c62ad209f595a3f55294a69952e2791e833600ef47->enter($__internal_21b96b138ae04fcb926723c62ad209f595a3f55294a69952e2791e833600ef47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        // line 21
        echo " 
";
        
        $__internal_21b96b138ae04fcb926723c62ad209f595a3f55294a69952e2791e833600ef47->leave($__internal_21b96b138ae04fcb926723c62ad209f595a3f55294a69952e2791e833600ef47_prof);

        
        $__internal_16c6da25d25825897727bc79382abe9b364a0daae676990a9dc9adcd4862d4d1->leave($__internal_16c6da25d25825897727bc79382abe9b364a0daae676990a9dc9adcd4862d4d1_prof);

    }

    // line 24
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_5cd05a7dd35b9e4b97de9809ef20afe636aec1a352ee65e90e8ba04243bddcab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd05a7dd35b9e4b97de9809ef20afe636aec1a352ee65e90e8ba04243bddcab->enter($__internal_5cd05a7dd35b9e4b97de9809ef20afe636aec1a352ee65e90e8ba04243bddcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_f613e60e7b7cee9c8f42d3fd974726d219a6bb6cdba30d4881bf7f0ed1056c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f613e60e7b7cee9c8f42d3fd974726d219a6bb6cdba30d4881bf7f0ed1056c97->enter($__internal_f613e60e7b7cee9c8f42d3fd974726d219a6bb6cdba30d4881bf7f0ed1056c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        // line 25
        echo "
";
        
        $__internal_f613e60e7b7cee9c8f42d3fd974726d219a6bb6cdba30d4881bf7f0ed1056c97->leave($__internal_f613e60e7b7cee9c8f42d3fd974726d219a6bb6cdba30d4881bf7f0ed1056c97_prof);

        
        $__internal_5cd05a7dd35b9e4b97de9809ef20afe636aec1a352ee65e90e8ba04243bddcab->leave($__internal_5cd05a7dd35b9e4b97de9809ef20afe636aec1a352ee65e90e8ba04243bddcab_prof);

    }

    // line 28
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_de7a66bf8d9aaa0cb5fc95fc40fa241e7e4b31fa1c2097b447eb143f9290ca4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de7a66bf8d9aaa0cb5fc95fc40fa241e7e4b31fa1c2097b447eb143f9290ca4b->enter($__internal_de7a66bf8d9aaa0cb5fc95fc40fa241e7e4b31fa1c2097b447eb143f9290ca4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_5af10b96a98c94ffc9ec156776215dde8144a3309985677e1c06fcbc17598a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af10b96a98c94ffc9ec156776215dde8144a3309985677e1c06fcbc17598a28->enter($__internal_5af10b96a98c94ffc9ec156776215dde8144a3309985677e1c06fcbc17598a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        
        $__internal_5af10b96a98c94ffc9ec156776215dde8144a3309985677e1c06fcbc17598a28->leave($__internal_5af10b96a98c94ffc9ec156776215dde8144a3309985677e1c06fcbc17598a28_prof);

        
        $__internal_de7a66bf8d9aaa0cb5fc95fc40fa241e7e4b31fa1c2097b447eb143f9290ca4b->leave($__internal_de7a66bf8d9aaa0cb5fc95fc40fa241e7e4b31fa1c2097b447eb143f9290ca4b_prof);

    }

    // line 31
    public function block_offre($context, array $blocks = array())
    {
        $__internal_b9579dcddf63e645406e294c5ee1df20c2a16cff6d9e1934d99df54b5c152fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9579dcddf63e645406e294c5ee1df20c2a16cff6d9e1934d99df54b5c152fc9->enter($__internal_b9579dcddf63e645406e294c5ee1df20c2a16cff6d9e1934d99df54b5c152fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_33b51912d8cda8c60ff0541c7cb04df54f2cc9e3cf3465f1af9d331412ca8510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b51912d8cda8c60ff0541c7cb04df54f2cc9e3cf3465f1af9d331412ca8510->enter($__internal_33b51912d8cda8c60ff0541c7cb04df54f2cc9e3cf3465f1af9d331412ca8510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 32
        echo "<div>
<br><br><br><br><br><br>
</div>
<style>
.h2,
h3, 
h4, 
h5{
 background-color: orange;
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
 <h2 class=\"h2\"> DETAILS DU BIEN RESERVER <h2>
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
 <form method=\"POST\" action=\"";
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "prixlocation", array()), "html", null, true);
            echo "\" />
 
<a href=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("print_reservation", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\" > <input style=\"color: #1a2b3c;\" id=\"print\" type=\"submit\" value=\"VALIDER\" class=\"btn btn-primary\"></a> 
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
 
</script> 
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "
 

";
        
        $__internal_33b51912d8cda8c60ff0541c7cb04df54f2cc9e3cf3465f1af9d331412ca8510->leave($__internal_33b51912d8cda8c60ff0541c7cb04df54f2cc9e3cf3465f1af9d331412ca8510_prof);

        
        $__internal_b9579dcddf63e645406e294c5ee1df20c2a16cff6d9e1934d99df54b5c152fc9->leave($__internal_b9579dcddf63e645406e294c5ee1df20c2a16cff6d9e1934d99df54b5c152fc9_prof);

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
        return array (  521 => 235,  495 => 215,  490 => 213,  486 => 212,  482 => 211,  478 => 210,  465 => 199,  456 => 196,  453 => 195,  449 => 194,  442 => 190,  424 => 175,  417 => 171,  411 => 168,  371 => 131,  365 => 128,  359 => 125,  353 => 122,  347 => 119,  310 => 85,  303 => 81,  297 => 78,  267 => 52,  263 => 51,  242 => 32,  233 => 31,  216 => 28,  205 => 25,  196 => 24,  185 => 21,  176 => 20,  165 => 17,  156 => 16,  145 => 13,  136 => 12,  126 => 31,  123 => 30,  121 => 28,  118 => 27,  116 => 24,  113 => 23,  111 => 20,  108 => 19,  106 => 16,  103 => 15,  101 => 12,  98 => 11,  89 => 10,  71 => 5,  59 => 6,  57 => 5,  48 => 4,  11 => 1,);
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
.h2,
h3, 
h4, 
h5{
 background-color: orange;
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
 <h2 class=\"h2\"> DETAILS DU BIEN RESERVER <h2>
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
 <form method=\"POST\" action=\"{{path ('contrat_reservation')}}\" class=\"form-group\">
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
 <input type=\"hidden\" name=\"montant\" value=\"{{reservation.Bien.prixlocation}}\" />
 
<a href=\"{{path ('print_reservation',{'id':reservation.id})}}\" > <input style=\"color: #1a2b3c;\" id=\"print\" type=\"submit\" value=\"VALIDER\" class=\"btn btn-primary\"></a> 
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
 
</script> 
 {% endfor %}

 

{% endblock %}
{% endblock %}", "PremiumBundle:Admin:contrat.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/Admin/contrat.html.twig");
    }
}
