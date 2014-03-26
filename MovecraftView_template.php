<?php
  class MovecraftView_template{
    function printVerticalTable( $types="*",$properties="*",$ignore_prop="", $array_to_combo=false){
      if (!is_array($types)){
        if ($types == "*"){
          $types = $this->types;
        }else{
          return;
        } 
      }else{
        if (count($types) > 0){
          if (!is_object($types[0])){
            $tmp=$types;
            $types=array();
            foreach ($tmp as $key => $type){
              $types[] = getCraftByName($type);              
            }
          }
        }else{
          return;
        }
      }
      
      if (!is_array($properties)){
        if ($properties == "*"){
          $properties = unserialize(KEYS);
        }else{
          if (substr_count($properties,"{")>0){
            $properties = unserialize($properties);
          }
        } 
      }
      
      if (!is_array($ignore_prop)){
        $ignore_prop = explode(",",$ignore_prop); 
      }
        
      echo "
      <style>
      th {
        white-space:nowrap;
        text-align:right;
      }
      </style>
      ";
      echo "<table><tbody>";
      
      foreach ($properties as $k => $key){
        $exists = false;
        for ($i = 0; $i < count($ignore_prop); $i ++){
          if ($key == trim($ignore_prop[$i])){
            $exists = true;
          }  
        }
        
        
        if (!$exists){
          echo "<tr>".PHP_EOL;
          echo "<th title='".getTitleByKey($key)."'>".getHeadByKey($key)."</th>".PHP_EOL;
          foreach ($types as $a => $craft){
            $to_combo = false;
            if ($array_to_combo){
              if ($key == MV_KEY_HARVEST_BLOCKS || $key == MV_KEY_FLY_BLOCKS || $key == MV_KEY_ALLOWED_BLOCKS || $key == MV_KEY_FORBIDDEN_BLOCKS){
                $to_combo = true;
              }
            }
            
            $val = $craft->getStringByKey($key);
            if ($to_combo){
              if ($val != ""){
                $vals = explode (", ",$val);
              }else{
                $vals = array();
              }
              echo "<td title='".getTitleByKey($key)."'>".PHP_EOL;
                if (count($vals)>0){
                  echo "<select title='".getTitleByKey($key)."'>";
                    echo "<option title=' ' value=' ' selected='selected'>".MV_TITLE_VIEW_LIST."</option>";
                  foreach ($vals as $k => $v){
                    echo "<option title='".$v."' value='".$v."'>".$v."</option>";             
                  }
                  echo "</select>";
                }       
              echo "</td>".PHP_EOL; 
            }else{
              echo "<td title='".getTitleByKey($key)."'>".$val."</td>".PHP_EOL;
            }
          }
          echo "</tr>".PHP_EOL;
        }
      }
      
      echo "</tbody></table>";      
      
      
    }
    
    function printHorizontalTable( $types="*",$properties="*", $ignore_prop="",$array_to_combo=false){
      if (!is_array($types)){
        if ($types == "*"){
          $types = $this->types;
          
        }else{
          return;
        } 
      }else{
        if (count($types) > 0){
          if (!is_object($types[0])){
            $tmp=$types;
            $types=array();
            foreach ($tmp as $key => $type){
              $types[] = getCraftByName($type);              
            }
          }
        }else{
          return;
        }
      }
      
      if (!is_array($properties)){
        if ($properties == "*"){
          $properties = unserialize(KEYS);
        }else{
          if (substr_count($properties,"{")>0){
            $properties = unserialize($properties);
          }
        } 
      }
      
      if (!is_array($ignore_prop)){
        $ignore_prop = explode(",",$ignore_prop); 
      }
      
      echo "
      <style>
      </style>
      <table><thead><tr>".PHP_EOL;
      
      foreach ($properties as $k => $key){
        $exists = false;
        for ($i = 0; $i < count($ignore_prop); $i ++){
          if ($key == trim($ignore_prop[$i])){
            $exists = true;
          }  
        }
        if (!$exists){
          echo "<th title='".getTitleByKey($key)."'>".getHeadByKey($key)."</th>".PHP_EOL;
        }
      }
      
      echo "</tr></thead><tbody>".PHP_EOL;
      
      foreach ($types as $a => $craft){
        echo "<tr>";
        foreach ($properties as $k => $key){
          $exists = false;
          for ($i = 0; $i < count($ignore_prop); $i ++){
            if ($key == trim($ignore_prop[$i])){
              $exists = true;
            }  
          }
          if (!$exists){
            $to_combo = false;
            if ($array_to_combo){
              if ($key == MV_KEY_HARVEST_BLOCKS || $key == MV_KEY_FLY_BLOCKS || $key == MV_KEY_ALLOWED_BLOCKS || $key == MV_KEY_FORBIDDEN_BLOCKS){
                $to_combo = true;
              }
            }
            
            $val = $craft->getStringByKey($key);  
            if ($to_combo){
              if ($val != ""){
                $vals = explode (", ",$val);
              }else{
                $vals = array();
              }
              echo "<td title='".getTitleByKey($key)."'>".PHP_EOL;
                if (count ($vals)>0){
                  echo "<select title='".getTitleByKey($key)."'>";
                  echo "<option title=' ' value=' ' selected='selected'>".MV_TITLE_VIEW_LIST."</option>";
                  foreach ($vals as $k => $v){
                    echo "<option title='".$v."' value='".$v."'>".$v."</option>";             
                  }
                  echo "</select>";
                }       
              echo "</td>".PHP_EOL; 
            }else{
              echo "<td title='".getTitleByKey($key)."'>".$val."</td>".PHP_EOL;
            }
          }
        }
        echo "</tr>";
      }
      echo "</tbody></table>";  
    }
    
    function printSingleFullTable($craft_name){
      $this->printSingleTableHeader($craft_name);
      $this->printSingleTableBody($craft_name);
      echo "</tbody></table>";
    }
    
    function printSingleTableHeader( $craft_name,$types="*",$lang = MV_CUSTOM_LOCALIZATION, $custom_blocks = MV_CUSTOM_BLOCKS){
      if (!is_array($types)){
        if ($types == "*"){
          $types = $this->types;
          
        }else{
          return;
        } 
      }else{
        if (count($types) > 0){
          if (!is_object($types[0])){
            $tmp=$types;
            $types=array();
            foreach ($tmp as $key => $type){
              $types[] = getCraftByName($type);              
            }
          }
        }else{
          return;
        }
      }
      
      $craft = $this->getCraftByName($craft_name);
      echo "<table>";
      echo "<thead><tr>";                                          
        echo "<th title='".MV_TITLE_NAME."'>".MV_LABEL_NAME."</th>";
        echo "<th align='left' colspan='9' title='".MV_TITLE_NAME."'>";
        
        $adds= "";
        if ($lang!="") {$adds .= "&lang=".$lang;} 
        if ($custom_blocks!="") {$adds .= "&custom=".$custom_blocks;}
        
          echo "<select id='MovecraftViewSelect' title='".MV_TITLE_NAME."' onchange='
          $(\"#MovecraftView\").load(\"".MV_PATH."MovecraftView_properties.php?craft_type=\"+$(\"#MovecraftViewSelect option:selected\").html()+\"".$adds."\");' >";
          foreach ($types as $k => $type){
            echo "<option".($type->name == $craft->name ? " selected='selected' " : "")." title='".MV_TITLE_NAME." ".$type->getStringByKey(MV_KEY_NAME)."' value='".$type->getStringByKey(MV_KEY_NAME)."'>".$type->getStringByKey(MV_KEY_NAME)."</option>";             
          }
          echo "</select>";     
        
      echo "  </th>";
      echo "</tr><tr>";  
        echo "<td colspan='10'><br/></td>";
      echo "</tr></thead><tbody id='MovecraftView'>";
    }
    
    function printSingleTableBody($craft_name){
        $craft = $this->getCraftByName($craft_name);
        echo "<tr>";
          echo "<th title='".MV_TITLE_MIN_SIZE."'>".MV_LABEL_MIN_SIZE."</th>";
          echo "<th title='".MV_TITLE_MAX_SIZE."'>".MV_LABEL_MAX_SIZE."</th>";
          echo "<th title='".MV_TITLE_SPEED."'>".MV_LABEL_SPEED."</th>";
          echo "<th title='".MV_TITLE_CRUISE_SPEED."'>".MV_LABEL_CRUISE_SPEED."</th>";
          echo "<th title='".MV_TITLE_CRUISE_SKIP_BLOCKS."'>".MV_LABEL_CRUISE_SKIP_BLOCKS."</th>";
          echo "<th title='".MV_TITLE_HOVER_LIMIT."'>".MV_LABEL_HOVER_LIMIT."</th>";
          echo "<th title='".MV_TITLE_SINK_PERCENT."'>".MV_LABEL_SINK_PERCENT."</th>";
          echo "<th title='".MV_TITLE_COLLISION_EXPLOSION."'>".MV_LABEL_COLLISION_EXPLOSION."</th>";
          echo "<th title='".MV_TITLE_MIN_HEIGHT_LIMIT."'>".MV_LABEL_MIN_HEIGHT_LIMIT."</th>";
          echo "<th title='".MV_TITLE_MAX_HEIGHT_LIMIT."'>".MV_LABEL_MAX_HEIGHT_LIMIT."</th>";
        echo "</tr><tr>";
          echo "<td align='right' title='".MV_TITLE_MIN_SIZE."'>".$craft->getStringByKey(MV_KEY_MIN_SIZE)."</td>";
          echo "<td align='right' title='".MV_TITLE_MAX_SIZE."'>".$craft->getStringByKey(MV_KEY_MAX_SIZE)."</td>";
          echo "<td align='right' title='".MV_TITLE_SPEED."'>".$craft->getStringByKey(MV_KEY_SPEED)."</td>";
          echo "<td align='right' title='".MV_TITLE_CRUISE_SPEED."'>".($craft->getStringByKey(MV_KEY_CRUISE_SKIP_BLOCKS)*$craft->getStringByKey(MV_KEY_SPEED))."</td>";
          echo "<td align='right' title='".MV_TITLE_CRUISE_SKIP_BLOCKS."'>".$craft->getStringByKey(MV_KEY_CRUISE_SKIP_BLOCKS)."</td>";
          echo "<td align='right' title='".MV_TITLE_HOVER_LIMIT."'>".$craft->getStringByKey(MV_KEY_HOVER_LIMIT)."</td>";
          echo "<td align='right' title='".MV_TITLE_SINK_PERCENT."'>".$craft->getStringByKey(MV_KEY_SINK_PERCENT)."</td>";
          echo "<td align='right' title='".MV_TITLE_COLLISION_EXPLOSION."'>".$craft->getStringByKey(MV_KEY_COLLISION_EXPLOSION)."</td>";
          echo "<td align='right' title='".MV_TITLE_MIN_HEIGHT_LIMIT."'>".$craft->getStringByKey(MV_KEY_MIN_HEIGHT_LIMIT)."</td>";
          echo "<td align='right' title='".MV_TITLE_MAX_HEIGHT_LIMIT."'>".$craft->getStringByKey(MV_KEY_MAX_HEIGHT_LIMIT)."</td>";
        echo "</tr><tr>";  
          echo "<td colspan='10'><br/></td>";
        echo "</tr><tr>";
          echo "<th title='".MV_TITLE_FUEL_BURN_RATE."'>".MV_LABEL_FUEL_BURN_RATE."</th>";
          echo "<th title='".MV_TITLE_TRY_NUDGE."'>".MV_LABEL_TRY_NUDGE."</th>";
          echo "<th title='".MV_TITLE_CAN_FLY."'>".MV_LABEL_CAN_FLY."</th>";
          echo "<th title='".MV_TITLE_CAN_CRUISE."'>".MV_LABEL_CAN_CRUISE."</th>";
          echo "<th title='".MV_TITLE_CAN_TELEPORT."'>".MV_LABEL_CAN_TELEPORT."</th>";
          echo "<th title='".MV_TITLE_CAN_STATIC_MOVE."'>".MV_LABEL_CAN_STATIC_MOVE."</th>";
          echo "<th title='".MV_TITLE_CAN_HOVER."'>".MV_LABEL_CAN_HOVER."</th>";
          echo "<th title='".MV_TITLE_CAN_HOVER_OVER_WATER."'>".MV_LABEL_CAN_HOVER_OVER_WATER."</th>";
          echo "<th title='".MV_TITLE_USE_GRAVITY."'>".MV_LABEL_USE_GRAVITY."</th>";
          echo "<th title='".MV_TITLE_MOVE_ENTITIES."'>".MV_LABEL_MOVE_ENTITIES."</th>";
          //echo "<th></th>";
        echo "</tr><tr>";
          echo "<td align='right' title='".MV_TITLE_FUEL_BURN_RATE."'>".$craft->getStringByKey(MV_KEY_FUEL_BURN_RATE)."</td>";
          echo "<td align='center' title='".MV_TITLE_TRY_NUDGE."'>".$craft->getStringByKey(MV_KEY_TRY_NUDGE)."</td>";
          echo "<td align='center' title='".MV_TITLE_CAN_FLY."'>".$craft->getStringByKey(MV_KEY_CAN_FLY)."</td>";
          echo "<td align='center' title='".MV_TITLE_CAN_CRUISE."'>".$craft->getStringByKey(MV_KEY_CAN_CRUISE)."</td>";
          echo "<td align='center' title='".MV_TITLE_CAN_TELEPORT."'>".$craft->getStringByKey(MV_KEY_CAN_TELEPORT)."</td>";
          echo "<td align='center' title='".MV_TITLE_CAN_STATIC_MOVE."'>".$craft->getStringByKey(MV_KEY_CAN_STATIC_MOVE)."</td>";
          echo "<td align='center' title='".MV_TITLE_CAN_HOVER."'>".$craft->getStringByKey(MV_KEY_CAN_HOVER)."</td>";
          echo "<td align='center' title='".MV_TITLE_CAN_HOVER_OVER_WATER."'>".$craft->getStringByKey(MV_KEY_CAN_HOVER_OVER_WATER)."</td>";
          echo "<td align='center' title='".MV_TITLE_USE_GRAVITY."'>".$craft->getStringByKey(MV_KEY_USE_GRAVITY)."</td>";
          echo "<td align='center' title='".MV_TITLE_MOVE_ENTITIES."'>".$craft->getStringByKey(MV_KEY_MOVE_ENTITIES)."</td>";
          //echo "<td></td>";
        echo "</tr><tr>";
          echo "<td colspan='10'><br/></td>";
        echo "</tr><tr>";
          echo "<th valign='top' align='right' title='".MV_TITLE_FLY_BLOCKS."'>".MV_LABEL_FLY_BLOCKS."</th>";
          echo "<td colspan='9' title='".MV_TITLE_FLY_BLOCKS."'>".$craft->getStringByKey(MV_KEY_FLY_BLOCKS)."</td>";
        echo "</tr><tr>";
          echo "<th valign='top' align='right' title='".MV_TITLE_ALLOWED_BLOCKS."'>".MV_LABEL_ALLOWED_BLOCKS."</th>";
          echo "<td colspan='9' title='".MV_TITLE_ALLOWED_BLOCKS."'>".$craft->getStringByKey(MV_KEY_ALLOWED_BLOCKS)."</td>";
        echo "</tr><tr>";
          echo "<th valign='top' align='right' title='".MV_TITLE_FORBIDDEN_BLOCKS."'>".MV_LABEL_FORBIDDEN_BLOCKS."</th>";
          echo "<td colspan='9' title='".MV_TITLE_FORBIDDEN_BLOCKS."'>".$craft->getStringByKey(MV_KEY_FORBIDDEN_BLOCKS)."</td>";
        echo "</tr><tr>";        
          echo "<th valign='top' align='right' title='".MV_TITLE_HARVEST_BLOCKS."'>".MV_LABEL_HARVEST_BLOCKS."</th>";
          echo "<td colspan='9' title='".MV_TITLE_HARVEST_BLOCKS."'>".$craft->getStringByKey(MV_KEY_HARVEST_BLOCKS)."</td>";
        echo "</tr>";
        
      }
    }
?>
