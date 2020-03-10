

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
    var sa = $("#type-switcher").children("option:selected").val();

        
        
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
                        size:size,
                        sa:sa
                    },
        
                   success:function(data){
                       
                   }
                });

    
  });
    
    
    $("#type-switcher").change(function(){
            $(this).find("option:selected").each(function(){
                var optionValue = $(this).attr("value");
                console.log(".value");
                if(optionValue){
                    $("." + optionValue).show();
                    $(".value").not("." + optionValue).hide();
                } 
               
            });
        }).change();
    
    });

