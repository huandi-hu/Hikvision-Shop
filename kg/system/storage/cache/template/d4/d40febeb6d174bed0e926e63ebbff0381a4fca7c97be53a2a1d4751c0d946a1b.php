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
class __TwigTemplate_88781dfac30b2479f9add4ce489d0735d5bcfd22b407e6276597085b03f3cd66 extends Template
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
        // line 7
        echo "<h1>hello
</h1>";
    }

    public function getTemplateName()
    {
        return "kg/template/common/home.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "kg/template/common/home.twig", "");
    }
}
