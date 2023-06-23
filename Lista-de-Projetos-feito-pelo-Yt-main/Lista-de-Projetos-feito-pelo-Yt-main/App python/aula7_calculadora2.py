class Calculadora:
    def __init__(self):
       pass

    def soma(self , valor_a , valor_b):
        return valor_a + valor_b

    def subtraçao(self , valor_a , valor_b):
        return valor_a - valor_b

    def multiplicaçao(self , valor_a , valor_b):
        return valor_a * valor_b

    def divisao (self , valor_a , valor_b):
        return valor_a / valor_b

Calculadora = Calculadora()
print(Calculadora.soma(10 ,2))
print(Calculadora.subtraçao(10 , 10))
print(Calculadora.multiplicaçao(10,10))
print(Calculadora.divisao(100,10))
