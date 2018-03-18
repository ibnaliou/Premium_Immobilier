<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_62e39f3744708f25e7835305397fb6b0141430b16fc3ec45fa2dd4525152401d extends Twig_Template
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
        $__internal_48a80925176ff689a0ec07f19829a807496d61ade4a96848f81d9ffcf5fb8c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a80925176ff689a0ec07f19829a807496d61ade4a96848f81d9ffcf5fb8c13->enter($__internal_48a80925176ff689a0ec07f19829a807496d61ade4a96848f81d9ffcf5fb8c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        $__internal_41fefc8aa9dbce558cae9af4b6e8e414de05862bca8d1b4dc046ad686273c6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41fefc8aa9dbce558cae9af4b6e8e414de05862bca8d1b4dc046ad686273c6db->enter($__internal_41fefc8aa9dbce558cae9af4b6e8e414de05862bca8d1b4dc046ad686273c6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_48a80925176ff689a0ec07f19829a807496d61ade4a96848f81d9ffcf5fb8c13->leave($__internal_48a80925176ff689a0ec07f19829a807496d61ade4a96848f81d9ffcf5fb8c13_prof);

        
        $__internal_41fefc8aa9dbce558cae9af4b6e8e414de05862bca8d1b4dc046ad686273c6db->leave($__internal_41fefc8aa9dbce558cae9af4b6e8e414de05862bca8d1b4dc046ad686273c6db_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "/var/www/html/Premium_Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}
