<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;
use uramnoil\virtualinventory\inventory\VirtualChestInventory;

class SelectChestController {
	public function onSubmit(Player $player, VirtualChestInventory $chest) : void {
		$player->addWindow($chest);
	}
}