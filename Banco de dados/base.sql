-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS social_network;

-- Seleciona o banco de dados
USE social_network;

-- Criação da tabela `user`
CREATE TABLE IF NOT EXISTS `user` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    dtNasc DATE NOT NULL,
    foto VARCHAR(255) DEFAULT 'default.png',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Criação da tabela `feed`
CREATE TABLE IF NOT EXISTS `feed` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usernameCreator VARCHAR(50) NOT NULL,
    text TEXT NOT NULL,
    dateTime DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usernameCreator) REFERENCES `user`(username) ON DELETE CASCADE
);

-- (Opcional) Criação de índices para melhorar a performance
CREATE INDEX idx_username ON `user`(username);
CREATE INDEX idx_email ON `user`(email);
CREATE INDEX idx_feed_username ON `feed`(usernameCreator);
