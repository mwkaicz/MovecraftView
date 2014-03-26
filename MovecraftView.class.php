<?php
  require_once "MovecraftView_config.php";
  // custom files
  if (MV_CUSTOM_BLOCKS != "") include_once "MovecraftView_".MV_CUSTOM_BLOCKS.".php";
  if (MV_CUSTOM_LOCALIZATION != "") include_once "MovecraftView_localization_".MV_CUSTOM_LOCALIZATION.".php";
  //
  require_once "MovecraftView_constants.php";
  require_once "MovecraftView_Craft.class.php";
  require_once "MovecraftView_".MV_CUSTOM_TEMPLATE.".php";

  class MovecraftView extends MovecraftView_template{
    var $types = array();
    function __construct($path_to_MovecaftTypes = MV_MOVECRAFT_TYPES_PATH,$file_names=MV_ALLOWED_TYPES,$ignored = MV_IGNORED_TYPES){
      $this->$path_to_MovecaftTypes=$path_to_MovecaftTypes;
      $this->init($path_to_MovecaftTypes,$file_names,$ignored);      
    }
    
    private function init($folder=MV_MOVECRAFT_TYPES_PATH,$file_names,$ignore){
      if (!is_array($ignore)){
        $ignore = explode(",",$ignore);
      }
      if ($file_names=="*"){
        $dir = new RecursiveDirectoryIterator($folder,FilesystemIterator::SKIP_DOTS);
        $it  = new RecursiveIteratorIterator($dir, RecursiveIteratorIterator::SELF_FIRST);
        $it->setMaxDepth(0);
        foreach ($it as $fileinfo) {
          if ($fileinfo->isFile()) {
            if ($fileinfo->getExtension()=="craft"){
              $exists=false;
              for ($i = 0;$i < count($ignore);$i++){
                if ($ignore[$i]!=""){
                  if ($fileinfo->getFilename()==($ignore[$i].'.craft')){
                    $exists = true;
                    break; 
                  }
                }
              }
              if (!$exists){            
                $craft = new MovecraftView_Craft($folder.$fileinfo->getFilename());             
                $this->types[] = $craft;
              }            
            }                        
          }
        }
      }else{
        if (!is_array($file_names)){
          $file_names = explode(",",$file_names);
        }
        array_multisort($file_names,SORT_ASC);
        foreach ($file_names as $k => $f){
          $exists=false;
          for ($i = 0;$i < count($ignore);$i++){
            if (trim($f)==$ignore[$i]){
              $exists = true;
              break; 
            }
          }
          if (!$exists){
            $craft = new MovecraftView_Craft(MV_MOVECRAFT_TYPES_PATH.trim($f).".craft");
            $this->types[] = $craft;
          }
        }             
      }   
    }
    
    
    
    
    function getTypes(){
      return $this->types;
    }
    
    
    
    
    
    
    function getCraftByName($name){
      foreach ($this->types as $k => $type){
        if ($type->name==$name){
          return $type;
        }        
      }
      return null;
    }
    
    
        
  }
?>
