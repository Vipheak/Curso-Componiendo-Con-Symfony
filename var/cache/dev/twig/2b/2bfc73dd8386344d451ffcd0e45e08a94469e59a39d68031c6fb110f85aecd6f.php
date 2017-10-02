<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_d510c9465473dab01c3e9360e8141ecb32fe344188936ad2dbc0894f486140c3 extends Twig_Template
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
        $__internal_10d0230f6fd3ae111ddf3478fdb76c94d0da5d6faf34862d14960bcdc3b4b634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d0230f6fd3ae111ddf3478fdb76c94d0da5d6faf34862d14960bcdc3b4b634->enter($__internal_10d0230f6fd3ae111ddf3478fdb76c94d0da5d6faf34862d14960bcdc3b4b634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_b8fedc5b1ca86a7e3eec4e6e8255b68ba4e92b8478224570fbf12ac231ee2d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fedc5b1ca86a7e3eec4e6e8255b68ba4e92b8478224570fbf12ac231ee2d5f->enter($__internal_b8fedc5b1ca86a7e3eec4e6e8255b68ba4e92b8478224570fbf12ac231ee2d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_10d0230f6fd3ae111ddf3478fdb76c94d0da5d6faf34862d14960bcdc3b4b634->leave($__internal_10d0230f6fd3ae111ddf3478fdb76c94d0da5d6faf34862d14960bcdc3b4b634_prof);

        
        $__internal_b8fedc5b1ca86a7e3eec4e6e8255b68ba4e92b8478224570fbf12ac231ee2d5f->leave($__internal_b8fedc5b1ca86a7e3eec4e6e8255b68ba4e92b8478224570fbf12ac231ee2d5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
