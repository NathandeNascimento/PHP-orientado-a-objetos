 <?
 
class Login{
    public static $user;

    public static function verificaLogin(){
        echo "O usuario ".self::$user." esta logado !";
    }

    public function sairSistema(){
        echo "Usuario Deslogou<hr>";
    }

}
$login = new Login();
$login->sairSistema();

Login::$user = "admin";
Login::verificaLogin();



