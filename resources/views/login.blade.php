<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>pengaduan masyarakat</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Login</header>
            <form action="proses_login.php" method="post">
                <div class="field input">
                  <label for="username">Username</label>
                  <input type="text" name="username" id="username" required>
              </div>

              <div class="field input">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" required>
              </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" style="background: rgba(6, 116, 12, 0.671);" required>
                </div>
                <div class="links">
                    <center>Don't have account? <a href="register">Sign Up</a></center>
                </div>
            </form>
        </div>
    </div>
</body>
</html>