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
class __TwigTemplate_2a890dbdbd66f0cac3fedcb10e712e871fd54693c724cbf8db67d392cc0dfd78 extends Template
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
        // line 1
        echo "
<div class=\"category-menu-title\">
\t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"color: fff;\" width=\"24\" height=\"24\" fill=\"currentColor\" class=\"bi bi-list\" viewBox=\"0 0 16 16\">
  <path fill-rule=\"evenodd\" d=\"M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z\"/>
</svg>
\t";
        // line 6
        echo ($context["text_category"] ?? null);
        echo "</div>
<ul class=\"category-menu-nav\">
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 9)) {
                // line 10
                echo "\t\t\t<div class=\"category-item\" style=\"position: relative\">
\t\t\t\t<div class=\"category-item__inner\">
\t\t\t\t\t<a class=\"category-link active\" href=\"";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 12);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 12);
                echo "</a>
\t\t\t\t\t<div class=\"category-popup-sub-menu category-popup-sub-menu_main\">
\t\t\t\t\t\t<div class=\"category-popup-sub-menu__inner\">
\t\t\t\t\t\t\t<div class=\"category-popup-sub-menu__item\">
\t\t\t\t\t\t\t\t<div class=\"category-popup-sub-menu__link-wrapper\">
\t\t\t\t\t\t\t\t\t";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 18
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"subcategory-link\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 18);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 18);
                    echo "</a><br>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            } else {
                // line 27
                echo "\t\t\t<a class=\"category-link active\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 27);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27);
                echo "</a>
\t\t";
            }
            // line 29
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
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
        return array (  108 => 30,  102 => 29,  94 => 27,  85 => 20,  74 => 18,  70 => 17,  60 => 12,  56 => 10,  53 => 9,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kg/template/common/menu.twig", "");
    }
}
