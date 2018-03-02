<?php

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_1d95f6ecd5d0c94d4bf89e6560f9a7d332a9952961f46d61334ef838e2e49647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcf948acf07e027226895d02d98875393d45789c3e3e5e5ca201390e7b8429b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf948acf07e027226895d02d98875393d45789c3e3e5e5ca201390e7b8429b4->enter($__internal_fcf948acf07e027226895d02d98875393d45789c3e3e5e5ca201390e7b8429b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        $__internal_47d7df85787d24959eab7baa4f21dd47dd8b6c68af2116c2ac359118e55e7c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d7df85787d24959eab7baa4f21dd47dd8b6c68af2116c2ac359118e55e7c22->enter($__internal_47d7df85787d24959eab7baa4f21dd47dd8b6c68af2116c2ac359118e55e7c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_1425458c539f2402f20248f022c7513bcfc269b8c5ee0e6279daf33213506074"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_1425458c539f2402f20248f022c7513bcfc269b8c5ee0e6279daf33213506074"] ?? $this->getContext($context, "__internal_1425458c539f2402f20248f022c7513bcfc269b8c5ee0e6279daf33213506074"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_1425458c539f2402f20248f022c7513bcfc269b8c5ee0e6279daf33213506074"] ?? $this->getContext($context, "__internal_1425458c539f2402f20248f022c7513bcfc269b8c5ee0e6279daf33213506074"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcf948acf07e027226895d02d98875393d45789c3e3e5e5ca201390e7b8429b4->leave($__internal_fcf948acf07e027226895d02d98875393d45789c3e3e5e5ca201390e7b8429b4_prof);

        
        $__internal_47d7df85787d24959eab7baa4f21dd47dd8b6c68af2116c2ac359118e55e7c22->leave($__internal_47d7df85787d24959eab7baa4f21dd47dd8b6c68af2116c2ac359118e55e7c22_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_0519c70e47e62692c199af87cd679a90316ff87a90c778407f8ef6df45af63d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0519c70e47e62692c199af87cd679a90316ff87a90c778407f8ef6df45af63d2->enter($__internal_0519c70e47e62692c199af87cd679a90316ff87a90c778407f8ef6df45af63d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_8e200a2d406f3959f9d332f030401da4fdb3b09f01007c60889e525ec4e47441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e200a2d406f3959f9d332f030401da4fdb3b09f01007c60889e525ec4e47441->enter($__internal_8e200a2d406f3959f9d332f030401da4fdb3b09f01007c60889e525ec4e47441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_8e200a2d406f3959f9d332f030401da4fdb3b09f01007c60889e525ec4e47441->leave($__internal_8e200a2d406f3959f9d332f030401da4fdb3b09f01007c60889e525ec4e47441_prof);

        
        $__internal_0519c70e47e62692c199af87cd679a90316ff87a90c778407f8ef6df45af63d2->leave($__internal_0519c70e47e62692c199af87cd679a90316ff87a90c778407f8ef6df45af63d2_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_2ce5801c33146dbc5bc3a6508595123cd4c9f4197e74ce422169fde33d086479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce5801c33146dbc5bc3a6508595123cd4c9f4197e74ce422169fde33d086479->enter($__internal_2ce5801c33146dbc5bc3a6508595123cd4c9f4197e74ce422169fde33d086479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_94770e4a94287d9db3bf56906fbf6a8788417e149e36a793c19d356107b4d953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94770e4a94287d9db3bf56906fbf6a8788417e149e36a793c19d356107b4d953->enter($__internal_94770e4a94287d9db3bf56906fbf6a8788417e149e36a793c19d356107b4d953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_94770e4a94287d9db3bf56906fbf6a8788417e149e36a793c19d356107b4d953->leave($__internal_94770e4a94287d9db3bf56906fbf6a8788417e149e36a793c19d356107b4d953_prof);

        
        $__internal_2ce5801c33146dbc5bc3a6508595123cd4c9f4197e74ce422169fde33d086479->leave($__internal_2ce5801c33146dbc5bc3a6508595123cd4c9f4197e74ce422169fde33d086479_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_c19f70655a89c9ff911ad21c84207d38998041d802ada7f1fbe3f186f45de93d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c19f70655a89c9ff911ad21c84207d38998041d802ada7f1fbe3f186f45de93d->enter($__internal_c19f70655a89c9ff911ad21c84207d38998041d802ada7f1fbe3f186f45de93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_db92615a3f56c741449590eff14fd32b7c8a63f81977255ece896a1b25a3d631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db92615a3f56c741449590eff14fd32b7c8a63f81977255ece896a1b25a3d631->enter($__internal_db92615a3f56c741449590eff14fd32b7c8a63f81977255ece896a1b25a3d631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_1425458c539f2402f20248f022c7513bcfc269b8c5ee0e6279daf33213506074"] ?? $this->getContext($context, "__internal_1425458c539f2402f20248f022c7513bcfc269b8c5ee0e6279daf33213506074")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_db92615a3f56c741449590eff14fd32b7c8a63f81977255ece896a1b25a3d631->leave($__internal_db92615a3f56c741449590eff14fd32b7c8a63f81977255ece896a1b25a3d631_prof);

        
        $__internal_c19f70655a89c9ff911ad21c84207d38998041d802ada7f1fbe3f186f45de93d->leave($__internal_c19f70655a89c9ff911ad21c84207d38998041d802ada7f1fbe3f186f45de93d_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_79cc95397e9a8e3fc5530edea52ae917a585c459403fef9ea6cb587c5b9c2f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79cc95397e9a8e3fc5530edea52ae917a585c459403fef9ea6cb587c5b9c2f89->enter($__internal_79cc95397e9a8e3fc5530edea52ae917a585c459403fef9ea6cb587c5b9c2f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_59d50b61ea6ac2a97c35221c07c8c239646a9cc19843f422c09371bf549a2d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d50b61ea6ac2a97c35221c07c8c239646a9cc19843f422c09371bf549a2d5b->enter($__internal_59d50b61ea6ac2a97c35221c07c8c239646a9cc19843f422c09371bf549a2d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_59d50b61ea6ac2a97c35221c07c8c239646a9cc19843f422c09371bf549a2d5b->leave($__internal_59d50b61ea6ac2a97c35221c07c8c239646a9cc19843f422c09371bf549a2d5b_prof);

        
        $__internal_79cc95397e9a8e3fc5530edea52ae917a585c459403fef9ea6cb587c5b9c2f89->leave($__internal_79cc95397e9a8e3fc5530edea52ae917a585c459403fef9ea6cb587c5b9c2f89_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_e59a0bcb580012572546bd035bc5b856a7f74c1b9dd22cf563ac6467c04f2991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59a0bcb580012572546bd035bc5b856a7f74c1b9dd22cf563ac6467c04f2991->enter($__internal_e59a0bcb580012572546bd035bc5b856a7f74c1b9dd22cf563ac6467c04f2991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_cd54bc9d2df942c2d8c6a08c60b923375873c4c8b4277f6e2e559eeb51f9c33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd54bc9d2df942c2d8c6a08c60b923375873c4c8b4277f6e2e559eeb51f9c33d->enter($__internal_cd54bc9d2df942c2d8c6a08c60b923375873c4c8b4277f6e2e559eeb51f9c33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_cd54bc9d2df942c2d8c6a08c60b923375873c4c8b4277f6e2e559eeb51f9c33d->leave($__internal_cd54bc9d2df942c2d8c6a08c60b923375873c4c8b4277f6e2e559eeb51f9c33d_prof);

        
        $__internal_e59a0bcb580012572546bd035bc5b856a7f74c1b9dd22cf563ac6467c04f2991->leave($__internal_e59a0bcb580012572546bd035bc5b856a7f74c1b9dd22cf563ac6467c04f2991_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_e784d6e6c90887daf5823f4bd23d142d4242d297181294885f43890175a43a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e784d6e6c90887daf5823f4bd23d142d4242d297181294885f43890175a43a64->enter($__internal_e784d6e6c90887daf5823f4bd23d142d4242d297181294885f43890175a43a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_da22bcbeec742d32d4782d79a3fd3f51eff2d8b2545c2626e6e437b897a209fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da22bcbeec742d32d4782d79a3fd3f51eff2d8b2545c2626e6e437b897a209fb->enter($__internal_da22bcbeec742d32d4782d79a3fd3f51eff2d8b2545c2626e6e437b897a209fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_da22bcbeec742d32d4782d79a3fd3f51eff2d8b2545c2626e6e437b897a209fb->leave($__internal_da22bcbeec742d32d4782d79a3fd3f51eff2d8b2545c2626e6e437b897a209fb_prof);

        
        $__internal_e784d6e6c90887daf5823f4bd23d142d4242d297181294885f43890175a43a64->leave($__internal_e784d6e6c90887daf5823f4bd23d142d4242d297181294885f43890175a43a64_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_70cbf2557b47b063ea5d0d8c77f9b18e336489426b73d115bc76ba270eca6bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70cbf2557b47b063ea5d0d8c77f9b18e336489426b73d115bc76ba270eca6bf9->enter($__internal_70cbf2557b47b063ea5d0d8c77f9b18e336489426b73d115bc76ba270eca6bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_f5f6b409e1bb5a89068a181f866c6d6416a8eeafe8fdef4ba52b91c3c02f63c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f6b409e1bb5a89068a181f866c6d6416a8eeafe8fdef4ba52b91c3c02f63c8->enter($__internal_f5f6b409e1bb5a89068a181f866c6d6416a8eeafe8fdef4ba52b91c3c02f63c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_f5f6b409e1bb5a89068a181f866c6d6416a8eeafe8fdef4ba52b91c3c02f63c8->leave($__internal_f5f6b409e1bb5a89068a181f866c6d6416a8eeafe8fdef4ba52b91c3c02f63c8_prof);

        
        $__internal_70cbf2557b47b063ea5d0d8c77f9b18e336489426b73d115bc76ba270eca6bf9->leave($__internal_70cbf2557b47b063ea5d0d8c77f9b18e336489426b73d115bc76ba270eca6bf9_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 58,  218 => 42,  210 => 38,  201 => 37,  190 => 33,  188 => 32,  187 => 31,  186 => 30,  185 => 29,  184 => 28,  182 => 26,  173 => 25,  160 => 22,  151 => 21,  141 => 25,  138 => 24,  135 => 21,  126 => 20,  113 => 16,  112 => 5,  110 => 16,  107 => 15,  105 => 14,  96 => 13,  78 => 11,  60 => 10,  50 => 8,  48 => 6,  47 => 5,  46 => 6,  45 => 5,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/edit.html.twig", "/var/www/html/Premium_Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
