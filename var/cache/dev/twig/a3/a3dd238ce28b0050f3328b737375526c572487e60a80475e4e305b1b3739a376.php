<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_4879dd66eafa96243e923f7e9393e9e68d64ce7cec7ac1bcc8aa980801de8d59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b4c308a4db20b276bd681957b049ad90476a3122cbcf1a829c24cce09968b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b4c308a4db20b276bd681957b049ad90476a3122cbcf1a829c24cce09968b94->enter($__internal_5b4c308a4db20b276bd681957b049ad90476a3122cbcf1a829c24cce09968b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_6527dd92434e3c9d9c3355227edcd9f04a4dfc4f53250616154adc7bc8bc8678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6527dd92434e3c9d9c3355227edcd9f04a4dfc4f53250616154adc7bc8bc8678->enter($__internal_6527dd92434e3c9d9c3355227edcd9f04a4dfc4f53250616154adc7bc8bc8678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_5b4c308a4db20b276bd681957b049ad90476a3122cbcf1a829c24cce09968b94->leave($__internal_5b4c308a4db20b276bd681957b049ad90476a3122cbcf1a829c24cce09968b94_prof);

        
        $__internal_6527dd92434e3c9d9c3355227edcd9f04a4dfc4f53250616154adc7bc8bc8678->leave($__internal_6527dd92434e3c9d9c3355227edcd9f04a4dfc4f53250616154adc7bc8bc8678_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0589ad67ec6fcb20b2c6c860aa0f1c53616db24856f6a319239bfecda9538551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0589ad67ec6fcb20b2c6c860aa0f1c53616db24856f6a319239bfecda9538551->enter($__internal_0589ad67ec6fcb20b2c6c860aa0f1c53616db24856f6a319239bfecda9538551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_389ea586ac4f54518e1671afe1b17e60f6755f0bf5a11ac24bd5839c490b1c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389ea586ac4f54518e1671afe1b17e60f6755f0bf5a11ac24bd5839c490b1c37->enter($__internal_389ea586ac4f54518e1671afe1b17e60f6755f0bf5a11ac24bd5839c490b1c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_389ea586ac4f54518e1671afe1b17e60f6755f0bf5a11ac24bd5839c490b1c37->leave($__internal_389ea586ac4f54518e1671afe1b17e60f6755f0bf5a11ac24bd5839c490b1c37_prof);

        
        $__internal_0589ad67ec6fcb20b2c6c860aa0f1c53616db24856f6a319239bfecda9538551->leave($__internal_0589ad67ec6fcb20b2c6c860aa0f1c53616db24856f6a319239bfecda9538551_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_7a287c0cdafde8bd74ea6351fba43098cc2bebc2098c8f88c8f2484f996072d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a287c0cdafde8bd74ea6351fba43098cc2bebc2098c8f88c8f2484f996072d9->enter($__internal_7a287c0cdafde8bd74ea6351fba43098cc2bebc2098c8f88c8f2484f996072d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_25dd0e1fdd4931d00832966bf0e461c8a665a0be2423e30c6ea87b3dd2a923b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25dd0e1fdd4931d00832966bf0e461c8a665a0be2423e30c6ea87b3dd2a923b0->enter($__internal_25dd0e1fdd4931d00832966bf0e461c8a665a0be2423e30c6ea87b3dd2a923b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_25dd0e1fdd4931d00832966bf0e461c8a665a0be2423e30c6ea87b3dd2a923b0->leave($__internal_25dd0e1fdd4931d00832966bf0e461c8a665a0be2423e30c6ea87b3dd2a923b0_prof);

        
        $__internal_7a287c0cdafde8bd74ea6351fba43098cc2bebc2098c8f88c8f2484f996072d9->leave($__internal_7a287c0cdafde8bd74ea6351fba43098cc2bebc2098c8f88c8f2484f996072d9_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_40a2bc4a035515431e38ccd579cb9ce41077ee1feabedb1e70ab8e638b68c3b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a2bc4a035515431e38ccd579cb9ce41077ee1feabedb1e70ab8e638b68c3b2->enter($__internal_40a2bc4a035515431e38ccd579cb9ce41077ee1feabedb1e70ab8e638b68c3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_1b374db53461b632a135d85621a9a22772b34aded77a6f49f217d0237b278343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b374db53461b632a135d85621a9a22772b34aded77a6f49f217d0237b278343->enter($__internal_1b374db53461b632a135d85621a9a22772b34aded77a6f49f217d0237b278343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_1b374db53461b632a135d85621a9a22772b34aded77a6f49f217d0237b278343->leave($__internal_1b374db53461b632a135d85621a9a22772b34aded77a6f49f217d0237b278343_prof);

        
        $__internal_40a2bc4a035515431e38ccd579cb9ce41077ee1feabedb1e70ab8e638b68c3b2->leave($__internal_40a2bc4a035515431e38ccd579cb9ce41077ee1feabedb1e70ab8e638b68c3b2_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_bcbeab5de01291e3dae42f28ee0b59b5aaeea161c59c9d10f59b87319817a081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcbeab5de01291e3dae42f28ee0b59b5aaeea161c59c9d10f59b87319817a081->enter($__internal_bcbeab5de01291e3dae42f28ee0b59b5aaeea161c59c9d10f59b87319817a081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_44b16697804b2d9fb2ffbc5a9b05f6b7c743dc584596b9b38578a9369a85c501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b16697804b2d9fb2ffbc5a9b05f6b7c743dc584596b9b38578a9369a85c501->enter($__internal_44b16697804b2d9fb2ffbc5a9b05f6b7c743dc584596b9b38578a9369a85c501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_44b16697804b2d9fb2ffbc5a9b05f6b7c743dc584596b9b38578a9369a85c501->leave($__internal_44b16697804b2d9fb2ffbc5a9b05f6b7c743dc584596b9b38578a9369a85c501_prof);

        
        $__internal_bcbeab5de01291e3dae42f28ee0b59b5aaeea161c59c9d10f59b87319817a081->leave($__internal_bcbeab5de01291e3dae42f28ee0b59b5aaeea161c59c9d10f59b87319817a081_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_ada5356b42b9dac90864331a787146529e96b1e2d3abc8d5a290e0eabb020f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada5356b42b9dac90864331a787146529e96b1e2d3abc8d5a290e0eabb020f3f->enter($__internal_ada5356b42b9dac90864331a787146529e96b1e2d3abc8d5a290e0eabb020f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_8f311322c47268979f43329ff0f4f1f222c0a9d7f63b1c4ab9c6f9a018dcf4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f311322c47268979f43329ff0f4f1f222c0a9d7f63b1c4ab9c6f9a018dcf4f7->enter($__internal_8f311322c47268979f43329ff0f4f1f222c0a9d7f63b1c4ab9c6f9a018dcf4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_8f311322c47268979f43329ff0f4f1f222c0a9d7f63b1c4ab9c6f9a018dcf4f7->leave($__internal_8f311322c47268979f43329ff0f4f1f222c0a9d7f63b1c4ab9c6f9a018dcf4f7_prof);

        
        $__internal_ada5356b42b9dac90864331a787146529e96b1e2d3abc8d5a290e0eabb020f3f->leave($__internal_ada5356b42b9dac90864331a787146529e96b1e2d3abc8d5a290e0eabb020f3f_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c88e4f9dede30aeff32b9f6979b62f87c61d8f97838a56503a8dc95e7e57100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c88e4f9dede30aeff32b9f6979b62f87c61d8f97838a56503a8dc95e7e57100->enter($__internal_2c88e4f9dede30aeff32b9f6979b62f87c61d8f97838a56503a8dc95e7e57100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7807cb2eb04c1309e6b6033d28fd5cc8c4523cd38a6ac999cb7f9b398bf1ca37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7807cb2eb04c1309e6b6033d28fd5cc8c4523cd38a6ac999cb7f9b398bf1ca37->enter($__internal_7807cb2eb04c1309e6b6033d28fd5cc8c4523cd38a6ac999cb7f9b398bf1ca37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_7807cb2eb04c1309e6b6033d28fd5cc8c4523cd38a6ac999cb7f9b398bf1ca37->leave($__internal_7807cb2eb04c1309e6b6033d28fd5cc8c4523cd38a6ac999cb7f9b398bf1ca37_prof);

        
        $__internal_2c88e4f9dede30aeff32b9f6979b62f87c61d8f97838a56503a8dc95e7e57100->leave($__internal_2c88e4f9dede30aeff32b9f6979b62f87c61d8f97838a56503a8dc95e7e57100_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_494dd0b61edcbfe70d195a36ddff3259bd634d5f26ad89610f8a389e78939abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494dd0b61edcbfe70d195a36ddff3259bd634d5f26ad89610f8a389e78939abe->enter($__internal_494dd0b61edcbfe70d195a36ddff3259bd634d5f26ad89610f8a389e78939abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_ad2a5003fbfea551a315c88760c6dc751038392ae5ba9c92819cab10b7e8d14e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2a5003fbfea551a315c88760c6dc751038392ae5ba9c92819cab10b7e8d14e->enter($__internal_ad2a5003fbfea551a315c88760c6dc751038392ae5ba9c92819cab10b7e8d14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_ad2a5003fbfea551a315c88760c6dc751038392ae5ba9c92819cab10b7e8d14e->leave($__internal_ad2a5003fbfea551a315c88760c6dc751038392ae5ba9c92819cab10b7e8d14e_prof);

        
        $__internal_494dd0b61edcbfe70d195a36ddff3259bd634d5f26ad89610f8a389e78939abe->leave($__internal_494dd0b61edcbfe70d195a36ddff3259bd634d5f26ad89610f8a389e78939abe_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_1cdc34cc2e93b96f1c6459da9724474311d967a82fcea0f7144f06e702179860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cdc34cc2e93b96f1c6459da9724474311d967a82fcea0f7144f06e702179860->enter($__internal_1cdc34cc2e93b96f1c6459da9724474311d967a82fcea0f7144f06e702179860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_20a3f45105d6e3746f73eccd0dbdceb35f40e4ed687abf32c30bf05cf4369c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a3f45105d6e3746f73eccd0dbdceb35f40e4ed687abf32c30bf05cf4369c3c->enter($__internal_20a3f45105d6e3746f73eccd0dbdceb35f40e4ed687abf32c30bf05cf4369c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_20a3f45105d6e3746f73eccd0dbdceb35f40e4ed687abf32c30bf05cf4369c3c->leave($__internal_20a3f45105d6e3746f73eccd0dbdceb35f40e4ed687abf32c30bf05cf4369c3c_prof);

        
        $__internal_1cdc34cc2e93b96f1c6459da9724474311d967a82fcea0f7144f06e702179860->leave($__internal_1cdc34cc2e93b96f1c6459da9724474311d967a82fcea0f7144f06e702179860_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_dce442c799f3aae0c00e593edffd7f6bb0fa7e12e2342acf21f92cab5ccb34a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce442c799f3aae0c00e593edffd7f6bb0fa7e12e2342acf21f92cab5ccb34a6->enter($__internal_dce442c799f3aae0c00e593edffd7f6bb0fa7e12e2342acf21f92cab5ccb34a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_29df739b5b45c3bdd137bdcaae2835740e823f5fe5342d43f3d4ff83b1335455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29df739b5b45c3bdd137bdcaae2835740e823f5fe5342d43f3d4ff83b1335455->enter($__internal_29df739b5b45c3bdd137bdcaae2835740e823f5fe5342d43f3d4ff83b1335455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_29df739b5b45c3bdd137bdcaae2835740e823f5fe5342d43f3d4ff83b1335455->leave($__internal_29df739b5b45c3bdd137bdcaae2835740e823f5fe5342d43f3d4ff83b1335455_prof);

        
        $__internal_dce442c799f3aae0c00e593edffd7f6bb0fa7e12e2342acf21f92cab5ccb34a6->leave($__internal_dce442c799f3aae0c00e593edffd7f6bb0fa7e12e2342acf21f92cab5ccb34a6_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_f1cd1550519581c8a9e48b61386980438f4c33f936338ca2e1315da734a2f762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1cd1550519581c8a9e48b61386980438f4c33f936338ca2e1315da734a2f762->enter($__internal_f1cd1550519581c8a9e48b61386980438f4c33f936338ca2e1315da734a2f762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_52c126cbd783b6e989b9fd9b17708ca756eae6a261c09deacaf8cca67796e64d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c126cbd783b6e989b9fd9b17708ca756eae6a261c09deacaf8cca67796e64d->enter($__internal_52c126cbd783b6e989b9fd9b17708ca756eae6a261c09deacaf8cca67796e64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_52c126cbd783b6e989b9fd9b17708ca756eae6a261c09deacaf8cca67796e64d->leave($__internal_52c126cbd783b6e989b9fd9b17708ca756eae6a261c09deacaf8cca67796e64d_prof);

        
        $__internal_f1cd1550519581c8a9e48b61386980438f4c33f936338ca2e1315da734a2f762->leave($__internal_f1cd1550519581c8a9e48b61386980438f4c33f936338ca2e1315da734a2f762_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_dc239bd03cd30211802826191d33ccd2a9c8f4d4adc48ed7d0824273b2da8105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc239bd03cd30211802826191d33ccd2a9c8f4d4adc48ed7d0824273b2da8105->enter($__internal_dc239bd03cd30211802826191d33ccd2a9c8f4d4adc48ed7d0824273b2da8105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_3b740f4e939193107f757b8563be34c0679fc627d57fd25f2e51da0103cbe18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b740f4e939193107f757b8563be34c0679fc627d57fd25f2e51da0103cbe18b->enter($__internal_3b740f4e939193107f757b8563be34c0679fc627d57fd25f2e51da0103cbe18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_3b740f4e939193107f757b8563be34c0679fc627d57fd25f2e51da0103cbe18b->leave($__internal_3b740f4e939193107f757b8563be34c0679fc627d57fd25f2e51da0103cbe18b_prof);

        
        $__internal_dc239bd03cd30211802826191d33ccd2a9c8f4d4adc48ed7d0824273b2da8105->leave($__internal_dc239bd03cd30211802826191d33ccd2a9c8f4d4adc48ed7d0824273b2da8105_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_1b72991cdc00bde4c27f8db7748228504ded98daf1dbe82bedbedd76554dc839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b72991cdc00bde4c27f8db7748228504ded98daf1dbe82bedbedd76554dc839->enter($__internal_1b72991cdc00bde4c27f8db7748228504ded98daf1dbe82bedbedd76554dc839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_9dbece1c02c0b067e9bb36d0fe7359201edcdf339283d0d20175d0ca7254d915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dbece1c02c0b067e9bb36d0fe7359201edcdf339283d0d20175d0ca7254d915->enter($__internal_9dbece1c02c0b067e9bb36d0fe7359201edcdf339283d0d20175d0ca7254d915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_9dbece1c02c0b067e9bb36d0fe7359201edcdf339283d0d20175d0ca7254d915->leave($__internal_9dbece1c02c0b067e9bb36d0fe7359201edcdf339283d0d20175d0ca7254d915_prof);

        
        $__internal_1b72991cdc00bde4c27f8db7748228504ded98daf1dbe82bedbedd76554dc839->leave($__internal_1b72991cdc00bde4c27f8db7748228504ded98daf1dbe82bedbedd76554dc839_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_79de95cc41e72cdb1f071bc805101c2a27e232ee5d2fe6f524e935fc1c773357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79de95cc41e72cdb1f071bc805101c2a27e232ee5d2fe6f524e935fc1c773357->enter($__internal_79de95cc41e72cdb1f071bc805101c2a27e232ee5d2fe6f524e935fc1c773357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_f42becb55a067fc64b562fc1cbb3b3031e86d501934cba91118a5ccffcf6da75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42becb55a067fc64b562fc1cbb3b3031e86d501934cba91118a5ccffcf6da75->enter($__internal_f42becb55a067fc64b562fc1cbb3b3031e86d501934cba91118a5ccffcf6da75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if (((($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
($context["_logout_path"] ?? $this->getContext($context, "_logout_path"))) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_f42becb55a067fc64b562fc1cbb3b3031e86d501934cba91118a5ccffcf6da75->leave($__internal_f42becb55a067fc64b562fc1cbb3b3031e86d501934cba91118a5ccffcf6da75_prof);

        
        $__internal_79de95cc41e72cdb1f071bc805101c2a27e232ee5d2fe6f524e935fc1c773357->leave($__internal_79de95cc41e72cdb1f071bc805101c2a27e232ee5d2fe6f524e935fc1c773357_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_38399b6a23cb3f88ea80cbd941c67991bf4cb6af89328ddd8aac509f361f4c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38399b6a23cb3f88ea80cbd941c67991bf4cb6af89328ddd8aac509f361f4c05->enter($__internal_38399b6a23cb3f88ea80cbd941c67991bf4cb6af89328ddd8aac509f361f4c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_57dadcaa6dfc189c2a14df14111e76e0ea9f598dceae6ace89669fd5034f8a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57dadcaa6dfc189c2a14df14111e76e0ea9f598dceae6ace89669fd5034f8a67->enter($__internal_57dadcaa6dfc189c2a14df14111e76e0ea9f598dceae6ace89669fd5034f8a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["_logout_path"] ?? $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        // line 99
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 100
            echo "                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> ";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
            echo "</a>
                                                    </li>
                                                ";
        }
        // line 104
        echo "                                                ";
        
        $__internal_57dadcaa6dfc189c2a14df14111e76e0ea9f598dceae6ace89669fd5034f8a67->leave($__internal_57dadcaa6dfc189c2a14df14111e76e0ea9f598dceae6ace89669fd5034f8a67_prof);

        
        $__internal_38399b6a23cb3f88ea80cbd941c67991bf4cb6af89328ddd8aac509f361f4c05->leave($__internal_38399b6a23cb3f88ea80cbd941c67991bf4cb6af89328ddd8aac509f361f4c05_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6ca8a65b7ba13749bbf292539991ba9e044d864925e5b39efe78d821206aaf70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ca8a65b7ba13749bbf292539991ba9e044d864925e5b39efe78d821206aaf70->enter($__internal_6ca8a65b7ba13749bbf292539991ba9e044d864925e5b39efe78d821206aaf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_f856ac77f4512a25f220f03da8f86e7bfdcd0c1d74db6cd224482f9c0a60e962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f856ac77f4512a25f220f03da8f86e7bfdcd0c1d74db6cd224482f9c0a60e962->enter($__internal_f856ac77f4512a25f220f03da8f86e7bfdcd0c1d74db6cd224482f9c0a60e962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_f856ac77f4512a25f220f03da8f86e7bfdcd0c1d74db6cd224482f9c0a60e962->leave($__internal_f856ac77f4512a25f220f03da8f86e7bfdcd0c1d74db6cd224482f9c0a60e962_prof);

        
        $__internal_6ca8a65b7ba13749bbf292539991ba9e044d864925e5b39efe78d821206aaf70->leave($__internal_6ca8a65b7ba13749bbf292539991ba9e044d864925e5b39efe78d821206aaf70_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_a254193f4a6c4d68d679f3cbbbeafc0f9a598bca7a026ccea87949296618ffd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a254193f4a6c4d68d679f3cbbbeafc0f9a598bca7a026ccea87949296618ffd1->enter($__internal_a254193f4a6c4d68d679f3cbbbeafc0f9a598bca7a026ccea87949296618ffd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_35dc054337693b2bcd91cdfb26a9e844edc836197950f3abe9ca8275b1587561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35dc054337693b2bcd91cdfb26a9e844edc836197950f3abe9ca8275b1587561->enter($__internal_35dc054337693b2bcd91cdfb26a9e844edc836197950f3abe9ca8275b1587561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_35dc054337693b2bcd91cdfb26a9e844edc836197950f3abe9ca8275b1587561->leave($__internal_35dc054337693b2bcd91cdfb26a9e844edc836197950f3abe9ca8275b1587561_prof);

        
        $__internal_a254193f4a6c4d68d679f3cbbbeafc0f9a598bca7a026ccea87949296618ffd1->leave($__internal_a254193f4a6c4d68d679f3cbbbeafc0f9a598bca7a026ccea87949296618ffd1_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_b4f7e25280c710d9fb0e95f19ffa5896773df75c31606dddc63e542b2966bfeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f7e25280c710d9fb0e95f19ffa5896773df75c31606dddc63e542b2966bfeb->enter($__internal_b4f7e25280c710d9fb0e95f19ffa5896773df75c31606dddc63e542b2966bfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_28c8f8387cce5afaff5c4178a3fd7d1ef5d3db8bfe0cbd15630d6149bb61c027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c8f8387cce5afaff5c4178a3fd7d1ef5d3db8bfe0cbd15630d6149bb61c027->enter($__internal_28c8f8387cce5afaff5c4178a3fd7d1ef5d3db8bfe0cbd15630d6149bb61c027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_28c8f8387cce5afaff5c4178a3fd7d1ef5d3db8bfe0cbd15630d6149bb61c027->leave($__internal_28c8f8387cce5afaff5c4178a3fd7d1ef5d3db8bfe0cbd15630d6149bb61c027_prof);

        
        $__internal_b4f7e25280c710d9fb0e95f19ffa5896773df75c31606dddc63e542b2966bfeb->leave($__internal_b4f7e25280c710d9fb0e95f19ffa5896773df75c31606dddc63e542b2966bfeb_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_57d683ec06d0a58e74971ea1df3eaf79b7d6a169138ce5b325b7d6649306dd73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d683ec06d0a58e74971ea1df3eaf79b7d6a169138ce5b325b7d6649306dd73->enter($__internal_57d683ec06d0a58e74971ea1df3eaf79b7d6a169138ce5b325b7d6649306dd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_cc121a41f6591dcc6a1d16e28380678661adf8e351854013b235cc4e1b4b3a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc121a41f6591dcc6a1d16e28380678661adf8e351854013b235cc4e1b4b3a76->enter($__internal_cc121a41f6591dcc6a1d16e28380678661adf8e351854013b235cc4e1b4b3a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_cc121a41f6591dcc6a1d16e28380678661adf8e351854013b235cc4e1b4b3a76->leave($__internal_cc121a41f6591dcc6a1d16e28380678661adf8e351854013b235cc4e1b4b3a76_prof);

        
        $__internal_57d683ec06d0a58e74971ea1df3eaf79b7d6a169138ce5b325b7d6649306dd73->leave($__internal_57d683ec06d0a58e74971ea1df3eaf79b7d6a169138ce5b325b7d6649306dd73_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_f0aacdeda877d32f4db18d6a98907304e70e4c1c51e56bfa20535cb80b6e86e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0aacdeda877d32f4db18d6a98907304e70e4c1c51e56bfa20535cb80b6e86e3->enter($__internal_f0aacdeda877d32f4db18d6a98907304e70e4c1c51e56bfa20535cb80b6e86e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_3fe2aa6fbd45e40ab91d20c7971dbfa43ac75eb5d56b5bdd9a228cd3219e5941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe2aa6fbd45e40ab91d20c7971dbfa43ac75eb5d56b5bdd9a228cd3219e5941->enter($__internal_3fe2aa6fbd45e40ab91d20c7971dbfa43ac75eb5d56b5bdd9a228cd3219e5941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_3fe2aa6fbd45e40ab91d20c7971dbfa43ac75eb5d56b5bdd9a228cd3219e5941->leave($__internal_3fe2aa6fbd45e40ab91d20c7971dbfa43ac75eb5d56b5bdd9a228cd3219e5941_prof);

        
        $__internal_f0aacdeda877d32f4db18d6a98907304e70e4c1c51e56bfa20535cb80b6e86e3->leave($__internal_f0aacdeda877d32f4db18d6a98907304e70e4c1c51e56bfa20535cb80b6e86e3_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_e4979a301322a49d3a6fd60c07108bed465707a86451d9b091d5bf220105ee0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4979a301322a49d3a6fd60c07108bed465707a86451d9b091d5bf220105ee0b->enter($__internal_e4979a301322a49d3a6fd60c07108bed465707a86451d9b091d5bf220105ee0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_e120a5bec26813202f6be5ed3d66488097d89cac12e23c1bbb7fd8558737f73b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e120a5bec26813202f6be5ed3d66488097d89cac12e23c1bbb7fd8558737f73b->enter($__internal_e120a5bec26813202f6be5ed3d66488097d89cac12e23c1bbb7fd8558737f73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_e120a5bec26813202f6be5ed3d66488097d89cac12e23c1bbb7fd8558737f73b->leave($__internal_e120a5bec26813202f6be5ed3d66488097d89cac12e23c1bbb7fd8558737f73b_prof);

        
        $__internal_e4979a301322a49d3a6fd60c07108bed465707a86451d9b091d5bf220105ee0b->leave($__internal_e4979a301322a49d3a6fd60c07108bed465707a86451d9b091d5bf220105ee0b_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_d40c38ebf8ab27877576a686cb60d66ebc9aa422157e75f690dbd8fad5f76837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d40c38ebf8ab27877576a686cb60d66ebc9aa422157e75f690dbd8fad5f76837->enter($__internal_d40c38ebf8ab27877576a686cb60d66ebc9aa422157e75f690dbd8fad5f76837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_e780643e0ac96889a345d63fbd66fe8e2d98dd354e659187412aba0302d28649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e780643e0ac96889a345d63fbd66fe8e2d98dd354e659187412aba0302d28649->enter($__internal_e780643e0ac96889a345d63fbd66fe8e2d98dd354e659187412aba0302d28649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_e780643e0ac96889a345d63fbd66fe8e2d98dd354e659187412aba0302d28649->leave($__internal_e780643e0ac96889a345d63fbd66fe8e2d98dd354e659187412aba0302d28649_prof);

        
        $__internal_d40c38ebf8ab27877576a686cb60d66ebc9aa422157e75f690dbd8fad5f76837->leave($__internal_d40c38ebf8ab27877576a686cb60d66ebc9aa422157e75f690dbd8fad5f76837_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_0d7382d05b50e1566f9b29e74a82524ac09856ec3897531b835b8ee438b12bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d7382d05b50e1566f9b29e74a82524ac09856ec3897531b835b8ee438b12bbd->enter($__internal_0d7382d05b50e1566f9b29e74a82524ac09856ec3897531b835b8ee438b12bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_14a9edd22ad223226e5de03bac289fd4f1417b3f3eb32bda6f5f98212ab614ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a9edd22ad223226e5de03bac289fd4f1417b3f3eb32bda6f5f98212ab614ad->enter($__internal_14a9edd22ad223226e5de03bac289fd4f1417b3f3eb32bda6f5f98212ab614ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_14a9edd22ad223226e5de03bac289fd4f1417b3f3eb32bda6f5f98212ab614ad->leave($__internal_14a9edd22ad223226e5de03bac289fd4f1417b3f3eb32bda6f5f98212ab614ad_prof);

        
        $__internal_0d7382d05b50e1566f9b29e74a82524ac09856ec3897531b835b8ee438b12bbd->leave($__internal_0d7382d05b50e1566f9b29e74a82524ac09856ec3897531b835b8ee438b12bbd_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_feada9701ef09caff6dcd1d49a29ac828d57cea657c4e2c2319ae8355befd263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feada9701ef09caff6dcd1d49a29ac828d57cea657c4e2c2319ae8355befd263->enter($__internal_feada9701ef09caff6dcd1d49a29ac828d57cea657c4e2c2319ae8355befd263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_a0f83f43eceab4c378b42dd76343c878edf209b9b1ecb65ed6223d27cbefa5ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f83f43eceab4c378b42dd76343c878edf209b9b1ecb65ed6223d27cbefa5ce->enter($__internal_a0f83f43eceab4c378b42dd76343c878edf209b9b1ecb65ed6223d27cbefa5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_a0f83f43eceab4c378b42dd76343c878edf209b9b1ecb65ed6223d27cbefa5ce->leave($__internal_a0f83f43eceab4c378b42dd76343c878edf209b9b1ecb65ed6223d27cbefa5ce_prof);

        
        $__internal_feada9701ef09caff6dcd1d49a29ac828d57cea657c4e2c2319ae8355befd263->leave($__internal_feada9701ef09caff6dcd1d49a29ac828d57cea657c4e2c2319ae8355befd263_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 160,  771 => 153,  761 => 149,  754 => 145,  750 => 143,  747 => 142,  738 => 141,  709 => 139,  700 => 138,  687 => 134,  678 => 133,  667 => 154,  665 => 153,  660 => 150,  657 => 141,  655 => 138,  651 => 136,  648 => 133,  639 => 132,  628 => 125,  626 => 122,  624 => 121,  615 => 120,  604 => 127,  602 => 120,  599 => 119,  590 => 118,  580 => 104,  574 => 101,  571 => 100,  569 => 99,  562 => 97,  559 => 96,  550 => 95,  540 => 108,  535 => 105,  533 => 95,  524 => 89,  519 => 86,  514 => 84,  511 => 83,  509 => 82,  505 => 81,  502 => 80,  500 => 79,  494 => 77,  485 => 76,  473 => 109,  471 => 76,  467 => 74,  464 => 73,  455 => 72,  442 => 66,  433 => 65,  424 => 64,  412 => 112,  410 => 72,  405 => 69,  403 => 64,  396 => 60,  392 => 58,  383 => 57,  372 => 156,  370 => 132,  365 => 129,  363 => 118,  358 => 115,  356 => 57,  353 => 56,  344 => 55,  311 => 53,  300 => 165,  291 => 163,  287 => 162,  284 => 161,  282 => 160,  278 => 158,  276 => 55,  266 => 53,  257 => 52,  236 => 30,  227 => 29,  215 => 43,  212 => 42,  209 => 29,  200 => 28,  185 => 25,  182 => 24,  173 => 23,  160 => 15,  154 => 13,  145 => 12,  127 => 10,  116 => 167,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
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
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> {{ 'user.exit_impersonation'|trans(domain = 'EasyAdminBundle') }}</a>
                                                    </li>
                                                {% endif %}
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "/var/www/html/Premium_Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
