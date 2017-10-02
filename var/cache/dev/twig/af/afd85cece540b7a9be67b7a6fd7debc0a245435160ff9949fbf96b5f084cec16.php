<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f1375f2854ee9c43923ee702f6f1c76072318d7fe79fcd15d2f2b0e72c516968 extends Twig_Template
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
        $__internal_abdd53c13ed7e62a3e0a0cda92e6f7ae73df5c705df4601b40cfb0e2ca2273fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abdd53c13ed7e62a3e0a0cda92e6f7ae73df5c705df4601b40cfb0e2ca2273fd->enter($__internal_abdd53c13ed7e62a3e0a0cda92e6f7ae73df5c705df4601b40cfb0e2ca2273fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_4f7393ca03d331b241fff60cdcb9362a7ac0efb3f57c27b3c61a0ec8fcb2051d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7393ca03d331b241fff60cdcb9362a7ac0efb3f57c27b3c61a0ec8fcb2051d->enter($__internal_4f7393ca03d331b241fff60cdcb9362a7ac0efb3f57c27b3c61a0ec8fcb2051d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_abdd53c13ed7e62a3e0a0cda92e6f7ae73df5c705df4601b40cfb0e2ca2273fd->leave($__internal_abdd53c13ed7e62a3e0a0cda92e6f7ae73df5c705df4601b40cfb0e2ca2273fd_prof);

        
        $__internal_4f7393ca03d331b241fff60cdcb9362a7ac0efb3f57c27b3c61a0ec8fcb2051d->leave($__internal_4f7393ca03d331b241fff60cdcb9362a7ac0efb3f57c27b3c61a0ec8fcb2051d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
