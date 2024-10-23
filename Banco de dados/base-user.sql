-- Criação do novo usuário
CREATE USER 'ADMIN'@'localhost' IDENTIFIED BY 'AD123';

-- Concedendo todas as permissões ao novo usuário no banco de dados social_network
GRANT ALL PRIVILEGES ON social_network.* TO 'ADMIN'@'localhost';

-- Atualizando as permissões
FLUSH PRIVILEGES;
