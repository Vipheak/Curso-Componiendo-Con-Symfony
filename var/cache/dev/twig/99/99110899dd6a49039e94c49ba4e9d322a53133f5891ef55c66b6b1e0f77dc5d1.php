<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0447a5b26578c982271d3959bc31fe1d29de4baea38b3240c66ed77af9056adc extends Twig_Template
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
        $__internal_b9a70781e5068e4b3629081da7ab9b5353017058a34fd12733e141e4a8862566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a70781e5068e4b3629081da7ab9b5353017058a34fd12733e141e4a8862566->enter($__internal_b9a70781e5068e4b3629081da7ab9b5353017058a34fd12733e141e4a8862566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_32fd8eb956158d135628eda7a2e302155a6b0c0bda8f883042cc5c426fcc7d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32fd8eb956158d135628eda7a2e302155a6b0c0bda8f883042cc5c426fcc7d61->enter($__internal_32fd8eb956158d135628eda7a2e302155a6b0c0bda8f883042cc5c426fcc7d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b9a70781e5068e4b3629081da7ab9b5353017058a34fd12733e141e4a8862566->leave($__internal_b9a70781e5068e4b3629081da7ab9b5353017058a34fd12733e141e4a8862566_prof);

        
        $__internal_32fd8eb956158d135628eda7a2e302155a6b0c0bda8f883042cc5c426fcc7d61->leave($__internal_32fd8eb956158d135628eda7a2e302155a6b0c0bda8f883042cc5c426fcc7d61_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7bfc44428feb512475af73ccbedb66ca6f2c31c845589f150c8f6ae12e9b3a6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bfc44428feb512475af73ccbedb66ca6f2c31c845589f150c8f6ae12e9b3a6e->enter($__internal_7bfc44428feb512475af73ccbedb66ca6f2c31c845589f150c8f6ae12e9b3a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_da03870ce50dd61631ef71e5839b8b60e95d6834ffc5884c6403bee06f41d5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da03870ce50dd61631ef71e5839b8b60e95d6834ffc5884c6403bee06f41d5c6->enter($__internal_da03870ce50dd61631ef71e5839b8b60e95d6834ffc5884c6403bee06f41d5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_da03870ce50dd61631ef71e5839b8b60e95d6834ffc5884c6403bee06f41d5c6->leave($__internal_da03870ce50dd61631ef71e5839b8b60e95d6834ffc5884c6403bee06f41d5c6_prof);

        
        $__internal_7bfc44428feb512475af73ccbedb66ca6f2c31c845589f150c8f6ae12e9b3a6e->leave($__internal_7bfc44428feb512475af73ccbedb66ca6f2c31c845589f150c8f6ae12e9b3a6e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
