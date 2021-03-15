<?php

/* common/column_left.twig */
class __TwigTemplate_48fb1fb59bb95d380ce9142ad5a5d4156da9d54a4b5b8c8cab37f501f8baa246 extends Twig_Template
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
        echo "<nav id=\"column-left\">
  <div id=\"navigation\"><span class=\"fa fa-bars\"></span>";
        // line 2
        echo (isset($context["text_navigation"]) ? $context["text_navigation"] : null);
        echo "</div>
  <ul id=\"menu\">";
        // line 4
        $context["i"] = 0;
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 6
            echo "    <li id=\"";
            echo $this->getAttribute($context["menu"], "id", array());
            echo "\">";
            if ($this->getAttribute($context["menu"], "href", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["menu"], "href", array());
                echo "\"><i class=\"fa";
                echo $this->getAttribute($context["menu"], "icon", array());
                echo " fw\"></i>";
                echo $this->getAttribute($context["menu"], "name", array());
                echo "</a>";
            } else {
                echo "<a href=\"#collapse";
                echo (isset($context["i"]) ? $context["i"] : null);
                echo "\" data-toggle=\"collapse\" class=\"parent collapsed\"><i class=\"fa";
                echo $this->getAttribute($context["menu"], "icon", array());
                echo " fw\"></i>";
                echo $this->getAttribute($context["menu"], "name", array());
                echo "</a>";
            }
            // line 7
            if ($this->getAttribute($context["menu"], "children", array())) {
                // line 8
                echo "          <ul id=\"collapse";
                echo (isset($context["i"]) ? $context["i"] : null);
                echo "\" class=\"collapse\">";
                // line 9
                $context["j"] = 0;
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["children_1"]) {
                    // line 11
                    echo "              <li>";
                    if ($this->getAttribute($context["children_1"], "href", array())) {
                        // line 12
                        echo "                  <a href=\"";
                        echo $this->getAttribute($context["children_1"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["children_1"], "name", array());
                        echo "</a>";
                    } else {
                        // line 14
                        echo "                  <a href=\"#collapse";
                        echo (isset($context["i"]) ? $context["i"] : null);
                        echo "-";
                        echo (isset($context["j"]) ? $context["j"] : null);
                        echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                        echo $this->getAttribute($context["children_1"], "name", array());
                        echo "</a>";
                    }
                    // line 16
                    if ($this->getAttribute($context["children_1"], "children", array())) {
                        // line 17
                        echo "                  <ul id=\"collapse";
                        echo (isset($context["i"]) ? $context["i"] : null);
                        echo "-";
                        echo (isset($context["j"]) ? $context["j"] : null);
                        echo "\" class=\"collapse\">";
                        // line 18
                        $context["k"] = 0;
                        // line 19
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["children_1"], "children", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["children_2"]) {
                            // line 20
                            echo "                      <li>";
                            if ($this->getAttribute($context["children_2"], "href", array())) {
                                // line 21
                                echo "                          <a href=\"";
                                echo $this->getAttribute($context["children_2"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["children_2"], "name", array());
                                echo "</a>";
                            } else {
                                // line 23
                                echo "                          <a href=\"#collapse-";
                                echo (isset($context["i"]) ? $context["i"] : null);
                                echo "-";
                                echo (isset($context["j"]) ? $context["j"] : null);
                                echo "-";
                                echo (isset($context["k"]) ? $context["k"] : null);
                                echo "\" data-toggle=\"collapse\" class=\"parent collapsed\">";
                                echo $this->getAttribute($context["children_2"], "name", array());
                                echo "</a>";
                            }
                            // line 25
                            if ($this->getAttribute($context["children_2"], "children", array())) {
                                // line 26
                                echo "                          <ul id=\"collapse-";
                                echo (isset($context["i"]) ? $context["i"] : null);
                                echo "-";
                                echo (isset($context["j"]) ? $context["j"] : null);
                                echo "-";
                                echo (isset($context["k"]) ? $context["k"] : null);
                                echo "\" class=\"collapse\">";
                                // line 27
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["children_2"], "children", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["children_3"]) {
                                    // line 28
                                    echo "                              <li><a href=\"";
                                    echo $this->getAttribute($context["children_3"], "href", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["children_3"], "name", array());
                                    echo "</a></li>";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_3'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 30
                                echo "                          </ul>";
                            }
                            // line 31
                            echo "</li>";
                            // line 32
                            $context["k"] = ((isset($context["k"]) ? $context["k"] : null) + 1);
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 34
                        echo "                  </ul>";
                    }
                    // line 35
                    echo " </li>";
                    // line 36
                    $context["j"] = ((isset($context["j"]) ? $context["j"] : null) + 1);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "          </ul>";
            }
            // line 40
            echo "
      
      </li>";
            // line 43
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  </ul>
  <div id=\"stats\">
    <ul>
      <li>
        <div>";
        // line 49
        echo (isset($context["text_complete_status"]) ? $context["text_complete_status"] : null);
        echo " <span class=\"pull-right\">";
        echo (isset($context["complete_status"]) ? $context["complete_status"] : null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"";
        // line 51
        echo (isset($context["complete_status"]) ? $context["complete_status"] : null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
        echo (isset($context["complete_status"]) ? $context["complete_status"] : null);
        echo "%\"> <span class=\"sr-only\">";
        echo (isset($context["complete_status"]) ? $context["complete_status"] : null);
        echo "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 55
        echo (isset($context["text_processing_status"]) ? $context["text_processing_status"] : null);
        echo " <span class=\"pull-right\">";
        echo (isset($context["processing_status"]) ? $context["processing_status"] : null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"";
        // line 57
        echo (isset($context["processing_status"]) ? $context["processing_status"] : null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
        echo (isset($context["processing_status"]) ? $context["processing_status"] : null);
        echo "%\"> <span class=\"sr-only\">";
        echo (isset($context["processing_status"]) ? $context["processing_status"] : null);
        echo "%</span></div>
        </div>
      </li>
      <li>
        <div>";
        // line 61
        echo (isset($context["text_other_status"]) ? $context["text_other_status"] : null);
        echo " <span class=\"pull-right\">";
        echo (isset($context["other_status"]) ? $context["other_status"] : null);
        echo "%</span></div>
        <div class=\"progress\">
          <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"";
        // line 63
        echo (isset($context["other_status"]) ? $context["other_status"] : null);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
        echo (isset($context["other_status"]) ? $context["other_status"] : null);
        echo "%\"> <span class=\"sr-only\">";
        echo (isset($context["other_status"]) ? $context["other_status"] : null);
        echo "%</span></div>
        </div>
      </li>
    </ul>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 63,  220 => 61,  209 => 57,  202 => 55,  191 => 51,  184 => 49,  178 => 45,  172 => 43,  168 => 40,  165 => 38,  159 => 36,  157 => 35,  154 => 34,  148 => 32,  146 => 31,  143 => 30,  133 => 28,  129 => 27,  121 => 26,  119 => 25,  108 => 23,  101 => 21,  98 => 20,  94 => 19,  92 => 18,  86 => 17,  84 => 16,  75 => 14,  68 => 12,  65 => 11,  61 => 10,  59 => 9,  55 => 8,  53 => 7,  32 => 6,  28 => 5,  26 => 4,  22 => 2,  19 => 1,);
    }
}
/* <nav id="column-left">*/
/*   <div id="navigation"><span class="fa fa-bars"></span> {{ text_navigation }}</div>*/
/*   <ul id="menu">*/
/*     {% set i = 0 %}*/
/*     {% for menu in menus %}*/
/*     <li id="{{ menu.id }}">{% if menu.href %}<a href="{{ menu.href }}"><i class="fa {{ menu.icon }} fw"></i> {{ menu.name }}</a>{% else %}<a href="#collapse{{ i }}" data-toggle="collapse" class="parent collapsed"><i class="fa {{ menu.icon }} fw"></i> {{ menu.name }}</a>{% endif %}*/
/*         {% if menu.children %}*/
/*           <ul id="collapse{{ i }}" class="collapse">*/
/*             {% set j = 0 %}*/
/*             {% for children_1 in menu.children %}*/
/*               <li>{% if children_1.href %}*/
/*                   <a href="{{ children_1.href }}">{{ children_1.name }}</a>*/
/*                 {% else %}*/
/*                   <a href="#collapse{{ i }}-{{ j }}" data-toggle="collapse" class="parent collapsed">{{ children_1.name }}</a>*/
/*                 {% endif %}*/
/*                 {% if children_1.children %}*/
/*                   <ul id="collapse{{ i }}-{{ j }}" class="collapse">*/
/*                     {% set k = 0 %}*/
/*                     {% for children_2 in children_1.children %}*/
/*                       <li>{% if children_2.href %}*/
/*                           <a href="{{ children_2.href }}">{{ children_2.name }}</a>*/
/*                         {% else %}*/
/*                           <a href="#collapse-{{ i }}-{{ j }}-{{ k }}" data-toggle="collapse" class="parent collapsed">{{ children_2.name }}</a>*/
/*                         {% endif %}*/
/*                         {% if children_2.children %}*/
/*                           <ul id="collapse-{{ i }}-{{ j }}-{{ k }}" class="collapse">*/
/*                             {% for children_3 in children_2.children %}*/
/*                               <li><a href="{{ children_3.href }}">{{ children_3.name }}</a></li>*/
/*                             {% endfor %}*/
/*                           </ul>*/
/*                         {% endif %}</li>*/
/*                       {% set k = k + 1 %}*/
/*                     {% endfor %}*/
/*                   </ul>*/
/*                 {% endif %} </li>*/
/*               {% set j = j + 1 %}*/
/*             {% endfor %}*/
/*           </ul>*/
/*         {% endif %}*/
/* */
/*       */
/*       </li>*/
/*     {% set i = i + 1 %}*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div id="stats">*/
/*     <ul>*/
/*       <li>*/
/*         <div>{{ text_complete_status }} <span class="pull-right">{{ complete_status }}%</span></div>*/
/*         <div class="progress">*/
/*           <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ complete_status }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ complete_status }}%"> <span class="sr-only">{{ complete_status }}%</span></div>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <div>{{ text_processing_status }} <span class="pull-right">{{ processing_status }}%</span></div>*/
/*         <div class="progress">*/
/*           <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{ processing_status }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ processing_status }}%"> <span class="sr-only">{{ processing_status }}%</span></div>*/
/*         </div>*/
/*       </li>*/
/*       <li>*/
/*         <div>{{ text_other_status }} <span class="pull-right">{{ other_status }}%</span></div>*/
/*         <div class="progress">*/
/*           <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{ other_status }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ other_status }}%"> <span class="sr-only">{{ other_status }}%</span></div>*/
/*         </div>*/
/*       </li>*/
/*     </ul>*/
/*   </div>*/
/* </nav>*/
/* */
