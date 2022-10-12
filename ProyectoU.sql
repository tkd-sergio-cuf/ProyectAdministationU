create database if not exists ProyectoU;
#DROP TABLE Matriculas,Estudiantes;

use ProyectoU;

create table usuarios(
	id_usuario integer auto_increment primary key,
    username varchar(30) UNIQUE,
    contraseña varchar(250),
    cargo varchar(100),
    nombres varchar(100),
    apellidos varchar(100),
    correo varchar(100),
    programa varchar(150),
    fechaDeNacimiento date
);

create table matriculas(
	id_usuario integer,
	form_Entrevista bit,
    eps_vigente bit,
    autorizacion_padres bit,
    aceptacion_normas_condiciones bit,
    documento_identidad bit,
    icfes bit,
    diploma_bachiller bit,
    acta_grado_bachiller bit,
    inscripcion bit,
    foreign key (id_usuario) references usuarios(id_usuario)
);

INSERT INTO usuarios (id_usuario, username, contraseña, cargo, nombres, apellidos, correo, programa, fechaDeNacimiento) 
VALUES(NULL, "1000604609", "samc2003", "estudiante", "Sergio Andres", "Muñoz Cufiño", "k@gmail.com", "electronica","2003-07-31"),
(NULL, "sapo", "sapo", "estudiante", "Sapo", "Mas sapo", "sapo@gmail.com", "electronica","2004-07-31"),
(NULL, "pepito", "loco", "estudiante", "pepito", "loco", "loco@gmail.com", "electronica","2005-07-31");

select * FROM usuarios;

