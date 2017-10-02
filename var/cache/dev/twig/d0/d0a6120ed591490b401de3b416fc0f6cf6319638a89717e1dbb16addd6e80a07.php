<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_38a17e55abeb754a46cfb2c3d136d1a878c5a8271d53dacbf4b7a137bdf499d9 extends Twig_Template
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
        $__internal_3d47b89c9243a5a6cf256588818bf078c42d607c5c57840ae9466f039c36390f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d47b89c9243a5a6cf256588818bf078c42d607c5c57840ae9466f039c36390f->enter($__internal_3d47b89c9243a5a6cf256588818bf078c42d607c5c57840ae9466f039c36390f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_2c94987e4da4f0b93cc87fda63f5ed337091d052b2e0fa855928482a0b69f6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c94987e4da4f0b93cc87fda63f5ed337091d052b2e0fa855928482a0b69f6c8->enter($__internal_2c94987e4da4f0b93cc87fda63f5ed337091d052b2e0fa855928482a0b69f6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3d47b89c9243a5a6cf256588818bf078c42d607c5c57840ae9466f039c36390f->leave($__internal_3d47b89c9243a5a6cf256588818bf078c42d607c5c57840ae9466f039c36390f_prof);

        
        $__internal_2c94987e4da4f0b93cc87fda63f5ed337091d052b2e0fa855928482a0b69f6c8->leave($__internal_2c94987e4da4f0b93cc87fda63f5ed337091d052b2e0fa855928482a0b69f6c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
