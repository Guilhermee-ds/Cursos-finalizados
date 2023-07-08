import { Cliente } from "./Cliente.js";
import { ContaCorrente } from "./ContaCorrente.js";

const cliente1 = new Cliente();
    cliente1.nome = "Ricardo";
    cliente1.cpf = 11122233;

const cliente2 = new Cliente();
    cliente2.nome = "Guilherme";
    cliente2.cpf = 11122222;


const ContaCorrenteRicardo = new ContaCorrente();
ContaCorrenteRicardo.agencia = 1001;
console.log (ContaCorrenteRicardo.saldo);

ContaCorrenteRicardo.depositar(1000);
console.log (ContaCorrenteRicardo.saldo);
const valorSacado = ContaCorrenteRicardo.sacar(100);
console.log (valorSacado);




console.log (ContaCorrenteRicardo);
