CREATE TABLE login_usuarios ( 
    id int AUTO_INCREMENT PRIMARY KEY, 
    login varchar(100) NOT NULL, 
    senha_login varchar(100) NOT NULL, 
    tipo char NOT NULL,
    id_cliente int NOT NULL
) engine = INNODB;


CREATE TABLE clientes ( 
    id int AUTO_INCREMENT PRIMARY KEY, 
    nome_cli varchar(100) NOT NULL,
    endereco varchar(100) NOT NULL, 
    complemento varchar(45), 
    bairro varchar(50) NOT NULL, 
    cidade varchar(60) NOT NULL, 
    estado varchar(2) NOT NULL, 
    cpf_cnpj varchar(14) NOT NULL,
    rg varchar(11) NOT NULL,
    email varchar(100) NOT NULL,
    telefone varchar(15),
    celular varchar(15),
    cep varchar(15) NOT NULL
) engine = INNODB;


CREATE TABLE prestadores ( 
    id int AUTO_INCREMENT PRIMARY KEY, 
    nome_prest varchar(100) NOT NULL,
    endereco varchar(100) NOT NULL, 
    complemento varchar(45), 
    bairro varchar(50) NOT NULL, 
    cidade varchar(60) NOT NULL, 
    estado varchar(2) NOT NULL, 
    email varchar(100) NOT NULL,
    telefone varchar(15),
    celular varchar(15),
    cep varchar(15) NOT NULL
) engine = INNODB;


CREATE TABLE orcamentos ( 
    id int AUTO_INCREMENT PRIMARY KEY, 
    data date NOT NULL,
    valor numeric(10,2) NOT NULL, 
    id_prestador int NOT NULL, 
    data_expiracao date NOT NULL,
    id_cliente int NOT NULL,
    id_servico int NOT NULL,
    observacao varchar(100)
) engine = INNODB;


CREATE TABLE servicos ( 
    id int AUTO_INCREMENT PRIMARY KEY, 
    servico varchar(50) NOT NULL,
    id_categoria int NOT NULL
) engine = INNODB;


CREATE TABLE categoria ( 
    id int AUTO_INCREMENT PRIMARY KEY, 
    categoria varchar(50) NOT NULL
) engine = INNODB;

CREATE TABLE prestadores_servicos ( 
    id_prestador int NOT NULL, 
    id_servico int NOT NULL,
    PRIMARY KEY (id_prestador, id_servico)
) engine = INNODB;


ALTER TABLE login_usuarios ADD CONSTRAINT fk_login_clientes FOREIGN KEY (id_cliente) REFERENCES clientes (id);

ALTER TABLE orcamentos ADD CONSTRAINT fk_orcamentos_prestador FOREIGN KEY (id_prestador) REFERENCES prestadores (id);

ALTER TABLE orcamentos ADD CONSTRAINT fk_orcamentos_cliente FOREIGN KEY (id_cliente) REFERENCES clientes (id);

ALTER TABLE orcamentos ADD CONSTRAINT fk_orcamentos_servicos FOREIGN KEY (id_servico) REFERENCES clientes (id);

ALTER TABLE servicos ADD CONSTRAINT fk_servicos_categoria FOREIGN KEY (id_categoria) REFERENCES categoria (id);

ALTER TABLE prestadores_servicos ADD CONSTRAINT fk_prestadores_servicos FOREIGN KEY (id_prestador) REFERENCES prestadores (id);

ALTER TABLE prestadores_servicos ADD CONSTRAINT fk_servicos_prestadores FOREIGN KEY (id_servico) REFERENCES servicos (id);
