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
class __TwigTemplate_3434d6bf04f7ee2dbaba56b9db5eb8661b7d336e62e56b62f220a4621aefc708 extends Template
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
        echo ($context["header"] ?? null);
        echo "
\t\t<div class=\"container\">
\t\t\t<div class=\"row\"></div>
\t\t</div>
\t\t<footer class=\"desktop footer\">
\t\t\t<div class=\"wrapper\">
\t\t\t\t<div class=\"footer-logo-block\">
\t\t\t\t\t<a class=\"footer-logo\" href=\"/\" aria-label=\"Перейти на главную страницу сайта\">
\t\t\t\t\t\t<img class=\"lazyload\" title=\"Логотип\" alt=\"\" src=\"\" data-src=\"/thumbs/resize/230x60/uploads/settings/66017880964ae9206d36ce.png\"/>
\t\t\t\t\t</a>
\t\t\t\t\t<span class=\"copyright\">
\t\t\t\t\t\t<p>В соответствии с пунктом 2 статьи 437 ГК РФ, вся информация о товарах на сайте имеет справочный
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        характер и не является публичной офертой. При покупке проверяйте товар на наличие интересующих
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        вас функций и характеристик.</p>
\t\t\t\t\t\t<p class=\"copyright__google-recaptcha\">
\t\t\t\t\t\t\tЗащита от спама Google reCAPTCHA,
\t\t\t\t\t\t\t<a href=\"https://policies.google.com/privacy\">конфиденциальность,</a>
\t\t\t\t\t\t\t<a href=\"https://policies.google.com/terms\">условия использования.</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"nav-footer-menu\">
\t\t\t\t\t<ul class=\"footer-menu\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/rasprodaza\">Распродажа</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/cooperation\">Сотрудничество</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/warranty\">Гарантия</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/payment\">Оплата</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/delivery\">Доставка</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/contacts\">Контакты</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"contact-nav-item\">
\t\t\t\t\t\t<a class=\"contact-nav-link\" href=\"tel:+74954324141\">
\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t\t+7 (495) 432-41-41
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"contact-nav-link whatsapp-link\" href=\"https://wa.me/+79361323454\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fa fa-whatsapp\"></i>
\t\t\t\t\t\t\t8 (936) 132-34-54
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"contact-nav-link\" href=\"https://t.me/ShopMSK1\" target=\"_blank\">
\t\t\t\t\t\t\t<img src=\"/thumbs/color/D71921/img/telegram.svg\" alt=\"\" width=\"17\" height=\"17\"/>
\t\t\t\t\t\t\tShopMSK1
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<span>(Круглосуточно)</span>
\t\t\t\t\t\t<a class=\"contact-nav-link\" href=\"mailto:info@Hikvision-Shop.ru\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\tinfo@Hikvision-Shop.ru
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"payment-methods\">
\t\t\t\t\t<span class=\"payment-methods-title\">Принимаем к оплате:</span>
\t\t\t\t\t<img class=\"payment-method lazyload\" data-src=\"/img/payments/visa.png\" alt=\"Visa\" src=\"\" width=\"55\" height=\"17\"/>
\t\t\t\t\t<img class=\"payment-method lazyload\" data-src=\"/img/payments/mastercard.png\" alt=\"MasterCard\" src=\"\" width=\"46\" height=\"27\"/>
\t\t\t\t\t<img class=\"payment-method lazyload\" data-src=\"/img/payments/yandex.png\" alt=\"Яндекс.Деньги\" src=\"\" width=\"55\" height=\"24\"/>
\t\t\t\t\t<img class=\"payment-method lazyload\" data-src=\"/img/payments/webmoney.png\" alt=\"WebMoney\" src=\"\" width=\"84\" height=\"21\"/>
\t\t\t\t\t<img class=\"payment-method lazyload\" data-src=\"/img/payments/qiwi.png\" alt=\"Qiwi\" src=\"\" width=\"63\" height=\"29\"/>
\t\t\t\t</div>
\t\t\t\t<a class=\"feedback-btn\" data-toggle=\"modal\" data-target=\"#feedback-dialog\">
\t\t\t\t\t<i class=\"fa fa-file-text\"></i>
\t\t\t\t\tФорма обратной связи
\t\t\t\t</a>
\t\t\t\t<div class=\"counters-widget\">
\t\t\t\t\t<meta name='wmail-verification' content='ebc2bca66b0a7572'/>
\t\t\t\t\t<meta
\t\t\t\t\tname='yandex-verification' content='7ada0da6509173e7'/>
\t\t\t\t\t <script type=\"text/javascript\">let counter1712587543661403171c556 = function () {
\t\t\t\t\t\t\t\t\t\t\t                        window.removeEventListener('mousemove', counter1712587543661403171c556);
\t\t\t\t\t\t\t\t\t\t\t                        var _tmr = window._tmr || (window._tmr = []);
\t\t\t\t\t\t\t\t\t\t\t                        _tmr.push({ id: \"2710577\", type: \"pageView\", start: (new Date()).getTime() });
\t\t\t\t\t\t\t\t\t\t\t                        (function (d, w, id) {
\t\t\t\t\t\t\t\t\t\t\t                            if (d.getElementById(id)) return;
\t\t\t\t\t\t\t\t\t\t\t                            var ts = d.createElement(\"script\"); ts.type = \"text/javascript\"; ts.async = true; ts.id = id;
\t\t\t\t\t\t\t\t\t\t\t                            ts.src = (d.location.protocol == \"https:\" ? \"https:\" : \"http:\") + \"//top-fwz1.mail.ru/js/code.js\";
\t\t\t\t\t\t\t\t\t\t\t                            var f = function () { var s = d.getElementsByTagName(\"script\")[0]; s.parentNode.insertBefore(ts, s); };
\t\t\t\t\t\t\t\t\t\t\t                            if (w.opera == \"[object Opera]\") { d.addEventListener(\"DOMContentLoaded\", f, false); } else { f(); }
\t\t\t\t\t\t\t\t\t\t\t                        })(document, window, \"topmailru-code\");
\t\t\t\t\t\t\t\t\t\t\t                    }; window.addEventListener('mousemove', counter1712587543661403171c556);</script>
\t\t\t\t\t<noscript>
\t\t\t\t\t\t<div style=\"position:absolute;left:-10000px;\">
\t\t\t\t\t\t\t<img src=\"//top-fwz1.mail.ru/counter?id=2710577;js=na\" style=\"border:0;\" height=\"1\" width=\"1\" alt=\"Рейтинг@Mail.ru\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</noscript>
\t\t\t\t\t<a href=\"http://top.mail.ru/jump?from=2710577\">
\t\t\t\t\t\t<img src=\"//top-fwz1.mail.ru/counter?id=2710577;t=304;l=1\" style=\"border:0;\" height=\"15\" width=\"88\" alt=\"Рейтинг@Mail.ru\"/></a>
\t\t\t\t\t <script type=\"text/javascript\">let counter1712587543661403171c55b = function () {
\t\t\t\t\t\t\t\t\t\t                        window.removeEventListener('mousemove', counter1712587543661403171c55b);
\t\t\t\t\t\t\t\t\t\t                        (function (m, e, t, r, i, k, a) {
\t\t\t\t\t\t\t\t\t\t                            m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
\t\t\t\t\t\t\t\t\t\t                            m[i].l = 1 * new Date(); k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
\t\t\t\t\t\t\t\t\t\t                        })
\t\t\t\t\t\t\t\t\t\t                            (window, document, \"script\", \"https://mc.yandex.ru/metrika/tag.js\", \"ym\");
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t                        ym(88811134, \"init\", {
\t\t\t\t\t\t\t\t\t\t                            clickmap: true,
\t\t\t\t\t\t\t\t\t\t                            trackLinks: true,
\t\t\t\t\t\t\t\t\t\t                            accurateTrackBounce: true,
\t\t\t\t\t\t\t\t\t\t                            webvisor: true
\t\t\t\t\t\t\t\t\t\t                        });
\t\t\t\t\t\t\t\t\t\t                    }; window.addEventListener('mousemove', counter1712587543661403171c55b);</script>
\t\t\t\t\t<noscript>
\t\t\t\t\t\t<div><img src=\"https://mc.yandex.ru/watch/88811134\" style=\"position:absolute; left:-9999px;\" alt=\"\"/></div>
\t\t\t\t\t</noscript>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<footer class=\"mobile m-footer\">
\t\t\t<ul class=\"mobile m-nav m-nav-footer\">
\t\t\t\t<li class=\"m-nav__item\">
\t\t\t\t\t<a class=\"m-nav__link btn-scroll-top\" href=\"#navbarToggleCatalog\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-label=\"Открыть каталог\" role=\"button\" aria-controls=\"navbarToggleCatalog\">
\t\t\t\t\t\t<div class=\"m-nav__link-image-wrapper\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"\" class=\"lazyload m-nav__link-image\" data-src=\"/thumbs/color/D71921/img/catalog.png\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\tКаталог
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"m-nav__item\">
\t\t\t\t\t<a class=\"m-nav__link\" href=\"/payment\">
\t\t\t\t\t\t<img class=\"m-nav__link-icon2\" title=\"Оплата\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1180068136647b0b8de3de5.svg\"/>Оплата
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"m-nav__item\">
\t\t\t\t\t<a class=\"m-nav__link\" href=\"/delivery\">
\t\t\t\t\t\t<i class=\"fa fa-truck m-nav__link-icon\"></i>Доставка
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"m-nav__item\">
\t\t\t\t\t<a class=\"m-nav__link btn-scroll-top\" href=\"#navbarToggleContacts\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-label=\"Контакты\" role=\"button\" aria-controls=\"navbarToggleContacts\">
\t\t\t\t\t\t<img class=\"m-nav__link-icon2\" title=\"Контакты\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1884571839647b0bc95f444.svg\"/>Контакты
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"m-nav__item\">
\t\t\t\t\t<a class=\"m-nav__link\" href=\"/login\" data-toggle=\"modal\" data-target=\"#login-dialog\">
\t\t\t\t\t\t<i class=\"fa fa-user m-nav__link-icon\"></i>Войти
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<p class=\"copyright__google-recaptcha\">
\t\t\t\tЗащита от спама Google reCAPTCHA,
\t\t\t\t<a href=\"https://policies.google.com/privacy\">конфиденциальность,</a>
\t\t\t\t<a href=\"https://policies.google.com/terms\">условия использования.</a>
\t\t\t</p>
\t\t</footer>
\t\t<footer class=\"fixed-footer m-fixed-footer\">
\t\t\t<div class=\"wrapper wrapper_full\">
\t\t\t\t<div class=\"product-brief__menu-container\">
\t\t\t\t\t<ul class=\"product-brief__menu\">
\t\t\t\t\t\t<li class=\"product-brief__menu-item\">
\t\t\t\t\t\t\t<a class=\"product-brief__menu-item-link\" href=\"/how-to-order\">Как сделать заказ</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"fixed-footer__right-container\">
\t\t\t\t\t<div class=\"user-counters\">
\t\t\t\t\t\t<div class=\"user-counters__item\">
\t\t\t\t\t\t\t<i class=\"user-counters__item-img fa fa fa-exchange\"></i>
\t\t\t\t\t\t\t<a class=\"user-counters__item-link\" href=\"/products/comparison\">Сравнить</a>
\t\t\t\t\t\t\t<div class=\"user-counters__item-count_style_viewed\" id=\"comparisonCounter\">0</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"user-counters__item\">
\t\t\t\t\t\t\t<i class=\"user-counters__item-img fa fa-shopping-basket\"></i>
\t\t\t\t\t\t\t<a class=\"user-counters__item-link\" href=\"/cart\">Корзина</a>
\t\t\t\t\t\t\t<div class=\"user-counters__item-count_style_basket\">0</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"user-counters__item\">
\t\t\t\t\t\t\t<i class=\"user-counters__item-img fa fa-eye\"></i>
\t\t\t\t\t\t\t<a class=\"user-counters__item-link\" href=\"/products/viewed\">Просмотрено</a>
\t\t\t\t\t\t\t<div class=\"user-counters__item-count_style_viewed\">0</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn btn-primary btn-block scroll-up-button\" id=\"scroll-up-button\" title=\"В начало страницы\">
\t\t\t\t\t\t<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<button class=\"btn btn-primary affix\" data-toggle=\"modal\" data-target=\"#question-dialog\">
\t\t\t<i class=\"fa fa-question-circle\"></i>
\t\t\tЗадать вопрос
\t\t</button>
\t\t<dialog id=\"question-dialog\" class=\"modal-custom\">
\t\t\t<button class=\"dialog-close-btn\" data-dismiss=\"modal\" type=\"button\">
\t\t\t\t<img src=\"/img/cross.svg\" alt=\"\"/>
\t\t\t</button>
\t\t\t<div class=\"dialog-title\">Задать вопрос</div>
\t\t\t<div class=\"dialog-sub-title\">Мы позвоним Вам в ближайшее время</div>
\t\t\t<form id=\"w2\" action=\"/callback/question\" method=\"post\" data-pjax=\"0\">
\t\t\t\t<input type=\"hidden\" name=\"_csrf-frontend\" value=\"gORys5pcU3Y3_f5RvCGfSaeL7TqOMKQiB5WO0yq9bfvjpiGe3goXMg7OsSLpV_ItlsneDLZ11mxtuO-4RdwmvQ==\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-questionform-phone required\">
\t\t\t\t\t\t<label class=\"required-label\" for=\"questionform-phone\">Номер телефона</label>
\t\t\t\t\t\t<input type=\"text\" id=\"questionform-phone\" class=\"form-control\" name=\"QuestionForm[phone]\" placeholder=\"+7 (999) 999-99-99\" aria-required=\"true\" data-plugin-inputmask=\"inputmask_8b2a4bfb\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-questionform-fio required\">
\t\t\t\t\t\t<label class=\"required-label\" for=\"questionform-fio\">ФИО</label>
\t\t\t\t\t\t<input type=\"text\" id=\"questionform-fio\" class=\"form-control\" name=\"QuestionForm[fio]\" placeholder=\"Иванов Иван Иванович\" aria-required=\"true\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-questionform-question\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"questionform-question\">Вопрос</label>
\t\t\t\t\t\t<textarea id=\"questionform-question\" class=\"form-control\" name=\"QuestionForm[question]\" placeholder=\"Хочу купить товар (название, код)\"></textarea>
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-questionform-captcha\"><input type=\"hidden\" id=\"questionform-captcha\" class=\"form-control\" name=\"QuestionForm[captcha]\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Отправить</button>
\t\t\t</form>
\t\t</dialog>
\t\t<dialog id=\"callback-dialog\" class=\"modal-custom\">
\t\t\t<button class=\"dialog-close-btn\" data-dismiss=\"modal\" type=\"button\">
\t\t\t\t<img src=\"/img/cross.svg\" alt=\"\"/>
\t\t\t</button>
\t\t\t<div class=\"dialog-title\">Заказ на обратный звонок</div>
\t\t\t<div class=\"dialog-sub-title\">Мы позвоним Вам в ближайшее время</div>
\t\t\t<form id=\"w3\" action=\"/callback\" method=\"post\" data-pjax=\"0\">
\t\t\t\t<input type=\"hidden\" name=\"_csrf-frontend\" value=\"gORys5pcU3Y3_f5RvCGfSaeL7TqOMKQiB5WO0yq9bfvjpiGe3goXMg7OsSLpV_ItlsneDLZ11mxtuO-4RdwmvQ==\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-callbackform-phone required\">
\t\t\t\t\t\t<label class=\"required-label\" for=\"callbackform-phone\">Номер телефона</label>
\t\t\t\t\t\t<input type=\"text\" id=\"callbackform-phone\" class=\"form-control\" name=\"CallbackForm[phone]\" placeholder=\"+7 (999) 999-99-99\" aria-required=\"true\" data-plugin-inputmask=\"inputmask_8b2a4bfb\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-callbackform-fio required\">
\t\t\t\t\t\t<label class=\"required-label\" for=\"callbackform-fio\">ФИО</label>
\t\t\t\t\t\t<input type=\"text\" id=\"callbackform-fio\" class=\"form-control\" name=\"CallbackForm[fio]\" placeholder=\"Иванов Иван Иванович\" aria-required=\"true\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-callbackform-question\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"callbackform-question\">Вопрос</label>
\t\t\t\t\t\t<textarea id=\"callbackform-question\" class=\"form-control\" name=\"CallbackForm[question]\" placeholder=\"Хочу купить товар (название, код)\"></textarea>
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-callbackform-captcha\"><input type=\"hidden\" id=\"callbackform-captcha\" class=\"form-control\" name=\"CallbackForm[captcha]\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Отправить</button>
\t\t\t</form>
\t\t</dialog>
\t\t<dialog id=\"feedback-dialog\" class=\"modal-custom\">
\t\t\t<button class=\"dialog-close-btn\" data-dismiss=\"modal\" type=\"button\">
\t\t\t\t<img src=\"/img/cross.svg\" alt=\"\"/>
\t\t\t</button>
\t\t\t<div class=\"dialog-title\">Обратный звонок</div>
\t\t\t<div class=\"dialog-sub-title\">Мы позвоним Вам в ближайшее время</div>
\t\t\t<form id=\"w4\" action=\"/callback/feedback\" method=\"post\" data-pjax=\"0\">
\t\t\t\t<input type=\"hidden\" name=\"_csrf-frontend\" value=\"gORys5pcU3Y3_f5RvCGfSaeL7TqOMKQiB5WO0yq9bfvjpiGe3goXMg7OsSLpV_ItlsneDLZ11mxtuO-4RdwmvQ==\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-feedbackform-phone required\">
\t\t\t\t\t\t<label class=\"required-label\" for=\"feedbackform-phone\">Номер телефона</label>
\t\t\t\t\t\t<input type=\"text\" id=\"feedbackform-phone\" class=\"form-control\" name=\"FeedbackForm[phone]\" placeholder=\"+7 (999) 999-99-99\" aria-required=\"true\" data-plugin-inputmask=\"inputmask_8b2a4bfb\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-feedbackform-fio required\">
\t\t\t\t\t\t<label class=\"required-label\" for=\"feedbackform-fio\">ФИО</label>
\t\t\t\t\t\t<input type=\"text\" id=\"feedbackform-fio\" class=\"form-control\" name=\"FeedbackForm[fio]\" placeholder=\"Иванов Иван Иванович\" aria-required=\"true\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-feedbackform-question\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"feedbackform-question\">Вопрос</label>
\t\t\t\t\t\t<textarea id=\"feedbackform-question\" class=\"form-control\" name=\"FeedbackForm[question]\" placeholder=\"Хочу купить товар (название, код)\"></textarea>
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"form-group field-feedbackform-captcha\"><input type=\"hidden\" id=\"feedbackform-captcha\" class=\"form-control\" name=\"FeedbackForm[captcha]\">
\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Отправить</button>
\t\t\t</form>
\t\t</dialog>
\t\t<div class=\"popup-top\" id=\"productsComparison\">
\t\t\t<div class=\"popup-top__inner\">
\t\t\t\t<div class=\"popup-top__content\">
\t\t\t\t\t<div class=\"popup-top__container-image\">
\t\t\t\t\t\t<img class=\"popup-top__image\" id=\"productsComparisonImage\" src=\"\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"popup-top__container-text\">
\t\t\t\t\t\t<div class=\"popup-top__header\" id=\"productsComparisonHeader\"></div>
\t\t\t\t\t\t<div id=\"productsComparisonText\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"popup-top__container-btn\">
\t\t\t\t\t<a class=\"btn btn-primary popup-top__btn\" href=\"/products/comparison\">Сравнить</a>
\t\t\t\t</div>
\t\t\t\t<button class=\"popup-top__close-btn\" type=\"button\" id=\"productsComparisonCloseBtn\">
\t\t\t\t\t<img src=\"/img/cross.svg\" alt=\"\"/>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t\t <script src=\"./catalog/view/theme/kg/assas/resources/index.js\"></script>
\t\t//
\t\t <script>jQuery(function (\$) {
\t\t\t\t//             jQuery(document).pjax(\"#products-pjax a\", { \"push\": true, \"replace\": false, \"timeout\": 10000, \"scrollTo\": false, \"container\": \"#products-pjax\" });
\t\t\t\t//             jQuery(document).off(\"submit\", \"#products-pjax form[data-pjax]\").on(\"submit\", \"#products-pjax form[data-pjax]\", function (event) { jQuery.pjax.submit(event, { \"push\": true, \"replace\": false, \"timeout\": 10000, \"scrollTo\": false, \"container\": \"#products-pjax\" }); });
\t\t\t\t//             Visit.init(910480);
\t\t\t\t//             \"use strict\";
\t\t\t\t//             function initSetReCaptchaToken17134145226620a17ab3c57() {
\t\t\t\t//                 function setReCaptchaToken17134145226620a17ab3c57() {
\t\t\t\t//                     grecaptcha.ready(function () {
\t\t\t\t//                         grecaptcha.execute(\"6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-\", { action: \"/login\" }).then(function (token) {
\t\t\t\t//                             jQuery(\"#\" + \"loginformmodal-captcha\").val(token);
\t\t\t\t//                             const jsCallback = \"\";
\t\t\t\t//                             if (jsCallback) {
\t\t\t\t//                                 eval(\"(\" + jsCallback + \")(token)\");
\t\t\t\t//                             }
\t\t\t\t//                         });
\t\t\t\t//                     });
\t\t\t\t//                 }
\t\t\t\t//                 setReCaptchaToken17134145226620a17ab3c57();
\t\t\t\t//                 setInterval(setReCaptchaToken17134145226620a17ab3c57, 110000);
\t\t\t\t//             }
\t\t\t\t//             if (typeof window.reCaptchaFunctions === 'undefined') {
\t\t\t\t//                 window.reCaptchaFunctions = [];
\t\t\t\t//             }
\t\t\t\t//             window.reCaptchaFunctions.push(initSetReCaptchaToken17134145226620a17ab3c57);
\t\t\t\t//             \"use strict\";
\t\t\t\t//             function initReCaptcha() {
\t\t\t\t//                 jQuery(document).off('mousemove', initReCaptcha);
\t\t\t\t//                 let script = document.createElement('script');
\t\t\t\t//                 script.setAttribute('src', '//www.google.com/recaptcha/api.js?render=6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-');
\t\t\t\t//                 document.head.appendChild(script);
\t\t\t\t//                 script.onload = function () {
\t\t\t\t//                     window.reCaptchaFunctions.forEach(function (func) {
\t\t\t\t//                         func();
\t\t\t\t//                     });
\t\t\t\t//                 };
\t\t\t\t//             }
\t\t\t\t//             jQuery(document).on('mousemove', initReCaptcha);
\t\t\t\t//             jQuery('#w0').yiiActiveForm([{ \"id\": \"loginformmodal-email\", \"name\": \"email\", \"container\": \".field-loginformmodal-email\", \"input\": \"#loginformmodal-email\", \"validate\": function (attribute, value, messages, deferred, \$form) { yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «Email».\" }); } }, { \"id\": \"loginformmodal-password\", \"name\": \"password\", \"container\": \".field-loginformmodal-password\", \"input\": \"#loginformmodal-password\", \"validate\": function (attribute, value, messages, deferred, \$form) { yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «Пароль».\" }); } }], []);
\t\t\t\t//             jQuery('#w1').yiiActiveForm([{ \"id\": \"passwordresetrequestform-email\", \"name\": \"email\", \"container\": \".field-passwordresetrequestform-email\", \"input\": \"#passwordresetrequestform-email\", \"validate\": function (attribute, value, messages, deferred, \$form) { yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «Электронная почта».\" }); value = yii.validation.trim(\$form, attribute, [], value); yii.validation.email(value, messages, { \"pattern\": /^[a-zA-Z0-9!#\$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-zA-Z0-9!#\$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\$/, \"fullPattern\": /^[^@]*<[a-zA-Z0-9!#\$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-zA-Z0-9!#\$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>\$/, \"allowName\": false, \"message\": \"Значение «Электронная почта» не является правильным email адресом.\", \"enableIDN\": false, \"skipOnEmpty\": 1 }); } }], []);
\t\t\t\t//             jQuery(\"#questionform-phone\").inputmask(inputmask_8b2a4bfb);
\t\t\t\t//             \"use strict\";
\t\t\t\t//             function initSetReCaptchaToken17134145226620a17ab5581() {
\t\t\t\t//                 function setReCaptchaToken17134145226620a17ab5581() {
\t\t\t\t//                     grecaptcha.ready(function () {
\t\t\t\t//                         grecaptcha.execute(\"6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-\", { action: \"/callback/question\" }).then(function (token) {
\t\t\t\t//                             jQuery(\"#\" + \"questionform-captcha\").val(token);
\t\t\t\t//                             const jsCallback = \"\";
\t\t\t\t//                             if (jsCallback) {
\t\t\t\t//                                 eval(\"(\" + jsCallback + \")(token)\");
\t\t\t\t//                             }
\t\t\t\t//                         });
\t\t\t\t//                     });
\t\t\t\t//                 }
\t\t\t\t//                 setReCaptchaToken17134145226620a17ab5581();
\t\t\t\t//                 setInterval(setReCaptchaToken17134145226620a17ab5581, 110000);
\t\t\t\t//             }
\t\t\t\t//             if (typeof window.reCaptchaFunctions === 'undefined') {
\t\t\t\t//                 window.reCaptchaFunctions = [];
\t\t\t\t//             }
\t\t\t\t//             window.reCaptchaFunctions.push(initSetReCaptchaToken17134145226620a17ab5581);
\t\t\t\t//             jQuery('#w2').yiiActiveForm([{ \"id\": \"questionform-phone\", \"name\": \"phone\", \"container\": \".field-questionform-phone\", \"input\": \"#questionform-phone\", \"validate\": function (attribute, value, messages, deferred, \$form) { value = yii.validation.trim(\$form, attribute, [], value); yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «Номер телефона».\" }); yii.validation.regularExpression(value, messages, { \"pattern\": /^\\+7\\s\\(\\d{3}\\)\\s\\d{3}-\\d{2}-\\d{2}\$/, \"not\": false, \"message\": \"Номер телефона должен быть в формате +7 (XXX) XXX-XX-XX\", \"skipOnEmpty\": 1 }); } }, { \"id\": \"questionform-fio\", \"name\": \"fio\", \"container\": \".field-questionform-fio\", \"input\": \"#questionform-fio\", \"validate\": function (attribute, value, messages, deferred, \$form) { value = yii.validation.trim(\$form, attribute, [], value); yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «ФИО».\" }); } }], []);
\t\t\t\t//             jQuery(\"#callbackform-phone\").inputmask(inputmask_8b2a4bfb);
\t\t\t\t//             \"use strict\";
\t\t\t\t//             function initSetReCaptchaToken17134145226620a17ab583d() {
\t\t\t\t//                 function setReCaptchaToken17134145226620a17ab583d() {
\t\t\t\t//                     grecaptcha.ready(function () {
\t\t\t\t//                         grecaptcha.execute(\"6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-\", { action: \"/callback\" }).then(function (token) {
\t\t\t\t//                             jQuery(\"#\" + \"callbackform-captcha\").val(token);
\t\t\t\t//                             const jsCallback = \"\";
\t\t\t\t//                             if (jsCallback) {
\t\t\t\t//                                 eval(\"(\" + jsCallback + \")(token)\");
\t\t\t\t//                             }
\t\t\t\t//                         });
\t\t\t\t//                     });
\t\t\t\t//                 }
\t\t\t\t//                 setReCaptchaToken17134145226620a17ab583d();
\t\t\t\t//                 setInterval(setReCaptchaToken17134145226620a17ab583d, 110000);
\t\t\t\t//             }
\t\t\t\t//             if (typeof window.reCaptchaFunctions === 'undefined') {
\t\t\t\t//                 window.reCaptchaFunctions = [];
\t\t\t\t//             }
\t\t\t\t//             window.reCaptchaFunctions.push(initSetReCaptchaToken17134145226620a17ab583d);
\t\t\t\t//             jQuery('#w3').yiiActiveForm([{ \"id\": \"callbackform-phone\", \"name\": \"phone\", \"container\": \".field-callbackform-phone\", \"input\": \"#callbackform-phone\", \"validate\": function (attribute, value, messages, deferred, \$form) { value = yii.validation.trim(\$form, attribute, [], value); yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «Номер телефона».\" }); yii.validation.regularExpression(value, messages, { \"pattern\": /^\\+7\\s\\(\\d{3}\\)\\s\\d{3}-\\d{2}-\\d{2}\$/, \"not\": false, \"message\": \"Номер телефона должен быть в формате +7 (XXX) XXX-XX-XX\", \"skipOnEmpty\": 1 }); } }, { \"id\": \"callbackform-fio\", \"name\": \"fio\", \"container\": \".field-callbackform-fio\", \"input\": \"#callbackform-fio\", \"validate\": function (attribute, value, messages, deferred, \$form) { value = yii.validation.trim(\$form, attribute, [], value); yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «ФИО».\" }); } }], []);
\t\t\t\t//             jQuery(\"#feedbackform-phone\").inputmask(inputmask_8b2a4bfb);
\t\t\t\t//             \"use strict\";
\t\t\t\t//             function initSetReCaptchaToken17134145226620a17ab5a95() {
\t\t\t\t//                 function setReCaptchaToken17134145226620a17ab5a95() {
\t\t\t\t//                     grecaptcha.ready(function () {
\t\t\t\t//                         grecaptcha.execute(\"6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-\", { action: \"/callback/feedback\" }).then(function (token) {
\t\t\t\t//                             jQuery(\"#\" + \"feedbackform-captcha\").val(token);
\t\t\t\t//                             const jsCallback = \"\";
\t\t\t\t//                             if (jsCallback) {
\t\t\t\t//                                 eval(\"(\" + jsCallback + \")(token)\");
\t\t\t\t//                             }
\t\t\t\t//                         });
\t\t\t\t//                     });
\t\t\t\t//                 }
\t\t\t\t//                 setReCaptchaToken17134145226620a17ab5a95();
\t\t\t\t//                 setInterval(setReCaptchaToken17134145226620a17ab5a95, 110000);
\t\t\t\t//             }
\t\t\t\t//             if (typeof window.reCaptchaFunctions === 'undefined') {
\t\t\t\t//                 window.reCaptchaFunctions = [];
\t\t\t\t//             }
\t\t\t\t//             window.reCaptchaFunctions.push(initSetReCaptchaToken17134145226620a17ab5a95);
\t\t\t\t//             jQuery('#w4').yiiActiveForm([{ \"id\": \"feedbackform-phone\", \"name\": \"phone\", \"container\": \".field-feedbackform-phone\", \"input\": \"#feedbackform-phone\", \"validate\": function (attribute, value, messages, deferred, \$form) { value = yii.validation.trim(\$form, attribute, [], value); yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «Номер телефона».\" }); yii.validation.regularExpression(value, messages, { \"pattern\": /^\\+7\\s\\(\\d{3}\\)\\s\\d{3}-\\d{2}-\\d{2}\$/, \"not\": false, \"message\": \"Номер телефона должен быть в формате +7 (XXX) XXX-XX-XX\", \"skipOnEmpty\": 1 }); } }, { \"id\": \"feedbackform-fio\", \"name\": \"fio\", \"container\": \".field-feedbackform-fio\", \"input\": \"#feedbackform-fio\", \"validate\": function (attribute, value, messages, deferred, \$form) { value = yii.validation.trim(\$form, attribute, [], value); yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «ФИО».\" }); } }], []);
\t\t\t\t//         });</script>
\t</body>

</html>
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
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kg/template/common/home.twig", "");
    }
}
