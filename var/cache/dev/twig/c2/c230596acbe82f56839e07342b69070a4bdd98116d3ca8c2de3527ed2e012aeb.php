<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_120f475cf0e340d5823505ec3cc969b5c51d6532752af887f8361ce5d83a7739 extends Twig_Template
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
        $__internal_794f0f89229090b96d7ef0083d3a3e772bb951a2ab20b4e852dc67767993a87c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_794f0f89229090b96d7ef0083d3a3e772bb951a2ab20b4e852dc67767993a87c->enter($__internal_794f0f89229090b96d7ef0083d3a3e772bb951a2ab20b4e852dc67767993a87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_794f0f89229090b96d7ef0083d3a3e772bb951a2ab20b4e852dc67767993a87c->leave($__internal_794f0f89229090b96d7ef0083d3a3e772bb951a2ab20b4e852dc67767993a87c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
