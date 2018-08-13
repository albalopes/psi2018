<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p><?= $this->session->flashdata('msg') ?></p>
        <form method="post" action="<?=base_url('usuario/autenticar');?>">
            Usuário: <input type="text" name="usuario"/><br/>
            Senha: <input type="password" name="senha"/><br/>
            <button type="submit">Acessar</button>
        </form>
    </body>
</html>
