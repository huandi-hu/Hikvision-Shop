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
class __TwigTemplate_3a1561bba3489eae3291f09c82f8f283ae835ad7d7e00ec4de7daa7ec7862f8c extends Template
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
<html class=\"no-js\" lang=\"ru-RU\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>";
        // line 6
        echo ($context["title"] ?? null);
        echo "</title>
\t\t<base href=\"";
        // line 7
        echo ($context["base"] ?? null);
        echo "\"/>
\t\t";
        // line 8
        if (($context["description"] ?? null)) {
            // line 9
            echo "\t\t\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 11
        echo "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 12
            echo "\t\t\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 14
        echo "

\t\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/thumbs/resize/180x180/uploads/settings/76851488864ae9206d3a20.png\">
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/thumbs/resize/32x32/uploads/settings/76851488864ae9206d3a20.png\">
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/thumbs/resize/16x16/uploads/settings/76851488864ae9206d3a20.png\">
\t\t<link rel=\"shortcut icon\" href=\"/favicon.ico?v=1407429662\">
\t\t<link rel=\"manifest\" href=\"./catalog/view/theme/kg/assas/resources/manifest.json\">

\t\t<link rel=\"stylesheet\" href=\"\">


\t\t<link href=\"https://www.hikvision-shop.ru/\" rel=\"canonical\">
\t\t<link href=\"./catalog/view/theme/kg/assas/css/variables.css\" rel=\"stylesheet\">
\t\t<link href=\"./catalog/view/theme/kg/assas/resources/style_1.css\" rel=\"stylesheet\">
\t\t<link href=\"./catalog/view/theme/kg/assas/resources/style._2.css\" rel=\"stylesheet\">

\t\t<style>
\t\t\t@media screen and(min-width: 769px) {
\t\t\t\t.mobile {
\t\t\t\t\tdisplay: none;
\t\t\t\t}
\t\t\t}
\t\t</style>
\t\t <script>
\t\t\t\t\t\t\t\t     var daDataToken = \"ef2b71af0b4325941ef6af7f9631a366a4c16640\";var comparisonProductsIds = [];var mapMarkUrl = \"\\/thumbs\\/color\\/D71921\\/img\\/delivery\\/mark.svg\";var inputmask_8b2a4bfb = { \"mask\": \"+7 (776) 996-00-70\" };</script>

\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 41
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 41);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 41);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 41);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 44
            echo "\t\t\t <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 48
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 48);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 48);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 51
            echo "\t\t\t";
            echo $context["analytic"];
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t</head>

\t<body itemtype=\"https://schema.org/WebPage\" itemscope>
\t\t<div id=\"loader-overlay\" class=\"loader-overlay\">
\t\t\t<div class=\"loader\"></div>
\t\t</div>
\t\t<header
\t\t\tclass=\"page-header\">
\t\t\t";
        // line 403
        echo "
