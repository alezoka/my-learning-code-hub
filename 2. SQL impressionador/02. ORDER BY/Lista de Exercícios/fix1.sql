-- EXERCÍCIO DE FIXAÇÃO 1: AND, OR, NOT

-- 1. Selecione todas as linhas da tabela DimEmployee de funcionários do sexo feminino E do departamento de Finanças

SELECT 
    * 
FROM 
    DimEmployee
WHERE
    Gender = 'F' AND DepartmentName = 'Finance'
