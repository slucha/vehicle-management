<?php

/* VehicleManagementManagementBundle:Vehicle:index.html.twig */
class __TwigTemplate_449ab667886ccc8667b61a5ae7d1b9ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VehicleManagementManagementBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'management_body' => array($this, 'block_management_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo " - Vehicle List";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementManagementBundle_vehicle"), "html", null, true);
        echo "\"><i class=\"icon-th-list\"></i> List</a> 
\t\t<a class=\"btn btn-success\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementManagementBundle_vehicle_add"), "html", null, true);
        echo "\"><i class=\"icon-plus-sign icon-white\"></i> Add</a> 
\t\t<a id=\"add\" class=\"btn btn-success\" href=\"#\"><i class=\"icon-plus-sign icon-white\"></i> Add</a> 
\t</div>
</div>

<div id=\"test\" style=\"display:none\">prout</div>

<table class=\"table table-striped table-bordered\">
\t<thead>
\t\t<tr>
\t\t\t<th>Type</th>
\t\t\t<th>Marque</th>
\t\t\t<th>Name</th>
\t\t\t<th>Action</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "objects"));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 26
            echo "\t\t<tr>
\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "type"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "brand"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "name"), "html", null, true);
            echo "</td>
\t\t\t<td>
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t<button class=\".btn-small\"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementManagementBundle_vehicle_edit", array("id" => $this->getAttribute($this->getContext($context, "object"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a></button>
\t\t\t\t\t<button class=\".btn-small\" data-toggle=\"modal\" data-target=\"#modal";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "id"), "html", null, true);
            echo "\"><i class=\"icon-remove\"></i></button>
\t\t\t\t\t
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
\t\t\t\t\t\t\t<h3 id=\"myModalLabel\">Delete vehicle \"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "brand"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "name"), "html", null, true);
            echo "\" ?</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">No</button>
\t\t\t\t\t\t\t<a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementManagementBundle_vehicle_delete", array("id" => $this->getAttribute($this->getContext($context, "object"), "id"))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("VehicleManagementManagementBundle_vehicle", array("page" => $this->getContext($context, "p"))), "html", null, true);
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
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = array())
    {
        // line 68
        echo "\t\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t\t<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vm.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>\t\t
\t";
    }

    public function getTemplateName()
    {
        return "VehicleManagementManagementBundle:Vehicle:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 69,  170 => 68,  164 => 67,  159 => 64,  148 => 61,  141 => 60,  136 => 59,  130 => 54,  117 => 47,  108 => 43,  100 => 38,  92 => 33,  88 => 32,  82 => 29,  78 => 28,  74 => 27,  71 => 26,  67 => 25,  47 => 8,  43 => 7,  38 => 4,  35 => 3,  28 => 2,);
    }
}
