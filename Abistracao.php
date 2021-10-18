<?

 abstract class Banco{
protected $saldo;
protected $limiteSaque;
protected $juros;

public function setSaldo($s){
    $this->saldo = $s; 
}

public function getSaldo($s){
     return $this->saldo; 
}

abstract protected function Sacar($s);
abstract protected function Depositar($d);
} 


class Itau extends Banco {

    public function Sacar($s) {
        $this->saldo -= $s;
        echo"<hr> Sacou: " . $s; 
    }
    
    public function Depositar($d) {
        $this->saldo += $d;     
        echo"<hr>Depositou:" . $d;
    }
}   
$itau = new Itau();
$itau->setSaldo(1000);
echo"<hr> Saldo: " .$itau->getSaldo("");
$itau->Sacar(250); 
echo"<hr> Saldo: " .$itau->getSaldo(""); 
$itau->Depositar(700);
echo"<hr> Saldo: " .$itau->getSaldo(""); 
/*class Bradesco extends Banco {
     
    public function Depositar() {
        echo "Depositou";
    }
} */  




?>