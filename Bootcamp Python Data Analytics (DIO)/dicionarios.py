'''dic1 = {'nome': 'Alexandre', 'idade': 26}
print(dic1['idade'])
dic2 = {"curso": "Eng. Software", "faculdade": "FIAP"}
dic3 = dict(idioma = 'Português', pais = 'Brasil')
dic1["Nacionalidade"] = 'Brasileiro'
dic1['idade'] = 18
print(dic1['nome'])
print(dic1['idade'])
print(dic1['Nacionalidade'])'''

#DICIONÁRIO ANINHADOS

'''contato = {
    'email2@gmail.com.br': {'nome': 'Pessoa2', 'dicionario': {"regiao": "1"}}
}

print(contato['email2@gmail.com.br']['nome'])
print(contato['email2@gmail.com.br']['nome']['regiao'])
'''


'''contato = {
    'email1@gmail.com.br': {'nome': 'Pessoa1', 'dicionario': {"regiao": "1"}},
    'email2@gmail.com.br': {'nome': 'Pessoa2', 'dicionario': {"regiao": "2"}},
    'email3@gmail.com.br': {'nome': 'Pessoa3', 'dicionario': {"regiao": "3"}},
    'email4@gmail.com.br': {'nome': 'Pessoa4', 'dicionario': {"regiao": "4"}},
    'email5@gmail.com.br': {'nome': 'Pessoa5', 'dicionario': {"regiao": "5"}}
}'''
'''#saber apenas as chaves que tem em um dicionário
for chave in contato:
    print(chave)'''

'''#saber quais chaves tem em um dicionario e exibir os valores também
for chave in contato:
    print(chave, contato[chave])'''

'''#saber a chave e o valor de uma só vez
for chave, valor in contato.items():
    print(chave, valor)'''

#MÉTODOS DA CLASSE DICT

contato = {
    'email2@gmail.com.br': {'Pessoa2': 'Homem', 'Nacionalidade': 'Brasileiro'},
    'email3@gmail.com.br': 'Pessoa3'
}

del contato
print(contato)
