<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;
use uramnoil\virtualinventory\inventory\VirtualChestInventory;

interface SelectChestController extends Controller {
	/**
	 * @param  Player  $player
	 * @param  VirtualChestInventory  $chest
	 *
	 * @return mixed
	 */
	public function onSubmit(Player $player, VirtualChestInventory $chest);

	/**
	 * @param  Player  $player
	 */
	public function onClose(Player $player) : void;
}