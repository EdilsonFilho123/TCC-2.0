CREATE DATABASE IF NOT EXISTS TCC;

USE TCC;

CREATE TABLE Usuario (
  usu_id INT NOT NULL AUTO_INCREMENT,
  usu_nome VARCHAR(255) NOT NULL,
  usu_email VARCHAR(255) NOT NULL,
  usu_senha VARCHAR(255) NOT NULL,
  usu_nivel TINYINT DEFAULT 0,
  PRIMARY KEY (usu_id)
);

CREATE TABLE Projeto (
  pjt_id INT NOT NULL AUTO_INCREMENT,
  pjt_titulo VARCHAR(255) NOT NULL,
  pjt_descricao VARCHAR(255) DEFAULT NULL,
  pjt_termo_abertura VARCHAR(255) DEFAULT NULL,
  pjt_status TINYINT DEFAULT 0,
  pjt_data_inicial DATE NOT NULL,
  pjt_data_final DATE NOT NULL,
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
  atv_titulo VARCHAR(255) NOT NULL,
  atv_descricao VARCHAR(255) NOT NULL,
  atv_status CHAR DEFAULT NULL,
  pjt_id INT NOT NULL,
  usu_resp_id INT NOT NULL,
  PRIMARY KEY (atv_id),
  FOREIGN KEY (pjt_id) REFERENCES Projeto(pjt_id),
  FOREIGN KEY (usu_resp_id) REFERENCES Usuario(usu_id)
);

CREATE TABLE Arquivo (
  arq_id INT NOT NULL AUTO_INCREMENT,
  arq_nome VARCHAR(255) NOT NULL,
  pjt_id INT NOT NULL,
  PRIMARY KEY (arq_id),
  FOREIGN KEY (pjt_id) REFERENCES Projeto(pjt_id)
);