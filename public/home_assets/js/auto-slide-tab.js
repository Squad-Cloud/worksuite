var duration, duration2;
$(".cu-main-section-opportunities__tabs-nav-item:first-child").hasClass("cu-tab__item_active") ? (duration = 16e3) : !$(".cu-main-section-opportunities__tabs-nav-item:first-child").hasClass("cu-tab__item_active") || (duration = 9e3);
var loop = window.setInterval(function () {
        showNextSlide();
    }, duration);
function showNextSlide() {
    var t = $(".cu-main-section-opportunities .cu-tab__panel_active"),
        e = t.next(),
        i = $(".cu-main-section-opportunities .cu-tab__item_active"),
        a = i.next();
    0 === e.length && ($(".cu-main-section-opportunities .cu-tab__panel:first-child").toggleClass("cu-tab__panel_active"), $(".cu-main-section-opportunities .cu-tab__item:first-child").toggleClass("cu-tab__item_active")),
        t.removeClass("cu-tab__panel_active"),
        e.toggleClass("cu-tab__panel_active"),
        i.removeClass("cu-tab__item_active"),
        a.toggleClass("cu-tab__item_active");
}

($.fn.isInViewport = function () {
    var t = $(this).offset().top,
        e = t + $(this).outerHeight(),
        i = $(window).scrollTop(),
        a = i + $(window).height();
    return e > i && t < a;
}),
    $(window).on("scroll.once", function () {
        $(".cu-main-section-opportunities").isInViewport() && $(window).off("scroll.once");
    }),
    $(".cu-main-section-opportunities").isInViewport() && $(window).off("scroll.once");