<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5ffa47c0a90ceb874b641b1204460649909be473a41c956d1894c7e2098ea20f extends Twig_Template
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
        $__internal_3a2654fbeccf38349d9304cb2f0015cd0f6346ec64642c96e20ff1b93ef2b2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2654fbeccf38349d9304cb2f0015cd0f6346ec64642c96e20ff1b93ef2b2b3->enter($__internal_3a2654fbeccf38349d9304cb2f0015cd0f6346ec64642c96e20ff1b93ef2b2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3a2654fbeccf38349d9304cb2f0015cd0f6346ec64642c96e20ff1b93ef2b2b3->leave($__internal_3a2654fbeccf38349d9304cb2f0015cd0f6346ec64642c96e20ff1b93ef2b2b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
