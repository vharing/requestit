
USE requestit;

ALTER TABLE `requestit`.`requests`
	CHANGE COLUMN `name` `first_name` VARCHAR(50) NOT NULL,
	ADD COLUMN `last_name` VARCHAR(255) NOT NULL,
	ADD COLUMN `student_id` INT(25) NULL,
	ADD COLUMN `email` VARCHAR(255) NOT NULL,
	ADD COLUMN `phone` VARCHAR(255) NULL,
	ADD COLUMN `special_instr` VARCHAR(255) NULL,
	ADD COLUMN `campus` VARCHAR(255) NULL;

