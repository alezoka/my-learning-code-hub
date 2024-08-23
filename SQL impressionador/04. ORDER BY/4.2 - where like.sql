SELECT 
    COLUMN_NAME
FROM
    INFORMATION_SCHEMA.COLUMNS
WHERE
    TABLE_NAME = 'DimProduct'

/*
O LIKE é usado junto com WHERE para procurar determinado padrão em uma coluna
2 caracteres usados com LIKE WHERE: 
% e _
*/

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


