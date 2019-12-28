$(document).ready(function(){
    $("#type-switcher").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".value").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".value").hide();
            }
        });
    }).change();
});