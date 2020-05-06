-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pitds` DEFAULT CHARACTER SET utf8 ;
USE `pitds` ;

-- -----------------------------------------------------
-- Table `mydb`.`Usuario`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `pitds`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(45) NULL,
  `senha` VARBINARY(20) NULL,
  `email` VARCHAR(45) NULL,
  `nome` VARCHAR(45) NULL,
  `escola` VARCHAR(45) NULL,
  `professor` INT NULL DEFAULT 0,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pitds`.`Administrador` (
  `idAdministrador` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(45) NULL,
  `senha` VARBINARY(20) NULL,
  `email` VARCHAR(45) NULL,
  PRIMARY KEY (`idAdministrador`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Sessao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pitds`.`Sessao` (
  `idSessao` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `imagem` VARCHAR(100) NULL,
  `codigoDeAcesso` VARCHAR(45) NULL,
  `dataDeEncerramento` DATETIME NULL,
  `Usuario_idUsuario` INT NOT NULL,
  PRIMARY KEY (`idSessao`),
  INDEX `fk_Sessao_Usuario1_idx` (`Usuario_idUsuario`),
  CONSTRAINT `fk_Sessao_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `mydb`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Personagem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pitds`.`Personagem` (
  `idPersonagem` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `descricao` VARCHAR(200) NULL,
  `imagem` VARCHAR(45) NULL,
  `Sessao_idSessao` INT NOT NULL,
  PRIMARY KEY (`idPersonagem`, `Sessao_idSessao`),
  INDEX `fk_Personagem_Sessao1_idx` (`Sessao_idSessao` ASC),
  CONSTRAINT `fk_Personagem_Sessao1`
    FOREIGN KEY (`Sessao_idSessao`)
    REFERENCES `mydb`.`Sessao` (`idSessao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`PersonagemExclusivo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pitds`.`PersonagemExclusivo` (
  `idPersonagemExclusivo` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `descricao` VARCHAR(200) NULL,
  `imagem` VARCHAR(45) NULL,
  `codigo` VARCHAR(45) NULL,
  `Sessao_idSessao` INT NOT NULL,
  PRIMARY KEY (`idPersonagemExclusivo`, `Sessao_idSessao`),
  INDEX `fk_PersonagemExclusivo_Sessao1_idx` (`Sessao_idSessao` ASC),
  CONSTRAINT `fk_PersonagemExclusivo_Sessao1`
    FOREIGN KEY (`Sessao_idSessao`)
    REFERENCES `mydb`.`Sessao` (`idSessao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Postagem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pitds`.`Postagem` (
  `idPostagem` INT NOT NULL AUTO_INCREMENT,
  `mensagem` VARCHAR(280) NULL,
  `reacao` VARCHAR(45) NULL,
  
  PRIMARY KEY (`idPostagem`))
 
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


insert into Usuario(usuario, senha, email, nome, escola)
values("Gabriel", "123", "gabriel@ifsc.com", "Gabriel", "Gallotti");

insert into Usuario(usuario, senha, email, nome, escola)
values("Gabriel", "123", "biel@ifsc.com", "Gabriel", "Gallotti");

/*select * from professores;*/

insert into Administrador(idAdministrador,usuario,senha,email)
values("1", "Gabriel", "123", "bieladm@email.com");

insert into Administrador(idAdministrador,usuario,senha,email)
values("2", "Cleber", "12345678", "biel@ifsc.com");

select * from Administrador;

select * from Usuario;

select * from Postagem;



