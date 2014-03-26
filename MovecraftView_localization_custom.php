<?php
  
  //custom value aliases
  if (!defined("MV_ALIAS_TRUE")) define ("MV_ALIAS_TRUE","yes");
  if (!defined("MV_ALIAS_FALSE")) define ("MV_ALIAS_FALSE","no");
    
  //custom headers 
  define ("MV_LABEL_NAME","Type:");
  define ("MV_LABEL_MIN_SIZE","Min. size:");
  define ("MV_LABEL_MAX_SIZE","Max. size:");
  define ("MV_LABEL_SPEED","Normal speed:");
  define ("MV_LABEL_TRY_NUDGE","Nudge:");
  define ("MV_LABEL_CAN_FLY","Can fly:");
  define ("MV_LABEL_CAN_CRUISE","Can cruise:");
  define ("MV_LABEL_CRUISE_SKIP_BLOCKS","Cruise skip blocks:");
  define ("MV_LABEL_CRUISE_SPEED","Cruise speed:");
  define ("MV_LABEL_CAN_TELEPORT","Can teleport:");
  define ("MV_LABEL_CAN_STATIC_MOVE","Can static move:");
  define ("MV_LABEL_CAN_HOVER","Can hover:");
  define ("MV_LABEL_CAN_HOVER_OVER_WATER","Can hover over water:");
  define ("MV_LABEL_USE_GRAVITY","Using gravity:");
  define ("MV_LABEL_HOVER_LIMIT","Hover limit:");
  define ("MV_LABEL_SINK_PERCENT","Sink percent:");
  define ("MV_LABEL_COLLISION_EXPLOSION","Collision explosion:"); 
  define ("MV_LABEL_FUEL_BURN_RATE","Fuel burn rate:");
  define ("MV_LABEL_MIN_HEIGHT_LIMIT","Min. height limit:");
  define ("MV_LABEL_MAX_HEIGHT_LIMIT","Max. height limit:");
  define ("MV_LABEL_MOVE_ENTITIES","Can move with entities:");
  define ("MV_LABEL_HARVEST_BLOCKS","Destroying:");
  define ("MV_LABEL_FLY_BLOCKS","Fly blocks:");
  define ("MV_LABEL_ALLOWED_BLOCKS","Allowed blocks:");
  define ("MV_LABEL_FORBIDDEN_BLOCKS","Forbidden blocks:");
  
  //custom titles
  define ("MV_TITLE_NAME","Type/Name of the craft");
  define ("MV_TITLE_MIN_SIZE","Minimal size of the craft");
  define ("MV_TITLE_MAX_SIZE","Maximal size of the craft");
  define ("MV_TITLE_SPEED","Maximal speed while holding right mouse button (not cruise)");
  define ("MV_TITLE_TRY_NUDGE","Try nudge");
  define ("MV_TITLE_CAN_FLY","Not waterborn craft (water is detected as barrier");
  define ("MV_TITLE_CAN_CRUISE","Can use cruise");
  define ("MV_TITLE_CRUISE_SKIP_BLOCKS","Count of skiped blocks each move with cruise");
  define ("MV_TITLE_CRUISE_SPEED","cruiseSpeed = Speed * cruiseSkipBlocks");
  define ("MV_TITLE_CAN_TELEPORT","Craft can teleport to any location on the map");
  define ("MV_TITLE_CAN_STATIC_MOVE","Craft can move statically by clicking on sign Move");
  define ("MV_TITLE_CAN_HOVER","Craft can hover over terrain");
  define ("MV_TITLE_CAN_HOVER_OVER_WATER","Craft can fully hover over water");
  define ("MV_TITLE_USE_GRAVITY","Craft goes one block bellow per each move if it is possible.");
  define ("MV_TITLE_HOVER_LIMIT","Limit for hovering and effect of gravity");
  define ("MV_TITLE_SINK_PERCENT","Percents of its required flyblocks when still can move");
  define ("MV_TITLE_COLLISION_EXPLOSION","Power of collision explosion."); 
  define ("MV_TITLE_FUEL_BURN_RATE","Fuel burn rate.");
  define ("MV_TITLE_MIN_HEIGHT_LIMIT","Minimal height limit for the craft.");
  define ("MV_TITLE_MAX_HEIGHT_LIMIT","Maximal height limit for the craft.");
  define ("MV_TITLE_MOVE_ENTITIES","Preventing kamikaze.");
  define ("MV_TITLE_HARVEST_BLOCKS","Block which will be destroyed when craft moves on their possition");
  define ("MV_TITLE_FLY_BLOCKS","Blocks necessary to fly/move");
  define ("MV_TITLE_ALLOWED_BLOCKS","List of allowed blocks.");
  define ("MV_TITLE_FORBIDDEN_BLOCKS","List of forbidden blocks.Craft can not be activated while is connected to them.");

  define ("MV_TITLE_VIEW_LIST"," - view list - ");  
?>
