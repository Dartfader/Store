<?php

/* extension/dashboard/sale_info.twig */
class __TwigTemplate_b8a3ae2c712cc8860052f43fba29bfc62748862c530af4b286a9a0d372843ec6 extends Twig_Template
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
        echo "<div class=\"tile tile-primary\">
  <div class=\"tile-heading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " <span class=\"pull-right\">";
        // line 3
        if (((isset($context["percentage"]) ? $context["percentage"] : null) > 0)) {
            // line 4
            echo "    <i class=\"fa fa-caret-up\"></i>";
        } elseif ((        // line 5
(isset($context["percentage"]) ? $context["percentage"] : null) < 0)) {
            // line 6
            echo "    <i class=\"fa fa-caret-down\"></i>";
        }
        // line 8
        echo (isset($context["percentage"]) ? $context["percentage"] : null);
        echo "%</span></div>
  <div class=\"tile-body\"><i class=\"fa fa-credit-card\"></i>
    <h2 class=\"pull-right\">";
        // line 10
        echo (isset($context["total"]) ? $context["total"] : null);
        echo "</h2>
  </div>
  <div class=\"tile-footer\"><a href=\"";
        // line 12
        echo (isset($context["sale"]) ? $context["sale"] : null);
        echo "\">";
        echo (isset($context["text_view"]) ? $context["text_view"] : null);
        echo "</a></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/sale_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  39 => 10,  34 => 8,  31 => 6,  29 => 5,  27 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="tile tile-primary">*/
/*   <div class="tile-heading">{{ heading_title }} <span class="pull-right">*/
/*     {% if percentage > 0 %}*/
/*     <i class="fa fa-caret-up"></i>*/
/*     {% elseif percentage < 0 %}*/
/*     <i class="fa fa-caret-down"></i>*/
/*     {% endif %}*/
/*     {{ percentage }}%</span></div>*/
/*   <div class="tile-body"><i class="fa fa-credit-card"></i>*/
/*     <h2 class="pull-right">{{ total }}</h2>*/
/*   </div>*/
/*   <div class="tile-footer"><a href="{{ sale }}">{{ text_view }}</a></div>*/
/* </div>*/
/* */
