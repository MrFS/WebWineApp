$(function(){
    $("#menu, .home").click(function(){
        $("#navbar").toggleClass("active");
    });
    
    $("[id^=navigate_]").click(function(){
        console.log($(this).attr("data-navigate"));
         $("#navbar").toggleClass("active");
        $(".container.active").removeClass("active");
        $("div[date-page*="+$(this).attr("data-navigate")+"]").addClass("active");
        
    });
});