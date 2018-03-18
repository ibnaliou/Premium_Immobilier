<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_383ed9320ad622fd27841a5eae593812ab6b853c2e61e4be7c0b8ddd125556c7 extends Twig_Template
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
        $__internal_a7ed90bbcadd82bb6e00796ea2144bc3eae285e45b67124c37f0180c453b7207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ed90bbcadd82bb6e00796ea2144bc3eae285e45b67124c37f0180c453b7207->enter($__internal_a7ed90bbcadd82bb6e00796ea2144bc3eae285e45b67124c37f0180c453b7207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        $__internal_a1afc688941d8543cbae9a703a79cedb8e88e120240ad3e2b33093372ece9e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1afc688941d8543cbae9a703a79cedb8e88e120240ad3e2b33093372ece9e2b->enter($__internal_a1afc688941d8543cbae9a703a79cedb8e88e120240ad3e2b33093372ece9e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_a7ed90bbcadd82bb6e00796ea2144bc3eae285e45b67124c37f0180c453b7207->leave($__internal_a7ed90bbcadd82bb6e00796ea2144bc3eae285e45b67124c37f0180c453b7207_prof);

        
        $__internal_a1afc688941d8543cbae9a703a79cedb8e88e120240ad3e2b33093372ece9e2b->leave($__internal_a1afc688941d8543cbae9a703a79cedb8e88e120240ad3e2b33093372ece9e2b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "@EasyAdmin/default/field_date.html.twig", "/var/www/html/Premium_Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_date.html.twig");
    }
}
