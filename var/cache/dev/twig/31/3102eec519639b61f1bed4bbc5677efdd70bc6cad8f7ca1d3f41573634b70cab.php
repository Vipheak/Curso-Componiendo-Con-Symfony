<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_cab60bb41ec561f0c787e1233012b8388ea09d3e38890348c490e604b5bda992 extends Twig_Template
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
        $__internal_c1edc6dfab926035f30c82be9e0c25dabb57ff1eff511eab31b81f7e6430ebc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1edc6dfab926035f30c82be9e0c25dabb57ff1eff511eab31b81f7e6430ebc6->enter($__internal_c1edc6dfab926035f30c82be9e0c25dabb57ff1eff511eab31b81f7e6430ebc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_3508b41bdecb89bd5ab264d41a2b18eed2175559e479ec0dfa17c658e631d3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3508b41bdecb89bd5ab264d41a2b18eed2175559e479ec0dfa17c658e631d3ef->enter($__internal_3508b41bdecb89bd5ab264d41a2b18eed2175559e479ec0dfa17c658e631d3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c1edc6dfab926035f30c82be9e0c25dabb57ff1eff511eab31b81f7e6430ebc6->leave($__internal_c1edc6dfab926035f30c82be9e0c25dabb57ff1eff511eab31b81f7e6430ebc6_prof);

        
        $__internal_3508b41bdecb89bd5ab264d41a2b18eed2175559e479ec0dfa17c658e631d3ef->leave($__internal_3508b41bdecb89bd5ab264d41a2b18eed2175559e479ec0dfa17c658e631d3ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
