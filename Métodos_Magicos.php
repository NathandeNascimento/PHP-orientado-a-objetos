<?
// clone
//construct
//invoke
//tostring
//get
//set


class Pessoas {
    private $dados = array();

    public function __set($nome, $valor){
        $this->dados[$nome] = $valor;
    }
    public function __get($nome)
    {
        return $this->dados[$nome];
    }
    /* -- __tostring  -- 
    
    public function __tostring(){
        return "Tentei imprimir o Object";
    }*/


    public function __invoke(){
        return "Object como Função";
    }
    

}

$pessoas = new Pessoas();
//$pessoas->nome ='Nathan';
//$pessoas->idade ='50';
//$pessoas->Sexo ='Masculino';

/*-- GET / SET --
echo $pessoas->nome.'<br><hr>';
echo $pessoas->idade.'<br><hr>';
echo $pessoas->Sexo.'<br><hr>';*/

  echo $pessoas();
