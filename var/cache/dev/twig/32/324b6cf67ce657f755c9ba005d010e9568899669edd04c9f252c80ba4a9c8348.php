<?php

/* @EasyAdmin/data_collector/easyadmin.html.twig */
class __TwigTemplate_78943343110add14d126d352db0b946dbd6e2b3f9bfb729237646ac06b25f908 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@EasyAdmin/data_collector/easyadmin.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3acb31e16eb8cab75c2b452ca42e0820202fd446c93519702bd69d0463c99893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3acb31e16eb8cab75c2b452ca42e0820202fd446c93519702bd69d0463c99893->enter($__internal_3acb31e16eb8cab75c2b452ca42e0820202fd446c93519702bd69d0463c99893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/data_collector/easyadmin.html.twig"));

        $__internal_c985b9b927d1c9a20eacfbcccf3d1108f39d887575f6c70717834c77d90750d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c985b9b927d1c9a20eacfbcccf3d1108f39d887575f6c70717834c77d90750d7->enter($__internal_c985b9b927d1c9a20eacfbcccf3d1108f39d887575f6c70717834c77d90750d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/data_collector/easyadmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3acb31e16eb8cab75c2b452ca42e0820202fd446c93519702bd69d0463c99893->leave($__internal_3acb31e16eb8cab75c2b452ca42e0820202fd446c93519702bd69d0463c99893_prof);

        
        $__internal_c985b9b927d1c9a20eacfbcccf3d1108f39d887575f6c70717834c77d90750d7->leave($__internal_c985b9b927d1c9a20eacfbcccf3d1108f39d887575f6c70717834c77d90750d7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bab1cd42bb3c0e0bf3042caa7439c9ecd7268c3e7af7de3b756cdf04969feb03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab1cd42bb3c0e0bf3042caa7439c9ecd7268c3e7af7de3b756cdf04969feb03->enter($__internal_bab1cd42bb3c0e0bf3042caa7439c9ecd7268c3e7af7de3b756cdf04969feb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1d8d16d8bbaa8ae468ff8a4ecaf7b5e126d6fa14238bae90e3f4991dc0d06e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8d16d8bbaa8ae468ff8a4ecaf7b5e126d6fa14238bae90e3f4991dc0d06e02->enter($__internal_1d8d16d8bbaa8ae468ff8a4ecaf7b5e126d6fa14238bae90e3f4991dc0d06e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "isEasyAdminAction", array())) {
            // line 5
            echo "        ";
            $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
            // line 6
            echo "
        ";
            // line 7
            ob_start();
            // line 8
            echo "            ";
            $context["icon_fill_color"] = (((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) ? ("#222") : ("#AAA"));
            // line 9
            echo "            ";
            $context["icon_height"] = (((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) ? ("28") : ("24"));
            // line 10
            echo "            <span class=\"icon\">";
            echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("fill_color" => ($context["icon_fill_color"] ?? $this->getContext($context, "icon_fill_color")), "height" => ($context["icon_height"] ?? $this->getContext($context, "icon_height"))));
            echo "</span>
            <span class=\"sf-toolbar-value sf-toolbar-status\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "numEntities", array()), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>EasyAdmin version</b>
            <span class=\"sf-toolbar-status\">";
            // line 17
            echo twig_escape_filter($this->env, twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Managed entities</b>
            <span class=\"sf-toolbar-status\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "numEntities", array()), "html", null, true);
            echo "</span>
        </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 24
            echo "
        ";
            // line 25
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
            echo "
    ";
        }
        
        $__internal_1d8d16d8bbaa8ae468ff8a4ecaf7b5e126d6fa14238bae90e3f4991dc0d06e02->leave($__internal_1d8d16d8bbaa8ae468ff8a4ecaf7b5e126d6fa14238bae90e3f4991dc0d06e02_prof);

        
        $__internal_bab1cd42bb3c0e0bf3042caa7439c9ecd7268c3e7af7de3b756cdf04969feb03->leave($__internal_bab1cd42bb3c0e0bf3042caa7439c9ecd7268c3e7af7de3b756cdf04969feb03_prof);

    }

    // line 29
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4963e3daec21063c79312bfb8ad580ae29e5086c24d4af4d5ba977bb56a13e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4963e3daec21063c79312bfb8ad580ae29e5086c24d4af4d5ba977bb56a13e53->enter($__internal_4963e3daec21063c79312bfb8ad580ae29e5086c24d4af4d5ba977bb56a13e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_acc711191d7938c3557ca48fc227d54b4af2e6829ae920d21cb322f1420a1652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc711191d7938c3557ca48fc227d54b4af2e6829ae920d21cb322f1420a1652->enter($__internal_acc711191d7938c3557ca48fc227d54b4af2e6829ae920d21cb322f1420a1652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 30
        echo "    <span class=\"label ";
        echo (( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "isEasyAdminAction", array())) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 31
        echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("height" => 32));
        echo "</span>
        <strong>EasyAdmin</strong>
    </span>
";
        
        $__internal_acc711191d7938c3557ca48fc227d54b4af2e6829ae920d21cb322f1420a1652->leave($__internal_acc711191d7938c3557ca48fc227d54b4af2e6829ae920d21cb322f1420a1652_prof);

        
        $__internal_4963e3daec21063c79312bfb8ad580ae29e5086c24d4af4d5ba977bb56a13e53->leave($__internal_4963e3daec21063c79312bfb8ad580ae29e5086c24d4af4d5ba977bb56a13e53_prof);

    }

    // line 36
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d13a5d4318338c1e5f9b3ff258cd56d5276e1e2a528fea407ee5f1ff60234750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d13a5d4318338c1e5f9b3ff258cd56d5276e1e2a528fea407ee5f1ff60234750->enter($__internal_d13a5d4318338c1e5f9b3ff258cd56d5276e1e2a528fea407ee5f1ff60234750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d0d402928494358057cfcff7dfd6129fc6d431d260becbe4da78ca5badaa1c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d402928494358057cfcff7dfd6129fc6d431d260becbe4da78ca5badaa1c23->enter($__internal_d0d402928494358057cfcff7dfd6129fc6d431d260becbe4da78ca5badaa1c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 37
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 38
        echo "
    <h2>EasyAdmin <small>(";
        // line 39
        echo twig_escape_filter($this->env, twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
        echo ")</small></h2>

    ";
        // line 41
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "isEasyAdminAction", array())) {
            // line 42
            echo "
        <div class=\"empty\">
            <p>No information available because this route is not related to EasyAdmin.</p>
        </div>

    ";
        } else {
            // line 48
            echo "
        ";
            // line 49
            if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
                // line 50
                echo "
            <h3>Request Parameters</h3>
            ";
                // line 52
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array())));
                echo "

        ";
            } else {
                // line 55
                echo "
            ";
                // line 56
                if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array())) {
                    // line 57
                    echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 59
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "action", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "action", array()), "-")) : ("-")), "html", null, true);
                    echo "</span>
                    <span class=\"label\">Action</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 64
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "entity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "entity", array()), "-")) : ("-")), "html", null, true);
                    echo "</span>
                    <span class=\"label\">Entity Name</span>
                </div>

                ";
                    // line 68
                    if ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array()), "id", array())) {
                        // line 69
                        echo "                    <div class=\"metric\">
                        <span class=\"value\">";
                        // line 70
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array()), "id", array()), "html", null, true);
                        echo "</span>
                        <span class=\"label\">ID</span>
                    </div>
                ";
                    } elseif ($this->getAttribute($this->getAttribute(                    // line 73
($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array()), "sort_field", array())) {
                        // line 74
                        echo "                    <div class=\"metric\">
                        <span class=\"value\">";
                        // line 75
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array()), "sort_field", array()), "html", null, true);
                        echo " <span class=\"unit\">(";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array()), "sort_direction", array()), "html", null, true);
                        echo ")</span></span>
                        <span class=\"label\">Sorting</span>
                    </div>
                ";
                    }
                    // line 79
                    echo "            </div>
            ";
                }
                // line 81
                echo "
        ";
            }
            // line 83
            echo "
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Current Entity Configuration</h3>
                <div class=\"tab-content\">
                    ";
            // line 88
            echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(0 => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "currentEntityConfig", array())), "method");
            echo "
                </div>

                <br>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Full Backend Configuration</h3>
                <div class=\"tab-content\">

                    <h4>Basic Configuration</h4>
                    ";
            // line 99
            echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(0 => array("site_name" => $this->getAttribute($this->getAttribute(            // line 100
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "site_name", array(), "array"), "formats" => $this->getAttribute($this->getAttribute(            // line 101
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "formats", array(), "array"))), "method");
            // line 102
            echo "

                    <h4>Design Configuration</h4>
                    ";
            // line 105
            echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(0 => array("design" => $this->getAttribute($this->getAttribute(            // line 106
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "design", array(), "array"))), "method");
            // line 107
            echo "

                    <h4>Actions Configuration</h4>
                    ";
            // line 110
            echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(0 => array("disabled_actions" => $this->getAttribute($this->getAttribute(            // line 111
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "disabled_actions", array(), "array"), "list" => $this->getAttribute($this->getAttribute(            // line 112
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "list", array(), "array"), "edit" => $this->getAttribute($this->getAttribute(            // line 113
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "edit", array(), "array"), "new" => $this->getAttribute($this->getAttribute(            // line 114
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "new", array(), "array"), "show" => $this->getAttribute($this->getAttribute(            // line 115
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "show", array(), "array"))), "method");
            // line 116
            echo "

                    <h4>Entities Configuration</h4>
                    ";
            // line 119
            echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(0 => array("entities" => $this->getAttribute($this->getAttribute(            // line 120
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "entities", array(), "array"))), "method");
            // line 121
            echo "

                    <h4>Full Backend Configuration</h4>
                    ";
            // line 124
            echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(0 => array("easy_admin" => $this->getAttribute(            // line 125
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()))), "method");
            // line 126
            echo "
                </div>
            </div>
        </div>

    ";
        }
        // line 132
        echo "
    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle#documentation\">Read documentation</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle\">Project homepage</a></li>
    </ul>

";
        
        $__internal_d0d402928494358057cfcff7dfd6129fc6d431d260becbe4da78ca5badaa1c23->leave($__internal_d0d402928494358057cfcff7dfd6129fc6d431d260becbe4da78ca5badaa1c23_prof);

        
        $__internal_d13a5d4318338c1e5f9b3ff258cd56d5276e1e2a528fea407ee5f1ff60234750->leave($__internal_d13a5d4318338c1e5f9b3ff258cd56d5276e1e2a528fea407ee5f1ff60234750_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/data_collector/easyadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 132,  307 => 126,  305 => 125,  304 => 124,  299 => 121,  297 => 120,  296 => 119,  291 => 116,  289 => 115,  288 => 114,  287 => 113,  286 => 112,  285 => 111,  284 => 110,  279 => 107,  277 => 106,  276 => 105,  271 => 102,  269 => 101,  268 => 100,  267 => 99,  253 => 88,  246 => 83,  242 => 81,  238 => 79,  229 => 75,  226 => 74,  224 => 73,  218 => 70,  215 => 69,  213 => 68,  206 => 64,  198 => 59,  194 => 57,  192 => 56,  189 => 55,  183 => 52,  179 => 50,  177 => 49,  174 => 48,  166 => 42,  164 => 41,  159 => 39,  156 => 38,  153 => 37,  144 => 36,  130 => 31,  125 => 30,  116 => 29,  103 => 25,  100 => 24,  94 => 21,  87 => 17,  83 => 15,  81 => 14,  78 => 13,  73 => 11,  68 => 10,  65 => 9,  62 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.isEasyAdminAction %}
        {% set profiler_markup_version = profiler_markup_version|default(1) %}

        {% set icon %}
            {% set icon_fill_color = profiler_markup_version == 1 ? '#222' : '#AAA' %}
            {% set icon_height = profiler_markup_version == 1 ? '28' : '24' %}
            <span class=\"icon\">{{ include('@EasyAdmin/data_collector/icon.svg.twig', { fill_color: icon_fill_color, height: icon_height }) }}</span>
            <span class=\"sf-toolbar-value sf-toolbar-status\">{{ collector.numEntities }}</span>
        {% endset %}

        {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>EasyAdmin version</b>
            <span class=\"sf-toolbar-status\">{{ constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\EasyAdminBundle::VERSION') }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Managed entities</b>
            <span class=\"sf-toolbar-status\">{{ collector.numEntities }}</span>
        </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.isEasyAdminAction ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@EasyAdmin/data_collector/icon.svg.twig', { height: 32 }) }}</span>
        <strong>EasyAdmin</strong>
    </span>
{% endblock %}

{% block panel %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <h2>EasyAdmin <small>({{ constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\EasyAdminBundle::VERSION') }})</small></h2>

    {% if not collector.isEasyAdminAction %}

        <div class=\"empty\">
            <p>No information available because this route is not related to EasyAdmin.</p>
        </div>

    {% else %}

        {% if profiler_markup_version == 1 %}

            <h3>Request Parameters</h3>
            {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.requestParameters }) }}

        {% else %}

            {% if collector.requestParameters %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.requestParameters.action|default('-') }}</span>
                    <span class=\"label\">Action</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ collector.requestParameters.entity|default('-') }}</span>
                    <span class=\"label\">Entity Name</span>
                </div>

                {% if collector.requestParameters.id %}
                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.requestParameters.id }}</span>
                        <span class=\"label\">ID</span>
                    </div>
                {% elseif collector.requestParameters.sort_field %}
                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.requestParameters.sort_field }} <span class=\"unit\">({{ collector.requestParameters.sort_direction }})</span></span>
                        <span class=\"label\">Sorting</span>
                    </div>
                {% endif %}
            </div>
            {% endif %}

        {% endif %}

        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Current Entity Configuration</h3>
                <div class=\"tab-content\">
                    {{ collector.dump(collector.currentEntityConfig)|raw }}
                </div>

                <br>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Full Backend Configuration</h3>
                <div class=\"tab-content\">

                    <h4>Basic Configuration</h4>
                    {{ collector.dump({
                        'site_name': collector.backendConfig['site_name'],
                        'formats': collector.backendConfig['formats']
                    })|raw }}

                    <h4>Design Configuration</h4>
                    {{ collector.dump({
                        'design': collector.backendConfig['design']
                    })|raw }}

                    <h4>Actions Configuration</h4>
                    {{ collector.dump({
                        'disabled_actions': collector.backendConfig['disabled_actions'],
                        'list': collector.backendConfig['list'],
                        'edit': collector.backendConfig['edit'],
                        'new': collector.backendConfig['new'],
                        'show': collector.backendConfig['show'],
                    })|raw }}

                    <h4>Entities Configuration</h4>
                    {{ collector.dump({
                        'entities': collector.backendConfig['entities']
                    })|raw }}

                    <h4>Full Backend Configuration</h4>
                    {{ collector.dump({
                        'easy_admin': collector.backendConfig
                    })|raw }}
                </div>
            </div>
        </div>

    {% endif %}

    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle#documentation\">Read documentation</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle\">Project homepage</a></li>
    </ul>

{% endblock %}
", "@EasyAdmin/data_collector/easyadmin.html.twig", "/var/www/html/Premium_Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/data_collector/easyadmin.html.twig");
    }
}