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
                <div class="active section">Заказать ремонт квартиры </div>
            </div>
            <h1>Заказать ремонт квартиры  <small>&nbsp;</small>
            </h1>
        </div>
    </div>
</div>
<!-- Left and Right Layout -->
<div id="page">
    <div class="wojo-grid">
        <div class="columns">
            <div class="screen-70 tablet-60 phone-100">
                <div class="wojo-content-full clearfix">
                    <p style="text-align: justify;">
                        Вы можете заказать ремонт квартиры под ключ через форму связи или по телефону <a href="tel:+79882332010" title="позвонить в Frang group">
                        +7 999 233 00 00</a>. По Вашей заявке, на объект выезжает специалист на обмер для создания <a href="./?page=dizajn-intieriera">бесплатного дизайн-проекта</a>. Предварительный расчет стоимости ремонта производится после оформления заказа.Пример договора можно посмотреть в разделе <a href="./?page=dogovor">"Договор".</a></p>

                        <div class="wojo secondary form segment">
                            <h3>Заказать ремонт</h3>
                            <form id="wojo_form" name="wojo_form" method="post">
                                <div class="two fields">
                                    <div class="field">
                                        <label class="label">
                                        Фамилия Имя Отчество</label>
                                        <label class="input">
                                            <i class="icon-append icon asterisk"></i>
                                            <input name="field24a855_3fcfcb" type="text" placeholder="Фамилия Имя Отчество" required pattern='^[А-Яа-яЁё\s]+$' title='Иванов Сергей Александрович'>
                                        </label>
                                    </div>
                                    <div class="field">
                                        <label class="label">
                                        Номер телефона</label>
                                        <label class="input">
                                            <i class="icon-append icon asterisk"></i>
                                            <input name="field259b0c_7d5bc8" type="text" placeholder="Номер телефона" required pattern='^\+?[0-9]{11}$' title='+79745662145'>
                                        </label>
                                    </div>
                                </div>
                                <div class="two fields">
                                    <div class="field">
                                        <label class="label">
                                        Email</label>
                                        <label class="input">
                                            <i class="icon-append icon asterisk"></i>
                                            <input name="email24a855_3fcfcb" type="text" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title='example@mail.net'>
                                        </label>
                                    </div>
                                    <div class="field">
                                        <label class="label">
                                        Адрес объекта</label>
                                        <label class="input">
                                            <i class="icon-append icon asterisk"></i>
                                            <input name="text2f8a3e_72a861" type="text" placeholder="Адрес объекта" required pattern='^[А-Яа-яЁё\s\d\.,_-]+$' title='Москва, Адлера 7, дом 5'>
                                        </label>
                                    </div>
                                </div>
                                <div class="two fields">
                                    <div class="field">
                                        <label class="label">
                                        Площадь помещения</label>
                                        <label class="input">
                                            <i class="icon-append icon asterisk"></i>
                                            <input name="text5330ae_ff0669" type="text" placeholder="Площадь помещения" required pattern='^[0-9]{1,7}$' title='1500'>
                                        </label>
                                    </div>
                                    <div class="field">
                                        <label class="label">
                                        Если есть, добавить файлы планировки, БТИ и др.</label>
                                        <label class="input">
                                            <input name="filefield6ebd0f_53cf72" type="file" class="filefield">
                                        </label>
                                    </div>
                                </div>
                                <div class="one blank">
                                    <div class="field">
                                        <label class="label">
                                        Комментарий</label>
                                        <label class="textarea">
                                            <textarea name="area18676c_2df63c" placeholder="Комментарий"></textarea>
                                        </label>
                                    </div>
                                </div>
                                <div class="one fields">
                                  <div class="field">
                                      <label class="label">
                                          Капча
                                      </label>
                                      <label class="input">
                                          <i class="icon-append icon asterisk"></i>                                      
                                          <input name="sup_captcha" type="text" placeholder="Капча" required pattern="^[a-zA-Z\d]+$" title='1999'>
                                          <img class='captcha_main' src="libs/captcha_inner.php" alt="" style="position: absolute;right: 28px;top: 12px;" />
                                      </label>
                                  </div>
                              </div>
                              <div class="one blank">
                                <div class="field">
                                    <div class="wojo divider"></div>Нажимая на кнопку «Отправить», Вы даете согласие на обработку персональных данных в соответствии с федеральным законом РФ № 152-ФЗ. Более подробную информацию смотрите в разделе «Конфиденциальность».<div class="wojo divider"></div>
                                </div>
                            </div>
                            <input name="id" type="hidden" value="1">
                            <div class="wojo thin attached divider"></div>
                            <button data-url="./ajax/zakazat-remont-kvartiry.php" name="dosubmit" type="submit" class="wojo danger button">Отправить заявку</button>           
                            <input name="processForm" type="hidden" value="1">
                        </form>
                    </div>
                    <div id="msgholder"></div>
                </div>
            </div>
            <div class="screen-30 tablet-40 phone-100">
                <section id="rightwidget" class="clearfix">
                    <h5 class="dn">Ремонт Квартир</h5>
                    <div class="wojo-content-full">
                        <?php require './pages_parts/contacts.php'; ?> 
                        <?php //require './pages_parts/right-smallblog.php'; ?> 
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