-- Criando banco de dados 
DROP DATABASE IF EXISTS controlefinancasdb;

CREATE DATABASE controlefinancasdb; 

USE controlefinancasdb;

-- Criando Table usuario
DROP TABLE IF EXISTS usuario;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Inserindo usuario Admin
INSERT INTO `controlefinancasdb`.`usuario`(`id`,`nome`,`login`,`senha`)VALUES('1', 'Administrador', 'admin', 'admin');


-- Criando tabela tipo_receita_despesa
DROP TABLE IF EXISTS tipo_receita_despesa;

CREATE TABLE tipo_receita_despesa (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Inserindo tipos de receitas e despesas
INSERT INTO `tipo_receita_despesa`(`id`,`descricao`)VALUES(1,'RECEITA FIXA');
INSERT INTO `tipo_receita_despesa`(`id`,`descricao`)VALUES(2,'RECEITA VARIAVEL');
INSERT INTO `tipo_receita_despesa`(`id`,`descricao`)VALUES(3,'DESPESA FIXA');
INSERT INTO `tipo_receita_despesa`(`id`,`descricao`)VALUES(4,'DESPESA VARIAVEL');

-- Criando tabela descricao
DROP TABLE IF EXISTS descricao;

CREATE TABLE `descricao` (
  `id_descricao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_descricao`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;



-- Criando tabela receita_despesa
DROP TABLE IF EXISTS receita_despesa;

CREATE TABLE `receita_despesa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_descricao` int(11) DEFAULT NULL,
  `id_tipo_receita_despesa` int(11) NOT NULL,
  `data` date NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_receitadespesa_tiporeceitadespesa_idx` (`id_tipo_receita_despesa`),
  KEY `fk_receitadespesa_usuario_idx` (`id_usuario`),
  KEY `fk_receitadespesa_descricao_idx` (`id_descricao`),
  CONSTRAINT `fk_receitadespesa_descricao` FOREIGN KEY (`id_descricao`) REFERENCES `descricao` (`id_descricao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_receitadespesa_tiporeceitadespesa` FOREIGN KEY (`id_tipo_receita_despesa`) REFERENCES `tipo_receita_despesa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_receitadespesa_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


