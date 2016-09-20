<?php

/* modules/as-drupal-devtest-module-2/templates/show-list.html.twig */
class __TwigTemplate_86f4c38f86a16df99447cba8f25c3ed4f5626b5856a1a5022d4d2358111afd02 extends Twig_Template
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
        $tags = array("for" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 2
            echo "    <div class=\"col-md-4\">

        <h3>
            <a href=\"/drupal-max/videos/squidbillies/";
            // line 5
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["video"], "_id", array()), "html", null, true));
            echo "\">
                ";
            // line 6
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["video"], "name", array()), "html", null, true));
            echo "
            </a>
        </h3>

        <div class=\"embed-responsive embed-responsive-16by9\">
            <iframe class=\"embed-responsive-item\" src=\"http://youtube.com/embed/";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["video"], "file", array()), "html", null, true));
            echo "\" frameborder=\"0\"></iframe>
        </div>

    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/as-drupal-devtest-module-2/templates/show-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  56 => 6,  52 => 5,  47 => 2,  43 => 1,);
    }
}
/* {% for video in videos %}*/
/*     <div class="col-md-4">*/
/* */
/*         <h3>*/
/*             <a href="/drupal-max/videos/squidbillies/{{ video._id }}">*/
/*                 {{ video.name }}*/
/*             </a>*/
/*         </h3>*/
/* */
/*         <div class="embed-responsive embed-responsive-16by9">*/
/*             <iframe class="embed-responsive-item" src="http://youtube.com/embed/{{ video.file }}" frameborder="0"></iframe>*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endfor %}*/
/* */
