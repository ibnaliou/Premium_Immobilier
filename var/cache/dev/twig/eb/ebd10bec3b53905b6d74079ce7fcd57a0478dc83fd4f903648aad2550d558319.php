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
        $__internal_9162052e4a299a3c422ed2609663d30b29680879cf3da841e29ef4aa0b147695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9162052e4a299a3c422ed2609663d30b29680879cf3da841e29ef4aa0b147695->enter($__internal_9162052e4a299a3c422ed2609663d30b29680879cf3da841e29ef4aa0b147695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:reservationinfo.html.twig"));

        $__internal_dadbf7b483f333758426ad27de485454ffbeddac7a305b6ca6ee64fbabe821b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadbf7b483f333758426ad27de485454ffbeddac7a305b6ca6ee64fbabe821b2->enter($__internal_dadbf7b483f333758426ad27de485454ffbeddac7a305b6ca6ee64fbabe821b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:reservationinfo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9162052e4a299a3c422ed2609663d30b29680879cf3da841e29ef4aa0b147695->leave($__internal_9162052e4a299a3c422ed2609663d30b29680879cf3da841e29ef4aa0b147695_prof);

        
        $__internal_dadbf7b483f333758426ad27de485454ffbeddac7a305b6ca6ee64fbabe821b2->leave($__internal_dadbf7b483f333758426ad27de485454ffbeddac7a305b6ca6ee64fbabe821b2_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_1dcdb3ec195d910a808ead901f75a31d03ba2320a1d3def023f8efdaf349a6f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dcdb3ec195d910a808ead901f75a31d03ba2320a1d3def023f8efdaf349a6f3->enter($__internal_1dcdb3ec195d910a808ead901f75a31d03ba2320a1d3def023f8efdaf349a6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0f5b460f1cabe8c9ac5330bbe790a9076c628974a74591c6b5bd6d137e105660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5b460f1cabe8c9ac5330bbe790a9076c628974a74591c6b5bd6d137e105660->enter($__internal_0f5b460f1cabe8c9ac5330bbe790a9076c628974a74591c6b5bd6d137e105660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
";
        
        $__internal_0f5b460f1cabe8c9ac5330bbe790a9076c628974a74591c6b5bd6d137e105660->leave($__internal_0f5b460f1cabe8c9ac5330bbe790a9076c628974a74591c6b5bd6d137e105660_prof);

        
        $__internal_1dcdb3ec195d910a808ead901f75a31d03ba2320a1d3def023f8efdaf349a6f3->leave($__internal_1dcdb3ec195d910a808ead901f75a31d03ba2320a1d3def023f8efdaf349a6f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bba113afa0b33b57b0817e40e82fd47c15494bfcf78e9a64c3970ea3cd449c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bba113afa0b33b57b0817e40e82fd47c15494bfcf78e9a64c3970ea3cd449c3->enter($__internal_0bba113afa0b33b57b0817e40e82fd47c15494bfcf78e9a64c3970ea3cd449c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f7e3dc26eac23031d93ccb49ecdabad85fa766e6475a73e0d1322a12548586b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7e3dc26eac23031d93ccb49ecdabad85fa766e6475a73e0d1322a12548586b->enter($__internal_8f7e3dc26eac23031d93ccb49ecdabad85fa766e6475a73e0d1322a12548586b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PremiumBundle:Admin:Detail";
        
        $__internal_8f7e3dc26eac23031d93ccb49ecdabad85fa766e6475a73e0d1322a12548586b->leave($__internal_8f7e3dc26eac23031d93ccb49ecdabad85fa766e6475a73e0d1322a12548586b_prof);

        
        $__internal_0bba113afa0b33b57b0817e40e82fd47c15494bfcf78e9a64c3970ea3cd449c3->leave($__internal_0bba113afa0b33b57b0817e40e82fd47c15494bfcf78e9a64c3970ea3cd449c3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a632b6ab82dcb00dcb7fec0ac9c47488c3f478f4d49fe42a818890c47f47d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a632b6ab82dcb00dcb7fec0ac9c47488c3f478f4d49fe42a818890c47f47d05->enter($__internal_5a632b6ab82dcb00dcb7fec0ac9c47488c3f478f4d49fe42a818890c47f47d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_53088a765ac2f502f7bb6609b755329a9458a55fcca8d2732b423d74c010b312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53088a765ac2f502f7bb6609b755329a9458a55fcca8d2732b423d74c010b312->enter($__internal_53088a765ac2f502f7bb6609b755329a9458a55fcca8d2732b423d74c010b312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.min.css"), "html", null, true);
        echo "\">

    
";
        
        $__internal_53088a765ac2f502f7bb6609b755329a9458a55fcca8d2732b423d74c010b312->leave($__internal_53088a765ac2f502f7bb6609b755329a9458a55fcca8d2732b423d74c010b312_prof);

        
        $__internal_5a632b6ab82dcb00dcb7fec0ac9c47488c3f478f4d49fe42a818890c47f47d05->leave($__internal_5a632b6ab82dcb00dcb7fec0ac9c47488c3f478f4d49fe42a818890c47f47d05_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_6978a4c5ea4fb4a4373aa8a3ee10215cdd639e826b588d140bc2e4ae88501b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6978a4c5ea4fb4a4373aa8a3ee10215cdd639e826b588d140bc2e4ae88501b0b->enter($__internal_6978a4c5ea4fb4a4373aa8a3ee10215cdd639e826b588d140bc2e4ae88501b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_178931f0e83a5d39977c3e4e7b01f3966f174d509bbaa5e5d37edeeb3000be3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_178931f0e83a5d39977c3e4e7b01f3966f174d509bbaa5e5d37edeeb3000be3e->enter($__internal_178931f0e83a5d39977c3e4e7b01f3966f174d509bbaa5e5d37edeeb3000be3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
";
        // line 16
        $this->displayBlock('slide', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('recherche', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('offre', $context, $blocks);
        // line 130
        echo "


";
        // line 133
        $this->displayBlock('apropos', $context, $blocks);
        // line 136
        $this->displayBlock('partenaires', $context, $blocks);
        // line 138
        $this->displayBlock('galerie', $context, $blocks);
        // line 140
        echo "

";
        
        $__internal_178931f0e83a5d39977c3e4e7b01f3966f174d509bbaa5e5d37edeeb3000be3e->leave($__internal_178931f0e83a5d39977c3e4e7b01f3966f174d509bbaa5e5d37edeeb3000be3e_prof);

        
        $__internal_6978a4c5ea4fb4a4373aa8a3ee10215cdd639e826b588d140bc2e4ae88501b0b->leave($__internal_6978a4c5ea4fb4a4373aa8a3ee10215cdd639e826b588d140bc2e4ae88501b0b_prof);

    }

    // line 16
    public function block_slide($context, array $blocks = array())
    {
        $__internal_c940951e1f8832a6544f041a259e21a9103eb335189909bb0bb3871d971878e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c940951e1f8832a6544f041a259e21a9103eb335189909bb0bb3871d971878e8->enter($__internal_c940951e1f8832a6544f041a259e21a9103eb335189909bb0bb3871d971878e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_e93339be454207501e475477df298e6dbcdba44d94e1d5f26f8074ca834d43c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93339be454207501e475477df298e6dbcdba44d94e1d5f26f8074ca834d43c9->enter($__internal_e93339be454207501e475477df298e6dbcdba44d94e1d5f26f8074ca834d43c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 17
        echo "
";
        
        $__internal_e93339be454207501e475477df298e6dbcdba44d94e1d5f26f8074ca834d43c9->leave($__internal_e93339be454207501e475477df298e6dbcdba44d94e1d5f26f8074ca834d43c9_prof);

        
        $__internal_c940951e1f8832a6544f041a259e21a9103eb335189909bb0bb3871d971878e8->leave($__internal_c940951e1f8832a6544f041a259e21a9103eb335189909bb0bb3871d971878e8_prof);

    }

    // line 20
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_0aa287ead913e2cd4fd0b429c50d80e0953454fc34a434aae97c0033d2e8aa78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa287ead913e2cd4fd0b429c50d80e0953454fc34a434aae97c0033d2e8aa78->enter($__internal_0aa287ead913e2cd4fd0b429c50d80e0953454fc34a434aae97c0033d2e8aa78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_83c416427e4dd147c067f17ab27ec7084c8dabc89a4204a22ac9b4d456d1b22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c416427e4dd147c067f17ab27ec7084c8dabc89a4204a22ac9b4d456d1b22f->enter($__internal_83c416427e4dd147c067f17ab27ec7084c8dabc89a4204a22ac9b4d456d1b22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        // line 21
        echo "   
";
        
        $__internal_83c416427e4dd147c067f17ab27ec7084c8dabc89a4204a22ac9b4d456d1b22f->leave($__internal_83c416427e4dd147c067f17ab27ec7084c8dabc89a4204a22ac9b4d456d1b22f_prof);

        
        $__internal_0aa287ead913e2cd4fd0b429c50d80e0953454fc34a434aae97c0033d2e8aa78->leave($__internal_0aa287ead913e2cd4fd0b429c50d80e0953454fc34a434aae97c0033d2e8aa78_prof);

    }

    // line 24
    public function block_offre($context, array $blocks = array())
    {
        $__internal_cd012d2e759a9d02803b26c3dee6d6ad2a3cc894883ed3ab57034815daa30d1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd012d2e759a9d02803b26c3dee6d6ad2a3cc894883ed3ab57034815daa30d1c->enter($__internal_cd012d2e759a9d02803b26c3dee6d6ad2a3cc894883ed3ab57034815daa30d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_a6d2d2fb45fae44aa4353695d6a8c7a82e5f109d80f500b4204d310c6953b48f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d2d2fb45fae44aa4353695d6a8c7a82e5f109d80f500b4204d310c6953b48f->enter($__internal_a6d2d2fb45fae44aa4353695d6a8c7a82e5f109d80f500b4204d310c6953b48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 25
        echo "
<br><br><br><br><br><br>
<form class = \"form-horizontal\">

";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservationsinfo"] ?? $this->getContext($context, "reservationsinfo")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 30
            echo "  <div class=\"row container\">
     <div class=\"col-md-3\">
      <fieldset>

        <div class = \"panel panel-success\" style=\"width:100%\">
           <div class = \"panel-heading\">
               <h3 class = \"panneau-titre\"> <font style = \"vertical-align: hériter;\"> <font style = \"vertical-align: hériter;\"></font>INFO CLIENT</font> </h3>
          </div>
            <div class = \"panel-body\"> <font style = \"vertical-aligner: hériter;\"> <font style = \"vertical-align: inherit;\">
              NOM COMPLET :<p>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "nomComplet", array()), "html", null, true);
            echo "</p>
              Numero DE  PIECE <p>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "numPiece", array()), "html", null, true);
            echo "</p>
                Numero de TELEPHONE : <p>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "tel", array()), "html", null, true);
            echo "</p>
              ADRESSE :               <p>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "adresse", array()), "html", null, true);
            echo "</p>
                  ADRESSE MAIL:        <p> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "email", array()), "html", null, true);
            echo "</p>
                <p></p>
            </font> </font> 
          </div>
        </div>
  
  </fieldset>
    </div>


<div class=\"col-md-6\">
   <fieldset>

<div class = \"panel panel-warning\" style=\"width:100%\">
  <div class = \"panel-heading\">
    <h3 class = \"panneau-titre\"> <font style = \"vertical-align: hériter;\"> <font style = \"vertical-align: hériter;\"></font>IMAGE BIEN</font> </h3>
  </div>
  <div class = \"panel-body\"> <font style = \"vertical-aligner: hériter;\"> <font style = \"vertical-align: inherit;\">
<div class=\"mg-best-rooms maclasse\" style=\"display:flex\">
<div class=\"container ok\">
 <div class=\"mySlides\">
 <div class=\"numbertext\">1 / 3</div>
 <img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:30%\">
 </div>

 
 <div class=\"mySlides\">
 <div class=\"numbertext\">2 / 3</div>
 <img src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 2, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:30%\">
 </div>

 <div class=\"mySlides\">
 <div class=\"numbertext\">3 / 3</div>
 <img src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 1, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:30%\">
 </div>
 
 

 <div class=\"row\" style=\"display:flex;margin-left:2px;height:500px;\">
 <img class=\"demo cursor\" src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:10%;height:20%\" onclick=\"currentSlide(1)\" alt=\"The Woods\">
 <img class=\"demo cursor\" src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 1, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:10%; height:20%\" onclick=\"currentSlide(2)\" alt=\"Northern Lights\">
 <img class=\"demo cursor\" src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 2, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:10%; height:20%\"onclick=\"currentSlide(3)\" alt=\"Nature and sunrise\">
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

<div class = \"panel panel-success\" style=\"width:100%\">
  <div class = \"panel-heading\">
    <h3 class = \"panneau-titre\"> <font style = \"vertical-align: hériter;\"> <font style = \"vertical-align: hériter;\"></font>INFO BIEN</font> </h3>
  </div>
  <div class = \"panel-body\"> <font style = \"vertical-aligner: hériter;\"> <font style = \"vertical-align: inherit;\">
  NOM:     <p>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "nomBien", array()), "html", null, true);
            echo "</p>
    LOCALITE: <p>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "Localite", array()), "libelle", array()), "html", null, true);
            echo "</p>
     TYPE DE BIEN: <p>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "TypeBien", array()), "libelle", array()), "html", null, true);
            echo "</p>
     PRIX DE LOCATION: <p>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "prixlocation", array()), "html", null, true);
            echo "</P>
  </font> </font> </div>

  <div class = \"form-group\">
      <div class = \"col-lg-10\" \"col-lg-offset-2\">
     
        <button type = \"soumettre\" class = \"btn btn-primaire\"> <font style = \"vertical-aligner: hériter;\"> <font style = \"vertical-aligner: hériter;\"><a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat_reservation", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" >VALIDER</a></td>
