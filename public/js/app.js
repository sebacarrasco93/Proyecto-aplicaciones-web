async function verPension() {
    let pension = document.getElementById("pensionado").value;
    if (pension == "No_Pensionado") {
        pensionSi.hidden = "hidden";
    } else if (pension == "Vejez") {
        pensionSi.hidden = false;
    }
    else if (pension == "Viudez") {
        pensionSi.hidden = false;
    }
    else if (pension == "Orfandad") {
        pensionSi.hidden = false;
    }
    else if (pension == "Invalidez") {
        pensionSi.hidden = false;
    }
    else if (pension == "En_Tramite") {
        pensionSi.hidden = false;
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

