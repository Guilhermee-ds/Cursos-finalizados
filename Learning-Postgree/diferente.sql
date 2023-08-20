Insert into alunos (nome) values ('Vinicius');
Insert into alunos (nome) values ('Nico');
Insert into alunos (nome) values ('João');
Insert into alunos (nome) values ('Diego');

select * from alunos
	where nome = 'Nico'; --pesquisar exatamente o nome
	
	
select * from alunos
	where nome <> 'Nico'; --Diferente deste nome
	

select * from alunos
	where nome != 'Nico'; --Diferente deste nome
	
	
	
select * from alunos
	where nome like  '_ico'; --Termina com essas letras

select * from alunos
	where nome  not like  '_ico'; --diferente com essa letras 
	
	
select * from alunos
	where nome like  '%D'; --Termina com essa letras
	
	
select * from alunos
	where nome like  'D%'; --começa com essa letras
	
select * from alunos
	where nome like  '%D%'; --Termina ou começa com essa letras