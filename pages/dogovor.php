<?php
    
?>

<?php require 'pages_parts/head.php'; ?>

<?php require 'pages_parts/first-top-line.php'; ?>
    
<?php require 'pages_parts/main-top-menu.php'; ?>

<div class="subheader">
    <div class="wojo-grid">
        <div class="wojo-content-full relative">
            <div class="wojo breadcrumb"><a href="./?page=index" class="section">Главная</a>
                <div class="divider"></div>
                <div class="active section">Договор</div>
            </div>
            <h1>Договор <small>Ознакомиться с официальным договором</small>
            </h1>
        </div>
    </div>
</div>
<!-- Right Layout -->
<div id="page">
    <div class="wojo-grid">
        <div class="columns">
            <div class="screen-70 tablet-60 phone-100">
                <div class="wojo-content-full clearfix">
                    <p>
                        Перед началом всех работ по проектированию интерьера или ремонту, мы заключаем официальный договор. Здесь можно загрузить и ознакомиться с примером стандартного договора. Любой пункт документа может быть изменен по Вашему желанию.
                    </p>
                    <div class="wojo-grid">
                        <div class="columns gutters">
                            <div class="screen-50 tablet-50 phone-100" style="text-align: center;">
                                <p>
                                    <img src="uploads/dogovorvord.png" alt="dogovorvord" style="width: 88px;">
                                </p>
                                <h4>
                                    Скачать договор подряда формате Microsoft Word (doc)&nbsp;
                                </h4>
                            </div>
                            <div class="screen-50 tablet-50 phone-100" style="text-align: center;">
                                <p>
                                    <img src="uploads/dogovorpdf.png" alt="dogovorpdf" style="width: 88px;">
                                </p>
                                <h4>
                                    Скачать договор подрядав формате Adobe Reader&nbsp; (pdf)
                                </h4>
                            </div>
                        </div>
                    </div>
                    <p>
                        В приложениях к договору подряда прилагается смета на работы с указанием их перечня, цен и стоимости, а также перечень черновых материалов, необходимых для их выполнения и детальный план-график. Для заключения Договора на ремонтно-строительные работы вам необходимо ознакомиться с порядком работы или приехать в офис Fast group&nbsp; по адресу:
                        <a href="https://yandex.ru/maps/?um=constructor%3A2dc36c2375ea9025ddb68b58be4b58615538ebf57c105f4dc804870e7a0c0580&source=constructorLink" target="_blank"><?=$site['adress'] ?></a>
                    </p>
                </div>
            </div>
            <div class="screen-30 tablet-40 phone-100">
                <section id="rightwidget" class="clearfix">
                    <h5 class="dn">Ремонт Квартир</h5>
                    <div class="wojo-content-full">
                        <?php require './pages_parts/contacts.php'; ?>
                        <?php require './pages_parts/right-smallmenu.php'; ?>                        
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- Right Layout /-->

<?php require 'pages_parts/bootwidget1.php'; ?>

<?php require 'pages_parts/footer.php'; ?>

<?php require 'pages_parts/foot.php'; ?>