<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/gavias_uxima/templates/page/header.html.twig */
class __TwigTemplate_bb8ee6a3db2a42465914b54aaf39dd37556c8f4ccb82ea56d22418bf5ce0a6cb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header id=\"header\" class=\"header-default\">
  
  ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 3)) {
            // line 4
            echo "    <div class=\"topbar\">
      <div class=\"topbar-inner\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <div class=\"topbar-content-inner clearfix\"> 
                <div class=\"topbar-content\">";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</div>
                ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 11)) {
                // line 12
                echo "                  <div class=\"gva-search-region search-region\">
                    <span class=\"icon\"><i class=\"gv-icon-52\"></i></span>
                    <div class=\"search-content\">  
                      ";
                // line 15
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "
                    </div>  
                  </div>
                ";
            }
            // line 19
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "quick_side", [], "any", false, false, true, 19)) {
                // line 20
                echo "                  <div class=\"quick-side-icon d-none d-lg-block d-xl-block\">
                    <div class=\"icon\"><a href=\"#\"><span class=\"qicon gv-icon-103\"></span></a></div>
                  </div>
                ";
            }
            // line 24
            echo "              </div>  
            </div>
          </div>   
        </div>
      </div>
    </div>
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        $context["class_sticky"] = "";
        // line 33
        echo "  ";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 34
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 35
            echo "  ";
        }
        echo "  

   <div class=\"header-main ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_sticky"] ?? null), 37, $this->source), "html", null, true);
        echo "\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12 content-inner\">
                <div class=\"branding\">
                  ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 43)) {
            // line 44
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "
                  ";
        }
        // line 46
        echo "                </div>
                
                <div class=\"header-inner clearfix ";
        // line 48
        if ($this->extensions['Drupal\gavias_hook_themer\TwigExtension']->themeSetting("header_button")) {
            echo "has-button";
        }
        echo "\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                        <div class=\"gva-offcanvas-mobile\">
                          <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                          <div class=\"main-menu-inner\">
                            ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 55)) {
            // line 56
            echo "                              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "
                            ";
        }
        // line 58
        echo "                          </div>

                          ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 60)) {
            // line 61
            echo "                            <div class=\"after-offcanvas hidden\">
                              ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "
                            </div>
                          ";
        }
        // line 65
        echo "                        </div>
                        
                        <div id=\"menu-bar\" class=\"menu-bar menu-bar-mobile d-lg-none d-xl-none\">
                          <span class=\"one\"></span>
                          <span class=\"two\"></span>
                          <span class=\"three\"></span>
                        </div>

                        ";
        // line 73
        if ($this->extensions['Drupal\gavias_hook_themer\TwigExtension']->themeSetting("header_button")) {
            // line 74
            echo "                          <!--<div class=\"header-button\">
                            <a class=\"btn-theme\" href=\"";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\gavias_hook_themer\TwigExtension']->themeSetting("header_button"), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Get A Quote"));
            echo "</a>
                          </div>-->
                        ";
        }
        // line 77
        echo "  

                      </div>
                    </div>
                  </div>  
                </div> 
              </div>

            </div>
         </div>
      </div>
   </div>

</header>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_uxima/templates/page/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 77,  177 => 75,  174 => 74,  172 => 73,  162 => 65,  156 => 62,  153 => 61,  151 => 60,  147 => 58,  141 => 56,  139 => 55,  127 => 48,  123 => 46,  117 => 44,  115 => 43,  106 => 37,  100 => 35,  97 => 34,  94 => 33,  92 => 32,  89 => 31,  80 => 24,  74 => 20,  71 => 19,  64 => 15,  59 => 12,  57 => 11,  53 => 10,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_uxima/templates/page/header.html.twig", "C:\\laragon\\www\\ecpdademo-backup\\ecpda-demo\\themes\\gavias_uxima\\templates\\page\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "set" => 32);
        static $filters = array("escape" => 10, "t" => 75);
        static $functions = array("gva_theme_setting" => 48);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 't'],
                ['gva_theme_setting']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
