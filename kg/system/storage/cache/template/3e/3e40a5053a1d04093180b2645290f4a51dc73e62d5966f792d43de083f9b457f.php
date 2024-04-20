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

/* kg/template/common/home.twig */
class __TwigTemplate_6d6e8eaad56c0550a469d4ac74644e77480edb7d14160fb858bc8367a0afd0f9 extends Template
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
        echo " ";
        echo ($context["header"] ?? null);
        echo "
\t\t<div class=\"container\">
\t\t\t<div class=\"row\"></div>
\t\t</div>
\t\t";
        // line 5
        echo ($context["footer"] ?? null);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "kg/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kg/template/common/home.twig", "");
    }
}
