<?php


namespace UramnOIL\VirtualChestForm\Form;


use Frago9876543210\EasyForms\forms\MenuForm;
use pocketmine\block\Button;
use pocketmine\Player;
use UramnOIL\VirtualChestForm\Controller\SelectChestController;
use UramnOIL\VirtualChestForm\Form\Button\ChestButton;

class SelectChestForm extends MenuForm {
	public function __construct(array $inventories, SelectChestController $controller) {
		$title = "VirtualChestForm";
		$content = "チェストを選択してください";
		$buttons = [];
		foreach($inventories as $inventory) {
			$buttons[] = new ChestButton($inventory);
		}

		$onSubmit = function(Player $player, Button $selected) use ($controller) : void {
			if(!$selected instanceof ChestButton) {
				throw new FormException();
			}

			$controller->onSubmit($player, $selected->getChest());
		};
		$onClose = function(Player $player) use ($controller) : void {
			$controller->onClose($player);
		};

		parent::__construct($title, $content, $buttons, $onSubmit, $onClose);
	}
}