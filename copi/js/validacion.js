
function validarFormulario(){

    var ape = document.getElementById("apellido").value;

        if(ape.length<2){
            alert("Debe tener al menos 2 caracteres");
            document.getElementById("sApe").innerHTML ="Debe tener al menos 2 Caracteres!";
            return false;
        }

        

    var nomb = document.getElementById("nombre").value;

    if(nomb.length<2){
        alert("Debe tener al menos 2 caracteres");
        document.getElementById("sNom").innerHTML ="Debe tener al menos 2 Caracteres!";
        return false;
    }

    
    var fechaNac = document.getElementById("fechNac").value;
    var fechaIngresada = new Date(fechaNac);
    var fechaLimite = new Date("01-01-1980");
    var fechaHoy = new Date();

    if (fechaIngresada < fechaLimite){
        alert("Debe ingresar una fecha posterior a 1980");
        document.getElementById("sfech").innerHTML ="Debe ser posterior a 01-01-1980!";
        return false;
    }

    if (fechaIngresada > fechaHoy){
        alert("La fecha no puede ser mayor a la actual");
        document.getElementById("sfech").innerHTML ="no puede ser mayor a la Actual!";
        return false;
    }

    return true;
    
}
