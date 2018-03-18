<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9f0b98848ab568191a48692800ebfa3f2e3ef34d5d125589515976b66fca8f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58fec6828a043445b1868d3ef2529e2713dcc75ec1e6ba536aee9c3b0d0b8ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58fec6828a043445b1868d3ef2529e2713dcc75ec1e6ba536aee9c3b0d0b8ba2->enter($__internal_58fec6828a043445b1868d3ef2529e2713dcc75ec1e6ba536aee9c3b0d0b8ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d7f8823e7c2d48d96cf5e078d354039f210b9cd18e14afbbf0c0ec8b9ef4c395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f8823e7c2d48d96cf5e078d354039f210b9cd18e14afbbf0c0ec8b9ef4c395->enter($__internal_d7f8823e7c2d48d96cf5e078d354039f210b9cd18e14afbbf0c0ec8b9ef4c395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58fec6828a043445b1868d3ef2529e2713dcc75ec1e6ba536aee9c3b0d0b8ba2->leave($__internal_58fec6828a043445b1868d3ef2529e2713dcc75ec1e6ba536aee9c3b0d0b8ba2_prof);

        
        $__internal_d7f8823e7c2d48d96cf5e078d354039f210b9cd18e14afbbf0c0ec8b9ef4c395->leave($__internal_d7f8823e7c2d48d96cf5e078d354039f210b9cd18e14afbbf0c0ec8b9ef4c395_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_02ebaa2b73fddc2cd69760571e91c035b8af32f5f84d2f9f461ecf08274607a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ebaa2b73fddc2cd69760571e91c035b8af32f5f84d2f9f461ecf08274607a3->enter($__internal_02ebaa2b73fddc2cd69760571e91c035b8af32f5f84d2f9f461ecf08274607a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cb6f5f4d202f50133dc4cc590518f101457bca75cea2ec5c608c94377b03cdae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6f5f4d202f50133dc4cc590518f101457bca75cea2ec5c608c94377b03cdae->enter($__internal_cb6f5f4d202f50133dc4cc590518f101457bca75cea2ec5c608c94377b03cdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cb6f5f4d202f50133dc4cc590518f101457bca75cea2ec5c608c94377b03cdae->leave($__internal_cb6f5f4d202f50133dc4cc590518f101457bca75cea2ec5c608c94377b03cdae_prof);

        
        $__internal_02ebaa2b73fddc2cd69760571e91c035b8af32f5f84d2f9f461ecf08274607a3->leave($__internal_02ebaa2b73fddc2cd69760571e91c035b8af32f5f84d2f9f461ecf08274607a3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b3d353c37dcac3b8e789af2142e11a34360e58517ebe39bb6a476d0d6a1e966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3d353c37dcac3b8e789af2142e11a34360e58517ebe39bb6a476d0d6a1e966->enter($__internal_1b3d353c37dcac3b8e789af2142e11a34360e58517ebe39bb6a476d0d6a1e966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8d69202a54da1d4b0b15bbcadb4d24a9d7ffb9213f1e57fd053b5ebecf319415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d69202a54da1d4b0b15bbcadb4d24a9d7ffb9213f1e57fd053b5ebecf319415->enter($__internal_8d69202a54da1d4b0b15bbcadb4d24a9d7ffb9213f1e57fd053b5ebecf319415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8d69202a54da1d4b0b15bbcadb4d24a9d7ffb9213f1e57fd053b5ebecf319415->leave($__internal_8d69202a54da1d4b0b15bbcadb4d24a9d7ffb9213f1e57fd053b5ebecf319415_prof);

        
        $__internal_1b3d353c37dcac3b8e789af2142e11a34360e58517ebe39bb6a476d0d6a1e966->leave($__internal_1b3d353c37dcac3b8e789af2142e11a34360e58517ebe39bb6a476d0d6a1e966_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c9e6eedd3ab9aab3f48d1449464dbbf938887bf9e4d5d47581e354ff7ce57a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c9e6eedd3ab9aab3f48d1449464dbbf938887bf9e4d5d47581e354ff7ce57a0->enter($__internal_7c9e6eedd3ab9aab3f48d1449464dbbf938887bf9e4d5d47581e354ff7ce57a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_165de0da0feddb8975e9d1d27e1135585b8ce87eecda19c70b78509476ca83a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165de0da0feddb8975e9d1d27e1135585b8ce87eecda19c70b78509476ca83a8->enter($__internal_165de0da0feddb8975e9d1d27e1135585b8ce87eecda19c70b78509476ca83a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_165de0da0feddb8975e9d1d27e1135585b8ce87eecda19c70b78509476ca83a8->leave($__internal_165de0da0feddb8975e9d1d27e1135585b8ce87eecda19c70b78509476ca83a8_prof);

        
        $__internal_7c9e6eedd3ab9aab3f48d1449464dbbf938887bf9e4d5d47581e354ff7ce57a0->leave($__internal_7c9e6eedd3ab9aab3f48d1449464dbbf938887bf9e4d5d47581e354ff7ce57a0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Premium_Immobilier/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
