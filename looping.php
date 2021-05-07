<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Operator</title>
</head>
<body>
    <?php

For ($i=1;$i<100;$i++) //membuat variabel i = 1 dan membuat perulangan  dan akan berhenti sampai i = 100
{
  if($i%2==0) //jika hasil bagi antara bilangan i dengan 2 = 0 maka itu bilangan genap
  {
    echo $i."<br>"; //Menampilkan bilangan genap
  }
}
echo "<br><br>";
  
for ($i=100; $i >=0; $i-=2) {
    echo $i."<br>";
}

echo "<br><br>";

for ($i=100; $i >=0; $i-=1) {
    echo $i."<br>";
}

echo "<br><br>";
echo "<br><br>";


    for ($i=1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 ==0 ) {
            echo "fizz buzz"."<br>"; 
        }elseif ($i % 5 == 0) {
            echo "buzz"."<br>";
        }elseif ($i % 3 == 0) {
            echo "fizz"."<br>";
        }else {
            echo $i. "<br>";
        }
        
    }




    ?>
</body>
</html> 