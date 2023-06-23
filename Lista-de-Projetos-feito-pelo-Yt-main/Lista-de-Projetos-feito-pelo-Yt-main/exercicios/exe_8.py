"""
Faça um Programa que pergunte quanto você ganha por hora e o número de horas
trabalhadas no mês. Calcule e mostre o total do seu salário no referido mês.
"""
salario_hora = float (input('digite o quanto você ganha por hora  :'))
horas_trabalhadas = float(input('digite quantas horas voce trabalha por mês :'))
salario_total = (salario_hora * horas_trabalhadas)
print(f'Ganhando R${salario_hora:.2f} a hora , tendo que trabalhar '
      f'{horas_trabalhadas:.2f} horas por mês, seu salario este mês '
      f'é de R${salario_total:.2f}')