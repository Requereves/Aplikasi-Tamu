
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h3>Aplikasi Pengunjung Sekolah</h3>
        <a href="admin.php" class="btn btn-primary"> Home</a>
        <a href="admin.php?url=tamu" class="btn btn-primary"> Tamu</a>
        <a href="admin.php?url=logout" class="btn btn-primary"> logout</a>

        
        <div class="card mt-2">
            <div class="card-body">
                <?php
                $file = @$_GET['url'];
                if(empty($file)){
                    echo "<h4>>>>>>>Y<<<<<<</h4>";
                    echo "" ;
                }else{
                    include $file.'.php';
                }
                ?>
            </div>
        </div>

    </div>
    
<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>

