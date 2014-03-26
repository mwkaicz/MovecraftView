<?php
  
  //custom value aliases
  if (!defined("MV_ALIAS_TRUE")) define ("MV_ALIAS_TRUE","ano");
  if (!defined("MV_ALIAS_FALSE")) define ("MV_ALIAS_FALSE","ne");
    
  //custom headers 
  define ("MV_LABEL_NAME","Typ:");
  define ("MV_LABEL_MIN_SIZE","Min. velikost:");
  define ("MV_LABEL_MAX_SIZE","Max. velikost:");
  define ("MV_LABEL_SPEED","Normální rycholost:");
  define ("MV_LABEL_TRY_NUDGE","Nudge:");
  define ("MV_LABEL_CAN_FLY","Létá:");
  define ("MV_LABEL_CAN_CRUISE","Tempomat:");
  define ("MV_LABEL_CRUISE_SKIP_BLOCKS","Skok tempomatu:");
  define ("MV_LABEL_CRUISE_SPEED","Rychlost tempomatu:");
  define ("MV_LABEL_CAN_TELEPORT","Teleportace:");
  define ("MV_LABEL_CAN_STATIC_MOVE","Staticky pohyb:");
  define ("MV_LABEL_CAN_HOVER","Vznášení:");
  define ("MV_LABEL_CAN_HOVER_OVER_WATER","Vznášení nad vodou:");
  define ("MV_LABEL_USE_GRAVITY","Gravitace:");
  define ("MV_LABEL_HOVER_LIMIT","Limit vznášení:");
  define ("MV_LABEL_SINK_PERCENT","Rozpadá se pod %:");
  define ("MV_LABEL_COLLISION_EXPLOSION","Síla exploze:"); 
  define ("MV_LABEL_FUEL_BURN_RATE","Spotřeba:");
  define ("MV_LABEL_MIN_HEIGHT_LIMIT","Min. výškový limit:");
  define ("MV_LABEL_MAX_HEIGHT_LIMIT","Max. výškový limit:");
  define ("MV_LABEL_MOVE_ENTITIES","Pohyb entit:");
  define ("MV_LABEL_HARVEST_BLOCKS","Ničí:");
  define ("MV_LABEL_FLY_BLOCKS","Nezbytné bloky:");
  define ("MV_LABEL_ALLOWED_BLOCKS","Povolené bloky:");
  define ("MV_LABEL_FORBIDDEN_BLOCKS","Zakázané bloky:");
  
  //custom titles
  define ("MV_TITLE_NAME","Typ/Název stroje");
  define ("MV_TITLE_MIN_SIZE","Minimální velikost stroje");
  define ("MV_TITLE_MAX_SIZE","Maximální velikost stroje");
  define ("MV_TITLE_SPEED","Maximální rychlost při držení pravého tlačítka myši (ne tempomatu)");
  define ("MV_TITLE_TRY_NUDGE","Zkusit nudge");
  define ("MV_TITLE_CAN_FLY","Může létat = není loď (rozlišuje se kvůli obtékání vodou)");
  define ("MV_TITLE_CAN_CRUISE","Může mít tempomat");
  define ("MV_TITLE_CRUISE_SKIP_BLOCKS","Počet přeskočených kostek při každém kroku tempomatu");
  define ("MV_TITLE_CRUISE_SPEED","Rychlost tempomatu = Rychlost * Skok tempomatu");
  define ("MV_TITLE_CAN_TELEPORT","Stroj se může teleportovat na libovolnou lokaci na mapě");
  define ("MV_TITLE_CAN_STATIC_MOVE","Stroj se může staticky pohybovat klikáním na ceduli Move");
  define ("MV_TITLE_CAN_HOVER","Stroj se může vznášet nad terénem");
  define ("MV_TITLE_CAN_HOVER_OVER_WATER","Stroj se může vznášet nad vodou");
  define ("MV_TITLE_USE_GRAVITY","Na stroj platí gravitace a při každém pohybu klesá o jednu kostku.");
  define ("MV_TITLE_HOVER_LIMIT","Limit pro vznášení a gravitaci");
  define ("MV_TITLE_SINK_PERCENT","Procenta z celkového počtu Nezbytných bloků, pokud počet klesne pod tuto úroveň stroj se rozpadne");
  define ("MV_TITLE_COLLISION_EXPLOSION","Síla exploze při kolizi."); 
  define ("MV_TITLE_FUEL_BURN_RATE","Spotřeba paliva.");
  define ("MV_TITLE_MIN_HEIGHT_LIMIT","Minimální výškový limit pro stroj.");
  define ("MV_TITLE_MAX_HEIGHT_LIMIT","Maximální výškový limit pro stroj.");
  define ("MV_TITLE_MOVE_ENTITIES","Prevence proti pilotům kamikaze.");
  define ("MV_TITLE_HARVEST_BLOCKS","Bloky které zmizí, pokud stroj najede na jejich pozici.");
  define ("MV_TITLE_FLY_BLOCKS","Nezbytné bloky pro pohyb stroje");
  define ("MV_TITLE_ALLOWED_BLOCKS","Seznam povolených bloků.");
  define ("MV_TITLE_FORBIDDEN_BLOCKS","Seznam zakázaných bloků. Stroj nemůže být aktivován, pokud se jich dotýká");
  
  define ("MV_TITLE_VIEW_LIST"," - seznam - ");  
?>
