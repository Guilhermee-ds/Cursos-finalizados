console.log("Trabalhando com condicionais");

const listaDeDestinos = new Array(
    "Salvador",
    "São Paulo",
    "Rio de janeiro"
);

const idadeComprador = 20;



if (idadeComprador >=18){
    console.log("voce pode viajar:");
    listaDeDestinos.splice(1,1); // removendo item
} else {
    console.log("voce nao pode viajar:");
}

console.log(listaDeDestinos);
