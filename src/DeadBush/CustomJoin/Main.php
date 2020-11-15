<?php

namespace DeadBush\CustomJoin;

use pocketmine\plugin\pluginBase;

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\event\player\PlayerQuitEvent;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("Plugin Enabled");
    }
    public function onJoin(PlayerJoinEvent $event){
    $player = $event->getPlayer();  //This gets the player
    $name = $player->getName();  //Gets the Name of the player

    $this->getServer()->broadcastMessage("§a[§4+§a]§6 $name §eis online");

   }
   
    public function onQuit(PlayerQuitEvent $event){
	$player = $event->getPlayer();  //This gets the player
    $name = $player->getName();  //Gets the Name of the player

    $this->getServer()->broadcastMessage("§a[§4-§a]§6 $name §eis offline");
   }
}