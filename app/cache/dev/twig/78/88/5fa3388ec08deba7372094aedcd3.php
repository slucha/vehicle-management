<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_78885fa3388ec08deba7372094aedcd3 extends Twig_Template
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
        echo "\" style=\"display: none\"></div>
<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        var wdt, xhr;
        wdt = document.getElementById('sfwdt";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "');
        if (window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        } else {
            xhr = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xhr.open('GET', '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "', true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onreadystatechange = function(state) {
            if (4 === xhr.readyState && 200 === xhr.status && -1 !== xhr.responseText.indexOf('sf-toolbarreset')) {
                wdt.innerHTML = xhr.responseText;
                wdt.style.display = 'block';
            }
        };
        xhr.send('');
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  25 => 5,  17 => 1,  167 => 50,  164 => 49,  158 => 16,  153 => 15,  150 => 14,  144 => 12,  140 => 11,  137 => 10,  135 => 9,  132 => 8,  126 => 6,  111 => 51,  109 => 49,  99 => 44,  93 => 43,  87 => 42,  81 => 41,  74 => 36,  61 => 30,  57 => 29,  51 => 26,  48 => 25,  35 => 14,  28 => 6,  21 => 1,  67 => 16,  64 => 15,  58 => 17,  52 => 13,  33 => 8,  30 => 6,  27 => 5,  68 => 34,  63 => 15,  59 => 14,  56 => 15,  54 => 12,  50 => 11,  46 => 24,  43 => 10,  38 => 18,  36 => 5,  32 => 3,  29 => 2,  26 => 1,);
    }
}
