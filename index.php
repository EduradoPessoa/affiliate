<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Afiliate</title>
</head>
<body>
<section class="forms-section">
  <h1 class="section-title">APHILIATE LOGIN</h1>
  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
        Acessar
        <span class="underline"></span>
      </button>
      <form class="form form-login">
        <fieldset>
          <legend>Por favor, entre com seu e-mail e senha.</legend>
          <div class="input-block">
            <label for="login-email">E-mail</label>
            <input id="login-email" type="email" required>
          </div>
          <div class="input-block">
            <label for="login-password">Senha</label>
            <input id="login-password" type="password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-login">Entrar</button>
      </form>
    </div>
    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup">
        Registrar-se
        <span class="underline"></span>
      </button>
      <form class="form form-signup">
        <fieldset>
          <legend>Por favor, entre com seu e-mail e senha e confirme a senha.</legend>
          <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input id="signup-email" type="email" required>
          </div>
          <div class="input-block">
            <label for="signup-password">Senha</label>
            <input id="signup-password" type="password" required>
          </div>
          <div class="input-block">
            <label for="signup-password-confirm">Confirme a Senha</label>
            <input id="signup-password-confirm" type="password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-signup">Continue</button>
      </form>
    </div>
  </div>
</section>
    <script src="assets/js/login.js"></script>   
</body>
</html>