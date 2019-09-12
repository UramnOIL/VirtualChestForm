<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;

class VirtualChestEntryController implements Controller {
	public function onSubmit(Player $player, int $selected) : void {
		switch($selected) {
			default:
				return;
		}
	}
}