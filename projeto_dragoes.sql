CREATE DATABASE  projeto_dragoes;

CREATE TABLE `info_usuarios` (
  `id` INT AUTO_INCREMENT PRIMARY KEY NOT,
  `nome` varchar(50) NOT NULL,
  `data_nascimento` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `senha` varchar(30) NOT NULL
) 

CREATE TABLE imagens_cards (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imagem VARCHAR(100)
);

INSERT INTO projeto_dragoes (imagem) VALUES
('fogo01.jpg');