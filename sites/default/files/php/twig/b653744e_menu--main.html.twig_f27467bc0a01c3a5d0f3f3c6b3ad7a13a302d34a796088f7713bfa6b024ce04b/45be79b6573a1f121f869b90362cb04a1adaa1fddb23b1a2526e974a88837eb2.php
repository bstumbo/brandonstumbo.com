<?php

/* themes/btheme/templates/menu--main.html.twig */
class __TwigTemplate_e2de1892b22f43546abc958f34b9c749fa346f792ebb10c55f2fc59bcd709243 extends Twig_Template
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
        $tags = array("import" => 23, "macro" => 31, "set" => 34, "if" => 38, "for" => 44);
        $filters = array("clean_class" => 35);
        $functions = array("link" => 58);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'set', 'if', 'for'),
                array('clean_class'),
                array('link')
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

        // line 23
        $context["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0, (isset($context["menu_name"]) ? $context["menu_name"] : null))));
        echo "

";
    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 32
            echo "  ";
            $context["menus"] = $this;
            // line 33
            echo "   ";
            // line 34
            $context["menu_classes"] = array(0 => ("c-menu-" . \Drupal\Component\Utility\Html::getClass(            // line 35
(isset($context["menu_name"]) ? $context["menu_name"] : null))));
            // line 38
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 39
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 40
                    echo "      <ul";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 42
                    echo "      <ul>
    ";
                }
                // line 44
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 45
                    echo "      ";
                    // line 46
                    $context["item_classes"] = array(0 => (($this->getAttribute(                    // line 47
$context["item"], "is_expanded", array())) ? ("hasChildren") : ("")), 1 => (($this->getAttribute(                    // line 48
$context["item"], "is_collapsed", array())) ? ("hasChildren") : ("")));
                    // line 51
                    echo "      ";
                    // line 52
                    $context["submenu_classes"] = array(0 => "mega-menu", 1 => (($this->getAttribute(                    // line 54
$context["item"], "in_active_trail", array())) ? ("selected") : ("")));
                    // line 57
                    echo "      <li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
                    echo ">
        ";
                    // line 58
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
        ";
                    // line 59
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 60
                        echo "          ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1), (isset($context["menu_name"]) ? $context["menu_name"] : null))));
                        echo "
        ";
                    }
                    // line 62
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/btheme/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 64,  127 => 62,  121 => 60,  119 => 59,  115 => 58,  110 => 57,  108 => 54,  107 => 52,  105 => 51,  103 => 48,  102 => 47,  101 => 46,  99 => 45,  94 => 44,  90 => 42,  84 => 40,  81 => 39,  78 => 38,  76 => 35,  75 => 34,  73 => 33,  70 => 32,  55 => 31,  48 => 29,  45 => 24,  43 => 23,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a menu.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  *   - is_expanded: TRUE if the link has visible children within the current*/
/*  *     menu tree.*/
/*  *   - is_collapsed: TRUE if the link has children within the current menu tree*/
/*  *     that are not currently visible.*/
/*  *   - in_active_trail: TRUE if the link is in the active trail.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% import _self as menus %}*/
/* */
/* {#*/
/*   We call a macro which calls itself to render the full tree.*/
/*   @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/* #}*/
/* {{ menus.menu_links(items, attributes, 0, menu_name) }}*/
/* */
/* {% macro menu_links(items, attributes, menu_level, menu_name) %}*/
/*   {% import _self as menus %}*/
/*    {%*/
/*     set menu_classes = [*/
/*       'c-menu-' ~ menu_name|clean_class,*/
/*     ]*/
/*   %}*/
/*   {% if items %}*/
/*     {% if menu_level == 0 %}*/
/*       <ul{{ attributes }}>*/
/*     {% else %}*/
/*       <ul>*/
/*     {% endif %}*/
/*     {% for item in items %}*/
/*       {%*/
/*         set item_classes = [*/
/*           item.is_expanded ? 'hasChildren',*/
/*           item.is_collapsed ? 'hasChildren',*/
/*         ]*/
/*       %}*/
/*       {%*/
/*     set submenu_classes = [*/
/*       'mega-menu',*/
/*       item.in_active_trail ? 'selected',*/
/*     ]*/
/*     %}*/
/*       <li{{ item.attributes.addClass(item_classes) }}>*/
/*         {{ link(item.title, item.url) }}*/
/*         {% if item.below %}*/
/*           {{ menus.menu_links(item.below, attributes, menu_level + 1, menu_name) }}*/
/*         {% endif %}*/
/*       </li>*/
/*     {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endmacro %}*/
/* */
