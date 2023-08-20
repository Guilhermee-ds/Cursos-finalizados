create table aluno (
	id SERIAL primary key,
	nome Varchar(255) not null
);

insert into aluno (nome) values ('Jhonatam');
insert into aluno (nome) values ('diogo');


select * from aluno;
	

create table aluno_curso (
	aluno_id integer,
	curso_id integer,
	primary key (aluno_id, curso_id)
	)
	
	
insert into aluno_curso (aluno_id, curso_id) values (1,1)


select * from aluno where id = 2;
select * from cursos where id = 1;


select * from aluno;
select * from cursos;


insert into cursos (id, nome) values (1, 'Python');


select * from cursos
UPDATE cursos
SET id = 2
WHERE nome ='Python';

select  * from aluno.nome,
		cursos.nome,
from aluno
full	join aluno_curso on aluno_curso.aluno_id = aluno.id
full join cursos on cursos.id = aluno_curso.cursos_id
	
	
	
insert into aluno_curso (aluno_id, curso_id) values (2,2);



insert into aluno (nome) values ('Miguel');


insert into cursos (id, nome) values (3,'CSS');




