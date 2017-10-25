CREATE TABLE `regform`.`regform` (
  `Firstname` VARCHAR(45) NOT NULL,

  `Lastname` VARCHAR(45) NOT NULL,

  `Email` VARCHAR(45) NOT NULL,

  `Password` VARCHAR(45) NOT NULL,

  `Address` VARCHAR(45) NOT NULL,

  `Address2` VARCHAR(45) NOT NULL,

  `State` VARCHAR(45) NOT NULL,

  `Zipcode` INT(15) NOT NULL,

  `Phonenumber` VARCHAR(11) NOT NULL,

  PRIMARY KEY (`Firstname`));
