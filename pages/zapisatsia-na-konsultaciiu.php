<?php
    
?>

<?php require 'pages_parts/head.php'; ?>

<?php require 'pages_parts/first-top-line.php'; ?>
    
<?php require 'pages_parts/main-top-menu.php'; ?>

<div class="subheader">
  <div class="wojo-grid">
      <div class="wojo-content-full relative">
          <div class="wojo breadcrumb"><a href="./?page=" class="section">Главная</a>
              <div class="divider"></div>
              <div class="active section">Записаться на консультацию</div>
          </div>
          <h1>Записаться на консультацию <small>&nbsp;</small>
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
                  <p></p>
                  <div class="wojo secondary form segment">
                      <h3>Записаться на консультацию</h3>
                      <form id="wojo_form" name="wojo_form" method="post">
                          <div class="two fields">
                              <div class="field">
                                  <label class="label">
                                      Ваше имя</label>
                                  <label class="input">
                                      <i class="icon-append icon asterisk"></i>
                                      <input name="textd02e57_715ae6" type="text" placeholder="Ваше имя" required pattern="^[А-Яа-яЁё\s_-]+$" title='Алексей'>
                                  </label>
                              </div>
                              <div class="field">
                                  <label class="label">
                                      Номер телефона</label>
                                  <label class="input">
                                      <i class="icon-append icon asterisk"></i>
                                      <input name="field259b0c_7d5bc8" type="text" placeholder="Номер телефона" required pattern="^\+?[0-9]{11}$" title='+79634589876'>
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
                          <input name="id" type="hidden" value="3" />
                          <div class="wojo thin attached divider"></div>
                          <button data-url="./ajax/zapisatsia-na-konsultaciiu.php" name="dosubmit" type="submit" class="wojo danger button">Отправить заявку</button>
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

                  <?php require 'pages_parts/contacts.php' ?>

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