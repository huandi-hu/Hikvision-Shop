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

/* kg/template/common/header.twig */
class __TwigTemplate_51b9843ef3563882badf4611c63b23aa6121b9b5b5530fdcb17a6217883d008d extends Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>";
        // line 7
        echo ($context["title"] ?? null);
        echo "</title>
\t\t<base href=\"";
        // line 8
        echo ($context["base"] ?? null);
        echo "\"/>
\t\t";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            echo "\t\t\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 12
        echo "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 13
            echo "\t\t\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 15
        echo "\t\t <script src=\"catalog/view/javascript/jquery/jquery-3.7.0.min.js\" type=\"text/javascript\"></script>

\t\t";
        // line 19
        echo "

\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t";
        // line 23
        echo "\t\t<link href=\"./catalog/view/theme/kg/assets/css/variables.css?v=1699282119\" rel=\"stylesheet\">
\t\t";
        // line 25
        echo "\t\t<link rel=\"stylesheet\" href=\"catalog/view/theme/kg/assets/resources/style_2.css\">
\t\t<link href=\"./catalog/view/theme/kg/assets/resources/style_3.css\" rel=\"stylesheet\">
\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 28
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 28);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 28);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 28);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 31
            echo "\t\t\t <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 35
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 35);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 35);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 38
            echo "\t\t\t";
            echo $context["analytic"];
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t</head>
</html>
<style>
/* .btn:not(:disabled):not(.disabled) {
    cursor: pointer;
    color: white;
    background-color: #162538;
} */
\t@media screen and(min-width: 769px) {
\t\t.mobile {
\t\t\tdisplay: none !important;
\t\t}
\t}

