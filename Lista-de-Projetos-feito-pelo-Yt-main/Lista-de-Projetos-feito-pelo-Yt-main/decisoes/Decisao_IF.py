nome=input ("Digite o nome : ")
idade=int(input("Digite a idade:"))
doença_contagiosa=input("suspeita de doenca contagiosa?").upper ()
if idade  >=65 :
    print("o paciente  " + nome + "  possui o atendimento prioritario!")
elif doença_contagiosa =="sim":
    print("o paciente"+ nome + "Tem o atendimento prioritario ")
else:
    print("o paciente  " + nome + " não possui o atendimento prioritario  e pode aguardar !")