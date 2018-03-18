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
        $__internal_61a323c9b072e83e4940f87aafa77599894c8ebefa3ede56f12dedf73a30b798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a323c9b072e83e4940f87aafa77599894c8ebefa3ede56f12dedf73a30b798->enter($__internal_61a323c9b072e83e4940f87aafa77599894c8ebefa3ede56f12dedf73a30b798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:contrat.html.twig"));

        $__internal_085b50463120e967c12019f1e0cfff4bec514441f2920975b14113dd6efc54f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085b50463120e967c12019f1e0cfff4bec514441f2920975b14113dd6efc54f1->enter($__internal_085b50463120e967c12019f1e0cfff4bec514441f2920975b14113dd6efc54f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:contrat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61a323c9b072e83e4940f87aafa77599894c8ebefa3ede56f12dedf73a30b798->leave($__internal_61a323c9b072e83e4940f87aafa77599894c8ebefa3ede56f12dedf73a30b798_prof);

        
        $__internal_085b50463120e967c12019f1e0cfff4bec514441f2920975b14113dd6efc54f1->leave($__internal_085b50463120e967c12019f1e0cfff4bec514441f2920975b14113dd6efc54f1_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_44257b2d0cef7d7db7f15e37339c5dcc6dcc1924195393218eb6fc5ae558b746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44257b2d0cef7d7db7f15e37339c5dcc6dcc1924195393218eb6fc5ae558b746->enter($__internal_44257b2d0cef7d7db7f15e37339c5dcc6dcc1924195393218eb6fc5ae558b746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5e1be0e14cbfdc9fb8244e634e7db5043e9fcac47124b76f6ce47cb4cda30b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1be0e14cbfdc9fb8244e634e7db5043e9fcac47124b76f6ce47cb4cda30b66->enter($__internal_5e1be0e14cbfdc9fb8244e634e7db5043e9fcac47124b76f6ce47cb4cda30b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "

";
        
        $__internal_5e1be0e14cbfdc9fb8244e634e7db5043e9fcac47124b76f6ce47cb4cda30b66->leave($__internal_5e1be0e14cbfdc9fb8244e634e7db5043e9fcac47124b76f6ce47cb4cda30b66_prof);

        
        $__internal_44257b2d0cef7d7db7f15e37339c5dcc6dcc1924195393218eb6fc5ae558b746->leave($__internal_44257b2d0cef7d7db7f15e37339c5dcc6dcc1924195393218eb6fc5ae558b746_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ca3d2f56a8fe0eb18b97970a09b12c5c54dd96d0bc3a75f3c8e8e201df6b194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca3d2f56a8fe0eb18b97970a09b12c5c54dd96d0bc3a75f3c8e8e201df6b194->enter($__internal_9ca3d2f56a8fe0eb18b97970a09b12c5c54dd96d0bc3a75f3c8e8e201df6b194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9ecf91a352f865b9f6493959f6f5266449c8dcc1ed0cfb497190e0f421a63646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ecf91a352f865b9f6493959f6f5266449c8dcc1ed0cfb497190e0f421a63646->enter($__internal_9ecf91a352f865b9f6493959f6f5266449c8dcc1ed0cfb497190e0f421a63646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PremiumBundle:Admin:Adminimistrateur";
        
        $__internal_9ecf91a352f865b9f6493959f6f5266449c8dcc1ed0cfb497190e0f421a63646->leave($__internal_9ecf91a352f865b9f6493959f6f5266449c8dcc1ed0cfb497190e0f421a63646_prof);

        
        $__internal_9ca3d2f56a8fe0eb18b97970a09b12c5c54dd96d0bc3a75f3c8e8e201df6b194->leave($__internal_9ca3d2f56a8fe0eb18b97970a09b12c5c54dd96d0bc3a75f3c8e8e201df6b194_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_58b24aae9cf52b6d5a0bb71b3ab279657f2e2a598a1190363f27e03bb5d8bfc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58b24aae9cf52b6d5a0bb71b3ab279657f2e2a598a1190363f27e03bb5d8bfc2->enter($__internal_58b24aae9cf52b6d5a0bb71b3ab279657f2e2a598a1190363f27e03bb5d8bfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad163f5190595b6ba1b4a624901e70c7ac09af0be428e2b570c517b9bdc821fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad163f5190595b6ba1b4a624901e70c7ac09af0be428e2b570c517b9bdc821fd->enter($__internal_ad163f5190595b6ba1b4a624901e70c7ac09af0be428e2b570c517b9bdc821fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ad163f5190595b6ba1b4a624901e70c7ac09af0be428e2b570c517b9bdc821fd->leave($__internal_ad163f5190595b6ba1b4a624901e70c7ac09af0be428e2b570c517b9bdc821fd_prof);

        
        $__internal_58b24aae9cf52b6d5a0bb71b3ab279657f2e2a598a1190363f27e03bb5d8bfc2->leave($__internal_58b24aae9cf52b6d5a0bb71b3ab279657f2e2a598a1190363f27e03bb5d8bfc2_prof);

    }

    // line 12
    public function block_slide($context, array $blocks = array())
    {
        $__internal_cd7dc2d6ad25b8e802b321d65e92aa931624434d7f219b6d50cfd4988ff1c22b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7dc2d6ad25b8e802b321d65e92aa931624434d7f219b6d50cfd4988ff1c22b->enter($__internal_cd7dc2d6ad25b8e802b321d65e92aa931624434d7f219b6d50cfd4988ff1c22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_eb77e2c38e9686aede418dee59471dbb266983d99ae5857bf6ee76379ac1a39a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb77e2c38e9686aede418dee59471dbb266983d99ae5857bf6ee76379ac1a39a->enter($__internal_eb77e2c38e9686aede418dee59471dbb266983d99ae5857bf6ee76379ac1a39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 13
        echo "
";
        
        $__internal_eb77e2c38e9686aede418dee59471dbb266983d99ae5857bf6ee76379ac1a39a->leave($__internal_eb77e2c38e9686aede418dee59471dbb266983d99ae5857bf6ee76379ac1a39a_prof);

        
        $__internal_cd7dc2d6ad25b8e802b321d65e92aa931624434d7f219b6d50cfd4988ff1c22b->leave($__internal_cd7dc2d6ad25b8e802b321d65e92aa931624434d7f219b6d50cfd4988ff1c22b_prof);

    }

    // line 16
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_4281d3128fb01f72dee6860dc0a266c54373669a6d6cda0927c81ee10841f7a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4281d3128fb01f72dee6860dc0a266c54373669a6d6cda0927c81ee10841f7a0->enter($__internal_4281d3128fb01f72dee6860dc0a266c54373669a6d6cda0927c81ee10841f7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_9f43c6d5154583a598d185d308bb6cc1906cbd2d3f4371837dd0e37903abd98b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f43c6d5154583a598d185d308bb6cc1906cbd2d3f4371837dd0e37903abd98b->enter($__internal_9f43c6d5154583a598d185d308bb6cc1906cbd2d3f4371837dd0e37903abd98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        // line 17
        echo " 
";
        
        $__internal_9f43c6d5154583a598d185d308bb6cc1906cbd2d3f4371837dd0e37903abd98b->leave($__internal_9f43c6d5154583a598d185d308bb6cc1906cbd2d3f4371837dd0e37903abd98b_prof);

        
        $__internal_4281d3128fb01f72dee6860dc0a266c54373669a6d6cda0927c81ee10841f7a0->leave($__internal_4281d3128fb01f72dee6860dc0a266c54373669a6d6cda0927c81ee10841f7a0_prof);

    }

    // line 20
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_ae55d031454800256ad1a294142e11bf922f896fc48073526ee5052b5b3cfea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae55d031454800256ad1a294142e11bf922f896fc48073526ee5052b5b3cfea3->enter($__internal_ae55d031454800256ad1a294142e11bf922f896fc48073526ee5052b5b3cfea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_ca2ca0c6497e8568c46ec91046df435dadd3c4032a8c9bf8b0bc3d75a3413854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2ca0c6497e8568c46ec91046df435dadd3c4032a8c9bf8b0bc3d75a3413854->enter($__internal_ca2ca0c6497e8568c46ec91046df435dadd3c4032a8c9bf8b0bc3d75a3413854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        // line 21
        echo " 
";
        
        $__internal_ca2ca0c6497e8568c46ec91046df435dadd3c4032a8c9bf8b0bc3d75a3413854->leave($__internal_ca2ca0c6497e8568c46ec91046df435dadd3c4032a8c9bf8b0bc3d75a3413854_prof);

        
        $__internal_ae55d031454800256ad1a294142e11bf922f896fc48073526ee5052b5b3cfea3->leave($__internal_ae55d031454800256ad1a294142e11bf922f896fc48073526ee5052b5b3cfea3_prof);

    }

    // line 24
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_54fc396f20bfd751efadadb497f40d00831de2aa0c5fecc62d14bf5bd5c2c06b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54fc396f20bfd751efadadb497f40d00831de2aa0c5fecc62d14bf5bd5c2c06b->enter($__internal_54fc396f20bfd751efadadb497f40d00831de2aa0c5fecc62d14bf5bd5c2c06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_c3b77f6c1dc31d0b3412d05ae2fd80434b55417734ebd50409d9e1aa76f64263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b77f6c1dc31d0b3412d05ae2fd80434b55417734ebd50409d9e1aa76f64263->enter($__internal_c3b77f6c1dc31d0b3412d05ae2fd80434b55417734ebd50409d9e1aa76f64263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        // line 25
        echo "
";
        
        $__internal_c3b77f6c1dc31d0b3412d05ae2fd80434b55417734ebd50409d9e1aa76f64263->leave($__internal_c3b77f6c1dc31d0b3412d05ae2fd80434b55417734ebd50409d9e1aa76f64263_prof);

        
        $__internal_54fc396f20bfd751efadadb497f40d00831de2aa0c5fecc62d14bf5bd5c2c06b->leave($__internal_54fc396f20bfd751efadadb497f40d00831de2aa0c5fecc62d14bf5bd5c2c06b_prof);

    }

    // line 28
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_36970b6506276eb18a844808d7aa0402dbd32ebe89637c66d9c4d4223672e893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36970b6506276eb18a844808d7aa0402dbd32ebe89637c66d9c4d4223672e893->enter($__internal_36970b6506276eb18a844808d7aa0402dbd32ebe89637c66d9c4d4223672e893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_fc9c9beea03bf4ba77c61d39ae042667a4600864f33d7f01606377f76ee109a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9c9beea03bf4ba77c61d39ae042667a4600864f33d7f01606377f76ee109a6->enter($__internal_fc9c9beea03bf4ba77c61d39ae042667a4600864f33d7f01606377f76ee109a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        
        $__internal_fc9c9beea03bf4ba77c61d39ae042667a4600864f33d7f01606377f76ee109a6->leave($__internal_fc9c9beea03bf4ba77c61d39ae042667a4600864f33d7f01606377f76ee109a6_prof);

        
        $__internal_36970b6506276eb18a844808d7aa0402dbd32ebe89637c66d9c4d4223672e893->leave($__internal_36970b6506276eb18a844808d7aa0402dbd32ebe89637c66d9c4d4223672e893_prof);

    }

    // line 31
    public function block_offre($context, array $blocks = array())
    {
        $__internal_86d521b3c3b7d1b3ab8f9dec690f5a7ca5176f40baa416c51091b0f88bd44440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d521b3c3b7d1b3ab8f9dec690f5a7ca5176f40baa416c51091b0f88bd44440->enter($__internal_86d521b3c3b7d1b3ab8f9dec690f5a7ca5176f40baa416c51091b0f88bd44440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_3ea905a5ecc668a61ebb8f7ac0167a4b1eb60279d36bb64efbfa24bd07cefce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea905a5ecc668a61ebb8f7ac0167a4b1eb60279d36bb64efbfa24bd07cefce3->enter($__internal_3ea905a5ecc668a61ebb8f7ac0167a4b1eb60279d36bb64efbfa24bd07cefce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

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
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "nomComplet", array())), "html", null, true);
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
            echo " FCFA </span>
 </li>
 <li>
 <span class=\"front\"> ";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "prixlocation", array()), "html", null, true);
            echo " FCFA</span>
 
 </li>
 <li>
 <span class=\"front\"> ";
            // line 175
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "prixlocation", array()) * 2), "html", null, true);
            echo " FCFA</span>
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
        
        $__internal_3ea905a5ecc668a61ebb8f7ac0167a4b1eb60279d36bb64efbfa24bd07cefce3->leave($__internal_3ea905a5ecc668a61ebb8f7ac0167a4b1eb60279d36bb64efbfa24bd07cefce3_prof);

        
        $__internal_86d521b3c3b7d1b3ab8f9dec690f5a7ca5176f40baa416c51091b0f88bd44440->leave($__internal_86d521b3c3b7d1b3ab8f9dec690f5a7ca5176f40baa416c51091b0f88bd44440_prof);

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
 <center><h1> VALIDATION DU CONTRAT DE {{reservation.Client.nomComplet|upper}}<h1></center>
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
 <span class=\"front\"> {{ reservation.Bien.prixlocation }} FCFA </span>
 </li>
 <li>
 <span class=\"front\"> {{ reservation.Bien.prixlocation }} FCFA</span>
 
 </li>
 <li>
 <span class=\"front\"> {{ reservation.Bien.prixlocation *2 }} FCFA</span>
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
