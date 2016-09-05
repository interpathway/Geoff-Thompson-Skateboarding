<?php

/* modules/video/templates/video-player-formatter.html.twig */
class __TwigTemplate_d5f209406f83f031e46ff87b511c19f209492521bf20462c3f30746e0459d6be extends Twig_Template
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
        $tags = array("for" => 16);
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

        // line 16
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 17
            echo "<video preload=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["player_attributes"]) ? $context["player_attributes"] : null), "preload", array()), "html", null, true));
            echo "\" ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["player_attributes"]) ? $context["player_attributes"] : null), "controls", array())) ? ("controls") : (""))));
            echo " style=\"width:100%;height:100%;\" ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["player_attributes"]) ? $context["player_attributes"] : null), "autoplay", array())) ? ("autoplay") : (""))));
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["player_attributes"]) ? $context["player_attributes"] : null), "loop", array())) ? ("loop") : (""))));
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["player_attributes"]) ? $context["player_attributes"] : null), "muted", array())) ? ("muted") : (""))));
            echo ">
    <source src=\"";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["user"], "html", null, true));
            echo "\"/>
</video>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/video/templates/video-player-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  48 => 17,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a formatted video field.*/
/*  **/
/*  * Available variables:*/
/*  * - items: A collection of videos.*/
/*  * - player_attributes: Player options including the following:*/
/*  *   - width: The width of the video (if known).*/
/*  *   - height: The height of the video (if known).*/
/*  *   - autoplay: Autoplay on or off*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/*   {% for user in items %}*/
/* <video preload="{{ player_attributes.preload }}" {{ player_attributes.controls ? 'controls' : '' }} style="width:100%;height:100%;" {{ player_attributes.autoplay ? 'autoplay' : '' }} {{ player_attributes.loop ? 'loop' : '' }} {{ player_attributes.muted ? 'muted' : '' }}>*/
/*     <source src="{{ user }}"/>*/
/* </video>*/
/*   {% endfor %}*/
