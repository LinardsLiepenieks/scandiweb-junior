

$(document).ready(function(){
    $("#MyButton").click(function(){
    combineAndSendForms();
	return false;
  });
    
    
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




function combineAndSendForms() {
    var $newForm = $("<form></form>")    // our new form.
        .attr({method : "POST", action : "php/connect.php"}) // customise as required
    ;
    $(":input:not(:submit, :button)").each(function() {  // grab all the useful inputs
        $newForm.append($("<input type=\"hidden\" />")   // create a new hidden field
            .attr('name', this.name)   // with the same name (watch out for duplicates!)
            .val($(this).val())        // and the same value
        );
    });
    $newForm
        .appendTo(document.body)  // not sure if this is needed?
        .submit()                 // submit the form
    ;
}
