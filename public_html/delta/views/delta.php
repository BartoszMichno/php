<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
<h1>obliczanie delty</h1>
   <p>parametry równania:</p>
   <ul>
   <li><?php echo $a ?></li>
   <li><?php echo $b ?></li>
   <li><?php echo $c ?></li>
   </ul>
   
   <p>delta wynosi: <?php $delta?> </p>
   
   <?php
   if($delta>0){
      include('views/d-greater.php');
   }
   elseif($delta==0){
      include('views/d-equal.php');
   }
   else{
      include('views/d-less.php');
   }
   ?>
</body>
</html>