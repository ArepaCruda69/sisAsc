CREATE TABLE cpuss (

    idd INT AUTO_INCREMENT PRIMARY KEY,
    modelo_cpu VARCHAR(50) NOT NULL,
    marca_cpu VARCHAR(50) NOT NULL,
    serial_cpu VARCHAR(50) NOT NULL,
    procesador_cpu VARCHAR(50) NOT NULL,
    modelo_cpu VARCHAR(50) NOT NULL,
    serial_cpu_a VARCHAR(50) NOT NULL,
    frecuencia_cpu VARCHAR(50) NOT NULL,
    fuente_poder_cpu VARCHAR(50) NOT NULL,
    modelo_cpu_b VARCHAR(50) NOT NULL,
    serial_cpu_b VARCHAR(50) NOT NULL,
    ip_cpu VARCHAR(15),
    tarjeta_ram_cpu INT,
    marca_cpu_c VARCHAR(50) NOT NULL,
    serial_cpu_c VARCHAR(50) NOT NULL,
    tipo_cpu_c VARCHAR(50) NOT NULL,
    tamano_cpu_c VARCHAR(50) NOT NULL,
    asignado_cpu VARCHAR(50) NOT NULL,
    tamano_cpu VARCHAR(50) NOT NULL,
    fecha_mantenimiento_cpu DATE,
    observaciones TEXT
);