<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_776cd615b8759ed72317ae086378acc489295d2714037f9e3fc9a0e7d4ba460c extends Twig_Template
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
        $__internal_ebd9bf6073650414c939a2f870377a2d95e86293ad062afa1568f364218f447d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd9bf6073650414c939a2f870377a2d95e86293ad062afa1568f364218f447d->enter($__internal_ebd9bf6073650414c939a2f870377a2d95e86293ad062afa1568f364218f447d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_6761848740a9b7b8ef44a1e092d5b10d0a16466d60e3a973cff876b936f8bf99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6761848740a9b7b8ef44a1e092d5b10d0a16466d60e3a973cff876b936f8bf99->enter($__internal_6761848740a9b7b8ef44a1e092d5b10d0a16466d60e3a973cff876b936f8bf99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ebd9bf6073650414c939a2f870377a2d95e86293ad062afa1568f364218f447d->leave($__internal_ebd9bf6073650414c939a2f870377a2d95e86293ad062afa1568f364218f447d_prof);

        
        $__internal_6761848740a9b7b8ef44a1e092d5b10d0a16466d60e3a973cff876b936f8bf99->leave($__internal_6761848740a9b7b8ef44a1e092d5b10d0a16466d60e3a973cff876b936f8bf99_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
