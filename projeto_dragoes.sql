CREATE DATABASE  projeto_dragoes;

CREATE TABLE `info_usuarios` (
  `id` INT AUTO_INCREMENT PRIMARY KEY NOT,
  `nome` varchar(50) NOT NULL,
  `data_nascimento` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;