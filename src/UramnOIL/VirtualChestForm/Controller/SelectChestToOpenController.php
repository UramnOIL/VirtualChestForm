<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;
use uramnoil\virtualinventory\inventory\PerpetuatedVirtualInventory;

class SelectChestToOpenController extends SelectChestController {

	public function onSubmit(Player $player, PerpetuatedVirtualInventory $inventory) : void {
		$player->addWindow($inventory);
	}

	public function onClose(Player $player) : void {
		$player->sendForm($this->factory->createEntryForm());
	}
}