<?php
//use yii\helpers\Html;
//
//$asset = \app\assets\AppAsset::register($this);
//?>
<?php //$this->beginPage() ?>
<!--    <!DOCTYPE html>-->
<!--    <html lang="--><?//= Yii::$app->language ?><!--">-->
<!--    <head>-->
<!--        <meta charset="--><?//= Yii::$app->charset ?><!--">-->
<!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--        --><?//= Html::csrfMetaTags() ?>
<!--        <title>--><?//= Html::encode($this->title) ?><!--</title>-->
<!--        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>-->
<!--        <link rel="shortcut icon" href="--><?//= $asset->baseUrl ?><!--/favicon.ico" type="image/x-icon">-->
<!--        <link rel="icon" href="--><?//= $asset->baseUrl ?><!--/favicon.ico" type="image/x-icon">-->
<!--        --><?php //$this->head() ?>
<!--    </head>-->
<!--    <body>-->
<!--    --><?php //$this->beginBody() ?>
<!--    --><?//= $content ?>
<!--    --><?php //$this->endBody() ?>
<!--    </body>-->
<!--    </html>-->
<?php //$this->endPage() ?>

<?php
    use yii\helpers\Html;
    $asset = \app\assets\AppAsset::register($this);
//var_dump($asset);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
    <meta charset="utf-8" content="text/html"/>
    <title>Заказать Деда Мороза и Снегурочку в Минске, написать письмо - на дом, на утренник, в ресторан : DeduMorozu.BY</title>
    <meta name='yandex-verification' content='6bc59ebb0d4ea259' />
    <meta name="description"
          content="Дед Мороз и Снегурочка спешат к вам, чтобы поздравить с Новым 2015 Годом! Вы можете заказать Деда Мороза и Снегурочку в Минске на дом, на корпоратив, в офис или ресторан. Вы можете у нас на сайте написать письмо Деду Морозу. Наши цены начинаются всего от 350 тыс. руб. "/>
    <meta name="keywords"
          content="дед мороз минск, дед мороз и снегурочка минск, заказ Деда Мороза, вызов Деда Мороза, заказ Деда Мороза на дом, заказать Деда Мороза, вызвать Деда Мороза, Дед Мороз детям, Дед Мороз ребенку, Дед Мороз для детей, дед мороз на новый год, агентство дедов морозов, дед мороз 2015, дед мороз и снегурочка на новый год 2015, празднование нового года, дед мороз цены, заказ деда мороза цены"/>
    <?php $this->head() ?>
<!--    <link rel="shortcut icon" href="images/favicon-38.ico" type="image/png"/>-->
<!--    <link rel="stylesheet" href="css/timepicker.css"/>-->
<!--    <link rel="stylesheet" href="skewer_build/libs/fancyBox/jquery.fancybox.css@v=1380189267.css" type="text/css"-->
<!--          media="screen, projection, all"/>-->
<!--    <link rel="stylesheet" href="skewer_build/libs/datepicker/jquery.datepicker.css@v=1380189267.css" type="text/css"-->
<!--          media="screen, projection, all"/>-->
<!--    <link rel="stylesheet" href="css/default_default.css@v=1380189267.css" type="text/css"-->
<!--          media="screen, projection, all"/>-->
 <!--[if IE 7 ]>-->
<!--    <link rel="stylesheet" href="css/default_ie-7.css?v=1380189267" type="text/css" media="screen, projection, all"/>-->
  <!--[endif]-->
