<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a3aa6ad2bcd5e245c00abf43df6b86c26e26a2d28bd4e09816ebc7352caa704a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_feb2ee5fca79820e20e4a340137b8e9f6bab5e3c020503c429f488df8416678b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb2ee5fca79820e20e4a340137b8e9f6bab5e3c020503c429f488df8416678b->enter($__internal_feb2ee5fca79820e20e4a340137b8e9f6bab5e3c020503c429f488df8416678b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feb2ee5fca79820e20e4a340137b8e9f6bab5e3c020503c429f488df8416678b->leave($__internal_feb2ee5fca79820e20e4a340137b8e9f6bab5e3c020503c429f488df8416678b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0e79b32339063ac7d53572673da65b1be7cbf0f2a9c5d367d05e41a39cbe8eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e79b32339063ac7d53572673da65b1be7cbf0f2a9c5d367d05e41a39cbe8eb3->enter($__internal_0e79b32339063ac7d53572673da65b1be7cbf0f2a9c5d367d05e41a39cbe8eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0e79b32339063ac7d53572673da65b1be7cbf0f2a9c5d367d05e41a39cbe8eb3->leave($__internal_0e79b32339063ac7d53572673da65b1be7cbf0f2a9c5d367d05e41a39cbe8eb3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae5fc33d70966eff10a48d2a0191b3de551413e2af21af9ad956161287552b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5fc33d70966eff10a48d2a0191b3de551413e2af21af9ad956161287552b5b->enter($__internal_ae5fc33d70966eff10a48d2a0191b3de551413e2af21af9ad956161287552b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ae5fc33d70966eff10a48d2a0191b3de551413e2af21af9ad956161287552b5b->leave($__internal_ae5fc33d70966eff10a48d2a0191b3de551413e2af21af9ad956161287552b5b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cab1c5e654fb64d93429d82a3adf70eee53d9d9543ecde4065a5641dbd4f3b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab1c5e654fb64d93429d82a3adf70eee53d9d9543ecde4065a5641dbd4f3b65->enter($__internal_cab1c5e654fb64d93429d82a3adf70eee53d9d9543ecde4065a5641dbd4f3b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cab1c5e654fb64d93429d82a3adf70eee53d9d9543ecde4065a5641dbd4f3b65->leave($__internal_cab1c5e654fb64d93429d82a3adf70eee53d9d9543ecde4065a5641dbd4f3b65_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
