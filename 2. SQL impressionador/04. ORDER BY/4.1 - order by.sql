SELECT
	COLUMN_NAME
FROM
	INFORMATION_SCHEMA.COLUMNS
WHERE
	TABLE_NAME = 'DimStore'

-- Ordenando os valores a partir da coluna EmployeeCount, de forma crescente
SELECT
	TOP(100)
	StoreName, 
	EmployeeCount
FROM
	DimStore
ORDER BY
	EmployeeCount
/*Por padrão, o ORDER BY vai ordenar de forma ASCENDENTE*/

-- Ordenando os valores a partir da coluna EmployeeCount, de forma ASCENDENTE
SELECT
	TOP(100)
	StoreName, 
	EmployeeCount
FROM
	DimStore
ORDER BY
	EmployeeCount ASC

-- Ordenando os valores a partir da coluna EmployeeCount, de forma DECRESCENTE
SELECT
	TOP(100)
	StoreName, 
	EmployeeCount
FROM
	DimStore
ORDER BY
	EmployeeCount DESC

-- Ordenando os valores a partir da coluna de texto Store Name em ordem CRESCENTE (A-Z)
SELECT
	TOP(100)
	StoreName, 
	EmployeeCount
FROM
	DimStore
ORDER BY
	StoreName

-- Ordenando os valores a partir da coluna de texto Store Name em ordem DECRESCENTE (Z-A) 
SELECT 
	TOP(100)
	StoreName, 
	EmployeeCount
FROM
	DimStore
ORDER BY
	StoreName DESC

-- Ordenando os valores a partir de duas colunas diferentes, uma em ordem CRESCENTE e outra em ordem DECRESCENTE
SELECT
	TOP(100)
	ProductName,
	UnitCost,
	Weight
FROM
	DimProduct
ORDER BY
	UnitCost DESC, Weight ASC
/*Nesse caso, a coluna ProductName vai ser ordenada primeiro por UnitCost, e vai ter a coluna de Weight
que vai aparecer também, mas os valores vão tentar se ordenar de forma crescente se possível*/


-- Ordenando valores com base em 2 ou mais colunas
SELECT TOP(10) 
	UnitCost,
	ProductName,
	Weight
FROM
	DimProduct
ORDER BY 
	UnitCost DESC,
	Weight DESC
/*
- Essa forma de ordenação é útil para fazer DESEMPATES na ordenação, pois o valor da 2º coluna geralmente vai se diferenciar e isso gera o desempate caso os valores da 1º coluna sejam iguais
*/
