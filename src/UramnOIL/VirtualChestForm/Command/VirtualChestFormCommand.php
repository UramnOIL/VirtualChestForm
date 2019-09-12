<?php


namespace UramnOIL\VirtualChestForm\Command;


use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\plugin\Plugin;

class OpenFormCommand extends PluginCommand {
	public function __construct(Plugin $owner) {
		$name = 'virtualchestform';
		parent::__construct($name, $owner);
		$this->setAliases(['vc', 'vcf']);
		$this->setPermission('virtualchestform.command.openform');
	}

	public function execute(CommandSender $sender, string $commandLabel, array $args) {
		$this->testPermission($sender);
	}
}