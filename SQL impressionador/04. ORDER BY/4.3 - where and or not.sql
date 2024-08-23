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
    TABLE_NAME = 'dimProduct'

-- Selecionando todas as linhas da tabela onde a Marca (Coluna) é 'Contoso' e a Cor (outra Coluna) é 'Silver'
SELECT
    *
FROM
    DimProduct
WHERE
    BrandName = 'Contoso' AND ColorName = 'Silver'

-- Selecionando todas as linhas da tabela onde a Cor é Azul ou a Cor é Prata
SELECT 
    ProductName
FROM
    DimProduct
WHERE
    ColorName = 'Blue' OR ColorName = 'Black'

-- Seleciona todas as linhas da tabela onde a Cor NÃO é Azul
SELECT
    ProductName
FROM
    DimProduct
WHERE
    NOT ColorName = 'Blue'

