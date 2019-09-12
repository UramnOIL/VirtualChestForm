<?php

namespace UramnOIL\VirtualChestForm;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use UramnOIL\VirtualChestForm\Form\FormFactory;
use uramnoil\virtualinventory\VirtualInventoryPlugin;

class VirtualChestFormPlugin extends PluginBase {
	/** @var FormFactory */
	private $factory;

	public function onEnable() {
		/** @var VirtualInventoryPlugin $plugin */
		$plugin = Server::getInstance()->getPluginManager()->getPlugin('VirtualInventoryPlugin');
		$this->factory = new FormFactory($plugin->getAPI());
	}

	public function getFormFactory() : FormFactory {
		return $this->factory;
	}
}