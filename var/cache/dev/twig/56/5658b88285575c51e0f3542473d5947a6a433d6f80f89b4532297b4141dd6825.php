<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_f651e9e297dab8fb48a5ed42d2736c8d522a2c4cf9ab9a862bfab27d02dbb280 extends Twig_Template
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
        $__internal_26583463dda41f8e9712abc9c7bdfc332122ecdf07461a8b64fab2382baa6cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26583463dda41f8e9712abc9c7bdfc332122ecdf07461a8b64fab2382baa6cfa->enter($__internal_26583463dda41f8e9712abc9c7bdfc332122ecdf07461a8b64fab2382baa6cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_26583463dda41f8e9712abc9c7bdfc332122ecdf07461a8b64fab2382baa6cfa->leave($__internal_26583463dda41f8e9712abc9c7bdfc332122ecdf07461a8b64fab2382baa6cfa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
