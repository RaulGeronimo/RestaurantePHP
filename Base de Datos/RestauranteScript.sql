CREATE DATABASE restaurante;

USE restaurante;

CREATE TABLE entradas(
    codigo INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(45),
    ingredientes VARCHAR(200),
    precio DOUBLE,
    imagen VARCHAR(200)
);

CREATE TABLE postres(
    codigo INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(45),
    ingredientes VARCHAR(200),
    precio DOUBLE,
    imagen VARCHAR(200)
);

CREATE TABLE bebidas(
    codigo INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(45),
    ingredientes VARCHAR(200),
    precio DOUBLE,
    imagen VARCHAR(200)
);

INSERT INTO entradas VALUES
(null, 'BISQUE DE HOMARD', 'Langosta, Aceite de Oliva, Chalota, Apio, Zanahoria, Tomate, Coñac, Vino Blanco, Arroz, Pescado, Pimienta, Ajo',  150.99, 'img01'),
(null, 'VOL-AU-VENT DUCHESSE', 'Pechuga de Pollo, Champiñones, Ravioles, Nata, Caldo de Pollo, Harina, Mantequilla, Huevo, Nuez, Sal, Pimienta',  220.50, 'img02'),
(null, 'ESCARGOTS À LÀ BOURGUIGNONNE', 'Mantequilla sin sal, Ajo, Perejil, Échalotes',  300.79, 'img03'),
(null, 'QUICHE LORRAINE', 'Masa, Panceta, Nata, Huevo, Mantequilla sin sal, Nuez, Pimienta Negra y sal',  200.55, 'img04'),
(null, 'BOUILLABAISSE', 'Pescado y Maricos, Cebolla, Hinojo, Tomillo, Perejil, Laurel, Tomate, Cascara de Naranja, Aceite de Oliva, Ajo, Azafrán, Pan',  250.99, 'img05'),
(null, 'SALADE NIÇOISE', 'Huevos, judías Verdes, Hojas Verdes Variadas, Atún, Tomates, Filete Anchoa, Aceituna, Alcaparras, Sal, Vinagre de Vino',  270.99, 'img06'),
(null, 'MELON AU PORTO', 'Un Melón Redondo, Vino Porto, Jamón', 189.99, 'img07'),
(null, 'HUÎTRES', 'Ostras, Hielo, Vinagre de Jerez, Échalotes, Aceite de Oliva, Sal, Pimienta', 100.55, 'img08'),
(null, 'TOMATES À LA PROVENÇALE', 'Tomates, Ajo, Azúcar, Aceite de Oliva, Sal, Perejil, Pimienta', 120.55, 'img09');

INSERT INTO postres VALUES
(null, 'MACARONS', 'Clara de Huevo, Almendra Molida, Azúcar y Azúcar Glasé', 70.99, 'post01'),
(null, 'FARZ BRETÓN', 'Harina de Trigo, Mantequilla, Leche, Huevos, Azúcar, Un Toque de Vainilla o Ron', 80.55, 'post02'),
(null, 'TARTE TATIN', 'Harina de Trigo, Manzana, Caramelo, Azúcar', 50.55, 'post03'),
(null, 'CANELÉS', 'Huevos, Leche, Azúcar, Mantequilla, Harina, Ron, Vainilla', 60.99, 'post04'),
(null, 'TARTE TROPÉZIENNE', 'Levadura, Harina, Leche, Huevos, Mantequilla blanda, Azúcar, Crema pastelera', 100.99, 'post05'),
(null, 'CLAFOUTIS', 'Mantequilla, Azúcar, Leche, Harina, Manzana o Cerezas', 110.55, 'post06'),
(null, 'FINANCIERS', 'Mantequilla, Harina de Repostería, Almendra en Polvo, Claras de Huevo, Almendras Enteras, Una Pizca de Sal, Azúcar Glasé', 130.55, 'post07'),
(null, 'PAIN dÉPICES', 'Todo Para Hacer Pan, Una Cantidad de Miel y Especias, Anís, Jengibre', 110.99, 'post08'),
(null, 'PROFITEROLES', 'Mantequilla, Huevo, Crema de Leche, Azúcar Blanquilla, Crema de Chocolate', 150.35, 'post09');

INSERT INTO bebidas VALUES
(null, 'PASTÍS', '5 Medidas De Agua, Alcohol', 130.55, 'beb01'),
(null, 'ARMAGNAC', 'Licor de Menta o Crema de Menta, Hielo', 180.99, 'beb02'),
(null, 'CALVADOS', 'Sidra (Jugo de Manzana Fermentado), Lunas del Juga de Manzana', 169.99, 'beb03'),
(null, 'TRIPLE SEC', 'Jugo de Naranja, Jugo de Piña, Ron Blanco, Ron Oscuro, Hielo', 99.99, 'beb04'),
(null, 'COGNAC JAPONES', 'Coñac, Almíbar de Almendras, Amargo de Angostura, Hielo', 179.55, 'beb05'),
(null, 'KIR', 'Vino blanco Seco y Licor de Casis', 150.55, 'beb06'),
(null, 'MARGARITA', 'Tequila Blanco, Licor de Naranja, Zumo de Lima, Sal y Sirope de Azúcar, Hielo', 110.99, 'beb07'),
(null, 'COCA-COLA 600 ml', 'Coca-Cola', 69.99, 'beb08'),
(null, 'JUGO DE NARANJA', 'Extracto de Naranja, Naranja en Rodajas, Sal', 79.99, 'beb09');

CREATE TABLE clientes(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(45),
    apellidos VARCHAR(45),
    telefono BIGINT,
    sucursal VARCHAR(45)
);

CREATE TABLE cuenta(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idCliente INT,
    nombrePlatillo VARCHAR(70),
    precio DOUBLE,
    cantidad INT,
    ingredientes VARCHAR(100),
    total DOUBLE,
    fechaReg DATETIME,
    FOREIGN KEY (idCliente) REFERENCES clientes (id) ON UPDATE CASCADE ON DELETE CASCADE
);