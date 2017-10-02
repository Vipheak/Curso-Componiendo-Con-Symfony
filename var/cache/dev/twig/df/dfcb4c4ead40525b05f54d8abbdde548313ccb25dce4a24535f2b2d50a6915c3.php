<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_773856ec5765f2af18de8d4e66250af78ef7a69794f5beba82d76d1d259e9ee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_17c52b20192a773ca3f0ee66c56c517febb93722a62a7a96b742dc308e5f3df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c52b20192a773ca3f0ee66c56c517febb93722a62a7a96b742dc308e5f3df3->enter($__internal_17c52b20192a773ca3f0ee66c56c517febb93722a62a7a96b742dc308e5f3df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8c711b3f2166d3533192b47f9a1b018f0502f60cbae9d11d1e2a914a5ad78202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c711b3f2166d3533192b47f9a1b018f0502f60cbae9d11d1e2a914a5ad78202->enter($__internal_8c711b3f2166d3533192b47f9a1b018f0502f60cbae9d11d1e2a914a5ad78202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17c52b20192a773ca3f0ee66c56c517febb93722a62a7a96b742dc308e5f3df3->leave($__internal_17c52b20192a773ca3f0ee66c56c517febb93722a62a7a96b742dc308e5f3df3_prof);

        
        $__internal_8c711b3f2166d3533192b47f9a1b018f0502f60cbae9d11d1e2a914a5ad78202->leave($__internal_8c711b3f2166d3533192b47f9a1b018f0502f60cbae9d11d1e2a914a5ad78202_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b13dfc748ca75513f79dddd30e46be2b1e1eb642221c3b08f69db35eed23fbea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13dfc748ca75513f79dddd30e46be2b1e1eb642221c3b08f69db35eed23fbea->enter($__internal_b13dfc748ca75513f79dddd30e46be2b1e1eb642221c3b08f69db35eed23fbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fce8bc26888612c81659afd0c28b56c170695e0dc74c4fae3c5281803d3a513b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce8bc26888612c81659afd0c28b56c170695e0dc74c4fae3c5281803d3a513b->enter($__internal_fce8bc26888612c81659afd0c28b56c170695e0dc74c4fae3c5281803d3a513b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fce8bc26888612c81659afd0c28b56c170695e0dc74c4fae3c5281803d3a513b->leave($__internal_fce8bc26888612c81659afd0c28b56c170695e0dc74c4fae3c5281803d3a513b_prof);

        
        $__internal_b13dfc748ca75513f79dddd30e46be2b1e1eb642221c3b08f69db35eed23fbea->leave($__internal_b13dfc748ca75513f79dddd30e46be2b1e1eb642221c3b08f69db35eed23fbea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81cd7220baac6f198e4b5ead41a9f0856a4206176db209a74fb5aaae1ceed404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81cd7220baac6f198e4b5ead41a9f0856a4206176db209a74fb5aaae1ceed404->enter($__internal_81cd7220baac6f198e4b5ead41a9f0856a4206176db209a74fb5aaae1ceed404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_368a69b03a231be889096de09e1318f20f63e5aa597ff8cf659585a2aac2a4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368a69b03a231be889096de09e1318f20f63e5aa597ff8cf659585a2aac2a4ca->enter($__internal_368a69b03a231be889096de09e1318f20f63e5aa597ff8cf659585a2aac2a4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_368a69b03a231be889096de09e1318f20f63e5aa597ff8cf659585a2aac2a4ca->leave($__internal_368a69b03a231be889096de09e1318f20f63e5aa597ff8cf659585a2aac2a4ca_prof);

        
        $__internal_81cd7220baac6f198e4b5ead41a9f0856a4206176db209a74fb5aaae1ceed404->leave($__internal_81cd7220baac6f198e4b5ead41a9f0856a4206176db209a74fb5aaae1ceed404_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_15afb8790994243dec9bc16ab3820ab64e27ac3ae8e31e742e6cc94375b72abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15afb8790994243dec9bc16ab3820ab64e27ac3ae8e31e742e6cc94375b72abf->enter($__internal_15afb8790994243dec9bc16ab3820ab64e27ac3ae8e31e742e6cc94375b72abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8652ef95a825ee7c51cfaeccfe45fd7bd59a9634d8148a4d4928705f3b1c7260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8652ef95a825ee7c51cfaeccfe45fd7bd59a9634d8148a4d4928705f3b1c7260->enter($__internal_8652ef95a825ee7c51cfaeccfe45fd7bd59a9634d8148a4d4928705f3b1c7260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8652ef95a825ee7c51cfaeccfe45fd7bd59a9634d8148a4d4928705f3b1c7260->leave($__internal_8652ef95a825ee7c51cfaeccfe45fd7bd59a9634d8148a4d4928705f3b1c7260_prof);

        
        $__internal_15afb8790994243dec9bc16ab3820ab64e27ac3ae8e31e742e6cc94375b72abf->leave($__internal_15afb8790994243dec9bc16ab3820ab64e27ac3ae8e31e742e6cc94375b72abf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
