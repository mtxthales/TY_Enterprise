

create database db_semestral;

use db_semestral;

create table tipo_recurso(
  codigo int(5) primary key auto_increment,
  descricao varchar(250)
);

create table recurso(
  codigo int(5) primary key auto_increment,
  tipo_recurso int(5), -- FK tipo recurso
  descricao varchar(250),
  patrimonio varchar(50),
  disponibilidade boolean
);

create table perfil(
  codigo int(2) primary key auto_increment,
  nome varchar(20)
);

create table usuario(
  login varchar(20) primary key,
  nome varchar(40),
  perfil int(2) -- fk perfil
);

create table reserva(
  codigo int(5) primary key auto_increment,
  usuario varchar(20), -- FK usuario
  recurso int(5), -- FK recurso
  data_solicitacao date,
  hora_inicio time,
  hora_fim time,
  solicitante varchar(50),
  data_devolucao date,
  hora_devolucao time
);

alter table recurso add constraint fk_tipo_recurso foreign key (tipo_recurso) references tipo_recurso(codigo);
alter table reserva add constraint fk_usuario foreign key (usuario) references usuario(login);
alter table reserva add constraint fk_recurso foreign key (recurso) references recurso(codigo);
alter table usuario add constraint fk_perfil foreign key (perfil) references perfil(codigo);
