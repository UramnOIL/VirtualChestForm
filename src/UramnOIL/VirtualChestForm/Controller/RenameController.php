<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;
use uramnoil\virtualinventory\inventory\PerpetuatedVirtualInventory;

class RenameController extends Controller {
	public function onSubmit(Player $player, PerpetuatedVirtualInventory $inventory, string $rename) : void {
		$inventory->setTitle($rename);
		$player->sendForm($this->factory->createCustomizeForm());
	}

	public function onClose(Player $player) {
		$player->sendForm($this->factory->createCustomizeForm());
	}
}