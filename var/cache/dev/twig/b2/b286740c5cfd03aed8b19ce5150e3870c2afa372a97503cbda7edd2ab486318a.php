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
        $__internal_7f541bf3110a83d4df0c70d13c1a131bc772008a20c8587b394f6594e8d6fcb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f541bf3110a83d4df0c70d13c1a131bc772008a20c8587b394f6594e8d6fcb9->enter($__internal_7f541bf3110a83d4df0c70d13c1a131bc772008a20c8587b394f6594e8d6fcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        $__internal_0e96149f99c4e4a6c54e6de4f9dadfd70729ccc5ddda6762664bbf31820462ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e96149f99c4e4a6c54e6de4f9dadfd70729ccc5ddda6762664bbf31820462ba->enter($__internal_0e96149f99c4e4a6c54e6de4f9dadfd70729ccc5ddda6762664bbf31820462ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_7f541bf3110a83d4df0c70d13c1a131bc772008a20c8587b394f6594e8d6fcb9->leave($__internal_7f541bf3110a83d4df0c70d13c1a131bc772008a20c8587b394f6594e8d6fcb9_prof);

        
        $__internal_0e96149f99c4e4a6c54e6de4f9dadfd70729ccc5ddda6762664bbf31820462ba->leave($__internal_0e96149f99c4e4a6c54e6de4f9dadfd70729ccc5ddda6762664bbf31820462ba_prof);

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
