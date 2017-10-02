<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6d6c06b96e364367f395c82483451daac5fae51592a7cdd84884e1d19a39a9a5 extends Twig_Template
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
        $__internal_5c238747f1a23dd96911b8776f4f0325a2004757356da8be5f5c159dff6780ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c238747f1a23dd96911b8776f4f0325a2004757356da8be5f5c159dff6780ed->enter($__internal_5c238747f1a23dd96911b8776f4f0325a2004757356da8be5f5c159dff6780ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_c3c948dae52d47127ce5cc510d71ecf52e5b7048359c16c41cc27ae89d5bd96b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c948dae52d47127ce5cc510d71ecf52e5b7048359c16c41cc27ae89d5bd96b->enter($__internal_c3c948dae52d47127ce5cc510d71ecf52e5b7048359c16c41cc27ae89d5bd96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5c238747f1a23dd96911b8776f4f0325a2004757356da8be5f5c159dff6780ed->leave($__internal_5c238747f1a23dd96911b8776f4f0325a2004757356da8be5f5c159dff6780ed_prof);

        
        $__internal_c3c948dae52d47127ce5cc510d71ecf52e5b7048359c16c41cc27ae89d5bd96b->leave($__internal_c3c948dae52d47127ce5cc510d71ecf52e5b7048359c16c41cc27ae89d5bd96b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
