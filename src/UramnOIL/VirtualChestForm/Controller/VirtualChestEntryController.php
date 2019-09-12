<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;

class VirtualChestEntryController implements Controller {
	public const OPEN_CHEST = 0;
	public const CUSTOMIZE_CHESTS = 1;
	public function onSubmit(Player $player, int $selected) : void {
		switch($selected) {
			case self::OPEN_CHEST:
				break;
			case self::CUSTOMIZE_CHESTS:
				break;
			default:
				break;
		}
	}
}