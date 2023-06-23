contador_letras = lambda  lista: [len(x) for x in lista]

lista_animais = ['cachorro' , 'gato' , 'elefante']
print(contador_letras(lista_animais))

soma = lambda a, b: a + b
multiplicação = lambda  a, b: a * b
print(soma(5 , 20))
print(multiplicação(10 , 10))

calculadora = {
    'soma' : lambda  a , b: a + b,
    'multiplicação' : lambda  a , b: a * b,
    'subtração' : lambda  a , b: a - b,
    'divisão' : lambda  a , b: a / b,
}
print(type(calculadora))
soma = calculadora['soma']
multiplicação = calculadora['multiplicação']
print('A soma é : {}'.format(soma(10 , 10)))
print('A multiplicação é {}'.format(multiplicação(10 , 3)))