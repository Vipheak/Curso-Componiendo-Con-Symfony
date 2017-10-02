<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6a31ac09c53be5bba0b56227d772a48cc39efd5140ee17c25e826170a1f8784e extends Twig_Template
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
        $__internal_fe388b2b35e86812509e1fabdbf825b106a7a4bf85c6b8c85b680d4ae1888d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe388b2b35e86812509e1fabdbf825b106a7a4bf85c6b8c85b680d4ae1888d93->enter($__internal_fe388b2b35e86812509e1fabdbf825b106a7a4bf85c6b8c85b680d4ae1888d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_18ed670a810a7b7e5de7e66016063573ebce8c0458a01b0a9e346b7ecd9831d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ed670a810a7b7e5de7e66016063573ebce8c0458a01b0a9e346b7ecd9831d5->enter($__internal_18ed670a810a7b7e5de7e66016063573ebce8c0458a01b0a9e346b7ecd9831d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_fe388b2b35e86812509e1fabdbf825b106a7a4bf85c6b8c85b680d4ae1888d93->leave($__internal_fe388b2b35e86812509e1fabdbf825b106a7a4bf85c6b8c85b680d4ae1888d93_prof);

        
        $__internal_18ed670a810a7b7e5de7e66016063573ebce8c0458a01b0a9e346b7ecd9831d5->leave($__internal_18ed670a810a7b7e5de7e66016063573ebce8c0458a01b0a9e346b7ecd9831d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
