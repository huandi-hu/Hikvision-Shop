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

/* kg/template/common/search.twig */
class __TwigTemplate_50bea80f3bcead5693d5e12eade102edebf7add817ab2b2e031bdb38f2b3a40b extends Template
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
        echo "<div id=\"search\" class=\"input-group\">
\t<input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control input-lg\"/>
\t<span class=\"input-group-btn\">
\t\t<button type=\"button\" class=\"btn btn-default btn-lg\">
\t\t\t<i class=\"fa fa-search\"></i>
\t\t</button>
\t</span>
</div>

<input type=\"text\" name=\"search\" value=\"";
        // line 10
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control search-line__input\">
<div class=\"input-group-append\">
\t<button class=\"btn btn-primary search-btn\" type=\"product/search\" aria-label=\"Найти на сайте\">
\t\t<i class=\"fa fa-search\"></i>
\t</button>
</div>
<div class=\"search-line__dropdown-content\"></div>
";
    }

    public function getTemplateName()
    {
        return "kg/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kg/template/common/search.twig", "");
    }
}
