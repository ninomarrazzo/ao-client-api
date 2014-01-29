<?php

/* WellnetTestBundle:Default:threelegged.html.twig */
class __TwigTemplate_9d6f21d48b884e95897301a8ae532dae07c8a3aeb7a94a7c21865226a05c1d41 extends Twig_Template
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
        echo "    <div class=\"page-header\">
        <h1>3-legged</h1>
    </div>

    <h3>Nodes</h3>
    <ul>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("wellnet_test_3_legged", array("method" => "getNodes"));
        echo "\">getNodes</a></li>
    </ul>

";
    }

    public function getTemplateName()
    {
        return "WellnetTestBundle:Default:threelegged.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  31 => 4,  28 => 3,);
    }
}
