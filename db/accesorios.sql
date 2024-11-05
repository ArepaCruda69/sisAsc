

CREATE TABLE accesorios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    modelo_acc VARCHAR(50) NOT NULL,
    marca_cc VARCHAR(50) NOT NULL,
    serial_cc VARCHAR(50) NOT NULL,
    frecuencia_cc VARCHAR(50),
    tipo_cc VARCHAR(50),
    puerto VARCHAR(50),
    frecuencia_mantenimiento VARCHAR(50) NOT NULL,
    fecha_mantenimiento DATE,
    observaciones TEXT
);