CREATE DATABASE IF NOT EXISTS sistema_proveedores CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE sistema_proveedores;

CREATE TABLE proveedores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    social INT(20) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    telefono INT(20) NOT NULL UNIQUE,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
