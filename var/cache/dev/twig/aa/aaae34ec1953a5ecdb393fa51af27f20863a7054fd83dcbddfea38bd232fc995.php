<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e376c751e330419d3f9a1a4b0a70adfbd1d2211ad6355062ee234a1596327f48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24f4bf5a6b11130a53db5994cd694db8e1ec068d7b802c22de88f3f956854c61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f4bf5a6b11130a53db5994cd694db8e1ec068d7b802c22de88f3f956854c61->enter($__internal_24f4bf5a6b11130a53db5994cd694db8e1ec068d7b802c22de88f3f956854c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0f6416dfa25d605e792cc43980e3404ca190a6dc7418ccf683d7e63c02eeedcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6416dfa25d605e792cc43980e3404ca190a6dc7418ccf683d7e63c02eeedcf->enter($__internal_0f6416dfa25d605e792cc43980e3404ca190a6dc7418ccf683d7e63c02eeedcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24f4bf5a6b11130a53db5994cd694db8e1ec068d7b802c22de88f3f956854c61->leave($__internal_24f4bf5a6b11130a53db5994cd694db8e1ec068d7b802c22de88f3f956854c61_prof);

        
        $__internal_0f6416dfa25d605e792cc43980e3404ca190a6dc7418ccf683d7e63c02eeedcf->leave($__internal_0f6416dfa25d605e792cc43980e3404ca190a6dc7418ccf683d7e63c02eeedcf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4659d6f7778a464552aa6bd7a3a081a9d75a7efa8ae080ecf4735b7481b999b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4659d6f7778a464552aa6bd7a3a081a9d75a7efa8ae080ecf4735b7481b999b8->enter($__internal_4659d6f7778a464552aa6bd7a3a081a9d75a7efa8ae080ecf4735b7481b999b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c0dbc42a5781f8f53196c81d38555c2ab19e0d86f8ab7f88a21e188442889c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0dbc42a5781f8f53196c81d38555c2ab19e0d86f8ab7f88a21e188442889c93->enter($__internal_c0dbc42a5781f8f53196c81d38555c2ab19e0d86f8ab7f88a21e188442889c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c0dbc42a5781f8f53196c81d38555c2ab19e0d86f8ab7f88a21e188442889c93->leave($__internal_c0dbc42a5781f8f53196c81d38555c2ab19e0d86f8ab7f88a21e188442889c93_prof);

        
        $__internal_4659d6f7778a464552aa6bd7a3a081a9d75a7efa8ae080ecf4735b7481b999b8->leave($__internal_4659d6f7778a464552aa6bd7a3a081a9d75a7efa8ae080ecf4735b7481b999b8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ceddab70c7aa04cc478d0e1752b11aa1a1214136d9be6aca20f37bd593e3c3a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceddab70c7aa04cc478d0e1752b11aa1a1214136d9be6aca20f37bd593e3c3a5->enter($__internal_ceddab70c7aa04cc478d0e1752b11aa1a1214136d9be6aca20f37bd593e3c3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_594f539f0831ca4ab3a1eab8a03915df77b9ba1d0615f1dcddfc5b1ce456665d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594f539f0831ca4ab3a1eab8a03915df77b9ba1d0615f1dcddfc5b1ce456665d->enter($__internal_594f539f0831ca4ab3a1eab8a03915df77b9ba1d0615f1dcddfc5b1ce456665d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_594f539f0831ca4ab3a1eab8a03915df77b9ba1d0615f1dcddfc5b1ce456665d->leave($__internal_594f539f0831ca4ab3a1eab8a03915df77b9ba1d0615f1dcddfc5b1ce456665d_prof);

        
        $__internal_ceddab70c7aa04cc478d0e1752b11aa1a1214136d9be6aca20f37bd593e3c3a5->leave($__internal_ceddab70c7aa04cc478d0e1752b11aa1a1214136d9be6aca20f37bd593e3c3a5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_61b5222c537b2626dac7f99c9fde5b6d144548681ca7b1f36953f2b2dff44f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b5222c537b2626dac7f99c9fde5b6d144548681ca7b1f36953f2b2dff44f12->enter($__internal_61b5222c537b2626dac7f99c9fde5b6d144548681ca7b1f36953f2b2dff44f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36a36d1081884583ca71d8d2b18ddd722f596f1cce6e22f69a53f5379e07c353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a36d1081884583ca71d8d2b18ddd722f596f1cce6e22f69a53f5379e07c353->enter($__internal_36a36d1081884583ca71d8d2b18ddd722f596f1cce6e22f69a53f5379e07c353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_36a36d1081884583ca71d8d2b18ddd722f596f1cce6e22f69a53f5379e07c353->leave($__internal_36a36d1081884583ca71d8d2b18ddd722f596f1cce6e22f69a53f5379e07c353_prof);

        
        $__internal_61b5222c537b2626dac7f99c9fde5b6d144548681ca7b1f36953f2b2dff44f12->leave($__internal_61b5222c537b2626dac7f99c9fde5b6d144548681ca7b1f36953f2b2dff44f12_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
