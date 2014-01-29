<?php

/* WellnetTestBundle:Default:response.html.twig */
class __TwigTemplate_467fc4116c0d6f35f7f1a3132b96a76f0fc1d7bcdc8348d85a48b93f4e7745ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <script>
        \$(document).ready(function () {
            \$('#response').html('<pre>' + JSON.stringify(";
        // line 6
        echo $this->getAttribute($this->getContext($context, "data"), "body");
        echo ", null, '  ') + '</pre>');
        });
    </script>

    <div class=\"page-header\">
        <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "query"), "get", array(0 => "method"), "method"), "html", null, true);
        echo "</h1>
    </div>

    <p><b>Code</b>: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "statusCode"), "html", null, true);
        echo "</p>
    <p><b>Headers</b>: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "getRawHeaders"), "html", null, true);
        echo "</p>
    <p><b>Response</b>:</p>
    <div id=\"response\" style=\"background-color:#ccc; padding:10px; width: 1000px\"></div>
";
    }

    public function getTemplateName()
    {
        return "WellnetTestBundle:Default:response.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  49 => 14,  43 => 11,  35 => 6,  31 => 4,  28 => 3,);
    }
}
