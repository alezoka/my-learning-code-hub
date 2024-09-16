-- 3. Selecione todas as linhas da tabela dimProduct com produtos da marca Litware OU da marca Fabrikam OU da cor Preta

SELECT
    COLUMN_NAME
FROM
    INFORMATION_SCHEMA.COLUMNS
WHERE
    TABLE_NAME = 'DimProduct'
ORDER BY
    COLUMN_NAME ASC

SELECT 
    *
FROM
    DimProduct
WHERE 
    BrandName = 'Litware' OR BrandName = 'Fabrikam' OR ColorName = 'Black'