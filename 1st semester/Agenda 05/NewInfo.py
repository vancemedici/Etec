age = int(input("Você tem quantos anos? "))
if age < 60:
    print("Vá para a fila comum!")
elif 60 <= age <= 80:
    print("Vá para a fila prioritária!")
else:
    print("Vá para a fila 80+!")
