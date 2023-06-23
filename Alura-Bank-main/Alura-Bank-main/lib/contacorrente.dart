import 'cliente.dart';

// Criando a classe da conta. 
class ContaCorrente {

// construtor
  ContaCorrente(int agencia,this.conta){
    if(agencia>0) _agencia = agencia;
    totalDeContasCorrentes++;
  }

  static int  totalDeContasCorrentes = 0;

  var titular = Cliente();
  int _agencia = 145;
  int get agencia =>_agencia;
  set agencia (int novaAgencia){if(novaAgencia >0)_agencia = novaAgencia;}
  
  int conta = 1;
  double _saldo = 100.0;
  double ChequeEspecial = -100.0;




// retornar o valor de uma variavel.
  get saldo  {
    return _saldo;
  }

// definir o valor de uma variavel.

set saldo ( novoSaldo) {
  if(novoSaldo >= ChequeEspecial){
    _saldo = novoSaldo;
  } else {
    print("Erro, tentei modificar o saldo");
  }
  _saldo = novoSaldo;
}

  bool verificarSaldo(double valor){
        if(this.saldo -valor < ChequeEspecial) {
        print("Sem saudo suficiente.");
        return false;

        }else{
            print("Movimentando $valor reais");
            return true;

        }
  }

   bool transferencia (double ValorDeTransferencia, ContaCorrente contaDestino){
    if(!verificarSaldo(ValorDeTransferencia)){
      return false;
    }else{
      this.saldo -= ValorDeTransferencia;
      contaDestino.deposito(ValorDeTransferencia);
      return true;

    }
  }


// funcionalidade saque.
  bool saque (double valorDoSaque){
  if(!verificarSaldo(valorDoSaque)) {
  print("Sem saldo suficiente.");
  return false;
 } else{
  this.saldo -= valorDoSaque;
  return true;
    }

  }
  // funcionalidade deposito.
  double deposito (double valorDoDeposito) {
    this.saldo += valorDoDeposito;
    return this.saldo;
  }
}

