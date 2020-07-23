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

/* themes/contrib/icemagic/templates/layout/page.html.twig */
class __TwigTemplate_138facffd420204c614d57597995508ca3582fcf1d3df9fec3d31c4315927a2b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'highlighted' => [$this, 'block_highlighted'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 65, "block" => 66, "set" => 137];
        $filters = ["escape" => 175, "t" => 75];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
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
        // line 100
        $this->displayBlock('main', $context, $blocks);
        // line 170
        echo "
<footer id = \"footer-wrap\" class = \"footer-section section footer-wrap\">

  ";
        // line 173
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 174
            echo "  <div class = \"footer-message text-center\">
    <div class = \"";
            // line 175
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">  
    ";
            // line 176
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
    </div>    
  </div>
  ";
        } elseif ($this->getAttribute(        // line 179
($context["snippet"] ?? null), "footer", [])) {
            // line 180
            echo "  <div class = \"footer-message text-center\">
    <div class = \"";
            // line 181
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">  
    ";
            // line 182
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["snippet"] ?? null), "footer", [])), "html", null, true);
            echo "
    </div>    
  </div>
  ";
        }
        // line 186
        echo "  
\t";
        // line 187
        if (($this->getAttribute(($context["page"] ?? null), "footer_menu", []) || $this->getAttribute(($context["snippet"] ?? null), "footer_menu", []))) {
            // line 188
            echo "  <div class = \"footer-menus force-menu-hr xs-force-menu-vr xs-text-center\">
  \t<div class = \"";
            // line 189
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
  \t\t<div class = \"row\">
        ";
            // line 191
            if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
                // line 192
                echo "        <div class = \"footer-menus-block xs-text-center col-xs-12\">
          ";
                // line 193
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
                echo "
        </div>
        ";
            } elseif ($this->getAttribute(            // line 195
($context["snippet"] ?? null), "footer_menu", [])) {
                // line 196
                echo "        <div class = \"footer-menus-snippet xs-text-center col-xs-12\">
          ";
                // line 197
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["snippet"] ?? null), "footer_menu", [])), "html", null, true);
                echo "
        </div>
        ";
            }
            // line 200
            echo "  \t\t</div>
  \t</div>
  </div>
  ";
        }
        // line 203
        echo "  
  
  <div class = \"footer-copyright-social text-center\">
    <div class = \"";
        // line 206
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
      <div class = \"row\">

      ";
        // line 209
        if ($this->getAttribute(($context["page"] ?? null), "footer_copyright", [])) {
            // line 210
            echo "        <div class = \"col-sm-6 col-xs-12 footer-copyright text-left xs-text-center\">
        ";
            // line 211
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_copyright", [])), "html", null, true);
            echo "
        </div>
        ";
        } elseif ($this->getAttribute(        // line 213
($context["snippet"] ?? null), "footer_copyright", [])) {
            // line 214
            echo "        <div class = \"col-sm-6 col-xs-12 footer-copyright text-left xs-text-center\">
        ";
            // line 215
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["snippet"] ?? null), "footer_copyright", [])), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 218
        echo "        
        ";
        // line 219
        if ($this->getAttribute(($context["page"] ?? null), "footer_social", [])) {
            // line 220
            echo "        <div class = \"col-sm-6 col-xs-12 footer-social text-right xs-text-center\">
            ";
            // line 221
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_social", [])), "html", null, true);
            echo "
        </div>
        ";
        } elseif ($this->getAttribute(        // line 223
($context["snippet"] ?? null), "footer_social", [])) {
            // line 224
            echo "        <div class = \"col-sm-6 col-xs-12 footer-social text-right xs-text-center\">
            ";
            // line 225
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["snippet"] ?? null), "footer_social", [])), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 228
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

    // line 100
    public function block_main($context, array $blocks = [])
    {
        // line 101
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 105
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 106
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 111
            echo "      ";
        }
        // line 112
        echo "      
      ";
        // line 114
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 115
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 124
            echo "      ";
        }
        // line 125
        echo "
      ";
        // line 127
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 128
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 133
            echo "      ";
        }
        // line 134
        echo "
      ";
        // line 136
        echo "      ";
        // line 137
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 138
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 139
($context["page"] ?? null), "sidebar_first", []) || $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-9") : ("")), 2 => (((twig_test_empty($this->getAttribute(        // line 140
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 143
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 146
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 147
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 150
            echo "        ";
        }
        // line 151
        echo "
        ";
        // line 153
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 157
        echo "      </section>

      ";
        // line 160
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 161
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 166
            echo "      ";
        }
        // line 167
        echo "    </div>
  </div>
";
    }

    // line 106
    public function block_header($context, array $blocks = [])
    {
        // line 107
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 108
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 115
    public function block_highlighted($context, array $blocks = [])
    {
        // line 116
        echo "          <div class=\"highlighted col-sm-12\">
            <div class=\"panel panel-default\">
              <div class = \"panel-body\">
                ";
        // line 119
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
              </div>
            </div>
          </div>  
        ";
    }

    // line 128
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 129
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 130
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 147
    public function block_help($context, array $blocks = [])
    {
        // line 148
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 153
    public function block_content($context, array $blocks = [])
    {
        // line 154
        echo "          <a id=\"main-content\"></a>
          ";
        // line 155
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 161
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 162
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 163
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/icemagic/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 163,  453 => 162,  450 => 161,  444 => 155,  441 => 154,  438 => 153,  431 => 148,  428 => 147,  421 => 130,  418 => 129,  415 => 128,  406 => 119,  401 => 116,  398 => 115,  391 => 108,  388 => 107,  385 => 106,  379 => 167,  376 => 166,  373 => 161,  370 => 160,  366 => 157,  363 => 153,  360 => 151,  357 => 150,  354 => 147,  351 => 146,  345 => 143,  343 => 140,  342 => 139,  341 => 138,  340 => 137,  338 => 136,  335 => 134,  332 => 133,  329 => 128,  326 => 127,  323 => 125,  320 => 124,  317 => 115,  314 => 114,  311 => 112,  308 => 111,  305 => 106,  302 => 105,  295 => 101,  292 => 100,  287 => 95,  283 => 93,  280 => 92,  275 => 89,  268 => 88,  262 => 87,  258 => 86,  254 => 84,  251 => 83,  241 => 75,  238 => 74,  234 => 72,  231 => 71,  225 => 69,  223 => 68,  218 => 67,  215 => 66,  206 => 228,  200 => 225,  197 => 224,  195 => 223,  190 => 221,  187 => 220,  185 => 219,  182 => 218,  176 => 215,  173 => 214,  171 => 213,  166 => 211,  163 => 210,  161 => 209,  155 => 206,  150 => 203,  144 => 200,  138 => 197,  135 => 196,  133 => 195,  128 => 193,  125 => 192,  123 => 191,  118 => 189,  115 => 188,  113 => 187,  110 => 186,  103 => 182,  99 => 181,  96 => 180,  94 => 179,  88 => 176,  84 => 175,  81 => 174,  79 => 173,  74 => 170,  72 => 100,  69 => 98,  65 => 66,  63 => 65,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/icemagic/templates/layout/page.html.twig", "/home/ofshore/public_html/dev/themes/contrib/icemagic/templates/layout/page.html.twig");
    }
}
