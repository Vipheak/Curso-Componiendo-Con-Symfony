<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f794bac01edc92477b475ede6c7c781008181ff6bbc724cf8c87ab652aee584c extends Twig_Template
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
        $__internal_b3381e60ae6a75cf673782d54c84f34d0d59a2d3fab9e4c91d89bd4f3d4f358a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3381e60ae6a75cf673782d54c84f34d0d59a2d3fab9e4c91d89bd4f3d4f358a->enter($__internal_b3381e60ae6a75cf673782d54c84f34d0d59a2d3fab9e4c91d89bd4f3d4f358a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_7ff7a0d702d6f30c42fd1a45b6cffed0a6ef9b61936a2bd995865acaab2a7bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff7a0d702d6f30c42fd1a45b6cffed0a6ef9b61936a2bd995865acaab2a7bb1->enter($__internal_7ff7a0d702d6f30c42fd1a45b6cffed0a6ef9b61936a2bd995865acaab2a7bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b3381e60ae6a75cf673782d54c84f34d0d59a2d3fab9e4c91d89bd4f3d4f358a->leave($__internal_b3381e60ae6a75cf673782d54c84f34d0d59a2d3fab9e4c91d89bd4f3d4f358a_prof);

        
        $__internal_7ff7a0d702d6f30c42fd1a45b6cffed0a6ef9b61936a2bd995865acaab2a7bb1->leave($__internal_7ff7a0d702d6f30c42fd1a45b6cffed0a6ef9b61936a2bd995865acaab2a7bb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
