/*
- O IN é uma alternativa reduzida ao OR
- Podemos usar o NOT em conjunto com IN para criar uma declaração oposta
*/

SELECT
    COLUMN_NAME
FROM
    INFORMATION_SCHEMA.COLUMNS
WHERE
    TABLE_NAME = 'DimProduct'

SELECT 
    DISTINCT ColorName
FROM 
    DimProduct

-- Selecionando todas as linhas de uma tabela de acordo com valores escolhidos de uma coluna específica
SELECT 
    * 
FROM 
    DimProduct
WHERE 
    ColorName IN ('Blue', 'Silver', 'Black')

-- Selecinando todas as linhas de uma tabela que NÃO possuam os valores escolhidos de uma coluna específica
SELECT 
    *
FROM
    DimProduct
WHERE 
    ColorName NOT IN ('Blue', 'Silver')
/*
Podemos usar o NOT IN para fazer queries do tipo "filtrar linhas em uma coluna cujos valores sejam EXCETO ..."
*/

--17-09-2024

-- Selecionando diferentes valores com vários OR
SELECT
    COLUMN_NAME
FROM
    INFORMATION_SCHEMA.COLUMNS
WHERE
    TABLE_NAME = 'DimProduct'

SELECT 
    DISTINCT ColorName
FROM
    DimProduct

SELECT 
    *
FROM
    DimProduct
WHERE
    ColorName = 'Purple' OR ColorName = 'Red' OR ColorName = 'White' OR ColorName = 'Pink' OR ColorName = 'Gold'


-- Selecionando diferentes valores com IN
/*essa forma com IN é uma alternativa ao invés de você usar vários OR na sua sequência lógica*/
-- Selecionando produtos de cores diferentes
SELECT
    *
FROM
    DimProduct
WHERE
    ColorName IN ('Purple', 'Red', 'White', 'Gold', 'Pink')

SELECT
    TABLE_NAME
FROM
    INFORMATION_SCHEMA.TABLES
WHERE
    TABLE_TYPE = 'BASE TABLE'

SELECT
    COLUMN_NAME
FROM
    INFORMATION_SCHEMA.COLUMNS
WHERE
    TABLE_NAME = 'DimEmployee'

SELECT 
    DISTINCT DepartmentName
FROM
    DimEmployee

-- Selecionando colaboradores de diferentes departamentos
SELECT
    *
FROM
    DimEmployee
WHERE
    DepartmentName IN ('Marketing', 'Production Control', 'Sakes')