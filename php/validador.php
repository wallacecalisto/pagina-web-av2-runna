<?php
    include("../php/connection.php");

    if (isset($_POST["submit"])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        
        $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $scount = mysqli_num_rows($result);

        if ($scount == 1) {
            echo '
            <script>
                alert("Login bem-sucedido!");
                window.location.href = "../html/welcome.php";
            </script>';
        } else {
            echo '
            <script>
                alert("Login falhou. Usuário ou senha inválidos.");
                window.location.href = "../html/login.php";
            </script>';
        }
    }
?>  