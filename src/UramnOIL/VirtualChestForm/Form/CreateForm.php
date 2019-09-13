<?php


namespace UramnOIL\VirtualChestForm\Form;


use Frago9876543210\EasyForms\elements\Input;
use Frago9876543210\EasyForms\elements\StepSlider;
use Frago9876543210\EasyForms\forms\CustomForm;
use Frago9876543210\EasyForms\forms\CustomFormResponse;
use pocketmine\Player;
use UramnOIL\VirtualChestForm\Controller\CreateController;
use uramnoil\virtualinventory\repository\InventoryIds;

class CreateForm extends CustomForm {
	public function __construct(CreateController $controller) {
		$title = "VirtualChestForm";
		$elements = [
			new Input("チェストの名称", ""),
			new StepSlider("チェストの種類", [InventoryIds::INVENTORY_TYPE_CHEST => "ノーマルチェスト", InventoryIds::INVENTORY_TYPE_DOUBLE_CHEST => "ラージチェスト"]),
		];

		$onSubmit = function(Player $player, CustomFormResponse $response) use ($controller) : void {
			$title = $response->getInput()->getValue();
			$type = $response->getStepSlider()->getValue();
			$controller->onSubmit($player, $type, $title);
		};
		$onClose = function(Player $player) use ($controller): void {
			$controller->onClose($player);
		};
		parent::__construct($title, $elements, $onSubmit, $onClose);
	}
}