<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_38c25e230ed915284c3a02e5e1291fc2676075766673f1fa0c570e961582cb8f extends Twig_Template
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
        $__internal_fd82c5173fb6df36677d1a14b4cdd9f36c27ee40aa2f353febf949b682cdb6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd82c5173fb6df36677d1a14b4cdd9f36c27ee40aa2f353febf949b682cdb6be->enter($__internal_fd82c5173fb6df36677d1a14b4cdd9f36c27ee40aa2f353febf949b682cdb6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_fd82c5173fb6df36677d1a14b4cdd9f36c27ee40aa2f353febf949b682cdb6be->leave($__internal_fd82c5173fb6df36677d1a14b4cdd9f36c27ee40aa2f353febf949b682cdb6be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
