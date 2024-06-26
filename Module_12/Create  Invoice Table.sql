CREATE TABLE `invoices`(
`id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
`total` VARCHAR(20) NOT NULL,
`discount` VARCHAR(20) NOT NULL,
`vat` VARCHAR(20) NOT NULL,
`payable` VARCHAR(20) NOT NULL,
`user_id` BIGINT(20) UNSIGNED NOT NULL,
`customer_id` BIGINT(20) UNSIGNED NOT NULL,
`created_at` TIMESTAMP NOT NULL DEFAULT current_timestamp(),
`updated_at` TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
FOREIGN KEY(`user_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
FOREIGN KEY(`customer_id`) REFERENCES `customers`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE
)