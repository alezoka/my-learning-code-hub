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