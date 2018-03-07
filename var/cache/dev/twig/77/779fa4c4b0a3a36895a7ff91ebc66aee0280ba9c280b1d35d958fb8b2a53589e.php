<?php

/* @EasyAdmin/default/field_text.html.twig */
class __TwigTemplate_f87ab67a86fffbf625df122a112e7bcb0c7256a9e49983dd5b05359a82c292c5 extends Twig_Template
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
        $__internal_27c0b115e18f398a62a06ae08b49af3b7bd7fc2446dc29239507a89f424f5401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c0b115e18f398a62a06ae08b49af3b7bd7fc2446dc29239507a89f424f5401->enter($__internal_27c0b115e18f398a62a06ae08b49af3b7bd7fc2446dc29239507a89f424f5401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_text.html.twig"));

        $__internal_d28b2823a10e522b80681a9f708b33008f8a0a6ad900e66da5c0221ded66df82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28b2823a10e522b80681a9f708b33008f8a0a6ad900e66da5c0221ded66df82->enter($__internal_d28b2823a10e522b80681a9f708b33008f8a0a6ad900e66da5c0221ded66df82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_text.html.twig"));

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
        
        $__internal_27c0b115e18f398a62a06ae08b49af3b7bd7fc2446dc29239507a89f424f5401->leave($__internal_27c0b115e18f398a62a06ae08b49af3b7bd7fc2446dc29239507a89f424f5401_prof);

        
        $__internal_d28b2823a10e522b80681a9f708b33008f8a0a6ad900e66da5c0221ded66df82->leave($__internal_d28b2823a10e522b80681a9f708b33008f8a0a6ad900e66da5c0221ded66df82_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_text.html.twig";
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
", "@EasyAdmin/default/field_text.html.twig", "/var/www/html/Premium_Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_text.html.twig");
    }
}
