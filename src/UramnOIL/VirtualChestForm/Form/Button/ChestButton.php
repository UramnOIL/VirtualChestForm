<?php


namespace UramnOIL\VirtualChestForm\Form\Button;


use uramnoil\virtualinventory\inventory\VirtualChestInventory;

class ChestButton {
	/** @var VirtualChestInventory */
	private $chest;

	public function __construct(VirtualChestInventory $chest) {
		$this->chest = $chest;
	}

	/**
	 * @return VirtualChestInventory
	 */
	public function getChest() : VirtualChestInventory {
		return $this->chest;
	}
}