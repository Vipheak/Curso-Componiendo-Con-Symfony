<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bc002d44418fb8c0d656c09dc978a8bb939752af74fb4075f3ebda5498ebbe2f extends Twig_Template
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
        $__internal_ee9674853c4bde237abbeaa88e68d2266592b20e807346d14607f6decff51adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9674853c4bde237abbeaa88e68d2266592b20e807346d14607f6decff51adb->enter($__internal_ee9674853c4bde237abbeaa88e68d2266592b20e807346d14607f6decff51adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_7da2f3251a3604568f1029ecf7169fbe82849ad5b4fc2d3be06c3c28b621feaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da2f3251a3604568f1029ecf7169fbe82849ad5b4fc2d3be06c3c28b621feaa->enter($__internal_7da2f3251a3604568f1029ecf7169fbe82849ad5b4fc2d3be06c3c28b621feaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_ee9674853c4bde237abbeaa88e68d2266592b20e807346d14607f6decff51adb->leave($__internal_ee9674853c4bde237abbeaa88e68d2266592b20e807346d14607f6decff51adb_prof);

        
        $__internal_7da2f3251a3604568f1029ecf7169fbe82849ad5b4fc2d3be06c3c28b621feaa->leave($__internal_7da2f3251a3604568f1029ecf7169fbe82849ad5b4fc2d3be06c3c28b621feaa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