\t\t\t<div class=\"wrapper\" id=\"accordion-menu\">
\t\t\t\t<nav class=\"mobile navbar m-navbar navbar-light\">
\t\t\t\t\t<div class=\"m-navbar__item\">
\t\t\t\t\t\t<button class=\"m-navbar-toggler-menu\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleMenu\" aria-controls=\"navbarToggleMenu\" aria-expanded=\"false\" aria-label=\"Каталог\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon m-navbar-toggler-menu-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"m-navbar__item m-navbar__logo\">
\t\t\t\t\t\t<a href=\"/\" class=\"logo m-logo\" aria-label=\"Перейти на главную страницу сайта\">
\t\t\t\t\t\t\t<img class=\"m-logo__image\" title=\"Логотип\" alt=\"\" src=\"/thumbs/resize/170x20/uploads/settings/66017880964ae9206d36ce.png\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"m-navbar__item m-navbar__menu\">
\t\t\t\t\t\t<ul class=\"mobile m-nav\">
\t\t\t\t\t\t\t<li class=\"m-nav__item\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link\" href=\"#navbarToggleContacts\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-label=\"Контакты\" role=\"button\" aria-controls=\"navbarToggleContacts\">
\t\t\t\t\t\t\t\t\t<img class=\"m-nav__link-icon2\" title=\"Контакты\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1884571839647b0bc95f444.svg\">Контакты
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-nav__item\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link\" href=\"/login\" data-toggle=\"modal\" data-target=\"#login-dialog\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user m-nav__link-icon\"></i>Войти
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-nav__item\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link\" href=\"/cart\" aria-label=\"Перейти в корзину\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-basket m-nav__link-icon\"></i>Корзина
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t\t<div class=\"mobile collapse m-collapse\" id=\"navbarToggleMenu\" data-parent=\"#accordion-menu\">
\t\t\t\t\t<div class=\"m-collapse__menu\">
\t\t\t\t\t\t<div class=\"site-info m-site-info\">
\t\t\t\t\t\t\t<div class=\"mobile site-info-block\">
\t\t\t\t\t\t\t\t<div class=\"site-info-images\">
\t\t\t\t\t\t\t\t\t<div class=\"site-info-brand\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"/thumbs/resize/160x100/uploads/settings/94522862364ae9206d391e.png\"></div><hr><div class=\"site-info-cert\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"/thumbs/resize/78x110/uploads/settings/16673753264b446664d827.jpg\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"site-info-description\">
\t\t\t\t\t\t\t\t\tСпециализированный сайт по продукции
\t\t\t\t\t\t\t\t\t<strong>Hikvision</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary m-menu-collapse__btn-show-catalog\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-label=\"Каталог товаров\" data-target=\"#navbarToggleCatalog\" aria-controls=\"navbarToggleCatalog\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"\" class=\"lazyload m-menu-collapse__btn-show-catalog-image\" data-src=\"/thumbs/color/FFFFFF/img/catalog.png\">Каталог товаров
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"mobile m-nav m-nav_vertical\">
\t\t\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/cart\" aria-label=\"Перейти в корзину\">
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-basket m-nav__link-icon m-nav__link-icon_vertical\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Корзина</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/help\">
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t\t\t<img class=\"m-nav__link-icon2 m-nav__link-icon_vertical\" title=\"Помощь\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1996334187647b0b5ccce04.svg\">
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Помощь</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/warranty\">
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t\t\t<img class=\"m-nav__link-icon2 m-nav__link-icon_vertical\" title=\"Гарантия\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1758731933647b0b820c703.svg\">
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Гарантия</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/payment\">
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t\t\t<img class=\"m-nav__link-icon2 m-nav__link-icon_vertical\" title=\"Оплата\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1180068136647b0b8de3de5.svg\">
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Оплата</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/delivery\">
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-truck m-nav__link-icon m-nav__link-icon_vertical\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Доставка</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/contacts\">
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t\t\t<img class=\"m-nav__link-icon2 m-nav__link-icon_vertical\" title=\"Контакты\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1884571839647b0bc95f444.svg\">
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Контакты</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/products/viewed\" aria-label=\"Перейти в просмотренные товары\">
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye m-nav__link-icon m-nav__link-icon_vertical\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Просмотрено</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/login\" data-toggle=\"modal\" data-target=\"#login-dialog\">
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user m-nav__link-icon m-nav__link-icon_vertical\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Войти</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"m-collapse__backdrop\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#navbarToggleMenu\" aria-controls=\"navbarToggleMenu\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mobile collapse m-collapse\" id=\"navbarToggleContacts\" data-parent=\"#accordion-menu\">
\t\t\t\t\t<div class=\"collapse-control-wrapper\">
\t\t\t\t\t\t<div class=\"collapse-control\">
\t\t\t\t\t\t\t<button class=\"collapse-control__button\" type=\"button\" data-toggle=\"collapse\" aria-label=\"Закрыть контакты\" aria-expanded=\"false\" data-target=\"#navbarToggleContacts\" aria-controls=\"navbarToggleContacts\">
\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\" class=\"lazyload collapse-control__button-image\" data-src=\"/thumbs/color/080806/img/arrow_left.png\">
\t\t\t\t\t\t\t\t<span class=\"collapse-control__title\">Контакты</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button class=\"collapse-control__button collapse-control__button-close\" type=\"button\" data-toggle=\"collapse\" aria-label=\"Закрыть контакты\" aria-expanded=\"false\" data-target=\"#navbarToggleContacts\" aria-controls=\"navbarToggleContacts\">
\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\" class=\"lazyload collapse-control__button-close-image\" data-src=\"/thumbs/color/080806/img/cross.png\">
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"m-collapse__contacts\">
\t\t\t\t\t\t<div class=\"site-info m-site-info m-0\">
\t\t\t\t\t\t\t<div class=\"mobile site-info-block\">
\t\t\t\t\t\t\t\t<div class=\"site-info-images\">
\t\t\t\t\t\t\t\t\t<div class=\"site-info-brand\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"/thumbs/resize/160x100/uploads/settings/94522862364ae9206d391e.png\"></div><hr><div class=\"site-info-cert\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"/thumbs/resize/78x110/uploads/settings/16673753264b446664d827.jpg\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"site-info-description\">
\t\t\t\t\t\t\t\t\tСпециализированный сайт по продукции
\t\t\t\t\t\t\t\t\t<strong>Hikvision</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"mobile contacts-block\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"tel:+74954324141\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t\t\t\t\t+7 (495) 432-41-41
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-callback-link\">
\t\t\t\t\t\t\t\t\t<a class=\"callback-link\" data-toggle=\"modal\" data-target=\"#callback-dialog\">Заказать обратный звонок</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"mailto:info@Hikvision-Shop.ru\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\tinfo@Hikvision-Shop.ru
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link whatsapp-link\" href=\"https://wa.me/+79361323454\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-whatsapp\"></i>
\t\t\t\t\t\t\t\t\t\tWhatsApp: 8 (936) 132-34-54
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"https://t.me/ShopMSK1\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/thumbs/color/D71921/img/telegram.svg\" alt=\"\" width=\"17\" height=\"17\">
\t\t\t\t\t\t\t\t\t\tTelegram: ShopMSK1
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"m-collapse__backdrop\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#navbarToggleContacts\" aria-controls=\"navbarToggleContacts\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mobile collapse m-collapse\" id=\"navbarToggleCatalog\" data-parent=\"#accordion-menu\">
\t\t\t\t\t<div class=\"collapse-control-wrapper pb-0\">
\t\t\t\t\t\t<div class=\"collapse-control\">
\t\t\t\t\t\t\t<button class=\"collapse-control__button\" type=\"button\" data-toggle=\"collapse\" aria-label=\"Закрыть каталог\" aria-expanded=\"false\" data-target=\"#navbarToggleCatalog\" aria-controls=\"navbarToggleCatalog\">
\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\" class=\"lazyload collapse-control__button-image\" data-src=\"/thumbs/color/080806/img/arrow_left.png\">
\t\t\t\t\t\t\t\t<span class=\"collapse-control__title\">Каталог товаров</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button class=\"collapse-control__button collapse-control__button-close\" type=\"button\" data-toggle=\"collapse\" aria-label=\"Закрыть каталог\" aria-expanded=\"false\" data-target=\"#navbarToggleCatalog\" aria-controls=\"navbarToggleCatalog\">
\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\" class=\"lazyload collapse-control__button-close-image\" data-src=\"/thumbs/color/080806/img/cross.png\">
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"search-line\">
\t\t\t\t\t\t<form class=\"search_form\" role=\"search\" method=\"get\" action=\"/search\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input class=\"form-control search-line__input\" type=\"search\" name=\"q\" value=\"\" autocomplete=\"off\" placeholder=\"Поиск среди тысяч товаров\"><div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary search-btn\" type=\"submit\" aria-label=\"Найти на сайте\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"search-line__dropdown-content\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"m-collapse__catalog\">
\t\t\t\t\t\t<ul class=\"mobile m-category-menu\">
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/kamerivideonablyudeniya/27\">Камеры</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/videodomofoni/43\">Видеодомофоны</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/videoregistratori/7\">Видеорегистраторы</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/vizivnie_paneli/44\">Вызывные панели</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/datchiki/34\">Датчики</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/domofoni/19\">Домофоны</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/zamki/26\">Замки</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/bloki_pitaniya/45\">Блоки питания</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/izveshchateli/37\">Извещатели</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/kabel/24\">Кабель</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/klaviaturi_upravleniya/51\">Клавиатуры
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tуправления</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/koguh/52\">Кожух</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/kommutatori/17\">Коммутаторы</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/kontrolleri/47\">Контроллеры</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/kontrolnie_paneli/30\">Контрольные панели</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/kronshteyni/12\">Кронштейны</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/monitori/18\">Мониторы</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/obektivi/20\">Объективы</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/opticheskie_moduli/28\">Оптические модули</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/pulti_upravleniya/10\">Пульты управления</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/rasshiriteli_shini/31\">Расширители шины</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/servera/16\">Сервера</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/sireni/33\">Сирены</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/schitivateli/25\">Считыватели
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/terminali/49\">Терминалы</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/trevognie_knopki/39\">Тревожные кнопки</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/udliniteli_poe/29\">Удлинители poe</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/teplovizor/53\">Тепловизор</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/ups-produkty/235\">UPS
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tпродукты</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/ip-spikerfon/236\">IP
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tспикерфон</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/komplektuusie/237\">Комплектующие</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/po/238\">ПО</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/turnikety/239\">Турникеты</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/metallodetektory/240\">Металлодетекторы</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-category-menu__item\">
\t\t\t\t\t\t\t\t<a class=\"m-category-menu__link\" href=\"/category/slagbaumy/241\">Шлагбаумы</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"m-collapse__backdrop\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#navbarToggleCatalog\" aria-controls=\"navbarToggleCatalog\"></div>
\t\t\t\t</div>
\t\t\t\t<nav class=\"desktop page-menu\">
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/help\">
\t\t\t\t\t\t\t\t<img class=\"nav-item__icon\" title=\"Помощь\" alt=\"\" src=\"/thumbs/color/B3B3B3/uploads/pages/icons/1996334187647b0b5ccce04.svg\">
\t\t\t\t\t\t\t\t<img class=\"nav-item__icon-hover\" title=\"Помощь\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1996334187647b0b5ccce04.svg\">
\t\t\t\t\t\t\t\tПомощь
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/warranty\">
\t\t\t\t\t\t\t\t<img class=\"nav-item__icon\" title=\"Гарантия\" alt=\"\" src=\"/thumbs/color/B3B3B3/uploads/pages/icons/1758731933647b0b820c703.svg\">
\t\t\t\t\t\t\t\t<img class=\"nav-item__icon-hover\" title=\"Гарантия\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1758731933647b0b820c703.svg\">
\t\t\t\t\t\t\t\tГарантия
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/payment\">
\t\t\t\t\t\t\t\t<img class=\"nav-item__icon\" title=\"Оплата\" alt=\"\" src=\"/thumbs/color/B3B3B3/uploads/pages/icons/1180068136647b0b8de3de5.svg\">
\t\t\t\t\t\t\t\t<img class=\"nav-item__icon-hover\" title=\"Оплата\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1180068136647b0b8de3de5.svg\">
\t\t\t\t\t\t\t\tОплата
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/delivery\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-truck\"></i>
\t\t\t\t\t\t\t\tДоставка
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/contacts\">
\t\t\t\t\t\t\t\t<img class=\"nav-item__icon\" title=\"Контакты\" alt=\"\" src=\"/thumbs/color/B3B3B3/uploads/pages/icons/1884571839647b0bc95f444.svg\">
\t\t\t\t\t\t\t\t<img class=\"nav-item__icon-hover\" title=\"Контакты\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1884571839647b0bc95f444.svg\">
\t\t\t\t\t\t\t\tКонтакты
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\">
\t\t\t\t\t\t\t\t<img src=\"/thumbs/color/B3B3B3/img/time.svg\" class=\"nav-item__icon\" title=\"Часы работы\" alt=\"\">
\t\t\t\t\t\t\t\t<img src=\"/thumbs/color/D71921/img/time.svg\" class=\"nav-item__icon-hover\" title=\"Часы работы\" alt=\"\">
\t\t\t\t\t\t\t\t10.00 - 18.00
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<ul class=\"desktop user-menu\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/login\" data-toggle=\"modal\" data-target=\"#login-dialog\">
\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t<span>Вход</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/signup\">
\t\t\t\t\t\t\t<span>Регистрация</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<dialog id=\"login-dialog\" class=\"modal-custom\">
\t\t\t\t\t<button class=\"dialog-close-btn\" data-dismiss=\"modal\" type=\"button\">
\t\t\t\t\t\t<img src=\"/img/cross.svg\" alt=\"\">
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"dialog-title\">Вход</div>
\t\t\t\t\t<div class=\"dialog-sub-title\">Если у Вас есть зарегистрированный акаунт,<br>
\t\t\t\t\t\tпожалуйста авторизуйтесь</div>
\t\t\t\t\t<form id=\"w0\" action=\"/login\" method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf-frontend\" value=\"05q_4IqQbI-Yklbv-BgthcESQQvEQOdCb8IoSOv2y_2no8-B6P4VwM2gbp6VIR3AkGh5RYlzqXoJ924Mgb_7hw==\"><div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"form-group field-loginformmodal-email required\">
\t\t\t\t\t\t\t\t<label class=\"required-label\" for=\"loginformmodal-email\">Электронная
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tпочта или контактный телефон</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"loginformmodal-email\" class=\"form-control\" name=\"LoginFormModal[email]\" aria-required=\"true\"><div class=\"help-block\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"form-group field-loginformmodal-password required\">
\t\t\t\t\t\t\t\t<label class=\"required-label\" for=\"loginformmodal-password\">Пароль</label>
\t\t\t\t\t\t\t\t<input type=\"password\" id=\"loginformmodal-password\" class=\"form-control\" name=\"LoginFormModal[password]\" aria-required=\"true\"><div class=\"help-block\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"form-group field-loginformmodal-captcha\"><input type=\"hidden\" id=\"loginformmodal-captcha\" class=\"form-control\" name=\"LoginFormModal[captcha]\" value=\"HFcG9rYxZPZQQ9Q2deXkVPXwA_cBU1SypuMi8pKg4OLhgaKiw-ckooIDpnKDVLM20AMQhFFBwYWVpVZngHXTItBDkqQWxYBjRvEjMjJW1OMz8-Qy0oV0FuQ1hxLl1hd1R8f0hueWArUjpbJioxAQlG\"><div class=\"help-block\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Войти</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#password-recovery-dialog\">Забыли
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tпароль?</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</dialog>
\t\t\t\t<dialog id=\"password-recovery-dialog\" class=\"modal-custom\">
\t\t\t\t\t<button class=\"dialog-close-btn\" data-dismiss=\"modal\" type=\"button\">
\t\t\t\t\t\t<img src=\"/img/cross.svg\" alt=\"\">
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"dialog-title\">Восстановление пароля</div>
\t\t\t\t\t<div class=\"dialog-sub-title\">Ссылка на страницу изменения пароля будет
\t\t\t\t\t\t\t\t\t\t\t\tотправлена на адрес Вашей электронной
\t\t\t\t\t\t\t\t\t\t\t\tпочты.</div>
\t\t\t\t\t<form id=\"w1\" class=\"required-asterisk\" action=\"/request-password-reset\" method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf-frontend\" value=\"05q_4IqQbI-Yklbv-BgthcESQQvEQOdCb8IoSOv2y_2no8-B6P4VwM2gbp6VIR3AkGh5RYlzqXoJ924Mgb_7hw==\"><div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"form-group field-passwordresetrequestform-email required\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"passwordresetrequestform-email\">Электронная почта</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"passwordresetrequestform-email\" class=\"form-control\" name=\"PasswordResetRequestForm[email]\" aria-required=\"true\"><div class=\"help-block\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Отправить</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block\" data-toggle=\"modal\" data-target=\"#login-dialog\" data-dismiss=\"modal\">Вернуться на форму
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tавторизации</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</dialog>
\t\t\t</div>


