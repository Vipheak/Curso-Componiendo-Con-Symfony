<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3e7841fbbd3563ce0f1114d03107250d6dda0235822a8fe0682d98dae9bc5cae extends Twig_Template
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
        $__internal_61b7512829ed7eb32b79cc1ab5c063ce30ec5bbfc0a6ecef0035428615f14c24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b7512829ed7eb32b79cc1ab5c063ce30ec5bbfc0a6ecef0035428615f14c24->enter($__internal_61b7512829ed7eb32b79cc1ab5c063ce30ec5bbfc0a6ecef0035428615f14c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_02658ee28cff99dcec3e8e4312724d8087fc2c4ef89cd185c81d0c7448467fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02658ee28cff99dcec3e8e4312724d8087fc2c4ef89cd185c81d0c7448467fd5->enter($__internal_02658ee28cff99dcec3e8e4312724d8087fc2c4ef89cd185c81d0c7448467fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_61b7512829ed7eb32b79cc1ab5c063ce30ec5bbfc0a6ecef0035428615f14c24->leave($__internal_61b7512829ed7eb32b79cc1ab5c063ce30ec5bbfc0a6ecef0035428615f14c24_prof);

        
        $__internal_02658ee28cff99dcec3e8e4312724d8087fc2c4ef89cd185c81d0c7448467fd5->leave($__internal_02658ee28cff99dcec3e8e4312724d8087fc2c4ef89cd185c81d0c7448467fd5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
