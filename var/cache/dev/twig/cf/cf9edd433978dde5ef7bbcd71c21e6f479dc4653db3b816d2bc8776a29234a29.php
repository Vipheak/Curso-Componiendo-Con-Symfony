<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_98cc9add6a81fe5647a7b72f484169234177a571e4365477dfac2117a1eb3208 extends Twig_Template
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
        $__internal_9d2da861a28d29971c3298a3979c1bfd7a17a4638721b9b33a6c9ad59dee660f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d2da861a28d29971c3298a3979c1bfd7a17a4638721b9b33a6c9ad59dee660f->enter($__internal_9d2da861a28d29971c3298a3979c1bfd7a17a4638721b9b33a6c9ad59dee660f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_d43753c19116ed976deab999010b675229239958d50b718e19a7f7ed3bc328ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43753c19116ed976deab999010b675229239958d50b718e19a7f7ed3bc328ce->enter($__internal_d43753c19116ed976deab999010b675229239958d50b718e19a7f7ed3bc328ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9d2da861a28d29971c3298a3979c1bfd7a17a4638721b9b33a6c9ad59dee660f->leave($__internal_9d2da861a28d29971c3298a3979c1bfd7a17a4638721b9b33a6c9ad59dee660f_prof);

        
        $__internal_d43753c19116ed976deab999010b675229239958d50b718e19a7f7ed3bc328ce->leave($__internal_d43753c19116ed976deab999010b675229239958d50b718e19a7f7ed3bc328ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
