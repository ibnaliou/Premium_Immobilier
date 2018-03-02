<?php

/* PremiumBundle:Front:catalogue.html.twig */
class __TwigTemplate_2b64714c4cf9b9f8d80c55a6dc25e85a93fdf1a8c247fee50baaa8f35be12c20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PremiumBundle::acceuil.html.twig", "PremiumBundle:Front:catalogue.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'slide' => array($this, 'block_slide'),
            'recherche' => array($this, 'block_recherche'),
            'apropos' => array($this, 'block_apropos'),
            'partenaires' => array($this, 'block_partenaires'),
            'galerie' => array($this, 'block_galerie'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PremiumBundle::acceuil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8911fec8ef288dd6d5615077de4658927a76b09eb53f7cbda24d6890e4da0da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8911fec8ef288dd6d5615077de4658927a76b09eb53f7cbda24d6890e4da0da->enter($__internal_b8911fec8ef288dd6d5615077de4658927a76b09eb53f7cbda24d6890e4da0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Front:catalogue.html.twig"));

        $__internal_74807e133161a9485cabe13ca005376190902d038e6b56caf5535dd7b5f17e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74807e133161a9485cabe13ca005376190902d038e6b56caf5535dd7b5f17e30->enter($__internal_74807e133161a9485cabe13ca005376190902d038e6b56caf5535dd7b5f17e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Front:catalogue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8911fec8ef288dd6d5615077de4658927a76b09eb53f7cbda24d6890e4da0da->leave($__internal_b8911fec8ef288dd6d5615077de4658927a76b09eb53f7cbda24d6890e4da0da_prof);

        
        $__internal_74807e133161a9485cabe13ca005376190902d038e6b56caf5535dd7b5f17e30->leave($__internal_74807e133161a9485cabe13ca005376190902d038e6b56caf5535dd7b5f17e30_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6710ca26fba35e36e692880173558d846c93cf35a5a8fc1269669d1af6ae3cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6710ca26fba35e36e692880173558d846c93cf35a5a8fc1269669d1af6ae3cb8->enter($__internal_6710ca26fba35e36e692880173558d846c93cf35a5a8fc1269669d1af6ae3cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18cd0aa4466ddc7f7e1fe36735149e4932e6ed0f16a99f0050074d6521abb7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cd0aa4466ddc7f7e1fe36735149e4932e6ed0f16a99f0050074d6521abb7c3->enter($__internal_18cd0aa4466ddc7f7e1fe36735149e4932e6ed0f16a99f0050074d6521abb7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PremiumBundle:Front:Catalogue";
        
        $__internal_18cd0aa4466ddc7f7e1fe36735149e4932e6ed0f16a99f0050074d6521abb7c3->leave($__internal_18cd0aa4466ddc7f7e1fe36735149e4932e6ed0f16a99f0050074d6521abb7c3_prof);

        
        $__internal_6710ca26fba35e36e692880173558d846c93cf35a5a8fc1269669d1af6ae3cb8->leave($__internal_6710ca26fba35e36e692880173558d846c93cf35a5a8fc1269669d1af6ae3cb8_prof);

    }

    // line 4
    public function block_slide($context, array $blocks = array())
    {
        $__internal_a640d05081f2eb9af3f9c4e8a45381930618e14cf0e72962c446873ee4eb48bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a640d05081f2eb9af3f9c4e8a45381930618e14cf0e72962c446873ee4eb48bf->enter($__internal_a640d05081f2eb9af3f9c4e8a45381930618e14cf0e72962c446873ee4eb48bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_efb5cf1a1b305f6449dbe92757abd48225e89ba7d091c1420120e44fddc8d541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb5cf1a1b305f6449dbe92757abd48225e89ba7d091c1420120e44fddc8d541->enter($__internal_efb5cf1a1b305f6449dbe92757abd48225e89ba7d091c1420120e44fddc8d541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 5
        echo "    <div>
        <br><br>
    </div>
";
        
        $__internal_efb5cf1a1b305f6449dbe92757abd48225e89ba7d091c1420120e44fddc8d541->leave($__internal_efb5cf1a1b305f6449dbe92757abd48225e89ba7d091c1420120e44fddc8d541_prof);

        
        $__internal_a640d05081f2eb9af3f9c4e8a45381930618e14cf0e72962c446873ee4eb48bf->leave($__internal_a640d05081f2eb9af3f9c4e8a45381930618e14cf0e72962c446873ee4eb48bf_prof);

    }

    // line 9
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_3d69459bb8c34872ee56fb29ebea2c3b11c206a7546484113de7cdd029907cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d69459bb8c34872ee56fb29ebea2c3b11c206a7546484113de7cdd029907cf8->enter($__internal_3d69459bb8c34872ee56fb29ebea2c3b11c206a7546484113de7cdd029907cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_9fa1cba6f57d364337f96ec1e6a4fc86d40eab3d81b4367575ea796c199d5924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa1cba6f57d364337f96ec1e6a4fc86d40eab3d81b4367575ea796c199d5924->enter($__internal_9fa1cba6f57d364337f96ec1e6a4fc86d40eab3d81b4367575ea796c199d5924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        
        $__internal_9fa1cba6f57d364337f96ec1e6a4fc86d40eab3d81b4367575ea796c199d5924->leave($__internal_9fa1cba6f57d364337f96ec1e6a4fc86d40eab3d81b4367575ea796c199d5924_prof);

        
        $__internal_3d69459bb8c34872ee56fb29ebea2c3b11c206a7546484113de7cdd029907cf8->leave($__internal_3d69459bb8c34872ee56fb29ebea2c3b11c206a7546484113de7cdd029907cf8_prof);

    }

    // line 12
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_45b2ab038d33bb209b62b3cbf5c5043f3c3c0bc29ed24dba369171ab24aee245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b2ab038d33bb209b62b3cbf5c5043f3c3c0bc29ed24dba369171ab24aee245->enter($__internal_45b2ab038d33bb209b62b3cbf5c5043f3c3c0bc29ed24dba369171ab24aee245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_f8441496054c1d1b41399ee0b1cd45f7d18e2622e7f6c3c2659aa599b3f0380b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8441496054c1d1b41399ee0b1cd45f7d18e2622e7f6c3c2659aa599b3f0380b->enter($__internal_f8441496054c1d1b41399ee0b1cd45f7d18e2622e7f6c3c2659aa599b3f0380b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        // line 13
        echo "
";
        
        $__internal_f8441496054c1d1b41399ee0b1cd45f7d18e2622e7f6c3c2659aa599b3f0380b->leave($__internal_f8441496054c1d1b41399ee0b1cd45f7d18e2622e7f6c3c2659aa599b3f0380b_prof);

        
        $__internal_45b2ab038d33bb209b62b3cbf5c5043f3c3c0bc29ed24dba369171ab24aee245->leave($__internal_45b2ab038d33bb209b62b3cbf5c5043f3c3c0bc29ed24dba369171ab24aee245_prof);

    }

    // line 15
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_5316098072307daa9918cbea9e7aab5d4737d1a2a1cefc79ae6573758eadb574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5316098072307daa9918cbea9e7aab5d4737d1a2a1cefc79ae6573758eadb574->enter($__internal_5316098072307daa9918cbea9e7aab5d4737d1a2a1cefc79ae6573758eadb574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_7e231c3a964a3c9856a4efda4dce616ab19589dd6c15b2ea1e643c5889669997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e231c3a964a3c9856a4efda4dce616ab19589dd6c15b2ea1e643c5889669997->enter($__internal_7e231c3a964a3c9856a4efda4dce616ab19589dd6c15b2ea1e643c5889669997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        // line 16
        echo "
";
        
        $__internal_7e231c3a964a3c9856a4efda4dce616ab19589dd6c15b2ea1e643c5889669997->leave($__internal_7e231c3a964a3c9856a4efda4dce616ab19589dd6c15b2ea1e643c5889669997_prof);

        
        $__internal_5316098072307daa9918cbea9e7aab5d4737d1a2a1cefc79ae6573758eadb574->leave($__internal_5316098072307daa9918cbea9e7aab5d4737d1a2a1cefc79ae6573758eadb574_prof);

    }

    // line 18
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_4ba27f4bb810e109407d0de1877a95b95ec9ceb00f5857e08c5e7855c6f618bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba27f4bb810e109407d0de1877a95b95ec9ceb00f5857e08c5e7855c6f618bc->enter($__internal_4ba27f4bb810e109407d0de1877a95b95ec9ceb00f5857e08c5e7855c6f618bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_0712c71c2805499738830cf9d3a7e3cb7f755d9aa441b05c159b8882758a96d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0712c71c2805499738830cf9d3a7e3cb7f755d9aa441b05c159b8882758a96d5->enter($__internal_0712c71c2805499738830cf9d3a7e3cb7f755d9aa441b05c159b8882758a96d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        // line 19
        echo "
";
        
        $__internal_0712c71c2805499738830cf9d3a7e3cb7f755d9aa441b05c159b8882758a96d5->leave($__internal_0712c71c2805499738830cf9d3a7e3cb7f755d9aa441b05c159b8882758a96d5_prof);

        
        $__internal_4ba27f4bb810e109407d0de1877a95b95ec9ceb00f5857e08c5e7855c6f618bc->leave($__internal_4ba27f4bb810e109407d0de1877a95b95ec9ceb00f5857e08c5e7855c6f618bc_prof);

    }

    // line 23
    public function block_form($context, array $blocks = array())
    {
        $__internal_92fac8cf5ef83d7ec4a9c8c5957ab0e82dd8cae4345bdda53a69e90437d3aa26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92fac8cf5ef83d7ec4a9c8c5957ab0e82dd8cae4345bdda53a69e90437d3aa26->enter($__internal_92fac8cf5ef83d7ec4a9c8c5957ab0e82dd8cae4345bdda53a69e90437d3aa26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_e2575e842fd19291559643d33c8ad1a32f5b1aefa8033170b8d32cfff9d132c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2575e842fd19291559643d33c8ad1a32f5b1aefa8033170b8d32cfff9d132c2->enter($__internal_e2575e842fd19291559643d33c8ad1a32f5b1aefa8033170b8d32cfff9d132c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 24
        echo "
";
        
        $__internal_e2575e842fd19291559643d33c8ad1a32f5b1aefa8033170b8d32cfff9d132c2->leave($__internal_e2575e842fd19291559643d33c8ad1a32f5b1aefa8033170b8d32cfff9d132c2_prof);

        
        $__internal_92fac8cf5ef83d7ec4a9c8c5957ab0e82dd8cae4345bdda53a69e90437d3aa26->leave($__internal_92fac8cf5ef83d7ec4a9c8c5957ab0e82dd8cae4345bdda53a69e90437d3aa26_prof);

    }

    public function getTemplateName()
    {
        return "PremiumBundle:Front:catalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 24,  163 => 23,  152 => 19,  143 => 18,  132 => 16,  123 => 15,  112 => 13,  103 => 12,  86 => 9,  73 => 5,  64 => 4,  46 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'PremiumBundle::acceuil.html.twig' %}
{% block title %}PremiumBundle:Front:Catalogue{% endblock %}

{% block slide %}
    <div>
        <br><br>
    </div>
{% endblock %}
{% block recherche %}
{% endblock %}

{% block apropos %}

{% endblock %}
{% block partenaires %}

{% endblock %}
{% block galerie %}

{% endblock %}


{% block form %}

{% endblock %}", "PremiumBundle:Front:catalogue.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/Front/catalogue.html.twig");
    }
}
