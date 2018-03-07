<?php

/* PremiumBundle:Admin:listBien.html.twig */
class __TwigTemplate_1c2e6e12c3a976e67b1775beef5ac3d41629f100ae18122a8acfc8ca063295fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PremiumBundle::acceuiladmin.html.twig", "PremiumBundle:Admin:listBien.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "PremiumBundle::acceuiladmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_561f0339ec31c62800f37987fcb6998dbf98ea717cde031d913e47c9ee649b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561f0339ec31c62800f37987fcb6998dbf98ea717cde031d913e47c9ee649b35->enter($__internal_561f0339ec31c62800f37987fcb6998dbf98ea717cde031d913e47c9ee649b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:listBien.html.twig"));

        $__internal_52810efa786d1aeef2c57b1028c2cf98302b2262ab0c916b0a807149ad2b4f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52810efa786d1aeef2c57b1028c2cf98302b2262ab0c916b0a807149ad2b4f63->enter($__internal_52810efa786d1aeef2c57b1028c2cf98302b2262ab0c916b0a807149ad2b4f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:listBien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_561f0339ec31c62800f37987fcb6998dbf98ea717cde031d913e47c9ee649b35->leave($__internal_561f0339ec31c62800f37987fcb6998dbf98ea717cde031d913e47c9ee649b35_prof);

        
        $__internal_52810efa786d1aeef2c57b1028c2cf98302b2262ab0c916b0a807149ad2b4f63->leave($__internal_52810efa786d1aeef2c57b1028c2cf98302b2262ab0c916b0a807149ad2b4f63_prof);

    }

    public function getTemplateName()
    {
        return "PremiumBundle:Admin:listBien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'PremiumBundle::acceuiladmin.html.twig' %}
 ", "PremiumBundle:Admin:listBien.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/Admin/listBien.html.twig");
    }
}
