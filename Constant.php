<?


class Pessoa{
    const nome = "Nathan";

    public function exibirNome(){
        echo self::nome;
    }


}

class Nathan extends Pessoa{
    const nome = "Oliveira";

    public function exibirNome(){
        echo parent::nome;
    }


}
$nathan = new Nathan();
$nathan->exibirNome();



//$pessoa = new Pessoa();
//$pessoa->exibirNome();


?>