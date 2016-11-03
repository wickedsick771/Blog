<?php

/* user/profile.html.twig */
class __TwigTemplate_fada95159cefba0aebea576a2b47ff43a085867dbc1d67da87312a1d14d3c515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2188a7c92102004a363141b98cb821b5b9e597e4f8c543cba95232858d72909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2188a7c92102004a363141b98cb821b5b9e597e4f8c543cba95232858d72909->enter($__internal_b2188a7c92102004a363141b98cb821b5b9e597e4f8c543cba95232858d72909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2188a7c92102004a363141b98cb821b5b9e597e4f8c543cba95232858d72909->leave($__internal_b2188a7c92102004a363141b98cb821b5b9e597e4f8c543cba95232858d72909_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_2336c9820e3a557a9531721c48c7812e85978f1381acb93ca35b95aa385bbf77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2336c9820e3a557a9531721c48c7812e85978f1381acb93ca35b95aa385bbf77->enter($__internal_2336c9820e3a557a9531721c48c7812e85978f1381acb93ca35b95aa385bbf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_2336c9820e3a557a9531721c48c7812e85978f1381acb93ca35b95aa385bbf77->leave($__internal_2336c9820e3a557a9531721c48c7812e85978f1381acb93ca35b95aa385bbf77_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_6ae29ded1062757ae579a8ac221160983f9eae2afa9fc10c1b49646ed6cd5160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae29ded1062757ae579a8ac221160983f9eae2afa9fc10c1b49646ed6cd5160->enter($__internal_6ae29ded1062757ae579a8ac221160983f9eae2afa9fc10c1b49646ed6cd5160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "
        <br>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "
    </div>
";
        
        $__internal_6ae29ded1062757ae579a8ac221160983f9eae2afa9fc10c1b49646ed6cd5160->leave($__internal_6ae29ded1062757ae579a8ac221160983f9eae2afa9fc10c1b49646ed6cd5160_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'profile' %}

{% block main %}
    <div>
        {{ user.email }}
        <br>
        {{ user.fullName }}
    </div>
{% endblock %}
";
    }
}
