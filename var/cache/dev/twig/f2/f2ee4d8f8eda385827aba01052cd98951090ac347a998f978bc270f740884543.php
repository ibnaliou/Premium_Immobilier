<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_4f39d44f126d22190b9c52edea90666c769bb1e699653d2ccd34338fc8e905ba extends Twig_Template
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
        $__internal_b4d8d95f49f2093fd79b56c328d8ee10c18928dddb1c71d75d6c9723c98bc25d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d8d95f49f2093fd79b56c328d8ee10c18928dddb1c71d75d6c9723c98bc25d->enter($__internal_b4d8d95f49f2093fd79b56c328d8ee10c18928dddb1c71d75d6c9723c98bc25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        $__internal_74934c9a5484a39c685d75343d4d417305d006bb522a28348cd5176ea13f6220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74934c9a5484a39c685d75343d4d417305d006bb522a28348cd5176ea13f6220->enter($__internal_74934c9a5484a39c685d75343d4d417305d006bb522a28348cd5176ea13f6220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_b4d8d95f49f2093fd79b56c328d8ee10c18928dddb1c71d75d6c9723c98bc25d->leave($__internal_b4d8d95f49f2093fd79b56c328d8ee10c18928dddb1c71d75d6c9723c98bc25d_prof);

        
        $__internal_74934c9a5484a39c685d75343d4d417305d006bb522a28348cd5176ea13f6220->leave($__internal_74934c9a5484a39c685d75343d4d417305d006bb522a28348cd5176ea13f6220_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_null.html.twig", "/var/www/html/Premium_Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
