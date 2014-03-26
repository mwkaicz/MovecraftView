<?php
  require_once (MV_SPYC_FILE_PATH);

  class MovecraftView_Craft{
    // default values
    var $name = "";
    var $maxSize = "0";
    var $minSize = "0"; 
    var $speed = "0.0";
    var $tryNudge = false;
    var $canFly = false;
    var $canCruise = false;
    var $cruiseSkipBlocks = "0";
    var $canTeleport = false;
    var $canStaticMove = false;
    var $canHover = false;
    var $canHoverOverWater = false;
    var $useGravity = false;
    var $hoverLimit = "0";
    var $sinkPercent = "0.0";
    var $collisionExplosion = "0.0";
    var $fuelBurnRate = "0.0";
    var $minHeightLimit = "0";
    var $maxHeightLimit = 255;
    var $moveEntities = true;
    var $harvestBlocks = array();
    var $flyBlocks = array();
    var $allowedBlocks = array();
    var $forbiddenBlocks = array();    
    
    function __construct($file){
      $this->loadFromFile($file);
    }
                        
    function getStringByKey($key,$order = "asc"){
      $val = $this->getValueByKey($key);
      if (is_array( $val)){
        $tmp="";
        $o = false;
        
        if ($key != MV_KEY_FLY_BLOCKS){
         if (strtolower($order)=="asc"){          
            array_multisort($val,SORT_ASC);
          }else if(strtolower($order)=='desc'){
            array_multisort($val,SORT_DESC);
          }
        }
        
        foreach ($val as $kv => $v){
          if ($o){$tmp .= ", ";}else{$o=true;}
          
          if (is_array($v)){
            $val1[$kv] = "<b>".(function_exists("getBlockByKey")?getBlockByKey($kv):$kv).":</b> ".$v[0]." - ".$v[1]." %";
            $tmp .= $val1[$kv];
          }else{
            $val1[$kv] = (function_exists("getBlockByKey")?getBlockByKey($v):$v);
            $tmp .= $val1[$kv];
          }   
        }
        $val = $tmp;
      }else{
        if (is_bool($val)){
          if ($val){
            $val = MV_ALIAS_TRUE;
          }else{
            $val = MV_ALIAS_FALSE;
          }
        }
      }
      return $val;
    }
    
    function getValueByKey($key){
      if ($key == MV_KEY_NAME){
          return $this->name;
        }elseif($key ==MV_KEY_MIN_SIZE){
          return $this->minSize;
        }elseif($key ==MV_KEY_MAX_SIZE){
          return $this->maxSize;
        }elseif($key ==MV_KEY_SPEED){
          return $this->speed;
        }elseif($key ==MV_KEY_TRY_NUDGE){
          return $this->tryNudge;
        }elseif($key ==MV_KEY_CAN_FLY){
          return $this->canFly;
        }elseif($key ==MV_KEY_CAN_CRUISE){
          return $this->canCruise;
        }elseif($key ==MV_KEY_CRUISE_SKIP_BLOCKS){
          return $this->cruiseSkipBlocks;
        }elseif($key ==MV_KEY_CAN_TELEPORT){
          return $this->canTeleport;
        }elseif($key ==MV_KEY_CAN_STATIC_MOVE){
          return $this->canStaticMove; 
        }elseif($key ==MV_KEY_CAN_HOVER){
          return $this->canHover;
        }elseif($key ==MV_KEY_CAN_HOVER_OVER_WATER){
          return $this->canHoverOverWater;
        }elseif($key ==MV_KEY_USE_GRAVITY){
          return $this->useGravity;
        }elseif($key ==MV_KEY_HOVER_LIMIT){
          return $this->hoverLimit;
        }elseif($key ==MV_KEY_SINK_PERCENT){
          return $this->sinkPercent;
        }elseif($key ==MV_KEY_COLLISION_EXPLOSION){
          return $this->collisionExplosion;
        }elseif($key ==MV_KEY_FUEL_BURN_RATE){
          return $this->fuelBurnRate;
        }elseif($key ==MV_KEY_MIN_HEIGHT_LIMIT){ 
          return $this->minHeightLimit;
        }elseif($key ==MV_KEY_MAX_HEIGHT_LIMIT){
          return $this->maxHeightLimit;
        }elseif($key ==MV_KEY_MOVE_ENTITIES){
          return $this->moveEntities;
        }elseif($key ==MV_KEY_HARVEST_BLOCKS){
          return $this->harvestBlocks; 
        }elseif($key ==MV_KEY_FLY_BLOCKS){
          return $this->flyBlocks; 
        }elseif($key ==MV_KEY_ALLOWED_BLOCKS){
          return $this->allowedBlocks;
        }elseif($key ==MV_KEY_FORBIDDEN_BLOCKS){
          return $this->forbiddenBlocks;
        }else{
          return null;
      }   
    }
    
    
    function setStringByKey($key,$val){
      if ($key == MV_KEY_NAME){
        settype($val,"string");
      }elseif (
        $key == MV_KEY_CAN_FLY
        ||
        $key == MV_KEY_TRY_NUDGE
        ||
        $key == MV_KEY_CAN_CRUISE
        ||
        $key == MV_KEY_CAN_TELEPORT
        ||
        $key == MV_KEY_CAN_STATIC_MOVE
        ||
        $key == MV_KEY_CAN_HOVER
        ||
        $key == MV_KEY_USE_GRAVITY
        ||
        $key == MV_KEY_CAN_HOVER_OVER_WATER
        ||
        $key == MV_KEY_MOVE_ENTITIES              
      ){
        settype($val,"bool");
      }elseif (
        $key == MV_KEY_MAX_SIZE
        ||
        $key == MV_KEY_MIN_SIZE
        ||
        $key == MV_KEY_MIN_HEIGHT_LIMIT
        ||
        $key == MV_KEY_MAX_HEIGHT_LIMIT
        ||
        $key == MV_KEY_CRUISE_SKIP_BLOCKS
        ||
        $key == MV_KEY_HOVER_LIMIT
      ){
        settype($val,"int");              
      }elseif (
        $key == MV_KEY_SPEED
        ||
        $key == MV_KEY_SINK_PERCENT
        ||
        $key == MV_KEY_COLLISION_EXPLOSION
        ||
        $key == MV_KEY_FUEL_BURN_RATE      
      ){
        settype($val,"float");
      }elseif (
        $key == MV_KEY_HARVEST_BLOCKS && is_array($val)  
      ){
        foreach ($val as $k => $v){
          settype($v,"string");
        }
      }elseif (
        $key == MV_KEY_FLY_BLOCKS && is_array($val)
      ){
        foreach ($val as $k => $v){
          if (is_array ($v)){
            foreach ($v as $k1 => $v1){
              settype($v1,"float");
            }
          }
        }
      }elseif (
        (
          $key == MV_KEY_ALLOWED_BLOCKS
          ||
          $key == MV_KEY_FORBIDDEN_BLOCKS
        )
        &&
        is_array($val)
      ){      
        foreach ($val as $k => $v){
          settype($v,"string");  
        }
      }else{
        $val = null;
      }
     
      if($key == MV_KEY_NAME){
        $this->name = $val;
      }elseif($key == MV_KEY_MIN_SIZE){
        $this->minSize = $val;
      }elseif($key == MV_KEY_MAX_SIZE){
        $this->maxSize = $val;
      }elseif($key == MV_KEY_SPEED){
        $this->speed = $val;
      }elseif($key == MV_KEY_TRY_NUDGE){
        $this->tryNudge = $val;
      }elseif($key == MV_KEY_CAN_FLY){
        $this->canFly = $val;
      }elseif($key == MV_KEY_CAN_CRUISE){
        $this->canCruise = $val;
      }elseif($key == MV_KEY_CRUISE_SKIP_BLOCKS){
        $this->cruiseSkipBlocks = $val;
      }elseif($key == MV_KEY_CAN_TELEPORT){
        $this->canTeleport = $val;
      }elseif($key == MV_KEY_CAN_STATIC_MOVE){
        $this->canStaticMove = $val; 
      }elseif($key == MV_KEY_CAN_HOVER){
        $this->canHover = $val;
      }elseif($key == MV_KEY_CAN_HOVER_OVER_WATER){
        $this->canHoverOverWater = $val;
      }elseif($key == MV_KEY_USE_GRAVITY){
        $this->useGravity = $val;
      }elseif($key == MV_KEY_HOVER_LIMIT){
        $this->hoverLimit = $val;
      }elseif($key == MV_KEY_SINK_PERCENT){
        $this->sinkPercent = $val;
      }elseif($key == MV_KEY_COLLISION_EXPLOSION){
        $this->collisionExplosion = $val;
      }elseif($key == MV_KEY_FUEL_BURN_RATE){
        $this->fuelBurnRate = $val;
      }elseif($key == MV_KEY_MIN_HEIGHT_LIMIT){ 
        $this->minHeightLimit = $val;
      }elseif($key == MV_KEY_MAX_HEIGHT_LIMIT){
        $this->maxHeightLimit = $val;
      }elseif($key == MV_KEY_MOVE_ENTITIES){
        $this->moveEntities = $val;
      }elseif($key == MV_KEY_HARVEST_BLOCKS){
        $this->harvestBlocks = $val; 
      }elseif($key == MV_KEY_FLY_BLOCKS){
        $this->flyBlocks = $val; 
      }elseif($key == MV_KEY_ALLOWED_BLOCKS){
        $this->allowedBlocks = $val;
      }elseif($key == MV_KEY_FORBIDDEN_BLOCKS){
        $this->forbiddenBlocks = $val;
      }else{
        return null;
      }   
    }
    
    private function loadFromFile($file){   
      $path_info = pathinfo($file);
      $file=file_get_contents($file);
      if ($path_info["extension"]=="craft"){
        $array = Spyc::YAMLLoad($file);
        
        //$keys = unserialize (KEYS);
        $keys = unserialize (KEYS);
        foreach ($keys as $tmp => $key){
          foreach ($array as $key => $val){
            $this->setStringByKey($key,$val);
          }          
        }
      }      
    }
    
  } 
?>
