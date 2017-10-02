<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4b7edc73be1df84354e2b6fcc211065fce6f5b9fedf694944c129d535991b375 extends Twig_Template
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
        $__internal_e0c1616540b679d0d86e3b51fa85966e2d310995b719ac2f9762dd017824c1fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c1616540b679d0d86e3b51fa85966e2d310995b719ac2f9762dd017824c1fa->enter($__internal_e0c1616540b679d0d86e3b51fa85966e2d310995b719ac2f9762dd017824c1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4eb86912a4e6473e96ab4441d128a73428f363611c3e43fda24368faf48ddeac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb86912a4e6473e96ab4441d128a73428f363611c3e43fda24368faf48ddeac->enter($__internal_4eb86912a4e6473e96ab4441d128a73428f363611c3e43fda24368faf48ddeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e0c1616540b679d0d86e3b51fa85966e2d310995b719ac2f9762dd017824c1fa->leave($__internal_e0c1616540b679d0d86e3b51fa85966e2d310995b719ac2f9762dd017824c1fa_prof);

        
        $__internal_4eb86912a4e6473e96ab4441d128a73428f363611c3e43fda24368faf48ddeac->leave($__internal_4eb86912a4e6473e96ab4441d128a73428f363611c3e43fda24368faf48ddeac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
