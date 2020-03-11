$(document).ready(function () { //When document ready    

    $("#Apply").click(function () { //When Apply button clicked
        var del = new Array();

        $(".item").each(function (i, obj) { //Going through every item

            var isChecked = $(this).find('input[type="checkbox"]').prop('checked');

            if (isChecked == true) { // If checkbox is toggled - save SKU for object to be deleted
                del.push($(this).children(".SKU").text());
            }
        });
        //Send data to PHP

        $.ajax({

            url: 'php/delete.php',
            method: 'POST',
            data: {
                del: del
            },

            success: function (data) {
                alert("Deleted: ".concat(data));
                location.reload();
            },
            dataType: "json"
        });
    });
});
