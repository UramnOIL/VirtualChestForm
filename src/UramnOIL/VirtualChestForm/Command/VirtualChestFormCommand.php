<?php


namespace UramnOIL\VirtualChestForm\Command;


use pocketmine\command\PluginCommand;
use pocketmine\plugin\Plugin;

class VirtualChestFormCommand extends PluginCommand {
	public function __construct(Plugin $owner) {
		$name = 'virtualchestform';
		parent::__construct($name, $owner);
		$this->setAliases(['vc', 'vcf']);
		$this->setPermission();
	}
}