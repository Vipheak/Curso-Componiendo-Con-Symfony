<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4ed3b32a2c8f1e1cb568fdee9d3edf3099294f4695be017a3bbb6b97b328ba4e extends Twig_Template
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
        $__internal_29494542613722227c7cbd8d750d9ffae3795e346ab3500d56cc46dc64283e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29494542613722227c7cbd8d750d9ffae3795e346ab3500d56cc46dc64283e24->enter($__internal_29494542613722227c7cbd8d750d9ffae3795e346ab3500d56cc46dc64283e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e0334a6bdbe549715850d8c8e2a58caa7a5b05313eb03a500df698dd0bf7cee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0334a6bdbe549715850d8c8e2a58caa7a5b05313eb03a500df698dd0bf7cee8->enter($__internal_e0334a6bdbe549715850d8c8e2a58caa7a5b05313eb03a500df698dd0bf7cee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_29494542613722227c7cbd8d750d9ffae3795e346ab3500d56cc46dc64283e24->leave($__internal_29494542613722227c7cbd8d750d9ffae3795e346ab3500d56cc46dc64283e24_prof);

        
        $__internal_e0334a6bdbe549715850d8c8e2a58caa7a5b05313eb03a500df698dd0bf7cee8->leave($__internal_e0334a6bdbe549715850d8c8e2a58caa7a5b05313eb03a500df698dd0bf7cee8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
