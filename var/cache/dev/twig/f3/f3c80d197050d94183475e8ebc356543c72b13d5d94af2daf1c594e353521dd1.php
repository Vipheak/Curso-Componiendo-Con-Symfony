<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_f1ad46441adaaa876ead5e4032cec652eb0eb235e9271099cffa72e8f8522253 extends Twig_Template
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
        $__internal_be4cb62e1c3d36dae6b3eda56df31b8904b5142d8dd43c0521baac62ce7fd86e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4cb62e1c3d36dae6b3eda56df31b8904b5142d8dd43c0521baac62ce7fd86e->enter($__internal_be4cb62e1c3d36dae6b3eda56df31b8904b5142d8dd43c0521baac62ce7fd86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_c3fe3f1aa5d1219e63c9308caeb5799dfb7c1cd882784f752347ec1bbd21638e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fe3f1aa5d1219e63c9308caeb5799dfb7c1cd882784f752347ec1bbd21638e->enter($__internal_c3fe3f1aa5d1219e63c9308caeb5799dfb7c1cd882784f752347ec1bbd21638e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_be4cb62e1c3d36dae6b3eda56df31b8904b5142d8dd43c0521baac62ce7fd86e->leave($__internal_be4cb62e1c3d36dae6b3eda56df31b8904b5142d8dd43c0521baac62ce7fd86e_prof);

        
        $__internal_c3fe3f1aa5d1219e63c9308caeb5799dfb7c1cd882784f752347ec1bbd21638e->leave($__internal_c3fe3f1aa5d1219e63c9308caeb5799dfb7c1cd882784f752347ec1bbd21638e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
