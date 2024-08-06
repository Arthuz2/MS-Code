show databases;

create database mscode;

drop database mscode;

use mscode;

create table if not exists alunos (
	id int not null unique,
    cpf varchar(11) unique,
    nome varchar(255),
    idade int,
    email varchar(255),
    
    primary key(id)
);

drop table alunos;
show tables;

create table if not exists turmas (
	nome varchar(255) not null,
    aluno_id int not null,
    foreign key (aluno_id) references alunos(id)
);

select 
t.nome as nome_turma,
a.nome as nome_aluno
from alunos as a
inner join turmas as t on a.id = t.aluno_id;

drop table turmas;

insert into alunos(id,cpf,nome,idade,email) values
	(1,"18975039706", "Arthur",16,"arthur@gmail.com"),
    (2, "18975039707", "Arthu2", 16, "arthur2@gmail.com"); 
    
    
insert into turmas(nome, aluno_id) values ("BD", 1), ("PHP", 2); 
    
    
insert into alunos(id,cpf,nome,idade,email) values
	(1,"18975039706", "Arthur",16,"arthur@gmail.com");

delete from alunos;

select * from alunos;

update alunos 
set idade=18
where cpf=18975039706;

alter table alunos
add column ativo tinyint not null;

alter table alunos
add column sobre_nome varchar(255) not null; 

truncate alunos;

