<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_318816ca07eee82e6969e1299dd2c3bc57c76f2be658898ca129199b24b1f7a6 extends Twig_Template
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
        $__internal_a4433cdfdb56b78436db81b5c7474ad2817ad3ccaef7662476237a8e5d705600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4433cdfdb56b78436db81b5c7474ad2817ad3ccaef7662476237a8e5d705600->enter($__internal_a4433cdfdb56b78436db81b5c7474ad2817ad3ccaef7662476237a8e5d705600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_2d65e1bc8382aff10d0b106caf859371edd4ca283dd3b61c7becf3f39a1ff2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d65e1bc8382aff10d0b106caf859371edd4ca283dd3b61c7becf3f39a1ff2b0->enter($__internal_2d65e1bc8382aff10d0b106caf859371edd4ca283dd3b61c7becf3f39a1ff2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a4433cdfdb56b78436db81b5c7474ad2817ad3ccaef7662476237a8e5d705600->leave($__internal_a4433cdfdb56b78436db81b5c7474ad2817ad3ccaef7662476237a8e5d705600_prof);

        
        $__internal_2d65e1bc8382aff10d0b106caf859371edd4ca283dd3b61c7becf3f39a1ff2b0->leave($__internal_2d65e1bc8382aff10d0b106caf859371edd4ca283dd3b61c7becf3f39a1ff2b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
