<?php

namespace UramnOIL\VirtualChestForm;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use UramnOIL\VirtualChestForm\Command\EntryFormCommand;
use UramnOIL\VirtualChestForm\Form\FormFactory;
use uramnoil\virtualinventory\VirtualInventoryPlugin;

class VirtualChestFormPlugin extends PluginBase {
	/** @var FormFactory */
	private $factory;

	public function onEnable() {
		/** @var VirtualInventoryPlugin $plugin */
		$plugin = Server::getInstance()->getPluginManager()->getPlugin('VirtualInventoryPlugin');
		$this->factory = new FormFactory($plugin->getAPI());
		$this->getServer()->getCommandMap()->register("VirtualChestForm", new EntryFormCommand($this));
	}

	public function getFormFactory() : FormFactory {
		return $this->factory;
	}
}