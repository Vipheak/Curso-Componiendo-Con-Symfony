<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e80bd426376c58c1d5dca3b1cc12ff386d456005d8dcca2ea8a2fe02d8fa5d55 extends Twig_Template
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
        $__internal_516d1bb54edae10e920d702e38d9143135f52e7ccb6fd8fdfc97fad6a8bfca5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516d1bb54edae10e920d702e38d9143135f52e7ccb6fd8fdfc97fad6a8bfca5c->enter($__internal_516d1bb54edae10e920d702e38d9143135f52e7ccb6fd8fdfc97fad6a8bfca5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_42565b2478a51b18018810a22067d93f38ecce1ad71be047ed30af272d5d78b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42565b2478a51b18018810a22067d93f38ecce1ad71be047ed30af272d5d78b2->enter($__internal_42565b2478a51b18018810a22067d93f38ecce1ad71be047ed30af272d5d78b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_516d1bb54edae10e920d702e38d9143135f52e7ccb6fd8fdfc97fad6a8bfca5c->leave($__internal_516d1bb54edae10e920d702e38d9143135f52e7ccb6fd8fdfc97fad6a8bfca5c_prof);

        
        $__internal_42565b2478a51b18018810a22067d93f38ecce1ad71be047ed30af272d5d78b2->leave($__internal_42565b2478a51b18018810a22067d93f38ecce1ad71be047ed30af272d5d78b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
