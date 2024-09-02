capacidade_atual, aumento_percentual = map(int, input().split())

nova_capacidade = capacidade_atual + (int(capacidade_atual *(aumento_percentual/100)))
print(nova_capacidade)