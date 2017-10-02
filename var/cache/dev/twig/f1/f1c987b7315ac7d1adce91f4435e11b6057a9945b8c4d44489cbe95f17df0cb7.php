<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a0fe85de2ce7e12397ff4f3653200f0f4e1be013b2e0ae3153b456626ccda2b0 extends Twig_Template
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
        $__internal_f8f262624fd4a058d73137c1390cf6e7586fc82d123cf54e4fcb3e1a2f3aab74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f262624fd4a058d73137c1390cf6e7586fc82d123cf54e4fcb3e1a2f3aab74->enter($__internal_f8f262624fd4a058d73137c1390cf6e7586fc82d123cf54e4fcb3e1a2f3aab74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_06318b12422a5c1de4691a8c41db1c341d4fd80c6d2c86afe838ac756828fd38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06318b12422a5c1de4691a8c41db1c341d4fd80c6d2c86afe838ac756828fd38->enter($__internal_06318b12422a5c1de4691a8c41db1c341d4fd80c6d2c86afe838ac756828fd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f8f262624fd4a058d73137c1390cf6e7586fc82d123cf54e4fcb3e1a2f3aab74->leave($__internal_f8f262624fd4a058d73137c1390cf6e7586fc82d123cf54e4fcb3e1a2f3aab74_prof);

        
        $__internal_06318b12422a5c1de4691a8c41db1c341d4fd80c6d2c86afe838ac756828fd38->leave($__internal_06318b12422a5c1de4691a8c41db1c341d4fd80c6d2c86afe838ac756828fd38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
