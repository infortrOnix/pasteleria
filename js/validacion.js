
function validarFormulario(){

    var ape = document.getElementById("user").value;

        if(ape.length<2){
            
            document.getElementById("sApe").innerHTML ="Debe tener al menos 2 Caracteres!";
            return false;
        }
       

    var tel = document.getElementById("tel").value;

    if(tel.length<6){
        
        document.getElementById("sTel").innerHTML ="Debe tener al menos 6 números!";
        return false;
    }


    var mail = document.getElementById("mail").value;
    if(mail.length<6){
        
        document.getElementById("sMail").innerHTML ="Debe tener al menos 6 números!";
        return false;
    }
    

    return true;
    
}
