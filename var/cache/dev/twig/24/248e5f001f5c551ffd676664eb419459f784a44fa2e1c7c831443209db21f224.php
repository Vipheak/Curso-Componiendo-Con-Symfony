<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_753e4a9e5e0c8c34fb97e716b33d9bfd20eb0cd544457124ed4a676c24dda39c extends Twig_Template
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
        $__internal_005bd1e42d2d7f9620d7a9c1745da4822cc9b83c8083b1359df4dfe5ac0febb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_005bd1e42d2d7f9620d7a9c1745da4822cc9b83c8083b1359df4dfe5ac0febb2->enter($__internal_005bd1e42d2d7f9620d7a9c1745da4822cc9b83c8083b1359df4dfe5ac0febb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_3f41864bd59d2a6955c8f700e078d9e88eb5f8d18e1a9bb1f0b25e7c584f17f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f41864bd59d2a6955c8f700e078d9e88eb5f8d18e1a9bb1f0b25e7c584f17f7->enter($__internal_3f41864bd59d2a6955c8f700e078d9e88eb5f8d18e1a9bb1f0b25e7c584f17f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_005bd1e42d2d7f9620d7a9c1745da4822cc9b83c8083b1359df4dfe5ac0febb2->leave($__internal_005bd1e42d2d7f9620d7a9c1745da4822cc9b83c8083b1359df4dfe5ac0febb2_prof);

        
        $__internal_3f41864bd59d2a6955c8f700e078d9e88eb5f8d18e1a9bb1f0b25e7c584f17f7->leave($__internal_3f41864bd59d2a6955c8f700e078d9e88eb5f8d18e1a9bb1f0b25e7c584f17f7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
