CREATE TABLE `categories`(
`ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
`NAME` VARCHAR(20) NOT NULL,
`USER_ID` BIGINT(20)UNSIGNED NOT NULL,
`CREATED_AT` TIMESTAMP NOT NULL DEFAULT current_timestamp(),
`UPDATED_AT` TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
FOREIGN KEY(`USER_ID`) REFERENCES `user`(`ID`) ON DELETE RESTRICT ON UPDATE CASCADE
)