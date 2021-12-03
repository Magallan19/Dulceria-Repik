CREATE DATABASE Bd_Repik;

USE Bd_Repik;

CREATE TABLE Articulos(
    Id_Articulo INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Articulo VARCHAR(30),
    Precio DOUBLE,
    Marca VARCHAR(30),
    Imagen VARCHAR(30),
    Logo VARCHAR(30)
);

ALTER TABLE Articulos ADD Imagen VARCHAR(30);
ALTER TABLE Articulos ADD Logo VARCHAR(30);

CREATE TABLE Usuario(
    Id_Usuario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Usuario VARCHAR(20),
    Apellido VARCHAR(30),
    Telefono INT,
    Password INT,
    Correo VARCHAR(30)
);

-- CREATE TABLE ListadeProductos(
--     Id_Productos INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
--     Id_Usuario INT,
    
--     Lcompra INT,
--     Imagen VARCHAR(30),
--     Precio INT,
--     Cantidad INT,
--     SubTotal INT,
--     Sucursal VARCHAR(40),
--     FOREIGN KEY(Id_Usuario) REFERENCES Usuario(Id_Usuario)
-- )




INSERT INTO Articulos (Articulo,Precio,Marca,Imagen,Logo) VALUES ('Rellerindas',40,'Vero','17.png','11.png');
INSERT INTO Articulos (Articulo,Precio,Marca,Imagen) VALUES ('Vero Mango',35,'Vero','18.png');
INSERT INTO Articulos (Articulo,Precio,Marca,Imagen) VALUES ('Bomba Chile',45,'Vero','19.png');
INSERT INTO Articulos (Articulo,Precio,Marca,Imagen) VALUES ('Sandi Brocha',35,'Vero','20.png');
INSERT INTO Articulos (Articulo,Precio,Marca,Imagen) VALUES ('Pica Fresa',40,'Vero','21.png');
INSERT INTO Articulos (Articulo,Precio,Marca,Imagen) VALUES ('Vero Elote',30,'Vero','22.png');
INSERT INTO Articulos (Articulo,Precio,Marca,Imagen) VALUES ('Tarrito',45,'Vero','23.png');
INSERT INTO Articulos (Articulo,Precio,Marca,Imagen) VALUES ('Manita',35,'Vero','24.png');
INSERT INTO Articulos (Articulo,Precio,Marca,Imagen) VALUES ('Mix Clasico',35,'Vero','25.png');

INSERT INTO Articulos (Precio,Marca,Imagen,Logo) VALUES (65,'Lucas','26.png','12.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (85,'Lucas','27.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (55,'Lucas','28.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (70,'Lucas','29.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (70,'Lucas','30.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (65,'Lucas','31.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (60,'Lucas','32.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (75,'Lucas','33.jpg');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (50,'Lucas','34.png');

INSERT INTO Articulos (Precio,Marca,Imagen,Logo) VALUES (40,'Mana','35.png','13.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (35,'Mana','36.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (45,'Mana','37.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (35,'Mana','38.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (40,'Mana','39.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (30,'Mana','40.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (45,'Mana','41.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (35,'Mana','42.png');

INSERT INTO Articulos (Precio,Marca,Imagen,Logo) VALUES (40,'Rosa','43.png','14.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (35,'Rosa','44.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (45,'Rosa','45.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (35,'Rosa','46.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (40,'Rosa','47.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (30,'Rosa','48.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (45,'Rosa','49.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (35,'Rosa','50.png');

INSERT INTO Articulos (Precio,Marca,Imagen,Logo) VALUES (40,'Ricolino','51.png','15.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (65,'Ricolino','52.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (60,'Ricolino','53.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (70,'Ricolino','54.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (65,'Ricolino','55.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (30,'Ricolino','56.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (35,'Ricolino','57.png');

INSERT INTO Articulos (Precio,Marca,Imagen,Logo) VALUES (30,'Totis','58.png','16.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (30,'Totis','59.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (35,'Totis','60.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (25,'Totis','61.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (40,'Totis','62.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (20,'Totis','63.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (20,'Totis','64.png');
INSERT INTO Articulos (Precio,Marca,Imagen) VALUES (40,'Totis','65.png');




