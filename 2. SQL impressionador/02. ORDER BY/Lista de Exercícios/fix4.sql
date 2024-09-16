-- 4. Selecione todas as linhas da tabela dimSalesTerritory onde o continente é a Europa mas o país NÃO é igual a Itália

SELECT
    COLUMN_NAME
FROM
    INFORMATION_SCHEMA.COLUMNS
WHERE
    TABLE_NAME = 'dimSalesTerritory'

SELECT DISTINCT 
    SalesTerritoryCountry,
    SalesTerritoryGroup
FROM 
    DimSalesTerritory

SELECT 
    *
FROM 
    dimSalesTerritory
WHERE 
    SalesTerritoryGroup = 'Europe'  AND NOT SalesTerritoryCountry = 'Italy'
