<?php 
  if(!defined("MV_PATH")) define ("MV_PATH","MovecraftView/");                                                  // path to MovecraftView folder from root
  if(!defined("MV_MOVECRAFT_TYPES_PATH")) define ("MV_MOVECRAFT_TYPES_PATH", "path/to/your/movecraft/types/");  // path to your craft files
  if(!defined("MV_SPYC_FILE_PATH")) define ("MV_SPYC_FILE_PATH", __DIR__ ."path/to/your/spyc.php");             // path to spyc.php
  if(!defined("MV_ALLOWED_TYPES")) define ("MV_ALLOWED_TYPES","*");                                             // * = will try browse MV_MOVECRAFT_TYPES_PATH for all crafts, you can use also file names separeted by comma f.e: "car,ship" 
  if(!defined("MV_IGNORED_TYPES")) define ("MV_IGNORED_TYPES","wmd,bigboy");                                    // will ignore this crafts in lists
  if(!defined("MV_CUSTOM_TEMPLATE")) define ("MV_CUSTOM_TEMPLATE","template");                                  // default value = "template"
  if(!defined("MV_CUSTOM_LOCALIZATION")) define ("MV_CUSTOM_LOCALIZATION","custom");                            // default value = ""
  if(!defined("MV_CUSTOM_BLOCKS")) define ("MV_CUSTOM_BLOCKS","customBlocks");                                  // default value = ""
  
?>
