<?php
  function getBlockByKey($key){
    /********************
   *
   *    EDIT BELOW
   *
   *******************/
    if ($key == '0'){                                   
    
    }elseif ($key == '7'){
        return 'Bedrock';
    }elseif ($key == '35'){
        return 'Wool';
              
      
      
    /*************************
     *
     *  END OF EDITABLE PART
     *
     *************************/                                       
        
    }else{
      if (substr_count($key,':')>0 || is_numeric($key)){
        return "<b>ID:</b> ".$key;            
      }else{
        return ucfirst(strtolower(str_replace('_', ' ', $key)));
      }
        
    }
  }
?>
