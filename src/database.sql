CREATE TABLE categoria
(
	IdCategoria INT AUTO_INCREMENT NOT null,
    descrizione TEXT,
    tipo ENUM('studente', 'cliente', 'diversamente_abile'),
    sconto DECIMAL(5.2),
    PRIMARY KEY (IdCategoria)
);

CREATE TABLE utente
(
	IdUtente INT AUTO_INCREMENT NOT null,
    email varchar(50) NOT NULL UNIQUE,
    nome varchar(30), 
    cognome varchar(50),
    password varchar(255),
    ruolo ENUM('admin', 'user') DEFAULT 'user',
    categoria INT,
    PRIMARY KEY (IdUtente),
    FOREIGN KEY (categoria) REFERENCES categoria(IdCategoria)
);

CREATE TABLE accessorio
(
	IdAccessorio INT AUTO_INCREMENT NOT NULL,
    descrizione TEXT,
    prezzo DECIMAL(5.2),
    PRIMARY KEY (IdAccessorio)
);
CREATE TABLE biglietto
(
    IdBiglietto INT AUTO_INCREMENT NOT NULL,
    titolo varchar(50),
    tariffa DECIMAL(5.2),
    data_inizio DATE,
    data_fine DATE,
    PRIMARY KEY (IdBiglietto)
);

CREATE TABLE accessori_biglietto
(
    IdAccessorioBiglietto INT AUTO_INCREMENT NOT NULL,
	Biglietto INT,
    Accessorio INT,
    Codice_Utente INT,
    PRIMARY KEY (IdAccessorioBiglietto),
    FOREIGN KEY (Biglietto) REFERENCES biglietto(IdBiglietto),
    FOREIGN KEY (Accessorio) REFERENCES accessorio(IdAccessorio),
    FOREIGN KEY (Codice_Utente) REFERENCES utente(IdUtente)
);

CREATE TABLE prenotazione
(
    IdPrenotazione INT AUTO_INCREMENT,
   	Codice_Biglietto INT,
   	Codice_Utente INT,
    data_prenotazione date,
    PRIMARY KEY (IdPrenotazione),
    FOREIGN KEY (Codice_Biglietto) REFERENCES biglietto(IdBiglietto),
    FOREIGN KEY (Codice_Utente) REFERENCES utente(IdUtente)

);

INSERT INTO `categoria` (`IdCategoria`, `descrizione`, `tipo`, `sconto`) VALUES
(1, 'Sconto per clienti', 'cliente', 0),
(2, 'Sconto per studenti', 'studente', 10),
(3, 'Sconto per diversamente abili', 'diversamente_abile', 20);

INSERT INTO `utente` (`IdUtente`, `email`, `nome`, `cognome`, `password`, `ruolo`, `categoria`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', '$2y$10$wJWLjTQhVKGZg/sQY2yU5eN.lbSsljNLUKiTtnTaZmGfIZu189eYi', 'admin', 1),
(2, 'utente@gmail.com', 'utente', ' utente', '$2y$10$BCx2y5QcJGqBgq.s5RJWBekJeSV6yj.wPBzKfP/lpwdZOmTOM6yZ.', 'user', 1);

INSERT INTO biglietto (titolo, tariffa, data_inizio, data_fine)
VALUES 
    ('Esposizione Arte Moderna', 15.00, '2024-03-18', '2024-03-25'),
    ('Esposizione Fotografica', 10.00, '2024-04-10', '2024-04-15'),
    ('Mostra Scultura Antica', 12.50, '2024-05-05', '2024-05-12'),
    ('Esposizione Pittura Contemporanea', 18.00, '2024-06-01', '2024-06-07'),
    ('Mostra Design Industriale', 14.50, '2024-07-10', '2024-07-17'),
    ('Esposizione Architettura', 20.00, '2024-08-15', '2024-08-22'),
    ('Mostra Arte Digitale', 17.50, '2024-09-20', '2024-09-28'),
    ('Esposizione Storia Antica', 13.00, '2024-10-10', '2024-10-17'),
    ('Mostra Fotografia Astratta', 16.50, '2024-11-05', '2024-11-12'),
    ('Esposizione Sculture Moderne', 19.00, '2024-12-01', '2024-12-07');

-- Inserimento di 5 visite
INSERT INTO biglietto (titolo, tariffa, data_inizio, data_fine)
VALUES 
    ('Visita Guidata al Museo', 8.00, '2024-03-18', NULL),
    ('Tour Artistico', 10.00, '2024-04-05', NULL),
    ('Visita alla Galleria d\'Arte', 7.50, '2024-05-15', NULL),
    ('Tour Storico', 9.00, '2024-06-20', NULL),
    ('Visita al Palazzo Reale', 11.50, '2024-07-25', NULL);


    INSERT INTO accessorio (descrizione, prezzo) VALUES
('Guide audio', 9.99),
('Mappa del museo', 5.49),
('Penna souvenir', 3.99),
('T-shirt del museo', 12.99),
('Cappello del museo', 8.99),
('Poster artistico', 15.49),
('Set di cartoline', 6.99),
('Calamita per frigorifero', 2.99),
('Puzzle del museo', 11.99),
('Portachiavi', 4.49),
('Libro illustrato', 18.99),
('Set di matite artistiche', 7.49),
('Sciarpa del museo', 14.99),
('Tazza da caffe', 9.99),
('Miniatura del museo', 20.49),
('Kit di pittura', 16.99),
('Collana con pendente', 13.99),
('Album fotografico', 22.49),
('Orologio da polso', 19.99),
('Set di adesivi', 3.49);
