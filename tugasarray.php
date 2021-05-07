<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h2>Berlatih Array</h2>
        
    <?php 
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $soal = "Soal No 1";
        $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven");
        $adults = array("Hopper", "Nancy", "Joyce", "Jonathan", "Murray");

        echo "<h3>$soal</h3>";
        print_r($kids);
        echo "<br>";
        print_r($adults);
        echo "<br><br><br>";
        
        
    
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */

        $soal2 = "Soal No 2";
        $jml_kids = count($kids);
        $jml_adults = count($adults);
        
        echo "<h3>$soal2</h3>";
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo 'Total Kids : '.$jml_kids ; // Berapa panjang array kids
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        echo "<li> $kids[1] </li>";
        echo "<li> $kids[2] </li>";
        echo "<li> $kids[3] </li>";
        echo "<li> $kids[4] </li>";
        echo "<li> $kids[5] </li>";
        // Lanjutkan

        echo "</ol>";
        
        echo 'Total Adults : '.$jml_adults ;// Berapa panjang array adults
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        echo "<li> $adults[1] </li>";
        echo "<li> $adults[2] </li>";
        echo "<li> $adults[3] </li>";
        echo "<li> $adults[4] </li>";
        // Lanjutkan
        echo "</ol>";
        echo "<br>";

        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)

            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
        $nama = "Muthia Suci Wulandari";
        $tanggal = "May 5, 2021";
        $soal3 = "Soal No 3";
        $biodata = array(
            array(
              "nama1" => "Will Byers",
              "age1" => "12",
              "aliases1" => "Will the Wise",
              "status1" => "Alive"
            ),

            array(
                "nama2" => "Mike Wheeler",
                "age2" => "12",
                "aliases2" => "Dungeon Master",
                "status2" => "Alive"
            ),

            array(
                "nama3" => "Jim Hopper",
                "age3" => "43",
                "aliases3" => "Chief Hopper",
                "status3" => "Deceased"
            ),

            array(
                "nama4" => "Eleven",
                "age4" => "12",
                "aliases4" => "El",
                "status4" => "Alive"
              ),
        );
       
        echo "<h3>$soal3</h3>"; 
        echo "Name : ".$biodata[0]["nama1"] . "<br />";
        echo "Age : ".$biodata[0]["age1"] . "<br />";
        echo "Aliases : ".$biodata[0]["aliases1"] . "<br />";
        echo "Status : ".$biodata[0]["status1"] . "<br /><br />";

        echo "Name : ".$biodata[1]["nama2"] . "<br />";
        echo "Age : ".$biodata[1]["age2"] . "<br />";
        echo "Aliases : ".$biodata[1]["aliases2"] . "<br />";
        echo "Status : ".$biodata[1]["status2"] . "<br /><br />";

        echo "Name : ".$biodata[2]["nama3"] . "<br />";
        echo "Age : ".$biodata[2]["age3"] . "<br />";
        echo "Aliases : ".$biodata[2]["aliases3"] . "<br />";
        echo "Status : ".$biodata[2]["status3"] . "<br /><br />";

        echo "Name : ".$biodata[3]["nama4"] . "<br />";
        echo "Age : ".$biodata[3]["age4"] . "<br />";
        echo "Aliases : ".$biodata[3]["aliases4"] . "<br />";
        echo "Status : ".$biodata[3]["status4"] . "<br /><br />";
    
        echo "<br><br>";

        echo $nama;
        echo "<br>";
        echo $tanggal;



    ?>
</body>
</html>
 
 
