<?php

class Validator {

  // Pure method - tāpēc static
  public static function string($data, $min = 0, $max = INF) {
   $data = trim($data);

    return  is_string($data)
            && strlen($data) >= $min
            && strlen($data) <= $max;
  }
  
  public static function number($data, $min = 0, $max = INF) {
    $data = trim($data);
 
     return  is_numeric($data)
             && $data >= $min
             && $data <= $max;
   }

   public static function email($value) {
      return filter_var($value, FILTER_VALIDATE_EMAIL);
   }

   public static function password($password){
     $minLenght = 8;
     $maxLenght = 8;

     return strlen($password) >= $minLenght &&
      strlen($password) <= $minLenght &&
    

     

         preg_match('/[A-Z]/', $password)&&
         preg_match('/[a-z]/', $password)&&
         preg_match('/[^a-zA-Z0-9]/', $password)&&
         preg_match('/[0-9]/', $password);

   }
  }