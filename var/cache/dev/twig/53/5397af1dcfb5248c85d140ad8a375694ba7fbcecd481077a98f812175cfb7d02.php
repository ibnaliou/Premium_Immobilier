<?php

/* PremiumBundle:Admin:reservation.html.twig */
class __TwigTemplate_9f0ef2824a9c26eb394de1a05dca18222cd0c109f86b6359af35a9239503dd25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PremiumBundle::acceuiladmin.html.twig", "PremiumBundle:Admin:reservation.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PremiumBundle::acceuiladmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_624a40629fa449104eecdb6e2fc5304dec0f00cde777fd59524f46d11e6ff6da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624a40629fa449104eecdb6e2fc5304dec0f00cde777fd59524f46d11e6ff6da->enter($__internal_624a40629fa449104eecdb6e2fc5304dec0f00cde777fd59524f46d11e6ff6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:reservation.html.twig"));

        $__internal_9e32a176273a0b48c4c2c161b4a107a3c88a557ed2d4d759f098820fcc9286da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e32a176273a0b48c4c2c161b4a107a3c88a557ed2d4d759f098820fcc9286da->enter($__internal_9e32a176273a0b48c4c2c161b4a107a3c88a557ed2d4d759f098820fcc9286da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_624a40629fa449104eecdb6e2fc5304dec0f00cde777fd59524f46d11e6ff6da->leave($__internal_624a40629fa449104eecdb6e2fc5304dec0f00cde777fd59524f46d11e6ff6da_prof);

        
        $__internal_9e32a176273a0b48c4c2c161b4a107a3c88a557ed2d4d759f098820fcc9286da->leave($__internal_9e32a176273a0b48c4c2c161b4a107a3c88a557ed2d4d759f098820fcc9286da_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_a84d98e720a15e38a575f985f4dec810749087b50a63caece72c34ba315dc7fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84d98e720a15e38a575f985f4dec810749087b50a63caece72c34ba315dc7fd->enter($__internal_a84d98e720a15e38a575f985f4dec810749087b50a63caece72c34ba315dc7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_5857d34159cc5efe868d471d219051d77abbc44354640056447ee2dc960fe949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5857d34159cc5efe868d471d219051d77abbc44354640056447ee2dc960fe949->enter($__internal_5857d34159cc5efe868d471d219051d77abbc44354640056447ee2dc960fe949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "=========================================== -->                      
            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">
                    <div class=\"container\">

                        <!-- Page-Title -->
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <h4 class=\"pull-left page-title\">RESERVATION EN COURS</h4>
                                <ol class=\"breadcrumb pull-right\">
                                    <li><a href=\"#\">Moltran</a></li>
                                    <li><a href=\"#\">Tables</a></li>
                                    <li class=\"active\">Editable Table</li>
                                </ol>
                            </div>
                        </div>


                        <div class=\"panel\">
                            
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"m-b-30\">
                                            <button type=\"button\" id=\"addToTable\" class=\"btn btn-primary waves-effect waves-light\">Add <i class=\"fa fa-plus\"></i></button>
                                        </div>
                                    </div>
                                </div>
                                 <table class=\"table table-bordered table-striped\" id=\"datatable-editable\">
                                    <thead>
                                        <tr>
                                              
                                                <th>NOM CLIENT</th>
                                                <th >CNI</th>
                                                <th >TÉLÉPHONE</th>
                                                <th>ADRESSE</th>
                                                <th >EMAIL</th>
                                                <th>NOM BIEN</th>
                                                <th>LOCALITÉ</th>
                                                <th>TYPE BIEN</th>
                                                <th>PRIX</th>
                                                <th>IMAGE</th> 
                                                <th>ACTION</th>
                                        </tr>
                                    </thead>
                                     ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 50
            echo "

                            <tr class=\"gradeX\">
                                            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "numPiece", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "tel", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "adresse", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Client", array()), "email", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "nomBien", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "Localite", array()), "libelle", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "TypeBien", array()), "libelle", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "prixlocation", array()), "html", null, true);
            echo "</td>
                                            <td> <img class=\"lesimages\"  src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"img1\" id=\"\" class=\"img-responsive\"></td>
                                            <td class=\"actions\">
                                                <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_info", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" >Details</a></td>
                                            </td>
                                        </tr>
                                        
                                        
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                      </table>

                        </div> <!-- end Panel -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class=\"footer text-right\">
                    2016 © Moltran.
                </footer>

            </div>
                <style type=\"text/css\"  >
.lesimages{
    width:100px;
    height:100px;
}
  </style>



  ";
        
        $__internal_5857d34159cc5efe868d471d219051d77abbc44354640056447ee2dc960fe949->leave($__internal_5857d34159cc5efe868d471d219051d77abbc44354640056447ee2dc960fe949_prof);

        
        $__internal_a84d98e720a15e38a575f985f4dec810749087b50a63caece72c34ba315dc7fd->leave($__internal_a84d98e720a15e38a575f985f4dec810749087b50a63caece72c34ba315dc7fd_prof);

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
        return array (  160 => 70,  148 => 64,  142 => 62,  138 => 61,  134 => 60,  130 => 59,  126 => 58,  122 => 57,  118 => 56,  114 => 55,  110 => 54,  106 => 53,  101 => 50,  97 => 49,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'PremiumBundle::acceuiladmin.html.twig' %}
 {% block container %}
=========================================== -->                      
            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">
                    <div class=\"container\">

                        <!-- Page-Title -->
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <h4 class=\"pull-left page-title\">RESERVATION EN COURS</h4>
                                <ol class=\"breadcrumb pull-right\">
                                    <li><a href=\"#\">Moltran</a></li>
                                    <li><a href=\"#\">Tables</a></li>
                                    <li class=\"active\">Editable Table</li>
                                </ol>
                            </div>
                        </div>


                        <div class=\"panel\">
                            
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"m-b-30\">
                                            <button type=\"button\" id=\"addToTable\" class=\"btn btn-primary waves-effect waves-light\">Add <i class=\"fa fa-plus\"></i></button>
                                        </div>
                                    </div>
                                </div>
                                 <table class=\"table table-bordered table-striped\" id=\"datatable-editable\">
                                    <thead>
                                        <tr>
                                              
                                                <th>NOM CLIENT</th>
                                                <th >CNI</th>
                                                <th >TÉLÉPHONE</th>
                                                <th>ADRESSE</th>
                                                <th >EMAIL</th>
                                                <th>NOM BIEN</th>
                                                <th>LOCALITÉ</th>
                                                <th>TYPE BIEN</th>
                                                <th>PRIX</th>
                                                <th>IMAGE</th> 
                                                <th>ACTION</th>
                                        </tr>
                                    </thead>
                                     {%for reservation in reservations%}


                            <tr class=\"gradeX\">
                                            <td>{{reservation.Client.nomComplet}}</td>
                                            <td>{{reservation.Client.numPiece}}</td>
                                            <td>{{reservation.Client.tel}}</td>
                                            <td>{{reservation.Client.adresse}}</td>
                                            <td>{{reservation.Client.email}}</td>
                                            <td>{{reservation.Bien.nomBien}}</td>
                                            <td>{{reservation.Bien.Localite.libelle}}</td>
                                            <td>{{reservation.Bien.TypeBien.libelle}}</td>
                                            <td>{{reservation.Bien.prixlocation}}</td>
                                            <td> <img class=\"lesimages\"  src=\"{{ asset('images/')}}{{reservation.bien.images[0].image}}\" alt=\"img1\" id=\"\" class=\"img-responsive\"></td>
                                            <td class=\"actions\">
                                                <a href=\"{{path ('reservation_info',{'id':reservation.id})}}\" class=\"btn btn-primary\" >Details</a></td>
                                            </td>
                                        </tr>
                                        
                                        
                          {%endfor%}
                      </table>

                        </div> <!-- end Panel -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class=\"footer text-right\">
                    2016 © Moltran.
                </footer>

            </div>
                <style type=\"text/css\"  >
.lesimages{
    width:100px;
    height:100px;
}
  </style>



  {% endblock %}", "PremiumBundle:Admin:reservation.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/Admin/reservation.html.twig");
    }
}
