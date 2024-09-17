--5) Apenas 1 produto que n�o foi vendido
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
TOTAL = 2.516 vendas, ou seja, temos 1 produto que n�o foi vendido*/