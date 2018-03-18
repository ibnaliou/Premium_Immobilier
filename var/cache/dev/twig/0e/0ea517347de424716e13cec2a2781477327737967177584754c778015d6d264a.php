<?php

/* PremiumBundle::acceuil.html.twig */
class __TwigTemplate_61f0f345f8b675d890e577ebbc07115b601a6c78ce5fd4d3580488f08e27d9c8 extends Twig_Template
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
        $__internal_e1059278ecd02b845e1552eec9e2358576608fe7c74eea9f0afa5b7dab9999bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1059278ecd02b845e1552eec9e2358576608fe7c74eea9f0afa5b7dab9999bb->enter($__internal_e1059278ecd02b845e1552eec9e2358576608fe7c74eea9f0afa5b7dab9999bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle::acceuil.html.twig"));

        $__internal_0e2905c00749678721d98e01e63a25cf93e4cf9a3a503d7b4bb315b3cc645057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2905c00749678721d98e01e63a25cf93e4cf9a3a503d7b4bb315b3cc645057->enter($__internal_0e2905c00749678721d98e01e63a25cf93e4cf9a3a503d7b4bb315b3cc645057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle::acceuil.html.twig"));

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
        <script src=";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/connexion.js"), "html", null, true);
        echo "></script>  
 

  

    </body>
