-- Retorne todas as linhas da tabela DimProduct
/* quando você usa * você seleciona TODAS AS LINHAS de TODAS AS COLUNAS */
SELECT 
	*
FROM
	DimProduct;

-- Retorne todas as linhas da coluna ColorName da tabela DimProduct  
/* quando você usa o nome de uma COLUNA, sem o *, você seleciona TODAS AS LINHAS dessa coluna específica */
SELECT
	ColorName
FROM
	DimProduct


-- Retorne os valores distintos da coluna ColorName da tabela DimProduct
SELECT DISTINCT 
	ColorName
FROM
	DimProduct

-- Retorne todas as linhas da tabela dimEmployee
SELECT 
	*
FROM
	DimEmployee

-- Retorne os valores distintos da coluna DepartmentName da tabela dimEmployee
SELECT DISTINCT
	DepartmentName
FROM
	dimEmployee
