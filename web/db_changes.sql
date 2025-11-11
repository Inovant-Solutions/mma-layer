CREATE TABLE `banners`(
    `banner_id` INT NOT NULL AUTO_INCREMENT,
    `title_en` VARCHAR(255) NOT NULL,
    `title_ar` VARCHAR(255) NOT NULL,
    `image_en` VARCHAR(255) NOT NULL,
    `image_ar` VARCHAR(255) NOT NULL,
    `desc_en` TEXT NULL DEFAULT NULL,
    `desc_ar` TEXT NULL DEFAULT NULL,
    `is_active` TINYINT NULL DEFAULT 1,
    `is_deleted` TINYINT NULL DEFAULT 0,
    `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(), `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(), PRIMARY KEY(`banner_id`));

CREATE TABLE `services` ( `service_id` INT NOT NULL AUTO_INCREMENT, `title_en` VARCHAR(255) NOT NULL, `title_ar` VARCHAR(255) NOT NULL, `desc_en` TEXT NULL DEFAULT NULL, `desc_ar` TEXT NULL DEFAULT NULL, `image_en` VARCHAR(255) NOT NULL, `image_ar` VARCHAR(255) NOT NULL, `is_active` TINYINT NULL DEFAULT 1, `is_deleted` TINYINT NULL DEFAULT 0, `created_at` TIMESTAMP NULL DEFAULT current_timestamp(), `updated_at` TIMESTAMP NULL DEFAULT current_timestamp()
ON update current_timestamp(), PRIMARY KEY (`service_id`));




CREATE TABLE `teams` (
  `team_id` INT NOT NULL AUTO_INCREMENT,
  `name_en` VARCHAR(255) NOT NULL,
  `name_ar` VARCHAR(255) NOT NULL,
  `caption_en` VARCHAR(255) NULL DEFAULT NULL,
  `caption_ar` VARCHAR(255) NULL DEFAULT NULL,
  `avatar` VARCHAR(255) NOT NULL,
  `sort_order` INT NULL DEFAULT 0,
  `is_active` TINYINT NULL DEFAULT 1,
  `is_deleted` TINYINT NULL DEFAULT 0,
  `created_at` TIMESTAMP NULL DEFAULT current_timestamp(),
  `updated_at` TIMESTAMP NULL DEFAULT current_timestamp() on update current_timestamp(),
  PRIMARY KEY (`team_id`));
