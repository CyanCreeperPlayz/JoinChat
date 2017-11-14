<?php

namespace JoinChat;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\PlayerJoinEvent;

class Main extends PluginBase implements Listener{

	public function onEnable(){
		$this->getserver()->getLogger()->info("JoinMessage enabled!");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onDisable(){
		$this->getserver()->getLogger()->info("JoinMessage disabled!");
	}

	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
		$player->sendMessage("Welcome to ParadiseCraft! Hope you enjoy your visit!");
	}
}
