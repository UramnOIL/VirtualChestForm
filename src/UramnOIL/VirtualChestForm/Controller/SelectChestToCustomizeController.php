<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;
use UramnOIL\VirtualChestForm\Form\FormFactory;
use uramnoil\virtualinventory\inventory\VirtualChestInventory;
use uramnoil\virtualinventory\VirtualInventoryAPI;

class SelectChestToCustomizeController implements SelectChestController {
	/** @var VirtualInventoryAPI */
	private $api;
	private $factory;

	public function __construct(VirtualInventoryAPI $api) {
		$this->api = $api;
		$this->factory = new FormFactory();
	}

	public function onSubmit(Player $player, VirtualChestInventory $chest) : void {
		$player->addWindow($chest);
	}

	public function onClose(Player $player) : void {
		$player->sendForm($this->factory->createEntryForm());
	}

}