<?php

/* base.html.twig */
class __TwigTemplate_33a670d73ac86f40234e18d75e46f84bb4ded14d5c2a3ee34faba9cfa13aa9c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1b0ff779d2a7150ed9dacca06eb97ce0313951e89f669bffe7f15400d3783dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b0ff779d2a7150ed9dacca06eb97ce0313951e89f669bffe7f15400d3783dc->enter($__internal_c1b0ff779d2a7150ed9dacca06eb97ce0313951e89f669bffe7f15400d3783dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 93
        echo "
<div class=\"container body-container\">
    ";
        // line 95
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "</div>

";
        // line 104
        $this->displayBlock('footer', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('javascripts', $context, $blocks);
        // line 118
        echo "
</body>
</html>
";
        
        $__internal_c1b0ff779d2a7150ed9dacca06eb97ce0313951e89f669bffe7f15400d3783dc->leave($__internal_c1b0ff779d2a7150ed9dacca06eb97ce0313951e89f669bffe7f15400d3783dc_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_f638e1f64dae216f5ab446cfa5795260b92924737fe8fe6684e5e001eb406406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f638e1f64dae216f5ab446cfa5795260b92924737fe8fe6684e5e001eb406406->enter($__internal_f638e1f64dae216f5ab446cfa5795260b92924737fe8fe6684e5e001eb406406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SoftUni Blog";
        
        $__internal_f638e1f64dae216f5ab446cfa5795260b92924737fe8fe6684e5e001eb406406->leave($__internal_f638e1f64dae216f5ab446cfa5795260b92924737fe8fe6684e5e001eb406406_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_829aa226ff9b9a0f5bd1b3e8377eca7a2f0e61ef43dd961cc2a093909fb46134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829aa226ff9b9a0f5bd1b3e8377eca7a2f0e61ef43dd961cc2a093909fb46134->enter($__internal_829aa226ff9b9a0f5bd1b3e8377eca7a2f0e61ef43dd961cc2a093909fb46134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_829aa226ff9b9a0f5bd1b3e8377eca7a2f0e61ef43dd961cc2a093909fb46134->leave($__internal_829aa226ff9b9a0f5bd1b3e8377eca7a2f0e61ef43dd961cc2a093909fb46134_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1487c2120f7874674ca330cd9ec1c6c29ca51cb2257b71dcbdd1817cd827efb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1487c2120f7874674ca330cd9ec1c6c29ca51cb2257b71dcbdd1817cd827efb1->enter($__internal_1487c2120f7874674ca330cd9ec1c6c29ca51cb2257b71dcbdd1817cd827efb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_1487c2120f7874674ca330cd9ec1c6c29ca51cb2257b71dcbdd1817cd827efb1->leave($__internal_1487c2120f7874674ca330cd9ec1c6c29ca51cb2257b71dcbdd1817cd827efb1_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_01faef509426439abafcaaebf4cd3898750d525a640d4697fdecc79e4f1e330c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01faef509426439abafcaaebf4cd3898750d525a640d4697fdecc79e4f1e330c->enter($__internal_01faef509426439abafcaaebf4cd3898750d525a640d4697fdecc79e4f1e330c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <nav class=\"navbar navbar-inverse\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\" class=\"navbar-brand\">Wicked's BLOG</a>
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-2\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" src=\"http://www.crowdfundinsider.com/wp-content/uploads/2014/07/Fundly-Small-Logo.png\"></a>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-2\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">View all Articles</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"#\">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class=\"navbar-form navbar-left\" role=\"search\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                    </form>
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 59
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 60
            echo "                            <li>
                                <a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
            echo "\">
                                    Create Article
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
            echo "\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                    Logout
                                </a>
                            </li>
                        ";
        } else {
            // line 76
            echo "                            <li>
                                <a href=\"";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                                    LOGIN
                                </a>
                            </li>
                        ";
        }
        // line 87
        echo "                    </ul>
                </div>
            </div>
        </nav>
    </header>
";
        
        $__internal_01faef509426439abafcaaebf4cd3898750d525a640d4697fdecc79e4f1e330c->leave($__internal_01faef509426439abafcaaebf4cd3898750d525a640d4697fdecc79e4f1e330c_prof);

    }

    // line 95
    public function block_body($context, array $blocks = array())
    {
        $__internal_29504caa2eaaadaaef21b248a282f6da3a8af8db37ffd1ae0cea1e7c480c032a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29504caa2eaaadaaef21b248a282f6da3a8af8db37ffd1ae0cea1e7c480c032a->enter($__internal_29504caa2eaaadaaef21b248a282f6da3a8af8db37ffd1ae0cea1e7c480c032a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 96
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 98
        $this->displayBlock('main', $context, $blocks);
        // line 99
        echo "            </div>
        </div>
    ";
        
        $__internal_29504caa2eaaadaaef21b248a282f6da3a8af8db37ffd1ae0cea1e7c480c032a->leave($__internal_29504caa2eaaadaaef21b248a282f6da3a8af8db37ffd1ae0cea1e7c480c032a_prof);

    }

    // line 98
    public function block_main($context, array $blocks = array())
    {
        $__internal_60eac6e757170d70bd9c8b30ee98297376de0a3f7dd5dfef7ed349415bad135f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60eac6e757170d70bd9c8b30ee98297376de0a3f7dd5dfef7ed349415bad135f->enter($__internal_60eac6e757170d70bd9c8b30ee98297376de0a3f7dd5dfef7ed349415bad135f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_60eac6e757170d70bd9c8b30ee98297376de0a3f7dd5dfef7ed349415bad135f->leave($__internal_60eac6e757170d70bd9c8b30ee98297376de0a3f7dd5dfef7ed349415bad135f_prof);

    }

    // line 104
    public function block_footer($context, array $blocks = array())
    {
        $__internal_13ef16c86d5cce699a7bb7ef5802584f7027acbe69ee4f40dd6a28c93b40b157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ef16c86d5cce699a7bb7ef5802584f7027acbe69ee4f40dd6a28c93b40b157->enter($__internal_13ef16c86d5cce699a7bb7ef5802584f7027acbe69ee4f40dd6a28c93b40b157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 105
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
";
        
        $__internal_13ef16c86d5cce699a7bb7ef5802584f7027acbe69ee4f40dd6a28c93b40b157->leave($__internal_13ef16c86d5cce699a7bb7ef5802584f7027acbe69ee4f40dd6a28c93b40b157_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a8785aebb1f8f07398c1ceee05c9274ab0777a424b68fa48468879678c8d6191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8785aebb1f8f07398c1ceee05c9274ab0777a424b68fa48468879678c8d6191->enter($__internal_a8785aebb1f8f07398c1ceee05c9274ab0777a424b68fa48468879678c8d6191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a8785aebb1f8f07398c1ceee05c9274ab0777a424b68fa48468879678c8d6191->leave($__internal_a8785aebb1f8f07398c1ceee05c9274ab0777a424b68fa48468879678c8d6191_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 116,  303 => 115,  299 => 114,  294 => 113,  288 => 112,  276 => 105,  270 => 104,  259 => 98,  250 => 99,  248 => 98,  244 => 96,  238 => 95,  226 => 87,  218 => 82,  210 => 77,  207 => 76,  199 => 71,  191 => 66,  183 => 61,  180 => 60,  178 => 59,  154 => 38,  139 => 26,  133 => 22,  127 => 21,  116 => 19,  107 => 14,  102 => 13,  96 => 12,  84 => 11,  74 => 118,  72 => 112,  69 => 111,  67 => 104,  63 => 102,  61 => 95,  57 => 93,  55 => 21,  50 => 19,  43 => 16,  41 => 12,  37 => 11,  30 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}SoftUni Blog{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <nav class=\"navbar navbar-inverse\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('blog_index') }}\" class=\"navbar-brand\">Wicked's BLOG</a>
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-2\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" src=\"http://www.crowdfundinsider.com/wp-content/uploads/2014/07/Fundly-Small-Logo.png\"></a>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-2\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"{{ path('blog_index') }}\">View all Articles</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"#\">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class=\"navbar-form navbar-left\" role=\"search\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                    </form>
                    <ul class=\"nav navbar-nav navbar-right\">
                        {% if app.user %}
                            <li>
                                <a href=\"{{ path('article_create') }}\">
                                    Create Article
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('user_profile') }}\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('security_logout') }}\">
                                    Logout
                                </a>
                            </li>
                        {% else %}
                            <li>
                                <a href=\"{{ path('user_register') }}\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('security_login') }}\">
                                    LOGIN
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </nav>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>

{% block footer %}
    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
