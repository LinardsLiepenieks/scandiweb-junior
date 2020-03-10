$(document).ready(function() {    

        $("#Apply").click(function(){
            
            var del = new Array();
            
            $(".item").each(function(i, obj) {

                
                    var isChecked = $(this).find('input[type="checkbox"]').prop('checked');
                
                    if(isChecked==true)
                        {
                            del.push($(this).children(".SKU").text());
                        }
                
                                              });
            $.ajax({
                
                        url:'php/delete.php',
                        method:'POST',
                        data:{ del:del },
                        
                        success:function(data){
                            alert("Deleted: ".concat(data));
                            location.reload();
                        },
                        dataType:"json"
                    });
            
            
                                    });
                            }); 