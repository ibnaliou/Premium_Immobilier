<?php

/* PremiumBundle::acceuiladmin.html.twig */
class __TwigTemplate_22da49a082c63fa355ece27156b93b8f65c0075e55bfdf79a95be23b9a4029e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'href' => array($this, 'block_href'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45072ec121c3a93659ee9fcd43ece866a76b946d06eb06c6006dbf73e2c65f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45072ec121c3a93659ee9fcd43ece866a76b946d06eb06c6006dbf73e2c65f17->enter($__internal_45072ec121c3a93659ee9fcd43ece866a76b946d06eb06c6006dbf73e2c65f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle::acceuiladmin.html.twig"));

        $__internal_f9e064886866c5a3a0763bb6cbb0febd9ee99bf0b66fed751478cf8e2bae10e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e064886866c5a3a0763bb6cbb0febd9ee99bf0b66fed751478cf8e2bae10e9->enter($__internal_f9e064886866c5a3a0763bb6cbb0febd9ee99bf0b66fed751478cf8e2bae10e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle::acceuiladmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\" />
    <title>Premium Immobilier</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
    <meta content=\"Coderthemes\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

    ";
        // line 12
        $this->displayBlock('href', $context, $blocks);
        // line 48
        echo "
</head>


<body class=\"fixed-left\">
    ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 539
        echo "</body>

</html>";
        
        $__internal_45072ec121c3a93659ee9fcd43ece866a76b946d06eb06c6006dbf73e2c65f17->leave($__internal_45072ec121c3a93659ee9fcd43ece866a76b946d06eb06c6006dbf73e2c65f17_prof);

        
        $__internal_f9e064886866c5a3a0763bb6cbb0febd9ee99bf0b66fed751478cf8e2bae10e9->leave($__internal_f9e064886866c5a3a0763bb6cbb0febd9ee99bf0b66fed751478cf8e2bae10e9_prof);

    }

    // line 12
    public function block_href($context, array $blocks = array())
    {
        $__internal_baef59affb8bf62d897ddcced1d5ccba64729d449f26b1e96ee5595fcf5496ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baef59affb8bf62d897ddcced1d5ccba64729d449f26b1e96ee5595fcf5496ff->enter($__internal_baef59affb8bf62d897ddcced1d5ccba64729d449f26b1e96ee5595fcf5496ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "href"));

        $__internal_07bd4c04241d9947510f0a1d5937dbd1c35b21d4f40049a90a65836c38ac9862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bd4c04241d9947510f0a1d5937dbd1c35b21d4f40049a90a65836c38ac9862->enter($__internal_07bd4c04241d9947510f0a1d5937dbd1c35b21d4f40049a90a65836c38ac9862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "href"));

        // line 13
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/favicon_1.ico"), "html", null, true);
        echo "\">

     <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/magnific-popup/dist/magnific-popup.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"asset('assets/plugins/jquery-datatables-editable/datatables.css')}}\">

    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/dist/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">


    ";
        // line 30
        echo "
        <link rel=\"shortcut icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/favicon_1.ico"), "html", null, true);
        echo "\">

        ";
        // line 34
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        ";
        // line 44
        echo "
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_07bd4c04241d9947510f0a1d5937dbd1c35b21d4f40049a90a65836c38ac9862->leave($__internal_07bd4c04241d9947510f0a1d5937dbd1c35b21d4f40049a90a65836c38ac9862_prof);

        
        $__internal_baef59affb8bf62d897ddcced1d5ccba64729d449f26b1e96ee5595fcf5496ff->leave($__internal_baef59affb8bf62d897ddcced1d5ccba64729d449f26b1e96ee5595fcf5496ff_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_1600e532fb4fd9588e62ecadf7c7f95af4912c85bb5ecf122d6a4dac012c84b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1600e532fb4fd9588e62ecadf7c7f95af4912c85bb5ecf122d6a4dac012c84b9->enter($__internal_1600e532fb4fd9588e62ecadf7c7f95af4912c85bb5ecf122d6a4dac012c84b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_204fa062d95f9f202ab4073c3c24d169e9209198497f759db16ba454d13ec71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204fa062d95f9f202ab4073c3c24d169e9209198497f759db16ba454d13ec71b->enter($__internal_204fa062d95f9f202ab4073c3c24d169e9209198497f759db16ba454d13ec71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "    ";
        // line 55
        echo "    <div id=\"wrapper\">

        ";
        // line 58
        echo "        <div class=\"topbar\">
            ";
        // line 60
        echo "            <div class=\"topbar-left\">
                <div class=\"text-center\">
                    <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("index.html"), "html", null, true);
        echo "\" class=\"logo\"><i class=\"md md-home\"></i> <span>PREMIUM</span></a>
                </div>
            </div>
            ";
        // line 66
        echo "            <div class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"\">
                        <div class=\"pull-left\">
                            <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                            <span class=\"clearfix\"></span>
                        </div>
                        <form class=\"navbar-form pull-left\" role=\"search\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                        </form>

                        <ul class=\"nav navbar-nav navbar-right pull-right\">
                            <li class=\"dropdown hidden-xs\">
                                <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect waves-light\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                    <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-lg\">
                                    <li class=\"text-center notifi-title\">Notification</li>
                                    <li class=\"list-group\">
                                        {
                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                        <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
                                            <small>See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"hidden-xs\">
                                <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect waves-light\"><i class=\"md md-crop-free\"></i></a>
                            </li>
                            <li class=\"hidden-xs\">
                                <a href=\"#\" class=\"right-bar-toggle waves-effect waves-light\"><i class=\"md md-chat\"></i></a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"assets/images/users/avatar-1.jpg\" alt=\"user-img\" class=\"img-circle\"> </a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                    <li><a href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    ";
        // line 158
        echo "                </div>
            </div>
        </div>
        ";
        // line 162
        echo "


        ";
        // line 166
        echo "
        <div class=\"left side-menu\">
            <div class=\"sidebar-inner slimscrollleft\">
                <div class=\"user-details\">
                    <div class=\"pull-left\">
                        <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/dieyna.jpeg"), "html", null, true);
        echo "\" alt=\"\" class=\"thumb-md img-circle\">
                    </div>
                    <div class=\"user-info\">
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">TAFAss<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                <li><a href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-settings\"></i> Settings</a></li>
                                <li><a href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                <li><a href=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                            </ul>
                        </div>

                        <p class=\"text-muted m-0\">Administrator</p>
                    </div>
                </div>";
        // line 188
        echo "                <div id=\"sidebar-menu\">
                    <ul>
                        <li>
                            <a href=\"";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuil");
        echo "\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> ACCEUIL </span></a>

                            <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> BIENS </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_bien");
        echo "\">LISTE DES BIENS</a></li>
                                <li><a href=\"";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formbien");
        echo "\">AJOUTER UN BIEN</a></li>
                            </ul>
                        </li>

                         <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> RESERVATIONS </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_reservation");
        echo "\">LISTE DES RESERVATIONS</a></li>
                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> LOCALITES </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"\">LES LOCALITES</a></li>
                                <li><a href=\"\">AJOUT LOCALITE</a></li>

                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> TYPES DE BIENS </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_bien");
        echo "\">LISTE TYPES</a></li>
                                <li><a href=\"";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_bien");
        echo "\">AJOUT TYPE</a></li>

                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("mail-inbox.html"), "html", null, true);
        echo "\">Inbox</a></li>
                                <li><a href=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("mail-compose.html"), "html", null, true);
        echo "\">Compose Mail</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=";
        // line 238
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Calendar");
        echo " class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                        </li>

                       

                      

                       

                       

                       
                      

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("maps-google.html"), "html", null, true);
        echo "\"> Google Map</a></li>
                                <li><a href=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("maps-vector.html"), "html", null, true);
        echo "\"> Vector Map</a></li>
                            </ul>
                        </li>

                      
                       
                    </ul>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        ";
        // line 269
        echo "

        ";
        // line 272
        echo "        ";
        // line 273
        echo "        ";
        // line 274
        echo "        ";
        $this->displayBlock('container', $context, $blocks);
        // line 299
        echo "        ";
        // line 300
        echo "        ";
        // line 301
        echo "        ";
        // line 302
        echo "

        <div class=\"side-bar right-bar nicescroll\">
            <h4 class=\"text-center\">Chat</h4>
            <div class=\"contact-list nicescroll\">
                <ul class=\"list-group contacts-list\">
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Chadengle</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Tomaslau</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Stillnotdavid</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Kurafire</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Shahedk</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Adhamdannaway</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Ok</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Arashasghari</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-9.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Joshaustin</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-10.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Sortino</span>
                            <i class=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fa fa-circle offline"), "html", null, true);
        echo "\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                </ul>
            </div>
        </div>
        ";
        // line 412
        echo "
    </div>
    ";
        // line 415
        echo "
