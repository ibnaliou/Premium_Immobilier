<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0584f16364d3cb0250cf2bc1ef6bef73885feb02b98e724ce3ea0f3dd642157a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_760110e84553702ea4af0cee24ac7a238a2538fe718c147c0877ee009aa11c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760110e84553702ea4af0cee24ac7a238a2538fe718c147c0877ee009aa11c44->enter($__internal_760110e84553702ea4af0cee24ac7a238a2538fe718c147c0877ee009aa11c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cd6a56aae5bc62bf0967130be64f7ecbfd1723028a6d2de6faade8015bf973ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6a56aae5bc62bf0967130be64f7ecbfd1723028a6d2de6faade8015bf973ab->enter($__internal_cd6a56aae5bc62bf0967130be64f7ecbfd1723028a6d2de6faade8015bf973ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_760110e84553702ea4af0cee24ac7a238a2538fe718c147c0877ee009aa11c44->leave($__internal_760110e84553702ea4af0cee24ac7a238a2538fe718c147c0877ee009aa11c44_prof);

        
        $__internal_cd6a56aae5bc62bf0967130be64f7ecbfd1723028a6d2de6faade8015bf973ab->leave($__internal_cd6a56aae5bc62bf0967130be64f7ecbfd1723028a6d2de6faade8015bf973ab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_19780c37c5a61c96f9f70b93f61f47e6c0c35153654fc719a81baff90b55e7ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19780c37c5a61c96f9f70b93f61f47e6c0c35153654fc719a81baff90b55e7ff->enter($__internal_19780c37c5a61c96f9f70b93f61f47e6c0c35153654fc719a81baff90b55e7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd412c1fa04b8e83092d87d193d4849c7ecc7ac79f048bace319304a92d652e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd412c1fa04b8e83092d87d193d4849c7ecc7ac79f048bace319304a92d652e3->enter($__internal_cd412c1fa04b8e83092d87d193d4849c7ecc7ac79f048bace319304a92d652e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cd412c1fa04b8e83092d87d193d4849c7ecc7ac79f048bace319304a92d652e3->leave($__internal_cd412c1fa04b8e83092d87d193d4849c7ecc7ac79f048bace319304a92d652e3_prof);

        
        $__internal_19780c37c5a61c96f9f70b93f61f47e6c0c35153654fc719a81baff90b55e7ff->leave($__internal_19780c37c5a61c96f9f70b93f61f47e6c0c35153654fc719a81baff90b55e7ff_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2c7cc61e3550aadd36b1184b66c0f09409090a0ee37c93b113261b9bc9e77e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c7cc61e3550aadd36b1184b66c0f09409090a0ee37c93b113261b9bc9e77e36->enter($__internal_2c7cc61e3550aadd36b1184b66c0f09409090a0ee37c93b113261b9bc9e77e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6032d6394adc54046f2c97e9fd7278e3259922a6ddd142e627e56822b5981e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6032d6394adc54046f2c97e9fd7278e3259922a6ddd142e627e56822b5981e13->enter($__internal_6032d6394adc54046f2c97e9fd7278e3259922a6ddd142e627e56822b5981e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6032d6394adc54046f2c97e9fd7278e3259922a6ddd142e627e56822b5981e13->leave($__internal_6032d6394adc54046f2c97e9fd7278e3259922a6ddd142e627e56822b5981e13_prof);

        
        $__internal_2c7cc61e3550aadd36b1184b66c0f09409090a0ee37c93b113261b9bc9e77e36->leave($__internal_2c7cc61e3550aadd36b1184b66c0f09409090a0ee37c93b113261b9bc9e77e36_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b936a6ebca4c2d0e2b0812c47ec1710b381f5a89ca1e71672a65964d55012b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b936a6ebca4c2d0e2b0812c47ec1710b381f5a89ca1e71672a65964d55012b3->enter($__internal_8b936a6ebca4c2d0e2b0812c47ec1710b381f5a89ca1e71672a65964d55012b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0107ddb43b23c9a2dbad9c56b29834dbeac5c0b41190dd2033ceb4297157e830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0107ddb43b23c9a2dbad9c56b29834dbeac5c0b41190dd2033ceb4297157e830->enter($__internal_0107ddb43b23c9a2dbad9c56b29834dbeac5c0b41190dd2033ceb4297157e830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0107ddb43b23c9a2dbad9c56b29834dbeac5c0b41190dd2033ceb4297157e830->leave($__internal_0107ddb43b23c9a2dbad9c56b29834dbeac5c0b41190dd2033ceb4297157e830_prof);

        
        $__internal_8b936a6ebca4c2d0e2b0812c47ec1710b381f5a89ca1e71672a65964d55012b3->leave($__internal_8b936a6ebca4c2d0e2b0812c47ec1710b381f5a89ca1e71672a65964d55012b3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/Premium_Immobilier/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
