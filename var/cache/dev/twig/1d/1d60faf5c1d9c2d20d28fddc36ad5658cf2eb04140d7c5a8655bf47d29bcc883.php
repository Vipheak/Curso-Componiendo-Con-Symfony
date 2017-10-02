<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_851b499c1a09de6b5ff59e234923a0fa79f12ce372a047b59f3636edf33bcd85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3428c2d23dbfe747301c0614b5a63e98d2bc4a069d718a81a01132dc680cd4e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3428c2d23dbfe747301c0614b5a63e98d2bc4a069d718a81a01132dc680cd4e4->enter($__internal_3428c2d23dbfe747301c0614b5a63e98d2bc4a069d718a81a01132dc680cd4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_802e4dea336dfa6755833c07f64598539c10b3a46af1f050eb9a7f3f9512e000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802e4dea336dfa6755833c07f64598539c10b3a46af1f050eb9a7f3f9512e000->enter($__internal_802e4dea336dfa6755833c07f64598539c10b3a46af1f050eb9a7f3f9512e000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3428c2d23dbfe747301c0614b5a63e98d2bc4a069d718a81a01132dc680cd4e4->leave($__internal_3428c2d23dbfe747301c0614b5a63e98d2bc4a069d718a81a01132dc680cd4e4_prof);

        
        $__internal_802e4dea336dfa6755833c07f64598539c10b3a46af1f050eb9a7f3f9512e000->leave($__internal_802e4dea336dfa6755833c07f64598539c10b3a46af1f050eb9a7f3f9512e000_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
