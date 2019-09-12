<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;
use uramnoil\virtualinventory\inventory\VirtualChestInventory;

class SelectChestToOpenController extends SelectChestController {

	public function onSubmit(Player $player, VirtualChestInventory $chest) : void {
		$player->addWindow($chest);
	}

	public function onClose(Player $player) : void {
		$player->sendForm($this->factory->createEntryForm());
	}
}