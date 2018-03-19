<?php

/* PremiumBundle:Admin:proreservationinfo.html.twig */
class __TwigTemplate_d2a7a6f93a4aec3cb0ba17d710a985c1922d3d305579f4a0a5449bcccf7a6ace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PremiumBundle::acceuiladmin.html.twig", "PremiumBundle:Admin:proreservationinfo.html.twig", 1);
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
        $__internal_bf59413bb7ce75ce1054b73dafba6093f15c8f4a0c9797bb3a80986efbf2fb02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf59413bb7ce75ce1054b73dafba6093f15c8f4a0c9797bb3a80986efbf2fb02->enter($__internal_bf59413bb7ce75ce1054b73dafba6093f15c8f4a0c9797bb3a80986efbf2fb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:proreservationinfo.html.twig"));

        $__internal_69d27d15d399540ee2806b4cfa203fb2ebdfce62ed22f34455c219d71efaece7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d27d15d399540ee2806b4cfa203fb2ebdfce62ed22f34455c219d71efaece7->enter($__internal_69d27d15d399540ee2806b4cfa203fb2ebdfce62ed22f34455c219d71efaece7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:proreservationinfo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf59413bb7ce75ce1054b73dafba6093f15c8f4a0c9797bb3a80986efbf2fb02->leave($__internal_bf59413bb7ce75ce1054b73dafba6093f15c8f4a0c9797bb3a80986efbf2fb02_prof);

        
        $__internal_69d27d15d399540ee2806b4cfa203fb2ebdfce62ed22f34455c219d71efaece7->leave($__internal_69d27d15d399540ee2806b4cfa203fb2ebdfce62ed22f34455c219d71efaece7_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_0dea5c0f9795c35cff9641e366bba34acaba7e862e4acf45ad341fd720cbc789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dea5c0f9795c35cff9641e366bba34acaba7e862e4acf45ad341fd720cbc789->enter($__internal_0dea5c0f9795c35cff9641e366bba34acaba7e862e4acf45ad341fd720cbc789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_97a2813957365a9ab5c33059ff9bb3945dce7cf33ce48f589a2415b64806c843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a2813957365a9ab5c33059ff9bb3945dce7cf33ce48f589a2415b64806c843->enter($__internal_97a2813957365a9ab5c33059ff9bb3945dce7cf33ce48f589a2415b64806c843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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

        
                    <form class=\"form-horizontal\">

                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["proreservations"] ?? $this->getContext($context, "proreservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["proreservation"]) {
            // line 37
            echo "                            <div class=\"row container\">
                                <div class=\"col-md-3\">
                                    <fieldset>

                                        <div class=\"panel panel-success\" style=\"width:100%\">
                                            <div class=\"panel-heading\">
                                                <h3 class=\"panneau-titre\">
                                                    <font style=\"vertical-align: hériter;\">
                                                        <font style=\"vertical-align: hériter;\"></font>INFO Proprietaire</font>
                                                </h3>
                                            </div>
                                            <div class=\"panel-body\">
                                                <font style=\"vertical-aligner: hériter;\">
                                                    <font style=\"vertical-align: inherit;\">
                                                        NOM COMPLET :<p>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proreservation"], "Proprietaire", array()), "nomComplet", array()), "html", null, true);
            echo "</p>
                                                        Numero DE PIECE
                                                        <p>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proreservation"], "Proprietaire", array()), "numPiece", array()), "html", null, true);
            echo "</p>
                                                        Numero de TELEPHONE :
                                                        <p>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proreservation"], "Proprietaire", array()), "tel", array()), "html", null, true);
            echo "</p>
                                                        ADRESSE :
                                                        <p>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proreservation"], "Proprietaire", array()), "adresse", array()), "html", null, true);
            echo "</p>
                                                        ADRESSE MAIL:
                                                        <p>
                                                            ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proreservation"], "Proprietaire", array()), "email", array()), "html", null, true);
            echo "</p>
                                                        <p></p>
                                                    </font>
                                                </font>
                                            </div>
                                        </div>

                                    </fieldset>
                                </div>

                                <div class=\"col-md-6\">
                                    <fieldset>

                                        <div class=\"panel panel-warning\" style=\"width:100%\">
                                            <div class=\"panel-heading\">
                                                <h3 class=\"panneau-titre\">
                                                    <font style=\"vertical-align: hériter;\">
                                                        <font style=\"vertical-align: hériter;\"></font>IMAGE BIEN</font>
                                                </h3>
                                            </div>
                                            <div class=\"panel-body\">
                                                <font style=\"vertical-aligner: hériter;\">
                                                    <font style=\"vertical-align: inherit;\">
                                                        <div class=\"mg-best-rooms maclasse\" style=\"display:flex\">
                                                            <div class=\"container ok\">
                                                                <div class=\"mySlides\">
                                                                    <div class=\"numbertext\">1 / 3</div>
                                                                    <img src=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["proreservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:30%\">
                                                                </div>

                                                                <div class=\"mySlides\">
                                                                    <div class=\"numbertext\">2 / 3</div>
                                                                    <img src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["proreservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:30%\">
                                                                </div>

                                                                <div class=\"mySlides\">
                                                                    <div class=\"numbertext\">3 / 3</div>
                                                                    <img src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["proreservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:30%\">
                                                                </div>

                                                                <div class=\"row\" style=\"display:flex;margin-left:2px;height:500px;\">
                                                                    <img class=\"demo cursor\" src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["proreservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:10%;height:20%\" onclick=\"currentSlide(1)\" alt=\"The Woods\">
                                                                    <img class=\"demo cursor\" src=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["proreservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:10%; height:20%\" onclick=\"currentSlide(2)\" alt=\"Northern Lights\">
                                                                    <img class=\"demo cursor\" src=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["proreservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:10%; height:20%\" onclick=\"currentSlide(3)\" alt=\"Nature and sunrise\">
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

                                            <div class=\"panel panel-success\" style=\"width:100%\">
                                                <div class=\"panel-heading\">
                                                    <h3 class=\"panneau-titre\">
                                                        <font style=\"vertical-align: hériter;\">
                                                            <font style=\"vertical-align: hériter;\"></font>INFO BIEN</font>
                                                    </h3>
                                                </div>
                                                <div class=\"panel-body\">
                                                    <font style=\"vertical-aligner: hériter;\">
                                                        <font style=\"vertical-align: inherit;\">
                                                            NOM:
                                                            <p>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proreservation"], "Bien", array()), "nomBien", array()), "html", null, true);
            echo "</p>
                                                            LOCALITE:
                                                            <p>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["proreservation"], "Bien", array()), "Localite", array()), "libelle", array()), "html", null, true);
            echo "</p>
                                                            TYPE DE BIEN:
                                                            <p>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["proreservation"], "Bien", array()), "TypeBien", array()), "libelle", array()), "html", null, true);
            echo "</p>
                                                            PRIX DE LOCATION:
                                                            <p>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proreservation"], "Bien", array()), "prixlocation", array()), "html", null, true);
            echo "</p>
                                                        </font>
                                                    </font>
                                                </div>

                                                <div class=\"form-group\">
                                                    <div class=\"col-lg-10\" \"col-lg-offset-2\">

                                                        <button type=\"soumettre\" class=\"btn btn-primaire\">
                                                            <font style=\"vertical-aligner: hériter;\">
                                                                <font style=\"vertical-aligner: hériter;\">
                                                                    <a href=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat_reservation", array("id" => $this->getAttribute($context["proreservation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">VALIDER</a>
                                                                </td>
                                                            </font>
                                                        </font >
                                                    </button>

                                                    <button type=\"soumettre\" class=\"btn btn-primaire\">
                                                        <font style=\"vertical-aligner: hériter;\">
                                                            <font style=\"vertical-aligner: hériter;\">
                                                                <a href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_reservationPro", array("id" => $this->getAttribute($context["proreservation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">RETOUR</a>
                                                            </font>
                                                        </font >
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </fieldset>

                            </div>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proreservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                        </form>
        
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
        
        $__internal_97a2813957365a9ab5c33059ff9bb3945dce7cf33ce48f589a2415b64806c843->leave($__internal_97a2813957365a9ab5c33059ff9bb3945dce7cf33ce48f589a2415b64806c843_prof);

        
        $__internal_0dea5c0f9795c35cff9641e366bba34acaba7e862e4acf45ad341fd720cbc789->leave($__internal_0dea5c0f9795c35cff9641e366bba34acaba7e862e4acf45ad341fd720cbc789_prof);

    }

    public function getTemplateName()
    {
        return "PremiumBundle:Admin:proreservationinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 168,  260 => 153,  248 => 144,  234 => 133,  229 => 131,  224 => 129,  219 => 127,  191 => 103,  186 => 102,  181 => 101,  173 => 97,  164 => 92,  155 => 87,  125 => 60,  119 => 57,  114 => 55,  109 => 53,  104 => 51,  88 => 37,  84 => 36,  49 => 3,  40 => 2,  11 => 1,);
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

        
                    <form class=\"form-horizontal\">

                        {%for proreservation in  proreservations %}
                            <div class=\"row container\">
                                <div class=\"col-md-3\">
                                    <fieldset>

                                        <div class=\"panel panel-success\" style=\"width:100%\">
                                            <div class=\"panel-heading\">
                                                <h3 class=\"panneau-titre\">
                                                    <font style=\"vertical-align: hériter;\">
                                                        <font style=\"vertical-align: hériter;\"></font>INFO Proprietaire</font>
                                                </h3>
                                            </div>
                                            <div class=\"panel-body\">
                                                <font style=\"vertical-aligner: hériter;\">
                                                    <font style=\"vertical-align: inherit;\">
                                                        NOM COMPLET :<p>{{proreservation.Proprietaire.nomComplet}}</p>
                                                        Numero DE PIECE
                                                        <p>{{proreservation.Proprietaire.numPiece}}</p>
                                                        Numero de TELEPHONE :
                                                        <p>{{proreservation.Proprietaire.tel}}</p>
                                                        ADRESSE :
                                                        <p>{{proreservation.Proprietaire.adresse}}</p>
                                                        ADRESSE MAIL:
                                                        <p>
                                                            {{proreservation.Proprietaire.email}}</p>
                                                        <p></p>
                                                    </font>
                                                </font>
                                            </div>
                                        </div>

                                    </fieldset>
                                </div>

                                <div class=\"col-md-6\">
                                    <fieldset>

                                        <div class=\"panel panel-warning\" style=\"width:100%\">
                                            <div class=\"panel-heading\">
                                                <h3 class=\"panneau-titre\">
                                                    <font style=\"vertical-align: hériter;\">
                                                        <font style=\"vertical-align: hériter;\"></font>IMAGE BIEN</font>
                                                </h3>
                                            </div>
                                            <div class=\"panel-body\">
                                                <font style=\"vertical-aligner: hériter;\">
                                                    <font style=\"vertical-align: inherit;\">
                                                        <div class=\"mg-best-rooms maclasse\" style=\"display:flex\">
                                                            <div class=\"container ok\">
                                                                <div class=\"mySlides\">
                                                                    <div class=\"numbertext\">1 / 3</div>
                                                                    <img src=\"{{ asset('images/')}}{{proreservation.bien.images[0].image}}\" style=\"width:30%\">
                                                                </div>

                                                                <div class=\"mySlides\">
                                                                    <div class=\"numbertext\">2 / 3</div>
                                                                    <img src=\"{{ asset('images/')}}{{proreservation.bien.images[0].image}}\" style=\"width:30%\">
                                                                </div>

                                                                <div class=\"mySlides\">
                                                                    <div class=\"numbertext\">3 / 3</div>
                                                                    <img src=\"{{ asset('images/')}}{{proreservation.bien.images[0].image}}\" style=\"width:30%\">
                                                                </div>

                                                                <div class=\"row\" style=\"display:flex;margin-left:2px;height:500px;\">
                                                                    <img class=\"demo cursor\" src=\"{{ asset('images/')}}{{proreservation.bien.images[0].image}}\" style=\"width:10%;height:20%\" onclick=\"currentSlide(1)\" alt=\"The Woods\">
                                                                    <img class=\"demo cursor\" src=\"{{ asset('images/')}}{{proreservation.bien.images[0].image}}\" style=\"width:10%; height:20%\" onclick=\"currentSlide(2)\" alt=\"Northern Lights\">
                                                                    <img class=\"demo cursor\" src=\"{{ asset('images/')}}{{proreservation.bien.images[0].image}}\" style=\"width:10%; height:20%\" onclick=\"currentSlide(3)\" alt=\"Nature and sunrise\">
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

                                            <div class=\"panel panel-success\" style=\"width:100%\">
                                                <div class=\"panel-heading\">
                                                    <h3 class=\"panneau-titre\">
                                                        <font style=\"vertical-align: hériter;\">
                                                            <font style=\"vertical-align: hériter;\"></font>INFO BIEN</font>
                                                    </h3>
                                                </div>
                                                <div class=\"panel-body\">
                                                    <font style=\"vertical-aligner: hériter;\">
                                                        <font style=\"vertical-align: inherit;\">
                                                            NOM:
                                                            <p>{{proreservation.Bien.nomBien}}</p>
                                                            LOCALITE:
                                                            <p>{{proreservation.Bien.Localite.libelle}}</p>
                                                            TYPE DE BIEN:
                                                            <p>{{proreservation.Bien.TypeBien.libelle}}</p>
                                                            PRIX DE LOCATION:
                                                            <p>{{proreservation.Bien.prixlocation}}</p>
                                                        </font>
                                                    </font>
                                                </div>

                                                <div class=\"form-group\">
                                                    <div class=\"col-lg-10\" \"col-lg-offset-2\">

                                                        <button type=\"soumettre\" class=\"btn btn-primaire\">
                                                            <font style=\"vertical-aligner: hériter;\">
                                                                <font style=\"vertical-aligner: hériter;\">
                                                                    <a href=\"{{path ('contrat_reservation',{'id':proreservation.id})}}\" class=\"btn btn-primary\">VALIDER</a>
                                                                </td>
                                                            </font>
                                                        </font >
                                                    </button>

                                                    <button type=\"soumettre\" class=\"btn btn-primaire\">
                                                        <font style=\"vertical-aligner: hériter;\">
                                                            <font style=\"vertical-aligner: hériter;\">
                                                                <a href=\"{{path ('list_reservationPro',{'id':proreservation.id})}}\" class=\"btn btn-success\">RETOUR</a>
                                                            </font>
                                                        </font >
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </fieldset>

                            </div>

                            {%endfor%}
                        </form>
        
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
", "PremiumBundle:Admin:proreservationinfo.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/Admin/proreservationinfo.html.twig");
    }
}
