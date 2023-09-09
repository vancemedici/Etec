while True:
    num1 = float(input("Insira o 1º número "))
    num2 = float(input("Insira o 2º número "))
    if num2 == 0:
        break
    print(f"A divisão de {num1:.2f} por {num2:.2f} é igual à {(num1 / num2):.2f}")
