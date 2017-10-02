<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_26ce063fe9be192b956753213ac612bba2e41dc305aa519593807e55e9632f55 extends Twig_Template
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
        $__internal_8c8f9c41c8352e3e1fd6377d616f6260071f88db371a5da50d3edfd6f338843e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8f9c41c8352e3e1fd6377d616f6260071f88db371a5da50d3edfd6f338843e->enter($__internal_8c8f9c41c8352e3e1fd6377d616f6260071f88db371a5da50d3edfd6f338843e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_5166132fd45f69f838620a87b2118823c3111672ade938ec56ec463714474444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5166132fd45f69f838620a87b2118823c3111672ade938ec56ec463714474444->enter($__internal_5166132fd45f69f838620a87b2118823c3111672ade938ec56ec463714474444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_8c8f9c41c8352e3e1fd6377d616f6260071f88db371a5da50d3edfd6f338843e->leave($__internal_8c8f9c41c8352e3e1fd6377d616f6260071f88db371a5da50d3edfd6f338843e_prof);

        
        $__internal_5166132fd45f69f838620a87b2118823c3111672ade938ec56ec463714474444->leave($__internal_5166132fd45f69f838620a87b2118823c3111672ade938ec56ec463714474444_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33ef3b835ffb9a13f044dc238c9aca5c4047cbe2ce589ce60c21da349d961853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ef3b835ffb9a13f044dc238c9aca5c4047cbe2ce589ce60c21da349d961853->enter($__internal_33ef3b835ffb9a13f044dc238c9aca5c4047cbe2ce589ce60c21da349d961853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dad6594d0b2c2dedef0d81f0f805cd48dfa16a48f671ff554636c4db43fd1385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad6594d0b2c2dedef0d81f0f805cd48dfa16a48f671ff554636c4db43fd1385->enter($__internal_dad6594d0b2c2dedef0d81f0f805cd48dfa16a48f671ff554636c4db43fd1385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_dad6594d0b2c2dedef0d81f0f805cd48dfa16a48f671ff554636c4db43fd1385->leave($__internal_dad6594d0b2c2dedef0d81f0f805cd48dfa16a48f671ff554636c4db43fd1385_prof);

        
        $__internal_33ef3b835ffb9a13f044dc238c9aca5c4047cbe2ce589ce60c21da349d961853->leave($__internal_33ef3b835ffb9a13f044dc238c9aca5c4047cbe2ce589ce60c21da349d961853_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7ef9cf0618f483a5ebffaf5c2252ea8ec3ccc69cddf9328a09a0e160605707e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7ef9cf0618f483a5ebffaf5c2252ea8ec3ccc69cddf9328a09a0e160605707e->enter($__internal_d7ef9cf0618f483a5ebffaf5c2252ea8ec3ccc69cddf9328a09a0e160605707e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_20d2da63e7503782b170067629fb3f5fb479847cc389329ee039c76f520bbb9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d2da63e7503782b170067629fb3f5fb479847cc389329ee039c76f520bbb9e->enter($__internal_20d2da63e7503782b170067629fb3f5fb479847cc389329ee039c76f520bbb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_20d2da63e7503782b170067629fb3f5fb479847cc389329ee039c76f520bbb9e->leave($__internal_20d2da63e7503782b170067629fb3f5fb479847cc389329ee039c76f520bbb9e_prof);

        
        $__internal_d7ef9cf0618f483a5ebffaf5c2252ea8ec3ccc69cddf9328a09a0e160605707e->leave($__internal_d7ef9cf0618f483a5ebffaf5c2252ea8ec3ccc69cddf9328a09a0e160605707e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_31eb638699560eb0e2d5eef2fc861bab5066edfb3dc929ef36605f8ceac1e1cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31eb638699560eb0e2d5eef2fc861bab5066edfb3dc929ef36605f8ceac1e1cd->enter($__internal_31eb638699560eb0e2d5eef2fc861bab5066edfb3dc929ef36605f8ceac1e1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bba9469c5c1de64c713bd3efb97abc32523a73a7a2217cd9e3b550a0dec83fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba9469c5c1de64c713bd3efb97abc32523a73a7a2217cd9e3b550a0dec83fad->enter($__internal_bba9469c5c1de64c713bd3efb97abc32523a73a7a2217cd9e3b550a0dec83fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bba9469c5c1de64c713bd3efb97abc32523a73a7a2217cd9e3b550a0dec83fad->leave($__internal_bba9469c5c1de64c713bd3efb97abc32523a73a7a2217cd9e3b550a0dec83fad_prof);

        
        $__internal_31eb638699560eb0e2d5eef2fc861bab5066edfb3dc929ef36605f8ceac1e1cd->leave($__internal_31eb638699560eb0e2d5eef2fc861bab5066edfb3dc929ef36605f8ceac1e1cd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
