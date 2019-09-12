<?php


namespace UramnOIL\VirtualChestForm\Command;


use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\Player;
use UramnOIL\VirtualChestForm\VirtualChestFormPlugin;

class EntryFormCommand extends PluginCommand {
	protected $factory;

	public function __construct(VirtualChestFormPlugin $owner) {
		$this->factory = $owner->getFormFactory();
		$name = 'virtualchestform';
		parent::__construct($name, $owner);
		$this->setAliases(['vc', 'vcf']);
		$this->setPermission('virtualchestform.command.openform');
	}

	public function execute(CommandSender $sender, string $commandLabel, array $args) {
		$this->testPermission($sender);
		if($sender instanceof Player) {
			$sender->sendForm($this->factory->createEntryForm());
		}
	}
}