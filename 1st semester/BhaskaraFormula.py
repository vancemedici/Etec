import math
a = float(input("Insira o valor de a "))
b = float(input("Insira o valor de b "))
c = float(input("Insira o valor de c "))

delta = math.pow(b, 2) - 4 * a * c
print(f"O valor de delta é {delta:.3f}")

if delta < 0:
    print("Não existem raízes reais")
elif delta == 0:
    x = -b / (2*a)
    print(f"Só há uma raiz real, cujo valor é {x:.3f}")
else:
    x1 = (-b + math.sqrt(delta)) / (2*a)
    x2 = (-b - math.sqrt(delta)) / (2*a)
    print(f"Os valores das raízes reais são iguais à {x1:.3f} e à {x2:.3f}")
