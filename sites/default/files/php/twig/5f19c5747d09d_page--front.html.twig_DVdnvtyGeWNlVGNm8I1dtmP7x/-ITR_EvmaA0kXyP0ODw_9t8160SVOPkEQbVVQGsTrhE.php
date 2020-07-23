<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/icemagic/templates/layout/page--front.html.twig */
class __TwigTemplate_43ec838c2b8186ae7b6fc0cf18896d27bd37322d3bdba7c7bb48db0860bcb647 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 65, "block" => 66];
        $filters = ["escape" => 101, "t" => 75];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 65
        if (((($this->getAttribute(($context["page"] ?? null), "branding", []) || $this->getAttribute(($context["page"] ?? null), "navigation", [])) || ($context["secondary_nav"] ?? null)) || ($context["primary_nav"] ?? null))) {
            // line 66
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 98
        echo "
    ";
        // line 99
        if ($this->getAttribute(($context["page"] ?? null), "home_welcome", [])) {
            // line 100
            echo "      <section class = \"carousel-welcome-slider\">
        ";
            // line 101
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "home_welcome", [])), "html", null, true);
            echo "
      </section>
    ";
        } elseif ($this->getAttribute(        // line 103
($context["snippet"] ?? null), "home_welcome", [])) {
            // line 104
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["snippet"] ?? null), "home_welcome", [])), "html", null, true);
            echo "
    ";
        }
        // line 106
        echo "
    ";
        // line 107
        if ($this->getAttribute(($context["page"] ?? null), "content_about", [])) {
            // line 108
            echo "      <section class = \"content-about plugin-content\">
         <div class = \"";
            // line 109
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 110
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_about", [])), "html", null, true);
            echo "
          </div>
      </section>
    ";
        } elseif ($this->getAttribute(        // line 113
($context["snippet"] ?? null), "content_about", [])) {
            // line 114
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["snippet"] ?? null), "content_about", [])), "html", null, true);
            echo "
    ";
        }
        // line 116
        echo "
    ";
        // line 117
        if ($this->getAttribute(($context["page"] ?? null), "content_positive", [])) {
            // line 118
            echo "      <section class = \"content-positive plugin-content\">
         <div class = \"";
            // line 119
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 120
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_positive", [])), "html", null, true);
            echo "
          </div>
      </section>
    ";
        } elseif ($this->getAttribute(        // line 123
($context["snippet"] ?? null), "content_positive", [])) {
            // line 124
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["snippet"] ?? null), "content_positive", [])), "html", null, true);
            echo "
    ";
        }
        // line 126
        echo "
    ";
        // line 127
        if ($this->getAttribute(($context["page"] ?? null), "content_boxed", [])) {
            // line 128
            echo "      <section class = \"content-boxed plugin-content\">
         <div class = \"";
            // line 129
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 130
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_boxed", [])), "html", null, true);
            echo "
          </div>
      </section>
    ";
        } elseif ($this->getAttribute(        // line 133
($context["snippet"] ?? null), "content_boxed", [])) {
            // line 134
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["snippet"] ?? null), "content_boxed", [])), "html", null, true);
            echo "
    ";
        }
        // line 136
        echo "
