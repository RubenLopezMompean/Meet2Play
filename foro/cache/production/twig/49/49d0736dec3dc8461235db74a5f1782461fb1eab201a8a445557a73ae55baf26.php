<?php

/* profilefields/url.html */
class __TwigTemplate_f12192a6d7e87628be25031cd6e529b423aa8dad23f3fd2538de20a3f75242b6 extends Twig_Template
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
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "url", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 2
            echo "<input type=\"url\" class=\"inputbox autowidth\" name=\"";
            echo $this->getAttribute($context["url"], "FIELD_IDENT", array());
            echo "\" id=\"";
            echo $this->getAttribute($context["url"], "FIELD_IDENT", array());
            echo "\" size=\"";
            echo $this->getAttribute($context["url"], "FIELD_LENGTH", array());
            echo "\" maxlength=\"";
            echo $this->getAttribute($context["url"], "FIELD_MAXLEN", array());
            echo "\" value=\"";
            echo $this->getAttribute($context["url"], "FIELD_VALUE", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "profilefields/url.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }
}
/* <!-- BEGIN url -->*/
/* <input type="url" class="inputbox autowidth" name="{url.FIELD_IDENT}" id="{url.FIELD_IDENT}" size="{url.FIELD_LENGTH}" maxlength="{url.FIELD_MAXLEN}" value="{url.FIELD_VALUE}" />*/
/* <!-- END url -->*/
/* */
