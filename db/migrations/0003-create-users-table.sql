USE requestit;

CREATE TABLE `users` 
(
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user` VARCHAR(32),
  `password` VARCHAR(255),
  PRIMARY KEY (`id`)
);