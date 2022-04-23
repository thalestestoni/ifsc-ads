<?php
    if (!empty($_POST)) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        if (empty($login) || empty($senha)) {
            header("Location: login.php");
            exit();
        }

        setCookie('isAuthenticated', true, time() + 3600);

        $lembrarLogin = isset($_POST['lembrarLogin']);

        if ($lembrarLogin) {
            setcookie('login', $login, time() + 3600);
        }

        header("Location: calculadora/index.php");

        exit();
    }

    $login = '';

    if (isset($_COOKIE['login'])) {
        $login = $_COOKIE['login'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100 vw-100">
        <div class="col-10 col-sm-6 col-md-5 col-lg-4 col-xl-3">
            <form action="login.php" method="POST">
                <!-- Input Login -->
                <div class="form-floating mb-3">
                    <input 
                        name="login"
                        type="text"
                        class="form-control"
                        id="floatingLogin"
                        placeholder="Login"
                        value="<?php echo $login ?>"
                    >
                    <label for="floatingLogin">Login</label>
                </div>
                <!-- Input Senha -->
                <div class="form-floating mb-3">
                    <input name="senha" type="password" class="form-control" id="floatingPassword" placeholder="Senha">
                    <label for="floatingPassword">Senha</label>
                </div>
                <!-- Checkbox lembrar login -->
                <div class="form-check mb-3">
                    <input 
                        name="lembrarLogin"
                        class="form-check-input"
                        value=""
                        type="checkbox"
                        id="flexCheckDefault"
                        <?php
                            if(isset($_COOKIE['login'])){
                                echo "checked";
                            }
                        ?>
                    >
                    <label class="form-check-label" for="flexCheckDefault">
                      Lembrar meu login
                    </label>
                </div>
                <!-- Botão Login -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-success btn-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg>
                        
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<script src="login.js"></script>
</html>