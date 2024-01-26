<link rel="stylesheet" href="tela.css">
<div class="container login-usuario">
        <h2 class="text-center mb-4">Login</h2>
 
        <form method="post" action="criar-cadastro.php">
 
        <div class="form-group">
                <label for="usuario">nome</label>
                <input type="text" class="forr-control" id="nome" name="nome" placeholder="Digite seu Nome">
            </div>
 
            <div class="form-group">
                <label for="usuario">email</label>
                <input type="text" class="forr-control" id="email" name="email" placeholder="Digite seu Email">
            </div>
 
            <div class="form-group">
                <label for="usuario">usuario</label>
                <input type="text" class="forr-control" id="usuario" name="usuario" placeholder="Digite seu Usuário">
            </div>
 
            <div class="mt-1 form-group">
                <label for="senha">Senha:</label>
                <input type="text" class="form-control" id="senha" name="senha" placeholder="Digite a senha">
            </div>
           
 
            <div class="mt-2 text-center">
                <button type="submit" class="btn btn-warning">Login</button>
            </div>
 
        </form>
    </div>
