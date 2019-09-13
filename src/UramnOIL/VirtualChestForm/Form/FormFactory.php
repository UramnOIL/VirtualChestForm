<?php


namespace UramnOIL\VirtualChestForm\Form;


use UramnOIL\VirtualChestForm\Controller\CustomizeController;
use UramnOIL\VirtualChestForm\Controller\EntryController;
use UramnOIL\VirtualChestForm\Controller\RenameController;
use UramnOIL\VirtualChestForm\Controller\SelectChestToCustomizeController;
use UramnOIL\VirtualChestForm\Controller\SelectChestToOpenController;
use uramnoil\virtualinventory\inventory\PerpetuatedVirtualInventory;
use uramnoil\virtualinventory\VirtualInventoryAPI;

class FormFactory {
	/** @var VirtualInventoryAPI */
	private $api;

	public function __construct(VirtualInventoryAPI $api) {
		$this->api = $api;
	}

	/**
	 * @return EntryForm
	 */
	public function createEntryForm() : EntryForm {
		return new EntryForm(new EntryController($this->api, $this));
	}

	/**
	 * @param  PerpetuatedVirtualInventory[]  $chests
	 *
	 * @return SelectChestForm
	 */
	public function createSelectChestToOpenForm(array $chests) : SelectChestForm {
		return new SelectChestForm($chests, new SelectChestToOpenController($this->api, $this));
	}

	/**
	 * @param  PerpetuatedVirtualInventory[]  $chests
	 *
	 * @return SelectChestForm
	 */
	public function createSelectChestToCustomizeForm(array $chests) : SelectChestForm {
		return new SelectChestForm($chests, new SelectChestToCustomizeController($this->api, $this));
	}

	public function createCustomizeForm(PerpetuatedVirtualInventory $chest) : CustomizeForm {
		return new CustomizeForm($chest, new CustomizeController($this->api, $this));
	}

	public function createRenameForm(PerpetuatedVirtualInventory $inventory) : RenameForm {
		return new RenameForm($inventory, new RenameController($this->api, $this));
	}
}