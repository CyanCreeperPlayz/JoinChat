<?php

namespace JoinChat;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements Listener{

	public function onEnable(){
		$this->getServer()->getLogger()->info("JoinMessage enabled!");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onDisable(){
		$this->getServer()->getLogger()->info("JoinMessage disabled!");
	}

	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
		$player->sendMessage("Welcome to ParadiseCraft! Hope you enjoy your visit!");
	}
}