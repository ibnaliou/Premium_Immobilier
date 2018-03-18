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
        $__internal_6b621ab03eef8ce4a4eef19ec4ce6007a498a0748337f706bea9e667bab7ca5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b621ab03eef8ce4a4eef19ec4ce6007a498a0748337f706bea9e667bab7ca5f->enter($__internal_6b621ab03eef8ce4a4eef19ec4ce6007a498a0748337f706bea9e667bab7ca5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:reservation.html.twig"));

        $__internal_3df8d3a60144634de95bc4c9f590794ece606335999c3ba83ca129b73b605d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df8d3a60144634de95bc4c9f590794ece606335999c3ba83ca129b73b605d4b->enter($__internal_3df8d3a60144634de95bc4c9f590794ece606335999c3ba83ca129b73b605d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b621ab03eef8ce4a4eef19ec4ce6007a498a0748337f706bea9e667bab7ca5f->leave($__internal_6b621ab03eef8ce4a4eef19ec4ce6007a498a0748337f706bea9e667bab7ca5f_prof);

        
        $__internal_3df8d3a60144634de95bc4c9f590794ece606335999c3ba83ca129b73b605d4b->leave($__internal_3df8d3a60144634de95bc4c9f590794ece606335999c3ba83ca129b73b605d4b_prof);

    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        $__internal_c4e5a1b0d50ad31adcbf70eccb32784f03fee6de8438dec51aec472d73a1c869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e5a1b0d50ad31adcbf70eccb32784f03fee6de8438dec51aec472d73a1c869->enter($__internal_c4e5a1b0d50ad31adcbf70eccb32784f03fee6de8438dec51aec472d73a1c869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7a0557b0f280cc40ab7d0ee0330f4bfeffca8f008502d36e7c7167741acb4e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0557b0f280cc40ab7d0ee0330f4bfeffca8f008502d36e7c7167741acb4e59->enter($__internal_7a0557b0f280cc40ab7d0ee0330f4bfeffca8f008502d36e7c7167741acb4e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "

";
        
        $__internal_7a0557b0f280cc40ab7d0ee0330f4bfeffca8f008502d36e7c7167741acb4e59->leave($__internal_7a0557b0f280cc40ab7d0ee0330f4bfeffca8f008502d36e7c7167741acb4e59_prof);

        
        $__internal_c4e5a1b0d50ad31adcbf70eccb32784f03fee6de8438dec51aec472d73a1c869->leave($__internal_c4e5a1b0d50ad31adcbf70eccb32784f03fee6de8438dec51aec472d73a1c869_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_64b85270ed50f80849323feeb2ce2fbc31c0ddfee6fd2f05360045f8bafd0114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b85270ed50f80849323feeb2ce2fbc31c0ddfee6fd2f05360045f8bafd0114->enter($__internal_64b85270ed50f80849323feeb2ce2fbc31c0ddfee6fd2f05360045f8bafd0114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47a32ee4f26d0e11efb5e0ddbb27719ab0c7d37c55e56cbb2767c67678767857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a32ee4f26d0e11efb5e0ddbb27719ab0c7d37c55e56cbb2767c67678767857->enter($__internal_47a32ee4f26d0e11efb5e0ddbb27719ab0c7d37c55e56cbb2767c67678767857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PremiumBundle:Admin:Adminimistrateur";
        
        $__internal_47a32ee4f26d0e11efb5e0ddbb27719ab0c7d37c55e56cbb2767c67678767857->leave($__internal_47a32ee4f26d0e11efb5e0ddbb27719ab0c7d37c55e56cbb2767c67678767857_prof);

        
        $__internal_64b85270ed50f80849323feeb2ce2fbc31c0ddfee6fd2f05360045f8bafd0114->leave($__internal_64b85270ed50f80849323feeb2ce2fbc31c0ddfee6fd2f05360045f8bafd0114_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0c8e262a454228ab306ce540cec6b70d34a36b0ea24789e9d3d04c04fecdc9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0c8e262a454228ab306ce540cec6b70d34a36b0ea24789e9d3d04c04fecdc9b->enter($__internal_f0c8e262a454228ab306ce540cec6b70d34a36b0ea24789e9d3d04c04fecdc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb4fb5088c3e7cea6cdc9a3c366016acfb35ea8ab26d6afb5c83f0e1bc27db2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4fb5088c3e7cea6cdc9a3c366016acfb35ea8ab26d6afb5c83f0e1bc27db2b->enter($__internal_fb4fb5088c3e7cea6cdc9a3c366016acfb35ea8ab26d6afb5c83f0e1bc27db2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fb4fb5088c3e7cea6cdc9a3c366016acfb35ea8ab26d6afb5c83f0e1bc27db2b->leave($__internal_fb4fb5088c3e7cea6cdc9a3c366016acfb35ea8ab26d6afb5c83f0e1bc27db2b_prof);

        
        $__internal_f0c8e262a454228ab306ce540cec6b70d34a36b0ea24789e9d3d04c04fecdc9b->leave($__internal_f0c8e262a454228ab306ce540cec6b70d34a36b0ea24789e9d3d04c04fecdc9b_prof);

    }

    // line 15
    public function block_slide($context, array $blocks = array())
    {
        $__internal_46f93a9f774ed8d81f4911a1b8d98da7f5d509e519ba48c01942cf50be9e5466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f93a9f774ed8d81f4911a1b8d98da7f5d509e519ba48c01942cf50be9e5466->enter($__internal_46f93a9f774ed8d81f4911a1b8d98da7f5d509e519ba48c01942cf50be9e5466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_72880fc9763fb725aed1a8e5d0bf9a8dbd2a179ef3cf332ed8ba2210527204f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72880fc9763fb725aed1a8e5d0bf9a8dbd2a179ef3cf332ed8ba2210527204f7->enter($__internal_72880fc9763fb725aed1a8e5d0bf9a8dbd2a179ef3cf332ed8ba2210527204f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 16
        echo "
";
        
        $__internal_72880fc9763fb725aed1a8e5d0bf9a8dbd2a179ef3cf332ed8ba2210527204f7->leave($__internal_72880fc9763fb725aed1a8e5d0bf9a8dbd2a179ef3cf332ed8ba2210527204f7_prof);

        
        $__internal_46f93a9f774ed8d81f4911a1b8d98da7f5d509e519ba48c01942cf50be9e5466->leave($__internal_46f93a9f774ed8d81f4911a1b8d98da7f5d509e519ba48c01942cf50be9e5466_prof);

    }

    // line 19
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_2530dd4d6c1cd7f5ea16104f31687ad7b71d572f829caf04f440cf2691496ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2530dd4d6c1cd7f5ea16104f31687ad7b71d572f829caf04f440cf2691496ec6->enter($__internal_2530dd4d6c1cd7f5ea16104f31687ad7b71d572f829caf04f440cf2691496ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_64833ebf2e38ea7a939b818852c2c80c58c61b6eb24e735ebd5825bcaa993e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64833ebf2e38ea7a939b818852c2c80c58c61b6eb24e735ebd5825bcaa993e50->enter($__internal_64833ebf2e38ea7a939b818852c2c80c58c61b6eb24e735ebd5825bcaa993e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        // line 20
        echo "   
";
        
        $__internal_64833ebf2e38ea7a939b818852c2c80c58c61b6eb24e735ebd5825bcaa993e50->leave($__internal_64833ebf2e38ea7a939b818852c2c80c58c61b6eb24e735ebd5825bcaa993e50_prof);

        
        $__internal_2530dd4d6c1cd7f5ea16104f31687ad7b71d572f829caf04f440cf2691496ec6->leave($__internal_2530dd4d6c1cd7f5ea16104f31687ad7b71d572f829caf04f440cf2691496ec6_prof);

    }

    // line 23
    public function block_offre($context, array $blocks = array())
    {
        $__internal_ee2911ffa4c5f4be216f717c6eb5cff1a0b18786565b650275a6b71b4636e1aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee2911ffa4c5f4be216f717c6eb5cff1a0b18786565b650275a6b71b4636e1aa->enter($__internal_ee2911ffa4c5f4be216f717c6eb5cff1a0b18786565b650275a6b71b4636e1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_44fc13174955ee038fe03701611772430234f2ffe2f33a1157c8a754083c7d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44fc13174955ee038fe03701611772430234f2ffe2f33a1157c8a754083c7d56->enter($__internal_44fc13174955ee038fe03701611772430234f2ffe2f33a1157c8a754083c7d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

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
        
        $__internal_44fc13174955ee038fe03701611772430234f2ffe2f33a1157c8a754083c7d56->leave($__internal_44fc13174955ee038fe03701611772430234f2ffe2f33a1157c8a754083c7d56_prof);

        
        $__internal_ee2911ffa4c5f4be216f717c6eb5cff1a0b18786565b650275a6b71b4636e1aa->leave($__internal_ee2911ffa4c5f4be216f717c6eb5cff1a0b18786565b650275a6b71b4636e1aa_prof);

    }

    // line 178
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_7e2f3005325f8e76c34739bafe102a60ff01bead600b3824254ad852d3bd5664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2f3005325f8e76c34739bafe102a60ff01bead600b3824254ad852d3bd5664->enter($__internal_7e2f3005325f8e76c34739bafe102a60ff01bead600b3824254ad852d3bd5664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_3e3b3969ed685537cda518ee9d640f7b99a98d342c16fd820bac2cfe630182d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3b3969ed685537cda518ee9d640f7b99a98d342c16fd820bac2cfe630182d9->enter($__internal_3e3b3969ed685537cda518ee9d640f7b99a98d342c16fd820bac2cfe630182d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        // line 179
        echo "
";
        
        $__internal_3e3b3969ed685537cda518ee9d640f7b99a98d342c16fd820bac2cfe630182d9->leave($__internal_3e3b3969ed685537cda518ee9d640f7b99a98d342c16fd820bac2cfe630182d9_prof);

        
        $__internal_7e2f3005325f8e76c34739bafe102a60ff01bead600b3824254ad852d3bd5664->leave($__internal_7e2f3005325f8e76c34739bafe102a60ff01bead600b3824254ad852d3bd5664_prof);

    }

    // line 181
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_a091f3f996ad056c2257f99a8f98855015bd29f4bef4fb0ce2665874a17bd92c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a091f3f996ad056c2257f99a8f98855015bd29f4bef4fb0ce2665874a17bd92c->enter($__internal_a091f3f996ad056c2257f99a8f98855015bd29f4bef4fb0ce2665874a17bd92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_802ebf795837e69bb254c6fe65ccc7bdbf52e0959ad2ecea6fa6178608b545e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802ebf795837e69bb254c6fe65ccc7bdbf52e0959ad2ecea6fa6178608b545e2->enter($__internal_802ebf795837e69bb254c6fe65ccc7bdbf52e0959ad2ecea6fa6178608b545e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        
        $__internal_802ebf795837e69bb254c6fe65ccc7bdbf52e0959ad2ecea6fa6178608b545e2->leave($__internal_802ebf795837e69bb254c6fe65ccc7bdbf52e0959ad2ecea6fa6178608b545e2_prof);

        
        $__internal_a091f3f996ad056c2257f99a8f98855015bd29f4bef4fb0ce2665874a17bd92c->leave($__internal_a091f3f996ad056c2257f99a8f98855015bd29f4bef4fb0ce2665874a17bd92c_prof);

    }

    // line 183
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_4b8f29c27df78d767f307f332c2b0700eeb7afc6b57587f3b76bf419c0be2920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8f29c27df78d767f307f332c2b0700eeb7afc6b57587f3b76bf419c0be2920->enter($__internal_4b8f29c27df78d767f307f332c2b0700eeb7afc6b57587f3b76bf419c0be2920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_f1f9b8525c60c8d50a41b189b0233c78c62bca4a63e7d2e1717be1a55c2cc958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f9b8525c60c8d50a41b189b0233c78c62bca4a63e7d2e1717be1a55c2cc958->enter($__internal_f1f9b8525c60c8d50a41b189b0233c78c62bca4a63e7d2e1717be1a55c2cc958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        
        $__internal_f1f9b8525c60c8d50a41b189b0233c78c62bca4a63e7d2e1717be1a55c2cc958->leave($__internal_f1f9b8525c60c8d50a41b189b0233c78c62bca4a63e7d2e1717be1a55c2cc958_prof);

        
        $__internal_4b8f29c27df78d767f307f332c2b0700eeb7afc6b57587f3b76bf419c0be2920->leave($__internal_4b8f29c27df78d767f307f332c2b0700eeb7afc6b57587f3b76bf419c0be2920_prof);

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
