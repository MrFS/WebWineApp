$(function(){
    $("#menu, .home").click(function(){
        $("#navbar").toggleClass("active");
    });
    
    $("[id^=navigate_]").click(function(){
        console.log($(this).attr("data-navigate"));
         $("#navbar").removeClass("active");
        $(".container.active").removeClass("active");
        $("div[date-page*="+$(this).attr("data-navigate")+"]").addClass("active");
    });
    
     $('body').on('touchmove', function (e) {
         if (!$('.scrollable').has($(e.target)).length) e.preventDefault();
    });
});

