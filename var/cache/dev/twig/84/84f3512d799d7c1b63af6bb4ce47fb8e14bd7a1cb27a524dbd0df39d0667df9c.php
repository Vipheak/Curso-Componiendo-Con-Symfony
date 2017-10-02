<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0fe20de790e04fd2b620675530ee2f85f512ba7de5aef281748e72aaaa8a7575 extends Twig_Template
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
        $__internal_c8b9e6d81b5c706b7edb2916a2d6262d7adffe116a3a75cd4c57e34aed443c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b9e6d81b5c706b7edb2916a2d6262d7adffe116a3a75cd4c57e34aed443c12->enter($__internal_c8b9e6d81b5c706b7edb2916a2d6262d7adffe116a3a75cd4c57e34aed443c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c06fdcc414da9dd73b8613e140fcc797d422dd6258ade3b1e941bf296ff3fb92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06fdcc414da9dd73b8613e140fcc797d422dd6258ade3b1e941bf296ff3fb92->enter($__internal_c06fdcc414da9dd73b8613e140fcc797d422dd6258ade3b1e941bf296ff3fb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c8b9e6d81b5c706b7edb2916a2d6262d7adffe116a3a75cd4c57e34aed443c12->leave($__internal_c8b9e6d81b5c706b7edb2916a2d6262d7adffe116a3a75cd4c57e34aed443c12_prof);

        
        $__internal_c06fdcc414da9dd73b8613e140fcc797d422dd6258ade3b1e941bf296ff3fb92->leave($__internal_c06fdcc414da9dd73b8613e140fcc797d422dd6258ade3b1e941bf296ff3fb92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
