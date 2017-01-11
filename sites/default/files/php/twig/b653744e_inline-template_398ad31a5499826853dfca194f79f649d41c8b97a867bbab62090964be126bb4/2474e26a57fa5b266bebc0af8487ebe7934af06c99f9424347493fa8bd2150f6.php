<?php

/* {# inline_template_start #}<div class="img-holder">
	<div class="img-over">
	      <a href="#" class="link shape"><i class="fa fa-link"></i></a>
	     <a href="assets/images/portfolio/large/1.jpg" class="zoom shape" title="Quality Products for Companies"><i class="fa fa-search-plus"></i></a>
					</div>
					{{ field_project_header }}
				</div> */
class __TwigTemplate_225919f431ad1acf10c499e2321142f362343f3d6705ae7c012712f8682aaece extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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
        echo "<div class=\"img-holder\">
\t<div class=\"img-over\">
\t      <a href=\"#\" class=\"link shape\"><i class=\"fa fa-link\"></i></a>
\t     <a href=\"assets/images/portfolio/large/1.jpg\" class=\"zoom shape\" title=\"Quality Products for Companies\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_project_header"]) ? $context["field_project_header"] : null), "html", null, true));
        echo "
\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"img-holder\">
\t<div class=\"img-over\">
\t      <a href=\"#\" class=\"link shape\"><i class=\"fa fa-link\"></i></a>
\t     <a href=\"assets/images/portfolio/large/1.jpg\" class=\"zoom shape\" title=\"Quality Products for Companies\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t{{ field_project_header }}
\t\t\t\t</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  49 => 1,);
    }
}
/* {# inline_template_start #}<div class="img-holder">*/
/* 	<div class="img-over">*/
/* 	      <a href="#" class="link shape"><i class="fa fa-link"></i></a>*/
/* 	     <a href="assets/images/portfolio/large/1.jpg" class="zoom shape" title="Quality Products for Companies"><i class="fa fa-search-plus"></i></a>*/
/* 					</div>*/
/* 					{{ field_project_header }}*/
/* 				</div>*/
