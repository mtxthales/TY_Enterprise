

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

create table usuario(
  codigo int(5) primary key auto_increment,
  nome varchar(50),
  perfil varchar(30)
);

create table reserva(
  codigo int(5) primary key auto_increment,
  usuario int(5), -- FK usuario
  recurso int(5), -- FK recurso
  data_solicitacao date,
  hora_inicio time,
  hora_fim time,
  solicitante varchar(50),
  data_devolucao date,
  hora_devolucao time
);

alter table recurso add constraint fk_tipo_recurso foreign key (tipo_recurso) references tipo_recurso(codigo);
alter table reserva add constraint fk_usuario foreign key (usuario) references usuario(codigo);
alter table reserva add constraint fk_recurso foreign key (recurso) references recurso(codigo);
