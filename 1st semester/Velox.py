model = input('Qual carro foi alugado? ')
daily_price = float(input('Quanto custa a diária desse modelo? '))
days = int(input('Alugaram-o por quantos dias? '))
km = float(input('Foram percorridos quantos quilômetros? '))

print(f'O modelo de carro alugado foi {model}')
print(f'As despesas totalizam R$ {(days * daily_price + km * 0.79):.2f}')
