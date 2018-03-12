<?php

/* PremiumBundle:Admin:reservation.html.twig */
class __TwigTemplate_4857543c5aa269dba323df7490c190c44af4bbccb1488c7fa6aea61d687ba582 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "

";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "PremiumBundle:Admin:Adminimistrateur";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 15
    public function block_slide($context, array $blocks = array())
    {
        // line 16
        echo "
";
    }

    // line 19
    public function block_recherche($context, array $blocks = array())
    {
        // line 20
        echo "   
";
    }

    // line 23
    public function block_offre($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? null));
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
    }

    // line 178
    public function block_apropos($context, array $blocks = array())
    {
        // line 179
        echo "
";
    }

    // line 181
    public function block_partenaires($context, array $blocks = array())
    {
    }

    // line 183
    public function block_galerie($context, array $blocks = array())
    {
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
        return array (  317 => 183,  312 => 181,  307 => 179,  304 => 178,  209 => 83,  198 => 78,  193 => 77,  189 => 76,  185 => 75,  181 => 74,  177 => 73,  173 => 72,  169 => 71,  165 => 70,  161 => 69,  157 => 68,  153 => 66,  149 => 65,  106 => 24,  103 => 23,  98 => 20,  95 => 19,  90 => 16,  87 => 15,  82 => 189,  80 => 183,  78 => 181,  76 => 178,  71 => 175,  69 => 23,  66 => 22,  64 => 19,  61 => 18,  59 => 15,  56 => 14,  53 => 13,  47 => 8,  41 => 9,  39 => 8,  36 => 7,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PremiumBundle:Admin:reservation.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/Admin/reservation.html.twig");
    }
}
