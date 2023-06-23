class Televisao:
    def __init__(self):
        self.ligada = False
        self.canal = 5

    def power(self):
       if self.ligada:
        self.ligada = False
       else:
           self.ligada = True
    def aumenta_canal(self):
        self.canal += 1

    def diminuir_canal(self):
        self.canal -= 1

televisao = Televisao()
print('Televisão está ligada: {}'.format(televisao.ligada))
televisao.power()
print('Televisão está ligada: {}'.format(televisao.ligada))
televisao.power()
print('Televisão está ligada: {}'.format(televisao.ligada))
print('Canal {}'.format(televisao.canal))
televisao.power()
televisao.aumenta_canal()
televisao.aumenta_canal()
print('Canal {}'.format(televisao.canal))
televisao.diminuir_canal()
print('Canal {}'.format(televisao.canal))