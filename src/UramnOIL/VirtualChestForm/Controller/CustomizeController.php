<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;
use uramnoil\virtualinventory\inventory\PerpetuatedVirtualInventory;

class CustomizeController extends Controller {
	public const COMMAND_TITLE_RENAME = 0;
	public const COMMAND_DELETE = 1;

	public function onSubmit(Player $player, PerpetuatedVirtualInventory $inventory, int $command) : void {
		switch($command) {
			case self::COMMAND_TITLE_RENAME:
				$player->sendForm($this->factory->createRenameForm($inventory));
				break;
			case self::COMMAND_DELETE:
				break;
			default:

		}
	}
}