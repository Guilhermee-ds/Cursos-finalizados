
class Cliente{
    nome;
    cpf;

};

class ContaCorrente{
    agencia;
    saldo;

    sacar(valor){
        if(this.saldo >= valor){
            this.saldo -= valor;
        }
        
    }
};

let valorSacado = 200;


const cliente1 = new Cliente();
    cliente1.nome = "Ricardo";
    cliente1.cpf = 11122233;

const cliente2 = new Cliente();
    cliente2.nome = "Guilherme";
    cliente2.cpf = 11122222;


const ContaCorrenteRicardo = new ContaCorrente();
ContaCorrenteRicardo.saldo = 500;
ContaCorrenteRicardo.agencia = 1001;
console.log (ContaCorrenteRicardo.saldo);



console.log (ContaCorrenteRicardo.saldo);
ContaCorrenteRicardo.saldo = 1000;
console.log (ContaCorrenteRicardo.saldo);
ContaCorrenteRicardo.sacar(500);




console.log (ContaCorrenteRicardo.saldo);
console.log(cliente1);
console.log(cliente2);