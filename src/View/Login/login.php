<?php
use App\Utility\Paths;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<body class="index-page">
  <main class="main">

    <section>
      <div class="login-container">
        <div class="login-card">
          <div class="login-header">
            <div class="logo-login">
              <img src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>/img/logo.png" alt="" width="80" height="80">
            </div>
            <h1>Login</h1>
            <p>Bem-Vindo de volta! Faça login para continuar</p>
          </div>

          <form method="POST" action="<?php echo Paths::MAIN_FOLDER . Paths::CONTROLLER_FOLDER ?>ControllerUsuario.php" class="login-form" id="loginForm" novalidate>
            <div class="input-group">
              <input type="email" id="email" name="email" placeholder=" ">
              <label for="email">Email</label>
              <span class="input-border"></span>
              <span class="error-message" id="emailError"></span>
            </div>

            <div class="input-group">
              <input type="password" id="password" name="password" placeholder=" ">
              <label for="password">Senha</label>
              <button type="button" class="password-toggle" id="passwordToggle" aria-label="Toggle password visibility">
                <svg class="eye-icon" width="23" height="23" viewBox="0 0 16 16" fill="none">
                  <path
                    d="M8 3C4.5 3 1.6 5.6 1 8c.6 2.4 3.5 5 7 5s6.4-2.6 7-5c-.6-2.4-3.5-5-7-5zm0 8.5A3.5 3.5 0 118 4.5a3.5 3.5 0 010 7zm0-5.5a2 2 0 100 4 2 2 0 000-4z"
                    fill="currentColor" />
                </svg>
              </button>
              <span class="input-border"></span>
              <span class="error-message" id="passwordError"></span>
            </div>

            <div class="form-options">
              <a href="#" class="forgot-link">Esqueceu a senha?</a>
            </div>

            <button type="submit" class="submit-btn" name="login">
              <span class="btn-text">Entrar</span>
            </button>
          </form>

          <div class="divider">
            <span>ou continuar com</span>
          </div>

          <div class="social-buttons">
            <button type="button" class="social-btn">
              <svg width="18" height="18" viewBox="0 0 16 16">
                <path fill="#4285F4"
                  d="M14.9 8.161c0-.476-.039-.954-.118-1.421H8.021v2.681h3.833a3.321 3.321 0 01-1.431 2.161v1.785h2.3c1.349-1.25 2.177-3.103 2.177-5.206z" />
                <path fill="#34A853"
                  d="M8.021 15c1.951 0 3.57-.65 4.761-1.754l-2.3-1.785c-.653.447-1.477.707-2.461.707-1.887 0-3.487-1.274-4.057-2.991H1.617V11.1C2.8 13.481 5.282 15 8.021 15z" />
                <path fill="#FBBC05"
                  d="M3.964 9.177a4.97 4.97 0 010-2.354V4.9H1.617a8.284 8.284 0 000 7.623l2.347-1.346z" />
                <path fill="#EA4335"
                  d="M8.021 3.177c1.064 0 2.02.375 2.75 1.111l2.041-2.041C11.616 1.016 9.97.446 8.021.446c-2.739 0-5.221 1.519-6.404 3.9l2.347 1.346c.57-1.717 2.17-2.515 4.057-2.515z" />
              </svg>
              Google
            </button>

            <button type="button" class="social-btn">
              <svg width="18" height="18" viewBox="0 0 16 16" fill="#000000">
                <path
                  d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z" />
              </svg>
              GitHub
            </button>
          </div>

          <div class="signup-link">
            <span>Não tem uma conta? </span>
            <a href="<?php echo Paths::MAIN_FOLDER . Paths::VIEW_FOLDER;?>Login/?page=cadastro">Criar conta</a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Botão de Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Arquivos JS do Vendor -->
  <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>/vendor/aos/aos.js"></script>
  <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Arquivo JS Principal -->
  <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER;?>/js/main.js"></script>

</body>

</html>