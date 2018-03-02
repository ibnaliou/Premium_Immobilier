<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1c8cd3a5faef723000ee2cbc200e521477f29f5e113603775057d93a62d19407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ecbd48746e7841e6e743263b30904c3e95e6842454f7dddd7a4e46c486b55fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecbd48746e7841e6e743263b30904c3e95e6842454f7dddd7a4e46c486b55fa8->enter($__internal_ecbd48746e7841e6e743263b30904c3e95e6842454f7dddd7a4e46c486b55fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a12450ec997bdb156030571a777a96a476ea4bcbe047c4187497125b70faf2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12450ec997bdb156030571a777a96a476ea4bcbe047c4187497125b70faf2b0->enter($__internal_a12450ec997bdb156030571a777a96a476ea4bcbe047c4187497125b70faf2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecbd48746e7841e6e743263b30904c3e95e6842454f7dddd7a4e46c486b55fa8->leave($__internal_ecbd48746e7841e6e743263b30904c3e95e6842454f7dddd7a4e46c486b55fa8_prof);

        
        $__internal_a12450ec997bdb156030571a777a96a476ea4bcbe047c4187497125b70faf2b0->leave($__internal_a12450ec997bdb156030571a777a96a476ea4bcbe047c4187497125b70faf2b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca00ca94fa8ae3401f2903c7a86befe502d9faf6129ad11db22deb3453f5c156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca00ca94fa8ae3401f2903c7a86befe502d9faf6129ad11db22deb3453f5c156->enter($__internal_ca00ca94fa8ae3401f2903c7a86befe502d9faf6129ad11db22deb3453f5c156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_05c4884d01b7eb407715e4eef43a47d487c925e8f8163a00fc7034c3ea863623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c4884d01b7eb407715e4eef43a47d487c925e8f8163a00fc7034c3ea863623->enter($__internal_05c4884d01b7eb407715e4eef43a47d487c925e8f8163a00fc7034c3ea863623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_05c4884d01b7eb407715e4eef43a47d487c925e8f8163a00fc7034c3ea863623->leave($__internal_05c4884d01b7eb407715e4eef43a47d487c925e8f8163a00fc7034c3ea863623_prof);

        
        $__internal_ca00ca94fa8ae3401f2903c7a86befe502d9faf6129ad11db22deb3453f5c156->leave($__internal_ca00ca94fa8ae3401f2903c7a86befe502d9faf6129ad11db22deb3453f5c156_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ddbde407ebf3f0269290b2cbd17cff32fdf8c32ae25a3264d4472aa049e240e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ddbde407ebf3f0269290b2cbd17cff32fdf8c32ae25a3264d4472aa049e240e->enter($__internal_1ddbde407ebf3f0269290b2cbd17cff32fdf8c32ae25a3264d4472aa049e240e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dd1fdd9e3823b2e69fddcc0b78a1ad0cb0927aa35355802d25db942e965d568b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1fdd9e3823b2e69fddcc0b78a1ad0cb0927aa35355802d25db942e965d568b->enter($__internal_dd1fdd9e3823b2e69fddcc0b78a1ad0cb0927aa35355802d25db942e965d568b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dd1fdd9e3823b2e69fddcc0b78a1ad0cb0927aa35355802d25db942e965d568b->leave($__internal_dd1fdd9e3823b2e69fddcc0b78a1ad0cb0927aa35355802d25db942e965d568b_prof);

        
        $__internal_1ddbde407ebf3f0269290b2cbd17cff32fdf8c32ae25a3264d4472aa049e240e->leave($__internal_1ddbde407ebf3f0269290b2cbd17cff32fdf8c32ae25a3264d4472aa049e240e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a91901ef71cbf5703e8c927a28b5735383ba7e9a085ee772d9230f0f67703145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91901ef71cbf5703e8c927a28b5735383ba7e9a085ee772d9230f0f67703145->enter($__internal_a91901ef71cbf5703e8c927a28b5735383ba7e9a085ee772d9230f0f67703145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_43275af56a8df5c6c768f137209ee3d49bb79fbcce44920a8e300385449e90a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43275af56a8df5c6c768f137209ee3d49bb79fbcce44920a8e300385449e90a8->enter($__internal_43275af56a8df5c6c768f137209ee3d49bb79fbcce44920a8e300385449e90a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_43275af56a8df5c6c768f137209ee3d49bb79fbcce44920a8e300385449e90a8->leave($__internal_43275af56a8df5c6c768f137209ee3d49bb79fbcce44920a8e300385449e90a8_prof);

        
        $__internal_a91901ef71cbf5703e8c927a28b5735383ba7e9a085ee772d9230f0f67703145->leave($__internal_a91901ef71cbf5703e8c927a28b5735383ba7e9a085ee772d9230f0f67703145_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Premium_Immobilier/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
