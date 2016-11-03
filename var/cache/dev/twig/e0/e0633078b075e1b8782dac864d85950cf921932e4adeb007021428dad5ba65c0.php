<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9260e605ab4b366a4ae502d5f9f7e02f38589fbca3c7a4c91797efaed082081f extends Twig_Template
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
        $__internal_ca29dcf0c2e50904a588c4f7ba02c84ccc2054c889a8e2a200beaf7e0a17edbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca29dcf0c2e50904a588c4f7ba02c84ccc2054c889a8e2a200beaf7e0a17edbb->enter($__internal_ca29dcf0c2e50904a588c4f7ba02c84ccc2054c889a8e2a200beaf7e0a17edbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca29dcf0c2e50904a588c4f7ba02c84ccc2054c889a8e2a200beaf7e0a17edbb->leave($__internal_ca29dcf0c2e50904a588c4f7ba02c84ccc2054c889a8e2a200beaf7e0a17edbb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d31726b077602b75fea54b12263231d9468d5263f508ab5acbcf69b7c6c6ddb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31726b077602b75fea54b12263231d9468d5263f508ab5acbcf69b7c6c6ddb3->enter($__internal_d31726b077602b75fea54b12263231d9468d5263f508ab5acbcf69b7c6c6ddb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d31726b077602b75fea54b12263231d9468d5263f508ab5acbcf69b7c6c6ddb3->leave($__internal_d31726b077602b75fea54b12263231d9468d5263f508ab5acbcf69b7c6c6ddb3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c384b7008c40dab7b0b9d514afea551e95b6072444df1c87c63ed278aad895b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c384b7008c40dab7b0b9d514afea551e95b6072444df1c87c63ed278aad895b3->enter($__internal_c384b7008c40dab7b0b9d514afea551e95b6072444df1c87c63ed278aad895b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c384b7008c40dab7b0b9d514afea551e95b6072444df1c87c63ed278aad895b3->leave($__internal_c384b7008c40dab7b0b9d514afea551e95b6072444df1c87c63ed278aad895b3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cb2ea64d516bb183dfa4d4cf3ce1242d04ed83b6212efca42de6a82e4f58e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb2ea64d516bb183dfa4d4cf3ce1242d04ed83b6212efca42de6a82e4f58e82->enter($__internal_7cb2ea64d516bb183dfa4d4cf3ce1242d04ed83b6212efca42de6a82e4f58e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7cb2ea64d516bb183dfa4d4cf3ce1242d04ed83b6212efca42de6a82e4f58e82->leave($__internal_7cb2ea64d516bb183dfa4d4cf3ce1242d04ed83b6212efca42de6a82e4f58e82_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
