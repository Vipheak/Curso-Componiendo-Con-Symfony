<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f2061152e22b3b2391859ea642e0d745ff39c7846225ac74f8dcde9a43603dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_068758524193a1a01b16679268c3b0de758e848c1e2f88d60b63a76daf0f7a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068758524193a1a01b16679268c3b0de758e848c1e2f88d60b63a76daf0f7a05->enter($__internal_068758524193a1a01b16679268c3b0de758e848c1e2f88d60b63a76daf0f7a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_c70dee44ca2a725618a4c7a745fd5e63b3312d25b1bd50a253beaa5a518bf251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70dee44ca2a725618a4c7a745fd5e63b3312d25b1bd50a253beaa5a518bf251->enter($__internal_c70dee44ca2a725618a4c7a745fd5e63b3312d25b1bd50a253beaa5a518bf251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_068758524193a1a01b16679268c3b0de758e848c1e2f88d60b63a76daf0f7a05->leave($__internal_068758524193a1a01b16679268c3b0de758e848c1e2f88d60b63a76daf0f7a05_prof);

        
        $__internal_c70dee44ca2a725618a4c7a745fd5e63b3312d25b1bd50a253beaa5a518bf251->leave($__internal_c70dee44ca2a725618a4c7a745fd5e63b3312d25b1bd50a253beaa5a518bf251_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_68de8f6a056ae004d8eede293c4c697f68571724bba5287f9c0543ae8fee6764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68de8f6a056ae004d8eede293c4c697f68571724bba5287f9c0543ae8fee6764->enter($__internal_68de8f6a056ae004d8eede293c4c697f68571724bba5287f9c0543ae8fee6764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f74112a783bc7ed893b1e6e4c21c37999052940160911b7840af652369177f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74112a783bc7ed893b1e6e4c21c37999052940160911b7840af652369177f2f->enter($__internal_f74112a783bc7ed893b1e6e4c21c37999052940160911b7840af652369177f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f74112a783bc7ed893b1e6e4c21c37999052940160911b7840af652369177f2f->leave($__internal_f74112a783bc7ed893b1e6e4c21c37999052940160911b7840af652369177f2f_prof);

        
        $__internal_68de8f6a056ae004d8eede293c4c697f68571724bba5287f9c0543ae8fee6764->leave($__internal_68de8f6a056ae004d8eede293c4c697f68571724bba5287f9c0543ae8fee6764_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9ccee838d2f3d146a9abd66e77dbf06ecbf4d201267cdd2179f23ca8c289f39a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ccee838d2f3d146a9abd66e77dbf06ecbf4d201267cdd2179f23ca8c289f39a->enter($__internal_9ccee838d2f3d146a9abd66e77dbf06ecbf4d201267cdd2179f23ca8c289f39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f224aaa32f5f0d1a50bdaf3273014a168bb82a19b3bc7f328864d0cd3780ae90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f224aaa32f5f0d1a50bdaf3273014a168bb82a19b3bc7f328864d0cd3780ae90->enter($__internal_f224aaa32f5f0d1a50bdaf3273014a168bb82a19b3bc7f328864d0cd3780ae90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f224aaa32f5f0d1a50bdaf3273014a168bb82a19b3bc7f328864d0cd3780ae90->leave($__internal_f224aaa32f5f0d1a50bdaf3273014a168bb82a19b3bc7f328864d0cd3780ae90_prof);

        
        $__internal_9ccee838d2f3d146a9abd66e77dbf06ecbf4d201267cdd2179f23ca8c289f39a->leave($__internal_9ccee838d2f3d146a9abd66e77dbf06ecbf4d201267cdd2179f23ca8c289f39a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e3dee56338b3df569f6c25a4c72066d34da4b5bc55e1cd9504279e9046f9c6cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3dee56338b3df569f6c25a4c72066d34da4b5bc55e1cd9504279e9046f9c6cc->enter($__internal_e3dee56338b3df569f6c25a4c72066d34da4b5bc55e1cd9504279e9046f9c6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f654aae68b48537664f4cef43019e012783b0fef306e150ec61b60635a46eef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f654aae68b48537664f4cef43019e012783b0fef306e150ec61b60635a46eef6->enter($__internal_f654aae68b48537664f4cef43019e012783b0fef306e150ec61b60635a46eef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f654aae68b48537664f4cef43019e012783b0fef306e150ec61b60635a46eef6->leave($__internal_f654aae68b48537664f4cef43019e012783b0fef306e150ec61b60635a46eef6_prof);

        
        $__internal_e3dee56338b3df569f6c25a4c72066d34da4b5bc55e1cd9504279e9046f9c6cc->leave($__internal_e3dee56338b3df569f6c25a4c72066d34da4b5bc55e1cd9504279e9046f9c6cc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
