<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Embed Multimedia</title>

    <style>
        object{
            margin-left: 30px;
            border: 2px solid red;
        }

    </style>
</head>
<body>
    
    <object data = "latihan.php" type = "text/html" width = "300" height = "200">
        alt : <a href = "latihan.php">test.htm</a>
    </object>

    <!-- Tidak berjalan -->
    <object data = "../../../Users/Haryanto/Documents/PERLENGKAPAN MAHASISWA MAHASISWI.pdf" type = "application/pdf" width = "300" height = "200">
        alt : <a href = "../../../Users/Haryanto/Documents/PERLENGKAPAN MAHASISWA MAHASISWI.pdf">test.pdf</a>
    </object>

</body>
</html>