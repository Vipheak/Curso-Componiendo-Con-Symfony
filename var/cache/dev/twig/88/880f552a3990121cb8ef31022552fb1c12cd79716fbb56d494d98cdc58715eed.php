<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_6428b4abae5d306971ded0d0883ca72b5878154f4977e15eabb1b37bde4c5bc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9d55f26f4fe3e1bf2de3420697c0824ae29f650a9bbf516749e872a455147c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d55f26f4fe3e1bf2de3420697c0824ae29f650a9bbf516749e872a455147c4->enter($__internal_e9d55f26f4fe3e1bf2de3420697c0824ae29f650a9bbf516749e872a455147c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_e22b824d7f46879146edf5de18a961e54cfc67a6422436d372178254e50532fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22b824d7f46879146edf5de18a961e54cfc67a6422436d372178254e50532fc->enter($__internal_e22b824d7f46879146edf5de18a961e54cfc67a6422436d372178254e50532fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9d55f26f4fe3e1bf2de3420697c0824ae29f650a9bbf516749e872a455147c4->leave($__internal_e9d55f26f4fe3e1bf2de3420697c0824ae29f650a9bbf516749e872a455147c4_prof);

        
        $__internal_e22b824d7f46879146edf5de18a961e54cfc67a6422436d372178254e50532fc->leave($__internal_e22b824d7f46879146edf5de18a961e54cfc67a6422436d372178254e50532fc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cab8d1bd83e4274b89e1ffe5b1aad56658a1cd841ad039ae0ac0b9e174bcb5e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab8d1bd83e4274b89e1ffe5b1aad56658a1cd841ad039ae0ac0b9e174bcb5e6->enter($__internal_cab8d1bd83e4274b89e1ffe5b1aad56658a1cd841ad039ae0ac0b9e174bcb5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8440f7f02334d5cda144768eee325b4f06f1f6bf110f60a19be197531679a588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8440f7f02334d5cda144768eee325b4f06f1f6bf110f60a19be197531679a588->enter($__internal_8440f7f02334d5cda144768eee325b4f06f1f6bf110f60a19be197531679a588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_8440f7f02334d5cda144768eee325b4f06f1f6bf110f60a19be197531679a588->leave($__internal_8440f7f02334d5cda144768eee325b4f06f1f6bf110f60a19be197531679a588_prof);

        
        $__internal_cab8d1bd83e4274b89e1ffe5b1aad56658a1cd841ad039ae0ac0b9e174bcb5e6->leave($__internal_cab8d1bd83e4274b89e1ffe5b1aad56658a1cd841ad039ae0ac0b9e174bcb5e6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
