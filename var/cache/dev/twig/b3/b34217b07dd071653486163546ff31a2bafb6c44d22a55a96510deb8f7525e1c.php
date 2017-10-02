<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_aaa33a75cf7a0988a5bf811895e3e5ef98796ae4f1bbec179c245af3c83f74b3 extends Twig_Template
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
        $__internal_0df22a5f5f7020f339724fa466155824305fcf774d74e3d42189e87fc51ba970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df22a5f5f7020f339724fa466155824305fcf774d74e3d42189e87fc51ba970->enter($__internal_0df22a5f5f7020f339724fa466155824305fcf774d74e3d42189e87fc51ba970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_dc7ba7a03a52108c5edd5f143270fec9d561d512ed9c89c38aa6100ac4b1d94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7ba7a03a52108c5edd5f143270fec9d561d512ed9c89c38aa6100ac4b1d94d->enter($__internal_dc7ba7a03a52108c5edd5f143270fec9d561d512ed9c89c38aa6100ac4b1d94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0df22a5f5f7020f339724fa466155824305fcf774d74e3d42189e87fc51ba970->leave($__internal_0df22a5f5f7020f339724fa466155824305fcf774d74e3d42189e87fc51ba970_prof);

        
        $__internal_dc7ba7a03a52108c5edd5f143270fec9d561d512ed9c89c38aa6100ac4b1d94d->leave($__internal_dc7ba7a03a52108c5edd5f143270fec9d561d512ed9c89c38aa6100ac4b1d94d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
