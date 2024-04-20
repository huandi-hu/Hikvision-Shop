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

/* kg/template/common/footer.twig */
class __TwigTemplate_f316bda17a7057323dd6c9f6912136f81e7164e53456d5061d31db66a8da2af8 extends Template
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
        echo "</div></div><footer>
<div class=\"container\">
\t<div class=\"row\">
\t\t";
        // line 4
        if (($context["informations"] ?? null)) {
            // line 5
            echo "\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<h5>";
            // line 6
            echo ($context["text_information"] ?? null);
            echo "</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 9
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 10);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 10);
                echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 16
        echo "\t\t<div class=\"col-sm-3\">
\t\t\t<h5>";
        // line 17
        echo ($context["text_service"] ?? null);
        echo "</h5>
\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 20
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 23
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 26
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"col-sm-3\">
\t\t\t<h5>";
        // line 31
        echo ($context["text_extra"] ?? null);
        echo "</h5>
\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 34
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 37
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 40
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 43
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"col-sm-3\">
\t\t\t<h5>";
        // line 48
        echo ($context["text_account"] ?? null);
        echo "</h5>
\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 51
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 54
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 57
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 60
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<hr>
\t<p>";
        // line 66
        echo ($context["powered"] ?? null);
        echo "</p>
</div></footer>";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 67);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 67);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 67);
            echo "\"/>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 68
            echo " <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "<!--
