INSERT INTO categoria (categoria) VALUE ('Administração');
INSERT INTO categoria (categoria) VALUE ('Construção');
INSERT INTO categoria (categoria) VALUE ('Energia');
INSERT INTO categoria (categoria) VALUE ('Suporte');
INSERT INTO categoria (categoria) VALUE ('Manutenção');
INSERT INTO categoria (categoria) VALUE ('Tecnologia');

INSERT INTO servicos (servico, id_categoria) VALUES ('Contabilidade', 1);
INSERT INTO servicos (servico, id_categoria) VALUES ('Pedreiro', 2);
INSERT INTO servicos (servico, id_categoria) VALUES ('Eletricista', 3);
INSERT INTO servicos (servico, id_categoria) VALUES ('Analista', 4);
INSERT INTO servicos (servico, id_categoria) VALUES ('Encanador', 5);
INSERT INTO servicos (servico, id_categoria) VALUES ('Programador', 6);

INSERT INTO clientes (nome_cli, endereco, complemento, bairro, cidade, estado, cpf_cnpj, rg, email, telefone, celular, cep) 
VALUES ('João', 'Rua Moraes n. 100', 'casa', 'Retiro', 'São Miguel Arcanjo', 'SP', '111.222.333-44', '11.222.333-1', 
'joao@servico.com', '(15)3378-1100', '(15)99111-2222', '18230-000');
INSERT INTO clientes (nome_cli, endereco, complemento, bairro, cidade, estado, cpf_cnpj, rg, email, telefone, celular, cep) 
VALUES ('Pedro', 'Avenida Jardin n. 200', 'próximo a banca', 'Centro', 'São Miguel Arcanjo', 'SP', '222.333.444-55', '22.333.444-2', 
'pedro@servico.com', '(15)3378-1100', '(15)99222-3333', '18230-000');
INSERT INTO clientes (nome_cli, endereco, complemento, bairro, cidade, estado, cpf_cnpj, rg, email, telefone, celular, cep) 
VALUES ('Silvio', 'Rua Andrade n. 300', 'casa verde', 'Centro', 'Itapetininga', 'SP', '333.444.555-66', '33.444.555-3', 
'silvio@servico.com', '(15)3378-1100', '(15)99333-4444', '18212-644');
INSERT INTO clientes (nome_cli, endereco, complemento, bairro, cidade, estado, cpf_cnpj, rg, email, telefone, celular, cep) 
VALUES ('Andre', 'Rua Monsenhor n. 251', 'ao lado da praça', 'São João', 'Sorocaba', 'SP', '444.555.666-77', '44.555.666-4', 
'andre@servico.com', '(15)3378-1100', '(15)99444-5555', '18211-420');
INSERT INTO clientes (nome_cli, endereco, complemento, bairro, cidade, estado, cpf_cnpj, rg, email, telefone, celular, cep) 
VALUES ('Paulo', 'Rua Capão n. 412', 'proxímo ao escritório', 'Jardim Verde', 'Capão Bonito', 'SP', '555.666.777-88', '55.666.777-5', 
'paulo@servico.com', '(15)3378-1100', '(15)99555-6666', '18211-221');

INSERT INTO login_usuarios (login, senha_login, tipo, id_cliente) VALUES ('marcos', 1234, 'ADM', 1);
INSERT INTO login_usuarios (login, senha_login, tipo, id_cliente) VALUES ('matheus', 1234, 'ADM', 2);
INSERT INTO login_usuarios (login, senha_login, tipo, id_cliente) VALUES ('cris', 1234, 'CLI', 3);
INSERT INTO login_usuarios (login, senha_login, tipo, id_cliente) VALUES ('lucas', 1234, 'CLI', 4);

INSERT INTO prestadores (nome_prest, endereco, complemento, bairro, cidade, estado, email, telefone, celular, cep) 
VALUES ('Cristian', 'Rua Moraes n. 100', 'casa', 'Retiro', 'São Miguel Arcanjo', 'SP', 'cristian@servico.com', '(15)3378-1100', '(15)99111-2222', '18230-000');
INSERT INTO prestadores (nome_prest, endereco, complemento, bairro, cidade, estado, email, telefone, celular, cep) 
VALUES ('Marcos', 'Avenida Jardin n. 200', 'próximo a banca', 'Centro', 'São Miguel Arcanjo', 'SP', 'marcos@servico.com', '(15)3378-1100', '(15)99222-3333', '18230-000');
INSERT INTO prestadores (nome_prest, endereco, complemento, bairro, cidade, estado, email, telefone, celular, cep) 
VALUES ('Matheus', 'Rua Andrade n. 300', 'casa verde', 'Centro', 'Itapetininga', 'SP', 'matheus@servico.com', '(15)3378-1100', '(15)99333-4444', '18212-644');
INSERT INTO prestadores (nome_prest, endereco, complemento, bairro, cidade, estado, email, telefone, celular, cep) 
VALUES ('Lucas', 'Rua Monsenhor n. 251', 'ao lado da praça', 'São João', 'Sorocaba', 'SP', 'lucas@servico.com', '(15)3378-1100', '(15)99444-5555', '18211-420');
INSERT INTO prestadores (nome_prest, endereco, complemento, bairro, cidade, estado, email, telefone, celular, cep) 
VALUES ('Misael', 'Rua Capão n. 412', 'proxímo ao escritório', 'Jardim Verde', 'Capão Bonito', 'SP', 'misael@servico.com', '(15)3378-1100', '(15)99555-6666', '18211-221');

INSERT INTO orcamentos (data, valor, id_prestador, data_expiracao, id_cliente, id_servico, observacao) 
VALUES ('2021-05-30', 100.00, 1, '2021-06-10', 1, 1, 'orçamento de serviço');
INSERT INTO orcamentos (data, valor, id_prestador, data_expiracao, id_cliente, id_servico, observacao) 
VALUES ('2021-06-01', 150.00, 2, '2021-06-10', 2, 2, 'orçamento empresa');
INSERT INTO orcamentos (data, valor, id_prestador, data_expiracao, id_cliente, id_servico, observacao) 
VALUES ('2021-04-30', 200.00, 3, '2021-05-10', 3, 3, 'orçamento para cliente');
INSERT INTO orcamentos (data, valor, id_prestador, data_expiracao, id_cliente, id_servico, observacao) 
VALUES ('2021-04-25', 320.00, 4, '2021-05-10', 4, 4, 'cópia para arquivo');
INSERT INTO orcamentos (data, valor, id_prestador, data_expiracao, id_cliente, id_servico, observacao) 
VALUES ('2021-05-30', 400.00, 5, '2021-06-10', 5, 5, 'novo orçamento');
INSERT INTO orcamentos (data, valor, id_prestador, data_expiracao, id_cliente, id_servico, observacao) 
VALUES ('2021-04-15', 260.00, 3, '2021-04-22', 1, 4, 'orçamento de serviço');

INSERT INTO prestadores_servicos (id_prestador, id_servico) VALUES (1, 2);
INSERT INTO prestadores_servicos (id_prestador, id_servico) VALUES (2, 3);
INSERT INTO prestadores_servicos (id_prestador, id_servico) VALUES (3, 4);
INSERT INTO prestadores_servicos (id_prestador, id_servico) VALUES (4, 5);
INSERT INTO prestadores_servicos (id_prestador, id_servico) VALUES (5, 6);