$(document).ready(function() {    
    
        $("#Apply").click(function(){
            $(".item").each(function(i, obj) {
                
                console.log($(this).children(".SKU").text());
                    var isChecked = $(this).find('input[type="checkbox"]').prop('checked');
                    console.log(isChecked);
               // console.log($(this).children(".check").attr(":checked"));
               

});

              });
});