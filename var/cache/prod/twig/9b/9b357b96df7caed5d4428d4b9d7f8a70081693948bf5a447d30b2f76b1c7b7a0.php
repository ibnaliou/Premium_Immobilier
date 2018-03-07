<?php

/* PremiumBundle:Front:reserver.html.twig */
class __TwigTemplate_d06064bd8429147036eabb0540d6bccd52d65ae55fccda6a784260e589ec7477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PremiumBundle::acceuil.html.twig", "PremiumBundle:Front:reserver.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'slide' => array($this, 'block_slide'),
            'offre' => array($this, 'block_offre'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "PremiumBundle:Front:reserver";
    }

    // line 6
    public function block_slide($context, array $blocks = array())
    {
        // line 7
        echo "<div>
<br><br><br><br><br>


</div>
   
";
    }

    // line 14
    public function block_offre($context, array $blocks = array())
    {
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 16
            echo "<div class=\"mg-best-rooms maclasse\" style=\"display:flex\">
<div class=\"container ok\">
 <div class=\"mySlides\">
 <div class=\"numbertext\">1 / 3</div>
 <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\"style=\"width:100%\">
 </div>

 
 <div class=\"mySlides\">
 <div class=\"numbertext\">2 / 3</div>
 <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "images", array()), 1, array(), "array"), "image", array()), "html", null, true);
            echo "\"style=\"width:100%\">
 </div>

 <div class=\"mySlides\">
 <div class=\"numbertext\">3 / 3</div>
 <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "images", array()), 2, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:100%\">
 </div>
 
 

 <div class=\"row\" style=\"display:flex;margin-left:2px;height:500px;\">
 <img class=\"demo cursor\" src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:25%;height:20%\" onclick=\"currentSlide(1)\" alt=\"The Woods\">
 <img class=\"demo cursor\" src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "images", array()), 1, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:25%; height:20%\" onclick=\"currentSlide(2)\" alt=\"Northern Lights\">
 <img class=\"demo cursor\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "images", array()), 2, array(), "array"), "image", array()), "html", null, true);
            echo "\" style=\"width:25%; height:20%\"onclick=\"currentSlide(3)\" alt=\"Nature and sunrise\">
 </div>
 </div>
 







        
            <div class=\"\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"mg-sec-title\">
                            
                            <p>NE RATER PAS CETTE OFFRE: <br>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</p>
                           <span style=\"background-color:yellow\"> Prix:";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "FCFA </span>
                            <br>
                             Premium Immobilier Satisfait ou remboursé!
                        </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "  
                        
                        
                    </div>
                </div>
            </div>

<div class=\"container\">

<fieldset> <legend>RESERVATION</legend>
  <form action=\"\" method=\"post\">
    <div class=\"row\">
      <div class=\"col-25\">
        <label for=\"np\">Numero Piece</label>
      </div>
      <div class=\"col-75\">
        <input type=\"number\" id=\"numpiece\" name=\"numpiece\" placeholder=\"num piece..\" required>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-25\">
        <label for=\"nomcomplet\">Nom Complet</label>
      </div>
      <div class=\"col-75\">
        <input type=\"text\" id=\"nomcomplet\" name=\"nomcomplet\" placeholder=\"Papa Tene..\" required>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-25\">
        <label for=\"tel\">Telephone</label>
      </div>
      <div class=\"col-75\">
            

        <input type=\"number\" id=\"tel\" name=\"tel\" placeholder=\"77545454\" required>
      </div>
    </div>
    
    
    <div class=\"row\">
      <div class=\"col-25\">
        <label for=\"adresse\">Adresse</label>
      </div>
      <div class=\"col-75\">
        <input type=\"text\" id=\"adresse\" name=\"adresse\" placeholder=\"Fass mbao..\" required>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-25\">
        <label for=\"nomcomplet\">Email</label>
      </div>
      <div class=\"col-75\">
        <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"premium@immobilier.sn\" required >
      </div>
    </div>
    <br>
    ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 119
            echo "   <input  type=\"hidden\" name=\"idbienareserver\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "id", array()), "html", null, true);
            echo "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "    <div class=\"row\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"reserver\" value=\"Reserver\">
    </div>
  </form>
  </fieldset>




</div>






<style type=\"text/css\">

</style>







        </div>
        ";
    }

    // line 150
    public function block_recherche($context, array $blocks = array())
    {
        // line 151
        echo " 
";
    }

    // line 156
    public function block_apropos($context, array $blocks = array())
    {
        // line 157
        echo " 
";
    }

    // line 159
    public function block_partenaires($context, array $blocks = array())
    {
    }

    // line 162
    public function block_galerie($context, array $blocks = array())
    {
        // line 163
        echo "
";
    }

    // line 165
    public function block_form($context, array $blocks = array())
    {
        // line 166
        echo " 
";
    }

    public function getTemplateName()
    {
        return "PremiumBundle:Front:reserver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 166,  274 => 165,  269 => 163,  266 => 162,  261 => 159,  256 => 157,  253 => 156,  248 => 151,  245 => 150,  214 => 121,  205 => 119,  201 => 118,  142 => 61,  131 => 57,  127 => 56,  106 => 39,  101 => 38,  96 => 37,  86 => 31,  77 => 26,  67 => 20,  61 => 16,  57 => 15,  54 => 14,  44 => 7,  41 => 6,  35 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PremiumBundle:Front:reserver.html.twig", "/var/www/html/Premium_Immobilier/src/PI/Premium_ImmobilierBundle/Resources/views/Front/reserver.html.twig");
    }
}
