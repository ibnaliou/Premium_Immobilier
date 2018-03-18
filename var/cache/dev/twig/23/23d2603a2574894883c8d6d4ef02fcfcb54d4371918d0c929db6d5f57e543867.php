<?php

/* default/print.html.twig */
class __TwigTemplate_6ee109ee84b33f4e1b4a0a0df06fe2b0523a77290fe53b373144c09108a2a4b0 extends Twig_Template
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
        $__internal_be30939598586d33bd3edd788b1575696e2c1d39298455690a543371de36d284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be30939598586d33bd3edd788b1575696e2c1d39298455690a543371de36d284->enter($__internal_be30939598586d33bd3edd788b1575696e2c1d39298455690a543371de36d284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/print.html.twig"));

        $__internal_5f49cdd596ae675146fbdf8adc10c86c1fb317ad9de60cd342a7335ee0b6d2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f49cdd596ae675146fbdf8adc10c86c1fb317ad9de60cd342a7335ee0b6d2d6->enter($__internal_5f49cdd596ae675146fbdf8adc10c86c1fb317ad9de60cd342a7335ee0b6d2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/print.html.twig"));

        // line 1
        echo " <center><h1> CONTRAT DE LOCATION </h1></center>
<div><img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Capture.PNG"), "html", null, true);
        echo "\" id=\"logo\"alt=\"logo\"></div>
<h2><fieldset>
<b>ENTRE LES SOUSSIGNES</b><br><br>
PREMIUM IMMOBILIER SA sise &agrave; CTIC DAKAR <br>
<pre>CI-APRES DENOMME                                                            <u>LE BAILLEUR </u>                                                                                        d'une part,
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contrats"] ?? $this->getContext($context, "contrats")));
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 8
            echo "ET M. Mme, Melle ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["contrat"], "Client", array()), "nomComplet", array())), "html", null, true);
            echo "......
n&eacute;(e) le ......... 
demueurant à..";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contrat"], "Client", array()), "adresse", array()), "html", null, true);
            echo "...
Numero Carte Nationale ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contrat"], "Client", array()), "numPiece", array()), "html", null, true);
            echo ", Numero Téléphone ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contrat"], "Client", array()), "tel", array()), "html", null, true);
            echo "

CI-APRES DENOMME                                                            <u>LE LOCATAIRE</u>                                                                                      d'autre part.
</pre>

</fieldset>
<br>
<pre><u>Il a été arrêt&eacute; et convenu ce qui suit :</u>  le bailleur loue les locaux et équipements, ci-après désignés, au locataire qui les acceptent aux 
conditions suivantes.
</pre>

<fieldset>
<b>DESIGNATION</b><pre>

Adresse des locaux lou&eacute;
..... ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["contrat"], "Bien", array()), "Localite", array()), "libelle", array()), "html", null, true);
            echo " ......

Prix de location;
..... ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contrat"], "Bien", array()), "prixlocation", array()), "html", null, true);
            echo " FCFA......

Caution de la location
..... ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contrat"], "Bien", array()), "prixlocation", array()), "html", null, true);
            echo " FCFA......



Consistance et d&eacute;signations des lieux :
.....";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contrat"], "Bien", array()), "description", array()), "html", null, true);
            echo "...........



</pre>

</fieldset>
</br></br>

<fieldset>

<b>DUREE</b><pre>

Le pr&eacute;sent contrat est consenti pour une durée de.......1 (un)...............ans commençant à courir le ............................et se terminant le .................................sous 
réserve de reconduction ou de renouvellement.

</pre>
</fieldset>
</br></br>

<fieldset>

<b>CONDITIONS PARTICULIERES</b><pre>

