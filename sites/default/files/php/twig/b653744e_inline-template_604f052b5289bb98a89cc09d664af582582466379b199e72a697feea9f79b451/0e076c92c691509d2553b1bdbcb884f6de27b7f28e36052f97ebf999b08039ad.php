<?php

/* {# inline_template_start #}<div class="img-holder">
	<div class="img-over">
	      <a href="{{ path }}" class="link shape"><i class="fa fa-link"></i></a>
					</div>
					{{ field_project_header }}
				</div> */
class __TwigTemplate_17466a70535708a231dbef5426901a85c038f5dff48e0c207846c09ac7c74a05 extends Twig_Template
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
\t      <a href=\"";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true));
        echo "\" class=\"link shape\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_project_header"]) ? $context["field_project_header"] : null), "html", null, true));
        echo "
\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"img-holder\">
\t<div class=\"img-over\">
\t      <a href=\"{{ path }}\" class=\"link shape\"><i class=\"fa fa-link\"></i></a>
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
        return array (  57 => 5,  52 => 3,  48 => 1,);
    }
}
/* {# inline_template_start #}<div class="img-holder">*/
/* 	<div class="img-over">*/
/* 	      <a href="{{ path }}" class="link shape"><i class="fa fa-link"></i></a>*/
/* 					</div>*/
/* 					{{ field_project_header }}*/
/* 				</div>*/
