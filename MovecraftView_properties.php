<?php
  if (isset($_GET["craft_type"])){
    
    //adds
    if (isset($_GET["lang"])) {
      define ("MV_CUSTOM_LOCALIZATION",$_GET["lang"]);
    }else{
      define ("MV_CUSTOM_LOCALIZATION","");
    } 
    
    if (isset($_GET["custom"])) {
      define ("MV_CUSTOM_BLOCKS",$_GET["custom"]);
    }
    else{
      define ("MV_CUSTOM_BLOCKS","");
    }
    
    require_once("MovecraftView.class.php");
    require_once (MV_SPYC_FILE_PATH);
    $m = new MovecraftView(MV_MOVECRAFT_TYPES_PATH);
    $m->printSingleTableBody($_GET["craft_type"]);
    
  }
?>
