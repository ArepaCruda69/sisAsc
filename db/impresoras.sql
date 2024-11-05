

CREATE TABLE resg_impresoras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codigo VARCHAR(50) NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    marca VARCHAR(50) NOT NULL,
    serial VARCHAR(50) NOT NULL,
    tipo VARCHAR(50),
    estilo VARCHAR(50),
    puerto VARCHAR(50),
    ip VARCHAR(15),
    ancho VARCHAR(50),
    consumibles VARCHAR(50) NOT NULL,
    estatus VARCHAR(50) NOT NULL,
    unidad VARCHAR(50),
    asignado_a VARCHAR(50) NOT NULL,
    pc VARCHAR(50),
    frecuencia_mantenimiento VARCHAR(50) NOT NULL,
    ultimo_mantenimiento DATE,
    observaciones TEXT
);
