<?php 
namespace first;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
class Test extends PluginBase implements Listener{
	public function onCommand(CommandSender $player,Command $command,string $label,array $args): bool{
	switch ($command->getName()){
		case "lol":
			$player->sendMessage("dddd");
	}
	return true;
	}
}

?>