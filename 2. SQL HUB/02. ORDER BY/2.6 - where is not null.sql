/*
- Podemos encontrar valores nulos em uma tabela. Para filtrar esses valores, podemos usar os comandos IS NULL ou IS NOT
NULL.
*/

SELECT
    COLUMN_NAME
FROM
    INFORMATION_SCHEMA.COLUMNS
WHERE
    TABLE_NAME = 'DimCustomer'

-- Selecionando linhas que contenham valores nulos em alguma coluna
SELECT 
    *
FROM
    DimCustomer
WHERE 
    firstName IS NULL

-- Selecionando linhas que contenham todos os valores EXCETO os que são nulos, em alguma coluna
SELECT
    *
FROM
    DimCustomer
WHERE
    firstName IS NOT NULL

-- Selecionando linhas cuja coluna específica possui valores nulos
SELECT
    *
FROM
    DimCustomer
WHERE
    CompanyName IS NULL

-- Selecionando linhas cuja coluna específica possui valores que NÃO SEJAM nulos
SELECT
    *
FROM
    DimCustomer
WHERE
    CompanyName IS NOT NULL