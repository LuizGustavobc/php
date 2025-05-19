<?php 
require __DIR__ . "/../model/checUser.php";

class CheckUser 
{
    public function __construct(
            private string $user,
            private string $password,
    ) {
    }
    public function verifi() {

        $user = new User();
        $pass = $user->chec($this->user);

        if ($this->password === $pass["senha"]) {
            return true;
        }else{
            return false;
        }
    }

}
    
#$user = new ChecUser("admin", "1234");
#$u = $user->verifi();
#print_r( $u);