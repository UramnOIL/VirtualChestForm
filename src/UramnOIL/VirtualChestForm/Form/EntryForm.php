<?php


namespace UramnOIL\VirtualChestForm\Form;


use Frago9876543210\EasyForms\elements\Button;
use Frago9876543210\EasyForms\forms\MenuForm;
use pocketmine\Player;
use UramnOIL\VirtualChestForm\Controller\EntryController;
use UramnOIL\VirtualChestForm\Form\Button\EntryButton;

class EntryForm extends MenuForm {

	public function __construct(EntryController $controller) {
		$title = "VirtualChestForm";
		$content = "";
		$buttons = [
			new EntryButton(EntryController::OPEN_CHEST, "チェストを開く"),
			new EntryButton(EntryController::CUSTOMIZE_CHESTS, "カスタマイズ"),
		];

		$onSubmit = function(Player $player, Button $button) use ($controller) : void {
			if(!$button instanceof EntryButton) {
				throw new FormException();
			}
			$controller->onSubmit($player, $button->getId());
		};
		$onClose = null;

		parent::__construct($title, $content, $buttons, $onSubmit, $onClose);
	}
}