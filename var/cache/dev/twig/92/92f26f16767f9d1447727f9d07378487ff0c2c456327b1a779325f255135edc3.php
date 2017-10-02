<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_37d7b5f1d36ff5ea377199294e58ae7ab5404c716386dd5877c6a9c12b30e3e0 extends Twig_Template
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
        $__internal_b8f70d6890610bde1f108d3513068ffc314109f39e1a688cfdd1939ceebe9275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f70d6890610bde1f108d3513068ffc314109f39e1a688cfdd1939ceebe9275->enter($__internal_b8f70d6890610bde1f108d3513068ffc314109f39e1a688cfdd1939ceebe9275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_2bc7d4ea4442bd7f2f392026cd51e652c93d8dc2ed5ae42729d7b55fd17251d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc7d4ea4442bd7f2f392026cd51e652c93d8dc2ed5ae42729d7b55fd17251d5->enter($__internal_2bc7d4ea4442bd7f2f392026cd51e652c93d8dc2ed5ae42729d7b55fd17251d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b8f70d6890610bde1f108d3513068ffc314109f39e1a688cfdd1939ceebe9275->leave($__internal_b8f70d6890610bde1f108d3513068ffc314109f39e1a688cfdd1939ceebe9275_prof);

        
        $__internal_2bc7d4ea4442bd7f2f392026cd51e652c93d8dc2ed5ae42729d7b55fd17251d5->leave($__internal_2bc7d4ea4442bd7f2f392026cd51e652c93d8dc2ed5ae42729d7b55fd17251d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
