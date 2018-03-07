<?php

/* PremiumBundle::acceuil.html.twig */
class __TwigTemplate_40819f0734989ebc5d6655b96360af5782981fd5d3f789fedbcefcb7e45b71b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'slide' => array($this, 'block_slide'),
            'recherche' => array($this, 'block_recherche'),
            'offre' => array($this, 'block_offre'),
            'apropos' => array($this, 'block_apropos'),
            'partenaires' => array($this, 'block_partenaires'),
            'galerie' => array($this, 'block_galerie'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Premium Immobilier</title>
    <!--Data table include-->
        <link href=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Playfair+Display:400,400italic,700,700italic,900,900italic"), "html", null, true);
        echo "rel='stylesheet' type='text/css'>
        <script defer src=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://use.fontawesome.com/releases/v5.0.6/js/all.js"), "html", null, true);
        echo "></script>
        <!-- Bootstrap -->
        

        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.transitions.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/cs-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/freepik.hotels.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/gallerie.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">





        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/html5shiv.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/respond.min.js"), "html", null, true);
        echo "></script>
        <![endif]-->
        <script type=\"text/javascript\" src=";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.js"), "html", null, true);
        echo "></script>

        <script src=";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.min.js"), "html", null, true);
        echo "></script>
       

    </head>
    <body>
  
        
        
            ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 101
        echo "



  ";
        // line 105
        $this->displayBlock('slide', $context, $blocks);
        // line 150
        $this->displayBlock('recherche', $context, $blocks);
        // line 205
        $this->displayBlock('offre', $context, $blocks);
        // line 247
        echo "        ";
        $this->displayBlock('apropos', $context, $blocks);
        // line 275
        echo "
";
        // line 276
        $this->displayBlock('partenaires', $context, $blocks);
        // line 310
        $this->displayBlock('galerie', $context, $blocks);
        // line 362
        $this->displayBlock('footer', $context, $blocks);
        // line 454
        echo "        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      
        <script src=";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jssor.slider.mini.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/selectFx.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/starrr.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nivo-lightbox.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.shuffle.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://maps.google.com/maps/api/js?sensor=true"), "html", null, true);
        echo "></script>
        <script src=";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/gmaps.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lisbien.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/gallerie.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/form.js"), "html", null, true);
        echo "></script>  

  

    </body>
</html>";
    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        // line 50
        echo "
        <header class=\"header transp sticky\"> <!-- available class for header: .sticky .center-content .transp -->
            <nav class=\"navbar navbar-inverse\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Capture.PNG"), "html", null, true);
        echo "\" id=\"logo\"alt=\"logo\"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuil");
        echo "\">ACCEUIL</a></li>
                            <li class=\"\"><a href=\"#apropos\">A PROPOS</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">LOUER <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Maisons</a></li>
                                    <li><a href=\"#\">Chambres</a></li>
                                    <li><a href=\"#\">Bureaus</a></li>
                                    <li><a href=\"#\">Appartements</a></li>
                                    <li><a href=\"#\">Studios</a></li>
                                    <li><a href=\"#\">Parking</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue");
        echo "\" >CATALOGUE</a>
                               
                            </li>
                            <li><a href=\"#\">SE CONNECTER</a></li>
                            <li><a href=\"#\">CONTACT</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class=\"mg-search-box-cont pull-right\">
                        <a href=\"#\" class=\"mg-search-box-trigger\"><i class=\"fa fa-search\"></i></a>
                        <div class=\"mg-search-box\">
                            <form>
                                <input type=\"text\" name=\"s\" class=\"form-control\" placeholder=\"rechercher\">
                                <button type=\"submit\" class=\"btn btn-main\"><i class=\"fa fa-search\"></i></button>
                            </form>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
        </header>
