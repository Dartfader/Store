<?php

/* install/step_2.twig */
class __TwigTemplate_6808d5e9ca51be79fd39c77ef7aa7fb0ad631aebb5240834fc14f356acd5ff72 extends Twig_Template
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
        <h1 class=\"pull-left\">2<small>/4</small></h1>
        <h3>";
        // line 7
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "<br>
          <small>";
        // line 8
        echo (isset($context["text_step_2"]) ? $context["text_step_2"] : null);
        echo "</small></h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\" /></div>
      </div>
    </div>
  </header>";
        // line 15
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 16
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>";
        }
        // line 20
        echo "  <div class=\"row\">
    <div class=\"col-sm-9\">
      <form action=\"";
        // line 22
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <p>";
        // line 23
        echo (isset($context["text_install_php"]) ? $context["text_install_php"] : null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td width=\"35%\"><b>";
        // line 28
        echo (isset($context["text_setting"]) ? $context["text_setting"] : null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 29
        echo (isset($context["text_current"]) ? $context["text_current"] : null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 30
        echo (isset($context["text_required"]) ? $context["text_required"] : null);
        echo "</b></td>
                <td width=\"15%\" class=\"text-center\"><b>";
        // line 31
        echo (isset($context["text_status"]) ? $context["text_status"] : null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 36
        echo (isset($context["text_version"]) ? $context["text_version"] : null);
        echo "</td>
                <td>";
        // line 37
        echo (isset($context["php_version"]) ? $context["php_version"] : null);
        echo "</td>
                <td>5.4+</td>
                <td class=\"text-center\">";
        // line 39
        if (((isset($context["php_version"]) ? $context["php_version"] : null) >= "5.4")) {
            // line 40
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>";
        } else {
            // line 42
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>";
        }
        // line 43
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 46
        echo (isset($context["text_global"]) ? $context["text_global"] : null);
        echo "</td>
                <td>";
        // line 47
        if ((isset($context["register_globals"]) ? $context["register_globals"] : null)) {
            // line 48
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
        } else {
            // line 50
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
        }
        // line 51
        echo "</td>
                <td>";
        // line 52
        echo (isset($context["text_off"]) ? $context["text_off"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 53
        if ( !(isset($context["register_globals"]) ? $context["register_globals"] : null)) {
            // line 54
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>";
        } else {
            // line 56
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>";
        }
        // line 57
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 60
        echo (isset($context["text_magic"]) ? $context["text_magic"] : null);
        echo "</td>
                <td>";
        // line 61
        if ((isset($context["magic_quotes_gpc"]) ? $context["magic_quotes_gpc"] : null)) {
            // line 62
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
        } else {
            // line 64
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
        }
        // line 65
        echo "</td>
                <td>";
        // line 66
        echo (isset($context["text_off"]) ? $context["text_off"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 67
        if ( !(isset($context["error_magic_quotes_gpc"]) ? $context["error_magic_quotes_gpc"] : null)) {
            // line 68
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>";
        } else {
            // line 70
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>";
        }
        // line 71
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 74
        echo (isset($context["text_file_upload"]) ? $context["text_file_upload"] : null);
        echo "</td>
                <td>";
        // line 75
        if ((isset($context["file_uploads"]) ? $context["file_uploads"] : null)) {
            // line 76
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
        } else {
            // line 78
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
        }
        // line 79
        echo "</td>
                <td>";
        // line 80
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 81
        if ((isset($context["file_uploads"]) ? $context["file_uploads"] : null)) {
            // line 82
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>";
        } else {
            // line 84
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>";
        }
        // line 85
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 88
        echo (isset($context["text_session"]) ? $context["text_session"] : null);
        echo "</td>
                <td>";
        // line 89
        if ((isset($context["session_auto_start"]) ? $context["session_auto_start"] : null)) {
            // line 90
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
        } else {
            // line 92
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
        }
        // line 93
        echo "</td>
                <td>";
        // line 94
        echo (isset($context["text_off"]) ? $context["text_off"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 95
        if ( !(isset($context["session_auto_start"]) ? $context["session_auto_start"] : null)) {
            // line 96
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>";
        } else {
            // line 98
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>";
        }
        // line 99
        echo "</td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <p>";
        // line 104
        echo (isset($context["text_install_extension"]) ? $context["text_install_extension"] : null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td width=\"35%\"><b>";
        // line 109
        echo (isset($context["text_extension"]) ? $context["text_extension"] : null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 110
        echo (isset($context["text_current"]) ? $context["text_current"] : null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 111
        echo (isset($context["text_required"]) ? $context["text_required"] : null);
        echo "</b></td>
                <td width=\"15%\" class=\"text-center\"><b>";
        // line 112
        echo (isset($context["text_status"]) ? $context["text_status"] : null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 117
        echo (isset($context["text_db"]) ? $context["text_db"] : null);
        echo "</td>
                <td>";
        // line 118
        if ((isset($context["db"]) ? $context["db"] : null)) {
            // line 119
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
        } else {
            // line 121
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
        }
        // line 122
        echo "</td>
                <td>";
        // line 123
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 124
        if ((isset($context["db"]) ? $context["db"] : null)) {
            // line 125
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>";
        } else {
            // line 127
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>";
        }
        // line 128
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 131
        echo (isset($context["text_gd"]) ? $context["text_gd"] : null);
        echo "</td>
                <td>";
        // line 132
        if ((isset($context["gd"]) ? $context["gd"] : null)) {
            // line 133
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
        } else {
            // line 135
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
        }
        // line 136
        echo "</td>
                <td>";
        // line 137
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 138
        if ((isset($context["gd"]) ? $context["gd"] : null)) {
            // line 139
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>";
        } else {
            // line 141
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>";
        }
        // line 142
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 145
        echo (isset($context["text_curl"]) ? $context["text_curl"] : null);
        echo "</td>
                <td>";
        // line 146
        if ((isset($context["curl"]) ? $context["curl"] : null)) {
            // line 147
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
        } else {
            // line 149
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
        }
        // line 150
        echo "</td>
                <td>";
        // line 151
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 152
        if ((isset($context["curl"]) ? $context["curl"] : null)) {
            // line 153
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>";
        } else {
            // line 155
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>";
        }
        // line 156
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 159
        echo (isset($context["text_openssl"]) ? $context["text_openssl"] : null);
        echo "</td>
                <td>";
        // line 160
        if ((isset($context["openssl"]) ? $context["openssl"] : null)) {
            // line 161
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
        } else {
            // line 163
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
        }
        // line 164
        echo "</td>
                <td>";
        // line 165
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 166
        if ((isset($context["openssl"]) ? $context["openssl"] : null)) {
            // line 167
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>";
        } else {
            // line 169
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>";
        }
        // line 170
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 173
        echo (isset($context["text_zlib"]) ? $context["text_zlib"] : null);
        echo "</td>
                <td>";
        // line 174
        if ((isset($context["zlib"]) ? $context["zlib"] : null)) {
            // line 175
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
        } else {
            // line 177
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
        }
        // line 178
        echo "</td>
                <td>";
        // line 179
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 180
        if ((isset($context["zlib"]) ? $context["zlib"] : null)) {
            // line 181
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>";
        } else {
            // line 183
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>";
        }
        // line 184
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 187
        echo (isset($context["text_zip"]) ? $context["text_zip"] : null);
        echo "</td>
                <td>";
        // line 188
        if ((isset($context["zip"]) ? $context["zip"] : null)) {
            // line 189
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
        } else {
            // line 191
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
        }
        // line 192
        echo "</td>
                <td>";
        // line 193
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 194
        if ((isset($context["zip"]) ? $context["zip"] : null)) {
            // line 195
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>";
        } else {
            // line 197
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>";
        }
        // line 198
        echo "</td>
              </tr>";
        // line 200
        if ( !(isset($context["iconv"]) ? $context["iconv"] : null)) {
            // line 201
            echo "              <tr>
                <td>";
            // line 202
            echo (isset($context["text_mbstring"]) ? $context["text_mbstring"] : null);
            echo "</td>
                <td>";
            // line 203
            if ((isset($context["mbstring"]) ? $context["mbstring"] : null)) {
                // line 204
                echo (isset($context["text_on"]) ? $context["text_on"] : null);
            } else {
                // line 206
                echo (isset($context["text_off"]) ? $context["text_off"] : null);
            }
            // line 207
            echo "</td>
                <td>";
            // line 208
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "</td>
                <td class=\"text-center\">";
            // line 209
            if ((isset($context["mbstring"]) ? $context["mbstring"] : null)) {
                // line 210
                echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>";
            } else {
                // line 212
                echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>";
            }
            // line 213
            echo "</td>
              </tr>";
        }
        // line 216
        echo "            </tbody>
          </table>
        </fieldset>
        <p>";
        // line 219
        echo (isset($context["text_install_file"]) ? $context["text_install_file"] : null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td><b>";
        // line 224
        echo (isset($context["text_file"]) ? $context["text_file"] : null);
        echo "</b></td>
                <td><b>";
        // line 225
        echo (isset($context["text_status"]) ? $context["text_status"] : null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 230
        echo (isset($context["catalog_config"]) ? $context["catalog_config"] : null);
        echo "</td>
                <td>";
        // line 231
        if ( !(isset($context["error_catalog_config"]) ? $context["error_catalog_config"] : null)) {
            // line 232
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>";
        } else {
            // line 234
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_catalog_config"]) ? $context["error_catalog_config"] : null);
            echo "</span>";
        }
        // line 235
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 238
        echo (isset($context["admin_config"]) ? $context["admin_config"] : null);
        echo "</td>
                <td>";
        // line 239
        if ( !(isset($context["error_admin_config"]) ? $context["error_admin_config"] : null)) {
            // line 240
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>";
        } else {
            // line 242
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_admin_config"]) ? $context["error_admin_config"] : null);
            echo "</span>";
        }
        // line 243
        echo "</td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <p>";
        // line 248
        echo (isset($context["text_install_directory"]) ? $context["text_install_directory"] : null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td align=\"left\"><b>";
        // line 253
        echo (isset($context["text_directory"]) ? $context["text_directory"] : null);
        echo "</b></td>
                <td align=\"left\"><b>";
        // line 254
        echo (isset($context["text_status"]) ? $context["text_status"] : null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 259
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "/</td>
                <td>";
        // line 260
        if ( !(isset($context["error_image"]) ? $context["error_image"] : null)) {
            // line 261
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>";
        } else {
            // line 263
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_image"]) ? $context["error_image"] : null);
            echo "</span>";
        }
        // line 264
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 267
        echo (isset($context["image_cache"]) ? $context["image_cache"] : null);
        echo "/</td>
                <td>";
        // line 268
        if ( !(isset($context["error_image_cache"]) ? $context["error_image_cache"] : null)) {
            // line 269
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>";
        } else {
            // line 271
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_image_cache"]) ? $context["error_image_cache"] : null);
            echo "</span>";
        }
        // line 272
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 275
        echo (isset($context["image_catalog"]) ? $context["image_catalog"] : null);
        echo "/</td>
                <td>";
        // line 276
        if ( !(isset($context["error_image_catalog"]) ? $context["error_image_catalog"] : null)) {
            // line 277
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>";
        } else {
            // line 279
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_image_catalog"]) ? $context["error_image_catalog"] : null);
            echo "</span>";
        }
        // line 280
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 283
        echo (isset($context["cache"]) ? $context["cache"] : null);
        echo "/</td>
                <td>";
        // line 284
        if ( !(isset($context["error_cache"]) ? $context["error_cache"] : null)) {
            // line 285
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>";
        } else {
            // line 287
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_cache"]) ? $context["error_cache"] : null);
            echo "</span>";
        }
        // line 288
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 291
        echo (isset($context["logs"]) ? $context["logs"] : null);
        echo "/</td>
                <td>";
        // line 292
        if ( !(isset($context["error_logs"]) ? $context["error_logs"] : null)) {
            // line 293
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>";
        } else {
            // line 295
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_logs"]) ? $context["error_logs"] : null);
            echo "</span>";
        }
        // line 296
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 299
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "/</td>
                <td>";
        // line 300
        if ( !(isset($context["error_download"]) ? $context["error_download"] : null)) {
            // line 301
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>";
        } else {
            // line 303
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_download"]) ? $context["error_download"] : null);
            echo "</span>";
        }
        // line 304
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 307
        echo (isset($context["upload"]) ? $context["upload"] : null);
        echo "/</td>
                <td>";
        // line 308
        if ( !(isset($context["error_upload"]) ? $context["error_upload"] : null)) {
            // line 309
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>";
        } else {
            // line 311
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_upload"]) ? $context["error_upload"] : null);
            echo "</span>";
        }
        // line 312
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 315
        echo (isset($context["modification"]) ? $context["modification"] : null);
        echo "/</td>
                <td>";
        // line 316
        if ( !(isset($context["error_modification"]) ? $context["error_modification"] : null)) {
            // line 317
            echo "                  <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>";
        } else {
            // line 319
            echo "                  <span class=\"text-danger\">";
            echo (isset($context["error_modification"]) ? $context["error_modification"] : null);
            echo "</span>";
        }
        // line 320
        echo "</td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-left\"><a href=\"";
        // line 326
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn btn-default\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 328
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
    </div>
    <div class=\"col-sm-3\">";
        // line 333
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "</div>
  </div>
</div>";
        // line 336
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "install/step_2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  772 => 336,  767 => 333,  759 => 328,  752 => 326,  744 => 320,  739 => 319,  734 => 317,  732 => 316,  728 => 315,  723 => 312,  718 => 311,  713 => 309,  711 => 308,  707 => 307,  702 => 304,  697 => 303,  692 => 301,  690 => 300,  686 => 299,  681 => 296,  676 => 295,  671 => 293,  669 => 292,  665 => 291,  660 => 288,  655 => 287,  650 => 285,  648 => 284,  644 => 283,  639 => 280,  634 => 279,  629 => 277,  627 => 276,  623 => 275,  618 => 272,  613 => 271,  608 => 269,  606 => 268,  602 => 267,  597 => 264,  592 => 263,  587 => 261,  585 => 260,  581 => 259,  573 => 254,  569 => 253,  561 => 248,  554 => 243,  549 => 242,  544 => 240,  542 => 239,  538 => 238,  533 => 235,  528 => 234,  523 => 232,  521 => 231,  517 => 230,  509 => 225,  505 => 224,  497 => 219,  492 => 216,  488 => 213,  485 => 212,  482 => 210,  480 => 209,  476 => 208,  473 => 207,  470 => 206,  467 => 204,  465 => 203,  461 => 202,  458 => 201,  456 => 200,  453 => 198,  450 => 197,  447 => 195,  445 => 194,  441 => 193,  438 => 192,  435 => 191,  432 => 189,  430 => 188,  426 => 187,  421 => 184,  418 => 183,  415 => 181,  413 => 180,  409 => 179,  406 => 178,  403 => 177,  400 => 175,  398 => 174,  394 => 173,  389 => 170,  386 => 169,  383 => 167,  381 => 166,  377 => 165,  374 => 164,  371 => 163,  368 => 161,  366 => 160,  362 => 159,  357 => 156,  354 => 155,  351 => 153,  349 => 152,  345 => 151,  342 => 150,  339 => 149,  336 => 147,  334 => 146,  330 => 145,  325 => 142,  322 => 141,  319 => 139,  317 => 138,  313 => 137,  310 => 136,  307 => 135,  304 => 133,  302 => 132,  298 => 131,  293 => 128,  290 => 127,  287 => 125,  285 => 124,  281 => 123,  278 => 122,  275 => 121,  272 => 119,  270 => 118,  266 => 117,  258 => 112,  254 => 111,  250 => 110,  246 => 109,  238 => 104,  231 => 99,  228 => 98,  225 => 96,  223 => 95,  219 => 94,  216 => 93,  213 => 92,  210 => 90,  208 => 89,  204 => 88,  199 => 85,  196 => 84,  193 => 82,  191 => 81,  187 => 80,  184 => 79,  181 => 78,  178 => 76,  176 => 75,  172 => 74,  167 => 71,  164 => 70,  161 => 68,  159 => 67,  155 => 66,  152 => 65,  149 => 64,  146 => 62,  144 => 61,  140 => 60,  135 => 57,  132 => 56,  129 => 54,  127 => 53,  123 => 52,  120 => 51,  117 => 50,  114 => 48,  112 => 47,  108 => 46,  103 => 43,  100 => 42,  97 => 40,  95 => 39,  90 => 37,  86 => 36,  78 => 31,  74 => 30,  70 => 29,  66 => 28,  58 => 23,  54 => 22,  50 => 20,  43 => 16,  41 => 15,  32 => 8,  28 => 7,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <header>*/
/*     <div class="row">*/
/*       <div class="col-sm-6">*/
/*         <h1 class="pull-left">2<small>/4</small></h1>*/
/*         <h3>{{ heading_title }}<br>*/
/*           <small>{{ text_step_2 }}</small></h3>*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         <div id="logo" class="pull-right hidden-xs"><img src="view/image/logo.png" alt="OpenCart" title="OpenCart" /></div>*/
/*       </div>*/
/*     </div>*/
/*   </header>*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">*/
/*     <div class="col-sm-9">*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*         <p>{{ text_install_php }}</p>*/
/*         <fieldset>*/
/*           <table class="table">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td width="35%"><b>{{ text_setting }}</b></td>*/
/*                 <td width="25%"><b>{{ text_current }}</b></td>*/
/*                 <td width="25%"><b>{{ text_required }}</b></td>*/
/*                 <td width="15%" class="text-center"><b>{{ text_status }}</b></td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>{{ text_version }}</td>*/
/*                 <td>{{ php_version }}</td>*/
/*                 <td>5.4+</td>*/
/*                 <td class="text-center">{% if php_version >= '5.4' %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_global }}</td>*/
/*                 <td>{% if register_globals %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_off }}</td>*/
/*                 <td class="text-center">{% if not register_globals %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_magic }}</td>*/
/*                 <td>{% if magic_quotes_gpc %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_off }}</td>*/
/*                 <td class="text-center">{% if not error_magic_quotes_gpc %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_file_upload }}</td>*/
/*                 <td>{% if file_uploads %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">{% if file_uploads %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_session }}</td>*/
/*                 <td>{% if session_auto_start %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_off }}</td>*/
/*                 <td class="text-center">{% if not session_auto_start %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*             </tbody>*/
/*           </table>*/
/*         </fieldset>*/
/*         <p>{{ text_install_extension }}</p>*/
/*         <fieldset>*/
/*           <table class="table">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td width="35%"><b>{{ text_extension }}</b></td>*/
/*                 <td width="25%"><b>{{ text_current }}</b></td>*/
/*                 <td width="25%"><b>{{ text_required }}</b></td>*/
/*                 <td width="15%" class="text-center"><b>{{ text_status }}</b></td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>{{ text_db }}</td>*/
/*                 <td>{% if db %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">{% if db %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_gd }}</td>*/
/*                 <td>{% if gd %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">{% if gd %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_curl }}</td>*/
/*                 <td>{% if curl %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">{% if curl %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_openssl }}</td>*/
/*                 <td>{% if openssl %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">{% if openssl %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_zlib }}</td>*/
/*                 <td>{% if zlib %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">{% if zlib %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_zip }}</td>*/
/*                 <td>{% if zip %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">{% if zip %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               {% if not iconv %}*/
/*               <tr>*/
/*                 <td>{{ text_mbstring }}</td>*/
/*                 <td>{% if mbstring %}*/
/*                   {{ text_on }}*/
/*                   {% else %}*/
/*                   {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">{% if mbstring %}*/
/*                   <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                   <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               {% endif %}*/
/*             </tbody>*/
/*           </table>*/
/*         </fieldset>*/
/*         <p>{{ text_install_file }}</p>*/
/*         <fieldset>*/
/*           <table class="table">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td><b>{{ text_file }}</b></td>*/
/*                 <td><b>{{ text_status }}</b></td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>{{ catalog_config }}</td>*/
/*                 <td>{% if not error_catalog_config %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_catalog_config }}</span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ admin_config }}</td>*/
/*                 <td>{% if not error_admin_config %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_admin_config }}</span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*             </tbody>*/
/*           </table>*/
/*         </fieldset>*/
/*         <p>{{ text_install_directory }}</p>*/
/*         <fieldset>*/
/*           <table class="table">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td align="left"><b>{{ text_directory }}</b></td>*/
/*                 <td align="left"><b>{{ text_status }}</b></td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>{{ image }}/</td>*/
/*                 <td>{% if not error_image %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_image }}</span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ image_cache }}/</td>*/
/*                 <td>{% if not error_image_cache %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_image_cache }}</span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ image_catalog }}/</td>*/
/*                 <td>{% if not error_image_catalog %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_image_catalog }}</span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ cache }}/</td>*/
/*                 <td>{% if not error_cache %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_cache }}</span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ logs }}/</td>*/
/*                 <td>{% if not error_logs %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_logs }}</span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ download }}/</td>*/
/*                 <td>{% if not error_download %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_download }}</span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ upload }}/</td>*/
/*                 <td>{% if not error_upload %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_upload }}</span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ modification }}/</td>*/
/*                 <td>{% if not error_modification %}*/
/*                   <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-danger">{{ error_modification }}</span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*             </tbody>*/
/*           </table>*/
/*         </fieldset>*/
/*         <div class="buttons">*/
/*           <div class="pull-left"><a href="{{ back }}" class="btn btn-default">{{ button_back }}</a></div>*/
/*           <div class="pull-right">*/
/*             <input type="submit" value="{{ button_continue }}" class="btn btn-primary" />*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*     </div>*/
/*     <div class="col-sm-3">{{ column_left }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
