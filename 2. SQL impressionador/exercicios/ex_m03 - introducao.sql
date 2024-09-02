-- EXERCÍCIOS 

--1.A) Existem 2.517 produtos cadastrados, logo não preciso reportar ao gestor
SELECT 
	ProductName
FROM
	DimProduct

--1.B) No mês passado, a empresa tinha um total de 19.500 clientes. Atualmente, consta com um total de 18.869 clientes
SELECT 
	FirstName
FROM
	DimCustomer

--2.A) Filtrei as colunas de CustomerKey, FirstName, BirthDate e EmailAddress
SELECT -- visão geral das colunas da tabela
	COLUMN_NAME
FROM
	INFORMATION_SCHEMA.COLUMNS
WHERE
	TABLE_NAME='DimCustomer'

SELECT
	CustomerKey,
	FirstName,
	BirthDate,
	EmailAddress
FROM
	DimCustomer;

--2.B) Renomeei as colunas CustomerKey, FirstName, BirthDate e EmailAddress e deixei elas em português
SELECT
	CustomerKey AS 'ID CLIENTE',
	FirstName AS 'NOME',
	BirthDate AS 'DATA DE NASCIMENTO',
	EmailAddress AS 'EMAIL'
FROM
	DimCustomer;

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

--3.D) Alterei o nome das colunas que filtrei no exercício anterior
SELECT 
	TOP(100) FirstName AS 'NOME',
	EmailAddress AS 'E-MAIL',
	BirthDate AS 'DATA DE NASCIMENTO'
FROM
	DimCustomer;

--4) Selecionei os Fabricantes da tabela DimProduct de forma individual
SELECT 
	COLUMN_NAME
FROM
	INFORMATION_SCHEMA.COLUMNS
WHERE
	TABLE_NAME = 'DimProduct';


SELECT 
	Manufacturer
FROM
	DimProduct;

SELECT 
	TOP(10) *
FROM
	DimProduct;

SELECT 
	DISTINCT Manufacturer
FROM
	DimProduct;

--5) Apenas 1 produto que não foi vendido
SELECT -- visão geral das colunas na tabela
	COLUMN_NAME
FROM
	INFORMATION_SCHEMA.COLUMNS
WHERE
	TABLE_NAME = 'FactSales';


SELECT
	DISTINCT ProductKey
FROM
	DimProduct;
/* imprimindo somente valores distintos para saber a quantidade total de produtos. 
TOTAL = 2.517 produtos*/

SELECT
	DISTINCT ProductKey
FROM
	FactSales;
/* imprimindo somente valores distintos para saber a quantidade total de VENDAS. 
TOTAL = 2.516 vendas, ou seja, temos 1 produto que não foi vendido*/
