<?php 
    $u = $this->session->userdata('usuario');
?>
    <h2>Olá <?= $u->nome;?></h2>
