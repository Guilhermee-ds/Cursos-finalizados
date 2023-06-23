//Importar os arquivos.
import '../lib/contacorrente.dart';
import '../lib/cliente.dart';

void main(){
ContaCorrente contaDaAmanda = ContaCorrente(789,111111);
ContaCorrente contaDoTiago = ContaCorrente(456,0000000);
ContaCorrente contaDoGuilherme = ContaCorrente(123,12345678);

// Mostrar a quantidades de contas criadas.
print(ContaCorrente.totalDeContasCorrentes);


}


