<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_196fc751e8eff37053a59b16d65991cef582337b190b691419e76d75fd72247f extends Twig_Template
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
        $__internal_83aa1b84a0ace2eb055b07081a87ff92bfdde0631038796950b3f7cabc1cc6a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83aa1b84a0ace2eb055b07081a87ff92bfdde0631038796950b3f7cabc1cc6a4->enter($__internal_83aa1b84a0ace2eb055b07081a87ff92bfdde0631038796950b3f7cabc1cc6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_333a07ea29565fbcf3ae27a04e97b26d7e0dd9c745e1ef21f5b42eb01343e174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333a07ea29565fbcf3ae27a04e97b26d7e0dd9c745e1ef21f5b42eb01343e174->enter($__internal_333a07ea29565fbcf3ae27a04e97b26d7e0dd9c745e1ef21f5b42eb01343e174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_83aa1b84a0ace2eb055b07081a87ff92bfdde0631038796950b3f7cabc1cc6a4->leave($__internal_83aa1b84a0ace2eb055b07081a87ff92bfdde0631038796950b3f7cabc1cc6a4_prof);

        
        $__internal_333a07ea29565fbcf3ae27a04e97b26d7e0dd9c745e1ef21f5b42eb01343e174->leave($__internal_333a07ea29565fbcf3ae27a04e97b26d7e0dd9c745e1ef21f5b42eb01343e174_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
