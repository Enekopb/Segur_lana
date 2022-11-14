//Web Orriak erabiliko dituen funtzioak mierdaa
//Adibidez form-ek lortutako balioak baliodunak diren konprobatu
function datuakKonprobatu(){
    var k1 = 0;
    var k2 = 0;
    var k3 = 0;
    var k4 = 0;
    
    var izena = document.getElementById('izena').value; /*Izena id-aren bidez*/
    if (/^[A-Za-z]+$/.test(izena)) { /* / / artean expresioa */
        k1 = 1;
    }


    var emaila = document.getElementById('email').value;
    if (/[a-z0-9]+[_]{0,1}+[a-z0-9]+@[a-z]+\.[a-z]{2,3}/.test(emaila)) {
        k2 = 1;
    }


    var nan = document.getElementById('nan').value;
    if (/[0-9]{8}[A-Z]{1}/.test(nan)) {
        k3 = 1;
    }

    //var tlfcc = document.getElementById('countryCode').value;
    var tlfznb = document.getElementById('telefonoa').value;
    //var tlf = tlfcc+tlfznb;
    //alert(tlfznb);
    if (/[0-9]{9}/.test(tlfznb)) {
        k4 = 1;
    }

    var ktot = k1 + k2 + k3 + k4;
    if (ktot!=4) {
        alert("Kaixo,  " + izena + " " + ", " +  emaila + " postarekin" + " , " +nan+ " zenbakiarekin" +", ez dituzu datuak zuzen sartu.");
    }     
}
