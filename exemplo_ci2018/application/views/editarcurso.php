<form action="<?= base_url('curso/atualizar/'.$c->id)?>" method="post">
      Nome: <input type="text" name="nome" value="<?= $c->nome?>"/><br/>
      Descricao: <input type="text" name="descricao" value="<?= $c->descricao?>"/><br/>
      <button type="submit">Editar</button>
</form>