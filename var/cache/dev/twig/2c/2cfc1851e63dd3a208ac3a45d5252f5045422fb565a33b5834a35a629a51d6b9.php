<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1bb0cdf9ede85c924e70878c089ec5096ca5d0b2146898e660ab369b8cd2aafc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b2cee784b025f14b5694907d1b7dcac58ccee0e673896aab66d52fdc6c8fe6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b2cee784b025f14b5694907d1b7dcac58ccee0e673896aab66d52fdc6c8fe6f->enter($__internal_4b2cee784b025f14b5694907d1b7dcac58ccee0e673896aab66d52fdc6c8fe6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_9f21840b007b4e74f2af3fa4a5c0a957729cc363b0d1510b9be15b1c04cfb4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f21840b007b4e74f2af3fa4a5c0a957729cc363b0d1510b9be15b1c04cfb4ca->enter($__internal_9f21840b007b4e74f2af3fa4a5c0a957729cc363b0d1510b9be15b1c04cfb4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b2cee784b025f14b5694907d1b7dcac58ccee0e673896aab66d52fdc6c8fe6f->leave($__internal_4b2cee784b025f14b5694907d1b7dcac58ccee0e673896aab66d52fdc6c8fe6f_prof);

        
        $__internal_9f21840b007b4e74f2af3fa4a5c0a957729cc363b0d1510b9be15b1c04cfb4ca->leave($__internal_9f21840b007b4e74f2af3fa4a5c0a957729cc363b0d1510b9be15b1c04cfb4ca_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_801873cfffcec0d9b331c9c76bf643ed96923aa10b0c3fcb14c52f044384e607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801873cfffcec0d9b331c9c76bf643ed96923aa10b0c3fcb14c52f044384e607->enter($__internal_801873cfffcec0d9b331c9c76bf643ed96923aa10b0c3fcb14c52f044384e607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2e7ebf3356f68bfebeb28de9566452975cb877abc7a09cf085cda4b38943aa74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7ebf3356f68bfebeb28de9566452975cb877abc7a09cf085cda4b38943aa74->enter($__internal_2e7ebf3356f68bfebeb28de9566452975cb877abc7a09cf085cda4b38943aa74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2e7ebf3356f68bfebeb28de9566452975cb877abc7a09cf085cda4b38943aa74->leave($__internal_2e7ebf3356f68bfebeb28de9566452975cb877abc7a09cf085cda4b38943aa74_prof);

        
        $__internal_801873cfffcec0d9b331c9c76bf643ed96923aa10b0c3fcb14c52f044384e607->leave($__internal_801873cfffcec0d9b331c9c76bf643ed96923aa10b0c3fcb14c52f044384e607_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/Premium_Immobilier/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
