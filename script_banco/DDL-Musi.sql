CREATE TABLE login(
	id_login number(9),
	email varchar2(50) not null,
	senha varchar2(30) not null,
	nv_acesso varchar2(50) not null,
	CONSTRAINT pk_login PRIMARY KEY (id_login),
	CONSTRAINT uni_login UNIQUE (email)
);

CREATE TABLE alunos (
	id_aluno number(12) ,
	nome varchar2(50) not null,
	dt_nasc date not null,
	cpf varchar2(15) not null,
	cel number(13),
	CONSTRAINT pk_aluno PRIMARY KEY (id_aluno),
	CONSTRAINT uni_cpf_aluno UNIQUE (cpf)
);

CREATE TABLE materia(
	id_materia number(12),
	nome varchar2(50),
	tipo varchar2(50),
	CONSTRAINT pk_materia PRIMARY KEY (id_materia)
);

CREATE TABLE matricula(
	id_matricula number(12),
	id_materia number(12),
	id_aluno number(12),
	dt_hr_matricula date,
	CONSTRAINT pk_matricula PRIMARY KEY (id_matricula),
	CONSTRAINT fk_materia_matricula FOREIGN KEY (id_materia) REFERENCES materia(id_materia),
	CONSTRAINT fk_aluno_matricula FOREIGN KEY (id_aluno) REFERENCES alunos(id_aluno)
);

CREATE TABLE professores(
	id_prof number(12),
	nome varchar2(100) not null, 
	dt_nasc date not null,
	cpf varchar2(15) not null,
	curso varchar2(50),
	CONSTRAINT pk_professor PRIMARY KEY (id_prof),
	CONSTRAINT uni_cpf_professor UNIQUE (cpf)
);

CREATE TABLE aula(
	id_aula number(12),
	id_matricula number(12),
	id_prof number(12),
	dia_semana varchar2(10),
	dt_hr date,
	CONSTRAINT pk_aula PRIMARY KEY (id_aula),
	CONSTRAINT fk_matricula_aula FOREIGN KEY (id_matricula) REFERENCES matricula(id_matricula),
	CONSTRAINT fk_professor_aula FOREIGN KEY (id_prof) REFERENCES professores(id_prof)
);

--/my SQL---------------------------------------------------------------------=-
CREATE TABLE login(
	id_login integer auto_increment,
	email varchar(50) not null,
	senha varchar(30) not null,
	nv_acesso varchar(50) not null,
	CONSTRAINT pk_login PRIMARY KEY (id_login),
	CONSTRAINT uni_login UNIQUE (email)
);

CREATE TABLE alunos (
	id_aluno integer auto_increment ,
	nome varchar(50) not null,
	dt_nasc date not null,
	cpf varchar(15) not null,
	cel integer,
	CONSTRAINT pk_aluno PRIMARY KEY (id_aluno),
	CONSTRAINT uni_cpf_aluno UNIQUE (cpf)
);

CREATE TABLE materia(
	id_materia integer AUTO_INCREMENT,
	nome varchar(50),
	tipo varchar(50),
	CONSTRAINT pk_materia PRIMARY KEY (id_materia)
);

CREATE TABLE matricula(
	id_matricula integer auto_increment,
	id_materia integer,
	id_aluno integer,
	dt_hr_matricula date,
	CONSTRAINT pk_matricula PRIMARY KEY (id_matricula),
	CONSTRAINT fk_materia_matricula FOREIGN KEY (id_materia) REFERENCES materia(id_materia),
	CONSTRAINT fk_aluno_matricula FOREIGN KEY (id_aluno) REFERENCES alunos(id_aluno)
);

CREATE TABLE professores(
	id_prof integer auto_increment,
	nome varchar(100) not null, 
	dt_nasc date not null,
	cpf varchar(15) not null,
	curso varchar(50),
	CONSTRAINT pk_professor PRIMARY KEY (id_prof),
	CONSTRAINT uni_cpf_professor UNIQUE (cpf)
);

CREATE TABLE aula(
	id_aula integer auto_increment,
	id_matricula integer,
	id_prof integer,
	dia_semana varchar(10),
	dt_hr date,
	CONSTRAINT pk_aula PRIMARY KEY (id_aula),
	CONSTRAINT fk_matricula_aula FOREIGN KEY (id_matricula) REFERENCES matricula(id_matricula),
	CONSTRAINT fk_professor_aula FOREIGN KEY (id_prof) REFERENCES professores(id_prof)
);