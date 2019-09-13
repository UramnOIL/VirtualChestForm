<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;
use UramnOIL\VirtualChestForm\Inventory\TrashCanInventory;

class EntryController extends Controller {
	public const COMMAND_OPEN_CHEST = 0;
	public const COMMAND_OPEN_TRASH_CAN = 1;
	public const COMMAND_CUSTOMIZE_CHESTS = 2;

	/**
	 * @param  Player  $player
	 * @param  int  $selected
	 */
	public function onSubmit(Player $player, int $selected) : void {
		switch($selected) {
			case self::COMMAND_OPEN_CHEST:
				$this->api->findByOwner($player, function(array $inventories) use ($player) : void {
					$player->sendForm($this->factory->createSelectChestToOpenForm($inventories));
				});
				break;
			case self::COMMAND_OPEN_TRASH_CAN:
				$player->addWindow(new TrashCanInventory());
				break;
			case self::COMMAND_CUSTOMIZE_CHESTS:
				$player->sendForm($this->factory->createCustomizeForm());
				break;
			default:
				break;
		}
	}
}