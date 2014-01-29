<?php

/* ::base.html.twig */
class __TwigTemplate_872122c54080636ceab9ec28e329db69df9002502e4e2a6722ea71fb41fd5336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'navigation' => array($this, 'block_navigation'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"it\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-COMPATIBLE\" content=\"IE=edge\">

    <title>Areaoperatori Rest reference implementation</title>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body>
";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "</body>
</html>
";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"><\\/script>')</script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "    <div id=\"wrap\">
        ";
        // line 32
        $this->displayBlock('navigation', $context, $blocks);
        // line 51
        echo "
        <div class=\"container\">
            ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "        </div>
    </div>
";
    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        // line 33
        echo "            <header role=\"banner\" class=\"navbar navbar-default\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                                data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"/\">Rest client</a>
                    </div>
                    <nav role=\"navigation\" class=\"navbar-collapse collapse\" style=\"height: 1px;\">
                        ";
        // line 46
        echo $this->env->getExtension('knp_menu')->render("WellnetTestBundle:Builder:mainMenu", array("style" => "navbar"));
        echo "
                    </nav>
                </div>
            </header>
        ";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 53,  130 => 46,  115 => 33,  112 => 32,  106 => 54,  104 => 53,  100 => 51,  98 => 32,  95 => 31,  92 => 30,  86 => 23,  82 => 22,  79 => 21,  76 => 20,  69 => 17,  66 => 16,  60 => 57,  58 => 30,  51 => 26,  48 => 25,  46 => 20,  43 => 19,  41 => 16,  24 => 1,  31 => 4,  28 => 3,);
    }
}
