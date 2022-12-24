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
                <div class="active section">Контакты</div>
            </div>
            <h1>Контакты <small>Обратная связь</small>
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
                        Наша Трубо-страница по
                        <a href="https://yandex.ru/turbo?999888=&amp;text=lasdkfj3489fj89pjfp238fj9p32jfp9jmnvpioq34j4" target="_blank" title="ремонт квартир "><b>ремонту квартир <br />
                            </b></a>
                    </p>
                    <p>
                        Наше <a href="https://yandex.ru/maps/org/111111777777" target="_blank" title="ремонт квартир в Яндекс"><b>представительство в Яндекс справочнике</b></a>
                    </p>
                    <h3>Отправить сообщение</h3>
                    <div class="wojo form secondary segment">
                        <form id="wojo_form" name="wojo_form" method="post">
                            <div class="two fields">
                                <div class="field">
                                    <label>Ваше Имя</label>
                                    <label class="input"><i class="icon-append icon asterisk"></i>
                                        <input type="text" placeholder="Ваше Имя" value="" name="name" required>
                                    </label>
                                </div>
                                <div class="field">
                                    <label>Email</label>
                                    <label class="input"><i class="icon-append icon asterisk"></i>
                                        <input type="text" placeholder="Email" value="" name="email" required>
                                    </label>
                                </div>
                            </div>
                            <div class="two fields">
                                <div class="field">
                                    <label>Номер телефона</label>
                                    <label class="input">
                                        <input type="text" placeholder="Номер телефона" name="phone" required>
                                    </label>
                                </div>
                                <div class="field">
                                    <label>Тема</label>
                                    <select name="subject">
                                        <option value="">---Тема сообщения ---</option>
                                        <option value="Запросить информацию">Запросить информацию</option>
                                        <option value="Вопросы">Вопросы</option>
                                        <option value="Предложение">Предложение</option>
                                        <option value="Сотрудничество">Сотрудничество</option>
                                        <option value="Техническая Поддержка">Техническая Поддержка</option>
                                        <option value="Прочее">Прочее</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <label>Текст Сообщения</label>
                                <label class="textarea"><i class="icon-append icon asterisk"></i>
                                    <textarea placeholder="Текст Сообщения" name="message"></textarea>
                                </label>
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
                            <button data-url="./ajax/kontakty.php" type="submit" name="dosubmit" class="wojo button">Отправить сообщение</button>
                            <input name="processContact" type="hidden" value="1">
                        </form>
                        <div id="msgholder">
                            <span></span>
                        </div>
                    </div>
                    
                    <!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae149f2922ae712da8967c58d8a9612532ea2b3619c16fd2d9f8fc729aace98f3&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script> -->

                </div>
            </div>
            <div class="screen-30 tablet-40 phone-100">
                <section id="rightwidget" class="clearfix">
                    <h5 class="dn">Ремонт Квартир</h5>
                    <div class="wojo-content-full">
                        <?php require './pages_parts/contacts.php' ?>
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