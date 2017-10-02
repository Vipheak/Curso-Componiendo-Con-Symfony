<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9d2db4aa88294e90511aa975433307a98c1fc840227b51864347e2d33ee6f72e extends Twig_Template
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
        $__internal_5fd470680f9f3bdad9cdd8fe05ff05b319d95ac2289694db957c2c10fe03fa65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd470680f9f3bdad9cdd8fe05ff05b319d95ac2289694db957c2c10fe03fa65->enter($__internal_5fd470680f9f3bdad9cdd8fe05ff05b319d95ac2289694db957c2c10fe03fa65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d2ad2a30f8cda558c894e589de12fbcd77b0bcd4ac03119103db0c890277484d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ad2a30f8cda558c894e589de12fbcd77b0bcd4ac03119103db0c890277484d->enter($__internal_d2ad2a30f8cda558c894e589de12fbcd77b0bcd4ac03119103db0c890277484d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5fd470680f9f3bdad9cdd8fe05ff05b319d95ac2289694db957c2c10fe03fa65->leave($__internal_5fd470680f9f3bdad9cdd8fe05ff05b319d95ac2289694db957c2c10fe03fa65_prof);

        
        $__internal_d2ad2a30f8cda558c894e589de12fbcd77b0bcd4ac03119103db0c890277484d->leave($__internal_d2ad2a30f8cda558c894e589de12fbcd77b0bcd4ac03119103db0c890277484d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
