CREATE DATABASE IF NOT EXISTS SimpleInventory;
USE SimpleInventory;

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name_product VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    unit_price FLOAT NOT NULL,
    total FLOAT NOT NULL
);
