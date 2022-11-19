## ALTZAIRU DENDA WEB SISTEMA

Taldekideak: **Eneko Perez**, **Eneko Basauri** eta **Aimar Larrazabal**.

_DOCKER BIDEZ HEDATZEKO INSTRUKZIOAK:_

    1. Proiektuaren karpeta barruan kokatu terminalaren bidez (Segur_lana-master barruan).
    2. Behin barruan, docker build -t="web" . komandoa exekutatu.
    3. Behin aurreko komando amaituta, docker-compose up komandoa exekutatu.
    4. PHPMyAdmin-en (http://localhost:8890), datu basea inportatu lan karpetako database.sql fitxategia hautatuz.
    5. Aurreko lau pausoak egindakoan, http://localhost:81 helbidean sartuz gero web orria agertuko da, index.php fitxategia.
    6. Web orriarekin amaitutakoan, beste terminal bat zabaldu eta docker-compose down komando exekutatu.

_AUDITORIAK EGITEKO INSTRUKZIOAK:_

    1. ZAP aplikazioa instalatuko dugu gure ordenagailuan.
    2. terminalaren bidez zap.sh egingo dugu aplikazioa irekitzeko.
    3. Proiektua docker bidez hedatu aurreko pausuetan esaten duen bezala.
    4. Interneten http://localhost:81 helbidean sartuko gara, konprobatzeko ondo egin dugula.
    5. Azkenik ZAP-ean eskaneo automatikoa egingo dugu, "Alertas" jartzen duen lekuan klikatuko dugu, gure web sistema daukan erroreak ikusteko.
    6. "Alerta" bakoitzaren barruan klikatzen badugu informazio guztia aterako zaigu; errore mota, soluzio posibleak eta abar.
