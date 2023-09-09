regions = ['centro-oeste', 'nordeste', 'norte', 'sudeste', 'sul']
cases = [0] * 5
pct_cases = [0.00] * 5
total_cases = 0

for i in range(5):
    cases[i] = int(input(f'Entre com a quantidade de casos no {regions[i]} brasileiro '))
    total_cases += cases[i]

for i in range(5):
    pct_cases[i] = cases[i] * 100 / total_cases
    print(f'A região {regions[i]} tem um total de {cases[i]} casos, o equivalente à {pct_cases[i]:.2f}% dos casos totais do Brasil')
