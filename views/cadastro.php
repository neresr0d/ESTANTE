<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante/views/_cabecalho.php';
?>

<main id="conteudo-cadastro">
  <div id="div-cadastro">
    <div id="modal-cadastro">
      <h1>Crie sua conta</h1>
      <form
        action="/estante/controllers/cadastrar_usuario_controller.php"
        method="post"
        id="form-cadastro"
        enctype="multipart/form-data">
        

        <div class="input-cadastro">
          <label for="foto_perfil">Foto do Perfil:</label>
          <!-- <img src="/estante/imgs/upload.png" alt="Imagem" class="img-perfil"> -->
          <input type="file" name="foto_perfil" id="foto_perfil" />
        </div>

        <div class="input-cadastro">
          <label for="nome-cadastro">Nome:</label>
          <input
            type="text"
            name="nome-cadastro"
            id="nome-cadastro"
            required />
        </div>

        <div class="input-cadastro">
          <label for="email-cadastro">E-mail:</label>
          <input
            type="email"
            name="email-cadastro"
            id="email-cadastro"
            required />
        </div>

        <div class="input-cadastro">
          <label for="senha-cadastro">Senha:</label>
          <input
            type="password"
            name="senha-cadastro"
            id="senha-cadastro"
            required />
        </div>
        <button type="submit">CRIAR CONTA</button>
        <p>Já é cadastrado?</p>
        <p><a href="/estante/views/login.php">Acesse sua conta</a></p>
      </form>
    </div>
    <div id="termos-usos">
      <p>
        Ao seguir com o cadastro, concorde com os Termos de Uso e Politicas
        de Privacidade
      </p>
    </div>
  </div>
</main>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante/views/_rodape.php';
?>
</body>

</html>