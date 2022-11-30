<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cas 3</title>
</head>
<body>
    <?php
    //Grupa A
    //Zadatak 1,niz od 10, ispisi parne

    $brojevi = array(5, 7, 11, 8, 16, 20,3, 9, 43, 13);
    
    $brojevilength = count($brojevi);
    echo $brojevilength;
    echo "<br>";
    for ($i = 0; $i < $brojevilength ; $i++){
    $parni = $brojevi[$i];
    if ($parni % 2 == 0){
        echo $brojevi[$i].",";
        echo "<br>";
    }
    }
    
   //zadatak 2,niz od 15, ispisi djeljive sa 7

   $brojevi2 = array(5, 7, 11, 8, 16, 20,3, 9, 43, 13, 22, 26, 33, 84, 91);

   $brojevi2lenght = count($brojevi2);
   echo $brojevi2lenght;
   echo "<br>";
   for ($x = 0; $x < $brojevi2lenght; $x++){
    $del7 = $brojevi2[$x];
    if ($del7 % 7 == 0){
        echo $brojevi2[$x]. ",";
        echo "<br>";
    }
   }
   //zadatak 3, niz od 20, ispisi djeljive sa 3 i 5, i da su dvocifreni

   $brojevi3 = array(5, 7, 11, 8, 16, 20,3, 9, 15, 13, 22, 30, 33, 84, 91, 55, 42, 64, 88, 99);
   $brojevi3lenght = count($brojevi3);
   echo $brojevi3lenght;
   echo "<br>";
   for ($x = 0; $x < $brojevi3lenght; $x++){
    $broj15 = $brojevi3[$x];
    if( $broj15 % 3 == 0 &&  $broj15 % 5 == 0  && $broj15<100 && $broj15>10){
        echo  $brojevi3[$x]. ", ";
        echo "<br>";
    }
   }

  //niz od 10, ispisati koliko svaki broj ima cifara
   $brojevi = array(5, 7, 11, 8, 16, 20, 3, 9, 43, 13);

   var_dump($brojevi);
   echo "<br>";

   for ($x = 0; $x <= $brojevilength - 1; $x++) {
    $number_of_digits = strlen((string) $brojevi[$x]);
    echo "Broj cifara u broju $brojevi[$x] je ".$number_of_digits. "." ;
    echo "<br>";
    
  }
  //Grupa B

  //Zadatak 1,niz od 10, ispisi neparne

  $brojeviB = array(25,57,31,4, 8, 7, 9, 3, 1, 10);
  $brojeviBlenght = count($brojeviB);
  echo $brojeviBlenght;
  echo "<br>";
  for($y = 0; $y < $brojeviBlenght; $y++){
    $neparni = $brojeviB[$y];
    if ($brojeviB[$y] % 2 > 0){
        echo $brojeviB[$y]. " ," ;
    }
  }
  echo "<br>";

  //zadatak 3, niz od 15, ispisi vece od 55

  $brojeviB2 = array(5, 7, 11, 8, 16, 20,3, 9, 15, 13, 22, 30, 33, 84, 91);
  $brojeviB2lenght = count($brojeviB2);
  echo $brojeviB2lenght;
  echo "<br>";
  for($i = 0; $i < $brojeviB2lenght; $i++){
    $veci = $brojeviB2[$i];
    if ($veci > 55){
        echo $brojeviB2[$i]. " ,";
    }
  }
  echo "<br>";

//Zadatak 2, niz od 20, ispisi brojeve koji se zavrsavaju sa 1

//00106000532034152489

$brojeviB1 = array(5, 7, 11, 8, 16, 20,3, 9, 15, 13, 22, 30, 33, 84, 91, 55, 42, 64, 88, 99);
echo "<br>";
$brojeviB1lenght = count($brojeviB1);
echo $brojeviB1lenght;
echo "<br>";
var_dump ($brojeviB1);
echo "<br>";
for ($x = 0; $x < $brojeviB1lenght; $x++) {
  $pincode = $brojeviB1[$x];
  $str =(string) $pincode;
  $result = (int)$str[1];
  if($result == 1){
    echo $pincode. " ,";
  }
}
echo "<br>";
  
?>
  
</body>
</html>