create table aluno (
	id SERIAL,
	nome VARCHAR(255),
	cpf Char(11),
	observacao text,
	idade integer,
	dinheiro numeric(10,2),
	altura real,
	ativo boolean,
	data_nascimento DATE,
	hota_aula TIME,
	matriculado_em timestamp
);