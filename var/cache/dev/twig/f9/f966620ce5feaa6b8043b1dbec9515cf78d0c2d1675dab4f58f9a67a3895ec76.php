<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_018a74265dafed84df1e4c8cbdb2309779e71d80b055a85859bf080568e3c50c extends Twig_Template
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
        $__internal_26fba89b1315a6cbfb2ddb1db5bff67e3e1243abc733f5440aef97570047d391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26fba89b1315a6cbfb2ddb1db5bff67e3e1243abc733f5440aef97570047d391->enter($__internal_26fba89b1315a6cbfb2ddb1db5bff67e3e1243abc733f5440aef97570047d391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_706e983619a882e87fffabe9d48f1c1c52925530d32df37e46be4b2348155592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706e983619a882e87fffabe9d48f1c1c52925530d32df37e46be4b2348155592->enter($__internal_706e983619a882e87fffabe9d48f1c1c52925530d32df37e46be4b2348155592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_26fba89b1315a6cbfb2ddb1db5bff67e3e1243abc733f5440aef97570047d391->leave($__internal_26fba89b1315a6cbfb2ddb1db5bff67e3e1243abc733f5440aef97570047d391_prof);

        
        $__internal_706e983619a882e87fffabe9d48f1c1c52925530d32df37e46be4b2348155592->leave($__internal_706e983619a882e87fffabe9d48f1c1c52925530d32df37e46be4b2348155592_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
