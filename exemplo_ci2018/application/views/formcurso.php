<?= isset($msg)?$msg:"";?>

<form action="<?=base_url('curso/salvar')?>" method="post">
      Nome: <input type="text" name="nome"/><br/>
      Descricao: <input type="text" name="descricao"/><br/>
      <button type="submit">Enviar</button>
</form>
