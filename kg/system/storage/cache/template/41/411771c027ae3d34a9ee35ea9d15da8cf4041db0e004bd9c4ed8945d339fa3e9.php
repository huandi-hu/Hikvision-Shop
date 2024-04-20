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

/* kg/template/extension/module/featured.twig */
class __TwigTemplate_0cbd90a006a1ca738e65aafab35e2c9258a73059ae1b85f4fc2f0561fde6ded2 extends Template
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
        echo "<h3>";
        echo ($context["heading_title"] ?? null);
        echo "</h3>
<div class=\"row\">
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "\t\t<div style=\"padding-left: 25px; padding-bottom: 25px;\" class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<a href=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 7);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 7);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
            echo "\" class=\"img-responsive\"/></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"caption\">
\t\t\t\t\t<h4>
\t\t\t\t\t\t<a href=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
            echo "</a>
\t\t\t\t\t</h4>
\t\t\t\t\t<p>";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 13);
            echo "</p>
\t\t\t\t\t";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 14)) {
                // line 15
                echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 17
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 17) < $context["i"])) {
                        // line 18
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 22
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 27
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30)) {
                // line 31
                echo "\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t";
                // line 32
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 33);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 35);
                    echo "</span>
\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                    // line 36
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 36);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 40
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 40);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t</div>
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t<button type=\"button\" class=\"add-111\" onclick=\"cart.add('";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 46);
            echo "');\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13.5\" height=\"12\" fill=\"currentColor\" class=\"bi bi-cart-fill\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t<path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<!--купить-->
\t\t\t\t\t</button>
\t\t\t\t\t<button type=\"button\" class=\"add-111\" data-toggle=\"tooltip\" title=\"";
            // line 52
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 52);
            echo "');\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" fill=\"currentColor\" class=\"bi bi-heart-fill\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t\t<button type=\"button\" class=\"add-111\" data-toggle=\"tooltip\" title=\"";
            // line 57
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 57);
            echo "');\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-left-right\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "kg/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 66,  175 => 57,  165 => 52,  156 => 46,  152 => 44,  148 => 42,  143 => 40,  138 => 39,  135 => 38,  130 => 36,  125 => 35,  119 => 33,  117 => 32,  114 => 31,  111 => 30,  107 => 28,  101 => 27,  94 => 22,  88 => 18,  85 => 17,  81 => 16,  78 => 15,  76 => 14,  72 => 13,  65 => 11,  52 => 7,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kg/template/extension/module/featured.twig", "");
    }
}
