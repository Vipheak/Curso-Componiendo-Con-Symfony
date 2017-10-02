<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c1e0b93695c65a4be7240a0661dad4b1f7d3ad14833b5a373cc0d1d5785b6f25 extends Twig_Template
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
        $__internal_90285e802e609840990744a3d443e0865695f7b151b3cff1b02cd56edd346358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90285e802e609840990744a3d443e0865695f7b151b3cff1b02cd56edd346358->enter($__internal_90285e802e609840990744a3d443e0865695f7b151b3cff1b02cd56edd346358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_9659c4cf69c4d6266229b8a7157f071aa6bf3b0d0246c503b1c2ad0a187b73ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9659c4cf69c4d6266229b8a7157f071aa6bf3b0d0246c503b1c2ad0a187b73ae->enter($__internal_9659c4cf69c4d6266229b8a7157f071aa6bf3b0d0246c503b1c2ad0a187b73ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_90285e802e609840990744a3d443e0865695f7b151b3cff1b02cd56edd346358->leave($__internal_90285e802e609840990744a3d443e0865695f7b151b3cff1b02cd56edd346358_prof);

        
        $__internal_9659c4cf69c4d6266229b8a7157f071aa6bf3b0d0246c503b1c2ad0a187b73ae->leave($__internal_9659c4cf69c4d6266229b8a7157f071aa6bf3b0d0246c503b1c2ad0a187b73ae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
