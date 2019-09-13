<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;
use uramnoil\virtualinventory\inventory\PerpetuatedVirtualInventory;

class CreateController extends Controller {
	public function onSubmit(Player $player, int $type, string $title) : void {
		$this->api->new($player, $type, $title, function(PerpetuatedVirtualInventory $inventory) use ($player) : void {
			$player->sendForm($this->factory->createCustomizeForm());
		});
	}

	public function onClose(Player $player) : void {
		$player->sendForm($this->factory->createCustomizeForm());
	}
}