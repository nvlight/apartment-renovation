<aside class="clearfix">
    <h3 class="wojo header"><span>Меню</span></h3>
    <div class="widget-body">
        <p></p>
    </div> <!-- Accordion Menu -->

    <div id="acomenu">
        <ul class="top-menu" id="side-menu">
            <li class="nav-item"><a href="./?page=index" class="normal homepage"><strong>Главная</strong></a></li>
            <li class="nav-item"><a href="./?page=about" class="normal"><strong>О компании</strong></a>
                <ul class="menu-submenu">
                    <li class="nav-submenu-item"><a href="./?page=poriadok-rabot" class="normal">Порядок работ</a></li>
                    <li class="nav-submenu-item"><a href="./?page=dogovor" class="normal">Договор</a></li>
                    <li class="nav-submenu-item"><a href="./?page=site" class="normal">Конфиденциальность</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="./?page=vidieosiuziety" class="normal"><strong>Видео</strong></a>
                <ul class="menu-submenu">
                    <li class="nav-submenu-item"><a href="./?page=otzyvy" class="normal">Отзывы о ремонте</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="./?page=remontkvartirpodkluch" class="normal"><strong>Виды ремонта и цены</strong></a>
                <ul class="menu-submenu">
                    <li class="nav-submenu-item"><a href="./?page=standartnyj-riemont" class="active">Стандартный ремонт</a></li>
                    <li class="nav-submenu-item"><a href="./?page=riemont-biznies-klassa" class="normal">Ремонт бизнес-класса</a></li>
                    <li class="nav-submenu-item"><a href="./?page=ekskliuzivnyj-riemont" class="normal">Эксклюзивный ремонт</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="./?page=dizajn-intieriera" class="normal"><strong>Дизайн Интерьера</strong></a></li>
            <li class="nav-item"><a href="./?page=portfolio" class="normal"><strong>Портфолио</strong></a></li>
            <li class="nav-item"><a href="./?page=kontakty" class="normal"><strong>Контакты</strong></a></li>
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
</aside>