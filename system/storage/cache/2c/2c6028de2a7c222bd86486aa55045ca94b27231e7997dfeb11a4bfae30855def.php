<?php

/* install/step_4.twig */
class __TwigTemplate_2370217557a02d39922d2cf421d82123d8d162ef74a395db3926b326c3bed855 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"container\">
  <header>
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h1 class=\"pull-left\">4<small>/4</small></h1>
        <h3>";
        // line 7
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "<br>
          <small>";
        // line 8
        echo (isset($context["text_step_4"]) ? $context["text_step_4"] : null);
        echo "</small></h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\" /></div>
      </div>
    </div>
  </header>";
        // line 15
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 16
            echo "  <div class=\"alert alert-success alert-dismissible\">";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>";
        }
        // line 18
        echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
        echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
        echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  <div class=\"visit\">
    <div class=\"row\">
      <div class=\"col-sm-5 col-sm-offset-1 text-center\">
        <p><i class=\"fa fa-shopping-cart fa-5x\"></i></p>
        <a href=\"../\" class=\"btn btn-secondary\">";
        // line 25
        echo (isset($context["text_catalog"]) ? $context["text_catalog"] : null);
        echo "</a></div>
      <div class=\"col-sm-5 text-center\">
        <p><i class=\"fa fa-cog fa-5x white\"></i></p>
        <a href=\"../admin/\" class=\"btn btn-secondary\">";
        // line 28
        echo (isset($context["text_admin"]) ? $context["text_admin"] : null);
        echo "</a></div>
    </div>
  </div>

  <div class=\"support text-center\">
    <div class=\"row\">
      <div class=\"col-sm-3\"><a href=\"https://www.opencart.ru\" class=\"icon transition\"><i class=\"fa fa-cloud fa-4x\"></i></a>
        <h3>";
        // line 35
        echo (isset($context["text_site"]) ? $context["text_site"] : null);
        echo "</h3>
        <p>";
        // line 36
        echo (isset($context["text_site_description"]) ? $context["text_site_description"] : null);
        echo "</p>
        <a href=\"https://www.opencart.ru\" target=\"_blank\">";
        // line 37
        echo (isset($context["text_site_visit"]) ? $context["text_site_visit"] : null);
        echo "</a></div>
      <div class=\"col-sm-3\"><a href=\"https://www.opencart.ru/documentation\" class=\"icon transition\"><i class=\"fa fa-comments fa-4x\"></i></a>
        <h3>";
        // line 39
        echo (isset($context["text_forum"]) ? $context["text_forum"] : null);
        echo "</h3>
        <p>";
        // line 40
        echo (isset($context["text_forum_description"]) ? $context["text_forum_description"] : null);
        echo "</p>
        <a href=\"https://www.opencart.ru/documentation\" target=\"_blank\">";
        // line 41
        echo (isset($context["text_forum_visit"]) ? $context["text_forum_visit"] : null);
        echo "</a></div>
      <div class=\"col-sm-3\"><a href=\"https://www.opencart.ru/modules\" class=\"icon transition\"><i class=\"fa fa-user fa-4x\"></i></a>
        <h3>";
        // line 43
        echo (isset($context["text_marketplace"]) ? $context["text_marketplace"] : null);
        echo "</h3>
        <p>";
        // line 44
        echo (isset($context["text_marketplace_description"]) ? $context["text_marketplace_description"] : null);
        echo "</p>
        <a href=\"https://www.opencart.ru/modules\" target=\"_blank\">";
        // line 45
        echo (isset($context["text_marketplace_visit"]) ? $context["text_marketplace_visit"] : null);
        echo "</a></div>
      <div class=\"col-sm-3\"><a href=\"https://www.opencart.ru/support\" class=\"icon transition\"><i class=\"fa fa-user fa-4x\"></i></a>
        <h3>";
        // line 47
        echo (isset($context["text_commercial"]) ? $context["text_commercial"] : null);
        echo "</h3>
        <p>";
        // line 48
        echo (isset($context["text_commercial_description"]) ? $context["text_commercial_description"] : null);
        echo "</p>
        <a href=\"https://www.opencart.ru/support\" target=\"_blank\">";
        // line 49
        echo (isset($context["text_commercial_visit"]) ? $context["text_commercial_visit"] : null);
        echo "</a></div>
    </div>
  </div>
</div>";
        // line 53
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "install/step_4.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 53,  122 => 49,  118 => 48,  114 => 47,  109 => 45,  105 => 44,  101 => 43,  96 => 41,  92 => 40,  88 => 39,  83 => 37,  79 => 36,  75 => 35,  65 => 28,  59 => 25,  48 => 18,  43 => 16,  41 => 15,  32 => 8,  28 => 7,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <header>*/
/*     <div class="row">*/
/*       <div class="col-sm-6">*/
/*         <h1 class="pull-left">4<small>/4</small></h1>*/
/*         <h3>{{ heading_title }}<br>*/
/*           <small>{{ text_step_4 }}</small></h3>*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         <div id="logo" class="pull-right hidden-xs"><img src="view/image/logo.png" alt="OpenCart" title="OpenCart" /></div>*/
/*       </div>*/
/*     </div>*/
/*   </header>*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible">{{ success }}</div>*/
/*   {% endif %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   <div class="visit">*/
/*     <div class="row">*/
/*       <div class="col-sm-5 col-sm-offset-1 text-center">*/
/*         <p><i class="fa fa-shopping-cart fa-5x"></i></p>*/
/*         <a href="../" class="btn btn-secondary">{{ text_catalog }}</a></div>*/
/*       <div class="col-sm-5 text-center">*/
/*         <p><i class="fa fa-cog fa-5x white"></i></p>*/
/*         <a href="../admin/" class="btn btn-secondary">{{ text_admin }}</a></div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="support text-center">*/
/*     <div class="row">*/
/*       <div class="col-sm-3"><a href="https://www.opencart.ru" class="icon transition"><i class="fa fa-cloud fa-4x"></i></a>*/
/*         <h3>{{ text_site }}</h3>*/
/*         <p>{{ text_site_description }}</p>*/
/*         <a href="https://www.opencart.ru" target="_blank">{{ text_site_visit }}</a></div>*/
/*       <div class="col-sm-3"><a href="https://www.opencart.ru/documentation" class="icon transition"><i class="fa fa-comments fa-4x"></i></a>*/
/*         <h3>{{ text_forum }}</h3>*/
/*         <p>{{ text_forum_description }}</p>*/
/*         <a href="https://www.opencart.ru/documentation" target="_blank">{{ text_forum_visit }}</a></div>*/
/*       <div class="col-sm-3"><a href="https://www.opencart.ru/modules" class="icon transition"><i class="fa fa-user fa-4x"></i></a>*/
/*         <h3>{{ text_marketplace }}</h3>*/
/*         <p>{{ text_marketplace_description }}</p>*/
/*         <a href="https://www.opencart.ru/modules" target="_blank">{{ text_marketplace_visit }}</a></div>*/
/*       <div class="col-sm-3"><a href="https://www.opencart.ru/support" class="icon transition"><i class="fa fa-user fa-4x"></i></a>*/
/*         <h3>{{ text_commercial }}</h3>*/
/*         <p>{{ text_commercial_description }}</p>*/
/*         <a href="https://www.opencart.ru/support" target="_blank">{{ text_commercial_visit }}</a></div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
