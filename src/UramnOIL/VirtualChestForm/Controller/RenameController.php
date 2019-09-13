<?php


namespace UramnOIL\VirtualChestForm\Controller;


use uramnoil\virtualinventory\inventory\PerpetuatedVirtualInventory;

class RenameController extends Controller {
	public function onSubmit(PerpetuatedVirtualInventory $inventory, string $rename) : void {
		$inventory->setTitle($rename);
	}
}