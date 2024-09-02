-- Comando AS: Renomeando colunas (aliasing)

-- Selecione as 3 colunas da tabela dimProduct: ProductName, BrandName e ColorName
-- Alterando nome das colunas
SELECT
	ProductName AS Produto,
	BrandName AS Marca,
	ColorName AS Cor
FROM
	dimProduct
/*
Só altera o nome das colunas da tabela GERADA pela query
Na tabela original, as colunas permanecerão com o nome original
Para alterar na tabela original, você vai ter que usar outros comandos...
Isso é válido para todas as queries onde usamos o comando SELECT
*/

/*
Ao renomear as colunas, você pode usar ASPAS SIMPLES ou NÃO, depende do caso:
Nome simples: pode usar aspas simples ou pode deixar sem -> Ex: AS 'Produto' ou AS Produto
Nome composto: DEVE sempre usar aspas -> Ex: AS 'Produto novo'
*/

