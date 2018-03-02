<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9f0b98848ab568191a48692800ebfa3f2e3ef34d5d125589515976b66fca8f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3afeb279f1756d87a70ff229a353c0f537ba1e4c293567270bd2278a6fb22e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3afeb279f1756d87a70ff229a353c0f537ba1e4c293567270bd2278a6fb22e02->enter($__internal_3afeb279f1756d87a70ff229a353c0f537ba1e4c293567270bd2278a6fb22e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f00649ea4e40522c9561913c32fcaa64f91a15a5072a3ddd05019fd5b8cdc936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00649ea4e40522c9561913c32fcaa64f91a15a5072a3ddd05019fd5b8cdc936->enter($__internal_f00649ea4e40522c9561913c32fcaa64f91a15a5072a3ddd05019fd5b8cdc936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3afeb279f1756d87a70ff229a353c0f537ba1e4c293567270bd2278a6fb22e02->leave($__internal_3afeb279f1756d87a70ff229a353c0f537ba1e4c293567270bd2278a6fb22e02_prof);

        
        $__internal_f00649ea4e40522c9561913c32fcaa64f91a15a5072a3ddd05019fd5b8cdc936->leave($__internal_f00649ea4e40522c9561913c32fcaa64f91a15a5072a3ddd05019fd5b8cdc936_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_95aea8553e156aa844207e32c3d5c0e6e7961cc9c9b0a2fea345b0b010886826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95aea8553e156aa844207e32c3d5c0e6e7961cc9c9b0a2fea345b0b010886826->enter($__internal_95aea8553e156aa844207e32c3d5c0e6e7961cc9c9b0a2fea345b0b010886826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_584200ee68c5d6f87d208b1e77e342080b2de01d4efa654fda3bf6804ed1ff49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584200ee68c5d6f87d208b1e77e342080b2de01d4efa654fda3bf6804ed1ff49->enter($__internal_584200ee68c5d6f87d208b1e77e342080b2de01d4efa654fda3bf6804ed1ff49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_584200ee68c5d6f87d208b1e77e342080b2de01d4efa654fda3bf6804ed1ff49->leave($__internal_584200ee68c5d6f87d208b1e77e342080b2de01d4efa654fda3bf6804ed1ff49_prof);

        
        $__internal_95aea8553e156aa844207e32c3d5c0e6e7961cc9c9b0a2fea345b0b010886826->leave($__internal_95aea8553e156aa844207e32c3d5c0e6e7961cc9c9b0a2fea345b0b010886826_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e41cf3d7394d67ded218da95a4c4374dc1a824191c4d47e21aead76bd9bbdfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e41cf3d7394d67ded218da95a4c4374dc1a824191c4d47e21aead76bd9bbdfd->enter($__internal_5e41cf3d7394d67ded218da95a4c4374dc1a824191c4d47e21aead76bd9bbdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_930a402620f89b62d68e61d50471c0e2076319f833d5b8a2e2f1f50384b7be0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930a402620f89b62d68e61d50471c0e2076319f833d5b8a2e2f1f50384b7be0f->enter($__internal_930a402620f89b62d68e61d50471c0e2076319f833d5b8a2e2f1f50384b7be0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_930a402620f89b62d68e61d50471c0e2076319f833d5b8a2e2f1f50384b7be0f->leave($__internal_930a402620f89b62d68e61d50471c0e2076319f833d5b8a2e2f1f50384b7be0f_prof);

        
        $__internal_5e41cf3d7394d67ded218da95a4c4374dc1a824191c4d47e21aead76bd9bbdfd->leave($__internal_5e41cf3d7394d67ded218da95a4c4374dc1a824191c4d47e21aead76bd9bbdfd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_399085451857b0ecfd4d5fd31a2fc4ae9771f8d80b3e4914ae4a45269e01a90e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399085451857b0ecfd4d5fd31a2fc4ae9771f8d80b3e4914ae4a45269e01a90e->enter($__internal_399085451857b0ecfd4d5fd31a2fc4ae9771f8d80b3e4914ae4a45269e01a90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f73e127a065b342dd8fffa054dff38747d9b820372af5e247ee19ff238f7878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f73e127a065b342dd8fffa054dff38747d9b820372af5e247ee19ff238f7878->enter($__internal_4f73e127a065b342dd8fffa054dff38747d9b820372af5e247ee19ff238f7878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4f73e127a065b342dd8fffa054dff38747d9b820372af5e247ee19ff238f7878->leave($__internal_4f73e127a065b342dd8fffa054dff38747d9b820372af5e247ee19ff238f7878_prof);

        
        $__internal_399085451857b0ecfd4d5fd31a2fc4ae9771f8d80b3e4914ae4a45269e01a90e->leave($__internal_399085451857b0ecfd4d5fd31a2fc4ae9771f8d80b3e4914ae4a45269e01a90e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Premium_Immobilier/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
