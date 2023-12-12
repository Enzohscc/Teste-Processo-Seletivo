CREATE DATABASE website_locacao;
USE website_locacao;

CREATE TABLE imoveis (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tipo VARCHAR(255) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);

INSERT INTO imoveis (tipo, endereco, preco) VALUES
('Casa', 'Rua Exemplo 123', 250000.00),
('Apartamento', 'Avenida Teste 456', 150000.00),
('Terreno', 'Praça Modelo 789', 100000.00);
