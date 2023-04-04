CREATE DATABASE "NewOutfit"
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    CONNECTION LIMIT = -1
    IS_TEMPLATE = False;

CREATE SCHEMA newoutfit
    AUTHORIZATION postgres;

CREATE TABLE newoutfit.acceso
(
    email VARCHAR(125),
    clave VARCHAR(28),

    CONSTRAINT PK_acceso PRIMARY KEY (email),
    CONSTRAINT NN_email CHECK(email IS NOT NULL),
    CONSTRAINT NN_clave CHECK(clave IS NOT NULL)
);

CREATE TABLE newoutfit.rol
(
    id_rol SERIAL,
    nombre_rol VARCHAR(13),

    CONSTRAINT PK_rol PRIMARY KEY (id_rol),
    CONSTRAINT NN_nombre_rol CHECK (nombre_rol IS NOT NULL)
);

CREATE TABLE newoutfit.persona
(
    documento VARCHAR(10),
    nombres VARCHAR(60),
    apellidos VARCHAR(60),
    email VARCHAR(125),
    id_rol INT,

    CONSTRAINT PK_persona PRIMARY KEY (documento),
    CONSTRAINT NN_documento CHECK(documento IS NOT NULL),
    CONSTRAINT NN_nombres CHECK(nombres IS NOT NULL),
    CONSTRAINT NN_apelldos CHECK(apelldiso IS NOT NULL),
    CONSTRAINT FK_acceso_persona FOREIGN KEY (email) REFERENCES newoutfit.acceso(email),
    CONSTRAINT FK_rol_persona FOREIGN KEY (id_rol) REFERENCES newoutfit.rol(id_rol)
);