\t\t\t<hr/>
\t\t\t<div class=\"desktop shop-info\">
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t";
        // line 843
        if (($context["logo"] ?? null)) {
            // line 844
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t\t";
        } else {
            // line 846
            echo "\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 847
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t";
        }
        // line 850
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<ul class=\"contacts-block\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"tel:+77769960070\">
\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t\t+7 (776) 996-00-70
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"callback-link\" data-toggle=\"modal\" data-target=\"#callback-dialog\">Заказать обратный
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        звонок</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link nav-link__email\" href=\"mailto:info@Hikvision-Shop.ru\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t<span>info@Hikvision-Shop.ru</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"online-block\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link skype-link\" href=\"skype:help-shop\">
\t\t\t\t\t\t\t<i class=\"fa fa-skype\"></i>
\t\t\t\t\t\t\t<span>Звонок онлайн</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link whatsapp-link\" href=\"https://wa.me/+79361323454\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fa fa-whatsapp\"></i>
\t\t\t\t\t\t\tWhatsApp: 8 (936) 132-34-54
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"https://t.me/ShopMSK1\" target=\"_blank\">
\t\t\t\t\t\t\t<img src=\"/thumbs/color/D71921/img/telegram.svg\" alt=\"\" width=\"17\" height=\"17\"/>
\t\t\t\t\t\t\tTelegram: ShopMSK1
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"cart-widget\">
\t\t\t\t\t<div class=\"cart-widget-header\">
\t\t\t\t\t\t<a class=\"cart-icon-link\" href=\"/cart\" aria-label=\"Перейти в корзину\">
\t\t\t\t\t\t\t<i class=\"fa fa-shopping-basket\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"cart-widget-column\">
\t\t\t\t\t\t\t<div class=\"cart-widget-row\">
\t\t\t\t\t\t\t\t<span class=\"cart-widget-title\">Товаров:</span>
\t\t\t\t\t\t\t\t<span class=\"cart-widget-value\">0</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cart-widget-row\">
\t\t\t\t\t\t\t\t<span class=\"cart-widget-title\">Сумма:</span>
\t\t\t\t\t\t\t\t<span class=\"cart-widget-value\" id=\"cart-total-sum\">0,00 ₽</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"/cart\" class=\"btn btn-primary cart-btn\">Оформить заказ</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"search-line\">
\t\t\t\t<form class=\"search_form\" role=\"search\" method=\"get\" action=\"/search\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input class=\"form-control search-line__input\" type=\"search\" name=\"q\" value=\"\" autocomplete=\"off\" placeholder=\"Поиск среди тысяч товаров\"/>
\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary search-btn\" type=\"submit\" aria-label=\"Найти на сайте\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"search-line__dropdown-content\"></div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</header>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<aside class=\"desktop sidebar\">
\t\t\t\t\t<style>
\t\t\t\t\t\t.category-popup-sub-menu {
\t\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\t\tright: -1029px;
\t\t\t\t\t\t\twidth: 1029px;
\t\t\t\t\t\t\tz-index: 999;
\t\t\t\t\t\t\tdisplay: none;
\t\t\t\t\t\t\tbackground-color: whitesmoke;
\t\t\t\t\t\t\tborder: 2px solid rgb(235, 235, 232);
\t\t\t\t\t\t}

