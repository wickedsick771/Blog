<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_02b2c6ded3cb2beefa580c378778f158a2ce4ea3169267a8de38ab6656198bf5 extends Twig_Template
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
        $__internal_2a34621e0f665d6c893299b05392fa22cc9fb4b1783de6e5093172d52d5a7077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a34621e0f665d6c893299b05392fa22cc9fb4b1783de6e5093172d52d5a7077->enter($__internal_2a34621e0f665d6c893299b05392fa22cc9fb4b1783de6e5093172d52d5a7077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2a34621e0f665d6c893299b05392fa22cc9fb4b1783de6e5093172d52d5a7077->leave($__internal_2a34621e0f665d6c893299b05392fa22cc9fb4b1783de6e5093172d52d5a7077_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
