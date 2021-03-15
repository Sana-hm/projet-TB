
--LES BESOINS D’AFFICHAGE
-- 1 - Quelles sont les commandes du fournisseur 09120?
SELECT * FROM entcom 
WHERE numfou = 09120 ;

-- 2 - Afficher le code des fournisseurs pour lesquels des commandes ont été passées.
SELECT DISTINCT numfou FROM entcom;

--3 - Afficher le nombre de commandes fournisseurs passées, et le nombre de fournisseur concernés.
SELECT COUNT(*) , COUNT(DISTINCT(`numfou`))
FROM `entcom`;

--4 - Editer les produits ayant un stock inférieur ou égal au stock d'alerte et dont la quantité annuelle est inférieur est inférieure à1000 (informations à fournir : n° produit, libelléproduit, stock, stockactuel d'alerte, quantitéannuelle)
SELECT `codart` AS'n° produit' , `libart`AS' libelléproduit' , `stkale` AS'stockactuel',`stkphy`AS'stock', `qteann`AS' quantitéannuelle'
FROM produit
WHERE `stkphy`<=`stkale` AND `qteann`<1000;

-- 5 Quels sont les fournisseurs situés dans les départements 75 78 92 77 ? L’affichage (département, nom fournisseur) sera effectué par département décroissant, puis par ordre alphabétique
SELECT `posfou` AS 'département' , `nomfou` AS 'nom fournisseur'
FROM fournis
WHERE `posfou` LIKE '75%' OR `posfou` LIKE '78%' OR `posfou` LIKE '92%' OR `posfou` LIKE '77%'
ORDER BY posfou DESC , nomfou ASC ;


-- 6 Quelles sont les commandes passées au mois de mars et avril?
SELECT * FROM entcom
WHERE month(datcom)=3 OR month(datcom)=4; 

--7 Quelles sont les commandes du jourqui ont des observations particulières ?(Affichage numéro de commande, date de commande)
SELECT `numcom` AS 'numéro de commande' , `datcom` AS 'date de commande' FROM entcom
WHERE `obscom`!= '';

-- 8 Listerle total de chaque commande par total décroissant (Affichage numéro de commande et total)
SELECT `numcom` AS 'numéro de commande' , SUM( qtecde * priuni) AS 'total'
 FROM ligcom
 GROUP BY numcom
 ORDER BY total DESC;

-- 9 Lister les commandesdont le total est supérieur à 10000€; on exclura dans le calcul du total les articles commandés en quantité supérieure ou égale à 1000.(Affichage numéro de commande et total)
SELECT `numcom` AS 'numéro de commande' , 
SUM(qtecde*priuni) AS 'total'
 FROM ligcom
WHERE (qtecde*priuni)>10000 
AND (qtecde<1000)
GROUP BY numcom;


-- 10 Lister les commandes par nom fournisseur (Afficher le nom du fournisseur, le numéro de commande et la date)
SELECT `nomfou` AS 'le nom du fournisseur' , `numcom` AS 'le numéro de commande' , `datcom` AS 'la date'
FROM entcom , fournis
WHERE entcom.`numfou` = fournis.`numfou`;

-- 11 Sortir les produits des commandes ayant le mot "urgent' en observation?(Afficher le numéro de commande, le nom du fournisseur, le libellé du produit et le sous total= quantité commandée * Prix unitaire)
SELECT  entcom.`numcom` AS 'le numéro de commande',
fournis.`nomfou` AS 'le nom du fournisseur',
produit.`libart` AS 'le libellé du produit' ,
qtecde * priuni AS 'le total'
FROM  entcom, fournis , ligcom ,  produit
WHERE  entcom.obscom LIKE '%urgent%' 
AND entcom.`numfou` = fournis.`numfou`
AND ligcom.`numcom` = entcom.`numcom` 
AND produit.`codart` = ligcom.`codart`;

-- 12 Coder de 2manières différentes la requête suivante:Lister lenom desfournisseurs susceptibles de livrer au moins un article
--première facon 
SELECT nomfou AS 'le nom des fournisseurs' , qteliv 
FROM  fournis
JOIN entcom
ON fournis.numfou = entcom.numfou 
JOIN ligcom
ON ligcom.numcom = entcom.numcom 
WHERE  qteliv>1 
GROUP BY nomfou ,  qteliv ;

