<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c8c02e2e7c4c1be191f60bfcf969a441b80a59321483a91ca09e2dd35689d1c2 extends Twig_Template
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
        $__internal_1b183f8e911c2d3dc71acf00f882434c3102a5d5a42a8578ac6c215c70bcf5d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b183f8e911c2d3dc71acf00f882434c3102a5d5a42a8578ac6c215c70bcf5d8->enter($__internal_1b183f8e911c2d3dc71acf00f882434c3102a5d5a42a8578ac6c215c70bcf5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f036df6d3a2b73b646c54c86c510f262bce798d26abdf6cb80ebba842e06fe09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f036df6d3a2b73b646c54c86c510f262bce798d26abdf6cb80ebba842e06fe09->enter($__internal_f036df6d3a2b73b646c54c86c510f262bce798d26abdf6cb80ebba842e06fe09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1b183f8e911c2d3dc71acf00f882434c3102a5d5a42a8578ac6c215c70bcf5d8->leave($__internal_1b183f8e911c2d3dc71acf00f882434c3102a5d5a42a8578ac6c215c70bcf5d8_prof);

        
        $__internal_f036df6d3a2b73b646c54c86c510f262bce798d26abdf6cb80ebba842e06fe09->leave($__internal_f036df6d3a2b73b646c54c86c510f262bce798d26abdf6cb80ebba842e06fe09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
