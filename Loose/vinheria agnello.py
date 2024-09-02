'''"Desenvolva um programa que simule uma loja de vinhos online.

O programa deve:

1. Cumprimentar o usuário e perguntar seu ano de nascimento.
2. Verificar se o usuário é maior de idade (18 anos ou mais). Se não for, imprimir uma mensagem de erro e encerrar o programa.
3. Caso seja maior de idade, perguntar ao usuário seu endereço.
4. Apresentar uma lista de três opções de vinhos com preços diferentes.
5. Perguntar ao usuário quantas opções de vinho ele deseja escolher (até 3 opções).
6. Perguntar ao usuário qual a primeira opção de vinho (1, 2 ou 3) e armazenar em uma variável. Se o usuário digitar algo diferente de 1, 2 ou 3, continuar perguntando até obter um valor válido.
7. Repetir o passo 6 para as demais opções de vinho escolhidas pelo usuário.
8. Calcular o valor total da compra, considerando um frete de 10 reais para compras abaixo de 250 reais
9. Imprimir o valor total da compra e o endereço de entrega.'''

print('Boas vindas à Vinheria Agnello. Desejamos que tenha uma experiência de compra incrível!')
ano = input('Antes de começarmos, informe o seu ano de nascimento: ')
while not ano.isnumeric():
    ano = input('Informe um ANO VÁLIDO!!! ->  ')
ano = int(ano)
idade = 2024 - ano
if idade >= 18:
    endereco = input('Informe seu endereço: ')
    frete = 10
    preco = 0
    resposta = input('Digite "s" para iniciar a compra ou "n" para ir ao carrinho: ')
    while resposta.isnumeric and resposta != 's' and resposta != 'S' and resposta != 'n' and resposta != 'N':
        resposta = input('Digite "s" ou "n".\nSomente LETRAS.\nNúmeros NÃO são permitidos!!! -> ')
    while resposta == 's' or resposta == 'S':
        escolha = input('Nossas opções de vinho são:\n- Vinho 1 (Digite 1)\n- Vinho 2 (Digite 2)\n- Vinho 3 (Digite 3)\n Valor do frete: R$10,00\n O frete será aplicado a compras abaixo do valor de R$250,00\n Por favor, escolha uma opção: ')
        while not escolha.isnumeric():
            escolha = input('Não é permitido digitar letras!!!  -> ')
        escolha = int(escolha)
        while escolha > 3:
            escolha = input('O número tem que ser 1,2 ou 3!!! -> ')
        if escolha == 1:
            preco += 100
            vinho = 'VINHO 1'
        elif escolha == 2:
            preco += 200
            vinho = 'VINHO 2'
        else:
            preco += 300
            vinho = 'VINHO 3'
        print(f'O vinho escolhido foi o {vinho}.')
        resposta = input(f'Sua compra atual está no valor de R${preco},00.\n-- Digite "s" caso queira comprar outro vinho\n-- Digite "n" caso queira ir para ir para o carrinho\n -> ')
        while resposta.isnumeric and resposta != 's' and resposta != 'S' and resposta != 'n' and resposta != 'N':
            resposta = input('Digite "s" ou "n".\nSomente LETRAS.\nNúmeros NÃO são permitidos!!! -> ')
    print(f'Você está no carrinho. ')
    if preco < 250:
        print(f'Sua compra deu R${preco},00 e está abaixo de R$250,00\nO frete de R$10,00 será aplicado agora.')
        preco += frete
        print(f'Valor total da compra incluindo frete: R${preco},00')
    print(f'Valor total da compra (FRETE GRÁTIS): R${preco},00\nA entrega será feita no endereço: {endereco}.\nA Vinheria Agnello agradece a preferência.\nVolte sempre!\n')
    print()
    print('COMPRA ENCERRADA!!!')
else:
    while True:
        print('Não é permitida a venda de bebidas alcóolicas para menores de 18 anos!')
        print('A operação de compra será ENCERRADA!')
        break