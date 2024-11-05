

CREATE TABLE mouse (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    tipo VARCHAR(50),
    seriallll VARCHAR(50),
    frecuencia_mantenimiento VARCHAR(50),
    motivo VARCHAR(100),
    ultimo_mantenimiento DATE,
    fecha_instalacion DATE,
    estado VARCHAR(20),
    observaciones TEXT
);
