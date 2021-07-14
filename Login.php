<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login | PT.Sawit Bahagia</title>
    <link href="Login.css" rel="stylesheet">
  </head>


  <body class ="text-center">
    <main class="form-login">
    <form method="POST" action="Cl.php">
        <img class="mb-4" src="img/login.png" alt="" width="200" >
        <h1 class="h3 mb-4 fw-normal"> Masuk ke SawitBahagia</h1>
        <p> 

        <div class="form-floating mb-3">
        <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required autofocus>
        <label>Masukkan Username</label>
        </div>

        <div class="form-floating mb-3">
        <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required autofocus>
        <label>Masukkan Password</label>
        </div>

        <div class="mb-3">
            <select class="form-select" name="level">
                <option value="Admin">Admin</option>
                <option value="Pegawai">Pegawai</option>
            </select>
        </div>

        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted">© PT.SawitBahagia 2021</p>
    </form>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>