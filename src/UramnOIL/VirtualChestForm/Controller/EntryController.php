<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;
use UramnOIL\VirtualChestForm\Form\FormFactory;
use UramnOIL\VirtualChestForm\Inventory\TrashBoxInventory;
use uramnoil\virtualinventory\VirtualInventoryAPI;

class EntryController implements Controller {
	public const OPEN_CHEST = 0;
	public const OPEN_TRASH_BOX = 1;
	public const CUSTOMIZE_CHESTS = 2;

	/** @var VirtualInventoryAPI */
	private $api;

	/** @var FormFactory */
	private $factory;

	public function __construct(VirtualInventoryAPI $api) {
		$this->api = $api;
		$this->factory = new FormFactory();
	}

	/**
	 * @param  Player  $player
	 * @param  int  $selected
	 */
	public function onSubmit(Player $player, int $selected) : void {
		switch($selected) {
			case self::OPEN_CHEST:
				$this->api->findByOwner($player, function(array $inventories) use ($player) : void {
					$player->sendForm($this->factory->createSelectChestToOpenForm($inventories));
				});
				break;
			case self::OPEN_TRASH_BOX:
				$player->addWindow(new TrashBoxInventory());
				break;
			case self::CUSTOMIZE_CHESTS:
				$this->api->findByOwner($player, function(array $inventories) use ($player) : void {
					$player->sendForm($this->factory->createSelectChestToCustomizeForm($inventories));
				});
				break;
			default:
				break;
		}
	}
}