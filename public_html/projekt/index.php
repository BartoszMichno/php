<?php



// Włączone pełne raportowanie błędów
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);


// sprawdza istnienie
if(isset($_POST['login']) and isset($_POST['password'])){

      $login= $_POST['login'];
      $password=$_POST['password'];

      $login1='test';
      $password1='test';

      if($login == $login1 and $password == $password1){
         include('folder/login.php');
      }

      else{
         include('folder/error.php');
      }
}



else{
   include('folder/form.php');
}
