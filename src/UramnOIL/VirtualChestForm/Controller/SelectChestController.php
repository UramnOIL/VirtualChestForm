<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;
use uramnoil\virtualinventory\inventory\VirtualChestInventory;

abstract class SelectChestController extends Controller {
	/**
	 * @param  Player  $player
	 * @param  VirtualChestInventory  $chest
	 *
	 * @return mixed
	 */
	public abstract function onSubmit(Player $player, VirtualChestInventory $chest);

	/**
	 * @param  Player  $player
	 */
	public abstract function onClose(Player $player) : void;
}