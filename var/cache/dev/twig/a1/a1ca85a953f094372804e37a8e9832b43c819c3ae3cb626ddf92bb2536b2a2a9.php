<?php

/* PremiumBundle:Admin:proreservation.html.twig */
class __TwigTemplate_e4a7bef4d57f6228ed51d4038ea2b916c4deb070174b93c257c137dea08f95a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PremiumBundle::acceuiladmin.html.twig", "PremiumBundle:Admin:proreservation.html.twig", 1);
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
        $__internal_7552655c5a952e2c51f6fababa7c3ae4e697920eb7bf22a0e3c7ba28d4b03e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7552655c5a952e2c51f6fababa7c3ae4e697920eb7bf22a0e3c7ba28d4b03e29->enter($__internal_7552655c5a952e2c51f6fababa7c3ae4e697920eb7bf22a0e3c7ba28d4b03e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:proreservation.html.twig"));

        $__internal_045531f5b8e48de081e3e9c7c71e210224263b190d15865913ee980b316eed0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045531f5b8e48de081e3e9c7c71e210224263b190d15865913ee980b316eed0c->enter($__internal_045531f5b8e48de081e3e9c7c71e210224263b190d15865913ee980b316eed0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:proreservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7552655c5a952e2c51f6fababa7c3ae4e697920eb7bf22a0e3c7ba28d4b03e29->leave($__internal_7552655c5a952e2c51f6fababa7c3ae4e697920eb7bf22a0e3c7ba28d4b03e29_prof);

        
        $__internal_045531f5b8e48de081e3e9c7c71e210224263b190d15865913ee980b316eed0c->leave($__internal_045531f5b8e48de081e3e9c7c71e210224263b190d15865913ee980b316eed0c_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_5407b4cb83b4d587cbd4c8dcd51a43bc392e83809ce6666b91cb0c811a4be821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5407b4cb83b4d587cbd4c8dcd51a43bc392e83809ce6666b91cb0c811a4be821->enter($__internal_5407b4cb83b4d587cbd4c8dcd51a43bc392e83809ce6666b91cb0c811a4be821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_bf1f2e765edf5bb9dee51865c0218d2cdae96950a2e2ac52232e57af20a9f4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1f2e765edf5bb9dee51865c0218d2cdae96950a2e2ac52232e57af20a9f4d9->enter($__internal_bf1f2e765edf5bb9dee51865c0218d2cdae96950a2e2ac52232e57af20a9f4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "=========================================== -->                      
            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">
                    <div class=\"container\">

                        <!-- Page-Title -->
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <h4 class=\"pull-left page-title\">Editable Table</h4>
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
                                              
                                                <th>NOM Proprietaire</th>
                                                <th >CNI</th>
                                                <th >TÉLÉPHONE</th>
                                                <th>ADRESSE</th>
                                                <th >EMAIL</th>
                                                <th >CODE BANQUE</th>
                                                <th>NOM BIEN</th>
                                                <th>LOCALITÉ</th>
                                                <th>TYPE BIEN</th>
                                                <th>PRIX</th>
                                                <th>IMAGE</th> 
                                                <th>ACTION</th>
                                        </tr>
                                    </thead>
                                     ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["proreservations"] ?? $this->getContext($context, "proreservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 51
            echo "

                            <tr class=\"gradeX\">
                                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Proprietaire", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Proprietaire", array()), "numPiece", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Proprietaire", array()), "tel", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Proprietaire", array()), "adresse", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Proprietaire", array()), "email", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Proprietaire", array()), "codeBanque", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "nomBien", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "Localite", array()), "libelle", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "TypeBien", array()), "libelle", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "Bien", array()), "prixlocation", array()), "html", null, true);
            echo "</td>
                                            <td> <img class=\"lesimages\"  src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"img1\" id=\"\" class=\"img-responsive\"></td>
                                            <td class=\"actions\">
                                                <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_reservePro", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" >Details</a></td>
                                            </td>
                                        </tr>
                                        
                                        
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
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
        
        $__internal_bf1f2e765edf5bb9dee51865c0218d2cdae96950a2e2ac52232e57af20a9f4d9->leave($__internal_bf1f2e765edf5bb9dee51865c0218d2cdae96950a2e2ac52232e57af20a9f4d9_prof);

        
        $__internal_5407b4cb83b4d587cbd4c8dcd51a43bc392e83809ce6666b91cb0c811a4be821->leave($__internal_5407b4cb83b4d587cbd4c8dcd51a43bc392e83809ce6666b91cb0c811a4be821_prof);

    }

    public function getTemplateName()
    {
        return "PremiumBundle:Admin:proreservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 72,  153 => 66,  147 => 64,  143 => 63,  139 => 62,  135 => 61,  131 => 60,  127 => 59,  123 => 58,  119 => 57,  115 => 56,  111 => 55,  107 => 54,  102 => 51,  98 => 50,  49 => 3,  40 => 2,  11 => 1,);
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
                                <h4 class=\"pull-left page-title\">Editable Table</h4>
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
                                              
                                                <th>NOM Proprietaire</th>
                                                <th >CNI</th>
                                                <th >TÉLÉPHONE</th>
                                                <th>ADRESSE</th>
                                                <th >EMAIL</th>
                                                <th >CODE BANQUE</th>
                                                <th>NOM BIEN</th>
                                                <th>LOCALITÉ</th>
                                                <th>TYPE BIEN</th>
                                                <th>PRIX</th>
                                                <th>IMAGE</th> 
                                                <th>ACTION</th>
                                        </tr>
                                    </thead>
                                     {%for reservation in proreservations%}


                            <tr class=\"gradeX\">
                                            <td>{{reservation.Proprietaire.nomComplet}}</td>
                                            <td>{{reservation.Proprietaire.numPiece}}</td>
                                            <td>{{reservation.Proprietaire.tel}}</td>
                                            <td>{{reservation.Proprietaire.adresse}}</td>
                                            <td>{{reservation.Proprietaire.email}}</td>
                                            <td>{{reservation.Proprietaire.codeBanque}}</td>
                                            <td>{{reservation.Bien.nomBien}}</td>
                                            <td>{{reservation.Bien.Localite.libelle}}</td>
                                            <td>{{reservation.Bien.TypeBien.libelle}}</td>
                                            <td>{{reservation.Bien.prixlocation}}</td>
                                            <td> <img class=\"lesimages\"  src=\"{{ asset('images/')}}{{reservation.bien.images[0].image}}\" alt=\"img1\" id=\"\" class=\"img-responsive\"></td>
                                            <td class=\"actions\">
                                                <a href=\"{{path ('list_reservePro',{'id':reservation.id})}}\" class=\"btn btn-primary\" >Details</a></td>
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


{% endblock %}", "PremiumBundle:Admin:proreservation.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/Admin/proreservation.html.twig");
    }
}
