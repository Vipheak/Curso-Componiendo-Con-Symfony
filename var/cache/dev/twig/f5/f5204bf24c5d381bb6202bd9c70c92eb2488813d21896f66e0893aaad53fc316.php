<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_34511abbf5bb8676f8ba8b0b98e2fa3507e90d4c46868d8967d90403c8bdfc0e extends Twig_Template
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
        $__internal_a50bb0ae3609716c31f7835a5f4b76106ad045425a3da0ef4415249ea95eae7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50bb0ae3609716c31f7835a5f4b76106ad045425a3da0ef4415249ea95eae7c->enter($__internal_a50bb0ae3609716c31f7835a5f4b76106ad045425a3da0ef4415249ea95eae7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_9e983e24d69d98fc8c0e224b83dbd4c2c3d8d141ce235682d4f7d9f91e91108d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e983e24d69d98fc8c0e224b83dbd4c2c3d8d141ce235682d4f7d9f91e91108d->enter($__internal_9e983e24d69d98fc8c0e224b83dbd4c2c3d8d141ce235682d4f7d9f91e91108d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a50bb0ae3609716c31f7835a5f4b76106ad045425a3da0ef4415249ea95eae7c->leave($__internal_a50bb0ae3609716c31f7835a5f4b76106ad045425a3da0ef4415249ea95eae7c_prof);

        
        $__internal_9e983e24d69d98fc8c0e224b83dbd4c2c3d8d141ce235682d4f7d9f91e91108d->leave($__internal_9e983e24d69d98fc8c0e224b83dbd4c2c3d8d141ce235682d4f7d9f91e91108d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
