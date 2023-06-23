conjunto = { 1 , 2 , 3 , 4 , 5}
conjunto2 = {5 , 6 , 7 , 8}
conjunto_uniao = conjunto.union(conjunto2)
print('União : {}'.format(conjunto_uniao))
conjunto_intersecção = conjunto.intersection(conjunto2)
print('Intersecçao : {}'.format(conjunto2))
conjunto_diferencia1 = conjunto.difference(conjunto2)
conjunto_diferencia2 = conjunto2.difference(conjunto)
print('A difereencia entre 1 e 2 : {}'.format(conjunto_diferencia1))
print('A diferencia entre 2 e 1 : {}'.format(conjunto_diferencia2))
conjuto_diff_simetrica = conjunto.symmetric_difference(conjunto2)
print('Diferença simétrica : {}'.format(conjuto_diff_simetrica))
conjunto_a ={1 , 2 , 3 }
conjunto_b ={1 , 2 , 3 , 4 , 5}
conjunto_subset = conjunto_a.issubset(conjunto_b)
print(conjunto_subset)