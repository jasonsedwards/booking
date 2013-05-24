SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `BookingSystem` ;
CREATE SCHEMA IF NOT EXISTS `BookingSystem` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
SHOW WARNINGS;
USE `BookingSystem` ;

-- -----------------------------------------------------
-- Table `BookingSystem`.`Department`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BookingSystem`.`Department` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `BookingSystem`.`Department` (
  `Department_ID` INT NOT NULL ,
  `Department_Name` VARCHAR(80) NOT NULL ,
  PRIMARY KEY (`Department_ID`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `BookingSystem`.`Booking`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BookingSystem`.`Booking` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `BookingSystem`.`Booking` (
  `Booking_ID` INT NOT NULL ,
  `Name` VARCHAR(80) NOT NULL ,
  `Email` VARCHAR(80) NOT NULL ,
  `Date_From` DATE NOT NULL ,
  `Date_To` DATE NOT NULL ,
  `Department_Department_ID` INT NOT NULL ,
  PRIMARY KEY (`Booking_ID`) ,
  INDEX `fk_Booking_Department` (`Department_Department_ID` ASC) ,
  CONSTRAINT `fk_Booking_Department`
    FOREIGN KEY (`Department_Department_ID` )
    REFERENCES `BookingSystem`.`Department` (`Department_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `BookingSystem`.`Bookings`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BookingSystem`.`Bookings` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `BookingSystem`.`Bookings` (
  `Booking_ID` INT NOT NULL ,
  `Resource_ID` INT NOT NULL ,
  INDEX `Booking_ID` (`Booking_ID` ASC) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `BookingSystem`.`Resource`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BookingSystem`.`Resource` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `BookingSystem`.`Resource` (
  `Resource_ID` INT NOT NULL ,
  `Resource_Name` VARCHAR(80) NOT NULL ,
  `Quantity` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`Resource_ID`) )
ENGINE = InnoDB;

SHOW WARNINGS;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
