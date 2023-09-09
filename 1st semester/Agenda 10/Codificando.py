matrix = []
for i in range(10):
    a = []
    for j in range(10):
        a.append(int(input(f"Insira o número da {i + 1}ª linha e da {j + 1}ª coluna ")))
    matrix.append(a)

total_sum = 0
for i in range(10):
    for j in range(10):
        total_sum += matrix[i][j]
print("A soma de todos os elementos da matriz é igual à", total_sum)