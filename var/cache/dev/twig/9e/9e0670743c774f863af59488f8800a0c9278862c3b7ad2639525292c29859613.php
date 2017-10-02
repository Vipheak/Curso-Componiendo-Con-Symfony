<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_03aa938eff914b1994a708e7be68a2bea04bb846366d3fd1ea4e8aacc9edf4f8 extends Twig_Template
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
        $__internal_23e354ba7f3bcd80070d4c7f4ac51b4b6a07bf2541d34416c0b7e35f18ec93d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e354ba7f3bcd80070d4c7f4ac51b4b6a07bf2541d34416c0b7e35f18ec93d2->enter($__internal_23e354ba7f3bcd80070d4c7f4ac51b4b6a07bf2541d34416c0b7e35f18ec93d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_63125a19e8b311b4dcb19e7fc78c3d92c1a5e0e301b9d98e59c1a6f2b7b56b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63125a19e8b311b4dcb19e7fc78c3d92c1a5e0e301b9d98e59c1a6f2b7b56b1c->enter($__internal_63125a19e8b311b4dcb19e7fc78c3d92c1a5e0e301b9d98e59c1a6f2b7b56b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_23e354ba7f3bcd80070d4c7f4ac51b4b6a07bf2541d34416c0b7e35f18ec93d2->leave($__internal_23e354ba7f3bcd80070d4c7f4ac51b4b6a07bf2541d34416c0b7e35f18ec93d2_prof);

        
        $__internal_63125a19e8b311b4dcb19e7fc78c3d92c1a5e0e301b9d98e59c1a6f2b7b56b1c->leave($__internal_63125a19e8b311b4dcb19e7fc78c3d92c1a5e0e301b9d98e59c1a6f2b7b56b1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
