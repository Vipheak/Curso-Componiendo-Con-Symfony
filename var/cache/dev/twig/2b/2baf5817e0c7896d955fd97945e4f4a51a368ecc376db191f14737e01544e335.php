<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_26b44d7e6b28c60a6a482eb8f80b0c6073ce48d515fbed5c1af7026d8fe693e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0718ab5c64830b9f52abf17b3a9c79eb70fc812f2d47efbca9a11756868df02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0718ab5c64830b9f52abf17b3a9c79eb70fc812f2d47efbca9a11756868df02->enter($__internal_b0718ab5c64830b9f52abf17b3a9c79eb70fc812f2d47efbca9a11756868df02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_6d35b9b93491f515cc116d5d35a9d0af38d1cb1066e0d000900266f1edde00e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d35b9b93491f515cc116d5d35a9d0af38d1cb1066e0d000900266f1edde00e0->enter($__internal_6d35b9b93491f515cc116d5d35a9d0af38d1cb1066e0d000900266f1edde00e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0718ab5c64830b9f52abf17b3a9c79eb70fc812f2d47efbca9a11756868df02->leave($__internal_b0718ab5c64830b9f52abf17b3a9c79eb70fc812f2d47efbca9a11756868df02_prof);

        
        $__internal_6d35b9b93491f515cc116d5d35a9d0af38d1cb1066e0d000900266f1edde00e0->leave($__internal_6d35b9b93491f515cc116d5d35a9d0af38d1cb1066e0d000900266f1edde00e0_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_cdc572150828b1ceda21b3ea6a77a0227e3f39ef64b31e7476c346136e6f187b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc572150828b1ceda21b3ea6a77a0227e3f39ef64b31e7476c346136e6f187b->enter($__internal_cdc572150828b1ceda21b3ea6a77a0227e3f39ef64b31e7476c346136e6f187b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_fd8d89e2b17fea06a7d2055a3d3a476dda375f6815f0b34dc2aca3c1a74a0782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8d89e2b17fea06a7d2055a3d3a476dda375f6815f0b34dc2aca3c1a74a0782->enter($__internal_fd8d89e2b17fea06a7d2055a3d3a476dda375f6815f0b34dc2aca3c1a74a0782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_fd8d89e2b17fea06a7d2055a3d3a476dda375f6815f0b34dc2aca3c1a74a0782->leave($__internal_fd8d89e2b17fea06a7d2055a3d3a476dda375f6815f0b34dc2aca3c1a74a0782_prof);

        
        $__internal_cdc572150828b1ceda21b3ea6a77a0227e3f39ef64b31e7476c346136e6f187b->leave($__internal_cdc572150828b1ceda21b3ea6a77a0227e3f39ef64b31e7476c346136e6f187b_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_46d9d6f2058dac57a79a1945a7eb0a62aaf72ff620115ddc0b37eaf7e2eaaeff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d9d6f2058dac57a79a1945a7eb0a62aaf72ff620115ddc0b37eaf7e2eaaeff->enter($__internal_46d9d6f2058dac57a79a1945a7eb0a62aaf72ff620115ddc0b37eaf7e2eaaeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ce70f8e682e6a4581f69876b3a4e96755338c1c91dcfcfff7ac18398a5cd18ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce70f8e682e6a4581f69876b3a4e96755338c1c91dcfcfff7ac18398a5cd18ec->enter($__internal_ce70f8e682e6a4581f69876b3a4e96755338c1c91dcfcfff7ac18398a5cd18ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ce70f8e682e6a4581f69876b3a4e96755338c1c91dcfcfff7ac18398a5cd18ec->leave($__internal_ce70f8e682e6a4581f69876b3a4e96755338c1c91dcfcfff7ac18398a5cd18ec_prof);

        
        $__internal_46d9d6f2058dac57a79a1945a7eb0a62aaf72ff620115ddc0b37eaf7e2eaaeff->leave($__internal_46d9d6f2058dac57a79a1945a7eb0a62aaf72ff620115ddc0b37eaf7e2eaaeff_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
