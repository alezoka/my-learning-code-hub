/*
- O LIKE é usado junto com WHERE para procurar determinado padrão em uma coluna
2 caracteres usados com LIKE WHERE: 
% e _

- O WHERE é um comando que vamos usar sempre que quisermos FILTRAR dados no SQL
*/

SELECT 
    COLUMN_NAME
FROM
    INFORMATION_SCHEMA.COLUMNS
WHERE
    TABLE_NAME = 'DimProduct'

SELECT DISTINCT
    BrandName
FROM 
    DimProduct

-- Selecionando valores que sejam exatamente iguais a um texto fornecido
SELECT 
    *
FROM
    DimProduct
WHERE
    BrandName = 'Fabrikam'



-- Selecionando somente valores que sejam MAIOR que uma determinada condição
SELECT 
    ProductName,
    UnitPrice
FROM
    DimProduct
WHERE
    UnitPrice >= 1000


-- Selecionando clientes que começa a PARTIR DE 'A'
SELECT
    FirstName
FROM 
    DimCustomer
WHERE
    FirstName LIKE 'a%'

-- Selecionando clientes que termina com 'A'
SELECT
    FirstName
FROM
    DimCustomer
WHERE
    FirstName LIKE '%a'

-- Selecionando clientes que tenha 'or' no nome
SELECT 
    FirstName
FROM
    DimCustomer
WHERE
    FirstName LIKE '%or%'

-- Selecionando clientes que tenha 'i' a partir do SEGUNDO CARACTERE
-- _ Representa um único caractere, podendo ser QUALQUER caractere
SELECT
    FirstName
FROM
    DimCustomer
WHERE
    FirstName LIKE '_i%'

-- Selecionando clientes que comece com 'i' e tenha NO MÍNIMO 2 caracteres
SELECT
    FirstName
FROM
    DimCustomer
WHERE
    FirstName LIKE 'i_%'

-- Selecionando clientes que comece com 'i' e tenha NO MÍNIMO 3 caracteres
SELECT
    FirstName
FROM
    DimCustomer
WHERE
    FirstName LIKE 'i__%'

-- Selecionando clientes que comece com 'a' e termine com 'o'
SELECT
    FirstName
FROM
    DimCustomer
WHERE
    FirstName LIKE 'a%o'

-- Selecionando produtos que tenham 'Black' no nome
SELECT
    ProductName
FROM
    DimProduct
WHERE
    ProductName LIKE '%Black%'

/*A diferença de fazer o filtro com LIKE e com = é que:
LIKE filtra somente produtos que CONTENHA o texto entre aspas
= Filtra exatamente os produtos que tenha como nome o exato texto em si, por isso que a query abaixo não retornou nada*/
SELECT 
    ProductName
FROM
    DimProduct
WHERE 
    ProductName = 'Black'

--Selecionando clientes que nasceram após uma determinada data
SELECT
    COLUMN_NAME
FROM
    INFORMATION_SCHEMA.COLUMNS
WHERE
    TABLE_NAME = 'DimCustomer'

SELECT 
    BirthDate
FROM
    DimCustomer
WHERE
    BirthDate >= '1970-12-31' 
ORDER BY
    BirthDate DESC
/*Pra usar ASC e DESC você tem que usar DENTRO do ORDER BY*/

-- já passei todo conteúdo acima pro remnote

--17-09-2024

-- O que vou escrever abaixo provavelmente vai ser a mesma coisa acima, então vou escrever só para praticar mesmo, pois já passei tudo pro remnote
-- Usando LIKE para filtrar valores que CONTÉM um determinado texto
SELECT
    *
FROM
    DimProduct
WHERE
    ProductName LIKE 'MP3 Player'
/*se você usar LIKE com aspas somente, vai ter o mesmo resultado de você usar o =
ou seja, você vai estar procurando valores que sejam exatamente iguais ao que está entre aspas. O certo seria: */

SELECT
    *
FROM
    DimProduct
WHERE
    ProductName LIKE '%MP3 Player%'
/*% nesse caso representa qualquer texto. 
% antes = qualquer texto que esteja antes do valor
% depois = qualquer texto que esteja depois do valor
por isso que usamos % antes e depois do valor entre aspas*/

-- Selecionando valores que contenham texto APÓS o valor da aspas
SELECT
    *
FROM
    DimProduct
WHERE
    ProductDescription LIKE 'Type%'
