'''frutas = ['banana', 'laranja', 'uva']

sem_frutas = []

letras = list('python')

numeros = list(range(10))

carro = ['Ferrari', 'F8', 42000000, 2020, 2900, 'São Paulo', True]

print(f"""
{frutas},
{sem_frutas},
{letras},
{numeros},
{carro}
"""
)

print(carro[0])
print(carro[5])
print(carro[-1])
print(carro[-7])'''

'''matriz = [
    [1, 'a', 2],
    ['b', 3, 4],
    [6, 5, 'c']
]
print(matriz, end='\n')

matriz[0]
matriz[0][0]
matriz[0][-1]
matriz[-1][-1]
print(matriz[0], matriz[0][0], matriz[0][-1], matriz[-1][-1], sep='\n' )'''

'''lista = list('python')
print(lista)

lista[2:]
print(lista[2:])
lista[:2]
print(lista[:2])
lista[1:3]
print(lista[1:3])
lista[0:3:2]
print(lista[0:3:2])
lista[::]
print(lista[::])
lista[::-1]
print(lista[::-1])'''

'''carros = ['Gol', 'Fusca', 'Sedan', 'Ferrari']

for index, carro in enumerate(carros):
    print(f'{index}:{carro}')'''

'''#forma tradicional
numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
pares = []
for numero in numeros:
    if numero % 2 == 0:
        pares.append(numero)
print(pares)

#list comprehension
numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
pares = [numero for numero in numeros if numero % 2 ==0]
print(pares)

animais = ['gato', 'GATO', 'cao', 'CAO', 'passaro', 'PASSARO', 'urso', 'URSO']
animais_maiusculos = [animal for animal in animais if animal.isupper()]
print(animais_maiusculos)'''

'''#forma tradicional
numeros = [2, 4, 5, 6, 7, 8, 9, 10]
quadrado = []
for numero in numeros:
    quadrado.append(numero ** 2)
print(quadrado)

#list comprehension
numeros = [2, 4, 5, 6, 7, 8, 9, 10]
quadrado = [numero ** 2 for numero in numeros]
print(quadrado)'''

'''lista = []
lista.append(1)
lista.append('gato')
lista.append(5.0)
lista.append(True)
lista.append(['azul', 'vermelho', 'amarelo'])
lista2 = lista.copy()

lista2[0] = 'aqui era o número 1!!'

print(lista)
print(lista2, end='\n\n')'''

#contando elementos dentro de uma lista
'''lista = ['azul', 'amarelo', 'vermelho', 'azul', 'azul', 'amarelo', 'verde']
print(lista.count('preto'))
print(lista.count('amarelo'))
print(lista.count('verde'))
print(lista.count('vermelho'))'''

'''#fazendo merge de 2 listas 1
lista1 = ['javascript', 'java', 'csharp']
lista2 = ['python, php, rust']
lista1.extend(lista2)
print(f'forma 1: {lista1}', end="\n\n")'''

#
lista1 = ["javascript", "java", "csharp"]
lista1.extend(["python", "php", "rust", "java", "csharp", "csharp"])
lista1 = sorted(lista1, key=lambda x: len(x))
print(lista1)
lista1 = sorted(lista1, key=lambda x: len(x), reverse=True)
print(lista1)
lista1 = sorted(lista1)
print(lista1)

lista1 = ["javascript", "java", "csharp"]
lista1.extend(["python", "php", "rust", "java", "csharp", "csharp"])
sorted(lista1, key=lambda x: len(x))
print(lista1)
sorted(lista1, key=lambda x: len(x), reverse=True)
print(lista1)
sorted(lista1)
print(lista1)





