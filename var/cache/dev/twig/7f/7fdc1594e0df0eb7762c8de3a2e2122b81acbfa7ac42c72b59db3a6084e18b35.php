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
        $__internal_b78538a365767451c177534c3ec669b0d316ec3da71b672ef568bae6966274c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b78538a365767451c177534c3ec669b0d316ec3da71b672ef568bae6966274c1->enter($__internal_b78538a365767451c177534c3ec669b0d316ec3da71b672ef568bae6966274c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9935840d6f6c935e780eaed7e142403b878c4ad736b8e8b4617728539b250e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9935840d6f6c935e780eaed7e142403b878c4ad736b8e8b4617728539b250e6e->enter($__internal_9935840d6f6c935e780eaed7e142403b878c4ad736b8e8b4617728539b250e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b78538a365767451c177534c3ec669b0d316ec3da71b672ef568bae6966274c1->leave($__internal_b78538a365767451c177534c3ec669b0d316ec3da71b672ef568bae6966274c1_prof);

        
        $__internal_9935840d6f6c935e780eaed7e142403b878c4ad736b8e8b4617728539b250e6e->leave($__internal_9935840d6f6c935e780eaed7e142403b878c4ad736b8e8b4617728539b250e6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0af64e018fd11ba8d56a19ac8abca4743faf5cc1e1a409246ae4ea728484a694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af64e018fd11ba8d56a19ac8abca4743faf5cc1e1a409246ae4ea728484a694->enter($__internal_0af64e018fd11ba8d56a19ac8abca4743faf5cc1e1a409246ae4ea728484a694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9d776d2ebbc237574eb614ed8bb185fa96f06b71b396268a170821b261fb4613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d776d2ebbc237574eb614ed8bb185fa96f06b71b396268a170821b261fb4613->enter($__internal_9d776d2ebbc237574eb614ed8bb185fa96f06b71b396268a170821b261fb4613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9d776d2ebbc237574eb614ed8bb185fa96f06b71b396268a170821b261fb4613->leave($__internal_9d776d2ebbc237574eb614ed8bb185fa96f06b71b396268a170821b261fb4613_prof);

        
        $__internal_0af64e018fd11ba8d56a19ac8abca4743faf5cc1e1a409246ae4ea728484a694->leave($__internal_0af64e018fd11ba8d56a19ac8abca4743faf5cc1e1a409246ae4ea728484a694_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_606a805a989b4e27094134df27cc13707cdbe56d8dc95f95e786883b5ad546f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_606a805a989b4e27094134df27cc13707cdbe56d8dc95f95e786883b5ad546f2->enter($__internal_606a805a989b4e27094134df27cc13707cdbe56d8dc95f95e786883b5ad546f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d9758264a79760f6877d188f465c14d8ac30c9b1c920e5f5b6528774085ba82e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9758264a79760f6877d188f465c14d8ac30c9b1c920e5f5b6528774085ba82e->enter($__internal_d9758264a79760f6877d188f465c14d8ac30c9b1c920e5f5b6528774085ba82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d9758264a79760f6877d188f465c14d8ac30c9b1c920e5f5b6528774085ba82e->leave($__internal_d9758264a79760f6877d188f465c14d8ac30c9b1c920e5f5b6528774085ba82e_prof);

        
        $__internal_606a805a989b4e27094134df27cc13707cdbe56d8dc95f95e786883b5ad546f2->leave($__internal_606a805a989b4e27094134df27cc13707cdbe56d8dc95f95e786883b5ad546f2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_632e22b3bf1c2d21657a8eb0b4df3c54b3b6a0279a7dcf9f565d0ce4afe88539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_632e22b3bf1c2d21657a8eb0b4df3c54b3b6a0279a7dcf9f565d0ce4afe88539->enter($__internal_632e22b3bf1c2d21657a8eb0b4df3c54b3b6a0279a7dcf9f565d0ce4afe88539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e07dfb757254cf5264b36497011ae4de059f352efd4eceb02f08d263608d12e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e07dfb757254cf5264b36497011ae4de059f352efd4eceb02f08d263608d12e->enter($__internal_4e07dfb757254cf5264b36497011ae4de059f352efd4eceb02f08d263608d12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4e07dfb757254cf5264b36497011ae4de059f352efd4eceb02f08d263608d12e->leave($__internal_4e07dfb757254cf5264b36497011ae4de059f352efd4eceb02f08d263608d12e_prof);

        
        $__internal_632e22b3bf1c2d21657a8eb0b4df3c54b3b6a0279a7dcf9f565d0ce4afe88539->leave($__internal_632e22b3bf1c2d21657a8eb0b4df3c54b3b6a0279a7dcf9f565d0ce4afe88539_prof);

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
