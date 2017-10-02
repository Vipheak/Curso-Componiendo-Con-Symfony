<?php

/* Cambia_El_Nombre.html.twig */
class __TwigTemplate_c213fbd6e5ebcda664c6a36be4572b8b09bae1d18b98ade2f17dc694c48791c3 extends Twig_Template
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
        $__internal_c863e7a457add34132cd27d2f3662720c62c04a244490f603709de5a74181ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c863e7a457add34132cd27d2f3662720c62c04a244490f603709de5a74181ecc->enter($__internal_c863e7a457add34132cd27d2f3662720c62c04a244490f603709de5a74181ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cambia_El_Nombre.html.twig"));

        $__internal_6d66356a8722d1e16fbb9fc7d14c9ffd3877681fbc7410194c1071e8a2bdbe33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d66356a8722d1e16fbb9fc7d14c9ffd3877681fbc7410194c1071e8a2bdbe33->enter($__internal_6d66356a8722d1e16fbb9fc7d14c9ffd3877681fbc7410194c1071e8a2bdbe33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cambia_El_Nombre.html.twig"));

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
        
        $__internal_c863e7a457add34132cd27d2f3662720c62c04a244490f603709de5a74181ecc->leave($__internal_c863e7a457add34132cd27d2f3662720c62c04a244490f603709de5a74181ecc_prof);

        
        $__internal_6d66356a8722d1e16fbb9fc7d14c9ffd3877681fbc7410194c1071e8a2bdbe33->leave($__internal_6d66356a8722d1e16fbb9fc7d14c9ffd3877681fbc7410194c1071e8a2bdbe33_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_efd0e9236cc279efa20ee0262a9027b0f678b6512974ed13e517e10c15afeffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd0e9236cc279efa20ee0262a9027b0f678b6512974ed13e517e10c15afeffb->enter($__internal_efd0e9236cc279efa20ee0262a9027b0f678b6512974ed13e517e10c15afeffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bdbc269a388932caebb3e94fbd49aca5a644d8dc98e3cf3e4f8682e270354a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdbc269a388932caebb3e94fbd49aca5a644d8dc98e3cf3e4f8682e270354a3c->enter($__internal_bdbc269a388932caebb3e94fbd49aca5a644d8dc98e3cf3e4f8682e270354a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bdbc269a388932caebb3e94fbd49aca5a644d8dc98e3cf3e4f8682e270354a3c->leave($__internal_bdbc269a388932caebb3e94fbd49aca5a644d8dc98e3cf3e4f8682e270354a3c_prof);

        
        $__internal_efd0e9236cc279efa20ee0262a9027b0f678b6512974ed13e517e10c15afeffb->leave($__internal_efd0e9236cc279efa20ee0262a9027b0f678b6512974ed13e517e10c15afeffb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac7301e1c34be5f74c07dd143d414c0ce7017f2f17dd9e92ddf42d5c390a2d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac7301e1c34be5f74c07dd143d414c0ce7017f2f17dd9e92ddf42d5c390a2d4a->enter($__internal_ac7301e1c34be5f74c07dd143d414c0ce7017f2f17dd9e92ddf42d5c390a2d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7e4e827aa035763b6c2a308d3d6ad604190e72d424805389e3a69361f0e7c29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4e827aa035763b6c2a308d3d6ad604190e72d424805389e3a69361f0e7c29c->enter($__internal_7e4e827aa035763b6c2a308d3d6ad604190e72d424805389e3a69361f0e7c29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7e4e827aa035763b6c2a308d3d6ad604190e72d424805389e3a69361f0e7c29c->leave($__internal_7e4e827aa035763b6c2a308d3d6ad604190e72d424805389e3a69361f0e7c29c_prof);

        
        $__internal_ac7301e1c34be5f74c07dd143d414c0ce7017f2f17dd9e92ddf42d5c390a2d4a->leave($__internal_ac7301e1c34be5f74c07dd143d414c0ce7017f2f17dd9e92ddf42d5c390a2d4a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7de5483c02d1fb5184de9fce174047a9dc0aaa87cfa4f98b78597cae3e4ad57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7de5483c02d1fb5184de9fce174047a9dc0aaa87cfa4f98b78597cae3e4ad57->enter($__internal_c7de5483c02d1fb5184de9fce174047a9dc0aaa87cfa4f98b78597cae3e4ad57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a88ca38b8a693ded654068f09fd34248a8713c784d32045cb11a5d19a55a03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a88ca38b8a693ded654068f09fd34248a8713c784d32045cb11a5d19a55a03c->enter($__internal_1a88ca38b8a693ded654068f09fd34248a8713c784d32045cb11a5d19a55a03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1a88ca38b8a693ded654068f09fd34248a8713c784d32045cb11a5d19a55a03c->leave($__internal_1a88ca38b8a693ded654068f09fd34248a8713c784d32045cb11a5d19a55a03c_prof);

        
        $__internal_c7de5483c02d1fb5184de9fce174047a9dc0aaa87cfa4f98b78597cae3e4ad57->leave($__internal_c7de5483c02d1fb5184de9fce174047a9dc0aaa87cfa4f98b78597cae3e4ad57_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_edab992138b761db8d063a68d33e2d4e231b27f80805c0d273afbc1ac0b5178a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edab992138b761db8d063a68d33e2d4e231b27f80805c0d273afbc1ac0b5178a->enter($__internal_edab992138b761db8d063a68d33e2d4e231b27f80805c0d273afbc1ac0b5178a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_513f8a24a4825a5482e07a4267e29ea8423135a5d9dbb0b4c284b44f76c97322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513f8a24a4825a5482e07a4267e29ea8423135a5d9dbb0b4c284b44f76c97322->enter($__internal_513f8a24a4825a5482e07a4267e29ea8423135a5d9dbb0b4c284b44f76c97322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_513f8a24a4825a5482e07a4267e29ea8423135a5d9dbb0b4c284b44f76c97322->leave($__internal_513f8a24a4825a5482e07a4267e29ea8423135a5d9dbb0b4c284b44f76c97322_prof);

        
        $__internal_edab992138b761db8d063a68d33e2d4e231b27f80805c0d273afbc1ac0b5178a->leave($__internal_edab992138b761db8d063a68d33e2d4e231b27f80805c0d273afbc1ac0b5178a_prof);

    }

    public function getTemplateName()
    {
        return "Cambia_El_Nombre.html.twig";
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
", "Cambia_El_Nombre.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\app\\Resources\\views\\Cambia_El_Nombre.html.twig");
    }
}
