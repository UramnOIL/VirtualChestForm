<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;
use uramnoil\virtualinventory\inventory\PerpetuatedVirtualInventory;

class SelectChestToOpenController extends SelectChestController {

	public function onSubmit(Player $player, PerpetuatedVirtualInventory $chest) : void {
		$player->addWindow($chest);
	}

	public function onClose(Player $player) : void {
		$player->sendForm($this->factory->createEntryForm());
	}
}