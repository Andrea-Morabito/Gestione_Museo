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
	Biglietto INT,
    Accessorio INT,
    PRIMARY KEY (Biglietto, Accessorio),
    FOREIGN KEY (Biglietto) REFERENCES biglietto(IdBiglietto),
    FOREIGN KEY (Accessorio) REFERENCES accessorio(IdAccessorio)
);

INSERT INTO `categoria` (`IdCategoria`, `descrizione`, `tipo`, `sconto`) VALUES
(1, 'Sconto per clienti', 'cliente', 0),
(2, 'Sconto per studenti', 'studente', 10),
(3, 'Sconto per diversamente abili', 'diversamente_abile', 20);

INSERT INTO `utente` (`IdUtente`, `email`, `nome`, `cognome`, `password`, `ruolo`, `categoria`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', '$2y$10$wJWLjTQhVKGZg/sQY2yU5eN.lbSsljNLUKiTtnTaZmGfIZu189eYi', 'admin', 1),
(2, 'utente@gmail.com', 'utente', ' utente', '$2y$10$BCx2y5QcJGqBgq.s5RJWBekJeSV6yj.wPBzKfP/lpwdZOmTOM6yZ.', 'user', 1);