";
        // line 416
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_204fa062d95f9f202ab4073c3c24d169e9209198497f759db16ba454d13ec71b->leave($__internal_204fa062d95f9f202ab4073c3c24d169e9209198497f759db16ba454d13ec71b_prof);

        
        $__internal_1600e532fb4fd9588e62ecadf7c7f95af4912c85bb5ecf122d6a4dac012c84b9->leave($__internal_1600e532fb4fd9588e62ecadf7c7f95af4912c85bb5ecf122d6a4dac012c84b9_prof);

    }

    // line 274
    public function block_container($context, array $blocks = array())
    {
        $__internal_a0dc6a1c8ce3ec2b4e1d9d807bdf444f98e3e81f65d3d22f76102bc394622fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0dc6a1c8ce3ec2b4e1d9d807bdf444f98e3e81f65d3d22f76102bc394622fa7->enter($__internal_a0dc6a1c8ce3ec2b4e1d9d807bdf444f98e3e81f65d3d22f76102bc394622fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_54054e41b513651e26ac3c3040344d17a4e9b2d05ae5790f6dc6f74da6c9d39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54054e41b513651e26ac3c3040344d17a4e9b2d05ae5790f6dc6f74da6c9d39b->enter($__internal_54054e41b513651e26ac3c3040344d17a4e9b2d05ae5790f6dc6f74da6c9d39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 275
        echo "        <div class=\"content-page\">
            ";
        // line 277
        echo "            <div class=\"content\">
                <div class=\"container\">

";
        // line 281
        echo "

<div class=\"row\">
                          
                        </div>
                         ";
        // line 287
        echo "                    </div>
                ";
        // line 289
        echo "
            </div>
            ";
        // line 292
        echo "
            <footer class=\"footer text-right\">
                2016 © Moltran.
            </footer>

        </div>
        ";
        
        $__internal_54054e41b513651e26ac3c3040344d17a4e9b2d05ae5790f6dc6f74da6c9d39b->leave($__internal_54054e41b513651e26ac3c3040344d17a4e9b2d05ae5790f6dc6f74da6c9d39b_prof);

        
        $__internal_a0dc6a1c8ce3ec2b4e1d9d807bdf444f98e3e81f65d3d22f76102bc394622fa7->leave($__internal_a0dc6a1c8ce3ec2b4e1d9d807bdf444f98e3e81f65d3d22f76102bc394622fa7_prof);

    }

    // line 416
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_a7e1233915beee4bb072e558b0e4ba2b835a5400718eff9a56933d724a798e55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e1233915beee4bb072e558b0e4ba2b835a5400718eff9a56933d724a798e55->enter($__internal_a7e1233915beee4bb072e558b0e4ba2b835a5400718eff9a56933d724a798e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_961977a3eea98e08c4b4a28e28744513e74d8bc0ac8e58f674b9c4766de151a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_961977a3eea98e08c4b4a28e28744513e74d8bc0ac8e58f674b9c4766de151a7->enter($__internal_961977a3eea98e08c4b4a28e28744513e74d8bc0ac8e58f674b9c4766de151a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 417
        echo "
    <script>
        var resizefunc = [];
    </script>

    ";
        // line 423
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 437
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 440
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/waypoints/lib/jquery.waypoints.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 444
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/dist/sweetalert.min.js"), "html", null, true);
        echo "\"></script>


    ";
        // line 448
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.selection.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.crosshair.js"), "html", null, true);
        echo "\"></script>




        <script>
            var resizefunc = [];
        </script>

";
        // line 465
        echo "

        ";
        // line 468
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"assets/js/jquery.app.js\"></script>

        ";
        // line 482
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.todo.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 488
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.chat.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 491
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.dashboard.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 497
        echo "assets/pages/datatables.editable.init.js";
        echo "\"></script>


            <script type=\"text/javascript\">
            \$(document).ready(function() {
            
                \$('#datatable-editable').dataTable();
                \$('#datatable-keytable').DataTable( { keys: true } );
                \$('#datatable-responsive').DataTable();
                \$('#datatable-scroller').DataTable( { ajax: \"assets/plugins/datatables/json/scroller-demo.json\", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = \$('#datatable-editable').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();
        </script>



    <script type=\"text/javascript\">






        /* ==============================================
                            Counter Up
                            =============================================== */
        jQuery(document).ready(function(\$) {

            \$('.counter').counterUp({
                delay: 100,
                time: 1200
            });
       
            
        
    
        });
    </script>

";
        
        $__internal_961977a3eea98e08c4b4a28e28744513e74d8bc0ac8e58f674b9c4766de151a7->leave($__internal_961977a3eea98e08c4b4a28e28744513e74d8bc0ac8e58f674b9c4766de151a7_prof);

        
        $__internal_a7e1233915beee4bb072e558b0e4ba2b835a5400718eff9a56933d724a798e55->leave($__internal_a7e1233915beee4bb072e558b0e4ba2b835a5400718eff9a56933d724a798e55_prof);

    }

    public function getTemplateName()
    {
        return "PremiumBundle::acceuiladmin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  912 => 497,  908 => 496,  904 => 495,  900 => 494,  893 => 491,  887 => 488,  882 => 485,  875 => 482,  868 => 477,  864 => 476,  860 => 475,  856 => 474,  852 => 473,  848 => 472,  844 => 471,  840 => 470,  836 => 469,  831 => 468,  827 => 465,  815 => 455,  811 => 454,  807 => 453,  803 => 452,  799 => 451,  795 => 450,  791 => 449,  786 => 448,  779 => 444,  774 => 441,  769 => 440,  763 => 437,  758 => 434,  753 => 432,  749 => 431,  745 => 430,  741 => 429,  737 => 428,  733 => 427,  729 => 426,  725 => 425,  721 => 424,  716 => 423,  709 => 417,  700 => 416,  684 => 292,  680 => 289,  677 => 287,  670 => 281,  665 => 277,  662 => 275,  653 => 274,  643 => 416,  640 => 415,  636 => 412,  626 => 404,  620 => 401,  607 => 391,  594 => 381,  581 => 371,  568 => 361,  555 => 351,  542 => 341,  529 => 331,  516 => 321,  503 => 311,  492 => 302,  490 => 301,  488 => 300,  486 => 299,  483 => 274,  481 => 273,  479 => 272,  475 => 269,  460 => 256,  456 => 255,  436 => 238,  428 => 233,  424 => 232,  412 => 223,  408 => 222,  387 => 204,  377 => 197,  373 => 196,  365 => 191,  360 => 188,  351 => 180,  347 => 179,  343 => 178,  339 => 177,  330 => 171,  323 => 166,  318 => 162,  313 => 158,  305 => 152,  301 => 151,  297 => 150,  293 => 149,  208 => 66,  202 => 62,  198 => 60,  195 => 58,  191 => 55,  189 => 54,  180 => 53,  167 => 45,  164 => 44,  160 => 42,  156 => 41,  152 => 40,  148 => 39,  144 => 38,  140 => 37,  136 => 36,  130 => 34,  125 => 31,  122 => 30,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  82 => 16,  77 => 14,  74 => 13,  65 => 12,  53 => 539,  51 => 53,  44 => 48,  42 => 12,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\" />
    <title>Premium Immobilier</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
    <meta content=\"Coderthemes\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

    {% block href %}

    <link rel=\"shortcut icon\" href=\"{{asset('assets/images/favicon_1.ico')}}\">

     <link rel=\"stylesheet\" href=\"{{asset('assets/plugins/magnific-popup/dist/magnific-popup.css')}}\">
        <link rel=\"stylesheet\" href=\"asset('assets/plugins/jquery-datatables-editable/datatables.css')}}\">

    <link href=\"{{asset('assets/plugins/sweetalert/dist/sweetalert.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/pages.css')}} \" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">


    {# upload images #}

        <link rel=\"shortcut icon\" href=\"{{asset('assets/images/favicon_1.ico')}}\">

        {# Dropzone css #}
        <link href=\"{{asset('assets/plugins/dropzone/dist/dropzone.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/pages.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        {#fin#}

    <script src=\"{{asset ('assets/js/modernizr.min.js')}}\"></script>

    {% endblock %}

</head>


<body class=\"fixed-left\">
    {% block body%}
    {# Begin page #}
    <div id=\"wrapper\">

        {# Top Bar Start #}
        <div class=\"topbar\">
            {# LOGO #}
            <div class=\"topbar-left\">
                <div class=\"text-center\">
                    <a href=\"{{asset ('index.html')}}\" class=\"logo\"><i class=\"md md-home\"></i> <span>PREMIUM</span></a>
                </div>
            </div>
            {# Button mobile view to collapse sidebar menu #}
            <div class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"\">
                        <div class=\"pull-left\">
                            <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                            <span class=\"clearfix\"></span>
                        </div>
                        <form class=\"navbar-form pull-left\" role=\"search\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                        </form>

                        <ul class=\"nav navbar-nav navbar-right pull-right\">
                            <li class=\"dropdown hidden-xs\">
                                <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect waves-light\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                    <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-lg\">
                                    <li class=\"text-center notifi-title\">Notification</li>
                                    <li class=\"list-group\">
                                        {
                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                        <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
                                            <small>See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"hidden-xs\">
                                <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect waves-light\"><i class=\"md md-crop-free\"></i></a>
                            </li>
                            <li class=\"hidden-xs\">
                                <a href=\"#\" class=\"right-bar-toggle waves-effect waves-light\"><i class=\"md md-chat\"></i></a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"assets/images/users/avatar-1.jpg\" alt=\"user-img\" class=\"img-circle\"> </a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                    <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    {#/.nav-collapse #}
                </div>
            </div>
        </div>
        {# Top Bar End #}



        {# ========== Left Sidebar Start ========== #}

        <div class=\"left side-menu\">
            <div class=\"sidebar-inner slimscrollleft\">
                <div class=\"user-details\">
                    <div class=\"pull-left\">
                        <img src=\"{{asset ('assets/images/dieyna.jpeg')}}\" alt=\"\" class=\"thumb-md img-circle\">
                    </div>
                    <div class=\"user-info\">
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">TAFAss<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-settings\"></i> Settings</a></li>
                                <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                            </ul>
                        </div>

                        <p class=\"text-muted m-0\">Administrator</p>
                    </div>
                </div>
                {#- Divider #}
                <div id=\"sidebar-menu\">
                    <ul>
                        <li>
                            <a href=\"{{path('acceuil')}}\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> ACCEUIL </span></a>

                            <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> BIENS </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"{{path('list_bien')}}\">LISTE DES BIENS</a></li>
                                <li><a href=\"{{path('formbien')}}\">AJOUTER UN BIEN</a></li>
                            </ul>
                        </li>

                         <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> RESERVATIONS </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"{{path('list_reservation')}}\">LISTE DES RESERVATIONS</a></li>
                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> LOCALITES </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"\">LES LOCALITES</a></li>
                                <li><a href=\"\">AJOUT LOCALITE</a></li>

                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> TYPES DE BIENS </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"{{path('list_bien')}}\">LISTE TYPES</a></li>
                                <li><a href=\"{{path('list_bien')}}\">AJOUT TYPE</a></li>

                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"{{asset ('mail-inbox.html')}}\">Inbox</a></li>
                                <li><a href=\"{{asset ('mail-compose.html')}}\">Compose Mail</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href={{path('Calendar')}} class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                        </li>

                       

                      

                       

                       

                       
                      

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"{{asset ('maps-google.html')}}\"> Google Map</a></li>
                                <li><a href=\"{{asset ('maps-vector.html')}}\"> Vector Map</a></li>
                            </ul>
                        </li>

                      
                       
                    </ul>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        {# Left Sidebar End #}


        {# ============================================================== #}
        {# Start right Content here #}
        {# ============================================================== #}
        {% block container %}
        <div class=\"content-page\">
            {# Start content #}
            <div class=\"content\">
                <div class=\"container\">

{#NOTRE FORMIULAIRE#}


<div class=\"row\">
                          
                        </div>
                         {# End row #}
                    </div>
                {# container #}

            </div>
            {# content #}

            <footer class=\"footer text-right\">
                2016 © Moltran.
            </footer>

        </div>
        {% endblock container %}
        {# ============================================================== #}
        {# End Right content here #}
        {# ============================================================== #}


        <div class=\"side-bar right-bar nicescroll\">
            <h4 class=\"text-center\">Chat</h4>
            <div class=\"contact-list nicescroll\">
                <ul class=\"list-group contacts-list\">
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-1.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Chadengle</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-2.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Tomaslau</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-3.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Stillnotdavid</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-4.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Kurafire</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-5.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Shahedk</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-6.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Adhamdannaway</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-7.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Ok</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-8.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Arashasghari</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-9.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Joshaustin</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-10.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Sortino</span>
                            <i class=\"{{asset ('fa fa-circle offline')}}\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                </ul>
            </div>
        </div>
        {# /Right-bar #}

    </div>
    {# END wrapper #}

{% block javascript %}

    <script>
        var resizefunc = [];
    </script>

    {# jQuery  #}
    <script src=\"{{asset ('assets/js/jquery.min.js')}}\"></script>
    <script src=\"{{asset ('assets/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset ('assets/js/detect.js')}}\"></script>
    <script src=\"{{asset ('assets/js/fastclick.js')}}\"></script>
    <script src=\"{{asset ('assets/js/jquery.slimscroll.js')}}\"></script>
    <script src=\"{{asset ('assets/js/jquery.blockUI.js')}}\"></script>
    <script src=\"{{asset ('assets/js/waves.js')}}\"></script>
    <script src=\"{{asset ('assets/js/wow.min.js')}}\"></script>
    <script src=\"{{asset ('assets/js/jquery.nicescroll.js')}}\"></script>
    <script src=\"{{asset ('assets/js/jquery.scrollTo.min.js')}}\"></script>

    <script src=\"{{asset ('assets/js/jquery.app.js')}}\"></script>

    {# jQuery  #}
    <script src=\"{{asset ('assets/plugins/moment/moment.js')}}\"></script>

    {# jQuery  #}
    <script src=\"{{asset ('assets/plugins/waypoints/lib/jquery.waypoints.js')}}\"></script>
    <script src=\"{{asset ('assets/plugins/counterup/jquery.counterup.min.js')}}\"></script>

    {# jQuery  #}
    <script src=\"{{asset ('assets/plugins/sweetalert/dist/sweetalert.min.js')}}\"></script>


    {# flot Chart #}
    <script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.js')}}\"></script>
    <script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.time.js')}}\"></script>
    <script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.tooltip.min.js')}}\"></script>
    <script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.resize.js')}}\"></script>
    <script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.pie.js')}}\"></script>
    <script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.selection.js')}}\"></script>
    <script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.stack.js')}}\"></script>
    <script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.crosshair.js')}}\"></script>




        <script>
            var resizefunc = [];
        </script>

{# jQuery  #}


        {# jQuery  #}
        <script src=\"{{asset ('assets/js/jquery.min.js')}}\"></script>
        <script src=\"{{asset ('assets/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset ('assets/js/detect.js')}}\"></script>
        <script src=\"{{asset ('assets/js/fastclick.js')}}\"></script>
        <script src=\"{{asset ('assets/js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{asset ('assets/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset ('assets/js/waves.js')}}\"></script>
        <script src=\"{{asset ('assets/js/wow.min.js')}}\"></script>
        <script src=\"{{asset ('assets/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{asset ('assets/js/jquery.scrollTo.min.js')}}\"></script>

        <script src=\"assets/js/jquery.app.js\"></script>

        {# Page Specific JS Libraries #}
        <script src=\"{{asset ('assets/plugins/dropzone/dist/dropzone.js')}}\"></script>


    <script src=\"{{asset ('assets/pages/jquery.todo.js')}}\"></script>

    {# jQuery  #}
    <script src=\"{{asset ('assets/pages/jquery.chat.js')}}\"></script>

    {# jQuery  #}
    <script src=\"{{asset ('assets/pages/jquery.dashboard.js')}}\"></script>


    <script src=\"{{asset('assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/jquery-datatables-editable/jquery.dataTables.js')}}\"></script> 
        <script src=\"{{asset('assets/plugins/datatables/dataTables.bootstrap.js')}}\"></script>
        <script src=\"{{('assets/pages/datatables.editable.init.js')}}\"></script>


            <script type=\"text/javascript\">
            \$(document).ready(function() {
            
                \$('#datatable-editable').dataTable();
                \$('#datatable-keytable').DataTable( { keys: true } );
                \$('#datatable-responsive').DataTable();
                \$('#datatable-scroller').DataTable( { ajax: \"assets/plugins/datatables/json/scroller-demo.json\", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = \$('#datatable-editable').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();
        </script>



    <script type=\"text/javascript\">






        /* ==============================================
                            Counter Up
                            =============================================== */
        jQuery(document).ready(function(\$) {

            \$('.counter').counterUp({
                delay: 100,
                time: 1200
            });
       
            
        
    
        });
    </script>

{% endblock %}
{% endblock %}
</body>

</html>", "PremiumBundle::acceuiladmin.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/acceuiladmin.html.twig");
    }
}
