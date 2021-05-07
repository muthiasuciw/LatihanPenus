<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>STRPOS</title>
</head>
<body>
    <?php
        $kalimat = "Saya sedang belajar PHP";
        $katayangdicari = "PHP";
        $posisi = strpos($kalimat, $katayangdicari);
        echo $posisi;
?>
</body>
</html>