<?php

namespace Savion;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\event\player\PlayerItemConsumeEvent;
use pocketmine\entity\Effect;

class Main extends PluginBase implements Listener {

public function onEnable(){
	$this->getServer()->getPluginManager()->registerEvents($this,$this);
	$this->getServer()->getLogger()->info("Activated");
}

public function eat(PlayerItemConsumeEvent $ev){

   $p=$ev->getPlayer();

   if($ev->getItem()->getId() === 322){

   $p->addEffect(Effect::getEffect(10)->setAmplifier(1)->setDuration(100)->setVisible(true));

    }
 }
}
