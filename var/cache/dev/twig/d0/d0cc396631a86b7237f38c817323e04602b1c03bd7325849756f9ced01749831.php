<?php

/* @EasyAdmin/default/show.html.twig */
class __TwigTemplate_ff3c4c3294373c3c72a48aa2be1e7891d8b78be7cb13739bfb2d94a7e9077b9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'show_fields' => array($this, 'block_show_fields'),
            'show_field' => array($this, 'block_show_field'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d69ad32cdae5fac5ff362ba1221fe65ef24d0d390db276652aaceb8e2abd7e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69ad32cdae5fac5ff362ba1221fe65ef24d0d390db276652aaceb8e2abd7e81->enter($__internal_d69ad32cdae5fac5ff362ba1221fe65ef24d0d390db276652aaceb8e2abd7e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/show.html.twig"));

        $__internal_1f6082d7a9681f35a18e86302b456ceb402a29beb69d8fba7681d9fa02086999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6082d7a9681f35a18e86302b456ceb402a29beb69d8fba7681d9fa02086999->enter($__internal_1f6082d7a9681f35a18e86302b456ceb402a29beb69d8fba7681d9fa02086999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_f05769615afbb788ad7250866de6d7729de0e7b52baba05542a6797da35cd353"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_f05769615afbb788ad7250866de6d7729de0e7b52baba05542a6797da35cd353"] ?? $this->getContext($context, "__internal_f05769615afbb788ad7250866de6d7729de0e7b52baba05542a6797da35cd353"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_f05769615afbb788ad7250866de6d7729de0e7b52baba05542a6797da35cd353"] ?? $this->getContext($context, "__internal_f05769615afbb788ad7250866de6d7729de0e7b52baba05542a6797da35cd353"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d69ad32cdae5fac5ff362ba1221fe65ef24d0d390db276652aaceb8e2abd7e81->leave($__internal_d69ad32cdae5fac5ff362ba1221fe65ef24d0d390db276652aaceb8e2abd7e81_prof);

        
        $__internal_1f6082d7a9681f35a18e86302b456ceb402a29beb69d8fba7681d9fa02086999->leave($__internal_1f6082d7a9681f35a18e86302b456ceb402a29beb69d8fba7681d9fa02086999_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d7e84b6dca7a0e35dd4958d7e210602e63ffc548dd7bef65970a13b6c309e2ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7e84b6dca7a0e35dd4958d7e210602e63ffc548dd7bef65970a13b6c309e2ba->enter($__internal_d7e84b6dca7a0e35dd4958d7e210602e63ffc548dd7bef65970a13b6c309e2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_57920a3ca322f93ea768fdd2bd29573818513a8656342ed28224e550758bd749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57920a3ca322f93ea768fdd2bd29573818513a8656342ed28224e550758bd749->enter($__internal_57920a3ca322f93ea768fdd2bd29573818513a8656342ed28224e550758bd749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_57920a3ca322f93ea768fdd2bd29573818513a8656342ed28224e550758bd749->leave($__internal_57920a3ca322f93ea768fdd2bd29573818513a8656342ed28224e550758bd749_prof);

        
        $__internal_d7e84b6dca7a0e35dd4958d7e210602e63ffc548dd7bef65970a13b6c309e2ba->leave($__internal_d7e84b6dca7a0e35dd4958d7e210602e63ffc548dd7bef65970a13b6c309e2ba_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_12b7de9121a312bc776639b97dfc7482c035693e1f91d2c4806d170a87c3c3ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b7de9121a312bc776639b97dfc7482c035693e1f91d2c4806d170a87c3c3ec->enter($__internal_12b7de9121a312bc776639b97dfc7482c035693e1f91d2c4806d170a87c3c3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_d65f75c8867e757b9b9c84993e63d308368ee6445e5fe4d9573e11cf5b655f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65f75c8867e757b9b9c84993e63d308368ee6445e5fe4d9573e11cf5b655f7c->enter($__internal_d65f75c8867e757b9b9c84993e63d308368ee6445e5fe4d9573e11cf5b655f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_d65f75c8867e757b9b9c84993e63d308368ee6445e5fe4d9573e11cf5b655f7c->leave($__internal_d65f75c8867e757b9b9c84993e63d308368ee6445e5fe4d9573e11cf5b655f7c_prof);

        
        $__internal_12b7de9121a312bc776639b97dfc7482c035693e1f91d2c4806d170a87c3c3ec->leave($__internal_12b7de9121a312bc776639b97dfc7482c035693e1f91d2c4806d170a87c3c3ec_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_06644daa02016db1dc0d18c8d47889269d0911a881e63e144517d4438910ba71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06644daa02016db1dc0d18c8d47889269d0911a881e63e144517d4438910ba71->enter($__internal_06644daa02016db1dc0d18c8d47889269d0911a881e63e144517d4438910ba71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_03d01a33d1063681e957dde4aba8deb7636054c80a5de80aa8fa4ce435c89443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d01a33d1063681e957dde4aba8deb7636054c80a5de80aa8fa4ce435c89443->enter($__internal_03d01a33d1063681e957dde4aba8deb7636054c80a5de80aa8fa4ce435c89443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_f05769615afbb788ad7250866de6d7729de0e7b52baba05542a6797da35cd353"] ?? $this->getContext($context, "__internal_f05769615afbb788ad7250866de6d7729de0e7b52baba05542a6797da35cd353")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_03d01a33d1063681e957dde4aba8deb7636054c80a5de80aa8fa4ce435c89443->leave($__internal_03d01a33d1063681e957dde4aba8deb7636054c80a5de80aa8fa4ce435c89443_prof);

        
        $__internal_06644daa02016db1dc0d18c8d47889269d0911a881e63e144517d4438910ba71->leave($__internal_06644daa02016db1dc0d18c8d47889269d0911a881e63e144517d4438910ba71_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_2e3a34805db526fe43934192fc1d04acf4b0f38e6f1e078395c4d3d9855786dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3a34805db526fe43934192fc1d04acf4b0f38e6f1e078395c4d3d9855786dc->enter($__internal_2e3a34805db526fe43934192fc1d04acf4b0f38e6f1e078395c4d3d9855786dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_d40d5a72afd6bb8664f465e63d60191319b0f8919e29de31f6190f6ee48ae96e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40d5a72afd6bb8664f465e63d60191319b0f8919e29de31f6190f6ee48ae96e->enter($__internal_d40d5a72afd6bb8664f465e63d60191319b0f8919e29de31f6190f6ee48ae96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $this->displayBlock('show_fields', $context, $blocks);
        // line 41
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 44
        $this->displayBlock('item_actions', $context, $blocks);
        // line 56
        echo "            </div>
        </div>
    </div>

    ";
        // line 60
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_d40d5a72afd6bb8664f465e63d60191319b0f8919e29de31f6190f6ee48ae96e->leave($__internal_d40d5a72afd6bb8664f465e63d60191319b0f8919e29de31f6190f6ee48ae96e_prof);

        
        $__internal_2e3a34805db526fe43934192fc1d04acf4b0f38e6f1e078395c4d3d9855786dc->leave($__internal_2e3a34805db526fe43934192fc1d04acf4b0f38e6f1e078395c4d3d9855786dc_prof);

    }

    // line 21
    public function block_show_fields($context, array $blocks = array())
    {
        $__internal_2a37e902be1fc9b601d1f603497995d3ad5183f8a4127a839449fa71a3b9bb9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a37e902be1fc9b601d1f603497995d3ad5183f8a4127a839449fa71a3b9bb9d->enter($__internal_2a37e902be1fc9b601d1f603497995d3ad5183f8a4127a839449fa71a3b9bb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        $__internal_621aa7da7ec18db984f5974a73fb5dc51563b2498b6b12b36f77db9999efe588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621aa7da7ec18db984f5974a73fb5dc51563b2498b6b12b36f77db9999efe588->enter($__internal_621aa7da7ec18db984f5974a73fb5dc51563b2498b6b12b36f77db9999efe588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        // line 22
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 23
            echo "                ";
            $this->displayBlock('show_field', $context, $blocks);
            // line 39
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        ";
        
        $__internal_621aa7da7ec18db984f5974a73fb5dc51563b2498b6b12b36f77db9999efe588->leave($__internal_621aa7da7ec18db984f5974a73fb5dc51563b2498b6b12b36f77db9999efe588_prof);

        
        $__internal_2a37e902be1fc9b601d1f603497995d3ad5183f8a4127a839449fa71a3b9bb9d->leave($__internal_2a37e902be1fc9b601d1f603497995d3ad5183f8a4127a839449fa71a3b9bb9d_prof);

    }

    // line 23
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_2360dbe88bf04bfc94e19f0db1b682388cea33f09100c3cc56380550b10549eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2360dbe88bf04bfc94e19f0db1b682388cea33f09100c3cc56380550b10549eb->enter($__internal_2360dbe88bf04bfc94e19f0db1b682388cea33f09100c3cc56380550b10549eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_cbdaae8571ffedbd4aea2705446985379b07f4d5402f5a2f80a9ae3eb0df6640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdaae8571ffedbd4aea2705446985379b07f4d5402f5a2f80a9ae3eb0df6640->enter($__internal_cbdaae8571ffedbd4aea2705446985379b07f4d5402f5a2f80a9ae3eb0df6640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 24
        echo "                    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute(($context["metadata"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "type", array()), "default")) : ("default"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["metadata"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                        <label class=\"col-sm-2 control-label\">
                            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "label", array())) ? ($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["field"] ?? $this->getContext($context, "field"))))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_f05769615afbb788ad7250866de6d7729de0e7b52baba05542a6797da35cd353"] ?? $this->getContext($context, "__internal_f05769615afbb788ad7250866de6d7729de0e7b52baba05542a6797da35cd353")));
        // line 26
        echo "
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                ";
        // line 30
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), ($context["entity"] ?? $this->getContext($context, "entity")), ($context["metadata"] ?? $this->getContext($context, "metadata")));
        echo "
                            </div>

                            ";
        // line 33
        if (((($this->getAttribute(($context["metadata"] ?? null), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "help", array()), "")) : ("")) != "")) {
            // line 34
            echo "                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "help", array()), array(),             // line 4
($context["__internal_f05769615afbb788ad7250866de6d7729de0e7b52baba05542a6797da35cd353"] ?? $this->getContext($context, "__internal_f05769615afbb788ad7250866de6d7729de0e7b52baba05542a6797da35cd353")));
            // line 34
            echo "</span>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>
                ";
        
        $__internal_cbdaae8571ffedbd4aea2705446985379b07f4d5402f5a2f80a9ae3eb0df6640->leave($__internal_cbdaae8571ffedbd4aea2705446985379b07f4d5402f5a2f80a9ae3eb0df6640_prof);

        
        $__internal_2360dbe88bf04bfc94e19f0db1b682388cea33f09100c3cc56380550b10549eb->leave($__internal_2360dbe88bf04bfc94e19f0db1b682388cea33f09100c3cc56380550b10549eb_prof);

    }

    // line 44
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_7e94927a8ea0d2fcbeaea2ef7f3fe98b3b7cdf552b48b308a936fc6f0eaa5156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e94927a8ea0d2fcbeaea2ef7f3fe98b3b7cdf552b48b308a936fc6f0eaa5156->enter($__internal_7e94927a8ea0d2fcbeaea2ef7f3fe98b3b7cdf552b48b308a936fc6f0eaa5156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_8e6f70a9a6eb6385aad6f5472835ff78adba1aa44040bae9667e2db4ff21ef4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6f70a9a6eb6385aad6f5472835ff78adba1aa44040bae9667e2db4ff21ef4b->enter($__internal_8e6f70a9a6eb6385aad6f5472835ff78adba1aa44040bae9667e2db4ff21ef4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 45
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
        // line 46
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 47
        echo "
                ";
        // line 48
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 49
($context["_show_actions"] ?? $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 50
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 51
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 52
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 53
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 54
        echo "
            ";
        
        $__internal_8e6f70a9a6eb6385aad6f5472835ff78adba1aa44040bae9667e2db4ff21ef4b->leave($__internal_8e6f70a9a6eb6385aad6f5472835ff78adba1aa44040bae9667e2db4ff21ef4b_prof);

        
        $__internal_7e94927a8ea0d2fcbeaea2ef7f3fe98b3b7cdf552b48b308a936fc6f0eaa5156->leave($__internal_7e94927a8ea0d2fcbeaea2ef7f3fe98b3b7cdf552b48b308a936fc6f0eaa5156_prof);

    }

    // line 60
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_2b887c9005bc5cc66e84c128fbdc2e7d6af2366d5e93502cf7e0131be1dc1fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b887c9005bc5cc66e84c128fbdc2e7d6af2366d5e93502cf7e0131be1dc1fc6->enter($__internal_2b887c9005bc5cc66e84c128fbdc2e7d6af2366d5e93502cf7e0131be1dc1fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_9998b786f02a5381d30907b156f44666fc993439e43bd2ccbd4f90992c502f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9998b786f02a5381d30907b156f44666fc993439e43bd2ccbd4f90992c502f5e->enter($__internal_9998b786f02a5381d30907b156f44666fc993439e43bd2ccbd4f90992c502f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 61
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 63
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 64
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 65
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 66
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 67
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 68
        echo "
    ";
        
        $__internal_9998b786f02a5381d30907b156f44666fc993439e43bd2ccbd4f90992c502f5e->leave($__internal_9998b786f02a5381d30907b156f44666fc993439e43bd2ccbd4f90992c502f5e_prof);

        
        $__internal_2b887c9005bc5cc66e84c128fbdc2e7d6af2366d5e93502cf7e0131be1dc1fc6->leave($__internal_2b887c9005bc5cc66e84c128fbdc2e7d6af2366d5e93502cf7e0131be1dc1fc6_prof);

    }

    // line 72
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_ed60dc87aa3462bcb487a023d873a984804a22d660cfdb9c664f2fa9624e508b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed60dc87aa3462bcb487a023d873a984804a22d660cfdb9c664f2fa9624e508b->enter($__internal_ed60dc87aa3462bcb487a023d873a984804a22d660cfdb9c664f2fa9624e508b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_76b5b013d67cabfb304715c7e74712ce1e01d63941c807fc98021f2026f80887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b5b013d67cabfb304715c7e74712ce1e01d63941c807fc98021f2026f80887->enter($__internal_76b5b013d67cabfb304715c7e74712ce1e01d63941c807fc98021f2026f80887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 73
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
        
        $__internal_76b5b013d67cabfb304715c7e74712ce1e01d63941c807fc98021f2026f80887->leave($__internal_76b5b013d67cabfb304715c7e74712ce1e01d63941c807fc98021f2026f80887_prof);

        
        $__internal_ed60dc87aa3462bcb487a023d873a984804a22d660cfdb9c664f2fa9624e508b->leave($__internal_ed60dc87aa3462bcb487a023d873a984804a22d660cfdb9c664f2fa9624e508b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 73,  335 => 72,  324 => 68,  322 => 67,  321 => 66,  320 => 65,  319 => 64,  318 => 63,  316 => 61,  307 => 60,  296 => 54,  294 => 53,  293 => 52,  292 => 51,  291 => 50,  290 => 49,  289 => 48,  286 => 47,  283 => 46,  280 => 45,  271 => 44,  259 => 36,  255 => 34,  253 => 4,  251 => 34,  249 => 33,  243 => 30,  237 => 26,  235 => 4,  234 => 26,  226 => 24,  217 => 23,  207 => 40,  193 => 39,  190 => 23,  172 => 22,  163 => 21,  153 => 60,  147 => 56,  145 => 44,  140 => 41,  138 => 21,  135 => 20,  126 => 19,  113 => 15,  112 => 4,  110 => 15,  107 => 14,  105 => 13,  96 => 12,  78 => 10,  60 => 9,  50 => 7,  48 => 5,  47 => 4,  46 => 5,  45 => 4,  44 => 5,  42 => 4,  40 => 3,  38 => 1,  26 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
{% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% block show_fields %}
            {% for field, metadata in fields %}
                {% block show_field %}
                    <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                        <label class=\"col-sm-2 control-label\">
                            {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                            </div>

                            {% if metadata.help|default('') != '' %}
                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                            {% endif %}
                        </div>
                    </div>
                {% endblock %}
            {% endfor %}
        {% endblock %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
{% endblock %}
", "@EasyAdmin/default/show.html.twig", "/var/www/html/Premium_Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/show.html.twig");
    }
}
