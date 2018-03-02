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
        $__internal_fd8fb496d5817a3d22b5883d2b0088154635ac2a32ef6751282b92823c248ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd8fb496d5817a3d22b5883d2b0088154635ac2a32ef6751282b92823c248ac1->enter($__internal_fd8fb496d5817a3d22b5883d2b0088154635ac2a32ef6751282b92823c248ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_30a83cfeb9a1e655ec5e35122b6d6a7901099ae23b63fb36f0e939f2180c2fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a83cfeb9a1e655ec5e35122b6d6a7901099ae23b63fb36f0e939f2180c2fe0->enter($__internal_30a83cfeb9a1e655ec5e35122b6d6a7901099ae23b63fb36f0e939f2180c2fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_fd8fb496d5817a3d22b5883d2b0088154635ac2a32ef6751282b92823c248ac1->leave($__internal_fd8fb496d5817a3d22b5883d2b0088154635ac2a32ef6751282b92823c248ac1_prof);

        
        $__internal_30a83cfeb9a1e655ec5e35122b6d6a7901099ae23b63fb36f0e939f2180c2fe0->leave($__internal_30a83cfeb9a1e655ec5e35122b6d6a7901099ae23b63fb36f0e939f2180c2fe0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_660fc38a705a3f7569fd765547cc5a5ccfd8d0450649f6746d02515f21e631e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660fc38a705a3f7569fd765547cc5a5ccfd8d0450649f6746d02515f21e631e1->enter($__internal_660fc38a705a3f7569fd765547cc5a5ccfd8d0450649f6746d02515f21e631e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b9f445936d957455078a33644f4b7643212be03801affbc998df3d0760d7d62d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f445936d957455078a33644f4b7643212be03801affbc998df3d0760d7d62d->enter($__internal_b9f445936d957455078a33644f4b7643212be03801affbc998df3d0760d7d62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b9f445936d957455078a33644f4b7643212be03801affbc998df3d0760d7d62d->leave($__internal_b9f445936d957455078a33644f4b7643212be03801affbc998df3d0760d7d62d_prof);

        
        $__internal_660fc38a705a3f7569fd765547cc5a5ccfd8d0450649f6746d02515f21e631e1->leave($__internal_660fc38a705a3f7569fd765547cc5a5ccfd8d0450649f6746d02515f21e631e1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b3dbdcc96a8833aca90319af7b9cafd173850a9e97866c452058ff4ba16b165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3dbdcc96a8833aca90319af7b9cafd173850a9e97866c452058ff4ba16b165->enter($__internal_2b3dbdcc96a8833aca90319af7b9cafd173850a9e97866c452058ff4ba16b165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_17f28bf2e92c89d4fd15457685fad78a30597403e6c65eda14369584d19a2a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f28bf2e92c89d4fd15457685fad78a30597403e6c65eda14369584d19a2a52->enter($__internal_17f28bf2e92c89d4fd15457685fad78a30597403e6c65eda14369584d19a2a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_17f28bf2e92c89d4fd15457685fad78a30597403e6c65eda14369584d19a2a52->leave($__internal_17f28bf2e92c89d4fd15457685fad78a30597403e6c65eda14369584d19a2a52_prof);

        
        $__internal_2b3dbdcc96a8833aca90319af7b9cafd173850a9e97866c452058ff4ba16b165->leave($__internal_2b3dbdcc96a8833aca90319af7b9cafd173850a9e97866c452058ff4ba16b165_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4de7a78fc6ae3d29a82a559de79bb795a9a725688ef760e7c7ef7c4a2316ea26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de7a78fc6ae3d29a82a559de79bb795a9a725688ef760e7c7ef7c4a2316ea26->enter($__internal_4de7a78fc6ae3d29a82a559de79bb795a9a725688ef760e7c7ef7c4a2316ea26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5603c3f8f77c615398c81c35196b5cee53684c3b4d659fe67177be68c3d2bfee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5603c3f8f77c615398c81c35196b5cee53684c3b4d659fe67177be68c3d2bfee->enter($__internal_5603c3f8f77c615398c81c35196b5cee53684c3b4d659fe67177be68c3d2bfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5603c3f8f77c615398c81c35196b5cee53684c3b4d659fe67177be68c3d2bfee->leave($__internal_5603c3f8f77c615398c81c35196b5cee53684c3b4d659fe67177be68c3d2bfee_prof);

        
        $__internal_4de7a78fc6ae3d29a82a559de79bb795a9a725688ef760e7c7ef7c4a2316ea26->leave($__internal_4de7a78fc6ae3d29a82a559de79bb795a9a725688ef760e7c7ef7c4a2316ea26_prof);

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
