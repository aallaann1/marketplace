CREATE TABLE Membres (
                         email VARCHAR(50) PRIMARY KEY,
                         nomMembre VARCHAR(50),
                         prenomMembre VARCHAR(50),
                         telephone INT,
                         estAdmin BOOLEAN,
                         mdpHache VARCHAR(50),
                         sel VARCHAR(50)
);

CREATE TABLE Articles (
                             id VARCHAR(50) PRIMARY KEY,
                             nomArticle VARCHAR(50),
                             marque VARCHAR(50)
);

CREATE TABLE Ventes (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        heureVente DATETIME,
                        prixVente DECIMAL(10, 2),
                        lieuVente VARCHAR(50),
                        Acheteur VARCHAR(50),
                        suivisColisVente VARCHAR(50)
);

CREATE TABLE Statistiques (
                              idStat INT PRIMARY KEY AUTO_INCREMENT,
                              nbPaireVendu INT,
                              BeneficeTotal DECIMAL(10, 2),
                              CATotal DECIMAL(10, 2),
                              email VARCHAR(50),
                              FOREIGN KEY (email) REFERENCES Membres(email)
);

CREATE TABLE possede (
                         email VARCHAR(50),
                         id VARCHAR(50),
                         quantite INT,
                         taille ENUM('XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '36.5', '37', '37.5', '38', '38.5', '39', '39.5', '40', '40.5', '41', '41.5', '42', '42.5', '43', '44', '44.5', '45', '45.5', '46', '46.5', '47', '48', '48.5', '49', '50', 'autre', 'TAILLE UNIQUE'),
                         statut ENUM('pas reçu', 'reçu', 'en dépôt vente', 'envoyé au client', 'vendu'),
                         prixAchat DECIMAL(10, 2),
                         prix_de_vente_souhaite DECIMAL(10, 2),
                         dateAchat DATE,
                         lieuAchat VARCHAR(50),
                         vendeur VARCHAR(50),
                         suivisColis VARCHAR(50),
                         PRIMARY KEY (email, id, taille, statut),
                         FOREIGN KEY (email) REFERENCES Membres(email),
                         FOREIGN KEY (id) REFERENCES articles(id)
);

CREATE TABLE vends (
                       email VARCHAR(50),
                       idArticle VARCHAR(50),
                       quantite INT,
                       idVente INT,
                       PRIMARY KEY (email, idArticle, idVente),
                       FOREIGN KEY (email) REFERENCES Membres(email),
                       FOREIGN KEY (idArticle) REFERENCES Articles(id),
                       FOREIGN KEY (idVente) REFERENCES Ventes(id)
);



-- Trigger pour mettre à jour les statistiques

DELIMITER //

CREATE TRIGGER update_statistiques_after_vente
    AFTER INSERT ON vends
    FOR EACH ROW
BEGIN
    DECLARE prixAchat DECIMAL(10, 2);
    DECLARE prixVente DECIMAL(10, 2);
    DECLARE quantiteVendue INT;
    DECLARE benefice DECIMAL(10, 2);

    -- Récupérer le prix d'achat de l'article vendu
    SELECT prixAchat INTO prixAchat
    FROM Inventaires
    WHERE id = NEW.id;

    -- Récupérer le prix de vente de l'article vendu
    SELECT prixVente INTO prixVente
    FROM Ventes
    WHERE heureVente = NEW.heureVente;

    -- Calculer le bénéfice pour la quantité vendue
    SET quantiteVendue = NEW.quantite;
    SET benefice = (prixVente - prixAchat) * quantiteVendue;

    -- Mettre à jour la table Statistiques
    INSERT INTO Statistiques (nbPaireVendu, BeneficeTotal, CATotal, email)
    VALUES (quantiteVendue, benefice, prixVente * quantiteVendue, NEW.email)
        ON DUPLICATE KEY UPDATE
                             nbPaireVendu = nbPaireVendu + quantiteVendue,
                             BeneficeTotal = BeneficeTotal + benefice,
                             CATotal = CATotal + (prixVente * quantiteVendue);
END //

DELIMITER ;


