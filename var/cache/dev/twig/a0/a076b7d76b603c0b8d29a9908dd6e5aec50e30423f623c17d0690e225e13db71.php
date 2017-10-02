<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c1c6d9174d573178796b3159335813abc7dff9cbd033779c19d1ee5b9c5fa108 extends Twig_Template
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
        $__internal_b2b266c45e11536655c3548c32ff4a0d69f45432a5d1d1ef4734ba33a9e82540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b266c45e11536655c3548c32ff4a0d69f45432a5d1d1ef4734ba33a9e82540->enter($__internal_b2b266c45e11536655c3548c32ff4a0d69f45432a5d1d1ef4734ba33a9e82540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_40feac7a36fcbaf9a3fe9d4599055a7341a9cae02fa6e94cd600b6edae5dbb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40feac7a36fcbaf9a3fe9d4599055a7341a9cae02fa6e94cd600b6edae5dbb58->enter($__internal_40feac7a36fcbaf9a3fe9d4599055a7341a9cae02fa6e94cd600b6edae5dbb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b2b266c45e11536655c3548c32ff4a0d69f45432a5d1d1ef4734ba33a9e82540->leave($__internal_b2b266c45e11536655c3548c32ff4a0d69f45432a5d1d1ef4734ba33a9e82540_prof);

        
        $__internal_40feac7a36fcbaf9a3fe9d4599055a7341a9cae02fa6e94cd600b6edae5dbb58->leave($__internal_40feac7a36fcbaf9a3fe9d4599055a7341a9cae02fa6e94cd600b6edae5dbb58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
