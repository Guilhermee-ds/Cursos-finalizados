
try:
    divisao = 10/0

except BaseException as ex:
    print("Erro  Desconhecido . Erro{}".format(ex))
else:
    print("Nenhum erro encotrado , continue.")