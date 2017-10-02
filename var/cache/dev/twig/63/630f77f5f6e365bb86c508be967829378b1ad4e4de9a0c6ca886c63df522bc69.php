<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a508d1d3a1c75649f70630d4fa437adcc7b1206c6d649d5601803631cc904672 extends Twig_Template
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
        $__internal_135be1a03534d7edcfea86ba2c775f61de00d908f230066c868ff022b7c3ac7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_135be1a03534d7edcfea86ba2c775f61de00d908f230066c868ff022b7c3ac7f->enter($__internal_135be1a03534d7edcfea86ba2c775f61de00d908f230066c868ff022b7c3ac7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_4f7650c2b20864bf8d3f531ccccf24d0ce6b351a9bc946b653a343500f8d48ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7650c2b20864bf8d3f531ccccf24d0ce6b351a9bc946b653a343500f8d48ec->enter($__internal_4f7650c2b20864bf8d3f531ccccf24d0ce6b351a9bc946b653a343500f8d48ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_135be1a03534d7edcfea86ba2c775f61de00d908f230066c868ff022b7c3ac7f->leave($__internal_135be1a03534d7edcfea86ba2c775f61de00d908f230066c868ff022b7c3ac7f_prof);

        
        $__internal_4f7650c2b20864bf8d3f531ccccf24d0ce6b351a9bc946b653a343500f8d48ec->leave($__internal_4f7650c2b20864bf8d3f531ccccf24d0ce6b351a9bc946b653a343500f8d48ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
