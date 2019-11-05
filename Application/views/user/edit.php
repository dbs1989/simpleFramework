<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">
        <h2>Usuários</h2>
        <form method="post" action="/user/update/<?=$data["user"]["id"]?>" >
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_name">Nome</label>
                    <input id="form_name" value="<?=$data["user"]["name"]?>" type="text" name="nome" class="form-control" placeholder="Nome" required="required" data-error="Obrigatório.">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="form_name">Idade</label>
                    <input id="form_name" value="<?=$data["user"]["idade"]?>" type="text" name="idade" class="form-control" placeholder="Idade" required="required" data-error="Obrigatório.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="Enviar">
            </div>
        </form>
      </div>
    </div>
  </div>
</main>
