<?php
// Włączone pełne raportowanie błędów
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);


// sprawdza istnienie
if(isset($_GET['a']) and isset($_GET['b']) and isset($_GET['c'])){
   
   if(is_numeric($_GET['a']) and is_numeric($_GET['b']) and is_numeric($_GET['c'])){
      echo'oblicz delte';
   
   $a=$_GET['a'];
   $b=$_GET['b'];
   $c=$_GET['c'];
   $delta = $b * $b - 4 * $a * $c;

   if($delta>0){
      $x1= (-$b - sqrt($delta))/2*$a;
      $x2= (-$b + sqrt($delta))/2*$a;

      include('views/d-greater.php');
   }
   elseif($delta==0){
      $x= -$b / 2 * $a;
      include('views/d-equal.php');
   }
   else{
      include('views/d-less.php');
   }
}
else{
   include('views/error.php');
}
}



else{
   include('views/form.php');
}
