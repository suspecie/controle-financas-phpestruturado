-- Criando banco de dados 
DROP DATABASE IF EXISTS controlefinancasdb;

CREATE DATABASE controlefinancasdb; 

USE controlefinancasdb;

-- Criando Table usuario
DROP TABLE IF EXISTS usuario;

CREATE TABLE usuario (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Inserindo usuario Admin
INSERT INTO usuario (`id`,`nome`,`login`,`senha`) VALUES(1,'Administrador','admin','admin');

-- Criando tabela tipo_receita_despesa
DROP TABLE IF EXISTS tipo_receita_despesa;

CREATE TABLE tipo_receita_despesa (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Inserindo tipos de receitas e despesas
INSERT INTO tipo_receita_despesa(`id`,`descricao`)VALUES(1,'Receita Fixa');
INSERT INTO tipo_receita_despesa(`id`,`descricao`)VALUES(2,'Receita Variável');
INSERT INTO tipo_receita_despesa(`id`,`descricao`)VALUES(3,'Despesa Fixa');
INSERT INTO tipo_receita_despesa(`id`,`descricao`)VALUES(4,'Despesa Variável');

-- Criando tabela despesa
DROP TABLE IF EXISTS despesa;

CREATE TABLE despesa (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  `id_tipo_receita_despesa` int(11) NOT NULL,
  `data` date NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_despesa_tiporeceitadespesa_idx` (`id_tipo_receita_despesa`),
  KEY `fk_despesa_usuario_idx` (`id_usuario`),
  CONSTRAINT `fk_despesa_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_despesa_tiporeceitadespesa` FOREIGN KEY (`id_tipo_receita_despesa`) REFERENCES `tipo_receita_despesa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Criando tabela receita
DROP TABLE IF EXISTS receita;

CREATE TABLE receita (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  `id_tipo_receita_despesa` int(11) NOT NULL,
  `data` date NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_receita_tiporeceitadespesa_idx` (`id_tipo_receita_despesa`),
  KEY `fk_receita_usuario_idx` (`id_usuario`),
  CONSTRAINT `fk_receita_tiporeceitadespesa` FOREIGN KEY (`id_tipo_receita_despesa`) REFERENCES `tipo_receita_despesa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_receita_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
