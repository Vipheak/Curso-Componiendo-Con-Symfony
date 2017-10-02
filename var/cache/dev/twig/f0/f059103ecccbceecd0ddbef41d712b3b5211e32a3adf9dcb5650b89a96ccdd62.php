<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_73eea420ca43760209dc1fd79abcd4aea12f3f5e6855ac163e2da8eb6c31f919 extends Twig_Template
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
        $__internal_0d5cf891a8b28cdb5231851d52aa02ae74facb13806676bb225a1232765b1f7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5cf891a8b28cdb5231851d52aa02ae74facb13806676bb225a1232765b1f7c->enter($__internal_0d5cf891a8b28cdb5231851d52aa02ae74facb13806676bb225a1232765b1f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_be36cef6a20cedfe288c881abadefbd20abf47eaf236039b7b15ce4f3479a181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be36cef6a20cedfe288c881abadefbd20abf47eaf236039b7b15ce4f3479a181->enter($__internal_be36cef6a20cedfe288c881abadefbd20abf47eaf236039b7b15ce4f3479a181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0d5cf891a8b28cdb5231851d52aa02ae74facb13806676bb225a1232765b1f7c->leave($__internal_0d5cf891a8b28cdb5231851d52aa02ae74facb13806676bb225a1232765b1f7c_prof);

        
        $__internal_be36cef6a20cedfe288c881abadefbd20abf47eaf236039b7b15ce4f3479a181->leave($__internal_be36cef6a20cedfe288c881abadefbd20abf47eaf236039b7b15ce4f3479a181_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
