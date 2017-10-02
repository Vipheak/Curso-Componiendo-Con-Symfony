<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7b1d2c5b49c16962cad41052fea34be7b55498728da807bb8af97ae522d4da5d extends Twig_Template
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
        $__internal_f2a42be82370e6428980ee32fdd506b9cbc349898ccd675fa0e0f1e80f2e3d24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a42be82370e6428980ee32fdd506b9cbc349898ccd675fa0e0f1e80f2e3d24->enter($__internal_f2a42be82370e6428980ee32fdd506b9cbc349898ccd675fa0e0f1e80f2e3d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_1b4566f95fec90fe62ca28b45e8765ef6c46043c036f0d368625c04defb8a6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b4566f95fec90fe62ca28b45e8765ef6c46043c036f0d368625c04defb8a6cb->enter($__internal_1b4566f95fec90fe62ca28b45e8765ef6c46043c036f0d368625c04defb8a6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f2a42be82370e6428980ee32fdd506b9cbc349898ccd675fa0e0f1e80f2e3d24->leave($__internal_f2a42be82370e6428980ee32fdd506b9cbc349898ccd675fa0e0f1e80f2e3d24_prof);

        
        $__internal_1b4566f95fec90fe62ca28b45e8765ef6c46043c036f0d368625c04defb8a6cb->leave($__internal_1b4566f95fec90fe62ca28b45e8765ef6c46043c036f0d368625c04defb8a6cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
