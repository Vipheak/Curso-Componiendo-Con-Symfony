<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4078abc49a60432fb79832f1dd40d9d6c6e110f57742a12ed28485a2e425418d extends Twig_Template
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
        $__internal_c4d92ee9445ae03d17cbed3a1e76888f581bef675937435e5208e8c6de573b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4d92ee9445ae03d17cbed3a1e76888f581bef675937435e5208e8c6de573b74->enter($__internal_c4d92ee9445ae03d17cbed3a1e76888f581bef675937435e5208e8c6de573b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_1fcd9b561962d8c8280c35a6e7bdc3d77afe4298327a0a79e7702912459fa21f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fcd9b561962d8c8280c35a6e7bdc3d77afe4298327a0a79e7702912459fa21f->enter($__internal_1fcd9b561962d8c8280c35a6e7bdc3d77afe4298327a0a79e7702912459fa21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c4d92ee9445ae03d17cbed3a1e76888f581bef675937435e5208e8c6de573b74->leave($__internal_c4d92ee9445ae03d17cbed3a1e76888f581bef675937435e5208e8c6de573b74_prof);

        
        $__internal_1fcd9b561962d8c8280c35a6e7bdc3d77afe4298327a0a79e7702912459fa21f->leave($__internal_1fcd9b561962d8c8280c35a6e7bdc3d77afe4298327a0a79e7702912459fa21f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
