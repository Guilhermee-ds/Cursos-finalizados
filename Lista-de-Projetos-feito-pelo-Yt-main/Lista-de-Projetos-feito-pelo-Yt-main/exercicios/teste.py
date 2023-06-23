numero1 = int(input("Digite um número: "))
numero2 = int(input(" outro númerDigiteo: "))
op = input("Digite qual operação (+, -, * ou /) deseja realizar: ")
if op == "+":
    resultado = numero1 + numero2
elif op == "-":
    resultado = numero1 - numero2
elif op == "*":
    resultado = numero1 * numero2
elif op == "/":
    resultado = numero1 / numero2
else:
    resultado = 0

print("\nO resultado é: ")

if (resultado // 1) % 2 == 0:
    print("Par")
else:
    print("Ímpar")

if resultado >= 0:
    print("Positivo")
else:
    print("Negativo")

if resultado % 1 == 0:
    print("Inteiro")
else:
    print("Decimal")
