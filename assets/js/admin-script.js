jQuery(document).ready(function($) {
    // انیمیشن منوی مدیریت
    $("#adminmenu li a").hover(function() {
        $(this).css("transform", "scale(1.05)");
    }, function() {
        $(this).css("transform", "scale(1)");
    });

    // نمایش افکت کلیک روی دکمه‌ها
    $(".button-primary").on("click", function() {
        $(this).css("box-shadow", "0px 4px 8px rgba(255, 79, 94, 0.5)");
        setTimeout(() => {
            $(this).css("box-shadow", "0px 3px 6px rgba(255, 79, 94, 0.3)");
        }, 200);
    });
});
