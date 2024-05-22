<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN USER</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <h4 class="text-center">LOGIN</h4>
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                            <form action="Login.php" method="post">
                                <div class="form-group-mb-2">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda" required>
                                </div>
                                <div class="form-group-mb-2">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control" placeholder="Masukkan Password Anda" required>
                                </div>
                                <div class="form-group mb-2">
                                    <button type="submit" class="btn btn-primary">LOGIN</button>
                                    <a href="index2.php">Tamu</a>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>