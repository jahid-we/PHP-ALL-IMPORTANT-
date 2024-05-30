CREATE TABLE `categories`(
`id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(20) NOT NULL,
`user_id` BIGINT(20) UNSIGNED NOT NULL,
`created_at` TIMESTAMP NOT NULL DEFAULT current_timestamp(),
`updated_at` TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
FOREIGN KEY(`user_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE   
)