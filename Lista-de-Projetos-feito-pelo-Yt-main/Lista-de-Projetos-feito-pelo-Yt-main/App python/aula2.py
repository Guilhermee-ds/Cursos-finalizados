a = int(input('Digite um numero :'))
b = int(input('Digite o segundo numero :'))
print(type(a))
soma = a + b
subtracao = a - b
divisao = a / b
multiplicacao = a * b
resto = a % b
resultado = ('soma: {soma} \nsubtracao:{subtracao}'
      '\nMultiplicacao: {multiplicacao}'
      '\nDivisao: {divisao}'
      '\nResto: {resto} '.format(soma=soma,
                                subtracao=subtracao,
                                 multiplicacao=multiplicacao,
                                 divisao=divisao,
                                 resto=resto))
print(resultado)


# print(subtracao)
# print(divisao)
# print(multiplicacao)
# print(resto)