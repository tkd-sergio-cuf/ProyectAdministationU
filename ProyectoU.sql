create database if not exists ProyectoU;

use ProyectoU;

create table Estudiantes(
	id_estudiante integer auto_increment primary key,
    cedula varchar(10) UNIQUE,
    contraseña varchar(100),
    nombres varchar(100),
    apellidos varchar(100),
    correo varchar(100),
    programa varchar(150),
    fechaDeNacimiento date
);

create table Matriculas(
	id_estudiante integer,
	form_Entrevista bit,
    eps_vigente bit,
    autorizacion_padres bit,
    aceptacion_normas_condiciones bit,
    documento_identidad bit,
    icfes bit,
    diploma_bachiller bit,
    acta_grado_bachiller bit,
    inscripcion bit,
    foreign key (id_estudiante) references Estudiantes(id_estudiante)
);