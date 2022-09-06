CREATE SCHEMA locaminas;


CREATE TABLE `locaminas`.`cliente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `cnh` VARCHAR(11) NOT NULL,
  `telefone` VARCHAR(13) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC) VISIBLE);
  


SELECT * FROM locaminas.cliente;


INSERT INTO locaminas.cliente(nome,cpf,cnh,telefone,email) values('Vi','123.123.123-11','11111111111','35-9999-8888','victor@ufla');
INSERT INTO locaminas.cliente(nome,cpf,cnh,telefone,email) values('Vic','123.123.123-02','11111111111','35-9999-8888','victor@ufla');
INSERT INTO locaminas.cliente(nome,cpf,cnh,telefone,email) values('Vict','123.123.123-22','11111111111','35-9999-8888','victor@ufla');
INSERT INTO locaminas.cliente(nome,cpf,cnh,telefone,email) values('Victo','123.123.123-32','11111111111','35-9999-8888','victor@ufla');
INSERT INTO locaminas.cliente(nome,cpf,cnh,telefone,email) values('Victor','123.123.123-42','11111111111','35-9999-8888','victor@ufla');
INSERT INTO locaminas.cliente(nome,cpf,cnh,telefone,email) values('V','123.123.123-52','11111111111','35-9999-8888','victor@ufla');
INSERT INTO locaminas.cliente(nome,cpf,cnh,telefone,email) values('Test','123.123.123-62','11111111111','35-9999-8888','victor@ufla');
INSERT INTO locaminas.cliente(nome,cpf,cnh,telefone,email) values('Tes','123.123.123-72','11111111111','35-9999-8888','victor@ufla');
INSERT INTO locaminas.cliente(nome,cpf,cnh,telefone,email) values('Te','123.123.123-82','11111111111','35-9999-8888','victor@ufla');
INSERT INTO locaminas.cliente(nome,cpf,cnh,telefone,email) values('T','123.123.123-92','11111111111','35-9999-8888','victor@ufla');

SELECT * FROM locaminas.cliente;
