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