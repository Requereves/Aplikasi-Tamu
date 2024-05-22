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
        <h3>List Tamu</h3>
        <a href="tamu2.php" class="btn btn-primary"> Home</a>
        <a href="tamu2.php?url=tambah-tamu" class="btn btn-primary"> Form</a>
        <a href="index2.php" class="btn btn-primary"> Kembali</a>
        
        <div class="card mt-2">
            <div class="card-body">
                <?php
                $file = @$_GET['url'];
                if(empty($file)){
                    echo "<h4>>>>>>></h4>";
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