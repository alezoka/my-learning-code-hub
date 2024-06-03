'''frutas = ('maça', 'laranja', 'banana',)
animes = tuple('Naruto')
moveis = (['tv', 'fogao', 'cama', 'mesa'])
pais = ('Brasil',)

print(frutas[0], frutas[1], frutas[2])
print(frutas[-1], frutas[-2], frutas[-3])'''

'''matriz = (
    (1, 2, 3),
    ('a', 'b', 'c'),
    ('x', 'y', 'z'),
)
print(matriz[0])
print(matriz[0][2])
print(matriz[1][0])
print(matriz[2][2])'''

"""tupla = ('maça', 'laranja', 'banana', 'uva', 'melancia',)

print(f'''
    {tupla[2:]}
    {tupla[:2]}
    {tupla[1:3]}
    {tupla[0:3:2]}
    {tupla[:]}
    {tupla[::]}
    {tupla[::-1]}
''')"""

'''lista = ['maça', 'laranja', 'banana', 'uva', 'melancia']
print(lista, end='\n\n')
lista[0] = 'morango'
lista[-1] = 'pessego'
print(lista)
'''

'''carros = ('gol', 'celta', 'palio')
for indice, carro in enumerate(carros):
    print(f'{indice}: {carro}')
'''

'''cores = ('vermelho', 'azul', 'verde', 'azul', 'verde', 'amarelo', 'verde',)

print(
    cores.index('vermelho'),
    cores.index('azul'),
    cores.index('verde'),
    cores.index('amarelo')
)

print(len(cores))'''

'''carros = ('gol')
print(isinstance(carros, tuple))'''

'''conjunto = set([1, 3, 4, 2, 2, 4, 3, 5, 6, 7, 8, 6, 5, 9, 10])
conjunto2 = set('abacaxi')
conjunto3 = set(('palio', 'gol', 'celta', 'palio', 'celta',))
conjunto4 = set("abacaxi")
conjunto5 = set(('palio', 'gol', 'celta', 'palio', 'celta',))
conjunto6 = {1, 2, 2, 3, 3, 4, 5, 5, 5}
conjunto8 = {'abacaxi'} #n funciona
conjunto8_1 = set('abacaxi')
conjunto9 = {('palio', 'gol', 'celta', 'palio', 'celta',)} #n funciona
conjunto9_1 = {'palio', 'gol', 'celta', 'palio', 'celta'}
conjunto10 = list(conjunto6)
carros = {'gol', 'celta', 'palio', 'gol'}

for index, i in enumerate(carros):
    print(f'{index}: {i}')'''


'''conjuntoB = {6, 7, 8, 9, 10}
conjuntoC = {0, 1}
uniao = conjuntoA.union(conjuntoB)
interseccao = conjuntoA.intersection(conjuntoB)
diferenca1 = conjuntoA.difference(conjuntoB)
diferenca2 = conjuntoB.difference(conjuntoA)
simetria = conjuntoA.symmetric_difference(conjuntoB)
subconjunto = conjuntoA.issubset(conjuntoB)
superconjunto = conjuntoB.issuperset(conjuntoA)
disjuncao1 = conjuntoA.isdisjoint(conjuntoB)
disjuncao2 = conjuntoB.isdisjoint(conjuntoA)
disjuncao3 = conjuntoA.isdisjoint(conjuntoC)
conjuntoA.add(100)
conjuntoA.add(200)
conjuntoA.add(100)
conjuntoB.clear()
copia = conjuntoC.copy()'''

conjuntoA = {1, 2, 3, 4, 5}
print(5 in conjuntoA)
print(6 in conjuntoA)


