<?php

/* {# inline_template_start #}<div class="name-holder">
	<h4><a href="portfolio-single.html" class="main-color">{{ title__value }}</a></h4>
         <h5><a href="#">Design</a>, <a href="#">Development</a></h5>
</div> */
class __TwigTemplate_b40da57f88b50dae8d342f3a65d035db2dfb0d7e199ed5408939d71978c6a994 extends Twig_Template
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
        echo "<div class=\"name-holder\">
\t<h4><a href=\"portfolio-single.html\" class=\"main-color\">";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title__value"]) ? $context["title__value"] : null), "html", null, true));
        echo "</a></h4>
         <h5><a href=\"#\">Design</a>, <a href=\"#\">Development</a></h5>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"name-holder\">
\t<h4><a href=\"portfolio-single.html\" class=\"main-color\">{{ title__value }}</a></h4>
         <h5><a href=\"#\">Design</a>, <a href=\"#\">Development</a></h5>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 2,  46 => 1,);
    }
}
/* {# inline_template_start #}<div class="name-holder">*/
/* 	<h4><a href="portfolio-single.html" class="main-color">{{ title__value }}</a></h4>*/
/*          <h5><a href="#">Design</a>, <a href="#">Development</a></h5>*/
/* </div>*/
