<h1>Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" value="<?php print $row->nome; ?>" required><br>
        <label>E-mail</label>
        <input type="email" class="form-control" name="email" value="<?php print $row->email; ?>" required><br>
        <label>Senha</label>
        <input type="password" class="form-control" name="senha" required><br>
        <label>Data de nascimento</label>
        <input type="date" class="form-control" name="data_nasc" value="<?php print $row->data_nasc; ?>" required><br>
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>