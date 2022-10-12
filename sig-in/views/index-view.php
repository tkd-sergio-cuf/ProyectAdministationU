<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Inisio de sesion</title>
    <link href="css/signin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .logoUniversidad{
        width: 80%;
        height: 90%;
        margin-bottom: 35px;
      }
      body{
        padding-top: 20px !important;
      }
      .errores{
        color: #ff0101;
      }
    </style>

  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <img class="logoUniversidad" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Logo_de_la_Universidad_El_Bosque.svg/1200px-Logo_de_la_Universidad_El_Bosque.svg.png" alt="" width="72" height="57">
  

    <div class="form-floating">
      <input type="text" name="usuario" class="form-control" placeholder="">
      <label for="usuario">Usuario</label>
    </div>
    <div class="form-floating">
      <input type="password" name="contraseña" class="form-control" placeholder="">
      <label for="contraseña">Contraseña</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recordar nombre de Usuario 
      </label>
    </div>

    <?php  if(!empty($errores)):?>
      <div class="errores">
          <?php echo $errores; ?>
      </div>
    <?php  endif; ?>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="submit">Acceder</button>
  </form>
</main>
  </body>
</html>