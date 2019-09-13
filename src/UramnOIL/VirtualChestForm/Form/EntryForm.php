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
			new EntryButton(EntryController::COMMAND_OPEN_CHEST, "チェストを開く"),
			new EntryButton(EntryController::COMMAND_CUSTOMIZE_CHESTS, "カスタマイズ"),
			new EntryButton(EntryController::COMMAND_OPEN_TRASH_CAN, "ゴミ箱を開く"),
		];

		$onSubmit = function(Player $player, Button $button) use ($controller) : void {
			if(!$button instanceof EntryButton) {
				throw new FormException();
			}
			$controller->onSubmit($player, $button->getCommand());
		};
		$onClose = null;

		parent::__construct($title, $content, $buttons, $onSubmit, $onClose);
	}
}