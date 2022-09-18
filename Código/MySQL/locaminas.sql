CREATE SCHEMA locaminas;

/* Tabela de funcionario */
CREATE TABLE `locaminas`.`funcionario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `usuario_UNIQUE` (`usuario` ASC) VISIBLE);
  

/* Tabela de clientes */
CREATE TABLE `locaminas`.`cliente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `cnh` VARCHAR(11) NOT NULL,
  `telefone` VARCHAR(12) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC) VISIBLE);
  
  CREATE TABLE `locaminas`.`clienteDados` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `cnh` VARCHAR(11) NOT NULL,
  `telefone` VARCHAR(12) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`)
);
  
/* Tabela de carros */
CREATE TABLE `locaminas`.`carro` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nomeVeiculo` VARCHAR(20) NOT NULL,
  `placa` VARCHAR(8) NOT NULL,
  `combustivel` VARCHAR(10) NOT NULL,
  `cor` VARCHAR(15) NOT NULL,
  `ano` INT NOT NULL,
  `valor` FLOAT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `placa_UNIQUE` (`placa` ASC) VISIBLE);
  
  CREATE TABLE `locaminas`.`carroDados` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nomeVeiculo` VARCHAR(20) NOT NULL,
  `placa` VARCHAR(8) NOT NULL,
  `combustivel` VARCHAR(10) NOT NULL,
  `cor` VARCHAR(15) NOT NULL,
  `ano` INT NOT NULL,
  `valor` FLOAT NOT NULL,
  PRIMARY KEY (`id`)
);

/* Tabela de alugueis */
CREATE TABLE `locaminas`.`aluguel` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idCarro` INT NOT NULL,
  `idCliente` INT NOT NULL,
  `prazo` date NOT NULL,
  `alugado` boolean NOT NULL,
  PRIMARY KEY (`id`, `idCarro`, `idCliente`));
  
  CREATE TABLE `locaminas`.`aluguelDados` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idCarro` INT NOT NULL,
  `idCliente` INT NOT NULL,
  `prazo` date NOT NULL,
  `alugado` boolean NOT NULL,
  PRIMARY KEY (`id`, `idCarro`, `idCliente`));
  

INSERT INTO locaminas.funcionario(usuario, senha) values ('victor@ufla', 'teste123');

SELECT * FROM locaminas.funcionario;
SELECT * FROM locaminas.cliente;
SELECT * FROM locaminas.clienteDados;
SELECT * FROM locaminas.carro;
SELECT * FROM locaminas.carroDados;
SELECT * FROM locaminas.aluguel;
SELECT * FROM locaminas.aluguelDados;
