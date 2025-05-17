<?php 
$name = $_POST["nome"];
$senha = $_POST["senha"];
$user = var_dump(value: $_POST);

$conteudo = "
    <!DOCTYPE html>
    <html lang=\"pt-br\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Pagina Principal</title>
    </head>
    <body>
        <header>
            <p>Ola</p>
            {$user}
        </header>
    </body>
    </html>


";

if(
    $name == "luiz"&&
    $senha == "12345"
){ echo"
    {$conteudo}
";
}
else{   echo"
  <p>Nao, foi possivel carregar a pagina. Usuario ou senha incorretos!</p>  
    {$user}
";
}
?>