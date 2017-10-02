<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1e8fb82b3f2bcde7dd2b6e9f6e2fb7a746007be899b0b9ab536a0fd3d25354d0 extends Twig_Template
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
        $__internal_2a81bba0ea433910f3abdae50bb3a0f778274b08eac66a48f4c3fcafb2964c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a81bba0ea433910f3abdae50bb3a0f778274b08eac66a48f4c3fcafb2964c9c->enter($__internal_2a81bba0ea433910f3abdae50bb3a0f778274b08eac66a48f4c3fcafb2964c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_1b334803746ed5262a41dd6424d609f805aab447c22e28a8b85a962c725bab14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b334803746ed5262a41dd6424d609f805aab447c22e28a8b85a962c725bab14->enter($__internal_1b334803746ed5262a41dd6424d609f805aab447c22e28a8b85a962c725bab14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_2a81bba0ea433910f3abdae50bb3a0f778274b08eac66a48f4c3fcafb2964c9c->leave($__internal_2a81bba0ea433910f3abdae50bb3a0f778274b08eac66a48f4c3fcafb2964c9c_prof);

        
        $__internal_1b334803746ed5262a41dd6424d609f805aab447c22e28a8b85a962c725bab14->leave($__internal_1b334803746ed5262a41dd6424d609f805aab447c22e28a8b85a962c725bab14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
