<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_5050281a025901ccf12f747f91bee6db886e2642bbb06bb5fdcc7fc7bd22c63f extends Twig_Template
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
        $__internal_31203a4f287300ad40a2cf6cd858beb934e5191f9b0d8857fadc3f8053f07f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31203a4f287300ad40a2cf6cd858beb934e5191f9b0d8857fadc3f8053f07f7f->enter($__internal_31203a4f287300ad40a2cf6cd858beb934e5191f9b0d8857fadc3f8053f07f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_4357f0644438d767499293246af87736875348ffdeac57d02c10f95fb3e59776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4357f0644438d767499293246af87736875348ffdeac57d02c10f95fb3e59776->enter($__internal_4357f0644438d767499293246af87736875348ffdeac57d02c10f95fb3e59776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_31203a4f287300ad40a2cf6cd858beb934e5191f9b0d8857fadc3f8053f07f7f->leave($__internal_31203a4f287300ad40a2cf6cd858beb934e5191f9b0d8857fadc3f8053f07f7f_prof);

        
        $__internal_4357f0644438d767499293246af87736875348ffdeac57d02c10f95fb3e59776->leave($__internal_4357f0644438d767499293246af87736875348ffdeac57d02c10f95fb3e59776_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
