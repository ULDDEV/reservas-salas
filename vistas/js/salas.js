/* COLOCAR ACTIVO DEL PRIMER BOTON */

var enlacesSalas = $(".cabeceraHabitacion ul.nav li.nav-item a");
var tituloBtn = [];

for (var i = 0; i < enlacesSalas.length; i++) {
    $(enlacesSalas[i]).removeClass("active");
    $(enlacesSalas[i]).children("i").remove();
    tituloBtn[i] = $(enlacesSalas[i]).html();
}

$(enlacesSalas[0]).addClass("active")
$(enlacesSalas[0]).html('<i class="fas fa-chevron-right"></i>' + tituloBtn[0]);

$(enlacesSalas[enlacesSalas.length - 1]).css({ "border-right": 0 });


/* ENLACES HABITACIONES */
$(".cabeceraHabitacion ul.nav li.nav-item a").click(function (e) {
    e.preventDefault();

    var orden = $(this).attr("orden");
    var ruta = $(this).attr("ruta");

    for (var i = 0; i < enlacesSalas.length; i++) {
        $(enlacesSalas[i]).removeClass("active");
        $(enlacesSalas[i]).children("i").remove();
        tituloBtn[i] = $(enlacesSalas[i]).html();
    }

    $(enlacesSalas[orden]).addClass("active");
    $(enlacesSalas[orden]).html('<i class="fas fa-chevron-right"></i>' + tituloBtn[orden]);



    /* AJAX SALAS */
    var datos = new FormData();
    datos.append("ruta", ruta);
    /*     console.log("urlPrincipal", urlPrincipal);*/
    $.ajax({
        url: urlPrincipal + "ajax/salas.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta) {
            $(".d-salas").html(respuesta[orden]["descripcion_s"])
            $(".d-salas").html(respuesta[orden]["descripcion_s"])

        }
    })
})