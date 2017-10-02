<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_cf902a21c4c1433c9ea27b88cfa3e9140d354bcacd2d33cd74b9d7846d455b53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_0cf7516be13cb3d0df0dfc32f7b43086b12c8dbf8815557e3ffa558e64241acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf7516be13cb3d0df0dfc32f7b43086b12c8dbf8815557e3ffa558e64241acf->enter($__internal_0cf7516be13cb3d0df0dfc32f7b43086b12c8dbf8815557e3ffa558e64241acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_61d643a7dd0ec1070c0c4488668034bcff756f6b65f0f50b1838f3693d0c2298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d643a7dd0ec1070c0c4488668034bcff756f6b65f0f50b1838f3693d0c2298->enter($__internal_61d643a7dd0ec1070c0c4488668034bcff756f6b65f0f50b1838f3693d0c2298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cf7516be13cb3d0df0dfc32f7b43086b12c8dbf8815557e3ffa558e64241acf->leave($__internal_0cf7516be13cb3d0df0dfc32f7b43086b12c8dbf8815557e3ffa558e64241acf_prof);

        
        $__internal_61d643a7dd0ec1070c0c4488668034bcff756f6b65f0f50b1838f3693d0c2298->leave($__internal_61d643a7dd0ec1070c0c4488668034bcff756f6b65f0f50b1838f3693d0c2298_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_64400885248ba35967d37c5018b8c53b6992e5b89936d83754dea8edbed3ff80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64400885248ba35967d37c5018b8c53b6992e5b89936d83754dea8edbed3ff80->enter($__internal_64400885248ba35967d37c5018b8c53b6992e5b89936d83754dea8edbed3ff80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_937f76991cfb6fd063ec06a30a4f708e80a7e0909313dca433574f5b233639ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937f76991cfb6fd063ec06a30a4f708e80a7e0909313dca433574f5b233639ae->enter($__internal_937f76991cfb6fd063ec06a30a4f708e80a7e0909313dca433574f5b233639ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_937f76991cfb6fd063ec06a30a4f708e80a7e0909313dca433574f5b233639ae->leave($__internal_937f76991cfb6fd063ec06a30a4f708e80a7e0909313dca433574f5b233639ae_prof);

        
        $__internal_64400885248ba35967d37c5018b8c53b6992e5b89936d83754dea8edbed3ff80->leave($__internal_64400885248ba35967d37c5018b8c53b6992e5b89936d83754dea8edbed3ff80_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_960576e834023de9d5925d698e371003ce16c69783ff948d1a5e1816ea095155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960576e834023de9d5925d698e371003ce16c69783ff948d1a5e1816ea095155->enter($__internal_960576e834023de9d5925d698e371003ce16c69783ff948d1a5e1816ea095155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4be740ae061a46180a7a0f3db1c45bf89e46f420954b1fe40668588782a541fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be740ae061a46180a7a0f3db1c45bf89e46f420954b1fe40668588782a541fb->enter($__internal_4be740ae061a46180a7a0f3db1c45bf89e46f420954b1fe40668588782a541fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4be740ae061a46180a7a0f3db1c45bf89e46f420954b1fe40668588782a541fb->leave($__internal_4be740ae061a46180a7a0f3db1c45bf89e46f420954b1fe40668588782a541fb_prof);

        
        $__internal_960576e834023de9d5925d698e371003ce16c69783ff948d1a5e1816ea095155->leave($__internal_960576e834023de9d5925d698e371003ce16c69783ff948d1a5e1816ea095155_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
