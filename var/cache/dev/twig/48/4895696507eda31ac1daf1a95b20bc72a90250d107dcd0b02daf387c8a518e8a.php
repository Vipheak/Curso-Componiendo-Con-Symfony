<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a92cbbfa89cf4291d5cd0d4b349a43cb1b7e0e7cd48659c3f8735b3fe74d4a28 extends Twig_Template
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
        $__internal_244c3365f44de4df1b55aeb38fa63da39a916f58f8178d8633b4ad832efc2a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_244c3365f44de4df1b55aeb38fa63da39a916f58f8178d8633b4ad832efc2a3c->enter($__internal_244c3365f44de4df1b55aeb38fa63da39a916f58f8178d8633b4ad832efc2a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_fa0ce48311d84e8c277574f586929c71f1b9bf3b074ad11292905f42292488b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0ce48311d84e8c277574f586929c71f1b9bf3b074ad11292905f42292488b5->enter($__internal_fa0ce48311d84e8c277574f586929c71f1b9bf3b074ad11292905f42292488b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_244c3365f44de4df1b55aeb38fa63da39a916f58f8178d8633b4ad832efc2a3c->leave($__internal_244c3365f44de4df1b55aeb38fa63da39a916f58f8178d8633b4ad832efc2a3c_prof);

        
        $__internal_fa0ce48311d84e8c277574f586929c71f1b9bf3b074ad11292905f42292488b5->leave($__internal_fa0ce48311d84e8c277574f586929c71f1b9bf3b074ad11292905f42292488b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
