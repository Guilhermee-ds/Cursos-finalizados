select * from alunos
	where  cpf is not null; -- ver se o campo esta preenchido
	
	
select * from alunos
	where  cpf is  null; -- ver se o campo nao esta preenchido
	
	
select * from alunos
	where  idade between 10 and 100; -- pega os campos entre esses valores 10 até 100
	
	
select * from alunos
	where  ativo  is not true; -- ver se esta desativado 
	
select * from alunos
	where  ativo  is true; -- ver se esta ativado 
	
	
	
select * from alunos 
	where nome like '%G%'
	and idade is not null 
	or idade = 20;   --condição e e ou