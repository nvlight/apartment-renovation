<?php
    if (file_exists('preload.php')){
        require 'preload.php';
    }

    session_start();     
    $_SESSION['app_start'] = 1; 
?>

<?php require 'php/web.php'; ?>

<?php require 'php/functions.php'; ?>

<?php require 'libs/route.php'; ?>

<?php require 'pages_parts/head.php'; ?>

<?php require 'pages_parts/first-top-line.php'; ?>
    
<?php require 'pages_parts/main-top-menu.php'; ?>

    <!-- Top Widgets -->
    <div id="topwidget">
        <section class="topwidget clearfix">
            <h4 style="display:none">ремонт квартиры</h4>
            <div class="columns">

                <div class="screen-100 phone-100">
                    <div class="topwidget-wrap">
                        <div class="widget-body">
                            <div id="slider" style="width:1280px;height:700px;margin:0 auto;margin-bottom: 0px;">
                                <!-- Slide 1-->
                                <div class="ls-slide" data-ls="bgcolor:#ffffff; duration:4000; kenburnsscale:1.2;">
                                    <img src="images/main-bg.jpg" class="ls-l" alt="" style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal; width:100%;" data-ls="showinfo:1; durationin:2000; easingin:easeOutExpo; scalexin:1.5; scaleyin:1.5; static:forever; position:fixed;" width="2000" height="1500">
                                    <p style="text-transform:uppercase;top:500px; left:9px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; color:#ffffff; font-size:12px; font-family:Poppins;" class="ls-l ls-hide-tablet ls-hide-phone" data-ls="showinfo:1; offsetxin:-20; rotatein:90; transformoriginin:0% 50% 0; hover:true; hoveropacity:1; static:forever; rotation:90; position:fixed;">
                                       fast-group.net
                                    </p>
                                    <p style="top:250px; left:50%; text-align:initial; font-weight:600; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#E0500C; font-size:60px; line-height:80px;" class="ls-l main-text" data-ls="showinfo:1; durationin:2000; easingin:easeOutExpo; scalexin:2.5; scaleyin:2.5; transformoriginin:50% 143.8% 0;">
                                        РЕМОНТ КВАРТИР
                                    </p>
                                    <a class="ls-l" href="./?page=portfolio" target="_self" data-ls="showinfo:1; durationin:2000; delayin:200; easingin:easeOutExpo; scalexin:2.5; scaleyin:2.5; transformoriginin:50% -126.1% 0; hover:true; hoveropacity:1; hoverbgcolor:#013671;">
                                        <p style="top:361px; left:50%; text-align:initial; font-weight:600; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#fff; font-size:16px; line-height:46px; font-family:Arial; background:#e0500c; border-radius:23px; padding-right:30px; padding-left:30px;" class="">
                                            ПОРТФОЛИО
                                        </p>
                                    </a>
                                </div>
                                <!-- Slide 2-->
                                <div class="ls-slide" data-ls="bgcolor:#ffffff; duration:4000; timeshift:-500; kenburnsscale:1.2;">
                                    <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal; width:100%; height:100%; background:rgba(0, 0, 0, 0.4); z-index:99;" class="ls-l" data-ls="showinfo:1; delayin:200; easingin:easeOutExpo; fadein:false; scalexin:0; transformoriginin:100% 50% 0; easingout:easeInExpo; transformoriginout:0% 50% 0; static:forever; position:fixed;">
                                    </div>
                                    <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal; width:1280px; height:600px; background:#ffffff;" class="ls-l" data-ls="showinfo:1; delayin:500; easingin:easeOutExpo; scalexin:0; transformoriginin:100% 50% 0; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                    </div>
                                    <img src="images/cooker-pro90-gray_1490623344.jpg" class="ls-l" alt="" style="top:50px; left:580px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal;" data-ls="showinfo:1; offsetxin:100lw; delayin:1300; easingin:easeOutExpo; clipin:0 100% 0 0; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;" width="700" height="600">
                                    <div style="top:50%; left:0px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal; height:600px; width:30px; background:#e0500c;" class="ls-l" data-ls="showinfo:1; offsetxin:1280; delayin:500; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                    </div>
                                    <p style="top:161px; left:110px; text-align:initial; font-weight:600; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#001636; font-size:35px; line-height:80px; font-family:Arial;" class="ls-l" data-ls="showinfo:1; offsetxin:500; delayin:1000; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                        Квартира в Имеритинке
                                    </p>
                                    <p style="top:155px; left:111px; text-align:initial; font-weight:600; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#001636; font-size:14px; line-height:21px; font-family:Arial;" class="ls-l" data-ls="showinfo:1; offsetxin:500; delayin:950; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                        Дизайн интерьера и ремонт Бизнес-класса
                                    </p>
                                    <p style="top:280px; left:112px; text-align:initial; font-weight:500; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#000; font-size:14px; line-height:21px; font-family:Arial; width:435px; white-space:normal;" class="ls-l" data-ls="showinfo:1; offsetxin:500; delayin:1100; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                        Воздушный, приятный дизайн интерьера в 3-комнатной квартире, 90 м2, в Имеритинском парке, выполнен в утончённом стиле неоклассика. Интерьер гостиной смотрится гармонично: спокойные тона, окно в пол, благодаря которому в комнату поступает много света, мягкий диван, на котором можно не только расположиться всей компанией за просмотром любимого кино, а также использовать как дополнительное спальное место. Зонированием гостиной и кухни служат раздвижные двери с зеркалами, которые благодаря длинным шторам, белым поверхностям,также позволяют визуально увеличить пространство.
                                    </p>
                                    <p style="top:235px; left:113px; text-align:initial; font-weight:500; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#001636; font-size:14px; line-height:21px; font-family:Arial;" class="ls-l" data-ls="showinfo:1; offsetxin:500; delayin:1050; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                        Ответственный мастер:
                                    </p>
                                    <p style="top:235px; left:285px; text-align:initial; font-weight:500; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#001636; font-size:14px; line-height:21px; font-family:Arial;" class="ls-l" data-ls="showinfo:1; offsetxin:500; delayin:1050; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                        Андрей
                                    </p>
                                    <a class="ls-l" href="./?page=portfolio-2-komnatnaia-kvartira-v-zk-svietlana" target="_self" data-ls="showinfo:1; offsetxin:500; delayin:1150; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0; hover:true; hoveropacity:1; hoverbgcolor:#013671;">
                                        <p style="top:530px; left:110px; text-align:initial; font-weight:600; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#fff; font-size:16px; line-height:46px; font-family:Arial; background:#e0500c; border-radius:23px; padding-right:30px; padding-left:30px;" class="">
                                            Подробнее
                                        </p>
                                    </a>
                                    <a class="ls-l" href="#next" target="_self" data-ls="showinfo:1; offsetxin:500; delayin:900; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0; hover:true; hoveropacity:1; hoverbgcolor:#013671;">
                                        <p style="top:120px; left:110px; text-align:initial; font-weight:600; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#fff; font-size:11px; line-height:28px; font-family:Arial; background:#e0500c; padding-right:15px; padding-left:15px;" class="">
                                            НОВЫЕ РАБОТЫ
                                        </p>
                                    </a>
                                </div>
                                <!-- Slide 3-->
                                <div class="ls-slide" data-ls="bgcolor:#ffffff; duration:4000; timeshift:-500; kenburnsscale:1.2;">
                                    <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal; width:100%; height:100%; background:rgba(0, 0, 0, 0.4); z-index:99;" class="ls-l" data-ls="showinfo:1; delayin:200; easingin:easeOutExpo; fadein:false; scalexin:0; transformoriginin:100% 50% 0; easingout:easeInExpo; transformoriginout:0% 50% 0; static:forever; position:fixed;">
                                    </div>
                                    <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal; width:1280px; height:600px; background:#ffffff;" class="ls-l" data-ls="showinfo:1; delayin:500; easingin:easeOutExpo; scalexin:0; transformoriginin:100% 50% 0; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                    </div>
                                    <img src="images/cooker-pro90-gray_1490623345.jpg" class="ls-l" alt="" style="top:50px; left:580px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal;" data-ls="showinfo:1; offsetxin:100lw; delayin:1300; easingin:easeOutExpo; clipin:0 100% 0 0; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;" width="700" height="600">
                                    <div style="top:50%; left:0px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal; height:600px; width:30px; background:#e0500c;" class="ls-l" data-ls="showinfo:1; offsetxin:1280; delayin:500; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                    </div>
                                    <p style="top:161px; left:110px; text-align:initial; font-weight:600; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#001636; font-size:35px; line-height:80px; font-family:Arial;" class="ls-l" data-ls="showinfo:1; offsetxin:500; delayin:1000; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                        Квартира в Адлере
                                    </p>
                                    <p style="top:155px; left:111px; text-align:initial; font-weight:600; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#001636; font-size:14px; line-height:21px; font-family:Arial;" class="ls-l" data-ls="showinfo:1; offsetxin:500; delayin:950; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                        Дизайн интерьера и ремонт Бизнес-класса
                                    </p>
                                    <p style="top:280px; left:112px; text-align:initial; font-weight:500; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#000; font-size:14px; line-height:21px; font-family:Arial; width:435px; white-space:normal;" class="ls-l" data-ls="showinfo:1; offsetxin:500; delayin:1100; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                        Элегантный светлый дизайн интерьера в 4-комнатной квартире в Аэровокзальном переулке в Адлере, выполнен в стиле минимализм с акцентами из золотистой лепнины. Интерьер гостиной выполнен неярких бежево-коричневых тонах, большая площадь оконных проемов и преобладание в отделке светлых тонов, создает эффект большего простора и воздушности.Мягкая группа в гостиной может принять и с комфортом разместить большую группу гостей, не загромождая пространство.
                                    </p>
                                    <p style="top:235px; left:113px; text-align:initial; font-weight:500; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#001636; font-size:14px; line-height:21px; font-family:Arial;" class="ls-l" data-ls="showinfo:1; offsetxin:500; delayin:1050; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                        Ответственный мастер:
                                    </p>
                                    <p style="top:235px; left:285px; text-align:initial; font-weight:500; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#001636; font-size:14px; line-height:21px; font-family:Arial;" class="ls-l" data-ls="showinfo:1; offsetxin:500; delayin:1050; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                        Сергей
                                    </p>
                                    <a class="ls-l" href="./?page=portfolio-aerovokzal" target="_self" data-ls="showinfo:1; offsetxin:500; delayin:1150; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0; hover:true; hoveropacity:1; hoverbgcolor:#013671;">
                                        <p style="top:530px; left:110px; text-align:initial; font-weight:600; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#fff; font-size:16px; line-height:46px; font-family:Arial; background:#e0500c; border-radius:23px; padding-right:30px; padding-left:30px;" class="">
                                            Подробнее
                                        </p>
                                    </a>
                                    <a class="ls-l" href="#next" target="_self" data-ls="showinfo:1; offsetxin:500; delayin:900; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0; hover:true; hoveropacity:1; hoverbgcolor:#013671;">
                                        <p style="top:120px; left:110px; text-align:initial; font-weight:600; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#fff; font-size:11px; line-height:28px; font-family:Arial; background:#e0500c; padding-right:15px; padding-left:15px;" class="">
                                            НОВЫЕ РАБОТЫ
                                        </p>
                                    </a>
                                </div>
                                <!-- Slide 4-->
                                <div class="ls-slide" data-ls="bgcolor:#ffffff; duration:4000; timeshift:-500; kenburnsscale:1.2;">
                                    <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal; width:100%; height:100%; background:rgba(0, 0, 0, 0.4); z-index:99;" class="ls-l" data-ls="showinfo:1; delayin:200; easingin:easeOutExpo; fadein:false; scalexin:0; transformoriginin:100% 50% 0; easingout:easeInExpo; transformoriginout:0% 50% 0; static:forever; position:fixed;">
                                    </div>
                                    <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal; width:1280px; height:600px; background:#ffffff;" class="ls-l" data-ls="showinfo:1; delayin:500; easingin:easeOutExpo; scalexin:0; transformoriginin:100% 50% 0; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                    </div>
                                    <img src="images/cooker-pro90-gray_1490623346.jpg" class="ls-l" alt="" style="top:50px; left:580px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal;" data-ls="showinfo:1; offsetxin:100lw; delayin:1300; easingin:easeOutExpo; clipin:0 100% 0 0; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;" width="700" height="600">
                                    <div style="top:50%; left:0px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal; height:600px; width:30px; background:#e0500c;" class="ls-l" data-ls="showinfo:1; offsetxin:1280; delayin:500; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                    </div>
                                    <p style="top:161px; left:110px; text-align:initial; font-weight:600; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#001636; font-size:35px; line-height:80px; font-family:Arial;" class="ls-l" data-ls="showinfo:1; offsetxin:500; delayin:1000; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                        Фойе гостиницы
                                    </p>
                                    <p style="top:155px; left:111px; text-align:initial; font-weight:600; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#001636; font-size:14px; line-height:21px; font-family:Arial;" class="ls-l" data-ls="showinfo:1; offsetxin:500; delayin:950; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                        Дизайн интерьера и эксклюзивный ремонт
                                    </p>
                                    <p style="top:280px; left:112px; text-align:initial; font-weight:500; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#000; font-size:14px; line-height:21px; font-family:Arial; width:435px; white-space:normal;" class="ls-l" data-ls="showinfo:1; offsetxin:500; delayin:1100; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                        Роскошный яркий интерьер выполнен в стиле барокко. Обилие скульптур, барельефов, лепнины, роспись потолка создают ощущение музейного пространства. В отделке пола и стен использован мрамор, цветной гранит. Аксессуары и световое оформление интерьера также выполнены в стиле барокко.
                                    </p>
                                    <p style="top:235px; left:113px; text-align:initial; font-weight:500; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#001636; font-size:14px; line-height:21px; font-family:Arial;" class="ls-l" data-ls="showinfo:1; offsetxin:500; delayin:1050; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                        Ответственный мастер:
                                    </p>
                                    <p style="top:235px; left:285px; text-align:initial; font-weight:500; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#001636; font-size:14px; line-height:21px; font-family:Arial;" class="ls-l" data-ls="showinfo:1; offsetxin:500; delayin:1050; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0;">
                                        Андрей
                                    </p>
                                    <a class="ls-l" href="./?page=portfolio-korona" target="_self" data-ls="showinfo:1; offsetxin:500; delayin:1150; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0; hover:true; hoveropacity:1; hoverbgcolor:#013671;">
                                        <p style="top:530px; left:110px; text-align:initial; font-weight:600; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#fff; font-size:16px; line-height:46px; font-family:Arial; background:#e0500c; border-radius:23px; padding-right:30px; padding-left:30px;" class="">
                                            Подробнее
                                        </p>
                                    </a>
                                    <a class="ls-l" href="#next" target="_self" data-ls="showinfo:1; offsetxin:500; delayin:900; easingin:easeOutExpo; offsetxout:-1000; easingout:easeInQuint; transformoriginout:0% 50% 0; hover:true; hoveropacity:1; hoverbgcolor:#013671;">
                                        <p style="top:120px; left:110px; text-align:initial; font-weight:600; font-style:normal; text-decoration:none; mix-blend-mode:normal; color:#fff; font-size:11px; line-height:28px; font-family:Arial; background:#e0500c; padding-right:15px; padding-left:15px;" class="">
                                            НОВЫЕ РАБОТЫ
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <script>
                        $(document).ready(function() {


                            $('#slider').layerSlider({
                                sliderVersion: '6.5.0b1',
                                type: 'fullwidth',
                                allowFullscreen: false,
                                maxRatio: 1,
                                autoStart: false,
                                skin: 'v6',
                                globalBGSize: 'cover',
                                navStartStop: false,
                                showCircleTimer: false,
                                thumbnailNavigation: 'disabled',
                                skinsPath: 'layerslider/skins/'
                            });
                        });
                        </script>
                    </div>
                </div>

                <div class="screen-100 phone-100">
                    <div class="topwidget-wrap section1">
                        <div class="widget-body">
                            <div class="content-center">
                                <h2 class="wojo header wow bounceInLeft">НАШИ ПРЕИМУЩЕСТВА</h2>
                                <div class="wojo-grid">
                                    <div class="five columns small-gutters wow flipInX">
                                        <div class="row" style="text-align: center;">
                                            <div class="wojo basic segment">
                                                <a href="./?page=o-kompanii/"><img src="uploads/design3-m.png" alt="Дизайн интерьера Бесплатно"></a>
                                            </div>
                                        </div>
                                        <div class="row" style="text-align: center;">
                                            <div class="wojo basic segment">
                                                <a href="./?page=o-kompanii/"><img src="uploads/remont2-m.png" alt="Ремонт квартир "></a>
                                            </div>
                                        </div>
                                        <div class="row" style="text-align: center;">
                                            <div class="wojo basic segment">
                                                <a href="./?page=o-kompanii/"><img src="uploads/rabota2-m.png" alt="rabota2-m"></a>
                                            </div>
                                        </div>
                                        <div class="row" style="text-align: center;">
                                            <div class="wojo basic segment">
                                                <a href="./?page=o-kompanii/"><img src="uploads/garant-m3.png" alt="garant-m"></a>
                                            </div>
                                        </div>
                                        <div class="row hide-phone" style="text-align: center;">
                                            <div class="wojo basic segment">
                                                <a href="./?page=o-kompanii/"><img src="uploads/fakt-m.png" alt="fakt-m"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>

                <div class="screen-100 phone-100">
                    <div class="topwidget-wrap section111">
                        <div class="widget-body">
                            <div class="wojo-grid">
                                <h2 class="wojo header wow bounceInLeft">ВИДЕОСЮЖЕТЫ О РЕМОНТЕ</h2>
                                <div class="columns gutters">
                                    <div class="screen-50 tablet-50 phone-100">
                                        <a href="./?page=vidieosiuziety"><img src="uploads/remontsochi1.jpg" alt="remontsochi1"></a>
                                    </div>
                                    <div class="screen-50 tablet-50 phone-100">
                                        <h3 class="wojo header wow bounceInLeft">Ремонт квартир лучшими специалистами</h3>
                                        <p style="text-align: justify;">
                                            Мы гарантируем наилучшее качество работы наших сотрудников. Каждый исполнитель является профессионалом своего дела с многолетним опытом работы и высокой квалификацией. В компании Fast group каждый Заказчик может рассчитывать на самое внимательное комплексное обслуживание.
                                        </p>
                                        <p style="text-align: justify;">
                                            Неукоснительное соблюдение сроков работ, компетентность в любом вопросе, касающемся дизайна, ремонта квартир, установки инженерных систем или подбора материалов - вот главные принципы, которыми руководствуются сотрудники компании Fast grou. Выполнение каждого этапа ремонтных работ находится под строгим авторским надзором как дизайнера, так и ответственного мастера.
                                        </p>
                                        <div class="columns gutters">
                                            <div class="screen-50 tablet-50 phone-100">
                                                <a href="./?page=remontkvartirpodkluch" class="wojo basic button" style="width:100%">Ремонт квартир</a>
                                            </div>
                                            <div class="screen-50 tablet-50 phone-100">
                                                <a href="./?page=dizajn-intieriera" class="wojo basic button" style="width:100%">Дизайн интерьера</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns gutters">
                                    <div class="screen-50 tablet-50 phone-100">
                                        <a href="./?page=vidieosiuziety"><img src="uploads/remontsochi1.jpg" alt="remontsochi2"></a>
                                    </div>
                                    <div class="screen-50 tablet-50 phone-100">
                                        <a href="./?page=vidieosiuziety"><img src="uploads/remontsochi1.jpg" alt="remontsochi3"></a>
                                    </div>
                                </div>
                                <a href="./?page=vidieosiuziety" class="large wojo button">
                                    ВСЕ ВИДЕО СЮЖЕТЫ
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="screen-100 phone-100">
                    <div class="topwidget-wrap section11">
                        <div class="widget-body">
                            <div class="content-center">
                                <div class="wojo-grid">
                                    <div class="two columns small-gutters wow flipInX">
                                        <div class="row">
                                            <div class="wojo info inverted segment">
                                                <h3><a href="./?page=dizajn-intieriera" class="white">ДИЗАЙН ИНТЕРЬЕРА </a></h3>
                                                <div class="columns gutters">
                                                    <div class="screen-50 tablet-50 phone-100">
                                                        <p>
                                                            <img src="uploads/sochiremontkvartir-com1.png" alt="sochiremontkvartir-com1">
                                                        </p>
                                                        <br />
                                                        <a href="./?page=dizajn-intieriera" class="wojo button">ПОДРОБНЕЕ О ДИЗАЙНЕ</a>
                                                    </div>
                                                    <div class="screen-50 tablet-50 phone-100" style="text-align: left;">
                                                        <p>
                                                            Дизайн-проект
                                                            <br />
                                                            от 1000 руб./м2
                                                        </p>
                                                        <p>
                                                            3D визуализация
                                                            <br />
                                                            Бесплатно
                                                        </p>
                                                        <p>
                                                            Подбор материалов
                                                            <br />
                                                            300 руб./м2
                                                        </p>
                                                        <p>
                                                            Авторский и тех. надзор
                                                            <br />
                                                            30000 руб./мес.
                                                        </p>
                                                        <p>
                                                            Проект с согласованием
                                                            <br />
                                                            17000 руб.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="wojo info inverted segment">
                                                <h3><a href="./?page=remontkvartirpodkluch" class="white">РЕМОНТ КВАРТИР </a></h3>
                                                <div class="columns gutters">
                                                    <div class="screen-50 tablet-50 phone-100">
                                                        <p>
                                                            <img src="uploads/sochiremontkvartir-com2.png" alt="sochiremontkvartir-com2">
                                                        </p>
                                                        <br />
                                                        <a href="./?page=remontkvartirpodkluch" class="wojo button">Подробнее о ремонте</a>
                                                    </div>
                                                    <div class="screen-50 tablet-50 phone-100" style="text-align: left;">
                                                        <p>
                                                            Стандартный ремонт
                                                            <br />
                                                            8500 руб./м2
                                                        </p>
                                                        <p>
                                                            Черновые материалы (стандарт)
                                                            <br />
                                                            4500 руб./м2
                                                        </p>
                                                        <p>
                                                            Ремонт бизнес-класса
                                                            <br />
                                                            10000 руб./м2
                                                        </p>
                                                        <p>
                                                            Черновые материалы (бизнес)
                                                            <br />
                                                            6000 руб./м2
                                                        </p>
                                                        <p>
                                                            Эксклюзивный ремонт и рассчитыватся дополнительно
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="screen-100 phone-100">
                    <div class="topwidget-wrap section1">
                        <div class="widget-body">
                            <div class="content-center">
                                <h2 class="wojo header wow bounceInLeft">ОТЗЫВЫ НАШИХ КЛИЕНТОВ</h2>
                                <div class="wojo-grid">
                                    <div class="two columns small-gutters wow flipInX">
                                        <div class="row">
                                            <div class="wojo basic segment">
                                                <h3>
                                                    <a href="./?page=otzyvy">Стандартный ремонт квартиры-студии </a></h3>
                                                <p>
                                                    Квартира площадью 32 кв. м.&nbsp; г. , Адлерский район, пер. Аэровокзальный 22.
                                                </p>
                                                <p style="text-align: justify;">
                                                    <i>
                                                        "Давно планировала ремонт в своей небольшой квартире, сложность была в планировке небольшого помещения, где необходимо разместить все что нужно для проживания двоих взрослых и двух маленьких детей. Но, специалисты из Fast group грамотно и быстро составили проект, где учли все мои пожелания, причем квартира после ремонта не выглядит загроможденной, все функционально и красиво."</i>
                                                </p>
                                                <a href="./?page=otzyvy"><img src="uploads/remontsochi1.jpg" alt="Отзывы р ремонте квартир "></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="wojo basic segment">
                                                <h3>
                                                    <a href="./?page=otzyvy">Эксклюзивный ремонт 2-х комнатной квартиры</a></h3>
                                                <p style="text-align: justify;">
                                                    Квартира площадью 120 кв. м.,&nbsp; г. , Адлерский район, ул. Перелетная, 24.
                                                </p>
                                                <p style="text-align: justify;">
                                                    <i>"Чуткость, внимательность и доброжелательность сотрудников Fast group стала залогом высокого качества ремонтных работ, а главное, полностью удовлетворила наши пожелания и ожидания. Особенно порадовали оригинальные идеи по дизайну, например
                                                        вся бытовая техника на кухне встроена и скрыта декоративными панелями, за счет чего рабочее помещение приобрело весьма привлекательный вид."
                                                    </i>
                                                </p>
                                                <a href="./?page=otzyvy"><img src="uploads/remontsochi1.jpg" alt="remontotzyv"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wojo divider">
                                    </div>
                                </div>
                                <a href="./?page=otzyvy" class="big wojo basic button">Смотреть все отзывы</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="screen-100 phone-100">
                    <div class="topwidget-wrap section4">
                        <div class="widget-body">
                            <div class="content-center">
                                <h2 class="wojo header wow bounceInLeft">ЦЕНЫ НА РЕМОНТ КВАРТИР</h2>
                                <div class="wojo-grid">
                                    <div class="three columns small-gutters wow flipInX">
                                        <div class="row" style="text-align: center;">
                                            <div class="wojo zena segment">
                                                <h3><a href="./?page=standartnyj-riemont">СТАНДАРТНЫЙ РЕМОНТ</a></h3>
                                                <p>
                                                    <a href="./?page=standartnyj-riemont"><img src="uploads/sochiremontkvartir1.jpg" alt="sochiremontkvartir1"></a>
                                                </p>
                                                Ремонтные работы: <span style="font-size: 18px">5500 руб./м2</span>
                                                <div class="wojo divider">
                                                </div>
                                                Черновые материалы: <span style="font-size: 18px">3500 руб./м2</span>
                                                <div class="wojo divider">
                                                </div>
                                                Чистовые материалы:
                                                <span style="font-size: 18px">индивидуально</span>
                                                <div class="wojo divider">
                                                </div>
                                                <a href="./?page=standartnyj-riemont" class="wojo basic button">
                                                    Подробнее
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row" style="text-align: center;">
                                            <div class="wojo zena segment">
                                                <h3><a href="./?page=riemont-biznies-klassa">РЕМОНТ БИЗНЕС-КЛАССА</a></h3>
                                                <p>
                                                    <a href="./?page=riemont-biznies-klassa"><img src="uploads/sochiremontkvartir2.jpg" alt="sochiremontkvartir2"></a>
                                                </p>
                                                Ремонтные работы: <span style="font-size: 18px">9000 руб./м2</span>
                                                <div class="wojo divider">
                                                </div>
                                                Черновые материалы: <span style="font-size: 18px">5000 руб./м2</span>
                                                <div class="wojo divider">
                                                </div>
                                                Чистовые материалы:
                                                <span style="font-size: 18px">индивидуально</span>
                                                <div class="wojo divider">
                                                </div>
                                                <a href="./?page=riemont-biznies-klassa" class="wojo basic button">
                                                    Подробнее
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row" style="text-align: center;">
                                            <div class="wojo zena segment">
                                                <h3><a href="./?page=ekskliuzivnyj-riemont">ЭКСКЛЮЗИВНЫЙ РЕМОНТ</a></h3>
                                                <p>
                                                    <a href="./?page=ekskliuzivnyj-riemont"><img src="uploads/sochiremontkvartir3.jpg" alt="sochiremontkvartir3"></a>
                                                </p>
                                                Ремонтные работы:
                                                <span style="font-size: 18px">13000 руб./м2</span>
                                                <div class="wojo divider">
                                                </div>
                                                Черновые материалы: <span style="font-size: 18px">7000 руб./м2</span>
                                                <div class="wojo divider">
                                                </div>
                                                Чистовые материалы:
                                                <span style="font-size: 18px">индивидуально</span>
                                                <div class="wojo divider">
                                                </div>
                                                <a href="./?page=ekskliuzivnyj-riemont" class="wojo basic button">
                                                    Подробнее
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <p style="font-size:16px;">
                                        Стоимость является ориентировочной и зависит
                                        <br />
                                        от сложности и категории ремонта и планировки помещения.
                                    </p>
                                    <div class="columns gutters">
                                        <div class="screen-50 tablet-50 phone-100">
                                            <a href="javascript:void(0);" class="big wojo button" onclick="moclients.show(0);" style="width:100%">Калькулятор ремонта</a>
                                        </div>
                                        <div class="screen-50 tablet-50 phone-100">
                                            <a href="./?page=zakazat-riemont-kvartiry-v-sotchi" class="big wojo info button" style="width:100%">Заказать ремонт</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="screen-100 phone-100">
                    <div class="topwidget-wrap section1">
                        <div class="widget-body">
                            <div class="content-center">
                                <h2 class="wojo header wow bounceInLeft">НАШЕ ПОРТФОЛИО
                                </h2>
                                <div class="wojo-grid">
                                    <div class="three columns small-gutters wow flipInX">
                                        <div class="row" style="text-align: center;">
                                            <div class="wojo basic segment">
                                                <p>
                                                    <a href="./?page=portfolio-korona"><img src="uploads/remontkvartir6.jpg" alt="remontkvartir6"></a>
                                                </p>
                                                <p style="text-align: center;">
                                                    <a href="./?page=portfolio-korona">Ремонт фойе гостиницы</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row" style="text-align: center;">
                                            <div class="wojo basic segment">
                                                <p>
                                                    <a href="./?page=portfolio-aerovokzal"><img src="uploads/remontkvartir3.jpg" alt="remontkvartir3"></a>
                                                </p>
                                                <p style="text-align: center;">
                                                    <a href="./?page=portfolio-aerovokzal">4 комн. квартира на Аэровокзальном п-к</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row" style="text-align: center;">
                                            <div class="wojo basic segment">
                                                <p>
                                                    <a href="./?page=portfolio-dom5"><img src="uploads/remontkvartir2.jpg" alt="remontkvartir2"></a>
                                                </p>
                                                <p style="text-align: center;">
                                                    <a href="./?page=portfolio-dom5">Ремонт дома 200 м2 на ул. Семашко </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="three columns small-gutters wow flipInX">
                                        <div class="row" style="text-align: center;">
                                            <div class="wojo basic segment">
                                                <p>
                                                    <a href="./?page=portfolio-2-komnatnaia-kvartira-v-zk-svietlana"><img src="uploads/remontkvartir1.jpg" alt="remontkvartir1"></a>
                                                </p>
                                                <p style="text-align: center;">
                                                    <a href="./?page=portfolio-2-komnatnaia-kvartira-v-zk-svietlana">Ремонт квартиры в Имеритинском парке</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row" style="text-align: center;">
                                            <div class="wojo basic segment">
                                                <p>
                                                    <a href="./?page=portfolio-roz"><img src="uploads/remontkvartir5.jpg" alt="remontkvartir5"></a>
                                                </p>
                                                <p style="text-align: center;">
                                                    <a href="./?page=portfolio-roz">Студия на ул. Роз </a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row" style="text-align: center;">
                                            <div class="wojo basic segment">
                                                <p>
                                                    <a href="./?page=portfolio-studija3"><img src="uploads/remontkvartir7.jpg" alt="remontkvartir7"></a>
                                                </p>
                                                <p>
                                                    <a href="./?page=portfolio-studija3">3 комнатная студия в ЖК Золотой Колоc</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="./?page=portfolio" class="big wojo basic button">Смотреть все портфолио</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="screen-100 phone-100">
                    <div class="topwidget-wrap section111">
                        <div class="widget-body">
                            <div class="content-center">
                                <h2 class="wojo header wow bounceInLeft">ПОРЯДОК РАБОТ</h2>
                                <div class="wojo-grid">
                                    <div class="columns gutters">
                                        <div class="screen-20 tablet-100 phone-100">
                                            <p>
                                                <i class="big circular phone icon"></i>
                                            </p>
                                            <p>
                                                Позвоните
                                                <a href="tel:+79992330000">+7 999 233 00 00</a> или <a href="./?page=zakazat-riemont-kvartiry-v-sotchi">отправьте заявку </a>
                                            </p>
                                        </div>
                                        <div class="screen-20 tablet-100 phone-100">
                                            <p>
                                                <i class="big circular map marker icon"></i>
                                            </p>
                                            <p>
                                                Мы приедем на объект и произведем замеры
                                            </p>
                                        </div>
                                        <div class="screen-20 tablet-100 phone-100">
                                            <p>
                                                <i class="big circular calculator icon"></i>
                                            </p>
                                            <p>
                                                Составим подробную смету по проекту
                                            </p>
                                        </div>
                                        <div class="screen-20 tablet-100 phone-100">
                                            <p>
                                                <i class="big circular pencil icon"></i>
                                            </p>
                                            <p>
                                                Корректируем и заключаем договор
                                            </p>
                                        </div>
                                        <div class="screen-20 tablet-100 phone-100">
                                            <p>
                                                <i class="big circular gift icon"></i>
                                            </p>
                                            <p>
                                                Создаем проект дизайна интерьера бесплатно
                                            </p>
                                        </div>
                                    </div>
                                    <div class="columns gutters">
                                        <div class="screen-20 tablet-100 phone-100">
                                            <p>
                                                <i class="big circular truck icon"></i>
                                            </p>
                                            <p>
                                                Поставляем материалы в соответствии со сметой
                                            </p>
                                        </div>
                                        <div class="screen-20 tablet-100 phone-100">
                                            <p>
                                                <i class="big circular inbox icon"></i>
                                            </p>
                                            <p>
                                                Выезжаем на объект и начинаем выполнять работы
                                            </p>
                                        </div>
                                        <div class="screen-20 tablet-100 phone-100">
                                            <p>
                                                <i class="big circular payment icon"></i>
                                            </p>
                                            <p>
                                                Принимаем оплату за каждый завершенный этап работ
                                            </p>
                                        </div>
                                        <div class="screen-20 tablet-100 phone-100">
                                            <p>
                                                <i class="big circular trash icon"></i>
                                            </p>
                                            <p>
                                                Убираем, чистим и декорируем помещение
                                            </p>
                                        </div>
                                        <div class="screen-20 tablet-100 phone-100">
                                            <p>
                                                <i class="big circular text file outline icon"></i>
                                            </p>
                                            <p>
                                                Подписываем акт выполненных работ
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>


<?php require 'pages_parts/footer.php'; ?>

<?php require 'pages_parts/foot.php'; ?>