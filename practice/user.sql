CREATE TABLE `user`(
`ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
`NAME` VARCHAR(20) NOT NULL,
`MOBILE` VARCHAR(20) NOT NULL,
`EMAIL` VARCHAR(50) NOT NULL,
`PASSWORD` VARCHAR(50) NOT NULL,
`OTP` VARCHAR(15) NOT NULL DEFAULT '0',
`CREATED_AT` TIMESTAMP NOT NULL DEFAULT current_timestamp(),
`UPDATED_AT` TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
)