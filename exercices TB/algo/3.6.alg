<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="SI (age>12) ALORS" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2etat="inactif" F2para="" F2defaut="" F2lignes=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param epaisseurLigne="2" totalBoucles="5000000" epaisseurPoint="2" arrondiAuto="vrai" totalAffichages="1000" maxBoucle="500000" nbDecimales="8"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#age" algoitem="age EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="2#age#pasliste" algoitem="LIRE age"/>
        <item code="6#5&lt;age et age&lt;8" algoitem="SI (5&lt;age et age&lt;8) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#poussin#0" algoitem="AFFICHER &quot;poussin&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="6#7&lt;age et age&lt;10" algoitem="SI (7&lt;age et age&lt;10) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#pupille#0" algoitem="AFFICHER &quot;pupille&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="6#9&lt;age et age&lt;12" algoitem="SI (9&lt;age et age&lt;12) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#minime#0" algoitem="AFFICHER &quot;minime&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="6#age>12" algoitem="SI (age>12) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#cadet#0" algoitem="AFFICHER &quot;cadet&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
