from aula7_Televisao import Televisao
from aula7_calculadora2 import Calculadora
from aula8_contador_palavras import contador_letras


if __name__ == '__main__':
    televisao = Televisao()
    print(televisao.ligada)
    televisao.power()
    print(televisao.ligada)
    calculadora = Calculadora(5 , 10)
    print(Calculadora.soma())
    lista = ['cachorro'], ['gato'] , ['elefante']
    print(contador_letras(lista))
