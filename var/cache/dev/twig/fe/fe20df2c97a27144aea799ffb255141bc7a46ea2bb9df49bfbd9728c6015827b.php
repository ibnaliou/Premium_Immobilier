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
        $__internal_0a1db944e118c486a04d52089ea084d98dc05b7bffd27e2f1099976073ad71fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a1db944e118c486a04d52089ea084d98dc05b7bffd27e2f1099976073ad71fb->enter($__internal_0a1db944e118c486a04d52089ea084d98dc05b7bffd27e2f1099976073ad71fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

        $__internal_a35e4b35fd1cd9925604a0c4f0b52ddbad02918ca7792607963f26a57a45174b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35e4b35fd1cd9925604a0c4f0b52ddbad02918ca7792607963f26a57a45174b->enter($__internal_a35e4b35fd1cd9925604a0c4f0b52ddbad02918ca7792607963f26a57a45174b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

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
        
        $__internal_0a1db944e118c486a04d52089ea084d98dc05b7bffd27e2f1099976073ad71fb->leave($__internal_0a1db944e118c486a04d52089ea084d98dc05b7bffd27e2f1099976073ad71fb_prof);

        
        $__internal_a35e4b35fd1cd9925604a0c4f0b52ddbad02918ca7792607963f26a57a45174b->leave($__internal_a35e4b35fd1cd9925604a0c4f0b52ddbad02918ca7792607963f26a57a45174b_prof);

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
