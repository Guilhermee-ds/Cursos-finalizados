console.log("Trabalhando com condicionais");

const listaDeDestinos = new Array(
    "Salvador",
    "São Paulo",
    "Rio de janeiro"
);

const idadeComprador = 2;
const estaAcompanhado = true;


if (idadeComprador >= 18){
    console.log("voce pode viajar:");
    listaDeDestinos.splice(1,1); // removendo item
} else if(estaAcompanhado) {
    console.log("voce é menor de idade porem esta Acompanhado, pode viajar:");
}else {
    console.log("voce é não tem a idade necessaria e não está Acompanhado");

}

console.log(listaDeDestinos);
