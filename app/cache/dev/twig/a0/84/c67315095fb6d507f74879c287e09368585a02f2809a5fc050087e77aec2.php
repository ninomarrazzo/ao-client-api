<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_a084c67315095fb6d507f74879c287e09368585a02f2809a5fc050087e77aec2 extends Twig_Template
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
        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == $this->getContext($context, "position"))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  75 => 28,  70 => 26,  62 => 24,  50 => 15,  42 => 12,  32 => 6,  30 => 5,  26 => 3,  19 => 1,  507 => 4,  505 => 3,  501 => 2,  490 => 1,  480 => 182,  470 => 180,  465 => 176,  462 => 175,  452 => 171,  449 => 170,  446 => 169,  443 => 168,  441 => 167,  438 => 166,  426 => 164,  420 => 160,  416 => 158,  412 => 156,  408 => 154,  406 => 153,  404 => 152,  402 => 151,  400 => 150,  396 => 147,  392 => 145,  388 => 143,  384 => 141,  380 => 139,  377 => 137,  373 => 136,  370 => 133,  368 => 132,  365 => 129,  362 => 127,  360 => 126,  358 => 124,  355 => 121,  352 => 119,  350 => 118,  347 => 116,  345 => 115,  342 => 113,  340 => 112,  337 => 110,  334 => 108,  332 => 107,  330 => 106,  328 => 104,  325 => 103,  321 => 100,  319 => 99,  302 => 96,  285 => 95,  283 => 94,  280 => 92,  278 => 91,  276 => 89,  274 => 88,  271 => 86,  262 => 81,  259 => 80,  257 => 79,  254 => 78,  245 => 72,  240 => 71,  237 => 70,  234 => 69,  232 => 68,  229 => 67,  221 => 62,  217 => 61,  214 => 60,  212 => 59,  209 => 58,  206 => 57,  203 => 56,  200 => 55,  197 => 54,  195 => 53,  192 => 52,  189 => 51,  186 => 50,  183 => 49,  180 => 48,  177 => 47,  174 => 46,  171 => 45,  168 => 44,  165 => 43,  162 => 42,  159 => 41,  156 => 40,  153 => 39,  150 => 38,  147 => 37,  144 => 36,  141 => 35,  136 => 33,  133 => 32,  131 => 31,  128 => 30,  124 => 27,  122 => 26,  119 => 25,  110 => 21,  108 => 20,  105 => 15,  96 => 10,  93 => 9,  89 => 182,  84 => 180,  81 => 179,  74 => 166,  71 => 165,  64 => 103,  61 => 102,  59 => 86,  56 => 85,  54 => 78,  49 => 67,  44 => 30,  39 => 15,  36 => 14,  34 => 9,  139 => 34,  130 => 46,  115 => 23,  112 => 22,  106 => 54,  104 => 53,  100 => 51,  98 => 11,  95 => 31,  92 => 30,  86 => 181,  82 => 22,  79 => 29,  76 => 174,  69 => 164,  66 => 25,  60 => 57,  58 => 30,  51 => 77,  48 => 25,  46 => 14,  43 => 19,  41 => 29,  24 => 2,  31 => 8,  28 => 3,);
    }
}
