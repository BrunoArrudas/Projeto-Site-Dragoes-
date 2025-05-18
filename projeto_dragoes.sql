CREATE DATABASE projeto_dragoes;

CREATE TABLE `info_usuarios` (
  `id` PRIMARY KEY NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `data_nascimento` varchar(30) DEFAULT NULL,
  `email` varchar(10) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;