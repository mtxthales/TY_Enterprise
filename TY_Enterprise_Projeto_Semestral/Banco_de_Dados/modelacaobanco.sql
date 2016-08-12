

create database grsystem;

use grsystem;

create table tipo_recurso (
    codigo int(5) primary key auto_increment,
    descricao varchar(250)
);

create table recurso (
    codigo int(5) primary key auto_increment,
    tipo_recurso int(5),
    descricao varchar(250),
    patrimonio varchar(50),
    disponibilidade boolean
);

create table perfil (
    codigo int(2) primary key auto_increment,
    nome varchar(20)
);

create table usuario (
    login varchar(20) primary key,
    nome varchar(40),
    perfil int(2)
);

create table reserva (
    codigo int(5) primary key auto_increment,
    usuario varchar(20),
    recurso int(5),
    data_solicitacao date,
    hora_inicio time,
    hora_fim time,
    solicitante varchar(50),
    data_devolucao date,
    hora_devolucao time
);

create table reserva_auditoria (
    PK_auditoria int(5) primary key auto_increment,
    acao varchar(10) not null,
    usuario varchar(20) not null,
    recurso int(5) not null,
    modificadoem date
);


alter table recurso add constraint fk_tipo_recurso foreign key (tipo_recurso) references tipo_recurso(codigo);
alter table reserva add constraint fk_usuario foreign key (usuario) references usuario(login);
alter table reserva add constraint fk_recurso foreign key (recurso) references recurso(codigo);
alter table usuario add constraint fk_perfil foreign key (perfil) references perfil(codigo);

/*insert*/
insert into tipo_recurso(descricao)values('estrutura');
insert into tipo_recurso(descricao)values('material');

insert into recurso(tipo_recurso,descricao,patrimonio,disponibilidade)values(1,'auditorio principal','ifba-aud-01',true);
insert into recurso(tipo_recurso,descricao,patrimonio,disponibilidade)values(2,'data show - panasonic','ifba-dshow-01',true);
insert into recurso(tipo_recurso,descricao,patrimonio,disponibilidade)values(2,'caixa de som','ifba-cxsom-01',true);
insert into recurso(tipo_recurso,descricao,patrimonio,disponibilidade)values(1,'sala de audio-vídeo','ifba-av-01',true);
insert into recurso(tipo_recurso,descricao,patrimonio,disponibilidade)values(1,'Sala de Informática','ifba-inf-01',true);

insert into perfil(nome)values('Administrador');
insert into perfil(nome)values('Professor');

insert into usuario(login,nome,perfil)values('ygorpires','ygor pires',1);
insert into usuario(login,nome,perfil)values('mtxthales','mathues Thales',2);

insert into reserva(usuario,recurso,data_solicitacao,hora_inicio,hora_fim,solicitante,data_devolucao,hora_devolucao)values('ygorpires',4,'08/11/2016 00:00','08:00','10:00','ygorpires','08/11/2016','10:30');

/** trigger
  para armazenar na tabela reserva_auditoria informações de qualquer alteração feita na tabela reserva
**/
create trigger Tgr_auditoria before update
on reserva
for each row
	insert into reserva_auditoria set
	acao = 'update', usuario=old.usuario, recurso=old.recurso, modificadoem=now();

create trigger Tgr_auditoria_del before delete
on reserva
for each row
	insert into reserva_auditoria set
	acao = 'delete', usuario=old.usuario, recurso=old.recurso, modificadoem=now();

create trigger Tgr_auditoria_insert before insert
on reserva
for each row
	insert into reserva_auditoria set
	acao = 'insert', usuario=new.usuario, recurso=new.recurso, modificadoem=now();
/**------------------------------------------------------------------------------------**/


/*Procedure*/
delimiter $$
create procedure verificar_login(v_login varchar(20),v_nome varchar(40),v_perfil int(2))
begin
	if((select count(*) from usuario where login=v_login)=0)
		then begin
			insert into usuario(login,nome,perfil)values(v_login,v_nome,v_perfil);
			select 'Usuário inserido com sucesso!' as Msg;
		END;
	else
		select 'Usuário Logado com sucesso!' as Msg;
	end if;end$$

/**------------------------------------------------------------------------------------**/


/*Views*/
create view vw_reserva as select a.codigo,
					a.usuario,
					r.descricao as recurso,
					a.data_solicitacao,
					a.hora_inicio as inicio,
					a.hora_fim as fim,
					a.solicitante,
					a.data_devolucao,
					a.hora_devolucao
			from recurso as r, reserva as a
			where r.codigo=a.recurso;

create view vw_recurso as select w.codigo,
				      t.descricao as tipo,
				      w.descricao as descrição,
				      w.patrimonio,
				      w.disponibilidade
			from recurso as w, tipo_recurso as t
			where t.codigo=w.tipo_recurso;
/**------------------------------------------------------------------------------------**/
