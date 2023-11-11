CREATE TABLE recetas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    tiempo_preparacion INT,
    ingredientes TEXT,
    instrucciones TEXT,
    imagen BLOB
);

INSERT INTO recetas (nombre, tiempo_preparacion, ingredientes, instrucciones, imagen)
VALUES ('Tofu Salteado con Vegetales', 25, 'Tofu, brócoli, zanahoria, pimiento, cebolla, salsa...', 'Saltea el tofu con las verduras y la salsa de soja...', NULL);

INSERT INTO recetas (nombre, tiempo_preparacion, ingredientes, instrucciones, imagen)
VALUES ('Hummus de Remolacha', 15, 'Garbanzos, remolacha, tahini, ajo, jugo de limón, ...', 'Mezcla todos los ingredientes en una licuadora o procesador de alimentos...', NULL);

INSERT INTO recetas (nombre, tiempo_preparacion, ingredientes, instrucciones, imagen)
VALUES ('Ratatouille al Horno', 50, 'Berenjena, calabacín, tomate, cebolla, pimiento, a...', 'Corta las verduras en rodajas y colócalas en capas...', NULL);

INSERT INTO recetas (nombre, tiempo_preparacion, ingredientes, instrucciones, imagen)
VALUES ('Fajitas de Vegetales', 30, 'Pimiento, cebolla, champiñones, calabacín, maíz, t...', 'Saltea las verduras con las especias en una sartén...', NULL);

INSERT INTO recetas (nombre, tiempo_preparacion, ingredientes, instrucciones, imagen)
VALUES ('Ensalada de Patata y Aguacate', 15, 'Lentejas cocidas, aguacate, tomate, cebolla roja, ...', 'Mezcla las lentejas con los ingredientes picados e...', NULL);

INSERT INTO recetas (nombre, tiempo_preparacion, ingredientes, instrucciones, imagen)
VALUES ('Ensalada de Quinoa y Aguacate', 20, 'Quinoa, aguacate, tomate, cebolla, limón, aceite d...', 'Cocina la quinoa y luego mezcla todos los ingredientie...', NULL);

INSERT INTO recetas (nombre, tiempo_preparacion, ingredientes, instrucciones, imagen)
VALUES ('Curry de Garbanzos', 40, 'Garbanzos, leche de coco, tomate, cebolla, ajo, je...', 'Saltea la cebolla, el ajo y el jengibre en una sartén...', NULL);

INSERT INTO recetas (nombre, tiempo_preparacion, ingredientes, instrucciones, imagen)
VALUES ('Sopa de Verduras', 30, 'Caldo de verduras, zanahoria, calabacín, patata, c...', 'Hierve el caldo de verduras y agrega todas las verdur...', NULL);

INSERT INTO recetas (nombre, tiempo_preparacion, ingredientes, instrucciones, imagen)
VALUES ('Tortilla de patata vegana', 30, 'Patatas, cebolla, harina de garbanzo, agua, sal, a...', '1. Pelar y cortar las patatas y la cebolla. 2. Mez...', NULL);

INSERT INTO recetas (nombre, tiempo_preparacion, ingredientes, instrucciones, imagen)
VALUES ('Tofu Salteado con Vegetales', 25, 'Tofu, brócoli, zanahoria, pimiento, cebolla, salsa...', 'Saltea el tofu con las verduras y la salsa de soja...', NULL);


CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(50) NOT NULL,
    contra VARCHAR(255) NOT NULL,
    tfno VARCHAR(15)
);

-- Insertar usuarios de ejemplo
INSERT INTO usuarios (usuario, contra, tfno) VALUES ('carlos', '1234', '123456789');
INSERT INTO usuarios (usuario, contra, tfno) VALUES ('miguel', '1234', '987654321');
INSERT INTO usuarios (usuario, contra, tfno) VALUES ('jorge', '1234', '192837465');
INSERT INTO usuarios (usuario, contra, tfno) VALUES ('Daniel', '1234', '123456789');