<?php
    require_once("Mahasiswa.php");
    require_once("MahasiswaBaru.php");


    $Aidil = new Mahasiswa("H1101191035", "Muhammad Aidil Rifaldi", "2000-12-18", "Pria");
    $Niko = new MahasiswaBaru("H1101011035", "Niko", "2002-02-08", "pria", 1234567);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php echo "<p>Hello World</p>"; ?>
    
    <?php
        $Aidil -> tampilkanNama ();
        echo "<br>";
        $Aidil->tampilkanAngkatan();
        echo "<br>";
        $Aidil->tampilkanUmur();
        echo "<br>";
        
    ?>
</body>
</html>