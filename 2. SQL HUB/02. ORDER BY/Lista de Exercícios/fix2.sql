-- 2. Selecione todas as linhas da tabela dimProduct de produtos da marca Contoso da cor vermelha E que tenham um UnitPrice maior ou igual a $100

-- Selecionando as colunas de uma tabela e ordenando elas
SELECT
    COLUMN_NAME
FROM
    INFORMATION_SCHEMA.COLUMNS
WHERE
    TABLE_NAME = 'dimProduct'
ORDER BY 
    COLUMN_NAME ASC

SELECT TOP(10) * FROM dimProduct

SELECT
    *
FROM
    dimProduct
WHERE
    BrandName = 'Contoso' AND ColorName = 'Red' AND UnitPrice >= '100.00'
ORDER BY
    UnitPrice 
/*Pra você selecionar valores de preços no SQL, não deve usar vírgula, mas sim o formato americano, que é o ponto (.)
Abaixo tem algumas variações da query que também dá certo: */
-- V2
SELECT
    *
FROM
    dimProduct
WHERE
    BrandName = 'Contoso' AND ColorName = 'Red' AND UnitPrice >= '100'
ORDER BY
    UnitPrice 

-- V3
SELECT
    *
FROM
    dimProduct
WHERE
    BrandName = 'Contoso' AND ColorName = 'Red' AND UnitPrice >= 100
ORDER BY
    UnitPrice 

-- V4
SELECT
    *
FROM
    dimProduct
WHERE
    BrandName = 'Contoso' AND ColorName = 'Red' AND UnitPrice >= 100.00
ORDER BY
    UnitPrice 