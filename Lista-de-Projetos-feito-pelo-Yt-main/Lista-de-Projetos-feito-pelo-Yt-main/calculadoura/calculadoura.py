operation = input ('''
Digite a operação matemática que deseja concluir:
+ para adição
- para subtração
* para multiplicação
/para divisão
''')

number_1 = int(input("coloque o primeiro numero :"))
number_2 = int(input("coloque o segundo numero: "))


print('{} + {} = ' .format(number_1, number_2))
print(number_1 + number_2)


print('{} - {} = ' .format(number_1, number_2))
print(number_1-number_2 )


print('{} *{} = ' .format(number_1, number_2))
print(number_1*number_2)

print('{} /{}=' .format(number_1, number_2))
print(number_1/number_2)






