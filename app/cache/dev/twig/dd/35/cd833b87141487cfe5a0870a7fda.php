<?php

/* WebProfilerBundle:Profiler:notfound.html.twig */
class __TwigTemplate_dd35cd833b87141487cfe5a0870a7fda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("WebProfilerBundle:Profiler:header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"resume\">
            <p>
                <strong>No request matching the token \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\".</strong>
            </p>
        </div>

        <div id=\"main\">
            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    <div id=\"collector_content\">
                        ";
        // line 17
        $this->displayBlock('panel', $context, $blocks);
        // line 23
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 26
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:searchBar", array("token" => $this->getContext($context, "token")), array());
        // line 27
        echo "                    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:admin.html.twig")->display(array("token" => $this->getContext($context, "token")));
        // line 28
        echo "                </div>
            </div>
        </div>
    </div>

";
    }

    // line 17
    public function block_panel($context, array $blocks = array())
    {
        // line 18
        echo "                            <h2>Token not found</h2>
                            <p>
                                <em>No request matching the token \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\".</em>
                            </p>
                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:notfound.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 137,  329 => 136,  323 => 135,  321 => 134,  314 => 133,  310 => 132,  306 => 130,  304 => 129,  301 => 128,  298 => 127,  296 => 126,  288 => 124,  286 => 123,  282 => 121,  276 => 117,  238 => 99,  236 => 98,  231 => 95,  229 => 94,  222 => 90,  217 => 87,  213 => 85,  203 => 81,  201 => 80,  194 => 76,  183 => 69,  180 => 68,  175 => 66,  114 => 34,  85 => 28,  170 => 63,  157 => 55,  130 => 48,  271 => 114,  262 => 111,  258 => 110,  255 => 109,  250 => 108,  248 => 107,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 83,  154 => 45,  151 => 53,  143 => 49,  106 => 35,  100 => 27,  83 => 26,  173 => 72,  155 => 61,  118 => 36,  105 => 38,  98 => 34,  76 => 27,  65 => 18,  163 => 64,  119 => 34,  66 => 15,  45 => 9,  36 => 8,  18 => 1,  167 => 50,  164 => 59,  150 => 43,  144 => 58,  140 => 52,  68 => 20,  61 => 17,  21 => 3,  56 => 14,  209 => 84,  205 => 82,  196 => 77,  192 => 78,  189 => 73,  178 => 71,  176 => 70,  165 => 63,  161 => 58,  152 => 61,  148 => 57,  145 => 49,  141 => 55,  134 => 54,  132 => 43,  127 => 46,  123 => 38,  109 => 36,  93 => 43,  90 => 36,  54 => 13,  133 => 49,  124 => 41,  111 => 33,  80 => 25,  60 => 27,  52 => 13,  97 => 26,  95 => 30,  88 => 30,  78 => 26,  71 => 21,  25 => 4,  72 => 17,  64 => 15,  53 => 23,  34 => 11,  92 => 23,  86 => 27,  79 => 20,  19 => 2,  42 => 10,  40 => 9,  29 => 4,  26 => 3,  224 => 91,  215 => 90,  211 => 88,  204 => 84,  200 => 87,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 75,  179 => 72,  177 => 67,  171 => 67,  162 => 69,  158 => 57,  156 => 56,  153 => 15,  146 => 55,  142 => 48,  137 => 46,  126 => 39,  120 => 37,  117 => 44,  103 => 28,  74 => 21,  47 => 15,  32 => 6,  24 => 3,  22 => 2,  23 => 3,  17 => 1,  69 => 21,  63 => 28,  58 => 26,  49 => 12,  43 => 12,  37 => 9,  20 => 2,  139 => 47,  131 => 55,  128 => 43,  125 => 36,  121 => 40,  115 => 39,  107 => 40,  99 => 44,  96 => 35,  91 => 31,  82 => 20,  77 => 24,  75 => 18,  57 => 29,  50 => 12,  46 => 13,  44 => 10,  39 => 12,  33 => 5,  30 => 4,  27 => 3,  135 => 41,  129 => 38,  122 => 49,  116 => 42,  113 => 43,  108 => 40,  104 => 40,  102 => 37,  94 => 32,  89 => 22,  87 => 42,  84 => 29,  81 => 28,  73 => 23,  70 => 24,  67 => 23,  62 => 22,  59 => 21,  55 => 15,  51 => 17,  48 => 10,  41 => 9,  38 => 12,  35 => 6,  31 => 10,  28 => 7,);
    }
}
