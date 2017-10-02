<?php

/* ::Cambia_El_Nombre.html.twig */
class __TwigTemplate_716e5723e0515ac55bcb36c9230d4c1df9f08870fd65d3c72e95d2c67c9630e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a802186b3e154450f4aee4dee4914a189a5a842565e6c7db08765e2dc60d0a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a802186b3e154450f4aee4dee4914a189a5a842565e6c7db08765e2dc60d0a95->enter($__internal_a802186b3e154450f4aee4dee4914a189a5a842565e6c7db08765e2dc60d0a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Cambia_El_Nombre.html.twig"));

        $__internal_44e51706c0b74d882bf414251f8b72c375531a7831aee0e845679e9adb10c54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e51706c0b74d882bf414251f8b72c375531a7831aee0e845679e9adb10c54f->enter($__internal_44e51706c0b74d882bf414251f8b72c375531a7831aee0e845679e9adb10c54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Cambia_El_Nombre.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a802186b3e154450f4aee4dee4914a189a5a842565e6c7db08765e2dc60d0a95->leave($__internal_a802186b3e154450f4aee4dee4914a189a5a842565e6c7db08765e2dc60d0a95_prof);

        
        $__internal_44e51706c0b74d882bf414251f8b72c375531a7831aee0e845679e9adb10c54f->leave($__internal_44e51706c0b74d882bf414251f8b72c375531a7831aee0e845679e9adb10c54f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebeb31d68a238c01d1873f4813bb7d3cefdfe4703136059a4d7f12902b9301d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebeb31d68a238c01d1873f4813bb7d3cefdfe4703136059a4d7f12902b9301d7->enter($__internal_ebeb31d68a238c01d1873f4813bb7d3cefdfe4703136059a4d7f12902b9301d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_495ab255366afa1638e274a60addd43bbc30d63fcbae3699ad67fcac9e68d42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495ab255366afa1638e274a60addd43bbc30d63fcbae3699ad67fcac9e68d42a->enter($__internal_495ab255366afa1638e274a60addd43bbc30d63fcbae3699ad67fcac9e68d42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_495ab255366afa1638e274a60addd43bbc30d63fcbae3699ad67fcac9e68d42a->leave($__internal_495ab255366afa1638e274a60addd43bbc30d63fcbae3699ad67fcac9e68d42a_prof);

        
        $__internal_ebeb31d68a238c01d1873f4813bb7d3cefdfe4703136059a4d7f12902b9301d7->leave($__internal_ebeb31d68a238c01d1873f4813bb7d3cefdfe4703136059a4d7f12902b9301d7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_23211c13e905fd6ae8d91fec11ee40653f6014d08f718dcf823b0d9a1082b7c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23211c13e905fd6ae8d91fec11ee40653f6014d08f718dcf823b0d9a1082b7c8->enter($__internal_23211c13e905fd6ae8d91fec11ee40653f6014d08f718dcf823b0d9a1082b7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2f64d084610a6d3cad74da3156ba11e665def0293183b8852136739b75e3fded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f64d084610a6d3cad74da3156ba11e665def0293183b8852136739b75e3fded->enter($__internal_2f64d084610a6d3cad74da3156ba11e665def0293183b8852136739b75e3fded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2f64d084610a6d3cad74da3156ba11e665def0293183b8852136739b75e3fded->leave($__internal_2f64d084610a6d3cad74da3156ba11e665def0293183b8852136739b75e3fded_prof);

        
        $__internal_23211c13e905fd6ae8d91fec11ee40653f6014d08f718dcf823b0d9a1082b7c8->leave($__internal_23211c13e905fd6ae8d91fec11ee40653f6014d08f718dcf823b0d9a1082b7c8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dda6479252a5bee3a330ff7c1bf9c16abe8c5492af7c2675c861a27d842315c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dda6479252a5bee3a330ff7c1bf9c16abe8c5492af7c2675c861a27d842315c->enter($__internal_4dda6479252a5bee3a330ff7c1bf9c16abe8c5492af7c2675c861a27d842315c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d17010a9d0942d7cdc8666f1b820e42d6e1e8e0284c7f3632a9dbb6ea1dae3e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17010a9d0942d7cdc8666f1b820e42d6e1e8e0284c7f3632a9dbb6ea1dae3e4->enter($__internal_d17010a9d0942d7cdc8666f1b820e42d6e1e8e0284c7f3632a9dbb6ea1dae3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d17010a9d0942d7cdc8666f1b820e42d6e1e8e0284c7f3632a9dbb6ea1dae3e4->leave($__internal_d17010a9d0942d7cdc8666f1b820e42d6e1e8e0284c7f3632a9dbb6ea1dae3e4_prof);

        
        $__internal_4dda6479252a5bee3a330ff7c1bf9c16abe8c5492af7c2675c861a27d842315c->leave($__internal_4dda6479252a5bee3a330ff7c1bf9c16abe8c5492af7c2675c861a27d842315c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d2560e0983b460fdd8f7bb226fa3b76a764ce2af6b3c20bc890c1046701b522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2560e0983b460fdd8f7bb226fa3b76a764ce2af6b3c20bc890c1046701b522->enter($__internal_0d2560e0983b460fdd8f7bb226fa3b76a764ce2af6b3c20bc890c1046701b522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_72c3ffa8c1714716348ad05ffaa6ec73bb2f6c248402035392ac483298365fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c3ffa8c1714716348ad05ffaa6ec73bb2f6c248402035392ac483298365fb7->enter($__internal_72c3ffa8c1714716348ad05ffaa6ec73bb2f6c248402035392ac483298365fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_72c3ffa8c1714716348ad05ffaa6ec73bb2f6c248402035392ac483298365fb7->leave($__internal_72c3ffa8c1714716348ad05ffaa6ec73bb2f6c248402035392ac483298365fb7_prof);

        
        $__internal_0d2560e0983b460fdd8f7bb226fa3b76a764ce2af6b3c20bc890c1046701b522->leave($__internal_0d2560e0983b460fdd8f7bb226fa3b76a764ce2af6b3c20bc890c1046701b522_prof);

    }

    public function getTemplateName()
    {
        return "::Cambia_El_Nombre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::Cambia_El_Nombre.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\app/Resources\\views/Cambia_El_Nombre.html.twig");
    }
}
