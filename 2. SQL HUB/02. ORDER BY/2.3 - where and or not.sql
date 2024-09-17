/*
USOS DE AND, OR e NOT no SQL
AND mostra as linhas da tabela se todas as condições forem
atendidas.
OR mostra as linhas da tabela se pelo menos uma das condições
for atendida.
NOT simplesmente mostra o oposto do que for considerado no
filtro. Ex: mostra todas as linhas que NÃO forem da marca
“Contoso”.
*/

SELECT
    COLUMN_NAME
FROM
    INFORMATION_SCHEMA.COLUMNS
WHERE
    TABLE_NAME = 'DimEmployee'

-- Selecionando todos os nomes das tabelas de um banco de dados
SELECT TABLE_NAME
FROM INFORMATION_SCHEMA.TABLES
WHERE TABLE_TYPE = 'BASE TABLE'

-- / AND
-- Selecionando todas as linhas da tabela onde a Marca (Coluna) é 'Contoso' e a Cor (outra Coluna) é 'Silver'
SELECT
    *
FROM
    DimProduct
WHERE
    BrandName = 'Contoso' AND ColorName = 'Silver'

-- / OR 
-- Selecionando todas as linhas da tabela onde a Cor é Azul ou a Cor é Prata
SELECT 
    ProductName
FROM
    DimProduct
WHERE
    ColorName = 'Blue' OR ColorName = 'Black'

-- Fazendo um filtro com mais de 2 OR
SELECT
    ProductName
FROM
    DimProduct
WHERE 
    BrandName = 'Contoso' OR BrandName = 'Fabrikam' OR BrandName = 'Proseware'
ORDER BY
    BrandName

-- / NOT
-- Seleciona todas as linhas da tabela onde a Cor NÃO é Azul
SELECT
    ProductName
FROM
    DimProduct
WHERE
    NOT ColorName = 'Blue'


SELECT
    *
FROM
    DimEmployee
WHERE NOT DepartmentName = 'Marketing'

-- Vamos ver um exercício para praticar o uso de queries que combinam AND e OR
-- Nesse caso, vamos ter que passar a cláusula do OR entre parênteses, para garantir que o OR seja executado primeiro e evite conflitos com o AND 

-- Exemplo: Selecione todas as linhas da tabela dimProduct onde a cor do Produto pode ser igual a Preto OU Vermelho, MAS a marca deve ser obrigatoriamente igual a Fabrikam

SELECT 
    *
FROM 
    dimProduct
WHERE
    BrandName = 'Fabrikam' AND (ColorName = 'Black' OR ColorName = 'Red')

-- já passei tudo acima pro remnote