\t@media screen and(max-width:768px) {
\t\t.desktop {
\t\t\tdisplay: none !important
\t\t}

\t\t.btn-m-show-catalog {
\t\t\tmargin: 15px auto 10px;
\t\t\tmax-width: 280px;
\t\t\twidth: 100%
\t\t}

\t\t@media screen and(max-width:375px) {
\t\t\t.btn-m-show-catalog {
\t\t\t\tmax-width: 100%
\t\t\t}
\t\t}

\t\t.page-title,
\t\t.category-title {
\t\t\tcolor: #232323;
\t\t\tfont-size: 16px;
\t\t\tfont-weight: 700;
\t\t\tmargin-bottom: 16px
\t\t}

\t\tbody,
\t\thtml {
\t\t\tmin-width: 100%
\t\t}

\t\t.page-header .wrapper {
\t\t\tpadding: 0;
\t\t\tmax-width: 100%
\t\t}

\t\t.main {
\t\t\tmargin-left: 0;
\t\t\tpadding-left: 30px;
\t\t\tpadding-right: 30px
\t\t}

\t\t.container {
\t\t\twidth: 100%;
\t\t\tmax-width: 100%;
\t\t\tpadding-left: 20px;
\t\t\tpadding-right: 20px
\t\t}

\t\t.affix {
\t\t\tfont-size: 12px;
\t\t\theight: 16px;
\t\t\tright: -57px;
\t\t\tpadding: 0 10px 1px;
\t\t\tline-height: 12px;
\t\t\twidth: 130px
\t\t}

\t\t.wysiwyg {
\t\t\tmax-width: 100%
\t\t}

\t\t.m-navbar {
\t\t\twidth: 100%;
\t\t\tdisplay: flex;
\t\t\tpadding: 0 20px 0 0
\t\t}

\t\t.m-navbar__item {
\t\t\theight: 60px;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tpadding: 13px 0 13px 20px
\t\t}

\t\t.m-navbar__logo {
\t\t\tflex-grow: 10
\t\t}

\t\t.m-logo {
\t\t\twidth: 170px
\t\t}

\t\t.m-logo__image {
\t\t\tmax-height: 34px
\t\t}

\t\t.m-navbar__menu {
\t\t\tflex-grow: 1
\t\t}

\t\t.navbar-light .m-navbar-toggler-menu {
\t\t\tborder: 0;
\t\t\tpadding: 0;
\t\t\tfont-size: 0;
\t\t\tdisplay: block;
\t\t\tbackground-color: #fff
\t\t}

\t\t.navbar-light .m-navbar-toggler-menu-icon {
\t\t\twidth: 25px;
\t\t\theight: 20px;
\t\t\tbackground-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAUBAMAAACKWYuOAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAPUExURUdwTCElKSElKSElKSElKeGn4HUAAAAEdFJOUwDmSkkbapQzAAAAIElEQVQY02MwdIEDRwMGEQTPRQCNp4ikUoGBXDBE7AMArgIlvUql5skAAAAASUVORK5CYII=\")
\t\t}

\t\t.m-collapse {
\t\t\twidth: 100%;
\t\t\theight: calc(100% - 60px);
\t\t\tleft: 0;
\t\t\tz-index: 10;
\t\t\ttop: 60px;
\t\t\tposition: absolute
\t\t}

\t\t.m-collapse__backdrop {
\t\t\tbackground-color: rgba(0, 0, 0, 0.3);
\t\t\theight: 100%;
\t\t\ttop: 0;
\t\t\tposition: absolute;
\t\t\twidth: 100%;
\t\t\tz-index: -1
\t\t}

\t\t.m-collapse__menu {
\t\t\tpadding: 20px;
\t\t\tbackground-color: #f2f2f2
\t\t}

\t\t.m-collapse__contacts {
\t\t\tpadding: 20px;
\t\t\tbackground-color: #fff
\t\t}

\t\t.m-collapse__catalog {
\t\t\tpadding: 0 20px 20px;
\t\t\tbackground-color: #fff
\t\t}

\t\t.m-collapse__contacts .m-site-info .site-info-block .site-info-description {
\t\t\tmargin-bottom: 0
\t\t}

\t\t.m-menu-collapse__btn-show-catalog {
\t\t\tmax-width: 280px;
\t\t\twidth: 100%;
\t\t\tfont-size: 14px;
\t\t\ttext-align: left;
\t\t\theight: 40px;
\t\t\tline-height: 20px;
\t\t\tpadding: 10px
\t\t}

\t\t.m-menu-collapse__btn-show-catalog-image {
\t\t\tmargin-right: 12px
\t\t}

\t\t.m-nav {
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t\twidth: 100%;
\t\t\tdisplay: flex;
\t\t\tjustify-content: space-between
\t\t}

\t\t.m-nav_vertical {
\t\t\tmargin: 30px 0 5px;
\t\t\tflex-direction: column
\t\t}

\t\t.m-nav__item {
\t\t\theight: 34px;
\t\t\tlist-style: none;
\t\t\tmargin-right: 10px
\t\t}

\t\t.m-nav__item_vertical {
\t\t\theight: 22px;
\t\t\tmargin-right: 0;
\t\t\tmargin-bottom: 20px
\t\t}

\t\t.m-nav__item:last-child {
\t\t\tmargin-right: 0;
\t\t\tmargin-bottom: 0
\t\t}

\t\t.m-nav__link {
\t\t\tcolor: #000;
\t\t\tfont-size: 12px
\t\t}

\t\t.m-nav__link_vertical {
\t\t\tfont-size: 15px;
\t\t\tdisplay: block;
\t\t\tfont-weight: 500
\t\t}

\t\t.m-nav__link:active,
\t\t.m-nav__link:hover {
\t\t\tcolor: #000;
\t\t\ttext-decoration: none
\t\t}

\t\t.m-nav__link-image-wrapper {
\t\t\theight: 20px;
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t\tmargin-bottom: -4px
\t\t}

\t\t.m-nav__link-text_vertical {
\t\t\tvertical-align: middle
\t\t}

\t\t.m-nav__link-image {
\t\t\tmax-width: 20px;
\t\t\tmax-height: 20px
\t\t}

\t\t.m-nav__link-icon {
\t\t\twidth: 20px;
\t\t\theight: 20px;
\t\t\tfont-size: 20px;
\t\t\tdisplay: block;
\t\t\tmargin: 0 auto -4px;
\t\t\ttext-align: center;
\t\t\tcolor: var(--primary-color)
\t\t}

\t\t.m-nav__link-icon2 {
\t\t\tmin-width: 20px;
\t\t\tmax-width: 20px;
\t\t\tmax-height: 20px;
\t\t\tdisplay: block;
\t\t\tmargin: 0 auto -4px
\t\t}

\t\t.m-nav__link-icon-container {
\t\t\twidth: 26px;
\t\t\tdisplay: inline-block;
\t\t\ttext-align: center;
\t\t\tmargin-right: 5px
\t\t}

\t\t.m-nav__link-icon_vertical {
\t\t\twidth: 22px;
\t\t\theight: 22px;
\t\t\tfont-size: 22px;
\t\t\tdisplay: inline-block;
\t\t\tvertical-align: top
\t\t}

\t\t.m-nav__item-counter {
\t\t\tbackground-color: #212529;
\t\t\tcolor: #f0f0f1;
\t\t\tborder-radius: 50%;
\t\t\tline-height: 10px;
\t\t\tfont-size: 6px;
\t\t\twidth: 9px;
\t\t\theight: 9px;
\t\t\tposition: absolute;
\t\t\tmargin-top: -24px;
\t\t\tmargin-left: 26px;
\t\t\tdisplay: block;
\t\t\ttext-align: center
\t\t}

\t\t.search-line {
\t\t\tpadding: 20px
\t\t}

\t\t.search-line__dropdown-content {
\t\t\ttop: 60px
\t\t}

\t\t.collapse-control-wrapper {
\t\t\tpadding: 20px;
\t\t\tbackground-color: var(--search-line-background-color)
\t\t}

\t\t.collapse-control {
\t\t\tdisplay: flex;
\t\t\tjustify-content: space-between
\t\t}

\t\t.collapse-control__title {
\t\t\tfont-size: 15px;
\t\t\tline-height: 15px;
\t\t\tdisplay: inline-block
\t\t}

\t\t.collapse-control__button {
\t\t\tborder: 0;
\t\t\tpadding: 0;
\t\t\theight: 15px;
\t\t\tbackground: 0 0;
\t\t\tline-height: 15px;
\t\t\tcolor: var(--search-line-text-color)
\t\t}

\t\t.collapse-control__button-image {
\t\t\tmargin: 0 20px 1px 2px
\t\t}

\t\t.m-footer {
\t\t\twidth: 100%;
\t\t\tmargin-top: 20px;
\t\t\tpadding: 20px 18px 6px;
\t\t\tbackground-color: #f2f2f2
\t\t}

\t\t.m-nav-footer {
\t\t\tjustify-content: space-evenly
\t\t}

\t\t.copyright__google-recaptcha {
\t\t\ttext-align: center;
\t\t\twidth: 100%;
\t\t\tmargin: 0;
\t\t\tpadding: 15px 0 0
\t\t}

\t\t.copyright__google-recaptcha > a,
\t\t.copyright__google-recaptcha>a:hover,
\t\t.copyright__google-recaptcha>a:focus {
\t\t\tcolor: #000;
\t\t\ttext-decoration: underline
\t\t}

\t\t.m-fixed-footer_product .product-brief__description-body-link {
\t\t\tfont-size: 12px
\t\t}

\t\t.m-fixed-footer_product .product-brief__description-title {
\t\t\tfont-size: 14px
\t\t}

\t\t.m-fixed-footer_product .product-brief__payment-price {
\t\t\tfont-size: 20px
\t\t}

\t\t.m-fixed-footer_product .wrapper {
\t\t\tpadding: 0 20px;
\t\t\tjustify-content: space-between
\t\t}

\t\t.m-fixed-footer_product .product-brief__item {
\t\t\twidth: calc(100% - 280px);
\t\t\tpadding-bottom: 5px;
\t\t\tmin-width: 280px
\t\t}

\t\t.m-fixed-footer_product .product-brief__payment {
\t\t\tpadding: 0 0 0 10px
\t\t}

\t\t.m-fixed-footer_product .product-brief__description {
\t\t\tmax-width: unset
\t\t}

\t\t.m-fixed-footer .wrapper {
\t\t\tjustify-content: space-around
\t\t}

\t\t@media screen and(max-width:710px) {
\t\t\t.m-fixed-footer_product .product-brief__menu-container {
\t\t\t\tdisplay: none
\t\t\t}

\t\t\t.m-fixed-footer_product .fixed-footer__right-container {
\t\t\t\tflex-grow: 1
\t\t\t}

\t\t\t.m-fixed-footer_product .user-counters__item {
\t\t\t\tmargin-right: 20px
\t\t\t}
\t\t}

\t\t@media screen and(max-width:580px) {
\t\t\t.m-fixed-footer .product-brief__menu-container {
\t\t\t\tdisplay: none
\t\t\t}

\t\t\t.m-fixed-footer .fixed-footer__right-container {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 0 8% 15px
\t\t\t}

\t\t\t.m-fixed-footer .user-counters__item {
\t\t\t\tmargin-right: 20px
\t\t\t}

\t\t\t.m-fixed-footer_product .wrapper {
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.m-fixed-footer_product .product-brief__item {
\t\t\t\twidth: 100%
\t\t\t}

\t\t\t.m-fixed-footer_product .product-brief__payment {
\t\t\t\tmargin: 5px 0 10px;
\t\t\t\tflex-direction: row;
\t\t\t\tdisplay: flex;
\t\t\t\tpadding: 0
\t\t\t}

\t\t\t.m-fixed-footer_product .product-brief__payment .btn {
\t\t\t\tmargin-top: 2px
\t\t\t}

\t\t\t.m-fixed-footer_product .product-brief-quantity {
\t\t\t\twhite-space: nowrap;
\t\t\t\tmargin: 0 20px
\t\t\t}
\t\t}

\t\t@media screen and(max-width:555px) {
\t\t\t.m-fixed-footer .fixed-footer__right-container {
\t\t\t\tpadding: 0 10px 15px
\t\t\t}
\t\t}

\t\t@media screen and(max-width:490px) {

\t\t\t.m-fixed-footer .user-counters__item,
\t\t\t.m-fixed-footer_product .user-counters__item {
\t\t\t\tmargin-right: 10px
\t\t\t}
\t\t}

\t\t@media screen and(max-width:460px) {

\t\t\t.m-fixed-footer .user-counters__item,
\t\t\t.m-fixed-footer_product .user-counters__item {
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.m-fixed-footer .user-counters__item-img,
\t\t\t.m-fixed-footer_product .user-counters__item-img {
\t\t\t\tfont-size: 20px
\t\t\t}

\t\t\t.m-fixed-footer .user-counters__item-link,
\t\t\t.m-fixed-footer_product .user-counters__item-link {
\t\t\t\ttext-decoration: none;
\t\t\t\tmargin-top: 2px
\t\t\t}

\t\t\t.m-fixed-footer .user-counters,
\t\t\t.m-fixed-footer_product .user-counters {
\t\t\t\twidth: calc(100% - 45px);
\t\t\t\tjustify-content: space-between
\t\t\t}

\t\t\t.m-fixed-footer .user-counters__item-count_style_viewed,
\t\t\t.m-fixed-footer .user-counters__item-count_style_basket,
\t\t\t.m-fixed-footer_product .user-counters__item-count_style_viewed,
\t\t\t.m-fixed-footer_product .user-counters__item-count_style_basket {
\t\t\t\tbackground-color: #212529;
\t\t\t\tcolor: #f0f0f1;
\t\t\t\tborder-radius: 50%;
\t\t\t\tline-height: 10px;
\t\t\t\tfont-size: 6px;
\t\t\t\tmin-width: 9px;
\t\t\t\tmax-width: 9px;
\t\t\t\twidth: 9px;
\t\t\t\theight: 9px;
\t\t\t\tposition: absolute;
\t\t\t\tmargin-top: 14px;
\t\t\t\tmargin-left: 19px;
\t\t\t\tdisplay: block;
\t\t\t\tfont-weight: 400;
\t\t\t\ttext-align: center;
\t\t\t\tborder: 0;
\t\t\t\tpadding: 0
\t\t\t}
\t\t}

\t\t@media screen and(max-width:435px) {
\t\t\t.m-fixed-footer_product .product-brief__payment {
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.m-fixed-footer_product .product-brief__payment .btn {
\t\t\t\tmargin-top: 5px
\t\t\t}
\t\t}

\t\t.m-site-info {
\t\t\tdisplay: flex;
\t\t\tmargin: 0 0 20px
\t\t}

\t\t.m-site-info .site-info-block .site-info-images {
\t\t\tdisplay: flex;
\t\t\tmargin-right: 30px;
\t\t\talign-self: flex-start
\t\t}

\t\t.m-site-info .site-info-block_header {
\t\t\tflex-direction: column
\t\t}

\t\t.m-site-info .site-info-block .m-site-info-header {
\t\t\tcolor: #000;
\t\t\tfont-size: 18px;
\t\t\tfont-weight: 700;
\t\t\tmargin: 10px 0 15px
\t\t}

\t\t.m-site-info .site-info-block .site-info-description {
\t\t\twidth: unset
\t\t}

\t\t.m-site-info .site-info-block .site-info-brand {
\t\t\twidth: 180px;
\t\t\theight: 121px
\t\t}

\t\t.m-site-info .site-info-block .site-info-brand img {
\t\t\tmax-width: 160px;
\t\t\tmax-height: 100px
\t\t}

\t\t.m-site-info .site-info-block .site-info-cert {
\t\t\twidth: 90px;
\t\t\theight: 121px;
\t\t\tmargin-left: 10px;
\t\t\tmargin-right: 0
\t\t}

\t\t.m-site-info .site-info-block hr {
\t\t\tleft: 180px;
\t\t\twidth: 10px;
\t\t\ttop: unset;
\t\t\tmargin-top: 3.781rem
\t\t}

\t\t@media screen and(max-width:540px) {
\t\t\t.m-site-info {
\t\t\t\tmargin: 0
\t\t\t}

\t\t\t.m-site-info .site-info-block {
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.m-site-info .site-info-block .site-info-images {
\t\t\t\tmargin-right: 0;
\t\t\t\tmargin-bottom: 15px
\t\t\t}

\t\t\t.m-site-info .site-info-block .site-info-description {
\t\t\t\tmargin-bottom: 20px
\t\t\t}
\t\t}

\t\t@media screen and(max-width:320px) {
\t\t\t.m-site-info .site-info-block .site-info-description {
\t\t\t\tmax-width: 70%;
\t\t\t\talign-self: self-start
\t\t\t}
\t\t}

\t\t.m-site-info .contacts-block {
\t\t\twidth: unset;
\t\t\tmargin-top: 15px;
\t\t\tmax-width: 280px
\t\t}

\t\t.m-site-info .contacts-block .nav-item {
\t\t\twidth: 100%
\t\t}

\t\t.m-site-info .contacts-block .nav-item:last-child {
\t\t\tposition: unset
\t\t}

\t\t.m-site-info .contacts-block .nav-item-callback-link {
\t\t\theight: 30px
\t\t}

\t\t.m-site-info .contacts-block a.callback-link {
\t\t\tmargin: 0;
\t\t\tline-height: 20px;
\t\t\tvertical-align: top
\t\t}

\t\t.m-category-menu {
\t\t\tmargin: 0;
\t\t\tpadding: 0
\t\t}

\t\t.m-category-menu__item {
\t\t\twidth: 100%;
\t\t\tlist-style: none;
\t\t\tborder-bottom: 1px solid #e6e6e6
\t\t}

\t\t.m-category-menu__link {
\t\t\theight: 45px;
\t\t\tcolor: #232323;
\t\t\tfont-size: 15px;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: space-between
\t\t}

\t\t.m-category-menu__link:active,
\t\t.m-category-menu__link:hover {
\t\t\tcolor: #232323;
\t\t\ttext-decoration: none
\t\t}

\t\t.m-category-menu__link:after {
\t\t\tcontent: url('/img/arrow_right.png')
\t\t}

\t\t@media screen and(max-width:485px) {
\t\t\tdialog {
\t\t\t\tmax-width: calc(100% - 20px);
\t\t\t\tmin-width: calc(100% - 20px)
\t\t\t}
\t\t}

\t\t.page__body-head-text {
\t\t\tcolor: #232323;
\t\t\tfont-size: 20px;
\t\t\tfont-weight: 500;
\t\t\tline-height: 20px;
\t\t\tdisplay: flex
\t\t}

\t\t.page__body-head-img {
\t\t\twidth: 20px;
\t\t\theight: 20px;
\t\t\tmargin-right: 10px
\t\t}

\t\t.page__body-container-subparagraph {
\t\t\tmargin-left: 1px
\t\t}

\t\t.products-viewed .category-title,
\t\t.products-viewed .products-grid-size {
\t\t\tdisplay: none
\t\t}

\t\t@media screen and(max-width:590px) {
\t\t\t.products-viewed .products-grid-sort-link:last-child {
\t\t\t\tdisplay: none
\t\t\t}
\t\t}

\t\t@media screen and(max-width:475px) {
\t\t\t.products-viewed .products-grid-meta {
\t\t\t\tflex-direction: column-reverse
\t\t\t}

\t\t\t.products-viewed .products-grid-meta .btn-default {
\t\t\t\tflex-basis: 100%;
\t\t\t\tmargin-bottom: 15px
\t\t\t}
\t\t}

\t\t@media screen and(max-width:320px) {
\t\t\t.products-viewed .products-grid-meta .btn-default {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 10px
\t\t\t}
\t\t}

\t\t.user-type-select-group {
\t\t\tfont-size: 16px
\t\t}

\t\t@media screen and(max-width:442px) {
\t\t\t.user-type-select-group {
\t\t\t\tmargin-top: 0;
\t\t\t\ttext-align: left
\t\t\t}

\t\t\t.user-type-select-group .custom-radio:first-child {
\t\t\t\tmargin-bottom: 10px
\t\t\t}
\t\t}
\t}

\t@media screen and(max-width:768px) {
\t\t.cart-products {
\t\t\tpadding: 15px 15px 5px
\t\t}

\t\t.cart-products .cart-product .cart-num {
\t\t\tmargin-right: 10px
\t\t}

\t\t.cart-products .cart-product .cart-product-photo img {
\t\t\tmax-width: 100px
\t\t}

\t\t.cart-products .cart-product .cart-product-photo {
\t\t\twidth: 27%
\t\t}

\t\t.cart-products .cart-product .cart-product-info {
\t\t\twidth: 38%;
\t\t\talign-self: start
\t\t}

\t\t.cart-products .cart-product .cart-product-info .cart-product-description {
\t\t\twhite-space: normal
\t\t}

\t\t.cart-product-calc-container {
\t\t\twidth: 175px;
\t\t\tflex-shrink: 0;
\t\t\tflex-direction: column
\t\t}

\t\t.cart-products .cart-product .cart-product-quantity {
\t\t\tmargin: 0 0 4px 3px
\t\t}

\t\t.cart-products .cart-product .cart-product-price {
\t\t\tmargin: 0 0 0 10px
\t\t}

\t\t.cart-products .cart-summary .cart-summary-quantity {
\t\t\tline-height: 22px
\t\t}

\t\t.cart-products .cart-summary .cart-summary-discount {
\t\t\ttext-indent: 5px;
\t\t\tline-height: 22px;
\t\t\tmargin-left: 20px
\t\t}

\t\t.cart-products .cart-summary .cart-summary-price {
\t\t\ttext-indent: 5px;
\t\t\tline-height: 22px
\t\t}

\t\t.cart-actions {
\t\t\tflex-wrap: wrap
\t\t}

\t\t.cart-actions .btn {
\t\t\twhite-space: nowrap;
\t\t\twidth: calc(50% - 5px);
\t\t\tmargin-bottom: 10px
\t\t}

\t\t@media screen and(max-width:480px) {
\t\t\t.checkout-progress {
\t\t\t\twidth: 100%;
\t\t\t\tmargin: 10px 0 20px
\t\t\t}

\t\t\t.checkout-progress__item {
\t\t\t\twidth: 77px
\t\t\t}

\t\t\t.checkout-progress__text {
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.checkout-progress__item .fa {
\t\t\t\tmargin-right: 0;
\t\t\t\tmargin-bottom: 5px
\t\t\t}
\t\t}

\t\t@media screen and(max-width:500px) {
\t\t\t.cart-actions .btn {
\t\t\t\twidth: 100%
\t\t\t}
\t\t}

\t\t@media screen and(max-width:530px) {
\t\t\t.cart-title {
\t\t\t\tfont-size: 19px;
\t\t\t\tcolor: #000
\t\t\t}

\t\t\t.cart-products .cart-product {
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.cart-products .cart-product .cart-num {
\t\t\t\tposition: absolute;
\t\t\t\tleft: 35px;
\t\t\t\tmargin-top: 41px
\t\t\t}

\t\t\t.cart-product-calc-container {
\t\t\t\twidth: 100%
\t\t\t}

\t\t\t.cart-products .cart-product .cart-product-info {
\t\t\t\twidth: calc(100% - 20px);
\t\t\t\tmargin-top: 20px
\t\t\t}

\t\t\t.cart-products .cart-product .cart-product-quantity {
\t\t\t\tmargin: 15px 0
\t\t\t}

\t\t\t.cart-products .cart-product .cart-product-price {
\t\t\t\tmargin: 0
\t\t\t}

\t\t\t.cart-products .cart-summary {
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.cart-products .cart-summary .cart-summary-quantity {
\t\t\t\twidth: 100%;
\t\t\t\tmargin-bottom: 10px
\t\t\t}

\t\t\t.cart-products .cart-summary .cart-summary-discount {
\t\t\t\tmargin-left: 0;
\t\t\t\ttext-indent: 0;
\t\t\t\tmargin-bottom: 10px
\t\t\t}

\t\t\t.cart-products .cart-summary .cart-summary-price {
\t\t\t\ttext-indent: 0
\t\t\t}

\t\t\t.cart-summary-discount-price-container {
\t\t\t\tflex-direction: column;
\t\t\t\twidth: 100%
\t\t\t}
\t\t}

\t\t@media screen and(max-width:375px) {
\t\t\t.cart-products .cart-summary {
\t\t\t\tpadding-right: 0
\t\t\t}

\t\t\t.cart-products .cart-summary .cart-summary-discount {
\t\t\t\tmargin-right: 0;
\t\t\t\tfont-size: 14px
\t\t\t}

\t\t\t.cart-products .cart-summary .cart-summary-discount .cart-summary-discount-value {
\t\t\t\tfont-size: 14px
\t\t\t}
\t\t}
\t}

\t@media screen and(max-width:768px) {
\t\t.m-breadcrumb-back {
\t\t\tdisplay: flex;
\t\t\twidth: 28px;
\t\t\theight: 28px;
\t\t\tbackground-color: #f2f2f2;
\t\t\tborder-radius: 3px;
\t\t\tfont-size: 12px;
\t\t\talign-items: center;
\t\t\tjustify-content: center;
\t\t\tbackground-image: url('/img/arrow_left_mini.png');
\t\t\tbackground-repeat: no-repeat;
\t\t\tbackground-position: center
\t\t}

\t\t.m-breadcrumbs {
\t\t\twidth: calc(100% - 31px);
\t\t\tdisplay: flex;
\t\t\tflex-wrap: wrap;
\t\t\tmargin-left: 3px
\t\t}

\t\t.m-breadcrumb-item {
\t\t\tfont-size: 12px;
\t\t\tmargin-left: 7px;
\t\t\tline-height: 28px;
\t\t\tcolor: #000
\t\t}

\t\t.m-breadcrumb-item:first-child {
\t\t\tfont-weight: 700
\t\t}

\t\t.m-breadcrumb-item:active,
\t\t.m-breadcrumb-item:hover {
\t\t\tcolor: #000;
\t\t\ttext-decoration: none
\t\t}

\t\t.m-breadcrumb-item:not(:last-child):after {
\t\t\tcontent: '/';
\t\t\tmargin-left: 7px
\t\t}

\t\t.m-categories {
\t\t\tdisplay: block;
\t\t\twidth: 100%;
\t\t\tmargin-bottom: 16px
\t\t}

\t\t.m-categories__inner {
\t\t\tdisplay: flex;
\t\t\tflex-wrap: wrap;
\t\t\tmargin-left: -12px;
\t\t\tmargin-bottom: -12px
\t\t}

\t\t.m-categories__item {
\t\t\twidth: 20%;
\t\t\tpadding: 0 0 12px 12px
\t\t}

\t\t@media screen and(max-width:612px) {
\t\t\t.m-categories__item {
\t\t\t\twidth: 25%
\t\t\t}
\t\t}

\t\t@media screen and(max-width:466px) {
\t\t\t.m-categories__item {
\t\t\t\twidth: 33.3333333%
\t\t\t}
\t\t}

\t\t@media screen and(max-width:375px) {
\t\t\t.m-categories__item {
\t\t\t\twidth: 50%
\t\t\t}
\t\t}

\t\t.m-categories__link {
\t\t\tdisplay: flex;
\t\t\tpadding: 10px 10px 5px;
\t\t\tflex-direction: column;
\t\t\tjustify-content: space-between;
\t\t\tborder: 1px solid #e6e6e6;
\t\t\tborder-radius: 5px;
\t\t\theight: 100%
\t\t}

\t\t.m-categories__image {
\t\t\tdisplay: flex;
\t\t\twidth: 100%;
\t\t\theight: 60px;
\t\t\tmargin-bottom: 3px;
\t\t\talign-items: center;
\t\t\tjustify-content: center
\t\t}

\t\t.m-categories__name {
\t\t\tcolor: #000;
\t\t\tfont-size: 12px;
\t\t\ttext-align: center;
\t\t\toverflow: hidden;
\t\t\ttext-overflow: ellipsis
\t\t}

\t\t.products-grid__inner {
\t\t\tmargin-left: -20px
\t\t}

\t\t.products-grid__item {
\t\t\tpadding-left: 20px;
\t\t\tpadding-bottom: 20px;
\t\t\twidth: calc(100% / 3)
\t\t}

\t\t@media screen and(max-width:630px) {
\t\t\t.products-grid__item {
\t\t\t\twidth: 50%
\t\t\t}
\t\t}

\t\t@media screen and(max-width:480px) {
\t\t\t.products-grid__item {
\t\t\t\twidth: 100%
\t\t\t}
\t\t}

\t\t@media screen and(max-width:430px) {
\t\t\t.products-grid-sort-link:last-child {
\t\t\t\tdisplay: none
\t\t\t}
\t\t}

\t\t@media screen and(max-width:680px) {
\t\t\t.products-grid-size {
\t\t\t\tdisplay: none
\t\t\t}
\t\t}

\t\t@media screen and(max-width:768px) {
\t\t\t.products-filter .products-filter-block {
\t\t\t\twidth: calc(25% - 10px)
\t\t\t}
\t\t}

\t\t@media screen and(max-width:668px) {
\t\t\t.products-filter .products-filter-block {
\t\t\t\twidth: calc(100% / 3 - 9px)
\t\t\t}
\t\t}

\t\t@media screen and(max-width:568px) {
\t\t\t.products-filter .products-filter-block {
\t\t\t\twidth: calc(50% - 7px)
\t\t\t}
\t\t}

\t\t@media screen and(max-width:400px) {
\t\t\t.products-filter .products-filter-block {
\t\t\t\twidth: 100%
\t\t\t}
\t\t}

\t\t.products-filter {
\t\t\tmargin-top: 0
\t\t}

\t\t.products-filter .form-group {
\t\t\tdisplay: flex;
\t\t\tgap: 10px
\t\t}

\t\t.products-filter .toggle-all-filters {
\t\t\tpadding: 3px 10px;
\t\t\tfont-size: 14px;
\t\t\tcolor: #888 !important;
\t\t\tborder-color: var(--button-background-color);
\t\t\tborder-radius: 0.25rem;
\t\t\tmargin-top: 0;
\t\t\theight: 28px;
\t\t\tflex-grow: 1;
\t\t\tmargin-bottom: 0;
\t\t\tflex-basis: calc(100% / 3);
\t\t\twhite-space: nowrap
\t\t}

\t\t.products-filter .form-group .btn {
\t\t\tpadding: 2px 10px;
\t\t\tmargin: 0;
\t\t\tflex-grow: 1;
\t\t\tflex-basis: calc(100% / 3)
\t\t}

\t\t.products-filter .products-filter-reset {
\t\t\tpadding: 3px 10px;
\t\t\tfont-size: 14px;
\t\t\tcolor: #888;
\t\t\tborder: 1px solid var(--button-background-color);
\t\t\tdisplay: block;
\t\t\tborder-radius: 0.25rem;
\t\t\tmargin-top: 0;
\t\t\theight: 28px;
\t\t\tflex-grow: 1;
\t\t\tflex-basis: calc(100% / 3);
\t\t\twhite-space: nowrap
\t\t}

\t\t@media screen and(max-width:560px) {
\t\t\t.products-filter .form-group {
\t\t\t\tflex-wrap: wrap
\t\t\t}

\t\t\t.products-filter .toggle-all-filters {
\t\t\t\tflex-basis: 100%
\t\t\t}

\t\t\t.products-filter .form-group .btn,
\t\t\t.products-filter .products-filter-reset {
\t\t\t\tflex-basis: calc(50% - 5px)
\t\t\t}
\t\t}

\t\t@media screen and(max-width:425px) {
\t\t\t.category-bottom {
\t\t\t\tflex-direction: column
\t\t\t}
\t\t}
\t}

\t@media screen and(max-width:768px) {
\t\t.product .product-name {
\t\t\tmargin: 0
\t\t}

\t\t.product-block-title {
\t\t\tcolor: #000;
\t\t\tfont-size: 18px;
\t\t\tfont-weight: 700
\t\t}

\t\t.product .m-product-name {
\t\t\tcolor: #000;
\t\t\tfont-size: 18px;
\t\t\tfont-weight: 700;
\t\t\tpadding-bottom: 20px
\t\t}

\t\t.product .product-info .product-form {
\t\t\twidth: 280px;
\t\t\theight: unset;
\t\t\tpadding: 15px 15px 10px
\t\t}

\t\t.product .product-info .product-form .product-stock-status {
\t\t\tmargin-right: -22px
\t\t}

\t\t.product .product-info .product-form .product-features {
\t\t\tmargin: 10px 0
\t\t}

\t\t.product .product-info .product-form .product-compare-link {
\t\t\tposition: absolute;
\t\t\tright: 15px;
\t\t\tmargin-top: -47px;
\t\t\tmargin-left: 0
\t\t}

\t\t.product .product-info .product-form .product-buttons {
\t\t\tflex-direction: row;
\t\t\tjustify-content: space-between;
\t\t\tpadding: 10px 0 0;
\t\t\tgap: 10px
\t\t}

\t\t.product .product-info .product-form .product-buttons .btn {
\t\t\tpadding: 2px 10px;
\t\t\tflex-grow: 1
\t\t}

\t\t.product .product-info .product-form .product-prices-block {
\t\t\tpadding: 10px 18px;
\t\t\tflex-direction: column;
\t\t\theight: unset;
\t\t\tmargin: 0 -15px
\t\t}

\t\t.product .product-info .product-form .product-prices-block .product-prices .product-old-price {
\t\t\tfont-size: 14px
\t\t}

\t\t.product .product-info .product-form .product-stock-status_not .product-stock-status-text {
\t\t\tmargin-top: 6px
\t\t}

\t\t.product-price-conditions {
\t\t\twidth: unset;
\t\t\tpadding-right: 0
\t\t}

\t\t.product-price-conditions > li {
\t\t\tmargin-top: 10px
\t\t}

\t\t.product-item:first-child {
\t\t\twidth: calc(100% - 290px)
\t\t}

\t\t.product-slider-container {
\t\t\twidth: 100%
\t\t}

\t\t.owl-carousel .owl-item img {
\t\t\tmax-width: 80%
\t\t}

\t\t.owl-dots {
\t\t\ttext-align: center;
\t\t\tmargin-top: -40px;
\t\t\tposition: relative
\t\t}

\t\t.owl-carousel button.owl-dot {
\t\t\tborder: 2px solid #f2f2f2;
\t\t\tmargin-right: 10px;
\t\t\twidth: 15px;
\t\t\tborder-radius: 2px
\t\t}

\t\t.owl-carousel button.owl-dot.active {
\t\t\tborder-color: #d9d9d9
\t\t}

\t\t@media screen and(max-width:525px) {
\t\t\t.product .product-info {
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.product-item:first-child {
\t\t\t\twidth: 100%;
\t\t\t\tmargin-bottom: 10px
\t\t\t}

\t\t\t.product .product-info .product-form {
\t\t\t\twidth: 100%;
\t\t\t\tmax-width: 100%
\t\t\t}

\t\t\t.product .product-info .product-form .product-prices-block {
\t\t\t\tflex-direction: row
\t\t\t}

\t\t\t.no-js .owl-carousel,
\t\t\t.owl-carousel.owl-loaded {
\t\t\t\tpadding: 15px 0 30px
\t\t\t}

\t\t\t.owl-dots {
\t\t\t\tmargin-top: -5px
\t\t\t}

\t\t\t.product-slider-container {
\t\t\t\theight: 330px
\t\t\t}

\t\t\t.product-slider-container .owl-stage-outer {
\t\t\t\theight: 265px
\t\t\t}
\t\t}

\t\t@media screen and(max-width:424px) {
\t\t\t.product .product-info .product-form .product-prices-block {
\t\t\t\tflex-direction: column
\t\t\t}
\t\t}

\t\t@media screen and(max-width:320px) {
\t\t\t.product .product-info .product-form {
\t\t\t\twidth: 280px
\t\t\t}
\t\t}

\t\t.product .product-properties {
\t\t\tflex-wrap: nowrap;
\t\t\tflex-direction: column
\t\t}

\t\t.product .product-properties .product-properties-list {
\t\t\tflex-basis: 100%;
\t\t\tmax-width: 100%;
\t\t\tpadding-left: 0
\t\t}

\t\t.product .product-properties .product-properties-list:first-child {
\t\t\tmargin-bottom: 0
\t\t}

\t\t.product .product-properties .product-properties-list .product-property .product-property-name {
\t\t\tfont-weight: 700;
\t\t\tdisplay: inline-block;
\t\t\tline-height: 12px;
\t\t\twidth: calc(50% - 2px)
\t\t}

\t\t.product .product-properties .product-properties-list .product-property .product-property-value {
\t\t\tfloat: unset;
\t\t\twidth: calc(50% - 2px);
\t\t\tmax-width: unset;
\t\t\tline-height: 12px
\t\t}

\t\t@media screen and(max-width:425px) {

\t\t\t.product .product-properties .product-properties-list .product-property .product-property-name,
\t\t\t.product .product-properties .product-properties-list .product-property .product-property-value {
\t\t\t\tfloat: unset;
\t\t\t\twidth: 100%
\t\t\t}

\t\t\t.product .product-properties .product-properties-list .product-property .product-property-value {
\t\t\t\tline-height: 17px;
\t\t\t\tvertical-align: bottom
\t\t\t}
\t\t}

\t\t.product-accordion-menu__body {
\t\t\tpadding: 18px
\t\t}

\t\t.product-accordion-menu__body .text_wrap {
\t\t\tpadding: 0 18px
\t\t}

\t\t@media screen and(max-width:645px) {
\t\t\t.product-accordion-menu p {
\t\t\t\tdisplay: none
\t\t\t}

\t\t\t.product-accordion-menu__header-text {
\t\t\t\tline-height: 20px
\t\t\t}

\t\t\t.product-accordion-menu__header-text a {
\t\t\t\tline-height: unset
\t\t\t}
\t\t}

\t\t@media screen and(max-width:440px) {
\t\t\t.product-accordion-menu__body {
\t\t\t\tpadding: 13px
\t\t\t}

\t\t\t.product-accordion-menu .price {
\t\t\t\tdisplay: none
\t\t\t}

\t\t\t.product-accordion-menu__header-text a {
\t\t\t\tfont-size: 12px
\t\t\t}

\t\t\t.product-accordion-menu__body .text_wrap {
\t\t\t\tpadding: 0 0 0 18px
\t\t\t}
\t\t}

\t\t.products-reviews__head {
\t\t\tflex-wrap: wrap;
\t\t\theight: unset;
\t\t\tpadding: 13px 0;
\t\t\talign-items: start
\t\t}

\t\t.products-reviews__head-inner {
\t\t\twidth: unset;
\t\t\tflex-grow: 1;
\t\t\talign-items: end;
\t\t\tflex-direction: column-reverse
\t\t}

\t\t.products-reviews__head-text {
\t\t\tcolor: #000;
\t\t\tfont-size: 18px;
\t\t\tfont-weight: 700;
\t\t\tmargin: 5px 20px 0 0
\t\t}

\t\t.products-reviews__head-item-header {
\t\t\tfont-size: 12px;
\t\t\twhite-space: nowrap
\t\t}

\t\t.products-reviews__btn-write-review {
\t\t\tmargin-right: 0
\t\t}
\t}

\t@media screen and(max-width:768px) {
\t\t.m-checkout-title {
\t\t\tfont-weight: 700;
\t\t\tfont-size: 20px;
\t\t\tcolor: #000
\t\t}

\t\t@media screen and(max-width:655px) {
\t\t\t.checkout-client-form-inner {
\t\t\t\twidth: unset
\t\t\t}

\t\t\t.checkout-client-form {
\t\t\t\tpadding-right: 20px
\t\t\t}
\t\t}

\t\t@media screen and(max-width:576px) {
\t\t\t.checkout-client-form .col-form-label {
\t\t\t\tpadding: 0 0 5px 15px
\t\t\t}
\t\t}

\t\t.checkout-delivery-form .col-form-label.checkout-delivery-form-method {
\t\t\twidth: 100%
\t\t}

\t\t@media screen and(max-width:425px) {
\t\t\t.checkout-buttons .col-checkoutform-captcha {
\t\t\t\tdisplay: flex;
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.delivery-pickup__controls {
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.delivery-pickup__controls-button {
\t\t\t\tmargin: 10px 0 0
\t\t\t}
\t\t}

\t\t@media screen and(max-width:320px) {
\t\t\t.checkout-buttons .col-checkoutform-captcha input {
\t\t\t\twidth: 100%
\t\t\t}
\t\t}

\t\t@media screen and(max-width:700px) {
\t\t\t.checkout-delivery-form .delivery-methods {
\t\t\t\tflex-direction: column;
\t\t\t\tgap: 10px
\t\t\t}

\t\t\t.checkout-delivery-form .delivery-method-free {
\t\t\t\tmargin-top: -3px
\t\t\t}

\t\t\t.delivery-moscow-methods {
\t\t\t\tmargin: 0;
\t\t\t\tposition: initial;
\t\t\t\twhite-space: normal
\t\t\t}

\t\t\t.delivery-moscow-methods .delivery-method:last-child {
\t\t\t\tmargin-top: 0
\t\t\t}

\t\t\t.delivery-moscow-methods__period {
\t\t\t\tmargin-top: -5px;
\t\t\t\tdisplay: block
\t\t\t}

\t\t\t.delivery-moscow-tab {
\t\t\t\tpadding-top: 0
\t\t\t}
\t\t}

\t\t@media screen and(max-width:710px) {
\t\t\t.delivery-pickup__points {
\t\t\t\tmax-height: unset;
\t\t\t\tborder-radius: 10px
\t\t\t}

\t\t\t.custom-control.custom-radio.delivery-pickup__points-item {
\t\t\t\twidth: 100%;
\t\t\t\tborder-right: 0;
\t\t\t\tpadding-right: 15px
\t\t\t}

\t\t\t.custom-control.custom-radio.delivery-pickup__points-item:nth-child(odd):nth-last-child(2) {
\t\t\t\tborder-bottom: 1px solid #e5e5e5
\t\t\t}
\t\t}

\t\t.delivery-moscow-content__fields .col-sm-4,
\t\t.delivery-moscow-content__fields .col-sm-8 {
\t\t\ttext-align: left;
\t\t\tflex: 0 0 100%;
\t\t\tmax-width: 100%;
\t\t\tpadding-top: 0
\t\t}

\t\t.delivery-moscow-tab {
\t\t\tflex-direction: column
\t\t}

\t\t.delivery-moscow-content {
\t\t\tmargin-bottom: 20px
\t\t}

\t\t.delivery-moscow-content__fields .col-sm-8 {
\t\t\tpadding-right: 0
\t\t}

\t\t.delivery-services-content {
\t\t\tflex-direction: column
\t\t}

\t\t.delivery-services-content__fields-container {
\t\t\tmargin-bottom: 20px
\t\t}

\t\t.delivery-services-content__fields {
\t\t\tpadding-right: 0
\t\t}

\t\t.delivery-services-content__fields .col-sm-10 {
\t\t\t-ms-flex: calc(100% - 67px);
\t\t\tflex: 0 0 calc(100% - 67px);
\t\t\tmax-width: calc(100% - 67px)
\t\t}

\t\t.delivery-services-col-2 {
\t\t\twidth: calc(100% - 67px)
\t\t}

\t\t.field-checkoutform-delivery_services_house input {
\t\t\twidth: calc(100% - 30px)
\t\t}

\t\t.delivery-services-col-small {
\t\t\t-ms-flex: 0 0 37%;
\t\t\tflex: 0 0 37%;
\t\t\tmax-width: 37%
\t\t}

\t\t.field-checkoutform-delivery_services_block label,
\t\t.field-checkoutform-delivery_services_flat label {
\t\t\tmax-width: 67px
\t\t}

\t\t.field-checkoutform-delivery_services_block div.col-sm-6,
\t\t.field-checkoutform-delivery_services_flat div.col-sm-6 {
\t\t\tmax-width: calc(100% - 67px);
\t\t\tflex-basis: calc(100% - 67px)
\t\t}

\t\t.delivery-services-col-2 .suggestions-wrapper {
\t\t\tdisplay: none
\t\t}

\t\t@media screen and(max-width:560px) {

\t\t\t.delivery-services-content__fields .col-sm-2,
\t\t\t.delivery-services-content__fields .col-sm-6,
\t\t\t.delivery-services-content__fields .col-sm-10 {
\t\t\t\tflex: 0 0 100%;
\t\t\t\tmax-width: 100%;
\t\t\t\ttext-align: left;
\t\t\t\tpadding-left: 15px
\t\t\t}

\t\t\t.field-checkoutform-delivery_services_block div.col-sm-6,
\t\t\t.field-checkoutform-delivery_services_flat div.col-sm-6 {
\t\t\t\tmax-width: calc(100% + 15px);
\t\t\t\tflex-basis: calc(100% + 15px)
\t\t\t}

\t\t\t.delivery-services-col-2 {
\t\t\t\tflex-direction: column;
\t\t\t\tflex-basis: 100%;
\t\t\t\tpadding-right: 15px
\t\t\t}

\t\t\t.delivery-services-col-small {
\t\t\t\tmax-width: 100%;
\t\t\t\tflex-basis: 18px
\t\t\t}

\t\t\t.field-checkoutform-delivery_services_house input {
\t\t\t\twidth: 100%
\t\t\t}

\t\t\t.delivery-services-col-first .col-form-label {
\t\t\t\ttext-align: left
\t\t\t}
\t\t}

\t\t.delivery-services-table__head-cell-time {
\t\t\tpadding-right: 0
\t\t}

\t\t.delivery-services-table__cell-cost {
\t\t\tpadding-right: 20px
\t\t}

\t\t.delivery-services-table__other-company {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column
\t\t}

\t\t.delivery-services-table__other-company-label {
\t\t\t-ms-flex: 0 0 100%;
\t\t\tflex: 0 0 100%;
\t\t\tmax-width: 100%;
\t\t\twidth: 100%;
\t\t\ttext-align: left
\t\t}

\t\t.field-checkoutform-delivery_services_user_custom {
\t\t\t-ms-flex: 0 0 100%;
\t\t\tflex: 0 0 100%;
\t\t\tmax-width: 100%;
\t\t\tmargin-top: 10px
\t\t}

\t\t.field-checkoutform-delivery_services_user_custom .delivery-services-table__select-company-label {
\t\t\t-ms-flex: 0 0 100%;
\t\t\tflex: 0 0 100%;
\t\t\tmax-width: 100%;
\t\t\ttext-align: left
\t\t}

\t\t.delivery-services-table__select-company-wrapper {
\t\t\tpadding-left: 0;
\t\t\tmax-width: 227px
\t\t}

\t\t.delivery-services-table__cell-radio-company {
\t\t\tvertical-align: top;
\t\t\tpadding-top: 15px
\t\t}

\t\t.delivery-services-table__cell-radio-item .custom-radio {
\t\t\tmargin-top: -7px
\t\t}

\t\t@media screen and(max-width:710px) {

\t\t\t.delivery-services-list__title,
\t\t\t.delivery-services-table__cell-time,
\t\t\t.delivery-services-table__head-cell-time,
\t\t\t.delivery-services-table__cell-last-space {
\t\t\t\tdisplay: none
\t\t\t}

\t\t\t.delivery-services-table__head-cell-time-dummy {
\t\t\t\tdisplay: table-cell
\t\t\t}

\t\t\t.delivery-services-table__time {
\t\t\t\tdisplay: block;
\t\t\t\tmargin-top: 5px;
\t\t\t\tfont-weight: 400
\t\t\t}

\t\t\ttr:not(:last-child) .delivery-services-table__cell,
\t\t\ttr:not(:last-child) .delivery-services-table__cell-radio {
\t\t\t\tborder-bottom: 0
\t\t\t}

\t\t\ttr:not(:last-child) .delivery-services-table__cell {
\t\t\t\tpadding-bottom: 0
\t\t\t}

\t\t\ttr:not(:last-child) .delivery-services-table__cell-info {
\t\t\t\tborder-bottom: 1px dashed #e5e5e5;
\t\t\t\tpadding-bottom: 15px
\t\t\t}

\t\t\t.delivery-services-table__cell-radio-item .custom-radio {
\t\t\t\tmargin-top: 0;
\t\t\t\tmargin-bottom: -12px
\t\t\t}
\t\t}

\t\t@media screen and(max-width:390px) {
\t\t\tspan.delivery-services-table__text {
\t\t\t\tdisplay: none
\t\t\t}

\t\t\t.delivery-services-table__head-text {
\t\t\t\tdisplay: block;
\t\t\t\tmargin-top: 15px
\t\t\t}
\t\t}

\t\t@media screen and(max-width:320px) {
\t\t\t.checkout-payment-form .checkout-buttons .btn {
\t\t\t\tmargin: 10px 0;
\t\t\t\twidth: 100%
\t\t\t}
\t\t}

\t\t@media screen and(max-width:570px) {

\t\t\t.delivery-services-table__head-cell-cost,
\t\t\t.delivery-services-table__cell-cost {
\t\t\t\tdisplay: none
\t\t\t}

\t\t\t.delivery-services-table__head-cell-cost-dummy {
\t\t\t\tdisplay: table-cell
\t\t\t}

\t\t\t.delivery-services-table__cost {
\t\t\t\tdisplay: block;
\t\t\t\tmargin-top: 5px;
\t\t\t\tfont-weight: 400
\t\t\t}
\t\t}

\t\t@media screen and(max-width:450px) {
\t\t\t.checkout-product-properties span {
\t\t\t\tdisplay: block
\t\t\t}

\t\t\t.checkout-product-properties span:last-child {
\t\t\t\tmargin-left: 0;
\t\t\t\tmargin-top: 5px
\t\t\t}
\t\t}

\t\t@media screen and(max-width:540px) {
\t\t\t.checkout-payment-form .checkout-buttons {
\t\t\t\twidth: unset
\t\t\t}
\t\t}

\t\t@media screen and(max-width:510px) {
\t\t\t.checkout-confirmation-order {
\t\t\t\twidth: unset;
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.checkout-confirmation-order__header {
\t\t\t\twidth: 100%;
\t\t\t\tmargin-bottom: 1rem
\t\t\t}

\t\t\t.checkout-confirmation-order__item {
\t\t\t\tmargin: 0 0 5px
\t\t\t}
\t\t}

\t\t.checkout-payment-form .order-summary {
\t\t\tpadding: 0;
\t\t\twidth: 240px;
\t\t\tmargin: 0 auto
\t\t}

\t\t.checkout-payment-form .order-summary .order-summary-value {
\t\t\tpadding-left: 7px
\t\t}

\t\t.checkout-payment-form .order-summary .order-summary-title {
\t\t\tvertical-align: top
\t\t}

\t\t.checkout-payment-form .order-summary .order-summary-value {
\t\t\tmax-width: 112px;
\t\t\tvertical-align: top;
\t\t\tdisplay: inline-block
\t\t}

\t\t.checkout-fast-form__inner {
\t\t\twidth: 100%
\t\t}
\t}

\t@media screen and(max-width:768px) {
\t\t.checkout-success__header {
\t\t\tfont-size: 22px
\t\t}

\t\t.checkout-success__subheader {
\t\t\tfont-size: 12pt
\t\t}

\t\t.checkout-success {
\t\t\tmax-width: 100%
\t\t}

\t\t.checkout-success__banner {
\t\t\tbackground-color: #f2f2f2;
\t\t\tborder-radius: 15px;
\t\t\twidth: 100%;
\t\t\theight: unset
\t\t}

\t\t.checkout-success__banner-image-container {
\t\t\tdisplay: none
\t\t}

\t\t.checkout-success__banner-content {
\t\t\twidth: 100%;
\t\t\tposition: unset;
\t\t\tpadding: 1rem 1rem 0
\t\t}

\t\t.checkout-success .order-info__dotted {
\t\t\tborder-bottom: 0
\t\t}

\t\t.checkout-success .order-info__cell-type-fixed {
\t\t\twidth: unset;
\t\t\tfont-weight: 700
\t\t}

\t\t.checkout-success .cart-products .cart-summary {
\t\t\tpadding-bottom: 7px
\t\t}

\t\t.checkout-success .cart-products .cart-summary .cart-summary-quantity {
\t\t\twhite-space: nowrap
\t\t}

\t\t.checkout-success .cart-products .cart-summary .cart-summary-price .cart-summary-price-value,
\t\t.checkout-success .cart-products .cart-summary .cart-summary-weight .cart-summary-weight-value,
\t\t.checkout-success .cart-products .cart-summary .cart-summary-discount .cart-summary-discount-value {
\t\t\tdisplay: block;
\t\t\tpadding-left: 0;
\t\t\tpadding-top: 5px
\t\t}

\t\t.checkout-success .cart-products .cart-summary .cart-summary-discount {
\t\t\tmargin-right: 0;
\t\t\tmargin-left: 0
\t\t}

\t\t.checkout-success__actions {
\t\t\tgap: 10px
\t\t}

\t\t.checkout-success__actions .btn,
\t\t.checkout-success__actions .btn:first-child {
\t\t\twhite-space: nowrap;
\t\t\tpadding-right: 0;
\t\t\tpadding-left: 0;
\t\t\tmargin-right: 0;
\t\t\tflex-grow: 1
\t\t}

\t\t@media screen and(max-width:610px) {
\t\t\t.checkout-success__actions {
\t\t\t\tflex-wrap: wrap
\t\t\t}

\t\t\t.checkout-success__actions .btn {
\t\t\t\twidth: calc(50% - 10px)
\t\t\t}

\t\t\t.checkout-success .cart-products .cart-summary {
\t\t\t\tflex-direction: column;
\t\t\t\talign-items: start;
\t\t\t\tgap: 10px
\t\t\t}

\t\t\t.checkout-success .cart-products .cart-summary .cart-summary-price .cart-summary-price-value,
\t\t\t.checkout-success .cart-products .cart-summary .cart-summary-weight .cart-summary-weight-value,
\t\t\t.checkout-success .cart-products .cart-summary .cart-summary-discount .cart-summary-discount-value {
\t\t\t\tdisplay: inline;
\t\t\t\tpadding-left: 5px;
\t\t\t\tpadding-top: 0
\t\t\t}

\t\t\t.checkout-success .cart-products .cart-summary .cart-summary-price,
\t\t\t.checkout-success .cart-products .cart-summary .cart-summary-discount {
\t\t\t\ttext-indent: 0
\t\t\t}
\t\t}

\t\t@media screen and(max-width:530px) {

\t\t\t.checkout-success .cart-products .cart-summary .cart-summary-quantity,
\t\t\t.checkout-success .cart-products .cart-summary .cart-summary-discount {
\t\t\t\tmargin-bottom: 0
\t\t\t}
\t\t}

\t\t@media screen and(max-width:470px) {
\t\t\t.checkout-success .order-info__row {
\t\t\t\tflex-direction: column
\t\t\t}
\t\t}

\t\t@media screen and(max-width:400px) {
\t\t\t.checkout-success__actions .btn {
\t\t\t\twidth: 100%
\t\t\t}
\t\t}
\t}

\t@media screen and(max-width:768px) {
\t\t.search-page .m-site-info {
\t\t\tflex-direction: row;
\t\t\tmargin-top: 5px
\t\t}

\t\t.search-menu {
\t\t\tflex-wrap: wrap;
\t\t\tpadding: 10px 20px 15px;
\t\t\tjustify-content: flex-start
\t\t}

\t\t.search-menu__item {
\t\t\tmargin-right: 0
\t\t}

\t\t.search-menu__item-link {
\t\t\tmargin: 3px 0
\t\t}

\t\t.search-menu__item:last-child {
\t\t\tflex-basis: 100%;
\t\t\tmargin-top: 10px
\t\t}

\t\t.search-menu__item:not(:last-child, :nth-last-child(2)) {
\t\t\tmargin-right: 25px
\t\t}

\t\t.search-menu__payment {
\t\t\tmargin-left: 20px;
\t\t\tmargin-right: 0
\t\t}

\t\t.search-menu-special {
\t\t\tdisplay: flex;
\t\t\tjustify-content: flex-end;
\t\t\tflex-direction: row-reverse
\t\t}

\t\t@media screen and(max-width:475px) {
\t\t\t.search-menu__payment {
\t\t\t\tmargin-bottom: 15px;
\t\t\t\tmargin-left: 0;
\t\t\t\tmargin-right: 20px
\t\t\t}

\t\t\t.search-menu-special {
\t\t\t\tflex-direction: column;
\t\t\t\talign-items: center;
\t\t\t\tmargin-top: 5px
\t\t\t}

\t\t\t.search-menu__item {
\t\t\t\twidth: calc(50% - 25px);
\t\t\t\ttext-align: left
\t\t\t}

\t\t\t.search-menu__item:last-child {
\t\t\t\tmargin-top: 0
\t\t\t}
\t\t}

\t\t@media screen and(max-width:540px) {
\t\t\t.search-page .m-site-info .site-info-block .site-info-description {
\t\t\t\tmargin-bottom: 0
\t\t\t}
\t\t}

\t\t.search-page .search-result-title {
\t\t\tdisplay: none
\t\t}

\t\t.search-page .search-result-category-title,
\t\t.search-page .search-result-articles-title {
\t\t\tcolor: #232323;
\t\t\tfont-weight: 700;
\t\t\tfont-size: 20px
\t\t}
\t}

\t@media screen and(max-width:768px) {
\t\t.contacts-page__header {
\t\t\tmargin-top: 0;
\t\t\tjustify-content: flex-start
\t\t}

\t\t.contacts-page__header .m-site-info .contacts-block {
\t\t\tmargin-top: 0;
\t\t\tmin-width: 280px
\t\t}

\t\t.page__header-column_theme_requisites {
\t\t\tpadding: 0;
\t\t\tflex-grow: 1
\t\t}

\t\t.page__header-column_theme_requisites .page__advantages {
\t\t\tmargin: 10px auto;
\t\t\tmax-width: 280px
\t\t}

\t\t.page__header-column_theme_requisites .page__advantages-item {
\t\t\tdisplay: flex;
\t\t\talign-items: center
\t\t}

\t\t.page__header-column_theme_requisites .page__advantages-item:first-child {
\t\t\tmargin: 0
\t\t}

\t\t.page__header-column_theme_requisites .page__advantages-item-text {
\t\t\tmargin-left: 10px;
\t\t\tline-height: 18px
\t\t}

\t\t.contacts-page__line {
\t\t\theight: 0;
\t\t\tmargin: 25px 0
\t\t}

\t\t.contacts-page__line:first-child {
\t\t\tmargin: 10px 0
\t\t}

\t\t.contacts-accordion_trigger:after {
\t\t\tright: 27px;
\t\t\tmargin-top: 4px
\t\t}

\t\t@media screen and(max-width:520px) {
\t\t\t.contacts-page__header {
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.page__header-column_theme_requisites .page__advantages {
\t\t\t\tmargin: 20px 0;
\t\t\t\tmax-width: 100%
\t\t\t}
\t\t}

\t\t.collective-table__row > td {
\t\t\tpadding-right: 15px
\t\t}

\t\t.collective-table__container-text {
\t\t\tdisplay: none
\t\t}

\t\t@media screen and(max-width:425px) {
\t\t\t.collective-table__container-text {
\t\t\t\tdisplay: block
\t\t\t}

\t\t\t.collective-table > thead,
\t\t\t.collective-table__row>td:not(:first-child) {
\t\t\t\tdisplay: none
\t\t\t}

\t\t\t.collective-table__row > td {
\t\t\t\tpadding-right: 0
\t\t\t}

\t\t\t.collective-table__container-image {
\t\t\t\tmargin: 10px auto
\t\t\t}

\t\t\t.collective-table__container-text {
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t\tflex-direction: column;
\t\t\t\tpadding-bottom: 10px
\t\t\t}

\t\t\t.collective-table__container-text>span:first-child {
\t\t\t\tfont-weight: 500
\t\t\t}

\t\t\t.collective-table__link {
\t\t\t\tfont-weight: 500
\t\t\t}

\t\t\t.collective-table__link > i {
\t\t\t\tmargin-right: 5px
\t\t\t}
\t\t}
\t}

\t@media screen and(max-width:768px) {
\t\t.warranty-page__header {
\t\t\tmargin-top: 0
\t\t}

\t\t.warranty-page__methods {
\t\t\tmin-width: 280px
\t\t}

\t\t.warranty-page__header-column {
\t\t\tflex-grow: 1
\t\t}

\t\t.warranty-page__header-column .page__advantages {
\t\t\tmax-width: 280px;
\t\t\tmargin: 0 auto;
\t\t\tpadding-left: 10px
\t\t}

\t\t.warranty-page__header-column .page__advantages-item-text {
\t\t\tmargin-left: 10px;
\t\t\tline-height: 18px
\t\t}

\t\t.warranty-page__advantages-item {
\t\t\tdisplay: flex;
\t\t\talign-items: center
\t\t}

\t\t@media screen and(max-width:540px) {
\t\t\t.warranty-page__header {
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.warranty-page__header-column .page__advantages {
\t\t\t\tmargin: 20px 0 0;
\t\t\t\tpadding: 0;
\t\t\t\tmax-width: 100%
\t\t\t}
\t\t}
\t}

\t@media screen and(max-width:768px) {
\t\t.payment-page__header {
\t\t\tmargin-top: 0
\t\t}

\t\t.payment-page__methods {
\t\t\tmin-width: 280px
\t\t}

\t\t.payment-page__methods-item:not(:last-child) {
\t\t\tmargin-bottom: 11px
\t\t}

\t\t.payment-page__header-column {
\t\t\tflex-grow: 1
\t\t}

\t\t.payment-page__header-column .page__advantages {
\t\t\tmax-width: 280px;
\t\t\tmargin: 0 auto;
\t\t\tpadding-left: 10px
\t\t}

\t\t.payment-page__header-column .page__advantages-item-text {
\t\t\tmargin-left: 10px;
\t\t\tline-height: 18px
\t\t}

\t\t.payment-page__advantages-item {
\t\t\tdisplay: flex;
\t\t\talign-items: center
\t\t}

\t\t.payment-page__advantages-item:first-child {
\t\t\tmargin-top: 5px
\t\t}

\t\t.payment-page__body-container-subparagraph {
\t\t\tmargin-top: 5px
\t\t}

\t\t@media screen and(max-width:540px) {
\t\t\t.payment-page__header {
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.payment-page__header-column .page__advantages {
\t\t\t\tmargin: 20px 0 0;
\t\t\t\tmax-width: 100%;
\t\t\t\tpadding: 0
\t\t\t}
\t\t}

\t\t.payment-systems {
\t\t\tflex-wrap: wrap;
\t\t\tgap: 10px
\t\t}

\t\t.payment-systems__item:not(:last-child) {
\t\t\tmargin-right: 0
\t\t}

\t\t.payment-systems__item-container-image {
\t\t\twidth: 100%
\t\t}

\t\t.payment-systems__item {
\t\t\twidth: calc(20% - 8px)
\t\t}

\t\t@media screen and(max-width:640px) {
\t\t\t.payment-systems__item {
\t\t\t\twidth: calc(25% - 8px)
\t\t\t}
\t\t}

\t\t@media screen and(max-width:530px) {
\t\t\t.payment-systems__item {
\t\t\t\twidth: calc(100% / 3 - 7px)
\t\t\t}
\t\t}

\t\t@media screen and(max-width:400px) {
\t\t\t.payment-systems__item {
\t\t\t\twidth: calc(50% - 8px)
\t\t\t}
\t\t}
\t}

\t@media screen and(max-width:768px) {
\t\t.payment-form-inner {
\t\t\twidth: 100%;
\t\t\tpadding-right: 0
\t\t}

\t\t.payment-form-inner .col-sm-8 {
\t\t\tmax-width: 100%;
\t\t\tflex: 0 0 100%
\t\t}

\t\t.payment-form-inner .row {
\t\t\tflex-direction: column
\t\t}

\t\t.payment-form-inner .col-form-label {
\t\t\ttext-align: left;
\t\t\tpadding-left: 15px
\t\t}

\t\t.category-title_payment-order {
\t\t\tmargin-bottom: 0
\t\t}
\t}

\t@media screen and(max-width:768px) {
\t\t.delivery-page__header {
\t\t\tmargin-top: 0
\t\t}

\t\t.delivery-page__methods {
\t\t\tmin-width: 280px
\t\t}

\t\t.delivery-page__header-column {
\t\t\tflex-grow: 1
\t\t}

\t\t.delivery-page__advantages {
\t\t\tmax-width: 280px;
\t\t\tmargin: 0 auto
\t\t}

\t\t.delivery-page__advantages-item {
\t\t\tdisplay: flex;
\t\t\talign-items: center
\t\t}

\t\t.delivery-page__advantages-item:first-child {
\t\t\tmargin-top: 7px
\t\t}

\t\t.delivery-page__advantages-item-text {
\t\t\tmargin-left: 10px;
\t\t\tline-height: 18px
\t\t}

\t\t.delivery-page__methods-item:not(:last-child) {
\t\t\tmargin-bottom: 11px
\t\t}

\t\t.own-delivery-blocks__item-body {
\t\t\tflex-direction: column
\t\t}

\t\t.own-delivery-blocks__item-body-column {
\t\t\twidth: 100%
\t\t}

\t\t.own-delivery-blocks__item-body-column:first-child {
\t\t\tborder-right: 0;
\t\t\tborder-bottom: 1px solid #f2f2f2
\t\t}

\t\t.delivery-services__item-column:first-child {
\t\t\tflex-direction: column-reverse;
\t\t\talign-items: flex-start
\t\t}

\t\t.delivery-services__item-headers {
\t\t\tmargin-left: 0;
\t\t\tdisplay: flex;
\t\t\tmargin-bottom: 10px
\t\t}

\t\t.delivery-services__item-header {
\t\t\tfont-weight: 700
\t\t}

\t\t.delivery-services__item-subheader {
\t\t\tfont-weight: 400;
\t\t\tmargin-left: 5px
\t\t}

\t\t.delivery-services__item-subheader:before {
\t\t\tcontent: '(' } .delivery-services__item-subheader:after { content: ')'
\t\t}

\t\t.delivery-services__item-link:not(:last-child) {
\t\t\tmargin-right: 40px
\t\t}

\t\t@media screen and(max-width:420px) {
\t\t\t.own-delivery-blocks {
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.own-delivery-blocks__item {
\t\t\t\twidth: 100%
\t\t\t}

\t\t\t.own-delivery-blocks__item:last-child {
\t\t\t\tmargin-top: 15px
\t\t\t}
\t\t}

\t\t@media screen and(max-width:540px) {
\t\t\t.delivery-page__header {
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.delivery-page__advantages {
\t\t\t\tmax-width: 100%;
\t\t\t\tmargin: 20px 0 0;
\t\t\t\tpadding: 0
\t\t\t}

\t\t\t.delivery-page__methods-item:not(:last-child) {
\t\t\t\tmargin-bottom: 0
\t\t\t}
\t\t}

\t\t@media screen and(max-width:670px) {
\t\t\t.delivery-services__item-column:last-child {
\t\t\t\tflex-direction: column-reverse;
\t\t\t\tjustify-content: center;
\t\t\t\talign-items: flex-start;
\t\t\t\tpadding-top: 31px;
\t\t\t\tgap: 5px
\t\t\t}

\t\t\t.delivery-services__item-link:not(:last-child) {
\t\t\t\tmargin-right: 15px
\t\t\t}
\t\t}

\t\t@media screen and(max-width:430px) {
\t\t\t.delivery-services__item {
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.delivery-services__item-column:last-child {
\t\t\t\tpadding-top: 10px
\t\t\t}
\t\t}
\t}

\t@media screen and(max-width:768px) {

\t\t.help-page__card-image-card,
\t\t.help-page__card-image-truck {
\t\t\tbackground-image: none
\t\t}

\t\t.help-page__card .img_wrap,
\t\t.help-page__logo-image {
\t\t\tdisplay: none
\t\t}

\t\t.help-page__wrap {
\t\t\tgap: 15px;
\t\t\tflex-wrap: wrap;
\t\t\tpadding-top: 10px
\t\t}

\t\t.help-page__item:first-child,
\t\t.help-page__item:nth-child(2),
\t\t.help-page__item:nth-child(3) {
\t\t\twidth: calc(100% / 3 - 10px)
\t\t}

\t\t.help-page__item:nth-child(2) .help-page__card {
\t\t\theight: unset
\t\t}

\t\t.help-page__card {
\t\t\tmargin-bottom: 0
\t\t}

\t\t.help-page__card:not(:last-child) {
\t\t\tmargin-bottom: 15px
\t\t}

\t\t.help-page__mobile-contacts {
\t\t\tdisplay: none
\t\t}

\t\t.help-categories h2 {
\t\t\tpadding: 25px 0 4px
\t\t}

\t\t@media screen and(max-width:640px) {

\t\t\t.help-page__item:first-child,
\t\t\t.help-page__item:nth-child(2),
\t\t\t.help-page__item:nth-child(3) {
\t\t\t\twidth: calc(50% - 8px)
\t\t\t}
\t\t}

\t\t@media screen and(max-width:460px) {

\t\t\t.help-page__item:first-child,
\t\t\t.help-page__item:nth-child(2),
\t\t\t.help-page__item:nth-child(3) {
\t\t\t\twidth: 100%
\t\t\t}
\t\t}

\t\t@media screen and(max-width:610px) {
\t\t\t.help-page__contact {
\t\t\t\tdisplay: none
\t\t\t}

\t\t\t.help-page__mobile-contacts {
\t\t\t\tmargin: 0 0 5px;
\t\t\t\tdisplay: block
\t\t\t}

\t\t\t.help-page__mobile-contacts .contacts-block {
\t\t\t\tmargin-top: 0
\t\t\t}
\t\t}
\t}

\t@media screen and(max-width:768px) {
\t\t.products-reviews__body-item-main-header {
\t\t\tflex-direction: column
\t\t}

\t\t.products-reviews__body-item-rating {
\t\t\tmargin: 10px 0
\t\t}

\t\t@media screen and(max-width:530px) {
\t\t\t.products-reviews__body-item-main-header-brief {
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.products-reviews__body-item-rating-brief {
\t\t\t\tmargin: 10px 0
\t\t\t}

\t\t\t.category-reviews__item-body {
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.category-reviews__product {
\t\t\t\tmargin: 0 auto
\t\t\t}

\t\t\t.category-reviews__review-container {
\t\t\t\tmargin: 20px 0 0
\t\t\t}

\t\t\t.review-create__header {
\t\t\t\tmargin: 0;
\t\t\t\tflex-direction: column
\t\t\t}

\t\t\t.review-create__header-text:last-child {
\t\t\t\tmargin: 10px 0 15px
\t\t\t}
\t\t}

\t\t@media screen and(max-width:320px) {

\t\t\t.btn-show-more_size_small,
\t\t\t.review-create__btn-submit,
\t\t\t.category-reviews__product {
\t\t\t\twidth: 100%
\t\t\t}
\t\t}
\t}

\t@media screen and(max-width:768px) {
\t\t.cooperation__card {
\t\t\twidth: calc(50% - 30px)
\t\t}

\t\t@media screen and(max-width:426px) {
\t\t\t.cooperation__card {
\t\t\t\twidth: 100%
\t\t\t}
\t\t}
\t}

\t@media screen and(max-width:768px) {
\t\t.cooperation-form__title {
\t\t\tfont-size: 20px
\t\t}

\t\t.cooperation-form__subtitle {
\t\t\tfont-size: 16px
\t\t}

\t\t.cooperation-steps-wrapper {
\t\t\tmargin-top: 50px;
\t\t\tmargin-bottom: 40px
\t\t}

\t\t.cooperation-steps {
\t\t\tpadding-left: 0
\t\t}

\t\t.cooperation-steps li {
\t\t\twidth: calc(100% / 3);
\t\t\tpadding: 0 10px;
\t\t\tfont-size: 12px
\t\t}

\t\t.cooperation-steps li:before {
\t\t\twidth: 50px;
\t\t\theight: 50px;
\t\t\tline-height: 40px;
\t\t\tfont-size: 18px
\t\t}

\t\t.cooperation-steps li:after {
\t\t\ttop: 23px;
\t\t\tmargin-left: 43px
\t\t}

\t\t.cooperation-fields__wrapper {
\t\t\twidth: 100%;
\t\t\tpadding: 0 15px
\t\t}

\t\t.cooperation-fields__label {
\t\t\twidth: unset;
\t\t\tpadding-left: 15px;
\t\t\tpadding-top: 0
\t\t}

\t\t@media screen and(max-width:736px) {
\t\t\t.cooperation-steps li:after {
\t\t\t\twidth: 65%
\t\t\t}
\t\t}

\t\t@media screen and(max-width:675px) {
\t\t\t.cooperation-steps li:after {
\t\t\t\twidth: 60%
\t\t\t}
\t\t}

\t\t@media screen and(max-width:618px) {
\t\t\t.cooperation-steps li:after {
\t\t\t\twidth: 55%
\t\t\t}
\t\t}

\t\t@media screen and(max-width:580px) {
\t\t\t.cooperation-form__banner {
\t\t\t\tdisplay: none
\t\t\t}
\t\t}

\t\t@media screen and(max-width:550px) {
\t\t\t.cooperation-steps li:after {
\t\t\t\twidth: 50%
\t\t\t}
\t\t}

\t\t@media screen and(max-width:480px) {
\t\t\t.cooperation-form__subtitle {
\t\t\t\tdisplay: none
\t\t\t}

\t\t\t.cooperation-steps li:after {
\t\t\t\twidth: 40%
\t\t\t}
\t\t}

\t\t@media screen and(max-width:410px) {
\t\t\t.cooperation-steps li:after {
\t\t\t\twidth: 33%
\t\t\t}
\t\t}

\t\t@media screen and(max-width:342px) {
\t\t\t.cooperation-steps li:after {
\t\t\t\twidth: 15%
\t\t\t}
\t\t}
\t}
\t:root {
\t\t--primary-color: #162538;
\t\t--primary-light-color: #EFA3A7;
\t\t--primary-lighter-color: #F7D1D3;
\t\t--primary-shadow-color: #EFA3A74C;
\t\t--button-background-color: #162538;
\t\t--button-background-accent-color: #C2171E;
\t\t--button-shadow-color: #B7161D7F;
\t\t--button-text-color: #FFFFFF;
\t\t--search-line-text-color: #080806;
\t\t--search-line-background-color: #F7F7F9;
\t\t--catalog-header-background-color: #162538;
\t\t--catalog-header-text-color: #FFFFFF;
\t\t--sale-ribbon-background-color: #CC0000;
\t\t--sale-ribbon-text-color: #FFFFFF;
\t\t--icon-background-color: #162538;
\t\t--icon-color: #FFFFFF;
\t\t--image-star-url: url('/thumbs/color/D71921/img/star.svg');
\t\t--image-check-url: url('/thumbs/color/D71921/img/check.svg');
\t\t--image-camera-url: url('/thumbs/color/FFFFFF/img/camera.svg');
\t\t--image-icons-url: url('/thumbs/color/D71921/img/icons.png');
\t\t--image-icons-big-url: url('/thumbs/color/D71921/img/icons-big.png');
\t}
</style>
 <script>var daDataToken = \"ef2b71af0b4325941ef6af7f9631a366a4c16640\";
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar comparisonProductsIds = [];
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar mapMarkUrl = \"\\/thumbs\\/color\\/D71921\\/img\\/delivery\\/mark.svg\";
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar inputmask_8b2a4bfb = { \"mask\": \"+7 (999) 999-99-99\" };</script>
";
        // line 2655
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 2656
            echo "\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 2656);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 2656);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 2656);
            echo "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2658
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 2659
            echo "\t <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2661
        echo " <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 2662
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 2663
            echo "\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 2663);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 2663);
            echo "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2665
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 2666
            echo "\t";
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2668
        echo " <script src=\"https://cdn.lordicon.com/lordicon.js\"></script></head><body itemtype=\"https://schema.org/WebPage\" itemscope>

<header class=\"page-header\">
\t<div class=\"wrapper\" id=\"accordion-menu\">
\t\t<nav class=\"mobile navbar m-navbar navbar-light\">
\t\t\t<div class=\"m-navbar__item\">
\t\t\t\t<button class=\"m-navbar-toggler-menu collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleMenu\" aria-controls=\"navbarToggleMenu\" aria-expanded=\"false\" aria-label=\"Каталог\">
\t\t\t\t\t<span class=\"navbar-toggler-icon m-navbar-toggler-menu-icon\"></span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"m-navbar__item m-navbar__logo\">
\t\t\t<div class=\"img-container\">
\t\t\t\t<div  id=\"logo\">
\t\t\t\t\t";
        // line 2681
        if (($context["logo"] ?? null)) {
            // line 2682
            echo "\t\t\t\t\t\t<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t";
        } else {
            // line 2684
            echo "\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<a href=\"";
            // line 2685
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a>
\t\t\t\t\t\t</h1>
\t\t\t\t\t";
        }
        // line 2688
        echo "\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"m-navbar__item m-navbar__menu\">
\t\t\t\t<ul class=\"mobile m-nav\">
\t\t\t\t\t<li class=\"m-nav__item\">
\t\t\t\t\t\t<a class=\"m-nav__link\" href=\"#navbarToggleContacts\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-label=\"Контакты\" role=\"button\" aria-controls=\"navbarToggleContacts\">
\t\t\t\t\t\t\t<img class=\"m-nav__link-icon2\" title=\"Контакты\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1884571839647b0bc95f444.svg\">";
        // line 2695
        echo ($context["text_contact"] ?? null);
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"m-nav__item\">
\t\t\t\t\t\t<a class=\"m-nav__link\" href=\"/cart\" aria-label=\"Перейти в корзину\">
\t\t\t\t\t\t\t<i class=\"fa fa-shopping-basket m-nav__link-icon\"></i>Корзина
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t\t<div class=\"mobile collapse m-collapse\" id=\"navbarToggleMenu\" data-parent=\"#accordion-menu\">
\t\t\t<div class=\"m-collapse__menu\">
\t\t\t\t<div class=\"site-info m-site-info\">
\t\t\t\t\t<div class=\"mobile site-info-block\">
\t\t\t\t\t\t<div class=\"site-info-images\">
\t\t\t\t\t\t\t<div class=\"site-info-brand\">
\t\t\t\t\t\t\t\t<img alt src=\"/thumbs/resize/160x100/uploads/settings/94522862364ae9206d391e.png\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t<div class=\"site-info-cert\">
\t\t\t\t\t\t\t\t<img alt src=\"/thumbs/resize/78x110/uploads/settings/16673753264b446664d827.jpg\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"site-info-description\">
\t\t\t\t\t\t\tСпециализированный сайт по продукции
\t\t\t\t\t\t\t<strong>Hikvision</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary m-menu-collapse__btn-show-catalog\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-label=\"Каталог товаров\" data-target=\"#navbarToggleCatalog\" aria-controls=\"navbarToggleCatalog\">
\t\t\t\t\t<img src alt class=\"lazyload m-menu-collapse__btn-show-catalog-image\" data-src=\"/thumbs/color/FFFFFF/img/catalog.png\"/>Каталог товаров
\t\t\t\t</button>
\t\t\t\t<ul class=\"mobile m-nav m-nav_vertical\">
\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/cart\" aria-label=\"Перейти в корзину\">
\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-basket m-nav__link-icon m-nav__link-icon_vertical\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Корзина</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/help\">
\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t<img class=\"m-nav__link-icon2 m-nav__link-icon_vertical\" title=\"Помощь\" alt src=\"/thumbs/color/D71921/uploads/pages/icons/1996334187647b0b5ccce04.svg\"/>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Помощь</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/warranty\">
\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t<img class=\"m-nav__link-icon2 m-nav__link-icon_vertical\" title=\"Гарантия\" alt src=\"/thumbs/color/D71921/uploads/pages/icons/1758731933647b0b820c703.svg\"/>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Гарантия</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/payment\">
\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t<img class=\"m-nav__link-icon2 m-nav__link-icon_vertical\" title=\"Оплата\" alt src=\"/thumbs/color/D71921/uploads/pages/icons/1180068136647b0b8de3de5.svg\"/>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Оплата</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/delivery\">
\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-truck m-nav__link-icon m-nav__link-icon_vertical\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Доставка</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/contacts\">
\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t<img class=\"m-nav__link-icon2 m-nav__link-icon_vertical\" title=\"Контакты\" alt src=\"/thumbs/color/D71921/uploads/pages/icons/1884571839647b0bc95f444.svg\"/>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Контакты</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"m-collapse__backdrop\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#navbarToggleMenu\" aria-controls=\"navbarToggleMenu\"></div>
\t\t</div>
\t\t<div class=\"mobile collapse m-collapse\" id=\"navbarToggleContacts\" data-parent=\"#accordion-menu\">
\t\t\t<div class=\"collapse-control-wrapper\">
\t\t\t\t<div class=\"collapse-control\">
\t\t\t\t\t<button class=\"collapse-control__button\" type=\"button\" data-toggle=\"collapse\" aria-label=\"Закрыть контакты\" aria-expanded=\"false\" data-target=\"#navbarToggleContacts\" aria-controls=\"navbarToggleContacts\">
\t\t\t\t\t\t<img src alt class=\"lazyload collapse-control__button-image\" data-src=\"/thumbs/color/080806/img/arrow_left.png\"/>
\t\t\t\t\t\t<span class=\"collapse-control__title\">Контакты</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"collapse-control__button collapse-control__button-close\" type=\"button\" data-toggle=\"collapse\" aria-label=\"Закрыть контакты\" aria-expanded=\"false\" data-target=\"#navbarToggleContacts\" aria-controls=\"navbarToggleContacts\">
\t\t\t\t\t\t<img src alt class=\"lazyload collapse-control__button-close-image\" data-src=\"/thumbs/color/080806/img/cross.png\"/>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"m-collapse__contacts\">
\t\t\t\t<div class=\"site-info m-site-info m-0\">
\t\t\t\t\t<div class=\"mobile site-info-block\">
\t\t\t\t\t\t<div class=\"site-info-images\">
\t\t\t\t\t\t\t<div class=\"site-info-brand\">
\t\t\t\t\t\t\t\t<img alt src=\"/thumbs/resize/160x100/uploads/settings/94522862364ae9206d391e.png\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t<div class=\"site-info-cert\">
\t\t\t\t\t\t\t\t<img alt src=\"/thumbs/resize/78x110/uploads/settings/16673753264b446664d827.jpg\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"site-info-description\">
\t\t\t\t\t\t\tСпециализированный сайт по продукции
\t\t\t\t\t\t\t<strong>Hikvision</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"mobile contacts-block\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"tel:++77769960070\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t\t\t+7 (776) 996-00-70
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-callback-link\">
\t\t\t\t\t\t\t<a class=\"callback-link\" data-toggle=\"modal\" data-target=\"#callback-dialog\">Заказать обратный звонок</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"mailto:info@Hikvision-Shop.ru\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\tinfo@Hikvision-Shop.ru
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link whatsapp-link\" href=\"https://wa.me/+79361323454\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-whatsapp\"></i>
\t\t\t\t\t\t\t\tWhatsApp: 8 (936) 132-34-54
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"https://t.me/wwwcsorgkz\" target=\"_blank\">
\t\t\t\t\t\t\t\t<img src=\"/thumbs/color/D71921/img/telegram.svg\" alt width=\"17\" height=\"17\"/>
\t\t\t\t\t\t\t\tTelegram: CompService.kz
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"m-collapse__backdrop\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#navbarToggleContacts\" aria-controls=\"navbarToggleContacts\"></div>
\t\t</div>
\t\t<div class=\"mobile collapse m-collapse\" id=\"navbarToggleCatalog\" data-parent=\"#accordion-menu\">
\t\t\t<div class=\"collapse-control-wrapper pb-0\">
\t\t\t\t<div class=\"collapse-control\">
\t\t\t\t\t<button class=\"collapse-control__button\" type=\"button\" data-toggle=\"collapse\" aria-label=\"Закрыть каталог\" aria-expanded=\"false\" data-target=\"#navbarToggleCatalog\" aria-controls=\"navbarToggleCatalog\">
\t\t\t\t\t\t<img src alt class=\"lazyload collapse-control__button-image\" data-src=\"/thumbs/color/080806/img/arrow_left.png\"/>
\t\t\t\t\t\t<span class=\"collapse-control__title\">Каталог товаров</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"collapse-control__button collapse-control__button-close\" type=\"button\" data-toggle=\"collapse\" aria-label=\"Закрыть каталог\" aria-expanded=\"false\" data-target=\"#navbarToggleCatalog\" aria-controls=\"navbarToggleCatalog\">
\t\t\t\t\t\t<img src alt class=\"lazyload collapse-control__button-close-image\" data-src=\"/thumbs/color/080806/img/cross.png\"/>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"search-line\">
\t\t\t\t<form class=\"search_form\" role=\"search\" method=\"get\" action=\"/search\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input class=\"form-control search-line__input\" type=\"search\" name=\"q\" value autocomplete=\"off\" placeholder=\"Поиск среди тысяч товаров\"/>
\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary search-btn\" type=\"submit\" aria-label=\"Найти на сайте\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"search-line__dropdown-content\"></div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t";
        // line 2867
        echo ($context["mabile"] ?? null);
        echo "
\t\t\t</div>
\t\t\t<div class=\"m-collapse__backdrop\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#navbarToggleCatalog\" aria-controls=\"navbarToggleCatalog\"></div>
\t\t</div>
\t\t<nav class=\"desktop page-menu\">
\t\t\t<ul class=\"nav\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/help\">
\t\t\t\t\t\t<img class=\"nav-item__icon\" title=\"Помощь\" alt src=\"./catalog/view/theme/shop/assets/img/help.svg\">
\t\t\t\t\t\t<img class=\"nav-item__icon-hover\" title=\"Помощь\" alt src=\"./catalog/view/theme/shop/assets/img/help.svg\"/>
\t\t\t\t\t\tПомощь
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/warranty\">
\t\t\t\t\t\t<img class=\"nav-item__icon\" title=\"Гарантия\" alt src=\"./catalog/view/theme/shop/assets/img/shield-fill-check.svg\"/>
\t\t\t\t\t\t<img class=\"nav-item__icon-hover\" title=\"Гарантия\" alt src=\"./catalog/view/theme/shop/assets/img/shield-fill-check.svg\"/>
\t\t\t\t\t\tГарантия
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/payment\">
\t\t\t\t\t\t<img class=\"nav-item__icon\" title=\"Оплата\" alt src=\"./catalog/view/theme/shop/assets/img/payment.svg\"/>
\t\t\t\t\t\t<img class=\"nav-item__icon-hover\" title=\"Оплата\" alt src=\"./catalog/view/theme/shop/assets/img/payment.svg\"/>
\t\t\t\t\t\tОплата
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/delivery\">
\t\t\t\t\t\t<img src=\"catalog/view/theme/shop/assets/img/truck.svg\" alt=\"truck\">
\t\t\t\t\t\tДоставка
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 2901
        echo ($context["contact"] ?? null);
        echo "\">
\t\t\t\t\t\t<img class=\"nav-item__icon\" title=\"Контакты\" alt src=\"catalog/view/theme/shop/assets/img/person-rolodex.svg\"/>
\t\t\t\t\t\t<img class=\"nav-item__icon-hover\" title=\"Контакты\" alt src=\"catalog/view/theme/shop/assets/img/person-rolodex.svg\"/>
\t\t\t\t\t\tКонтакты
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t\t<dialog id=\"login-dialog\" class=\"modal-custom\">
\t\t\t<button class=\"dialog-close-btn\" data-dismiss=\"modal\" type=\"button\">
\t\t\t\t<img src=\"/img/cross.svg\" alt/>
\t\t\t</button>
\t\t\t<div class=\"dialog-title\">Вход</div>
\t\t\t<div class=\"dialog-sub-title\">Если у Вас есть зарегистрированный акаунт,<br>
\t\t\t\tпожалуйста авторизуйтесь</div>
\t\t\t<form id=\"w0\" action=\"/login\" method=\"post\">
\t\t\t\t<input type=\"hidden\" name=\"_csrf-frontend\" value=\"QtTH-MugPfCnhTjWUh3rc014TQe5405TuNZJeN55Z4on4bS8g_N-m9HhSbcYcYo9GxYhQoiHICn8sAIs7SYqvQ==\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-loginformmodal-email required\">
\t\t\t\t\t\t<label class=\"required-label\" for=\"loginformmodal-email\">Электронная почта или
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tконтактный телефон</label>
\t\t\t\t\t\t<input type=\"text\" id=\"loginformmodal-email\" class=\"form-control\" name=\"LoginFormModal[email]\" aria-required=\"true\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-loginformmodal-password required\">
\t\t\t\t\t\t<label class=\"required-label\" for=\"loginformmodal-password\">Пароль</label>
\t\t\t\t\t\t<input type=\"password\" id=\"loginformmodal-password\" class=\"form-control\" name=\"LoginFormModal[password]\" aria-required=\"true\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-loginformmodal-captcha\"><input type=\"hidden\" id=\"loginformmodal-captcha\" class=\"form-control\" name=\"LoginFormModal[captcha]\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Войти</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<a class=\"btn btn-default btn-block\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#password-recovery-dialog\">Забыли
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tпароль?</a>
\t\t\t\t</div>
\t\t\t</form>
\t\t</dialog>
\t\t<dialog id=\"password-recovery-dialog\" class=\"modal-custom\">
\t\t\t<button class=\"dialog-close-btn\" data-dismiss=\"modal\" type=\"button\">
\t\t\t\t<img src=\"/img/cross.svg\" alt/>
\t\t\t</button>
\t\t\t<div class=\"dialog-title\">Восстановление пароля</div>
\t\t\t<div class=\"dialog-sub-title\">Ссылка на страницу изменения пароля будет
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tотправлена на адрес Вашей электронной
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tпочты.</div>
\t\t\t<form id=\"w1\" class=\"required-asterisk\" action=\"/request-password-reset\" method=\"post\">
\t\t\t\t<input type=\"hidden\" name=\"_csrf-frontend\" value=\"QtTH-MugPfCnhTjWUh3rc014TQe5405TuNZJeN55Z4on4bS8g_N-m9HhSbcYcYo9GxYhQoiHICn8sAIs7SYqvQ==\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-passwordresetrequestform-email required\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"passwordresetrequestform-email\">Электронная
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tпочта</label>
\t\t\t\t\t\t<input type=\"text\" id=\"passwordresetrequestform-email\" class=\"form-control\" name=\"PasswordResetRequestForm[email]\" aria-required=\"true\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Отправить</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<a class=\"btn btn-default btn-block\" data-toggle=\"modal\" data-target=\"#login-dialog\" data-dismiss=\"modal\">Вернуться на форму
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tавторизации</a>
\t\t\t\t</div>
\t\t\t</form>
\t\t</dialog>
\t</div>
\t<hr>
\t<div class=\"container\">
\t\t<div class=\"desktop shop-info\">
\t\t\t<div style=\"max-width: 314px; width: 700px;\" id=\"logo\">
\t\t\t\t<div class=\"img-container\">
\t\t\t\t\t";
        // line 2980
        if (($context["logo"] ?? null)) {
            // line 2981
            echo "\t\t\t\t\t\t<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive-logo\"/></a>
\t\t\t\t\t";
        } else {
            // line 2983
            echo "\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<a href=\"";
            // line 2984
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a>
\t\t\t\t\t\t</h1>
\t\t\t\t\t";
        }
        // line 2987
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<ul style=\"width:282.8px;\" class=\"contacts-block contacts-blocks\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"tel:+7 (776) 996-00-70\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-telephone-fill\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t+7 (776) 996-00-70
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"callback-link\" data-toggle=\"modal\" data-target=\"#callback-dialog\">Заказать обратный звонок</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link nav-link__email\" href=\"mailto:emirabylgaziev3@gmail.com\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-envelope-fill\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t<path d=\"M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span>emirabylgaziev3@gmail.com</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"online-block\">
\t\t\t\t<li class=\"nav-item\"></li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link whatsapp-link\" href=\"https://wa.me/+77769960070\" target=\"_blank\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-whatsapp\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t<path d=\"M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tWhatsApp: +7 (776) 996-00-70
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"https://t.me/wwwcsorgkz\" target=\"_blank\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-telegram\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t<path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tTelegram: ShopMSK1
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"cart-widget\">
\t\t\t\t<div class=\"cart-widget-header\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"41\" height=\"36\" fill=\"currentColor\" class=\"bi bi-basket-fill\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t<path d=\"M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z\"/>
\t\t\t\t\t</svg>
\t\t\t\t\t<div class=\"cart-widget-column\">
\t\t\t\t\t\t<div class=\"cart-widget-row\">
\t\t\t\t\t\t\t<span class=\"cart-widget-title\">";
        // line 3036
        echo ($context["cart"] ?? null);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<a href=\"";
        // line 3040
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\" class=\"btn btn-primary cart-btn\">";
        echo ($context["text_checkout"] ?? null);
        echo "</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"search-line\">
\t\t<form class=\"search_form\" role=\"search\" method=\"get\" action=\"index.php\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<input class=\"form-control search-line__input\" type=\"search\" name=\"route\" value autocomplete=\"off\" placeholder=\"Поиск среди тысяч товаров\"/>
\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t<button class=\"btn btn-primary search-btn\" type=\"product/search\" aria-label=\"Найти на сайте\">
\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"search-line__dropdown-content\"></div>
\t\t\t</div>
\t\t</form>
\t</div>
</body></body></html></header><div class=\"container\"><div class=\"row\"><aside class=\"desktop sidebar\">
<style>
\t.category-popup-sub-menu {
\t\tposition: absolute;
\t\tright: -1029px;
\t\twidth: 1029px;
\t\tz-index: 999;
\t\tdisplay: none;
\t\tbackground-color: whitesmoke;
\t\tborder: 2px solid rgb(235, 235, 232);
\t}

\t.category-popup-sub-menu_main {
\t\ttop: -7px;
\t}

\t.category-popup-sub-menu_sub {
\t\tmargin-top: -24px;
\t}

\t.category-popup-sub-menu a {
\t\tcolor: #3d4c4d;
\t\tfont-weight: 700;
\t\tfont-size: 14px;
\t}

\t.category-popup-sub-menu__inner {
\t\tflex-wrap: wrap;
\t\tdisplay: flex;
\t\tpadding: 10px;
\t}

\t.subcategory-li:hover>.category-popup-sub-menu,
\t.category-item__inner:hover > .category-popup-sub-menu {
\t\tdisplay: block;
\t}

\t.category-popup-sub-menu__link-wrapper {
\t\tmargin-bottom: 5px;
\t\tmargin-right: 10px;
\t\tmargin-left: 10px;
\t\tborder-bottom: 1px solid rgb(235, 235, 232);
\t}

\t.category-popup-sub-menu__item {
\t\twidth: 20%;
\t}

\t.category-menu .category-menu-nav .subcategory .subcategory-link {
\t\tpadding: 3px 5px;
\t\twidth: 100%;
\t\tdisplay: block;
\t}
</style>
<div class=\"category-menu\">
\t";
        // line 3112
        echo ($context["menu"] ?? null);
        echo "
</div>
<div class=\"statuses-widget\">
\t<span class=\"statuses-widget-title\">Наши статусы</span>
\t<div class=\"statuses-widget-item\">
\t\t<a href=\"/uploads/settings/16673753264b446664d827.jpg\" target=\"_blank\" aria-label=\"Показать наш статус\">
\t\t\t<img src alt class=\"lazyload\" data-src=\"/thumbs/resize/78x110/uploads/settings/16673753264b446664d827.jpg\"/>
\t\t</a>
\t</div>
</div></aside>
";
    }

    public function getTemplateName()
    {
        return "kg/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3337 => 3112,  3258 => 3040,  3251 => 3036,  3200 => 2987,  3192 => 2984,  3189 => 2983,  3177 => 2981,  3175 => 2980,  3093 => 2901,  3056 => 2867,  2881 => 2695,  2872 => 2688,  2864 => 2685,  2861 => 2684,  2849 => 2682,  2847 => 2681,  2832 => 2668,  2823 => 2666,  2819 => 2665,  2808 => 2663,  2804 => 2662,  2801 => 2661,  2792 => 2659,  2788 => 2658,  2775 => 2656,  2771 => 2655,  154 => 40,  145 => 38,  140 => 37,  129 => 35,  125 => 34,  122 => 33,  113 => 31,  108 => 30,  95 => 28,  91 => 27,  87 => 25,  84 => 23,  79 => 19,  75 => 15,  69 => 13,  66 => 12,  60 => 10,  58 => 9,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kg/template/common/header.twig", "");
    }
}
