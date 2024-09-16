/*
- O BETWEEN seleciona valores em um intervalo. Estes valores podem ser números, textos ou datas.
- O BETWEEN é inclusivo: ou seja, o valor inicial e valor final também são incluídos no intervalo.
*/

SELECT
    COLUMN_NAME
FROM
    INFORMATION_SCHEMA.COLUMNS
WHERE
    TABLE_NAME = 'DimProduct'

SELECT
    UnitCost
FROM
    DimProduct

-- Selecionando valores que estejam ENTRE um determinado intervalo
SELECT TOP(1000)
    ProductName -- apenas essa coluna
FROM 
    DimProduct --indica de qual tabela você tá pegando os dados
WHERE 
    UnitCost BETWEEN 100 AND 500

-- Selecionando valores que estejam ENTRE um determinado intervalo e ordenando de acordo com uma coluna
SELECT TOP(1000)
    * -- todas as colunas
FROM 
    DimProduct --indica de qual tabela você tá pegando os dados
WHERE 
    UnitCost BETWEEN 100 AND 500
ORDER BY    
    ProductName -- ordena em ordem alfabética baseando-se nessa coluna

-- Selecionando valores que NÃO estejam ENTRE um determinado intervalo
SELECT TOP(100)
    *
FROM 
    DimProduct
WHERE
    UnitCost NOT BETWEEN 100 AND 1100

-- Descobrindo valor máximo de uma coluna
SELECT 
    MAX(UnitCost) AS Preco_Mais_Alto
FROM
    DimProduct

-- Descobrindo valor mínimo de uma coluna
SELECT
    MIN(UnitCost) AS Preco_Mais_Baixo
FROM
    DimProduct