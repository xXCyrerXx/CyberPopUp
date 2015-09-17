<?php

namespace CyberPopUp;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\utils\TextFormat as Color;
use pocketmine\Server;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{
    
    public function onLoad() {
        $this->getLogger()->info(Color::GRAY."Loaded!");
    }
    public function onEnable() {
        $this->getLogger()->info(Color::GREEN."Enabled!");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        $name = $player->getDisplayname();
        
        if ($name == "iAnonymous28") {
            
            $this->getServer()->broadcastPopup(Color::GOLD."Owner iAnonymous28 Has Joined The Server!");
        }
    }
    }
 
    



             
