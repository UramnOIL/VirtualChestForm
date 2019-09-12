<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;
use UramnOIL\VirtualChestForm\Form\VirtualChestEntryForm;
use uramnoil\virtualinventory\inventory\VirtualChestInventory;

class SelectChestController {
	public function onSubmit(Player $player, VirtualChestInventory $chest) : void {
		$player->addWindow($chest);
	}

	public function onClose(Player $player) : void {
		$player->sendForm(new VirtualChestEntryForm());
	}
}