function sesioaHasieratu()
{
    // Aqui tenemos que comprobar primero que la contraseña 1 y 2 son la misma contraseña después de eso
    // tenemos que ver a ver si el usuario erab con la contraseña que ha metido está en nuestra
    // base de datos.
    var erabil = document.loginak.erabIzena.value;
    var pash1 = document.loginak.pasahitza.value;
    var pash2 = document.loginak.pasahitzaBer.value;

    if (String.length.pash1 < 8){
        window.alert("Pasahitza oso motza da, 8 karaktere baino gehiago izan behar ditu!")
    }
    else if(pash1!=pash2) 
    {
        window.alert("Errorea. Sartutako pasahitzak desberdinak dira. ")
    }else // comprobamos si estan en la base de datos
    {
        //Comprobar si existe el usuario con erabil y usando PHP y la conexion con la BD
        /*
        if (dagoeneko existitzen da DBab erabil){
            errorea, beste erabiltzaile izen bat hautatu
        }
        else{
            document.loginak.submit(); // Informazioa submiteatu
        }
        */


    }
}

function sesioHasi() {
    document.getElementById('loginak').submit();
}