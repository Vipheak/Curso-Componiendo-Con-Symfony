<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_bfb4ffdef502dcf1316dc0c9faf545e5683823da860a9a5939d9b46f13d6b39a extends Twig_Template
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
        $__internal_b0a91a43a313ceccd3e288a47418e4fad813ef0fc3f59587a90b08a4709ad83a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a91a43a313ceccd3e288a47418e4fad813ef0fc3f59587a90b08a4709ad83a->enter($__internal_b0a91a43a313ceccd3e288a47418e4fad813ef0fc3f59587a90b08a4709ad83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_3891b65daff9b7e2569a5417d49ad9c544457622bcdd3b8ebe9c1267e72b28cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3891b65daff9b7e2569a5417d49ad9c544457622bcdd3b8ebe9c1267e72b28cc->enter($__internal_3891b65daff9b7e2569a5417d49ad9c544457622bcdd3b8ebe9c1267e72b28cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b0a91a43a313ceccd3e288a47418e4fad813ef0fc3f59587a90b08a4709ad83a->leave($__internal_b0a91a43a313ceccd3e288a47418e4fad813ef0fc3f59587a90b08a4709ad83a_prof);

        
        $__internal_3891b65daff9b7e2569a5417d49ad9c544457622bcdd3b8ebe9c1267e72b28cc->leave($__internal_3891b65daff9b7e2569a5417d49ad9c544457622bcdd3b8ebe9c1267e72b28cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
