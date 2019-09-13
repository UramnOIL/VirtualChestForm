<?php


namespace UramnOIL\VirtualChestForm\Form;


use Frago9876543210\EasyForms\elements\Input;
use Frago9876543210\EasyForms\forms\CustomForm;
use Frago9876543210\EasyForms\forms\CustomFormResponse;
use pocketmine\Player;
use UramnOIL\VirtualChestForm\Controller\RenameController;
use uramnoil\virtualinventory\inventory\PerpetuatedVirtualInventory;

class RenameForm extends CustomForm {
	public function __construct(PerpetuatedVirtualInventory $inventory, RenameController $controller) {
		$title = "VirtualChestForm";
		$elements = [
			new Input("新しいチェストの名称", $inventory->getTitle()),
		];

		$onSubmit = function(Player $player, CustomFormResponse $response) use ($inventory, $controller) : void {
			$controller->onSubmit($player, $inventory, $response->getInput()->getValue());
		};
		$onClose = function(Player $player) use ($controller) : void {
			$controller->onClose($player);
		};
		parent::__construct($title, $elements, $onSubmit, $onClose);
	}
}