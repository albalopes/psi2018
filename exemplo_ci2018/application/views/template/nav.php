    <!-- Navigation --> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="http://placehold.it/300x60?text=Logo" width="150" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url();?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('curso/listar')?>">Cursos</a>
            </li><li class="nav-item">
              <a class="nav-link" href="<?= base_url('aluno/listar')?>">Alunos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('aluno/matricular')?>">Matricular</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('aluno/media/10/8')?>">Boletim</a>
            </li><li class="nav-item">
              <a class="nav-link" href="<?= base_url('usuario/logoff')?>">Sair (<?= $this->session->userdata('usuario')->nome?>)</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">