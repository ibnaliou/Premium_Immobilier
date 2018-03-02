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
        $__internal_7fb6b3a1dc2470bc3d3237e4f62a06be77d72e50826ad178dfe0afff4ea80fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb6b3a1dc2470bc3d3237e4f62a06be77d72e50826ad178dfe0afff4ea80fe7->enter($__internal_7fb6b3a1dc2470bc3d3237e4f62a06be77d72e50826ad178dfe0afff4ea80fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_6177f4bb6701629849bcb9031c9eeb07f23d30c80c6ffc5ccc1311b3bc25d2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6177f4bb6701629849bcb9031c9eeb07f23d30c80c6ffc5ccc1311b3bc25d2e5->enter($__internal_6177f4bb6701629849bcb9031c9eeb07f23d30c80c6ffc5ccc1311b3bc25d2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

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
        
        $__internal_7fb6b3a1dc2470bc3d3237e4f62a06be77d72e50826ad178dfe0afff4ea80fe7->leave($__internal_7fb6b3a1dc2470bc3d3237e4f62a06be77d72e50826ad178dfe0afff4ea80fe7_prof);

        
        $__internal_6177f4bb6701629849bcb9031c9eeb07f23d30c80c6ffc5ccc1311b3bc25d2e5->leave($__internal_6177f4bb6701629849bcb9031c9eeb07f23d30c80c6ffc5ccc1311b3bc25d2e5_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_55b15677947fe02d566c46c5342ba5cc7ad6c94dd5901ed5c6e03a3dea55e209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b15677947fe02d566c46c5342ba5cc7ad6c94dd5901ed5c6e03a3dea55e209->enter($__internal_55b15677947fe02d566c46c5342ba5cc7ad6c94dd5901ed5c6e03a3dea55e209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_628cbafc22cb526e2186a8e510cf816f683b9b571c8d6cdb46654fd25123f962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628cbafc22cb526e2186a8e510cf816f683b9b571c8d6cdb46654fd25123f962->enter($__internal_628cbafc22cb526e2186a8e510cf816f683b9b571c8d6cdb46654fd25123f962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_628cbafc22cb526e2186a8e510cf816f683b9b571c8d6cdb46654fd25123f962->leave($__internal_628cbafc22cb526e2186a8e510cf816f683b9b571c8d6cdb46654fd25123f962_prof);

        
        $__internal_55b15677947fe02d566c46c5342ba5cc7ad6c94dd5901ed5c6e03a3dea55e209->leave($__internal_55b15677947fe02d566c46c5342ba5cc7ad6c94dd5901ed5c6e03a3dea55e209_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_410619156b34b06eb39b6a409c1f6e4cf8589d65d01a4b96122a3e4b94a4248f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_410619156b34b06eb39b6a409c1f6e4cf8589d65d01a4b96122a3e4b94a4248f->enter($__internal_410619156b34b06eb39b6a409c1f6e4cf8589d65d01a4b96122a3e4b94a4248f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_7a1f8307c343f15490f06183a4b004c3004bb8ba6b307526b41c7e3915bdbfe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1f8307c343f15490f06183a4b004c3004bb8ba6b307526b41c7e3915bdbfe6->enter($__internal_7a1f8307c343f15490f06183a4b004c3004bb8ba6b307526b41c7e3915bdbfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_7a1f8307c343f15490f06183a4b004c3004bb8ba6b307526b41c7e3915bdbfe6->leave($__internal_7a1f8307c343f15490f06183a4b004c3004bb8ba6b307526b41c7e3915bdbfe6_prof);

        
        $__internal_410619156b34b06eb39b6a409c1f6e4cf8589d65d01a4b96122a3e4b94a4248f->leave($__internal_410619156b34b06eb39b6a409c1f6e4cf8589d65d01a4b96122a3e4b94a4248f_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_278a15cda40cd75520c2af42dd2d032a199f82af936e0c69eb546d1a5cef28bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278a15cda40cd75520c2af42dd2d032a199f82af936e0c69eb546d1a5cef28bc->enter($__internal_278a15cda40cd75520c2af42dd2d032a199f82af936e0c69eb546d1a5cef28bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_8d6622fcd38ea9b5e834b5d42e74364f9e7831bdc08aa9a591b78bf291fb40c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6622fcd38ea9b5e834b5d42e74364f9e7831bdc08aa9a591b78bf291fb40c7->enter($__internal_8d6622fcd38ea9b5e834b5d42e74364f9e7831bdc08aa9a591b78bf291fb40c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_8d6622fcd38ea9b5e834b5d42e74364f9e7831bdc08aa9a591b78bf291fb40c7->leave($__internal_8d6622fcd38ea9b5e834b5d42e74364f9e7831bdc08aa9a591b78bf291fb40c7_prof);

        
        $__internal_278a15cda40cd75520c2af42dd2d032a199f82af936e0c69eb546d1a5cef28bc->leave($__internal_278a15cda40cd75520c2af42dd2d032a199f82af936e0c69eb546d1a5cef28bc_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_3eb5a2e86d187e37376e20160a3a41580b03abaab94723e3cb1303c12f514b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb5a2e86d187e37376e20160a3a41580b03abaab94723e3cb1303c12f514b9b->enter($__internal_3eb5a2e86d187e37376e20160a3a41580b03abaab94723e3cb1303c12f514b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_7186a9faeb24a8e47a57ca858cb856c6e8733425b3cf680728b18aca5aced9ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7186a9faeb24a8e47a57ca858cb856c6e8733425b3cf680728b18aca5aced9ab->enter($__internal_7186a9faeb24a8e47a57ca858cb856c6e8733425b3cf680728b18aca5aced9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_7186a9faeb24a8e47a57ca858cb856c6e8733425b3cf680728b18aca5aced9ab->leave($__internal_7186a9faeb24a8e47a57ca858cb856c6e8733425b3cf680728b18aca5aced9ab_prof);

        
        $__internal_3eb5a2e86d187e37376e20160a3a41580b03abaab94723e3cb1303c12f514b9b->leave($__internal_3eb5a2e86d187e37376e20160a3a41580b03abaab94723e3cb1303c12f514b9b_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_3b47545d93046f74886ad26bf425ecfa4da398713f1bf45aa3add07aedd38990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b47545d93046f74886ad26bf425ecfa4da398713f1bf45aa3add07aedd38990->enter($__internal_3b47545d93046f74886ad26bf425ecfa4da398713f1bf45aa3add07aedd38990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_48014fe168ddc17b10fbd47437beacd049fa4eae6c462b5abfd0dc32a5f827cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48014fe168ddc17b10fbd47437beacd049fa4eae6c462b5abfd0dc32a5f827cd->enter($__internal_48014fe168ddc17b10fbd47437beacd049fa4eae6c462b5abfd0dc32a5f827cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_48014fe168ddc17b10fbd47437beacd049fa4eae6c462b5abfd0dc32a5f827cd->leave($__internal_48014fe168ddc17b10fbd47437beacd049fa4eae6c462b5abfd0dc32a5f827cd_prof);

        
        $__internal_3b47545d93046f74886ad26bf425ecfa4da398713f1bf45aa3add07aedd38990->leave($__internal_3b47545d93046f74886ad26bf425ecfa4da398713f1bf45aa3add07aedd38990_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_004fe6c820ca7a1ee00cfc6ea3a2ff4f35f33c73fca10f194e0644c22e5ce96e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004fe6c820ca7a1ee00cfc6ea3a2ff4f35f33c73fca10f194e0644c22e5ce96e->enter($__internal_004fe6c820ca7a1ee00cfc6ea3a2ff4f35f33c73fca10f194e0644c22e5ce96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42d461a71d8697abc63e530a8ef7eb34cf3b33e4b6d9580711026f4c79f4b0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d461a71d8697abc63e530a8ef7eb34cf3b33e4b6d9580711026f4c79f4b0f9->enter($__internal_42d461a71d8697abc63e530a8ef7eb34cf3b33e4b6d9580711026f4c79f4b0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_42d461a71d8697abc63e530a8ef7eb34cf3b33e4b6d9580711026f4c79f4b0f9->leave($__internal_42d461a71d8697abc63e530a8ef7eb34cf3b33e4b6d9580711026f4c79f4b0f9_prof);

        
        $__internal_004fe6c820ca7a1ee00cfc6ea3a2ff4f35f33c73fca10f194e0644c22e5ce96e->leave($__internal_004fe6c820ca7a1ee00cfc6ea3a2ff4f35f33c73fca10f194e0644c22e5ce96e_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_c38700c0aead86ebc7349c26687f8fd00b964def088883cde27badfd27c18452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38700c0aead86ebc7349c26687f8fd00b964def088883cde27badfd27c18452->enter($__internal_c38700c0aead86ebc7349c26687f8fd00b964def088883cde27badfd27c18452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_c9ddf475415a914cdd326fd088e88083c03ef9f47f448978f1d0417cfb740774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ddf475415a914cdd326fd088e88083c03ef9f47f448978f1d0417cfb740774->enter($__internal_c9ddf475415a914cdd326fd088e88083c03ef9f47f448978f1d0417cfb740774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_c9ddf475415a914cdd326fd088e88083c03ef9f47f448978f1d0417cfb740774->leave($__internal_c9ddf475415a914cdd326fd088e88083c03ef9f47f448978f1d0417cfb740774_prof);

        
        $__internal_c38700c0aead86ebc7349c26687f8fd00b964def088883cde27badfd27c18452->leave($__internal_c38700c0aead86ebc7349c26687f8fd00b964def088883cde27badfd27c18452_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_668e7f36eb8a5fa3453c7be80344b22175a7bf2f56063724692604894373cec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668e7f36eb8a5fa3453c7be80344b22175a7bf2f56063724692604894373cec2->enter($__internal_668e7f36eb8a5fa3453c7be80344b22175a7bf2f56063724692604894373cec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_7e3203810dbcf7290139dcab94a0e1629103d4c701fc1642d83ac7ea9158ab40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3203810dbcf7290139dcab94a0e1629103d4c701fc1642d83ac7ea9158ab40->enter($__internal_7e3203810dbcf7290139dcab94a0e1629103d4c701fc1642d83ac7ea9158ab40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_7e3203810dbcf7290139dcab94a0e1629103d4c701fc1642d83ac7ea9158ab40->leave($__internal_7e3203810dbcf7290139dcab94a0e1629103d4c701fc1642d83ac7ea9158ab40_prof);

        
        $__internal_668e7f36eb8a5fa3453c7be80344b22175a7bf2f56063724692604894373cec2->leave($__internal_668e7f36eb8a5fa3453c7be80344b22175a7bf2f56063724692604894373cec2_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_162b7ef76a8f4495a3e94d8c99cbda8ba1df7f49a3b9ebc55f2553250874e161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_162b7ef76a8f4495a3e94d8c99cbda8ba1df7f49a3b9ebc55f2553250874e161->enter($__internal_162b7ef76a8f4495a3e94d8c99cbda8ba1df7f49a3b9ebc55f2553250874e161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_894076b2b90e726b0477884d78f05d419e4e3960083f151fd702aa198850512a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894076b2b90e726b0477884d78f05d419e4e3960083f151fd702aa198850512a->enter($__internal_894076b2b90e726b0477884d78f05d419e4e3960083f151fd702aa198850512a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_894076b2b90e726b0477884d78f05d419e4e3960083f151fd702aa198850512a->leave($__internal_894076b2b90e726b0477884d78f05d419e4e3960083f151fd702aa198850512a_prof);

        
        $__internal_162b7ef76a8f4495a3e94d8c99cbda8ba1df7f49a3b9ebc55f2553250874e161->leave($__internal_162b7ef76a8f4495a3e94d8c99cbda8ba1df7f49a3b9ebc55f2553250874e161_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_7bd3b7bfcb59f8b03fe93abc996f4c239cb07ee8bb39c3c54b2ce6fe98aa9973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd3b7bfcb59f8b03fe93abc996f4c239cb07ee8bb39c3c54b2ce6fe98aa9973->enter($__internal_7bd3b7bfcb59f8b03fe93abc996f4c239cb07ee8bb39c3c54b2ce6fe98aa9973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_74bbc5095eb89629b0ec241b95faf7314cc8124d163d4443ccdf6baf4fee4a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74bbc5095eb89629b0ec241b95faf7314cc8124d163d4443ccdf6baf4fee4a0a->enter($__internal_74bbc5095eb89629b0ec241b95faf7314cc8124d163d4443ccdf6baf4fee4a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_74bbc5095eb89629b0ec241b95faf7314cc8124d163d4443ccdf6baf4fee4a0a->leave($__internal_74bbc5095eb89629b0ec241b95faf7314cc8124d163d4443ccdf6baf4fee4a0a_prof);

        
        $__internal_7bd3b7bfcb59f8b03fe93abc996f4c239cb07ee8bb39c3c54b2ce6fe98aa9973->leave($__internal_7bd3b7bfcb59f8b03fe93abc996f4c239cb07ee8bb39c3c54b2ce6fe98aa9973_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_c4bc0c2e7f507aba3853c30ac201c98b34c28ac6a4f2915c13456eea9fbfddf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4bc0c2e7f507aba3853c30ac201c98b34c28ac6a4f2915c13456eea9fbfddf5->enter($__internal_c4bc0c2e7f507aba3853c30ac201c98b34c28ac6a4f2915c13456eea9fbfddf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_80dfeadf295ff10a2ae4b51d36bb7584ff711b7fad7def3a532ef0c380ad48fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80dfeadf295ff10a2ae4b51d36bb7584ff711b7fad7def3a532ef0c380ad48fe->enter($__internal_80dfeadf295ff10a2ae4b51d36bb7584ff711b7fad7def3a532ef0c380ad48fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_80dfeadf295ff10a2ae4b51d36bb7584ff711b7fad7def3a532ef0c380ad48fe->leave($__internal_80dfeadf295ff10a2ae4b51d36bb7584ff711b7fad7def3a532ef0c380ad48fe_prof);

        
        $__internal_c4bc0c2e7f507aba3853c30ac201c98b34c28ac6a4f2915c13456eea9fbfddf5->leave($__internal_c4bc0c2e7f507aba3853c30ac201c98b34c28ac6a4f2915c13456eea9fbfddf5_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_1643b1ea6e5592a88cf4a9381a157fd9352da4891ed6bb9af552a47f7d73defa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1643b1ea6e5592a88cf4a9381a157fd9352da4891ed6bb9af552a47f7d73defa->enter($__internal_1643b1ea6e5592a88cf4a9381a157fd9352da4891ed6bb9af552a47f7d73defa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_582ee7447175a095f0adc2d12adfbea3f6699b1526a40fad069d66e44358de4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582ee7447175a095f0adc2d12adfbea3f6699b1526a40fad069d66e44358de4d->enter($__internal_582ee7447175a095f0adc2d12adfbea3f6699b1526a40fad069d66e44358de4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_582ee7447175a095f0adc2d12adfbea3f6699b1526a40fad069d66e44358de4d->leave($__internal_582ee7447175a095f0adc2d12adfbea3f6699b1526a40fad069d66e44358de4d_prof);

        
        $__internal_1643b1ea6e5592a88cf4a9381a157fd9352da4891ed6bb9af552a47f7d73defa->leave($__internal_1643b1ea6e5592a88cf4a9381a157fd9352da4891ed6bb9af552a47f7d73defa_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_db6d94ff636a1344a04eed293e205cf8a77d7d2602c8d5dda7be8320a2aad827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db6d94ff636a1344a04eed293e205cf8a77d7d2602c8d5dda7be8320a2aad827->enter($__internal_db6d94ff636a1344a04eed293e205cf8a77d7d2602c8d5dda7be8320a2aad827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_3acc3b24c650bdd084bf65c8aa57f8b8b5c022a9b76ab4f89dba42be2e860ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3acc3b24c650bdd084bf65c8aa57f8b8b5c022a9b76ab4f89dba42be2e860ce6->enter($__internal_3acc3b24c650bdd084bf65c8aa57f8b8b5c022a9b76ab4f89dba42be2e860ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_3acc3b24c650bdd084bf65c8aa57f8b8b5c022a9b76ab4f89dba42be2e860ce6->leave($__internal_3acc3b24c650bdd084bf65c8aa57f8b8b5c022a9b76ab4f89dba42be2e860ce6_prof);

        
        $__internal_db6d94ff636a1344a04eed293e205cf8a77d7d2602c8d5dda7be8320a2aad827->leave($__internal_db6d94ff636a1344a04eed293e205cf8a77d7d2602c8d5dda7be8320a2aad827_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_bb9b03b451fab3b114815808b0dab52206f8408a9fc113725eca921df3745322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9b03b451fab3b114815808b0dab52206f8408a9fc113725eca921df3745322->enter($__internal_bb9b03b451fab3b114815808b0dab52206f8408a9fc113725eca921df3745322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_e0fb4ce97aaef58ebb04ed9d553387a505d6336ab0cae9f7018d41de53b9f829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0fb4ce97aaef58ebb04ed9d553387a505d6336ab0cae9f7018d41de53b9f829->enter($__internal_e0fb4ce97aaef58ebb04ed9d553387a505d6336ab0cae9f7018d41de53b9f829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_e0fb4ce97aaef58ebb04ed9d553387a505d6336ab0cae9f7018d41de53b9f829->leave($__internal_e0fb4ce97aaef58ebb04ed9d553387a505d6336ab0cae9f7018d41de53b9f829_prof);

        
        $__internal_bb9b03b451fab3b114815808b0dab52206f8408a9fc113725eca921df3745322->leave($__internal_bb9b03b451fab3b114815808b0dab52206f8408a9fc113725eca921df3745322_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8431a895b95598ecaa11259b2d950fc9b4a7d419ccea59f20e17eed96f4d1901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8431a895b95598ecaa11259b2d950fc9b4a7d419ccea59f20e17eed96f4d1901->enter($__internal_8431a895b95598ecaa11259b2d950fc9b4a7d419ccea59f20e17eed96f4d1901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_ea20ceaee75ffc512eae908f401e1a5798a0ac72f6bec35092f1d04efb4082f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea20ceaee75ffc512eae908f401e1a5798a0ac72f6bec35092f1d04efb4082f8->enter($__internal_ea20ceaee75ffc512eae908f401e1a5798a0ac72f6bec35092f1d04efb4082f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_ea20ceaee75ffc512eae908f401e1a5798a0ac72f6bec35092f1d04efb4082f8->leave($__internal_ea20ceaee75ffc512eae908f401e1a5798a0ac72f6bec35092f1d04efb4082f8_prof);

        
        $__internal_8431a895b95598ecaa11259b2d950fc9b4a7d419ccea59f20e17eed96f4d1901->leave($__internal_8431a895b95598ecaa11259b2d950fc9b4a7d419ccea59f20e17eed96f4d1901_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_c6098523f9fcd2311a90ed36ada00a4ed64ebea842a0973457257ee9b1ffdcb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6098523f9fcd2311a90ed36ada00a4ed64ebea842a0973457257ee9b1ffdcb3->enter($__internal_c6098523f9fcd2311a90ed36ada00a4ed64ebea842a0973457257ee9b1ffdcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_9dc1752c04bdfe01115a77ff75bd8a1f862d3f5d7993213ada89abc468c6b0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc1752c04bdfe01115a77ff75bd8a1f862d3f5d7993213ada89abc468c6b0d6->enter($__internal_9dc1752c04bdfe01115a77ff75bd8a1f862d3f5d7993213ada89abc468c6b0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_9dc1752c04bdfe01115a77ff75bd8a1f862d3f5d7993213ada89abc468c6b0d6->leave($__internal_9dc1752c04bdfe01115a77ff75bd8a1f862d3f5d7993213ada89abc468c6b0d6_prof);

        
        $__internal_c6098523f9fcd2311a90ed36ada00a4ed64ebea842a0973457257ee9b1ffdcb3->leave($__internal_c6098523f9fcd2311a90ed36ada00a4ed64ebea842a0973457257ee9b1ffdcb3_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_63f5341dfb1b0e917bfb6051bda68ad79d51b2bdb055c1993acf70722a4fdd73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f5341dfb1b0e917bfb6051bda68ad79d51b2bdb055c1993acf70722a4fdd73->enter($__internal_63f5341dfb1b0e917bfb6051bda68ad79d51b2bdb055c1993acf70722a4fdd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2336d392afbb3c7c402e10f15686a57a7a058ecf4ea4bcd9f83c62df96116c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2336d392afbb3c7c402e10f15686a57a7a058ecf4ea4bcd9f83c62df96116c8f->enter($__internal_2336d392afbb3c7c402e10f15686a57a7a058ecf4ea4bcd9f83c62df96116c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_2336d392afbb3c7c402e10f15686a57a7a058ecf4ea4bcd9f83c62df96116c8f->leave($__internal_2336d392afbb3c7c402e10f15686a57a7a058ecf4ea4bcd9f83c62df96116c8f_prof);

        
        $__internal_63f5341dfb1b0e917bfb6051bda68ad79d51b2bdb055c1993acf70722a4fdd73->leave($__internal_63f5341dfb1b0e917bfb6051bda68ad79d51b2bdb055c1993acf70722a4fdd73_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_b1ae04b0d9cf80681566def315212a0d5f76c3c4db2faa6e10719644fb432491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ae04b0d9cf80681566def315212a0d5f76c3c4db2faa6e10719644fb432491->enter($__internal_b1ae04b0d9cf80681566def315212a0d5f76c3c4db2faa6e10719644fb432491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_e2c390253acfaf1a7d3dd822bad9943ac3c747881190e367b26146c34d74a629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c390253acfaf1a7d3dd822bad9943ac3c747881190e367b26146c34d74a629->enter($__internal_e2c390253acfaf1a7d3dd822bad9943ac3c747881190e367b26146c34d74a629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_e2c390253acfaf1a7d3dd822bad9943ac3c747881190e367b26146c34d74a629->leave($__internal_e2c390253acfaf1a7d3dd822bad9943ac3c747881190e367b26146c34d74a629_prof);

        
        $__internal_b1ae04b0d9cf80681566def315212a0d5f76c3c4db2faa6e10719644fb432491->leave($__internal_b1ae04b0d9cf80681566def315212a0d5f76c3c4db2faa6e10719644fb432491_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_467b567bef299090916cb368283690e7dd53f80886ca235a27dbce5c5e081463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_467b567bef299090916cb368283690e7dd53f80886ca235a27dbce5c5e081463->enter($__internal_467b567bef299090916cb368283690e7dd53f80886ca235a27dbce5c5e081463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_da159098ef7752e9e5f91a466fa8ec75d9ddcf413ce55627e1edfc10ef3db162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da159098ef7752e9e5f91a466fa8ec75d9ddcf413ce55627e1edfc10ef3db162->enter($__internal_da159098ef7752e9e5f91a466fa8ec75d9ddcf413ce55627e1edfc10ef3db162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_da159098ef7752e9e5f91a466fa8ec75d9ddcf413ce55627e1edfc10ef3db162->leave($__internal_da159098ef7752e9e5f91a466fa8ec75d9ddcf413ce55627e1edfc10ef3db162_prof);

        
        $__internal_467b567bef299090916cb368283690e7dd53f80886ca235a27dbce5c5e081463->leave($__internal_467b567bef299090916cb368283690e7dd53f80886ca235a27dbce5c5e081463_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_438628a4151853687c6d08285aea10b68eef238f00b9837ec983e59859f97f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_438628a4151853687c6d08285aea10b68eef238f00b9837ec983e59859f97f30->enter($__internal_438628a4151853687c6d08285aea10b68eef238f00b9837ec983e59859f97f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_f2cbc10be8d261d2bef9f314d825b168b9a724529f51504e91998188c835ed11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2cbc10be8d261d2bef9f314d825b168b9a724529f51504e91998188c835ed11->enter($__internal_f2cbc10be8d261d2bef9f314d825b168b9a724529f51504e91998188c835ed11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_f2cbc10be8d261d2bef9f314d825b168b9a724529f51504e91998188c835ed11->leave($__internal_f2cbc10be8d261d2bef9f314d825b168b9a724529f51504e91998188c835ed11_prof);

        
        $__internal_438628a4151853687c6d08285aea10b68eef238f00b9837ec983e59859f97f30->leave($__internal_438628a4151853687c6d08285aea10b68eef238f00b9837ec983e59859f97f30_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_96c8aad8e71c3c2f2115df1d3c49e02a2787a2a9770fd57d611a3e1f1a1c50fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c8aad8e71c3c2f2115df1d3c49e02a2787a2a9770fd57d611a3e1f1a1c50fb->enter($__internal_96c8aad8e71c3c2f2115df1d3c49e02a2787a2a9770fd57d611a3e1f1a1c50fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_a5cc50eca8e301f89313f431407f8c95ee0084f57e6dc530e6bec2c4c6c500b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5cc50eca8e301f89313f431407f8c95ee0084f57e6dc530e6bec2c4c6c500b5->enter($__internal_a5cc50eca8e301f89313f431407f8c95ee0084f57e6dc530e6bec2c4c6c500b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_a5cc50eca8e301f89313f431407f8c95ee0084f57e6dc530e6bec2c4c6c500b5->leave($__internal_a5cc50eca8e301f89313f431407f8c95ee0084f57e6dc530e6bec2c4c6c500b5_prof);

        
        $__internal_96c8aad8e71c3c2f2115df1d3c49e02a2787a2a9770fd57d611a3e1f1a1c50fb->leave($__internal_96c8aad8e71c3c2f2115df1d3c49e02a2787a2a9770fd57d611a3e1f1a1c50fb_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_fbd23bca5960c1dc4d8bf29d5fe9c594bee4663821b9816acc61b7d8c2504eba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbd23bca5960c1dc4d8bf29d5fe9c594bee4663821b9816acc61b7d8c2504eba->enter($__internal_fbd23bca5960c1dc4d8bf29d5fe9c594bee4663821b9816acc61b7d8c2504eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_305c1a7ffe1854dcac365068a4e61244c021cb8d41c0fb478985278f0d74d44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305c1a7ffe1854dcac365068a4e61244c021cb8d41c0fb478985278f0d74d44e->enter($__internal_305c1a7ffe1854dcac365068a4e61244c021cb8d41c0fb478985278f0d74d44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_305c1a7ffe1854dcac365068a4e61244c021cb8d41c0fb478985278f0d74d44e->leave($__internal_305c1a7ffe1854dcac365068a4e61244c021cb8d41c0fb478985278f0d74d44e_prof);

        
        $__internal_fbd23bca5960c1dc4d8bf29d5fe9c594bee4663821b9816acc61b7d8c2504eba->leave($__internal_fbd23bca5960c1dc4d8bf29d5fe9c594bee4663821b9816acc61b7d8c2504eba_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_59756806549fabdf7a0c070092e3eec692dc505c6c1d22d1dd10167b2463edec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59756806549fabdf7a0c070092e3eec692dc505c6c1d22d1dd10167b2463edec->enter($__internal_59756806549fabdf7a0c070092e3eec692dc505c6c1d22d1dd10167b2463edec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_65c598de296c4585e19658d3568f7e0d55f627ea00d111a970e116c164040375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c598de296c4585e19658d3568f7e0d55f627ea00d111a970e116c164040375->enter($__internal_65c598de296c4585e19658d3568f7e0d55f627ea00d111a970e116c164040375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_65c598de296c4585e19658d3568f7e0d55f627ea00d111a970e116c164040375->leave($__internal_65c598de296c4585e19658d3568f7e0d55f627ea00d111a970e116c164040375_prof);

        
        $__internal_59756806549fabdf7a0c070092e3eec692dc505c6c1d22d1dd10167b2463edec->leave($__internal_59756806549fabdf7a0c070092e3eec692dc505c6c1d22d1dd10167b2463edec_prof);

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
