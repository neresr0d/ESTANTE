<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante/views/_cabecalho.php';
?>

<main id="conteudo-login">
    <div id="div-login">
        <div id="modal-login">
            <h1>Altere sua senha</h1>

            <p>Enviaremos um e-mail com um código</p>
            <form action="/estante/controllers/login_controller.php" method="post" id="form-login">
                <div class="input-login">
                    <label for="email-login">E-mail:</label>
                    <input
                        type="email"
                        name="email-login"
                        id="email-login"
                        required placeholder="digite seu e-mail"/>
                </div>
                <button type="submit">ENVIAR</button>
                
            </form>
        </div>
        
    </div>
</main>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante/views/_rodape.php';
?>