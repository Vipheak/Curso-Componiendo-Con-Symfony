<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f32ad73c9bc804e7d7685ce925e27ce9c7daa98efc0b9a8c89227d7076a75563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4ac95148d5b10c2d634c99ec035f14c717a202e31af1642aa538985fec204f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ac95148d5b10c2d634c99ec035f14c717a202e31af1642aa538985fec204f4->enter($__internal_a4ac95148d5b10c2d634c99ec035f14c717a202e31af1642aa538985fec204f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_140af49ec084f80def8345b4991a7bd9690fe5be7801a1b6eecf9b75459c8183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140af49ec084f80def8345b4991a7bd9690fe5be7801a1b6eecf9b75459c8183->enter($__internal_140af49ec084f80def8345b4991a7bd9690fe5be7801a1b6eecf9b75459c8183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4ac95148d5b10c2d634c99ec035f14c717a202e31af1642aa538985fec204f4->leave($__internal_a4ac95148d5b10c2d634c99ec035f14c717a202e31af1642aa538985fec204f4_prof);

        
        $__internal_140af49ec084f80def8345b4991a7bd9690fe5be7801a1b6eecf9b75459c8183->leave($__internal_140af49ec084f80def8345b4991a7bd9690fe5be7801a1b6eecf9b75459c8183_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6d382f178ce215124ec35d8ff700340952489ea0865ceae7100c31dc953f2fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d382f178ce215124ec35d8ff700340952489ea0865ceae7100c31dc953f2fc->enter($__internal_a6d382f178ce215124ec35d8ff700340952489ea0865ceae7100c31dc953f2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0bb2e55259fe0a938e40144f4abe95deed214a7999d030ad286ab0826b104534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb2e55259fe0a938e40144f4abe95deed214a7999d030ad286ab0826b104534->enter($__internal_0bb2e55259fe0a938e40144f4abe95deed214a7999d030ad286ab0826b104534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0bb2e55259fe0a938e40144f4abe95deed214a7999d030ad286ab0826b104534->leave($__internal_0bb2e55259fe0a938e40144f4abe95deed214a7999d030ad286ab0826b104534_prof);

        
        $__internal_a6d382f178ce215124ec35d8ff700340952489ea0865ceae7100c31dc953f2fc->leave($__internal_a6d382f178ce215124ec35d8ff700340952489ea0865ceae7100c31dc953f2fc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30e6c236e671bad7fd74bc12ef940da5b660a6c3fda1b4efdeb7eaa1c540ccd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e6c236e671bad7fd74bc12ef940da5b660a6c3fda1b4efdeb7eaa1c540ccd5->enter($__internal_30e6c236e671bad7fd74bc12ef940da5b660a6c3fda1b4efdeb7eaa1c540ccd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_311360bc0045b5d440a328ea6152d53e2384b79330e0d55fb63340a553772131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311360bc0045b5d440a328ea6152d53e2384b79330e0d55fb63340a553772131->enter($__internal_311360bc0045b5d440a328ea6152d53e2384b79330e0d55fb63340a553772131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_311360bc0045b5d440a328ea6152d53e2384b79330e0d55fb63340a553772131->leave($__internal_311360bc0045b5d440a328ea6152d53e2384b79330e0d55fb63340a553772131_prof);

        
        $__internal_30e6c236e671bad7fd74bc12ef940da5b660a6c3fda1b4efdeb7eaa1c540ccd5->leave($__internal_30e6c236e671bad7fd74bc12ef940da5b660a6c3fda1b4efdeb7eaa1c540ccd5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56b186462944e71e166d7ec485a50d56270f3e472bfd2c3a9a4c8c93155fe618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b186462944e71e166d7ec485a50d56270f3e472bfd2c3a9a4c8c93155fe618->enter($__internal_56b186462944e71e166d7ec485a50d56270f3e472bfd2c3a9a4c8c93155fe618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_31b46bd67241cf41f1c540f1ddc7b2c5fa60f18de3dac3da77c770e7c066de6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b46bd67241cf41f1c540f1ddc7b2c5fa60f18de3dac3da77c770e7c066de6d->enter($__internal_31b46bd67241cf41f1c540f1ddc7b2c5fa60f18de3dac3da77c770e7c066de6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_31b46bd67241cf41f1c540f1ddc7b2c5fa60f18de3dac3da77c770e7c066de6d->leave($__internal_31b46bd67241cf41f1c540f1ddc7b2c5fa60f18de3dac3da77c770e7c066de6d_prof);

        
        $__internal_56b186462944e71e166d7ec485a50d56270f3e472bfd2c3a9a4c8c93155fe618->leave($__internal_56b186462944e71e166d7ec485a50d56270f3e472bfd2c3a9a4c8c93155fe618_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
