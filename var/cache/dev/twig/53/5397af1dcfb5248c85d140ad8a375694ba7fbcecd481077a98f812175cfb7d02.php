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
        $__internal_d3fd98a4ee5ef8a26328961ab19ae4bab715823ba2a85e61d57977488dc1cb71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3fd98a4ee5ef8a26328961ab19ae4bab715823ba2a85e61d57977488dc1cb71->enter($__internal_d3fd98a4ee5ef8a26328961ab19ae4bab715823ba2a85e61d57977488dc1cb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:reservation.html.twig"));

        $__internal_c91c4e86519395920cc0b5a3238d01703d5056b557854808fee87426f808facb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91c4e86519395920cc0b5a3238d01703d5056b557854808fee87426f808facb->enter($__internal_c91c4e86519395920cc0b5a3238d01703d5056b557854808fee87426f808facb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3fd98a4ee5ef8a26328961ab19ae4bab715823ba2a85e61d57977488dc1cb71->leave($__internal_d3fd98a4ee5ef8a26328961ab19ae4bab715823ba2a85e61d57977488dc1cb71_prof);

        
        $__internal_c91c4e86519395920cc0b5a3238d01703d5056b557854808fee87426f808facb->leave($__internal_c91c4e86519395920cc0b5a3238d01703d5056b557854808fee87426f808facb_prof);

    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe9a539d695b530bebc4996de5cf60a2ca48224d1cdcee223b8cd770d49c58b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9a539d695b530bebc4996de5cf60a2ca48224d1cdcee223b8cd770d49c58b8->enter($__internal_fe9a539d695b530bebc4996de5cf60a2ca48224d1cdcee223b8cd770d49c58b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c44b09541f76611bdcdcffd417810c81b8ee7f24e362a0950a90e5f8ceed8ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44b09541f76611bdcdcffd417810c81b8ee7f24e362a0950a90e5f8ceed8ae6->enter($__internal_c44b09541f76611bdcdcffd417810c81b8ee7f24e362a0950a90e5f8ceed8ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "

";
        
        $__internal_c44b09541f76611bdcdcffd417810c81b8ee7f24e362a0950a90e5f8ceed8ae6->leave($__internal_c44b09541f76611bdcdcffd417810c81b8ee7f24e362a0950a90e5f8ceed8ae6_prof);

        
        $__internal_fe9a539d695b530bebc4996de5cf60a2ca48224d1cdcee223b8cd770d49c58b8->leave($__internal_fe9a539d695b530bebc4996de5cf60a2ca48224d1cdcee223b8cd770d49c58b8_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d5de005ea8027d690ce79db3041f84ebd2d3b434b6011327d95b8366a4a1024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5de005ea8027d690ce79db3041f84ebd2d3b434b6011327d95b8366a4a1024->enter($__internal_4d5de005ea8027d690ce79db3041f84ebd2d3b434b6011327d95b8366a4a1024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e30f01b13603f5ddfcb872e017aa97c9402c0e2dac57df4835921cc7fc91031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e30f01b13603f5ddfcb872e017aa97c9402c0e2dac57df4835921cc7fc91031->enter($__internal_5e30f01b13603f5ddfcb872e017aa97c9402c0e2dac57df4835921cc7fc91031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PremiumBundle:Admin:Adminimistrateur";
        
        $__internal_5e30f01b13603f5ddfcb872e017aa97c9402c0e2dac57df4835921cc7fc91031->leave($__internal_5e30f01b13603f5ddfcb872e017aa97c9402c0e2dac57df4835921cc7fc91031_prof);

        
        $__internal_4d5de005ea8027d690ce79db3041f84ebd2d3b434b6011327d95b8366a4a1024->leave($__internal_4d5de005ea8027d690ce79db3041f84ebd2d3b434b6011327d95b8366a4a1024_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_324ece38e4cd5136d89ba1f451b7e46b9f4aaad3bf7e53c1a5326f861d9827e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_324ece38e4cd5136d89ba1f451b7e46b9f4aaad3bf7e53c1a5326f861d9827e4->enter($__internal_324ece38e4cd5136d89ba1f451b7e46b9f4aaad3bf7e53c1a5326f861d9827e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b63944c78b49a42475cb01a57b2c8038f83420d88ccb2a201af37ba75262ba59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63944c78b49a42475cb01a57b2c8038f83420d88ccb2a201af37ba75262ba59->enter($__internal_b63944c78b49a42475cb01a57b2c8038f83420d88ccb2a201af37ba75262ba59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b63944c78b49a42475cb01a57b2c8038f83420d88ccb2a201af37ba75262ba59->leave($__internal_b63944c78b49a42475cb01a57b2c8038f83420d88ccb2a201af37ba75262ba59_prof);

        
        $__internal_324ece38e4cd5136d89ba1f451b7e46b9f4aaad3bf7e53c1a5326f861d9827e4->leave($__internal_324ece38e4cd5136d89ba1f451b7e46b9f4aaad3bf7e53c1a5326f861d9827e4_prof);

    }

    // line 15
    public function block_slide($context, array $blocks = array())
    {
        $__internal_a3eb647da1eb8752ed0eccd34a9825c3c986fd25d6fe7921ee85112db766e1e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3eb647da1eb8752ed0eccd34a9825c3c986fd25d6fe7921ee85112db766e1e0->enter($__internal_a3eb647da1eb8752ed0eccd34a9825c3c986fd25d6fe7921ee85112db766e1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_d14428b196a3ca7ea3b1a94940b110d886f8775576a8384731a64c487c89c9f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14428b196a3ca7ea3b1a94940b110d886f8775576a8384731a64c487c89c9f9->enter($__internal_d14428b196a3ca7ea3b1a94940b110d886f8775576a8384731a64c487c89c9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 16
        echo "
";
        
        $__internal_d14428b196a3ca7ea3b1a94940b110d886f8775576a8384731a64c487c89c9f9->leave($__internal_d14428b196a3ca7ea3b1a94940b110d886f8775576a8384731a64c487c89c9f9_prof);

        
        $__internal_a3eb647da1eb8752ed0eccd34a9825c3c986fd25d6fe7921ee85112db766e1e0->leave($__internal_a3eb647da1eb8752ed0eccd34a9825c3c986fd25d6fe7921ee85112db766e1e0_prof);

    }

    // line 19
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_a696b392a08f60ccdb6174f522ce07abb885cea7e4c38a393b3adeefe19235b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a696b392a08f60ccdb6174f522ce07abb885cea7e4c38a393b3adeefe19235b0->enter($__internal_a696b392a08f60ccdb6174f522ce07abb885cea7e4c38a393b3adeefe19235b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_44352e0e8487c6e6906c6fcdd211db23b21944b98b802d2ef30c3d7b2b0c66e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44352e0e8487c6e6906c6fcdd211db23b21944b98b802d2ef30c3d7b2b0c66e9->enter($__internal_44352e0e8487c6e6906c6fcdd211db23b21944b98b802d2ef30c3d7b2b0c66e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        // line 20
        echo "   
";
        
        $__internal_44352e0e8487c6e6906c6fcdd211db23b21944b98b802d2ef30c3d7b2b0c66e9->leave($__internal_44352e0e8487c6e6906c6fcdd211db23b21944b98b802d2ef30c3d7b2b0c66e9_prof);

        
        $__internal_a696b392a08f60ccdb6174f522ce07abb885cea7e4c38a393b3adeefe19235b0->leave($__internal_a696b392a08f60ccdb6174f522ce07abb885cea7e4c38a393b3adeefe19235b0_prof);

    }

    // line 23
    public function block_offre($context, array $blocks = array())
    {
        $__internal_0e100f1bbad457a76234bf12cc4b9dd1b874458e02a8c972fa135ff899416773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e100f1bbad457a76234bf12cc4b9dd1b874458e02a8c972fa135ff899416773->enter($__internal_0e100f1bbad457a76234bf12cc4b9dd1b874458e02a8c972fa135ff899416773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_c9b2d7ea4e073a5ed78e652ef116ecca87bfb1c702add13541c20468de5a2900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b2d7ea4e073a5ed78e652ef116ecca87bfb1c702add13541c20468de5a2900->enter($__internal_c9b2d7ea4e073a5ed78e652ef116ecca87bfb1c702add13541c20468de5a2900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

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
        
        $__internal_c9b2d7ea4e073a5ed78e652ef116ecca87bfb1c702add13541c20468de5a2900->leave($__internal_c9b2d7ea4e073a5ed78e652ef116ecca87bfb1c702add13541c20468de5a2900_prof);

        
        $__internal_0e100f1bbad457a76234bf12cc4b9dd1b874458e02a8c972fa135ff899416773->leave($__internal_0e100f1bbad457a76234bf12cc4b9dd1b874458e02a8c972fa135ff899416773_prof);

    }

    // line 178
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_bdb04e75817837c276f4a5653e7e6338d2e77c88eae5c45d008cee793cfdddac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdb04e75817837c276f4a5653e7e6338d2e77c88eae5c45d008cee793cfdddac->enter($__internal_bdb04e75817837c276f4a5653e7e6338d2e77c88eae5c45d008cee793cfdddac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_133f197e805fc16a1771be89140f08ce7d6a323f79485a9deb013201b7429a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133f197e805fc16a1771be89140f08ce7d6a323f79485a9deb013201b7429a35->enter($__internal_133f197e805fc16a1771be89140f08ce7d6a323f79485a9deb013201b7429a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        // line 179
        echo "
";
        
        $__internal_133f197e805fc16a1771be89140f08ce7d6a323f79485a9deb013201b7429a35->leave($__internal_133f197e805fc16a1771be89140f08ce7d6a323f79485a9deb013201b7429a35_prof);

        
        $__internal_bdb04e75817837c276f4a5653e7e6338d2e77c88eae5c45d008cee793cfdddac->leave($__internal_bdb04e75817837c276f4a5653e7e6338d2e77c88eae5c45d008cee793cfdddac_prof);

    }

    // line 181
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_bd2ca78a69ab9aa80d81c95f875e7ee3aea2e72fb710ee4748dc95b9b6b696b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd2ca78a69ab9aa80d81c95f875e7ee3aea2e72fb710ee4748dc95b9b6b696b6->enter($__internal_bd2ca78a69ab9aa80d81c95f875e7ee3aea2e72fb710ee4748dc95b9b6b696b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_5ab494da60ea34b542f442ed44e11ae4531d6863f68767c56ce7f7dd7cdde762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab494da60ea34b542f442ed44e11ae4531d6863f68767c56ce7f7dd7cdde762->enter($__internal_5ab494da60ea34b542f442ed44e11ae4531d6863f68767c56ce7f7dd7cdde762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        
        $__internal_5ab494da60ea34b542f442ed44e11ae4531d6863f68767c56ce7f7dd7cdde762->leave($__internal_5ab494da60ea34b542f442ed44e11ae4531d6863f68767c56ce7f7dd7cdde762_prof);

        
        $__internal_bd2ca78a69ab9aa80d81c95f875e7ee3aea2e72fb710ee4748dc95b9b6b696b6->leave($__internal_bd2ca78a69ab9aa80d81c95f875e7ee3aea2e72fb710ee4748dc95b9b6b696b6_prof);

    }

    // line 183
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_5a961a60117b27e071b87d6534fc2ae30d4c3a19a54c65cf6171e348961fea8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a961a60117b27e071b87d6534fc2ae30d4c3a19a54c65cf6171e348961fea8d->enter($__internal_5a961a60117b27e071b87d6534fc2ae30d4c3a19a54c65cf6171e348961fea8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_0dc5d86960f7760db9683bfb00bf0ce5b0ccfbb6033227aa68a2d5af2fa26ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc5d86960f7760db9683bfb00bf0ce5b0ccfbb6033227aa68a2d5af2fa26ee4->enter($__internal_0dc5d86960f7760db9683bfb00bf0ce5b0ccfbb6033227aa68a2d5af2fa26ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        
        $__internal_0dc5d86960f7760db9683bfb00bf0ce5b0ccfbb6033227aa68a2d5af2fa26ee4->leave($__internal_0dc5d86960f7760db9683bfb00bf0ce5b0ccfbb6033227aa68a2d5af2fa26ee4_prof);

        
        $__internal_5a961a60117b27e071b87d6534fc2ae30d4c3a19a54c65cf6171e348961fea8d->leave($__internal_5a961a60117b27e071b87d6534fc2ae30d4c3a19a54c65cf6171e348961fea8d_prof);

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