<div class=\"main-container ";
        // line 137
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">

  <header role=\"banner\" id=\"page-header\">
    ";
        // line 140
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
  </header> <!-- /#page-header -->

  <div class=\"row\">

    ";
        // line 145
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 146
            echo "      <aside class=\"col-sm-3\" role=\"complementary\">
        ";
            // line 147
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
      </aside>  <!-- End first aside. -->
    ";
        }
        // line 150
        echo "
    <section";
        // line 151
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_column_attributes"] ?? null)), "html", null, true);
        echo ">
      ";
        // line 152
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 153
            echo "        <div class=\"highlighted\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "</div>
      ";
        }
        // line 155
        echo "      <a id=\"main-content\"></a>
      ";
        // line 156
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
      ";
        // line 157
        if (($context["title"] ?? null)) {
            // line 158
            echo "        <h1 class=\"page-header\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h1>
      ";
        }
        // line 160
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

      ";
        // line 162
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
        echo "
      ";
        // line 163
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null)), "html", null, true);
        echo "
      ";
        // line 164
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "

      ";
        // line 166
        if (($context["action_links"] ?? null)) {
            // line 167
            echo "        <ul class=\"action-links\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
            echo "</ul>
      ";
        }
        // line 169
        echo "
      ";
        // line 170
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
    </section>

    ";
        // line 173
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 174
            echo "      <aside class=\"col-sm-3\" role=\"complementary\">
        ";
            // line 175
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
      </aside> <!-- End second aside. -->
    ";
        }
        // line 178
        echo "
  </div>
</div>
<footer id = \"footer-wrap\" class = \"footer-section section footer-wrap\">

  ";
        // line 183
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 184
            echo "  <div class = \"footer-message text-center\">
    <div class = \"";
            // line 185
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">  
    ";
            // line 186
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
    </div>    
  </div>
  ";
        } elseif ($this->getAttribute(        // line 189
($context["snippet"] ?? null), "footer", [])) {
            // line 190
            echo "  <div class = \"footer-message text-center\">
    <div class = \"";
            // line 191
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">  
    ";
            // line 192
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["snippet"] ?? null), "footer", [])), "html", null, true);
            echo "
    </div>    
  </div>
  ";
        }
        // line 196
        echo "  
\t";
        // line 197
        if (($this->getAttribute(($context["page"] ?? null), "footer_menu", []) || $this->getAttribute(($context["snippet"] ?? null), "footer_menu", []))) {
            // line 198
            echo "  <div class = \"footer-menus force-menu-hr xs-force-menu-vr xs-text-center\">
  \t<div class = \"";
            // line 199
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
  \t\t<div class = \"row\">
        ";
            // line 201
            if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
                // line 202
                echo "        <div class = \"footer-menus-block xs-text-center col-xs-12\">
          ";
                // line 203
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
                echo "
        </div>
        ";
            } elseif ($this->getAttribute(            // line 205
($context["snippet"] ?? null), "footer_menu", [])) {
                // line 206
                echo "        <div class = \"footer-menus-snippet xs-text-center col-xs-12\">
          ";
                // line 207
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["snippet"] ?? null), "footer_menu", [])), "html", null, true);
                echo "
        </div>
        ";
            }
            // line 210
            echo "  \t\t</div>
  \t</div>
  </div>
  ";
        }
        // line 213
        echo "  
  
  <div class = \"footer-copyright-social text-center\">
    <div class = \"";
        // line 216
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
      <div class = \"row\">

      ";
        // line 219
        if ($this->getAttribute(($context["page"] ?? null), "footer_copyright", [])) {
            // line 220
            echo "        <div class = \"col-sm-6 col-xs-12 footer-copyright text-left xs-text-center\">
        ";
            // line 221
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_copyright", [])), "html", null, true);
            echo "
        </div>
        ";
        } elseif ($this->getAttribute(        // line 223
($context["snippet"] ?? null), "footer_copyright", [])) {
            // line 224
            echo "        <div class = \"col-sm-6 col-xs-12 footer-copyright text-left xs-text-center\">
        ";
            // line 225
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["snippet"] ?? null), "footer_copyright", [])), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 228
        echo "        
        ";
        // line 229
        if ($this->getAttribute(($context["page"] ?? null), "footer_social", [])) {
            // line 230
            echo "        <div class = \"col-sm-6 col-xs-12 footer-social text-right xs-text-center\">
            ";
            // line 231
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_social", [])), "html", null, true);
            echo "
        </div>
        ";
        } elseif ($this->getAttribute(        // line 233
($context["snippet"] ?? null), "footer_social", [])) {
            // line 234
            echo "        <div class = \"col-sm-6 col-xs-12 footer-social text-right xs-text-center\">
            ";
            // line 235
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["snippet"] ?? null), "footer_social", [])), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 238
        echo "
      </diV>
    </div>
  </div>
