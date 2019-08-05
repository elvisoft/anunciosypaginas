
Create database dbAnunciosyPaginas;

/* Codigo MySql    */

Create Table tblAnunciosPaginas
( 
	Id int primary key not null AUTO_INCREMENT,
	tipo varchar(50), 
	titulo varchar(56),
	precio varchar(50),
	urlweb varchar(200),
	descripcion text,
	rutaimg1 varchar(200),
	rutaimg2 varchar(200),
	rutaimg3 varchar(200),
	rutaimg4 varchar(200),
	categoria varchar(50),
	emailuser varchar(200),
	nombreuser varchar(80),
	destacado bit, /* 1 si  0 no */
	estadoauncio int, /* 1=activo, 2=enespera, 3=bloqueado */
	pais varchar(50),
	provincia varchar(45),
	fechacreated datetime
);

Create table tblUserAdmin
( 
	Id int primary key not null AUTO_INCREMENT,
	username varchar(50),
	emailuser varchar(200),
	password varchar(50),
	tipoacceso int,
	rutaimg2 varchar(200)
);

Create table tblCategorias
(
	Id int primary key not null AUTO_INCREMENT,
	categoria varchar(50),
	fechacreated datetime,
	descripcion varchar(50),
	estadocategoria int
);
