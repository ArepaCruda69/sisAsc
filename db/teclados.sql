
CREATE TABLE teclados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    serialll VARCHAR(50),
    tipo VARCHAR(50),
    frecuencia_mantenimiento VARCHAR(50),
    motivo VARCHAR(100),
    fecha_instalacion DATE,
    observaciones TEXT
);
