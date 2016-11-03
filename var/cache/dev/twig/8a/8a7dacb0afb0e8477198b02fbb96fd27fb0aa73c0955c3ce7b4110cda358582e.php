<?php

/* article/show.html.twig */
class __TwigTemplate_7115f6a7ea489e8d39252d24c34bce9b1f46c0a788605add42bc151cca28ac10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4539b18bde8e2279343b78ea81c6a085bedfdbf4d042dc70b6880fd3a75b4046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4539b18bde8e2279343b78ea81c6a085bedfdbf4d042dc70b6880fd3a75b4046->enter($__internal_4539b18bde8e2279343b78ea81c6a085bedfdbf4d042dc70b6880fd3a75b4046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4539b18bde8e2279343b78ea81c6a085bedfdbf4d042dc70b6880fd3a75b4046->leave($__internal_4539b18bde8e2279343b78ea81c6a085bedfdbf4d042dc70b6880fd3a75b4046_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_2c6c3c2b258759a49a80c59468d5d921a8f73ec88cadab3d86e35a22a909b3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6c3c2b258759a49a80c59468d5d921a8f73ec88cadab3d86e35a22a909b3b8->enter($__internal_2c6c3c2b258759a49a80c59468d5d921a8f73ec88cadab3d86e35a22a909b3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <article>
                    <header>
                        <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h2>
                    </header>

                    <p>
                        ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "
                    </p>

                    <small class=\"author\">

                    </small>

                    <footer>
                        <div class=\"pull-right\">
                            <a class=\"btn btn-default btn-xs\" href=\"";
        // line 22
        echo "blog_index";
        echo "\">back &raquo;</a>
                        </div>
                    </footer>
                </article>
            </div>
        </div>
    </div>
";
        
        $__internal_2c6c3c2b258759a49a80c59468d5d921a8f73ec88cadab3d86e35a22a909b3b8->leave($__internal_2c6c3c2b258759a49a80c59468d5d921a8f73ec88cadab3d86e35a22a909b3b8_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  54 => 13,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <article>
                    <header>
                        <h2>{{ article.title }}</h2>
                    </header>

                    <p>
                        {{ article.content }}
                    </p>

                    <small class=\"author\">

                    </small>

                    <footer>
                        <div class=\"pull-right\">
                            <a class=\"btn btn-default btn-xs\" href=\"{{ 'blog_index' }}\">back &raquo;</a>
                        </div>
                    </footer>
                </article>
            </div>
        </div>
    </div>
{% endblock %}";
    }
}
