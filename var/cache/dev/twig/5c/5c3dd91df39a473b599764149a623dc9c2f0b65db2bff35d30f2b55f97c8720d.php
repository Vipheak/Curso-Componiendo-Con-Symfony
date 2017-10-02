<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_004ed2c035a0936893d03c557d3f66e4ffb22ea4677e43bb1b574f1910da27c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2139bde432b7312efe05a2de36adc11ecb2f87f1ca3752b76375d945f07533ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2139bde432b7312efe05a2de36adc11ecb2f87f1ca3752b76375d945f07533ff->enter($__internal_2139bde432b7312efe05a2de36adc11ecb2f87f1ca3752b76375d945f07533ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_1e824f1021ec87c048d733e8c115e91d88c97e3c2b294e494caa8512f1535167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e824f1021ec87c048d733e8c115e91d88c97e3c2b294e494caa8512f1535167->enter($__internal_1e824f1021ec87c048d733e8c115e91d88c97e3c2b294e494caa8512f1535167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2139bde432b7312efe05a2de36adc11ecb2f87f1ca3752b76375d945f07533ff->leave($__internal_2139bde432b7312efe05a2de36adc11ecb2f87f1ca3752b76375d945f07533ff_prof);

        
        $__internal_1e824f1021ec87c048d733e8c115e91d88c97e3c2b294e494caa8512f1535167->leave($__internal_1e824f1021ec87c048d733e8c115e91d88c97e3c2b294e494caa8512f1535167_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0f09cbd97d7a58594a5eaff60090648db6d736e6bd26de70aab4c5f0c2f58d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f09cbd97d7a58594a5eaff60090648db6d736e6bd26de70aab4c5f0c2f58d8->enter($__internal_b0f09cbd97d7a58594a5eaff60090648db6d736e6bd26de70aab4c5f0c2f58d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f88136514608f4403a0fc880601d5015579ac199471b1fe56811e936722b8a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88136514608f4403a0fc880601d5015579ac199471b1fe56811e936722b8a3b->enter($__internal_f88136514608f4403a0fc880601d5015579ac199471b1fe56811e936722b8a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f88136514608f4403a0fc880601d5015579ac199471b1fe56811e936722b8a3b->leave($__internal_f88136514608f4403a0fc880601d5015579ac199471b1fe56811e936722b8a3b_prof);

        
        $__internal_b0f09cbd97d7a58594a5eaff60090648db6d736e6bd26de70aab4c5f0c2f58d8->leave($__internal_b0f09cbd97d7a58594a5eaff60090648db6d736e6bd26de70aab4c5f0c2f58d8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eadef6dc8996435506e12fc8a95c0a4fb6aca07811bf6a6b69c54b56c23294a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eadef6dc8996435506e12fc8a95c0a4fb6aca07811bf6a6b69c54b56c23294a7->enter($__internal_eadef6dc8996435506e12fc8a95c0a4fb6aca07811bf6a6b69c54b56c23294a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b45f071172f1dfbae63d9d5367b7d37a3541239c296a933cfb9cff1cc549aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b45f071172f1dfbae63d9d5367b7d37a3541239c296a933cfb9cff1cc549aa1->enter($__internal_1b45f071172f1dfbae63d9d5367b7d37a3541239c296a933cfb9cff1cc549aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1b45f071172f1dfbae63d9d5367b7d37a3541239c296a933cfb9cff1cc549aa1->leave($__internal_1b45f071172f1dfbae63d9d5367b7d37a3541239c296a933cfb9cff1cc549aa1_prof);

        
        $__internal_eadef6dc8996435506e12fc8a95c0a4fb6aca07811bf6a6b69c54b56c23294a7->leave($__internal_eadef6dc8996435506e12fc8a95c0a4fb6aca07811bf6a6b69c54b56c23294a7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
