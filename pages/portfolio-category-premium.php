<?php
    
?>

<?php require 'pages_parts/head2.php'; ?>

<?php require 'pages_parts/first-top-line.php'; ?>
    
<?php require 'pages_parts/main-top-menu.php'; ?>

<div class="subheader">
    <div class="wojo-grid">
        <div class="wojo-content-full relative">
            <div class="wojo breadcrumb"><a href="./?page=index" class="section">Главная</a>
                <div class="divider"></div>
                <div class="active section">
                    <div class="active section">Портфолио</div>
                </div>
            </div>
            <h1>Портфолио <small>Работы по ремонту квартир </small>
            </h1>
        </div>
    </div>
</div>

<!-- Full Layout -->
<div id="page">
    <div class="wojo-grid">
        <div class="wojo-content-full clearfix">
            <h2><span>Все работы по ремонту квартир</span></h2>
            <div class="wojo buttons"> <a href="./?page=portfolio" class="wojo black button"><span>Все Работы</span></a>
                <a class="wojo black button" href="./?page=portfolio-category-project" data-category="4">Проекты</a>                
                <a class="wojo info button" href="./?page=portfolio-category-premium" data-category="1">ЭКСКЛЮЗИВНЫЙ ремонт</a>
                <a class="wojo black button" href="./?page=portfolio-category-standart" data-category="2">Ремонт БИЗНЕС-КЛАССа</a>
                <a class="wojo black button" href="./?page=portfolio-category-econom" data-category="3">СТАНДАРТНЫЙ ремонт</a>
            </div>
            <div class="wojo section divider"></div>
            <div id="foliowrap" class="clearfix">
                <div class="item">
                    <section>
                        <div class="image-overlay"> <img src="./modules/portfolio/dataimages/IMG_1C6CEA-302AE3-62778B-181644-AFBFE4-16F731.jpg" alt="">
                            <div class="overlay-fade"> <a href="./?page=portfolio-korona"><i class="icon-overlay icon url"></i></a> </div>
                        </div>
                        <h3>Ремонт фойе гостиницы </h3>
                    </section>
                </div>
               
            </div>
            <div id="pagination" class="content-center"></div>
            <script>
            // <![CDATA[
            $(document).ready(function() {
                $('#foliowrap').waitForImages(function() {
                    $('#foliowrap').Grid({
                        inner: 3,
                        outer: 0,
                        cols: Math.round(1200 / 3)
                    });
                });
            });
            // ]]>
            </script>
            <script>
            FWDRLUtils.onReady(function() {
                new FWDRL({
                    //main settings
                    mainFolderPath: "./modules/gallery/theme/president/content",
                    skinPath: "minimal_skin_dark",
                    facebookAppId: "213684265480896",
                    rightClickContextMenu: "default",
                    buttonsAlignment: "in",
                    useDeepLinking: "yes",
                    useAsModal: "no",
                    slideShowAutoPlay: "no",
                    addKeyboardSupport: "yes",
                    showCloseButton: "yes",
                    showShareButton: "yes",
                    showZoomButton: "yes",
                    showSlideShowButton: "yes",
                    showSlideShowAnimation: "yes",
                    showNextAndPrevButtons: "yes",
                    showNextAndPrevButtonsOnMobile: "yes",
                    buttonsHideDelay: 3,
                    slideShowDelay: 4,
                    defaultItemWidth: 800,
                    defaultItemHeight: 500,
                    itemOffsetHeight: 50,
                    spaceBetweenButtons: 1,
                    buttonsOffsetIn: 2,
                    buttonsOffsetOut: 5,
                    itemBorderSize: 4,
                    itemBorderRadius: 0,
                    backgroundOpacity: .8,
                    itemBoxShadow: "none",
                    itemBackgroundColor: "#333333",
                    itemBorderColor: "#FFFFFF",
                    backgroundColor: "#000000",
                    //thumbnails settings
                    showThumbnails: "yes",
                    showThumbnailsHideOrShowButton: "yes",
                    showThumbnailsByDefault: "yes",
                    showThumbnailsOverlay: "yes",
                    showThumbnailsSmallIcon: "yes",
                    thumbnailsHoverEffect: "scale",
                    thumbnailsImageHeight: 80,
                    thumbnailsBorderSize: 4,
                    thumbnailsBorderRadius: 0,
                    spaceBetweenThumbnailsAndItem: 0,
                    thumbnailsOffsetBottom: 0,
                    spaceBetweenThumbnails: 2,
                    thumbnailsOverlayOpacity: .6,
                    thumbnailsOverlayColor: "#FFFFFF",
                    thumbnailsBorderNormalColor: "#FFFFFF",
                    thumbnailsBorderSelectedColor: "#FFFFFF",
                    //description settings
                    showDescriptionButton: "yes",
                    showDescriptionByDefault: "no",
                    descriptionWindowAnimationType: "motion",
                    descriptionWindowPosition: "bottom",
                    descriptionWindowBackgroundColor: "#FFFFFF",
                    descriptionWindowBackgroundOpacity: .95,
                });
            });
            </script>
        </div>
    </div>
</div>
<!-- Full Layout /-->

<?php require 'pages_parts/footer.php'; ?>

<?php require 'pages_parts/foot.php'; ?>