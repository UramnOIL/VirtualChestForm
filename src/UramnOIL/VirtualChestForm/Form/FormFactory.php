<?php


namespace UramnOIL\VirtualChestForm\Form;


use pocketmine\Server;
use UramnOIL\VirtualChestForm\Controller\EntryController;
use UramnOIL\VirtualChestForm\Controller\SelectChestToCustomizeController;
use UramnOIL\VirtualChestForm\Controller\SelectChestToOpenController;
use uramnoil\virtualinventory\VirtualInventoryAPI;
use uramnoil\virtualinventory\VirtualInventoryPlugin;

class FormFactory {
	/** @var VirtualInventoryAPI */
	private $api;

	public function __construct() {
		/** @var VirtualInventoryPlugin $plugin */
		$plugin = Server::getInstance()->getPluginManager()->getPlugin('VirtualInventoryPlugin');
		$this->api = $plugin->getAPI();
	}

	/**
	 * @return EntryForm
	 */
	public function createEntryForm() : EntryForm {
		return new EntryForm(new EntryController($this->api));
	}

	/**
	 * @param  array  $chests
	 *
	 * @return SelectChestForm
	 */
	public function createSelectChestToOpenForm(array $chests) : SelectChestForm {
		return new SelectChestForm($chests, new SelectChestToOpenController($this->api));
	}

	/**
	 * @param  array  $chests
	 *
	 * @return SelectChestForm
	 */
	public function createSelectChestToCustomizeForm(array $chests) : SelectChestForm {
		return new SelectChestForm($chests, new SelectChestToCustomizeController($this->api));
	}
}