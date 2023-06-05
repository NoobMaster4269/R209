BEGIN TRANSACTION;

DROP TABLE IF EXISTS Categorie;

CREATE TABLE Categorie
  (idCat	INTEGER PRIMARY KEY AUTOINCREMENT,
   NomCat	TEXT	NOT NULL,
   Image	TEXT  	NOT NULL
  );
  
INSERT INTO Categorie VALUES('0','Caillou','Image/caillou.png');
INSERT INTO Categorie VALUES('1','Rocher','Image/rocher.png');
INSERT INTO Categorie VALUES('2','Galet','Image/galet.png');
INSERT INTO Categorie VALUES('3','Pierre','Image/pierre.png');
INSERT INTO Categorie VALUES('4','Gravier','Image/gravier.jpg');
INSERT INTO Categorie VALUES('5','Obsidienne','Image/obsidienne.jpg');
INSERT INTO Categorie VALUES('6','Pierre precieuse','Image/pierre precieuse.png');


DROP TABLE IF EXISTS Produits;

CREATE TABLE Produits
  (idCat	INTEGER	NOT NULL,
   idProd	INTEGER  PRIMARY KEY AUTOINCREMENT,
   NomProd	TEXT	NOT NULL,
   Stock	INTEGER	NULL,
   Prix		INTEGER	NOT NULL,
   Image	TEXT 	NOT NULL,
   Description  TEXT    NOT NULL,
   FOREIGN KEY (idCat) REFERENCES Categorie (idCat)
  );
  
INSERT INTO Produits VALUES('0','0','Caillou', 1,92,'Image/C0_Caillou.jpg','Le petit Caillou a 4 ans, il vient de se faire abandonner par ses parents, car il vient d’être diagnostiqué schizophrène, il aime s amuser avec ses amis imaginaires, apprendre à faire du sport et explorer la nature.');
INSERT INTO Produits VALUES('0',1,'Racaillou',100,5,'Image/C0_Racaillou.jpg','Racaillou est un Pokémon formé de roche. Il possède deux bras et n a pas de jambes, il lévite bien que ses types ne le lui permettent pas. Il évolue en Gravalanch au niveau 25.');
INSERT INTO Produits VALUES('1',2,'Rocher Yves', 1, 30,'Image/C1_Yves.jpg','Ce parfum, qui sent le rocher, capture l essence même de la nature avec une précision étonnante. Ce parfum unique combine des notes terrestres, minérales et boisées pour recréer l odeur authentique et caractéristique d un rocher.');
INSERT INTO Produits VALUES('1',3,'Rocher ferrero', 150, 5,'Image/C1_Ferrero.jpg','Imaginez une sphère de plaisir chocolaté, recouverte d un délicat chocolat au lait croustillant. À l intérieur, vous découvrirez un savoureux mélange de noisette croquante, enrobée d une crème pralinée onctueuse. Chaque bouchée est un véritable instant de bonheur, un doux voyage gustatif dans le monde du chocolat.');
INSERT INTO Produits VALUES('2',4,'Ricochet', 55, 79,'Image/C2_Ricochet.png','Ricochet tire des balles qui rebondissent sur les murs, il a même un gadget qui lui permet de tirer des balles dans tous les sens, attention protéger vos objets précieux.');
INSERT INTO Produits VALUES('2',5,'Super Galet', 1, 3001,'Image/C2_Super-Galet.jpg','Ce galet est le meilleur, il permet une fois lancé sur une surface d’eau de faire minimum une centaine de ricochets. (attention usage unique)');
INSERT INTO Produits VALUES('2',6,'Statue Galet', 20, 45,'Image/C2_Statue-Galet.jpg','Imaginez une sculpture qui capture l essence même de la nature, avec ses courbes douces et ses formes organiques. Chaque statue de galet est une pièce unique, créée à partir d un galet sélectionné avec soin. Ce galet, façonné par les éléments au fil du temps, devient une toile naturelle pour l expression artistique.');
INSERT INTO Produits VALUES('3',7,'Palmade', 0, 2,'Image/C3_Palmade.jpg','Rupture de stock. Raison : prison.');
INSERT INTO Produits VALUES('3',8,'Random', 300, 10,'Image/C3_Random-Pierre.jpg','?');
INSERT INTO Produits VALUES('3',9,'Pierre Pokemon', 1, 300,'Image/C3_Pierre-Pokemon.png','Pierre est le champion de l’Arène d’Argenta de Kanto. Pierre est un gros « charo », en effet, à chaque fois qu il croise une jolie fille, il en tombe follement amoureux et se jette sur elle, afin de lui déclarer sa flamme.');
INSERT INTO Produits VALUES('4',10,'Pack Gravier', 90, 10,'Image/C4_Pack-Gravier.jpg','Un pack de gravier banal, il est lourd.');
INSERT INTO Produits VALUES('4',11,'Ravierre Pastore', 1, 2,'Image/C4_Javier.jpg','Ancien joueur évoluant au PSG.');
INSERT INTO Produits VALUES('5',12,'Obsi', 12, 600,'Image/C5_Obsidienne.png','Ce minerai ne peut-être récolté que grâce à une pioche en diamant.');
INSERT INTO Produits VALUES('5',13,'Pack de 10 obsi', 2, 4999,'Image/C5_Portail-Nether.png','Ce pack permet de construire votre propre portail pour rejoindre le Nether.');
INSERT INTO Produits VALUES('6',14,'Diamant', 3, 400,'Image/C6_Diamant.png','Avec trois diamants et deux bâtons, vous pouvez fabriquer votre propre pioche pour pouvoir miner de l obsidienne.');
INSERT INTO Produits VALUES('6',15,'Emeraude', 5, 299,'Image/C6_Emeraude.jpg','Grâce à ces émeraudes, vous pourrez aller vous faire arnaquer par les villageois.');

DROP TABLE IF EXISTS Panier;

CREATE TABLE Panier
  (idPanier	INTEGER PRIMARY KEY AUTOINCREMENT,
   NomProd	TEXT NOT NULL,
   idProd	INTEGER	NOT NULL,
   idClient	INTEGER	NOT NULL,
   Prix		INTEGER	NOT NULL,
   Qte		INTEGER NOT NULL,
   Image	TEXT	NOT NULL,
   FOREIGN KEY (idClient) REFERENCES Clients (idClient),
   FOREIGN KEY (NomProd) REFERENCES Produits (NomProd),
   FOREIGN KEY (idProd) REFERENCES Produits (idProd),
   FOREIGN KEY (Prix) REFERENCES Produits (Prix),
   FOREIGN KEY (Image) REFERENCES Produits (Image)
  );



DROP TABLE IF EX
ISTS Clients;

CREATE TABLE Clients
  (idClient	INTEGER	PRIMARY KEY AUTOINCREMENT,
   Status 	TEXT 	NOT NULL,
   NomClient	TEXT	NOT NULL,
   MDP	TEXT	NOT NULL
  );
  
  
INSERT INTO Clients VALUES (0, 'Admin','NoobMaster','ez');
INSERT INTO Clients VALUES (1,'Admin','BASTOSTERONE','CACA');
INSERT INTO Clients VALUES (2,'Admin','Antoninlegoat','gay');
INSERT INTO Clients VALUES (3,'Admin','Admin', '22222');

COMMIT;  
   



