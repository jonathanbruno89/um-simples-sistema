<?php
session_start();

if (! isset($_SESSION['autenticado'])) {
        echo "
        <script>
        window.location.href = 'index.php';
        </script>
        ";
}

?>

autenticado