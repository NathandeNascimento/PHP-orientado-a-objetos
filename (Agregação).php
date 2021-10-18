<?

class Produto{
    public $nome;
    public $valor;

    function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;

    }
}
class Carrinho{
    public $produtos;

    public function Adiciona(Produto $produto ){
      $this->produtos[] = $produto; 
    }
    public function exibe(){
        foreach($this->produtos as  $produto){
             echo $produto->nome.'</br>';
             echo $produto->valor.'<hr>';
        }       
    }
}

$produto1 = new Produto("notebook", "1500");
$produto2 = new Produto("Teclado", "100");
$produto3 = new Produto("Mouse", "150");
$produto4 = new Produto("Alexa", "2000");


$carrinho = new Carrinho();
$carrinho->Adiciona($produto1);
$carrinho->Adiciona($produto2);
$carrinho->Adiciona($produto3);


$carrinho->exibe();