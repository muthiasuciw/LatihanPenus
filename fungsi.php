<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Operator</title>
</head>
<body>
    <?php
    // deklarasi function
        function hello(){
                echo "Hello World";
        }
    //pemanggilan
    hello();

    echo "<br>";


    //function dengan parameter
        function nama($nama, $alamat){
            echo "Hello nama saya $nama, alamat saya $alamat";
        }


        nama ("muthiasuciw", "Gunung Putri");

        echo "<br>";
        echo "<br>";


    //function return

        function tambah ($nilai, $nilai2){
                        return $nilai + $nilai2;
        }

        echo tambah (5,4);

?>
  </body>
  </html>