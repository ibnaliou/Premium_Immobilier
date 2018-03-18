<?php

/* @EasyAdmin/default/field_integer.html.twig */
class __TwigTemplate_4e93e39fce92213470feb06e54e73892cb9f233450fd88d373a75c536eb3e118 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8926952d7a22a66fa9aa3f6ec32efc076f824f4f27584c9f5824f46a754e44c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8926952d7a22a66fa9aa3f6ec32efc076f824f4f27584c9f5824f46a754e44c8->enter($__internal_8926952d7a22a66fa9aa3f6ec32efc076f824f4f27584c9f5824f46a754e44c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

        $__internal_517e2f8fb932f7ab5d58debcd7353789738b114d48cd0cf349d318ca1f6c795d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517e2f8fb932f7ab5d58debcd7353789738b114d48cd0cf349d318ca1f6c795d->enter($__internal_517e2f8fb932f7ab5d58debcd7353789738b114d48cd0cf349d318ca1f6c795d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

        // line 1
        if ($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array()), ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_8926952d7a22a66fa9aa3f6ec32efc076f824f4f27584c9f5824f46a754e44c8->leave($__internal_8926952d7a22a66fa9aa3f6ec32efc076f824f4f27584c9f5824f46a754e44c8_prof);

        
        $__internal_517e2f8fb932f7ab5d58debcd7353789738b114d48cd0cf349d318ca1f6c795d->leave($__internal_517e2f8fb932f7ab5d58debcd7353789738b114d48cd0cf349d318ca1f6c795d_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "@EasyAdmin/default/field_integer.html.twig", "/var/www/html/Premium_Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_integer.html.twig");
    }
}
