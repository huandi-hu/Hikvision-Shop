<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* kg/template/common/menu.twig */
class __TwigTemplate_05ec86bc0ad404a5a75424ce51f710a3423bde84c01119801a9dc39208a7dee6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "

<div class=\"category-menu-title\">
\t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"color: fff;\" width=\"24\" height=\"24\" fill=\"currentColor\" class=\"bi bi-list\" viewBox=\"0 0 16 16\">
  <path fill-rule=\"evenodd\" d=\"M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z\"/>
</svg>
\t";
        // line 37
        echo ($context["text_category"] ?? null);
        echo "</div>
<ul class=\"category-menu-nav\">
\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 40
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 40)) {
                // line 41
                echo "\t\t\t<div class=\"category-item\" style=\"position: relative\">
\t\t\t\t<div class=\"category-item__inner\">
\t\t\t\t\t<a class=\"category-link active\" href=\"";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 43);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 43);
                echo "</a>
\t\t\t\t\t<div class=\"category-popup-sub-menu category-popup-sub-menu_main\">
\t\t\t\t\t\t<div class=\"category-popup-sub-menu__inner\">
\t\t\t\t\t\t\t<div class=\"category-popup-sub-menu__item\">
\t\t\t\t\t\t\t\t<div class=\"category-popup-sub-menu__link-wrapper\">
\t\t\t\t\t\t\t\t\t";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 48));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"subcategory-link\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 49);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 49);
                    echo "</a><br>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            } else {
                // line 58
                echo "\t\t\t<a class=\"category-link active\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 58);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 58);
                echo "</a>
\t\t";
            }
            // line 60
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "kg/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 61,  103 => 60,  95 => 58,  86 => 51,  75 => 49,  71 => 48,  61 => 43,  57 => 41,  54 => 40,  50 => 39,  45 => 37,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "kg/template/common/menu.twig", "");
    }
}
