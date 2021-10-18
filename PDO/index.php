<?

require_once 'vendor/autoload.php';

/* -- <<CONFIGURAÇOES DE INSERÇÃO>> --$produto = new \APP\Model\Produto();
$produto->setId(2);
$produto->setNome('Cadeira');
$produto->setDescricao('GamerX');*/

$produtoDao = new \APP\Model\ProdutoDao();

//----Cria o Dados----     $produtoDao->create($produto);

//----Atualiza Tabela----   $produtoDao->update($produto);

$produtoDao->delete(2);

$produtoDao->read();


foreach($produtoDao->read() as $produto){
    echo $produto['nome']."<br>". $produto['descricao']."<hr>";
}