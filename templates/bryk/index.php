<?php
    /**
    * Template for Joomla by StMarsh
    * @author      StMarsh
    * @copyright   Copyright (c) 2013
    * @license     GNU GPL
    */
    defined('_JEXEC') or die('Restricted access');
    JHtml::_('behavior.framework', true);
    $app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>

    <jdoc:include type="head" />

    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/flipclock.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css"/>

    <!--[if lte IE 6]>
    <link rel="stylesheet" href="/<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/style_ie.css" type="text/css"  />
    <![endif]-->

    <script type="text/javascript" src="/javascript/jquery-1.6.4.min.js"></script>
    <script src="/javascript/prefixfree.min.js"></script>
    <script type="text/javascript" src="/javascript/flipclock.min.js"></script>
    <script type="text/javascript" src="http://userapi.com/js/api/openapi.js?34"></script>
    <script type="text/javascript">
        $(function(){
            $('.types li a').click(function(){
                var index = $(this).parent().index();
                window.location = '/details.html?'+index;
                return false;
            })
        });
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-27082120-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter17027506 = new Ya.Metrika({id:17027506, enableAll: true, webvisor:true});
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="//mc.yandex.ru/watch/17027506" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

</head>
<body>
<div id="wrap">

    <div id="header">
        <h1><a href="/"><?php echo $app->getCfg('sitename'); ?></a></h1>
        <jdoc:include type="modules" name="position-15" />
        <jdoc:include type="modules" name="top" style="xhtml" />
        <ul class="links">
            <li class="fb"><a href="http://www.facebook.com/pages/GeekHub/158983477520070">facebook</a></li>
            <li class="vk"><a href="http://vkontakte.ru/geekhub">Вконтакте</a></li>
            <li class="tw"><a href="http://twitter.com/#!/geek_hub">twitter</a></li>
            <li class="yb"><a href="http://www.youtube.com/user/GeekHubchannel">youtube</a></li>
        </ul>
        <span class="line"></span>
        <p class="registration">На жаль, реєстрацію на сезон 2013-2014 зачинено. Чекаємо на Вас у наступному році.</p>
        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/splash.png" alt="splash" />

    </div> <!-- header -->

    <div id="content">
        <jdoc:include type="component" />
        <jdoc:include type="message" />
        <div class="home">
            <h2>Наші Курси</h2>
            <ul class="types">
                <li class="left-col">
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/icon-frontend.png" />
                    <a class="title" href="#"><h3>Frontend + CMS</h3></a>
                    <p>Цей курс допоможе вам навчитися створювати веб сайти на основі системи керування контентом. Все, від скінування дизайну до підключення CMS.</p>
                    <a href="#">Докладніше</a>
                </li>
                <li>
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/icon-adv-cms.png" />
                    <a class="title" href="#"><h3>Advanced CMS</h3></a>
                    <p>Курс для тих хто хоче навчитися створювати сайти різного рівня складності за допомогою популярних CMS Joomla та Drupal.</p>
                    <a href="#">Докладніше</a>
                </li>
                <li>
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/icon-adv-php.png" />
                    <a class="title" href="#"><h3>Advanced PHP</h3></a>
                    <p>Для тих хто хоче розвивати свої базові навички в PHP. Курс заглиблюється у вивчення ООП, MVC та паттернiв проетування на базі найпопулярнішого php фреймворку Symfony2.</p>
                    <a href="#">Докладніше</a>
                </li>
                <li class="left-col">
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/icon-js.png" />
                    <a class="title" href="#"><h3>JavaScript</h3></a>
                    <p>Все найцікавіше відбувається в браузері, а не на сервері. Javascript - це той інструмент який допоможе вам створювати дійсно зручні та швидкі веб сторінки.</p>
                    <a href="#">Докладніше</a>
                </li>
                <li>
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/icon-ios.png" />
                    <a class="title" href="#"><h3>iOS</h3></a>
                    <p>Курс для швидкого старту в розробці програмного забезпечення під популярну мобільну платформу iOS. </p>
                    <a href="#">Докладніше</a>
                </li>
                <li>
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/icon-android.png" />
                    <a class="title" href="#"><h3>Android</h3></a>
                    <p>В даному курсі ми охопимо найважливіші елементи побудови додатків для найпопулярнішої ОС для смартфонів.</p>
                    <a href="#">Докладніше</a>
                </li>
                <li class="left-col">
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/icon-ruby.png" />
                    <a class="title" href="#"><h3>Ruby on Rails</h3></a>
                    <p>Курс навчить Вас працювати з популярним фреймворком для розробки веб-сервісів на мові програмування Ruby. </p>
                    <a href="#">Докладніше</a>
                </li>
                <li>
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/icon-grails.png" />
                    <a class="title" href="#"><h3>Groovy & Grails</h3></a>
                    <p>Познайомтесь з одним з найпотужніших фреймворків для швидкої розробки веб-додатків Groovy & Grails.</p>
                    <a href="#">Докладніше</a>
                </li>
                <li>
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/icon-java.png" />
                    <a class="title" href="#"><h3>Java for Web</h3></a>
                    <p>Java - це основа ентерпрайз технологій. Ви ознайомитесь із мовою, основними классами і пакетами, а також найбільш популярними та потужними фреймворками для розробки веб-додатків.</p>
                    <a href="#">Докладніше</a>
                </li>
                <li class="left-col">
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/icon-pm.png" />
                    <a class="title" href="#"><h3>Project Management</h3></a>
                    <p>Щоб стати досвідченим менеджером проектів потрібні роки спроб та помилок. Geekhub дає вам можливість почати набувати практичні навички вже зараз.</p>
                    <a href="#">Докладніше</a>
                </li>
                <li>
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/icon-qa.png" />
                    <a class="title" href="#"><h3>Quality Assurance</h3></a>
                    <p>Курс для тих, хто вміє конструктивно критикувати та хотів би з цього навику зробити цікаву інноваційну професію.</p>
                    <a href="#">Докладніше</a>
                </li>
                <li>
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/icon-english.png" />
                    <a class="title" href="#"><h3>Business English</h3></a>
                    <p>Якщо ви лідер команди або менеджер проектів, Business English допоможе вам здобути корисні інструменти для ефективних комунікацій як всередині команди так і з клієнтами.</p>
                    <a href="#">Докладніше</a>
                </li>





            </ul>
            <ul class="social_share">
                <li id="vk">
                    <script type="text/javascript">
                        VK.Widgets.Group("vk", {mode: 0, width: "276", height: "240"}, 30111409);
                    </script>
                </li>
                <li class="sertificates_list">
                    <h4><a href="/certified-professionals.html">Сертифiкованi професiонали</a></h4>
                </li>
                <li>
                    <h4>Наші Спонсори</h4>
                    <ul>
                        <li class="de"><a href="http://povnahata.com">Дім Євангелія</a></li>
                        <li class="moc"><a href="http://masterofcode.com">Masterofcode LTD</a></li>
                        <li class="sergium"><a href="http://sergium.net">SerGium.net</a></li>
                        <li class="clear left stuff"><a href="http://val.co.ua/">val.co.ua/</a></li>
                        <li class="youthog"><a href="http://yothog.com">Youthog.com</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div> <!-- content -->
    <?php if($this->countModules('footer')) : ?>
        <div id="footer">
            <jdoc:include type="modules" name="footer" style="xhtml" />
            Copyright &copy; Bryk | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a>
        </div>
    <?php endif; ?> <!-- #footer -->
</div> <!-- #wrapper -->
</body>
</html>