<u><h3>Loyers et charges</h3></u>
Le loyer est payable mensuellement (1) , trimestriellement (1) d’avance au domicile du bailleur ou de son mandataire.
Le montant du loyer initial est fixé à la somme de (en toutes lettres)...........................................................................................
plus les taxes récupérables et une provision sur charges initiales de (en toutes lettres)...............................................................................................................................................
Il est rappelé que la provision sur charges est révisable chaque année en fonction des dépenses réelles. 
Le loyer sera automatiquement révisé le ..................................................., de chaque année pour tenir
compte de la variation de la moyenne des 4 indices trimestriels de référence des loyers publié par l’INSEE ; moyenne sur les 12 derniers mois, 
des évolutions des prix à la consommation hors tabac et hors loyers.
L’indice de référence est celui du ..................trimestre de l’année................... d’une valeur de ...............
<u><h3>Depot de garantie </h3></u>
Le dépôt de garantie est fixé à la somme de (en toutes lettres)............................................................................................correspondant à un mois 
de loyer hors charges.
<u><h3>Clause des travaux</h3></u>
Le locataire (1) propriétaire (1) exécutera les travaux ci-après décrits :....................................................................................................................................................................................................
...............................................................................................................................................
En conséquence de quoi, le loyer sera minoré (1) majoré (1) de ............................................................pendant ............mois.




<u><h3>Clause particuli&eacute;re</h3></u>
....................................................................................................................................................................................
....................................................................................................................................................................................

</pre>
</fieldset>
<br>
<pre>
En annexe du présent contrat, les parties reconnaissent avoir remis ou reçu :
<input type=\"checkbox\"  /> Un état des lieux dressé lors de la remise des clés
<input type=\"checkbox\"  /> Le dossier de diagnostic technique (diagnostic de performance énergétique, constat de risque
d’exposition au plomb, l’état des risques naturels et technologiques dans les zones I de l’article 125-5 du
code de l’environnement (1) )
<input type=\"checkbox\"  /> Les extraits du règlement de copropriété lorsque l’immeuble est soumis au statut de la copropriété
<input type=\"checkbox\"  /> Une liste des loyers de référence
<input type=\"checkbox\"  /> L’information sur les modalités de réception des services de télévision dans l’immeuble
<input type=\"checkbox\"  /> Un acte de caution solidaire
-Clé(s) remises :................
Rayés nuls : .........................mots........................lignes
Fait et signé à............ ................................................... le..........................................en .........................................originaux dont un remis 
à chacune des parties qui le reconnaît.
<br>

LE BAILLEUR                                                                                 LE(S) LOCATAIRES                                                                  LA CAUTION
(Signature(s) précédée(s)                                                             (Signature(s) précédée(s)                                                         (Signature(s) précédée(s)                                           
de la mention manuscrite                                                               de la mention manuscrite                                                       de la mention manuscrite
« Lu et approuvé »)                                                                      « Lu et approuvé »)                                                                       « Lu et approuvé ») 

