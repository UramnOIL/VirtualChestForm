<?php


namespace UramnOIL\VirtualChestForm\Inventory;


use pocketmine\Player;
use uramnoil\virtualinventory\inventory\VirtualDoubleChestInventory;

class TrashCanInventory extends VirtualDoubleChestInventory {
	public function __construct() {
		parent::__construct([], null, "ゴミ箱");
	}

	public function onOpen(Player $who) : void {
		if(count($this->getViewers()) >= 1) {
			return;
		}
		parent::onOpen($who);
	}

	public function close(Player $who) : void {
		parent::close($who);
		$this->setContents([]);
	}
}