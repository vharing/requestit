USE requestit;

CREATE TABLE `requests`
(
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `date_requested` DATE,
  `name` VARCHAR(50),
  `status` VARCHAR(10),
  PRIMARY KEY (`id`)
);