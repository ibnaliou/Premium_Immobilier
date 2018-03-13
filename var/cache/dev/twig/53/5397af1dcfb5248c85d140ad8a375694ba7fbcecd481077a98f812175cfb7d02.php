<?php

/* PremiumBundle:Admin:reservation.html.twig */
class __TwigTemplate_9f0ef2824a9c26eb394de1a05dca18222cd0c109f86b6359af35a9239503dd25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PremiumBundle::acceuil.html.twig", "PremiumBundle:Admin:reservation.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
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
        $__internal_39e03bbb3df91a6a79d7a387bab26aa4960fcfe1b43c84ef1e6aa5a8e17f83f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e03bbb3df91a6a79d7a387bab26aa4960fcfe1b43c84ef1e6aa5a8e17f83f4->enter($__internal_39e03bbb3df91a6a79d7a387bab26aa4960fcfe1b43c84ef1e6aa5a8e17f83f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:reservation.html.twig"));

        $__internal_0ec1e244641778c9c7849901e5a012c87b0b79c5f5c818c35b5b162bdcc95cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec1e244641778c9c7849901e5a012c87b0b79c5f5c818c35b5b162bdcc95cfb->enter($__internal_0ec1e244641778c9c7849901e5a012c87b0b79c5f5c818c35b5b162bdcc95cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39e03bbb3df91a6a79d7a387bab26aa4960fcfe1b43c84ef1e6aa5a8e17f83f4->leave($__internal_39e03bbb3df91a6a79d7a387bab26aa4960fcfe1b43c84ef1e6aa5a8e17f83f4_prof);

        
        $__internal_0ec1e244641778c9c7849901e5a012c87b0b79c5f5c818c35b5b162bdcc95cfb->leave($__internal_0ec1e244641778c9c7849901e5a012c87b0b79c5f5c818c35b5b162bdcc95cfb_prof);

    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e14b3d16a902483d118fe57592a0db02f1a2e4adfb52c768bcf021a0fb7179d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e14b3d16a902483d118fe57592a0db02f1a2e4adfb52c768bcf021a0fb7179d->enter($__internal_2e14b3d16a902483d118fe57592a0db02f1a2e4adfb52c768bcf021a0fb7179d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_19ec27cae42b838b1b58234daa110ab869e77dd0edfed4979d82909eda109193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ec27cae42b838b1b58234daa110ab869e77dd0edfed4979d82909eda109193->enter($__internal_19ec27cae42b838b1b58234daa110ab869e77dd0edfed4979d82909eda109193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "

";
        
        $__internal_19ec27cae42b838b1b58234daa110ab869e77dd0edfed4979d82909eda109193->leave($__internal_19ec27cae42b838b1b58234daa110ab869e77dd0edfed4979d82909eda109193_prof);

        
        $__internal_2e14b3d16a902483d118fe57592a0db02f1a2e4adfb52c768bcf021a0fb7179d->leave($__internal_2e14b3d16a902483d118fe57592a0db02f1a2e4adfb52c768bcf021a0fb7179d_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fc724b35470b30f0e6c8a8853fdfc0118089ead985da7c37e4daaf58cd839e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fc724b35470b30f0e6c8a8853fdfc0118089ead985da7c37e4daaf58cd839e3->enter($__internal_7fc724b35470b30f0e6c8a8853fdfc0118089ead985da7c37e4daaf58cd839e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75e17a63acf6e78883057817ba99700081e8366ecaa470e357026f855f62d062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e17a63acf6e78883057817ba99700081e8366ecaa470e357026f855f62d062->enter($__internal_75e17a63acf6e78883057817ba99700081e8366ecaa470e357026f855f62d062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PremiumBundle:Admin:Adminimistrateur";
        
        $__internal_75e17a63acf6e78883057817ba99700081e8366ecaa470e357026f855f62d062->leave($__internal_75e17a63acf6e78883057817ba99700081e8366ecaa470e357026f855f62d062_prof);

        
        $__internal_7fc724b35470b30f0e6c8a8853fdfc0118089ead985da7c37e4daaf58cd839e3->leave($__internal_7fc724b35470b30f0e6c8a8853fdfc0118089ead985da7c37e4daaf58cd839e3_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1912e7d1899b676eecd2d12c1e19a99424f9a0e7185c44b80e4ac8a5f92c040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1912e7d1899b676eecd2d12c1e19a99424f9a0e7185c44b80e4ac8a5f92c040->enter($__internal_f1912e7d1899b676eecd2d12c1e19a99424f9a0e7185c44b80e4ac8a5f92c040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65a3733990732b7ff00d5f1ce0af6fcdf3dbff6bbbf78f1b8103bc490e7b4dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a3733990732b7ff00d5f1ce0af6fcdf3dbff6bbbf78f1b8103bc490e7b4dda->enter($__internal_65a3733990732b7ff00d5f1ce0af6fcdf3dbff6bbbf78f1b8103bc490e7b4dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
";
        // line 15
        $this->displayBlock('slide', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('recherche', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('offre', $context, $blocks);
        // line 175
        echo "


";
        // line 178
        $this->displayBlock('apropos', $context, $blocks);
        // line 181
        $this->displayBlock('partenaires', $context, $blocks);
        // line 183
        $this->displayBlock('galerie', $context, $blocks);
        // line 189
        echo "
";
        
        $__internal_65a3733990732b7ff00d5f1ce0af6fcdf3dbff6bbbf78f1b8103bc490e7b4dda->leave($__internal_65a3733990732b7ff00d5f1ce0af6fcdf3dbff6bbbf78f1b8103bc490e7b4dda_prof);

        
        $__internal_f1912e7d1899b676eecd2d12c1e19a99424f9a0e7185c44b80e4ac8a5f92c040->leave($__internal_f1912e7d1899b676eecd2d12c1e19a99424f9a0e7185c44b80e4ac8a5f92c040_prof);

    }

    // line 15
    public function block_slide($context, array $blocks = array())
    {
        $__internal_188928bab311c36344c2b4106c79f0bc6ddc4766cdc3b44ef84f128ec48124fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_188928bab311c36344c2b4106c79f0bc6ddc4766cdc3b44ef84f128ec48124fe->enter($__internal_188928bab311c36344c2b4106c79f0bc6ddc4766cdc3b44ef84f128ec48124fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_ead141ddb604049f5888b1ffae4369b7e66a525eaedac9c35825cf767999e0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead141ddb604049f5888b1ffae4369b7e66a525eaedac9c35825cf767999e0a5->enter($__internal_ead141ddb604049f5888b1ffae4369b7e66a525eaedac9c35825cf767999e0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 16
        echo "
";
        
        $__internal_ead141ddb604049f5888b1ffae4369b7e66a525eaedac9c35825cf767999e0a5->leave($__internal_ead141ddb604049f5888b1ffae4369b7e66a525eaedac9c35825cf767999e0a5_prof);

        
        $__internal_188928bab311c36344c2b4106c79f0bc6ddc4766cdc3b44ef84f128ec48124fe->leave($__internal_188928bab311c36344c2b4106c79f0bc6ddc4766cdc3b44ef84f128ec48124fe_prof);

    }

    // line 19
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_813962f93bd68847b7a58a4a01deaf3638ed7de6ac2cd1f14ccb0570fc2b3954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_813962f93bd68847b7a58a4a01deaf3638ed7de6ac2cd1f14ccb0570fc2b3954->enter($__internal_813962f93bd68847b7a58a4a01deaf3638ed7de6ac2cd1f14ccb0570fc2b3954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_4024a718f08ea8b93e2cc8f264b8d7d693e9a07fa471f66d10115efece9a68ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4024a718f08ea8b93e2cc8f264b8d7d693e9a07fa471f66d10115efece9a68ef->enter($__internal_4024a718f08ea8b93e2cc8f264b8d7d693e9a07fa471f66d10115efece9a68ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        // line 20
        echo "   
";
        
        $__internal_4024a718f08ea8b93e2cc8f264b8d7d693e9a07fa471f66d10115efece9a68ef->leave($__internal_4024a718f08ea8b93e2cc8f264b8d7d693e9a07fa471f66d10115efece9a68ef_prof);

        
        $__internal_813962f93bd68847b7a58a4a01deaf3638ed7de6ac2cd1f14ccb0570fc2b3954->leave($__internal_813962f93bd68847b7a58a4a01deaf3638ed7de6ac2cd1f14ccb0570fc2b3954_prof);

    }

    // line 23
    public function block_offre($context, array $blocks = array())
    {
        $__internal_26aec62d3cb6b8fec940e69f4d12b0aa60c81107fcaafa3e270b9b12b5d1f5f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26aec62d3cb6b8fec940e69f4d12b0aa60c81107fcaafa3e270b9b12b5d1f5f9->enter($__internal_26aec62d3cb6b8fec940e69f4d12b0aa60c81107fcaafa3e270b9b12b5d1f5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_ddb9138587652634823ecba294f727b44c4770577dc2fe1ff65588dcb8a84043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb9138587652634823ecba294f727b44c4770577dc2fe1ff65588dcb8a84043->enter($__internal_ddb9138587652634823ecba294f727b44c4770577dc2fe1ff65588dcb8a84043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 24
        echo "<div>
<br><br><br>
</div>

<div class=\"container\">
\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\" >
\t\t\t\t<div class=\"panel panel-primary\" >
\t\t\t\t\t<div class=\"panel-heading\">\t\t\t\t\t  
\t\t\t\t\t    <h3 class=\"panel-title\" style=\"font-size:35px;\">Liste des réservations en cours</h3>
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"clickable filter\" data-toggle=\"tooltip\" title=\"Toggle table filter\" data-container=\"body\">Filtrer
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-search\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"dev-table-filter\" data-action=\"filter\" data-filters=\"#dev-table\" placeholder=\"Rechercher\" />\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<table  class=\"table table-hover\" id=\"dev-table\">                     
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"entete\">
                        <th>NOM CLIENT</th>
\t\t\t\t\t\t<th >CNI</th>
\t\t\t\t\t\t<th >TÉLÉPHONE</th>
                        <th>ADRESSE</th>
\t\t\t\t\t\t<th >EMAIL</th>
                        <th>NOM BIEN</th>
                        <th>LOCALITÉ</th>
                        <th>TYPE BIEN</th>
                        <th>PRIX</th>
                    \t<th>IMAGE</th> 
                        <th>ACTION</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 66
            echo "\t\t\t\t<tbody>
\t\t\t\t\t<tr >
\t\t\t\t        <td class=\"info\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"info\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "numPiece", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"info\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "tel", array()), "html", null, true);
            echo "</td>
               \t\t\t<td class=\"info\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "adresse", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"info\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "email", array()), "html", null, true);
            echo "</td>
           \t\t\t\t<td class=\"info\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "nomBien", array()), "html", null, true);
            echo "</td>
                        <td class=\"info\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "Localite", array()), "libelle", array()), "html", null, true);
            echo "</td>
              \t\t\t<td class=\"info\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "TypeBien", array()), "libelle", array()), "html", null, true);
            echo "</td>
               \t\t\t<td class=\"info\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "prixlocation", array()), "html", null, true);
            echo "</td>
            \t\t\t<td class=\"info\"> <img class=\"lesimages\"  src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"img1\" id=\"\" class=\"img-responsive\"></td> 
            \t\t\t<td class=\"info\"><a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_info", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" >Details</a></td>

\t\t\t\t\t</tr>
\t\t\t\t</tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
\t\t\t\t\t</table>


\t\t\t\t
\t\t\t</div>
                  
        </div>

\t\t <div class=\"panel-footer\">
                <div class=\"row\">
                  <div style=\"font-size:20px;\" class=\"col col-xs-4\">Page 1 sur 5
                  </div>
                  <div class=\"col col-xs-8\">
                    <ul  style=\"font-size:20px;\" class=\"pagination hidden-xs pull-right\">
                      <li><a href=\"#\">1</a></li>
                      <li><a href=\"#\">2</a></li>
                      <li><a href=\"#\">3</a></li>
                      <li><a href=\"#\">4</a></li>
                      <li><a href=\"#\">5</a></li>
                    </ul>
                    <ul class=\"pagination visible-xs pull-right\">
                        <li><a href=\"#\">«</a></li>
                        <li><a href=\"#\">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              
         <div>
<br><br><br>\t
</div>
</div>
<style type=\"text/css\"  >
.lesimages{
    width:100px;
    height:100px;
\t}
.info{
\twidth:50px;\t
}
.ligne{
\tdisplay:flex;\t
}
.form-control{
\tpadding-left:20px;
}
.entete{
\tbackground-color:blue;
}



    /*style table bootstrap*/

        \t.row{
            align:center;
\t\t    margin-top:40px;
\t\t    padding: 0 10px;
\t\t\twidth:100%;
\t\t}
\t\t.clickable{
\t\t    cursor: pointer;   
\t\t}

\t\t.panel-heading div {
\t\t\tmargin-top: -18px;
\t\t\tfont-size: 15px;
\t\t}
\t\t\t.panel-heading input {
\t\t\twidth:20%;

\t\t}
\t\t.panel {
\t\t    float:right;
\t\t\twidth:100%;
\t\t}


\t\t.panel-heading div span{
\t\t\tmargin-left:5px;
\t\t}
\t\t.panel-body{
\t\t\tdisplay: none;
\t\t}
\t
\t
\t\t\t
\t\t
}
  </style>
";
        
        $__internal_ddb9138587652634823ecba294f727b44c4770577dc2fe1ff65588dcb8a84043->leave($__internal_ddb9138587652634823ecba294f727b44c4770577dc2fe1ff65588dcb8a84043_prof);

        
        $__internal_26aec62d3cb6b8fec940e69f4d12b0aa60c81107fcaafa3e270b9b12b5d1f5f9->leave($__internal_26aec62d3cb6b8fec940e69f4d12b0aa60c81107fcaafa3e270b9b12b5d1f5f9_prof);

    }

    // line 178
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_4a2d223793d1c4b027b310ed94d40f3cea8cbfd39baec65979ae218f56200f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2d223793d1c4b027b310ed94d40f3cea8cbfd39baec65979ae218f56200f62->enter($__internal_4a2d223793d1c4b027b310ed94d40f3cea8cbfd39baec65979ae218f56200f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_efdd41768000c252e1a35a9fc0a236d7e00c50058b828c9b3c7adb8a1cb83cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efdd41768000c252e1a35a9fc0a236d7e00c50058b828c9b3c7adb8a1cb83cd3->enter($__internal_efdd41768000c252e1a35a9fc0a236d7e00c50058b828c9b3c7adb8a1cb83cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        // line 179
        echo "
";
        
        $__internal_efdd41768000c252e1a35a9fc0a236d7e00c50058b828c9b3c7adb8a1cb83cd3->leave($__internal_efdd41768000c252e1a35a9fc0a236d7e00c50058b828c9b3c7adb8a1cb83cd3_prof);

        
        $__internal_4a2d223793d1c4b027b310ed94d40f3cea8cbfd39baec65979ae218f56200f62->leave($__internal_4a2d223793d1c4b027b310ed94d40f3cea8cbfd39baec65979ae218f56200f62_prof);

    }

    // line 181
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_6ee46e4b4e1c8dd8ce30d36f12066d461e4bc29894f72e06fd8511de22e9df99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee46e4b4e1c8dd8ce30d36f12066d461e4bc29894f72e06fd8511de22e9df99->enter($__internal_6ee46e4b4e1c8dd8ce30d36f12066d461e4bc29894f72e06fd8511de22e9df99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_220670779ac6fc8034b01081bf5831be644ee37d1ad67ad4a10a81004b831148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220670779ac6fc8034b01081bf5831be644ee37d1ad67ad4a10a81004b831148->enter($__internal_220670779ac6fc8034b01081bf5831be644ee37d1ad67ad4a10a81004b831148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        
        $__internal_220670779ac6fc8034b01081bf5831be644ee37d1ad67ad4a10a81004b831148->leave($__internal_220670779ac6fc8034b01081bf5831be644ee37d1ad67ad4a10a81004b831148_prof);

        
        $__internal_6ee46e4b4e1c8dd8ce30d36f12066d461e4bc29894f72e06fd8511de22e9df99->leave($__internal_6ee46e4b4e1c8dd8ce30d36f12066d461e4bc29894f72e06fd8511de22e9df99_prof);

    }

    // line 183
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_c5196ebfad8d0c28fbaa6cc3bcad877a76169a5b213e58dae0782c8f0729a70c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5196ebfad8d0c28fbaa6cc3bcad877a76169a5b213e58dae0782c8f0729a70c->enter($__internal_c5196ebfad8d0c28fbaa6cc3bcad877a76169a5b213e58dae0782c8f0729a70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_7d9923b90f3bc4fa43b5253b0bbc5fbe20c0d131780eaff0a2e15ae69a35de97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9923b90f3bc4fa43b5253b0bbc5fbe20c0d131780eaff0a2e15ae69a35de97->enter($__internal_7d9923b90f3bc4fa43b5253b0bbc5fbe20c0d131780eaff0a2e15ae69a35de97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        
        $__internal_7d9923b90f3bc4fa43b5253b0bbc5fbe20c0d131780eaff0a2e15ae69a35de97->leave($__internal_7d9923b90f3bc4fa43b5253b0bbc5fbe20c0d131780eaff0a2e15ae69a35de97_prof);

        
        $__internal_c5196ebfad8d0c28fbaa6cc3bcad877a76169a5b213e58dae0782c8f0729a70c->leave($__internal_c5196ebfad8d0c28fbaa6cc3bcad877a76169a5b213e58dae0782c8f0729a70c_prof);

    }

    public function getTemplateName()
    {
        return "PremiumBundle:Admin:reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 183,  408 => 181,  397 => 179,  388 => 178,  287 => 83,  276 => 78,  271 => 77,  267 => 76,  263 => 75,  259 => 74,  255 => 73,  251 => 72,  247 => 71,  243 => 70,  239 => 69,  235 => 68,  231 => 66,  227 => 65,  184 => 24,  175 => 23,  164 => 20,  155 => 19,  144 => 16,  135 => 15,  124 => 189,  122 => 183,  120 => 181,  118 => 178,  113 => 175,  111 => 23,  108 => 22,  106 => 19,  103 => 18,  101 => 15,  98 => 14,  89 => 13,  71 => 8,  59 => 9,  57 => 8,  48 => 7,  11 => 1,);
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
{# {% block stylesheet %}
<link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
{% endblock %} #}


{% block head %}
{% block title %}PremiumBundle:Admin:Adminimistrateur{% endblock %}


{% endblock %}

{% block body %}

{% block slide %}

{% endblock %}

{% block recherche %}
   
{% endblock %}

{% block offre %}
<div>
<br><br><br>
</div>

<div class=\"container\">
\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\" >
\t\t\t\t<div class=\"panel panel-primary\" >
\t\t\t\t\t<div class=\"panel-heading\">\t\t\t\t\t  
\t\t\t\t\t    <h3 class=\"panel-title\" style=\"font-size:35px;\">Liste des réservations en cours</h3>
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"clickable filter\" data-toggle=\"tooltip\" title=\"Toggle table filter\" data-container=\"body\">Filtrer
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-search\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"dev-table-filter\" data-action=\"filter\" data-filters=\"#dev-table\" placeholder=\"Rechercher\" />\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<table  class=\"table table-hover\" id=\"dev-table\">                     
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"entete\">
                        <th>NOM CLIENT</th>
\t\t\t\t\t\t<th >CNI</th>
\t\t\t\t\t\t<th >TÉLÉPHONE</th>
                        <th>ADRESSE</th>
\t\t\t\t\t\t<th >EMAIL</th>
                        <th>NOM BIEN</th>
                        <th>LOCALITÉ</th>
                        <th>TYPE BIEN</th>
                        <th>PRIX</th>
                    \t<th>IMAGE</th> 
                        <th>ACTION</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
                        {%for reservation in reservations%}
\t\t\t\t<tbody>
\t\t\t\t\t<tr >
\t\t\t\t        <td class=\"info\">{{reservation.Client.nomComplet}}</td>
\t\t\t\t\t\t<td class=\"info\">{{reservation.Client.numPiece}}</td>
\t\t\t\t\t\t<td class=\"info\">{{reservation.Client.tel}}</td>
               \t\t\t<td class=\"info\">{{reservation.Client.adresse}}</td>
\t\t\t\t\t\t<td class=\"info\">{{reservation.Client.email}}</td>
           \t\t\t\t<td class=\"info\">{{reservation.Bien.nomBien}}</td>
                        <td class=\"info\">{{reservation.Bien.Localite.libelle}}</td>
              \t\t\t<td class=\"info\">{{reservation.Bien.TypeBien.libelle}}</td>
               \t\t\t<td class=\"info\">{{reservation.Bien.prixlocation}}</td>
            \t\t\t<td class=\"info\"> <img class=\"lesimages\"  src=\"{{ asset('images/')}}{{reservation.bien.images[0].image}}\" alt=\"img1\" id=\"\" class=\"img-responsive\"></td> 
            \t\t\t<td class=\"info\"><a href=\"{{path ('reservation_info',{'id':reservation.id})}}\" class=\"btn btn-primary\" >Details</a></td>

\t\t\t\t\t</tr>
\t\t\t\t</tbody>
                {%endfor%}

\t\t\t\t\t</table>


\t\t\t\t
\t\t\t</div>
                  
        </div>

\t\t <div class=\"panel-footer\">
                <div class=\"row\">
                  <div style=\"font-size:20px;\" class=\"col col-xs-4\">Page 1 sur 5
                  </div>
                  <div class=\"col col-xs-8\">
                    <ul  style=\"font-size:20px;\" class=\"pagination hidden-xs pull-right\">
                      <li><a href=\"#\">1</a></li>
                      <li><a href=\"#\">2</a></li>
                      <li><a href=\"#\">3</a></li>
                      <li><a href=\"#\">4</a></li>
                      <li><a href=\"#\">5</a></li>
                    </ul>
                    <ul class=\"pagination visible-xs pull-right\">
                        <li><a href=\"#\">«</a></li>
                        <li><a href=\"#\">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              
         <div>
<br><br><br>\t
</div>
</div>
<style type=\"text/css\"  >
.lesimages{
    width:100px;
    height:100px;
\t}
.info{
\twidth:50px;\t
}
.ligne{
\tdisplay:flex;\t
}
.form-control{
\tpadding-left:20px;
}
.entete{
\tbackground-color:blue;
}



    /*style table bootstrap*/

        \t.row{
            align:center;
\t\t    margin-top:40px;
\t\t    padding: 0 10px;
\t\t\twidth:100%;
\t\t}
\t\t.clickable{
\t\t    cursor: pointer;   
\t\t}

\t\t.panel-heading div {
\t\t\tmargin-top: -18px;
\t\t\tfont-size: 15px;
\t\t}
\t\t\t.panel-heading input {
\t\t\twidth:20%;

\t\t}
\t\t.panel {
\t\t    float:right;
\t\t\twidth:100%;
\t\t}


\t\t.panel-heading div span{
\t\t\tmargin-left:5px;
\t\t}
\t\t.panel-body{
\t\t\tdisplay: none;
\t\t}
\t
\t
\t\t\t
\t\t
}
  </style>
{% endblock %}



{% block apropos %}

{% endblock %}
{% block partenaires %}
{% endblock %}
{% block galerie %}
{% endblock %}
{# {% block javascript %}
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js\"></script>
{% endblock %} #}

{% endblock %}", "PremiumBundle:Admin:reservation.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/Admin/reservation.html.twig");
    }
}
