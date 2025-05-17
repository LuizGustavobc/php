<?php

class index{
    public function __construct(
        private bool $check
    ){
    }
    public function caregaPage(){
        if($this->check == true){
        $page = "  
            <header>
                <p>Ola</p>
            </header>
        ";
        log($page);
        return $page;
        }
    }
}
