<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Documents</title>
</head>
<body>
    <?php
        $siswa = array("regi", "bobby", "ahmad");
        print_r($siswa);
        echo "<br>";

        //memanggil bobby (untuk manggil bisa pakai echo)
        echo $siswa[1];
        echo "<br>";

        $trainer = ["abdul", "agna", "yoga"];
        print_r($trainer);
    ?>
</body>
</html>