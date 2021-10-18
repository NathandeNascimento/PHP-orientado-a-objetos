<?

    class Pedido{

        public $numero;
        public $cliente;

    }

    class Cliente {

        public $nome;
        public $endereço;
    }
 
    $cliente = new Cliente();
    $cliente->nome = "Nathan Nascimento";
    $cliente->endereço = "Rua 4 , Nº 265, B: JD Planalto, CG-MG";

    $pedido = new Pedido();
    $pedido->numero = '123';
    $pedido->cliente = $cliente;

    $dados = array(
        'numero' => $pedido->numero,
        'nome' => $pedido->cliente->nome,
        'endereço' => $pedido->cliente->endereço
    );
    var_dump($dados);








?>