";
    }

    // line 105
    public function block_slide($context, array $blocks = array())
    {
        // line 106
        echo "        <div id=\"mega-slider\" class=\"carousel slide \" data-ride=\"carousel\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#mega-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#mega-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#mega-slider\" data-slide-to=\"2\"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active beactive\">
                    <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slide1.JPG"), "html", null, true);
        echo "\" id=\"slide\"alt=\"...\">
                    <div class=\"carousel-caption\">
                        <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
                        <h2>Bienvenue a Premium Immobilier</h2>
                        <p>Notre agence est le N°1 DE L'IMMOBILIER.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slide2.jpg"), "html", null, true);
        echo "\" id=\"slide\" alt=\"...\">
                    <div class=\"carousel-caption\">
                        <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
                        <h2>Avec Premium</h2>
                        <p>Vous etes toujours satisfait.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slide3.jpg"), "html", null, true);
        echo "\" id=\"slide\" alt=\"...\">
                    <div class=\"carousel-caption\">
                        <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
                        <h2>Premium offre</h2>
                        <p>aussi des villas de lux bien équipés.</p>
                    </div>
                </div>
            </div>
            

            <!-- Controls -->
            <a class=\"left carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"prev\">
            </a>
            <a class=\"right carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"next\">
            </a>
        </div>
        ";
    }

    // line 150
    public function block_recherche($context, array $blocks = array())
    {
        // line 151
        echo "        <div class=\"mg-book-now\" style=\"background-color:#7e5109\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <h2 class=\"mg-bn-title\">Rechercher<span class=\"mg-bn-big\">Pour louer selon la disponibilité</span></h2>
                    </div>
                    <div class=\"col-md-9\">
                        <div class=\"mg-bn-forms\">
                            <form  method=\"post\" action=\"";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search_bien");
        echo "\">
                                <div class=\"row\">
                                    <div class=\"col-md-3 col-xs-2\">
                                        <div class=\"input-group date mg-check-in\">
                                            <div class=\"input-group-addon\"><i class=\"fas fa-money-bill-alt\"></i></div>
                                            <input name=\"budjet\" type=\"number\" class=\"form-control\" id=\"budget\" placeholder=\"Budget min\">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class=\"col-md-5\">
                                        <div class=\"row\">
                                            <div   class=\"col-xs-6\">
                                                <select   name=\"typebien\" class=\"cs-select cs-skin-elastic \">
                                                    <option value=\"\" disabled selected>Type de Bien</option>
                                                    ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 175
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
            echo "</option>
                                                    
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-xs-6\">
                                            
                                                <select name=\"localite\" class=\"cs-select cs-skin-elastic\">
                                                    <option value=\"\" disabled selected>Localité <i class=\"fas fa-angle-down\"></i></option>
                                                    ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localites"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 185
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libelle", array()), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-3\">
                                        <button name=\"rechercher\" type=\"submit\" class=\"btn btn-main btn-block\">Rechercher</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                   
                </div>
            </div>
        </div>
        ";
    }

    // line 205
    public function block_offre($context, array $blocks = array())
    {
        // line 206
        echo "        <div class=\"mg-best-rooms\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"mg-sec-title\">
                            <h2>NOS OFFRES</h2>
                            <p>Louer votre bien immobilier vide ou meublé, quel choix faire?</p><br>
                             Premium Immobilier est le votre!
                        </div>
                        
                       
                        <div class=\"row\">
                         ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 219
            echo "                            <div class=\"col-sm-4\" >
                                <figure style=\"width:300px; height:300px;\" class=\"mg-room\">
                                
                                    <img style=\"width:100%; height:100%; margin:auto\"  src=\"";
            // line 222
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"img11\" id=\"\" class=\"img-responsive\">
                                    <figcaption>
                                        <h2>";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomBien", array()), "html", null, true);
            echo "</h2>
                                        <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                        <div class=\"mg-room-price\">";
            // line 226
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</div>
                                        <p>";
            // line 227
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</p>
                                        <a href=\"#\" class=\"btn btn-link\">Voir Détails <i class=\"fa fa-angle-double-right\"></i></a>
                                        <a href=\"";
            // line 229
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver_bien", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-main\">Réserver</a>
                                    </figcaption>           
                                </figure>
                            </div>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 234
            echo "                            <h2>Pas de Resultats disponible pour cette recherche </h2>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "                            
                           
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
    }

    // line 247
    public function block_apropos($context, array $blocks = array())
    {
        // line 248
        echo "         <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <hr>
                </div>
            </div>
        </div> 
        <div class=\"mg-about parallax\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h2 class=\"mg-sec-left-title\" id=\"apropos\">A PROPOS DE PREMIUM IMMOBILIER</h2>
                        <p>PREMIUM IMMOBILIER® est une entreprise de professionnels maitrisant les cadres réglementaires du secteur de l’immobilier au Sénégal. PREMIUM IMMOBILIER®, une référence en transaction immobilière de tout ordre, vous propose des services personnalisés de gérance, de location de vos biens immobiliers. Avec un concept immobilier novateur, propre à l’Afrique, en parfaite adéquation aux réalités africaines, PREMIUM IMMOBILIER® s’appuie sur le leadership féminin. Soucieux de votre confiance, il vous assure un suivi complet et personnalisé dans la réalisation de vos projets tel que la location du premier chez soi, la location du premier bureau ou le premier investissement immobilier en pérennisant vos acquis. Avec une expérience cumulée de plusieurs années dans le secteur, PREMIUM IMMOBILIER® met à votre disposition une équipe professionnelle pour le traitement de toutes vos demandes dans un délai record de 72 h. Grâce à notre réseau de plus de 25 agences partenaires, nous vous offrons les meilleurs choix en clientèle et produit avec toute la réactivité requise dans la prise en charge des demandes...</p>
                    </div>
                    <div class=\"col-md-5\">
                        <div id=\"pub\" class=\"video-responsive\">
                        <video width=\"600\" height=\"375\" controls >
                                <source src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("video/om.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
                                
                             </video>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
    }

    // line 276
    public function block_partenaires($context, array $blocks = array())
    {
        // line 277
        echo "        <div class=\"mg-testi-partners parallax\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h2 class=\"mg-sec-left-title\">Vision et Mission</h2>
                        <div class=\"mg-testimonial-slider\" id=\"mg-testimonial-slider\">
                            <blockquote>
                                <p>Chez Premium Immobilier nous croyons au traitement de tout collaborateur avec respect et nous intégrons l'honnêteté, l'intégrité et l'éthique dans tous les aspects du fonctionnement de l'entreprise.</p>
                                <footer>Premium Immobilier</footer>
                            </blockquote>
                            <blockquote>
                                <p>La stratégie de Premium Immobilier est bâtie sur un objectif précis qui est de devenir à court terme le chef de file du secteur immobilier sous-régional et un acteur clé de l'industrie en fournissant des services exceptionnels, innovants, rentables et de qualité qui dépassent les attentes des clients et partenaires.</p>
                                <footer>Premium Immobilier</footer>
                            </blockquote>
                            <blockquote>
                                <p>Notre mission est de construire une relation à long terme avec tous nos clients et partenaires en nous basant sur un modèle d'affaire ancré sur la créativité et la technologie de pointe.</p>
                                <footer>Premium Immobilier</footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <h2 class=\"mg-sec-left-title\">Nos Partenaires</h2>
                        <ul class=\"mg-part-logos\" id=\"mg-part-logos\">
                            <li><img src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/orangemoney.png"), "html", null, true);
        echo "\" id=\"parte\" alt=\"Partner Logo\"></li>
                            <li><img src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/wari.jpeg"), "html", null, true);
        echo "\" id=\"parte\" alt=\"Partner Logo\"></li>
                            <li><img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/sg.png"), "html", null, true);
        echo "\" id=\"parte\" alt=\"Partner Logo\"></li>
                            <li><img src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/visa.png"), "html", null, true);
        echo "\" id=\"parte\" alt=\"Partner Logo\"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        ";
    }

    // line 310
    public function block_galerie($context, array $blocks = array())
    {
        // line 311
        echo "        <div class=\"mg-news-gallery\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <h2 class=\"mg-sec-left-title\">A LA UNE</h2>
                        <ul class=\"mg-recnt-posts\">
                            <li>
                                <div class=\"mg-recnt-post\">
                                    <div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
                                    <h3><a href=\"#\">Immeuble de 7 etages</a></h3>
                                    <p>Au VDN</p>
                                </div>
                            </li>
                            <li>
                                <div class=\"mg-recnt-post\">
                                    <div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
                                    <h3><a href=\"#\">A Standard Blog Post</a></h3>
                                    <p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
                                </div>
                            </li>
                            <li>
                                <div class=\"mg-recnt-post\">
                                    <div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
                                    <h3><a href=\"#\">A Standard Blog Post</a></h3>
                                    <p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-md-7\">
                        <h2 class=\"mg-sec-left-title\">Nos Biens</h2>

                        <div class=\"mg-gallery-container\">
                            <ul class=\"mg-gallery\" id=\"mg-gallery\">
                                    
                                <li><img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/apart.jpg"), "html", null, true);
        echo "\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bureau.jpg"), "html", null, true);
        echo "\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/chambre.jpeg"), "html", null, true);
        echo "\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/im.jpeg"), "html", null, true);
        echo "\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slide1.JPG"), "html", null, true);
        echo "\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slide2.jpg"), "html", null, true);
        echo "\" id=\"gal\" alt=\"Partner Logo\"></li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
          
        
