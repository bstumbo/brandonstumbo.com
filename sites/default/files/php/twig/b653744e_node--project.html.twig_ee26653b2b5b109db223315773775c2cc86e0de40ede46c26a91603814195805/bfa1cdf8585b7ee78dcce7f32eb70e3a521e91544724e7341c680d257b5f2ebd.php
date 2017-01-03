<?php

/* themes/btheme/templates/node--project.html.twig */
class __TwigTemplate_d63809065f4d78a7a776e55d801df74b69d2b71dc0def1bf79ffc4c08f882379 extends Twig_Template
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
        $functions = array("attach_library" => 1, "file_url" => 7);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array('attach_library', 'file_url')
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("btheme/project"), "html", null, true));
        echo "
<article";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
<div ";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
        echo ">  
\t\t    <div id=\"contentWrapper\">
\t\t    \t<div class=\"pageContent\">
\t\t    \t
\t\t\t\t\t<div class=\"section parallax portfolio single-pro-img\" style=\"background-image: url('";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_project_header", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
        echo "');\" data-stellar-background-ratio=\"0.65\" data-overlay=\"rgba(0,0,0,.7)\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"t-center margin-top-100\">
\t\t\t\t\t\t\t\t\t<h1 class=\"bolder uppercase font-40 white\">";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
        echo "</h1>
\t\t\t\t\t\t\t\t\t<p class=\"white font-15\">";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "body", array()), "summary", array()), "html", null, true));
        echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"heading\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"uppercase head-6\"><i class=\"fa fa-info-circle\"></i><span class=\"main-color\">Project </span>Info</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-tag\"></i> <span class=\"bold main-color\">Category:</span> <a href=\"#\">Computers</a>, <a href=\"#\">Just food</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i> <span class=\"bold main-color\">Date Added:</span> Jan 15, 2014
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-check\"></i> <span class=\"bold main-color\">Customer:</span> ThemeForest.</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"heading\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"uppercase head-6\"><i class=\"fa fa-desktop\"></i><span class=\"main-color\">Case </span>Study</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t    </div>\t\t\t    
\t\t    </div>\t\t\t
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"registermodal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"registermodal\">
\t\t  <div class=\"modal-dialog\" role=\"document\">
\t\t    <div class=\"modal-content\">
\t\t      <div class=\"modal-header\">
\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t        <h4 class=\"modal-title\" id=\"gridSystemModalLabel\">Create New Account</h4>
\t\t      </div>
\t\t      <div class=\"modal-body\">
\t\t        <div class=\"padding-horizontal-20 padding-vertical-20\">
\t\t            \t<p>Hello our valued visitor, We present you the best web solutions and high quality graphic designs with a lot of features. just login to your account and enjoy ...</p>
\t\t\t\t\t\t<div class=\"login-controls\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"User name\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Email\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Confirm Email\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Password\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Confirm Password\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group floated-controls\">
\t\t\t\t\t\t\t\t<span class=\"block checkbox-block\"><input type=\"checkbox\" class=\"checkbox\" /> <span>I Agree !</span></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t        </div>
\t\t      </div>
\t\t      <div class=\"modal-footer\">
\t\t        <button type=\"button\" class=\"btn main-bg\">Submit</button>
\t\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
\t\t      </div>
\t\t    </div><!-- /.modal-content -->
\t\t  </div><!-- /.modal-dialog -->
\t\t</div><!-- /.modal -->
\t\t    \t
\t\t<!-- Back to top Link -->
\t    <a id=\"to-top\"><span class=\"fa fa-chevron-up shape main-bg\"></span></a>

  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/btheme/templates/node--project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 39,  69 => 12,  65 => 11,  58 => 7,  51 => 3,  47 => 2,  43 => 1,);
    }
}
/* {{ attach_library('btheme/project') }}*/
/* <article{{ attributes }}>*/
/* <div {{ content_attributes }}>  */
/* 		    <div id="contentWrapper">*/
/* 		    	<div class="pageContent">*/
/* 		    	*/
/* 					<div class="section parallax portfolio single-pro-img" style="background-image: url('{{ file_url(content.field_project_header['#items'].entity.uri.value) }}');" data-stellar-background-ratio="0.65" data-overlay="rgba(0,0,0,.7)">*/
/* 						<div class="container">*/
/* 							<div class="row">*/
/* 								<div class="t-center margin-top-100">*/
/* 									<h1 class="bolder uppercase font-40 white">{{ label }}</h1>*/
/* 									<p class="white font-15">{{ node.body.summary }}</p>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 									*/
/* 					<div class="section">*/
/* 						<div class="container">*/
/* 							<div class="row">*/
/* 								<div class="col-md-4">*/
/* 									<div class="heading">*/
/* 										<h3 class="uppercase head-6"><i class="fa fa-info-circle"></i><span class="main-color">Project </span>Info</h3>*/
/* 									</div>*/
/* 									<ul class="list">*/
/* 										<li>*/
/* 											<i class="fa fa-tag"></i> <span class="bold main-color">Category:</span> <a href="#">Computers</a>, <a href="#">Just food</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<i class="fa fa-calendar"></i> <span class="bold main-color">Date Added:</span> Jan 15, 2014*/
/* 										</li>*/
/* 										<li><i class="fa fa-check"></i> <span class="bold main-color">Customer:</span> ThemeForest.</li>*/
/* 									</ul>*/
/* 								</div>*/
/* 								<div class="col-md-8">*/
/* 									<div class="heading">*/
/* 										<h3 class="uppercase head-6"><i class="fa fa-desktop"></i><span class="main-color">Case </span>Study</h3>*/
/* 									</div>*/
/* 									{{ content.body }}*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 			    </div>			    */
/* 		    </div>			*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="registermodal">*/
/* 		  <div class="modal-dialog" role="document">*/
/* 		    <div class="modal-content">*/
/* 		      <div class="modal-header">*/
/* 		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 		        <h4 class="modal-title" id="gridSystemModalLabel">Create New Account</h4>*/
/* 		      </div>*/
/* 		      <div class="modal-body">*/
/* 		        <div class="padding-horizontal-20 padding-vertical-20">*/
/* 		            	<p>Hello our valued visitor, We present you the best web solutions and high quality graphic designs with a lot of features. just login to your account and enjoy ...</p>*/
/* 						<div class="login-controls">*/
/* 							<div class="form-group">*/
/* 								<input type="text" class="form-control" placeholder="User name" />*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<input type="text" class="form-control" placeholder="Email" />*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<input type="text" class="form-control" placeholder="Confirm Email" />*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<input type="text" class="form-control" placeholder="Password" />*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<input type="password" class="form-control" placeholder="Confirm Password" />*/
/* 							</div>*/
/* 							<div class="form-group floated-controls">*/
/* 								<span class="block checkbox-block"><input type="checkbox" class="checkbox" /> <span>I Agree !</span></span>*/
/* 							</div>*/
/* 						</div>*/
/* 		        </div>*/
/* 		      </div>*/
/* 		      <div class="modal-footer">*/
/* 		        <button type="button" class="btn main-bg">Submit</button>*/
/* 		        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>*/
/* 		      </div>*/
/* 		    </div><!-- /.modal-content -->*/
/* 		  </div><!-- /.modal-dialog -->*/
/* 		</div><!-- /.modal -->*/
/* 		    	*/
/* 		<!-- Back to top Link -->*/
/* 	    <a id="to-top"><span class="fa fa-chevron-up shape main-bg"></span></a>*/
/* */
/*   </div>*/
/* </article>*/
/* */
