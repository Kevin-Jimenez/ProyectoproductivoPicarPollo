console.log("prueba")
        $(document).ready(function() {
            $('#producto').autocomplete({
                source: function(request, response){
                    $.ajax({
                        url:"consulta_producto.php",
                        dataType: "json",
                        data:{q:request.term},
                        success: function(data){
                            response(data);
                        }
                    })
                },

                minLength:1,
                select: function(event, ui){
                    alert("Seleciono: " + ui.item.label)
                }
            });
        });