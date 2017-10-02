<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_82d788d4b72f663169ca0bb8b3c9237314f4ff2eafb4efbe6ea7b1cf19213fb3 extends Twig_Template
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
        $__internal_cfe9d94c81665cc389c7cd56ecd226904789067feb9810bcd62d9a32a4689320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe9d94c81665cc389c7cd56ecd226904789067feb9810bcd62d9a32a4689320->enter($__internal_cfe9d94c81665cc389c7cd56ecd226904789067feb9810bcd62d9a32a4689320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_7fe61d06ff6cb9fae082d15c8f4d1a988c9edd8938b311f6ae9d9097fae7b40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe61d06ff6cb9fae082d15c8f4d1a988c9edd8938b311f6ae9d9097fae7b40c->enter($__internal_7fe61d06ff6cb9fae082d15c8f4d1a988c9edd8938b311f6ae9d9097fae7b40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_cfe9d94c81665cc389c7cd56ecd226904789067feb9810bcd62d9a32a4689320->leave($__internal_cfe9d94c81665cc389c7cd56ecd226904789067feb9810bcd62d9a32a4689320_prof);

        
        $__internal_7fe61d06ff6cb9fae082d15c8f4d1a988c9edd8938b311f6ae9d9097fae7b40c->leave($__internal_7fe61d06ff6cb9fae082d15c8f4d1a988c9edd8938b311f6ae9d9097fae7b40c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
