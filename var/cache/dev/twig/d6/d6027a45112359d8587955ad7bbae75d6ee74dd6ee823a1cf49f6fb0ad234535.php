<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d1dfbc545999c961ea51c4573e762c043572812bf8db887f2229c0de9a3ca07a extends Twig_Template
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
        $__internal_41cbbd5f4dce7ca3ee44e50099e7f2c317b8b0d4cc12dda8c0515772f2d18d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41cbbd5f4dce7ca3ee44e50099e7f2c317b8b0d4cc12dda8c0515772f2d18d15->enter($__internal_41cbbd5f4dce7ca3ee44e50099e7f2c317b8b0d4cc12dda8c0515772f2d18d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_310f4a5bb8a09350ecd03bd1e8248fda34caa63574ce2ef10f11700843c01437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_310f4a5bb8a09350ecd03bd1e8248fda34caa63574ce2ef10f11700843c01437->enter($__internal_310f4a5bb8a09350ecd03bd1e8248fda34caa63574ce2ef10f11700843c01437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_41cbbd5f4dce7ca3ee44e50099e7f2c317b8b0d4cc12dda8c0515772f2d18d15->leave($__internal_41cbbd5f4dce7ca3ee44e50099e7f2c317b8b0d4cc12dda8c0515772f2d18d15_prof);

        
        $__internal_310f4a5bb8a09350ecd03bd1e8248fda34caa63574ce2ef10f11700843c01437->leave($__internal_310f4a5bb8a09350ecd03bd1e8248fda34caa63574ce2ef10f11700843c01437_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
