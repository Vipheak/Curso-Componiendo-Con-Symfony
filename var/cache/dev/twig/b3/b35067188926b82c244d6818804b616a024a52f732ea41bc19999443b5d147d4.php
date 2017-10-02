<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_12ceef6175538e89135020ff8cfbd7ecffadfea54fc0de7930b6cc798711c3a9 extends Twig_Template
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
        $__internal_9abea8af7383dc2ba968d4b527e9809bfbbf0e8f6f6f8e741845d1fecd4db5d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9abea8af7383dc2ba968d4b527e9809bfbbf0e8f6f6f8e741845d1fecd4db5d0->enter($__internal_9abea8af7383dc2ba968d4b527e9809bfbbf0e8f6f6f8e741845d1fecd4db5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_67cd2cd5c50b6d1d862c2b113de4e280347fc5e6eac5f4b431d8ba265a9290c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67cd2cd5c50b6d1d862c2b113de4e280347fc5e6eac5f4b431d8ba265a9290c5->enter($__internal_67cd2cd5c50b6d1d862c2b113de4e280347fc5e6eac5f4b431d8ba265a9290c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9abea8af7383dc2ba968d4b527e9809bfbbf0e8f6f6f8e741845d1fecd4db5d0->leave($__internal_9abea8af7383dc2ba968d4b527e9809bfbbf0e8f6f6f8e741845d1fecd4db5d0_prof);

        
        $__internal_67cd2cd5c50b6d1d862c2b113de4e280347fc5e6eac5f4b431d8ba265a9290c5->leave($__internal_67cd2cd5c50b6d1d862c2b113de4e280347fc5e6eac5f4b431d8ba265a9290c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
