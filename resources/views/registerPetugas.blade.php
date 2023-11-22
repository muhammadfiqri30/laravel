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
            <header>Register</header>
            <form action="" method="post">
                @csrf
                <div class="field input">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama_petugas" id="nama_petugas" required>
                </div>

                <div class="field input">
                    <label for="nik">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>

                
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                
                <div class="field input">
                    <label for="telp">No.Telpon</label>
                    <input type="text" name="telp" id="telp" required>
                </div>

                <div class="field">
                    <button type="submit" class="btn" name="submit" style="background: rgba(6, 116, 12, 0.671);" required>register</button>
                </div>
                <div class="links">
                    <center>have account? <a href="loginPetugas">Sign in</a></center>
                </div>
            </form>
        </div>
    </div>
</body>
</html>