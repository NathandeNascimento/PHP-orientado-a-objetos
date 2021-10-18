<?



interface Crud {
    public function create($data);
    public function read();
    public function update();
    public function delete();

}

class Noticias implements Crud{
    public function create($data){
        // logoca para criar noticia
        
    }
    public function read(){
        // logoca para ler noticia
    }
    public function update(){
        // logoca para atualizar noticia
    }
    public function delete(){
        // logoca para deletar noticia
    }
}