void main (){
ContaCorrente contadoGabriel = ContaCorrente();
contadoGabriel.titular = "Gabriel";
contadoGabriel.agencia = 123;
contadoGabriel.conta = 1;


print("Titular: ${contadoGabriel.titular}");
print("Agência: ${contadoGabriel.agencia}");
print("Conta: ${contadoGabriel.conta}");
print("Saldo: ${contadoGabriel.saldo}");

//criando outra conta
ContaCorrente contadoTiago = ContaCorrente();
contadoTiago.titular = "Tiago";
contadoTiago.agencia = 123;
contadoTiago.conta = 2;
print("Titular: ${contadoTiago.titular}");
print("Agência: ${contadoTiago.agencia}");
print("Conta: ${contadoTiago.conta}");
print("Saldo: ${contadoTiago.saldo}");

}

// Criando a classe da conta 
class ContaCorrente {
  String? titular;
  int? agencia;
  int? conta;
  double? saldo = 40.0;


// Exmeplos de clientes
//bool sucesso = contaDaAmanda.transferencia(20, contaDoTiago);
//print(sucesso);

//Cliente amanda = Cliente();
//amanda.nome = "Amanda";
//amanda.cpf = "123.456.789.00";
//amanda.profissao = "Programadora Dart";

//contaDaAmanda.titular = amanda;

//p//rint("Titular: ${contaDaAmanda.titular.nome}");
//print("Profissão: ${contaDaAmanda.titular.profissao}");
//print("cpf: ${contaDaAmanda.titular.cpf}");

// Separar por clientes
//print("===========================");

//Cliente tiago = Cliente();
//tiago.nome = "Tiago";
//tiago.cpf ="098.765.432.00";
//tiago.profissao = "CEO da empresa Alura Bank";

//Atribuindo os dados da classe para o cliente
//contaDoTiago.titular = tiago;

//print("Titular: ${contaDoTiago.titular.nome}");
//print("Profissão: ${contaDoTiago.titular.profissao}");
//print("cpf: ${contaDoTiago.titular.cpf}");

//print("=========================");

//colocando um novo cliente de forma diferente das demais.
//Cliente guilherme = Cliente()
//..nome = "Guilherme"
//..cpf = "111.222.333.00"
//..profissao = "programador Dart";

//contaDoGuilherme.titular = guilherme;

//print("Titular: ${contaDoGuilherme.titular.nome}");
//print("Profissão: ${contaDoGuilherme.titular.profissao}");
//print("cpf: ${contaDoGuilherme.titular.cpf}");


}