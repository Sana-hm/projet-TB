
DROP DATABASE IF EXISTS hotel;
CREATE DATABASE hotel;
USE hotel;


CREATE TABLE station(
	
	num_station INT(100) NOT NULL PRIMARY KEY,
	nom_station INT(200)NOT NULL
);

CREATE TABLE client(
	adresse_client varchar(200) NOt NULL,
	nom_client varchar(200) NOt NULL,
	prenom_client varchar(200) NOt NULL,
	num_client INT(200) NOt NULL PRIMARY KEY
);

CREATE TABLE hotel(
    capacite_hotel INT(100)NOT NULL,
    categorie_hptel INT(50)NOT NULL,
    nom_hotel INT(100) NOt NULL,
    adresse_hotel varchar(200)NOt NULL,
    num_hotel INT(100)NOt NULL PRIMARY KEY,
    num_station INT(100)NOT NULL,
    foreign KEY(num_station) references station(num_station) 
);

CREATE TABLE chambre(
    capacite_chambre INT(100) NOT NULL,
    degre_confort INT(100) NOT NULL,
    expotion varchar(200) NOT NULL,
    type_chambre varchar(200) NOT NULL,
    num_chambre INT(200) NOT NULL PRIMARY KEY,
    num_hotel INT(100) NOT NULL,
    FOREIGN KEY(num_hotel) REFERENCES hotel(num_hotel)
);

CREATE TABLE resrvation(
    num_chambre INT(100) NOT NULL,
     FOREIGN KEY(num_chambre) REFERENCES chambre(num_chambre),
     num_client INT(200) NOT NULL,
      FOREIGN KEY(num_chambre) REFERENCES client(num_client),
      date_debut INT(20) NOT NULL,
      date_fin INT(20) NOt NULL,
      date_resrvation INT(20) NOT NULL,
      montant_arrhes varchar(200) NOT NULL,
      prix_total BIGINT NOT NULL
       ,CONSTRAINT resrvation PRIMARY KEY (num_chambre,num_client)
);
	 
	
 
	
