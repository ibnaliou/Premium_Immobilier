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
        $__internal_5d337415b72d9da14ddff28afe19786d34912d4fa9f8933f8219edb3ce0834f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d337415b72d9da14ddff28afe19786d34912d4fa9f8933f8219edb3ce0834f2->enter($__internal_5d337415b72d9da14ddff28afe19786d34912d4fa9f8933f8219edb3ce0834f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:contrat.html.twig"));

        $__internal_225753a24fc6183f8c48e5082e85fc9b91d1be2917c7be296a47d9139e4a6170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225753a24fc6183f8c48e5082e85fc9b91d1be2917c7be296a47d9139e4a6170->enter($__internal_225753a24fc6183f8c48e5082e85fc9b91d1be2917c7be296a47d9139e4a6170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:contrat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d337415b72d9da14ddff28afe19786d34912d4fa9f8933f8219edb3ce0834f2->leave($__internal_5d337415b72d9da14ddff28afe19786d34912d4fa9f8933f8219edb3ce0834f2_prof);

        
        $__internal_225753a24fc6183f8c48e5082e85fc9b91d1be2917c7be296a47d9139e4a6170->leave($__internal_225753a24fc6183f8c48e5082e85fc9b91d1be2917c7be296a47d9139e4a6170_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_70fc294714ade7cf9afaac30cb8da35fbe360270037cd7236c928f59a0ee7621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70fc294714ade7cf9afaac30cb8da35fbe360270037cd7236c928f59a0ee7621->enter($__internal_70fc294714ade7cf9afaac30cb8da35fbe360270037cd7236c928f59a0ee7621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1a7b2df656f4768483d7c5956a950fdd38fb9d0ff6e300e088053bdd6c52ace3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7b2df656f4768483d7c5956a950fdd38fb9d0ff6e300e088053bdd6c52ace3->enter($__internal_1a7b2df656f4768483d7c5956a950fdd38fb9d0ff6e300e088053bdd6c52ace3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "

";
        
        $__internal_1a7b2df656f4768483d7c5956a950fdd38fb9d0ff6e300e088053bdd6c52ace3->leave($__internal_1a7b2df656f4768483d7c5956a950fdd38fb9d0ff6e300e088053bdd6c52ace3_prof);

        
        $__internal_70fc294714ade7cf9afaac30cb8da35fbe360270037cd7236c928f59a0ee7621->leave($__internal_70fc294714ade7cf9afaac30cb8da35fbe360270037cd7236c928f59a0ee7621_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fbde2641c2e325fc5a3ae1b9dc9088ecd4e17bcda60cd320595841ac7848201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fbde2641c2e325fc5a3ae1b9dc9088ecd4e17bcda60cd320595841ac7848201->enter($__internal_8fbde2641c2e325fc5a3ae1b9dc9088ecd4e17bcda60cd320595841ac7848201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_629a2365506598c34b502bd278bdf39cd78fb8ddce07d1702036514a324d64b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629a2365506598c34b502bd278bdf39cd78fb8ddce07d1702036514a324d64b9->enter($__internal_629a2365506598c34b502bd278bdf39cd78fb8ddce07d1702036514a324d64b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PremiumBundle:Admin:Adminimistrateur";
        
        $__internal_629a2365506598c34b502bd278bdf39cd78fb8ddce07d1702036514a324d64b9->leave($__internal_629a2365506598c34b502bd278bdf39cd78fb8ddce07d1702036514a324d64b9_prof);

        
        $__internal_8fbde2641c2e325fc5a3ae1b9dc9088ecd4e17bcda60cd320595841ac7848201->leave($__internal_8fbde2641c2e325fc5a3ae1b9dc9088ecd4e17bcda60cd320595841ac7848201_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_245440f7cf1f3b9f5686e69f820235024e8bb135ddfb13120c949e42ecf0b479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245440f7cf1f3b9f5686e69f820235024e8bb135ddfb13120c949e42ecf0b479->enter($__internal_245440f7cf1f3b9f5686e69f820235024e8bb135ddfb13120c949e42ecf0b479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42db554f269b17f0eaf656f20f66eb480b2e0d84cf407bcf38f6b650d9168aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42db554f269b17f0eaf656f20f66eb480b2e0d84cf407bcf38f6b650d9168aad->enter($__internal_42db554f269b17f0eaf656f20f66eb480b2e0d84cf407bcf38f6b650d9168aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_42db554f269b17f0eaf656f20f66eb480b2e0d84cf407bcf38f6b650d9168aad->leave($__internal_42db554f269b17f0eaf656f20f66eb480b2e0d84cf407bcf38f6b650d9168aad_prof);

        
        $__internal_245440f7cf1f3b9f5686e69f820235024e8bb135ddfb13120c949e42ecf0b479->leave($__internal_245440f7cf1f3b9f5686e69f820235024e8bb135ddfb13120c949e42ecf0b479_prof);

    }

    // line 12
    public function block_slide($context, array $blocks = array())
    {
        $__internal_85f80d5b3c1658cf52e9f81ded8a0dd90ba60386a0b04d583fd24563df1b8160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85f80d5b3c1658cf52e9f81ded8a0dd90ba60386a0b04d583fd24563df1b8160->enter($__internal_85f80d5b3c1658cf52e9f81ded8a0dd90ba60386a0b04d583fd24563df1b8160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_0bbbf23efd545507b51981c85c79ea11728c6cd77a626a56597fcd64d5527060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bbbf23efd545507b51981c85c79ea11728c6cd77a626a56597fcd64d5527060->enter($__internal_0bbbf23efd545507b51981c85c79ea11728c6cd77a626a56597fcd64d5527060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 13
        echo "
";
        
        $__internal_0bbbf23efd545507b51981c85c79ea11728c6cd77a626a56597fcd64d5527060->leave($__internal_0bbbf23efd545507b51981c85c79ea11728c6cd77a626a56597fcd64d5527060_prof);

        
        $__internal_85f80d5b3c1658cf52e9f81ded8a0dd90ba60386a0b04d583fd24563df1b8160->leave($__internal_85f80d5b3c1658cf52e9f81ded8a0dd90ba60386a0b04d583fd24563df1b8160_prof);

    }

    // line 16
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_c3847df07c2c6eab125aa3f186bfe9637d10e6fb030f91c301808329ddaa0fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3847df07c2c6eab125aa3f186bfe9637d10e6fb030f91c301808329ddaa0fe0->enter($__internal_c3847df07c2c6eab125aa3f186bfe9637d10e6fb030f91c301808329ddaa0fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_5842954b5387558bfcbaaa9dc516b9a187efc22580d4fa1b1c6eac6cb0399380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5842954b5387558bfcbaaa9dc516b9a187efc22580d4fa1b1c6eac6cb0399380->enter($__internal_5842954b5387558bfcbaaa9dc516b9a187efc22580d4fa1b1c6eac6cb0399380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        // line 17
        echo " 
";
        
        $__internal_5842954b5387558bfcbaaa9dc516b9a187efc22580d4fa1b1c6eac6cb0399380->leave($__internal_5842954b5387558bfcbaaa9dc516b9a187efc22580d4fa1b1c6eac6cb0399380_prof);

        
        $__internal_c3847df07c2c6eab125aa3f186bfe9637d10e6fb030f91c301808329ddaa0fe0->leave($__internal_c3847df07c2c6eab125aa3f186bfe9637d10e6fb030f91c301808329ddaa0fe0_prof);

    }

    // line 20
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_2349c9a2279c019abb2f28d2c83d398fc1a03673deb96d5b1e3e8f85e5dd37e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2349c9a2279c019abb2f28d2c83d398fc1a03673deb96d5b1e3e8f85e5dd37e1->enter($__internal_2349c9a2279c019abb2f28d2c83d398fc1a03673deb96d5b1e3e8f85e5dd37e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_9a112e5c0edd18bdbc97147a418f7f22efb86c2148f5ba8fe21bf5da3cb87fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a112e5c0edd18bdbc97147a418f7f22efb86c2148f5ba8fe21bf5da3cb87fcb->enter($__internal_9a112e5c0edd18bdbc97147a418f7f22efb86c2148f5ba8fe21bf5da3cb87fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        // line 21
        echo " 
";
        
        $__internal_9a112e5c0edd18bdbc97147a418f7f22efb86c2148f5ba8fe21bf5da3cb87fcb->leave($__internal_9a112e5c0edd18bdbc97147a418f7f22efb86c2148f5ba8fe21bf5da3cb87fcb_prof);

        
        $__internal_2349c9a2279c019abb2f28d2c83d398fc1a03673deb96d5b1e3e8f85e5dd37e1->leave($__internal_2349c9a2279c019abb2f28d2c83d398fc1a03673deb96d5b1e3e8f85e5dd37e1_prof);

    }

    // line 24
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_3a9b441a906997f914328eceeed2a0b04723285685e9de4b5c4c508748bf3b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9b441a906997f914328eceeed2a0b04723285685e9de4b5c4c508748bf3b45->enter($__internal_3a9b441a906997f914328eceeed2a0b04723285685e9de4b5c4c508748bf3b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_e649eb25e385a15bcdcc5481ec9ca534e803edd4ea166b66a75e8f546de4e8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e649eb25e385a15bcdcc5481ec9ca534e803edd4ea166b66a75e8f546de4e8a7->enter($__internal_e649eb25e385a15bcdcc5481ec9ca534e803edd4ea166b66a75e8f546de4e8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        // line 25
        echo "
";
        
        $__internal_e649eb25e385a15bcdcc5481ec9ca534e803edd4ea166b66a75e8f546de4e8a7->leave($__internal_e649eb25e385a15bcdcc5481ec9ca534e803edd4ea166b66a75e8f546de4e8a7_prof);

        
        $__internal_3a9b441a906997f914328eceeed2a0b04723285685e9de4b5c4c508748bf3b45->leave($__internal_3a9b441a906997f914328eceeed2a0b04723285685e9de4b5c4c508748bf3b45_prof);

    }

    // line 28
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_549a5044fc54be00397441e4dce524d36de2bc56be4fa37859e8015bfca4401f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549a5044fc54be00397441e4dce524d36de2bc56be4fa37859e8015bfca4401f->enter($__internal_549a5044fc54be00397441e4dce524d36de2bc56be4fa37859e8015bfca4401f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_d06978b3079c0177ed6db37bb1a83fe06ee1704f1a8911face26c4df27e4e644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06978b3079c0177ed6db37bb1a83fe06ee1704f1a8911face26c4df27e4e644->enter($__internal_d06978b3079c0177ed6db37bb1a83fe06ee1704f1a8911face26c4df27e4e644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        
        $__internal_d06978b3079c0177ed6db37bb1a83fe06ee1704f1a8911face26c4df27e4e644->leave($__internal_d06978b3079c0177ed6db37bb1a83fe06ee1704f1a8911face26c4df27e4e644_prof);

        
        $__internal_549a5044fc54be00397441e4dce524d36de2bc56be4fa37859e8015bfca4401f->leave($__internal_549a5044fc54be00397441e4dce524d36de2bc56be4fa37859e8015bfca4401f_prof);

    }

    // line 31
    public function block_offre($context, array $blocks = array())
    {
        $__internal_bf9c1e3b2142fd94256cfde6e2dec203979392b79dd238d112ee98da85535ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9c1e3b2142fd94256cfde6e2dec203979392b79dd238d112ee98da85535ddd->enter($__internal_bf9c1e3b2142fd94256cfde6e2dec203979392b79dd238d112ee98da85535ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_cd92a460df9a3463b3b1e04d28a9b0ddca29ef95db2a605e4e74f987f142a43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd92a460df9a3463b3b1e04d28a9b0ddca29ef95db2a605e4e74f987f142a43c->enter($__internal_cd92a460df9a3463b3b1e04d28a9b0ddca29ef95db2a605e4e74f987f142a43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

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
  <input type=\"hidden\" name=\"idreservation\" value=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "id", array()), "html", null, true);
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
 
</script> 
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "
 

";
        
        $__internal_cd92a460df9a3463b3b1e04d28a9b0ddca29ef95db2a605e4e74f987f142a43c->leave($__internal_cd92a460df9a3463b3b1e04d28a9b0ddca29ef95db2a605e4e74f987f142a43c_prof);

        
        $__internal_bf9c1e3b2142fd94256cfde6e2dec203979392b79dd238d112ee98da85535ddd->leave($__internal_bf9c1e3b2142fd94256cfde6e2dec203979392b79dd238d112ee98da85535ddd_prof);

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
        return array (  523 => 237,  494 => 214,  490 => 213,  486 => 212,  482 => 211,  478 => 210,  465 => 199,  456 => 196,  453 => 195,  449 => 194,  442 => 190,  424 => 175,  417 => 171,  411 => 168,  371 => 131,  365 => 128,  359 => 125,  353 => 122,  347 => 119,  310 => 85,  303 => 81,  297 => 78,  267 => 52,  263 => 51,  242 => 32,  233 => 31,  216 => 28,  205 => 25,  196 => 24,  185 => 21,  176 => 20,  165 => 17,  156 => 16,  145 => 13,  136 => 12,  126 => 31,  123 => 30,  121 => 28,  118 => 27,  116 => 24,  113 => 23,  111 => 20,  108 => 19,  106 => 16,  103 => 15,  101 => 12,  98 => 11,  89 => 10,  71 => 5,  59 => 6,  57 => 5,  48 => 4,  11 => 1,);
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
  <input type=\"hidden\" name=\"idreservation\" value=\"{{reservation.id}}\" />

 
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
 
</script> 
 {% endfor %}

 

{% endblock %}
{% endblock %}", "PremiumBundle:Admin:contrat.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/Admin/contrat.html.twig");
    }
}
