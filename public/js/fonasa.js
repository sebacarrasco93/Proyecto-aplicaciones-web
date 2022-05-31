async function verPension() {
    let tipoasegurado = document.getElementById("tipoasegurado").value;
    if (tipoasegurado == "Pensionado") {
        pensionSi.hidden = false;
        selectPension.hidden = false;
        inputEmpleador.hidden = false;
        selectCesantia.hidden = "hidden";
        rentaTotal.hidden = false;

    } else if (tipoasegurado == "Dep_CIndefinido") {
        pensionSi.hidden = "hidden";
        selectPension.hidden = "hidden";
        selectCesantia.hidden = "hidden";
        inputEmpleador.hidden = false;
        rentaTotal.hidden = false;
    }
    else if (tipoasegurado == "Dep_CPlazoFijo") {
        pensionSi.hidden = "hidden";
        selectPension.hidden = "hidden";
        selectCesantia.hidden = "hidden";
        inputEmpleador.hidden = false;
        rentaTotal.hidden = false;
    }
    else if (tipoasegurado == "Dep_CFaenaObra") {
        pensionSi.hidden = "hidden";
        selectPension.hidden = "hidden";
        selectCesantia.hidden = "hidden";
        inputEmpleador.hidden = false;
        rentaTotal.hidden = false;
    }
    else if (tipoasegurado == "Dep_CTurnoJornada") {
        pensionSi.hidden = "hidden";
        selectPension.hidden = "hidden";
        selectCesantia.hidden = "hidden";
        inputEmpleador.hidden = false;
        rentaTotal.hidden = false;
    }
    else if (tipoasegurado == "PensionadoSalud") {
        pensionSi.hidden = false;
        selectPension.hidden = false;
        selectCesantia.hidden = "hidden";
        inputEmpleador.hidden = false;
        rentaTotal.hidden = false;
    }
    else if (tipoasegurado == "Independiente") {
        pensionSi.hidden = "hidden";
        selectPension.hidden = "hidden";
        selectCesantia.hidden = "hidden";
        inputEmpleador.hidden = "hidden";
        rentaTotal.hidden = false;
    }
    else if (tipoasegurado == "Cesante") {
        pensionSi.hidden = "hidden";
        selectPension.hidden = "hidden";
        inputEmpleador.hidden = "hidden";
        selectCesantia.hidden = false;
        rentaTotal.hidden = false;
    }
}

async function cargas() {
    let cantCargas = document.getElementById("cantCargas").value;
    if (cantCargas == "0") {
        carga1.hidden = "hidden";
        carga2.hidden = "hidden";
        carga3.hidden = "hidden";
        carga4.hidden = "hidden";
        carga5.hidden = "hidden";
    } else if (cantCargas == "1") {
        carga1.hidden = false;
        carga2.hidden = "hidden";
        carga3.hidden = "hidden";
        carga4.hidden = "hidden";
        carga5.hidden = "hidden";
    } else if (cantCargas == "2") {
        carga1.hidden = false;
        carga2.hidden = false;
        carga3.hidden = "hidden";
        carga4.hidden = "hidden";
        carga5.hidden = "hidden";
    } else if (cantCargas == "3") {
        carga1.hidden = false;
        carga2.hidden = false;
        carga3.hidden = false;
        carga4.hidden = "hidden";
        carga5.hidden = "hidden";
    } else if (cantCargas == "4") {
        carga1.hidden = false;
        carga2.hidden = false;
        carga3.hidden = false;
        carga4.hidden = false;
        carga5.hidden = "hidden";
    } else if (cantCargas == "5") {
        carga1.hidden = false;
        carga2.hidden = false;
        carga3.hidden = false;
        carga4.hidden = false;
        carga5.hidden = false;
    }
}

async function showEstabSi() {
    document.getElementById("estabSalud").hidden = false;
}

async function showEstabNo() {
    document.getElementById("estabSalud").hidden = "hidden";
}

/*
 * Libre API Validar RUT
 * https://docs.libreapi.cl/es/#validar
 */
function validarRut() {
    let rut = document.getElementById("user_dni").value;
    var settings = {
        "url": "https://api.libreapi.cl/rut/validate?rut=" + rut,
        "method": "GET",
        "timeout": 0,
    };

    $.ajax(settings).done(function (response) {
        if (response.hasOwnProperty('data')) {
            if (response.data.hasOwnProperty('valid')) {
                if (response.data.valid == true) {
                    //console.log(response.data.valid);
                    document.getElementById("user_dni").style.borderColor = "green";
                }
                else {
                    //console.log(response.data.valid);
                    document.getElementById("user_dni").style.borderColor = "red";
                    document.getElementById("user_dni").value = "";
                    alert("Rut no válido");
                }
            }
        }
    });

}
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict';

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation');

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach((form) => {
      form.addEventListener('submit', (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  })();
