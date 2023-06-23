operation = input('''
por favor, escolha uma das operações  a seguir
+ para adição
- para subtração
* para multiplicação 
/ para divisão
''')

number_1 = int(input('Entre com o primeiro número: '))
number_2 = int(input('Entre com o segundo número: '))

if operation == "+":
    print('{} + {} = '.format(number_1, number_2))
    print(number_1 + number_2)

elif operation == '-':
    print('{} - {} = '.format(number_1, number_2))
    print(number_1 - number_2)

elif operation == '*':
    print('{} * {} = '.format(number_1, number_2))
    print(number_1 * number_2)

elif operation == '/':
    print('{} / {} = '.format(number_1, number_2))
    print(number_1 / number_2)


else:
    print('selecione uma operações primeiro.')