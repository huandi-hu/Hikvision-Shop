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
class __TwigTemplate_f5ec69cd12a91fd542f8fa7b89134fcd0d70026bd9312a4283d1900a862df242 extends Template
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
        // line 6
        echo "        
jQuery(document).pjax(\"#products-pjax a\",
{\"push\":true,\"replace\":false,\"timeout\":10000,\"scrollTo\":false,\"container\":\"#products-pjax\"});
jQuery(document).off(\"submit\", \"#products-pjax form[data-pjax]\").on(\"submit\",
\"#products-pjax form[data-pjax]\", function (event) {jQuery.pjax.submit(event,
{\"push\":true,\"replace\":false,\"timeout\":10000,\"scrollTo\":false,\"container\":\"#products-pjax\"});});
Visit.init(878209);
\"use strict\";
function initSetReCaptchaToken1712918738661910d2b934c() {
function setReCaptchaToken1712918738661910d2b934c() {
grecaptcha.ready(function() {
grecaptcha.execute(\"6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-\", {action:
\"/login\"}).then(function(token) {
jQuery(\"#\" + \"loginformmodal-captcha\").val(token);
const jsCallback = \"\";
if (jsCallback) {
eval(\"(\" + jsCallback + \")(token)\");
}
});
});
}
setReCaptchaToken1712918738661910d2b934c();
setInterval(setReCaptchaToken1712918738661910d2b934c, 110000);
}
if (typeof window.reCaptchaFunctions === 'undefined') {
window.reCaptchaFunctions = [];
}
window.reCaptchaFunctions.push(initSetReCaptchaToken1712918738661910d2b934c);
\"use strict\";
function initReCaptcha() {
jQuery(document).off('mousemove', initReCaptcha);
let script = document.createElement('script');
script.setAttribute('src',
'//www.google.com/recaptcha/api.js?render=6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-');
document.head.appendChild(script);
script.onload = function() {
window.reCaptchaFunctions.forEach(function(func) {
func();
});
};
}
jQuery(document).on('mousemove', initReCaptcha);
jQuery('#w0').yiiActiveForm([{\"id\":\"loginformmodal-email\",\"name\":\"email\",\"container\":\".field-loginformmodal-email\",\"input\":\"#loginformmodal-email\",\"validate\":function
(attribute, value, messages, deferred, \$form) {yii.validation.required(value,
messages,
{\"message\":\"Необходимо заполнить «Email».\"});}},{\"id\":\"loginformmodal-password\",\"name\":\"password\",\"container\":\".field-loginformmodal-password\",\"input\":\"#loginformmodal-password\",\"validate\":function
(attribute, value, messages, deferred, \$form) {yii.validation.required(value,
messages, {\"message\":\"Необходимо заполнить «Пароль».\"});}}], []);
jQuery('#w1').yiiActiveForm([{\"id\":\"passwordresetrequestform-email\",\"name\":\"email\",\"container\":\".field-passwordresetrequestform-email\",\"input\":\"#passwordresetrequestform-email\",\"validate\":function
(attribute, value, messages, deferred, \$form) {yii.validation.required(value,
messages, {\"message\":\"Необходимо заполнить «Электронная почта».\"});value =
yii.validation.trim(\$form, attribute, [], value);yii.validation.email(value,
messages,
{\"pattern\":/^[a-zA-Z0-9!#\$%&amp;'*+\\/=?^_`{|}~-]+(?:\\.[a-zA-Z0-9!#\$%&amp;'*+\\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\$/,\"fullPattern\":/^[^@]*&lt;[a-zA-Z0-9!#\$%&amp;'*+\\/=?^_`{|}~-]+(?:\\.[a-zA-Z0-9!#\$%&amp;'*+\\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?&gt;\$/,\"allowName\":false,\"message\":\"Значение «Электронная почта» не является правильным email адресом.\",\"enableIDN\":false,\"skipOnEmpty\":1});}}],
[]);
jQuery(\"#questionform-phone\").inputmask(inputmask_8b2a4bfb);
\"use strict\";
function initSetReCaptchaToken1712918738661910d2ba6db() {
function setReCaptchaToken1712918738661910d2ba6db() {
grecaptcha.ready(function() {
grecaptcha.execute(\"6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-\", {action:
\"/callback/question\"}).then(function(token) {
jQuery(\"#\" + \"questionform-captcha\").val(token);
const jsCallback = \"\";
if (jsCallback) {
eval(\"(\" + jsCallback + \")(token)\");
}
});
});
}
setReCaptchaToken1712918738661910d2ba6db();
setInterval(setReCaptchaToken1712918738661910d2ba6db, 110000);
}
if (typeof window.reCaptchaFunctions === 'undefined') {
window.reCaptchaFunctions = [];
}
window.reCaptchaFunctions.push(initSetReCaptchaToken1712918738661910d2ba6db);
jQuery('#w2').yiiActiveForm([{\"id\":\"questionform-phone\",\"name\":\"phone\",\"container\":\".field-questionform-phone\",\"input\":\"#questionform-phone\",\"validate\":function
(attribute, value, messages, deferred, \$form) {value =
yii.validation.trim(\$form, attribute, [], value);yii.validation.required(value,
messages,
{\"message\":\"Необходимо заполнить «Номер телефона».\"});yii.validation.regularExpression(value,
messages,
{\"pattern\":/^\\+7\\s\\(\\d{3}\\)\\s\\d{3}-\\d{2}-\\d{2}\$/,\"not\":false,\"message\":\"Номер телефона должен быть в формате +7 (XXX) XXX-XX-XX\",\"skipOnEmpty\":1});}},{\"id\":\"questionform-fio\",\"name\":\"fio\",\"container\":\".field-questionform-fio\",\"input\":\"#questionform-fio\",\"validate\":function
(attribute, value, messages, deferred, \$form) {value =
yii.validation.trim(\$form, attribute, [], value);yii.validation.required(value,
messages, {\"message\":\"Необходимо заполнить «ФИО».\"});}}], []);
jQuery(\"#callbackform-phone\").inputmask(inputmask_8b2a4bfb);
\"use strict\";
function initSetReCaptchaToken1712918738661910d2ba90e() {
function setReCaptchaToken1712918738661910d2ba90e() {
grecaptcha.ready(function() {
grecaptcha.execute(\"6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-\", {action:
\"/callback\"}).then(function(token) {
jQuery(\"#\" + \"callbackform-captcha\").val(token);
const jsCallback = \"\";
if (jsCallback) {
eval(\"(\" + jsCallback + \")(token)\");
}
});
});
}
setReCaptchaToken1712918738661910d2ba90e();
setInterval(setReCaptchaToken1712918738661910d2ba90e, 110000);
}
if (typeof window.reCaptchaFunctions === 'undefined') {
window.reCaptchaFunctions = [];
}
window.reCaptchaFunctions.push(initSetReCaptchaToken1712918738661910d2ba90e);
jQuery('#w3').yiiActiveForm([{\"id\":\"callbackform-phone\",\"name\":\"phone\",\"container\":\".field-callbackform-phone\",\"input\":\"#callbackform-phone\",\"validate\":function
(attribute, value, messages, deferred, \$form) {value =
yii.validation.trim(\$form, attribute, [], value);yii.validation.required(value,
messages,
{\"message\":\"Необходимо заполнить «Номер телефона».\"});yii.validation.regularExpression(value,
messages,
{\"pattern\":/^\\+7\\s\\(\\d{3}\\)\\s\\d{3}-\\d{2}-\\d{2}\$/,\"not\":false,\"message\":\"Номер телефона должен быть в формате +7 (XXX) XXX-XX-XX\",\"skipOnEmpty\":1});}},{\"id\":\"callbackform-fio\",\"name\":\"fio\",\"container\":\".field-callbackform-fio\",\"input\":\"#callbackform-fio\",\"validate\":function
(attribute, value, messages, deferred, \$form) {value =
yii.validation.trim(\$form, attribute, [], value);yii.validation.required(value,
messages, {\"message\":\"Необходимо заполнить «ФИО».\"});}}], []);
jQuery(\"#feedbackform-phone\").inputmask(inputmask_8b2a4bfb);
\"use strict\";
function initSetReCaptchaToken1712918738661910d2baabf() {
function setReCaptchaToken1712918738661910d2baabf() {
grecaptcha.ready(function() {
grecaptcha.execute(\"6Lf0YdUmAAAAAJf2_lxt2sswhTSiBGnzp0ffbgb-\", {action:
\"/callback/feedback\"}).then(function(token) {
jQuery(\"#\" + \"feedbackform-captcha\").val(token);
const jsCallback = \"\";
if (jsCallback) {
eval(\"(\" + jsCallback + \")(token)\");
}
});
});
}
setReCaptchaToken1712918738661910d2baabf();
setInterval(setReCaptchaToken1712918738661910d2baabf, 110000);
}
if (typeof window.reCaptchaFunctions === 'undefined') {
window.reCaptchaFunctions = [];
}
window.reCaptchaFunctions.push(initSetReCaptchaToken1712918738661910d2baabf);
jQuery('#w4').yiiActiveForm([{\"id\":\"feedbackform-phone\",\"name\":\"phone\",\"container\":\".field-feedbackform-phone\",\"input\":\"#feedbackform-phone\",\"validate\":function
(attribute, value, messages, deferred, \$form) {value =
yii.validation.trim(\$form, attribute, [], value);yii.validation.required(value,
messages,
{\"message\":\"Необходимо заполнить «Номер телефона».\"});yii.validation.regularExpression(value,
messages,
{\"pattern\":/^\\+7\\s\\(\\d{3}\\)\\s\\d{3}-\\d{2}-\\d{2}\$/,\"not\":false,\"message\":\"Номер телефона должен быть в формате +7 (XXX) XXX-XX-XX\",\"skipOnEmpty\":1});}},{\"id\":\"feedbackform-fio\",\"name\":\"fio\",\"container\":\".field-feedbackform-fio\",\"input\":\"#feedbackform-fio\",\"validate\":function
(attribute, value, messages, deferred, \$form) {value =
yii.validation.trim(\$form, attribute, [], value);yii.validation.required(value,
messages, {\"message\":\"Необходимо заполнить «ФИО».\"});}}], []);
});";
    }

    public function getTemplateName()
    {
        return "kg/template/common/home.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "kg/template/common/home.twig", "");
    }
}
