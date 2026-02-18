CREATE TABLE `User Entity`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Username` VARCHAR(255) NOT NULL,
    `Phone numberpp` VARCHAR(255) NOT NULL,
    `Email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `verified at` DATETIME NULL,
    `OTP CODE` INT NOT NULL,
    `Role` VARCHAR(255) NOT NULL,
    `MFA_Enabled` BOOLEAN NOT NULL,
    `Last Login` TIMESTAMP NOT NULL,
    `Status` VARCHAR(255) NOT NULL
);
CREATE TABLE `Customer Profile`(
    `id` BIGINT NOT NULL,
    `Userid` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `First name` VARCHAR(255) NOT NULL,
    `Email` VARCHAR(255) NOT NULL,
    `Gender` ENUM('Male', 'Female') NOT NULL,
    `Age` BIGINT NOT NULL,
    `DOB` INT NOT NULL,
    `Occupation` VARCHAR(255) NOT NULL,
    `Address` VARCHAR(255) NOT NULL,
    `National ID` VARCHAR(255) NOT NULL,
    `Photo` BLOB NOT NULL,
    `RiskScore` TEXT NOT NULL
);
CREATE TABLE `Account Entity`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Customer ID` BIGINT NOT NULL,
    `Account Type` VARCHAR(255) NOT NULL,
    `Balance` DECIMAL(8, 2) NOT NULL,
    `Currency` VARCHAR(255) NOT NULL,
    `Date opened` VARCHAR(255) NOT NULL,
    `Account status` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `User Entity` ADD CONSTRAINT `user entity_role_foreign` FOREIGN KEY(`Role`) REFERENCES `Customer Profile`(`Occupation`);
ALTER TABLE
    `User Entity` ADD CONSTRAINT `user entity_username_foreign` FOREIGN KEY(`Username`) REFERENCES `Customer Profile`(`First name`);
ALTER TABLE
    `Customer Profile` ADD CONSTRAINT `customer profile_userid_foreign` FOREIGN KEY(`Userid`) REFERENCES `User Entity`(`id`);
ALTER TABLE
    `Account Entity` ADD CONSTRAINT `account entity_account type_foreign` FOREIGN KEY(`Account Type`) REFERENCES `Customer Profile`(`Occupation`);
ALTER TABLE
    `Customer Profile` ADD CONSTRAINT `customer profile_id_foreign` FOREIGN KEY(`id`) REFERENCES `Account Entity`(`Customer ID`);