</html>";
        
        $__internal_e1059278ecd02b845e1552eec9e2358576608fe7c74eea9f0afa5b7dab9999bb->leave($__internal_e1059278ecd02b845e1552eec9e2358576608fe7c74eea9f0afa5b7dab9999bb_prof);

        
        $__internal_0e2905c00749678721d98e01e63a25cf93e4cf9a3a503d7b4bb315b3cc645057->leave($__internal_0e2905c00749678721d98e01e63a25cf93e4cf9a3a503d7b4bb315b3cc645057_prof);

    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        $__internal_6061ade411bc7a4fc6fc8ac269f788ade49f68f7308a4d3105e6496d006079bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6061ade411bc7a4fc6fc8ac269f788ade49f68f7308a4d3105e6496d006079bc->enter($__internal_6061ade411bc7a4fc6fc8ac269f788ade49f68f7308a4d3105e6496d006079bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_b49a3f6ca38bb6a582a4bca9e26f932840ac84dc23fba8fed1439b21fc9f7514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49a3f6ca38bb6a582a4bca9e26f932840ac84dc23fba8fed1439b21fc9f7514->enter($__internal_b49a3f6ca38bb6a582a4bca9e26f932840ac84dc23fba8fed1439b21fc9f7514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
                            <li class=\"\"><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("confier");
        echo "\">CONFIER UN BIEN</a></li>
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
        
        $__internal_b49a3f6ca38bb6a582a4bca9e26f932840ac84dc23fba8fed1439b21fc9f7514->leave($__internal_b49a3f6ca38bb6a582a4bca9e26f932840ac84dc23fba8fed1439b21fc9f7514_prof);

        
        $__internal_6061ade411bc7a4fc6fc8ac269f788ade49f68f7308a4d3105e6496d006079bc->leave($__internal_6061ade411bc7a4fc6fc8ac269f788ade49f68f7308a4d3105e6496d006079bc_prof);

    }

    // line 105
    public function block_slide($context, array $blocks = array())
    {
        $__internal_9a30a87b98451c505c8bb866f02bedcd374f2a9aae8db1f6debc17fed1dcc8b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a30a87b98451c505c8bb866f02bedcd374f2a9aae8db1f6debc17fed1dcc8b5->enter($__internal_9a30a87b98451c505c8bb866f02bedcd374f2a9aae8db1f6debc17fed1dcc8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_d56399e5bc374c3b0ab44e9f89563fcdb961da5d09f93298a55e573364fff8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56399e5bc374c3b0ab44e9f89563fcdb961da5d09f93298a55e573364fff8ff->enter($__internal_d56399e5bc374c3b0ab44e9f89563fcdb961da5d09f93298a55e573364fff8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

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
        
        $__internal_d56399e5bc374c3b0ab44e9f89563fcdb961da5d09f93298a55e573364fff8ff->leave($__internal_d56399e5bc374c3b0ab44e9f89563fcdb961da5d09f93298a55e573364fff8ff_prof);

        
        $__internal_9a30a87b98451c505c8bb866f02bedcd374f2a9aae8db1f6debc17fed1dcc8b5->leave($__internal_9a30a87b98451c505c8bb866f02bedcd374f2a9aae8db1f6debc17fed1dcc8b5_prof);

    }

    // line 150
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_9d64c55f5c9de8773beb72261b847ef8032e6e82af4a94edc94c2e42926c33da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d64c55f5c9de8773beb72261b847ef8032e6e82af4a94edc94c2e42926c33da->enter($__internal_9d64c55f5c9de8773beb72261b847ef8032e6e82af4a94edc94c2e42926c33da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_dd5b98d77718943517840782d4757117c4b22b367392b1100e26c88dfe8293f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5b98d77718943517840782d4757117c4b22b367392b1100e26c88dfe8293f2->enter($__internal_dd5b98d77718943517840782d4757117c4b22b367392b1100e26c88dfe8293f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

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
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
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
        $context['_seq'] = twig_ensure_traversable(($context["localites"] ?? $this->getContext($context, "localites")));
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
        
        $__internal_dd5b98d77718943517840782d4757117c4b22b367392b1100e26c88dfe8293f2->leave($__internal_dd5b98d77718943517840782d4757117c4b22b367392b1100e26c88dfe8293f2_prof);

        
        $__internal_9d64c55f5c9de8773beb72261b847ef8032e6e82af4a94edc94c2e42926c33da->leave($__internal_9d64c55f5c9de8773beb72261b847ef8032e6e82af4a94edc94c2e42926c33da_prof);

    }

    // line 205
    public function block_offre($context, array $blocks = array())
    {
        $__internal_bd48777d2f297174153799ff571329d887279026ffe549de96421ca85be2b37a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd48777d2f297174153799ff571329d887279026ffe549de96421ca85be2b37a->enter($__internal_bd48777d2f297174153799ff571329d887279026ffe549de96421ca85be2b37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_192c1aaf6f60f60b3c13be8c92d8171c24138a328c2cd02357773856f0f63598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192c1aaf6f60f60b3c13be8c92d8171c24138a328c2cd02357773856f0f63598->enter($__internal_192c1aaf6f60f60b3c13be8c92d8171c24138a328c2cd02357773856f0f63598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

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
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
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
        
        $__internal_192c1aaf6f60f60b3c13be8c92d8171c24138a328c2cd02357773856f0f63598->leave($__internal_192c1aaf6f60f60b3c13be8c92d8171c24138a328c2cd02357773856f0f63598_prof);

        
        $__internal_bd48777d2f297174153799ff571329d887279026ffe549de96421ca85be2b37a->leave($__internal_bd48777d2f297174153799ff571329d887279026ffe549de96421ca85be2b37a_prof);

    }

    // line 247
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_0fc5fac4dad4edc5d524d6b7f901cd9d3b3d0a8ec376d11b28ffdb8ebff451bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc5fac4dad4edc5d524d6b7f901cd9d3b3d0a8ec376d11b28ffdb8ebff451bd->enter($__internal_0fc5fac4dad4edc5d524d6b7f901cd9d3b3d0a8ec376d11b28ffdb8ebff451bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_2a9a1ea02333458945ca8b5f9b7a8dcf837c0ddc619978ad9046c70c5b81bd03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9a1ea02333458945ca8b5f9b7a8dcf837c0ddc619978ad9046c70c5b81bd03->enter($__internal_2a9a1ea02333458945ca8b5f9b7a8dcf837c0ddc619978ad9046c70c5b81bd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

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
        
        $__internal_2a9a1ea02333458945ca8b5f9b7a8dcf837c0ddc619978ad9046c70c5b81bd03->leave($__internal_2a9a1ea02333458945ca8b5f9b7a8dcf837c0ddc619978ad9046c70c5b81bd03_prof);

        
        $__internal_0fc5fac4dad4edc5d524d6b7f901cd9d3b3d0a8ec376d11b28ffdb8ebff451bd->leave($__internal_0fc5fac4dad4edc5d524d6b7f901cd9d3b3d0a8ec376d11b28ffdb8ebff451bd_prof);

    }

    // line 276
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_c473396471467371dce8d5b4ec71d5d224edf238c757103b50fedad5e4160e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c473396471467371dce8d5b4ec71d5d224edf238c757103b50fedad5e4160e99->enter($__internal_c473396471467371dce8d5b4ec71d5d224edf238c757103b50fedad5e4160e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_c883a242ad9d42d6479b1a6de7e2750ff35294ae764d8f9cfc04bc0fcc7617a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c883a242ad9d42d6479b1a6de7e2750ff35294ae764d8f9cfc04bc0fcc7617a0->enter($__internal_c883a242ad9d42d6479b1a6de7e2750ff35294ae764d8f9cfc04bc0fcc7617a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

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
        
        $__internal_c883a242ad9d42d6479b1a6de7e2750ff35294ae764d8f9cfc04bc0fcc7617a0->leave($__internal_c883a242ad9d42d6479b1a6de7e2750ff35294ae764d8f9cfc04bc0fcc7617a0_prof);

        
        $__internal_c473396471467371dce8d5b4ec71d5d224edf238c757103b50fedad5e4160e99->leave($__internal_c473396471467371dce8d5b4ec71d5d224edf238c757103b50fedad5e4160e99_prof);

    }

    // line 310
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_3600fec6d55789a3366d20bff243eb45d448ade5de4769873d61f79e6f1ccd70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3600fec6d55789a3366d20bff243eb45d448ade5de4769873d61f79e6f1ccd70->enter($__internal_3600fec6d55789a3366d20bff243eb45d448ade5de4769873d61f79e6f1ccd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_50d242785371a7c212ccbab83fcffb00f62396c6edcbcf08c2c186001bc2b785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d242785371a7c212ccbab83fcffb00f62396c6edcbcf08c2c186001bc2b785->enter($__internal_50d242785371a7c212ccbab83fcffb00f62396c6edcbcf08c2c186001bc2b785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

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
        
        $__internal_50d242785371a7c212ccbab83fcffb00f62396c6edcbcf08c2c186001bc2b785->leave($__internal_50d242785371a7c212ccbab83fcffb00f62396c6edcbcf08c2c186001bc2b785_prof);

        
        $__internal_3600fec6d55789a3366d20bff243eb45d448ade5de4769873d61f79e6f1ccd70->leave($__internal_3600fec6d55789a3366d20bff243eb45d448ade5de4769873d61f79e6f1ccd70_prof);

    }

    // line 362
    public function block_footer($context, array $blocks = array())
    {
        $__internal_43aabd5899a1bb3e4ec25906be8f603eae2f968ba85872c39c74a30c9940303d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43aabd5899a1bb3e4ec25906be8f603eae2f968ba85872c39c74a30c9940303d->enter($__internal_43aabd5899a1bb3e4ec25906be8f603eae2f968ba85872c39c74a30c9940303d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_8f4dff253ecf14d7c6a6f6a98c5d92aefb2fecf0dc69dd6b421b2a5b0573d355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4dff253ecf14d7c6a6f6a98c5d92aefb2fecf0dc69dd6b421b2a5b0573d355->enter($__internal_8f4dff253ecf14d7c6a6f6a98c5d92aefb2fecf0dc69dd6b421b2a5b0573d355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
                                    <input type=\"submit\" href=\"\" class=\"btn btn-main\" value=\"S'inscrire\">
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
        
        $__internal_8f4dff253ecf14d7c6a6f6a98c5d92aefb2fecf0dc69dd6b421b2a5b0573d355->leave($__internal_8f4dff253ecf14d7c6a6f6a98c5d92aefb2fecf0dc69dd6b421b2a5b0573d355_prof);

        
        $__internal_43aabd5899a1bb3e4ec25906be8f603eae2f968ba85872c39c74a30c9940303d->leave($__internal_43aabd5899a1bb3e4ec25906be8f603eae2f968ba85872c39c74a30c9940303d_prof);

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
        return array (  922 => 445,  871 => 397,  867 => 396,  863 => 395,  859 => 394,  855 => 393,  851 => 392,  847 => 391,  843 => 390,  814 => 363,  805 => 362,  784 => 351,  780 => 350,  776 => 349,  772 => 348,  768 => 347,  764 => 346,  727 => 311,  718 => 310,  701 => 303,  697 => 302,  693 => 301,  689 => 300,  664 => 277,  655 => 276,  635 => 265,  616 => 248,  607 => 247,  587 => 236,  580 => 234,  570 => 229,  565 => 227,  561 => 226,  556 => 224,  550 => 222,  545 => 219,  540 => 218,  526 => 206,  517 => 205,  490 => 187,  479 => 185,  475 => 184,  467 => 178,  455 => 175,  451 => 174,  433 => 159,  423 => 151,  414 => 150,  389 => 135,  384 => 133,  375 => 127,  370 => 125,  361 => 119,  356 => 117,  343 => 106,  334 => 105,  304 => 81,  288 => 68,  284 => 67,  276 => 62,  262 => 50,  253 => 49,  236 => 474,  232 => 473,  228 => 472,  224 => 471,  220 => 470,  216 => 469,  212 => 468,  208 => 467,  204 => 466,  200 => 465,  196 => 464,  192 => 463,  188 => 462,  184 => 461,  180 => 460,  176 => 459,  172 => 458,  168 => 457,  164 => 456,  160 => 454,  158 => 362,  156 => 310,  154 => 276,  151 => 275,  148 => 247,  146 => 205,  144 => 150,  142 => 105,  136 => 101,  134 => 49,  123 => 41,  118 => 39,  113 => 37,  109 => 36,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  63 => 17,  59 => 16,  55 => 15,  48 => 11,  44 => 10,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Premium Immobilier</title>
    <!--Data table include-->
        <link href={{asset ('https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Playfair+Display:400,400italic,700,700italic,900,900italic' )}}rel='stylesheet' type='text/css'>
        <script defer src={{ asset('https://use.fontawesome.com/releases/v5.0.6/js/all.js')}}></script>
        <!-- Bootstrap -->
        

        <link href=\"{{asset ('css/datatables.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset ('css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset ('css/font-awesome.min.css')}}\" rel=\"stylesheet\">


        <link href=\"{{asset ('css/owl.carousel.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset ('css/owl.theme.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset ('css/owl.transitions.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset ('css/cs-select.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset ('css/bootstrap-datepicker3.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset ('css/freepik.hotels.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset ('css/style.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset ('css/gallerie.css')}}\" rel=\"stylesheet\">





        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src={{asset ('js/html5shiv.min.js')}}></script>
        <script src={{asset ('js/respond.min.js')}}></script>
        <![endif]-->
        <script type=\"text/javascript\" src={{asset ('https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.js')}}></script>

        <script src={{asset ('js/modernizr.custom.min.js')}}></script>
       

    </head>
    <body>
  
        
        
            {% block header %}

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
                        <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('images/Capture.PNG') }}\" id=\"logo\"alt=\"logo\"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"{{path ('acceuil')}}\">ACCEUIL</a></li>
                            <li class=\"\"><a href=\"{{path ('confier')}}\">CONFIER UN BIEN</a></li>
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
                                <a href=\"{{path ('catalogue')}}\" >CATALOGUE</a>
                               
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
{% endblock %}




  {% block slide %}
        <div id=\"mega-slider\" class=\"carousel slide \" data-ride=\"carousel\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#mega-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#mega-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#mega-slider\" data-slide-to=\"2\"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active beactive\">
                    <img src=\"{{ asset('images/slide1.JPG') }}\" id=\"slide\"alt=\"...\">
                    <div class=\"carousel-caption\">
                        <img src=\"{{ asset('images/stars.png') }}\" alt=\"\">
                        <h2>Bienvenue a Premium Immobilier</h2>
                        <p>Notre agence est le N°1 DE L'IMMOBILIER.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"{{ asset('images/slide2.jpg') }}\" id=\"slide\" alt=\"...\">
                    <div class=\"carousel-caption\">
                        <img src=\"{{ asset('images/stars.png') }}\" alt=\"\">
                        <h2>Avec Premium</h2>
                        <p>Vous etes toujours satisfait.</p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"{{ asset('images/slide3.jpg') }}\" id=\"slide\" alt=\"...\">
                    <div class=\"carousel-caption\">
                        <img src=\"{{ asset('images/stars.png') }}\" alt=\"\">
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
        {% endblock %}
{% block recherche %}
        <div class=\"mg-book-now\" style=\"background-color:#7e5109\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <h2 class=\"mg-bn-title\">Rechercher<span class=\"mg-bn-big\">Pour louer selon la disponibilité</span></h2>
                    </div>
                    <div class=\"col-md-9\">
                        <div class=\"mg-bn-forms\">
                            <form  method=\"post\" action=\"{{path('search_bien')}}\">
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
                                                    {%for type in  types %}
                                                    <option value=\"{{type.id}}\">{{type.libelle}}</option>
                                                    
                                                    {%endfor%}
                                                </select>
                                            </div>
                                            <div class=\"col-xs-6\">
                                            
                                                <select name=\"localite\" class=\"cs-select cs-skin-elastic\">
                                                    <option value=\"\" disabled selected>Localité <i class=\"fas fa-angle-down\"></i></option>
                                                    {%for localite in  localites %}
                                                    <option value=\"{{localite.id}}\">{{localite.libelle}}</option>
                                                    {%endfor%}
                                                </select>
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
        {% endblock %}
{% block offre %}
        <div class=\"mg-best-rooms\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"mg-sec-title\">
                            <h2>NOS OFFRES</h2>
                            <p>Louer votre bien immobilier vide ou meublé, quel choix faire?</p><br>
                             Premium Immobilier est le votre!
                        </div>
                        
                       
                        <div class=\"row\">
                         {%for bien in  biens %}
                            <div class=\"col-sm-4\" >
                                <figure style=\"width:300px; height:300px;\" class=\"mg-room\">
                                
                                    <img style=\"width:100%; height:100%; margin:auto\"  src=\"{{ asset('images/')}}{{bien.images[0].image}}\" alt=\"img11\" id=\"\" class=\"img-responsive\">
                                    <figcaption>
                                        <h2>{{bien.nomBien}}</h2>
                                        <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                        <div class=\"mg-room-price\">{{bien.prixlocation}}</div>
                                        <p>{{bien.description}}</p>
                                        <a href=\"#\" class=\"btn btn-link\">Voir Détails <i class=\"fa fa-angle-double-right\"></i></a>
                                        <a href=\"{{path ('reserver_bien',{'id':bien.id})}}\" class=\"btn btn-main\">Réserver</a>
                                    </figcaption>           
                                </figure>
                            </div>
                            {% else %}
                            <h2>Pas de Resultats disponible pour cette recherche </h2>
                            {%endfor%}
                            
                           
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}
        {% block apropos %}
         <div class=\"container-fluid\">
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
                                <source src=\"{{ asset('video/om.mp4')}}\" type=\"video/mp4\">
                                
                             </video>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}

{% block partenaires %}
        <div class=\"mg-testi-partners parallax\">
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
                            <li><img src=\"{{ asset('images/orangemoney.png')}}\" id=\"parte\" alt=\"Partner Logo\"></li>
                            <li><img src=\"{{ asset('images/wari.jpeg')}}\" id=\"parte\" alt=\"Partner Logo\"></li>
                            <li><img src=\"{{ asset('images/sg.png')}}\" id=\"parte\" alt=\"Partner Logo\"></li>
                            <li><img src=\"{{ asset('images/visa.png')}}\" id=\"parte\" alt=\"Partner Logo\"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}
{% block galerie %}
        <div class=\"mg-news-gallery\">
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
                                    
                                <li><img src=\"{{ asset('images/apart.jpg')}}\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"{{ asset('images/bureau.jpg')}}\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"{{ asset('images/chambre.jpeg')}}\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"{{ asset('images/im.jpeg')}}\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"{{ asset('images/slide1.JPG')}}\" id=\"gal\" alt=\"Partner Logo\"></li>
                                <li><img src=\"{{ asset('images/slide2.jpg')}}\" id=\"gal\" alt=\"Partner Logo\"></li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
          
        
{% endblock %}
{% block footer %}
        <footer class=\"mg-footer\">
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
                                    <li><a href=\"\"><img src=\"{{ asset('images/1.png')}}\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"{{ asset('images/2.png')}}\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"{{ asset('images/3.png')}}\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"{{ asset('images/4.png')}}\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"{{ asset('images/5.png')}}\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"{{ asset('images/6.png')}}\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"{{ asset('images/7.png')}}\" alt=\"\"></a></li>
                                    <li><a href=\"\"><img src=\"{{ asset('images/8.png')}}\" alt=\"\"></a></li>
                            
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
                                    <input type=\"submit\" href=\"\" class=\"btn btn-main\" value=\"S'inscrire\">
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
                            <p> © {{ 'now'|date('Y') }}  <a href=\"http://www.sonatelacademy.sn\">Premium immobilier</a>. tout droits reservés.</p>
                            <p>The sky' s the limit  and beyond.</p>
                        </div>
                    </div>
                </div>
            </div>
        
        </footer>
{% endblock %}
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      
        <script src={{asset ('js/jquery.min.js')}}></script>
        <script src={{asset ('js/bootstrap.min.js')}}></script>
        <script src={{asset ('js/owl.carousel.min.js')}}></script>
        <script src={{asset ('js/jssor.slider.mini.js')}}></script>
        <script src={{asset ('js/classie.js')}}></script>
        <script src={{asset ('js/selectFx.js')}}></script>
        <script src={{asset ('js/bootstrap-datepicker.min.js')}}></script>
        <script src={{asset ('js/starrr.min.js')}}></script>
        <script src={{asset ('js/nivo-lightbox.min.js')}}></script>
        <script src={{asset ('js/jquery.shuffle.min.js')}}></script>
        <script src={{asset ('http://maps.google.com/maps/api/js?sensor=true')}}></script>
        <script src={{asset ('js/gmaps.min.js')}}></script>
        <script src={{asset ('js/jquery.parallax-1.1.3.js')}}></script>
        <script src={{asset ('js/script.js')}}></script>
        <script src={{asset ('js/datatables.js')}}></script>
        <script src={{asset ('js/lisbien.js')}}></script>
        <script src={{asset ('js/gallerie.js')}}></script>
         <script src={{asset ('js/form.js')}}></script> 
        <script src={{asset ('js/connexion.js')}}></script>  
 

  

    </body>
</html>", "PremiumBundle::acceuil.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/acceuil.html.twig");
    }
}