";
    }

    // line 362
    public function block_footer($context, array $blocks = array())
    {
        // line 363
        echo "        <footer class=\"mg-footer\">
            <div class=\"mg-footer-widget\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"widget\">
                                <h2 class=\"mg-widget-title\">Contactez-nous</h2>
                                <address>
                                    <strong>CTIC/DAKAR</strong><br>
                                    Rue 3 Berenger Feraud<br>
                                    SONATEL ACADEMY
                                </address>
                
                                <p>
                                    221 33 547 21 40<br>
                                    221 33 548 69 35
                                </p>
                
                                <p>
                                    <a href=\"mailto:\">premiumimmobilier.sn</a>
                                </p>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"widget\">
                                <h2 class=\"mg-widget-title\">Instagram</h2>
                                <ul class=\"mg-instagram\">
                                    <li><a href=\"\"><img src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/1.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/2.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/3.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/4.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/5.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/6.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/7.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/8.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                            
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"widget\">
                                <h2 class=\"mg-widget-title\">Newsletter</h2>
                                <p>Inscrivez-vous à notre newsletter pour ne rien manquez sur nos offres.</p>
                                <form>
                                    <p>
                                        <input type=\"email\" class=\"form-control\" placeholder=\"Votre e-mail\">
                                    </p>
                                    <input type=\"submit\" class=\"btn btn-main\" value=\"S'inscrire\">
                                </form>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"widget\">
                                <h2 class=\"mg-widget-title\">Réseaux Sociaux</h2>
                                <p>Suivez-nous sur les réseaux sociaux.</p>
                                <ul class=\"mg-footer-social\">
                                    <li><a href=\"#\"><i class=\"fab fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-twitter-square\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-pinterest-square\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-google-plus\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"mg-copyright\">
                <div class=\"container\">
                    <div class=\"row\">
                        
                        <div class=\"col-md-6\">
                            <ul class=\"mg-footer-nav\">
                                <li><a href=\"#\">ACCEUIL</a></li>
                                <li><a href=\"#\">A PROPOS</a></li>
                                <li><a href=\"#\">LOUER</a></li>
                                <li><a href=\"#\">CATALOGUE</a></li>
                                <li><a href=\"#\">Espace Client</a></li>
                                <li><a href=\"#\">Contact</a></li>
                            </ul>
                        </div>
                        <div class=\"col-md-6\">
                            <p> © ";
        // line 445
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "  <a href=\"http://www.sonatelacademy.sn\">Premium immobilier</a>. tout droits reservés.</p>
                            <p>The sky' s the limit  and beyond.</p>
                        </div>
                    </div>
                </div>
            </div>
        
        </footer>
";
    }

    public function getTemplateName()
    {
        return "PremiumBundle::acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  812 => 445,  761 => 397,  757 => 396,  753 => 395,  749 => 394,  745 => 393,  741 => 392,  737 => 391,  733 => 390,  704 => 363,  701 => 362,  686 => 351,  682 => 350,  678 => 349,  674 => 348,  670 => 347,  666 => 346,  629 => 311,  626 => 310,  615 => 303,  611 => 302,  607 => 301,  603 => 300,  578 => 277,  575 => 276,  561 => 265,  542 => 248,  539 => 247,  525 => 236,  518 => 234,  508 => 229,  503 => 227,  499 => 226,  494 => 224,  488 => 222,  483 => 219,  478 => 218,  464 => 206,  461 => 205,  440 => 187,  429 => 185,  425 => 184,  417 => 178,  405 => 175,  401 => 174,  383 => 159,  373 => 151,  370 => 150,  351 => 135,  346 => 133,  337 => 127,  332 => 125,  323 => 119,  318 => 117,  305 => 106,  302 => 105,  278 => 81,  261 => 67,  253 => 62,  239 => 50,  236 => 49,  226 => 473,  222 => 472,  218 => 471,  214 => 470,  210 => 469,  206 => 468,  202 => 467,  198 => 466,  194 => 465,  190 => 464,  186 => 463,  182 => 462,  178 => 461,  174 => 460,  170 => 459,  166 => 458,  162 => 457,  158 => 456,  154 => 454,  152 => 362,  150 => 310,  148 => 276,  145 => 275,  142 => 247,  140 => 205,  138 => 150,  136 => 105,  130 => 101,  128 => 49,  117 => 41,  112 => 39,  107 => 37,  103 => 36,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  63 => 20,  57 => 17,  53 => 16,  49 => 15,  42 => 11,  38 => 10,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PremiumBundle::acceuil.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/acceuil.html.twig");
    }
}
