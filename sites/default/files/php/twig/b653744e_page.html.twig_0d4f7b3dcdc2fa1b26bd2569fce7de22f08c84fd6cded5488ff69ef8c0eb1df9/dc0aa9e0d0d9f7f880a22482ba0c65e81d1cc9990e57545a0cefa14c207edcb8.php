<?php

/* themes/btheme/templates/page.html.twig */
class __TwigTemplate_5570afcf982db628ad7258dd1cdf553ab417f9959576be361d63359db5e8bf01 extends Twig_Template
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
        $tags = array("if" => 18);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div id=\"page-wrapper\" class=\"pageWrapper clearfix\">
  <link id=\"theme_css\" rel=\"stylesheet\" href=\"themes/btheme/style/btheme_css/dark.css\">
  <link id=\"skin_css\" rel=\"stylesheet\" href=\"themes/btheme/style/btheme_css/skins/default.css\">
  <div id=\"page\" class=\"clearfix ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_classes"]) ? $context["page_classes"] : null), "html", null, true));
        echo "\">
    <header id=\"header-outer-wrapper\" data-sticky=\"true\" class=\"top-head dark boxed-transparent outer-wrapper clearfix ";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((((isset($context["secondary_menu"]) ? $context["secondary_menu"] : null)) ? ("with-secondary-menu") : ("without-secondary-menu"))));
        echo "\" role=\"banner\">
      <div id=\"header-layout\" class=\"";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["region_classes"]) ? $context["region_classes"] : null), "header", array()), "html", null, true));
        echo " inner-wrapper clearfix container\">
        <!-- Logo start -->
\t\t\t    \t<div class=\"logo\">
\t\t\t\t    \t<a href=\"#\"><img alt=\"\" src=\"themes/btheme/images/logo.png\" /></a>
\t\t\t\t    </div>
\t\t\t\t    <!-- Logo end -->
        ";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
      </div>
    </header> <!-- /.section, /#header-->
  
    <section id=\"core-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"core-layout\" class=\"";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["region_classes"]) ? $context["region_classes"] : null), "core", array()), "html", null, true));
        echo " inner-wrapper clearfix\">
        ";
        // line 18
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 19
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
        ";
        }
        // line 21
        echo "      </div>
    </section>
    
    ";
        // line 24
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_fourth", array()))) {
            // line 25
            echo "    <section id=\"preface-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"preface-layout\" class=\"";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["region_classes"]) ? $context["region_classes"] : null), "preface", array()), "html", null, true));
            echo " inner-wrapper clearfix\">
        
        ";
            // line 28
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_first", array())) {
                // line 29
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_first", array()), "html", null, true));
                echo "
        ";
            }
            // line 31
            echo "        
        ";
            // line 32
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_second", array())) {
                // line 33
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_second", array()), "html", null, true));
                echo "
        ";
            }
            // line 35
            echo "        
        ";
            // line 36
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_third", array())) {
                // line 37
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_third", array()), "html", null, true));
                echo "
        ";
            }
            // line 39
            echo "        
        ";
            // line 40
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_fourth", array())) {
                // line 41
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_fourth", array()), "html", null, true));
                echo "
        ";
            }
            // line 43
            echo "        
      </div><!-- /#preface-layout -->
    </section> <!-- /#preface-wrapper -->
    ";
        }
        // line 47
        echo "
    <section id=\"content-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"main-layout\" class=\"";
        // line 49
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["region_classes"]) ? $context["region_classes"] : null), "main", array()), "html", null, true));
        echo " inner-wrapper clearfix\">
        
        ";
        // line 51
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 52
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
        ";
        }
        // line 53
        echo "  
    
        ";
        // line 55
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 56
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
        ";
        }
        // line 58
        echo "    
        ";
        // line 59
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 60
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
        ";
        }
        // line 62
        echo "    
      </div><!-- /#main -->
    </section><!-- /#main-outer-wrapper -->
  
    ";
        // line 66
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_fourth", array()))) {
            // line 67
            echo "    <section id=\"postscript-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"postscript-layout\" class=\"";
            // line 68
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["region_classes"]) ? $context["region_classes"] : null), "postscript", array()), "html", null, true));
            echo " inner-wrapper clearfix\">
        
        ";
            // line 70
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_first", array())) {
                // line 71
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_first", array()), "html", null, true));
                echo "
        ";
            }
            // line 73
            echo "        
        ";
            // line 74
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_second", array())) {
                // line 75
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_second", array()), "html", null, true));
                echo "
        ";
            }
            // line 77
            echo "        
        ";
            // line 78
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_third", array())) {
                // line 79
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_third", array()), "html", null, true));
                echo "
        ";
            }
            // line 81
            echo "        
        ";
            // line 82
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_fourth", array())) {
                // line 83
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_fourth", array()), "html", null, true));
                echo "
        ";
            }
            // line 85
            echo "        
      </div><!-- /#postscript-layout -->
    </section> <!-- /#postscript-outer-wrapper -->
    ";
        }
        // line 89
        echo "    
    ";
        // line 90
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 91
            echo "    <footer id=\"footer-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"footer-layout\" role=\"contentinfo\" class=\"";
            // line 92
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["region_classes"]) ? $context["region_classes"] : null), "footer", array()), "html", null, true));
            echo " inner-wrapper clearfix\">
        ";
            // line 93
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
      </div> <!-- /#footer -->
    </footer> <!-- /#footer-outer-wrapper -->
    ";
        }
        // line 97
        echo "</div>
