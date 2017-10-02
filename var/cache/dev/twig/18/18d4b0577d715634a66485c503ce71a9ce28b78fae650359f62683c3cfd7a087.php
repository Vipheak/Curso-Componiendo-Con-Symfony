<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f8d63f96e59730aa31ded04d89d5ea9d3c00c754f5589fe6da826ecc8d295fd3 extends Twig_Template
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
        $__internal_db57d739acb78d25d846e66ccec307a4260d11e9c1e07d036fbd07b86f56fce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db57d739acb78d25d846e66ccec307a4260d11e9c1e07d036fbd07b86f56fce7->enter($__internal_db57d739acb78d25d846e66ccec307a4260d11e9c1e07d036fbd07b86f56fce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_3e017cda775559fce6bdb0333389116ea7f56cc76176d94798877d8d790d5f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e017cda775559fce6bdb0333389116ea7f56cc76176d94798877d8d790d5f0e->enter($__internal_3e017cda775559fce6bdb0333389116ea7f56cc76176d94798877d8d790d5f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_db57d739acb78d25d846e66ccec307a4260d11e9c1e07d036fbd07b86f56fce7->leave($__internal_db57d739acb78d25d846e66ccec307a4260d11e9c1e07d036fbd07b86f56fce7_prof);

        
        $__internal_3e017cda775559fce6bdb0333389116ea7f56cc76176d94798877d8d790d5f0e->leave($__internal_3e017cda775559fce6bdb0333389116ea7f56cc76176d94798877d8d790d5f0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
