
class Cliente{
    nome;
    cpf;

};

class ContaCorrente{
    agencia;
    //#saldo = 0;
    _saldo = 0;

    sacar(valor){
        if(this._saldo >= valor){
            this._saldo -= valor;
        }
        
    };

    depositar(valor){
        if(valor > 0 ){
            this._saldo += valor;
        }
    };
};


let valorSacado = 200;


const cliente1 = new Cliente();
    cliente1.nome = "Ricardo";
    cliente1.cpf = 11122233;

const cliente2 = new Cliente();
    cliente2.nome = "Guilherme";
    cliente2.cpf = 11122222;


const ContaCorrenteRicardo = new ContaCorrente();
ContaCorrenteRicardo.agencia = 1001;
console.log (ContaCorrenteRicardo.saldo);

ContaCorrenteRicardo.depositar(500);
console.log (ContaCorrenteRicardo.saldo);
ContaCorrenteRicardo.sacar(5000);




console.log (ContaCorrenteRicardo);
