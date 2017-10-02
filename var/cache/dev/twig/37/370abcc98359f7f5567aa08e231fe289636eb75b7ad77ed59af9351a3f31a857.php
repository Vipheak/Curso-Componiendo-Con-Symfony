<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ffc540076ad108b276181233f3963c17097e3086f8b116dad433a6818a56c8f1 extends Twig_Template
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
        $__internal_cebe5648dd180b91619805f53d97300fe9eb6be88dbd1442e42e2c7d6a8b8a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cebe5648dd180b91619805f53d97300fe9eb6be88dbd1442e42e2c7d6a8b8a89->enter($__internal_cebe5648dd180b91619805f53d97300fe9eb6be88dbd1442e42e2c7d6a8b8a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_09804bcd8be7856111cba07d6dc159599310e50afafdc18cee4411bcd767f927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09804bcd8be7856111cba07d6dc159599310e50afafdc18cee4411bcd767f927->enter($__internal_09804bcd8be7856111cba07d6dc159599310e50afafdc18cee4411bcd767f927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_cebe5648dd180b91619805f53d97300fe9eb6be88dbd1442e42e2c7d6a8b8a89->leave($__internal_cebe5648dd180b91619805f53d97300fe9eb6be88dbd1442e42e2c7d6a8b8a89_prof);

        
        $__internal_09804bcd8be7856111cba07d6dc159599310e50afafdc18cee4411bcd767f927->leave($__internal_09804bcd8be7856111cba07d6dc159599310e50afafdc18cee4411bcd767f927_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
