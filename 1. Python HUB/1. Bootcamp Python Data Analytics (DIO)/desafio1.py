
'''quantidade_passos = int(input())
contador = 0

if quantidade_passos == 0:
    print('Nenhum passo foi dado na floresta ainda.')
else:
    for passos in range(quantidade_passos):
        contador += 1
        print(f'Explorador: {contador} passos.')'''

'''quantidade_passos = int(input())

if quantidade_passos == 0:
    print('Nenhum passo foi dado na floresta.')
else:
    contador = 0
    for passos in range(quantidade_passos):
      contador += 1
      print(f'Explorador: {contador} passos.')'''


quantidade_passos = int(input('Informe a quantidade de passos: '))

if quantidade_passos == 0:
  print('Nenhum passo dado na floresta.')
else:
  contador = 0
  for passos in range(quantidade_passos):
    contador += 1
    if contador == 1:
        print(f'Explorador: {contador} passo')
    else:
        print(f'Explorador: {contador} passos')




