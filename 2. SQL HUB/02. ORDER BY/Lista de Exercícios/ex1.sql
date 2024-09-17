/*1. Você é o gerente da área de compras e precisa criar um relatório com as TOP 100 vendas, de acordo com a quantidade vendida. Você precisa fazer isso em 10min pois o diretor de compras solicitou essa informação para apresentar em uma reunião. Utilize seu conhecimento em SQL para buscar essas TOP 100 vendas, de acordo com o total
vendido (SalesAmount).*/

SELECT *
FROM DimProduct

SELECT
    TABLE_NAME
FROM
    INFORMATION_SCHEMA.TABLES
WHERE
    TABLE_TYPE = 'BASE TABLE'

SELECT 
    TOP (100) *
FROM FactSales

SELECT
    TOP (100) *
FROM
    FactSales
ORDER BY 
    SalesAmount DESC


