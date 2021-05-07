<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Operator</title>
</head>
<body>
    <?php
    $hari = "Sabtu";
        if ($hari =  "Senin") {
            // blok kode ini akan dieksekusi jika kondisi benar
            echo "I Love Monday";
        }else{
            // blok kode ini akan dieksekusi jika kondisi salah
            echo "ini bukan Hari Senin";
         }     
         
        echo "<br><br>";



     $nilai = "50";
         if ($nilai >=  "60") {
            echo "LULUS";
         }else{
            echo "TIDAK LULUS";
          }  
          echo "<br><br>";
        

        $nilai2 = 90;

        if($nilai2 <= 85){
            echo "nilai anda B";
        }elseif ($nilai2 <= 60) {
            echo "Nilai anda C";
        }else {
            echo "Nilai anda A";
        }


        //   $nilai = 90;
        //   $ket1 = "Siswa Lulus";
        //   $ket2 = "Siswa Tidak Lulus";
        //   if ($nilai  60 ?  $ket1 : $ket2


    ?>
</body>
</html> 