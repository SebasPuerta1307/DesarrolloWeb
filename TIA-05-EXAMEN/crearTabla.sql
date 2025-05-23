CREATE DATABASE red;

\c red;

CREATE TABLE estudiantes (
  id SERIAL PRIMARY KEY,
  numero_identificacion VARCHAR(50) UNIQUE NOT NULL,
  nombres_apellidos VARCHAR(100) NOT NULL,
  fecha_nacimiento DATE NOT NULL,
  genero VARCHAR(10) NOT NULL,
  telefono VARCHAR(20),
  correo_electronico VARCHAR(100) NOT NULL,
  fotografia VARCHAR(255),
  redes_sociales TEXT
);