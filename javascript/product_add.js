$(document).ready(function () { //When document ready

    $("#Save").click(function () { //When clicked on save button
        //Get variables from input fields
        var product = {
            sku: $("#SKU").val(),
            name: $("#Name").val(),
            price: $("#Price").val(),
            weight: $("#Weight").val(),
            height: $("#Height").val(),
            width: $("#Width").val(),
            length: $("#Length").val(),
            size: $("#Size").val(),
            sa: $("#type-switcher").children("option:selected").val()
        };
        //send data to PHP 
        $.ajax({
            url: 'php/add.php',
            method: 'POST',
            data: {
                sku: product.sku,
                name: product.name,
                price: product.price,
                weight: product.weight,
                height: product.height,
                width: product.width,
                length: product.length,
                size: product.size,
                sa: product.sa
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
