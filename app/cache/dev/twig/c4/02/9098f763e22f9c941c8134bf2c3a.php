<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c4029098f763e22f9c941c8134bf2c3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-exceptionreset\">
        <div class=\"block_exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "location"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "location"), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 137,  329 => 136,  323 => 135,  321 => 134,  314 => 133,  310 => 132,  306 => 130,  304 => 129,  301 => 128,  298 => 127,  296 => 126,  288 => 124,  286 => 123,  282 => 121,  276 => 117,  238 => 99,  236 => 98,  231 => 95,  229 => 94,  222 => 90,  217 => 87,  213 => 85,  203 => 81,  201 => 80,  194 => 76,  183 => 69,  180 => 68,  175 => 66,  114 => 34,  85 => 28,  170 => 63,  157 => 55,  130 => 48,  271 => 114,  262 => 111,  258 => 110,  255 => 109,  250 => 108,  248 => 107,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 83,  154 => 45,  151 => 53,  143 => 49,  106 => 35,  100 => 27,  83 => 26,  173 => 72,  155 => 61,  118 => 36,  105 => 38,  98 => 34,  76 => 39,  65 => 18,  163 => 64,  119 => 34,  66 => 21,  45 => 9,  36 => 6,  18 => 1,  167 => 50,  164 => 59,  150 => 43,  144 => 58,  140 => 52,  68 => 22,  61 => 28,  21 => 3,  56 => 14,  209 => 84,  205 => 82,  196 => 77,  192 => 78,  189 => 73,  178 => 71,  176 => 70,  165 => 63,  161 => 58,  152 => 61,  148 => 57,  145 => 49,  141 => 55,  134 => 54,  132 => 43,  127 => 46,  123 => 38,  109 => 36,  93 => 43,  90 => 36,  54 => 19,  133 => 49,  124 => 41,  111 => 33,  80 => 25,  60 => 20,  52 => 13,  97 => 26,  95 => 30,  88 => 32,  78 => 26,  71 => 37,  25 => 5,  72 => 17,  64 => 35,  53 => 23,  34 => 11,  92 => 23,  86 => 27,  79 => 20,  19 => 2,  42 => 10,  40 => 8,  29 => 4,  26 => 5,  224 => 91,  215 => 90,  211 => 88,  204 => 84,  200 => 87,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 75,  179 => 72,  177 => 67,  171 => 67,  162 => 69,  158 => 57,  156 => 56,  153 => 15,  146 => 55,  142 => 48,  137 => 46,  126 => 39,  120 => 37,  117 => 44,  103 => 28,  74 => 38,  47 => 17,  32 => 8,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  69 => 21,  63 => 28,  58 => 26,  49 => 12,  43 => 12,  37 => 9,  20 => 2,  139 => 47,  131 => 55,  128 => 43,  125 => 36,  121 => 40,  115 => 39,  107 => 40,  99 => 44,  96 => 35,  91 => 31,  82 => 43,  77 => 25,  75 => 18,  57 => 27,  50 => 12,  46 => 13,  44 => 14,  39 => 12,  33 => 5,  30 => 7,  27 => 3,  135 => 41,  129 => 38,  122 => 49,  116 => 42,  113 => 43,  108 => 40,  104 => 40,  102 => 37,  94 => 32,  89 => 22,  87 => 42,  84 => 29,  81 => 28,  73 => 23,  70 => 24,  67 => 23,  62 => 22,  59 => 21,  55 => 19,  51 => 23,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 7,);
    }
}
