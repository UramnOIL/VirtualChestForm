<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;
use uramnoil\virtualinventory\inventory\PerpetuatedVirtualInventory;

class SelectChestToCustomizeController extends SelectChestController {
	public function onSubmit(Player $player, PerpetuatedVirtualInventory $chest) : void {
		$player->sendForm($this->factory->createCustomizeForm($chest));
	}

	public function onClose(Player $player) : void {
		$player->sendForm($this->factory->createEntryForm());
	}
}