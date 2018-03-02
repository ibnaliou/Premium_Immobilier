<?php

/* @EasyAdmin/default/flash_messages.html.twig */
class __TwigTemplate_42c6a44ad383b40456b8c07d906ade747027737e723be601e6034b71ad66c4f4 extends Twig_Template
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
        $__internal_7597e75b80662a124addcbb0b922ab2a8a61b5b5c8ee45401f3a243aa2d3e209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7597e75b80662a124addcbb0b922ab2a8a61b5b5c8ee45401f3a243aa2d3e209->enter($__internal_7597e75b80662a124addcbb0b922ab2a8a61b5b5c8ee45401f3a243aa2d3e209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/flash_messages.html.twig"));

        $__internal_0d150395692acf55eb816548b1a984c38545947015b70e39bb8337255c07ae71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d150395692acf55eb816548b1a984c38545947015b70e39bb8337255c07ae71->enter($__internal_0d150395692acf55eb816548b1a984c38545947015b70e39bb8337255c07ae71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/flash_messages.html.twig"));

        // line 1
        if (( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array())) && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "started", array()))) {
            // line 2
            echo "    <div id=\"flash-messages\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 4
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 5
                    echo "                <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                    echo "\">
                    ";
                    // line 6
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </div>
";
        }
        
        $__internal_7597e75b80662a124addcbb0b922ab2a8a61b5b5c8ee45401f3a243aa2d3e209->leave($__internal_7597e75b80662a124addcbb0b922ab2a8a61b5b5c8ee45401f3a243aa2d3e209_prof);

        
        $__internal_0d150395692acf55eb816548b1a984c38545947015b70e39bb8337255c07ae71->leave($__internal_0d150395692acf55eb816548b1a984c38545947015b70e39bb8337255c07ae71_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  53 => 9,  44 => 6,  39 => 5,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.session is not null and app.session.started %}
    <div id=\"flash-messages\">
        {% for label, messages in app.session.flashbag.all %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>
{% endif %}
", "@EasyAdmin/default/flash_messages.html.twig", "/var/www/html/Premium_Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/flash_messages.html.twig");
    }
}
