console.log("Trabalhando com listas");

// const Salvador = "Salvador";
// const SaoPaulo = "São Paulo";
// const RioDeJaneiaro = "Rio de janeiro";


const listaDeDestinos = new Array(
    "Salvador",
    "São Paulo",
    "Rio de janeiro"
);

listaDeDestinos.push("natal");

console.log("Destinos possiveis:");
// console.log(Salvador, SaoPaulo, RioDeJaneiaro);

console.log(listaDeDestinos);


//Deletar item na lista de destinos
console.log("Planos disponiveis Atualizados:")
listaDeDestinos.splice(1,1);
console.log(listaDeDestinos);

console.log("Quero ir apenas para o Rio de janeiro:");
//caso queira pegar um elemento especifico
console.log(listaDeDestinos[1]);

console.log(listaDeDestinos[2]);

