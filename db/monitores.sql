

CREATE TABLE Monitores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    seriall VARCHAR(50),
    tipo VARCHAR(50),
    fecha_instalacion DATE,
    estado VARCHAR(20)
);
