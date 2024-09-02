'''def exibir_mensagem():
    print('Olá mundo!')

def exibir_mensagem_2(nome):
    print(f'Seja bem vindo {nome}!')

def exibir_mensagem_3(nome='Anônimo'):
    print(f'Seja bem vindo {nome}!')

print(exibir_mensagem_3())'''
'''
def calcular_total(numeros):
    return sum(numeros)

calculo = calcular_total([1,2,3])

def antecessor_sucessor(numero):
    antecessor = numero - 1
    sucessor = numero + 1

    return antecessor, sucessor

resultado = antecessor_sucessor(5)
print(resultado)

def func1():
    print('Olá mundo!')

def func2():
    print('Olá mundo!')
    return None'''

'''def salvar_carro(marca, modelo, ano, placa):
    # salva carro no banco de dados...
    print(f'Carro inserido com sucesso! {marca}/{modelo}/{ano}/{placa}')
#salvar_carro(**{'marca':'Fiat', 'modelo':'Palio', 'ano':1999, 'placa':'ABC-1234'})
#salvar_carro('Fiat', 'Palio', 1999, 'ABC-1234')
#salvar_carro(marca='Fiat', modelo='Palio', ano=1999, placa='ABC-1234')

def exibir_poema(data_extenso, *poema, **dados_poema):
    texto = "\n".join(poema)
    meta_dados = "\n".join([f"{chave.title()}: {valor}" for chave, valor in dados_poema.items()])
    mensagem = f"{data_extenso}\n\n{texto}\n\n{meta_dados}"
    print(mensagem)
#exibir_poema("Segunda-Feira, 22 de Abril de 2024.", "Zen of Python", "Beautiful is better than ugly", autor="Tim Peters", ano=1999)'''

'''def criar_carro(modelo, ano, placa, /, marca, motor, combustivel, *, empresa='Ausente', teste2='Ausente', teste3='Ausente'):
    print(modelo, ano, placa, marca, motor, combustivel)

#chamada VÁLIDA
criar_carro('Palio', 1999, 'ABC-1234', marca='Fiat', motor='1.0', combustivel='Gasolina')

#chamada INVÁLIDA
criar_carro(modelo='Palio', ano=1999, placa='ABC-1234', marca='Fiat', motor='1.0', combustivel='Gastolina')'''

'''def criar_carro2(modelo, ano, /, marca='Ausente', motor='Ausente', *, empresa='Ausente'):
    print(modelo, ano, marca, motor, empresa)
#criar_carro2('Pallio', 1999)

def criar_carro3(, modelo, ano, placa, marca, motor, combustivel):
    print(modelo, ano, placa, marca, motor, combustivel)
#criar_carro3(modelo='Palio', ano=1999, placa='ABC-1234', marca='Fiat', motor='1.0', combustivel='Gasolina')
#criar_carro3('Palio', 1999, 'ABC-1234', marca='Fiat', motor='1.0', combustivel='Gasolina')'''



'''def subtrair(a, b):
    return a - b

def test(a, b):
    return a*2 + b*3

def exibir_resultado(a, b, funcao):
    resultado = funcao(a, b)
    print(f'O resultado da operação é igual a {resultado}')

exibir_resultado(100, 10, test)
exibir_resultado(100, 10, subtrair)'''

'''def somar(a, b):
    return a + b

operacao = somar
print(operacao(1, 2))'''

salario = 2000

def salario_bonus(bonus, lista):
    #global salario
    salario_bonus = salario + bonus
    lista_aux = lista.copy()
    lista_aux.append(2)
    print(f'lista aux = {lista_aux}')
    return salario_bonus

lista = [1]
salario_com_bonus = salario_bonus(500, lista)
print(salario_com_bonus)
print(f'lista original = {lista}')

def salario_bonus(bonus, lista):
    #global salario
    salario_bonus = salario + bonus
    lista.append(2)
    return salario_bonus

lista = [1]
salario_com_bonus = salario_bonus(500, lista)
print(salario_com_bonus)
print(f'lista original = {lista}')