<!--    <link rel="stylesheet" href="css/add_default.css@v=1380189267.css" type="text/css" media="screen, projection, all"/>-->
<!--    <script src="skewer_build/libs/jquery/jquery.js@v=1380189267" type="text/javascript" charset="utf-8"></script>-->
<!--    <script src="skewer_build/libs/fancyBox/jquery.mousewheel-3.0.6.pack.js@v=1380189267" type="text/javascript"-->
<!--            charset="utf-8"></script>-->
<!--    <script src="skewer_build/libs/fancyBox/jquery.fancybox.pack.js@v=1380189267" type="text/javascript"-->
<!--            charset="utf-8"></script>-->
<!--    <script src="skewer_build/libs/datepicker/jquery.datepicker.js@v=1380189267" type="text/javascript"-->
<!--            charset="utf-8"></script>-->
<!--    <script src="skewer_build/libs/datepicker/jquery.datepicker-ru.js@v=1380189267" type="text/javascript"-->
<!--            charset="utf-8"></script>-->
<!--    <script src="skewer_build/Page/Events/js/date.js@v=1380189267" type="text/javascript" charset="utf-8"></script>-->
<!--    <script src="skewer_build/Page/Events/js/datepicker.js@v=1380189267" type="text/javascript"-->
<!--            charset="utf-8"></script>-->
<!--    <script src="skewer_build/Page/EventsPicker/js/datepicker.js@v=1380189267" type="text/javascript"-->
<!--            charset="utf-8"></script>-->
<!--    <script src="skewer_build/Page/Forms/js/formValidator.js@v=1380189267" type="text/javascript"-->
<!--            charset="utf-8"></script>-->
<!--    <script src="skewer_build/Page/Forms/js/jquery.validate.min.js@v=1380189267" type="text/javascript"-->
<!--            charset="utf-8"></script>-->
<!--    <script src="skewer_build/Page/Forms/js/message_ru.js@v=1380189267" type="text/javascript" charset="utf-8"></script>-->
<!--    <script src="skewer_build/Page/Main/js/pageInit.js@v=1380189267" type="text/javascript" charset="utf-8"></script>-->
<!--    <script src="skewer_build/Page/Poll/js/Poll.js@v=1380189267" type="text/javascript" charset="utf-8"></script>-->
<!--    <script src="skewer_build/Page/SpecMenu/js/SpecMenu.js@v=1380189267" type="text/javascript"-->
<!--            charset="utf-8"></script>-->
<!--    <script src="skewer_build/Page/Subscribe/js/Subscribe.js@v=1380189267" type="text/javascript"-->
<!--            charset="utf-8"></script>-->
<!--    <!--<script src="js/jquery.scrollTo-min.js"></script>-->-->
<!--    <script src="js/jquery.scrollUp.js"></script>-->
<!--    <script src="js/jquery.timepicker.min.js"></script>-->
<!--    <script src="js/main.js"></script>-->


