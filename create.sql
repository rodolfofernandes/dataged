-- MySQL Script generated by MySQL Workbench
-- 12/12/16 08:48:06
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema dataXDoc
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema dataXDoc
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dataXDoc` DEFAULT CHARACTER SET utf8 ;
USE `dataXDoc` ;

-- -----------------------------------------------------
-- Table `dataXDoc`.`modeloDocumento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dataXDoc`.`modeloDocumento` ;

CREATE TABLE IF NOT EXISTS `dataXDoc`.`modeloDocumento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(150) NOT NULL,
  `descricao` VARCHAR(200) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idmodeloDocumento_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dataXDoc`.`tipoCampo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dataXDoc`.`tipoCampo` ;

CREATE TABLE IF NOT EXISTS `dataXDoc`.`tipoCampo` (
  `id` INT NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dataXDoc`.`campoDocumento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dataXDoc`.`campoDocumento` ;

CREATE TABLE IF NOT EXISTS `dataXDoc`.`campoDocumento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `modeloDocumento` INT NOT NULL,
  `nome` VARCHAR(65) NOT NULL,
  `tipo` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_campoDocumento_tipo_idx` (`tipo` ASC),
  INDEX `fk_campoDocumento_modelo_idx` (`modeloDocumento` ASC),
  CONSTRAINT `fk_campoDocumento_tipo`
    FOREIGN KEY (`tipo`)
    REFERENCES `dataXDoc`.`tipoCampo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_campoDocumento_modelo`
    FOREIGN KEY (`modeloDocumento`)
    REFERENCES `dataXDoc`.`modeloDocumento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dataXDoc`.`documento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dataXDoc`.`documento` ;

CREATE TABLE IF NOT EXISTS `dataXDoc`.`documento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(150) NOT NULL,
  `arquivo` LONGBLOB NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dataXDoc`.`metadados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dataXDoc`.`metadados` ;

CREATE TABLE IF NOT EXISTS `dataXDoc`.`metadados` (
  `idDocumento` INT NOT NULL,
  `campoDocumento` INT NOT NULL,
  `valor` VARCHAR(250) NULL,
  UNIQUE INDEX `idDocumento_UNIQUE` (`idDocumento` ASC),
  INDEX `fk_metadados_campo_idx` (`campoDocumento` ASC),
  CONSTRAINT `fk_metadados_documento`
    FOREIGN KEY (`idDocumento`)
    REFERENCES `dataXDoc`.`documento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_metadados_campo`
    FOREIGN KEY (`campoDocumento`)
    REFERENCES `dataXDoc`.`campoDocumento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `dataXDoc`.`tipoCampo`
-- -----------------------------------------------------
START TRANSACTION;
USE `dataXDoc`;
INSERT INTO `dataXDoc`.`tipoCampo` (`id`, `descricao`) VALUES (1, 'NUMERO');
INSERT INTO `dataXDoc`.`tipoCampo` (`id`, `descricao`) VALUES (2, 'TEXTO');
INSERT INTO `dataXDoc`.`tipoCampo` (`id`, `descricao`) VALUES (3, 'DATA');

COMMIT;

