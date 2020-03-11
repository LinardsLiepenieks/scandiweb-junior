$(document).ready(function () { //When document ready

    $("#Save").click(function () { //When clicked on save button

        //Get variables from input fields
        var sku = $("#SKU").val();
        var name = $("#Name").val();
        var price = $("#Price").val();
        var weight = $("#Weight").val();
        var height = $("#Height").val();
        var width = $("#Width").val();
        var length = $("#Length").val();
        var size = $("#Size").val();
        var sa = $("#type-switcher").children("option:selected").val();


        //send data to PHP 
        $.ajax({
            url: 'php/add.php',
            method: 'POST',
            data: {
                sku: sku,
                name: name,
                price: price,
                weight: weight,
                height: height,
                width: width,
                length: length,
                size: size,
                sa: sa
            },

            success: function (data) {
                alert(data);
            }

        });
    });


    $("#type-switcher").change(function () { //When product type is changed

        $(this).find("option:selected").each(function () {

            $("#special-atribute").find('input[type="text"]').val(''); //clear inputs

            var optionValue = $(this).attr("value");
            if (optionValue) { //Show selected type - hide all others
                $("." + optionValue).show();
                $(".value").not("." + optionValue).hide();
            }

        });
    }).change();

});
