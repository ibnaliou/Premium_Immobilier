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
        $__internal_79f1d2ef93ca59a20c7c5291a4a05e6b2867f24fdbfeca9d0e6f4047f6ce7015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f1d2ef93ca59a20c7c5291a4a05e6b2867f24fdbfeca9d0e6f4047f6ce7015->enter($__internal_79f1d2ef93ca59a20c7c5291a4a05e6b2867f24fdbfeca9d0e6f4047f6ce7015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        $__internal_1f952849d53631058ead4a52ec9076f897d37882a79edb260a50e3a9aeecb62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f952849d53631058ead4a52ec9076f897d37882a79edb260a50e3a9aeecb62e->enter($__internal_1f952849d53631058ead4a52ec9076f897d37882a79edb260a50e3a9aeecb62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

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
        
        $__internal_79f1d2ef93ca59a20c7c5291a4a05e6b2867f24fdbfeca9d0e6f4047f6ce7015->leave($__internal_79f1d2ef93ca59a20c7c5291a4a05e6b2867f24fdbfeca9d0e6f4047f6ce7015_prof);

        
        $__internal_1f952849d53631058ead4a52ec9076f897d37882a79edb260a50e3a9aeecb62e->leave($__internal_1f952849d53631058ead4a52ec9076f897d37882a79edb260a50e3a9aeecb62e_prof);

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
