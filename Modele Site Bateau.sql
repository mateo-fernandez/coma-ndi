CREATE TABLE Utilisateur(
   idUtilisateur INT,
   nom VARCHAR(50) NOT NULL,
   prenom VARCHAR(50) NOT NULL,
   motDePasse VARCHAR(50) NOT NULL,
   adresse_email VARCHAR(70) NOT NULL,
   PRIMARY KEY(idUtilisateur),
   UNIQUE(adresse_email)
);

CREATE TABLE Pays(
   NomPays VARCHAR(50),
   PRIMARY KEY(NomPays)
);

CREATE TABLE Modeles(
   nomModele VARCHAR(50),
   PRIMARY KEY(nomModele)
);

CREATE TABLE Article(
   idArticle INT,
   contenu VARCHAR(5000) NOT NULL,
   derniereModif DATETIME NOT NULL,
   PRIMARY KEY(idArticle)
);

CREATE TABLE Personnes(
   IdPersonne INT,
   nom VARCHAR(50) NOT NULL,
   prenom VARCHAR(50) NOT NULL,
   dateNaissance DATE,
   dateDeces INT,
   biographie VARCHAR(5000),
   derniereModif DATETIME NOT NULL,
   NomPays VARCHAR(50) NOT NULL,
   PRIMARY KEY(IdPersonne),
   FOREIGN KEY(NomPays) REFERENCES Pays(NomPays)
);

CREATE TABLE Bateau(
   idBateau INT,
   nomBateau VARCHAR(50) NOT NULL,
   histoire VARCHAR(8000),
   anneeDebutUtilisation DECIMAL(4,0) NOT NULL,
   anneeFinUtilisation DECIMAL(4,0),
   NomPays VARCHAR(50) NOT NULL,
   nomModele VARCHAR(50) NOT NULL,
   PRIMARY KEY(idBateau),
   FOREIGN KEY(NomPays) REFERENCES Pays(NomPays),
   FOREIGN KEY(nomModele) REFERENCES Modeles(nomModele)
);

CREATE TABLE ProposerArticle(
   idUtilisateur INT,
   idArticle INT,
   nbPersonneSauves INT,
   PRIMARY KEY(idUtilisateur, idArticle),
   FOREIGN KEY(idUtilisateur) REFERENCES Utilisateur(idUtilisateur),
   FOREIGN KEY(idArticle) REFERENCES Article(idArticle)
);

CREATE TABLE ProposerPersonne(
   idUtilisateur INT,
   IdPersonne INT,
   PRIMARY KEY(idUtilisateur, IdPersonne),
   FOREIGN KEY(idUtilisateur) REFERENCES Utilisateur(idUtilisateur),
   FOREIGN KEY(IdPersonne) REFERENCES Personnes(IdPersonne)
);
