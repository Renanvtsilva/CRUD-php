<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" required><br>
        <label>E-mail</label>
        <input type="email" class="form-control" name="email" required><br>
        <label>Senha</label>
        <input type="password" class="form-control" name="senha" required><br>
        <label>Data de nascimento</label>
        <input type="date" class="form-control" name="data_nasc" required><br>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>