<?php

namespace TpAll;

use pocketmine\plugin\PluginBase as PB;
use pocketmine\event\Listener as L;

use pocketmine\Player;

use pocketmine\entity\Entity;

use pocketmine\Server;

use pockemine\level\sound\AnvilUseSound;

use pocketmine\command\ConsoleCommandSender;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\math\Vector3;
use pocketmine\level\{Position, Location};
use pocketmine\level\Level;

class TpAll extends PB implements L{
    
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);      
		$this->getLogger()->info("§bCreated By Skiddy");
	}
	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
          switch($command->getName()){
               case "teleportall":
               if($sender->hasPermission("tpall.p")){ #Check Player If Player Has Perms UwU
               foreach($this->getServer()->getOnlinePlayers() as $players){                     
                $players->teleport($sender->getPosition()); //Teleporting Players to Sender Position
                $sender->sendMessage("§8[§bTeleport-All§8] §aYou Teleported All Players To You!"); //Sending Message To The Sender
                $sender->getLevel()->addSound((new \pocketmine\level\sound\AnvilUseSound($sender)), [$sender]); //Sending Sound To Sender Not Necessary But Cool
                return true;               
               }
              }
            }
         }
      }
  
