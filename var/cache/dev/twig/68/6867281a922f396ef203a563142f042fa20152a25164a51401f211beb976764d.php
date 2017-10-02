<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a19bda121ee4596e3f49be1d55380b502617e75c6213f5a735ef4dbf693a42c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b2b475f262b14d90f364f50a5248e4f8f0f0f7e6227772ccd2b134a2eb918f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b2b475f262b14d90f364f50a5248e4f8f0f0f7e6227772ccd2b134a2eb918f7->enter($__internal_4b2b475f262b14d90f364f50a5248e4f8f0f0f7e6227772ccd2b134a2eb918f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_c5573460548d8f85f6ea046df7d96629deafc0475db50d908f16e4939acd1491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5573460548d8f85f6ea046df7d96629deafc0475db50d908f16e4939acd1491->enter($__internal_c5573460548d8f85f6ea046df7d96629deafc0475db50d908f16e4939acd1491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b2b475f262b14d90f364f50a5248e4f8f0f0f7e6227772ccd2b134a2eb918f7->leave($__internal_4b2b475f262b14d90f364f50a5248e4f8f0f0f7e6227772ccd2b134a2eb918f7_prof);

        
        $__internal_c5573460548d8f85f6ea046df7d96629deafc0475db50d908f16e4939acd1491->leave($__internal_c5573460548d8f85f6ea046df7d96629deafc0475db50d908f16e4939acd1491_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6c04d68c60db8b4e6b0a7a9b2a744edbef81cabf39d499dcbd7609cc2c3390a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c04d68c60db8b4e6b0a7a9b2a744edbef81cabf39d499dcbd7609cc2c3390a->enter($__internal_d6c04d68c60db8b4e6b0a7a9b2a744edbef81cabf39d499dcbd7609cc2c3390a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fbf5b9ba0f3bdda138def23ef7913dd11838b292dcd17dcbdda8cb9840a81efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf5b9ba0f3bdda138def23ef7913dd11838b292dcd17dcbdda8cb9840a81efe->enter($__internal_fbf5b9ba0f3bdda138def23ef7913dd11838b292dcd17dcbdda8cb9840a81efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fbf5b9ba0f3bdda138def23ef7913dd11838b292dcd17dcbdda8cb9840a81efe->leave($__internal_fbf5b9ba0f3bdda138def23ef7913dd11838b292dcd17dcbdda8cb9840a81efe_prof);

        
        $__internal_d6c04d68c60db8b4e6b0a7a9b2a744edbef81cabf39d499dcbd7609cc2c3390a->leave($__internal_d6c04d68c60db8b4e6b0a7a9b2a744edbef81cabf39d499dcbd7609cc2c3390a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d6ae1e641fa0503772bd4b00db5cb296fbb53db90792c75abd1bf27cbb80b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6ae1e641fa0503772bd4b00db5cb296fbb53db90792c75abd1bf27cbb80b55->enter($__internal_3d6ae1e641fa0503772bd4b00db5cb296fbb53db90792c75abd1bf27cbb80b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3e9c127a7a3569239909265eeb9ad0b0c1af1aa5fbdfa3dec0f268b490404e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e9c127a7a3569239909265eeb9ad0b0c1af1aa5fbdfa3dec0f268b490404e2->enter($__internal_e3e9c127a7a3569239909265eeb9ad0b0c1af1aa5fbdfa3dec0f268b490404e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e3e9c127a7a3569239909265eeb9ad0b0c1af1aa5fbdfa3dec0f268b490404e2->leave($__internal_e3e9c127a7a3569239909265eeb9ad0b0c1af1aa5fbdfa3dec0f268b490404e2_prof);

        
        $__internal_3d6ae1e641fa0503772bd4b00db5cb296fbb53db90792c75abd1bf27cbb80b55->leave($__internal_3d6ae1e641fa0503772bd4b00db5cb296fbb53db90792c75abd1bf27cbb80b55_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
