<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ef46ff3e00be850b375145c4de69a72941605b1b30816a42d1a36aa92bc080f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_768126516b7451b7144b2a8036700efbf8fd062212998c5a6eee589a761f2fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_768126516b7451b7144b2a8036700efbf8fd062212998c5a6eee589a761f2fba->enter($__internal_768126516b7451b7144b2a8036700efbf8fd062212998c5a6eee589a761f2fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c7f01e6afcd05b82bfab22b5fc72589494c528322bd62ea632237b71f3e6055a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f01e6afcd05b82bfab22b5fc72589494c528322bd62ea632237b71f3e6055a->enter($__internal_c7f01e6afcd05b82bfab22b5fc72589494c528322bd62ea632237b71f3e6055a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_768126516b7451b7144b2a8036700efbf8fd062212998c5a6eee589a761f2fba->leave($__internal_768126516b7451b7144b2a8036700efbf8fd062212998c5a6eee589a761f2fba_prof);

        
        $__internal_c7f01e6afcd05b82bfab22b5fc72589494c528322bd62ea632237b71f3e6055a->leave($__internal_c7f01e6afcd05b82bfab22b5fc72589494c528322bd62ea632237b71f3e6055a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9515d1684e33795699b105c3886081ecec3a48f91d75d1b692be5c060c152d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9515d1684e33795699b105c3886081ecec3a48f91d75d1b692be5c060c152d9->enter($__internal_f9515d1684e33795699b105c3886081ecec3a48f91d75d1b692be5c060c152d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d941fc0e1f3a894e9042100b0d76feeaebaf9cf014053af131f590b196baeb1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d941fc0e1f3a894e9042100b0d76feeaebaf9cf014053af131f590b196baeb1a->enter($__internal_d941fc0e1f3a894e9042100b0d76feeaebaf9cf014053af131f590b196baeb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d941fc0e1f3a894e9042100b0d76feeaebaf9cf014053af131f590b196baeb1a->leave($__internal_d941fc0e1f3a894e9042100b0d76feeaebaf9cf014053af131f590b196baeb1a_prof);

        
        $__internal_f9515d1684e33795699b105c3886081ecec3a48f91d75d1b692be5c060c152d9->leave($__internal_f9515d1684e33795699b105c3886081ecec3a48f91d75d1b692be5c060c152d9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8471288e0f01c5a89431428a1471ce82505567aee8a3805199ded75014c9349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8471288e0f01c5a89431428a1471ce82505567aee8a3805199ded75014c9349->enter($__internal_c8471288e0f01c5a89431428a1471ce82505567aee8a3805199ded75014c9349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_34331d8688ff8283e21861885790a991b06e0813b9c10db4b5acf9a637cfb0e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34331d8688ff8283e21861885790a991b06e0813b9c10db4b5acf9a637cfb0e6->enter($__internal_34331d8688ff8283e21861885790a991b06e0813b9c10db4b5acf9a637cfb0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_34331d8688ff8283e21861885790a991b06e0813b9c10db4b5acf9a637cfb0e6->leave($__internal_34331d8688ff8283e21861885790a991b06e0813b9c10db4b5acf9a637cfb0e6_prof);

        
        $__internal_c8471288e0f01c5a89431428a1471ce82505567aee8a3805199ded75014c9349->leave($__internal_c8471288e0f01c5a89431428a1471ce82505567aee8a3805199ded75014c9349_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4467b2aac9fa3a531e055d5630967e450577228be9e07f9b80f3514a9b5d96d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4467b2aac9fa3a531e055d5630967e450577228be9e07f9b80f3514a9b5d96d8->enter($__internal_4467b2aac9fa3a531e055d5630967e450577228be9e07f9b80f3514a9b5d96d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f48edf5a4ae9ffc1252f5bc85b0eb9dc7d6f9a91a74f3e0a1de89474afeb6211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48edf5a4ae9ffc1252f5bc85b0eb9dc7d6f9a91a74f3e0a1de89474afeb6211->enter($__internal_f48edf5a4ae9ffc1252f5bc85b0eb9dc7d6f9a91a74f3e0a1de89474afeb6211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f48edf5a4ae9ffc1252f5bc85b0eb9dc7d6f9a91a74f3e0a1de89474afeb6211->leave($__internal_f48edf5a4ae9ffc1252f5bc85b0eb9dc7d6f9a91a74f3e0a1de89474afeb6211_prof);

        
        $__internal_4467b2aac9fa3a531e055d5630967e450577228be9e07f9b80f3514a9b5d96d8->leave($__internal_4467b2aac9fa3a531e055d5630967e450577228be9e07f9b80f3514a9b5d96d8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
