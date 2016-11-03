<?php

/* blog/index.html.twig */
class __TwigTemplate_fa916620dd570920006ec9077efdde6ecb33d4d92e4993e0032412f86faff145 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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
        $__internal_632927e42fd7beb7566df4af7d61e5a44b6c3f941a18af3bfcd925c930d917eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632927e42fd7beb7566df4af7d61e5a44b6c3f941a18af3bfcd925c930d917eb->enter($__internal_632927e42fd7beb7566df4af7d61e5a44b6c3f941a18af3bfcd925c930d917eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_632927e42fd7beb7566df4af7d61e5a44b6c3f941a18af3bfcd925c930d917eb->leave($__internal_632927e42fd7beb7566df4af7d61e5a44b6c3f941a18af3bfcd925c930d917eb_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_d2714ba33dc3ef46015a71a66d38e6445558b7c326fbe48a1e0d2e9a61342fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2714ba33dc3ef46015a71a66d38e6445558b7c326fbe48a1e0d2e9a61342fd9->enter($__internal_d2714ba33dc3ef46015a71a66d38e6445558b7c326fbe48a1e0d2e9a61342fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
        echo "\">Create an Article</a>


    <main>
        <div class=\"container body-content\">
            <div class=\"row\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 11
            echo "                <div class=\"col-md-6\">
                    <article>
                        <header>
                            <h2>
                                ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "
                            </h2>
                        </header>
                        <p>
                            ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo "
                        </p>
                    </article>
                    <small class=\"author\">

                    </small>

                    <footer>
                        <div class=\"pull-right\">
                            <a class=\"btn btn-default btn-xs\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Read more &raquo;</a>
                        </div>
                    </footer>
                </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "

            </div>
            </div>
    </main>

";
        
        $__internal_d2714ba33dc3ef46015a71a66d38e6445558b7c326fbe48a1e0d2e9a61342fd9->leave($__internal_d2714ba33dc3ef46015a71a66d38e6445558b7c326fbe48a1e0d2e9a61342fd9_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 33,  79 => 28,  67 => 19,  60 => 15,  54 => 11,  50 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <a href=\"{{ path('article_create') }}\">Create an Article</a>


    <main>
        <div class=\"container body-content\">
            <div class=\"row\">
                {% for article in articles %}
                <div class=\"col-md-6\">
                    <article>
                        <header>
                            <h2>
                                {{ article.title }}
                            </h2>
                        </header>
                        <p>
                            {{ article.content }}
                        </p>
                    </article>
                    <small class=\"author\">

                    </small>

                    <footer>
                        <div class=\"pull-right\">
                            <a class=\"btn btn-default btn-xs\" href=\"{{ path('article_show', {'id': article.id}) }}\">Read more &raquo;</a>
                        </div>
                    </footer>
                </div>
                    {% endfor %}


            </div>
            </div>
    </main>

{% endblock %}
";
    }
}