</div> <!-- /#page, /#page-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/btheme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 97,  262 => 93,  258 => 92,  255 => 91,  253 => 90,  250 => 89,  244 => 85,  238 => 83,  236 => 82,  233 => 81,  227 => 79,  225 => 78,  222 => 77,  216 => 75,  214 => 74,  211 => 73,  205 => 71,  203 => 70,  198 => 68,  195 => 67,  193 => 66,  187 => 62,  181 => 60,  179 => 59,  176 => 58,  170 => 56,  168 => 55,  164 => 53,  158 => 52,  156 => 51,  151 => 49,  147 => 47,  141 => 43,  135 => 41,  133 => 40,  130 => 39,  124 => 37,  122 => 36,  119 => 35,  113 => 33,  111 => 32,  108 => 31,  102 => 29,  100 => 28,  95 => 26,  92 => 25,  90 => 24,  85 => 21,  79 => 19,  77 => 18,  73 => 17,  65 => 12,  56 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }
}
/* <div id="page-wrapper" class="pageWrapper clearfix">*/
/*   <link id="theme_css" rel="stylesheet" href="themes/btheme/style/btheme_css/dark.css">*/
/*   <link id="skin_css" rel="stylesheet" href="themes/btheme/style/btheme_css/skins/default.css">*/
/*   <div id="page" class="clearfix {{ page_classes }}">*/
/*     <header id="header-outer-wrapper" data-sticky="true" class="top-head dark boxed-transparent outer-wrapper clearfix {{ secondary_menu ? 'with-secondary-menu' : 'without-secondary-menu' }}" role="banner">*/
/*       <div id="header-layout" class="{{ region_classes.header }} inner-wrapper clearfix container">*/
/*         <!-- Logo start -->*/
/* 			    	<div class="logo">*/
/* 				    	<a href="#"><img alt="" src="themes/btheme/images/logo.png" /></a>*/
/* 				    </div>*/
/* 				    <!-- Logo end -->*/
/*         {{ page.header }}*/
/*       </div>*/
/*     </header> <!-- /.section, /#header-->*/
/*   */
/*     <section id="core-outer-wrapper" class="outer-wrapper clearfix">*/
/*       <div id="core-layout" class="{{ region_classes.core }} inner-wrapper clearfix">*/
/*         {% if page.highlighted %}*/
/*           {{ page.highlighted }}*/
/*         {% endif %}*/
/*       </div>*/
/*     </section>*/
/*     */
/*     {% if page.preface_first or page.preface_second or page.preface_third or page.preface_fourth %}*/
/*     <section id="preface-outer-wrapper" class="outer-wrapper clearfix">*/
/*       <div id="preface-layout" class="{{ region_classes.preface }} inner-wrapper clearfix">*/
/*         */
/*         {% if page.preface_first %}*/
/*           {{ page.preface_first }}*/
/*         {% endif %}*/
/*         */
/*         {% if page.preface_second %}*/
/*           {{ page.preface_second }}*/
/*         {% endif %}*/
/*         */
/*         {% if page.preface_third %}*/
/*           {{ page.preface_third }}*/
/*         {% endif %}*/
/*         */
/*         {% if page.preface_fourth %}*/
/*           {{ page.preface_fourth }}*/
/*         {% endif %}*/
/*         */
/*       </div><!-- /#preface-layout -->*/
/*     </section> <!-- /#preface-wrapper -->*/
/*     {% endif %}*/
/* */
/*     <section id="content-outer-wrapper" class="outer-wrapper clearfix">*/
/*       <div id="main-layout" class="{{ region_classes.main }} inner-wrapper clearfix">*/
/*         */
/*         {% if page.content %}*/
/*           {{ page.content }}*/
/*         {% endif %}  */
/*     */
/*         {% if page.sidebar_first %}*/
/*           {{ page.sidebar_first }}*/
/*         {% endif %}*/
/*     */
/*         {% if page.sidebar_second %}*/
/*           {{ page.sidebar_second }}*/
/*         {% endif %}*/
/*     */
/*       </div><!-- /#main -->*/
/*     </section><!-- /#main-outer-wrapper -->*/
/*   */
/*     {% if page.postscript_first or page.postscript_second or page.postscript_third or page.postscript_fourth %}*/
/*     <section id="postscript-outer-wrapper" class="outer-wrapper clearfix">*/
/*       <div id="postscript-layout" class="{{ region_classes.postscript }} inner-wrapper clearfix">*/
/*         */
/*         {% if page.postscript_first %}*/
/*           {{ page.postscript_first }}*/
/*         {% endif %}*/
/*         */
/*         {% if page.postscript_second %}*/
/*           {{ page.postscript_second }}*/
/*         {% endif %}*/
/*         */
/*         {% if page.postscript_third %}*/
/*           {{ page.postscript_third }}*/
/*         {% endif %}*/
/*         */
/*         {% if page.postscript_fourth %}*/
/*           {{ page.postscript_fourth }}*/
/*         {% endif %}*/
/*         */
/*       </div><!-- /#postscript-layout -->*/
/*     </section> <!-- /#postscript-outer-wrapper -->*/
/*     {% endif %}*/
/*     */
/*     {% if page.footer %}*/
/*     <footer id="footer-outer-wrapper" class="outer-wrapper clearfix">*/
/*       <div id="footer-layout" role="contentinfo" class="{{ region_classes.footer }} inner-wrapper clearfix">*/
/*         {{ page.footer }}*/
/*       </div> <!-- /#footer -->*/
/*     </footer> <!-- /#footer-outer-wrapper -->*/
/*     {% endif %}*/
/* </div>*/
/* </div> <!-- /#page, /#page-wrapper -->*/
/* */
