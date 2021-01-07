<?php


  namespace App\Traits;


  Trait PhotoTrait 
  {

    function savePhoto($photo = null, $path)
    {
      
      $file_extension =  $photo->getClientOriginalExtension();
      $file_name      = time().'.'.$file_extension;
      
      $photo->move($path, $file_name);
      return $file_name;
    }
  
  }

?>