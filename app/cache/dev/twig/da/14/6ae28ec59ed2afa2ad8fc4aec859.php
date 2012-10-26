<?php

/* VehicleManagementChartBundle:Main:data.xml.twig */
class __TwigTemplate_da146ae28ec59ed2afa2ad8fc4aec859 extends Twig_Template
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
        echo "<data>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "res"));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 3
            echo "\t<amount month=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "date"), "m"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "r"), "price"), "html", null, true);
            echo "</amount>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 5
        echo "</data>";
    }

    public function getTemplateName()
    {
        return "VehicleManagementChartBundle:Main:data.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 72,  155 => 61,  118 => 48,  105 => 38,  98 => 34,  76 => 27,  65 => 24,  163 => 64,  119 => 45,  66 => 22,  45 => 7,  36 => 5,  18 => 1,  167 => 50,  164 => 49,  150 => 67,  144 => 58,  140 => 59,  68 => 18,  61 => 30,  21 => 3,  56 => 13,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 61,  148 => 57,  145 => 60,  141 => 55,  134 => 54,  132 => 56,  127 => 46,  123 => 44,  109 => 49,  93 => 43,  90 => 29,  54 => 12,  133 => 44,  124 => 41,  111 => 51,  80 => 28,  60 => 16,  52 => 13,  97 => 34,  95 => 21,  88 => 30,  78 => 26,  71 => 14,  25 => 4,  72 => 26,  64 => 15,  53 => 13,  34 => 3,  92 => 20,  86 => 28,  79 => 40,  19 => 2,  42 => 7,  40 => 8,  29 => 2,  26 => 1,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 69,  158 => 16,  156 => 60,  153 => 15,  146 => 55,  142 => 54,  137 => 57,  126 => 51,  120 => 39,  117 => 44,  103 => 36,  74 => 25,  47 => 19,  32 => 3,  24 => 3,  22 => 2,  23 => 3,  17 => 1,  69 => 25,  63 => 22,  58 => 17,  49 => 11,  43 => 9,  37 => 4,  20 => 2,  139 => 26,  131 => 55,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 40,  99 => 44,  96 => 35,  91 => 33,  82 => 27,  77 => 25,  75 => 24,  57 => 29,  50 => 11,  46 => 8,  44 => 11,  39 => 10,  33 => 6,  30 => 2,  27 => 2,  135 => 9,  129 => 47,  122 => 49,  116 => 42,  113 => 44,  108 => 40,  104 => 40,  102 => 37,  94 => 33,  89 => 20,  87 => 42,  84 => 29,  81 => 26,  73 => 24,  70 => 24,  67 => 23,  62 => 21,  59 => 14,  55 => 14,  51 => 26,  48 => 8,  41 => 8,  38 => 6,  35 => 5,  31 => 5,  28 => 1,);
    }
}
