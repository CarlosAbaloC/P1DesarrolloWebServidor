-- Para que el autoincrement no empiece por cero.
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- Inicia una transacción en la base de datos.
START TRANSACTION;
-- Establece la zona horaria
SET time_zone = "+00:00";


CREATE TABLE Restaurante (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    NAME VARCHAR(255),
    ADDRESS VARCHAR(255),
    TELF VARCHAR(20),
    NUMERIC_COLUMN INT,
    IMAGE_NAME VARCHAR(255),
    IMAGE_DATA BLOB
);

INSERT INTO Restaurante (NAME, ADDRESS, TELF, NUMERIC_COLUMN, IMAGE_NAME, IMAGE_DATA) 
VALUES 
('La Oveja Negra', ' C. de Buenavista, 42 Madrid', '665857363', 123, 'image1.jpg', NULL),
('B 13', 'C. de la Ballesta, 13 Madrid', 'No tiene ', 456, 'image2.jpg', NULL),
('SHI-SHANG', 'C. de Concepcion Arenal, 3', '915231220', 789, 'image3.jpg', NULL);

CREATE TABLE `autorizados` (
  `usuario` varchar(25) NOT NULL,
  `contrasenia` varchar(32) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `autorizados`
  ADD PRIMARY KEY (`usuario`);


ALTER TABLE `Restaurante` MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

COMMIT;