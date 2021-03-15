<?php

/* extension/dashboard/activity_info.twig */
class __TwigTemplate_e3891c553e913b264ae534f09c6056020f9fdd57f352e20682cd48c2abac86c0 extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"fa fa-calendar\"></i>";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
  </div>
  <ul class=\"list-group\">";
        // line 6
        if ((isset($context["activities"]) ? $context["activities"] : null)) {
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) ? $context["activities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 8
                echo "    <li class=\"list-group-item\">";
                echo $this->getAttribute($context["activity"], "comment", array());
                echo "<br />
      <small class=\"text-muted\"><i class=\"fa fa-clock-o\"></i>";
                // line 9
                echo $this->getAttribute($context["activity"], "date_added", array());
                echo "</small></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 12
            echo "    <li class=\"list-group-item text-center\">";
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</li>";
        }
        // line 14
        echo "  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/activity_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  47 => 12,  39 => 9,  34 => 8,  30 => 7,  28 => 6,  23 => 3,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">*/
/*     <h3 class="panel-title"><i class="fa fa-calendar"></i> {{ heading_title }}</h3>*/
/*   </div>*/
/*   <ul class="list-group">*/
/*     {% if activities %}*/
/*     {% for activity in activities %}*/
/*     <li class="list-group-item">{{ activity.comment }}<br />*/
/*       <small class="text-muted"><i class="fa fa-clock-o"></i> {{ activity.date_added }}</small></li>*/
/*     {% endfor %}*/
/*     {% else %}*/
/*     <li class="list-group-item text-center">{{ text_no_results }}</li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