\t\t\t\t\t\t.category-popup-sub-menu_main {
\t\t\t\t\t\t\ttop: -7px;
\t\t\t\t\t\t}

\t\t\t\t\t\t.category-popup-sub-menu_sub {
\t\t\t\t\t\t\tmargin-top: -24px;
\t\t\t\t\t\t}

\t\t\t\t\t\t.category-popup-sub-menu a {
\t\t\t\t\t\t\tcolor: #3d4c4d;
\t\t\t\t\t\t\tfont-weight: 700;
\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t}

\t\t\t\t\t\t.category-popup-sub-menu__inner {
\t\t\t\t\t\t\tflex-wrap: wrap;
\t\t\t\t\t\t\tdisplay: flex;
\t\t\t\t\t\t\tpadding: 10px;
\t\t\t\t\t\t}

\t\t\t\t\t\t.subcategory-li:hover>.category-popup-sub-menu,
\t\t\t\t\t\t.category-item__inner:hover > .category-popup-sub-menu {
\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t}

\t\t\t\t\t\t.category-popup-sub-menu__link-wrapper {
\t\t\t\t\t\t\tmargin-bottom: 5px;
\t\t\t\t\t\t\tmargin-right: 10px;
\t\t\t\t\t\t\tmargin-left: 10px;
\t\t\t\t\t\t\tborder-bottom: 1px solid rgb(235, 235, 232);
\t\t\t\t\t\t}

