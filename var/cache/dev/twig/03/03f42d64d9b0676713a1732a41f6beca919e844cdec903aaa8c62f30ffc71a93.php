<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_d820b52e09141a15cfa4ddd0827a37effef652934e33db8a7b5ff8de159bc968 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84c7d89657c175192e6eea90eedcb0c20ce80b539659d02e2d1a637656784d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c7d89657c175192e6eea90eedcb0c20ce80b539659d02e2d1a637656784d4f->enter($__internal_84c7d89657c175192e6eea90eedcb0c20ce80b539659d02e2d1a637656784d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_a5515b36e777f81fe06851982c9929e387056f02d3c308832d6a97d02b5c195b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5515b36e777f81fe06851982c9929e387056f02d3c308832d6a97d02b5c195b->enter($__internal_a5515b36e777f81fe06851982c9929e387056f02d3c308832d6a97d02b5c195b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_84c7d89657c175192e6eea90eedcb0c20ce80b539659d02e2d1a637656784d4f->leave($__internal_84c7d89657c175192e6eea90eedcb0c20ce80b539659d02e2d1a637656784d4f_prof);

        
        $__internal_a5515b36e777f81fe06851982c9929e387056f02d3c308832d6a97d02b5c195b->leave($__internal_a5515b36e777f81fe06851982c9929e387056f02d3c308832d6a97d02b5c195b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac1ccb7fcbc8d0def3a2fca73defd049518f971ee50b91bb278f47105dec774a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac1ccb7fcbc8d0def3a2fca73defd049518f971ee50b91bb278f47105dec774a->enter($__internal_ac1ccb7fcbc8d0def3a2fca73defd049518f971ee50b91bb278f47105dec774a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_da341c53c33b1112c8ffd747b62fcba8c1191c3a4681cf06eaa34681871f1c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da341c53c33b1112c8ffd747b62fcba8c1191c3a4681cf06eaa34681871f1c5b->enter($__internal_da341c53c33b1112c8ffd747b62fcba8c1191c3a4681cf06eaa34681871f1c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_da341c53c33b1112c8ffd747b62fcba8c1191c3a4681cf06eaa34681871f1c5b->leave($__internal_da341c53c33b1112c8ffd747b62fcba8c1191c3a4681cf06eaa34681871f1c5b_prof);

        
        $__internal_ac1ccb7fcbc8d0def3a2fca73defd049518f971ee50b91bb278f47105dec774a->leave($__internal_ac1ccb7fcbc8d0def3a2fca73defd049518f971ee50b91bb278f47105dec774a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
