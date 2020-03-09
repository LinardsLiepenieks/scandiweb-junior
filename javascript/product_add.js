

$(document).ready(function(){
    
    $("#Save").click(function(){
    var sku = $("#SKU").val();
    var name = $("#Name").val();
    var price = $("#Price").val();
    var weight = $("#Weight").val();
    var height = $("#Height").val();
    var width = $("#Width").val();
    var length = $("#Length").val();
    var size = $("#Size").val();
        
        
    $.ajax({
                    url:'php/add.php',
                    method:'POST',
                    data:{
                        sku:sku,
                        name:name,
                        price:price,
                        weight:weight,
                        height:height,
                        width:width,
                        length:length,
                        size:size
                    },
        
                   success:function(data){
                       alert(data);
                   }
                });

    
  });
    
    
    $("#type-switcher").change(function(){
            $(this).find("option:selected").each(function(){
                var optionValue = $(this).attr("value");
                console.log(optionValue);
                if(optionValue){
                    $(".value").not("." + optionValue).hide();
                    $("." + optionValue + " :input").val("");
                    $("." + optionValue).show();
                } 
            });
        }).change();
    
    });

