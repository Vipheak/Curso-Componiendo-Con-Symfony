<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_88f11b1e857296202947b18f268b2cc539470e8047fba297f0948838878d304b extends Twig_Template
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
        $__internal_ba07642ec9b7ee202d116476084d3f692cdb5aea49051c558d24205b85974ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba07642ec9b7ee202d116476084d3f692cdb5aea49051c558d24205b85974ec4->enter($__internal_ba07642ec9b7ee202d116476084d3f692cdb5aea49051c558d24205b85974ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_beeecf37b9a0f1dba2614a1b7218708d11c1ec4aad5bc35d7dc8168edde04850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beeecf37b9a0f1dba2614a1b7218708d11c1ec4aad5bc35d7dc8168edde04850->enter($__internal_beeecf37b9a0f1dba2614a1b7218708d11c1ec4aad5bc35d7dc8168edde04850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ba07642ec9b7ee202d116476084d3f692cdb5aea49051c558d24205b85974ec4->leave($__internal_ba07642ec9b7ee202d116476084d3f692cdb5aea49051c558d24205b85974ec4_prof);

        
        $__internal_beeecf37b9a0f1dba2614a1b7218708d11c1ec4aad5bc35d7dc8168edde04850->leave($__internal_beeecf37b9a0f1dba2614a1b7218708d11c1ec4aad5bc35d7dc8168edde04850_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
