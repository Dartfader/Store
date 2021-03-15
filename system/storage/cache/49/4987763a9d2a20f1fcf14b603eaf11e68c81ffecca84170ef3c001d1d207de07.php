<?php

/* common/column_left.twig */
class __TwigTemplate_5aba387068624f66e467a66c37945f55b93fd42b9ffc48d070b1243969998623 extends Twig_Template
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
        echo "<ul class=\"list-group\">";
        // line 2
        if ((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : null), 0, 8) != "upgrade/")) {
            // line 3
            if (((isset($context["route"]) ? $context["route"] : null) == "install/step_1")) {
                // line 4
                echo "  <li class=\"list-group-item\"><b>";
                echo (isset($context["text_license"]) ? $context["text_license"] : null);
                echo "</b></li>";
            } else {
                // line 6
                echo "  <li class=\"list-group-item\">";
                echo (isset($context["text_license"]) ? $context["text_license"] : null);
                echo "</li>";
            }
            // line 8
            if (((isset($context["route"]) ? $context["route"] : null) == "install/step_2")) {
                // line 9
                echo "  <li class=\"list-group-item\"><b>";
                echo (isset($context["text_installation"]) ? $context["text_installation"] : null);
                echo "</b></li>";
            } else {
                // line 11
                echo "  <li class=\"list-group-item\">";
                echo (isset($context["text_installation"]) ? $context["text_installation"] : null);
                echo "</li>";
            }
            // line 13
            if (((isset($context["route"]) ? $context["route"] : null) == "install/step_3")) {
                // line 14
                echo "  <li class=\"list-group-item\"><b>";
                echo (isset($context["text_configuration"]) ? $context["text_configuration"] : null);
                echo "</b></li>";
            } else {
                // line 16
                echo "  <li class=\"list-group-item\">";
                echo (isset($context["text_configuration"]) ? $context["text_configuration"] : null);
                echo "</li>";
            }
        } else {
            // line 19
            if (((isset($context["route"]) ? $context["route"] : null) == "upgrade/upgrade")) {
                // line 20
                echo "  <li class=\"list-group-item\"><b>";
                echo (isset($context["text_upgrade"]) ? $context["text_upgrade"] : null);
                echo "</b></li>";
            } else {
                // line 22
                echo "  <li class=\"list-group-item\">";
                echo (isset($context["text_upgrade"]) ? $context["text_upgrade"] : null);
                echo "</li>";
            }
            // line 24
            if (((isset($context["route"]) ? $context["route"] : null) == "upgrade/upgrade/success")) {
                // line 25
                echo "  <li class=\"list-group-item\"><b>";
                echo (isset($context["text_finished"]) ? $context["text_finished"] : null);
                echo "</b></li>";
            } else {
                // line 27
                echo "  <li class=\"list-group-item\">";
                echo (isset($context["text_finished"]) ? $context["text_finished"] : null);
                echo "</li>";
            }
        }
        // line 30
        echo "</ul>
<form action=\"";
        // line 31
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"language\">
  <ul class=\"list-group\">
    <li class=\"list-group-item\">
      <div class=\"dropdown\">
        <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">";
        // line 35
        echo (isset($context["text_language"]) ? $context["text_language"] : null);
        echo " <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\">";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 38
            echo "          <li><a href=\"";
            echo $context["language"];
            echo "\"><img src=\"language/";
            echo $context["language"];
            echo "/";
            echo $context["language"];
            echo ".png\" /></a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </ul>
      </div>
    </li>
  </ul>
  <input type=\"hidden\" name=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"redirect\" value=\"";
        // line 45
        echo (isset($context["redirect"]) ? $context["redirect"] : null);
        echo "\" />
</form>
<script type=\"text/javascript\"><!--
// Language
\$('#language a').on('click', function(e) {
\te.preventDefault();

\t\$('#language input[name=\\'code\\']').val(\$(this).attr('href'));

\t\$('#language').submit();
});
--></script> 
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
        return array (  122 => 45,  115 => 40,  103 => 38,  99 => 37,  95 => 35,  88 => 31,  85 => 30,  79 => 27,  74 => 25,  72 => 24,  67 => 22,  62 => 20,  60 => 19,  54 => 16,  49 => 14,  47 => 13,  42 => 11,  37 => 9,  35 => 8,  30 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* <ul class="list-group">*/
/*   {% if route|slice(0, 8) != 'upgrade/' %}*/
/*   {% if route == 'install/step_1' %}*/
/*   <li class="list-group-item"><b>{{ text_license }}</b></li>*/
/*   {% else %}*/
/*   <li class="list-group-item">{{ text_license }}</li>*/
/*   {% endif %}*/
/*   {% if route == 'install/step_2' %}*/
/*   <li class="list-group-item"><b>{{ text_installation }}</b></li>*/
/*   {% else %}*/
/*   <li class="list-group-item">{{ text_installation }}</li>*/
/*   {% endif %}*/
/*   {% if route == 'install/step_3' %}*/
/*   <li class="list-group-item"><b>{{ text_configuration }}</b></li>*/
/*   {% else %}*/
/*   <li class="list-group-item">{{ text_configuration }}</li>*/
/*   {% endif %}*/
/*   {% else %}*/
/*   {% if route == 'upgrade/upgrade' %}*/
/*   <li class="list-group-item"><b>{{ text_upgrade }}</b></li>*/
/*   {% else %}*/
/*   <li class="list-group-item">{{ text_upgrade }}</li>*/
/*   {% endif %}*/
/*   {% if route == 'upgrade/upgrade/success' %}*/
/*   <li class="list-group-item"><b>{{ text_finished }}</b></li>*/
/*   {% else %}*/
/*   <li class="list-group-item">{{ text_finished }}</li>*/
/*   {% endif %}*/
/*   {% endif %}*/
/* </ul>*/
/* <form action="{{ action }}" method="post" enctype="multipart/form-data" id="language">*/
/*   <ul class="list-group">*/
/*     <li class="list-group-item">*/
/*       <div class="dropdown">*/
/*         <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">{{ text_language }} <span class="caret"></span></button>*/
/*         <ul class="dropdown-menu">*/
/*           {% for language in languages %}*/
/*           <li><a href="{{ language }}"><img src="language/{{ language }}/{{ language }}.png" /></a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*     </li>*/
/*   </ul>*/
/*   <input type="hidden" name="code" value="" />*/
/*   <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/* </form>*/
/* <script type="text/javascript"><!--*/
/* // Language*/
/* $('#language a').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#language input[name=\'code\']').val($(this).attr('href'));*/
/* */
/* 	$('#language').submit();*/
/* });*/
/* --></script> */
/* */
