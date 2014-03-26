<?php
  //constants
  
  define ('MV_KEY_NAME','name');
  define ('MV_KEY_MIN_SIZE','minSize');
  define ('MV_KEY_MAX_SIZE','maxSize');
  define ('MV_KEY_SPEED','speed');
  define ('MV_KEY_TRY_NUDGE','tryNudge');
  define ('MV_KEY_CAN_FLY','canFly');
  define ('MV_KEY_CAN_CRUISE','canCruise');
  define ('MV_KEY_CRUISE_SKIP_BLOCKS','cruiseSkipBlocks');
  define ('MV_KEY_CAN_TELEPORT','canTeleport');
  define ('MV_KEY_CAN_STATIC_MOVE','canStaticMove');
  define ('MV_KEY_CAN_HOVER','canHover');
  define ('MV_KEY_CAN_HOVER_OVER_WATER','canHoverOverWater');
  define ('MV_KEY_USE_GRAVITY','useGravity');
  define ('MV_KEY_HOVER_LIMIT','hoverLimit');
  define ('MV_KEY_SINK_PERCENT','sinkPercent');
  define ('MV_KEY_COLLISION_EXPLOSION','collisionExplosion'); 
  define ('MV_KEY_FUEL_BURN_RATE','fuelBurnRate');
  define ('MV_KEY_MIN_HEIGHT_LIMIT','minHeightLimit');
  define ('MV_KEY_MAX_HEIGHT_LIMIT','maxHeightLimit');
  define ('MV_KEY_MOVE_ENTITIES','moveEntities');
  define ('MV_KEY_HARVEST_BLOCKS','harvestBlocks');
  define ('MV_KEY_FLY_BLOCKS','flyblocks');
  define ('MV_KEY_ALLOWED_BLOCKS','allowedBlocks');
  define ('MV_KEY_FORBIDDEN_BLOCKS','forbiddenBlocks');
  
  
  define (
    "KEYS", serialize (
      array (
        MV_KEY_NAME, MV_KEY_MIN_SIZE, MV_KEY_MAX_SIZE, MV_KEY_SPEED, MV_KEY_TRY_NUDGE, MV_KEY_CAN_FLY,
        MV_KEY_CAN_CRUISE, MV_KEY_CRUISE_SKIP_BLOCKS, MV_KEY_CAN_TELEPORT, MV_KEY_CAN_STATIC_MOVE, 
        MV_KEY_CAN_HOVER, MV_KEY_CAN_HOVER_OVER_WATER, MV_KEY_USE_GRAVITY, MV_KEY_HOVER_LIMIT, 
        MV_KEY_SINK_PERCENT, MV_KEY_COLLISION_EXPLOSION,MV_KEY_FUEL_BURN_RATE, MV_KEY_MIN_HEIGHT_LIMIT, 
        MV_KEY_MAX_HEIGHT_LIMIT, MV_KEY_MOVE_ENTITIES, MV_KEY_HARVEST_BLOCKS, 
        MV_KEY_FLY_BLOCKS, MV_KEY_ALLOWED_BLOCKS, MV_KEY_FORBIDDEN_BLOCKS  
      )
    )
  );

  
  //custom value aliases
  if (!defined('MV_ALIAS_TRUE')) define ('MV_ALIAS_TRUE','true');
  if (!defined('MV_ALIAS_FALSE')) define ('MV_ALIAS_FALSE','false');
  
  
  //custom labels 
  if (!defined('MV_LABEL_NAME')) define ('MV_LABEL_NAME','Type:');
  if (!defined('MV_LABEL_MIN_SIZE')) define ('MV_LABEL_MIN_SIZE','Min. size:');
  if (!defined('MV_LABEL_MAX_SIZE')) define ('MV_LABEL_MAX_SIZE','Max. size:');
  if (!defined('MV_LABEL_SPEED')) define ('MV_LABEL_SPEED','Speed:');
  if (!defined('MV_LABEL_TRY_NUDGE')) define ('MV_LABEL_TRY_NUDGE','Nudge:');
  if (!defined('MV_LABEL_CAN_FLY')) define ('MV_LABEL_CAN_FLY','Can Fly:');
  if (!defined('MV_LABEL_CAN_CRUISE')) define ('MV_LABEL_CAN_CRUISE','Can cruise:');
  if (!defined('MV_LABEL_CRUISE_SKIP_BLOCKS')) define ('MV_LABEL_CRUISE_SKIP_BLOCKS','Cruise skip blocks:');
  if (!defined('MV_LABEL_CRUISE_SPEED')) define ('MV_LABEL_CRUISE_SPEED','Cruise speed:');
  if (!defined('MV_LABEL_CAN_TELEPORT')) define ('MV_LABEL_CAN_TELEPORT','Can teleport:');
  if (!defined('MV_LABEL_CAN_STATIC_MOVE')) define ('MV_LABEL_CAN_STATIC_MOVE','Can static move:');
  if (!defined('MV_LABEL_CAN_HOVER')) define ('MV_LABEL_CAN_HOVER','Can hover:');
  if (!defined('MV_LABEL_CAN_HOVER_OVER_WATER')) define ('MV_LABEL_CAN_HOVER_OVER_WATER','Can hover over water:');
  if (!defined('MV_LABEL_USE_GRAVITY')) define ('MV_LABEL_USE_GRAVITY','Using gravity:');
  if (!defined('MV_LABEL_HOVER_LIMIT')) define ('MV_LABEL_HOVER_LIMIT','Hover limit:');
  if (!defined('MV_LABEL_SINK_PERCENT')) define ('MV_LABEL_SINK_PERCENT','Sink percent:');
  if (!defined('MV_LABEL_COLLISION_EXPLOSION')) define ('MV_LABEL_COLLISION_EXPLOSION','Collision explosion:'); 
  if (!defined('MV_LABEL_FUEL_BURN_RATE')) define ('MV_LABEL_FUEL_BURN_RATE','Fuel burn rate:');
  if (!defined('MV_LABEL_MIN_HEIGHT_LIMIT')) define ('MV_LABEL_MIN_HEIGHT_LIMIT','Min. height limit:');
  if (!defined('MV_LABEL_MAX_HEIGHT_LIMIT')) define ('MV_LABEL_MAX_HEIGHT_LIMIT','Max. height limit:');
  if (!defined('MV_LABEL_MOVE_ENTITIES')) define ('MV_LABEL_MOVE_ENTITIES','Can move with entities:');
  if (!defined('MV_LABEL_HARVEST_BLOCKS')) define ('MV_LABEL_HARVEST_BLOCKS','Harvesting blocks:');
  if (!defined('MV_LABEL_FLY_BLOCKS')) define ('MV_LABEL_FLY_BLOCKS','Fly blocks:');
  if (!defined('MV_LABEL_ALLOWED_BLOCKS')) define ('MV_LABEL_ALLOWED_BLOCKS','Allowed blocks:');
  if (!defined('MV_LABEL_FORBIDDEN_BLOCKS')) define ('MV_LABEL_FORBIDDEN_BLOCKS','Forbidden blocks:');
  
  //custom tips
  if (!defined('MV_TITLE_NAME')) define ('MV_TITLE_NAME','Type/Name of the craft');
  if (!defined('MV_TITLE_MIN_SIZE')) define ('MV_TITLE_MIN_SIZE','Minimal size of the craft');
  if (!defined('MV_TITLE_MAX_SIZE')) define ('MV_TITLE_MAX_SIZE','Maximal size of the craft');
  if (!defined('MV_TITLE_SPEED')) define ('MV_TITLE_SPEED','Maximal speed while holding right mouse button (not cruise)');
  if (!defined('MV_TITLE_TRY_NUDGE')) define ('MV_TITLE_TRY_NUDGE','Try nudge');
  if (!defined('MV_TITLE_CAN_FLY')) define ('MV_TITLE_CAN_FLY','Not waterborn craft (water is detected as barrier');
  if (!defined('MV_TITLE_CAN_CRUISE')) define ('MV_TITLE_CAN_CRUISE','Can use cruise');
  if (!defined('MV_TITLE_CRUISE_SKIP_BLOCKS')) define ('MV_TITLE_CRUISE_SKIP_BLOCKS','Count of skiped blocks each move with cruise');
  if (!defined('MV_TITLE_CRUISE_SPEED')) define ('MV_TITLE_CRUISE_SPEED','cruiseSpeed = Speed * cruiseSkipBlocks');
  if (!defined('MV_TITLE_CAN_TELEPORT')) define ('MV_TITLE_CAN_TELEPORT','Craft can teleport to any location on the map');
  if (!defined('MV_TITLE_CAN_STATIC_MOVE')) define ('MV_TITLE_CAN_STATIC_MOVE','Craft can move statically by clicking on sign Move');
  if (!defined('MV_TITLE_CAN_HOVER')) define ('MV_TITLE_CAN_HOVER','Craft can hover over terrain');
  if (!defined('MV_TITLE_CAN_HOVER_OVER_WATER')) define ('MV_TITLE_CAN_HOVER_OVER_WATER','Craft can fully hover over water');
  if (!defined('MV_TITLE_USE_GRAVITY')) define ('MV_TITLE_USE_GRAVITY','Craft goes one block bellow per each move if it is possible.');
  if (!defined('MV_TITLE_HOVER_LIMIT')) define ('MV_TITLE_HOVER_LIMIT','Limit for hovering and effect of gravity');
  if (!defined('MV_TITLE_SINK_PERCENT')) define ('MV_TITLE_SINK_PERCENT','Percents of its required flyblocks when still can move');
  if (!defined('MV_TITLE_COLLISION_EXPLOSION')) define ('MV_TITLE_COLLISION_EXPLOSION','Power of collision explosion.'); 
  if (!defined('MV_TITLE_FUEL_BURN_RATE')) define ('MV_TITLE_FUEL_BURN_RATE','Fuel burn rate.');
  if (!defined('MV_TITLE_MIN_HEIGHT_LIMIT')) define ('MV_TITLE_MIN_HEIGHT_LIMIT','Minimal height limit for the craft.');
  if (!defined('MV_TITLE_MAX_HEIGHT_LIMIT')) define ('MV_TITLE_MAX_HEIGHT_LIMIT','Maximal height limit for the craft.');
  if (!defined('MV_TITLE_MOVE_ENTITIES')) define ('MV_TITLE_MOVE_ENTITIES','Preventing kamikaze.');
  if (!defined('MV_TITLE_HARVEST_BLOCKS')) define ('MV_TITLE_HARVEST_BLOCKS','Block which will be destroyed when craft moves on their possition');
  if (!defined('MV_TITLE_FLY_BLOCKS')) define ('MV_TITLE_FLY_BLOCKS','Blocks necessary to fly/move');
  if (!defined('MV_TITLE_ALLOWED_BLOCKS')) define ('MV_TITLE_ALLOWED_BLOCKS','List of allowed blocks.');
  if (!defined('MV_TITLE_FORBIDDEN_BLOCKS')) define ('MV_TITLE_FORBIDDEN_BLOCKS','List of forbidden blocks.Craft can not be activated while is connected to them.');
  
  if (!defined('MV_TITLE_VIEW_LIST')) define ("MV_TITLE_VIEW_LIST"," - view list - ");
  
  function getHeadByKey($key){
      switch ($key){
        case MV_KEY_NAME:
          return MV_LABEL_NAME;
        case MV_KEY_MIN_SIZE:
          return MV_LABEL_MIN_SIZE;
        case MV_KEY_MAX_SIZE:
          return MV_LABEL_MAX_SIZE;
        case MV_KEY_SPEED:
          return MV_LABEL_SPEED;
        case MV_KEY_TRY_NUDGE:
          return MV_LABEL_TRY_NUDGE;
        case MV_KEY_CAN_FLY:
          return MV_LABEL_CAN_FLY;
        case MV_KEY_CAN_CRUISE:
          return MV_LABEL_CAN_CRUISE;
        case MV_KEY_CRUISE_SKIP_BLOCKS:
          return MV_LABEL_CRUISE_SKIP_BLOCKS;
        case MV_KEY_CAN_TELEPORT:
          return MV_LABEL_CAN_TELEPORT;
        case MV_KEY_CAN_STATIC_MOVE:
            return MV_LABEL_CAN_STATIC_MOVE; 
        case MV_KEY_CAN_HOVER:
          return MV_LABEL_CAN_HOVER;
        case MV_KEY_CAN_HOVER_OVER_WATER:
          return MV_LABEL_CAN_HOVER_OVER_WATER;
        case MV_KEY_USE_GRAVITY:
          return MV_LABEL_USE_GRAVITY;
        case MV_KEY_HOVER_LIMIT:
          return MV_LABEL_HOVER_LIMIT;
        case MV_KEY_SINK_PERCENT:
          return MV_LABEL_SINK_PERCENT;
        case MV_KEY_COLLISION_EXPLOSION:
          return MV_LABEL_COLLISION_EXPLOSION;
        case MV_KEY_FUEL_BURN_RATE:
          return MV_LABEL_FUEL_BURN_RATE;
        case MV_KEY_MIN_HEIGHT_LIMIT: 
          return MV_LABEL_MIN_HEIGHT_LIMIT;
        case MV_KEY_MAX_HEIGHT_LIMIT:
          return MV_LABEL_MAX_HEIGHT_LIMIT;
        case MV_KEY_MOVE_ENTITIES:
          return MV_LABEL_MOVE_ENTITIES;
        case MV_KEY_HARVEST_BLOCKS:
          return MV_LABEL_HARVEST_BLOCKS; 
        case MV_KEY_FLY_BLOCKS:
          return MV_LABEL_FLY_BLOCKS; 
        case MV_KEY_ALLOWED_BLOCKS:
          return MV_LABEL_ALLOWED_BLOCKS;
        case MV_KEY_FORBIDDEN_BLOCKS:
          return MV_LABEL_FORBIDDEN_BLOCKS;
        default:
          return "UNKNOWN";
      }
    }
    
    
    function getTitleByKey($key){
      switch ($key){
        case MV_KEY_NAME:
          return MV_TITLE_NAME;
        case MV_KEY_MIN_SIZE:
          return MV_TITLE_MIN_SIZE;
        case MV_KEY_MAX_SIZE:
          return MV_TITLE_MAX_SIZE;
        case MV_KEY_SPEED:
          return MV_TITLE_SPEED;
        case MV_KEY_TRY_NUDGE:
          return MV_TITLE_TRY_NUDGE;
        case MV_KEY_CAN_FLY:
          return MV_TITLE_CAN_FLY;
        case MV_KEY_CAN_CRUISE:
          return MV_TITLE_CAN_CRUISE;
        case MV_KEY_CRUISE_SKIP_BLOCKS:
          return MV_TITLE_CRUISE_SKIP_BLOCKS;
        case MV_KEY_CAN_TELEPORT:
          return MV_TITLE_CAN_TELEPORT;
        case MV_KEY_CAN_STATIC_MOVE:
            return MV_TITLE_CAN_STATIC_MOVE; 
        case MV_KEY_CAN_HOVER:
          return MV_TITLE_CAN_HOVER;
        case MV_KEY_CAN_HOVER_OVER_WATER:
          return MV_TITLE_CAN_HOVER_OVER_WATER;
        case MV_KEY_USE_GRAVITY:
          return MV_TITLE_USE_GRAVITY;
        case MV_KEY_HOVER_LIMIT:
          return MV_TITLE_HOVER_LIMIT;
        case MV_KEY_SINK_PERCENT:
          return MV_TITLE_SINK_PERCENT;
        case MV_KEY_COLLISION_EXPLOSION:
          return MV_TITLE_COLLISION_EXPLOSION;
        case MV_KEY_FUEL_BURN_RATE:
          return MV_TITLE_FUEL_BURN_RATE;
        case MV_KEY_MIN_HEIGHT_LIMIT: 
          return MV_TITLE_MIN_HEIGHT_LIMIT;
        case MV_KEY_MAX_HEIGHT_LIMIT:
          return MV_TITLE_MAX_HEIGHT_LIMIT;
        case MV_KEY_MOVE_ENTITIES:
          return MV_TITLE_MOVE_ENTITIES;
        case MV_KEY_HARVEST_BLOCKS:
          return MV_TITLE_HARVEST_BLOCKS; 
        case MV_KEY_FLY_BLOCKS:
          return MV_TITLE_FLY_BLOCKS; 
        case MV_KEY_ALLOWED_BLOCKS:
          return MV_TITLE_ALLOWED_BLOCKS;
        case MV_KEY_FORBIDDEN_BLOCKS:
          return MV_TITLE_FORBIDDEN_BLOCKS;
        default:
          return "UNKNOWN";
      }
    }
?>
