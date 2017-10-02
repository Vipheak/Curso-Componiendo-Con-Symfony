<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6e7a8411032a9e7fc9fee18ab0fb54b26cfafc0b52b476d6a1e159fc6277a230 extends Twig_Template
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
        $__internal_4b2ade82f11a8716af47063e63e498688e725c9f06d1e2159f49ac98fbde909c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b2ade82f11a8716af47063e63e498688e725c9f06d1e2159f49ac98fbde909c->enter($__internal_4b2ade82f11a8716af47063e63e498688e725c9f06d1e2159f49ac98fbde909c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a0e277b78e8fdc7bae02ae793942a5ab5a33552db194a1a3b83fe919c6ffa848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e277b78e8fdc7bae02ae793942a5ab5a33552db194a1a3b83fe919c6ffa848->enter($__internal_a0e277b78e8fdc7bae02ae793942a5ab5a33552db194a1a3b83fe919c6ffa848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4b2ade82f11a8716af47063e63e498688e725c9f06d1e2159f49ac98fbde909c->leave($__internal_4b2ade82f11a8716af47063e63e498688e725c9f06d1e2159f49ac98fbde909c_prof);

        
        $__internal_a0e277b78e8fdc7bae02ae793942a5ab5a33552db194a1a3b83fe919c6ffa848->leave($__internal_a0e277b78e8fdc7bae02ae793942a5ab5a33552db194a1a3b83fe919c6ffa848_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
