<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_40e6854ef7dcd4193fa676e5c642ea304680c9250d91e61f11cc10d57283ccf0 extends Twig_Template
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
        $__internal_39d0ee67b3ae97bd8ac20ab9e21f661dc031dd7dae5f3630e507efb6c6f9564f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d0ee67b3ae97bd8ac20ab9e21f661dc031dd7dae5f3630e507efb6c6f9564f->enter($__internal_39d0ee67b3ae97bd8ac20ab9e21f661dc031dd7dae5f3630e507efb6c6f9564f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_2604acb79af68f05ae1c289568362f043d106ae74cc1d77e88110ac2ea053a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2604acb79af68f05ae1c289568362f043d106ae74cc1d77e88110ac2ea053a79->enter($__internal_2604acb79af68f05ae1c289568362f043d106ae74cc1d77e88110ac2ea053a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_39d0ee67b3ae97bd8ac20ab9e21f661dc031dd7dae5f3630e507efb6c6f9564f->leave($__internal_39d0ee67b3ae97bd8ac20ab9e21f661dc031dd7dae5f3630e507efb6c6f9564f_prof);

        
        $__internal_2604acb79af68f05ae1c289568362f043d106ae74cc1d77e88110ac2ea053a79->leave($__internal_2604acb79af68f05ae1c289568362f043d106ae74cc1d77e88110ac2ea053a79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
