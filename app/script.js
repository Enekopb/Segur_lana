//Web Orriak erabiliko dituen funtzioak mierdaa
//Adibidez form-ek lortutako balioak baliodunak diren konprobatu
function datuakKonprobatu(){
    var k1 = 0;
    var k2 = 0;
    var k3 = 0;
    var k4 = 0;
    var k5 = 0;

    var izena = document.getElementById('izena').value; /*Izena id-aren bidez*/
    if (/^[A-Za-z]+$/.test(izena)) { /* / / artean expresioa */
        k1 = 1;
    }

    var emaila = document.getElementById('email').value;
    if (/[a-z0-9]+@[a-z]+\.[a-z]{2,3}/.test(emaila)) {
        k2 = 1;
    }

    var jaiotzeData = document.getElementById('jaiodata').value;
    if (/([0-9]{4})\/([0-9]{2})\/([0-9]{2})/.test(jaiotzeData)) {
        k3 = 1;
    }

    var nan = document.getElementById('nan').value;
    if (/[0-9]{8}[A-Za-z]{1}/.test(nan)) {
        k4 = 1;
    }

    //var tlfcc = document.getElementById('countryCode').value;
    var tlfznb = document.getElementById('telefonoZenbakia').value;
    //var tlf = tlfcc+tlfznb;
    //alert(tlfznb);
    if (/[0-9]{9}/.test(tlfznb)) {
        k5 = 1;
    }

    var ktot = k1 + k2 + k3 + k4 + k5;
    if (ktot!=5) {
        alert("Kaixo,  " + izena + " " + abizena + ", " +  emaila + " postarekin" + " , " + jaiotzeData + " datan jaioa eta " +nan+ " zenbakiarekin" +", ez dituzu datuak zuzen sartu.");
    } else {
        document.getElementById('loginak').submit(); //Así submitea
    }
}
