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





