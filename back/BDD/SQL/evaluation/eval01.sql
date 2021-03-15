 --1 Liste des contacts français :
 SELECT `CompanyName` AS'Société',
 `ContactName` AS ' contact' , 
`ContactTitle` AS' Foction',
`Phone` AS'Téléphone'
FROM customers
WHERE `Country` = 'France';

--2 Produits vendus par le fournisseur « Exotic Liquids »:
SELECT `productName`AS'Produit' ,
`UnitPrice` AS'Prix' 
FROM products,suppliers
 WHERE `companyName` = 'Exotic Liquids' 
 AND products.SupplierID = suppliers.SupplierID;
 
--3 Nombre de produits vendus par les fournisseurs Français dans l’ordre décroissant ::
SELECT `CompanyName` AS'Fournisseur' ,
COUNT(*) AS'Nbre produit'
FROM suppliers ,products
WHERE  `Country` = 'france' 
AND suppliers.SupplierID = products.SupplierID
GROUP BY `CompanyName` 
ORDER BY COUNT(*) DESC;

--4 - Liste des clients Français ayant plus de 10 commandes :
SELECT companyName AS'Client',
COUNT(*) AS 'Nbre commandes'
FROM customers , orders
WHERE country = 'france'
AND customers.CustomerID = orders.CustomerID
GROUP BY companyName
HAVING COUNT(*)>10;

--5 Liste des clients ayant un chiffre d’affaires > 30.000 :
SELECT `companyName` AS 'client' ,
SUM(quantity * unitprice) AS 'CA' ,
country AS 'pays'
FROM `customers` , `order details` , `orders`
WHERE customers.CustomerID = orders.CustomerID
AND orders.OrderID = `order details`.`OrderID`
GROUP BY companyName, country
HAVING SUM(quantity * unitprice)>30000 
ORDER BY CA DESC;

--6 – Liste des pays dont les clients ont passé commande de produits fournis par « Exotic Liquids »:
SELECT DISTINCT customers.`country` AS 'Pays' 
FROM customers,suppliers,orders,`order details`,products
 WHERE suppliers.`companyName` = 'Exotic Liquids' 
 AND customers.CustomerID = orders.CustomerID
 AND `order details`.`OrderID` = orders.OrderID
 AND products.ProductID = `order details`.`ProductID`
 AND suppliers.SupplierID = products.SupplierID
ORDER BY customers.`country`;

--7 Montant des ventes de 1997 :
SELECT SUM(unitprice*quantity) AS'Montant des ventes de 1997'
FROM orders,`order details`
WHERE YEAR(orderdate)= 1997
AND orders.OrderID = `order details`.`OrderID`
ORDER BY SUM(unitprice*quantity);

--8 Montant des ventes de 1997 mois par mois:
SELECT  month(orderdate) as'Mois 97' , SUM(unitPrice * quantity) AS 'Montant ventes ' 
FROM `order details`,orders
WHERE  year(orderdate)=1997
AND orders.OrderID = `order details`.`OrderID`
GROUP BY month(orderdate);

--9 Depuis quelle date le client « Du monde entier » n’a plus commandé ? :
SELECT MAX(OrderDate) AS'Date de dernière commande'
FROM orders,customers
WHERE companyName = 'Du monde entier'
AND orders.CustomerID = customers.CustomerID;

--10 – Quel est le délai moyen de livraison en jours ?
SELECT ROUND(AVG(DATEDIFF(shippeddate,orderdate))) AS'Delai moyen de livraison en jours'
FROM orders;