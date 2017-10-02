<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2a84195f80aa6238e7cf8df97bc1765a89e796fd7a9b56905858e4c316871b2b extends Twig_Template
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
        $__internal_c47b862ee691bfd6e245654811804bf830e8fdc2cad8d206c43efe5009e59382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c47b862ee691bfd6e245654811804bf830e8fdc2cad8d206c43efe5009e59382->enter($__internal_c47b862ee691bfd6e245654811804bf830e8fdc2cad8d206c43efe5009e59382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_fbeff8411eac34b8e76d2f662d1d5f291539b7c9361c1f701111ba05f7f149ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbeff8411eac34b8e76d2f662d1d5f291539b7c9361c1f701111ba05f7f149ae->enter($__internal_fbeff8411eac34b8e76d2f662d1d5f291539b7c9361c1f701111ba05f7f149ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c47b862ee691bfd6e245654811804bf830e8fdc2cad8d206c43efe5009e59382->leave($__internal_c47b862ee691bfd6e245654811804bf830e8fdc2cad8d206c43efe5009e59382_prof);

        
        $__internal_fbeff8411eac34b8e76d2f662d1d5f291539b7c9361c1f701111ba05f7f149ae->leave($__internal_fbeff8411eac34b8e76d2f662d1d5f291539b7c9361c1f701111ba05f7f149ae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
