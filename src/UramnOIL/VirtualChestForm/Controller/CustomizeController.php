<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;

class CustomizeController extends Controller {
	public const COMMAND_TITLE_RENAME = 0;
	public const COMMAND_DELETE = 1;
	public const COMMAND_CREATE = 2;

	public function onSubmit(Player $player, int $command) : void {
		$this->api->findByOwner($player, function(array $inventories) use ($player, $command) : void {
			$player->sendForm($this->factory->createSelectChestToCustomizeForm($inventories, $command));
		});
	}

	public function onClose(Player $player) {
		$player->sendForm($this->factory->createEntryForm());
	}
}