<?php

/* PremiumBundle:Admin:listBien.html.twig */
class __TwigTemplate_1c2e6e12c3a976e67b1775beef5ac3d41629f100ae18122a8acfc8ca063295fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PremiumBundle::acceuiladmin.html.twig", "PremiumBundle:Admin:listBien.html.twig", 1);
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
        $__internal_f9251d5ee5ec0230c036cb2ea69a0fe1e49549c0c393d8ac2ed122c17aa4bc55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9251d5ee5ec0230c036cb2ea69a0fe1e49549c0c393d8ac2ed122c17aa4bc55->enter($__internal_f9251d5ee5ec0230c036cb2ea69a0fe1e49549c0c393d8ac2ed122c17aa4bc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:listBien.html.twig"));

        $__internal_172b6f1e0447c29d5e2868c48a5c578a557a2e70bc6c7c3ba9c4c5eeab96ddd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172b6f1e0447c29d5e2868c48a5c578a557a2e70bc6c7c3ba9c4c5eeab96ddd0->enter($__internal_172b6f1e0447c29d5e2868c48a5c578a557a2e70bc6c7c3ba9c4c5eeab96ddd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:listBien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9251d5ee5ec0230c036cb2ea69a0fe1e49549c0c393d8ac2ed122c17aa4bc55->leave($__internal_f9251d5ee5ec0230c036cb2ea69a0fe1e49549c0c393d8ac2ed122c17aa4bc55_prof);

        
        $__internal_172b6f1e0447c29d5e2868c48a5c578a557a2e70bc6c7c3ba9c4c5eeab96ddd0->leave($__internal_172b6f1e0447c29d5e2868c48a5c578a557a2e70bc6c7c3ba9c4c5eeab96ddd0_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_bed6465f5812bad52466a30c89f27fb04bd0ac4c10bae9d28dcf594ecb724754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed6465f5812bad52466a30c89f27fb04bd0ac4c10bae9d28dcf594ecb724754->enter($__internal_bed6465f5812bad52466a30c89f27fb04bd0ac4c10bae9d28dcf594ecb724754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_9da97319d8646a02b169b3ed116bcfdbb79aedf6ef418637b06a93b41a884905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da97319d8646a02b169b3ed116bcfdbb79aedf6ef418637b06a93b41a884905->enter($__internal_9da97319d8646a02b169b3ed116bcfdbb79aedf6ef418637b06a93b41a884905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
                                    <li><a href=\"#\">Bien</a></li>
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
                                            <th>ID</th>  
                                            <th>NOM</th>
                                            <th>PRIX</th>
                                            <th>IMAGE</th>
                                            <th>LOCALITE</th>
                                            <th>TYPE DE BIEN</th>
                                            <th>ETAT DU BIEN</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                     ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 46
            echo "


                            <tr class=\"gradeX\">
                                            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "id", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomBien", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixLocation", array()), "html", null, true);
            echo "</td>
                                            <td> <img class=\"lesimages\"  src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"img11\" id=\"\" class=\"img-responsive\"></td>
                                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Localite", array()), "libelle", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "TypeBien", array()), "libelle", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 56
            if (($this->getAttribute($context["bien"], "etat", array()) % 2 == 0)) {
                echo " Occupe ";
            } else {
                echo " Disponible ";
            }
            echo " </td>
            
                                            <td class=\"actions\">
                                                <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                                <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                            </td>
                                        </tr>
                                        
                                        
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
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
        
        $__internal_9da97319d8646a02b169b3ed116bcfdbb79aedf6ef418637b06a93b41a884905->leave($__internal_9da97319d8646a02b169b3ed116bcfdbb79aedf6ef418637b06a93b41a884905_prof);

        
        $__internal_bed6465f5812bad52466a30c89f27fb04bd0ac4c10bae9d28dcf594ecb724754->leave($__internal_bed6465f5812bad52466a30c89f27fb04bd0ac4c10bae9d28dcf594ecb724754_prof);

    }

    public function getTemplateName()
    {
        return "PremiumBundle:Admin:listBien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 68,  128 => 56,  124 => 55,  120 => 54,  115 => 53,  111 => 52,  107 => 51,  103 => 50,  97 => 46,  93 => 45,  49 => 3,  40 => 2,  11 => 1,);
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
                                    <li><a href=\"#\">Bien</a></li>
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
                                            <th>ID</th>  
                                            <th>NOM</th>
                                            <th>PRIX</th>
                                            <th>IMAGE</th>
                                            <th>LOCALITE</th>
                                            <th>TYPE DE BIEN</th>
                                            <th>ETAT DU BIEN</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                     {%for bien in biens%}



                            <tr class=\"gradeX\">
                                            <td>{{bien.id}}</td>
                                            <td>{{bien.nomBien}}</td>
                                            <td>{{bien.prixLocation}}</td>
                                            <td> <img class=\"lesimages\"  src=\"{{ asset('images/')}}{{bien.images[0].image}}\" alt=\"img11\" id=\"\" class=\"img-responsive\"></td>
                                            <td>{{bien.Localite.libelle}}</td>
                                            <td>{{bien.TypeBien.libelle}}</td>
                                            <td>{% if bien.etat  is even %} Occupe {% else %} Disponible {% endif %} </td>
            
                                            <td class=\"actions\">
                                                <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                                <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
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



  {% endblock %}
", "PremiumBundle:Admin:listBien.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/Admin/listBien.html.twig");
    }
}
