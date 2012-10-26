<?php

/* VehicleManagementManagementBundle:Refuel:index.html.twig */
class __TwigTemplate_2ee662a79178132fe997b4de98676521 extends Twig_Template
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
        echo " - Consumption List";
    }

    // line 3
    public function block_management_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"btn-toolbar\">
\t<div class=\"btn-group\">
\t\t<a class=\"btn\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementManagementBundle_refuel"), "html", null, true);
        echo "\"><i class=\"icon-th-list\"></i> List</a> 
\t\t<a class=\"btn btn-success\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementManagementBundle_refuel_add"), "html", null, true);
        echo "\"><i class=\"icon-plus-sign icon-white\"></i> Add</a> 
\t</div>
</div>
<table class=\"table table-striped table-bordered\">
\t<thead>
\t\t<tr>
\t\t\t<th>Date</th>
\t\t\t<th>Vehicle</th>
\t\t\t<th>Price</th>
\t\t\t<th>Kilometer</th>
\t\t\t<th>Action</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "objects"));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 22
            echo "\t\t<tr>
\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "date"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "vehicle"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "price"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "km"), "html", null, true);
            echo "</td>
\t\t\t<td>
\t\t\t\t<button class=\".btn-small\"><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementManagementBundle_refuel_edit", array("id" => $this->getAttribute($this->getContext($context, "object"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a></button>
\t\t\t\t<button class=\".btn-small\" data-toggle=\"modal\" data-target=\"#modal";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "id"), "html", null, true);
            echo "\"><i class=\"icon-remove\"></i></button>
\t\t\t\t\t\t\t\t\t<!-- Modal -->
\t\t\t\t\t<!-- a gerer en javascript pour eviter de creer x div -->
\t\t\t\t<div class=\"modal hide\" id=\"modal";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "id"), "html", null, true);
            echo "\" tabindex=\"-1\"
\t\t\t\t\trole=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\"
\t\t\t\t\t\t\taria-hidden=\"true\">×</button>
\t\t\t\t\t\t<h3 id=\"myModalLabel\">Delete this refuel ?</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<p id=\"myModalLabel\"><ul><li>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "vehicle"), "html", null, true);
            echo "</li><li>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "date"), "d/m/Y"), "html", null, true);
            echo "</li><li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "price"), "html", null, true);
            echo "</li></ul></p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">No</button>
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementManagementBundle_refuel_delete", array("id" => $this->getAttribute($this->getContext($context, "object"), "id"))), "html", null, true);
            echo "\"><button
\t\t\t\t\t\t\t\tclass=\"btn btn-primary\" aria-hidden=\"true\">Yes</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 54
        echo "\t</tbody>
</table>
<div class=\"pagination pagination-centered\">
    \t<ul>
    \t\t";
        // line 59
        echo "    \t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "nbPages")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 60
            echo "    \t\t\t<li";
            if (($this->getContext($context, "p") == $this->getContext($context, "page"))) {
                echo " class=\"active\"";
            }
            echo ">
    \t\t\t\t<a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementManagementBundle_refuel", array("page" => $this->getContext($context, "p"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
            echo "</a>
    \t\t\t</li>
    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 64
        echo "    \t</ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "VehicleManagementManagementBundle:Refuel:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 64,  152 => 61,  145 => 60,  140 => 59,  134 => 54,  119 => 45,  107 => 40,  96 => 32,  90 => 29,  86 => 28,  81 => 26,  77 => 25,  73 => 24,  69 => 23,  66 => 22,  62 => 21,  45 => 7,  41 => 6,  37 => 4,  34 => 3,  27 => 2,);
    }
}
