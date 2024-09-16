--2.A) Filtrei as colunas de CustomerKey, FirstName, BirthDate e EmailAddress
SELECT -- vis�o geral das colunas da tabela
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

--2.B) Renomeei as colunas CustomerKey, FirstName, BirthDate e EmailAddress e deixei elas em portugu�s
SELECT
	CustomerKey AS 'ID CLIENTE',
	FirstName AS 'NOME',
	BirthDate AS 'DATA DE NASCIMENTO',
	EmailAddress AS 'EMAIL'
FROM
	DimCustomer;