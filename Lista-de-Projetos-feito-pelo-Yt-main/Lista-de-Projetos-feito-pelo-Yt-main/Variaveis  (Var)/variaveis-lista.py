

#inventaro
inventario=[]
resposta="s"
while resposta=="s":
    inventario.append((input("Equipamento :")))
    inventario.append(float(input("Valor :")))
    inventario.append(int(input("Numero serial :")))
    inventario.append(input("Departamento :"))
    resposta=input("Digite\"s\" para continuar:").upper()
for elemento in inventario:
 print(elemento)
