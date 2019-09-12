<?php


namespace UramnOIL\VirtualChestForm\Form;


use Frago9876543210\EasyForms\forms\MenuForm;
use pocketmine\block\Button;
use pocketmine\Player;
use UramnOIL\VirtualChestForm\Controller\SelectChestController;
use UramnOIL\VirtualChestForm\Form\Button\ChesButton;

class SelectChestForm extends MenuForm {
	public function __construct(array $chests, SelectChestController $controller) {
		$title = "VirtualChestForm";
		$content = "チェストを選択してください";
		$buttons = [];
		foreach($chests as $chest) {
			$buttons[] = new ChesButton($chest);
		}

		$onSubmit = function(Player $player, Button $selected) use ($controller) : void {
			if(!$selected instanceof ChesButton) {
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