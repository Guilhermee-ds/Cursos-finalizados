console.log(`Trabalhando com loops`);
const listaDeDestinos = new Array(
    `Salvador`,
    `São Paulo`,
    `Rio de Janeiro`
);

const idadeComprador = 18;
const estaAcompanhada = false;
const temPassagemComprada = true;
const destino = "Salvador"
let destinoExiste = false;

console.log("\n Destinos possíveis:");
console.log(listaDeDestinos);


const podeComprar = (idadeComprador >= 18 || estaAcompanhada == true) 

let contador = 0;

while(contador < 3){
     if(listaDeDestinos[contador] == destino) {
        destinoExiste = true;
        break;
     } else{
        console.log("destino não existente");
     }
    contador += 1;
    
}

console.log("Destino existente:",destinoExiste);

