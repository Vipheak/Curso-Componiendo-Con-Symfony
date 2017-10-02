<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_af2117130abf5bcacf87e2b63e32640f77062e16e1e828690d94fbc760c093ca extends Twig_Template
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
        $__internal_e6782fb19aacdf1bad318616982ca1b339674303e2276b33767d01ed2dce77fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6782fb19aacdf1bad318616982ca1b339674303e2276b33767d01ed2dce77fe->enter($__internal_e6782fb19aacdf1bad318616982ca1b339674303e2276b33767d01ed2dce77fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_b4f2afcd70fc721ec7de34879840219bca4a92938fee440b2979a511e1273b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f2afcd70fc721ec7de34879840219bca4a92938fee440b2979a511e1273b39->enter($__internal_b4f2afcd70fc721ec7de34879840219bca4a92938fee440b2979a511e1273b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e6782fb19aacdf1bad318616982ca1b339674303e2276b33767d01ed2dce77fe->leave($__internal_e6782fb19aacdf1bad318616982ca1b339674303e2276b33767d01ed2dce77fe_prof);

        
        $__internal_b4f2afcd70fc721ec7de34879840219bca4a92938fee440b2979a511e1273b39->leave($__internal_b4f2afcd70fc721ec7de34879840219bca4a92938fee440b2979a511e1273b39_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
