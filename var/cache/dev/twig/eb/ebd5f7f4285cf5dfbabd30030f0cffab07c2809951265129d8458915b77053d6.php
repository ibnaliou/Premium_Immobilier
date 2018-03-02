<?php

/* PremiumBundle:Admin:listBien.html.twig */
class __TwigTemplate_1c2e6e12c3a976e67b1775beef5ac3d41629f100ae18122a8acfc8ca063295fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PremiumBundle::acceuil.html.twig", "PremiumBundle:Admin:listBien.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'slide' => array($this, 'block_slide'),
            'recherche' => array($this, 'block_recherche'),
            'offre' => array($this, 'block_offre'),
            'apropos' => array($this, 'block_apropos'),
            'partenaires' => array($this, 'block_partenaires'),
            'galerie' => array($this, 'block_galerie'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PremiumBundle::acceuil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ca325841dc52115556540a87bd5a6edc66d29169d99b0f46aee1d95e9208fa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ca325841dc52115556540a87bd5a6edc66d29169d99b0f46aee1d95e9208fa3->enter($__internal_6ca325841dc52115556540a87bd5a6edc66d29169d99b0f46aee1d95e9208fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:listBien.html.twig"));

        $__internal_ed5ac527e796dc2cfe5c686dc750b748fb94217fb93b6f388876f523a2e778b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5ac527e796dc2cfe5c686dc750b748fb94217fb93b6f388876f523a2e778b1->enter($__internal_ed5ac527e796dc2cfe5c686dc750b748fb94217fb93b6f388876f523a2e778b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PremiumBundle:Admin:listBien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ca325841dc52115556540a87bd5a6edc66d29169d99b0f46aee1d95e9208fa3->leave($__internal_6ca325841dc52115556540a87bd5a6edc66d29169d99b0f46aee1d95e9208fa3_prof);

        
        $__internal_ed5ac527e796dc2cfe5c686dc750b748fb94217fb93b6f388876f523a2e778b1->leave($__internal_ed5ac527e796dc2cfe5c686dc750b748fb94217fb93b6f388876f523a2e778b1_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6c27df9f5ade7b87ab3548de9439f79735d9eaace3f7b247bc43aed3f452c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c27df9f5ade7b87ab3548de9439f79735d9eaace3f7b247bc43aed3f452c21->enter($__internal_a6c27df9f5ade7b87ab3548de9439f79735d9eaace3f7b247bc43aed3f452c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1c055d487beab9b1657e7c7579827851a604608fc9aec4ccfdd1a0bc3ac87e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c055d487beab9b1657e7c7579827851a604608fc9aec4ccfdd1a0bc3ac87e22->enter($__internal_1c055d487beab9b1657e7c7579827851a604608fc9aec4ccfdd1a0bc3ac87e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
";
        
        $__internal_1c055d487beab9b1657e7c7579827851a604608fc9aec4ccfdd1a0bc3ac87e22->leave($__internal_1c055d487beab9b1657e7c7579827851a604608fc9aec4ccfdd1a0bc3ac87e22_prof);

        
        $__internal_a6c27df9f5ade7b87ab3548de9439f79735d9eaace3f7b247bc43aed3f452c21->leave($__internal_a6c27df9f5ade7b87ab3548de9439f79735d9eaace3f7b247bc43aed3f452c21_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7877402f200202c009bd3350df54ce59b106deb66bbbe3a5e2e33cb9c6705b41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7877402f200202c009bd3350df54ce59b106deb66bbbe3a5e2e33cb9c6705b41->enter($__internal_7877402f200202c009bd3350df54ce59b106deb66bbbe3a5e2e33cb9c6705b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_27c547514667d210de5ba5fcbce5f9ee02cc02db2e2ba97f9045d5a8fa2f91ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c547514667d210de5ba5fcbce5f9ee02cc02db2e2ba97f9045d5a8fa2f91ef->enter($__internal_27c547514667d210de5ba5fcbce5f9ee02cc02db2e2ba97f9045d5a8fa2f91ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PremiumBundle:Admin:Adminimistrateur";
        
        $__internal_27c547514667d210de5ba5fcbce5f9ee02cc02db2e2ba97f9045d5a8fa2f91ef->leave($__internal_27c547514667d210de5ba5fcbce5f9ee02cc02db2e2ba97f9045d5a8fa2f91ef_prof);

        
        $__internal_7877402f200202c009bd3350df54ce59b106deb66bbbe3a5e2e33cb9c6705b41->leave($__internal_7877402f200202c009bd3350df54ce59b106deb66bbbe3a5e2e33cb9c6705b41_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eaa66233664b67bec8ae4d96e4b7adf7f4c553ff2951a1c5ce7dccf0ee3754cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa66233664b67bec8ae4d96e4b7adf7f4c553ff2951a1c5ce7dccf0ee3754cd->enter($__internal_eaa66233664b67bec8ae4d96e4b7adf7f4c553ff2951a1c5ce7dccf0ee3754cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4d2f702e47204545ea8e3955f7daccc73cba655ff0576f1ee374d100c69dd7f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2f702e47204545ea8e3955f7daccc73cba655ff0576f1ee374d100c69dd7f9->enter($__internal_4d2f702e47204545ea8e3955f7daccc73cba655ff0576f1ee374d100c69dd7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "

    
";
        
        $__internal_4d2f702e47204545ea8e3955f7daccc73cba655ff0576f1ee374d100c69dd7f9->leave($__internal_4d2f702e47204545ea8e3955f7daccc73cba655ff0576f1ee374d100c69dd7f9_prof);

        
        $__internal_eaa66233664b67bec8ae4d96e4b7adf7f4c553ff2951a1c5ce7dccf0ee3754cd->leave($__internal_eaa66233664b67bec8ae4d96e4b7adf7f4c553ff2951a1c5ce7dccf0ee3754cd_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_aeb8081b89758ee105dcd1a0c71fac43c41c603b9bbfc413b85f089274f85468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb8081b89758ee105dcd1a0c71fac43c41c603b9bbfc413b85f089274f85468->enter($__internal_aeb8081b89758ee105dcd1a0c71fac43c41c603b9bbfc413b85f089274f85468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1d390d7e98f2a10a6f4880646f921cebddeb4441aff4afc09fc58e86188e6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d390d7e98f2a10a6f4880646f921cebddeb4441aff4afc09fc58e86188e6be->enter($__internal_d1d390d7e98f2a10a6f4880646f921cebddeb4441aff4afc09fc58e86188e6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
";
        // line 16
        $this->displayBlock('slide', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('recherche', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('offre', $context, $blocks);
        // line 74
        echo "


";
        // line 77
        $this->displayBlock('apropos', $context, $blocks);
        // line 80
        $this->displayBlock('partenaires', $context, $blocks);
        // line 82
        $this->displayBlock('galerie', $context, $blocks);
        // line 84
        echo "

";
        
        $__internal_d1d390d7e98f2a10a6f4880646f921cebddeb4441aff4afc09fc58e86188e6be->leave($__internal_d1d390d7e98f2a10a6f4880646f921cebddeb4441aff4afc09fc58e86188e6be_prof);

        
        $__internal_aeb8081b89758ee105dcd1a0c71fac43c41c603b9bbfc413b85f089274f85468->leave($__internal_aeb8081b89758ee105dcd1a0c71fac43c41c603b9bbfc413b85f089274f85468_prof);

    }

    // line 16
    public function block_slide($context, array $blocks = array())
    {
        $__internal_87f76b6e1b246c12e9b1193f07145b673b43318b30d20a9f715088b7a4e98a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f76b6e1b246c12e9b1193f07145b673b43318b30d20a9f715088b7a4e98a23->enter($__internal_87f76b6e1b246c12e9b1193f07145b673b43318b30d20a9f715088b7a4e98a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_a3fa967eeb3d349c8216613b0a14ab81ea29e209cc6af5c8890abcefa3af5916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3fa967eeb3d349c8216613b0a14ab81ea29e209cc6af5c8890abcefa3af5916->enter($__internal_a3fa967eeb3d349c8216613b0a14ab81ea29e209cc6af5c8890abcefa3af5916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 17
        echo "
";
        
        $__internal_a3fa967eeb3d349c8216613b0a14ab81ea29e209cc6af5c8890abcefa3af5916->leave($__internal_a3fa967eeb3d349c8216613b0a14ab81ea29e209cc6af5c8890abcefa3af5916_prof);

        
        $__internal_87f76b6e1b246c12e9b1193f07145b673b43318b30d20a9f715088b7a4e98a23->leave($__internal_87f76b6e1b246c12e9b1193f07145b673b43318b30d20a9f715088b7a4e98a23_prof);

    }

    // line 20
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_4c18b2b2525058cdf99c93dc3fd55619d63db726dbbc92fb173585d7261c2c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c18b2b2525058cdf99c93dc3fd55619d63db726dbbc92fb173585d7261c2c99->enter($__internal_4c18b2b2525058cdf99c93dc3fd55619d63db726dbbc92fb173585d7261c2c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_a091efd449b239d1b4dc8bb7e04270ffd2a008301b0fac3cba4d5d793dbeca3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a091efd449b239d1b4dc8bb7e04270ffd2a008301b0fac3cba4d5d793dbeca3b->enter($__internal_a091efd449b239d1b4dc8bb7e04270ffd2a008301b0fac3cba4d5d793dbeca3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        // line 21
        echo "   
";
        
        $__internal_a091efd449b239d1b4dc8bb7e04270ffd2a008301b0fac3cba4d5d793dbeca3b->leave($__internal_a091efd449b239d1b4dc8bb7e04270ffd2a008301b0fac3cba4d5d793dbeca3b_prof);

        
        $__internal_4c18b2b2525058cdf99c93dc3fd55619d63db726dbbc92fb173585d7261c2c99->leave($__internal_4c18b2b2525058cdf99c93dc3fd55619d63db726dbbc92fb173585d7261c2c99_prof);

    }

    // line 24
    public function block_offre($context, array $blocks = array())
    {
        $__internal_d572e6a9ada4ccaab4d7dfe32c442250ce1f5134bf2969df163566d1c152ba31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d572e6a9ada4ccaab4d7dfe32c442250ce1f5134bf2969df163566d1c152ba31->enter($__internal_d572e6a9ada4ccaab4d7dfe32c442250ce1f5134bf2969df163566d1c152ba31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_eebd50089cfa3393a446126e3afdfb20c31c198ebe7c1b33491678aaf701b526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eebd50089cfa3393a446126e3afdfb20c31c198ebe7c1b33491678aaf701b526->enter($__internal_eebd50089cfa3393a446126e3afdfb20c31c198ebe7c1b33491678aaf701b526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 25
        echo "<div>
<br><br><br><br><br><br>
</div>
<table class=\"\" id=\"table\">

    <!--Table head-->
    <thead class=\"blue-grey lighten-4\">
        <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>PRIX</th>
            <th>IMAGE</th>
            <th>LOCALITE</th>
            <th>TYPE DE BIEN</th>
            <th>ETAT DU BIEN</th>


        </tr>
    </thead>
  ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 45
            echo "    <tbody>
        <tr>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomBien", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixLocation", array()), "html", null, true);
            echo "</td>
            <td> <img class=\"lesimages\"  src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"img11\" id=\"\" class=\"img-responsive\"></td>
            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Localite", array()), "libelle", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "TypeBien", array()), "libelle", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 53
            if (($this->getAttribute($context["bien"], "etat", array()) % 2 == 0)) {
                echo " Occupe ";
            } else {
                echo " Disponible ";
            }
            echo " </td>
            



        </tr>
        
    </tbody>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
</table>
         <div>
<br><br><br><br>
</div>
<style type=\"text/css\"  >
.lesimages{
    width:100px;
    height:100px;
}
  </style>
";
        
        $__internal_eebd50089cfa3393a446126e3afdfb20c31c198ebe7c1b33491678aaf701b526->leave($__internal_eebd50089cfa3393a446126e3afdfb20c31c198ebe7c1b33491678aaf701b526_prof);

        
        $__internal_d572e6a9ada4ccaab4d7dfe32c442250ce1f5134bf2969df163566d1c152ba31->leave($__internal_d572e6a9ada4ccaab4d7dfe32c442250ce1f5134bf2969df163566d1c152ba31_prof);

    }

    // line 77
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_124a806863dceb21c2d548da7e4e0a44fb0327fa63137715aaa5c01f81284846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_124a806863dceb21c2d548da7e4e0a44fb0327fa63137715aaa5c01f81284846->enter($__internal_124a806863dceb21c2d548da7e4e0a44fb0327fa63137715aaa5c01f81284846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_15ab31317347d53bc3d78a6a03b73c7de83fe6f1bccfe0a402234a9818fa6d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ab31317347d53bc3d78a6a03b73c7de83fe6f1bccfe0a402234a9818fa6d1a->enter($__internal_15ab31317347d53bc3d78a6a03b73c7de83fe6f1bccfe0a402234a9818fa6d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        // line 78
        echo "
";
        
        $__internal_15ab31317347d53bc3d78a6a03b73c7de83fe6f1bccfe0a402234a9818fa6d1a->leave($__internal_15ab31317347d53bc3d78a6a03b73c7de83fe6f1bccfe0a402234a9818fa6d1a_prof);

        
        $__internal_124a806863dceb21c2d548da7e4e0a44fb0327fa63137715aaa5c01f81284846->leave($__internal_124a806863dceb21c2d548da7e4e0a44fb0327fa63137715aaa5c01f81284846_prof);

    }

    // line 80
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_594b5ecb6ff3fac029cc741b88126c2d9ea0e4b77b000e718536d7495296748c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_594b5ecb6ff3fac029cc741b88126c2d9ea0e4b77b000e718536d7495296748c->enter($__internal_594b5ecb6ff3fac029cc741b88126c2d9ea0e4b77b000e718536d7495296748c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_ff25af8751a4bdcee3e9417b40572a91d07e24d8016bc61ca43f03381e47f471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff25af8751a4bdcee3e9417b40572a91d07e24d8016bc61ca43f03381e47f471->enter($__internal_ff25af8751a4bdcee3e9417b40572a91d07e24d8016bc61ca43f03381e47f471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        
        $__internal_ff25af8751a4bdcee3e9417b40572a91d07e24d8016bc61ca43f03381e47f471->leave($__internal_ff25af8751a4bdcee3e9417b40572a91d07e24d8016bc61ca43f03381e47f471_prof);

        
        $__internal_594b5ecb6ff3fac029cc741b88126c2d9ea0e4b77b000e718536d7495296748c->leave($__internal_594b5ecb6ff3fac029cc741b88126c2d9ea0e4b77b000e718536d7495296748c_prof);

    }

    // line 82
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_e8e018dfdbdee1dfdd42a8ab61d7d8a736d7c53c3d822dc8ad94257408c9116e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e018dfdbdee1dfdd42a8ab61d7d8a736d7c53c3d822dc8ad94257408c9116e->enter($__internal_e8e018dfdbdee1dfdd42a8ab61d7d8a736d7c53c3d822dc8ad94257408c9116e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_817d38a6252f9af40fbcb4d4773dc126f6fdcafea012c8fa6b476b5d5b3b2e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817d38a6252f9af40fbcb4d4773dc126f6fdcafea012c8fa6b476b5d5b3b2e1e->enter($__internal_817d38a6252f9af40fbcb4d4773dc126f6fdcafea012c8fa6b476b5d5b3b2e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        
        $__internal_817d38a6252f9af40fbcb4d4773dc126f6fdcafea012c8fa6b476b5d5b3b2e1e->leave($__internal_817d38a6252f9af40fbcb4d4773dc126f6fdcafea012c8fa6b476b5d5b3b2e1e_prof);

        
        $__internal_e8e018dfdbdee1dfdd42a8ab61d7d8a736d7c53c3d822dc8ad94257408c9116e->leave($__internal_e8e018dfdbdee1dfdd42a8ab61d7d8a736d7c53c3d822dc8ad94257408c9116e_prof);

    }

    public function getTemplateName()
    {
        return "PremiumBundle:Admin:listBien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 82,  323 => 80,  312 => 78,  303 => 77,  282 => 62,  263 => 53,  259 => 52,  255 => 51,  250 => 50,  246 => 49,  242 => 48,  238 => 47,  234 => 45,  230 => 44,  209 => 25,  200 => 24,  189 => 21,  180 => 20,  169 => 17,  160 => 16,  148 => 84,  146 => 82,  144 => 80,  142 => 77,  137 => 74,  135 => 24,  132 => 23,  130 => 20,  127 => 19,  125 => 16,  122 => 15,  113 => 14,  100 => 7,  91 => 6,  73 => 5,  62 => 11,  60 => 6,  58 => 5,  49 => 4,  11 => 1,);
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


{% block head %}
{% block title %}PremiumBundle:Admin:Adminimistrateur{% endblock %}
{% block stylesheets %}


    
{% endblock %}

{% endblock %}

{% block body %}

{% block slide %}

{% endblock %}

{% block recherche %}
   
{% endblock %}

{% block offre %}
<div>
<br><br><br><br><br><br>
</div>
<table class=\"\" id=\"table\">

    <!--Table head-->
    <thead class=\"blue-grey lighten-4\">
        <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>PRIX</th>
            <th>IMAGE</th>
            <th>LOCALITE</th>
            <th>TYPE DE BIEN</th>
            <th>ETAT DU BIEN</th>


        </tr>
    </thead>
  {%for bien in biens%}
    <tbody>
        <tr>
            <td>{{bien.id}}</td>
            <td>{{bien.nomBien}}</td>
            <td>{{bien.prixLocation}}</td>
            <td> <img class=\"lesimages\"  src=\"{{ asset('images/')}}{{bien.images[0].image}}\" alt=\"img11\" id=\"\" class=\"img-responsive\"></td>
            <td>{{bien.Localite.libelle}}</td>
            <td>{{bien.TypeBien.libelle}}</td>
            <td>{% if bien.etat  is even %} Occupe {% else %} Disponible {% endif %} </td>
            



        </tr>
        
    </tbody>
       {%endfor%}

</table>
         <div>
<br><br><br><br>
</div>
<style type=\"text/css\"  >
.lesimages{
    width:100px;
    height:100px;
}
  </style>
{% endblock %}



{% block apropos %}

{% endblock %}
{% block partenaires %}
{% endblock %}
{% block galerie %}
{% endblock %}


{% endblock %}", "PremiumBundle:Admin:listBien.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/Admin/listBien.html.twig");
    }
}
