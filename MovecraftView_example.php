<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  
  <title>MovecraftView Example</title>
  </head>
  <body>
  
  <center>
    <h2>MovecraftView v1.0</h2><h3>PHP classes to view the properties of the <a href="http://dev.bukkit.org/bukkit-plugins/movecraft/" title="Bukkit-plugins: Movecraft" target="_blank">Movecraft</a> .craft files on the website</h3>
    <h4>
    Source code is published on <a href="https://github.com/mwkaicz/MovecraftView" title="github.com/mwkaicz/MovecraftView" target="_blank">https://github.com/mwkaicz/MovecraftView</a> and it's free for use under terms of GNU GPLv2.<br/>
    Tickets and issues: <a href="https://github.com/mwkaicz/MovecraftView/issues" title="Issues" target="_blank">https://github.com/mwkaicz/MovecraftView/issues</a><br/>
    A working example: <a href="http://www.craftman.cz/minecraft/MovecraftView/" title="Example" target="_blank">http://www.craftman.cz/minecraft/MovecraftView</a><br/>  
    Created especially for <a href="http://craftman.cz" title="CRAFTMAN.CZ" target="_blank">CRAFTMAN.CZ</a><br/>
    Author: mwkaicz (ↄ) 2014<br/>
    </h4>
  </center>
  
   <?php
    $lang = "";
    if (isset($_GET["lang"])) {$lang = $_GET["lang"];}
     
    $view_type = "details";
    if (isset($_GET["horizontal"])){
      $view_type = "horizontal"; 
    }else if(isset($_GET["vertical"])){
      $view_type = "vertical";
    }
    
    $custom_blocks = "";
    if (isset($_GET["custom"])) {$custom_blocks = "customBlocks";} 
  ?>
  <table width="100%" style="background-color:#eeeeee;padding:0;margin:0;"><tr><th>
  <b>View examples: </b>
  </th><td> 
  <a href="?horizontal<?php echo ($lang!=""?"&lang=".$lang:"").($custom_blocks!=""?"&custom=".$custom_blocks:""); ?>" <?php if ($view_type=="horizontal") {echo "style=\"background-color:lightgrey;\"";} ?>>Horizontal example</a>
  <a href="?vertical<?php echo ($lang!=""?"&lang=".$lang:"").($custom_blocks!=""?"&custom=".$custom_blocks:""); ?>" <?php if ($view_type=="vertical") {echo "style=\"background-color:lightgrey;\"";} ?>>Vertical example</a>
  <a href="?details<?php echo ($lang!=""?"&lang=".$lang:"").($custom_blocks!=""?"&custom=".$custom_blocks:""); ?>" <?php if ($view_type=="details" || $view_type=="") {echo "style=\"background-color:lightgrey;\"";} ?>>Details example</a>
  </td><th>
  <b>Language: </b>
  </th><td>
  <a href="?<?php echo $view_type.($custom_blocks!=""?"&custom=".$custom_blocks:""); ?>&lang=cz" <?php if ($lang=="cz") {echo "style=\"background-color:lightgrey;\"";} ?>>CZ</a> /
  <a href="?<?php echo $view_type.($custom_blocks!=""?"&custom=".$custom_blocks:""); ?>&lang=" <?php if ($lang=="") {echo "style=\"background-color:lightgrey;\"";} ?>>EN</a> /
  <a href="?<?php echo $view_type.($custom_blocks!=""?"&custom=".$custom_blocks:""); ?>&lang=custom" <?php if ($lang=="custom") {echo "style=\"background-color:lightgrey;\"";} ?>>custom</a>
  </td><th>
  <b>Blocks: </b>
  </th><td>
  <a href="?<?php echo $view_type.($lang!=""?"&lang=".$lang:""); ?>" <?php if ($custom_blocks=="") {echo "style=\"background-color:lightgrey;\"";}?>>default values</a> /
  <a href="?<?php echo $view_type.($lang!=""?"&lang=".$lang:""); ?>&custom=customBlocks" <?php if ($custom_blocks=="customBlocks") {echo "style=\"background-color:lightgrey;\"";} ?>>customizable blocks</a>
  </td>
  </tr>
  </table>  
  <br/>
  
  <?php
    define ("MV_CUSTOM_LOCALIZATION",$lang);
    define ("MV_CUSTOM_BLOCKS",$custom_blocks);
    
    require_once("MovecraftView.class.php");
    
    /**
     * class MovecraftView
     *
     * @param path_to_MovecaftTypes = MV_MOVECRAFT_TYPES_PATH   - path to Movecraft/types folder
     * @param file_names = MV_ALLOWED_TYPES                     - types allowed to show
     * @param ignored = MV_IGNORED_TYPES                        - ignored types 
     *
     */                                  
    $m = new MovecraftView(); 
    
    
    /**
     * function printHorizontalTable
     *
     * @param types = "*"             - list of types (array or string with ',' as separator)
     * @param properties = "*"        - list of properties (array or string with ',' as separator)
     * @param ignore_prop = ""        - list of ignored properties (array or string with ',' as separator)
     * @param array_to_combo = false  - convert arrays to drop-down list of options
     *
     */                  
    if ($view_type == "horizontal" ) $m->printHorizontalTable('*','*','',true);
    
    /**
     * function printVerticalTable
     *
     * @param  types = "*"             - list of types (array or string with ',' as separator)
     * @param  properties = "*"        - list of properties (array or string with ',' as separator)
     * @param  ignore_prop = ""        - list of ignored properties (array or string with ',' as separator)
     * @param  array_to_combo = false  - convert arrays to drop-down list of options*
     */ 
    if ($view_type ==  "vertical") $m->printVerticalTable('*','*','',true); 
    
    /**
     * function printSingleFullTable
     *
     * @param type  - type name of the craft
     *
     */
    if ($view_type == "details") $m->printSingleFullTable($m->types[0]->name);
         
  ?>
    
  </body>
</html>
