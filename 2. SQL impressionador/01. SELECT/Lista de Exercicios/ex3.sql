--3.A) Selecionei os primeiros 100 clientes da tabela DimCustomer
SELECT 
	TOP(100) *
FROM
	DimCustomer;

--3.B) Selecionei os primeiros 20% de clientes da tabela DimCustomer
SELECT 
	TOP(20) PERCENT *
FROM
	DimCustomer

SELECT 
	COUNT(*)
FROM
	DimCustomer

--3.C) Selecionei os primeiros 100 clientes da tabela, mas filtrei para exibir apenas as colunas First Name, EmailAddress e BirthDate
SELECT 
	TOP(100) FirstName, 
	EmailAddress, 
	BirthDate
FROM
	DimCustomer;

--3.D) Alterei o nome das colunas que filtrei no exerc�cio anterior
SELECT 
	TOP(100) FirstName AS 'NOME',
	EmailAddress AS 'E-MAIL',
	BirthDate AS 'DATA DE NASCIMENTO'
FROM
	DimCustomer;