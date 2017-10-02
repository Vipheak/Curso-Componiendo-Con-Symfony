<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_0ab1922771524e0e5ef4e9c1568f7d5dad968f30962917eca047a0363bf0add3 extends Twig_Template
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
        $__internal_cbcd96bd9e26d75bd7f25b93070931798d85b62def1ba23158aac811094a2fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbcd96bd9e26d75bd7f25b93070931798d85b62def1ba23158aac811094a2fcc->enter($__internal_cbcd96bd9e26d75bd7f25b93070931798d85b62def1ba23158aac811094a2fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_2958ec08fe280473fda10daa00b4c409cd2af2f8391fb524442e6b3a7b705e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2958ec08fe280473fda10daa00b4c409cd2af2f8391fb524442e6b3a7b705e32->enter($__internal_2958ec08fe280473fda10daa00b4c409cd2af2f8391fb524442e6b3a7b705e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_cbcd96bd9e26d75bd7f25b93070931798d85b62def1ba23158aac811094a2fcc->leave($__internal_cbcd96bd9e26d75bd7f25b93070931798d85b62def1ba23158aac811094a2fcc_prof);

        
        $__internal_2958ec08fe280473fda10daa00b4c409cd2af2f8391fb524442e6b3a7b705e32->leave($__internal_2958ec08fe280473fda10daa00b4c409cd2af2f8391fb524442e6b3a7b705e32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
