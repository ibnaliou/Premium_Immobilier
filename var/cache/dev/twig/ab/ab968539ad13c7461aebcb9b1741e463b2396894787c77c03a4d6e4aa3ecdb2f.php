<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_5e170a0d34f19f91482d90cbab63bf858bc4b0ca74328d81e8fe298fa69b19c3 extends Twig_Template
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
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93c65c4183c9a95fcec920efb4806801bc1b5846487f69e34132bbe1edd4c685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c65c4183c9a95fcec920efb4806801bc1b5846487f69e34132bbe1edd4c685->enter($__internal_93c65c4183c9a95fcec920efb4806801bc1b5846487f69e34132bbe1edd4c685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        $__internal_eaa055e7e516090c1d1e3c03e57abf66f8db4d95738d5c43e600d417b4fccb23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa055e7e516090c1d1e3c03e57abf66f8db4d95738d5c43e600d417b4fccb23->enter($__internal_eaa055e7e516090c1d1e3c03e57abf66f8db4d95738d5c43e600d417b4fccb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_2456b64dc915e142f83e34577af543a45920a2223b665830de7c1c58c90af023"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_2456b64dc915e142f83e34577af543a45920a2223b665830de7c1c58c90af023"] ?? $this->getContext($context, "__internal_2456b64dc915e142f83e34577af543a45920a2223b665830de7c1c58c90af023"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_2456b64dc915e142f83e34577af543a45920a2223b665830de7c1c58c90af023"] ?? $this->getContext($context, "__internal_2456b64dc915e142f83e34577af543a45920a2223b665830de7c1c58c90af023"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93c65c4183c9a95fcec920efb4806801bc1b5846487f69e34132bbe1edd4c685->leave($__internal_93c65c4183c9a95fcec920efb4806801bc1b5846487f69e34132bbe1edd4c685_prof);

        
        $__internal_eaa055e7e516090c1d1e3c03e57abf66f8db4d95738d5c43e600d417b4fccb23->leave($__internal_eaa055e7e516090c1d1e3c03e57abf66f8db4d95738d5c43e600d417b4fccb23_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_26f2c25e9c870e37d1411a76fc71ee5e23469f84ffc856dc134ff81a413adec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f2c25e9c870e37d1411a76fc71ee5e23469f84ffc856dc134ff81a413adec7->enter($__internal_26f2c25e9c870e37d1411a76fc71ee5e23469f84ffc856dc134ff81a413adec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_9ad45f061c1a74fd7fcd49838ecff756889ae4ab15780ab5a319c58b2e4c922a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad45f061c1a74fd7fcd49838ecff756889ae4ab15780ab5a319c58b2e4c922a->enter($__internal_9ad45f061c1a74fd7fcd49838ecff756889ae4ab15780ab5a319c58b2e4c922a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_9ad45f061c1a74fd7fcd49838ecff756889ae4ab15780ab5a319c58b2e4c922a->leave($__internal_9ad45f061c1a74fd7fcd49838ecff756889ae4ab15780ab5a319c58b2e4c922a_prof);

        
        $__internal_26f2c25e9c870e37d1411a76fc71ee5e23469f84ffc856dc134ff81a413adec7->leave($__internal_26f2c25e9c870e37d1411a76fc71ee5e23469f84ffc856dc134ff81a413adec7_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_369614753f6d9688953dc4dcfb5f6827e32e65679e2a46ecc32a1df5da0352f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_369614753f6d9688953dc4dcfb5f6827e32e65679e2a46ecc32a1df5da0352f3->enter($__internal_369614753f6d9688953dc4dcfb5f6827e32e65679e2a46ecc32a1df5da0352f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_e942b76b7eeb96acd445abf45d916b1ac0af71c5c5ed911bee7520905d7f79a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e942b76b7eeb96acd445abf45d916b1ac0af71c5c5ed911bee7520905d7f79a4->enter($__internal_e942b76b7eeb96acd445abf45d916b1ac0af71c5c5ed911bee7520905d7f79a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_e942b76b7eeb96acd445abf45d916b1ac0af71c5c5ed911bee7520905d7f79a4->leave($__internal_e942b76b7eeb96acd445abf45d916b1ac0af71c5c5ed911bee7520905d7f79a4_prof);

        
        $__internal_369614753f6d9688953dc4dcfb5f6827e32e65679e2a46ecc32a1df5da0352f3->leave($__internal_369614753f6d9688953dc4dcfb5f6827e32e65679e2a46ecc32a1df5da0352f3_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_971e2547e4db7745d6534984871bdd822c41699f30c095e352f5d1f8abd58128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971e2547e4db7745d6534984871bdd822c41699f30c095e352f5d1f8abd58128->enter($__internal_971e2547e4db7745d6534984871bdd822c41699f30c095e352f5d1f8abd58128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_77ed91dcd383e7c74369bc56aabb0221c5598c0283c692f5322aba54060c84a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ed91dcd383e7c74369bc56aabb0221c5598c0283c692f5322aba54060c84a1->enter($__internal_77ed91dcd383e7c74369bc56aabb0221c5598c0283c692f5322aba54060c84a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_2456b64dc915e142f83e34577af543a45920a2223b665830de7c1c58c90af023"] ?? $this->getContext($context, "__internal_2456b64dc915e142f83e34577af543a45920a2223b665830de7c1c58c90af023")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_77ed91dcd383e7c74369bc56aabb0221c5598c0283c692f5322aba54060c84a1->leave($__internal_77ed91dcd383e7c74369bc56aabb0221c5598c0283c692f5322aba54060c84a1_prof);

        
        $__internal_971e2547e4db7745d6534984871bdd822c41699f30c095e352f5d1f8abd58128->leave($__internal_971e2547e4db7745d6534984871bdd822c41699f30c095e352f5d1f8abd58128_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_53d9bf1f6da1db90f221572d5fcf5ced1b94ca8826dff8792f8a90c1fe146536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d9bf1f6da1db90f221572d5fcf5ced1b94ca8826dff8792f8a90c1fe146536->enter($__internal_53d9bf1f6da1db90f221572d5fcf5ced1b94ca8826dff8792f8a90c1fe146536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_28bb4b34745c084cbd2d296613345f88948bfc006ebe775f127fcdd154c9d2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28bb4b34745c084cbd2d296613345f88948bfc006ebe775f127fcdd154c9d2c0->enter($__internal_28bb4b34745c084cbd2d296613345f88948bfc006ebe775f127fcdd154c9d2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_28bb4b34745c084cbd2d296613345f88948bfc006ebe775f127fcdd154c9d2c0->leave($__internal_28bb4b34745c084cbd2d296613345f88948bfc006ebe775f127fcdd154c9d2c0_prof);

        
        $__internal_53d9bf1f6da1db90f221572d5fcf5ced1b94ca8826dff8792f8a90c1fe146536->leave($__internal_53d9bf1f6da1db90f221572d5fcf5ced1b94ca8826dff8792f8a90c1fe146536_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_28142deceeec6975a188ddcf6914c7f66997008f3e656782857d3a3fe4b6ea7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28142deceeec6975a188ddcf6914c7f66997008f3e656782857d3a3fe4b6ea7a->enter($__internal_28142deceeec6975a188ddcf6914c7f66997008f3e656782857d3a3fe4b6ea7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_97ec8a55cfe9e6e457ad10203ec334b495bbecbfcbafa983a67ed09f922d9b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ec8a55cfe9e6e457ad10203ec334b495bbecbfcbafa983a67ed09f922d9b49->enter($__internal_97ec8a55cfe9e6e457ad10203ec334b495bbecbfcbafa983a67ed09f922d9b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_97ec8a55cfe9e6e457ad10203ec334b495bbecbfcbafa983a67ed09f922d9b49->leave($__internal_97ec8a55cfe9e6e457ad10203ec334b495bbecbfcbafa983a67ed09f922d9b49_prof);

        
        $__internal_28142deceeec6975a188ddcf6914c7f66997008f3e656782857d3a3fe4b6ea7a->leave($__internal_28142deceeec6975a188ddcf6914c7f66997008f3e656782857d3a3fe4b6ea7a_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_4e756ded82eea54ad84238f271cb37b4864f03ec8c5eaddd5b937aa007350c9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e756ded82eea54ad84238f271cb37b4864f03ec8c5eaddd5b937aa007350c9b->enter($__internal_4e756ded82eea54ad84238f271cb37b4864f03ec8c5eaddd5b937aa007350c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_21a9da5398bd592e62aa16511431842ca653c7a71d9c63244f2cf6dfb09f80e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a9da5398bd592e62aa16511431842ca653c7a71d9c63244f2cf6dfb09f80e2->enter($__internal_21a9da5398bd592e62aa16511431842ca653c7a71d9c63244f2cf6dfb09f80e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_21a9da5398bd592e62aa16511431842ca653c7a71d9c63244f2cf6dfb09f80e2->leave($__internal_21a9da5398bd592e62aa16511431842ca653c7a71d9c63244f2cf6dfb09f80e2_prof);

        
        $__internal_4e756ded82eea54ad84238f271cb37b4864f03ec8c5eaddd5b937aa007350c9b->leave($__internal_4e756ded82eea54ad84238f271cb37b4864f03ec8c5eaddd5b937aa007350c9b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 36,  180 => 30,  172 => 26,  163 => 25,  150 => 21,  131 => 20,  122 => 19,  109 => 15,  108 => 4,  106 => 15,  103 => 14,  101 => 13,  92 => 12,  74 => 10,  56 => 9,  46 => 7,  44 => 4,  43 => 5,  42 => 4,  41 => 5,  39 => 4,  37 => 3,  35 => 1,  23 => 7,);
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
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/new.html.twig", "/var/www/html/Premium_Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/new.html.twig");
    }
}
