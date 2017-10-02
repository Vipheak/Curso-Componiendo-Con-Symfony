<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_992cf07bf0eacc83641b3a5d7d7e7bd789b4c75900cd4aeca5e0c48c2a80acad extends Twig_Template
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
        $__internal_03750270d167c7f173571f5cd39f15cf0e98e53e26f6da34b4069cee278a9020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03750270d167c7f173571f5cd39f15cf0e98e53e26f6da34b4069cee278a9020->enter($__internal_03750270d167c7f173571f5cd39f15cf0e98e53e26f6da34b4069cee278a9020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_ced9af8ff239f64c1363664ab0d4ddb64d26b954f14bc80ce89fdecd5f51436d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced9af8ff239f64c1363664ab0d4ddb64d26b954f14bc80ce89fdecd5f51436d->enter($__internal_ced9af8ff239f64c1363664ab0d4ddb64d26b954f14bc80ce89fdecd5f51436d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_03750270d167c7f173571f5cd39f15cf0e98e53e26f6da34b4069cee278a9020->leave($__internal_03750270d167c7f173571f5cd39f15cf0e98e53e26f6da34b4069cee278a9020_prof);

        
        $__internal_ced9af8ff239f64c1363664ab0d4ddb64d26b954f14bc80ce89fdecd5f51436d->leave($__internal_ced9af8ff239f64c1363664ab0d4ddb64d26b954f14bc80ce89fdecd5f51436d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
