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
        $__internal_8db5ba1b8409e7aafeeebfcae261322b97c42cb043b9ef7fce78466c97b08c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db5ba1b8409e7aafeeebfcae261322b97c42cb043b9ef7fce78466c97b08c51->enter($__internal_8db5ba1b8409e7aafeeebfcae261322b97c42cb043b9ef7fce78466c97b08c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e01da16d56f9d51cac08b1b97677c63d42e883e2f8caba9d92e6c0b5f4cd994b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01da16d56f9d51cac08b1b97677c63d42e883e2f8caba9d92e6c0b5f4cd994b->enter($__internal_e01da16d56f9d51cac08b1b97677c63d42e883e2f8caba9d92e6c0b5f4cd994b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8db5ba1b8409e7aafeeebfcae261322b97c42cb043b9ef7fce78466c97b08c51->leave($__internal_8db5ba1b8409e7aafeeebfcae261322b97c42cb043b9ef7fce78466c97b08c51_prof);

        
        $__internal_e01da16d56f9d51cac08b1b97677c63d42e883e2f8caba9d92e6c0b5f4cd994b->leave($__internal_e01da16d56f9d51cac08b1b97677c63d42e883e2f8caba9d92e6c0b5f4cd994b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_642be39ac240ef62c14037a194bb866608cbfc24d45c6646acba4661e387d640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_642be39ac240ef62c14037a194bb866608cbfc24d45c6646acba4661e387d640->enter($__internal_642be39ac240ef62c14037a194bb866608cbfc24d45c6646acba4661e387d640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_425f5013c7acfe73f18482a4fc9d9e54379d5eadf82cef85a15c9ab786b6a1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425f5013c7acfe73f18482a4fc9d9e54379d5eadf82cef85a15c9ab786b6a1b3->enter($__internal_425f5013c7acfe73f18482a4fc9d9e54379d5eadf82cef85a15c9ab786b6a1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_425f5013c7acfe73f18482a4fc9d9e54379d5eadf82cef85a15c9ab786b6a1b3->leave($__internal_425f5013c7acfe73f18482a4fc9d9e54379d5eadf82cef85a15c9ab786b6a1b3_prof);

        
        $__internal_642be39ac240ef62c14037a194bb866608cbfc24d45c6646acba4661e387d640->leave($__internal_642be39ac240ef62c14037a194bb866608cbfc24d45c6646acba4661e387d640_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3fe013f638ed5320ef50b42b498490021e241cc648fc144b510072b22bfb9f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe013f638ed5320ef50b42b498490021e241cc648fc144b510072b22bfb9f39->enter($__internal_3fe013f638ed5320ef50b42b498490021e241cc648fc144b510072b22bfb9f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4c294d7184951d36a5cfab0908625f02b0b8a67ba26761b4303b4efce5ed3d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c294d7184951d36a5cfab0908625f02b0b8a67ba26761b4303b4efce5ed3d82->enter($__internal_4c294d7184951d36a5cfab0908625f02b0b8a67ba26761b4303b4efce5ed3d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4c294d7184951d36a5cfab0908625f02b0b8a67ba26761b4303b4efce5ed3d82->leave($__internal_4c294d7184951d36a5cfab0908625f02b0b8a67ba26761b4303b4efce5ed3d82_prof);

        
        $__internal_3fe013f638ed5320ef50b42b498490021e241cc648fc144b510072b22bfb9f39->leave($__internal_3fe013f638ed5320ef50b42b498490021e241cc648fc144b510072b22bfb9f39_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1acffdb635c08278d4cbba2591bb63743f8bb9d397e8d6f101605db0a02c71fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1acffdb635c08278d4cbba2591bb63743f8bb9d397e8d6f101605db0a02c71fe->enter($__internal_1acffdb635c08278d4cbba2591bb63743f8bb9d397e8d6f101605db0a02c71fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_33634faa68957b8c4e91df889d086a8fb78640ba7eebdca6c652b5821490d437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33634faa68957b8c4e91df889d086a8fb78640ba7eebdca6c652b5821490d437->enter($__internal_33634faa68957b8c4e91df889d086a8fb78640ba7eebdca6c652b5821490d437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_33634faa68957b8c4e91df889d086a8fb78640ba7eebdca6c652b5821490d437->leave($__internal_33634faa68957b8c4e91df889d086a8fb78640ba7eebdca6c652b5821490d437_prof);

        
        $__internal_1acffdb635c08278d4cbba2591bb63743f8bb9d397e8d6f101605db0a02c71fe->leave($__internal_1acffdb635c08278d4cbba2591bb63743f8bb9d397e8d6f101605db0a02c71fe_prof);

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
