USE requestit;

CREATE TABLE `materials`
(
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `author` VARCHAR(255) NOT NULL,
  `call_number` VARCHAR(12) NULL DEFAULT NULL,
  `status` VARCHAR(10) NULL DEFAULT NULL,
  `request_id` INT(11) NOT NULL,
  `updated_at` DATETIME NULL, 
  `created_at` DATETIME NULL,
  PRIMARY KEY (`id`)
);
