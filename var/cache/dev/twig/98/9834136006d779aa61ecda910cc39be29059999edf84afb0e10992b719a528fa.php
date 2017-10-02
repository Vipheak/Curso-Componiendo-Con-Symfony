<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09886c37796d81d574b2448cf2a22ea32da8dad546b69f22c376ce19a869ce97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_566f86d1e47e60489f165d9d8791d506565e19e6d61d64b5f0e5de9467c3ffb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566f86d1e47e60489f165d9d8791d506565e19e6d61d64b5f0e5de9467c3ffb5->enter($__internal_566f86d1e47e60489f165d9d8791d506565e19e6d61d64b5f0e5de9467c3ffb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6d6b8041228e548179f5ace6c42d631e9d7464ff51bbd5ab8629a126e644b284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6b8041228e548179f5ace6c42d631e9d7464ff51bbd5ab8629a126e644b284->enter($__internal_6d6b8041228e548179f5ace6c42d631e9d7464ff51bbd5ab8629a126e644b284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_566f86d1e47e60489f165d9d8791d506565e19e6d61d64b5f0e5de9467c3ffb5->leave($__internal_566f86d1e47e60489f165d9d8791d506565e19e6d61d64b5f0e5de9467c3ffb5_prof);

        
        $__internal_6d6b8041228e548179f5ace6c42d631e9d7464ff51bbd5ab8629a126e644b284->leave($__internal_6d6b8041228e548179f5ace6c42d631e9d7464ff51bbd5ab8629a126e644b284_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4115078d52c9b39a44a77d1fae0a9e3e2cd2c48afcabdc06adb27ef2831a5c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4115078d52c9b39a44a77d1fae0a9e3e2cd2c48afcabdc06adb27ef2831a5c00->enter($__internal_4115078d52c9b39a44a77d1fae0a9e3e2cd2c48afcabdc06adb27ef2831a5c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_06c0f4a346ab29caba4e9d77b6bd430798f66d753b04ba40c4fbd03f89aa0c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c0f4a346ab29caba4e9d77b6bd430798f66d753b04ba40c4fbd03f89aa0c16->enter($__internal_06c0f4a346ab29caba4e9d77b6bd430798f66d753b04ba40c4fbd03f89aa0c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_06c0f4a346ab29caba4e9d77b6bd430798f66d753b04ba40c4fbd03f89aa0c16->leave($__internal_06c0f4a346ab29caba4e9d77b6bd430798f66d753b04ba40c4fbd03f89aa0c16_prof);

        
        $__internal_4115078d52c9b39a44a77d1fae0a9e3e2cd2c48afcabdc06adb27ef2831a5c00->leave($__internal_4115078d52c9b39a44a77d1fae0a9e3e2cd2c48afcabdc06adb27ef2831a5c00_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_831c1469df9b68cd0ee66b59eaf75d80199c31c03db8dff6b80347bebfb3ac0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831c1469df9b68cd0ee66b59eaf75d80199c31c03db8dff6b80347bebfb3ac0f->enter($__internal_831c1469df9b68cd0ee66b59eaf75d80199c31c03db8dff6b80347bebfb3ac0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cb1aa535e4382a4c9dddb22d426c833df56ffa78689f664f27360729856b32fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1aa535e4382a4c9dddb22d426c833df56ffa78689f664f27360729856b32fb->enter($__internal_cb1aa535e4382a4c9dddb22d426c833df56ffa78689f664f27360729856b32fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cb1aa535e4382a4c9dddb22d426c833df56ffa78689f664f27360729856b32fb->leave($__internal_cb1aa535e4382a4c9dddb22d426c833df56ffa78689f664f27360729856b32fb_prof);

        
        $__internal_831c1469df9b68cd0ee66b59eaf75d80199c31c03db8dff6b80347bebfb3ac0f->leave($__internal_831c1469df9b68cd0ee66b59eaf75d80199c31c03db8dff6b80347bebfb3ac0f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2fd980b6a83278e0c0d9def7bbbd1eb36714681b70906afcd6a4bfd2c3d35bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2fd980b6a83278e0c0d9def7bbbd1eb36714681b70906afcd6a4bfd2c3d35bd->enter($__internal_a2fd980b6a83278e0c0d9def7bbbd1eb36714681b70906afcd6a4bfd2c3d35bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fc02cf08a96af0ec167cac6fa55c5bd4ecd1284af437c04c0ba136451fb9c6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc02cf08a96af0ec167cac6fa55c5bd4ecd1284af437c04c0ba136451fb9c6aa->enter($__internal_fc02cf08a96af0ec167cac6fa55c5bd4ecd1284af437c04c0ba136451fb9c6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fc02cf08a96af0ec167cac6fa55c5bd4ecd1284af437c04c0ba136451fb9c6aa->leave($__internal_fc02cf08a96af0ec167cac6fa55c5bd4ecd1284af437c04c0ba136451fb9c6aa_prof);

        
        $__internal_a2fd980b6a83278e0c0d9def7bbbd1eb36714681b70906afcd6a4bfd2c3d35bd->leave($__internal_a2fd980b6a83278e0c0d9def7bbbd1eb36714681b70906afcd6a4bfd2c3d35bd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
