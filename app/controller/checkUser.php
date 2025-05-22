<?php 
require __DIR__ . "/../model/modelChecUser.php";

class CheckUser 
{
    public function __construct(   
            private string $user,
            private string $password,
    ) {
    }
    public function verifi() {

        $user = new ModelCheckUser();
        $pass = $user->chec($this->user);
        $pass = $pass['senha'] ?? null;

        if ($this->password === $pass) {
            return true;
        }else{
            return false;
        }
    }

}
    
#$user = new CheckUser("admin", "1234");
#$u = $user->verifi();
#print_r( $u);