\t\t\t\t\t\t.category-popup-sub-menu__item {
\t\t\t\t\t\t\twidth: 20%;
\t\t\t\t\t\t}

\t\t\t\t\t\t.category-menu .category-menu-nav .subcategory .subcategory-link {
\t\t\t\t\t\t\tpadding: 3px 5px;
\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t}
\t\t\t\t\t</style>
\t\t\t\t\t<div class=\"category-menu\">
\t\t\t\t\t\t";
        // line 980
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"statuses-widget\">
\t\t\t\t\t\t<span class=\"statuses-widget-title\">Наши статусы</span>
\t\t\t\t\t\t<div class=\"statuses-widget-item\">
\t\t\t\t\t\t\t<a href=\"/uploads/settings/16673753264b446664d827.jpg\" target=\"_blank\" aria-label=\"Показать наш статус\">
\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\" class=\"lazyload\" data-src=\"/thumbs/resize/78x110/uploads/settings/16673753264b446664d827.jpg\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</aside>
\t\t\t\t<main class=\"main\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"desktop breadcrumb\">
\t\t\t\t\t\t\t<a class=\"breadcrumb-item\" href=\"/\">Главная</a>
\t\t\t\t\t\t\t<span class=\"breadcrumb-item active\" aria-current=\"page\">Видеодомофоны</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"banners-group\">
\t\t\t\t\t\t\t<div class=\"banners-group__inner\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</main>
\t\t\t</div>
\t\t</div>
    <script>jQuery(function (\$) {
\t\t\tjQuery(document).pjax(\"#products-pjax a\", {\"push\":true,\"replace\":false,\"timeout\":10000,\"scrollTo\":false,\"container\":\"#products-pjax\"});
\t\t\tjQuery(document).off(\"submit\", \"#products-pjax form[data-pjax]\").on(\"submit\", \"#products-pjax form[data-pjax]\", function (event) {jQuery.pjax.submit(event, {\"push\":true,\"replace\":false,\"timeout\":10000,\"scrollTo\":false,\"container\":\"#products-pjax\"});});
\t\t\tVisit.init(878214);
\t\t\t\t\t\t\"use strict\";
\t\t\t\t\t\tfunction initSetReCaptchaToken171291882166191125f0e85() {
\t\t\t\t\t\t\tfunction setReCaptchaToken171291882166191125f0e85() {
\t\t\t\t\t\t\t\tgrecaptcha.ready(function() {
\t\t\t\t\t\t\t\t\tgrecaptcha.execute(\"6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-\", {action: \"/login\"}).then(function(token) {
\t\t\t\t\t\t\t\t\t\tjQuery(\"#\" + \"loginformmodal-captcha\").val(token);
\t\t\t\t\t\t\t\t\t\tconst jsCallback = \"\";
\t\t\t\t\t\t\t\t\t\tif (jsCallback) {
\t\t\t\t\t\t\t\t\t\t\teval(\"(\" + jsCallback + \")(token)\");
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tsetReCaptchaToken171291882166191125f0e85();
\t\t\t\t\t\t\tsetInterval(setReCaptchaToken171291882166191125f0e85, 110000);
\t\t\t\t\t\t}
\t\t\t\t\t\tif (typeof window.reCaptchaFunctions === 'undefined') {
\t\t\t\t\t\t\twindow.reCaptchaFunctions = [];
\t\t\t\t\t\t}
\t\t\t\t\t\twindow.reCaptchaFunctions.push(initSetReCaptchaToken171291882166191125f0e85);
\t\t\t\t\t\t\"use strict\";
\t\t\t\t\t\tfunction initReCaptcha() {
\t\t\t\t\t\t\tjQuery(document).off('mousemove', initReCaptcha);
\t\t\t\t\t\t\tlet script = document.createElement('script');
\t\t\t\t\t\t\tscript.setAttribute('src', '//www.google.com/recaptcha/api.js?render=6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-');
\t\t\t\t\t\t\tdocument.head.appendChild(script);
\t\t\t\t\t\t\tscript.onload = function() {
\t\t\t\t\t\t\t\twindow.reCaptchaFunctions.forEach(function(func) {
\t\t\t\t\t\t\t\t\tfunc();
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t};
\t\t\t\t\t\t}
\t\t\t\t\t\tjQuery(document).on('mousemove', initReCaptcha);
\t\t\tjQuery('#w0').yiiActiveForm([{\"id\":\"loginformmodal-email\",\"name\":\"email\",\"container\":\".field-loginformmodal-email\",\"input\":\"#loginformmodal-email\",\"validate\":function (attribute, value, messages, deferred, \$form) {yii.validation.required(value, messages, {\"message\":\"Необходимо заполнить «Email».\"});}},{\"id\":\"loginformmodal-password\",\"name\":\"password\",\"container\":\".field-loginformmodal-password\",\"input\":\"#loginformmodal-password\",\"validate\":function (attribute, value, messages, deferred, \$form) {yii.validation.required(value, messages, {\"message\":\"Необходимо заполнить «Пароль».\"});}}], []);
\t\t\tjQuery('#w1').yiiActiveForm([{\"id\":\"passwordresetrequestform-email\",\"name\":\"email\",\"container\":\".field-passwordresetrequestform-email\",\"input\":\"#passwordresetrequestform-email\",\"validate\":function (attribute, value, messages, deferred, \$form) {yii.validation.required(value, messages, {\"message\":\"Необходимо заполнить «Электронная почта».\"});value = yii.validation.trim(\$form, attribute, [], value);yii.validation.email(value, messages, {\"pattern\":/^[a-zA-Z0-9!#\$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-zA-Z0-9!#\$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\$/,\"fullPattern\":/^[^@]*<[a-zA-Z0-9!#\$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-zA-Z0-9!#\$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>\$/,\"allowName\":false,\"message\":\"Значение «Электронная почта» не является правильным email адресом.\",\"enableIDN\":false,\"skipOnEmpty\":1});}}], []);
\t\t\tjQuery(\"#questionform-phone\").inputmask(inputmask_8b2a4bfb);
\t\t\t\t\t\t\"use strict\";
\t\t\t\t\t\tfunction initSetReCaptchaToken171291882166191125f3c8f() {
\t\t\t\t\t\t\tfunction setReCaptchaToken171291882166191125f3c8f() {
\t\t\t\t\t\t\t\tgrecaptcha.ready(function() {
\t\t\t\t\t\t\t\t\tgrecaptcha.execute(\"6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-\", {action: \"/callback/question\"}).then(function(token) {
\t\t\t\t\t\t\t\t\t\tjQuery(\"#\" + \"questionform-captcha\").val(token);
\t\t\t\t\t\t\t\t\t\tconst jsCallback = \"\";
\t\t\t\t\t\t\t\t\t\tif (jsCallback) {
\t\t\t\t\t\t\t\t\t\t\teval(\"(\" + jsCallback + \")(token)\");
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tsetReCaptchaToken171291882166191125f3c8f();
\t\t\t\t\t\t\tsetInterval(setReCaptchaToken171291882166191125f3c8f, 110000);
\t\t\t\t\t\t}
\t\t\t\t\t\tif (typeof window.reCaptchaFunctions === 'undefined') {
\t\t\t\t\t\t\twindow.reCaptchaFunctions = [];
\t\t\t\t\t\t}
\t\t\t\t\t\twindow.reCaptchaFunctions.push(initSetReCaptchaToken171291882166191125f3c8f);
\t\t\tjQuery('#w2').yiiActiveForm([{\"id\":\"questionform-phone\",\"name\":\"phone\",\"container\":\".field-questionform-phone\",\"input\":\"#questionform-phone\",\"validate\":function (attribute, value, messages, deferred, \$form) {value = yii.validation.trim(\$form, attribute, [], value);yii.validation.required(value, messages, {\"message\":\"Необходимо заполнить «Номер телефона».\"});yii.validation.regularExpression(value, messages, {\"pattern\":/^\\+7\\s\\(\\d{3}\\)\\s\\d{3}-\\d{2}-\\d{2}\$/,\"not\":false,\"message\":\"Номер телефона должен быть в формате +7 (XXX) XXX-XX-XX\",\"skipOnEmpty\":1});}},{\"id\":\"questionform-fio\",\"name\":\"fio\",\"container\":\".field-questionform-fio\",\"input\":\"#questionform-fio\",\"validate\":function (attribute, value, messages, deferred, \$form) {value = yii.validation.trim(\$form, attribute, [], value);yii.validation.required(value, messages, {\"message\":\"Необходимо заполнить «ФИО».\"});}}], []);
\t\t\tjQuery(\"#callbackform-phone\").inputmask(inputmask_8b2a4bfb);
\t\t\t\t\t\t\"use strict\";
\t\t\t\t\t\tfunction initSetReCaptchaToken171291882166191125f3e7e() {
\t\t\t\t\t\t\tfunction setReCaptchaToken171291882166191125f3e7e() {
\t\t\t\t\t\t\t\tgrecaptcha.ready(function() {
\t\t\t\t\t\t\t\t\tgrecaptcha.execute(\"6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-\", {action: \"/callback\"}).then(function(token) {
\t\t\t\t\t\t\t\t\t\tjQuery(\"#\" + \"callbackform-captcha\").val(token);
\t\t\t\t\t\t\t\t\t\tconst jsCallback = \"\";
\t\t\t\t\t\t\t\t\t\tif (jsCallback) {
\t\t\t\t\t\t\t\t\t\t\teval(\"(\" + jsCallback + \")(token)\");
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tsetReCaptchaToken171291882166191125f3e7e();
\t\t\t\t\t\t\tsetInterval(setReCaptchaToken171291882166191125f3e7e, 110000);
\t\t\t\t\t\t}
\t\t\t\t\t\tif (typeof window.reCaptchaFunctions === 'undefined') {
\t\t\t\t\t\t\twindow.reCaptchaFunctions = [];
\t\t\t\t\t\t}
\t\t\t\t\t\twindow.reCaptchaFunctions.push(initSetReCaptchaToken171291882166191125f3e7e);
\t\t\tjQuery('#w3').yiiActiveForm([{\"id\":\"callbackform-phone\",\"name\":\"phone\",\"container\":\".field-callbackform-phone\",\"input\":\"#callbackform-phone\",\"validate\":function (attribute, value, messages, deferred, \$form) {value = yii.validation.trim(\$form, attribute, [], value);yii.validation.required(value, messages, {\"message\":\"Необходимо заполнить «Номер телефона».\"});yii.validation.regularExpression(value, messages, {\"pattern\":/^\\+7\\s\\(\\d{3}\\)\\s\\d{3}-\\d{2}-\\d{2}\$/,\"not\":false,\"message\":\"Номер телефона должен быть в формате +7 (XXX) XXX-XX-XX\",\"skipOnEmpty\":1});}},{\"id\":\"callbackform-fio\",\"name\":\"fio\",\"container\":\".field-callbackform-fio\",\"input\":\"#callbackform-fio\",\"validate\":function (attribute, value, messages, deferred, \$form) {value = yii.validation.trim(\$form, attribute, [], value);yii.validation.required(value, messages, {\"message\":\"Необходимо заполнить «ФИО».\"});}}], []);
\t\t\tjQuery(\"#feedbackform-phone\").inputmask(inputmask_8b2a4bfb);
\t\t\t\t\t\t\"use strict\";
\t\t\t\t\t\tfunction initSetReCaptchaToken171291882166191125f4042() {
\t\t\t\t\t\t\tfunction setReCaptchaToken171291882166191125f4042() {
\t\t\t\t\t\t\t\tgrecaptcha.ready(function() {
\t\t\t\t\t\t\t\t\tgrecaptcha.execute(\"6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-\", {action: \"/callback/feedback\"}).then(function(token) {
\t\t\t\t\t\t\t\t\t\tjQuery(\"#\" + \"feedbackform-captcha\").val(token);
\t\t\t\t\t\t\t\t\t\tconst jsCallback = \"\";
\t\t\t\t\t\t\t\t\t\tif (jsCallback) {
\t\t\t\t\t\t\t\t\t\t\teval(\"(\" + jsCallback + \")(token)\");
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tsetReCaptchaToken171291882166191125f4042();
\t\t\t\t\t\t\tsetInterval(setReCaptchaToken171291882166191125f4042, 110000);
\t\t\t\t\t\t}
\t\t\t\t\t\tif (typeof window.reCaptchaFunctions === 'undefined') {
\t\t\t\t\t\t\twindow.reCaptchaFunctions = [];
\t\t\t\t\t\t}
\t\t\t\t\t\twindow.reCaptchaFunctions.push(initSetReCaptchaToken171291882166191125f4042);
\t\t\tjQuery('#w4').yiiActiveForm([{\"id\":\"feedbackform-phone\",\"name\":\"phone\",\"container\":\".field-feedbackform-phone\",\"input\":\"#feedbackform-phone\",\"validate\":function (attribute, value, messages, deferred, \$form) {value = yii.validation.trim(\$form, attribute, [], value);yii.validation.required(value, messages, {\"message\":\"Необходимо заполнить «Номер телефона».\"});yii.validation.regularExpression(value, messages, {\"pattern\":/^\\+7\\s\\(\\d{3}\\)\\s\\d{3}-\\d{2}-\\d{2}\$/,\"not\":false,\"message\":\"Номер телефона должен быть в формате +7 (XXX) XXX-XX-XX\",\"skipOnEmpty\":1});}},{\"id\":\"feedbackform-fio\",\"name\":\"fio\",\"container\":\".field-feedbackform-fio\",\"input\":\"#feedbackform-fio\",\"validate\":function (attribute, value, messages, deferred, \$form) {value = yii.validation.trim(\$form, attribute, [], value);yii.validation.required(value, messages, {\"message\":\"Необходимо заполнить «ФИО».\"});}}], []);
\t\t\t});</script>
\t</body>
</html>
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
        return array (  769 => 980,  637 => 850,  629 => 847,  626 => 846,  614 => 844,  612 => 843,  170 => 403,  160 => 53,  151 => 51,  146 => 50,  135 => 48,  131 => 47,  128 => 46,  119 => 44,  114 => 43,  101 => 41,  97 => 40,  69 => 14,  63 => 12,  60 => 11,  54 => 9,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kg/template/common/header.twig", "");
    }
}
