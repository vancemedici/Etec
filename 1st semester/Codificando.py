for i in range(10):
    product = input(f'Escreva o nome do {i+1}º produto ')
    price = float(input('Informe o preço desse produto ')) * 0.5
    print(f'Após um desconto de 50%, o produto {product} está custando R$ {price:.2f}')