<h2>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_be30939598586d33bd3edd788b1575696e2c1d39298455690a543371de36d284->leave($__internal_be30939598586d33bd3edd788b1575696e2c1d39298455690a543371de36d284_prof);

        
        $__internal_5f49cdd596ae675146fbdf8adc10c86c1fb317ad9de60cd342a7335ee0b6d2d6->leave($__internal_5f49cdd596ae675146fbdf8adc10c86c1fb317ad9de60cd342a7335ee0b6d2d6_prof);

    }

    public function getTemplateName()
    {
        return "default/print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 37,  82 => 32,  76 => 29,  70 => 26,  50 => 11,  46 => 10,  40 => 8,  36 => 7,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <center><h1> CONTRAT DE LOCATION </h1></center>
<div><img src=\"{{ asset('images/Capture.PNG') }}\" id=\"logo\"alt=\"logo\"></div>
<h2><fieldset>
<b>ENTRE LES SOUSSIGNES</b><br><br>
PREMIUM IMMOBILIER SA sise &agrave; CTIC DAKAR <br>
<pre>CI-APRES DENOMME                                                            <u>LE BAILLEUR </u>                                                                                        d'une part,
{%for contrat in contrats%}
ET M. Mme, Melle {{contrat.Client.nomComplet|upper}}......
n&eacute;(e) le ......... 
demueurant à..{{contrat.Client.adresse}}...
Numero Carte Nationale {{contrat.Client.numPiece}}, Numero Téléphone {{contrat.Client.tel}}

CI-APRES DENOMME                                                            <u>LE LOCATAIRE</u>                                                                                      d'autre part.
</pre>

</fieldset>
<br>
<pre><u>Il a été arrêt&eacute; et convenu ce qui suit :</u>  le bailleur loue les locaux et équipements, ci-après désignés, au locataire qui les acceptent aux 
conditions suivantes.
</pre>

<fieldset>
<b>DESIGNATION</b><pre>

Adresse des locaux lou&eacute;
..... {{contrat.Bien.Localite.libelle}} ......

Prix de location;
..... {{contrat.Bien.prixlocation}} FCFA......

Caution de la location
..... {{contrat.Bien.prixlocation}} FCFA......



Consistance et d&eacute;signations des lieux :
.....{{contrat.Bien.description}}...........



</pre>

</fieldset>
</br></br>

<fieldset>

<b>DUREE</b><pre>

Le pr&eacute;sent contrat est consenti pour une durée de.......1 (un)...............ans commençant à courir le ............................et se terminant le .................................sous 
réserve de reconduction ou de renouvellement.

</pre>
</fieldset>
</br></br>

<fieldset>

<b>CONDITIONS PARTICULIERES</b><pre>

<u><h3>Loyers et charges</h3></u>
Le loyer est payable mensuellement (1) , trimestriellement (1) d’avance au domicile du bailleur ou de son mandataire.
Le montant du loyer initial est fixé à la somme de (en toutes lettres)...........................................................................................
plus les taxes récupérables et une provision sur charges initiales de (en toutes lettres)...............................................................................................................................................
Il est rappelé que la provision sur charges est révisable chaque année en fonction des dépenses réelles. 
Le loyer sera automatiquement révisé le ..................................................., de chaque année pour tenir
compte de la variation de la moyenne des 4 indices trimestriels de référence des loyers publié par l’INSEE ; moyenne sur les 12 derniers mois, 
des évolutions des prix à la consommation hors tabac et hors loyers.
L’indice de référence est celui du ..................trimestre de l’année................... d’une valeur de ...............
<u><h3>Depot de garantie </h3></u>
Le dépôt de garantie est fixé à la somme de (en toutes lettres)............................................................................................correspondant à un mois 
de loyer hors charges.
<u><h3>Clause des travaux</h3></u>
Le locataire (1) propriétaire (1) exécutera les travaux ci-après décrits :....................................................................................................................................................................................................
...............................................................................................................................................
En conséquence de quoi, le loyer sera minoré (1) majoré (1) de ............................................................pendant ............mois.




<u><h3>Clause particuli&eacute;re</h3></u>
....................................................................................................................................................................................
....................................................................................................................................................................................

</pre>
</fieldset>
<br>
<pre>
En annexe du présent contrat, les parties reconnaissent avoir remis ou reçu :
<input type=\"checkbox\"  /> Un état des lieux dressé lors de la remise des clés
<input type=\"checkbox\"  /> Le dossier de diagnostic technique (diagnostic de performance énergétique, constat de risque
d’exposition au plomb, l’état des risques naturels et technologiques dans les zones I de l’article 125-5 du
code de l’environnement (1) )
<input type=\"checkbox\"  /> Les extraits du règlement de copropriété lorsque l’immeuble est soumis au statut de la copropriété
<input type=\"checkbox\"  /> Une liste des loyers de référence
<input type=\"checkbox\"  /> L’information sur les modalités de réception des services de télévision dans l’immeuble
<input type=\"checkbox\"  /> Un acte de caution solidaire
-Clé(s) remises :................
Rayés nuls : .........................mots........................lignes
Fait et signé à............ ................................................... le..........................................en .........................................originaux dont un remis 
à chacune des parties qui le reconnaît.
<br>

LE BAILLEUR                                                                                 LE(S) LOCATAIRES                                                                  LA CAUTION
(Signature(s) précédée(s)                                                             (Signature(s) précédée(s)                                                         (Signature(s) précédée(s)                                           
de la mention manuscrite                                                               de la mention manuscrite                                                       de la mention manuscrite
« Lu et approuvé »)                                                                      « Lu et approuvé »)                                                                       « Lu et approuvé ») 

<h2>
{%endfor%}", "default/print.html.twig", "/var/www/html/Premium_Immobilier/app/Resources/views/default/print.html.twig");
    }
}
