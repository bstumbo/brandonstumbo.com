<?php

/* modules/panels/layouts/twocol_stacked/panels-twocol-stacked.html.twig */
class __TwigTemplate_cff9f481076148d134a2277518de7bc35b6d423418db3a15ae3179e70155f40e extends Twig_Template
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
        $tags = array("if" => 20);
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

        // line 20
        echo "<div class=\"panel-2col-stacked\" ";
        if ((isset($context["css_id"]) ? $context["css_id"] : null)) {
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["css_id"]) ? $context["css_id"] : null), "html", null, true));
        }
        echo ">
  <div class=\"panel-panel panel-full-width\">
    ";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "top", array()), "html", null, true));
        echo "
  </div>

  <div class=\"panel-panel\">
    ";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "left", array()), "html", null, true));
        echo "
  </div>

  <div class=\"panel-panel\">
    ";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "right", array()), "html", null, true));
        echo "
  </div>

  <div class=\"panel-panel panel-full-width\">
    ";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "bottom", array()), "html", null, true));
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/panels/layouts/twocol_stacked/panels-twocol-stacked.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 34,  65 => 30,  58 => 26,  51 => 22,  43 => 20,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Template for a 2 column panel layout.*/
/*  **/
/*  * This template provides a two column panel display layout, with*/
/*  * additional areas for the top and the bottom.*/
/*  **/
/*  * Variables:*/
/*  * - $id: An optional CSS id to use for the layout.*/
/*  * - $content: An array of content, each item in the array is keyed to one*/
/*  *   panel of the layout. This layout supports the following sections:*/
/*  *   - content.top: Content in the top row.*/
/*  *   - content.left: Content in the left column.*/
/*  *   - content.middle: Content in the middle column.*/
/*  *   - content.right: Content in the right column.*/
/*  *   - content.bottom: Content in the bottom row.*/
/*  *//* */
/* #}*/
/* <div class="panel-2col-stacked" {% if css_id %}{{ css_id }}{% endif %}>*/
/*   <div class="panel-panel panel-full-width">*/
/*     {{ content.top }}*/
/*   </div>*/
/* */
/*   <div class="panel-panel">*/
/*     {{ content.left }}*/
/*   </div>*/
/* */
/*   <div class="panel-panel">*/
/*     {{ content.right }}*/
/*   </div>*/
/* */
/*   <div class="panel-panel panel-full-width">*/
/*     {{ content.bottom }}*/
/*   </div>*/
/* </div>*/
/* */
