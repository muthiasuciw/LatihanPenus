<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
<h2>Berlatih String</h2>
    <?php   
        
        $soal = "Soal No 1";
        $latihan = "Berlatih String PHP";
        $output = "Panjang String : ";
        $jml_kata = str_word_count ($latihan);
        echo "<h3>$soal</h3>";
        echo $latihan;
        echo "<br>";
        echo $output;
        echo strlen($latihan);
        echo "<br>";
        echo "Jumlah Kata Yaitu : $jml_kata";
        echo "<br><br>";

        /* 
            SOAL NO 1
            Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! Tunjukkan juga jumlah kata di dalam kalimat tersebut! 

            Contoh: 
            $string = "PHP is never old";
            Output:
            Panjang string: 16, 
            Jumlah kata: 4 
        */
        $soal2 = "Soal No 2";
        $first_sentence = "Hello PHP!" ; // Panjang string 10, jumlah kata: 2
        $second_sentence = "I'm ready for the challenges"; // Panjang string: 28,  jumlah kata: 5  
        $string2 = "I Love PHP";

        echo "<h3>$soal2</h3>";
        echo $first_sentence;
        echo "<br>";
        echo $second_sentence;
        echo "<br>";
        echo "<label>String: </label> \"$string2\" <br>";
        echo "<br>";
        echo "Kata Pertama : ";
        echo substr($string2, 0, 1);
        echo "<br>";
        // Lanjutkan di bawah ini
        echo "Kata Kedua : " ;
        echo substr($string2, 2, 5);
        echo "<br> Kata Ketiga : " ;
        echo substr($string2, 6, 8);
        echo "<br><br><br>";

        /* 
            SOAL NO 2
            Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
            
            
        */
       

        $soal3 = "Soal No 3";
        $string3 = "PHP is Old But Sexy!";
        $nama = "Muthia Suci Wulandari";
        $tanggal = "May 5, 2021";

        echo "<h3>$soal3</h3>";
        echo $string3;
        echo "<br>";
        echo "Replaced : ";
        echo "<br>";
        echo str_replace("Sexy","Awesome",$string3); //mengubah
        echo "<br>";
        echo "<br><br><br>";
        echo $nama;
        echo "<br>";
        echo $tanggal;
        /*
            SOAL NO 3
            Mengubah karakter atau kata yang ada di dalam sebuah string.
        */

        // OUTPUT : "PHP is old but awesome"

    ?>
</body>
</html>
 
 
