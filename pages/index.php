<?php

class index{
    public function __construct(
        private string $nome,
        private string $senha,
    ){
    }
    public function caregaPage(){
        if($this->nome == "luiz"&& $this->senha == "1234"){
        $page = "  
            <header>
                <section>
                    <form action=\"index.html\">
                        <input type=\"submit\" value=\"Voltar\">
                    </form>
                </section>
            </header>
        ";
        }
        else{
            $page = "
                <p>Usuario nao identificado</p>
            ";
        }
        return $page;
    }
}
