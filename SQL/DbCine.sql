DROP TABLE IF EXISTS critique CASCADE;
DROP TABLE IF EXISTS film CASCADE;
DROP TABLE IF EXISTS utilisateur CASCADE;
DROP TABLE IF EXISTS acteur CASCADE;
DROP TABLE IF EXISTS realisateur CASCADE;

CREATE TABLE Realisateur (
                             RealisateurID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             NomRealisateur VARCHAR(50), PrenomRealisateur VARCHAR(50),
                             DateNaissanceRealisateur DATE, BiographieRealisateur TEXT
);

CREATE TABLE Acteur (
                        ActeurID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        NomActeur VARCHAR(50), PrenomActeur VARCHAR(50),
                        DateNaissanceActeur DATE, BiographieActeur TEXT
);

CREATE TABLE Film (
                      FilmID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                      Titre VARCHAR(255), DateSortie DATE, DureeFilm TIME,
                      GenreFilm VARCHAR(50), BandeAnnonce VARCHAR(255),
                      Synopsis TEXT, NoteMoyenne DECIMAL(3, 1), RealisateurId INT,
                      FOREIGN KEY (RealisateurId) REFERENCES Realisateur(RealisateurID)
);

CREATE TABLE Utilisateur (
                             UtilisateurID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             NomUtilisateur VARCHAR(255), PrenomUtilisateur VARCHAR(255),
                             PseudoUtilisateur VARCHAR(50), Email VARCHAR(255),
                             MotDePasse VARCHAR(255), DateInscription DATE
);

CREATE TABLE Critique (
                          CritiqueID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                          UtilisateurID INT, FilmID INT, NoteMoyenne DECIMAL(3, 1),
                          Commentaire TEXT, DateCritique DATE,
                          FOREIGN KEY (UtilisateurID) REFERENCES Utilisateur(UtilisateurID),
                          FOREIGN KEY (FilmID) REFERENCES Film(FilmID)
);