</head>
<?php $this->beginBody() ?>
<!---->
<!--<body sktag="page">-->
<div class="l-container">
    <div class="container__page">
        <div class="container__content">
            <div class="b-pilot" sktag="page.head" sklayout="head">
                <div class="b-logo " sktag="page.head.logo"><a href="index.html"><img src="img/logo.png"></a>
                </div>
                <div class="pilot__1 "><p>
                        <span style="font-size: 22px; line-height: 30px;">+375 (25) 751-93-11 (Life)</span></p>

                    <p>
                        <span style="font-size:19px;">e-mail: <a href="mailto: dedmoroz@dedumorozu.by">dedmoroz@dedumorozu.by</a></span>
                    </p>

                </div>
                <div class="pilot__2 "><p>
                        <a class="btn-order" href="#orderletter">Заказать услуги</a></p>

                    <p class="b-callback">
                        <a class="callback" href="contact.html">Заказать обратный звонок</a></p>

                </div>

                <div class="pilot__4 ">
                </div>
                <div class="pilot__5 ">
                </div>
            </div>
            <div class="b-picture2" sklayout="head" sktag="page.head"></div>
            <div class="b-header" sklayout="head">
                <div class="b-sevice" sktag="menu.top">
                    <ul class="level-1" sktag="menu.top.level1">
                        <li class="item-1 on-1"><span><a href="index.html">
                                    <ins></ins>
                                    Главная</a></span>
                        </li>
                        <li class="item-1"><span><a href="price.html">
                                    <ins></ins>
                                    Цены</a></span>
                        </li>
                        <!--<li class="item-1"><span><a href="dopolnitelnye-uslugi/index.html">-->
                        <!--<ins></ins>-->
                        <!--Прочие услуги</a></span>-->
                        <!--</li>-->
                        <li class="item-1 last"><span><a href="about.html">
                                    <ins></ins>
                                    О нас</a></span>
                        </li>
                        <!--<li class="item-1"><span><a href="gallery/index.html">-->
                        <!--<ins></ins>-->
                        <!--Фотографии</a></span>-->
                        <!--&lt;!&ndash;</li>&ndash;&gt;-->
                        <!--<li class="item-1 last"><span><a href="stati/index.html">-->
                        <!--<ins></ins>-->
                        <!--Новогодние истории</a></span>-->
                        <!--</li>    -->
                        <!--<li class="item-1 last"><span><a href="otzyvy/index.html">-->
                        <!--<ins></ins>-->
                        <!--Отзывы</a></span>-->
                        <!--</li>-->
                    </ul>
                </div>

            </div>


            <div class="column column_lc column_cr">
                <div class="column__center">
                    <div class="column__center-indent" sklayout="content">
                        <div class="b-editor" sktag="editor" skeditor="./staticContent"><h1>
                                Напиши Письмо или Закажи Деда Мороза в Минске</h1>

                            <p>
                                Сегодня роль Деда мороза и снегурочки Вы можете попросить исполнить нас, его верных
                                помощников.
                                Мы выполним любой детский каприз – организуем Вашему ребенку или детям незабываемый
                                костюмированный утренник, выездное поздравление или торжественное вручение на дому
                                подарка лично <b>Дедом морозом и Снегурочкой</b>.
                            </p>

                            <p>Создадим праздничное новогоднее настроение –
                                пришлем новогоднюю открытку или письмо от самого <b>Деда Мороза</b> почтой. Или, может быть Вы
                                хотите, чтобы в Ваши двери постучался костюмированный герой с письмом от <b>Дедушки Мороза</b>?
                                Мы это запросто можем устроить!
                            </p>

                            <p>Напишите письмо <b>Деду морозу</b> сами или отправьте письмо с пожеланиями Вашего ребенка на
                                наш электронный ящик <a href="mailto:dedmoroz@dedumorozu.by"/>dedmoroz@dedumorozu.by</a>
                                и мы свяжемся с Вами, чтобы с Вашей помощью
                                осуществить большую детскую мечту.
                            </p>

                            <h2>
                                <span style="color: rgb(56, 50, 45); font-family: Verdana; font-size: 16px; line-height: 1.4;">Даже если вы захотите заказать толпу <b>Дедов Морозов</b> &ndash;
                                    мы это запросто устроим!</span></h2>
                        </div>


                    </div>
                </div>
                <div class="column__center-bg">
                    <div class="column__center-inside"></div>
                </div>
                <div class="column__right-bg">
                    <div class="column__right-inside"></div>
                </div>
            </div>
            <div class="o-block o-block-left order-block__child">
                <h2>
                    Напиши письмо Деду Морозу</h2>

                <div class="prices">
                    <p style="text-decoration: underline;font-size: 20px;font-weight: bold;">Получить письмо:</p>

                    <p>
                        на email - <span style="text-decoration: underline">бесплатно</span>
                    </p>

                    <p>
                        по почте - <span style="text-decoration: underline">от 10 тыс. руб.</span>
                    </p>

                    <p>
                        вручение ответа лично ребенку - <span style="text-decoration: underline">от 40 тыс. руб.</span>
                    </p>
                </div>
                <div class="order">
                    <a class="order-btn to-form" data-target="child" href="#writeletter">Написать письмо</a></div>
            </div>
            <div class="o-block o-block-right order-block__child-sw">
                <h2>
                    Заказ Деда Мороза и Снегурочки для ребенка</h2>

                <div class="prices">
                    <p>
                        до 25 декабря - <span style="text-decoration: underline">от 380 тыс. руб.</span>
                    </p>

                    <p>
                        с 25 декабря по 30 декабря - <span style="text-decoration: underline">от 440 тыс. руб.</span>
                    </p>

                    <p>
                        31 декабря - <span style="text-decoration: underline">от 550 тыс. руб.</span>
                    </p>
                </div>
                <div class="order">
                    <a class="order-btn to-form" data-target="child-sw" href="#orderletter">Заказать</a></div>
            </div>
            <div class="o-block o-block-left order-block__corporate">
                <h2>
                    Заказ Деда Мороза и Снегурочки на утренник</h2>

                <div class="prices">
                    <p>
                        до 25 декабря - <span style="text-decoration: underline">1 млн. руб</span>
                    </p>

                    <p>
                        с 25 декабря по 30 декабря - <span style="text-decoration: underline">1 250 тыс. руб</span>
                    </p>

                    <p>
                        31 декабря - <span style="text-decoration: underline">2 050  млн. руб.</span>
                    </p>
                </div>
                <div class="order">
                    <a class="order-btn to-form" href="#orderletter">Заказать </a></div>
            </div>
            <p>
                &nbsp;</p>
            <a id="writeletter" name="writeletter" href="#writeletter"></a>

            <div class="b-editor content-after"><p>
                    Каждый ребенок в детстве писал письма <b>Деду Морозу</b> о своем заветном желании и ждал чуда в канун Нового
                    года или просил в письме, что хорошо вел себя целый год и просил подарить ему велосипед.
                <p> <b>Сегодня эти мечты становятся явью!</b></p>
                <p>Только письмо не нужно как раньше класть в конверт и ждать ответа, теперь
                    достаточно отправить его на электронный ящик <b>Деду Морозу</b>, а его верные помощники помогут подарить
                    ребенку сказку на яву в преддверие международного праздника – <span style="color:red;font-weight:700;">Нового года!</span></p>
            </div>
            <div class="content-after block-order">
                <h2>Написать письмо Деду Морозу</h2>

                <div class="b-formbox" sktag="modules.forms">
                    <form id="form_write_letter" method="post" action="response.php"
                          enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td class="formbox__left">От кого:<span class="formbox__mark">*</span></td>
                                <td>
                                    <input type="text" class="formbox__input" name="fieldname" id="fieldname" value=""/>

                                    <p class="formbox__spectext"></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="formbox__left">E-mail<span class="formbox__mark">*</span></td>
                                <td>
                                    <input type="text" class="formbox__input" name="fieldname2" id="fieldname2"
                                           value=""/>

                                    <p class="formbox__spectext"></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="formbox__left">
                                    <p>Текст письма:<span class="formbox__mark">*</span></p>
                                </td>
                                <td>
                                    <textarea class="formbox__textarea" name="fieldname1" id="fieldname1"></textarea>

                                    <p class="formbox__spectext"></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="formbox__left">Телефон</td>
                                <td>
                                    <input type="text" class="formbox__input" name="phone" id="fieldname1"
                                           value=""/>

                                    <p class="formbox__spectext"></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="formbox__left">Бесплатный ответ</td>
                                <td>
                                    <input style="width:30px" type="radio" class="formbox__input" checked="checked"
                                           name="post" id="free"
                                           value="free"/>


                                </td>
                            </tr>
                            <tr>
                                <td class="formbox__left">Платный ответ</td>
                                <td>
                                    <input style="width:30px" type="radio" class="formbox__input" name="post" id="pay"
                                           value="pay"/>
                                </td>
                            </tr>

                            <tr>
                                <td class="formbox__left"></td>
                                <td>
                                    <p class="formbox__required"><span class="formbox__mark">*</span> - обязательные для
                                        заполнения поля</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="formbox__left"></td>
                                <td>
                                    <button class="b-formbox__btn" type="submit">Отправить</button>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="cmd" value='sendForm'/>
                        <input type="hidden" name="form_id" id="form_id" value="49"/>
                        <input type="hidden" id="_rules1"
                               value='{"rules":{"fieldname":{"required":true,"maxlength":255},"fieldname1":{"required":true,"maxlength":255},"fieldname2":{"required":true,"maxlength":255,"email":true},"fac":{"required":true,"maxlength":255},"fieldname5":{"required":false,"maxlength":255},"fieldname6":{"required":false,"maxlength":255},"fieldname7":{"required":false,"maxlength":255},"captcha":{"required":1,"maxlength":50,"digits":1}}}'/>
                    </form>
                </div>
            </div>
            <a name="orderletter" id="orderletter" href="#orderletter"></a>

            <div class="b-editor content-after"><p>
                    Заказ Деда Мороза на праздник &ndash; старая, но все столь же прекрасная, традиция. В момент, когда этот
                    персонаж из детства переступает ваш порог, сердце радостно сжимается от ощущения близости к настоящему
                    чуду &ndash; чуду, в которое подспудно продолжаешь верить даже спустя 20 лет. А если в этот момент
                    вокруг Деда Мороза дети водят хоровод, непременно хочется пуститься в пляс и забыть обо всех проблемах
                    уходящего года. Ведь празднование Нового Года &ndash; это всегда повод присмотреться к своей жизни за
                    прошедшее время и изменить что-то к лучшему.</p>

                <p>
                    Некогда заполнять форму?</p>

                <p>
                    Закажите <a href="contact.html">обратный звонок</a>&nbsp;или свяжитесь с нами
                    по телефону&nbsp;+375 (25) 751-93-11 (Life).</p>
            </div>

            <div class="content-after block-order">
                <h2>Заказать Деда Мороза и Снегурочку</h2>

                <div class="b-formbox" sktag="modules.forms">
                    <form id="form_49" method="post" action="response.php"
                          enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td class="formbox__left">Контактное лицо<span class="formbox__mark">*</span></td>
                                <td>
                                    <input type="text" class="formbox__input" name="fieldname" id="fieldname" value=""/>

                                    <p class="formbox__spectext"></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="formbox__left">Телефон<span class="formbox__mark">*</span></td>
                                <td>
                                    <input type="text" class="formbox__input" name="fieldname1" id="fieldname1"
                                           value=""/>

                                    <p class="formbox__spectext"></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="formbox__left">E-mail<span class="formbox__mark">*</span></td>
                                <td>
                                    <input type="text" class="formbox__input" name="fieldname2" id="fieldname2"
                                           value=""/>

                                    <p class="formbox__spectext"></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="formbox__left">Услуга<span class="formbox__mark">*</span></td>
                                <td>
                                    <select class="formbox__select" name="fac" id="fac">
                                        <option value="Заказ Деда Мороза и Снегурочки">
                                            Заказ Деда Мороза и Снегурочки
                                        </option>
                                        <option value="Заказ Деда Мороза и Снегурочки на утренник">Заказ Деда Мороза и
                                            Снегурочки на утренник
                                        </option>
                                    </select>

                                    <p class="formbox__spectext"></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="formbox__left">Желаемая дата и время заказа Деда Мороза</td>
                                <td>
                                    <input type="text" class="formbox__input formbox__date js_init_datepicker" value=""
                                           id="datepicker_fieldname6" name="fieldname6" cur_year="2015"/>
                                    <input type="text" class="formbox__time formbox__input js_init_timepicker"
                                           name="fieldname6_time" id="timepicker_fieldname6"/>

                                    <p class="formbox__spectext"></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="formbox__left">
                                    <p>Комментарий </p>
                                </td>
                                <td>
                                    <textarea class="formbox__textarea" name="fieldname7" id="fieldname7"></textarea>

                                    <p class="formbox__spectext"></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="formbox__left"></td>
                                <td>
                                    <p class="formbox__required"><span class="formbox__mark">*</span> - обязательные для
                                        заполнения поля</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="formbox__left"></td>
                                <td>
                                    <button class="b-formbox__btn" type="submit">Заказать</button>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="cmd" value='sendForm'/>
                        <input type="hidden" name="form_id" id="form_id" value="49"/>
                        <input type="hidden" id="_rules"
                               value='{"rules":{"fieldname":{"required":true,"maxlength":255},"fieldname1":{"required":true,"maxlength":255},"fieldname2":{"required":true,"maxlength":255,"email":true},"fac":{"required":true,"maxlength":255},"fieldname5":{"required":false,"maxlength":255},"fieldname6":{"required":false,"maxlength":255},"fieldname7":{"required":false,"maxlength":255},"captcha":{"required":1,"maxlength":50,"digits":1}}}'/>
                    </form>
                </div>
            </div>
            <div class="l-footerbox-stop"></div>
        </div>
    </div>
    <div class="container__opera">
        <div class="container__field">
            <div class="container__wrapper">
                <div class="container__left"></div>
                <div class="container__right"></div>
            </div>
        </div>
    </div>
    <div class="l-footerbox" sktag="page.footer">
        <div class="footerbox__wrapper">

            <div class="l-grid">
                <div class="grid__item1">
                    <p>
                        &copy; &laquo;Заказ Деда Мороза в Минске&raquo;, 2015</p>
                </div>
                <div class="grid__item2">
                    <div class="b-counter">
                        <noindex>
                            <noindex>


                                </span></noindex>
                        </noindex>
                    </div>
                </div>
                <div class="grid__item3">
                    <p class="b-menufoot">
                        <a href="index.html" class="">
                            <ins></ins>
                            Главная</a> | <a href="sitemap.html" class="">
                            <ins></ins>
                            Карта сайта</a> | <a href="about.html" class="">
                            <ins></ins>
                            Обратная связь</a></p>

                    <p style="text-align: right;">
                        +375 (25) 751-93-11 (Life)</p>

                    <p style="text-align: right;">
                        <a href="mailto:dedmoroz@dedumorozu.by">dedmoroz@dedumorozu.by</a></p>

                    <p style="text-align: right;">
                        <br/>
                        &nbsp;</p>

                </div>
                <div class="grid__item4">
                </div>
            </div>

        </div>
        <div class="footerbox__left"></div>
        <div class="footerbox__right"></div>
    </div>
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter32990754 = new Ya.Metrika({
                    id:32990754,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/32990754" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!--</body>-->
<?//= $content ?>
<?php $this->endBody() ?>
</html>
<? $this->endPage();?>