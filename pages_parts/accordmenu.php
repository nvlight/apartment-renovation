<?php
?>
<!-- Accordion Menu -->
<link rel="stylesheet" href="../../plugins/vmenu/theme/president/style.css">
<div id="acomenu">
    <ul class="top-menu" id="side-menu">
        <li class="nav-item"><a href="./?page=" class="normal homepage"><strong>Главная</strong></a></li>
        <li class="nav-item"><a href="./?page=page/o-kompanii/" class="normal"><strong>О компании</strong></a>
            <ul class="menu-submenu">
                <li class="nav-submenu-item"><a href="./?page=page/poriadok-rabot-/" class="normal">Порядок работ</a></li>
                <li class="nav-submenu-item"><a href="./?page=page/dogovor/" class="normal">Договор</a></li>
                <li class="nav-submenu-item"><a href="./?page=page/site/" class="normal">Конфиденциальность</a></li>
            </ul>
        </li>
        <li class="nav-item"><a href="./?page=page/vidieosiuziety/" class="normal"><strong>Видео</strong></a>
            <ul class="menu-submenu">
                <li class="nav-submenu-item"><a href="./?page=page/otzyvy-/" class="normal">Отзывы о ремонте</a></li>
            </ul>
        </li>
        <li class="nav-item"><a href="./?page=page/remontkvartirpodkluch/" class="normal"><strong>Виды ремонта и цены</strong></a>
            <ul class="menu-submenu">
                <li class="nav-submenu-item"><a href="./?page=page/standartnyj-riemont/" class="normal">Стандартный ремонт</a></li>
                <li class="nav-submenu-item"><a href="./?page=page/riemont-biznies-klassa/" class="normal">Ремонт бизнес-класса</a></li>
                <li class="nav-submenu-item"><a href="./?page=page/ekskliuzivnyj-riemont/" class="normal">Эксклюзивный ремонт</a></li>
            </ul>
        </li>
        <li class="nav-item"><a href="./?page=page/dizajn-intieriera/" class="normal"><strong>Дизайн Интерьера</strong></a></li>
        <li class="nav-item"><a href="./?page=portfolio/" class="normal"><strong>Портфолио</strong></a></li>
        <li class="nav-item"><a href="./?page=page/kontakty/" class="normal"><strong>Контакты</strong></a></li>
    </ul>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $("ul#side-menu").find('ul.menu-submenu').parent().prepend('<i class=\"down arrow icon\"></i>');
    $('#side-menu i.icon.down.arrow').click(function() {
        $(this).siblings('#side-menu ul.menu-submenu').slideToggle();
        $(this).toggleClass('vertically flipped');

    });
});
</script>
<!-- Accordion Menu /-->