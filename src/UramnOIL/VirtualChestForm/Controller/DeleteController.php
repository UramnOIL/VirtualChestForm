<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;
use uramnoil\virtualinventory\inventory\PerpetuatedVirtualInventory;

class DeleteController extends Controller {
	public function onSubmit(Player $player, PerpetuatedVirtualInventory $inventory, bool $response) : void {
		if($response) {
			$this->api->delete($inventory, null);
			$player->sendForm($this->factory->createCustomizeForm());
		} else {
			$this->api->findByOwner($player, function(array $inventories) use ($player) : void {
				$player->sendForm($this->factory->createSelectChestToCustomizeForm($inventories, CustomizeController::COMMAND_DELETE));
			});
		}
	}
}