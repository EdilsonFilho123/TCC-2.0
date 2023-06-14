CREATE DATABASE IF NOT EXISTS TCC;

USE TCC;

CREATE TABLE Usuario (
  usu_id INT NOT NULL AUTO_INCREMENT,
  usu_nome VARCHAR(255) NOT NULL,
  usu_email VARCHAR(255) NOT NULL,
  usu_senha VARCHAR(255) NOT NULL,
  usu_imagem BLOB,
  usu_nivel TINYINT DEFAULT 0,
  PRIMARY KEY (usu_id)
);

CREATE TABLE Projeto (
  pjt_id INT NOT NULL AUTO_INCREMENT,
  pjt_nome VARCHAR(255) NOT NULL,
  pjt_descricao VARCHAR(255) DEFAULT NULL,
  pjt_status TINYINT DEFAULT 0,
  pjt_usu_resp_id INT NOT NULL,
  PRIMARY KEY (pjt_id),
  FOREIGN KEY (pjt_usu_resp_id) REFERENCES Usuario(usu_id)
);

CREATE TABLE Participantes (
  prt_id INT NOT NULL AUTO_INCREMENT,
  usu_id INT NOT NULL,
  pjt_id INT NOT NULL,
  PRIMARY KEY (prt_id),
  FOREIGN KEY (usu_id) REFERENCES Usuario(usu_id),
  FOREIGN KEY (pjt_id) REFERENCES Projeto(pjt_id)
);

CREATE TABLE Atividade (
  atv_id INT NOT NULL AUTO_INCREMENT,
  atv_descricao VARCHAR(255) NOT NULL,
  atv_status CHAR DEFAULT NULL,
  atv_data_inicial DATE NOT NULL,
  atv_data_final DATE NOT NULL,
  atv_qtde_horas FLOAT NOT NULL,
  pjt_id INT NOT NULL,
  usu_resp_id INT NOT NULL,
  PRIMARY KEY (atv_id),
  FOREIGN KEY (pjt_id) REFERENCES Projeto(pjt_id),
  FOREIGN KEY (usu_resp_id) REFERENCES Usuario(usu_id)
);

CREATE TABLE Tipo_Arquivo (
  typ_id INT NOT NULL AUTO_INCREMENT,
  typ_descricao VARCHAR(255) NOT NULL,
  PRIMARY KEY (typ_id)
);

CREATE TABLE Arquivo (
  arq_id INT NOT NULL AUTO_INCREMENT,
  arq_link VARCHAR(255) NOT NULL,
  arq_nome VARCHAR(255) NOT NULL,
  pjt_id INT NOT NULL,
  typ_id INT NOT NULL,
  PRIMARY KEY (arq_id),
  FOREIGN KEY (pjt_id) REFERENCES Projeto(pjt_id),
  FOREIGN KEY (typ_id) REFERENCES Tipo_Arquivo(typ_id)
);

INSERT INTO Tipo_Arquivo (typ_descricao)
VALUES ('eap'), ('termo_abertura'), ('fluxograma'), ('cronograma');
