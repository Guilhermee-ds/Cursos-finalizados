"""
Faça um Programa que peça as 4 notas bimestrais e mostre a média.
"""
a = float(input('Digite a nota do primeiro bimestre:'))
b = float(input('Digite a nota do segundo bimestre :'))
c = float(input('Digite a nota do terceiro bimestre: '))
d = float(input('Digite a nota do quarto bimestre :'))
media =( a + b + c + d)/4
print(
    f"A media das notas {a:.2f}, {b:.2f}, "
    f"{c:.2f} e {d:.2f} é {media:.2f}"
)