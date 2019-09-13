<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;
use UramnOIL\VirtualChestForm\Form\FormFactory;
use uramnoil\virtualinventory\inventory\PerpetuatedVirtualInventory;
use uramnoil\virtualinventory\VirtualInventoryAPI;

class SelectChestToCustomizeController extends SelectChestController {
	/**
	 * @var int
	 */
	private $command;

	public function __construct(int $command, VirtualInventoryAPI $api, FormFactory $factory) {
		$this->command = $command;
		parent::__construct($api, $factory);
	}

	public function onSubmit(Player $player, PerpetuatedVirtualInventory $inventory) : void {
		switch($this->command) {
			case CustomizeController::COMMAND_TITLE_RENAME:
				$player->sendForm($this->factory->createRenameForm($inventory));
				break;
			case CustomizeController::COMMAND_DELETE:
				$player->sendForm($this->factory->createDeleteForm($inventory));
				break;
			case CustomizeController::COMMAND_CREATE:
				$player->sendForm();
			default:
		}
	}

	public function onClose(Player $player) : void {
		$player->sendForm($this->factory->createEntryForm());
	}
}