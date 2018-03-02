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
        $__internal_6d85302e29c7544edf9f83d1e49a665e2fe352b536602e3b6adee94afb1383e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d85302e29c7544edf9f83d1e49a665e2fe352b536602e3b6adee94afb1383e2->enter($__internal_6d85302e29c7544edf9f83d1e49a665e2fe352b536602e3b6adee94afb1383e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        $__internal_144f8fc249bd44af718dfb28de318f30ab9693237e2f0cd4b76d077bbb0e00a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144f8fc249bd44af718dfb28de318f30ab9693237e2f0cd4b76d077bbb0e00a5->enter($__internal_144f8fc249bd44af718dfb28de318f30ab9693237e2f0cd4b76d077bbb0e00a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_6d85302e29c7544edf9f83d1e49a665e2fe352b536602e3b6adee94afb1383e2->leave($__internal_6d85302e29c7544edf9f83d1e49a665e2fe352b536602e3b6adee94afb1383e2_prof);

        
        $__internal_144f8fc249bd44af718dfb28de318f30ab9693237e2f0cd4b76d077bbb0e00a5->leave($__internal_144f8fc249bd44af718dfb28de318f30ab9693237e2f0cd4b76d077bbb0e00a5_prof);

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
