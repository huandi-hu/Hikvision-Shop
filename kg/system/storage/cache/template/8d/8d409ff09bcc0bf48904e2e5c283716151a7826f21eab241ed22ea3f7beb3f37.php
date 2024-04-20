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

/* kg/template/common/cart.twig */
class __TwigTemplate_38faf9963a3304b87352dc43213d6e0499b8c04c6fc842ae9e7b032f9a406b9f extends Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
\t<button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 2
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle\">
\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cart-fill\" viewbox=\"0 0 16 16\">
\t\t\t<path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"></path>
\t\t</svg>
\t\t<span id=\"cart-total\" style=\"left: -72%;\">";
        // line 6
        echo ($context["text_items"] ?? null);
        echo "</span>
\t</button>
\t<ul class=\"dropdown-menu pull-right\">
\t\t";
        // line 9
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 10
            echo "\t\t\t<li>
\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 13
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 16);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                    echo "\" class=\"img-thumbnail\"/></a>
\t\t\t\t\t\t\t\t";
                }
                // line 18
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 20);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                echo "</a>
\t\t\t\t\t\t\t\t";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 22));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 23
                        echo "\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t<small>";
                        // line 25
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 25);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 26
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 26);
                        echo "</small>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t<small>";
                    // line 32
                    echo ($context["text_recurring"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 33);
                    echo "</small>
\t\t\t\t\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-right\">x
\t\t\t\t\t\t\t\t";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-right\">";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 38);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"cart.remove('";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 40);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-x-circle-fill\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 49
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 51);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-right\">x&nbsp;1</td>
\t\t\t\t\t\t\t<td class=\"text-right\">";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 53);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-center text-danger\">
\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"voucher.remove('";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 55);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash-fill\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t\t\t\t</table>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<div>
\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 69
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t<strong>";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 71);
                echo "</strong>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 73);
                echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t\t\t\t\t</table>
\t\t\t\t\t<p class=\"text-right\">
\t\t\t\t\t\t<a href=\"";
            // line 78
            echo ($context["cart"] ?? null);
            echo "\">
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cart-fill\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t<path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t";
            // line 83
            echo ($context["text_cart"] ?? null);
            echo "</strong>
\t\t\t\t\t\t</a>&nbsp;&nbsp;&nbsp;<a href=\"";
            // line 84
            echo ($context["checkout"] ?? null);
            echo "\">
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-90deg-right\" viewBox=\"0 0 16 16\">
  <path fill-rule=\"evenodd\" d=\"M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z\"/>
</svg> 
\t\t\t\t\t\t\t\t";
            // line 89
            echo ($context["text_checkout"] ?? null);
            echo "</strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</li>
\t\t";
        } else {
            // line 95
            echo "\t\t\t<li>
\t\t\t\t<p class=\"text-center\">";
            // line 96
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t</li>
\t\t";
        }
        // line 99
        echo "\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "kg/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 99,  262 => 96,  259 => 95,  250 => 89,  242 => 84,  238 => 83,  230 => 78,  226 => 76,  217 => 73,  212 => 71,  208 => 69,  204 => 68,  197 => 63,  181 => 55,  176 => 53,  171 => 51,  167 => 49,  162 => 48,  146 => 40,  141 => 38,  137 => 37,  133 => 35,  128 => 33,  124 => 32,  120 => 30,  117 => 29,  114 => 28,  106 => 26,  102 => 25,  98 => 23,  93 => 22,  91 => 21,  85 => 20,  81 => 18,  69 => 16,  67 => 15,  63 => 13,  59 => 12,  55 => 10,  53 => 9,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kg/template/common/cart.twig", "");
    }
}