</font> </font > </button>


        <button type = \"soumettre\" class = \"btn btn-primaire\"> <font style = \"vertical-aligner: hériter;\"> <font style = \"vertical-aligner: hériter;\"> <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_reservation", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\" >RETOUR</a>
</font> </font > </button>
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
        // line 128
        echo "</form>
";
        
        $__internal_a6d2d2fb45fae44aa4353695d6a8c7a82e5f109d80f500b4204d310c6953b48f->leave($__internal_a6d2d2fb45fae44aa4353695d6a8c7a82e5f109d80f500b4204d310c6953b48f_prof);

        
        $__internal_cd012d2e759a9d02803b26c3dee6d6ad2a3cc894883ed3ab57034815daa30d1c->leave($__internal_cd012d2e759a9d02803b26c3dee6d6ad2a3cc894883ed3ab57034815daa30d1c_prof);

    }

    // line 133
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_4c416962168803d26437c9ea3e2e47c70f268090c3393d268aedc778c34b9cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c416962168803d26437c9ea3e2e47c70f268090c3393d268aedc778c34b9cb2->enter($__internal_4c416962168803d26437c9ea3e2e47c70f268090c3393d268aedc778c34b9cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_606d54349a8591de20a2aed6fe36af8e4016cbf31916ad682ca2c2b20b60bf86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606d54349a8591de20a2aed6fe36af8e4016cbf31916ad682ca2c2b20b60bf86->enter($__internal_606d54349a8591de20a2aed6fe36af8e4016cbf31916ad682ca2c2b20b60bf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        // line 134
        echo "
";
        
        $__internal_606d54349a8591de20a2aed6fe36af8e4016cbf31916ad682ca2c2b20b60bf86->leave($__internal_606d54349a8591de20a2aed6fe36af8e4016cbf31916ad682ca2c2b20b60bf86_prof);

        
        $__internal_4c416962168803d26437c9ea3e2e47c70f268090c3393d268aedc778c34b9cb2->leave($__internal_4c416962168803d26437c9ea3e2e47c70f268090c3393d268aedc778c34b9cb2_prof);

    }

    // line 136
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_30a988c54fd4214c27b7bf4e6856158f3ae43988fe1c9b90cbefb6fd67d72873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a988c54fd4214c27b7bf4e6856158f3ae43988fe1c9b90cbefb6fd67d72873->enter($__internal_30a988c54fd4214c27b7bf4e6856158f3ae43988fe1c9b90cbefb6fd67d72873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_fd9a77e7d7bf7153ffb0cbeebed615037a0191662a8b1aca1b43f2348c0f58c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9a77e7d7bf7153ffb0cbeebed615037a0191662a8b1aca1b43f2348c0f58c0->enter($__internal_fd9a77e7d7bf7153ffb0cbeebed615037a0191662a8b1aca1b43f2348c0f58c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        
        $__internal_fd9a77e7d7bf7153ffb0cbeebed615037a0191662a8b1aca1b43f2348c0f58c0->leave($__internal_fd9a77e7d7bf7153ffb0cbeebed615037a0191662a8b1aca1b43f2348c0f58c0_prof);

        
        $__internal_30a988c54fd4214c27b7bf4e6856158f3ae43988fe1c9b90cbefb6fd67d72873->leave($__internal_30a988c54fd4214c27b7bf4e6856158f3ae43988fe1c9b90cbefb6fd67d72873_prof);

    }

    // line 138
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_d99f2b4404cd188f7ead35984459c62d7146ab79e8244a0a8267e7cb8976f23e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99f2b4404cd188f7ead35984459c62d7146ab79e8244a0a8267e7cb8976f23e->enter($__internal_d99f2b4404cd188f7ead35984459c62d7146ab79e8244a0a8267e7cb8976f23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_2e048420d3b486e48df6bc39ffbf6c96fc297e9d495dbda28165b6301244cead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e048420d3b486e48df6bc39ffbf6c96fc297e9d495dbda28165b6301244cead->enter($__internal_2e048420d3b486e48df6bc39ffbf6c96fc297e9d495dbda28165b6301244cead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        
        $__internal_2e048420d3b486e48df6bc39ffbf6c96fc297e9d495dbda28165b6301244cead->leave($__internal_2e048420d3b486e48df6bc39ffbf6c96fc297e9d495dbda28165b6301244cead_prof);

        
        $__internal_d99f2b4404cd188f7ead35984459c62d7146ab79e8244a0a8267e7cb8976f23e->leave($__internal_d99f2b4404cd188f7ead35984459c62d7146ab79e8244a0a8267e7cb8976f23e_prof);

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
        return array (  429 => 138,  412 => 136,  401 => 134,  392 => 133,  381 => 128,  362 => 115,  355 => 111,  346 => 105,  342 => 104,  338 => 103,  334 => 102,  312 => 84,  307 => 83,  302 => 82,  292 => 76,  283 => 71,  273 => 65,  248 => 43,  244 => 42,  240 => 41,  236 => 40,  232 => 39,  221 => 30,  217 => 29,  211 => 25,  202 => 24,  191 => 21,  182 => 20,  171 => 17,  162 => 16,  150 => 140,  148 => 138,  146 => 136,  144 => 133,  139 => 130,  137 => 24,  134 => 23,  132 => 20,  129 => 19,  127 => 16,  124 => 15,  115 => 14,  100 => 7,  91 => 6,  73 => 5,  62 => 11,  60 => 6,  58 => 5,  49 => 4,  11 => 1,);
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

{% block slide %}

{% endblock %}

{% block recherche %}
   
{% endblock %}

{% block offre %}

<br><br><br><br><br><br>
<form class = \"form-horizontal\">

{%for reservation in  reservationsinfo %}
  <div class=\"row container\">
     <div class=\"col-md-3\">
      <fieldset>

        <div class = \"panel panel-success\" style=\"width:100%\">
           <div class = \"panel-heading\">
               <h3 class = \"panneau-titre\"> <font style = \"vertical-align: hériter;\"> <font style = \"vertical-align: hériter;\"></font>INFO CLIENT</font> </h3>
          </div>
            <div class = \"panel-body\"> <font style = \"vertical-aligner: hériter;\"> <font style = \"vertical-align: inherit;\">
              NOM COMPLET :<p>{{reservation.Client.nomComplet}}</p>
              Numero DE  PIECE <p>{{reservation.Client.numPiece}}</p>
                Numero de TELEPHONE : <p>{{reservation.Client.tel}}</p>
              ADRESSE :               <p>{{reservation.Client.adresse}}</p>
                  ADRESSE MAIL:        <p> {{reservation.Client.email}}</p>
                <p></p>
            </font> </font> 
          </div>
        </div>
  
  </fieldset>
    </div>


<div class=\"col-md-6\">
   <fieldset>

<div class = \"panel panel-warning\" style=\"width:100%\">
  <div class = \"panel-heading\">
    <h3 class = \"panneau-titre\"> <font style = \"vertical-align: hériter;\"> <font style = \"vertical-align: hériter;\"></font>IMAGE BIEN</font> </h3>
  </div>
  <div class = \"panel-body\"> <font style = \"vertical-aligner: hériter;\"> <font style = \"vertical-align: inherit;\">
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
 <img class=\"demo cursor\" src=\"{{ asset('images/')}}{{reservation.bien.images[2].image}}\" style=\"width:10%; height:20%\"onclick=\"currentSlide(3)\" alt=\"Nature and sunrise\">
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

<div class = \"panel panel-success\" style=\"width:100%\">
  <div class = \"panel-heading\">
    <h3 class = \"panneau-titre\"> <font style = \"vertical-align: hériter;\"> <font style = \"vertical-align: hériter;\"></font>INFO BIEN</font> </h3>
  </div>
  <div class = \"panel-body\"> <font style = \"vertical-aligner: hériter;\"> <font style = \"vertical-align: inherit;\">
  NOM:     <p>{{reservation.Bien.nomBien}}</p>
    LOCALITE: <p>{{reservation.Bien.Localite.libelle}}</p>
     TYPE DE BIEN: <p>{{reservation.Bien.TypeBien.libelle}}</p>
     PRIX DE LOCATION: <p>{{reservation.Bien.prixlocation}}</P>
  </font> </font> </div>

  <div class = \"form-group\">
      <div class = \"col-lg-10\" \"col-lg-offset-2\">
     
        <button type = \"soumettre\" class = \"btn btn-primaire\"> <font style = \"vertical-aligner: hériter;\"> <font style = \"vertical-aligner: hériter;\"><a href=\"{{path ('contrat_reservation',{'id':reservation.id})}}\" class=\"btn btn-primary\" >VALIDER</a></td>
</font> </font > </button>


        <button type = \"soumettre\" class = \"btn btn-primaire\"> <font style = \"vertical-aligner: hériter;\"> <font style = \"vertical-aligner: hériter;\"> <a href=\"{{path ('list_reservation',{'id':reservation.id})}}\" class=\"btn btn-success\" >RETOUR</a>
</font> </font > </button>
      </div>
    </div>
</div>
 
</div>

  </fieldset>

</div>
 
     {%endfor%}
</form>
{% endblock %}



{% block apropos %}

{% endblock %}
{% block partenaires %}
{% endblock %}
{% block galerie %}
{% endblock %}


{% endblock %}












", "PremiumBundle:Admin:reservationinfo.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/Admin/reservationinfo.html.twig");
    }
}
