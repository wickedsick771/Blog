<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5bb64556931aa27ff3b4ad3b347577281a20a9fc648a80f3d2ec1d0dc7df640a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f150a1ecee0b5c3df46be5fc86076e81fc08e97ebc45f2a295286497e0d99e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f150a1ecee0b5c3df46be5fc86076e81fc08e97ebc45f2a295286497e0d99e6c->enter($__internal_f150a1ecee0b5c3df46be5fc86076e81fc08e97ebc45f2a295286497e0d99e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f150a1ecee0b5c3df46be5fc86076e81fc08e97ebc45f2a295286497e0d99e6c->leave($__internal_f150a1ecee0b5c3df46be5fc86076e81fc08e97ebc45f2a295286497e0d99e6c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0bbf8ee3c06c5d11e7963f77a26fc26b85d10a1d3f52bc82a748c26c86110c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bbf8ee3c06c5d11e7963f77a26fc26b85d10a1d3f52bc82a748c26c86110c5->enter($__internal_b0bbf8ee3c06c5d11e7963f77a26fc26b85d10a1d3f52bc82a748c26c86110c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b0bbf8ee3c06c5d11e7963f77a26fc26b85d10a1d3f52bc82a748c26c86110c5->leave($__internal_b0bbf8ee3c06c5d11e7963f77a26fc26b85d10a1d3f52bc82a748c26c86110c5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_86220345f11f1050362f1e44ee57887d68c6768e59fca8ad92d88f2d8a5af559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86220345f11f1050362f1e44ee57887d68c6768e59fca8ad92d88f2d8a5af559->enter($__internal_86220345f11f1050362f1e44ee57887d68c6768e59fca8ad92d88f2d8a5af559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_86220345f11f1050362f1e44ee57887d68c6768e59fca8ad92d88f2d8a5af559->leave($__internal_86220345f11f1050362f1e44ee57887d68c6768e59fca8ad92d88f2d8a5af559_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc378820471499e385ed90e6460587c43edc92910782f84d811603710fc24f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc378820471499e385ed90e6460587c43edc92910782f84d811603710fc24f15->enter($__internal_fc378820471499e385ed90e6460587c43edc92910782f84d811603710fc24f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fc378820471499e385ed90e6460587c43edc92910782f84d811603710fc24f15->leave($__internal_fc378820471499e385ed90e6460587c43edc92910782f84d811603710fc24f15_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
