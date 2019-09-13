<?php


namespace UramnOIL\VirtualChestForm\Form\Button;


use uramnoil\virtualinventory\inventory\PerpetuatedVirtualInventory;

class ChestButton {
	/** @var PerpetuatedVirtualInventory */
	private $chest;

	public function __construct(PerpetuatedVirtualInventory $chest) {
		$this->chest = $chest;
	}

	/**
	 * @return PerpetuatedVirtualInventory
	 */
	public function getChest() : PerpetuatedVirtualInventory {
		return $this->chest;
	}
}