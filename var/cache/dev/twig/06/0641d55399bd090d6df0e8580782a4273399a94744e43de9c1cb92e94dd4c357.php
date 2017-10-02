<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_3d5e943cc8f8fed9d099f1bc78b4627410a2d022699f6b6f147ae1065ccb6f2f extends Twig_Template
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
        $__internal_836ab34caa0afd2a292558ae6610e2637ee9ffb5165d9b53d251e24b423f46ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_836ab34caa0afd2a292558ae6610e2637ee9ffb5165d9b53d251e24b423f46ff->enter($__internal_836ab34caa0afd2a292558ae6610e2637ee9ffb5165d9b53d251e24b423f46ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_5783d43574e0acb93003295fc6fb5e568c7a96cb363bffe4983b9b46841e6099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5783d43574e0acb93003295fc6fb5e568c7a96cb363bffe4983b9b46841e6099->enter($__internal_5783d43574e0acb93003295fc6fb5e568c7a96cb363bffe4983b9b46841e6099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_836ab34caa0afd2a292558ae6610e2637ee9ffb5165d9b53d251e24b423f46ff->leave($__internal_836ab34caa0afd2a292558ae6610e2637ee9ffb5165d9b53d251e24b423f46ff_prof);

        
        $__internal_5783d43574e0acb93003295fc6fb5e568c7a96cb363bffe4983b9b46841e6099->leave($__internal_5783d43574e0acb93003295fc6fb5e568c7a96cb363bffe4983b9b46841e6099_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
