<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <link rel="stylesheet" href="estilos/cadastro.css">
        <link rel="stylesheet" href="estilos/reset.css">
    </head>
<body>
    <div class="box">
        <form method="post" action="include.php">
            <h2>Cadastro</h2>
            <div class="InputBox">
                <input type="text" required="required" name="nomeusuario" autocomplete="off">
                <span>nome de usuário</span>
                <i></i>
            </div>
            <div class="InputBox">
                <input type="password" required="required" name="senhausuario" autocomplete="off">
                <span>senha</span>
                <i></i>
            </div>
            <div class="InputBox">
                <input type="password" required="required" name="repsenha" autocomplete="off">
                <span>confirmar senha</span>
                <i></i>
            </div>
            <div class="Links">  
                <a href="login.html">Já tenho cadastro</a>    
            </div>
            <input type="submit" value="cadastrar">
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>