\t\t\t\t\t\t\t\t\t\t\tOpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
\t\t\t\t\t\t\t\t\t\t\tPlease donate via PayPal to donate@opencart.com
\t\t\t\t\t\t\t\t\t\t//--> <script type=\"text/javascript\">let counter1712587543661403171c556 = function () {
\t\t\t\t\t\t\t\t\t\t\t\t\twindow.removeEventListener('mousemove', counter1712587543661403171c556);
\t\t\t\t\t\t\t\t\t\t\t\t\tvar _tmr = window._tmr || (window._tmr = []);
\t\t\t\t\t\t\t\t\t\t\t\t\t_tmr.push({ id: \"2710577\", type: \"pageView\", start: (new Date()).getTime() });
\t\t\t\t\t\t\t\t\t\t\t\t\t(function (d, w, id) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (d.getElementById(id)) return;
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar ts = d.createElement(\"script\"); ts.type = \"text/javascript\"; ts.async = true; ts.id = id;
\t\t\t\t\t\t\t\t\t\t\t\t\t\tts.src = (d.location.protocol == \"https:\" ? \"https:\" : \"http:\") + \"//top-fwz1.mail.ru/js/code.js\";
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar f = function () { var s = d.getElementsByTagName(\"script\")[0]; s.parentNode.insertBefore(ts, s); };
\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (w.opera == \"[object Opera]\") { d.addEventListener(\"DOMContentLoaded\", f, false); } else { f(); }
\t\t\t\t\t\t\t\t\t\t\t\t\t})(document, window, \"topmailru-code\");
\t\t\t\t\t\t\t\t\t\t\t\t}; window.addEventListener('mousemove', counter1712587543661403171c556);</script><noscript>
<div style=\"position:absolute;left:-10000px;\">
\t<img src=\"//top-fwz1.mail.ru/counter?id=2710577;js=na\" style=\"border:0;\" height=\"1\" width=\"1\" alt=\"Рейтинг@Mail.ru\"/></div></noscript> <script type=\"text/javascript\">let counter1712587543661403171c55b = function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twindow.removeEventListener('mousemove', counter1712587543661403171c55b);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(function (m, e, t, r, i, k, a) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tm[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tm[i].l = 1 * new Date(); k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(window, document, \"script\", \"https://mc.yandex.ru/metrika/tag.js\", \"ym\");
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tym(88811134, \"init\", {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclickmap: true,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttrackLinks: true,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\taccurateTrackBounce: true,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twebvisor: true
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}; window.addEventListener('mousemove', counter1712587543661403171c55b);</script><noscript>
<div><img src=\"https://mc.yandex.ru/watch/88811134\" style=\"position:absolute; left:-9999px;\" alt/></div></noscript></div></div><div class=\"fixed-footer m-fixed-footer\"><div class=\"wrapper wrapper_full\"><div class=\"product-brief__menu-container\">
<ul class=\"product-brief__menu\">
\t<li class=\"product-brief__menu-item\">
\t\t<a class=\"product-brief__menu-item-link\" href=\"/how-to-order\">Как сделать
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tзаказ</a>
\t</li>
</ul></div><div class=\"fixed-footer__right-container\">
<div class=\"user-counters\">
\t<div class=\"user-counters__item\">
\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-left-right\" viewbox=\"0 0 16 16\">
\t\t\t<path fill-rule=\"evenodd\" d=\"M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z\"/>
\t\t</svg>
\t\t<a class=\"user-counters__item-link\" href=\"/products/comparison/27\">Сравнить</a>
\t</div>
\t<div class=\"user-counters__item\">
\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cart-fill\" viewbox=\"0 0 16 16\">
\t\t\t<path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
\t\t</svg>
\t\t<a class=\"user-counters__item-link\" href=\"./index.php?route=checkout/cart\">Корзина</a>

\t</div>
</div>
<button class=\"btn btn-primary btn-block scroll-up-button\" id=\"scroll-up-button\" title=\"В начало страницы\">
\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-up\" viewbox=\"0 0 16 16\">
\t\t<path fill-rule=\"evenodd\" d=\"M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z\"/>
\t</svg>
</button></div></div></div><button class=\"btn btn-primary affix\" data-toggle=\"modal\" data-target=\"#question-dialog\"><i class=\"fa fa-question-circle\"></i>Задать вопрос</button><dialog id=\"question-dialog\" class=\"modal-custom\"><button class=\"dialog-close-btn\" data-dismiss=\"modal\" type=\"button\"><img src=\"/img/cross.svg\" alt/></button><div class=\"dialog-title\">Задать вопрос</div><div class=\"dialog-sub-title\">Мы позвоним Вам в ближайшее время</div><form id=\"w2\" action=\"/callback/question\" method=\"post\" data-pjax=\"0\"><input type=\"hidden\" name=\"_csrf-frontend\" value=\"QtTH-MugPfCnhTjWUh3rc014TQe5405TuNZJeN55Z4on4bS8g_N-m9HhSbcYcYo9GxYhQoiHICn8sAIs7SYqvQ==\"><div class=\"form-group\">
<div class=\"form-group field-questionform-phone required\">
\t<label class=\"required-label\" for=\"questionform-phone\">Номер телефона</label>
\t<input type=\"text\" id=\"questionform-phone\" class=\"form-control\" name=\"QuestionForm[phone]\" placeholder=\"+7 (999) 999-99-99\" aria-required=\"true\" data-plugin-inputmask=\"inputmask_8b2a4bfb\">
\t<div class=\"help-block\"></div>
</div></div><div class=\"form-group\">
<div class=\"form-group field-questionform-fio required\">
\t<label class=\"required-label\" for=\"questionform-fio\">ФИО</label>
\t<input type=\"text\" id=\"questionform-fio\" class=\"form-control\" name=\"QuestionForm[fio]\" placeholder=\"Иванов Иван Иванович\" aria-required=\"true\">
\t<div class=\"help-block\"></div>
</div></div><div class=\"form-group\">
<div class=\"form-group field-questionform-question\">
\t<label class=\"control-label\" for=\"questionform-question\">Вопрос</label>
\t<textarea id=\"questionform-question\" class=\"form-control\" name=\"QuestionForm[question]\" placeholder=\"Хочу купить товар (название, код)\"></textarea>
\t<div class=\"help-block\"></div>
</div></div><div class=\"form-group\">
<div class=\"form-group field-questionform-captcha\"><input type=\"hidden\" id=\"questionform-captcha\" class=\"form-control\" name=\"QuestionForm[captcha]\">
\t<div class=\"help-block\"></div>
</div></div><button type=\"submit\" class=\"btn btn-primary btn-block\">Отправить</button></form></dialog><dialog id=\"callback-dialog\" class=\"modal-custom\"><button class=\"dialog-close-btn\" data-dismiss=\"modal\" type=\"button\"><img src=\"https://www.hikvision-shop.ru/img/cross.svg\" alt/></button><div class=\"dialog-title\">Заказ на обратный звонок</div><div class=\"dialog-sub-title\">Мы позвоним Вам в ближайшее время</div><form id=\"w3\" action=\"/callback\" method=\"post\" data-pjax=\"0\"><input type=\"hidden\" name=\"_csrf-frontend\" value=\"QtTH-MugPfCnhTjWUh3rc014TQe5405TuNZJeN55Z4on4bS8g_N-m9HhSbcYcYo9GxYhQoiHICn8sAIs7SYqvQ==\"><div class=\"form-group\">
<div class=\"form-group field-callbackform-phone required\">
\t<label class=\"required-label\" for=\"callbackform-phone\">Номер телефона</label>
\t<input type=\"text\" id=\"callbackform-phone\" class=\"form-control\" name=\"CallbackForm[phone]\" placeholder=\"+7 (999) 999-99-99\" aria-required=\"true\" data-plugin-inputmask=\"inputmask_8b2a4bfb\">
\t<div class=\"help-block\"></div>
</div></div><div class=\"form-group\">
<div class=\"form-group field-callbackform-fio required\">
\t<label class=\"required-label\" for=\"callbackform-fio\">ФИО</label>
\t<input type=\"text\" id=\"callbackform-fio\" class=\"form-control\" name=\"CallbackForm[fio]\" placeholder=\"Иванов Иван Иванович\" aria-required=\"true\">
\t<div class=\"help-block\"></div>
</div></div><div class=\"form-group\">
<div class=\"form-group field-callbackform-question\">
\t<label class=\"control-label\" for=\"callbackform-question\">Вопрос</label>
\t<textarea id=\"callbackform-question\" class=\"form-control\" name=\"CallbackForm[question]\" placeholder=\"Хочу купить товар (название, код)\"></textarea>
\t<div class=\"help-block\"></div>
</div></div><div class=\"form-group\">
<div class=\"form-group field-callbackform-captcha\"><input type=\"hidden\" id=\"callbackform-captcha\" class=\"form-control\" name=\"CallbackForm[captcha]\">
\t<div class=\"help-block\"></div>
</div></div><button type=\"submit\" class=\"btn btn-primary btn-block\">Отправить</button></form></dialog><dialog id=\"feedback-dialog\" class=\"modal-custom\"><button class=\"dialog-close-btn\" data-dismiss=\"modal\" type=\"button\"><img src=\"/img/cross.svg\" alt/></button><div class=\"dialog-title\">Обратный звонок</div><div class=\"dialog-sub-title\">Мы позвоним Вам в ближайшее время</div><form id=\"w4\" action=\"/callback/feedback\" method=\"post\" data-pjax=\"0\"><input type=\"hidden\" name=\"_csrf-frontend\" value=\"QtTH-MugPfCnhTjWUh3rc014TQe5405TuNZJeN55Z4on4bS8g_N-m9HhSbcYcYo9GxYhQoiHICn8sAIs7SYqvQ==\"><div class=\"form-group\">
<div class=\"form-group field-feedbackform-phone required\">
\t<label class=\"required-label\" for=\"feedbackform-phone\">Номер телефона</label>
\t<input type=\"text\" id=\"feedbackform-phone\" class=\"form-control\" name=\"FeedbackForm[phone]\" placeholder=\"+7 (999) 999-99-99\" aria-required=\"true\" data-plugin-inputmask=\"inputmask_8b2a4bfb\">
\t<div class=\"help-block\"></div>
</div></div><div class=\"form-group\">
<div class=\"form-group field-feedbackform-fio required\">
\t<label class=\"required-label\" for=\"feedbackform-fio\">ФИО</label>
\t<input type=\"text\" id=\"feedbackform-fio\" class=\"form-control\" name=\"FeedbackForm[fio]\" placeholder=\"Иванов Иван Иванович\" aria-required=\"true\">
\t<div class=\"help-block\"></div>
</div></div><div class=\"form-group\">
<div class=\"form-group field-feedbackform-question\">
\t<label class=\"control-label\" for=\"feedbackform-question\">Вопрос</label>
\t<textarea id=\"feedbackform-question\" class=\"form-control\" name=\"FeedbackForm[question]\" placeholder=\"Хочу купить товар (название, код)\"></textarea>
\t<div class=\"help-block\"></div>
</div></div><div class=\"form-group\">
<div class=\"form-group field-feedbackform-captcha\"><input type=\"hidden\" id=\"feedbackform-captcha\" class=\"form-control\" name=\"FeedbackForm[captcha]\">
\t<div class=\"help-block\"></div>
</div></div><button type=\"submit\" class=\"btn btn-primary btn-block\">Отправить</button></form></dialog><div class=\"popup-top\" id=\"productsComparison\"><div class=\"popup-top__inner\"><div class=\"popup-top__content\">
<div class=\"popup-top__container-image\">
\t<img class=\"popup-top__image\" id=\"productsComparisonImage\" src alt></div>
<div class=\"popup-top__container-text\">
\t<div class=\"popup-top__header\" id=\"productsComparisonHeader\"></div>
\t<div id=\"productsComparisonText\"></div>
</div></div><div class=\"popup-top__container-btn\">
<a class=\"btn btn-primary popup-top__btn\" href=\"/products/comparison/27\">Сравнить</a></div><button class=\"popup-top__close-btn\" type=\"button\" id=\"productsComparisonCloseBtn\"><img src=\"/img/cross.svg\" alt/></button></div></div> <script src=\"./catalog/view/theme/shop/assets/resources/index.js\"></script> <script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// jQuery((\$) => {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \tconst reCaptchaSiteKey = \"6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-\";
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t// Initialize PJAX for product links
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\$(document).pjax(\"#products-pjax a\", {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\tpush: true,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\treplace: false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\ttimeout: 10000,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\tscrollTo: false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\tcontainer: \"#products-pjax\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t// Handle form submission with PJAX
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\$(document).off(\"submit\", \"#products-pjax form[data-pjax]\").on(\"submit\", \"#products-pjax form[data-pjax]\", (event) => {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t\$.pjax.submit(event, {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t\tpush: true,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t\treplace: false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t\ttimeout: 10000,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t\tscrollTo: false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t\tcontainer: \"#products-pjax\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t// Initialize reCAPTCHA
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \tinitReCaptcha();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t// Function to initialize reCAPTCHA
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \tfunction initReCaptcha() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t\$(document).off('DOMContentLoaded', initReCaptcha);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\tconst script = document.createElement('script');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\tscript.setAttribute('src', `//www.google.com/recaptcha/api.js?render=\${reCaptchaSiteKey}`);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\tdocument.head.appendChild(script);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\tscript.onload = () => {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t\twindow.reCaptchaFunctions.forEach(func => func());
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t};
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t// Initialize reCAPTCHA token
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \tfunction initSetReCaptchaToken(action, id) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\tconst setReCaptchaToken = () => {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t\tgrecaptcha.ready(() => {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t\t\tgrecaptcha.execute(reCaptchaSiteKey, { action: action }).then((token) => {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t\t\t\t\$(`#\${id}`).val(token);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t\t\t\tconst jsCallback = \"\"; // Consider removing this line if unused
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t\t\t\tif (jsCallback) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t\t\t\t\teval(`(\${jsCallback})(token)`);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\tsetReCaptchaToken();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\tsetInterval(setReCaptchaToken, 110000);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t// Initialize reCAPTCHA for different forms
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \tconst forms = [
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t{ action: \"/login\", id: \"loginformmodal-captcha\" },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t{ action: \"/callback/question\", id: \"questionform-captcha\" },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t{ action: \"/callback\", id: \"callbackform-captcha\" },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\t{ action: \"/callback/feedback\", id: \"feedbackform-captcha\" }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t];
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \tforms.forEach(form => {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\tinitSetReCaptchaToken(form.action, form.id);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t// Activate Yii active forms
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\$('#w0').yiiActiveForm([{ \"id\": \"loginformmodal-email\", \"name\": \"email\", \"container\": \".field-loginformmodal-email\", \"input\": \"#loginformmodal-email\", \"validate\": function (attribute, value, messages, deferred, \$form) { yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «Email».\" }); } }, { \"id\": \"loginformmodal-password\", \"name\": \"password\", \"container\": \".field-loginformmodal-password\", \"input\": \"#loginformmodal-password\", \"validate\": function (attribute, value, messages, deferred, \$form) { yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «Пароль».\" }); } }]);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\$('#w1').yiiActiveForm([{ \"id\": \"passwordresetrequestform-email\", \"name\": \"email\", \"container\": \".field-passwordresetrequestform-email\", \"input\": \"#passwordresetrequestform-email\", \"validate\": function (attribute, value, messages, deferred, \$form) { yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «Электронная почта».\" }); value = yii.validation.trim(\$form, attribute, [], value); yii.validation.email(value, messages, { \"pattern\": /^[a-zA-Z0-9!#\$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-zA-Z0-9!#\$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\$/, \"fullPattern\": /^[^@]*<[a-zA-Z0-9!#\$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-zA-Z0-9!#\$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>\$/, \"allowName\": false, \"message\": \"Значение «Электронная почта» не является правильным email адресом.\", \"enableIDN\": false, \"skipOnEmpty\": 1 }); } }]);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\$(\"#questionform-phone\").inputmask(inputmask_8b2a4bfb);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\$('#w2').yiiActiveForm([{ \"id\": \"questionform-phone\", \"name\": \"phone\", \"container\": \".field-questionform-phone\", \"input\": \"#questionform-phone\", \"validate\": function (attribute, value, messages, deferred, \$form) { value = yii.validation.trim(\$form, attribute, [], value); yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «Номер телефона».\" }); yii.validation.regularExpression(value, messages, { \"pattern\": /^\\+7\\s\\(\\d{3}\\)\\s\\d{3}-\\d{2}-\\d{2}\$/, \"not\": false, \"message\": \"Номер телефона должен быть в формате +7 (XXX) XXX-XX-XX\", \"skipOnEmpty\": 1 }); } }, { \"id\": \"questionform-fio\", \"name\": \"fio\", \"container\": \".field-questionform-fio\", \"input\": \"#questionform-fio\", \"validate\": function (attribute, value, messages, deferred, \$form) { value = yii.validation.trim(\$form, attribute, [], value); yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «ФИО».\" }); } }]);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\$(\"#callbackform-phone\").inputmask(inputmask_8b2a4bfb);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\$('#w3').yiiActiveForm([{ \"id\": \"callbackform-phone\", \"name\": \"phone\", \"container\": \".field-callbackform-phone\", \"input\": \"#callbackform-phone\", \"validate\": function (attribute, value, messages, deferred, \$form) { value = yii.validation.trim(\$form, attribute, [], value); yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «Номер телефона».\" }); yii.validation.regularExpression(value, messages, { \"pattern\": /^\\+7\\s\\(\\d{3}\\)\\s\\d{3}-\\d{2}-\\d{2}\$/, \"not\": false, \"message\": \"Номер телефона должен быть в формате +7 (XXX) XXX-XX-XX\", \"skipOnEmpty\": 1 }); } }, { \"id\": \"callbackform-fio\", \"name\": \"fio\", \"container\": \".field-callbackform-fio\", \"input\": \"#callbackform-fio\", \"validate\": function (attribute, value, messages, deferred, \$form) { value = yii.validation.trim(\$form, attribute, [], value); yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «ФИО».\" }); } }]);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\$(\"#feedbackform-phone\").inputmask(inputmask_8b2a4bfb);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// \t\$('#w4').yiiActiveForm([{ \"id\": \"feedbackform-phone\", \"name\": \"phone\", \"container\": \".field-feedbackform-phone\", \"input\": \"#feedbackform-phone\", \"validate\": function (attribute, value, messages, deferred, \$form) { value = yii.validation.trim(\$form, attribute, [], value); yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «Номер телефона».\" }); yii.validation.regularExpression(value, messages, { \"pattern\": /^\\+7\\s\\(\\d{3}\\)\\s\\d{3}-\\d{2}-\\d{2}\$/, \"not\": false, \"message\": \"Номер телефона должен быть в формате +7 (XXX) XXX-XX-XX\", \"skipOnEmpty\": 1 }); } }, { \"id\": \"feedbackform-fio\", \"name\": \"fio\", \"container\": \".field-feedbackform-fio\", \"input\": \"#feedbackform-fio\", \"validate\": function (attribute, value, messages, deferred, \$form) { value = yii.validation.trim(\$form, attribute, [], value); yii.validation.required(value, messages, { \"message\": \"Необходимо заполнить «ФИО».\" }); } }]);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// });
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script> <script src=\"./catalog/view/javascript/common.js\"></script> <script src=\"./catalog/view/javascript/qrcode.js\"></script> <script src=\"";
        // line 262
        echo ($context["script"] ?? null);
        echo "\" type=\"text/javascript\"></script>";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 262);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 262);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 262);
            echo "\"/> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            echo " <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</body></html>
";
    }

    public function getTemplateName()
    {
        return "kg/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 262,  213 => 68,  195 => 67,  191 => 66,  180 => 60,  172 => 57,  164 => 54,  156 => 51,  150 => 48,  140 => 43,  132 => 40,  124 => 37,  116 => 34,  110 => 31,  100 => 26,  92 => 23,  84 => 20,  78 => 17,  75 => 16,  70 => 13,  59 => 10,  56 => 9,  52 => 8,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kg/template/common/footer.twig", "");
    }
}
