-- Cria a tabela "usuarios"
CREATE TABLE usuarios (
    id INT PRIMARY KEY,
    nome VARCHAR(50)
);

-- Insere um dado na tabela "usuarios"
INSERT INTO usuarios (id, nome) VALUES (1, 'João');

-- Seleciona todos os dados da tabela "usuarios"
SELECT * FROM usuarios;
