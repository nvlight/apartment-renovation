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
                    <div class="active section">Заявка на дизайн-проект</div>
                </div>
                <h1>Заявка на дизайн-проект <small>Отправьте данные для договора</small>
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
                        <p style="text-align: justify;">Перед началом работы по созданию проекта дизайна интерьера, компания Frang group заключает договор с заказчиком. Пример можно посмотреть в разделе "<a href="./?page=page/dogovor/">Договор</a>". Чтобы рассчитать стоимость проекта, заполните эту форму. В течении трех часов рабочего дня наши специалисты подготовят и вышлют Вам необходимые документы. При заказе последующей услуги по&nbsp;ремонту, стоимость дизайн-проекта будет Вам возвращена обратно.</p>
                        <div class="wojo secondary form segment">
                            <h3>Заявка на дизайн-проект</h3>
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
                                <div class="three fields">
                                    <div class="field">
                                        <label class="label">
                                            Где Вам удобно подписать договор?</label>
                                        <div class="block-group">
                                            <label class="radio"><input type="radio" value="У нас в офисе" name="radiob80aed_e62942" /><i></i>У нас в офисе</label><label class="radio"><input type="radio" value="На объекте" name="radiob80aed_e62942" /><i></i>На объекте</label></div>
                                    </div>
                                    <div class="field">
                                        <label class="label">
                                            Как Вы оплатите аванс?</label>
                                        <div class="block-group">
                                            <label class="radio"><input type="radio" value="В нашем офисе" name="radiof97feb_a91e78" /><i></i>В нашем офисе</label><label class="radio"><input type="radio" value="На объекте" name="radiof97feb_a91e78" /><i></i>На объекте</label><label class="radio"><input type="radio" value="По безналичному расчету" name="radiof97feb_a91e78" /><i></i>По безналичному расчету</label></div>
                                    </div>
                                    <div class="field">
                                        <label class="label">
                                            Вы планируете заключать договор на ремонт?</label>
                                        <div class="block-group">
                                            <label class="radio"><input type="radio" value="Да, планирую" name="radiof00a6c_12e22e" /><i></i>Да, планирую</label><label class="radio"><input type="radio" value="Нет , проведу ремонт самостоятельно" name="radiof00a6c_12e22e" /><i></i>Нет , проведу ремонт самостоятельно</label></div>
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
                                <input name="id" type="hidden" value="4" />
                                <div class="wojo thin attached divider"></div>
                                <button data-url="./ajax/zaiavka-na-dizajn-proiekt.php" name="dosubmit" type="submit" class="wojo danger button">Отправить</button>
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
                            <?php require './pages_parts/right-smallmenu.php'; ?>                          
                            </aside>
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