</footer>
";
    }

    // line 66
    public function block_navbar($context, array $blocks = [])
    {
        // line 67
        echo "    <header";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null)), "html", null, true);
        echo " id=\"navbar\" role=\"banner\" data-spy=\"affix\"  data-offset-top=\"70\">
    ";
        // line 68
        if ( !($context["navbar_is_default"] ?? null)) {
            // line 69
            echo "      <div class = \"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
    ";
        }
        // line 71
        echo "      <div class=\"navbar-header\">
        ";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
        echo "
        ";
        // line 74
        echo "        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"sr-only\">";
        // line 75
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
        echo "</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
      </div>

      ";
        // line 83
        echo "      ";
        if ((($this->getAttribute(($context["page"] ?? null), "navigation", []) || ($context["secondary_nav"] ?? null)) || ($context["primary_nav"] ?? null))) {
            // line 84
            echo "        <div class=\"navbar-collapse collapse\">
          <nav role=\"navigation\">
          ";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
            echo "
          ";
            // line 87
            if (($context["secondary_nav"] ?? null)) {
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_nav"] ?? null)), "html", null, true);
                echo " ";
            }
            // line 88
            echo "          ";
            if (($context["primary_nav"] ?? null)) {
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary_nav"] ?? null)), "html", null, true);
                echo " ";
            }
            // line 89
            echo "          </nav>
        </div>
      ";
        }
        // line 92
        echo "      ";
        if ( !($context["navbar_is_default"] ?? null)) {
            // line 93
            echo "        </div>
      ";
        }
        // line 95
        echo "    </header>
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/icemagic/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 95,  477 => 93,  474 => 92,  469 => 89,  462 => 88,  456 => 87,  452 => 86,  448 => 84,  445 => 83,  435 => 75,  432 => 74,  428 => 72,  425 => 71,  419 => 69,  417 => 68,  412 => 67,  409 => 66,  400 => 238,  394 => 235,  391 => 234,  389 => 233,  384 => 231,  381 => 230,  379 => 229,  376 => 228,  370 => 225,  367 => 224,  365 => 223,  360 => 221,  357 => 220,  355 => 219,  349 => 216,  344 => 213,  338 => 210,  332 => 207,  329 => 206,  327 => 205,  322 => 203,  319 => 202,  317 => 201,  312 => 199,  309 => 198,  307 => 197,  304 => 196,  297 => 192,  293 => 191,  290 => 190,  288 => 189,  282 => 186,  278 => 185,  275 => 184,  273 => 183,  266 => 178,  260 => 175,  257 => 174,  255 => 173,  249 => 170,  246 => 169,  240 => 167,  238 => 166,  233 => 164,  229 => 163,  225 => 162,  219 => 160,  213 => 158,  211 => 157,  207 => 156,  204 => 155,  198 => 153,  196 => 152,  192 => 151,  189 => 150,  183 => 147,  180 => 146,  178 => 145,  170 => 140,  164 => 137,  161 => 136,  155 => 134,  153 => 133,  147 => 130,  143 => 129,  140 => 128,  138 => 127,  135 => 126,  129 => 124,  127 => 123,  121 => 120,  117 => 119,  114 => 118,  112 => 117,  109 => 116,  103 => 114,  101 => 113,  95 => 110,  91 => 109,  88 => 108,  86 => 107,  83 => 106,  77 => 104,  75 => 103,  70 => 101,  67 => 100,  65 => 99,  62 => 98,  58 => 66,  56 => 65,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/icemagic/templates/layout/page--front.html.twig", "/home/ofshore/public_html/dev/themes/contrib/icemagic/templates/layout/page--front.html.twig");
    }
}
