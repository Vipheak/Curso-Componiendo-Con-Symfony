<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_ac12c574132227140b686f2370e565f8f8810500cd69524bf391681d60e32a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_9092a212faf82216b97f6539eccd7c317c4d9e49f753555051a7adbc3720cb62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9092a212faf82216b97f6539eccd7c317c4d9e49f753555051a7adbc3720cb62->enter($__internal_9092a212faf82216b97f6539eccd7c317c4d9e49f753555051a7adbc3720cb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_9b568ca7739474b190225e92b418aea32775cab8f4f8f262e6499bb0e729e91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b568ca7739474b190225e92b418aea32775cab8f4f8f262e6499bb0e729e91e->enter($__internal_9b568ca7739474b190225e92b418aea32775cab8f4f8f262e6499bb0e729e91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9092a212faf82216b97f6539eccd7c317c4d9e49f753555051a7adbc3720cb62->leave($__internal_9092a212faf82216b97f6539eccd7c317c4d9e49f753555051a7adbc3720cb62_prof);

        
        $__internal_9b568ca7739474b190225e92b418aea32775cab8f4f8f262e6499bb0e729e91e->leave($__internal_9b568ca7739474b190225e92b418aea32775cab8f4f8f262e6499bb0e729e91e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03e3edd2198a6b186d2e76a03cd583f72e624655b39aaed8fe88ea5737ae8582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e3edd2198a6b186d2e76a03cd583f72e624655b39aaed8fe88ea5737ae8582->enter($__internal_03e3edd2198a6b186d2e76a03cd583f72e624655b39aaed8fe88ea5737ae8582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_15a6b04b2819e96c9275fa677a216a160dfe77ca2ba4dd6d3a6c92a4badadee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a6b04b2819e96c9275fa677a216a160dfe77ca2ba4dd6d3a6c92a4badadee0->enter($__internal_15a6b04b2819e96c9275fa677a216a160dfe77ca2ba4dd6d3a6c92a4badadee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_15a6b04b2819e96c9275fa677a216a160dfe77ca2ba4dd6d3a6c92a4badadee0->leave($__internal_15a6b04b2819e96c9275fa677a216a160dfe77ca2ba4dd6d3a6c92a4badadee0_prof);

        
        $__internal_03e3edd2198a6b186d2e76a03cd583f72e624655b39aaed8fe88ea5737ae8582->leave($__internal_03e3edd2198a6b186d2e76a03cd583f72e624655b39aaed8fe88ea5737ae8582_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d17724404572dea93df538e11d4994dd4f47de8896a3d85116d1932ede9a8024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17724404572dea93df538e11d4994dd4f47de8896a3d85116d1932ede9a8024->enter($__internal_d17724404572dea93df538e11d4994dd4f47de8896a3d85116d1932ede9a8024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8173f0e8cea7ba8dfa2064d387e2f98cc2d0cea0acb5eb717481a105758a0521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8173f0e8cea7ba8dfa2064d387e2f98cc2d0cea0acb5eb717481a105758a0521->enter($__internal_8173f0e8cea7ba8dfa2064d387e2f98cc2d0cea0acb5eb717481a105758a0521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8173f0e8cea7ba8dfa2064d387e2f98cc2d0cea0acb5eb717481a105758a0521->leave($__internal_8173f0e8cea7ba8dfa2064d387e2f98cc2d0cea0acb5eb717481a105758a0521_prof);

        
        $__internal_d17724404572dea93df538e11d4994dd4f47de8896a3d85116d1932ede9a8024->leave($__internal_d17724404572dea93df538e11d4994dd4f47de8896a3d85116d1932ede9a8024_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
