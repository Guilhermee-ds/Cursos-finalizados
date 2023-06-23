a = int(input("Primeiro bimestre :"))
while a > 10:
    a = int(input("Você digitou errado , primeiro bimestre:"))
b = int(input("Segundo bimestre :"))
while b > 10:
    b = int(input("Você digitou errado , segundo bimestre:"))
c = int(input("Terceiro bimestre :"))
while c > 10:
    b = int(input("Voê digitou errado , terceiro bimestre:"))
d = int(input("Quarto bimestre :"))
while d > 10:
    int(input("Você digitou errado , terceiro bimestre"))
media = (a + b + c + d)/4
print('media: {}'.format(media))



#SEQUENCIA COM WHILE
# a=0
# while a<=10:
#     print(a)
#     a += 1





#ESSE PEDE PARA VOCE COLOCAR UM NUMERO E MOSTRA OS NUMEROS PIRMO APARTIR DO NUMERO QUE VOCE COLOCOU

# a= int (input('entre com um valor :'))
# for num in range(a+1):
#     div = 0
#     for x in range(1,num+1):
#         resto = num % x
#         # print(x , resto)
#         if resto == 0:
#          div += 1
#     if div ==2:
#        print(num)








#MOSTRA SE O NUMERO É PRIMO OU NÃO

# a = int(input('Digite um numero :'))
# div = 0
# for x in range(1, a+1):
#     resto = a % x
#     print(x , resto)
#     if resto == 0:
#      div += 1
# if div ==2:
#     print('esse numero é impar {}:'.format(a))
# else:
#     print('esse numero {} não é primo:'.format(a))






#CRIAR UMA SEQUENCIA

# for x in range(100+1):
#     print(x)