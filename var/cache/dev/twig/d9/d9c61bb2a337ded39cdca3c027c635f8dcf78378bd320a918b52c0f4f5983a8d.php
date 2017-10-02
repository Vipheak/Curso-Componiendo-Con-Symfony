<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2e228051c03e77a1b82ee3800c4acabc8fe02ca2c249317a943d16608030b111 extends Twig_Template
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
        $__internal_b0535bf6de06cc88a4c58f474c1f2db4efeaccd688e81877e0231db6e291d7ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0535bf6de06cc88a4c58f474c1f2db4efeaccd688e81877e0231db6e291d7ae->enter($__internal_b0535bf6de06cc88a4c58f474c1f2db4efeaccd688e81877e0231db6e291d7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_510c158661fc0a8045ef5e366c3e3670994cf34b78897ccac5f3426465cf7a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510c158661fc0a8045ef5e366c3e3670994cf34b78897ccac5f3426465cf7a82->enter($__internal_510c158661fc0a8045ef5e366c3e3670994cf34b78897ccac5f3426465cf7a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b0535bf6de06cc88a4c58f474c1f2db4efeaccd688e81877e0231db6e291d7ae->leave($__internal_b0535bf6de06cc88a4c58f474c1f2db4efeaccd688e81877e0231db6e291d7ae_prof);

        
        $__internal_510c158661fc0a8045ef5e366c3e3670994cf34b78897ccac5f3426465cf7a82->leave($__internal_510c158661fc0a8045ef5e366c3e3670994cf34b78897ccac5f3426465cf7a82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
