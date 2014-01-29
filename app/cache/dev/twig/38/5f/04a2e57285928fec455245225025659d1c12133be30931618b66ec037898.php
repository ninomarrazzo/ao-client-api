<?php

/* BraincraftedBootstrapBundle:Menu:bootstrap.html.twig */
class __TwigTemplate_385f04a2e57285928fec455245225025659d1c12133be30931618b66ec037898 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'dropdownList' => array($this, 'block_dropdownList'),
            'listList' => array($this, 'block_listList'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('compressed_root', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('root', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('list', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('dropdownList', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('listList', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('children', $context, $blocks);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('item', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('linkElement', $context, $blocks);
        // line 165
        echo "
";
        // line 166
        $this->displayBlock('dropdownElement', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('dividerElement', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('spanElement', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('label', $context, $blocks);
    }

    // line 9
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_root($context, array $blocks = array())
    {
        // line 20
        $context["options"] = twig_array_merge($this->getContext($context, "options"), array("currentDepth" => 0));
        // line 21
        if ((($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "options", true), "currentClass", array(), "any", true, true)) && ($this->getAttribute($this->getContext($context, "options"), "currentClass") == "current"))) {
            // line 22
            echo "    ";
            $context["options"] = twig_array_merge($this->getContext($context, "options"), array("currentClass" => "active"));
            // line 23
            echo "    ";
            $context["options"] = twig_array_merge($this->getContext($context, "options"), array("ancestorClass" => "active"));
        }
        // line 25
        echo "
";
        // line 26
        $context["listAttributes"] = $this->getAttribute($this->getContext($context, "item"), "childrenAttributes");
        // line 27
        $this->displayBlock("list", $context, $blocks);
    }

    // line 30
    public function block_list($context, array $blocks = array())
    {
        // line 31
        if ((($this->getAttribute($this->getContext($context, "item"), "hasChildren") && (!($this->getAttribute($this->getContext($context, "options"), "depth") === 0))) && $this->getAttribute($this->getContext($context, "item"), "displayChildren"))) {
            // line 32
            echo "    ";
            $context["listAttributes"] = twig_array_merge($this->getContext($context, "listAttributes"), array("class" => trim(((($this->getAttribute($this->getContext($context, "listAttributes", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "listAttributes", true), "class"), "")) : ("")) . " nav"))));
            // line 33
            echo "
    ";
            // line 34
            $context["listClass"] = "";
            // line 35
            echo "    ";
            if (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style") == "tabs"))) {
                // line 36
                echo "        ";
                $context["listClass"] = "nav-tabs";
                // line 37
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style") == "justified-tabs"))) {
                // line 38
                echo "        ";
                $context["listClass"] = "nav-tabs nav-justified";
                // line 39
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style") == "pills"))) {
                // line 40
                echo "        ";
                $context["listClass"] = "nav-pills";
                // line 41
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style") == "justified-pills"))) {
                // line 42
                echo "        ";
                $context["listClass"] = "nav-pills nav-justified";
                // line 43
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style") == "stacked-pills"))) {
                // line 44
                echo "        ";
                $context["listClass"] = "nav-pills nav-stacked";
                // line 45
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style") == "list"))) {
                // line 46
                echo "        ";
                $context["listClass"] = "nav-list";
                // line 47
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style") == "navbar"))) {
                // line 48
                echo "        ";
                $context["listClass"] = "navbar-nav";
                // line 49
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style") == "navbar-right"))) {
                // line 50
                echo "        ";
                $context["listClass"] = "navbar-nav navbar-right";
                // line 51
                echo "    ";
            }
            // line 52
            echo "
    ";
            // line 53
            if (($this->getAttribute($this->getContext($context, "options", true), "pull", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "pull") == "right"))) {
                // line 54
                echo "        ";
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter($this->getContext($context, "listClass"), "")) : ("")) . " pull-right"));
                // line 55
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "options", true), "pull", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "pull") == "left"))) {
                // line 56
                echo "        ";
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter($this->getContext($context, "listClass"), "")) : ("")) . "pull-left"));
                // line 57
                echo "    ";
            }
            // line 58
            echo "
    ";
            // line 59
            $context["listAttributes"] = twig_array_merge($this->getContext($context, "listAttributes"), array("class" => trim((((($this->getAttribute($this->getContext($context, "listAttributes", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "listAttributes", true), "class"), "")) : ("")) . " ") . $this->getContext($context, "listClass")))));
            // line 60
            echo "
    <ul";
            // line 61
            echo $this->getAttribute($this, "attributes", array(0 => $this->getContext($context, "listAttributes")), "method");
            echo ">
        ";
            // line 62
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 67
    public function block_dropdownList($context, array $blocks = array())
    {
        // line 68
        ob_start();
        // line 69
        echo "    ";
        if ((($this->getAttribute($this->getContext($context, "item"), "hasChildren") && (!($this->getAttribute($this->getContext($context, "options"), "depth") === 0))) && (((!$this->getAttribute($this->getAttribute($this->getContext($context, "item", true), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true)) && ($this->getAttribute($this->getContext($context, "item"), "displayChildren") === true)) || (($this->getAttribute($this->getAttribute($this->getContext($context, "item", true), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getContext($context, "item"), "extras"), "dropdown") === true)) && ($this->getAttribute($this->getContext($context, "item"), "displayChildren") === true))))) {
            // line 70
            echo "        ";
            $context["listAttributes"] = twig_array_merge($this->getContext($context, "listAttributes"), array("class" => trim(((($this->getAttribute($this->getContext($context, "listAttributes", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "listAttributes", true), "class"), "")) : ("")) . " dropdown-menu"))));
            // line 71
            echo "        <ul";
            echo $this->getAttribute($this, "attributes", array(0 => $this->getContext($context, "listAttributes")), "method");
            echo ">
        ";
            // line 72
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 78
    public function block_listList($context, array $blocks = array())
    {
        // line 79
        ob_start();
        // line 80
        echo "    ";
        if ((($this->getAttribute($this->getContext($context, "item"), "hasChildren") && (!($this->getAttribute($this->getContext($context, "options"), "depth") === 0))) && $this->getAttribute($this->getContext($context, "item"), "displayChildren"))) {
            // line 81
            echo "        ";
            $this->displayBlock("children", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 86
    public function block_children($context, array $blocks = array())
    {
        // line 88
        $context["currentOptions"] = $this->getContext($context, "options");
        // line 89
        $context["currentItem"] = $this->getContext($context, "item");
        // line 91
        if ((!(null === $this->getAttribute($this->getContext($context, "options"), "depth")))) {
            // line 92
            $context["options"] = twig_array_merge($this->getContext($context, "currentOptions"), array("depth" => ($this->getAttribute($this->getContext($context, "currentOptions"), "depth") - 1)));
        }
        // line 94
        $context["options"] = twig_array_merge($this->getContext($context, "options"), array("currentDepth" => ($this->getAttribute($this->getContext($context, "options"), "currentDepth") + 1)));
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "currentItem"), "children"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 96
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        $context["item"] = $this->getContext($context, "currentItem");
        // line 100
        $context["options"] = $this->getContext($context, "currentOptions");
    }

    // line 103
    public function block_item($context, array $blocks = array())
    {
        // line 104
        if ($this->getAttribute($this->getContext($context, "item"), "displayed")) {
            // line 106
            $context["classes"] = (((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute($this->getContext($context, "item"), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 107
            if (((array_key_exists("matcher", $context) && $this->getAttribute($this->getContext($context, "matcher"), "isCurrent", array(0 => $this->getContext($context, "item")), "method")) || ($this->getAttribute($this->getContext($context, "item", true), "current", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "item"), "current")))) {
                // line 108
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "currentClass")));
            } elseif (((array_key_exists("matcher", $context) && $this->getAttribute($this->getContext($context, "matcher"), "isAncestor", array(0 => $this->getContext($context, "item"), 1 => $this->getAttribute($this->getContext($context, "options"), "depth")), "method")) || ($this->getAttribute($this->getContext($context, "item", true), "currentAncestor", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "item"), "currentAncestor")))) {
                // line 110
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "ancestorClass")));
            }
            // line 112
            if ($this->getAttribute($this->getContext($context, "item"), "actsLikeFirst")) {
                // line 113
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "firstClass")));
            }
            // line 115
            if ($this->getAttribute($this->getContext($context, "item"), "actsLikeLast")) {
                // line 116
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "lastClass")));
            }
            // line 118
            if (($this->getAttribute($this->getContext($context, "item"), "hasChildren") && (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style") == "list")) || (!($this->getAttribute($this->getContext($context, "options"), "currentDepth") === 1))))) {
                // line 119
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => "nav-header"));
            } elseif (((($this->getAttribute($this->getContext($context, "item"), "hasChildren") && $this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute($this->getContext($context, "options"), "style"), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && (((!$this->getAttribute($this->getAttribute($this->getContext($context, "item", true), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true)) && ($this->getAttribute($this->getContext($context, "item"), "displayChildren") === true)) || (($this->getAttribute($this->getAttribute($this->getContext($context, "item", true), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getContext($context, "item"), "extras"), "dropdown") === true)) && ($this->getAttribute($this->getContext($context, "item"), "displayChildren") === true))))) {
                // line 121
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => "dropdown"));
            }
            // line 124
            $context["attributes"] = $this->getAttribute($this->getContext($context, "item"), "attributes");
            // line 126
            if ((((($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style") == "navbar")) && $this->getAttribute($this->getContext($context, "attributes", true), "divider", array(), "any", true, true)) && (!twig_test_empty($this->getAttribute($this->getContext($context, "attributes"), "divider")))) && ($this->getAttribute($this->getContext($context, "options"), "currentDepth") === 1))) {
                // line 127
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => "divider-vertical"));
            } elseif (($this->getAttribute($this->getContext($context, "attributes", true), "divider", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "attributes"), "divider"))))) {
                // line 129
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => "divider"));
            }
            // line 132
            if ((!twig_test_empty($this->getContext($context, "classes")))) {
                // line 133
                $context["attributes"] = twig_array_merge($this->getContext($context, "attributes"), array("class" => twig_join_filter($this->getContext($context, "classes"), " ")));
            }
            // line 136
            echo "    <li";
            echo $this->getAttribute($this, "attributes", array(0 => $this->getContext($context, "attributes")), "method");
            echo ">";
            // line 137
            if (($this->getAttribute($this->getContext($context, "attributes", true), "divider", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "attributes"), "divider"))))) {
            } elseif ((((($this->getAttribute($this->getContext($context, "item"), "hasChildren") && $this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute($this->getContext($context, "options"), "style"), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && ($this->getAttribute($this->getContext($context, "options"), "currentDepth") === 1)) && (((!$this->getAttribute($this->getAttribute($this->getContext($context, "item", true), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true)) && ($this->getAttribute($this->getContext($context, "item"), "displayChildren") === true)) || (($this->getAttribute($this->getAttribute($this->getContext($context, "item", true), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getContext($context, "item"), "extras"), "dropdown") === true)) && ($this->getAttribute($this->getContext($context, "item"), "displayChildren") === true))))) {
                // line 139
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif ((((($this->getAttribute($this->getContext($context, "item"), "hasChildren") && $this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute($this->getContext($context, "options"), "style"), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && ($this->getAttribute($this->getContext($context, "options"), "currentDepth") === 1)) && (($this->getAttribute($this->getAttribute($this->getContext($context, "item", true), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getContext($context, "item"), "extras"), "dropdown") === false)) || $this->getAttribute($this->getContext($context, "item"), "displayChildren", array(0 => false), "method")))) {
                // line 141
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "uri"))) && ((array_key_exists("matcher", $context) && (!$this->getAttribute($this->getContext($context, "matcher"), "isCurrent", array(0 => $this->getContext($context, "item")), "method"))) || $this->getAttribute($this->getContext($context, "options"), "currentAsLink")))) {
                // line 143
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "uri"))) && (($this->getAttribute($this->getContext($context, "item", true), "current", array(), "any", true, true) && (!$this->getAttribute($this->getContext($context, "item"), "current"))) || $this->getAttribute($this->getContext($context, "options"), "currentAsLink")))) {
                // line 145
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 147
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 150
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute($this->getContext($context, "item"), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 151
            $context["childrenClasses"] = twig_array_merge($this->getContext($context, "childrenClasses"), array(0 => ("menu_level_" . $this->getAttribute($this->getContext($context, "item"), "level"))));
            // line 152
            $context["listAttributes"] = twig_array_merge($this->getAttribute($this->getContext($context, "item"), "childrenAttributes"), array("class" => twig_join_filter($this->getContext($context, "childrenClasses"), " ")));
            // line 153
            if ((($this->getAttribute($this->getContext($context, "item"), "hasChildren") && $this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true)) && (($this->getAttribute($this->getContext($context, "options"), "style") == "list") || (!($this->getAttribute($this->getContext($context, "options"), "currentDepth") === 1))))) {
                // line 154
                echo "            ";
                $this->displayBlock("listList", $context, $blocks);
            } elseif ((($this->getAttribute($this->getContext($context, "item"), "hasChildren") && $this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute($this->getContext($context, "options"), "style"), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified")))) {
                // line 156
                echo "            ";
                $this->displayBlock("dropdownList", $context, $blocks);
            } else {
                // line 158
                echo "            ";
                $this->displayBlock("list", $context, $blocks);
            }
            // line 160
            echo "    </li>
";
        }
    }

    // line 164
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "uri"), "html", null, true);
        echo "\"";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute($this->getContext($context, "item"), "linkAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 166
    public function block_dropdownElement($context, array $blocks = array())
    {
        // line 167
        ob_start();
        // line 168
        echo "    ";
        $context["labelAttributes"] = $this->getAttribute($this->getContext($context, "item"), "labelAttributes");
        // line 169
        echo "    ";
        $context["labelAttributes"] = twig_array_merge($this->getContext($context, "labelAttributes"), array("class" => trim(((($this->getAttribute($this->getContext($context, "labelAttributes", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "labelAttributes", true), "class"), "")) : ("")) . " dropdown-toggle"))));
        // line 170
        echo "    ";
        $context["labelAttributes"] = twig_array_merge($this->getContext($context, "labelAttributes"), array("data-toggle" => "dropdown"));
        // line 171
        echo "    <a href=\"#\"";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getContext($context, "labelAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo " <b class=\"caret\"></b></a>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 175
    public function block_dividerElement($context, array $blocks = array())
    {
        // line 176
        ob_start();
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 180
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<span";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute($this->getContext($context, "item"), "labelAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 182
    public function block_label($context, array $blocks = array())
    {
        if (($this->getAttribute($this->getContext($context, "options"), "allow_safe_labels") && $this->getAttribute($this->getContext($context, "item"), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter($this->getAttribute($this->getContext($context, "item"), "label"));
        } else {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter(twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "label"), "html", null, true));
        }
    }

    // line 1
    public function getattributes($_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attributes"));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 3
                if (((!(null === $this->getContext($context, "value"))) && (!($this->getContext($context, "value") === false)))) {
                    // line 4
                    echo sprintf(" %s=\"%s\"", $this->getContext($context, "name"), ((($this->getContext($context, "value") === true)) ? (twig_escape_filter($this->env, $this->getContext($context, "name"))) : (twig_escape_filter($this->env, $this->getContext($context, "value")))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Menu:bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 4,  505 => 3,  501 => 2,  490 => 1,  480 => 182,  470 => 180,  465 => 176,  462 => 175,  452 => 171,  449 => 170,  446 => 169,  443 => 168,  441 => 167,  438 => 166,  426 => 164,  420 => 160,  416 => 158,  412 => 156,  408 => 154,  406 => 153,  404 => 152,  402 => 151,  400 => 150,  396 => 147,  392 => 145,  388 => 143,  384 => 141,  380 => 139,  377 => 137,  373 => 136,  370 => 133,  368 => 132,  365 => 129,  362 => 127,  360 => 126,  358 => 124,  355 => 121,  352 => 119,  350 => 118,  347 => 116,  345 => 115,  342 => 113,  340 => 112,  337 => 110,  334 => 108,  332 => 107,  330 => 106,  328 => 104,  325 => 103,  321 => 100,  319 => 99,  302 => 96,  285 => 95,  283 => 94,  280 => 92,  278 => 91,  276 => 89,  274 => 88,  271 => 86,  262 => 81,  259 => 80,  257 => 79,  254 => 78,  245 => 72,  240 => 71,  237 => 70,  234 => 69,  232 => 68,  229 => 67,  221 => 62,  217 => 61,  214 => 60,  212 => 59,  209 => 58,  206 => 57,  203 => 56,  200 => 55,  197 => 54,  195 => 53,  192 => 52,  189 => 51,  186 => 50,  183 => 49,  180 => 48,  177 => 47,  174 => 46,  171 => 45,  168 => 44,  165 => 43,  162 => 42,  159 => 41,  156 => 40,  153 => 39,  150 => 38,  147 => 37,  144 => 36,  141 => 35,  136 => 33,  133 => 32,  131 => 31,  128 => 30,  124 => 27,  122 => 26,  119 => 25,  110 => 21,  108 => 20,  105 => 15,  96 => 10,  93 => 9,  89 => 182,  84 => 180,  81 => 179,  74 => 166,  71 => 165,  64 => 103,  61 => 102,  59 => 86,  56 => 85,  54 => 78,  49 => 67,  44 => 30,  39 => 15,  36 => 14,  34 => 9,  139 => 34,  130 => 46,  115 => 23,  112 => 22,  106 => 54,  104 => 53,  100 => 51,  98 => 11,  95 => 31,  92 => 30,  86 => 181,  82 => 22,  79 => 175,  76 => 174,  69 => 164,  66 => 163,  60 => 57,  58 => 30,  51 => 77,  48 => 25,  46 => 66,  43 => 19,  41 => 29,  24 => 1,  31 => 8,  28 => 3,);
    }
}
