while True:
    license_plate = int(input("Informe o último dígito da placa de seu veículo "))
    if 0 <= license_plate <= 9:
        break
    else:
        print("Dígito inválido!")

match license_plate:
    case 1:
        print("Você pode pagar seu IPVA até 30/04")
    case 2:
        print("Você pode pagar seu IPVA até 31/05")
    case 3:
        print("Você pode pagar seu IPVA até 30/06")
    case 4:
        print("Você pode pagar seu IPVA até 31/07")
    case 5:
        print("Você pode pagar seu IPVA até 31/08")
    case 6:
        print("Você pode pagar seu IPVA até 30/09")
    case 7:
        print("Você pode pagar seu IPVA até 31/10")
    case 8:
        print("Você pode pagar seu IPVA até 30/11")
    case 9 | 0:
        print("Você pode pagar seu IPVA até 31/12")
