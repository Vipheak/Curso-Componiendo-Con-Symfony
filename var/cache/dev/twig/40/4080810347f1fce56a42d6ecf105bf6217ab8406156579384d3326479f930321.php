<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_1406c706aafb1d29637c02dc07b8308c8d1175e94ef470af301598ed8fc617a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2596fefc1bd5b7c99a0eca4a128a11ac143ba04255321535fb2efff966ea30ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2596fefc1bd5b7c99a0eca4a128a11ac143ba04255321535fb2efff966ea30ae->enter($__internal_2596fefc1bd5b7c99a0eca4a128a11ac143ba04255321535fb2efff966ea30ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a1283cd9f6187bfcb3be65ee78e529c10e03aac8f8c440c8db368a3d870f219a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1283cd9f6187bfcb3be65ee78e529c10e03aac8f8c440c8db368a3d870f219a->enter($__internal_a1283cd9f6187bfcb3be65ee78e529c10e03aac8f8c440c8db368a3d870f219a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2596fefc1bd5b7c99a0eca4a128a11ac143ba04255321535fb2efff966ea30ae->leave($__internal_2596fefc1bd5b7c99a0eca4a128a11ac143ba04255321535fb2efff966ea30ae_prof);

        
        $__internal_a1283cd9f6187bfcb3be65ee78e529c10e03aac8f8c440c8db368a3d870f219a->leave($__internal_a1283cd9f6187bfcb3be65ee78e529c10e03aac8f8c440c8db368a3d870f219a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f8f3d6fd0b336aafd80e67af07ff3bbacd58a24132112f349c08401560799f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8f3d6fd0b336aafd80e67af07ff3bbacd58a24132112f349c08401560799f7->enter($__internal_3f8f3d6fd0b336aafd80e67af07ff3bbacd58a24132112f349c08401560799f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bfbe1cb3c0a517be747c244df011b957a19c43f3c3d76311410ef27b7bcce826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbe1cb3c0a517be747c244df011b957a19c43f3c3d76311410ef27b7bcce826->enter($__internal_bfbe1cb3c0a517be747c244df011b957a19c43f3c3d76311410ef27b7bcce826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_bfbe1cb3c0a517be747c244df011b957a19c43f3c3d76311410ef27b7bcce826->leave($__internal_bfbe1cb3c0a517be747c244df011b957a19c43f3c3d76311410ef27b7bcce826_prof);

        
        $__internal_3f8f3d6fd0b336aafd80e67af07ff3bbacd58a24132112f349c08401560799f7->leave($__internal_3f8f3d6fd0b336aafd80e67af07ff3bbacd58a24132112f349c08401560799f7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd43e93ce85cc79778e7cc8b0ce82543002f51bc6995780de10eba21290694a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd43e93ce85cc79778e7cc8b0ce82543002f51bc6995780de10eba21290694a4->enter($__internal_bd43e93ce85cc79778e7cc8b0ce82543002f51bc6995780de10eba21290694a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07783691618dcee71b52cbaa436cc39c9c6581c5aa6f9d993d123db544751b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07783691618dcee71b52cbaa436cc39c9c6581c5aa6f9d993d123db544751b55->enter($__internal_07783691618dcee71b52cbaa436cc39c9c6581c5aa6f9d993d123db544751b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_07783691618dcee71b52cbaa436cc39c9c6581c5aa6f9d993d123db544751b55->leave($__internal_07783691618dcee71b52cbaa436cc39c9c6581c5aa6f9d993d123db544751b55_prof);

        
        $__internal_bd43e93ce85cc79778e7cc8b0ce82543002f51bc6995780de10eba21290694a4->leave($__internal_bd43e93ce85cc79778e7cc8b0ce82543002f51bc6995780de10eba21290694a4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
