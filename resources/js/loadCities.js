const { ajax, each } = require("jquery");

$(function() {
    $('#departamento_id').on("change", function () {
        var departamento = $(this).val();      
        // alert(departamento);
        var data = { "departamento" : departamento };
        var url = "ciudad";
        if($.trim(departamento) != ""){
            $.ajax({
                type: "get",
                url: url,
                data: data,
                dataType: "json",
                success: function (ciudades) {
                    // console.log(ciudades);
                    $("#ciudad_id").empty();
                    $("#ciudad_id").append('<option disabled selected>...</option>');
                    $.each(ciudades, function (indice, ciudad) { 
                        $("#ciudad_id").append('<option value="'+indice+'">'+ciudad+'</option>');
                    });
                },
                error: function(error){
                       //codigo error
                }
            });
        }  
    }); 
});