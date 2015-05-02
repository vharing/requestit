USE requestit;

ALTER TABLE `requestit`.`requests`
  ADD COLUMN `updated_at` DATETIME NULL, 
  ADD COLUMN `created_at` DATETIME NULL
