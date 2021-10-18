<?

namespace APP\Model;



class ProdutoDao{

public function create(Produto $p){

        $sql = "INSERT INTO produto (nome, descricao) VALUES (?,?)";

        $insert = Conexao::getConn()->prepare($sql);
        $insert->bindValue(1, $p->getNome());
        $insert->bindValue(2, $p->getDescricao());
        $insert->execute();

}
public function read(){
        $sql = 'SELECT * FROM produto';
        $insert = Conexao::getConn()->prepare($sql);
        $insert->execute();

        if ($insert->rowCount() > 0):
            $resultado = $insert->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
            
        endif;
        
        }

public function update(Produto $p){

    $sql = 'UPDATE produto SET nome = ?, descricao = ? WHERE id = ?';

    $insert = Conexao::getConn()->prepare($sql);
    $insert->bindValue(1, $p->getNome());
    $insert->bindValue(2, $p->getDescricao());
    $insert->bindValue(3, $p->getId());

    $insert->execute();
}
public function delete($id){

    $sql = 'DELETE FROM produto WHERE id = ?';

    $insert = Conexao::getConn()->prepare($sql);
    $insert->bindValue(1,$id);
    $insert->execute();

}





}