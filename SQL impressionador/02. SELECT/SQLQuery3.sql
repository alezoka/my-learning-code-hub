-- Retorne todas as linhas da tabela DimProduct
SELECT * FROM DimProduct;

-- Retorne todas as linhas da coluna ColorName da tabela DimProduct  
SELECT 
	ColorName 
FROM
	DimProduct

-- Retorne os valores distintos da coluna ColorName da tabela DimProduct
SELECT 
	DISTINCT ColorName 
FROM 
	DimProduct

-- Retorne todas as linhas da tabela dimEmployee
SELECT * FROM DimEmployee;

-- Retorne os valores distintos da coluna DepartmentName da tabela dimEmployee
SELECT 
	DISTINCT DepartmentName 
FROM 
	DimEmployee