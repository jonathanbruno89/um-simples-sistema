<?php
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

echo "seu login = $login - senha = $senha";

if ($login == "admin@teste.com" && $senha=="123" ) {
    $_SESSION ['autenticado']=true;
    echo "<script>
    window.location.href = 'menu.php';
    </script>";
} else 
    {   session_destroy();
        echo "
        <script>
        window.location.href = 'index.php';
        </script>
        ";
}
var_dump($_POST);

?>