CREATE TABLE facturas(id int AUTO_INCREMENT,
fecha date NOT NULL,
empresa Varchar(50) NOT NULL,
cliente Varchar(50) NOT NULL,
total int(10) NOT NULL,
sub int(10) NOT NULL,
iva int(10) NOT NULL,
tri Varchar(15) NOT NULL,
tri2 Varchar(15) NOT NULL,
tri3 Varchar(15) NOT NULL,
conce Varchar(400) NOT NULL,
conce2 Varchar(400) ,
conce3 Varchar(400) ,
conce4 Varchar(400) ,
conce5 Varchar(400) ,
PRIMARY KEY (id));