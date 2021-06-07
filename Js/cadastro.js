var aluno = [];
var dados = ["Nome: ", "Email: ", "Telefone: ", "Turno: ", "Modalidade: ", "Vencimento: "];
var listaDeAlunos = [];

//adiciona os valores do input no array aluno
function gravarDados(nome, email ,telefone, turno, modalidade, vencimento){
  
  aluno.push(nome, email, telefone, turno, modalidade, vencimento);
  
  
  
}

//adiciona o array aluno no array listadeAlunos
function adicionarAluno(aluno, dados){
  for(i = 0; i<= 5; i++){
    
    listaDeAlunos.push(dados[i] + aluno[i]);
    
    
  }
  
  
}

function mostraLista(listaDeAlunos){
  
  let lista = document.getElementById("lista");
   
  for(i=0; i< listaDeAlunos.length ; i++){
     
  let item = document.createElement('li');
  item.appendChild(document.createTextNode(listaDeAlunos[i]));
  lista.appendChild(item);
  }
   
}

function cadastrarAluno(nome, email, telefone, turno, modalidade, vencimento){
  //pega os valores dos inputs
  var nome = document.getElementById('nome').value;
  var email = document.getElementById('email').value;
  var telefone = document.getElementById('telefone').value;
  var turno = document.querySelector('input[name="turno"]:checked').value;
  var modalidade = document.querySelector('input[name="modalidade"]:checked').value;
  var vencimento = document.getElementById('vencimento').value;
  
  gravarDados(nome, email, telefone, turno, modalidade, vencimento);
  
  adicionarAluno(aluno, dados);
  
  mostraLista(listaDeAlunos) ;
  
  }
  
  
  
  
  
  
  
  
  
    
    

 
  
    
  
