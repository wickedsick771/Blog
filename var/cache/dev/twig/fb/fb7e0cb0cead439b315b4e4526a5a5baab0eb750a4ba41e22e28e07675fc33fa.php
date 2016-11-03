<?php

/* article/create.html.twig */
class __TwigTemplate_3287c138125b6afdb588a23dc4233cd5fb40c978363ac61d443126d54f962a8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/create.html.twig", 1);
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
        $__internal_bf6b7d8cbfaabdc5425dbcd04d20db3d8e91675ac312443f3c82b5b0129f8785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6b7d8cbfaabdc5425dbcd04d20db3d8e91675ac312443f3c82b5b0129f8785->enter($__internal_bf6b7d8cbfaabdc5425dbcd04d20db3d8e91675ac312443f3c82b5b0129f8785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf6b7d8cbfaabdc5425dbcd04d20db3d8e91675ac312443f3c82b5b0129f8785->leave($__internal_bf6b7d8cbfaabdc5425dbcd04d20db3d8e91675ac312443f3c82b5b0129f8785_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e3031df99e3b2921f24abe9973a03c3cd0c52dda85e21c97785b8885108e04fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3031df99e3b2921f24abe9973a03c3cd0c52dda85e21c97785b8885108e04fb->enter($__internal_e3031df99e3b2921f24abe9973a03c3cd0c52dda85e21c97785b8885108e04fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "create_article";
        
        $__internal_e3031df99e3b2921f24abe9973a03c3cd0c52dda85e21c97785b8885108e04fb->leave($__internal_e3031df99e3b2921f24abe9973a03c3cd0c52dda85e21c97785b8885108e04fb_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_386f7d5c460d0994d4b51a4da1c4f11019f223f48ffd469058c3ecab06273bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386f7d5c460d0994d4b51a4da1c4f11019f223f48ffd469058c3ecab06273bd2->enter($__internal_386f7d5c460d0994d4b51a4da1c4f11019f223f48ffd469058c3ecab06273bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
        echo "\" method=\"post\">
                <fieldset>
                    <legend>Create new Article</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_create\">Title:</label>
                        <div class=\"col-sm-4 \">
                            <input class=\"form-control\" id=\"article_create\" placeholder=\"Enter a title...\" name=\"article[title]\" required type=\"text\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Content:</label>
                        <div class=\"col-sm-4 \">
                            <textarea class=\"form-control\" id=\"article_content\" placeholder=\"Enter a content...\" name=\"article[content]\" required>

                                </textarea>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Create</button>
                        </div>
                    </div>

                    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_386f7d5c460d0994d4b51a4da1c4f11019f223f48ffd469058c3ecab06273bd2->leave($__internal_386f7d5c460d0994d4b51a4da1c4f11019f223f48ffd469058c3ecab06273bd2_prof);

    }

    public function getTemplateName()
    {
        return "article/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 32,  79 => 27,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'create_article' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('article_create') }}\" method=\"post\">
                <fieldset>
                    <legend>Create new Article</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_create\">Title:</label>
                        <div class=\"col-sm-4 \">
                            <input class=\"form-control\" id=\"article_create\" placeholder=\"Enter a title...\" name=\"article[title]\" required type=\"text\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Content:</label>
                        <div class=\"col-sm-4 \">
                            <textarea class=\"form-control\" id=\"article_content\" placeholder=\"Enter a content...\" name=\"article[content]\" required>

                                </textarea>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('blog_index') }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Create</button>
                        </div>
                    </div>

                    {{  form_row(form._token) }}
                </fieldset>
            </form>
        </div>
    </div>
{% endblock %}
";
    }
}
