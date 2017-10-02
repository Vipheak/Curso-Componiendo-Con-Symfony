<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_69a85e0faeb202fdc80d16685991e6004823954fd1e5ed4efc384fb53cb8c638 extends Twig_Template
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
        $__internal_a875b25176cd04e0e801dba6e679e79bf6cf2ac191d26de4c29dcfda6ca29fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a875b25176cd04e0e801dba6e679e79bf6cf2ac191d26de4c29dcfda6ca29fb2->enter($__internal_a875b25176cd04e0e801dba6e679e79bf6cf2ac191d26de4c29dcfda6ca29fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_179a126311c9c4e5f2cbed38ed19e9cf64cfaac989a6b5907e74652e6f3a2097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179a126311c9c4e5f2cbed38ed19e9cf64cfaac989a6b5907e74652e6f3a2097->enter($__internal_179a126311c9c4e5f2cbed38ed19e9cf64cfaac989a6b5907e74652e6f3a2097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a875b25176cd04e0e801dba6e679e79bf6cf2ac191d26de4c29dcfda6ca29fb2->leave($__internal_a875b25176cd04e0e801dba6e679e79bf6cf2ac191d26de4c29dcfda6ca29fb2_prof);

        
        $__internal_179a126311c9c4e5f2cbed38ed19e9cf64cfaac989a6b5907e74652e6f3a2097->leave($__internal_179a126311c9c4e5f2cbed38ed19e9cf64cfaac989a6b5907e74652e6f3a2097_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
