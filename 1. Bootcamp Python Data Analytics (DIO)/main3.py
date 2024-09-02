'''texto = 'pYthon'
print(texto.upper())
print(texto.lower())
print(texto.title())'''

'''texto2 = '   python '
print(texto2.strip())
print(texto2.lstrip())
print(texto2.rstrip())'''

'''texto3 = 'Python'
print(texto3.center(11, '#'))
print('-'.join(texto3))
print('.'.join(texto3))
'''

'''nome = 'Alexandre'
idade = 26
profissao = 'Estudante'
linguagem = 'Python'
pessoa = {}
print('Olá, me chamo %s. Eu tenho %d anos de idade, no momento atuo como %s e estou matriculado no Bootcamp de %s.' % (nome, idade, profissao, linguagem))

print('Olá, me chamo {}. Eu tenho {} anos de idade, no momento atuo como {} e estou matriculado no Bootcamp de {}.' .format(nome, idade, profissao, linguagem))

print('Olá, me chamo {1}. Eu tenho {0} anos de idade, no momento atuo como {3} e estou matriculado no Bootcamp de {2}.' .format(idade, nome, linguagem, profissao))

print('Olá, me chamo {meu_nome}. Eu tenho {minha_idade} anos de idade, no momento atuo como {minha_profissao} e estou matriculado no Bootcamp de {lang_estudada}.' .format(meu_nome=nome, minha_idade=idade, minha_profissao = profissao, lang_estudada=linguagem))

print('Olá, me chamo {meu_nome}. Eu tenho {minha_idade} anos de idade, no momento atuo como {minha_profissao} e estou matriculado no Bootcamp de {lang_estudada}.' .format(**pessoa))

print(f'Olá, me chamo {nome}. Eu tenho {idade} anos de idade, no momento atuo como {profissao} e estou matriculado no Bootcamp de {linguagem')'''


'''PI = 3.14159
print(f'O valor de PI é {PI:.2f}')
print(f'O valor de PI é {PI:10.2f}')'''

'''pessoa = {'meu_nome': 'Alexandre', 'minha_idade': 26, 'minha_profissao': 'Estudante', 'lang_estudada': 'Python'}
print('Olá, me chamo {meu_nome}. Eu tenho {minha_idade} anos de idade, no momento atuo como {minha_profissao} e estou matriculado no Bootcamp de {lang_estudada}.' .format(**pessoa))'''

nome = 'Alexandre Assis do Nascimento'
print(nome[-19:-14])
print(nome[:8])
print(nome[10:])
print((nome[10:15]))
print((nome[0:10:2]))
print((nome[:]))
print((nome[::-1]))


