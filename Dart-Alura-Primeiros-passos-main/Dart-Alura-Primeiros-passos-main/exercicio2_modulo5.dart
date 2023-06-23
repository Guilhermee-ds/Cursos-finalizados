//Luiz, um aluno da Alura, foi desafiado por um colega a somar todos os números de 1 até 1000, incluindo 1 e 1000. Luiz sabe que se ele quiser encontrar esse valor, vai ter que fazer muitos cálculos em sua calculadora, No entanto, Luiz se lembrou de que aprendeu no curso de Dart como poderia fazer um programa que resolvesse esse problema para ele.

void main() {
 int soma = 0;
 int contador = 1;
 while(contador != 1001) {
   soma = soma + contador;
   contador++;
 }
 print(soma);
}