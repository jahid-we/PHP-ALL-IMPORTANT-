CREATE TABLE `customers`(
    `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `FirstName` VARCHAR(50) NOT NULL,
    `Email` VARCHAR(50) NOT NULL,
    `Mobile` VARCHAR(50) NOT NULL,
    `user_id` BIGINT(20) UNSIGNED NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT Current_timestamp(),
    `updated_at`TIMESTAMP NOT NULL DEFAULT Current_timestamp() on UPDATE Current_timestamp(),
    FOREIGN KEY(`user_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE
    ) 