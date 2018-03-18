<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_517994a944fdd438d88d68b56a162e605a5aec10b295a5a5f60cc8dc4c69f18b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69e4cf9b5eb4cc3da17fc9b2980873f2ad3b3a1a95918b6d6fa0b51a1b1b86b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e4cf9b5eb4cc3da17fc9b2980873f2ad3b3a1a95918b6d6fa0b51a1b1b86b7->enter($__internal_69e4cf9b5eb4cc3da17fc9b2980873f2ad3b3a1a95918b6d6fa0b51a1b1b86b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_499bdbc66fb439b67d195890246463e09707814100937b6ce3b1bdcb7b750e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499bdbc66fb439b67d195890246463e09707814100937b6ce3b1bdcb7b750e3c->enter($__internal_499bdbc66fb439b67d195890246463e09707814100937b6ce3b1bdcb7b750e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69e4cf9b5eb4cc3da17fc9b2980873f2ad3b3a1a95918b6d6fa0b51a1b1b86b7->leave($__internal_69e4cf9b5eb4cc3da17fc9b2980873f2ad3b3a1a95918b6d6fa0b51a1b1b86b7_prof);

        
        $__internal_499bdbc66fb439b67d195890246463e09707814100937b6ce3b1bdcb7b750e3c->leave($__internal_499bdbc66fb439b67d195890246463e09707814100937b6ce3b1bdcb7b750e3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8617440b0e528f250cf7b141bd0cbcbc597b745d1ae0f3e2e30a41c0437ac70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8617440b0e528f250cf7b141bd0cbcbc597b745d1ae0f3e2e30a41c0437ac70->enter($__internal_c8617440b0e528f250cf7b141bd0cbcbc597b745d1ae0f3e2e30a41c0437ac70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f1e077d4302d38eda45b314aa4a59d5d1c00b5da3fc292c9ff8695b09cdeafad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e077d4302d38eda45b314aa4a59d5d1c00b5da3fc292c9ff8695b09cdeafad->enter($__internal_f1e077d4302d38eda45b314aa4a59d5d1c00b5da3fc292c9ff8695b09cdeafad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f1e077d4302d38eda45b314aa4a59d5d1c00b5da3fc292c9ff8695b09cdeafad->leave($__internal_f1e077d4302d38eda45b314aa4a59d5d1c00b5da3fc292c9ff8695b09cdeafad_prof);

        
        $__internal_c8617440b0e528f250cf7b141bd0cbcbc597b745d1ae0f3e2e30a41c0437ac70->leave($__internal_c8617440b0e528f250cf7b141bd0cbcbc597b745d1ae0f3e2e30a41c0437ac70_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e72a57f307cc1240ec9e3b2633eb6e48d1bd9eb65134b848ed959d2ae862b11d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72a57f307cc1240ec9e3b2633eb6e48d1bd9eb65134b848ed959d2ae862b11d->enter($__internal_e72a57f307cc1240ec9e3b2633eb6e48d1bd9eb65134b848ed959d2ae862b11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3674ee325fcdbc088086b86d729178710d53cd76e6612346531a84830718fecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3674ee325fcdbc088086b86d729178710d53cd76e6612346531a84830718fecf->enter($__internal_3674ee325fcdbc088086b86d729178710d53cd76e6612346531a84830718fecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3674ee325fcdbc088086b86d729178710d53cd76e6612346531a84830718fecf->leave($__internal_3674ee325fcdbc088086b86d729178710d53cd76e6612346531a84830718fecf_prof);

        
        $__internal_e72a57f307cc1240ec9e3b2633eb6e48d1bd9eb65134b848ed959d2ae862b11d->leave($__internal_e72a57f307cc1240ec9e3b2633eb6e48d1bd9eb65134b848ed959d2ae862b11d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_53ad56fbc2fe131eac2251d4c206a3a5cd9eb127bcad507b741796b6446ee049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ad56fbc2fe131eac2251d4c206a3a5cd9eb127bcad507b741796b6446ee049->enter($__internal_53ad56fbc2fe131eac2251d4c206a3a5cd9eb127bcad507b741796b6446ee049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c21114c2a72dbbcca1df9c1f015e5805001c8f132e19871b2a160e3fb52e53f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21114c2a72dbbcca1df9c1f015e5805001c8f132e19871b2a160e3fb52e53f9->enter($__internal_c21114c2a72dbbcca1df9c1f015e5805001c8f132e19871b2a160e3fb52e53f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c21114c2a72dbbcca1df9c1f015e5805001c8f132e19871b2a160e3fb52e53f9->leave($__internal_c21114c2a72dbbcca1df9c1f015e5805001c8f132e19871b2a160e3fb52e53f9_prof);

        
        $__internal_53ad56fbc2fe131eac2251d4c206a3a5cd9eb127bcad507b741796b6446ee049->leave($__internal_53ad56fbc2fe131eac2251d4c206a3a5cd9eb127bcad507b741796b6446ee049_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Premium_Immobilier/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
