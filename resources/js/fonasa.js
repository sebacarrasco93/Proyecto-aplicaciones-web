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
    } else if (tipoasegurado == "Dep_CPlazoFijo") {
        pensionSi.hidden = "hidden";
        selectPension.hidden = "hidden";
        selectCesantia.hidden = "hidden";
        inputEmpleador.hidden = false;
        rentaTotal.hidden = false;
    } else if (tipoasegurado == "Dep_CFaenaObra") {
        pensionSi.hidden = "hidden";
        selectPension.hidden = "hidden";
        selectCesantia.hidden = "hidden";
        inputEmpleador.hidden = false;
        rentaTotal.hidden = false;
    } else if (tipoasegurado == "Dep_CTurnoJornada") {
        pensionSi.hidden = "hidden";
        selectPension.hidden = "hidden";
        selectCesantia.hidden = "hidden";
        inputEmpleador.hidden = false;
        rentaTotal.hidden = false;
    } else if (tipoasegurado == "PensionadoSalud") {
        pensionSi.hidden = false;
        selectPension.hidden = false;
        selectCesantia.hidden = "hidden";
        inputEmpleador.hidden = false;
        rentaTotal.hidden = false;
    } else if (tipoasegurado == "Independiente") {
        pensionSi.hidden = "hidden";
        selectPension.hidden = "hidden";
        selectCesantia.hidden = "hidden";
        inputEmpleador.hidden = "hidden";
        rentaTotal.hidden = false;
    } else if (tipoasegurado == "Cesante") {
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
    var rut = document.getElementById("user_dni").value;
    var settings = {
        url: "https://api.libreapi.cl/rut/validate?rut=" + rut,
        method: "GET",
        timeout: 0,
        statusCode: {
            400: function (response) {
                document.getElementById("user_dni").style.borderColor = "red";
                document.getElementById("user_dni").value = "";
                alert("El Rut es Invalido");
                event.preventDefault();
            },
        },
    };

    $.ajax(settings).done(function (response) {
        //Para Formatear el RUT de forma correcta SOLO si es que el campo existe
        if (response.hasOwnProperty("data")) {
            if (response.data.hasOwnProperty("rut")) {
                //console.log(response.data.message);
                document.getElementById("user_dni").value = response.data.rut;
            }
        }

        //Validación del RUT
        if (response.hasOwnProperty("data")) {
            if (response.data.hasOwnProperty("valid")) {
                if (response.data.valid == true) {
                    //console.log(response.data.valid);
                    document.getElementById("user_dni").style.borderColor =
                        "green";
                } else {
                    //console.log(response.data.valid);
                    document.getElementById("user_dni").value = "";
                    document.getElementById("user_dni").style.borderColor =
                        "red";
                    //alert("Rut no válido");
                }
            }
        }
    });
}

//Para Empresa
function validarRutEmp() {
    let rut = document.getElementById("Emp_rut").value;
    var settings = {
        url: "https://api.libreapi.cl/rut/validate?rut=" + rut,
        method: "GET",
        timeout: 0,
        statusCode: {
            400: function (response) {
                document.getElementById("Emp_rut").style.borderColor = "red";
                document.getElementById("Emp_rut").value = "";
                alert("El Rut es Invalido");
                event.preventDefault();
            },
        },
    };

    $.ajax(settings).done(function (response) {
        //Para Formatear el RUT de forma correcta SOLO si es que el campo existe
        if (response.hasOwnProperty("data")) {
            if (response.data.hasOwnProperty("rut")) {
                //console.log(response.data.message);
                document.getElementById("Emp_rut").value = response.data.rut;
            }
        }

        //Validación del RUT
        if (response.hasOwnProperty("data")) {
            if (response.data.hasOwnProperty("valid")) {
                if (response.data.valid == true) {
                    //console.log(response.data.valid);
                    document.getElementById("Emp_rut").style.borderColor =
                        "green";
                } else {
                    //console.log(response.data.valid);
                    document.getElementById("Emp_rut").value = "";
                    document.getElementById("Emp_rut").style.borderColor =
                        "red";
                    //alert("Rut no válido");
                }
            }
        }
    });
}

/*
 * API Completado Dirección Google Maps
 * https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete
 */

function UserAddress() {
    var input = document.getElementById("user_address");
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.addListener("place_changed", function () {
        var place = autocomplete.getPlacePredictions();
    });
}

function EmpAddress() {
    var input = document.getElementById("Emp_direccion");
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.addListener("place_changed", function () {
        var place = autocomplete.getPlacePredictions();
    });
}

// API para poder rellenar datos si existe en DB
async function getUser() {
    var user_dni = document.getElementById("user_dni").value;
    let data2 = [];
    var settings = {
        url: api_db + user_dni,
        method: "GET",
        timeout: 0,
        statusCode: {
            400: function (response) {
                event.preventDefault();
            },
            404: function (response) {
                document.getElementById("user_name").style.borderColor = "red";
                event.preventDefault();
            },
        },
    };

    $.ajax(settings).done(function (response) {
        if (response.hasOwnProperty("data")) {
            response.data.forEach(function (element) {
                data2.push(element);
            });
        }
        if (data2.length > 0) {
            console.log(data2);
            document.getElementById("user_name").value = data2[0].user_name;
        }
    });
}

// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    "use strict";

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll(".needs-validation");

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach((form) => {
        form.addEventListener(
            "submit",
            (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add("was-validated");
            },
            false
        );
    });
})();
