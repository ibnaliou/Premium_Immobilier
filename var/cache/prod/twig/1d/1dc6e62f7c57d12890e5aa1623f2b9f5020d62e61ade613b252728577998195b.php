<?php

/* PremiumBundle:Front:catalogue.html.twig */
class __TwigTemplate_1c9a2086e3eef2e2ad4c8ce5ea2e8d3deff102e37957c79942b4681b82fcb02d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "PremiumBundle:Front:Catalogue";
    }

    // line 4
    public function block_slide($context, array $blocks = array())
    {
        // line 5
        echo "    <div>
        <br><br>
    </div>
";
    }

    // line 9
    public function block_recherche($context, array $blocks = array())
    {
    }

    // line 12
    public function block_apropos($context, array $blocks = array())
    {
        // line 13
        echo "
";
    }

    // line 15
    public function block_partenaires($context, array $blocks = array())
    {
        // line 16
        echo "
";
    }

    // line 18
    public function block_galerie($context, array $blocks = array())
    {
        // line 19
        echo "
";
    }

    // line 23
    public function block_form($context, array $blocks = array())
    {
        // line 24
        echo "
";
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
        return array (  82 => 24,  79 => 23,  74 => 19,  71 => 18,  66 => 16,  63 => 15,  58 => 13,  55 => 12,  50 => 9,  43 => 5,  40 => 4,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PremiumBundle:Front:catalogue.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/Front/catalogue.html.twig");
    }
}
