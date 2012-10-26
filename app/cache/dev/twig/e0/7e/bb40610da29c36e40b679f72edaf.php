<?php

/* VehicleManagementManagementBundle:Servicing:index.html.twig */
class __TwigTemplate_e07ebb40610da29c36e40b679f72edaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VehicleManagementManagementBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'management_body' => array($this, 'block_management_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VehicleManagementManagementBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Servicing List";
    }

    // line 3
    public function block_management_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"btn-toolbar\">
\t<div class=\"btn-group\">
\t\t<a class=\"btn\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementManagementBundle_servicing"), "html", null, true);
        echo "\"><i class=\"icon-th-list\"></i> List</a> 
\t\t<a class=\"btn btn-success\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementManagementBundle_servicing_add"), "html", null, true);
        echo "\"><i class=\"icon-plus-sign icon-white\"></i> Add</a> 
\t</div>
</div>

<table class=\"table table-striped table-bordered\">
\t<thead>
\t\t<tr>
\t\t\t<th>Date</th>
\t\t\t<th>Vehicle</th>
\t\t\t<th>Comment</th>
\t\t\t<th>Price</th>
\t\t\t<th>Kilometer</th>
\t\t\t<th>Action</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "objects"));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 25
            echo "\t\t<tr>
\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "date"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "vehicle"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "comment"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "price"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "km"), "html", null, true);
            echo "</td>\t\t
\t\t\t<td>
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t<button class=\".btn-small\"><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementManagementBundle_servicing_edit", array("id" => $this->getAttribute($this->getContext($context, "object"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a></button>
\t\t\t\t\t<button class=\".btn-small\" data-toggle=\"modal\" data-target=\"#modal";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "id"), "html", null, true);
            echo "\"><i class=\"icon-remove\"></i></button>
\t\t\t\t\t
\t\t\t\t\t<!-- Modal -->
\t\t\t\t\t<!-- a gerer en javascript pour eviter de creer x div -->
\t\t\t\t\t<div class=\"modal hide\" id=\"modal";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "id"), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\"
\t\t\t\t\t\taria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\"
\t\t\t\t\t\t\t\taria-hidden=\"true\">×</button>
\t\t\t\t\t\t\t<h3 id=\"myModalLabel\">Delete this servicing ?</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<p id=\"myModalLabel\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "vehicle"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t<li>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "comment"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">No</button>
\t\t\t\t\t\t\t<a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementManagementBundle_servicing_delete", array("id" => $this->getAttribute($this->getContext($context, "object"), "id"))), "html", null, true);
            echo "\"><button class=\"btn btn-primary\" aria-hidden=\"true\">Yes</button></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 62
        echo "\t</tbody>
</table>
<div class=\"pagination pagination-centered\">
    \t<ul>
    \t\t";
        // line 67
        echo "    \t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "nbPages")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 68
            echo "    \t\t\t<li";
            if (($this->getContext($context, "p") == $this->getContext($context, "page"))) {
                echo " class=\"active\"";
            }
            echo ">
    \t\t\t\t<a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementManagementBundle_servicing", array("page" => $this->getContext($context, "p"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
            echo "</a>
    \t\t\t</li>
    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 72
        echo "    \t</ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "VehicleManagementManagementBundle:Servicing:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 72,  162 => 69,  155 => 68,  150 => 67,  144 => 62,  131 => 55,  122 => 49,  118 => 48,  105 => 38,  98 => 34,  94 => 33,  88 => 30,  84 => 29,  80 => 28,  76 => 27,  72 => 26,  69 => 25,  65 => 24,  46 => 8,  42 => 7,  37 => 4,  34 => 3,  27 => 2,);
    }
}
