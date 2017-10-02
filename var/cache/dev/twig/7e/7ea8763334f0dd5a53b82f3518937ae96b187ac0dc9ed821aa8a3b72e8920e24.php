<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9f6224f034cc85d529136e173070785fa907214a81106382bce53c67852f8111 extends Twig_Template
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
        $__internal_ed1d17041acd4f914744fd70fe6d3bf8fd898f24ad11345b7fff0b22ca162cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1d17041acd4f914744fd70fe6d3bf8fd898f24ad11345b7fff0b22ca162cc2->enter($__internal_ed1d17041acd4f914744fd70fe6d3bf8fd898f24ad11345b7fff0b22ca162cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_065c11e5b179740ada19a17d8a12caa4b61d036bbb25e4ac259ff26b26dd46ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065c11e5b179740ada19a17d8a12caa4b61d036bbb25e4ac259ff26b26dd46ce->enter($__internal_065c11e5b179740ada19a17d8a12caa4b61d036bbb25e4ac259ff26b26dd46ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ed1d17041acd4f914744fd70fe6d3bf8fd898f24ad11345b7fff0b22ca162cc2->leave($__internal_ed1d17041acd4f914744fd70fe6d3bf8fd898f24ad11345b7fff0b22ca162cc2_prof);

        
        $__internal_065c11e5b179740ada19a17d8a12caa4b61d036bbb25e4ac259ff26b26dd46ce->leave($__internal_065c11e5b179740ada19a17d8a12caa4b61d036bbb25e4ac259ff26b26dd46ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
