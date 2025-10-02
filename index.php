<?php
session_start(); // Inicia a sessão no início do arquivo

include_once("requests.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["usuario"];
    $password = $_POST["senha"];

    $Resposta = fazerChamadaApi($username, $password);

    if ($Resposta[0]['status'] == true) {
        $_SESSION['usuario'] = $username;
        $_SESSION['IdUsuario'] = $Resposta[0]['idUsuario'];
        // Redireciona após o login bem-sucedido
        header("Location: ./src/Dashboards/GestaoDeOps/");
        exit();
    } else {
        $mensagemErro = "Usuário inválido. Tente novamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Fhild</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="website icon" type="png" href="./templates/imagens/Logo.png">
    <link rel="stylesheet" href="./css/styleLogin.css">
    <style>
        body {
            background: linear-gradient(to right, #141E30, #243B55);
        }
        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            width: 100%;
            max-width: 400px;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
        .logo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }
        .logo-small {
            width: 150px;
            /* Ajuste conforme necessário */
        }
        .form-floating {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <main class="container-fluid main-container">
        <div class="card">
            <div class="card-body">
                <div class="logo-container">
                    <img src="./templates/imagens/Logo.png" alt="Logo" class="logo-small">
                </div>
                <h2 class="text-center mb-4">Login</h2>
                <form action="" method="POST" class="was-validated">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder=" " required>
                        <label for="usuario">Usuário/Login</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="senha" id="senha" placeholder=" " required>
                        <label for="senha">Senha</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg w-100">ENTRAR</button>
                    </div>
                </form>
                <?php if (isset($mensagemErro)) : ?>
                    <div class="alert alert-danger mt-3" role="alert">
                        <?php echo $mensagemErro; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main>
</body>
</html>