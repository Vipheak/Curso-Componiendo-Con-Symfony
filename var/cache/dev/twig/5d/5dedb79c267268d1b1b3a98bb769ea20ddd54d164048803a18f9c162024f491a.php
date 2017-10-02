<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_a63a8a9527c351e8b88ca7a3d2094206d2ad0f9ae68b1ea8ae4ae0eb62b045df extends Twig_Template
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
        $__internal_f2f839c339398a04b6ee011039037f099d5e28943e92f6ca1dab8744481ca602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f839c339398a04b6ee011039037f099d5e28943e92f6ca1dab8744481ca602->enter($__internal_f2f839c339398a04b6ee011039037f099d5e28943e92f6ca1dab8744481ca602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_21d392204b68379c1b55c6315a7ec659d21d81096dfa8407b1bbd990d4bb7e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d392204b68379c1b55c6315a7ec659d21d81096dfa8407b1bbd990d4bb7e54->enter($__internal_21d392204b68379c1b55c6315a7ec659d21d81096dfa8407b1bbd990d4bb7e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f2f839c339398a04b6ee011039037f099d5e28943e92f6ca1dab8744481ca602->leave($__internal_f2f839c339398a04b6ee011039037f099d5e28943e92f6ca1dab8744481ca602_prof);

        
        $__internal_21d392204b68379c1b55c6315a7ec659d21d81096dfa8407b1bbd990d4bb7e54->leave($__internal_21d392204b68379c1b55c6315a7ec659d21d81096dfa8407b1bbd990d4bb7e54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
