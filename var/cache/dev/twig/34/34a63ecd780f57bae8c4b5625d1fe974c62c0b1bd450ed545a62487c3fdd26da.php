<?php

/* @EasyAdmin/default/list.html.twig */
class __TwigTemplate_2852a018579902a287e06e6bd7c1ace887395a1d3edaabb45993ce68405e9f68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_title_wrapper' => array($this, 'block_content_title_wrapper'),
            'global_actions' => array($this, 'block_global_actions'),
            'search_action' => array($this, 'block_search_action'),
            'search_form' => array($this, 'block_search_form'),
            'new_action' => array($this, 'block_new_action'),
            'main' => array($this, 'block_main'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'item_actions' => array($this, 'block_item_actions'),
            'paginator' => array($this, 'block_paginator'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b2f26123f0483bad8d815841f9efaa53e06170930afe16bd6f5fd1eae8a3c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b2f26123f0483bad8d815841f9efaa53e06170930afe16bd6f5fd1eae8a3c0b->enter($__internal_7b2f26123f0483bad8d815841f9efaa53e06170930afe16bd6f5fd1eae8a3c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        $__internal_bb4c37b65bb062215397cc5d46826b689ebf2c398405a6f6319e288dcb8606d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4c37b65bb062215397cc5d46826b689ebf2c398405a6f6319e288dcb8606d4->enter($__internal_bb4c37b65bb062215397cc5d46826b689ebf2c398405a6f6319e288dcb8606d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["__internal_a0aa56adfd0a41f4dfd5172ca7f1b4361f202286afe55179223d76996e58fb1e"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 2
($context["__internal_a0aa56adfd0a41f4dfd5172ca7f1b4361f202286afe55179223d76996e58fb1e"] ?? $this->getContext($context, "__internal_a0aa56adfd0a41f4dfd5172ca7f1b4361f202286afe55179223d76996e58fb1e"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 3
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 2
($context["__internal_a0aa56adfd0a41f4dfd5172ca7f1b4361f202286afe55179223d76996e58fb1e"] ?? $this->getContext($context, "__internal_a0aa56adfd0a41f4dfd5172ca7f1b4361f202286afe55179223d76996e58fb1e"))));
        // line 7
        $context["_request_parameters"] = twig_array_merge(twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), ((array_key_exists("_request_parameters", $context)) ? (_twig_default_filter(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array())) : (array()))), array("action" => $this->getAttribute($this->getAttribute(        // line 8
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"), "entity" => $this->getAttribute(        // line 9
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "menuIndex" => $this->getAttribute($this->getAttribute(        // line 10
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "menuIndex"), "method"), "submenuIndex" => $this->getAttribute($this->getAttribute(        // line 11
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "submenuIndex"), "method"), "sortField" => $this->getAttribute($this->getAttribute(        // line 12
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"), "sortDirection" => $this->getAttribute($this->getAttribute(        // line 13
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"), "page" => $this->getAttribute($this->getAttribute(        // line 14
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "page", 1 => 1), "method")));
        // line 17
        if (("search" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 18
            $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array("query" => (($this->getAttribute($this->getAttribute(            // line 19
($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "sortField" => (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 20
($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array()), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"))) : ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"))), "sortDirection" => (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 21
($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array()), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"))) : ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method")))));
        }
        // line 25
        $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array("referer" => twig_urlencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", ($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters"))))));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b2f26123f0483bad8d815841f9efaa53e06170930afe16bd6f5fd1eae8a3c0b->leave($__internal_7b2f26123f0483bad8d815841f9efaa53e06170930afe16bd6f5fd1eae8a3c0b_prof);

        
        $__internal_bb4c37b65bb062215397cc5d46826b689ebf2c398405a6f6319e288dcb8606d4->leave($__internal_bb4c37b65bb062215397cc5d46826b689ebf2c398405a6f6319e288dcb8606d4_prof);

    }

    // line 27
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_ebc149934db1e2d22cbd9b9cad8343df3a53a07f8929e6f5aba51f8f0be4b72c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc149934db1e2d22cbd9b9cad8343df3a53a07f8929e6f5aba51f8f0be4b72c->enter($__internal_ebc149934db1e2d22cbd9b9cad8343df3a53a07f8929e6f5aba51f8f0be4b72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_43d75b9fd7659061b574f375e1290f23b0a1028ab80e1aea3270efbee30b8883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d75b9fd7659061b574f375e1290f23b0a1028ab80e1aea3270efbee30b8883->enter($__internal_43d75b9fd7659061b574f375e1290f23b0a1028ab80e1aea3270efbee30b8883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_43d75b9fd7659061b574f375e1290f23b0a1028ab80e1aea3270efbee30b8883->leave($__internal_43d75b9fd7659061b574f375e1290f23b0a1028ab80e1aea3270efbee30b8883_prof);

        
        $__internal_ebc149934db1e2d22cbd9b9cad8343df3a53a07f8929e6f5aba51f8f0be4b72c->leave($__internal_ebc149934db1e2d22cbd9b9cad8343df3a53a07f8929e6f5aba51f8f0be4b72c_prof);

    }

    // line 28
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_3f551129d982cca7ef754c7cdd49c1eac1db9c9be812015dc24fcae886f4eb9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f551129d982cca7ef754c7cdd49c1eac1db9c9be812015dc24fcae886f4eb9e->enter($__internal_3f551129d982cca7ef754c7cdd49c1eac1db9c9be812015dc24fcae886f4eb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_8cbde62b42b8bace6f344c2e5e8a027dcbcc331c92846d4b1842f8b4aeb0b690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cbde62b42b8bace6f344c2e5e8a027dcbcc331c92846d4b1842f8b4aeb0b690->enter($__internal_8cbde62b42b8bace6f344c2e5e8a027dcbcc331c92846d4b1842f8b4aeb0b690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_8cbde62b42b8bace6f344c2e5e8a027dcbcc331c92846d4b1842f8b4aeb0b690->leave($__internal_8cbde62b42b8bace6f344c2e5e8a027dcbcc331c92846d4b1842f8b4aeb0b690_prof);

        
        $__internal_3f551129d982cca7ef754c7cdd49c1eac1db9c9be812015dc24fcae886f4eb9e->leave($__internal_3f551129d982cca7ef754c7cdd49c1eac1db9c9be812015dc24fcae886f4eb9e_prof);

    }

    // line 30
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_fd9675962816272b71534c28f235bce8fae0784f7d94bd3749714feef91a2b69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd9675962816272b71534c28f235bce8fae0784f7d94bd3749714feef91a2b69->enter($__internal_fd9675962816272b71534c28f235bce8fae0784f7d94bd3749714feef91a2b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_900d7ebbd3a6abf648c461f3fdbf3973148f1f48ff6f2de3ec4d80e46c6ab8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900d7ebbd3a6abf648c461f3fdbf3973148f1f48ff6f2de3ec4d80e46c6ab8c8->enter($__internal_900d7ebbd3a6abf648c461f3fdbf3973148f1f48ff6f2de3ec4d80e46c6ab8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 31
        ob_start();
        // line 32
        echo "    ";
        if (("search" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 33
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("search.page_title", $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nbResults", array()), array(), "EasyAdminBundle");
            // line 34
            echo "        ";
            echo (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "search", array()), "title", array()), $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nbResults", array()), array(),             // line 2
($context["__internal_a0aa56adfd0a41f4dfd5172ca7f1b4361f202286afe55179223d76996e58fb1e"] ?? $this->getContext($context, "__internal_a0aa56adfd0a41f4dfd5172ca7f1b4361f202286afe55179223d76996e58fb1e")))) : (            // line 34
($context["_default_title"] ?? $this->getContext($context, "_default_title"))));
            echo "
    ";
        } else {
            // line 36
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
            // line 37
            echo "        ";
            echo (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "list", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "list", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),             // line 2
($context["__internal_a0aa56adfd0a41f4dfd5172ca7f1b4361f202286afe55179223d76996e58fb1e"] ?? $this->getContext($context, "__internal_a0aa56adfd0a41f4dfd5172ca7f1b4361f202286afe55179223d76996e58fb1e")))) : (            // line 37
($context["_default_title"] ?? $this->getContext($context, "_default_title"))));
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_900d7ebbd3a6abf648c461f3fdbf3973148f1f48ff6f2de3ec4d80e46c6ab8c8->leave($__internal_900d7ebbd3a6abf648c461f3fdbf3973148f1f48ff6f2de3ec4d80e46c6ab8c8_prof);

        
        $__internal_fd9675962816272b71534c28f235bce8fae0784f7d94bd3749714feef91a2b69->leave($__internal_fd9675962816272b71534c28f235bce8fae0784f7d94bd3749714feef91a2b69_prof);

    }

    // line 42
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_adec2a20910e47df54b42a40dcfb46cadc5f79f343d7205e1fb6539f77e61745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adec2a20910e47df54b42a40dcfb46cadc5f79f343d7205e1fb6539f77e61745->enter($__internal_adec2a20910e47df54b42a40dcfb46cadc5f79f343d7205e1fb6539f77e61745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_7b3439950aac9c6c5a30ca397d3a6fc8da031ec233c790ecf76a7a2ed72f2050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3439950aac9c6c5a30ca397d3a6fc8da031ec233c790ecf76a7a2ed72f2050->enter($__internal_7b3439950aac9c6c5a30ca397d3a6fc8da031ec233c790ecf76a7a2ed72f2050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 43
        echo "    <div class=\"row\">
        <div class=\"col-sm-5\">
            ";
        // line 45
        $this->displayBlock('content_title_wrapper', $context, $blocks);
        // line 48
        echo "        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                ";
        // line 52
        $this->displayBlock('global_actions', $context, $blocks);
        // line 93
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_7b3439950aac9c6c5a30ca397d3a6fc8da031ec233c790ecf76a7a2ed72f2050->leave($__internal_7b3439950aac9c6c5a30ca397d3a6fc8da031ec233c790ecf76a7a2ed72f2050_prof);

        
        $__internal_adec2a20910e47df54b42a40dcfb46cadc5f79f343d7205e1fb6539f77e61745->leave($__internal_adec2a20910e47df54b42a40dcfb46cadc5f79f343d7205e1fb6539f77e61745_prof);

    }

    // line 45
    public function block_content_title_wrapper($context, array $blocks = array())
    {
        $__internal_08d2d049a88a19f5b519993df06cf50f58e25e60abc8ac4eb57d6ce8afdb42ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d2d049a88a19f5b519993df06cf50f58e25e60abc8ac4eb57d6ce8afdb42ac->enter($__internal_08d2d049a88a19f5b519993df06cf50f58e25e60abc8ac4eb57d6ce8afdb42ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        $__internal_2efdf74a7a85a40efd8e1a4c047d065329a241a802c1369b29867349c07ce7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2efdf74a7a85a40efd8e1a4c047d065329a241a802c1369b29867349c07ce7bc->enter($__internal_2efdf74a7a85a40efd8e1a4c047d065329a241a802c1369b29867349c07ce7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        // line 46
        echo "                <h1 class=\"title\">";
        $this->displayBlock("content_title", $context, $blocks);
        echo "</h1>
            ";
        
        $__internal_2efdf74a7a85a40efd8e1a4c047d065329a241a802c1369b29867349c07ce7bc->leave($__internal_2efdf74a7a85a40efd8e1a4c047d065329a241a802c1369b29867349c07ce7bc_prof);

        
        $__internal_08d2d049a88a19f5b519993df06cf50f58e25e60abc8ac4eb57d6ce8afdb42ac->leave($__internal_08d2d049a88a19f5b519993df06cf50f58e25e60abc8ac4eb57d6ce8afdb42ac_prof);

    }

    // line 52
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_3c0421a5084127d526b9919fc43322196d2e9568341c541882d7edf3b748228a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c0421a5084127d526b9919fc43322196d2e9568341c541882d7edf3b748228a->enter($__internal_3c0421a5084127d526b9919fc43322196d2e9568341c541882d7edf3b748228a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_eb6723d39caeeb3c6d6eaac0810c9bf31a0713d682a28c09133bbd658a6bf363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6723d39caeeb3c6d6eaac0810c9bf31a0713d682a28c09133bbd658a6bf363->enter($__internal_eb6723d39caeeb3c6d6eaac0810c9bf31a0713d682a28c09133bbd658a6bf363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        // line 53
        echo "                    ";
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "search", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 54
            echo "                        ";
            $context["_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "search", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
            // line 55
            echo "
                        ";
            // line 56
            $this->displayBlock('search_action', $context, $blocks);
            // line 79
            echo "                    ";
        }
        // line 80
        echo "
                    ";
        // line 81
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "new", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 82
            echo "                        ";
            $context["_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "new", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
            // line 83
            echo "                        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 91
            echo "                    ";
        }
        // line 92
        echo "                ";
        
        $__internal_eb6723d39caeeb3c6d6eaac0810c9bf31a0713d682a28c09133bbd658a6bf363->leave($__internal_eb6723d39caeeb3c6d6eaac0810c9bf31a0713d682a28c09133bbd658a6bf363_prof);

        
        $__internal_3c0421a5084127d526b9919fc43322196d2e9568341c541882d7edf3b748228a->leave($__internal_3c0421a5084127d526b9919fc43322196d2e9568341c541882d7edf3b748228a_prof);

    }

    // line 56
    public function block_search_action($context, array $blocks = array())
    {
        $__internal_47db713704a71184540c8ed6c5b6a61b8e75fd8b08c73f45b2306ff80a9220e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47db713704a71184540c8ed6c5b6a61b8e75fd8b08c73f45b2306ff80a9220e1->enter($__internal_47db713704a71184540c8ed6c5b6a61b8e75fd8b08c73f45b2306ff80a9220e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        $__internal_0918e1309866ef229411d5162f9afba37a0efdfcd15e1356a65a6c9943de7039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0918e1309866ef229411d5162f9afba37a0efdfcd15e1356a65a6c9943de7039->enter($__internal_0918e1309866ef229411d5162f9afba37a0efdfcd15e1356a65a6c9943de7039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        // line 57
        echo "                            <div class=\"form-action ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                                <form method=\"get\" action=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                    ";
        // line 59
        $this->displayBlock('search_form', $context, $blocks);
        // line 76
        echo "                                </form>
                            </div>
                        ";
        
        $__internal_0918e1309866ef229411d5162f9afba37a0efdfcd15e1356a65a6c9943de7039->leave($__internal_0918e1309866ef229411d5162f9afba37a0efdfcd15e1356a65a6c9943de7039_prof);

        
        $__internal_47db713704a71184540c8ed6c5b6a61b8e75fd8b08c73f45b2306ff80a9220e1->leave($__internal_47db713704a71184540c8ed6c5b6a61b8e75fd8b08c73f45b2306ff80a9220e1_prof);

    }

    // line 59
    public function block_search_form($context, array $blocks = array())
    {
        $__internal_9d8ecd880525ac1f44b52c7f0b674c948fb538087ae8f084f251311a9bef48a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8ecd880525ac1f44b52c7f0b674c948fb538087ae8f084f251311a9bef48a1->enter($__internal_9d8ecd880525ac1f44b52c7f0b674c948fb538087ae8f084f251311a9bef48a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        $__internal_88ec8d06bb8b91a96368ac1b54e44c8ef10a03461eb03ae648113e7781d49962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ec8d06bb8b91a96368ac1b54e44c8ef10a03461eb03ae648113e7781d49962->enter($__internal_88ec8d06bb8b91a96368ac1b54e44c8ef10a03461eb03ae648113e7781d49962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        // line 60
        echo "                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "entity", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array()), $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "sortField", array()))) : ($this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "sortField", array()))), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array()), $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "sortDirection", array()))) : ($this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "sortDirection", array()))), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "menuIndex", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "submenuIndex", array()), "html", null, true);
        echo "\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "target", array()), "html", null, true);
        echo "\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["_action"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_action"] ?? null), "label", array()), "action.search")) : ("action.search")), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 2
($context["__internal_a0aa56adfd0a41f4dfd5172ca7f1b4361f202286afe55179223d76996e58fb1e"] ?? $this->getContext($context, "__internal_a0aa56adfd0a41f4dfd5172ca7f1b4361f202286afe55179223d76996e58fb1e"))), "html", null, true);
        // line 71
        echo "</span>
                                                </button>
                                            </span>
                                        </div>
                                    ";
        
        $__internal_88ec8d06bb8b91a96368ac1b54e44c8ef10a03461eb03ae648113e7781d49962->leave($__internal_88ec8d06bb8b91a96368ac1b54e44c8ef10a03461eb03ae648113e7781d49962_prof);

        
        $__internal_9d8ecd880525ac1f44b52c7f0b674c948fb538087ae8f084f251311a9bef48a1->leave($__internal_9d8ecd880525ac1f44b52c7f0b674c948fb538087ae8f084f251311a9bef48a1_prof);

    }

    // line 83
    public function block_new_action($context, array $blocks = array())
    {
        $__internal_0fcc710d68a5abbe36f5134f24d263b49835b1c3a9613cf12dd349f308086f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fcc710d68a5abbe36f5134f24d263b49835b1c3a9613cf12dd349f308086f47->enter($__internal_0fcc710d68a5abbe36f5134f24d263b49835b1c3a9613cf12dd349f308086f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        $__internal_19a59de320ab6946d2c977efeab86dc1e886159f2d50addfa9e854d4d5f74e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a59de320ab6946d2c977efeab86dc1e886159f2d50addfa9e854d4d5f74e1f->enter($__internal_19a59de320ab6946d2c977efeab86dc1e886159f2d50addfa9e854d4d5f74e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        // line 84
        echo "                            <div class=\"button-action\">
                                <a class=\"";
        // line 85
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array("action" => $this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "name", array())))), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "target", array()), "html", null, true);
        echo "\">
                                    ";
        // line 86
        if ($this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 87
        echo "                                    ";
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["_action"] ?? null), "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "label", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "label", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 2
($context["__internal_a0aa56adfd0a41f4dfd5172ca7f1b4361f202286afe55179223d76996e58fb1e"] ?? $this->getContext($context, "__internal_a0aa56adfd0a41f4dfd5172ca7f1b4361f202286afe55179223d76996e58fb1e")))) : ("")), "html", null, true);
        // line 87
        echo "
                                </a>
                            </div>
                        ";
        
        $__internal_19a59de320ab6946d2c977efeab86dc1e886159f2d50addfa9e854d4d5f74e1f->leave($__internal_19a59de320ab6946d2c977efeab86dc1e886159f2d50addfa9e854d4d5f74e1f_prof);

        
        $__internal_0fcc710d68a5abbe36f5134f24d263b49835b1c3a9613cf12dd349f308086f47->leave($__internal_0fcc710d68a5abbe36f5134f24d263b49835b1c3a9613cf12dd349f308086f47_prof);

    }

    // line 98
    public function block_main($context, array $blocks = array())
    {
        $__internal_6939a857138fd0351ddc3fee0f9b2f53e409785cc59738665db62c9498b2e15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6939a857138fd0351ddc3fee0f9b2f53e409785cc59738665db62c9498b2e15d->enter($__internal_6939a857138fd0351ddc3fee0f9b2f53e409785cc59738665db62c9498b2e15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_b824dd84d4473d116cf4fd0594b46c0f7a28c380b08d71a4962e86f1ca852969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b824dd84d4473d116cf4fd0594b46c0f7a28c380b08d71a4962e86f1ca852969->enter($__internal_b824dd84d4473d116cf4fd0594b46c0f7a28c380b08d71a4962e86f1ca852969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 99
        echo "    ";
        $context["_list_item_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("list", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
        // line 100
        echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        ";
        // line 104
        $this->displayBlock('table_head', $context, $blocks);
        // line 131
        echo "        </thead>

        <tbody>
        ";
        // line 134
        $this->displayBlock('table_body', $context, $blocks);
        // line 171
        echo "        </tbody>
    </table>
    </div>

    ";
        // line 175
        $this->displayBlock('paginator', $context, $blocks);
        // line 178
        echo "
    ";
        // line 179
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_b824dd84d4473d116cf4fd0594b46c0f7a28c380b08d71a4962e86f1ca852969->leave($__internal_b824dd84d4473d116cf4fd0594b46c0f7a28c380b08d71a4962e86f1ca852969_prof);

        
        $__internal_6939a857138fd0351ddc3fee0f9b2f53e409785cc59738665db62c9498b2e15d->leave($__internal_6939a857138fd0351ddc3fee0f9b2f53e409785cc59738665db62c9498b2e15d_prof);

    }

    // line 104
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_5534feb7b17205ccc2663fa017613498a9d41e044b73d57c3bef7b6e84d4518c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5534feb7b17205ccc2663fa017613498a9d41e044b73d57c3bef7b6e84d4518c->enter($__internal_5534feb7b17205ccc2663fa017613498a9d41e044b73d57c3bef7b6e84d4518c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_0e7f22d02a5d8019be00ea8052b6f79271247f9a0f66f25a13677d6622cc25c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7f22d02a5d8019be00ea8052b6f79271247f9a0f66f25a13677d6622cc25c9->enter($__internal_0e7f22d02a5d8019be00ea8052b6f79271247f9a0f66f25a13677d6622cc25c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 105
        echo "            <tr>
                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 107
            echo "                    ";
            $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"), ".")));
            // line 108
            echo "                    ";
            $context["nextSortDirection"] = ((($context["isSortingField"] ?? $this->getContext($context, "isSortingField"))) ? (((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection"), "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 109
            echo "                    ";
            $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),             // line 2
($context["__internal_a0aa56adfd0a41f4dfd5172ca7f1b4361f202286afe55179223d76996e58fb1e"] ?? $this->getContext($context, "__internal_a0aa56adfd0a41f4dfd5172ca7f1b4361f202286afe55179223d76996e58fb1e")));
            // line 110
            echo "                    ";
            $context["_column_icon"] = ((($context["isSortingField"] ?? $this->getContext($context, "isSortingField"))) ? ((((($context["nextSortDirection"] ?? $this->getContext($context, "nextSortDirection")) == "DESC")) ? ("fa-caret-up") : ("fa-caret-down"))) : ("fa-sort"));
            // line 111
            echo "
                    <th data-property-name=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "property", array()), "html", null, true);
            echo "\" class=\"";
            echo ((($context["isSortingField"] ?? $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
            echo " ";
            echo (($this->getAttribute($context["metadata"], "virtual", array())) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
            echo "\">
                        ";
            // line 113
            if ($this->getAttribute($context["metadata"], "sortable", array())) {
                // line 114
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array("page" => 1, "sortField" => $this->getAttribute($context["metadata"], "property", array()), "sortDirection" => ($context["nextSortDirection"] ?? $this->getContext($context, "nextSortDirection"))))), "html", null, true);
                echo "\">
                                <i class=\"fa ";
                // line 115
                echo twig_escape_filter($this->env, ($context["_column_icon"] ?? $this->getContext($context, "_column_icon")), "html", null, true);
                echo "\"></i>
                                ";
                // line 116
                echo ($context["_column_label"] ?? $this->getContext($context, "_column_label"));
                echo "
                            </a>
                        ";
            } else {
                // line 119
                echo "                            <span>";
                echo ($context["_column_label"] ?? $this->getContext($context, "_column_label"));
                echo "</span>
                        ";
            }
            // line 121
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "
                ";
        // line 124
        if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? $this->getContext($context, "_list_item_actions"))) > 0)) {
            // line 125
            echo "                    <th>
                        <span>";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 129
        echo "            </tr>
        ";
        
        $__internal_0e7f22d02a5d8019be00ea8052b6f79271247f9a0f66f25a13677d6622cc25c9->leave($__internal_0e7f22d02a5d8019be00ea8052b6f79271247f9a0f66f25a13677d6622cc25c9_prof);

        
        $__internal_5534feb7b17205ccc2663fa017613498a9d41e044b73d57c3bef7b6e84d4518c->leave($__internal_5534feb7b17205ccc2663fa017613498a9d41e044b73d57c3bef7b6e84d4518c_prof);

    }

    // line 134
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_b48dea1f743be3280d1ae89a1c371874bd0957e94b981fb9b3297b4e344139fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b48dea1f743be3280d1ae89a1c371874bd0957e94b981fb9b3297b4e344139fc->enter($__internal_b48dea1f743be3280d1ae89a1c371874bd0957e94b981fb9b3297b4e344139fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_2d6c6950865f88c34e10785aa6bee4a1aec2065e1ead4c3a505bd5450ae31e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6c6950865f88c34e10785aa6bee4a1aec2065e1ead4c3a505bd5450ae31e00->enter($__internal_2d6c6950865f88c34e10785aa6bee4a1aec2065e1ead4c3a505bd5450ae31e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 135
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPageResults", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 136
            echo "                ";
            // line 137
            echo "                ";
            $context["_item_id"] = ("" . $this->getAttribute($context["item"], $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
            // line 138
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, ($context["_item_id"] ?? $this->getContext($context, "_item_id")), "html", null, true);
            echo "\">
                    ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 140
                echo "                        ";
                $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"));
                // line 141
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),                 // line 2
($context["__internal_a0aa56adfd0a41f4dfd5172ca7f1b4361f202286afe55179223d76996e58fb1e"] ?? $this->getContext($context, "__internal_a0aa56adfd0a41f4dfd5172ca7f1b4361f202286afe55179223d76996e58fb1e")));
                // line 142
                echo "
                        <td data-label=\"";
                // line 143
                echo twig_escape_filter($this->env, ($context["_column_label"] ?? $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"";
                echo ((($context["isSortingField"] ?? $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
                echo "\">
                            ";
                // line 144
                echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "list", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "
                    ";
            // line 148
            if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? $this->getContext($context, "_list_item_actions"))) > 0)) {
                // line 149
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
                // line 150
                echo "                        <td data-label=\"";
                echo twig_escape_filter($this->env, ($context["_column_label"] ?? $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"actions\">
                        ";
                // line 151
                $this->displayBlock('item_actions', $context, $blocks);
                // line 160
                echo "                        </td>
                    ";
            }
            // line 162
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 164
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 165
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, ($context["_list_item_actions"] ?? $this->getContext($context, "_list_item_actions"))) > 0)) ? ((twig_length_filter($this->env, ($context["fields"] ?? $this->getContext($context, "fields"))) + 1)) : (twig_length_filter($this->env, ($context["fields"] ?? $this->getContext($context, "fields"))))), "html", null, true);
            echo "\">
                        ";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search.no_results", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "        ";
        
        $__internal_2d6c6950865f88c34e10785aa6bee4a1aec2065e1ead4c3a505bd5450ae31e00->leave($__internal_2d6c6950865f88c34e10785aa6bee4a1aec2065e1ead4c3a505bd5450ae31e00_prof);

        
        $__internal_b48dea1f743be3280d1ae89a1c371874bd0957e94b981fb9b3297b4e344139fc->leave($__internal_b48dea1f743be3280d1ae89a1c371874bd0957e94b981fb9b3297b4e344139fc_prof);

    }

    // line 151
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_c2a7095e4c9a6f33416a7a98cdf1df14f42b80c219722ddbab4cf6e2b1665070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a7095e4c9a6f33416a7a98cdf1df14f42b80c219722ddbab4cf6e2b1665070->enter($__internal_c2a7095e4c9a6f33416a7a98cdf1df14f42b80c219722ddbab4cf6e2b1665070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_97c2c83b07ec6e0b9ab59c16355ff35a6730aa72ac324b2ad82483cbc9323896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c2c83b07ec6e0b9ab59c16355ff35a6730aa72ac324b2ad82483cbc9323896->enter($__internal_97c2c83b07ec6e0b9ab59c16355ff35a6730aa72ac324b2ad82483cbc9323896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 152
        echo "                            ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 153
($context["_list_item_actions"] ?? $this->getContext($context, "_list_item_actions")), "request_parameters" =>         // line 154
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 155
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 156
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 157
($context["_item_id"] ?? $this->getContext($context, "_item_id"))), false);
        // line 158
        echo "
                        ";
        
        $__internal_97c2c83b07ec6e0b9ab59c16355ff35a6730aa72ac324b2ad82483cbc9323896->leave($__internal_97c2c83b07ec6e0b9ab59c16355ff35a6730aa72ac324b2ad82483cbc9323896_prof);

        
        $__internal_c2a7095e4c9a6f33416a7a98cdf1df14f42b80c219722ddbab4cf6e2b1665070->leave($__internal_c2a7095e4c9a6f33416a7a98cdf1df14f42b80c219722ddbab4cf6e2b1665070_prof);

    }

    // line 175
    public function block_paginator($context, array $blocks = array())
    {
        $__internal_2635dac8442be4a9ade6a3d83abecc13dd3ebf5c6b8491f7c1e07dc478b725f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2635dac8442be4a9ade6a3d83abecc13dd3ebf5c6b8491f7c1e07dc478b725f0->enter($__internal_2635dac8442be4a9ade6a3d83abecc13dd3ebf5c6b8491f7c1e07dc478b725f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        $__internal_9d89d602462087ff4d6f51589404520d2860d210f163cd5007ea51a6a7f37504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d89d602462087ff4d6f51589404520d2860d210f163cd5007ea51a6a7f37504->enter($__internal_9d89d602462087ff4d6f51589404520d2860d210f163cd5007ea51a6a7f37504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        // line 176
        echo "        ";
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "paginator", array()));
        echo "
    ";
        
        $__internal_9d89d602462087ff4d6f51589404520d2860d210f163cd5007ea51a6a7f37504->leave($__internal_9d89d602462087ff4d6f51589404520d2860d210f163cd5007ea51a6a7f37504_prof);

        
        $__internal_2635dac8442be4a9ade6a3d83abecc13dd3ebf5c6b8491f7c1e07dc478b725f0->leave($__internal_2635dac8442be4a9ade6a3d83abecc13dd3ebf5c6b8491f7c1e07dc478b725f0_prof);

    }

    // line 179
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_6501aa3489929de5faf7467b822cfe6bc437492405eba4b22e5224a7621aa35f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6501aa3489929de5faf7467b822cfe6bc437492405eba4b22e5224a7621aa35f->enter($__internal_6501aa3489929de5faf7467b822cfe6bc437492405eba4b22e5224a7621aa35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_d6fab884b5bfdab3ba4a4052f9cd02ec2f2a504d58d4b1d433fe551847952581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6fab884b5bfdab3ba4a4052f9cd02ec2f2a504d58d4b1d433fe551847952581->enter($__internal_d6fab884b5bfdab3ba4a4052f9cd02ec2f2a504d58d4b1d433fe551847952581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 180
        echo "        ";
        $context["referer"] = ((((($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()) == $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nbPages", array())) && (1 != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()))) && (1 == twig_length_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPageResults", array()))))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge($this->getAttribute($this->getAttribute(        // line 181
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), array("page" => ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "page"), "method") - 1))))) : ($this->getAttribute($this->getAttribute(        // line 182
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "requestUri", array())));
        // line 184
        echo "
        ";
        // line 185
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "list", "referer" => twig_urlencode_filter(        // line 187
($context["referer"] ?? $this->getContext($context, "referer"))), "delete_form" =>         // line 188
($context["delete_form_template"] ?? $this->getContext($context, "delete_form_template")), "_translation_domain" => $this->getAttribute(        // line 189
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 190
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 191
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 192
        echo "
    ";
        
        $__internal_d6fab884b5bfdab3ba4a4052f9cd02ec2f2a504d58d4b1d433fe551847952581->leave($__internal_d6fab884b5bfdab3ba4a4052f9cd02ec2f2a504d58d4b1d433fe551847952581_prof);

        
        $__internal_6501aa3489929de5faf7467b822cfe6bc437492405eba4b22e5224a7621aa35f->leave($__internal_6501aa3489929de5faf7467b822cfe6bc437492405eba4b22e5224a7621aa35f_prof);

    }

    // line 196
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_15a5c5cd62f50961a2b4772fb7677fdf0ddcf80dc5839f9a8f6a8e1676590319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a5c5cd62f50961a2b4772fb7677fdf0ddcf80dc5839f9a8f6a8e1676590319->enter($__internal_15a5c5cd62f50961a2b4772fb7677fdf0ddcf80dc5839f9a8f6a8e1676590319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_82ade6aa38bbae30345bd6bb04bcb75c5b7dd1e597d407b08687370d78315762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ade6aa38bbae30345bd6bb04bcb75c5b7dd1e597d407b08687370d78315762->enter($__internal_82ade6aa38bbae30345bd6bb04bcb75c5b7dd1e597d407b08687370d78315762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 197
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "edit", "entity" => $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "view" => "list"));
        echo "\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 240
        if (("search" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 241
            echo "        <script type=\"text/javascript\">
            var _search_query = \"";
            // line 242
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_82ade6aa38bbae30345bd6bb04bcb75c5b7dd1e597d407b08687370d78315762->leave($__internal_82ade6aa38bbae30345bd6bb04bcb75c5b7dd1e597d407b08687370d78315762_prof);

        
        $__internal_15a5c5cd62f50961a2b4772fb7677fdf0ddcf80dc5839f9a8f6a8e1676590319->leave($__internal_15a5c5cd62f50961a2b4772fb7677fdf0ddcf80dc5839f9a8f6a8e1676590319_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  831 => 242,  828 => 241,  826 => 240,  792 => 209,  776 => 197,  767 => 196,  756 => 192,  754 => 191,  753 => 190,  752 => 189,  751 => 188,  750 => 187,  749 => 185,  746 => 184,  744 => 182,  743 => 181,  741 => 180,  732 => 179,  719 => 176,  710 => 175,  699 => 158,  697 => 157,  696 => 156,  695 => 155,  694 => 154,  693 => 153,  691 => 152,  682 => 151,  672 => 170,  662 => 166,  658 => 165,  655 => 164,  641 => 162,  637 => 160,  635 => 151,  630 => 150,  627 => 149,  625 => 148,  622 => 147,  613 => 144,  603 => 143,  600 => 142,  598 => 2,  596 => 141,  593 => 140,  589 => 139,  584 => 138,  581 => 137,  579 => 136,  560 => 135,  551 => 134,  540 => 129,  534 => 126,  531 => 125,  529 => 124,  526 => 123,  519 => 121,  513 => 119,  507 => 116,  503 => 115,  498 => 114,  496 => 113,  484 => 112,  481 => 111,  478 => 110,  476 => 2,  474 => 109,  471 => 108,  468 => 107,  464 => 106,  461 => 105,  452 => 104,  442 => 179,  439 => 178,  437 => 175,  431 => 171,  429 => 134,  424 => 131,  422 => 104,  416 => 100,  413 => 99,  404 => 98,  391 => 87,  389 => 2,  387 => 87,  381 => 86,  373 => 85,  370 => 84,  361 => 83,  347 => 71,  345 => 2,  344 => 71,  339 => 69,  334 => 67,  329 => 65,  325 => 64,  321 => 63,  317 => 62,  313 => 61,  310 => 60,  301 => 59,  289 => 76,  287 => 59,  283 => 58,  278 => 57,  269 => 56,  259 => 92,  256 => 91,  253 => 83,  250 => 82,  248 => 81,  245 => 80,  242 => 79,  240 => 56,  237 => 55,  234 => 54,  231 => 53,  222 => 52,  209 => 46,  200 => 45,  187 => 93,  185 => 52,  179 => 48,  177 => 45,  173 => 43,  164 => 42,  150 => 37,  149 => 2,  147 => 37,  144 => 36,  139 => 34,  138 => 2,  136 => 34,  133 => 33,  130 => 32,  128 => 31,  119 => 30,  101 => 28,  83 => 27,  73 => 5,  71 => 25,  68 => 21,  67 => 20,  66 => 19,  65 => 18,  63 => 17,  61 => 14,  60 => 13,  59 => 12,  58 => 11,  57 => 10,  56 => 9,  55 => 8,  54 => 7,  52 => 2,  51 => 3,  50 => 2,  49 => 3,  47 => 2,  45 => 1,  33 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% set _request_parameters = app.request.query.all|merge(_request_parameters|default({}))|merge({
    action: app.request.get('action'),
    entity: _entity_config.name,
    menuIndex: app.request.get('menuIndex'),
    submenuIndex: app.request.get('submenuIndex'),
    sortField: app.request.get('sortField', ''),
    sortDirection: app.request.get('sortDirection', 'DESC'),
    page: app.request.get('page', 1)
}) %}

{% if 'search' == app.request.get('action') %}
    {% set _request_parameters = _request_parameters|merge({
        query: app.request.get('query')|default(''),
        sortField: _entity_config.search.sort.field|default(app.request.get('sortField', '')),
        sortDirection: _entity_config.search.sort.direction|default(app.request.get('sortDirection', 'DESC')),
    }) %}
{% endif %}

{% set _request_parameters = _request_parameters|merge({ referer: path('easyadmin', _request_parameters)|url_encode }) %}

{% block body_id 'easyadmin-list-' ~ _entity_config.name %}
{% block body_class 'list list-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% if 'search' == app.request.get('action') %}
        {% set _default_title = 'search.page_title'|transchoice(paginator.nbResults, {}, 'EasyAdminBundle') %}
        {{ (_entity_config.search.title is defined ? _entity_config.search.title|transchoice(paginator.nbResults) : _default_title)|raw }}
    {% else %}
        {% set _default_title = 'list.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
        {{ (_entity_config.list.title is defined ? _entity_config.list.title|trans(_trans_parameters) : _default_title)|raw }}
    {% endif %}
{% endspaceless %}
{% endblock %}

{% block content_header %}
    <div class=\"row\">
        <div class=\"col-sm-5\">
            {% block content_title_wrapper %}
                <h1 class=\"title\">{{ block('content_title') }}</h1>
            {% endblock %}
        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                {% block global_actions %}
                    {% if easyadmin_action_is_enabled_for_list_view('search', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('search', _entity_config.name) %}

                        {% block search_action %}
                            <div class=\"form-action {{ _action.css_class|default('') }}\">
                                <form method=\"get\" action=\"{{ path('easyadmin') }}\">
                                    {% block search_form %}
                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"{{ _request_parameters.entity }}\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"{{ _entity_config.search.sort.field|default(_request_parameters.sortField) }}\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"{{ _entity_config.search.sort.direction|default(_request_parameters.sortDirection) }}\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"{{ _request_parameters.menuIndex }}\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"{{ _request_parameters.submenuIndex }}\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query')|default('') }}\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"{{ _action.target }}\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">{{ _action.label|default('action.search')|trans(_trans_parameters) }}</span>
                                                </button>
                                            </span>
                                        </div>
                                    {% endblock %}
                                </form>
                            </div>
                        {% endblock search_action %}
                    {% endif %}

                    {% if easyadmin_action_is_enabled_for_list_view('new', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('new', _entity_config.name) %}
                        {% block new_action %}
                            <div class=\"button-action\">
                                <a class=\"{{ _action.css_class|default('') }}\" href=\"{{ path('easyadmin', _request_parameters|merge({ action: _action.name })) }}\" target=\"{{ _action.target }}\">
                                    {% if _action.icon %}<i class=\"fa fa-{{ _action.icon }}\"></i>{% endif %}
                                    {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}
                                </a>
                            </div>
                        {% endblock new_action %}
                    {% endif %}
                {% endblock global_actions %}
            </div>
        </div>
    </div>
{% endblock content_header %}

{% block main %}
    {% set _list_item_actions = easyadmin_get_actions_for_list_item(_entity_config.name) %}

    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        {% block table_head %}
            <tr>
                {% for field, metadata in fields %}
                    {% set isSortingField = metadata.property == app.request.get('sortField')|split('.')|first %}
                    {% set nextSortDirection = isSortingField ? (app.request.get('sortDirection') == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}
                    {% set _column_label = (metadata.label ?: field|humanize)|trans(_trans_parameters) %}
                    {% set _column_icon = isSortingField ? (nextSortDirection == 'DESC' ? 'fa-caret-up' : 'fa-caret-down') : 'fa-sort' %}

                    <th data-property-name=\"{{ metadata.property }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.virtual ? 'virtual' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                        {% if metadata.sortable %}
                            <a href=\"{{ path('easyadmin', _request_parameters|merge({ page: 1, sortField: metadata.property, sortDirection: nextSortDirection })) }}\">
                                <i class=\"fa {{ _column_icon }}\"></i>
                                {{ _column_label|raw }}
                            </a>
                        {% else %}
                            <span>{{ _column_label|raw }}</span>
                        {% endif %}
                    </th>
                {% endfor %}

                {% if _list_item_actions|length > 0 %}
                    <th>
                        <span>{{ 'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>
                    </th>
                {% endif %}
            </tr>
        {% endblock table_head %}
        </thead>

        <tbody>
        {% block table_body %}
            {% for item in paginator.currentPageResults %}
                {# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
                {% set _item_id = '' ~ attribute(item, _entity_config.primary_key_field_name) %}
                <tr data-id=\"{{ _item_id }}\">
                    {% for field, metadata in fields %}
                        {% set isSortingField = metadata.property == app.request.get('sortField') %}
                        {% set _column_label =  (metadata.label ?: field|humanize)|trans(_trans_parameters)  %}

                        <td data-label=\"{{ _column_label }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                            {{ easyadmin_render_field_for_list_view(_entity_config.name, item, metadata) }}
                        </td>
                    {% endfor %}

                    {% if _list_item_actions|length > 0 %}
                        {% set _column_label =  'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') %}
                        <td data-label=\"{{ _column_label }}\" class=\"actions\">
                        {% block item_actions %}
                            {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                                actions: _list_item_actions,
                                request_parameters: _request_parameters,
                                translation_domain: _entity_config.translation_domain,
                                trans_parameters: _trans_parameters,
                                item_id: _item_id
                            }, with_context = false) }}
                        {% endblock item_actions %}
                        </td>
                    {% endif %}
                </tr>
            {% else %}
                <tr>
                    <td class=\"no-results\" colspan=\"{{ _list_item_actions|length > 0 ? fields|length + 1 : fields|length }}\">
                        {{ 'search.no_results'|trans(_trans_parameters, 'EasyAdminBundle') }}
                    </td>
                </tr>
            {% endfor %}
        {% endblock table_body %}
        </tbody>
    </table>
    </div>

    {% block paginator %}
        {{ include(_entity_config.templates.paginator) }}
    {% endblock paginator %}

    {% block delete_form %}
        {% set referer = paginator.currentPage == paginator.nbPages and 1 != paginator.currentPage and 1 == paginator.currentPageResults|length
            ? path('easyadmin', app.request.query|merge({ page: app.request.query.get('page') - 1 }))
            : app.request.requestUri
        %}

        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'list',
            referer: referer|url_encode,
            delete_form: delete_form_template,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock main %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"{{ path('easyadmin', { action: 'edit', entity: _entity_config.name, view: 'list' })|raw }}\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    {% if 'search' == app.request.get('action') %}
        <script type=\"text/javascript\">
            var _search_query = \"{{ app.request.get('query')|default('')|e('js') }}\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    {% endif %}
{% endblock %}
", "@EasyAdmin/default/list.html.twig", "/var/www/html/Premium_Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/list.html.twig");
    }
}
