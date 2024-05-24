<?php 


$categories = "CREATE TABLE `demolte`.`categories` (
    `id` INT(20) NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(255) NOT NULL , 
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    PRIMARY KEY (`id`)) ENGINE = InnoDB";

$storecategory = "INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES (NULL, 'First Category', current_timestamp(), current_timestamp())";
// $selectecategories = "SELECT id, name FROM categories";
