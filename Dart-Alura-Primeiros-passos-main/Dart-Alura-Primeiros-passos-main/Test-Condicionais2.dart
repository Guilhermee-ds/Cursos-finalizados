void main (){
  print("Testando condicionais");

  int idade = 11;

  // true significa verdadeiro
  // false significa falso 
  bool maior_idade = idade >= 18;
  bool acompanhado = true;
  
  print(maior_idade);

  if(maior_idade){
    print("Você pode entrar!");
  }
  else{
    if(acompanhado ==true) {
      print("Voê é menor de idade, mas está acompanhado, pode entrar!");
    } else{
      print("Você não pode entrar!");
    }
    
  }
}