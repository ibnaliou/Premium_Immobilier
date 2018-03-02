<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_c7510a7eb8baa46aa2b80cc467f462544f67aa2ed2837e42d690cae1cbb0212f extends Twig_Template
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
        $__internal_918f6ec93906ceeea79f20acb69cd3af3e39142f75ad494912249c7c847aac7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_918f6ec93906ceeea79f20acb69cd3af3e39142f75ad494912249c7c847aac7b->enter($__internal_918f6ec93906ceeea79f20acb69cd3af3e39142f75ad494912249c7c847aac7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        $__internal_ef595bce79e4aaed9b7549bdfb59c06c2b38a4e8f46fb8f1a7d96d1287dfdc2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef595bce79e4aaed9b7549bdfb59c06c2b38a4e8f46fb8f1a7d96d1287dfdc2d->enter($__internal_ef595bce79e4aaed9b7549bdfb59c06c2b38a4e8f46fb8f1a7d96d1287dfdc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_918f6ec93906ceeea79f20acb69cd3af3e39142f75ad494912249c7c847aac7b->leave($__internal_918f6ec93906ceeea79f20acb69cd3af3e39142f75ad494912249c7c847aac7b_prof);

        
        $__internal_ef595bce79e4aaed9b7549bdfb59c06c2b38a4e8f46fb8f1a7d96d1287dfdc2d->leave($__internal_ef595bce79e4aaed9b7549bdfb59c06c2b38a4e8f46fb8f1a7d96d1287dfdc2d_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
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
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_string.html.twig", "/var/www/html/Premium_Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_string.html.twig");
    }
}
