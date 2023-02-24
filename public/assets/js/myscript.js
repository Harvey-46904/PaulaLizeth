function activarmodal(identificador){
    switch (identificador) {
        case 1:
            $("#exampleModalLabel").text("Bienvenido a la terapia individual virtual dejanos tus datos pronto nos comunicaremos contigo")
            $("#paquete").val("Terapia Individual Virtual")
            break;
        case 2:
            $("#exampleModalLabel").text("Bienvenido a la terapia de constelacion personal individual dejanos tus datos pronto nos comunicaremos contigo")
            $("#paquete").val("Constelacion Personal Individual")
            break;
        case 3:
            $("#exampleModalLabel").text("Bienvenido a la terapia de constelaciones grupales dejanos tus datos pronto nos comunicaremos contigo")
            $("#paquete").val("Constelaciones Grupales")
            break;
    }
    $("#exampleModal").modal("show");
}

function cerrarmodal(){
    $("#exampleModal").modal("hide");
}


function Mensaje_enviado(){

    var data={
        _token: $("[name='_token']").val(),
        nombre: $("[name='nombre']").val(),
        correo: $("[name='correo']").val(),
        paquete: $("[name='paquete']").val(),
        telefono: $("[name='telefono']").val()
    }
    
    $.ajax({
        type: "POST",
        url: "enviar_correo_paquete",
        data: data,
        
        success: function (response) {
           
            if(response.data==="correo enviado con exito"){
                cerrarmodal();
                swal("Enviamos tu correo!", "Muy pronto nos pondremos en contacto contigo", "success");
            }
          },
          error: function () {
            alert("error");
          },

        dataType: "json"

      });

}