--deuxième facon
SELECT nomfou AS 'le nom des fournisseurs' , qteliv 
FROM  fournis, entcom ,ligcom
WHERE qteliv>1 AND 
fournis.numfou = entcom.numfou AND 
ligcom.numcom = entcom.numcom 
GROUP BY nomfou ,  qteliv  ;

-- 13 Coder de 2 manières différentes la requête suivanteLister les commandes (Numéro et date) dont le fournisseur est celui de la commande 70210
--première facon 
SELECT numcom , datcom
FROM entcom
WHERE numfou LIKE 120;

--deuxième facon
SELECT numcom , datcom
FROM entcom
WHERE numfou = 120;

-- 14 Dans les articles susceptibles d’être vendus, lister les articles moins chers (basés sur Prix1) que le moins cher des rubans (article dont le premier caractère commence par R). On affichera le libellé de l’article et prix1
SELECT DISTINCT `prix1` , `libart`
FROM vente , produit
WHERE prix1<120 AND vente.codart = produit.codart ;

-- 15 Editer la liste des fournisseurs susceptibles de livrer les produits dont le stock est inférieur ou égal à 150 % du stock d'alerte. La liste est triée par produit puis fournisseur
SELECT DISTINCT fournis.`nomfou` , produit.`libart` 
FROM fournis , ligcom , produit , entcom
WHERE stkale * 1.5 >= `stkphy` 
AND entcom.numfou = fournis.numfou
AND entcom.numcom = ligcom.numcom 
AND ligcom.codart = produit.codart ;

-- 16 Éditer la liste des fournisseurs susceptibles de livrer les produit dont le stock est inférieur ou égal à 150 % du stock d'alerte et un délai de livraison d'au plus 30 jours. La liste est triée par fournisseur puis produit
SELECT DISTINCT fournis.`nomfou` , produit.`libart` 
FROM  produit ,  ligcom ,entcom , fournis , vente
WHERE stkale * 1.5 >= `stkphy` 
AND `delliv`>30
AND entcom.numfou = fournis.numfou
AND entcom.numcom = ligcom.numcom 
AND ligcom.codart = produit.codart 
AND vente.codart = produit.codart;

-- 17 Avec le même type de sélection que ci-dessus, sortir un total des stocks par fournisseur trié par total décroissant
SELECT nomfou ,
SUM(stkphy)
FROM  produit , fournis , ligcom , entcom
WHERE produit.codart = ligcom.codart
AND entcom.numcom = ligcom.numcom
AND fournis.numfou = entcom.numfou
GROUP BY nomfou
ORDER BY SUM(stkphy) DESC;

-- 18 En fin d'année, sortir la liste des produits dontla quantité réellement commandée dépasse 90% de la quantité annuelleprévue.
SELECT libart
FROM produit , ligcom
WHERE produit.codart = ligcom.codart
 AND (qteann * 0.90)< qtecde;

-- 19 Calculer le chiffre d'affaire par fournisseur pour l'année 93 sachant que les prix indiqués sont hors taxes et que le taux de TVA est 20%.
SELECT numfou , SUM(qtecde * priuni * 1.20) 
FROM ligcom , entcom
WHERE entcom.numcom = ligcom.numcom
GROUP BY numfou;



--LES BESOINS DE MISE A JOUR
-- 1 Application d'une augmentation de tarif de 4% pour le prix 1, 2% pour le prix2 pour le fournisseur 9180
UPDATE vente
SET prix1=prix1 *1.04 ,
prix2=prix2 * 1.02
WHERE numfou = 9180 ;

-- 2 Dans la table vente, mettre à jour le prix2 des articles dont le prix2 est null, en affectant a valeur de prix.
UPDATE vente
SET prix2 = prix1
WHERE prix2 = 0;

--3 Mettre à jour le champ obscom en positionnant '*****' pour toutes les commandes dont le fournisseur a un indice de satisfaction <5
UPDATE entcom , fournis
SET obscom = '*****'
WHERE entcom.numfou = fournis.numfou AND satisf<5;

-- 4 Suppression du produit I110
DELETE FROM produit
WHERE codart='I110';